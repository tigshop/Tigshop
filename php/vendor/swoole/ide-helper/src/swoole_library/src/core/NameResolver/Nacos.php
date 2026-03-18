<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);
/**
 * This file is part of Swoole.
 *
 * @see     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

namespace Swoole\NameResolver;

use Swoole\Coroutine;
use Swoole\NameResolver;

class Nacos extends NameResolver
{
    /**
     * @throws Coroutine\Http\Client\Exception|Exception
     */
    public function join(string $name, string $ip, int $port, array $options = []): bool
    {
        $params['port'] = $port;
        $params['ip'] = $ip;
        $params['healthy'] = 'true';
        $params['weight'] = $options['weight'] ?? 100;
        $params['encoding'] = $options['encoding'] ?? 'utf-8';
        $params['namespaceId'] = $options['namespaceId'] ?? 'public';
        $params['serviceName'] = $this->prefix . $name;

        $url = $this->baseUrl . '/nacos/v1/ns/instance?' . http_build_query($params);
        $r = Coroutine\Http\post($url, []);
        return $this->checkResponse($r, $url);
    }

    /**
     * @throws Coroutine\Http\Client\Exception|Exception
     */
    public function leave(string $name, string $ip, int $port): bool
    {
        $params['port'] = $port;
        $params['ip'] = $ip;
        $params['serviceName'] = $this->prefix . $name;

        $url = $this->baseUrl . '/nacos/v1/ns/instance?' . http_build_query($params);
        $r = Coroutine\Http\request($this->baseUrl . '/nacos/v1/ns/instance?' . http_build_query($params), 'DELETE');
        return $this->checkResponse($r, $url);
    }

    /**
     * @throws Coroutine\Http\Client\Exception|Exception|\Swoole\Exception
     */
    public function getCluster(string $name): ?Cluster
    {
        $params['serviceName'] = $this->prefix . $name;

        $url = $this->baseUrl . '/nacos/v1/ns/instance/list?' . http_build_query($params);
        $r = Coroutine\Http\get($url);
        if (!$this->checkResponse($r, $url)) {
            return null;
        }
        $result = json_decode($r->getBody());
        if (empty($result)) {
            return null;
        }
        $cluster = new Cluster();
        foreach ($result->hosts as $node) {
            $cluster->add($node->ip, $node->port, $node->weight);
        }
        return $cluster;
    }
}
