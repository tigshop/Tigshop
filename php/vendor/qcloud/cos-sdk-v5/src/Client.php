<?php

namespace Qcloud\Cos;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Command\Guzzle\Description;
use GuzzleHttp\Command\Guzzle\GuzzleClient;
use GuzzleHttp\Command\Guzzle\Deserializer;
use GuzzleHttp\Command\CommandInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Uri;

/**
 * @method object AbortMultipartUpload(array $args) 舍弃一个分块上传且删除已上传的分片块
 * @method object CreateBucket(array $args) 创建存储桶（Bucket）
 * @method object CompleteMultipartUpload(array $args) 完成整个分块上传
 * @method object CreateMultipartUpload(array $args) 初始化分块上传
 * @method object CopyObject(array $args) 复制对象
 * @method object DeleteBucket(array $args) 删除存储桶 (Bucket)
 * @method object DeleteBucketCors(array $args) 删除跨域访问配置信息
 * @method object DeleteBucketTagging(array $args) 删除存储桶标签信息
 * @method object DeleteBucketInventory(array $args) 删除存储桶标清单任务
 * @method object DeleteObject(array $args) 删除 COS 上单个对象
 * @method object DeleteObjects(array $args) 批量删除 COS 对象
 * @method object DeleteBucketWebsite(array $args) 删除存储桶（Bucket）的website
 * @method object DeleteBucketLifecycle(array $args) 删除存储桶（Bucket）的生命周期配置
 * @method object DeleteBucketReplication(array $args) 删除跨区域复制配置
 * @method object PutObjectTagging(array $args) 配置对象标签
 * @method object GetObjectTagging(array $args) 获取对象标签信息
 * @method object DeleteObjectTagging(array $args) 删除对象标签
 * @method object GetObject(array $args) 下载对象
 * @method object GetObjectAcl(array $args) 获取 COS 对象的访问权限信息（Access Control List, ACL）
 * @method object GetBucketAcl(array $args) 获取存储桶（Bucket）的访问权限信息（Access Control List, ACL）
 * @method object GetBucketCors(array $args) 查询存储桶（Bucket）跨域访问配置信息
 * @method object GetBucketDomain(array $args) 查询存储桶（Bucket）Domain配置信息
 * @method object GetBucketAccelerate(array $args) 查询存储桶（Bucket）Accelerate配置信息
 * @method object GetBucketWebsite(array $args) 查询存储桶（Bucket）Website配置信息
 * @method object GetBucketLifecycle(array $args) 查询存储桶（Bucket）的生命周期配置
 * @method object GetBucketVersioning(array $args) 获取存储桶（Bucket）版本控制信息
 * @method object GetBucketReplication(array $args) 获取存储桶（Bucket）跨区域复制配置信息
 * @method object GetBucketLocation(array $args) 获取存储桶（Bucket）所在的地域信息
 * @method object GetBucketNotification(array $args) 获取存储桶（Bucket）Notification信息
 * @method object GetBucketLogging(array $args) 获取存储桶（Bucket）日志信息
 * @method object GetBucketInventory(array $args) 获取存储桶（Bucket）清单信息
 * @method object GetBucketTagging(array $args) 获取存储桶（Bucket）标签信息
 * @method object UploadPart(array $args) 分块上传
 * @method object PutObject(array $args) 上传对象
 * @method object AppendObject(array $args) 追加对象
 * @method object PutObjectAcl(array $args) 设置 COS 对象的访问权限信息（Access Control List, ACL）
 * @method object PutBucketAcl(array $args) 设置存储桶（Bucket）的访问权限 (Access Control List, ACL)
 * @method object PutBucketCors(array $args) 设置存储桶（Bucket）的跨域配置信息
 * @method object PutBucketDomain(array $args) 设置存储桶（Bucket）的Domain信息
 * @method object PutBucketLifecycle(array $args) 设置存储桶（Bucket）生命周期配置
 * @method object PutBucketVersioning(array $args) 存储桶（Bucket）版本控制
 * @method object PutBucketAccelerate(array $args) 配置存储桶（Bucket）Accelerate
 * @method object PutBucketWebsite(array $args) 配置存储桶（Bucket）website
 * @method object PutBucketReplication(array $args) 配置存储桶（Bucket）跨区域复制
 * @method object PutBucketNotification(array $args) 设置存储桶（Bucket）的回调设置
 * @method object PutBucketTagging(array $args) 配置存储桶（Bucket）标签
 * @method object PutBucketLogging(array $args) 开启存储桶（Bucket）日志服务
 * @method object PutBucketInventory(array $args) 配置存储桶（Bucket）清单
 * @method object RestoreObject(array $args) 回热归档对象
 * @method object ListParts(array $args) 查询存储桶（Bucket）中正在进行中的分块上传对象
 * @method object ListObjects(array $args) 查询存储桶（Bucket）下的部分或者全部对象
 * @method object ListBuckets 获取所属账户的所有存储空间列表
 * @method object ListObjectVersions(array $args) 获取多版本对象
 * @method object ListMultipartUploads(array $args) 获取已上传分块列表
 * @method object ListBucketInventoryConfigurations(array $args) 获取清单列表
 * @method object HeadObject(array $args) 获取对象的meta信息
 * @method object HeadBucket(array $args) 存储桶（Bucket）是否存在
 * @method object UploadPartCopy(array $args) 分块copy
 * @method object SelectObjectContent(array $args) 检索对象内容
 * @method object PutBucketIntelligentTiering(array $args) 存储桶（Bucket）开启智能分层
 * @method object GetBucketIntelligentTiering(array $args) 查询存储桶（Bucket）智能分层
 * @method object ImageInfo(array $args) 万象-获取图片基本信息
 * @method object ImageExif(array $args) 万象-获取图片EXIF信息
 * @method object ImageAve(array $args) 万象-获取图片主色调信息
 * @method object ImageProcess(array $args) 万象-云上数据处理
 * @method object Qrcode(array $args) 万象-二维码下载时识别
 * @method object QrcodeGenerate(array $args) 万象-二维码生成
 * @method object DetectLabel(array $args) 万象-图片标签
 * @method object PutBucketImageStyle(array $args) 万象-增加样式
 * @method object GetBucketImageStyle(array $args) 万象-查询样式
 * @method object DeleteBucketImageStyle(array $args) 万象-删除样式
 * @method object PutBucketGuetzli(array $args) 万象-开通Guetzli压缩
 * @method object GetBucketGuetzli(array $args) 万象-查询Guetzli状态
 * @method object DeleteBucketGuetzli(array $args) 万象-关闭Guetzli压缩
 * @method object GetObjectSensitiveContentRecognition(array $args) 图片审核
 * @method object DetectText(array $args) 文本审核
 * @method object GetSnapshot(array $args) 媒体截图
 * @method object PutBucketReferer(array $args) 添加防盗链
 * @method object GetBucketReferer(array $args) 获取防盗链规则
 * @method object GetMediaInfo(array $args) 获取媒体信息
 * @method object CreateMediaTranscodeJobs(array $args) 媒体转码
 * @method object CreateMediaJobs(array $args) 媒体任务
 * @method object DescribeMediaJob(array $args) 查询指定的媒体任务
 * @method object DescribeMediaJobs(array $args) 拉取拉取符合条件的媒体任务
 * @method object CreateMediaSnapshotJobs(array $args) 媒体截图
 * @method object CreateMediaConcatJobs(array $args) 媒体拼接
 * @method object DetectAudio(array $args) 音频审核
 * @method object GetDetectAudioResult(array $args) 主动获取音频审核结果
 * @method object GetDetectTextResult(array $args) 主动获取文本文件审核结果
 * @method object DetectVideo(array $args) 视频审核
 * @method object GetDetectVideoResult(array $args) 主动获取视频审核结果
 * @method object DetectDocument(array $args) 文档审核
 * @method object GetDetectDocumentResult(array $args) 主动获取文档审核结果
 * @method object CreateDocProcessJobs(array $args) 提交文档转码任务
 * @method object DescribeDocProcessQueues(array $args) 查询文档转码队列
 * @method object DescribeDocProcessJob(array $args) 查询文档转码任务
 * @method object GetDescribeDocProcessJobs(array $args) 拉取符合条件的文档转码任务
 * @method object DetectImage(array $args) 图片审核
 * @method object DetectImages(array $args) 图片审核-批量
 * @method object DetectVirus(array $args) 云查毒
 * @method object GetDetectVirusResult(array $args) 查询病毒检测任务结果
 * @method object GetDetectImageResult(array $args) 主动获取图片审核结果
 * @method object CreateMediaVoiceSeparateJobs(array $args) 提交人声分离任务
 * @method object DescribeMediaVoiceSeparateJob(array $args) 查询指定的人声分离任务
 * @method object DetectWebpage(array $args) 提交网页审核任务
 * @method object GetDetectWebpageResult(array $args) 查询网页审核任务结果
 * @method object DescribeMediaBuckets(array $args) 查询媒体处理开通状态
 * @method object GetPrivateM3U8(array $args) 获取私有 M3U8 ts 资源的下载授权
 * @method object DescribeMediaQueues(array $args) 搜索媒体处理队列
 * @method object UpdateMediaQueue(array $args) 更新媒体处理队列
 * @method object CreateMediaSmartCoverJobs(array $args) 提交智能封面任务
 * @method object CreateMediaVideoProcessJobs(array $args) 提交视频增强任务
 * @method object CreateMediaVideoMontageJobs(array $args) 提交精彩集锦任务
 * @method object CreateMediaAnimationJobs(array $args) 提交动图任务
 * @method object CreateMediaPicProcessJobs(array $args) 提交图片处理任务
 * @method object CreateMediaSegmentJobs(array $args) 提交转封装任务
 * @method object CreateMediaVideoTagJobs(array $args) 提交视频标签任务
 * @method object CreateMediaSuperResolutionJobs(array $args) 提交超分辨率任务
 * @method object CreateMediaSDRtoHDRJobs(array $args) 提交 SDR to HDR 任务
 * @method object CreateMediaDigitalWatermarkJobs(array $args) 嵌入数字水印任务(添加水印)
 * @method object CreateMediaExtractDigitalWatermarkJobs(array $args) 提取数字水印任务(提取水印)
 * @method object DetectLiveVideo(array $args) 直播流审核
 * @method object CancelLiveVideoAuditing(array $args) 取消直播流审核
 * @method object OpticalOcrRecognition(array $args) 通用文字识别
 * @method object TriggerWorkflow(array $args) 手动触发工作流
 * @method object GetWorkflowInstances(array $args) 获取工作流实例列表
 * @method object GetWorkflowInstance(array $args) 获取工作流实例详情
 * @method object CreateMediaSnapshotTemplate(array $args) 新增截图模板
 * @method object UpdateMediaSnapshotTemplate(array $args) 更新截图模板
 * @method object CreateMediaTranscodeTemplate(array $args) 新增转码模板
 * @method object UpdateMediaTranscodeTemplate(array $args) 更新转码模板
 * @method object CreateMediaHighSpeedHdTemplate(array $args) 新增极速高清转码模板
 * @method object UpdateMediaHighSpeedHdTemplate(array $args) 更新极速高清转码模板
 * @method object CreateMediaAnimationTemplate(array $args) 新增动图模板
 * @method object UpdateMediaAnimationTemplate(array $args) 更新动图模板
 * @method object CreateMediaConcatTemplate(array $args) 新增拼接模板
 * @method object UpdateMediaConcatTemplate(array $args) 更新拼接模板
 * @method object CreateMediaVideoProcessTemplate(array $args) 新增视频增强模板
 * @method object UpdateMediaVideoProcessTemplate(array $args) 更新视频增强模板
 * @method object CreateMediaVideoMontageTemplate(array $args) 新增精彩集锦模板
 * @method object UpdateMediaVideoMontageTemplate(array $args) 更新精彩集锦模板
 * @method object CreateMediaVoiceSeparateTemplate(array $args) 新增人声分离模板
 * @method object UpdateMediaVoiceSeparateTemplate(array $args) 更新人声分离模板
 * @method object CreateMediaSuperResolutionTemplate(array $args) 新增超分辨率模板
 * @method object UpdateMediaSuperResolutionTemplate(array $args) 更新超分辨率模板
 * @method object CreateMediaPicProcessTemplate(array $args) 新增图片处理模板
 * @method object UpdateMediaPicProcessTemplate(array $args) 更新图片处理模板
 * @method object CreateMediaWatermarkTemplate(array $args) 新增水印模板
 * @method object UpdateMediaWatermarkTemplate(array $args) 更新水印模板
 * @method object DescribeMediaTemplates(array $args) 查询模板列表
 * @method object DescribeWorkflow(array $args) 搜索工作流
 * @method object DeleteWorkflow(array $args) 删除工作流
 * @method object CreateInventoryTriggerJob(array $args) 触发批量存量任务
 * @method object DescribeInventoryTriggerJobs(array $args) 批量拉取存量任务
 * @method object DescribeInventoryTriggerJob(array $args) 查询存量任务
 * @method object CancelInventoryTriggerJob(array $args) 取消存量任务
 * @method object CreateMediaNoiseReductionJobs(array $args) 提交音频降噪任务
 * @method object ImageRepairProcess(array $args) 图片水印修复
 * @method object ImageDetectCarProcess(array $args) 车辆车牌检测
 * @method object ImageAssessQualityProcess(array $args) 图片质量评估
 * @method object ImageSearchOpen(array $args) 开通以图搜图
 * @method object ImageSearchAdd(array $args) 添加图库图片
 * @method object ImageSearch(array $args) 图片搜索接口
 * @method object ImageSearchDelete(array $args) 图片搜索接口
 * @method object BindCiService(array $args) 绑定数据万象服务
 * @method object GetCiService(array $args) 查询数据万象服务
 * @method object UnBindCiService(array $args) 解绑数据万象服务
 * @method object GetHotLink(array $args) 查询防盗链
 * @method object AddHotLink(array $args) 查询防盗链
 * @method object OpenOriginProtect(array $args) 开通原图保护
 * @method object GetOriginProtect(array $args) 查询原图保护状态
 * @method object CloseOriginProtect(array $args) 关闭原图保护
 * @method object ImageDetectFace(array $args) 人脸检测
 * @method object ImageFaceEffect(array $args) 人脸特效
 * @method object IDCardOCR(array $args) 身份证识别
 * @method object IDCardOCRByUpload(array $args) 身份证识别-上传时处理
 * @method object GetLiveCode(array $args) 获取数字验证码
 * @method object GetActionSequence(array $args) 获取动作顺序
 * @method object DescribeDocProcessBuckets(array $args) 查询文档预览开通状态
 * @method object UpdateDocProcessQueue(array $args) 更新文档转码队列
 * @method object CreateMediaQualityEstimateJobs(array $args) 提交视频质量评分任务
 * @method object CreateMediaStreamExtractJobs(array $args) 提交音视频流分离任务
 * @method object FileJobs4Hash(array $args) 哈希值计算同步请求
 * @method object OpenFileProcessService(array $args) 开通文件处理服务
 * @method object GetFileProcessQueueList(array $args) 搜索文件处理队列
 * @method object UpdateFileProcessQueue(array $args) 更新文件处理的队列
 * @method object CreateFileHashCodeJobs(array $args) 提交哈希值计算任务
 * @method object GetFileHashCodeResult(array $args) 查询哈希值计算结果
 * @method object CreateFileUncompressJobs(array $args) 提交文件解压任务
 * @method object GetFileUncompressResult(array $args) 查询文件解压结果
 * @method object CreateFileCompressJobs(array $args) 提交多文件打包压缩任务
 * @method object GetFileCompressResult(array $args) 查询多文件打包压缩结果
 * @method object CreateM3U8PlayListJobs(array $args) 获取指定hls/m3u8文件指定时间区间内的ts资源
 * @method object GetPicQueueList(array $args) 搜索图片处理队列
 * @method object UpdatePicQueue(array $args) 更新图片处理队列
 * @method object GetPicBucketList(array $args) 查询图片处理服务状态
 * @method object GetAiBucketList(array $args) 查询 AI 内容识别服务状态
 * @method object OpenAiService(array $args) 开通 AI 内容识别
 * @method object CloseAiService(array $args) 关闭AI内容识别服务
 * @method object GetAiQueueList(array $args) 搜索 AI 内容识别队列
 * @method object UpdateAiQueue(array $args) 更新 AI 内容识别队列
 * @method object CreateMediaTranscodeProTemplate(array $args) 创建音视频转码 pro 模板
 * @method object UpdateMediaTranscodeProTemplate(array $args) 更新音视频转码 pro 模板
 * @method object CreateVoiceTtsTemplate(array $args) 创建语音合成模板
 * @method object UpdateVoiceTtsTemplate(array $args) 更新语音合成模板
 * @method object CreateMediaSmartCoverTemplate(array $args) 创建智能封面模板
 * @method object UpdateMediaSmartCoverTemplate(array $args) 更新智能封面模板
 * @method object CreateVoiceSpeechRecognitionTemplate(array $args) 创建语音识别模板
 * @method object UpdateVoiceSpeechRecognitionTemplate(array $args) 更新语音识别模板
 * @method object CreateVoiceTtsJobs(array $args) 提交一个语音合成任务
 * @method object CreateAiTranslationJobs(array $args) 提交一个翻译任务
 * @method object CreateVoiceSpeechRecognitionJobs(array $args) 提交一个语音识别任务
 * @method object CreateAiWordsGeneralizeJobs(array $args) 提交一个分词任务
 * @method object CreateMediaVideoEnhanceJobs(array $args) 提交画质增强任务
 * @method object CreateMediaVideoEnhanceTemplate(array $args) 创建画质增强模板
 * @method object UpdateMediaVideoEnhanceTemplate(array $args) 更新画质增强模板
 * @method object OpenImageSlim(array $args) 开通图片瘦身
 * @method object CloseImageSlim(array $args) 关闭图片瘦身
 * @method object GetImageSlim(array $args) 查询图片瘦身状态
 * @method object AutoTranslationBlockProcess(array $args) 实时文字翻译
 * @method object RecognizeLogoProcess(array $args) Logo 识别
 * @method object DetectLabelProcess(array $args) 图片标签
 * @method object AIGameRecProcess(array $args) 游戏场景识别
 * @method object AIBodyRecognitionProcess(array $args) 人体识别
 * @method object DetectPetProcess(array $args) 宠物识别
 * @method object AILicenseRecProcess(array $args) 卡证识别
 * @method object CreateMediaTargetRecTemplate(array $args) 创建视频目标检测模板
 * @method object UpdateMediaTargetRecTemplate(array $args) 更新视频目标检测模板
 * @method object CreateMediaTargetRecJobs(array $args) 提交视频目标检测任务
 * @method object CreateMediaSegmentVideoBodyJobs(array $args) 提交视频人像抠图任务
 * @method object OpenAsrService(array $args) 开通智能语音服务
 * @method object GetAsrBucketList(array $args) 查询智能语音服务
 * @method object CloseAsrService(array $args) 关闭智能语音服务
 * @method object GetAsrQueueList(array $args) 查询智能语音队列
 * @method object UpdateAsrQueue(array $args) 更新智能语音队列
 * @method object CreateMediaNoiseReductionTemplate(array $args) 创建音频降噪模板
 * @method object UpdateMediaNoiseReductionTemplate(array $args) 更新音频降噪模板
 * @method object CreateVoiceSoundHoundJobs(array $args) 提交听歌识曲任务
 * @method object CreateVoiceVocalScoreJobs(array $args) 提交音乐评分任务
 * @method object CreateDataset(array $args) 创建数据集
 * @method object CreateDatasetBinding(array $args) 绑定存储桶与数据集
 * @method object CreateFileMetaIndex(array $args) 创建元数据索引
 * @method object DatasetFaceSearch(array $args) 人脸搜索
 * @method object DatasetSimpleQuery(array $args) 简单查询
 * @method object DeleteDataset(array $args) 删除数据集
 * @method object DeleteDatasetBinding(array $args) 解绑存储桶与数据集
 * @method object DeleteFileMetaIndex(array $args) 删除元数据索引
 * @method object DescribeDataset(array $args) 查询数据集
 * @method object DescribeDatasetBinding(array $args) 查询数据集与存储桶的绑定关系
 * @method object DescribeDatasetBindings(array $args) 查询绑定关系列表
 * @method object DescribeDatasets(array $args) 列出数据集
 * @method object DescribeFileMetaIndex(array $args) 查询元数据索引
 * @method object SearchImage(array $args) 图像检索
 * @method object UpdateDataset(array $args) 更新数据集
 * @method object UpdateFileMetaIndex(array $args) 更新元数据索引
 * @method object ZipFilePreview(array $args) 压缩包预览同步请求
 * @method object GetHLSPlayKey(array $args) 获取hls播放密钥
 * @method object PostWatermarkJobs(array $args) 视频明水印-提交任务
 * @method object GeneratePlayList(array $args) 生成播放列表
 * @method object CreateWatermarkTemplate(array $args) 创建明水印模板
 * @see \Qcloud\Cos\Service::getService()
 */
