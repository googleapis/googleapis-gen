<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/conversion_action_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Errors;

class ConversionActionError
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
�
<google/ads/googleads/v3/errors/conversion_action_error.protogoogle.ads.googleads.v3.errors"�
ConversionActionErrorEnum"�
ConversionActionError
UNSPECIFIED 
UNKNOWN
DUPLICATE_NAME
DUPLICATE_APP_ID7
3TWO_CONVERSION_ACTIONS_BIDDING_ON_SAME_APP_DOWNLOAD1
-BIDDING_ON_SAME_APP_DOWNLOAD_AS_GLOBAL_ACTION)
%DATA_DRIVEN_MODEL_WAS_NEVER_GENERATED
DATA_DRIVEN_MODEL_EXPIRED
DATA_DRIVEN_MODEL_STALE
DATA_DRIVEN_MODEL_UNKNOWN	B�
"com.google.ads.googleads.v3.errorsBConversionActionErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v3/errors;errors�GAA�Google.Ads.GoogleAds.V3.Errors�Google\\Ads\\GoogleAds\\V3\\Errors�"Google::Ads::GoogleAds::V3::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

