<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/context_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class ContextError
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
2google/ads/googleads/v5/errors/context_error.protogoogle.ads.googleads.v5.errors"�
ContextErrorEnum"�
ContextError
UNSPECIFIED 
UNKNOWN\'
#OPERATION_NOT_PERMITTED_FOR_CONTEXT0
,OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCEB�
"com.google.ads.googleads.v5.errorsBContextErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

