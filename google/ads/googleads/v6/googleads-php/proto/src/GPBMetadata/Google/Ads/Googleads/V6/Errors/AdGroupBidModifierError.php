<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/ad_group_bid_modifier_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Errors;

class AdGroupBidModifierError
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
@google/ads/googleads/v6/errors/ad_group_bid_modifier_error.protogoogle.ads.googleads.v6.errors"�
AdGroupBidModifierErrorEnum"�
AdGroupBidModifierError
UNSPECIFIED 
UNKNOWN
CRITERION_ID_NOT_SUPPORTED=
9CANNOT_OVERRIDE_OPTED_OUT_CAMPAIGN_CRITERION_BID_MODIFIERB�
"com.google.ads.googleads.v6.errorsBAdGroupBidModifierErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

