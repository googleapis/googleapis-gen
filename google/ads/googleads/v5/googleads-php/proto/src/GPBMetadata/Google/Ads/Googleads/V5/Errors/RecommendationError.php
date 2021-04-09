<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/recommendation_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class RecommendationError
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
�
9google/ads/googleads/v5/errors/recommendation_error.protogoogle.ads.googleads.v5.errors"�
RecommendationErrorEnum"�
RecommendationError
UNSPECIFIED 
UNKNOWN
BUDGET_AMOUNT_TOO_SMALL
BUDGET_AMOUNT_TOO_LARGE
INVALID_BUDGET_AMOUNT
POLICY_ERROR
INVALID_BID_AMOUNT
ADGROUP_KEYWORD_LIMIT"
RECOMMENDATION_ALREADY_APPLIED
RECOMMENDATION_INVALIDATED	
TOO_MANY_OPERATIONS

NO_OPERATIONS!
DIFFERENT_TYPES_NOT_SUPPORTED
DUPLICATE_RESOURCE_NAME$
 RECOMMENDATION_ALREADY_DISMISSED
INVALID_APPLY_REQUESTB�
"com.google.ads.googleads.v5.errorsBRecommendationErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

