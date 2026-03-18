<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Coroutine\Http;

use Swoole\Coroutine\Http\Client\Exception;

/**
 * @param null $data
 * @throws Exception
 */
function request(
    string $url,
    string $method,
    $data = null,
    array $options = null,
    array $headers = null,
    array $cookies = null
): ClientProxy {
    $driver = swoole_library_get_option('http_client_driver');
    switch ($driver) {
        case 'curl':
            return request_with_curl($url, $method, $data, $options, $headers, $cookies);
        case 'stream':
            return request_with_stream($url, $method, $data, $options, $headers, $cookies);
        case 'swoole':
        default:
            return request_with_http_client($url, $method, $data, $options, $headers, $cookies);
    }
}

/**
 * @param mixed $data
 * @throws Exception
 */
function request_with_http_client(
    string $url,
    string $method,
    $data = null,
    array $options = null,
    array $headers = null,
    array $cookies = null
): ClientProxy {
    $info = parse_url($url);
    if (empty($info['scheme'])) {
        throw new Exception('The URL given is illegal [no scheme]');
    }
    if ($info['scheme'] == 'http') {
        $client = new Client($info['host'], swoole_array_default_value($info, 'port', 80), false);
    } elseif ($info['scheme'] == 'https') {
        $client = new Client($info['host'], swoole_array_default_value($info, 'port', 443), true);
    } else {
        throw new Exception('unknown scheme "' . $info['scheme'] . '"');
    }
    $client->setMethod($method);
    if ($data) {
        $client->setData($data);
    }
    if (is_array($options)) {
        $client->set($options);
    }
    if (is_array($headers)) {
        $client->setHeaders($headers);
    }
    if (is_array($cookies)) {
        $client->setCookies($cookies);
    }
    $request_url = swoole_array_default_value($info, 'path', '/');
    if (!empty($info['query'])) {
        $request_url .= '?' . $info['query'];
    }
    if ($client->execute($request_url)) {
        return new ClientProxy(
            $client->getBody(),
            $client->getStatusCode(),
            $client->getHeaders(),
            $client->getCookies()
        );
    }
    throw new Exception($client->errMsg, $client->errCode);
}

/**
 * @param mixed $data
 * @throws Exception
 */
function request_with_curl(
    string $url,
    string $method,
    $data = null,
    array $options = null,
    array $headers = null,
    array $cookies = null
): ClientProxy {
    $ch = curl_init($url);
    if (empty($ch)) {
        throw new Exception('failed to curl_init');
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
    $responseHeaders = $responseCookies = [];
    curl_setopt($ch, CURLOPT_HEADERFUNCTION, function ($ch, $header) use (&$responseHeaders, &$responseCookies) {
        $len = strlen($header);
        $header = explode(':', $header, 2);
        if (count($header) < 2) {
            return $len;
        }
        $headerKey = strtolower(trim($header[0]));
        if ($headerKey == 'set-cookie') {
            [$k, $v] = explode('=', $header[1]);
            $responseCookies[$k] = $v;
        } else {
            $responseHeaders[$headerKey][] = trim($header[1]);
        }
        return $len;
    });
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    if ($headers) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    if ($cookies) {
        $cookie_str = '';
        foreach ($cookies as $k => $v) {
            $cookie_str .= "{$k}={$v}; ";
        }
        curl_setopt($ch, CURLOPT_COOKIE, $cookie_str);
    }
    if (isset($options['timeout'])) {
        if (is_float($options['timeout'])) {
            curl_setopt($ch, CURLOPT_TIMEOUT_MS, intval($options['timeout'] * 1000));
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, intval($options['timeout'] * 1000));
        } else {
            curl_setopt($ch, CURLOPT_TIMEOUT, intval($options['timeout']));
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, intval($options['timeout']));
        }
    }
    if (isset($options['connect_timeout'])) {
        if (is_float($options['connect_timeout'])) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT_MS, intval($options['connect_timeout'] * 1000));
        } else {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, intval($options['connect_timeout']));
        }
    }
    $body = curl_exec($ch);
    if ($body !== false) {
        return new ClientProxy($body, curl_getinfo($ch, CURLINFO_HTTP_CODE), $responseHeaders, $responseCookies);
    }
    throw new Exception(curl_error($ch), curl_errno($ch));
}

/**
 * @param mixed $data
 * @throws Exception
 */
function request_with_stream(
    string $url,
    string $method,
    $data = null,
    array $options = null,
    array $headers = null,
    array $cookies = null
): ClientProxy {
    $stream_options = [
        'http' => [
            'method' => $method,
        ],
    ];
    $headerStr = '';
    if ($headers) {
        foreach ($headers as $k => $v) {
            $headerStr .= "{$k}: {$v}\r\n";
        }
    }
    if ($cookies) {
        foreach ($cookies as $k => $v) {
            $headerStr .= "Cookie: {$k}={$v}\r\n";
        }
    }
    if (isset($options['timeout'])) {
        $stream_options['http']['timeout'] = intval($options['timeout']);
    }
    if ($data) {
        if (is_array($data)) {
            $headerStr .= "Content-type: application/x-www-form-urlencoded\r\n";
            $stream_options['http']['content'] = http_build_query($data);
        } else {
            $stream_options['http']['content'] = strval($data);
        }
    }
    if ($headerStr) {
        $stream_options['http']['header'] = $headerStr;
    }
    $body = file_get_contents($url, false, stream_context_create($stream_options));
    if ($body) {
        return new ClientProxy($body, 200, [], []);
    }
    $error = error_get_last();
    throw new Exception($error['message']);
}

/**
 * @param mixed $data
 * @throws Exception
 */
function post(string $url, $data, array $options = null, array $headers = null, array $cookies = null): ClientProxy
{
    return request($url, 'POST', $data, $options, $headers, $cookies);
}

/**
 * @throws Exception
 */
function get(string $url, array $options = null, array $headers = null, array $cookies = null): ClientProxy
{
    return request($url, 'GET', null, $options, $headers, $cookies);
}
