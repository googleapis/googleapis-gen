<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/feed_attribute_type.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Enums;

class FeedAttributeType
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
7google/ads/googleads/v3/enums/feed_attribute_type.protogoogle.ads.googleads.v3.enums"�
FeedAttributeTypeEnum"�
FeedAttributeType
UNSPECIFIED 
UNKNOWN	
INT64

DOUBLE

STRING
BOOLEAN
URL
	DATE_TIME

INT64_LIST
DOUBLE_LIST	
STRING_LIST

BOOLEAN_LIST
URL_LIST
DATE_TIME_LIST	
PRICEB�
!com.google.ads.googleads.v3.enumsBFeedAttributeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

