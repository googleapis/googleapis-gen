<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/distinct_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Errors;

class DistinctError
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
3google/ads/googleads/v6/errors/distinct_error.protogoogle.ads.googleads.v6.errors"m
DistinctErrorEnum"X
DistinctError
UNSPECIFIED 
UNKNOWN
DUPLICATE_ELEMENT
DUPLICATE_TYPEB�
"com.google.ads.googleads.v6.errorsBDistinctErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

