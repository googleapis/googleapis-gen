<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/policy_finding_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Errors;

class PolicyFindingError
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
9google/ads/googleads/v5/errors/policy_finding_error.protogoogle.ads.googleads.v5.errors"|
PolicyFindingErrorEnum"b
PolicyFindingError
UNSPECIFIED 
UNKNOWN
POLICY_FINDING
POLICY_TOPIC_NOT_FOUNDB�
"com.google.ads.googleads.v5.errorsBPolicyFindingErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/errors;errors�GAA�Google.Ads.GoogleAds.V5.Errors�Google\\Ads\\GoogleAds\\V5\\Errors�"Google::Ads::GoogleAds::V5::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

