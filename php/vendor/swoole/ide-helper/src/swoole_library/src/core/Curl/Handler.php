<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

/* @noinspection PhpComposerExtensionStubsInspection, PhpDuplicateSwitchCaseBodyInspection, PhpInconsistentReturnPointsInspection */

declare(strict_types=1);

namespace Swoole\Curl;

use Swoole;
use Swoole\Constant;
use Swoole\Coroutine\Http\Client;
use Swoole\Curl\Exception as CurlException;
use Swoole\Http\Status;

final class Handler implements \Stringable
{
    /**
     * @var Client|null
     */
    private $client;

    private $info = [
        'url'                     => '',
        'content_type'            => '',
        'http_code'               => 0,
        'header_size'             => 0,
        'request_size'            => 0,
        'filetime'                => -1,
        'ssl_verify_result'       => 0,
        'redirect_count'          => 0,
        'total_time'              => 5.3E-5,
        'namelookup_time'         => 0.0,
        'connect_time'            => 0.0,
        'pretransfer_time'        => 0.0,
        'size_upload'             => 0.0,
        'size_download'           => 0.0,
        'speed_download'          => 0.0,
        'speed_upload'            => 0.0,
        'download_content_length' => -1.0,
        'upload_content_length'   => -1.0,
        'starttransfer_time'      => 0.0,
        'redirect_time'           => 0.0,
        'redirect_url'            => '',
        'primary_ip'              => '',
        'certinfo'                => [],
        'primary_port'            => 0,
        'local_ip'                => '',
        'local_port'              => 0,
        'http_version'            => 0,
        'protocol'                => 0,
        'ssl_verifyresult'        => 0,
        'scheme'                  => '',
        'private'                 => '',
    ];

    private $withHeaderOut = false;

    private $withFileTime = false;

    private $urlInfo;

    private $postData;

    private $infile;

    private $infileSize = PHP_INT_MAX;

    private $outputStream;

    private $proxyType;

    private $proxy;

    private $proxyPort = 1080;

    private $proxyUsername;

    private $proxyPassword;

    private $clientOptions = [];

    private $followLocation = false;

    private $autoReferer = false;

    private $maxRedirects;

    private $withHeader = false;

    private $nobody = false;

    /** @var callable|null */
    private $headerFunction;

    /** @var callable|null */
    private $readFunction;

    /** @var callable|null */
    private $writeFunction;

    private $noProgress = true;

    /** @var callable */
    private $progressFunction;

    private $returnTransfer = false;

    private $method = '';

    private $headers = [];

    private $headerMap = [];

    private $transfer;

    private $errCode = 0;

    private $errMsg = '';

    private $failOnError = false;

    private $closed = false;

    private $cookieJar = '';

    private $resolve = [];

    private $unix_socket_path = '';

    public function __construct(string $url = '')
    {
        if ($url) {
            $this->setUrl($url);
        }
    }

    public function __toString(): string
    {
        $id = spl_object_id($this);
        return "Object({$id}) of type (curl)";
    }

    /* ====== Public APIs ====== */

    public function isAvailable(): bool
    {
        if ($this->closed) {
            trigger_error('supplied resource is not a valid cURL handle resource', E_USER_WARNING);
            return false;
        }
        return true;
    }

    public function setOpt(int $opt, $value): bool
    {
        return $this->isAvailable() and $this->setOption($opt, $value);
    }

    public function exec()
    {
        if (!$this->isAvailable()) {
            return false;
        }
        return $this->execute();
    }

    public function getInfo()
    {
        return $this->isAvailable() ? $this->info : false;
    }

    public function errno(): int
    {
        return $this->isAvailable() ? $this->errCode : 0;
    }

    public function error(): string
    {
        return $this->isAvailable() ? $this->errMsg : '';
    }

    public function reset()
    {
        if (!$this->isAvailable()) {
            return false;
        }
        foreach ((new \ReflectionClass(self::class))->getDefaultProperties() as $name => $value) {
            $this->{$name} = $value;
        }
    }

    public function getContent()
    {
        if (!$this->isAvailable()) {
            return false;
        }
        return $this->transfer;
    }

