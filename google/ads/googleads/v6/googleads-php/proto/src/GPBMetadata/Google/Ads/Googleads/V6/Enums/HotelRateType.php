<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/hotel_rate_type.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Enums;

class HotelRateType
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
3google/ads/googleads/v6/enums/hotel_rate_type.protogoogle.ads.googleads.v6.enums"�
HotelRateTypeEnum"u
HotelRateType
UNSPECIFIED 
UNKNOWN
UNAVAILABLE
PUBLIC_RATE
QUALIFIED_RATE
PRIVATE_RATEB�
!com.google.ads.googleads.v6.enumsBHotelRateTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

