<?php

namespace OSS\Tests;

use OSS\Core\OssException;
use OSS\Credentials\StaticCredentialsProvider;
use OSS\Model\LifecycleConfig;
use OSS\Model\LifecycleRule;
use OSS\Model\LifecycleAction;
use OSS\OssClient;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'TestOssClientBase.php';


class OssClientForcePathStyleTest extends TestOssClientBase
{
    public function testForcePathStyle()
    {
        $config = array(
            'signatureVersion' => OssClient::OSS_SIGNATURE_VERSION_V4,
            'hostType' => OssClient::OSS_HOST_TYPE_PATH_STYLE,
        );
        $this->ossClient = Common::getOssClient($config);

        try {
            $this->ossClient->getBucketInfo($this->bucket);
        } catch (OssException $e) {
            $this->assertEquals($e->getErrorCode(), "SecondLevelDomainForbidden");
            $this->assertTrue(true);
        }

        try {
            $object = "oss-php-sdk-test/upload-test-object-name.txt";
            $this->ossClient->putObject($this->bucket, $object, 'hi oss');
        } catch (OssException $e) {
            $this->assertEquals($e->getErrorCode(), "SecondLevelDomainForbidden");
            $this->assertTrue(true);
        }

        try {
            $endpoint = Common::getEndpoint();
            $endpoint = str_replace(array('http://', 'https://'), '', $endpoint);
            $strUrl = $this->bucket . '.' . $endpoint . "/" . $object;
            $signUrl = $this->ossClient->signUrl($this->bucket, $object, 3600);
            $this->assertTrue(strpos($signUrl, $strUrl) !== false);
        } catch (OssException $e) {
            $this->assertFalse(true);
        }
    }
}