    public function close(): void
    {
        if (!$this->isAvailable()) {
            return;
        }
        foreach ($this as &$property) { // @phpstan-ignore foreach.nonIterable
            $property = null;
        }
        $this->closed = true;
    }

    private function create(?array $urlInfo = null): void
    {
        if ($urlInfo === null) {
            $urlInfo = $this->urlInfo;
        }
        $host = $urlInfo['host'];
        $port = $urlInfo['port'];
        if (isset($this->resolve[$host])) {
            if (!$this->hasHeader('Host')) {
                $this->setHeader('Host', $host);
            }
            $this->urlInfo['host'] = $host = $this->resolve[$host][$port] ?? null ?: $host;
        }
        if ($this->unix_socket_path) {
            $host = $this->unix_socket_path;
            $port = 0;
            if (stripos($host, 'unix:/') !== 0) {
                $host = "unix:/{$host}";
            }
        }
        $this->client = new Client($host, $port, $urlInfo['scheme'] === 'https');
    }

    private function getUrl(): string
    {
        if (empty($this->urlInfo['path'])) {
            $url = '/';
        } else {
            $url = $this->urlInfo['path'];
        }
        if (!empty($this->urlInfo['query'])) {
            $url .= '?' . $this->urlInfo['query'];
        }
        if (!empty($this->urlInfo['fragment'])) {
            $url .= '#' . $this->urlInfo['fragment'];
        }
        return $url;
    }

    private function setUrl(string $url, bool $setInfo = true): bool
    {
        if (strlen($url) === 0) {
            $this->setError(CURLE_URL_MALFORMAT, 'No URL set!');
            return false;
        }
        if (!str_contains($url, '://') && $this->unix_socket_path === '') {
            $url = 'http://' . $url;
        }
        if ($setInfo) {
            $urlInfo = parse_url($url);
            if ($this->unix_socket_path) {
                if (empty($urlInfo['host']) && !empty($urlInfo['path'])) {
                    $urlInfo['host'] = explode('/', $urlInfo['path'])[1] ?? null;
                }
                if (!$this->hasHeader('Host') && !empty($urlInfo['host'])) {
                    $this->setHeader('Host', $urlInfo['host']);
                }
            }
            if (!is_array($urlInfo)) {
                $this->setError(CURLE_URL_MALFORMAT, "URL[{$url}] using bad/illegal format");
                return false;
            }
            if (!$this->setUrlInfo($urlInfo)) {
                return false;
            }
        }
        $this->info['url'] = $url;
        return true;
    }

    private function setUrlInfo(array $urlInfo): bool
    {
        if (empty($urlInfo['scheme'])) {
            $urlInfo['scheme'] = 'http';
        }
        $scheme = $urlInfo['scheme'];
        if ($scheme !== 'http' and $scheme !== 'https') {
            $this->setError(CURLE_UNSUPPORTED_PROTOCOL, "Protocol \"{$scheme}\" not supported or disabled in libcurl");
            return false;
        }
        $host = $urlInfo['host'];
        if ($this->info['primary_port'] !== 0) {
            /* keep same with cURL, primary_port has the highest priority */
            $urlInfo['port'] = $this->info['primary_port'];
        } elseif (empty($urlInfo['port'])) {
            $urlInfo['port'] = $scheme === 'https' ? 443 : 80;
        } else {
            $urlInfo['port'] = intval($urlInfo['port']);
        }
        $port = $urlInfo['port'];
        if (isset($this->client)) {
            $oldUrlInfo = $this->urlInfo;
            if (($host !== $oldUrlInfo['host']) || ($port !== $oldUrlInfo['port']) || ($scheme !== $oldUrlInfo['scheme'])) {
                /* target changed */
                $this->create($urlInfo);
            }
        }
        $this->urlInfo = $urlInfo;
        return true;
    }

    private function setPort(int $port): void
    {
        $this->info['primary_port'] = $port;
        if (!isset($this->urlInfo['port']) || $this->urlInfo['port'] !== $port) {
            $this->urlInfo['port'] = $port;
            if (isset($this->client)) {
                /* target changed */
                $this->create();
            }
        }
    }

