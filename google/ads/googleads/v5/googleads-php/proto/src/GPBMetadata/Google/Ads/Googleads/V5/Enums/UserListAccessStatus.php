<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/user_list_access_status.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Enums;

class UserListAccessStatus
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
;google/ads/googleads/v5/enums/user_list_access_status.protogoogle.ads.googleads.v5.enums"k
UserListAccessStatusEnum"O
UserListAccessStatus
UNSPECIFIED 
UNKNOWN
ENABLED
DISABLEDB�
!com.google.ads.googleads.v5.enumsBUserListAccessStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

