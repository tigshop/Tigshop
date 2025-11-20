<?php

namespace thans\jwt;

use thans\jwt\contract\Storage;

class Blacklist
{
    protected $storage;
    protected $refreshTTL = 20160;
    protected $gracePeriod = 0;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function add($payload)
    {
        $this->set($this->getKey($payload), $this->getGraceTimestamp(), $this->getSecondsUntilExpired($payload));

        return $this;
    }

    public function has($payload)
    {
        return $this->get($this->getKey($payload)) ? true : false;
    }

    public function hasGracePeriod($payload)
    {
        $val = (int) $this->get($this->getKey($payload));

        return  $val && $val >= time();
    }

    protected function getKey($payload)
    {
        return $payload['jti'];
    }

    public function set($key, $val, $time = 0)
    {
        $this->storage->set($key, $val, $time);

        return $this;
    }

    public function get($key)
    {
        return $this->storage->get($key);
    }

    public function remove($key)
    {
        return $this->storage->delete($key);
    }

    public function getRefreshTTL()
    {
        return $this->refreshTTL;
    }

    public function setRefreshTTL($ttl)
    {
        $this->refreshTTL = (int) $ttl;

        return $this;
    }

    public function getGracePeriod()
    {
        return $this->gracePeriod;
    }

    public function setGracePeriod($gracePeriod)
    {
        $this->gracePeriod = (int) $gracePeriod;

        return $this;
    }

    protected function getSecondsUntilExpired($payload)
    {
        $iat = $payload['iat'];
        return $iat + $this->getRefreshTTL() * 60 - time();
    }

    protected function getGraceTimestamp()
    {
        return time() + $this->gracePeriod;
    }
}
