<?php

namespace Qcloud\Cos;

/**
 * @link http://guzzle3.readthedocs.io/webservice-client/guzzle-service-descriptions.html
 */
class Service {
    public static function getService() {
        return array(
            'name' => 'Cos Service',
            'apiVersion' => 'V5',
            'description' => 'Cos V5 API Service',
            'operations' => array(
                // 舍弃一个分块上传且删除已上传的分片块
                'AbortMultipartUpload' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'AbortMultipartUploadOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')),
                        'UploadId' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'uploadId'
                        )
                    )
                ),
                // 创建存储桶（Bucket）
                'CreateBucket' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'CreateBucketOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'CreateBucketConfiguration')),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl'),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        )
                    )
                ),
                // 完成整个分块上传
                'CompleteMultipartUpload' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'CompleteMultipartUploadOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'CompleteMultipartUpload'
                        )
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'Parts' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true),
                            'items' => array(
                                'name' => 'CompletedPart',
                                'type' => 'object',
                                'sentAs' => 'Part',
                                'properties' => array(
                                    'ETag' => array(
                                        'type' => 'string'
                                    ),
                                    'PartNumber' => array(
                                        'type' => 'numeric'
                                    )
                                )
                            )
                        ),
                        'UploadId' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'uploadId',
                        ),
                        'PicOperations' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Pic-Operations',
                        )
                    )
                ),
                // 初始化分块上传
                'CreateMultipartUpload' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}{/Key*}?uploads',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'CreateMultipartUploadOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'CreateMultipartUploadRequest'
                        )
                    ),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl',
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control',
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition',
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding',
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'Expires' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                        ),
                        'GrantFullControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-full-control',
                        ),
                        'GrantRead' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read',
                        ),
                        'GrantReadACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read-acp',
                        ),
                        'GrantWriteACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write-acp',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        ),
                        'PicOperations' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Pic-Operations',
                        )
                    )
                ),
                // 复制对象
                'CopyObject' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'CopyObjectOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'CopyObjectRequest',
                        ),
                    ),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl',
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control',
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition',
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding',
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'CopySource' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source',
                        ),
                        'CopySourceIfMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-match',
                        ),
                        'CopySourceIfModifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-modified-since',
                        ),
                        'CopySourceIfNoneMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-none-match',
                        ),
                        'CopySourceIfUnmodifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-unmodified-since',
                        ),
                        'Expires' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                        ),
                        'GrantFullControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-full-control',
                        ),
                        'GrantRead' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read',
                        ),
                        'GrantReadACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read-acp',
                        ),
                        'GrantWriteACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write-acp',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'MetadataDirective' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-metadata-directive',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'CopySourceSSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-algorithm',
                        ),
                        'CopySourceSSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-key',
                        ),
                        'CopySourceSSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-key-MD5',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        )
                    ),
                ),
                // 删除存储桶 (Bucket)
                'DeleteBucket' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        )
                    )
                ),
                // 删除跨域访问配置信息
                'DeleteBucketCors' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}?cors',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketCorsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 删除存储桶标签信息
                'DeleteBucketTagging' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketTaggingOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 删除存储桶标清单任务
                'DeleteBucketInventory' => array(
                    'httpMethod' => 'Delete',
                    'uri' => '/{Bucket}?inventory',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketInventoryOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Id' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'id',
                        )
                    ),
                ),
                // 删除 COS 上单个对象
                'DeleteObject' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteObjectOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'MFA' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-mfa',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'versionId',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        )
                    )
                ),
                // 批量删除 COS 对象
                'DeleteObjects' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}?delete',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteObjectsOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'Delete',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Objects' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'sentAs' => 'Object',
                                'properties' => array(
                                    'Key' => array(
                                        'required' => true,
                                        'type' => 'string',
                                        'minLength' => 1,
                                    ),
                                    'VersionId' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'Quiet' => array(
                            'type' => 'boolean',
                            'format' => 'boolean-string',
                            'location' => 'xml',
                        ),
                        'MFA' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-mfa',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        )
                    ),
                ),
                // 删除存储桶（Bucket）的website
                'DeleteBucketWebsite' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}?website',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketWebsiteOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 删除存储桶（Bucket）的生命周期配置
                'DeleteBucketLifecycle' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}?lifecycle',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketLifecycleOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 删除跨区域复制配置
                'DeleteBucketReplication' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}?replication',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketReplicationOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 配置对象标签
                'PutObjectTagging' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutObjectTaggingOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'Tagging',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'TagSet' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'TagRule',
                                'type' => 'object',
                                'sentAs' => 'Tag',
                                'properties' => array(
                                    'Key' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Value' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 获取对象标签信息
                'GetObjectTagging' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetObjectTaggingOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        )
                    ),
                ),
                // 删除对象标签
                'DeleteObjectTagging' => array(
                    'httpMethod' => 'DELETE',
                    'uri' => '/{Bucket}{/Key*}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteObjectTaggingOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        )
                    )
                ),
                // 下载对象
                'GetObject' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetObjectOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'IfMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'If-Match'
                        ),
                        'IfModifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer'
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'If-Modified-Since'
                        ),
                        'IfNoneMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'If-None-Match'
                        ),
                        'IfUnmodifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer'
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'If-Unmodified-Since'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'Range' => array(
                            'type' => 'string',
                            'location' => 'header'),
                        'ResponseCacheControl' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'response-cache-control'
                        ),
                        'ResponseContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'response-content-disposition'
                        ),
                        'ResponseContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'response-content-encoding'
                        ),
                        'ResponseContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'response-content-language'
                        ),
                        'ResponseContentType' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'response-content-type'
                        ),
                        'ResponseExpires' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer'
                            ),
                            'format' => 'date-time-http',
                            'location' => 'query',
                            'sentAs' => 'response-expires'
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'versionId',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'TrafficLimit' => array(
                            'type' => 'integer',
                            'location' => 'header',
                            'sentAs' => 'x-cos-traffic-limit',
                        )
                    )
                ),
                // 获取 COS 对象的访问权限信息（Access Control List, ACL）
                'GetObjectAcl' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?acl',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetObjectAclOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'versionId',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        )
                    )
                ),
                // 获取存储桶（Bucket）的访问权限信息（Access Control List, ACL）
                'GetBucketAcl' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?acl',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketAclOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        )
                    )
                ),
                // 查询存储桶（Bucket）跨域访问配置信息
                'GetBucketCors' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?cors',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketCorsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 查询存储桶（Bucket）Domain配置信息
                'GetBucketDomain' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?domain',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketDomainOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 查询存储桶（Bucket）Accelerate配置信息
                'GetBucketAccelerate' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?accelerate',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketAccelerateOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 查询存储桶（Bucket）Website配置信息
                'GetBucketWebsite' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?website',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketWebsiteOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 查询存储桶（Bucket）的生命周期配置
                'GetBucketLifecycle' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?lifecycle',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketLifecycleOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）版本控制信息
                'GetBucketVersioning' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?versioning',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketVersioningOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）跨区域复制配置信息
                'GetBucketReplication' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?replication',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketReplicationOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）所在的地域信息
                'GetBucketLocation' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?location',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketLocationOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                // 获取存储桶（Bucket）Notification信息
                'GetBucketNotification' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?notification',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketNotificationOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）日志信息
                'GetBucketLogging' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?logging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketLoggingOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）清单信息
                'GetBucketInventory' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?inventory',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketInventoryOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Id' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'id',
                        )
                    ),
                ),
                // 获取存储桶（Bucket）标签信息
                'GetBucketTagging' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketTaggingOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        )
                    ),
                ),
                // 分块上传
                'UploadPart' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'UploadPartOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'UploadPartRequest'
                        )
                    ),
                    'parameters' => array(
                        'Body' => array(
                            'type' => array(
                                'any'),
                            'location' => 'body'
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length'
                        ),
                        'ContentMD5' => array(
                            'type' => array(
                                'boolean'
                            ),
                            'location' => 'header',
                            'sentAs' => 'Content-MD5'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'PartNumber' => array(
                            'required' => true,
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'partNumber'),
                        'UploadId' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'uploadId'),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'TrafficLimit' => array(
                            'type' => 'integer',
                            'location' => 'header',
                            'sentAs' => 'x-cos-traffic-limit',
                        )
                    )
                ),
                // 上传对象
                'PutObject' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutObjectOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'PutObjectRequest'
                        )
                    ),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl'
                        ),
                        'Body' => array(
                            'required' => true,
                            'type' => array(
                                'any'
                            ),
                            'location' => 'body'
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control'
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition'
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding'
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language'
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length'
                        ),
                        'ContentMD5' => array(
                            'type' => array(
                                'boolean'
                            ),
                            'location' => 'header',
                            'sentAs' => 'Content-MD5'
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-cos-kms-key-id',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        ),
                        'PicOperations' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Pic-Operations',
                        ),
                        'TrafficLimit' => array(
                            'type' => 'integer',
                            'location' => 'header',
                            'sentAs' => 'x-cos-traffic-limit',
                        ),
                        'Tagging' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-tagging',
                        ),
                    )
                ),
                // 追加对象
                'AppendObject' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}{/Key*}?append',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'AppendObjectOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'AppendObjectRequest'
                        )
                    ),
                    'parameters' => array(
                        'Position' => array(
                            'type' => 'integer',
                            'required' => true,
                            'location' => 'query',
                            'sentAs' => 'position'
                        ),
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl'
                        ),
                        'Body' => array(
                            'required' => true,
                            'type' => array(
                                'any'
                            ),
                            'location' => 'body'
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control'
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition'
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding'
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language'
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length'
                        ),
                        'ContentMD5' => array(
                            'type' => array(
                                'boolean'
                            ),
                            'location' => 'header',
                            'sentAs' => 'Content-MD5'
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-cos-kms-key-id',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        ),
                        'PicOperations' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Pic-Operations',
                        ),
                        'TrafficLimit' => array(
                            'type' => 'integer',
                            'location' => 'header',
                            'sentAs' => 'x-cos-traffic-limit',
                        )
                    )
                ),
                // 设置 COS 对象的访问权限信息（Access Control List, ACL）
                'PutObjectAcl' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}?acl',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutObjectAclOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'AccessControlPolicy',
                        ),
                    ),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl',
                        ),
                        'Grants' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'AccessControlList',
                            'items' => array(
                                'name' => 'Grant',
                                'type' => 'object',
                                'properties' => array(
                                    'Grantee' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string'),
                                            'ID' => array(
                                                'type' => 'string'),
                                            'Type' => array(
                                                'type' => 'string',
                                                'sentAs' => 'xsi:type',
                                                'data' => array(
                                                    'xmlAttribute' => true,
                                                    'xmlNamespace' => 'http://www.w3.org/2001/XMLSchema-instance')),
                                            'URI' => array(
                                                'type' => 'string') )),
                                    'Permission' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string',
                                ),
                                'ID' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'GrantFullControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-full-control',
                        ),
                        'GrantRead' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read',
                        ),
                        'GrantReadACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read-acp',
                        ),
                        'GrantWrite' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write',
                        ),
                        'GrantWriteACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write-acp',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        ),
                    )
                ),
                // 设置存储桶（Bucket）的访问权限 (Access Control List, ACL)
                'PutBucketAcl' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?acl',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketAclOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'AccessControlPolicy',
                        ),
                    ),
                    'parameters' => array(
                        'ACL' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-acl',
                        ),
                        'Grants' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'AccessControlList',
                            'items' => array(
                                'name' => 'Grant',
                                'type' => 'object',
                                'properties' => array(
                                    'Grantee' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string',
                                            ),
                                            'EmailAddress' => array(
                                                'type' => 'string',
                                            ),
                                            'ID' => array(
                                                'type' => 'string',
                                            ),
                                            'Type' => array(
                                                'required' => true,
                                                'type' => 'string',
                                                'sentAs' => 'xsi:type',
                                                'data' => array(
                                                    'xmlAttribute' => true,
                                                    'xmlNamespace' => 'http://www.w3.org/2001/XMLSchema-instance',
                                                ),
                                            ),
                                            'URI' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'Permission' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string',
                                ),
                                'ID' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'GrantFullControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-full-control',
                        ),
                        'GrantRead' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read',
                        ),
                        'GrantReadACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-read-acp',
                        ),
                        'GrantWrite' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write',
                        ),
                        'GrantWriteACP' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-grant-write-acp',
                        ),
                        'ACP' => array(
                            'type' => 'object',
                            'additionalProperties' => true,
                        ),
                    ),
                ),
                // 设置存储桶（Bucket）的跨域配置信息
                'PutBucketCors' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?cors',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketCorsOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'CORSConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'CORSRules' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'CORSRule',
                                'type' => 'object',
                                'sentAs' => 'CORSRule',
                                'properties' => array(
                                    'ID' => array(
                                        'type' => 'string',
                                    ),
                                    'AllowedHeaders' => array(
                                        'type' => 'array',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'AllowedHeader',
                                            'type' => 'string',
                                            'sentAs' => 'AllowedHeader',
                                        ),
                                    ),
                                    'AllowedMethods' => array(
                                        'required' => true,
                                        'type' => 'array',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'AllowedMethod',
                                            'type' => 'string',
                                            'sentAs' => 'AllowedMethod',
                                        ),
                                    ),
                                    'AllowedOrigins' => array(
                                        'required' => true,
                                        'type' => 'array',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'AllowedOrigin',
                                            'type' => 'string',
                                            'sentAs' => 'AllowedOrigin',
                                        ),
                                    ),
                                    'ExposeHeaders' => array(
                                        'type' => 'array',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'ExposeHeader',
                                            'type' => 'string',
                                            'sentAs' => 'ExposeHeader',
                                        ),
                                    ),
                                    'MaxAgeSeconds' => array(
                                        'type' => 'numeric',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 设置存储桶（Bucket）的Domain信息
                'PutBucketDomain' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?domain',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketDomainOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'DomainConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'DomainRules' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'DomainRule',
                                'type' => 'object',
                                'sentAs' => 'DomainRule',
                                'properties' => array(
                                    'Status' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Name' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Type' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'ForcedReplacement' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 设置存储桶（Bucket）生命周期配置
                'PutBucketLifecycle' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?lifecycle',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketLifecycleOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'LifecycleConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Rules' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'Rule',
                                'type' => 'object',
                                'sentAs' => 'Rule',
                                'properties' => array(
                                    'Expiration' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Date' => array(
                                                'type' => array(
                                                    'object',
                                                    'string',
                                                    'integer',
                                                ),
                                                'format' => 'date-time',
                                            ),
                                            'Days' => array(
                                                'type' => 'numeric',
                                            ),
                                        ),
                                    ),
                                    'ID' => array(
                                        'type' => 'string',
                                    ),
                                    'Filter' => array(
                                        'type' => 'object',
                                        'require' => true,
                                        'properties' => array(
                                            'Prefix' => array(
                                                'type' => 'string',
                                                'require' => true,
                                            ),
                                            'Tag' => array(
                                                'type' => 'object',
                                                'require' => true,
                                                'properties' => array(
                                                    'Key' => array(
                                                        'type' => 'string'
                                                    ),
                                                    'filters' => array(
                                                        'Qcloud\\Cos\\Client::explodeKey'),
                                                    'Value' => array(
                                                        'type' => 'string'
                                                    ),
                                                )
                                            )
                                        ),
                                    ),
                                    'Status' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Transitions' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'Transition',
                                            'type' => 'object',
                                            'sentAs' => 'Transition',
                                            'properties' => array(
                                                'Date' => array(
                                                    'type' => array(
                                                        'object',
                                                        'string',
                                                        'integer',
                                                    ),
                                                    'format' => 'date-time',
                                                ),
                                                'Days' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'StorageClass' => array(
                                                    'type' => 'string',
                                                )))),
                                    'NoncurrentVersionTransition' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'NoncurrentDays' => array(
                                                'type' => 'numeric',
                                            ),
                                            'StorageClass' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'NoncurrentVersionExpiration' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'NoncurrentDays' => array(
                                                'type' => 'numeric',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 存储桶（Bucket）版本控制
                'PutBucketVersioning' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?versioning',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketVersioningOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'VersioningConfiguration',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'MFA' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-mfa',
                        ),
                        'MFADelete' => array(
                            'type' => 'string',
                            'location' => 'xml',
                            'sentAs' => 'MfaDelete',
                        ),
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                    ),
                ),
                // 配置存储桶（Bucket）Accelerate
                'PutBucketAccelerate' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?accelerate',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketAccelerateOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'AccelerateConfiguration',
                        ),
                        'xmlAllowEmpty' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Status' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        )
                    ),
                ),
                // 配置存储桶（Bucket）website
                'PutBucketWebsite' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?website',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketWebsiteOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'WebsiteConfiguration',
                        ),
                        'xmlAllowEmpty' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'ErrorDocument' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Key' => array(
                                    'type' => 'string',
                                    'minLength' => 1,
                                ),
                            ),
                        ),
                        'IndexDocument' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Suffix' => array(
                                    'required' => true,
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'RedirectAllRequestsTo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HostName' => array(
                                    'type' => 'string',
                                ),
                                'Protocol' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'RoutingRules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'RoutingRule',
                                'type' => 'object',
                                'properties' => array(
                                    'Condition' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'HttpErrorCodeReturnedEquals' => array(
                                                'type' => 'string',
                                            ),
                                            'KeyPrefixEquals' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'Redirect' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'HostName' => array(
                                                'type' => 'string',
                                            ),
                                            'HttpRedirectCode' => array(
                                                'type' => 'string',
                                            ),
                                            'Protocol' => array(
                                                'type' => 'string',
                                            ),
                                            'ReplaceKeyPrefixWith' => array(
                                                'type' => 'string',
                                            ),
                                            'ReplaceKeyWith' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 配置存储桶（Bucket）跨区域复制
                'PutBucketReplication' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?replication',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketReplicationOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'ReplicationConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Role' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Rules' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'ReplicationRule',
                                'type' => 'object',
                                'sentAs' => 'Rule',
                                'properties' => array(
                                    'ID' => array(
                                        'type' => 'string',
                                    ),
                                    'Prefix' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Status' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Destination' => array(
                                        'required' => true,
                                        'type' => 'object',
                                        'properties' => array(
                                            'Bucket' => array(
                                                'required' => true,
                                                'type' => 'string',
                                            ),
                                            'StorageClass' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 设置存储桶（Bucket）的回调设置
                'PutBucketNotification' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?notification',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketNotificationOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'NotificationConfiguration',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'CloudFunctionConfigurations' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'name' => 'CloudFunctionConfiguration',
                                'type' => 'object',
                                'sentAs' => 'CloudFunctionConfiguration',
                                'properties' => array(
                                    'Id' => array(
                                        'type' => 'string',
                                    ),
                                    'CloudFunction' => array(
                                        'required' => true,
                                        'type' => 'string',
                                        'sentAs' => 'CloudFunction',
                                    ),
                                    'Events' => array(
                                        'required' => true,
                                        'type' => 'array',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'name' => 'Event',
                                            'type' => 'string',
                                            'sentAs' => 'Event',
                                        ),
                                    ),
                                    'Filter' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Key' => array(
                                                'type' => 'object',
                                                'sentAs' => 'Key',
                                                'properties' => array(
                                                    'FilterRules' => array(
                                                        'type' => 'array',
                                                        'data' => array(
                                                            'xmlFlattened' => true,
                                                        ),
                                                        'items' => array(
                                                            'name' => 'FilterRule',
                                                            'type' => 'object',
                                                            'sentAs' => 'FilterRule',
                                                            'properties' => array(
                                                                'Name' => array(
                                                                    'type' => 'string',
                                                                ),
                                                                'Value' => array(
                                                                    'type' => 'string',
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'filters' => array(
                                                'Qcloud\\Cos\\Client::explodeKey')
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // 配置存储桶（Bucket）标签
                'PutBucketTagging' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?tagging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketTaggingOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'Tagging',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'TagSet' => array(
                            'required' => true,
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'TagRule',
                                'type' => 'object',
                                'sentAs' => 'Tag',
                                'properties' => array(
                                    'Key' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                    'Value' => array(
                                        'required' => true,
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                //开启存储桶（Bucket）日志服务
                'PutBucketLogging' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?logging',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketLoggingOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'BucketLoggingStatus',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'LoggingEnabled' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TargetBucket' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'TargetPrefix' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                            )
                        ),
                    ),
                ),
                // 配置存储桶（Bucket）清单
                'PutBucketInventory' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?inventory',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketInventoryOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'InventoryConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Id' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'IsEnabled' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Destination' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'COSBucketDestination'=> array(
                                    'type' => 'object',
                                    'properties' => array(
                                        'Format' => array(
                                            'type' => 'string',
                                            'require' => true,
                                        ),
                                        'AccountId' => array(
                                            'type' => 'string',
                                            'require' => true,
                                        ),
                                        'Bucket' => array(
                                            'type' => 'string',
                                            'require' => true,
                                        ),
                                        'Prefix' => array(
                                            'type' => 'string',
                                        ),
                                        'Encryption' => array(
                                            'type' => 'object',
                                            'properties' => array(
                                                'SSE-COS' => array(
                                                    'type' => 'string',
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'Schedule' => array(
                            'required' => true,
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Frequency' => array(
                                    'type' => 'string',
                                    'require' => true,
                                ),
                            )
                        ),
                        'Filter' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Prefix' => array(
                                    'type' => 'string',
                                ),
                            )
                        ),
                        'IncludedObjectVersions' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'OptionalFields' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'Fields',
                                'type' => 'string',
                                'sentAs' => 'Field',
                            ),
                        ),
                    ),
                ),
                // 回热归档对象
                'RestoreObject' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}{/Key*}?restore',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'RestoreObjectOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'RestoreRequest',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'versionId',
                        ),
                        'Days' => array(
                            'required' => true,
                            'type' => 'numeric',
                            'location' => 'xml',
                        ),
                        'CASJobParameters' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Tier' => array(
                                    'type' => 'string',
                                    'required' => true,
                                ),
                            ),
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                    ),
                ),
                // 查询存储桶（Bucket）中正在进行中的分块上传对象
                'ListParts' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListPartsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'MaxParts' => array(
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'max-parts'),
                        'PartNumberMarker' => array(
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'part-number-marker'
                        ),
                        'UploadId' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'uploadId'
                        )
                    )
                ),
                // 查询存储桶（Bucket）下的部分或者全部对象
                'ListObjects' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListObjectsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'delimiter'
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'encoding-type'
                        ),
                        'Marker' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'marker'
                        ),
                        'MaxKeys' => array(
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'max-keys'
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'prefix'
                        )
                    )
                ),
                // 获取所属账户的所有存储空间列表
                'ListBuckets' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListBucketsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                    ),
                ),
                // 获取多版本对象
                'ListObjectVersions' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?versions',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListObjectVersionsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'delimiter',
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'encoding-type',
                        ),
                        'KeyMarker' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'key-marker',
                        ),
                        'MaxKeys' => array(
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'max-keys',
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'prefix',
                        ),
                        'VersionIdMarker' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'version-id-marker',
                        )
                    ),
                ),
                // 获取已上传分块列表
                'ListMultipartUploads' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?uploads',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListMultipartUploadsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'delimiter',
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'encoding-type',
                        ),
                        'KeyMarker' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'key-marker',
                        ),
                        'MaxUploads' => array(
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'max-uploads',
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'prefix',
                        ),
                        'UploadIdMarker' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'upload-id-marker',
                        )
                    ),
                ),
                // 获取清单列表
                'ListBucketInventoryConfigurations' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?inventory',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ListBucketInventoryConfigurationsOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        ),
                        'ContinuationToken' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'continuation-token',
                        ),
                    ),
                ),
                // 获取对象的meta信息
                'HeadObject' => array(
                    'httpMethod' => 'HEAD',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'HeadObjectOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'IfMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'If-Match',
                        ),
                        'IfModifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'If-Modified-Since',
                        ),
                        'IfNoneMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'If-None-Match',
                        ),
                        'IfUnmodifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'If-Unmodified-Since',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'Range' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'versionId',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        ),
                    )
                ),
                // 存储桶（Bucket）是否存在
                'HeadBucket' => array(
                    'httpMethod' => 'HEAD',
                    'uri' => '/{Bucket}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'HeadBucketOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    )
                ),
                // 分块copy
                'UploadPartCopy' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'UploadPartCopyOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'UploadPartCopyRequest',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'CopySource' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source',
                        ),
                        'CopySourceIfMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-match',
                        ),
                        'CopySourceIfModifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-modified-since',
                        ),
                        'CopySourceIfNoneMatch' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-none-match',
                        ),
                        'CopySourceIfUnmodifiedSince' => array(
                            'type' => array(
                                'object',
                                'string',
                                'integer',
                            ),
                            'format' => 'date-time-http',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-if-unmodified-since',
                        ),
                        'CopySourceRange' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-range',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'PartNumber' => array(
                            'required' => true,
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'partNumber',
                        ),
                        'UploadId' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'uploadId',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'CopySourceSSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-algorithm',
                        ),
                        'CopySourceSSECustomerKey' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-key',
                        ),
                        'CopySourceSSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-server-side-encryption-customer-key-MD5',
                        ),
                        'RequestPayer' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-payer',
                        )
                    ),
                ),
                // 检索对象内容
                'SelectObjectContent' => array(
                    'httpMethod' => 'Post',
                    'uri' => '/{/Key*}?select&select-type=2',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'SelectObjectContentOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'SelectRequest',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey')
                        ),
                        'Expression' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'ExpressionType' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'InputSerialization' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'CompressionType' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'CSV' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'FileHeaderInfo' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'RecordDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'FieldDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'QuoteCharacter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'QuoteEscapeCharacter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'Comments' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'AllowQuotedRecordDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                    )
                                ),
                                'JSON' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'Type' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        )
                                    )
                                ),
                            )
                        ),
                        'OutputSerialization' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'CompressionType' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'CSV' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'QuoteFields' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'RecordDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'FieldDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'QuoteCharacter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                        'QuoteEscapeCharacter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        ),
                                    )
                                ),
                                'JSON' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'RecordDelimiter' => array(
                                            'type' => 'string',
                                            'location' => 'xml',
                                        )
                                    )
                                ),
                            )
                        ),
                        'RequestProgress' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Enabled' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                            )
                        ),
                    ),
                ),
                // 存储桶（Bucket）开启智能分层
                'PutBucketIntelligentTiering' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?intelligenttiering',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketIntelligentTieringOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'IntelligentTieringConfiguration',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Transition' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Days' => array(
                                    'type' => 'integer',
                                    'location' => 'xml',
                                ),
                                'RequestFrequent' => array(
                                    'type' => 'integer',
                                    'location' => 'xml',
                                ),
                            )
                        ),
                    ),
                ),
                // 查询存储桶（Bucket）智能分层
                'GetBucketIntelligentTiering' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?intelligenttiering',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketIntelligentTieringOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //万象-获取图片基本信息
                'ImageInfo' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?imageInfo',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ImageInfoOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                    )
                ),
                //万象-获取图片EXIF信息
                'ImageExif' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?exif',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ImageExifOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                    )
                ),
                //万象-获取图片主色调信息
                'ImageAve' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?imageAve',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ImageAveOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                    ),
                ),
                //万象-云上数据处理
                'ImageProcess' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}{/Key*}?image_process',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'ImageProcessOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'PicOperations' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Pic-Operations',
                        ),
                    ),
                ),
                //万象-二维码下载时识别
                'Qrcode' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?ci-process=QRcode',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'QrcodeOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'Cover' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'cover'
                        ),
                    ),
                ),
                //万象-二维码生成
                'QrcodeGenerate' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?ci-process=qrcode-generate',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'QrcodeGenerateOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'QrcodeContent' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'qrcode-content'
                        ),
                        'QrcodeMode' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'mode'
                        ),
                        'QrcodeWidth' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'width'
                        ),
                    ),
                ),
                //万象-图片标签
                'DetectLabel' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}?ci-process=detect-label',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DetectLabelOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                    ),
                ),
                //万象-增加样式
                'PutBucketImageStyle' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?style',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketImageStyleOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'AddStyle',
                        ),
                    ),
                    'parameters' => array(
                        'StyleName' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'StyleBody' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //万象-查询样式
                'GetBucketImageStyle' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?style',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketImageStyleOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'GetStyle',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'StyleName' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                    ),
                ),
                //万象-删除样式
                'DeleteBucketImageStyle' => array(
                    'httpMethod' => 'Delete',
                    'uri' => '/{Bucket}?style',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketImageStyleOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'DeleteStyle',
                        ),
                    ),
                    'parameters' => array(
                        'StyleName' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //万象-开通Guetzli压缩
                'PutBucketGuetzli' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?guetzli',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketGuetzliOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //万象-查询Guetzli状态
                'GetBucketGuetzli' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?guetzli',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketGuetzliOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //万象-关闭Guetzli压缩
                'DeleteBucketGuetzli' => array(
                    'httpMethod' => 'Delete',
                    'uri' => '/{Bucket}?guetzli',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DeleteBucketGuetzliOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                    ),
                ),
                //图片审核
                'GetObjectSensitiveContentRecognition' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetObjectSensitiveContentRecognitionOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'ci-process' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query'
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'DetectType' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'detect-type'
                        ),
                        'DetectUrl' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'detect-url'
                        ),
                        'Interval' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'interval'
                        ),
                        'MaxFrames' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'max-frames'
                        ),
                        'BizType' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'biz-type'
                        )
                    ),
                ),
                // 文本审核
                'DetectText' => array(
                    'httpMethod' => 'POST',
                    'uri' => '/{Bucket}text/auditing',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'DetectTextOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'Request',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Input' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Content' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'Object' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'Url' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'DataId' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'UserInfo' => array(
                                    'location' => 'xml',
                                    'type' => 'object',
                                    'properties' => array(
                                        'TokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Nickname' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'DeviceId' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'AppId' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Room' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'IP' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Type' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Gender' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Level' => array( 'type' => 'string', 'location' => 'xml', ),
                                        'Role' => array( 'type' => 'string', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                        'Conf' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'DetectType' => array( 'type' => 'string', 'location' => 'xml', ),
                                'Callback' => array( 'type' => 'string', 'location' => 'xml', ),
                                'BizType' => array( 'type' => 'string', 'location' => 'xml', ),
                                'CallbackVersion' => array( 'type' => 'string', 'location' => 'xml', ),
                                'CallbackType' => array( 'type' => 'integer', 'location' => 'xml', ),
                                'Freeze' => array(
                                    'location' => 'xml',
                                    'type' => 'object',
                                    'properties' => array(
                                        'PornScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                        'AdsScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                        'IllegalScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                        'AbuseScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                        'PoliticsScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                        'TerrorismScore' => array( 'type' => 'integer', 'location' => 'xml', ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                //媒体截图
                'GetSnapshot' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetSnapshotOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'Time' => array(
                            'required' => true,
                            'type' => 'numeric',
                            'location' => 'query',
                            'sentAs' => 'time'
                        ),
                        'ci-process' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query'
                        ),
                        'Width' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'width'
                        ),
                        'Height' => array(
                            'type' => 'integer',
                            'location' => 'query',
                            'sentAs' => 'height'
                        ),
                        'Format' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'format'
                        ),
                        'Rotate' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'rotate'
                        ),
                        'Mode' => array(
                            'type' => 'string',
                            'location' => 'query',
                            'sentAs' => 'mode'
                        )
                    ),
                ),
                //添加防盗链
                'PutBucketReferer' => array(
                    'httpMethod' => 'PUT',
                    'uri' => '/{Bucket}?referer',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'PutBucketRefererOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'RefererConfiguration',
                        ),
                        'contentMd5' => true,
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Status' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'RefererType' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'EmptyReferConfiguration' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'xml',
                        ),

                        'DomainList' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Domains' => array(
                                    'type' => 'array',
                                    'data' => array(
                                        'xmlFlattened' => true,
                                    ),
                                    'items' => array(
                                        'name' => 'Domain',
                                        'type' => 'string',
                                        'sentAs' => 'Domain',
                                    ),
                                )
                            )
                        ),
                    ),
                ),
                //获取防盗链规则
                'GetBucketReferer' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}?referer',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetBucketRefererOutput',
                    'responseType' => 'model',
                    'data' => array(
                        'xmlRoot' => array(
                            'name' => 'RefererConfiguration',
                        ),
                    ),
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri'
                        )
                    )
                ),
                //获取媒体信息
                'GetMediaInfo' => array(
                    'httpMethod' => 'GET',
                    'uri' => '/{Bucket}{/Key*}',
                    'class' => 'Qcloud\\Cos\\Command',
                    'responseClass' => 'GetMediaInfoOutput',
                    'responseType' => 'model',
                    'parameters' => array(
                        'Bucket' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                        ),
                        'Key' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'uri',
                            'minLength' => 1,
                            'filters' => array(
                                'Qcloud\\Cos\\Client::explodeKey'
                            )
                        ),
                        'ci-process' => array(
                            'required' => true,
                            'type' => 'string',
                            'location' => 'query'
                        )
                    ),
                ),
                'CreateMediaTranscodeJobs' => Descriptions::CreateMediaTranscodeJobs(), // 媒体转码
                'CreateMediaJobs' => Descriptions::CreateMediaJobs(), // 媒体任务
                'DescribeMediaJob' => Descriptions::DescribeMediaJob(), // 查询指定的媒体任务
                'DescribeMediaJobs' => Descriptions::DescribeMediaJobs(), // 拉取拉取符合条件的媒体任务
                'CreateMediaSnapshotJobs' => Descriptions::CreateMediaSnapshotJobs(), // 媒体截图
                'CreateMediaConcatJobs' => Descriptions::CreateMediaConcatJobs(), // 媒体拼接
                'DetectAudio' => Descriptions::DetectAudio(), // 音频审核
                'GetDetectAudioResult' => Descriptions::GetDetectAudioResult(), // 主动获取音频审核结果
                'GetDetectTextResult' => Descriptions::GetDetectTextResult(), // 主动获取文本文件审核结果
                'DetectVideo' => Descriptions::DetectVideo(), // 视频审核
                'GetDetectVideoResult' => Descriptions::GetDetectVideoResult(), // 主动获取视频审核结果
                'DetectDocument' => Descriptions::DetectDocument(), // 文档审核
                'GetDetectDocumentResult' => Descriptions::GetDetectDocumentResult(), // 主动获取文档审核结果
                'CreateDocProcessJobs' => Descriptions::CreateDocProcessJobs(), // 提交文档转码任务
                'DescribeDocProcessQueues' => Descriptions::DescribeDocProcessQueues(), // 查询文档转码队列
                'DescribeDocProcessJob' => Descriptions::DescribeDocProcessJob(), // 查询文档转码任务
                'GetDescribeDocProcessJobs' => Descriptions::GetDescribeDocProcessJobs(), // 拉取符合条件的文档转码任务
                'DetectImage' => Descriptions::DetectImage(), // 图片审核
                'DetectImageUrl' => Descriptions::DetectImageUrl(), // 图片审核
                'DetectImages' => Descriptions::DetectImages(), // 图片审核-批量
                'DetectVirus' => Descriptions::DetectVirus(), // 云查毒
                'GetDetectVirusResult' => Descriptions::GetDetectVirusResult(), // 查询病毒检测任务结果
                'GetDetectImageResult' => Descriptions::GetDetectImageResult(), // 主动获取图片审核结果
                'CreateMediaVoiceSeparateJobs' => Descriptions::CreateMediaVoiceSeparateJobs(), // 提交人声分离任务
                'DescribeMediaVoiceSeparateJob' => Descriptions::DescribeMediaVoiceSeparateJob(), // 查询指定的人声分离任务
                'DetectWebpage' => Descriptions::DetectWebpage(), // 提交网页审核任务
                'GetDetectWebpageResult' => Descriptions::GetDetectWebpageResult(), // 查询网页审核任务结果
                'DescribeMediaBuckets' => Descriptions::DescribeMediaBuckets(), // 查询媒体处理开通状态
                'GetPrivateM3U8' => Descriptions::GetPrivateM3U8(), // 获取私有 M3U8 ts 资源的下载授权
                'DescribeMediaQueues' => Descriptions::DescribeMediaQueues(), // 搜索媒体处理队列
                'UpdateMediaQueue' => Descriptions::UpdateMediaQueue(), // 更新媒体处理队列
                'CreateMediaSmartCoverJobs' => Descriptions::CreateMediaSmartCoverJobs(), // 提交智能封面任务
                'CreateMediaVideoProcessJobs' => Descriptions::CreateMediaVideoProcessJobs(), // 提交视频增强任务
                'CreateMediaVideoMontageJobs' => Descriptions::CreateMediaVideoMontageJobs(), // 提交精彩集锦任务
                'CreateMediaAnimationJobs' => Descriptions::CreateMediaAnimationJobs(), // 提交动图任务
                'CreateMediaPicProcessJobs' => Descriptions::CreateMediaPicProcessJobs(), // 提交图片处理任务
                'CreateMediaSegmentJobs' => Descriptions::CreateMediaSegmentJobs(), // 提交转封装任务
                'CreateMediaVideoTagJobs' => Descriptions::CreateMediaVideoTagJobs(), // 提交视频标签任务
                'CreateMediaSuperResolutionJobs' => Descriptions::CreateMediaSuperResolutionJobs(), // 提交超分辨率任务
                'CreateMediaSDRtoHDRJobs' => Descriptions::CreateMediaSDRtoHDRJobs(), // 提交 SDR to HDR 任务
                'CreateMediaDigitalWatermarkJobs' => Descriptions::CreateMediaDigitalWatermarkJobs(), // 嵌入数字水印任务(添加水印)
                'CreateMediaExtractDigitalWatermarkJobs' => Descriptions::CreateMediaExtractDigitalWatermarkJobs(), // 提取数字水印任务(提取水印)
                'DetectLiveVideo' => Descriptions::DetectLiveVideo(), // 直播流审核
                'CancelLiveVideoAuditing' => Descriptions::CancelLiveVideoAuditing(), // 取消直播流审核
                'OpticalOcrRecognition' => Descriptions::OpticalOcrRecognition(), // 通用文字识别
                'TriggerWorkflow' => Descriptions::TriggerWorkflow(), // 手动触发工作流
                'GetWorkflowInstances' => Descriptions::GetWorkflowInstances(), // 获取工作流实例列表
                'GetWorkflowInstance' => Descriptions::GetWorkflowInstance(), // 获取工作流实例详情
                'CreateMediaSnapshotTemplate' => Descriptions::CreateMediaSnapshotTemplate(), // 新增截图模板
                'UpdateMediaSnapshotTemplate' => Descriptions::UpdateMediaSnapshotTemplate(), // 更新截图模板
                'CreateMediaTranscodeTemplate' => Descriptions::CreateMediaTranscodeTemplate(), // 新增转码模板
                'UpdateMediaTranscodeTemplate' => Descriptions::UpdateMediaTranscodeTemplate(), // 更新转码模板
                'CreateMediaHighSpeedHdTemplate' => Descriptions::CreateMediaHighSpeedHdTemplate(), // 新增极速高清转码模板
                'UpdateMediaHighSpeedHdTemplate' => Descriptions::UpdateMediaHighSpeedHdTemplate(), // 更新极速高清转码模板
                'CreateMediaAnimationTemplate' => Descriptions::CreateMediaAnimationTemplate(), // 新增动图模板
                'UpdateMediaAnimationTemplate' => Descriptions::UpdateMediaAnimationTemplate(), // 更新动图模板
                'CreateMediaConcatTemplate' => Descriptions::CreateMediaConcatTemplate(), // 新增拼接模板
                'UpdateMediaConcatTemplate' => Descriptions::UpdateMediaConcatTemplate(), // 更新拼接模板
                'CreateMediaVideoProcessTemplate' => Descriptions::CreateMediaVideoProcessTemplate(), // 新增视频增强模板
                'UpdateMediaVideoProcessTemplate' => Descriptions::UpdateMediaVideoProcessTemplate(), // 更新视频增强模板
                'CreateMediaVideoMontageTemplate' => Descriptions::CreateMediaVideoMontageTemplate(), // 新增精彩集锦模板
                'UpdateMediaVideoMontageTemplate' => Descriptions::UpdateMediaVideoMontageTemplate(), // 更新精彩集锦模板
                'CreateMediaVoiceSeparateTemplate' => Descriptions::CreateMediaVoiceSeparateTemplate(), // 新增人声分离模板
                'UpdateMediaVoiceSeparateTemplate' => Descriptions::UpdateMediaVoiceSeparateTemplate(), // 更新人声分离模板
                'CreateMediaSuperResolutionTemplate' => Descriptions::CreateMediaSuperResolutionTemplate(), // 新增超分辨率模板
                'UpdateMediaSuperResolutionTemplate' => Descriptions::UpdateMediaSuperResolutionTemplate(), // 更新超分辨率模板
                'CreateMediaPicProcessTemplate' => Descriptions::CreateMediaPicProcessTemplate(), // 新增图片处理模板
                'UpdateMediaPicProcessTemplate' => Descriptions::UpdateMediaPicProcessTemplate(), // 更新图片处理模板
                'CreateMediaWatermarkTemplate' => Descriptions::CreateMediaWatermarkTemplate(), // 新增水印模板
                'UpdateMediaWatermarkTemplate' => Descriptions::UpdateMediaWatermarkTemplate(), // 更新水印模板
                'DescribeMediaTemplates' => Descriptions::DescribeMediaTemplates(), // 查询模板列表
                'DescribeWorkflow' => Descriptions::DescribeWorkflow(), // 搜索工作流
                'DeleteWorkflow' => Descriptions::DeleteWorkflow(), // 删除工作流
                'CreateInventoryTriggerJob' => Descriptions::CreateInventoryTriggerJob(), // 触发批量存量任务
                'DescribeInventoryTriggerJobs' => Descriptions::DescribeInventoryTriggerJobs(), // 批量拉取存量任务
                'DescribeInventoryTriggerJob' => Descriptions::DescribeInventoryTriggerJob(), // 查询存量任务
                'CancelInventoryTriggerJob' => Descriptions::CancelInventoryTriggerJob(), // 取消存量任务
                'CreateMediaNoiseReductionJobs' => Descriptions::CreateMediaNoiseReductionJobs(), // 提交音频降噪任务
                'ImageRepairProcess' => Descriptions::ImageRepairProcess(), // 图片水印修复
                'ImageDetectCarProcess' => Descriptions::ImageDetectCarProcess(), // 车辆车牌检测
                'ImageAssessQualityProcess' => Descriptions::ImageAssessQualityProcess(), // 图片质量评估
                'ImageSearchOpen' => Descriptions::ImageSearchOpen(), // 开通以图搜图
                'ImageSearchAdd' => Descriptions::ImageSearchAdd(), // 添加图库图片
                'ImageSearch' => Descriptions::ImageSearch(), // 图片搜索接口
                'ImageSearchDelete' => Descriptions::ImageSearchDelete(), // 图片搜索接口
                'BindCiService' => Descriptions::BindCiService(), // 绑定数据万象服务
                'GetCiService' => Descriptions::GetCiService(), // 查询数据万象服务
                'UnBindCiService' => Descriptions::UnBindCiService(), // 解绑数据万象服务
                'GetHotLink' => Descriptions::GetHotLink(), // 查询防盗链
                'AddHotLink' => Descriptions::AddHotLink(), // 查询防盗链
                'OpenOriginProtect' => Descriptions::OpenOriginProtect(), // 开通原图保护
                'GetOriginProtect' => Descriptions::GetOriginProtect(), // 查询原图保护状态
                'CloseOriginProtect' => Descriptions::CloseOriginProtect(), // 关闭原图保护
                'ImageDetectFace' => Descriptions::ImageDetectFace(), // 人脸检测
                'ImageFaceEffect' => Descriptions::ImageFaceEffect(), // 人脸特效
                'ImageUrlFaceEffect' => Descriptions::ImageUrlFaceEffect(), // 人脸特效
                'IDCardOCR' => Descriptions::IDCardOCR(), // 身份证识别
                'IDCardOCRByUpload' => Descriptions::IDCardOCRByUpload(), // 身份证识别-上传时处理
                'GetLiveCode' => Descriptions::GetLiveCode(), // 获取数字验证码
                'GetActionSequence' => Descriptions::GetActionSequence(), // 获取动作顺序
                'DescribeDocProcessBuckets' => Descriptions::DescribeDocProcessBuckets(), // 查询文档预览开通状态
                'UpdateDocProcessQueue' => Descriptions::UpdateDocProcessQueue(), // 更新文档转码队列
                'CreateMediaQualityEstimateJobs' => Descriptions::CreateMediaQualityEstimateJobs(), // 提交视频质量评分任务
                'CreateMediaStreamExtractJobs' => Descriptions::CreateMediaStreamExtractJobs(), // 提交音视频流分离任务
                'FileJobs4Hash' => Descriptions::FileJobs4Hash(), // 哈希值计算同步请求
                'OpenFileProcessService' => Descriptions::OpenFileProcessService(), // 开通文件处理服务
                'GetFileProcessQueueList' => Descriptions::GetFileProcessQueueList(), // 搜索文件处理队列
                'UpdateFileProcessQueue' => Descriptions::UpdateFileProcessQueue(), // 更新文件处理的队列
                'CreateFileHashCodeJobs' => Descriptions::CreateFileHashCodeJobs(), // 提交哈希值计算任务
                'GetFileHashCodeResult' => Descriptions::GetFileHashCodeResult(), // 查询哈希值计算结果
                'CreateFileUncompressJobs' => Descriptions::CreateFileUncompressJobs(), // 提交文件解压任务
                'GetFileUncompressResult' => Descriptions::GetFileUncompressResult(), // 查询文件解压结果
                'CreateFileCompressJobs' => Descriptions::CreateFileCompressJobs(), // 提交多文件打包压缩任务
                'GetFileCompressResult' => Descriptions::GetFileCompressResult(), // 查询多文件打包压缩结果
                'CreateM3U8PlayListJobs' => Descriptions::CreateM3U8PlayListJobs(), // 获取指定hls/m3u8文件指定时间区间内的ts资源
                'GetPicQueueList' => Descriptions::GetPicQueueList(), // 搜索图片处理队列
                'UpdatePicQueue' => Descriptions::UpdatePicQueue(), // 更新图片处理队列
                'GetPicBucketList' => Descriptions::GetPicBucketList(), // 查询图片处理服务状态
                'GetAiBucketList' => Descriptions::GetAiBucketList(), // 查询 AI 内容识别服务状态
                'OpenAiService' => Descriptions::OpenAiService(), // 开通 AI 内容识别
                'CloseAiService' => Descriptions::CloseAiService(), // 关闭AI内容识别服务
                'GetAiQueueList' => Descriptions::GetAiQueueList(), // 搜索 AI 内容识别队列
                'UpdateAiQueue' => Descriptions::UpdateAiQueue(), // 更新 AI 内容识别队列
                'CreateMediaTranscodeProTemplate' => Descriptions::CreateMediaTranscodeProTemplate(), // 创建音视频转码 pro 模板
                'UpdateMediaTranscodeProTemplate' => Descriptions::UpdateMediaTranscodeProTemplate(), // 更新音视频转码 pro 模板
                'CreateVoiceTtsTemplate' => Descriptions::CreateVoiceTtsTemplate(), // 创建语音合成模板
                'UpdateVoiceTtsTemplate' => Descriptions::UpdateVoiceTtsTemplate(), // 更新语音合成模板
                'CreateMediaSmartCoverTemplate' => Descriptions::CreateMediaSmartCoverTemplate(), // 创建智能封面模板
                'UpdateMediaSmartCoverTemplate' => Descriptions::UpdateMediaSmartCoverTemplate(), // 更新智能封面模板
                'CreateVoiceSpeechRecognitionTemplate' => Descriptions::CreateVoiceSpeechRecognitionTemplate(), // 创建语音识别模板
                'UpdateVoiceSpeechRecognitionTemplate' => Descriptions::UpdateVoiceSpeechRecognitionTemplate(), // 更新语音识别模板
                'CreateVoiceTtsJobs' => Descriptions::CreateVoiceTtsJobs(), // 提交一个语音合成任务
                'CreateAiTranslationJobs' => Descriptions::CreateAiTranslationJobs(), // 提交一个翻译任务
                'CreateVoiceSpeechRecognitionJobs' => Descriptions::CreateVoiceSpeechRecognitionJobs(), // 提交一个语音识别任务
                'CreateAiWordsGeneralizeJobs' => Descriptions::CreateAiWordsGeneralizeJobs(), // 提交一个分词任务
                'CreateMediaVideoEnhanceJobs' => Descriptions::CreateMediaVideoEnhanceJobs(), // 提交画质增强任务
                'CreateMediaVideoEnhanceTemplate' => Descriptions::CreateMediaVideoEnhanceTemplate(), // 创建画质增强模板
                'UpdateMediaVideoEnhanceTemplate' => Descriptions::UpdateMediaVideoEnhanceTemplate(), // 更新画质增强模板
                'OpenImageSlim' => Descriptions::OpenImageSlim(), // 开通图片瘦身
                'CloseImageSlim' => Descriptions::CloseImageSlim(), // 关闭图片瘦身
                'GetImageSlim' => Descriptions::GetImageSlim(), // 查询图片瘦身状态
                'AutoTranslationBlockProcess' => Descriptions::AutoTranslationBlockProcess(), // 实时文字翻译
                'RecognizeLogoProcess' => Descriptions::RecognizeLogoProcess(), // Logo 识别
                'DetectLabelProcess' => Descriptions::DetectLabelProcess(), // 图片标签
                'AIGameRecProcess' => Descriptions::AIGameRecProcess(), // 游戏场景识别
                'AIBodyRecognitionProcess' => Descriptions::AIBodyRecognitionProcess(), // 人体识别
                'DetectPetProcess' => Descriptions::DetectPetProcess(), // 宠物识别
                'AILicenseRecProcess' => Descriptions::AILicenseRecProcess(), // 卡证识别
                'CreateMediaTargetRecTemplate' => Descriptions::CreateMediaTargetRecTemplate(), // 创建视频目标检测模板
                'UpdateMediaTargetRecTemplate' => Descriptions::UpdateMediaTargetRecTemplate(), // 更新视频目标检测模板
                'CreateMediaTargetRecJobs' => Descriptions::CreateMediaTargetRecJobs(), // 提交视频目标检测任务
                'CreateMediaSegmentVideoBodyJobs' => Descriptions::CreateMediaSegmentVideoBodyJobs(), // 提交视频人像抠图任务
                'OpenAsrService' => Descriptions::OpenAsrService(), //开通智能语音服务
                'GetAsrBucketList' => Descriptions::GetAsrBucketList(), // 查询智能语音服务
                'CloseAsrService' => Descriptions::CloseAsrService(), // 关闭智能语音服务
                'GetAsrQueueList' => Descriptions::GetAsrQueueList(), // 查询智能语音队列
                'UpdateAsrQueue' => Descriptions::UpdateAsrQueue(), // 更新智能语音队列
                'CreateMediaNoiseReductionTemplate' => Descriptions::CreateMediaNoiseReductionTemplate(), // 创建音频降噪模板
                'UpdateMediaNoiseReductionTemplate' => Descriptions::UpdateMediaNoiseReductionTemplate(), // 更新音频降噪模板
                'CreateVoiceSoundHoundJobs' => Descriptions::CreateVoiceSoundHoundJobs(), // 提交听歌识曲任务
                'CreateVoiceVocalScoreJobs' => Descriptions::CreateVoiceVocalScoreJobs(), // 提交音乐评分任务
                'CreateDataset' => Descriptions::CreateDataset(), // 创建数据集
                'CreateDatasetBinding' => Descriptions::CreateDatasetBinding(), // 绑定存储桶与数据集
                'CreateFileMetaIndex' => Descriptions::CreateFileMetaIndex(), // 创建元数据索引
                'DatasetFaceSearch' => Descriptions::DatasetFaceSearch(), // 人脸搜索
                'DatasetSimpleQuery' => Descriptions::DatasetSimpleQuery(), // 简单查询
                'DeleteDataset' => Descriptions::DeleteDataset(), // 删除数据集
                'DeleteDatasetBinding' => Descriptions::DeleteDatasetBinding(), // 解绑存储桶与数据集
                'DeleteFileMetaIndex' => Descriptions::DeleteFileMetaIndex(), // 删除元数据索引
                'DescribeDataset' => Descriptions::DescribeDataset(), // 查询数据集
                'DescribeDatasetBinding' => Descriptions::DescribeDatasetBinding(), // 查询数据集与存储桶的绑定关系
                'DescribeDatasetBindings' => Descriptions::DescribeDatasetBindings(), // 查询绑定关系列表
                'DescribeDatasets' => Descriptions::DescribeDatasets(), // 列出数据集
                'DescribeFileMetaIndex' => Descriptions::DescribeFileMetaIndex(), // 查询元数据索引
                'SearchImage' => Descriptions::SearchImage(), // 图像检索
                'UpdateDataset' => Descriptions::UpdateDataset(), // 更新数据集
                'UpdateFileMetaIndex' => Descriptions::UpdateFileMetaIndex(), // 更新元数据索引
                'ZipFilePreview' => Descriptions::ZipFilePreview(), // 压缩包预览同步请求
                'GetHLSPlayKey' => Descriptions::GetHLSPlayKey(), // 获取hls播放密钥
                'PostWatermarkJobs' => Descriptions::PostWatermarkJobs(), // 视频明水印-提交任务
                'GeneratePlayList' => Descriptions::GeneratePlayList(), // 生成播放列表
                'CreateWatermarkTemplate' => Descriptions::CreateWatermarkTemplate(), // 创建明水印模板

            ),
            'models' => array(
                'AbortMultipartUploadOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'CreateBucketOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Location' => array(
                            'type' => 'string',
                            'location' => 'header'
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'CompleteMultipartUploadOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Location' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Bucket' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Key' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        ),
                        'ImageInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Format' => array(
                                    'type' => 'string',
                                ),
                                'Width' => array(
                                    'type' => 'string',
                                ),
                                'Height' => array(
                                    'type' => 'string',
                                ),
                                'Quality' => array(
                                    'type' => 'string',
                                ),
                                'Ave' => array(
                                    'type' => 'string',
                                ),
                                'Orientation' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'ProcessResults' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Object' => array(
                                    'type' => 'array',
                                    'items' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Key' => array(
                                                'type' => 'string',
                                            ),
                                            'Location' => array(
                                                'type' => 'string',
                                            ),
                                            'Format' => array(
                                                'type' => 'string',
                                            ),
                                            'Width' => array(
                                                'type' => 'string',
                                            ),
                                            'Height' => array(
                                                'type' => 'string',
                                            ),
                                            'Size' => array(
                                                'type' => 'string',
                                            ),
                                            'Quality' => array(
                                                'type' => 'string',
                                            ),
                                            'ETag' => array(
                                                'type' => 'string',
                                            ),
                                            'WatermarkStatus' => array(
                                                'type' => 'integer',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'CreateMultipartUploadOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Bucket' => array(
                            'type' => 'string',
                            'location' => 'xml',
                            'sentAs' => 'Bucket'
                        ),
                        'Key' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'UploadId' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        )
                    )
                ),
                'CopyObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'LastModified' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'CopySourceVersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-version-id',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    ),
                ),
                'DeleteBucketOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'DeleteBucketCorsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteBucketTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteBucketInventoryOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'DeleteMarker' => array(
                            'type' => 'boolean',
                            'location' => 'header',
                            'sentAs' => 'x-cos-delete-marker',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteObjectsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Deleted' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Deleted',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'VersionId' => array(
                                        'type' => 'string',
                                    ),
                                    'DeleteMarker' => array(
                                        'type' => 'boolean',
                                    ),
                                    'DeleteMarkerVersionId' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'Errors' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Error',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'VersionId' => array(
                                        'type' => 'string',
                                    ),
                                    'Code' => array(
                                        'type' => 'string',
                                    ),
                                    'Message' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteBucketLifecycleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteBucketReplicationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteBucketWebsiteOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutObjectTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetObjectTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'TagSet' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'sentAs' => 'Tag',
                                'type' => 'object',
                                'properties' => array(
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'Value' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'DeleteObjectTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'GetObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'DeleteMarker' => array(
                            'type' => 'boolean',
                            'location' => 'header',
                            'sentAs' => 'x-cos-delete-marker',
                        ),
                        'AcceptRanges' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'accept-ranges',
                        ),
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'Restore' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-restore',
                        ),
                        'LastModified' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Last-Modified',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'MissingMeta' => array(
                            'type' => 'numeric',
                            'location' => 'header',
                            'sentAs' => 'x-cos-missing-meta',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control',
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition',
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding',
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language',
                        ),
                        'ContentRange' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Range',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'Expires' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'ReplicationStatus' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-replication-status',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    ),
                ),
                'GetObjectAclOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string',
                                ),
                                'ID' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'Grants' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'AccessControlList',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Grantee' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string'),
                                            'ID' => array(
                                                'type' => 'string'))),
                                    'Permission' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketAclOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string'
                                ),
                                'ID' => array(
                                    'type' => 'string'
                                )
                            )
                        ),
                        'Grants' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'AccessControlList',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Grantee' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string'
                                            ),
                                            'ID' => array(
                                                'type' => 'string'
                                            )
                                        )
                                    ),
                                    'Permission' => array(
                                        'type' => 'string'
                                    )
                                )
                            )
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'GetBucketCorsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'CORSRules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'CORSRule',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'ID' => array(
                                        'type' => 'string'),
                                    'AllowedHeaders' => array(
                                        'type' => 'array',
                                        'sentAs' => 'AllowedHeader',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'type' => 'string',
                                        )
                                    ),
                                    'AllowedMethods' => array(
                                        'type' => 'array',
                                        'sentAs' => 'AllowedMethod',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                    'AllowedOrigins' => array(
                                        'type' => 'array',
                                        'sentAs' => 'AllowedOrigin',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                    'ExposeHeaders' => array(
                                        'type' => 'array',
                                        'sentAs' => 'ExposeHeader',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                    'MaxAgeSeconds' => array(
                                        'type' => 'numeric',
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketDomainOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'DomainRules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'DomainRule',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Status' => array(
                                        'type' => 'string'
                                    ),
                                    'Name' => array(
                                        'type' => 'string'
                                    ),
                                    'Type' => array(
                                        'type' => 'string'
                                    ),
                                    'ForcedReplacement' => array(
                                        'type' => 'string'
                                    ),
                                ),
                            ),
                        ),
                        'DomainTxtVerification' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-domain-txt-verification',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketLifecycleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Rules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Rule',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Expiration' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Date' => array(
                                                'type' => 'string',
                                            ),
                                            'Days' => array(
                                                'type' => 'numeric',
                                            ),
                                        ),
                                    ),
                                    'ID' => array(
                                        'type' => 'string',
                                    ),
                                    'Filter' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Prefix' => array(
                                                'type' => 'string',
                                            ),
                                            'Tag' => array(
                                                'type' => 'object',
                                                'properties' => array(
                                                    'Key' => array(
                                                        'type' => 'string'
                                                    ),
                                                    'Value' => array(
                                                        'type' => 'string'
                                                    ),
                                                )
                                            )
                                        ),
                                    ),
                                    'Status' => array(
                                        'type' => 'string',
                                    ),
                                    'Transition' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Date' => array(
                                                'type' => 'string',
                                            ),
                                            'Days' => array(
                                                'type' => 'numeric',
                                            ),
                                            'StorageClass' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'NoncurrentVersionTransition' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'NoncurrentDays' => array(
                                                'type' => 'numeric',
                                            ),
                                            'StorageClass' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'NoncurrentVersionExpiration' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'NoncurrentDays' => array(
                                                'type' => 'numeric',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketVersioningOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'MFADelete' => array(
                            'type' => 'string',
                            'location' => 'xml',
                            'sentAs' => 'MfaDelete',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketReplicationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Role' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Rules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Rule',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'ID' => array(
                                        'type' => 'string',
                                    ),
                                    'Prefix' => array(
                                        'type' => 'string',
                                    ),
                                    'Status' => array(
                                        'type' => 'string',
                                    ),
                                    'Destination' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Bucket' => array(
                                                'type' => 'string',
                                            ),
                                            'StorageClass' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketLocationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Location' => array(
                            'type' => 'string',
                            'location' => 'body',
                            'filters' => array(
                                'strval',
                                'strip_tags',
                                'trim',
                            ),
                        ),
                    ),
                ),
                'GetBucketAccelerateOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Type' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketWebsiteOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RedirectAllRequestsTo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'HostName' => array(
                                    'type' => 'string',
                                ),
                                'Protocol' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'IndexDocument' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Suffix' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'ErrorDocument' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Key' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'RoutingRules' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'RoutingRule',
                                'type' => 'object',
                                'sentAs' => 'RoutingRule',
                                'properties' => array(
                                    'Condition' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'HttpErrorCodeReturnedEquals' => array(
                                                'type' => 'string',
                                            ),
                                            'KeyPrefixEquals' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'Redirect' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'HostName' => array(
                                                'type' => 'string',
                                            ),
                                            'HttpRedirectCode' => array(
                                                'type' => 'string',
                                            ),
                                            'Protocol' => array(
                                                'type' => 'string',
                                            ),
                                            'ReplaceKeyPrefixWith' => array(
                                                'type' => 'string',
                                            ),
                                            'ReplaceKeyWith' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketInventoryOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Destination' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'COSBucketDestination' => array(
                                    'type' => 'object',
                                    'properties' => array(
                                        'Format' => array(
                                            'type' => 'string',
                                        ),
                                        'AccountId' => array(
                                            'type' => 'string',
                                        ),
                                        'Bucket' => array(
                                            'type' => 'string',
                                        ),
                                        'Prefix' => array(
                                            'type' => 'string',
                                        ),
                                        'Encryption' => array(
                                            'type' => 'object',
                                            'properties' => array(
                                                'SSE-COS' => array(
                                                    'type' => 'string',
                                                )
                                            )
                                        ),
                                        
                                    ),
                                ),
                            ),
                        ),
                        'Schedule' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Frequency' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'OptionalFields' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'properties' => array(
                                'Key' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'OptionalFields' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'name' => 'Field',
                                'type' => 'string',
                                'sentAs' => 'Field',
                            ),
                        ),
                        'IsEnabled' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Id' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'IncludedObjectVersions' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'TagSet' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'sentAs' => 'Tag',
                                'type' => 'object',
                                'properties' => array(
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'Value' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketNotificationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'CloudFunctionConfigurations' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'CloudFunctionConfiguration',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Id' => array(
                                        'type' => 'string',
                                    ),
                                    'CloudFunction' => array(
                                        'type' => 'string',
                                        'sentAs' => 'CloudFunction',
                                    ),
                                    'Events' => array(
                                        'type' => 'array',
                                        'sentAs' => 'Event',
                                        'data' => array(
                                            'xmlFlattened' => true,
                                        ),
                                        'items' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                    'Filter' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Key' => array(
                                                'type' => 'object',
                                                'sentAs' => 'Key',
                                                'properties' => array(
                                                    'FilterRules' => array(
                                                        'type' => 'array',
                                                        'sentAs' => 'FilterRule',
                                                        'data' => array(
                                                            'xmlFlattened' => true,
                                                        ),
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'properties' => array(
                                                                'Name' => array(
                                                                    'type' => 'string',
                                                                ),
                                                                'Value' => array(
                                                                    'type' => 'string',
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketLoggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'LoggingEnabled' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'TargetBucket' => array(
                                    'type' => 'string',
                                    'location' => 'xml',
                                ),
                                'TargetPrefix' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'UploadPartOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    ),
                ),
                'UploadPartCopyOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'CopySourceVersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-copy-source-version-id',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'LastModified' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    ),
                ),
                'PutBucketAclOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'PutObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    ),
                ),
                'AppendObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'Position' => array(
                            'type' => 'integer',
                            'location' => 'header',
                            'sentAs' => 'x-cos-next-append-position',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        )
                    ),
                ),
                'PutObjectAclOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketCorsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketDomainOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketLifecycleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketVersioningOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketReplicationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketNotificationOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketWebsiteOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header', 
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketAccelerateOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketLoggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketInventoryOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketTaggingOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'RestoreObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'ListPartsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Bucket' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'Key' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'UploadId' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'PartNumberMarker' => array(
                            'type' => 'numeric',
                            'location' => 'xml'
                        ),
                        'NextPartNumberMarker' => array(
                            'type' => 'numeric',
                            'location' => 'xml'
                        ),
                        'MaxParts' => array(
                            'type' => 'numeric',
                            'location' => 'xml'
                        ),
                        'IsTruncated' => array(
                            'type' => 'boolean',
                            'location' => 'xml'
                        ),
                        'Parts' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Part',
                            'data' => array(
                                'xmlFlattened' => true
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'PartNumber' => array(
                                        'type' => 'numeric'
                                    ),
                                    'LastModified' => array(
                                        'type' => 'string'
                                    ),
                                    'ETag' => array(
                                        'type' => 'string'
                                    ),
                                    'Size' => array(
                                        'type' => 'numeric'
                                    )
                                )
                            )
                        ),
                        'Initiator' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'ID' => array(
                                    'type' => 'string'
                                ),
                                'DisplayName' => array(
                                    'type' => 'string'
                                )
                            )
                        ),
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string'
                                ),
                                'ID' => array(
                                    'type' => 'string'
                                )
                            )
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'ListObjectsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'IsTruncated' => array(
                            'type' => 'boolean',
                            'location' => 'xml'
                        ),
                        'Marker' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'NextMarker' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'Contents' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Key' => array(
                                        'type' => 'string'
                                    ),
                                    'LastModified' => array(
                                        'type' => 'string'
                                    ),
                                    'ETag' => array(
                                        'type' => 'string'
                                    ),
                                    'Size' => array(
                                        'type' => 'numeric'
                                    ),
                                    'StorageClass' => array(
                                        'type' => 'string'
                                    ),
                                    'Owner' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string'
                                            ),
                                            'ID' => array(
                                                'type' => 'string'
                                            )
                                        )
                                    )
                                )
                            )
                        ),
                        'Name' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'MaxKeys' => array(
                            'type' => 'numeric',
                            'location' => 'xml'
                        ),
                        'CommonPrefixes' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Prefix' => array(
                                        'type' => 'string'
                                    )
                                )
                            )
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'xml'),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        )
                    )
                ),
                'ListBucketsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Buckets' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Bucket' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'type' => 'object',
                                            'items' => array(
                                                'properties' => array(
                                                    'Name' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'CreationDate' => array(
                                                        'type' => 'string',
                                                    ),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        ),
                        'Owner' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'DisplayName' => array(
                                    'type' => 'string',
                                ),
                                'ID' => array(
                                    'type' => 'string',
                                ),
                            ),
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'ListObjectVersionsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'IsTruncated' => array(
                            'type' => 'boolean',
                            'location' => 'xml',
                        ),
                        'KeyMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'VersionIdMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'NextKeyMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'NextVersionIdMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Version' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'ETag' => array(
                                        'type' => 'string',
                                    ),
                                    'Size' => array(
                                        'type' => 'numeric',
                                    ),
                                    'StorageClass' => array(
                                        'type' => 'string',
                                    ),
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'VersionId' => array(
                                        'type' => 'string',
                                    ),
                                    'IsLatest' => array(
                                        'type' => 'boolean',
                                    ),
                                    'LastModified' => array(
                                        'type' => 'string',
                                    ),
                                    'Owner' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string',
                                            ),
                                            'ID' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'DeleteMarkers' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'DeleteMarker',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Owner' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string',
                                            ),
                                            'ID' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'VersionId' => array(
                                        'type' => 'string',
                                    ),
                                    'IsLatest' => array(
                                        'type' => 'boolean',
                                    ),
                                    'LastModified' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'Name' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'MaxKeys' => array(
                            'type' => 'numeric',
                            'location' => 'xml',
                        ),
                        'CommonPrefixes' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Prefix' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'ListMultipartUploadsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Bucket' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'KeyMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'UploadIdMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'NextKeyMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Prefix' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Delimiter' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'NextUploadIdMarker' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'MaxUploads' => array(
                            'type' => 'numeric',
                            'location' => 'xml',
                        ),
                        'IsTruncated' => array(
                            'type' => 'boolean',
                            'location' => 'xml',
                        ),
                        'Uploads' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'Upload',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'UploadId' => array(
                                        'type' => 'string',
                                    ),
                                    'Key' => array(
                                        'type' => 'string',
                                    ),
                                    'Initiated' => array(
                                        'type' => 'string',
                                    ),
                                    'StorageClass' => array(
                                        'type' => 'string',
                                    ),
                                    'Owner' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'DisplayName' => array(
                                                'type' => 'string',
                                            ),
                                            'ID' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'Initiator' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'ID' => array(
                                                'type' => 'string',
                                            ),
                                            'DisplayName' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'CommonPrefixes' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'data' => array(
                                'xmlFlattened' => true,
                            ),
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Prefix' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                        'EncodingType' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'ListBucketInventoryConfigurationsOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'InventoryConfiguration' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'sentAs' => 'InventoryConfiguration',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Destination' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'COSBucketDestination' => array(
                                                'type' => 'object',
                                                'properties' => array(
                                                    'Format' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'AccountId' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'Bucket' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'Prefix' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'Encryption' => array(
                                                        'type' => 'object',
                                                        'properties' => array(
                                                            'SSE-COS' => array(
                                                                'type' => 'string',
                                                            )
                                                        )
                                                    ),
                                                    
                                                ),
                                            ),
                                        ),
                                    ),
                                    'Schedule' => array(
                                        'type' => 'object',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Frequency' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'OptionalFields' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'properties' => array(
                                            'Key' => array(
                                                'type' => 'string',
                                            ),
                                        ),
                                    ),
                                    'OptionalFields' => array(
                                        'type' => 'array',
                                        'location' => 'xml',
                                        'items' => array(
                                            'name' => 'Field',
                                            'type' => 'string',
                                            'sentAs' => 'Field',
                                        ),
                                    ),
                                    'IsEnabled' => array(
                                        'type' => 'string',
                                        'location' => 'xml',
                                    ),
                                    'Id' => array(
                                        'type' => 'string',
                                        'location' => 'xml',
                                    ),
                                    'IncludedObjectVersions' => array(
                                        'type' => 'string',
                                        'location' => 'xml',
                                    ),
                                    'RequestId' => array(
                                        'location' => 'header',
                                        'sentAs' => 'x-cos-request-id',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'HeadObjectOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'DeleteMarker' => array(
                            'type' => 'boolean',
                            'location' => 'header',
                            'sentAs' => 'x-cos-delete-marker',
                        ),
                        'AcceptRanges' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'accept-ranges',
                        ),
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'Restore' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-restore',
                        ),
                        'LastModified' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Last-Modified',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'MissingMeta' => array(
                            'type' => 'numeric',
                            'location' => 'header',
                            'sentAs' => 'x-cos-missing-meta',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control',
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition',
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding',
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'Expires' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'ReplicationStatus' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-replication-status',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CRC' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-hash-crc64ecma',
                        )
                    )
                ),
                'HeadBucketOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'BucketAzType' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-bucket-az-type', // undefined 或 MAZ
                        ),
                        'BucketArch' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-bucket-arch', // undefined 或 OFS
                        ),
                    ),
                ),
                'SelectObjectContentOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RawData' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                    ),
                ),
                'GetBucketIntelligentTieringOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                        'Transition' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Days' => array(
                                    'type' => 'string',
                                ),
                                'RequestFrequent' => array(
                                    'type' => 'string',
                                ),
                            )
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketIntelligentTieringOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'ImageInfoOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                    ),
                ),
                'ImageExifOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                    ),
                ),
                'ImageAveOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                    ),
                ),
                'ImageProcessOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'OriginalInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Key' => array(
                                    'type' => 'string',
                                ),
                                'Location' => array(
                                    'type' => 'string',
                                ),
                                'ETag' => array(
                                    'type' => 'string',
                                ),
                                'ImageInfo' => array(
                                    'type' => 'object',
                                    'properties' => array(
                                        'Format' => array(
                                            'type' => 'string',
                                        ),
                                        'Width' => array(
                                            'type' => 'string',
                                        ),
                                        'Height' => array(
                                            'type' => 'string',
                                        ),
                                        'Quality' => array(
                                            'type' => 'string',
                                        ),
                                        'Ave' => array(
                                            'type' => 'string',
                                        ),
                                        'Orientation' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ProcessResults' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Object' => array(
                                    'type' => 'array',
                                    'items' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'Key' => array(
                                                'type' => 'string',
                                            ),
                                            'Location' => array(
                                                'type' => 'string',
                                            ),
                                            'Format' => array(
                                                'type' => 'string',
                                            ),
                                            'Width' => array(
                                                'type' => 'string',
                                            ),
                                            'Height' => array(
                                                'type' => 'string',
                                            ),
                                            'Size' => array(
                                                'type' => 'string',
                                            ),
                                            'Quality' => array(
                                                'type' => 'string',
                                            ),
                                            'ETag' => array(
                                                'type' => 'string',
                                            ),
                                            'WatermarkStatus' => array(
                                                'type' => 'integer',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'QrcodeOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'CodeStatus' => array(
                            'type' => 'integer',
                            'location' => 'xml',
                        ),
                        'QRcodeInfo' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'CodeUrl' => array(
                                        'type' => 'string',
                                    ),
                                    'Point' => array(
                                        'type' => 'array',
                                        'items' => array(
                                            'type' => 'string',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'ResultImage' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                    ),
                ),
                'QrcodeGenerateOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ResultImage' => array(
                            'type' => 'string',
                            'location' => 'xml',
                        ),
                    ),
                ),
                'DetectLabelOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'Labels' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Confidence' => array(
                                        'type' => 'integer',
                                    ),
                                    'Name' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'PutBucketImageStyleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketImageStyleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'StyleRule' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'StyleName' => array(
                                        'type' => 'string',
                                    ),
                                    'StyleBody' => array(
                                        'type' => 'string',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'DeleteBucketImageStyleOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'PutBucketGuetzliOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetBucketGuetzliOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                    ),
                ),
                'DeleteBucketGuetzliOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                    ),
                ),
                'GetObjectSensitiveContentRecognitionOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'PornInfo' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Code' => array(
                                        'type' => 'integer',
                                    ),
                                    'Msg' => array(
                                        'type' => 'string',
                                    ),
                                    'HitFlag' => array(
                                        'type' => 'integer',
                                    ),
                                    'Score' => array(
                                        'type' => 'integer',
                                    ),
                                    'Label' => array(
                                        'type' => 'string',
                                    )
                                ),
                            ),
                        ),
                        'TerroristInfo' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Code' => array(
                                        'type' => 'integer',
                                    ),
                                    'Msg' => array(
                                        'type' => 'string',
                                    ),
                                    'HitFlag' => array(
                                        'type' => 'integer',
                                    ),
                                    'Score' => array(
                                        'type' => 'integer',
                                    ),
                                    'Label' => array(
                                        'type' => 'string',
                                    )
                                ),
                            ),
                        ),
                        'PoliticsInfo' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Code' => array(
                                        'type' => 'integer',
                                    ),
                                    'Msg' => array(
                                        'type' => 'string',
                                    ),
                                    'HitFlag' => array(
                                        'type' => 'integer',
                                    ),
                                    'Score' => array(
                                        'type' => 'integer',
                                    ),
                                    'Label' => array(
                                        'type' => 'string',
                                    )
                                ),
                            ),
                        ),
                        'AdsInfo' => array(
                            'type' => 'array',
                            'location' => 'xml',
                            'items' => array(
                                'type' => 'object',
                                'properties' => array(
                                    'Code' => array(
                                        'type' => 'integer',
                                    ),
                                    'Msg' => array(
                                        'type' => 'string',
                                    ),
                                    'HitFlag' => array(
                                        'type' => 'integer',
                                    ),
                                    'Score' => array(
                                        'type' => 'integer',
                                    ),
                                    'Label' => array(
                                        'type' => 'string',
                                    )
                                ),
                            ),
                        ),
                    )
                ),
                'DetectTextOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-ci-request-id',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'JobsDetail' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Code' => array( 'type' => 'string', 'location' => 'xml',),
                                'DataId' => array( 'type' => 'string', 'location' => 'xml',),
                                'Message' => array( 'type' => 'string', 'location' => 'xml',),
                                'JobId' => array( 'type' => 'string', 'location' => 'xml',),
                                'State' => array( 'type' => 'string', 'location' => 'xml',),
                                'CreationTime' => array( 'type' => 'string', 'location' => 'xml',),
                                'Content' => array( 'type' => 'string', 'location' => 'xml',),
                                'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                'Result' => array( 'type' => 'integer', 'location' => 'xml',),
                                'SectionCount' => array( 'type' => 'integer', 'location' => 'xml',),
                                'PornInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'TerrorismInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'PoliticsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'AdsInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'IllegalInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'AbuseInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                        'Count' => array( 'type' => 'integer', 'location' => 'xml',),
                                    ),
                                ),
                                'Section' => array(
                                    'type' => 'array',
                                    'location' => 'xml',
                                    'items' => array(
                                        'type' => 'object',
                                        'properties' => array(
                                            'StartByte' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'Label' => array( 'type' => 'string', 'location' => 'xml',),
                                            'Result' => array( 'type' => 'integer', 'location' => 'xml',),
                                            'PornInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'TerrorismInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'PoliticsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'AdsInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'IllegalInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                            'AbuseInfo' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'HitFlag' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Score' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'Keywords' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'SubLabel' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'LibResults' => array(
                                                        'type' => 'array',
                                                        'location' => 'xml',
                                                        'items' => array(
                                                            'type' => 'object',
                                                            'location' => 'xml',
                                                            'properties' => array(
                                                                'LibType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                                'LibName' => array( 'type' => 'string', 'location' => 'xml',),
                                                                'Keywords' => array(
                                                                    'type' => 'array',
                                                                    'location' => 'xml',
                                                                    'items' => array( 'type' => 'string', 'location' => 'xml',),
                                                                ),
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                                'UserInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'TokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Nickname' => array( 'type' => 'string', 'location' => 'xml',),
                                        'DeviceId' => array( 'type' => 'string', 'location' => 'xml',),
                                        'AppId' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Room' => array( 'type' => 'string', 'location' => 'xml',),
                                        'IP' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Type' => array( 'type' => 'string', 'location' => 'xml',),
                                        'ReceiveTokenId' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Gender' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Level' => array( 'type' => 'string', 'location' => 'xml',),
                                        'Role' => array( 'type' => 'string', 'location' => 'xml',),
                                    ),
                                ),
                                'ListInfo' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'ListResults' => array(
                                            'type' => 'array',
                                            'location' => 'xml',
                                            'items' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'ListType' => array( 'type' => 'integer', 'location' => 'xml',),
                                                    'ListName' => array( 'type' => 'string', 'location' => 'xml',),
                                                    'Entity' => array( 'type' => 'string', 'location' => 'xml',),
                                                ),
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                'GetSnapshotOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'Body' => array(
                            'type' => 'string',
                            'instanceOf' => 'GuzzleHttp\\Psr7\\Stream',
                            'location' => 'body',
                        ),
                        'DeleteMarker' => array(
                            'type' => 'boolean',
                            'location' => 'header',
                            'sentAs' => 'x-cos-delete-marker',
                        ),
                        'AcceptRanges' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'accept-ranges',
                        ),
                        'Expiration' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-expiration',
                        ),
                        'Restore' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-restore',
                        ),
                        'LastModified' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Last-Modified',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'MissingMeta' => array(
                            'type' => 'numeric',
                            'location' => 'header',
                            'sentAs' => 'x-cos-missing-meta',
                        ),
                        'VersionId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-version-id',
                        ),
                        'CacheControl' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Cache-Control',
                        ),
                        'ContentDisposition' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Disposition',
                        ),
                        'ContentEncoding' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Encoding',
                        ),
                        'ContentLanguage' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Language',
                        ),
                        'ContentRange' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Range',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'Expires' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'WebsiteRedirectLocation' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-website-redirect-location',
                        ),
                        'ServerSideEncryption' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption',
                        ),
                        'SSECustomerAlgorithm' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-algorithm',
                        ),
                        'SSECustomerKeyMD5' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-customer-key-MD5',
                        ),
                        'SSEKMSKeyId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-server-side-encryption-aws-kms-key-id',
                        ),
                        'StorageClass' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-storage-class',
                        ),
                        'RequestCharged' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-charged',
                        ),
                        'ReplicationStatus' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-replication-status',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        )
                    )
                ),
                'PutBucketRefererOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'ETag' => array(
                            'type' => 'string',
                            'location' => 'header',
                        ),
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        )
                    )
                ),
                'GetBucketRefererOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id'
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'Status' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'RefererType' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'EmptyReferConfiguration' => array(
                            'type' => 'string',
                            'location' => 'xml'
                        ),
                        'DomainList' => array(
                            'location' => 'xml',
                            'type' => 'object',
                            'properties' => array(
                                'Domains' => array(
                                    'type' => 'array',
                                    'data' => array(
                                        'xmlFlattened' => true,
                                    ),
                                    'items' => array(
                                        'name' => 'Domain',
                                        'type' => 'string',
                                        'sentAs' => 'Domain',
                                    ),
                                )
                            )
                        )
                    )
                ),
                'GetMediaInfoOutput' => array(
                    'type' => 'object',
                    'additionalProperties' => true,
                    'properties' => array(
                        'RequestId' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'x-cos-request-id',
                        ),
                        'ContentType' => array(
                            'type' => 'string',
                            'location' => 'header',
                            'sentAs' => 'Content-Type',
                        ),
                        'ContentLength' => array(
                            'type' => 'numeric',
                            'minimum'=> 0,
                            'location' => 'header',
                            'sentAs' => 'Content-Length',
                        ),
                        'MediaInfo' => array(
                            'type' => 'object',
                            'location' => 'xml',
                            'properties' => array(
                                'Stream' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'JobId' => array(
                                            'type' => 'string',
                                        ),
                                        'State' => array(
                                            'type' => 'string',
                                        ),
                                        'Video' => array(
                                            'type' => 'object',
                                            'location' => 'xml',
                                            'properties' => array(
                                                'Index' => array(
                                                    'type' => 'integer',
                                                ),
                                                'CodecName' => array(
                                                    'type' => 'string',
                                                ),
                                                'CodecLongName' => array(
                                                    'type' => 'string',
                                                ),
                                                'CodecTimeBase' => array(
                                                    'type' => 'string',
                                                ),
                                                'CodecTag' => array(
                                                    'type' => 'string',
                                                ),
                                                'Profile' => array(
                                                    'type' => 'string',
                                                ),
                                                'Height' => array(
                                                    'type' => 'integer',
                                                ),
                                                'Width' => array(
                                                    'type' => 'integer',
                                                ),
                                                'HasBFrame' => array(
                                                    'type' => 'integer',
                                                ),
                                                'RefFrames' => array(
                                                    'type' => 'integer',
                                                ),
                                                'Sar' => array(
                                                    'type' => 'string',
                                                ),
                                                'Dar' => array(
                                                    'type' => 'string',
                                                ),
                                                'PixFormat' => array(
                                                    'type' => 'string',
                                                ),
                                                'FieldOrder' => array(
                                                    'type' => 'string',
                                                ),
                                                'Level' => array(
                                                    'type' => 'integer',
                                                ),
                                                'Fps' => array(
                                                    'type' => 'integer',
                                                ),
                                                'AvgFps' => array(
                                                    'type' => 'string',
                                                ),
                                                'Timebase' => array(
                                                    'type' => 'string',
                                                ),
                                                'StartTime' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'Duration' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'Bitrate' => array(
                                                    'type' => 'numeric',
                                                ),
                                                'NumFrames' => array(
                                                    'type' => 'integer',
                                                ),
                                                'Language' => array(
                                                    'type' => 'string',
                                                )
                                            ),
                                            'Audio' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'Index' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'CodecName' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'CodecLongName' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'CodecTimeBase' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'CodecTagString' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'CodecTag' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'SampleFmt' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'SampleRate' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'Channel' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'ChannelLayout' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'Timebase' => array(
                                                        'type' => 'string',
                                                    ),
                                                    'StartTime' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'Duration' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'Bitrate' => array(
                                                        'type' => 'numeric',
                                                    ),
                                                    'Language' => array(
                                                        'type' => 'string',
                                                    )
                                                )
                                            ),
                                            'Subtitle' => array(
                                                'type' => 'object',
                                                'location' => 'xml',
                                                'properties' => array(
                                                    'Index' => array(
                                                        'type' => 'integer',
                                                    ),
                                                    'Language' => array(
                                                        'type' => 'string',
                                                    )
                                                )
                                            )
                                        ),
                                    )
                                ),
                                'Format' => array(
                                    'type' => 'object',
                                    'location' => 'xml',
                                    'properties' => array(
                                        'NumStream' => array(
                                            'type' => 'integer',
                                        ),
                                        'NumProgram' => array(
                                            'type' => 'integer',
                                        ),
                                        'FormatName' => array(
                                            'type' => 'string',
                                        ),
                                        'FormatLongName' => array(
                                            'type' => 'string',
                                        ),
                                        'StartTime' => array(
                                            'type' => 'numeric',
                                        ),
                                        'Duration' => array(
                                            'type' => 'numeric',
                                        ),
                                        'Bitrate' => array(
                                            'type' => 'integer',
                                        ),
                                        'Size' => array(
                                            'type' => 'integer',
                                        )
                                    )
                                )
                            )
                        )


                    )
                ),
                'CreateMediaTranscodeJobsOutput' => Descriptions::CreateMediaTranscodeJobsOutput(),
                'DescribeMediaJobOutput' => Descriptions::DescribeMediaJobOutput(),
                'DescribeMediaJobsOutput' => Descriptions::DescribeMediaJobsOutput(),
                'CreateMediaJobsOutput' => Descriptions::CreateMediaJobsOutput(),
                'CreateMediaSnapshotJobsOutput' => Descriptions::CreateMediaSnapshotJobsOutput(),
                'CreateMediaConcatJobsOutput' => Descriptions::CreateMediaConcatJobsOutput(),
                'DetectAudioOutput' => Descriptions::DetectAudioOutput(),
                'GetDetectAudioResultOutput' => Descriptions::GetDetectAudioResultOutput(),
                'GetDetectTextResultOutput' => Descriptions::GetDetectTextResultOutput(),
                'DetectVideoOutput' => Descriptions::DetectVideoOutput(),
                'GetDetectVideoResultOutput' => Descriptions::GetDetectVideoResultOutput(),
                'DetectDocumentOutput' => Descriptions::DetectDocumentOutput(),
                'GetDetectDocumentResultOutput' => Descriptions::GetDetectDocumentResultOutput(),
                'CreateDocProcessJobsOutput' => Descriptions::CreateDocProcessJobsOutput(),
                'DescribeDocProcessQueuesOutput' => Descriptions::DescribeDocProcessQueuesOutput(),
                'DescribeDocProcessJobOutput' => Descriptions::DescribeDocProcessJobOutput(),
                'GetDescribeDocProcessJobsOutput' => Descriptions::GetDescribeDocProcessJobsOutput(),
                'DetectImageOutput' => Descriptions::DetectImageOutput(),
                'DetectImagesOutput' => Descriptions::DetectImagesOutput(),
                'DetectVirusOutput' => Descriptions::DetectVirusOutput(),
                'GetDetectVirusResultOutput' => Descriptions::GetDetectVirusResultOutput(),
                'GetDetectImageResultOutput' => Descriptions::GetDetectImageResultOutput(),
                'CreateMediaVoiceSeparateJobsOutput' => Descriptions::CreateMediaVoiceSeparateJobsOutput(),
                'DescribeMediaVoiceSeparateJobOutput' => Descriptions::DescribeMediaVoiceSeparateJobOutput(),
                'DetectWebpageOutput' => Descriptions::DetectWebpageOutput(),
                'GetDetectWebpageResultOutput' => Descriptions::GetDetectWebpageResultOutput(),
                'DescribeMediaBucketsOutput' => Descriptions::DescribeMediaBucketsOutput(),
                'GetPrivateM3U8Output' => Descriptions::GetPrivateM3U8Output(),
                'DescribeMediaQueuesOutput' => Descriptions::DescribeMediaQueuesOutput(),
                'UpdateMediaQueueOutput' => Descriptions::UpdateMediaQueueOutput(),
                'CreateMediaSmartCoverJobsOutput' => Descriptions::CreateMediaSmartCoverJobsOutput(),
                'CreateMediaVideoProcessJobsOutput' => Descriptions::CreateMediaVideoProcessJobsOutput(),
                'CreateMediaVideoMontageJobsOutput' => Descriptions::CreateMediaVideoMontageJobsOutput(),
                'CreateMediaAnimationJobsOutput' => Descriptions::CreateMediaAnimationJobsOutput(),
                'CreateMediaPicProcessJobsOutput' => Descriptions::CreateMediaPicProcessJobsOutput(),
                'CreateMediaSegmentJobsOutput' => Descriptions::CreateMediaSegmentJobsOutput(),
                'CreateMediaVideoTagJobsOutput' => Descriptions::CreateMediaVideoTagJobsOutput(),
                'CreateMediaSuperResolutionJobsOutput' => Descriptions::CreateMediaSuperResolutionJobsOutput(),
                'CreateMediaSDRtoHDRJobsOutput' => Descriptions::CreateMediaSDRtoHDRJobsOutput(),
                'CreateMediaDigitalWatermarkJobsOutput' => Descriptions::CreateMediaDigitalWatermarkJobsOutput(),
                'CreateMediaExtractDigitalWatermarkJobsOutput' => Descriptions::CreateMediaExtractDigitalWatermarkJobsOutput(),
                'DetectLiveVideoOutput' => Descriptions::DetectLiveVideoOutput(),
                'CancelLiveVideoAuditingOutput' => Descriptions::CancelLiveVideoAuditingOutput(),
                'OpticalOcrRecognitionOutput' => Descriptions::OpticalOcrRecognitionOutput(),
                'TriggerWorkflowOutput' => Descriptions::TriggerWorkflowOutput(),
                'GetWorkflowInstancesOutput' => Descriptions::GetWorkflowInstancesOutput(),
                'GetWorkflowInstanceOutput' => Descriptions::GetWorkflowInstanceOutput(),
                'CreateMediaSnapshotTemplateOutput' => Descriptions::CreateMediaSnapshotTemplateOutput(),
                'UpdateMediaSnapshotTemplateOutput' => Descriptions::UpdateMediaSnapshotTemplateOutput(),
                'CreateMediaTranscodeTemplateOutput' => Descriptions::CreateMediaTranscodeTemplateOutput(),
                'UpdateMediaTranscodeTemplateOutput' => Descriptions::UpdateMediaTranscodeTemplateOutput(),
                'CreateMediaHighSpeedHdTemplateOutput' => Descriptions::CreateMediaHighSpeedHdTemplateOutput(),
                'UpdateMediaHighSpeedHdTemplateOutput' => Descriptions::UpdateMediaHighSpeedHdTemplateOutput(),
                'CreateMediaAnimationTemplateOutput' => Descriptions::CreateMediaAnimationTemplateOutput(),
                'UpdateMediaAnimationTemplateOutput' => Descriptions::UpdateMediaAnimationTemplateOutput(),
                'CreateMediaConcatTemplateOutput' => Descriptions::CreateMediaConcatTemplateOutput(),
                'UpdateMediaConcatTemplateOutput' => Descriptions::UpdateMediaConcatTemplateOutput(),
                'CreateMediaVideoProcessTemplateOutput' => Descriptions::CreateMediaVideoProcessTemplateOutput(),
                'UpdateMediaVideoProcessTemplateOutput' => Descriptions::UpdateMediaVideoProcessTemplateOutput(),
                'CreateMediaVideoMontageTemplateOutput' => Descriptions::CreateMediaVideoMontageTemplateOutput(),
                'UpdateMediaVideoMontageTemplateOutput' => Descriptions::UpdateMediaVideoMontageTemplateOutput(),
                'CreateMediaVoiceSeparateTemplateOutput' => Descriptions::CreateMediaVoiceSeparateTemplateOutput(),
                'UpdateMediaVoiceSeparateTemplateOutput' => Descriptions::UpdateMediaVoiceSeparateTemplateOutput(),
                'CreateMediaSuperResolutionTemplateOutput' => Descriptions::CreateMediaSuperResolutionTemplateOutput(),
                'UpdateMediaSuperResolutionTemplateOutput' => Descriptions::UpdateMediaSuperResolutionTemplateOutput(),
                'CreateMediaPicProcessTemplateOutput' => Descriptions::CreateMediaPicProcessTemplateOutput(),
                'UpdateMediaPicProcessTemplateOutput' => Descriptions::UpdateMediaPicProcessTemplateOutput(),
                'CreateMediaWatermarkTemplateOutput' => Descriptions::CreateMediaWatermarkTemplateOutput(),
                'UpdateMediaWatermarkTemplateOutput' => Descriptions::UpdateMediaWatermarkTemplateOutput(),
                'DescribeMediaTemplatesOutput' => Descriptions::DescribeMediaTemplatesOutput(),
                'DescribeWorkflowOutput' => Descriptions::DescribeWorkflowOutput(),
                'DeleteWorkflowOutput' => Descriptions::DeleteWorkflowOutput(),
                'CreateInventoryTriggerJobOutput' => Descriptions::CreateInventoryTriggerJobOutput(),
                'DescribeInventoryTriggerJobsOutput' => Descriptions::DescribeInventoryTriggerJobsOutput(),
                'DescribeInventoryTriggerJobOutput' => Descriptions::DescribeInventoryTriggerJobOutput(),
                'CancelInventoryTriggerJobOutput' => Descriptions::CancelInventoryTriggerJobOutput(),
                'CreateMediaNoiseReductionJobsOutput' => Descriptions::CreateMediaNoiseReductionJobsOutput(),
                'ImageRepairProcessOutput' => Descriptions::ImageRepairProcessOutput(),
                'ImageDetectCarProcessOutput' => Descriptions::ImageDetectCarProcessOutput(),
                'ImageAssessQualityProcessOutput' => Descriptions::ImageAssessQualityProcessOutput(),
                'ImageSearchOpenOutput' => Descriptions::ImageSearchOpenOutput(),
                'ImageSearchAddOutput' => Descriptions::ImageSearchAddOutput(),
                'ImageSearchOutput' => Descriptions::ImageSearchOutput(),
                'ImageSearchDeleteOutput' => Descriptions::ImageSearchDeleteOutput(),
                'BindCiServiceOutput' => Descriptions::BindCiServiceOutput(),
                'GetCiServiceOutput' => Descriptions::GetCiServiceOutput(),
                'UnBindCiServiceOutput' => Descriptions::UnBindCiServiceOutput(),
                'GetHotLinkOutput' => Descriptions::GetHotLinkOutput(),
                'AddHotLinkOutput' => Descriptions::AddHotLinkOutput(),
                'OpenOriginProtectOutput' => Descriptions::OpenOriginProtectOutput(),
                'GetOriginProtectOutput' => Descriptions::GetOriginProtectOutput(),
                'CloseOriginProtectOutput' => Descriptions::CloseOriginProtectOutput(),
                'ImageDetectFaceOutput' => Descriptions::ImageDetectFaceOutput(),
                'ImageFaceEffectOutput' => Descriptions::ImageFaceEffectOutput(),
                'IDCardOCROutput' => Descriptions::IDCardOCROutput(),
                'IDCardOCRByUploadOutput' => Descriptions::IDCardOCRByUploadOutput(),
                'GetLiveCodeOutput' => Descriptions::GetLiveCodeOutput(),
                'GetActionSequenceOutput' => Descriptions::GetActionSequenceOutput(),
                'DescribeDocProcessBucketsOutput' => Descriptions::DescribeDocProcessBucketsOutput(),
                'UpdateDocProcessQueueOutput' => Descriptions::UpdateDocProcessQueueOutput(),
                'CreateMediaQualityEstimateJobsOutput' => Descriptions::CreateMediaQualityEstimateJobsOutput(),
                'CreateMediaStreamExtractJobsOutput' => Descriptions::CreateMediaStreamExtractJobsOutput(),
                'FileJobs4HashOutput' => Descriptions::FileJobs4HashOutput(),
                'OpenFileProcessServiceOutput' => Descriptions::OpenFileProcessServiceOutput(),
                'GetFileProcessQueueListOutput' => Descriptions::GetFileProcessQueueListOutput(),
                'UpdateFileProcessQueueOutput' => Descriptions::UpdateFileProcessQueueOutput(),
                'CreateFileHashCodeJobsOutput' => Descriptions::CreateFileHashCodeJobsOutput(),
                'GetFileHashCodeResultOutput' => Descriptions::GetFileHashCodeResultOutput(),
                'CreateFileUncompressJobsOutput' => Descriptions::CreateFileUncompressJobsOutput(),
                'GetFileUncompressResultOutput' => Descriptions::GetFileUncompressResultOutput(),
                'CreateFileCompressJobsOutput' => Descriptions::CreateFileCompressJobsOutput(),
                'GetFileCompressResultOutput' => Descriptions::GetFileCompressResultOutput(),
                'CreateM3U8PlayListJobsOutput' => Descriptions::CreateM3U8PlayListJobsOutput(),
                'GetPicQueueListOutput' => Descriptions::GetPicQueueListOutput(),
                'UpdatePicQueueOutput' => Descriptions::UpdatePicQueueOutput(),
                'GetPicBucketListOutput' => Descriptions::GetPicBucketListOutput(),
                'GetAiBucketListOutput' => Descriptions::GetAiBucketListOutput(),
                'OpenAiServiceOutput' => Descriptions::OpenAiServiceOutput(),
                'CloseAiServiceOutput' => Descriptions::CloseAiServiceOutput(),
                'GetAiQueueListOutput' => Descriptions::GetAiQueueListOutput(),
                'UpdateAiQueueOutput' => Descriptions::UpdateAiQueueOutput(),
                'CreateMediaTranscodeProTemplateOutput' => Descriptions::CreateMediaTranscodeProTemplateOutput(),
                'UpdateMediaTranscodeProTemplateOutput' => Descriptions::UpdateMediaTranscodeProTemplateOutput(),
                'CreateVoiceTtsTemplateOutput' => Descriptions::CreateVoiceTtsTemplateOutput(),
                'UpdateVoiceTtsTemplateOutput' => Descriptions::UpdateVoiceTtsTemplateOutput(),
                'CreateMediaSmartCoverTemplateOutput' => Descriptions::CreateMediaSmartCoverTemplateOutput(),
                'UpdateMediaSmartCoverTemplateOutput' => Descriptions::UpdateMediaSmartCoverTemplateOutput(),
                'CreateVoiceSpeechRecognitionTemplateOutput' => Descriptions::CreateVoiceSpeechRecognitionTemplateOutput(),
                'UpdateVoiceSpeechRecognitionTemplateOutput' => Descriptions::UpdateVoiceSpeechRecognitionTemplateOutput(),
                'CreateVoiceTtsJobsOutput' => Descriptions::CreateVoiceTtsJobsOutput(),
                'CreateAiTranslationJobsOutput' => Descriptions::CreateAiTranslationJobsOutput(),
                'CreateVoiceSpeechRecognitionJobsOutput' => Descriptions::CreateVoiceSpeechRecognitionJobsOutput(),
                'CreateAiWordsGeneralizeJobsOutput' => Descriptions::CreateAiWordsGeneralizeJobsOutput(),
                'CreateMediaVideoEnhanceJobsOutput' => Descriptions::CreateMediaVideoEnhanceJobsOutput(),
                'CreateMediaVideoEnhanceTemplateOutput' => Descriptions::CreateMediaVideoEnhanceTemplateOutput(),
                'UpdateMediaVideoEnhanceTemplateOutput' => Descriptions::UpdateMediaVideoEnhanceTemplateOutput(),
                'OpenImageSlimOutput' => Descriptions::OpenImageSlimOutput(),
                'CloseImageSlimOutput' => Descriptions::CloseImageSlimOutput(),
                'GetImageSlimOutput' => Descriptions::GetImageSlimOutput(),
                'AutoTranslationBlockProcessOutput' => Descriptions::AutoTranslationBlockProcessOutput(),
                'RecognizeLogoProcessOutput' => Descriptions::RecognizeLogoProcessOutput(),
                'DetectLabelProcessOutput' => Descriptions::DetectLabelProcessOutput(),
                'AIGameRecProcessOutput' => Descriptions::AIGameRecProcessOutput(),
                'AIBodyRecognitionProcessOutput' => Descriptions::AIBodyRecognitionProcessOutput(),
                'DetectPetProcessOutput' => Descriptions::DetectPetProcessOutput(),
                'AILicenseRecProcessOutput' => Descriptions::AILicenseRecProcessOutput(),
                'CreateMediaTargetRecTemplateOutput' => Descriptions::CreateMediaTargetRecTemplateOutput(),
                'UpdateMediaTargetRecTemplateOutput' => Descriptions::UpdateMediaTargetRecTemplateOutput(),
                'CreateMediaTargetRecJobsOutput' => Descriptions::CreateMediaTargetRecJobsOutput(),
                'CreateMediaSegmentVideoBodyJobsOutput' => Descriptions::CreateMediaSegmentVideoBodyJobsOutput(),
                'OpenAsrServiceOutput' => Descriptions::OpenAsrServiceOutput(),
                'GetAsrBucketListOutput' => Descriptions::GetAsrBucketListOutput(),
                'CloseAsrServiceOutput' => Descriptions::CloseAsrServiceOutput(),
                'GetAsrQueueListOutput' => Descriptions::GetAsrQueueListOutput(),
                'UpdateAsrQueueOutput' => Descriptions::UpdateAsrQueueOutput(),
                'CreateMediaNoiseReductionTemplateOutput' => Descriptions::CreateMediaNoiseReductionTemplateOutput(),
                'UpdateMediaNoiseReductionTemplateOutput' => Descriptions::UpdateMediaNoiseReductionTemplateOutput(),
                'CreateVoiceSoundHoundJobsOutput' => Descriptions::CreateVoiceSoundHoundJobsOutput(),
                'CreateVoiceVocalScoreJobsOutput' => Descriptions::CreateVoiceVocalScoreJobsOutput(),
                'CreateDatasetOutput' => Descriptions::CreateDatasetOutput(),
                'CreateDatasetBindingOutput' => Descriptions::CreateDatasetBindingOutput(),
                'CreateFileMetaIndexOutput' => Descriptions::CreateFileMetaIndexOutput(),
                'DatasetFaceSearchOutput' => Descriptions::DatasetFaceSearchOutput(),
                'DatasetSimpleQueryOutput' => Descriptions::DatasetSimpleQueryOutput(),
                'DeleteDatasetOutput' => Descriptions::DeleteDatasetOutput(),
                'DeleteDatasetBindingOutput' => Descriptions::DeleteDatasetBindingOutput(),
                'DeleteFileMetaIndexOutput' => Descriptions::DeleteFileMetaIndexOutput(),
                'DescribeDatasetOutput' => Descriptions::DescribeDatasetOutput(),
                'DescribeDatasetBindingOutput' => Descriptions::DescribeDatasetBindingOutput(),
                'DescribeDatasetBindingsOutput' => Descriptions::DescribeDatasetBindingsOutput(),
                'DescribeDatasetsOutput' => Descriptions::DescribeDatasetsOutput(),
                'DescribeFileMetaIndexOutput' => Descriptions::DescribeFileMetaIndexOutput(),
                'SearchImageOutput' => Descriptions::SearchImageOutput(),
                'UpdateDatasetOutput' => Descriptions::UpdateDatasetOutput(),
                'UpdateFileMetaIndexOutput' => Descriptions::UpdateFileMetaIndexOutput(),
                'ZipFilePreviewOutput' => Descriptions::ZipFilePreviewOutput(),
                'GetHLSPlayKeyOutput' => Descriptions::GetHLSPlayKeyOutput(),
                'PostWatermarkJobsOutput' => Descriptions::PostWatermarkJobsOutput(),
                'GeneratePlayListOutput' => Descriptions::GeneratePlayListOutput(),
                'CreateWatermarkTemplateOutput' => Descriptions::CreateWatermarkTemplateOutput(),

            )
        );
    }
}
