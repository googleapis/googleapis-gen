<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/job_placeholder_field.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Enums;

class JobPlaceholderField
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
�
9google/ads/googleads/v6/enums/job_placeholder_field.protogoogle.ads.googleads.v6.enums"�
JobPlaceholderFieldEnum"�
JobPlaceholderField
UNSPECIFIED 
UNKNOWN

JOB_ID
LOCATION_ID	
TITLE
SUBTITLE
DESCRIPTION
	IMAGE_URL
CATEGORY
CONTEXTUAL_KEYWORDS	
ADDRESS


SALARY

FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
ANDROID_APP_LINK
SIMILAR_JOB_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
!com.google.ads.googleads.v6.enumsBJobsPlaceholderFieldProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

