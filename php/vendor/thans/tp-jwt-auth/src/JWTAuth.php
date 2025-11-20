<?php

namespace thans\jwt;

use thans\jwt\parser\Parser;

class JWTAuth extends JWT
{
    /**
     * Token验证，返回payload
     *
     * @param  boolean $validate 是否验证黑名单
     * @return array
     * @throws exception\JWTException
     * @throws exception\TokenBlacklistException
     * @throws exception\TokenBlacklistGracePeriodException
     */
    public function auth($validate = true)
    {
        $this->manager->setValidate($validate);
        return (array)$this->getPayload();
    }

    /**
     * Token构建
     *
     * @param  array  $user
     *
     * @return mixed
     */
    public function builder(array $user = [])
    {
        return $this->createToken($user);
    }

    /**
     * 获取Token
     *
     * @return mixed
     */
    public function token()
    {
        return $this->getToken();
    }

    /**
     * 添加Token至黑名单
     *
     * @param $token
     *
     * @return Blacklist
     * @throws exception\TokenBlacklistException
     */
    public function invalidate($token)
    {
        if ($token instanceof Token) {
            return $this->manager->invalidate($token);
        }

        return $this->manager->invalidate(new Token($token));
    }

    /**
     * 是否在黑名单
     *
     * @param $token
     *
     * @return bool
     */
    public function validate($token)
    {
        if ($token instanceof Token) {
            return $this->manager->validate($this->manager->provider->decode($token->get()));
        }

        return $this->manager->validate($this->manager->provider->decode($token));
    }
}
