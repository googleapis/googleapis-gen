<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/customer_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class CustomerError
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
3google/ads/googleads/v5/errors/customer_error.protogoogle.ads.googleads.v5.errors"x
CustomerErrorEnum"c
CustomerError
UNSPECIFIED 
UNKNOWN
STATUS_CHANGE_DISALLOWED
ACCOUNT_NOT_SET_UPB�
"com.google.ads.googleads.v5.errorsBCustomerErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

