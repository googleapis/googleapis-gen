<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/keyword_plan_ad_group_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Errors;

class KeywordPlanAdGroupError
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
@google/ads/googleads/v4/errors/keyword_plan_ad_group_error.protogoogle.ads.googleads.v4.errors"|
KeywordPlanAdGroupErrorEnum"]
KeywordPlanAdGroupError
UNSPECIFIED 
UNKNOWN
INVALID_NAME
DUPLICATE_NAMEB�
"com.google.ads.googleads.v4.errorsBKeywordPlanAdGroupErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/errors;errors�GAA�Google.Ads.GoogleAds.V4.Errors�Google\\Ads\\GoogleAds\\V4\\Errors�"Google::Ads::GoogleAds::V4::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

