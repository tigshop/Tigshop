<?php


namespace thans\jwt\provider\JWT;

use thans\jwt\exception\JWTException;

class Provider
{
    protected $signers;

    protected $algo;

    protected $keys;

    public function getPublicKey()
    {
        if (is_file($this->keys['public'])) {
            return 'file://'. $this->keys['public'];
        }
        throw new JWTException('Please set public key as the path of pem file.');
    }

    public function getPrivateKey()
    {
        if (is_file($this->keys['private'])) {
            return 'file://'.$this->keys['private'];
        }
        throw new JWTException('Please set private key as the path of pem file.');
    }

    public function getSecret()
    {
        return $this->keys;
    }

    public function getPassword()
    {
        return $this->keys['password'];
    }
}
