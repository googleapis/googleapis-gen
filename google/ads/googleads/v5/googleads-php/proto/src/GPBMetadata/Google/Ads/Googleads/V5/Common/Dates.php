<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/dates.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Common;

class Dates
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
*google/ads/googleads/v5/common/dates.protogoogle.ads.googleads.v5.commongoogle/api/annotations.proto"m
	DateRange0

start_date (2.google.protobuf.StringValue.
end_date (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v5.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/common;common�GAA�Google.Ads.GoogleAds.V5.Common�Google\\Ads\\GoogleAds\\V5\\Common�"Google::Ads::GoogleAds::V5::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

