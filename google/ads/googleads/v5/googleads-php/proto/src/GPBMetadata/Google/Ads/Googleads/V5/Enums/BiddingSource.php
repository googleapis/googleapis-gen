<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/bidding_source.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Enums;

class BiddingSource
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
2google/ads/googleads/v5/enums/bidding_source.protogoogle.ads.googleads.v5.enums"�
BiddingSourceEnum"r
BiddingSource
UNSPECIFIED 
UNKNOWN
CAMPAIGN_BIDDING_STRATEGY
AD_GROUP
AD_GROUP_CRITERIONB�
!com.google.ads.googleads.v5.enumsBBiddingSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

