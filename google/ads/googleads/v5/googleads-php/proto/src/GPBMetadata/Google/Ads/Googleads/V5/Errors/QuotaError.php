<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/quota_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class QuotaError
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
0google/ads/googleads/v5/errors/quota_error.protogoogle.ads.googleads.v5.errors"�
QuotaErrorEnum"}

QuotaError
UNSPECIFIED 
UNKNOWN
RESOURCE_EXHAUSTED
ACCESS_PROHIBITED"
RESOURCE_TEMPORARILY_EXHAUSTEDB�
"com.google.ads.googleads.v5.errorsBQuotaErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

