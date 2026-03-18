<?php

namespace Volc\Service\ImageX\V2;

use Exception;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Volc\Base\V4Curl;
use GuzzleHttp\Client;

const ResourceServiceIdTRN = "trn:ImageX:*:*:ServiceId/%s";
const ResourceStoreKeyTRN = "trn:ImageX:*:*:StoreKeys/%s";

class Imagex extends V4Curl
{
    use ImagexTrait;

    const MinChunkSize = 1024 * 1024 * 20;
    const LargeFileSize = 1024 * 1024 * 1024;

    /**
     * @var array[]
     */
    public $config;

    /**
     * @var array[]
     */
    public $apiList;

    public function __construct($config)
    {
        $this->config = ImagexConfig::region();
        $this->apiList = ImagexConfig::apiList();
        parent::__construct($config);
    }

    protected function getConfig(string $region)
    {
        if (!isset ($this->config[$region])) {
            throw new Exception(sprintf("Imagex not support region, %s", $region));
        }
        return $this->config[$region];
    }

    public function __call($name, $arguments)
    {
        $commitName = strtoupper($name[0]) . substr($name, 1);
        $apiConfig = $this->apiList[$commitName];
        if ($apiConfig == null) {
            throw new Exception("no such api");
        }

        $response = $this->makeApiRequestDelegate($apiConfig)($arguments);
        return json_decode((string) $response->getBody(), true);
    }

    private function makeApiRequestDelegate(array $apiConfig)
    {
        $hasQuery = $apiConfig['has_query'];
        $hasJson = $apiConfig['has_json'];
        $action = $apiConfig['config']['query']['Action'];
        $version = $apiConfig['config']['query']['Version'];
        if (!$hasQuery && !$hasJson) {
            return function () use ($action) {
                return $this->request($action, []);
            };
        } else if (!$hasQuery && $hasJson) {
            return function ($args) use ($action) {
                $json = $args[0];
                return $this->request($action, ['json' => $json]);
            };
        } else if ($hasQuery && !$hasJson) {
            return function ($args) use ($action, $version) {
                $query = $args[0];
                if (is_string($query)) {
                    $query = 'Action=' . $action . '&Version=' . $version . '&' . $query;
                }
                return $this->request($action, ['query' => $query]);
            };
        } else {
            return function ($args) use ($action, $version) {
                $query = $args[0];
                if (is_string($query)) {
                    $query = 'Action=' . $action . '&Version=' . $version . '&' . $query;
                }
                $json = $args[1];
                return $this->request($action, ['query' => $query, 'json' => $json]);
            };
        }
    }


    public function upload(string $uploadHost, $storeInfo, string $file)
    {
        /** @noinspection PhpUnusedLocalVariableInspection */
        $fileResource = null;
        /** @noinspection PhpUnusedLocalVariableInspection */
        $fileSize = 0;

        if (file_exists($file)) {
            // 如果传入是一个文件
            $fileResource = fopen($file, 'rb');
            if ($fileResource === false) {
                return -1;
            }

            $fileSize = filesize($file);
            if ($fileSize === false) {
                return -1;
            }
        } else {
            $fileResource = str_to_stream($file);
            $fileSize = strlen($file);
        }

        if ($fileSize == 0) {
            return -1;
        }

        if ($fileSize <= static::MinChunkSize) {
            $content = stream_get_contents($fileResource);
            if (strlen($content) == $fileSize) {
                return $this->directUpload($uploadHost, $storeInfo, $content);
            } else {
                return -1;
            }
        }
        $isLargeFile = $fileSize > static::LargeFileSize;
        $handlerStack = HandlerStack::create(new CurlHandler());
        $handlerStack->push(Middleware::retry(ImagexUtil::retryDecider(), ImagexUtil::retryDelay()));
        $client = new Client([
            'base_uri' => "https://" . $uploadHost,
            'timeout' => $isLargeFile ? 600.0 : 30.0,
            'handler' => $handlerStack,
        ]);
        return $this->chunkUpload($storeInfo, $fileResource, $fileSize, $client);
    }

    private function chunkUpload(array $storeInfo, $fileResource, int $fileSize, Client $httpClient)
    {
        $isLargeFile = $fileSize > static::LargeFileSize;
        $uploadID = $this->initUploadPart($storeInfo, $isLargeFile, $httpClient);
        if ($uploadID == "") {
            return -1;
        }

        $num = floor($fileSize / static::MinChunkSize);
        $lastNum = $num - 1;
        $checkSum = [];
        for ($i = 0; $i < $lastNum; $i++) {
            $data = stream_get_contents($fileResource, static::MinChunkSize, $i * static::MinChunkSize);
            $partNumber = $i;
            if ($isLargeFile) {
                $partNumber = $partNumber + 1;
            }
            $crc32 = $this->uploadPart($storeInfo, $uploadID, $partNumber, $data, $isLargeFile, $httpClient);
            if ($crc32 == "") {
                return -1;
            }
            $checkSum[] = $crc32;
        }
        $maxLength = $fileSize - $lastNum * static::MinChunkSize;
        $data = stream_get_contents($fileResource, $maxLength, $lastNum * static::MinChunkSize);
        if ($isLargeFile) {
            $lastNum = $lastNum + 1;
        }
        $crc32 = $this->uploadPart($storeInfo, $uploadID, $lastNum, $data, $isLargeFile, $httpClient);
        if ($crc32 == "") {
            return -1;
        }
        $checkSum[] = $crc32;
        return $this->uploadMergePart($storeInfo, $uploadID, $checkSum, $isLargeFile, $httpClient);
    }

