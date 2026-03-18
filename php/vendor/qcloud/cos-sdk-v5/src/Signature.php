<?php

namespace Qcloud\Cos;

use Psr\Http\Message\RequestInterface;

class Signature {
    // string: access key.
    private $accessKey;

    // string: secret key.
    private $secretKey;

    // array: cos config.
    private $options;

    // string: token.
    private $token;

    // array: sign header.
    private $signHeader;

    public function __construct( $accessKey, $secretKey, $options, $token = null ) {
        $this->accessKey = $accessKey;
        $this->secretKey = $secretKey;
        $this->options = $options;
        $this->token = $token;
        $this->signHeader = [
            'cache-control',
            'content-disposition',
            'content-encoding',
            'content-length',
            'content-md5',
            'content-type',
            'expires',
            'host',
            'if-match',
            'if-modified-since',
            'if-none-match',
            'if-unmodified-since',
            'origin',
            'range',
            'transfer-encoding',
            'pic-operations',
        ];
        date_default_timezone_set($this->options['timezone']);
    }

    public function __destruct() {
    }

    public function needCheckHeader( $header ) {
        if ( startWith( $header, 'x-cos-' ) ) {
            return true;
        }
        if ( in_array( $header, $this->signHeader ) ) {
            return true;
        }
        return false;
    }

    public function signRequest( RequestInterface $request ) {
        $authorization = $this->createAuthorization( $request );
        return $request->withHeader( 'Authorization', $authorization );
    }

    public function createAuthorization( RequestInterface $request, $expires = '+30 minutes' ) {
        if ( is_null( $expires ) || !strtotime( $expires )) {
            $expires = '+30 minutes';
        }
        $signTime = ( string )( time() - 60 ) . ';' . ( string )( strtotime( $expires ) );
        $urlParamListArray = [];
        foreach ( explode( '&', $request->getUri()->getQuery() ) as $query ) {
            if (!empty($query)) {
                $tmpquery = explode( '=', $query );
                //为了保证CI的key中有=号的情况也能正常通过，ci在这层之前已经encode了，这里需要拆开重新encode，防止上方explode拆错
                $key = strtolower( rawurlencode(urldecode($tmpquery[0])) );
                if (count($tmpquery) >= 2) {
                    $value = $tmpquery[1];
                } else {
                    $value = "";
                }
                //host开关
                if (!$this->options['signHost'] && $key == 'host') {
                    continue;
                }
                $urlParamListArray[$key] = $key. '='. $value;
            }
        }
        ksort($urlParamListArray);
        $urlParamList = join(';', array_keys($urlParamListArray));
        $httpParameters = join('&', array_values($urlParamListArray));

        $headerListArray = [];
        foreach ( $request->getHeaders() as $key => $value ) {
            $key = strtolower( urlencode( $key ) );
            $value = rawurlencode( $value[0] );
            if ( !$this->options['signHost'] && $key == 'host' ) {
                continue;
            }
            if ( $this->needCheckHeader( $key ) ) {
                $headerListArray[$key] = $key. '='. $value;
            }
        }
        ksort($headerListArray);
        $headerList = join(';', array_keys($headerListArray));
        $httpHeaders = join('&', array_values($headerListArray));
        $httpString = strtolower( $request->getMethod() ) . "\n" . urldecode( $request->getUri()->getPath() ) . "\n" . $httpParameters.
        "\n". $httpHeaders. "\n";
        $sha1edHttpString = sha1( $httpString );
        $stringToSign = "sha1\n$signTime\n$sha1edHttpString\n";
        $signKey = hash_hmac( 'sha1', $signTime, trim($this->secretKey) );
        $signature = hash_hmac( 'sha1', $stringToSign, $signKey );
        $authorization = 'q-sign-algorithm=sha1&q-ak='. trim($this->accessKey) .
        "&q-sign-time=$signTime&q-key-time=$signTime&q-header-list=$headerList&q-url-param-list=$urlParamList&" .
        "q-signature=$signature";
        return $authorization;
    }

    public function createPresignedUrl( RequestInterface $request, $expires = '+30 minutes' ) {
        $authorization = $this->createAuthorization( $request, $expires);
        $uri = $request->getUri();
        $query = 'sign='.urlencode( $authorization ) . '&' . $uri->getQuery();
        if ( $this->token != null ) {
            $query = $query.'&x-cos-security-token='.$this->token;
        }
        $uri = $uri->withQuery( $query );
        return $uri;
    }
}