class Client extends GuzzleClient {
    const VERSION = '2.6.13';

    public $httpClient;

    private $api;
    private $desc;
    private $action;
    private $operation;
    private $signature;
    private $rawCosConfig;

    private $cosConfig = [
        'scheme' => 'http',
        'region' => null,
        'credentials' => [
            'appId' => null,
            'secretId' => '',
            'secretKey' => '',
            'anonymous' => false,
            'token' => null,
        ],
        'timeout' => 3600,
        'connect_timeout' => 3600,
        'ip' => null,
        'port' => null,
        'endpoint' => null,
        'domain' => null,
        'proxy' => null,
        'retry' => 6,
        'userAgent' => 'cos-php-sdk-v5.' . Client::VERSION,
        'pathStyle' => false,
        'signHost' => true,
        'allow_redirects' => false,
        'allow_accelerate' => false,
        'timezone' => 'PRC',
        'locationWithScheme' => false,
        'autoChange' => false,
        'limit_flag' => false,
        'isCheckRequestPath' => true,
    ];

    public function __construct(array $cosConfig) {
        $this->rawCosConfig = $cosConfig;

        $this->cosConfig = processCosConfig(array_replace_recursive($this->cosConfig, $cosConfig));

        global $globalCosConfig;
        $globalCosConfig = $this->cosConfig;

        // check config
        $this->inputCheck();

        $service = Service::getService();
        $handler = HandlerStack::create();

        $handler->push(Middleware::retry(function ($retries, $request, $response, $exception) use (&$retryCount) {

            $this->cosConfig['limit_flag'] = false;

            $retryCount = $retries;
            if ($retryCount >= $this->cosConfig['retry']) {
                return false;
            }


            if ($response) {
                if ($response->getStatusCode() >= 300 && !$response->hasHeader('x-cos-request-id')) {
                    $this->cosConfig['limit_flag'] = true;
                    return true;
                }

                if ($response->getStatusCode() >= 500 ) {
                    return true;
                }
            } elseif ($exception) {
                if ($exception instanceof Exception\ServiceResponseException) {
                    if ($exception->getStatusCode() >= 500) {
                        $this->cosConfig['limit_flag'] = true;
                        return true;
                    }

                }
                if ($exception instanceof ConnectException) {
                    return true;
                }
            }
            return false;
        }, $this->retryDelay()));

        $handler->push(Middleware::mapRequest(function (RequestInterface $request) use (&$retryCount) {
            // 获取域名
            $origin_host = $request->getUri()->getHost();

            // 匹配 *.cos.{Region}.myqcloud.com
            $pattern1 = '/\.cos\.[a-z0-9-]+\.myqcloud\.com$/';

            if ($retryCount > 2 && $this->cosConfig['autoChange'] && $this->cosConfig['limit_flag'] && preg_match($pattern1, $origin_host)) {
                $origin = $request->getUri();
                $host = str_replace("myqcloud.com", "tencentcos.cn", $origin->getHost());

                // 将 URI 转换为字符串，然后替换主机名
                $originUriString = (string) $origin;
                $originUriString = str_replace("myqcloud.com", "tencentcos.cn", $originUriString);
                $originUriString = str_replace($origin->getScheme() . "://", "", $originUriString);

                // 创建新的 URI 对象
                $uri = new Uri($originUriString);

                // 获取路径，并从路径中移除主机名
                $path = $uri->getPath();
                $path = str_replace($host, '', $path);

                // 使用新的路径创建新的 URI
                $uri = $uri->withPath($path);
                $uri = $uri->withHost($host)->withScheme($origin->getScheme());


                // 更新请求的 URI 和主机头
                $request = $request->withUri($uri)->withHeader('Host', $host);
                return $request;
            }
            return $request;
        }));

		$handler->push(Middleware::mapRequest(function (RequestInterface $request) {
			return $request->withHeader('User-Agent', $this->cosConfig['userAgent']);
        }));

        if ($this->cosConfig['anonymous'] != true) {
            $handler->push($this::handleSignature($this->cosConfig['secretId'], $this->cosConfig['secretKey'], $this->cosConfig));
        }
        if ($this->cosConfig['token'] != null) {
            $handler->push(Middleware::mapRequest(function (RequestInterface $request) {
                $request = $request->withHeader('x-ci-security-token', $this->cosConfig['token']);
                return $request->withHeader('x-cos-security-token', $this->cosConfig['token']);
            }));
        }
        $handler->push($this::handleErrors());
        $this->signature = new Signature($this->cosConfig['secretId'], $this->cosConfig['secretKey'], $this->cosConfig, $this->cosConfig['token']);
        $area = $this->cosConfig['allow_accelerate'] ? 'accelerate' : $this->cosConfig['region'];
        $this->httpClient = new HttpClient([
            'base_uri' => "{$this->cosConfig['scheme']}://cos.{$area}.myqcloud.com/",
            'timeout' => $this->cosConfig['timeout'],
            'handler' => $handler,
            'proxy' => $this->cosConfig['proxy'],
            'allow_redirects' => $this->cosConfig['allow_redirects']
        ]);
        $this->desc = new Description($service);
        $this->api = (array) $this->desc->getOperations();
        parent::__construct($this->httpClient, $this->desc, [$this,
            'commandToRequestTransformer'], [$this, 'responseToResultTransformer'],
            null);
    }


