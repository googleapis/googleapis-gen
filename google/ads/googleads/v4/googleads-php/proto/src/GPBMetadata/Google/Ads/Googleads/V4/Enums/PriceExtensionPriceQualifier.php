<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/price_extension_price_qualifier.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Enums;

class PriceExtensionPriceQualifier
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
Cgoogle/ads/googleads/v4/enums/price_extension_price_qualifier.protogoogle.ads.googleads.v4.enums"�
 PriceExtensionPriceQualifierEnum"^
PriceExtensionPriceQualifier
UNSPECIFIED 
UNKNOWN
FROM	
UP_TO
AVERAGEB�
!com.google.ads.googleads.v4.enumsB!PriceExtensionPriceQualifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