    private function initUploadPart(array $storeInfo, bool $isLargeFile, Client $httpClient)
    {
        $headers = ['Authorization' => $storeInfo["Auth"]];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $httpClient->put($storeInfo["StoreUri"] . '?uploads', ['headers' => $headers]);
        $initUploadResponse = json_decode((string) $response->getBody(), true);
        if (!isset ($initUploadResponse["success"]) || $initUploadResponse["success"] != 0) {
            return "";
        }
        return $initUploadResponse['payload']['uploadID'];
    }

    private function uploadPart(array $storeInfo, string $uploadID, int $partNumber, $data, bool $isLargeFile, Client $client): string
    {
        $uri = sprintf("%s?partNumber=%d&uploadID=%s", $storeInfo["StoreUri"], $partNumber, $uploadID);
        $crc32 = sprintf("%08x", crc32($data));
        $headers = ['Authorization' => ['Authorization' => $storeInfo["Auth"]], 'Content-CRC32' => $crc32];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $data]);
        $uploadPartResponse = json_decode((string) $response->getBody(), true);
        if (!isset ($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return "";
        }
        return $crc32;
    }

    private function uploadMergePart(array $storeInfo, string $uploadID, array $checkSum, bool $isLargeFile, Client $client): int
    {
        $uri = sprintf("%s?uploadID=%s", $storeInfo["StoreUri"], $uploadID);
        $m = [];
        for ($i = 0; $i < count($checkSum); $i++) {
            $no = $i;
            if ($isLargeFile) {
                $no = $i + 1;
            }
            $m[] = sprintf("%d:%s", $no, $checkSum[$i]);
        }
        $body = implode(",", $m);
        $headers = ['Authorization' => $storeInfo["Auth"]];
        if ($isLargeFile) {
            $headers[] = ['X-Storage-Mode' => 'gateway'];
        }
        $response = $client->put($uri, ['headers' => $headers, 'body' => $body]);
        $uploadPartResponse = json_decode((string) $response->getBody(), true);
        if (!isset ($uploadPartResponse["success"]) || $uploadPartResponse["success"] != 0) {
            return -1;
        }
        return 0;
    }

    private function directUpload(string $uploadHost, array $storeInfo, $content)
    {
        $crc32 = sprintf("%08x", crc32($content));
        $tosClient = new Client([
            'base_uri' => "https://" . $uploadHost,
            'timeout' => 30.0,
        ]);
        $response = $tosClient->request('PUT', $storeInfo["StoreUri"], ["body" => $content, "headers" => ['Authorization' => $storeInfo["Auth"], 'Content-CRC32' => $crc32]]);
        $uploadResponse = json_decode((string) $response->getBody(), true);
        if (!isset ($uploadResponse["success"]) || $uploadResponse["success"] != 0) {
            return -2;
        }
        return 0;
    }

    public function uploadImages(array $params = [], array $fileOrPaths = [])
    {
        if (!isset ($params["ServiceId"])) {
            return "uploadImages: no ServiceId found";
        }
        $params["UploadNum"] = count($fileOrPaths);

        $applyParams = array();
        $applyParams["ServiceId"] = $params["ServiceId"];
        if (isset ($params["SessionKey"])) {
            $applyParams["SessionKey"] = $params["SessionKey"];
        }
        $applyParams["UploadNum"] = $params["UploadNum"];
        if (isset ($params["StoreKeys"]) && count($params["StoreKeys"]) != $params["UploadNum"]) {
            return "uploadImages: no StoreKeys found or StoreKeys size is unmatch";
        }
        $applyParams["StoreKeys"] = array();
        $queryStr = http_build_query($applyParams);
        if (isset ($params["StoreKeys"]) && is_array($params["StoreKeys"])) {
            foreach ($params["StoreKeys"] as $key => $value) {
                $queryStr = $queryStr . "&StoreKeys=" . urlencode($value);
            }
        }

        $st1 = microtime(true);
        $applyResponse = $this->applyImageUpload($queryStr);
        if (isset ($applyResponse["ResponseMetadata"]["Error"])) {
            throw new Exception(sprintf("uploadImages: request id %s error %s", $applyResponse["ResponseMetadata"]["RequestId"], $applyResponse["ResponseMetadata"]["Error"]["Message"]));
        }
        echo ("requsetID ". $applyResponse["ResponseMetadata"]["RequestId"] .", applyImageUpload cost " . (microtime(true) - $st1) * 1000 . "ms\n");

        $uploadAddr = $applyResponse['Result']['UploadAddress'];
        if (count($uploadAddr['UploadHosts']) == 0) {
            throw new Exception("uploadImages: no upload host found");
        }
        $uploadHost = $uploadAddr['UploadHosts'][0];
        if (count($uploadAddr['StoreInfos']) != $params["UploadNum"]) {
            throw new Exception(sprintf("uploadImages: store infos num(%d) != upload num(%d)", count($uploadAddr['StoreInfos'], $params["UploadNum"])));
        }

        $st2 = microtime(true);
        $successOids = [];
        $skippedCommitResult = [];
        for ($i = 0; $i < count($fileOrPaths); ++$i) {
            $storeInfo = $uploadAddr['StoreInfos'][$i];
            try {
                $respCode = $this->upload($uploadHost, $storeInfo, $fileOrPaths[$i]);
                if ($respCode == 0) {
                    // succeed
                    $successOids[] = $storeInfo['StoreUri'];
                    $skippedCommitResult[] = [
                        'Uri' => $storeInfo['StoreUri'],
                        'UriStatus' => 2000,
                    ];
                } else {
                    // failed
                    $skippedCommitResult[] = [
                        'Uri' => $storeInfo['StoreUri'],
                        'UriStatus' => 2001,
                        'Error' => "upload file " . $i . " error",
                    ];
                }
            } catch (Exception $e) {
                // failed
                $skippedCommitResult[] = [
                    'Uri' => $storeInfo['StoreUri'],
                    'UriStatus' => 2001,
                    'Error' => $e,
                ];
            }
        }
        if (count($successOids) == 0) {
            throw new Exception("no file uploaded");
        }
        echo ("requsetID ". $applyResponse["ResponseMetadata"]["RequestId"] .", upload cost " . (microtime(true) - $st2) * 1000 . "ms\n");

        if (isset ($params["SkipCommit"]) && $params["SkipCommit"] === true) {
            return [
                "ResponseMetadata" => $applyResponse["ResponseMetadata"],
                "Result" => ["Results" => $skippedCommitResult],
            ];
        }

        $commitParams = array();
        $commitParams["ServiceId"] = $params["ServiceId"];
        if (isset ($params["SkipMeta"])) {
            $commitParams["SkipMeta"] = $params["SkipMeta"];
        }
        $commitBody = array();
        $commitBody["SuccessOids"] = $successOids;
        $commitBody["SessionKey"] = $uploadAddr['SessionKey'];
        if (isset ($params["OptionInfos"])) {
            $commitBody["OptionInfos"] = $params["OptionInfos"];
        }
        if (isset ($params["Functions"])) {
            $commitBody["Functions"] = $params["Functions"];
        }
        $st3 = microtime(true);
        $res =  $this->commitImageUpload($commitParams, $commitBody);
        echo ("requsetID ". $applyResponse["ResponseMetadata"]["RequestId"] .", commit cost " . (microtime(true) - $st3) * 1000 . "ms\n");

        return $res;
    }

    public function getUploadAuthToken($query)
    {
        $token = [
            "Version" => 'v1',
        ];

        $url = $this->getRequestUrl("ApplyImageUpload", $query);
        $m = parse_url($url);
        $token["ApplyUploadToken"] = $m["query"];

        $url = $this->getRequestUrl("CommitImageUpload", $query);
        $m = parse_url($url);
        $token["CommitUploadToken"] = $m["query"];

        return base64_encode(json_encode($token));
    }

    public function getUploadAuth(array $serviceIDList, int $expire = 3600, string $keyPtn = '', array $tag = [])
    {
        $applyRes = [];
        $commitRes = [];
        if (sizeof($serviceIDList) == 0) {
            $applyRes[] = sprintf(ResourceServiceIdTRN, "*");
            $commitRes[] = sprintf(ResourceServiceIdTRN, "*");
        } else {
            foreach ($serviceIDList as $serviceID) {
                $applyRes[] = sprintf(ResourceServiceIdTRN, $serviceID);
                $commitRes[] = sprintf(ResourceServiceIdTRN, $serviceID);
            }
        }
        $applyRes[] = sprintf(ResourceStoreKeyTRN, $keyPtn);

        $policy = [
            'Statement' => [
                $this->newAllowStatement(['ImageX:ApplyImageUpload'], $applyRes),
                $this->newAllowStatement(['ImageX:CommitImageUpload'], $commitRes),
            ],
        ];
        foreach ($tag as $key => $value) {
            $policy['Statement'][] = $this->newAllowStatement([$key], [$value]);
        }
        return $this->signSts2($policy, $expire);
    }
}

function str_to_stream($string)
{
    $stream = fopen('php://memory', 'r+');
    fwrite($stream, $string);
    rewind($stream);

    return $stream;
}