    public function inputCheck() {
        $message = null;
        //检查Region
        if (empty($this->cosConfig['region'])   &&
            empty($this->cosConfig['domain'])   &&
            empty($this->cosConfig['endpoint']) &&
            empty($this->cosConfig['ip'])       &&
            !$this->cosConfig['allow_accelerate']) {
            $message = 'Region is empty';
        }
        //检查Secret
        if (empty($this->cosConfig['secretId']) || empty($this->cosConfig['secretKey'])) {
            $message = 'Secret is empty';
        }
        if ($message !== null) {
            $e = new Exception\CosException($message);
            $e->setExceptionCode('Invalid Argument');
            throw $e;
        }
    }

    public function retryDelay() {
        return function ($numberOfRetries) {
            return 1000 * $numberOfRetries;
        };
    }

    public function commandToRequestTransformer(CommandInterface $command)
    {
        $this->action = $command->GetName();
        $this->operation = $this->api[$this->action];
        $transformer = new CommandToRequestTransformer($this->cosConfig, $this->operation);
        $seri = new Serializer($this->desc);
        $request = $seri($command);
        $request = $transformer->bucketStyleTransformer($command, $request);
        $request = $transformer->uploadBodyTransformer($command, $request);
        $request = $transformer->metadataTransformer($command, $request);
        $request = $transformer->queryStringTransformer($command, $request);
        $request = $transformer->headerTransformer($command, $request);
        $request = $transformer->md5Transformer($command, $request);
        $request = $transformer->specialParamTransformer($command, $request);
        $request = $transformer->ciParamTransformer($command, $request);
        $request = $transformer->cosDomain2CiTransformer($command, $request);
        return $request;
    }

