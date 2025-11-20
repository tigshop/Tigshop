<?php

namespace thans\jwt;

use thans\jwt\exception\TokenBlacklistException;
use thans\jwt\exception\TokenBlacklistGracePeriodException;
use thans\jwt\provider\JWT\Provider;

class Manager
{
    protected $provider;

    protected $blacklist;

    protected $payload;

    protected $refresh;

    protected $validate = true;

    public function __construct(
        Blacklist $blacklist,
        Payload $payload,
        Provider $provider
    ) {
        $this->blacklist = $blacklist;
        $this->payload = $payload;
        $this->provider = $provider;
    }

    /**
     * Token编码
     *
     * @param $customerClaim
     *
     * @return Token
     */
    public function encode($customerClaim = [])
    {
        $payload = $this->payload->customer($customerClaim);
        $token = $this->provider->encode($payload->get());

        return new Token($token);
    }

    /**
     * 解析Token
     *
     * @param  Token  $token
     *
     * @return mixed
     * @throws TokenBlacklistException
     */
    public function decode(Token $token)
    {
        $payload = $this->provider->decode($token->get());
        if ($this->validate) {
            //blacklist grace period verify
            if ($this->validateGracePeriod($payload)) {
                throw new TokenBlacklistGracePeriodException('The token is in blacklist grace period list.');
            }

            //blacklist verify
            if ($this->validate($payload)) {
                throw new TokenBlacklistException('The token is in blacklist.');
            }
        }

        $this->payload->customer($payload)->check($this->refresh);

        return $payload;
    }

    /**
     * 刷新Token
     *
     * @param  Token  $token
     *
     * @return Token
     * @throws TokenBlacklistException
     */
    public function refresh(Token $token)
    {
        $this->setRefresh();

        $payload = $this->decode($token);

        $this->invalidate($token);

        $this->payload->customer($payload)
            ->check(true);

        return $this->encode($payload);
    }

    /**
     * 注销Token，使之无效
     *
     * @param  Token  $token
     *
     * @return Blacklist
     * @throws TokenBlacklistException
     */
    public function invalidate(Token $token)
    {
        return $this->blacklist->add($this->provider->decode($token->get()));
    }

    /**
     * 验证是否在黑名单
     *
     * @param $payload
     *
     * @return bool
     */
    public function validate($payload)
    {
        return $this->blacklist->has($payload);
    }

    public function validateGracePeriod($payload)
    {
        return $this->blacklist->hasGracePeriod($payload);
    }

    public function setRefresh($refresh = true)
    {
        $this->refresh = true;

        return $this;
    }

    public function setValidate($validate = true)
    {
        $this->validate = $validate;
        $this->refresh = !$validate ? true : $this->refresh;

        return $this;
    }
}
