<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/feed_origin.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Enums;

class FeedOrigin
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
/google/ads/googleads/v6/enums/feed_origin.protogoogle.ads.googleads.v6.enums"R
FeedOriginEnum"@

FeedOrigin
UNSPECIFIED 
UNKNOWN
USER

GOOGLEB�
!com.google.ads.googleads.v6.enumsBFeedOriginProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