    private function setError($code, $msg = ''): void
    {
        $this->errCode = $code;
        $this->errMsg  = $msg ?: curl_strerror($code);
    }

    private function hasHeader(string $headerName): bool
    {
        return isset($this->headerMap[strtolower($headerName)]);
    }

    private function setHeader(string $headerName, string $value): void
    {
        $lowerCaseHeaderName = strtolower($headerName);

        if (isset($this->headerMap[$lowerCaseHeaderName])) {
            unset($this->headers[$this->headerMap[$lowerCaseHeaderName]]);
        }

        if ($value !== '') {
            $this->headers[$headerName]            = $value;
            $this->headerMap[$lowerCaseHeaderName] = $headerName;
        } else {
            // remove empty headers (keep same with raw cURL)
            unset($this->headerMap[$lowerCaseHeaderName]);
        }
    }

    /**
     * @throws Exception
     */
    private function setOption(int $opt, mixed $value): bool
    {
        switch ($opt) {
            // case CURLOPT_STDERR:
            // case CURLOPT_WRITEHEADER:
            case CURLOPT_FILE:
            case CURLOPT_INFILE:
                if (!is_resource($value)) {
                    trigger_error('swoole_curl_setopt(): supplied argument is not a valid File-Handle resource', E_USER_WARNING);
                    return false;
                }
                break;
        }

        switch ($opt) {
            /*
             * Basic
             */
            case CURLOPT_URL:
                return $this->setUrl((string) $value);
            case CURLOPT_PORT:
                $this->setPort((int) $value);
                break;
            case CURLOPT_FORBID_REUSE:
                $this->clientOptions[Constant::OPTION_KEEP_ALIVE] = !$value;
                break;
            case CURLOPT_RETURNTRANSFER:
                $this->returnTransfer = (bool) $value;
                $this->transfer       = '';
                break;
            case CURLOPT_ENCODING:
                if (empty($value)) {
                    if (defined('SWOOLE_HAVE_ZLIB')) {
                        $value = 'gzip, deflate';
                    }
                    if (defined('SWOOLE_HAVE_BROTLI')) {
                        if (!empty($value)) {
                            $value = 'br, ' . $value;
                        } else {
                            $value = 'br';
                        }
                    }
                    if (empty($value)) {
                        break;
                    }
                }
                $this->setHeader('Accept-Encoding', $value);
                break;
            case CURLOPT_PROXYTYPE:
                if ($value !== CURLPROXY_HTTP and $value !== CURLPROXY_SOCKS5) {
                    throw new CurlException('swoole_curl_setopt(): Only support following CURLOPT_PROXYTYPE values: CURLPROXY_HTTP, CURLPROXY_SOCKS5');
                }
                $this->proxyType = $value;
                break;
            case CURLOPT_PROXY:
                $this->proxy = $value;
                break;
            case CURLOPT_PROXYPORT:
                $this->proxyPort = $value;
                break;
            case CURLOPT_PROXYUSERNAME:
                $this->proxyUsername = $value;
                break;
            case CURLOPT_PROXYPASSWORD:
                $this->proxyPassword = $value;
                break;
            case CURLOPT_PROXYUSERPWD:
                $usernamePassword    = explode(':', $value);
                $this->proxyUsername = urldecode($usernamePassword[0]);
                $this->proxyPassword = urldecode($usernamePassword[1] ?? null);
                break;
            case CURLOPT_PROXYAUTH:
                /* ignored temporarily */
                break;
            case CURLOPT_UNIX_SOCKET_PATH:
                $realpath = realpath((string) $value);
                if ($realpath) {
                    $this->unix_socket_path = $realpath;
                } else {
                    $this->setError(CURLE_COULDNT_CONNECT);
                }
                break;
            case CURLOPT_NOBODY:
                $this->nobody = boolval($value);
                $this->method = 'HEAD';
                break;
            case CURLOPT_RESOLVE:
                foreach ((array) $value as $resolve) {
                    $flag = substr($resolve, 0, 1);
                    if ($flag === '+' || $flag === '-') {
                        // TODO: [+]HOST:PORT:ADDRESS
                        $resolve = substr($resolve, 1);
                    }
                    $tmpResolve = explode(':', $resolve, 3);
                    $host       = $tmpResolve[0] ?? '';
                    $port       = $tmpResolve[1] ?? 0;
                    $ip         = $tmpResolve[2] ?? '';
                    if ($flag === '-') {
                        unset($this->resolve[$host][$port]);
                    } else {
                        // TODO: HOST:PORT:ADDRESS[,ADDRESS]...
                        $this->resolve[$host][$port] = explode(',', $ip)[0];
                    }
                }
                break;
            case CURLOPT_IPRESOLVE:
                if ($value !== CURL_IPRESOLVE_WHATEVER and $value !== CURL_IPRESOLVE_V4) {
                    throw new CurlException('swoole_curl_setopt(): Only support following CURLOPT_IPRESOLVE values: CURL_IPRESOLVE_WHATEVER, CURL_IPRESOLVE_V4');
                }
                break;
            case CURLOPT_TCP_NODELAY:
                $this->clientOptions[Constant::OPTION_OPEN_TCP_NODELAY] = boolval($value);
                break;
            case CURLOPT_PRIVATE:
                $this->info['private'] = $value;
                break;
                /*
                 * Ignore options
                 */
            case CURLOPT_VERBOSE:
                // trigger_error('swoole_curl_setopt(): CURLOPT_VERBOSE is not supported', E_USER_WARNING);
            case CURLOPT_SSLVERSION:
            case CURLOPT_NOSIGNAL:
            case CURLOPT_FRESH_CONNECT:
                /*
                 * From PHP 5.1.3, this option has no effect: the raw output will always be returned when CURLOPT_RETURNTRANSFER is used.
                 */
            case CURLOPT_BINARYTRANSFER: /* TODO */
            case CURLOPT_DNS_USE_GLOBAL_CACHE:
            case CURLOPT_DNS_CACHE_TIMEOUT:
            case CURLOPT_STDERR:
            case CURLOPT_WRITEHEADER:
            case CURLOPT_BUFFERSIZE:
            case CURLOPT_SSLCERTTYPE:
            case CURLOPT_SSLKEYTYPE:
            case CURLOPT_NOPROXY:
            case CURLOPT_CERTINFO:
            case CURLOPT_HEADEROPT:
            case CURLOPT_PROXYHEADER:
            case CURLOPT_HTTPPROXYTUNNEL:
                break;
                /*
                 * SSL
                 */
            case CURLOPT_SSL_VERIFYHOST:
                break;
            case CURLOPT_SSL_VERIFYPEER:
                $this->clientOptions[Constant::OPTION_SSL_VERIFY_PEER] = $value;
                break;
            case CURLOPT_SSLCERT:
                $this->clientOptions[Constant::OPTION_SSL_CERT_FILE] = $value;
                break;
            case CURLOPT_SSLKEY:
                $this->clientOptions[Constant::OPTION_SSL_KEY_FILE] = $value;
                break;
            case CURLOPT_CAINFO:
                $this->clientOptions[Constant::OPTION_SSL_CAFILE] = $value;
                break;
            case CURLOPT_CAPATH:
                $this->clientOptions[Constant::OPTION_SSL_CAPATH] = $value;
                break;
            case CURLOPT_KEYPASSWD:
            case CURLOPT_SSLCERTPASSWD:
            case CURLOPT_SSLKEYPASSWD:
                $this->clientOptions[Constant::OPTION_SSL_PASSPHRASE] = $value;
                break;
                /*
                 * Http POST
                 */
            case CURLOPT_POST:
                $this->method = 'POST';
                break;
            case CURLOPT_POSTFIELDS:
                $this->postData = $value;
                if (!$this->method) {
                    $this->method = 'POST';
                }
                break;
                /*
                 * Upload
                 */
            case CURLOPT_SAFE_UPLOAD:
                if (!$value) {
                    trigger_error('swoole_curl_setopt(): Disabling safe uploads is no longer supported', E_USER_WARNING);
                    return false;
                }
                break;
                /*
                 * Http Header
                 */
            case CURLOPT_HTTPHEADER:
                if (!is_array($value) and !is_iterable($value)) {
                    trigger_error('swoole_curl_setopt(): You must pass either an object or an array with the CURLOPT_HTTPHEADER argument', E_USER_WARNING);
                    return false;
                }
                foreach ($value as $header) {
                    $header      = explode(':', $header, 2);
                    $headerName  = $header[0];
                    $headerValue = trim($header[1] ?? '');
                    $this->setHeader($headerName, $headerValue);
                }
                break;
            case CURLOPT_REFERER:
                $this->setHeader('Referer', $value);
                break;
            case CURLINFO_HEADER_OUT:
                $this->withHeaderOut = boolval($value);
                break;
            case CURLOPT_FILETIME:
                $this->withFileTime = boolval($value);
                break;
            case CURLOPT_USERAGENT:
                $this->setHeader('User-Agent', $value);
                break;
            case CURLOPT_CUSTOMREQUEST:
                $this->method = (string) $value;
                break;
            case CURLOPT_PROTOCOLS:
                if (($value & ~(CURLPROTO_HTTP | CURLPROTO_HTTPS)) != 0) {
                    throw new CurlException("swoole_curl_setopt(): CURLOPT_PROTOCOLS[{$value}] is not supported");
                }
                break;
            case CURLOPT_REDIR_PROTOCOLS:
                if (($value & ~(CURLPROTO_HTTP | CURLPROTO_HTTPS)) != 0) {
                    throw new CurlException("swoole_curl_setopt(): CURLOPT_REDIR_PROTOCOLS[{$value}] is not supported");
                }
                break;
            case CURLOPT_HTTP_VERSION:
                if ($value != CURL_HTTP_VERSION_1_1) {
                    trigger_error("swoole_curl_setopt(): CURLOPT_HTTP_VERSION[{$value}] is not supported", E_USER_WARNING);
                    return false;
                }
                break;
            case CURLOPT_FAILONERROR:
                $this->failOnError = $value;
                break;
                /*
                 * Http Cookie
                 */
            case CURLOPT_COOKIE:
                $this->setHeader('Cookie', $value);
                break;
            case CURLOPT_COOKIEJAR:
                $this->cookieJar = (string) $value;
                break;
            case CURLOPT_COOKIEFILE:
                if (is_file((string) $value)) {
                    $this->setHeader('Cookie', file_get_contents($value));
                }
                break;
            case CURLOPT_CONNECTTIMEOUT:
                $this->clientOptions[Constant::OPTION_CONNECT_TIMEOUT] = $value;
                break;
            case CURLOPT_CONNECTTIMEOUT_MS:
                $this->clientOptions[Constant::OPTION_CONNECT_TIMEOUT] = $value / 1000;
                break;
            case CURLOPT_TIMEOUT:
                $this->clientOptions[Constant::OPTION_TIMEOUT] = $value;
                break;
            case CURLOPT_TIMEOUT_MS:
                $this->clientOptions[Constant::OPTION_TIMEOUT] = $value / 1000;
                break;
            case CURLOPT_FILE:
                $this->outputStream = $value;
                break;
            case CURLOPT_HEADER:
                $this->withHeader = $value;
                break;
            case CURLOPT_HEADERFUNCTION:
                $this->headerFunction = $value;
                break;
            case CURLOPT_READFUNCTION:
                $this->readFunction = $value;
                break;
            case CURLOPT_WRITEFUNCTION:
                $this->writeFunction = $value;
                break;
            case CURLOPT_NOPROGRESS:
                $this->noProgress = $value;
                break;
            case CURLOPT_PROGRESSFUNCTION:
                $this->progressFunction = $value;
                break;
            case CURLOPT_HTTPAUTH:
                if (!($value & CURLAUTH_BASIC)) {
                    trigger_error("swoole_curl_setopt(): CURLOPT_HTTPAUTH[{$value}] is not supported", E_USER_WARNING);
                    return false;
                }
                break;
            case CURLOPT_USERPWD:
                $this->setHeader('Authorization', 'Basic ' . base64_encode($value));
                break;
            case CURLOPT_FOLLOWLOCATION:
                $this->followLocation = $value;
                break;
            case CURLOPT_AUTOREFERER:
                $this->autoReferer = $value;
                break;
            case CURLOPT_MAXREDIRS:
                $this->maxRedirects = $value;
                break;
            case CURLOPT_PUT:
            case CURLOPT_UPLOAD:
                /* after libcurl 7.12, CURLOPT_PUT is replaced by CURLOPT_UPLOAD */
                $this->method = 'PUT';
                break;
            case CURLOPT_INFILE:
                $this->infile = $value;
                break;
            case CURLOPT_INFILESIZE:
                $this->infileSize = $value;
                break;
            case CURLOPT_HTTPGET:
                /* Since GET is the default, this is only necessary if the request method has been changed. */
                $this->method = 'GET';
                break;
            default:
                throw new CurlException("swoole_curl_setopt(): option[{$opt}] is not supported");
        }
        return true;
    }

