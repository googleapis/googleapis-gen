<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/ad_network_type.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Enums;

class AdNetworkType
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
3google/ads/googleads/v3/enums/ad_network_type.protogoogle.ads.googleads.v3.enums"�
AdNetworkTypeEnum"�
AdNetworkType
UNSPECIFIED 
UNKNOWN

SEARCH
SEARCH_PARTNERS
CONTENT
YOUTUBE_SEARCH
YOUTUBE_WATCH	
MIXEDB�
!com.google.ads.googleads.v3.enumsBAdNetworkTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

