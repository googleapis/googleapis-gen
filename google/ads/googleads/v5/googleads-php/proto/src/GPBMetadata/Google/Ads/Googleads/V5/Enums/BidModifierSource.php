<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/bid_modifier_source.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Enums;

class BidModifierSource
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
7google/ads/googleads/v5/enums/bid_modifier_source.protogoogle.ads.googleads.v5.enums"f
BidModifierSourceEnum"M
BidModifierSource
UNSPECIFIED 
UNKNOWN
CAMPAIGN
AD_GROUPB�
!com.google.ads.googleads.v5.enumsBBidModifierSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

