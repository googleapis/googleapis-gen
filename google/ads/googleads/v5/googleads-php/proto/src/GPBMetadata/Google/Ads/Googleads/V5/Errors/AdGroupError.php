<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/ad_group_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class AdGroupError
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
�
3google/ads/googleads/v5/errors/ad_group_error.protogoogle.ads.googleads.v5.errors"�
AdGroupErrorEnum"�
AdGroupError
UNSPECIFIED 
UNKNOWN
DUPLICATE_ADGROUP_NAME
INVALID_ADGROUP_NAME%
!ADVERTISER_NOT_ON_CONTENT_NETWORK
BID_TOO_BIG*
&BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH
MISSING_ADGROUP_NAME 
ADGROUP_LABEL_DOES_NOT_EXIST	 
ADGROUP_LABEL_ALREADY_EXISTS
,
(INVALID_CONTENT_BID_CRITERION_TYPE_GROUP8
4AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE9
5ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRYB
>CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING7
3PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMERB�
"com.google.ads.googleads.v5.errorsBAdGroupErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