    private function execute()
    {
        $this->info['redirect_count'] = $this->info['starttransfer_time'] = 0;
        $this->info['redirect_url']   = '';
        $timeBegin                    = microtime(true);
        /*
         * Socket
         */
        if (!$this->urlInfo) {
            $this->setError(CURLE_URL_MALFORMAT, 'No URL set or URL using bad/illegal format');
            return false;
        }
        if (!isset($this->client)) {
            $this->create();
        }
        while (true) {
            $client = $this->client;
            /*
             * Http Proxy
             */
            if ($this->proxy) {
                $parse         = parse_url($this->proxy);
                $proxy         = $parse['host'] ?? $parse['path'];
                $proxyPort     = $parse['port'] ?? $this->proxyPort;
                $proxyUsername = $parse['user'] ?? $this->proxyUsername;
                $proxyPassword = $parse['pass'] ?? $this->proxyPassword;
                $proxyType     = $parse['scheme'] ?? $this->proxyType;
                if (is_string($proxyType)) {
                    if ($proxyType === 'socks5') {
                        $proxyType = CURLPROXY_SOCKS5;
                    } else {
                        $proxyType = CURLPROXY_HTTP;
                    }
                }

                if (!filter_var($proxy, FILTER_VALIDATE_IP)) {
                    $ip = Swoole\Coroutine::gethostbyname($proxy, AF_INET, $this->clientOptions['connect_timeout'] ?? -1);
                    if (!$ip) {
                        $this->setError(CURLE_COULDNT_RESOLVE_PROXY, 'Could not resolve proxy: ' . $proxy);
                        return false;
                    }
                    $this->proxy = $proxy = $ip;
                }
                $proxyOptions = match ($proxyType) {
                    CURLPROXY_HTTP => [
                        'http_proxy_host'     => $proxy,
                        'http_proxy_port'     => $proxyPort,
                        'http_proxy_username' => $proxyUsername,
                        'http_proxy_password' => $proxyPassword,
                    ],
                    CURLPROXY_SOCKS5 => [
                        'socks5_host'     => $proxy,
                        'socks5_port'     => $proxyPort,
                        'socks5_username' => $proxyUsername,
                        'socks5_password' => $proxyPassword,
                    ],
                    default => throw new CurlException("Unexpected proxy type [{$proxyType}]"),
                };
            }
            /*
             * Client Options
             */
            $client->set(
                $this->clientOptions +
                ($proxyOptions ?? [])
            );
            /*
             * Method
             */
            if ($this->method) {
                $client->setMethod($this->method);
            }
            /*
             * Data
             */
            if ($this->infile) {
                // Infile
                // Notice: we make its priority higher than postData but raw cURL will send both of them
                $data = '';
                while (true) {
                    $nLength = $this->infileSize - strlen($data);
                    if ($nLength === 0) {
                        break;
                    }
                    if (feof($this->infile)) {
                        break;
                    }
                    $data .= fread($this->infile, $nLength);
                }
                $client->setData($data);
                // Notice: although we reset it, raw cURL never do this
                $this->infile     = null;
                $this->infileSize = PHP_INT_MAX;
            } else {
                // POST data
                if ($this->postData) {
                    if (is_string($this->postData)) {
                        if (!$this->hasHeader('content-type')) {
                            $this->setHeader('Content-Type', 'application/x-www-form-urlencoded');
                        }
                    } elseif (is_array($this->postData)) {
                        foreach ($this->postData as $k => $v) {
                            if ($v instanceof \CURLFile) {
                                $client->addFile($v->getFilename(), $k, $v->getMimeType() ?: 'application/octet-stream', $v->getPostFilename());
                                unset($this->postData[$k]);
                            }
                        }
                    }
                    $client->setData($this->postData);
                }
            }
            /*
             * Headers
             */
            // Notice: setHeaders must be placed last, because headers may be changed by other parts
            // As much as possible to ensure that Host is the first header.
            // See: http://tools.ietf.org/html/rfc7230#section-5.4
            $client->setHeaders($this->headers);
            /**
             * Execute.
             */
            $executeResult = $client->execute($this->getUrl());
            if (!$executeResult) {
                $errCode = $client->errCode;
                if ($errCode == SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED or $errCode == SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT) {
                    $this->setError(CURLE_COULDNT_RESOLVE_HOST, 'Could not resolve host: ' . $client->host);
                } else {
                    $this->setError($errCode, $client->errMsg);
                }
                $this->info['total_time'] = microtime(true) - $timeBegin;
                return false;
            }
            if ($client->statusCode >= 300 and $client->statusCode < 400 and isset($client->headers['location'])) {
                $redirectParsedUrl = $this->getRedirectUrl($client->headers['location']);
                $redirectUrl       = self::unparseUrl($redirectParsedUrl);
                if ($this->followLocation and ($this->maxRedirects === null or $this->info['redirect_count'] < $this->maxRedirects)) {
                    if ($this->info['redirect_count'] === 0) {
                        $this->info['starttransfer_time'] = microtime(true) - $timeBegin;
                        $redirectBeginTime                = microtime(true);
                    }
                    // force GET
                    if (in_array($client->statusCode, [Status::MOVED_PERMANENTLY, Status::FOUND, Status::SEE_OTHER])) {
                        $this->method = 'GET';
                    }
                    if ($this->autoReferer) {
                        $this->setHeader('Referer', $this->info['url']);
                    }
                    $this->setUrl($redirectUrl, false);
                    $this->setUrlInfo($redirectParsedUrl);
                    $this->info['redirect_count']++;
                } else {
                    $this->info['redirect_url'] = $redirectUrl;
                    break;
                }
            } elseif ($this->failOnError && $client->statusCode >= 400) {
                $this->setError(CURLE_HTTP_RETURNED_ERROR, "The requested URL returned error: {$client->statusCode} " . Status::getReasonPhrase($client->statusCode));
                return false;
            } else {
                break;
            }
        }
        $this->info['total_time']     = microtime(true) - $timeBegin;
        $this->info['http_code']      = $client->statusCode;
        $this->info['content_type']   = $client->headers['content-type'] ?? '';
        $this->info['size_download']  = $this->info['download_content_length'] = strlen($client->body);
        $this->info['speed_download'] = 1 / $this->info['total_time'] * $this->info['size_download'];
        if (isset($redirectBeginTime)) {
            $this->info['redirect_time'] = microtime(true) - $redirectBeginTime;
        }

        if (filter_var($this->urlInfo['host'], FILTER_VALIDATE_IP)) {
            $this->info['primary_ip'] = $this->urlInfo['host'];
        }

        if ($this->unix_socket_path) {
            $this->info['primary_ip']   = $this->unix_socket_path;
            $this->info['primary_port'] = $this->urlInfo['port'];
        }

        $headerContent = '';
        if ($client->headers) {
            $cb = $this->headerFunction;
            if ($client->statusCode > 0) {
                $row = "HTTP/1.1 {$client->statusCode} " . Status::getReasonPhrase($client->statusCode) . "\r\n";
                if ($cb) {
                    $cb($this, $row);
                }
                $headerContent .= $row;
            }
            foreach ($client->headers as $k => $v) {
                $row = "{$k}: {$v}\r\n";
                if ($cb) {
                    $cb($this, $row);
                }
                $headerContent .= $row;
            }
            $headerContent .= "\r\n";
            $this->info['header_size'] = strlen($headerContent);
            if ($cb) {
                $cb($this, '');
            }
        } else {
            $this->info['header_size'] = 0;
        }

        if ($client->body and $this->readFunction) {
            $cb = $this->readFunction;
            $cb($this, $this->outputStream, strlen($client->body));
        }

        if ($this->withHeader) {
            $transfer = $headerContent . $client->body;
        } else {
            $transfer = $client->body;
        }

        if ($this->withHeaderOut) {
            $headerOutContent             = $client->getHeaderOut();
            $this->info['request_header'] = $headerOutContent ? $headerOutContent . "\r\n\r\n" : '';
        }
        if ($this->withFileTime) {
            if (isset($client->headers['last-modified'])) {
                $this->info['filetime'] = strtotime($client->headers['last-modified']);
            } else {
                $this->info['filetime'] = -1;
            }
        }

        if ($this->cookieJar && $this->cookieJar !== '') {
            if ($this->cookieJar === '-') {
                foreach ((array) $client->set_cookie_headers as $cookie) {
                    echo $cookie . PHP_EOL;
                }
            } else {
                $cookies = '';
                foreach ((array) $client->set_cookie_headers as $cookie) {
                    $cookies .= "{$cookie};";
                }
                file_put_contents($this->cookieJar, $cookies);
            }
        }

        if ($this->writeFunction) {
            if (!is_callable($this->writeFunction)) { // @phpstan-ignore booleanNot.alwaysFalse
                trigger_error('curl_exec(): Could not call the CURLOPT_WRITEFUNCTION', E_USER_WARNING);
                $this->setError(CURLE_WRITE_ERROR, 'Failure writing output to destination');
                return false;
            }
            call_user_func($this->writeFunction, $this, $transfer);
            return true;
        }

        if ($this->returnTransfer) {
            return $this->transfer = $transfer;
        }
        if ($this->outputStream) {
            return fwrite($this->outputStream, $transfer) === strlen($transfer);
        }
        echo $transfer;

        return true;
    }

