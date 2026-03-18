<?php

namespace Volc\Service\ImageX\V2;

class ImagexConfig
{
    public static function region()
    {
        return [
            'cn-north-1' => [
                'host' => 'https://imagex.volcengineapi.com',
                'config' => [
                    'timeout' => 5.0,
                    'headers' => [
                        'Accept' => 'application/json'
                    ],
                    'v4_credentials' => [
                        'region' => 'cn-north-1',
                        'service' => 'ImageX'
                    ]
                ]
            ],
            'ap-singapore-1' => [
                'host' => 'https://imagex-ap-singapore-1.volcengineapi.com',
                'config' => [
                    'timeout' => 5.0,
                    'headers' => [
                        'Accept' => 'application/json'
                    ],
                    'v4_credentials' => [
                        'region' => 'ap-singapore-1',
                        'service' => 'ImageX'
                    ]
                ]
            ],
            'us-east-1' => [
                'host' => 'https://imagex-us-east-1.volcengineapi.com',
                'config' => [
                    'timeout' => 5.0,
                    'headers' => [
                        'Accept' => 'application/json'
                    ],
                    'v4_credentials' => [
                        'region' => 'us-east-1',
                        'service' => 'ImageX'
                    ]
                ]
            ]
        ];
    }

    public static function apiList()
    {
        return [
            'DelDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DelDomain',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateRefer' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateRefer',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateHttps' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateHttps',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateResponseHeader' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateResponseHeader',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'SetDefaultDomain' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'SetDefaultDomain',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageVolcCdnAccessLog' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageVolcCdnAccessLog',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetResponseHeaderValidateKeys' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetResponseHeaderValidateKeys',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => false,
            ],
            'GetDomainConfig' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetDomainConfig',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetServiceDomains' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetServiceDomains',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageMigrateTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageMigrateTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageMigrateTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageMigrateTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'ExportFailedMigrateTask' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ExportFailedMigrateTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'UpdateImageTaskStrategy' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageTaskStrategy',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'TerminateImageMigrateTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'TerminateImageMigrateTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetVendorBuckets' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetVendorBuckets',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageMigrateTasks' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageMigrateTasks',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'RerunImageMigrateTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'RerunImageMigrateTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXSourceRequestBandwidth' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSourceRequestBandwidth',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXSourceRequestTraffic' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSourceRequestTraffic',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXSourceRequest' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSourceRequest',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXBucketRetrievalUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXBucketRetrievalUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXSummary' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSummary',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXDomainTrafficData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXDomainTrafficData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXDomainBandwidthData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXDomainBandwidthData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXDomainBandwidthNinetyFiveData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXDomainBandwidthNinetyFiveData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXBucketUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXBucketUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXBillingRequestCntUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXBillingRequestCntUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXRequestCntUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXRequestCntUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXBaseOpUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXBaseOpUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXCompressUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCompressUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXScreenshotUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXScreenshotUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXVideoClipDurationUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXVideoClipDurationUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXMultiCompressUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXMultiCompressUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXEdgeRequest' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXEdgeRequest',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXEdgeRequestBandwidth' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXEdgeRequestBandwidth',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXEdgeRequestTraffic' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXEdgeRequestTraffic',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXEdgeRequestRegions' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXEdgeRequestRegions',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXMirrorRequestHttpCodeByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXMirrorRequestHttpCodeByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXMirrorRequestHttpCodeOverview' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXMirrorRequestHttpCodeOverview',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXMirrorRequestTraffic' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXMirrorRequestTraffic',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXMirrorRequestBandwidth' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXMirrorRequestBandwidth',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXServerQPSUsage' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXServerQPSUsage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXHitRateTrafficData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXHitRateTrafficData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXHitRateRequestData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXHitRateRequestData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXCDNTopRequestData' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCDNTopRequestData',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXExceedResolutionRatioAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXExceedResolutionRatioAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXExceedFileSize' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXExceedFileSize',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXExceedCountByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXExceedCountByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXServiceQuality' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXServiceQuality',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageXQueryApps' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageXQueryApps',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageXQueryRegions' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageXQueryRegions',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageXQueryDims' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageXQueryDims',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageXQueryVals' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageXQueryVals',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DescribeImageXUploadCountByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadCountByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadDuration' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadDuration',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadSuccessRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadSuccessRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadFileSize' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadFileSize',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadErrorCodeByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadErrorCodeByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadErrorCodeAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadErrorCodeAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadSpeed' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadSpeed',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXUploadSegmentSpeedByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXUploadSegmentSpeedByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnSuccessRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnSuccessRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnSuccessRateAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnSuccessRateAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnErrorCodeByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnErrorCodeByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnErrorCodeAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnErrorCodeAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnDurationDetailByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnDurationDetailByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnDurationAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnDurationAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnReuseRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnReuseRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnReuseRateAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnReuseRateAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXCdnProtocolRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXCdnProtocolRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientFailureRate' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientFailureRate',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientDecodeSuccessRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientDecodeSuccessRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientDecodeDurationByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientDecodeDurationByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientQueueDurationByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientQueueDurationByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientErrorCodeByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientErrorCodeByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientErrorCodeAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientErrorCodeAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientLoadDuration' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientLoadDuration',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientLoadDurationAll' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientLoadDurationAll',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientSdkVerByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientSdkVerByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientFileSize' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientFileSize',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientTopFileSize' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientTopFileSize',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientCountByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientCountByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientQualityRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientQualityRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientTopQualityURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientTopQualityURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientDemotionRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientDemotionRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientTopDemotionURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientTopDemotionURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXClientScoreByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXClientScoreByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleCountByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleCountByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleCacheHitRateByTime' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleCacheHitRateByTime',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleTopSizeURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleTopSizeURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleTopResolutionURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleTopResolutionURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleTopRamURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleTopRamURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DescribeImageXSensibleTopUnknownURL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DescribeImageXSensibleTopUnknownURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageResourceStatus' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageResourceStatus',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageStorageFiles' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageStorageFiles',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'DeleteImageUploadFiles' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageUploadFiles',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateImageUploadFiles' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageUploadFiles',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CommitImageUpload' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CommitImageUpload',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'ApplyImageUpload' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'ApplyImageUpload',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageUploadFile' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageUploadFile',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageUploadFiles' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageUploadFiles',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageUpdateFiles' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageUpdateFiles',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'PreviewImageUploadFile' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'PreviewImageUploadFile',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageServiceSubscription' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageServiceSubscription',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageService' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageService',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetAllImageServices' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetAllImageServices',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageCompressTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageCompressTask',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'FetchImageUrl' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'FetchImageUrl',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageStorageTTL' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageStorageTTL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetCompressTaskInfo' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetCompressTaskInfo',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetUrlFetchTask' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetUrlFetchTask',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetResourceURL' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetResourceURL',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageFromUri' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageFromUri',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateImageFileKey' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageFileKey',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateImageContentTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageContentTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageContentTaskDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageContentTaskDetail',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageContentBlockList' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageContentBlockList',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateImageTranscodeQueue' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageTranscodeQueue',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageTranscodeQueue' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageTranscodeQueue',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageTranscodeQueue' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageTranscodeQueue',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageTranscodeQueueStatus' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageTranscodeQueueStatus',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageTranscodeQueues' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageTranscodeQueues',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageTranscodeTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageTranscodeTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageTranscodeDetails' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageTranscodeDetails',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageTranscodeCallback' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageTranscodeCallback',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageTranscodeDetail' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageTranscodeDetail',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImagePSDetection' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImagePSDetection',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageEraseResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageEraseResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageSuperResolutionResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageSuperResolutionResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageDuplicateDetection' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageDuplicateDetection',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageOCRV2' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageOCRV2',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageBgFillResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageBgFillResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetSegmentImage' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetSegmentImage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageSmartCropResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageSmartCropResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageComicResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageComicResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageEnhanceResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageEnhanceResult',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageQuality' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageQuality',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetPrivateImageType' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetPrivateImageType',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateHiddenWatermarkImage' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateHiddenWatermarkImage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageDetectResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageDetectResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateImageHmExtract' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageHmExtract',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageHmEmbed' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageHmEmbed',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetComprehensiveEnhanceImage' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetComprehensiveEnhanceImage',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageEraseModels' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageEraseModels',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetDedupTaskStatus' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetDedupTaskStatus',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageService' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageService',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageService' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageService',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'UpdateImageAuthKey' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageAuthKey',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateServiceName' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateServiceName',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateImageObjectAccess' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageObjectAccess',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'UpdateImageMirrorConf' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageMirrorConf',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageAuthKey' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageAuthKey',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageAnalyzeTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageAnalyzeTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageAnalyzeTaskRun' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageAnalyzeTaskRun',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageAnalyzeTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageAnalyzeTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageAnalyzeTaskStatus' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageAnalyzeTaskStatus',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageAnalyzeTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageAnalyzeTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageAnalyzeTasks' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageAnalyzeTasks',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageAnalyzeResult' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageAnalyzeResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageStyleResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageStyleResult',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateImageTemplate' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageTemplate',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'DeleteTemplatesFromBin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteTemplatesFromBin',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'DeleteImageTemplate' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageTemplate',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'CreateTemplatesFromBin' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateTemplatesFromBin',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => true,
            ],
            'GetImageTemplate' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageTemplate',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetTemplatesFromBin' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetTemplatesFromBin',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetAllImageTemplates' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetAllImageTemplates',
                        'Version' => '2018-08-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageAuditTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageAuditTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'DeleteImageAuditResult' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'DeleteImageAuditResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageAuditTaskStatus' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageAuditTaskStatus',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateImageAuditTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateImageAuditTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'UpdateAuditImageStatus' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'UpdateAuditImageStatus',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ],
            'GetImageAuditTasks' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageAuditTasks',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetImageAuditResult' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetImageAuditResult',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'GetAuditEntrysCount' => [
                'method' => 'get',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'GetAuditEntrysCount',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => true,
                'has_json' => false,
            ],
            'CreateImageRetryAuditTask' => [
                'method' => 'post',
                'url' => '/',
                'config' => [
                    'query' => [
                        'Action' => 'CreateImageRetryAuditTask',
                        'Version' => '2023-05-01',
                    ]
                ],
                'has_query' => false,
                'has_json' => true,
            ]
        ];
    }
}