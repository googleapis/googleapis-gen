<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/campaign_shared_set_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Errors;

class CampaignSharedSetError
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
>google/ads/googleads/v6/errors/campaign_shared_set_error.protogoogle.ads.googleads.v6.errors"r
CampaignSharedSetErrorEnum"T
CampaignSharedSetError
UNSPECIFIED 
UNKNOWN
SHARED_SET_ACCESS_DENIEDB�
"com.google.ads.googleads.v6.errorsBCampaignSharedSetErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