    /* ====== Redirect helper ====== */

    private static function unparseUrl(array $parsedUrl): string
    {
        $scheme   = ($parsedUrl['scheme'] ?? 'http') . '://';
        $host     = $parsedUrl['host'] ?? '';
        $port     = isset($parsedUrl['port']) ? ':' . $parsedUrl['port'] : '';
        $user     = $parsedUrl['user'] ?? '';
        $pass     = isset($parsedUrl['pass']) ? ':' . $parsedUrl['pass'] : '';
        $pass     = ($user or $pass) ? "{$pass}@" : '';
        $path     = $parsedUrl['path'] ?? '';
        $query    = (isset($parsedUrl['query']) and $parsedUrl['query'] !== '') ? '?' . $parsedUrl['query'] : '';
        $fragment = isset($parsedUrl['fragment']) ? '#' . $parsedUrl['fragment'] : '';
        return $scheme . $user . $pass . $host . $port . $path . $query . $fragment;
    }

    private function getRedirectUrl(string $location): array
    {
        $uri = parse_url($location);
        if (isset($uri['host'])) {
            $redirectUri = $uri;
        } else {
            if (!isset($location[0])) {
                return [];
            }
            $redirectUri          = $this->urlInfo;
            $redirectUri['query'] = '';
            if ($location[0] === '/') {
                $redirectUri['path'] = $location;
            } else {
                $path = dirname($redirectUri['path'] ?? '');
                if ($path === '.') {
                    $path = '/';
                }
                if (isset($location[1]) and str_starts_with($location, './')) {
                    $location = substr($location, 2);
                }
                $redirectUri['path'] = $path . $location;
            }
            if (is_array($uri)) {
                foreach ($uri as $k => $v) {
                    if (!in_array($k, ['path', 'query'])) {
                        $redirectUri[$k] = $v;
                    }
                }
            }
        }
        return $redirectUri;
    }
}
