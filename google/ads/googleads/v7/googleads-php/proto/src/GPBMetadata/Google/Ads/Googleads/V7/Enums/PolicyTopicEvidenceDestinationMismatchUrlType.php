<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/policy_topic_evidence_destination_mismatch_url_type.proto

namespace GPBMetadata\Google\Ads\Googleads\V7\Enums;

class PolicyTopicEvidenceDestinationMismatchUrlType
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
Wgoogle/ads/googleads/v7/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v7.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
!com.google.ads.googleads.v7.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v7/enums;enums�GAA�Google.Ads.GoogleAds.V7.Enums�Google\\Ads\\GoogleAds\\V7\\Enums�!Google::Ads::GoogleAds::V7::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

