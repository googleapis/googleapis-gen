<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/batch_job.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class BatchJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v4/enums/batch_job_status.protogoogle.ads.googleads.v4.enums"h
BatchJobStatusEnum"R
BatchJobStatus
UNSPECIFIED 
UNKNOWN
PENDING
RUNNING
DONEB�
!com.google.ads.googleads.v4.enumsBBatchJobStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�

1google/ads/googleads/v4/resources/batch_job.proto!google.ads.googleads.v4.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
BatchJob@
resource_name (	B)�A�A#
!googleads.googleapis.com/BatchJob,
id (2.google.protobuf.Int64ValueB�AB
next_add_sequence_token (2.google.protobuf.StringValueB�AS
metadata (2<.google.ads.googleads.v4.resources.BatchJob.BatchJobMetadataB�AU
status (2@.google.ads.googleads.v4.enums.BatchJobStatusEnum.BatchJobStatusB�AA
long_running_operation (2.google.protobuf.StringValueB�A�
BatchJobMetadata=
creation_date_time (2.google.protobuf.StringValueB�A?
completion_date_time (2.google.protobuf.StringValueB�AE
estimated_completion_ratio (2.google.protobuf.DoubleValueB�A9
operation_count (2.google.protobuf.Int64ValueB�AB
executed_operation_count (2.google.protobuf.Int64ValueB�A:R�AO
!googleads.googleapis.com/BatchJob*customers/{customer}/batchJobs/{batch_job}B�
%com.google.ads.googleads.v4.resourcesBBatchJobProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

