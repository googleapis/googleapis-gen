<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/quality_score_bucket.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Enums;

class QualityScoreBucket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v3/enums/quality_score_bucket.protogoogle.ads.googleads.v3.enums"
QualityScoreBucketEnum"e
QualityScoreBucket
UNSPECIFIED 
UNKNOWN
BELOW_AVERAGE
AVERAGE
ABOVE_AVERAGEB�
!com.google.ads.googleads.v3.enumsBQualityScoreBucketProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