    public function responseToResultTransformer(ResponseInterface $response, RequestInterface $request, CommandInterface $command)
    {

        $transformer = new ResultTransformer($this->cosConfig, $this->operation);
        $transformer->writeDataToLocal($command, $request, $response);
        $deseri = new Deserializer($this->desc, true);
        $result = $deseri($response, $request, $command);

        $result = $transformer->metaDataTransformer($command, $response, $result);
        $result = $transformer->extraHeadersTransformer($command, $request, $result);
        $result = $transformer->selectContentTransformer($command, $result);
        $result = $transformer->ciContentInfoTransformer($command, $result);
        return $result;
    }

    public function __destruct() {
    }

    public function __call($method, array $args) {
        try {
            $rt = parent::__call(ucfirst($method), $args);
            return $rt;
        } catch (\Exception $e) {
            $previous = $e->getPrevious();
            if ($previous !== null) {
                throw $previous;
            } else {
                throw $e;
            }
        }
    }

    public function getApi() {
        return $this->api;
    }

    /**
     * Get the config of the cos client.
     *
     * @param array|string $option
     * @return mixed
     */
    public function getCosConfig($option = null)
    {
        return $option === null
            ? $this->cosConfig
            : (isset($this->cosConfig[$option]) ? $this->cosConfig[$option] : array());
    }

