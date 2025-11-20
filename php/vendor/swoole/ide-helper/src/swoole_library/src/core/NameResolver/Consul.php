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

use Swoole\NameResolver;

use function Swoole\Coroutine\Http\get;
use function Swoole\Coroutine\Http\request;

class Consul extends NameResolver
{
    public function join(string $name, string $ip, int $port, array $options = []): bool
    {
        $weight = $options['weight'] ?? 100;
        $data   = [
            'ID'                => $this->getServiceId($name, $ip, $port),
            'Name'              => $this->prefix . $name,
            'Address'           => $ip,
            'Port'              => $port,
            'EnableTagOverride' => false,
            'Weights'           => [
                'Passing' => $weight,
                'Warning' => 1,
            ],
        ];
        $url = $this->baseUrl . '/v1/agent/service/register';
        $r   = request($url, 'PUT', json_encode($data, JSON_THROW_ON_ERROR));
        return $this->checkResponse($r);
    }

    public function leave(string $name, string $ip, int $port): bool
    {
        $url = $this->baseUrl . '/v1/agent/service/deregister/' . $this->getServiceId(
            $name,
            $ip,
            $port
        );
        $r = request($url, 'PUT');
        return $this->checkResponse($r);
    }

    public function enableMaintenanceMode(string $name, string $ip, int $port): bool
    {
        $url = $this->baseUrl . '/v1/agent/service/maintenance/' . $this->getServiceId(
            $name,
            $ip,
            $port
        );
        $r = request($url, 'PUT');
        return $this->checkResponse($r);
    }

    public function getCluster(string $name): ?Cluster
    {
        $url = $this->baseUrl . '/v1/catalog/service/' . $this->prefix . $name;
        $r   = get($url);
        if (!$this->checkResponse($r)) {
            return null;
        }
        $list = json_decode($r->getBody(), null, 512, JSON_THROW_ON_ERROR);
        if (empty($list)) {
            return null;
        }
        $cluster = new Cluster();
        foreach ($list as $li) {
            $cluster->add($li->ServiceAddress, $li->ServicePort, $li->ServiceWeights->Passing);
        }
        return $cluster;
    }

    private function getServiceId(string $name, string $ip, int $port): string
    {
        return $this->prefix . $name . "_{$ip}:{$port}";
    }
}
