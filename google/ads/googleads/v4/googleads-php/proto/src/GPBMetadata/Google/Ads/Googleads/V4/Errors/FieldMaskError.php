<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/field_mask_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Errors;

class FieldMaskError
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
5google/ads/googleads/v4/errors/field_mask_error.protogoogle.ads.googleads.v4.errors"�
FieldMaskErrorEnum"�
FieldMaskError
UNSPECIFIED 
UNKNOWN
FIELD_MASK_MISSING
FIELD_MASK_NOT_ALLOWED
FIELD_NOT_FOUND
FIELD_HAS_SUBFIELDSB�
"com.google.ads.googleads.v4.errorsBFieldMaskErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/errors;errors�GAA�Google.Ads.GoogleAds.V4.Errors�Google\\Ads\\GoogleAds\\V4\\Errors�"Google::Ads::GoogleAds::V4::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

