<?php

require('../../../vendor/autoload.php');

use Volc\Service\Imp\Imp;
use Volc\Service\Imp\Models\Business\InputPath;
use Volc\Service\Imp\Models\Business\DetectRect;
use Volc\Service\Imp\Models\Business\OCR;
use Volc\Service\Imp\Models\Business\OutputOverrideParams;
use Volc\Service\Imp\Models\Business\OutputPath;
use Volc\Service\Imp\Models\Business\OverrideParams;
use Volc\Service\Imp\Models\Business\Params;
use Volc\Service\Imp\Models\Business\SmartEraseOverrideParams;
use Volc\Service\Imp\Models\Business\Watermark;
use Volc\Service\Imp\Models\Request\ImpSubmitJobRequest;
use Volc\Service\Imp\Models\Response\ImpSubmitJobResponse;

// call below method if you don't set ak and sk in $HOME/.vcloud/config
$client = Imp::getInstance();
$client->setAccessKey("your ak");
$client->setSecretKey("your sk");

$request = new ImpSubmitJobRequest();

$inputPath = new InputPath();
$inputPath->setType("VOD");
$inputPath->setVodSpaceName("your space name");
$inputPath->setFileId("your file id");

$params = new Params();
$overrideParams = new OverrideParams();
// SmartEraseOverrideParams
$smartErases = array();
$smartErase = new SmartEraseOverrideParams();
$watermark = new Watermark();
$watermarkDetectRects = array();
$watermarkDetectRect = new DetectRect();
$watermarkDetectRect->setX1(0);
$watermarkDetectRect->setY1(0);
$watermarkDetectRect->setX2(1);
$watermarkDetectRect->setY2(1);
$watermarkDetectRects[0] = $watermarkDetectRect;
$watermark->setDetectRect($watermarkDetectRects);
$ocr = new OCR();
$ocrDetectRects = array();
$ocrDetectRect = new DetectRect();
$ocrDetectRect->setX1(0);
$ocrDetectRect->setY1(0);
$ocrDetectRect->setX2(1);
$ocrDetectRect->setY2(1);
$ocrDetectRects[0] = $ocrDetectRect;
$ocr->setDetectRect($ocrDetectRects);
$smartErase->setActivityId(array("*"));
$smartErase->setWatermark($watermark);
$smartErase->setOCR($ocr);
$smartErases[0] = $smartErase;
$overrideParams->setSmartErase($smartErases);
// OutputOverrideParams
$outputs = array();
$output = new OutputOverrideParams();
$output_path = new OutputPath();
$output_path->setType("your storage type");
$output_path->setVodSpaceName("your vod spaceName");
$output_path->setTosBucket("your tos bucketName");
$output_path->setFileName("output FileName");
$output->setActivityId(array("*"));
$output->setOutputPath($output_path);
$outputs[0] = $output;
$overrideParams->setOutput($outputs);
$params->setOverrideParams($overrideParams);

$request->setTemplateId("your template id");
$request->setCallbackArgs("your callback args");
$request->setEnableLowPriority("false"); // true 开启 false 不开启 闲时转码
$request->setInputPath($inputPath);
$request->setParams($params);

$response = new ImpSubmitJobResponse();
try {
    $response = $client->SubmitJob($request);
} catch (Exception $e) {
    echo $e, "\n";
} catch (Throwable $e) {
    echo $e, "\n";
}
if ($response->getResponseMetadata()->getError() != null) {
    print_r($response->getResponseMetadata()->getError());
}

echo $response->serializeToJsonString();
echo "\n";
