<?php

namespace thans\jwt;

use thans\jwt\exception\BadMethodCallException;
use thans\jwt\parser\Parser;
use thans\jwt\exception\JWTException;

class JWT
{
    protected $manager;
    protected $parser;
    protected $token;

    public function parser()
    {
        return $this->parser;
    }

    public function __construct(Manager $manager, Parser $parser)
    {
        $this->manager = $manager;
        $this->parser = $parser;
    }

    public function createToken($customerClaim = [])
    {
        return $this->manager->encode($customerClaim)->get();
    }

    public function parseToken()
    {
        if (!$token = $this->parser->parseToken()) {
            throw new JWTException('No token is this request.');
        }
        $this->setToken($token);

        return $this;
    }

    public function getToken()
    {
        if ($this->token === null) {
            try {
                $this->parseToken();
            } catch (JWTException $e) {
                $this->token = null;
            }
        }

        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token instanceof Token ? $token : new Token($token);

        return $this;
    }

    public function requireToken()
    {
        $this->getToken();

        if (!$this->token) {
            throw new JWTException('Must have token');
        }
    }

    /**
     * 获取Payload
     * @return mixed
     * @throws JWTException
     * @throws exception\TokenBlacklistException
     */
    public function getPayload()
    {
        $this->requireToken();

        return $this->manager->decode($this->token);
    }

    /**
     * 刷新Token
     * @return mixed
     * @throws JWTException
     */
    public function refresh()
    {
        $this->parseToken();

        return $this->manager->refresh($this->token)->get();
    }



    public function __call($method, $parameters)
    {
        if (method_exists($this->manager, $method)) {
            return call_user_func_array([$this->manager, $method], $parameters);
        }

        throw new BadMethodCallException("Method [$method] does not exist.");
    }
}
