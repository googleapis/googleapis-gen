<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/hotel_price_bucket.proto

namespace GPBMetadata\Google\Ads\Googleads\V7\Enums;

class HotelPriceBucket
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
6google/ads/googleads/v7/enums/hotel_price_bucket.protogoogle.ads.googleads.v7.enums"�
HotelPriceBucketEnum"|
HotelPriceBucket
UNSPECIFIED 
UNKNOWN
LOWEST_UNIQUE
LOWEST_TIED

NOT_LOWEST
ONLY_PARTNER_SHOWNB�
!com.google.ads.googleads.v7.enumsBHotelPriceBucketProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

