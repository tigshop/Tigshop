<?php
declare(strict_types=1);

namespace Fastknife\Service;


use Fastknife\Domain\Factory;
use Fastknife\Exception\ParamException;
use Fastknife\Utils\AesUtils;

abstract class Service
{
    /**
     * @var Factory 工厂
     */
    protected $factory;

    protected  $originData;

    public function __construct($config)
    {
        $defaultConfig = require dirname(__DIR__) . '/config.php';
        $config = array_merge($defaultConfig, $config);
        $this->factory = new Factory($config);
    }

    abstract public function get();


    abstract public function validate( $token,  $pointJson);

    /**
     * 一次验证
     * @param $token
     * @param $pointJson
     */
    public function check($token, $pointJson)
    {
        try {
            $this->validate($token, $pointJson);
        }catch (\RuntimeException $e){
            $cacheEntity = $this->factory->getCacheInstance();
            $cacheEntity->delete($token);
            throw $e;
        }
        $this->setEncryptCache($token, $pointJson);
    }

    private function setEncryptCache($token, $pointJson){
        $cacheEntity = $this->factory->getCacheInstance();
        $pointStr = AesUtils::decrypt($pointJson, $this->originData['secretKey']);
        $key = AesUtils::encrypt($token. '---'. $pointStr, $this->originData['secretKey']);
        $cacheEntity->set($key,
            [
                'token' => $token,
                'point' => $pointJson
            ],
            $this->factory->getConfig()['cache']['options']['expire'] ?? 300
        );
    }


    /**
     * 二次验证
     * @param $token
     * @param $pointJson
     */
    public function verification($token, $pointJson)
    {
        try {
            $this->validate($token, $pointJson);
        } finally {
            $cacheEntity = $this->factory->getCacheInstance();
            $cacheEntity->delete($token);
        }
    }

    /**
     * 二次验证，必须要先执行一次验证才能调用二次验证
     * 兼容前端 captchaVerification 传值
     * @param string $encryptCode
     */
    public function verificationByEncryptCode(string $encryptCode)
    {
        $result = $this->factory->getCacheInstance()->get($encryptCode);
        if(empty($result)){
            throw new ParamException('参数错误！');
        }

        try {
            $this->validate($result['token'], $result['point']);
        } finally {
            $cacheEntity = $this->factory->getCacheInstance();
            $cacheEntity->delete($result['token']);
            $cacheEntity->delete($encryptCode);
        }
    }

    /**
     * 解码坐标点
     * @param $secretKey
     * @param $point
     * @return array
     */
    protected function encodePoint($secretKey, $point): array
    {
        $pointJson = AesUtils::decrypt($point, $secretKey);
        if ($pointJson == false) {
            throw new ParamException('aes验签失败！');
        }
        return json_decode($pointJson, true);
    }

    protected function setOriginData($token){
        $cacheEntity = $this->factory->getCacheInstance();
        $this->originData = $cacheEntity->get($token);
        if (empty($this->originData)) {
            throw new ParamException('参数校验失败：token');
        }
    }
}
