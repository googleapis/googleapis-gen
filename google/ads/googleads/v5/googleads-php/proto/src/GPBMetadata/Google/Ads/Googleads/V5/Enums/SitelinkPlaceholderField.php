<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/sitelink_placeholder_field.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Enums;

class SitelinkPlaceholderField
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
�
>google/ads/googleads/v5/enums/sitelink_placeholder_field.protogoogle.ads.googleads.v5.enums"�
SitelinkPlaceholderFieldEnum"�
SitelinkPlaceholderField
UNSPECIFIED 
UNKNOWN
TEXT

LINE_1

LINE_2

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
FINAL_URL_SUFFIXB�
!com.google.ads.googleads.v5.enumsBSitelinkPlaceholderFieldProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