    public function setCosConfig($option, $value)
    {
        $this->cosConfig[$option] = $value;
    }

    private function createPresignedUrl(RequestInterface $request, $expires) {
        return $this->signature->createPresignedUrl($request, $expires);
    }

    public function getPresignedUrl($method, $args, $expires = "+30 minutes") {
        $command = $this->getCommand($method, $args);
        $request = $this->commandToRequestTransformer($command);
        return $this->createPresignedUrl($request, $expires);
    }

    public function getObjectUrl($bucket, $key, $expires = "+30 minutes", array $args = array()) {
        $command = $this->getCommand('GetObject', $args + array('Bucket' => $bucket, 'Key' => $key));
        $request = $this->commandToRequestTransformer($command);
        return $this->createPresignedUrl($request, $expires)->__toString();
    }

    public function getObjectUrlWithoutSign($bucket, $key, array $args = array()) {
        $command = $this->getCommand('GetObject', $args + array('Bucket' => $bucket, 'Key' => $key));
        $request = $this->commandToRequestTransformer($command);
        return $request->getUri()->__toString();
    }

    public function upload($bucket, $key, $body, $options = array()) {
        $body = Psr7\Utils::streamFor($body);
        $options['Retry'] = $this->cosConfig['retry'];
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : MultipartUpload::DEFAULT_PART_SIZE;
        if ($body->getSize() < $options['PartSize']) {
            $rt = $this->putObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'Body'   => $body,
                ) + $options);
        }
        else {
            $multipartUpload = new MultipartUpload($this, $body, array(
                    'Bucket' => $bucket,
                    'Key' => $key,
                ) + $options);

            $rt = $multipartUpload->performUploading();
        }
        return $rt;
    }

    public static function simplifyPath($path) {
        $names = explode("/", $path);
        $stack = array();
        foreach ($names as $name) {
            if ($name == "..") {
                if (!empty($stack)) {
                    array_pop($stack);
                }
            } elseif ($name && $name != ".") {
                array_push($stack, $name);
            }
        }
        return "/" . implode("/", $stack);
    }

    public function download($bucket, $key, $saveAs, $options = array()) {
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : RangeDownload::DEFAULT_PART_SIZE;
        $versionId = isset($options['VersionId']) ? $options['VersionId'] : '';
        if ($this->cosConfig['isCheckRequestPath'] && "/" == self::simplifyPath($key)) {
            $e = new Exception\CosException('Getobject Key is illegal');
            $e->setExceptionCode('404');
            throw $e;
        }
        $rt = $this->headObject(array(
                'Bucket'=>$bucket,
                'Key'=>$key,
                'VersionId'=>$versionId,
            )
        );
        $contentLength = $rt['ContentLength'];
        $resumableJson = [
            'LastModified' => $rt['LastModified'],
            'ContentLength' => $rt['ContentLength'],
            'ETag' => $rt['ETag'],
            'Crc64ecma' => $rt['Crc64ecma']
        ];
        $options['ResumableJson'] = $resumableJson;

        if ($contentLength < $options['PartSize']) {
            $rt = $this->getObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'SaveAs'   => $saveAs,
                ) + $options);
        } else {
            $rangeDownload = new RangeDownload($this, $contentLength, $saveAs, array(
                    'Bucket' => $bucket,
                    'Key' => $key,
                ) + $options);

            $rt = $rangeDownload->performDownloading();
        }
        return $rt;
    }

    public function resumeUpload($bucket, $key, $body, $uploadId, $options = array()) {
        $body = Psr7\Utils::streamFor($body);
        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : MultipartUpload::DEFAULT_PART_SIZE;
        $multipartUpload = new MultipartUpload($this, $body, array(
                'Bucket' => $bucket,
                'Key' => $key,
                'UploadId' => $uploadId,
            ) + $options);

        $rt = $multipartUpload->resumeUploading();
        return $rt;
    }

    public function copy($bucket, $key, $copySource, $options = array()) {

        $options['PartSize'] = isset($options['PartSize']) ? $options['PartSize'] : Copy::DEFAULT_PART_SIZE;

        // set copysource client
        $sourceConfig = $this->rawCosConfig;
        $sourceConfig['region'] = $copySource['Region'];
        $cosSourceClient = new Client($sourceConfig);
        $copySource['VersionId'] = isset($copySource['VersionId']) ? $copySource['VersionId'] : '';

        $rt = $cosSourceClient->headObject(
            array('Bucket'=>$copySource['Bucket'],
                'Key'=>$copySource['Key'],
                'VersionId'=>$copySource['VersionId'],
            )
        );

        $contentLength = $rt['ContentLength'];
        // sample copy
        if ($contentLength < $options['PartSize']) {
            $rt = $this->copyObject(array(
                    'Bucket' => $bucket,
                    'Key'    => $key,
                    'CopySource'   => "{$copySource['Bucket']}.cos.{$copySource['Region']}.myqcloud.com/". urlencode("{$copySource['Key']}")."?versionId={$copySource['VersionId']}",
                ) + $options
            );
            return $rt;
        }
        // multi part copy
        $copySource['ContentLength'] = $contentLength;
        $copy = new Copy($this, $copySource, array(
                'Bucket' => $bucket,
                'Key'    => $key
            ) + $options
        );
        return $copy->copy();
    }

    public function doesBucketExist($bucket, array $options = array())
    {
        try {
            $this->HeadBucket(array(
                'Bucket' => $bucket));
            return true;
        } catch (\Exception $e){
            return false;
        }
    }

    public function doesObjectExist($bucket, $key, array $options = array())
    {
        try {
            $this->HeadObject(array(
                'Bucket' => $bucket,
                'Key' => $key));
            return true;
        } catch (\Exception $e){
            return false;
        }
    }
    
    public static function explodeKey($key) {
        global $globalCosConfig;
        if ($globalCosConfig['isCheckRequestPath'] && "/" == self::simplifyPath($key)) {
            $e = new Exception\CosException('Getobject Key is illegal');
            $e->setExceptionCode('404');
            throw $e;
        }
        // Remove a leading slash if one is found
        $split_key = explode('/', $key && $key[0] == '/' ? substr($key, 1) : $key);
        // Remove empty element
        $split_key = array_filter($split_key, function($var) {
            return !($var == '' || $var == null);
        });
        $final_key = implode("/", $split_key);
        if (substr($key, -1)  == '/') {
            $final_key = $final_key . '/';
        }
        return $final_key;
    }

    public static function handleSignature($secretId, $secretKey, $options) {
            return function (callable $handler) use ($secretId, $secretKey, $options) {
                    return new SignatureMiddleware($handler, $secretId, $secretKey, $options);
            };
    }

    public static function handleErrors() {
            return function (callable $handler) {
                    return new ExceptionMiddleware($handler);
            };
    }
}
