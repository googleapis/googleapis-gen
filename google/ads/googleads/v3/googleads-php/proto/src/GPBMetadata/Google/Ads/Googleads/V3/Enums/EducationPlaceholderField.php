<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/education_placeholder_field.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Enums;

class EducationPlaceholderField
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
?google/ads/googleads/v3/enums/education_placeholder_field.protogoogle.ads.googleads.v3.enums"�
EducationPlaceholderFieldEnum"�
EducationPlaceholderField
UNSPECIFIED 
UNKNOWN

PROGRAM_ID
LOCATION_ID
PROGRAM_NAME
AREA_OF_STUDY
PROGRAM_DESCRIPTION
SCHOOL_NAME
ADDRESS
THUMBNAIL_IMAGE_URL	#
ALTERNATIVE_THUMBNAIL_IMAGE_URL


FINAL_URLS
FINAL_MOBILE_URLS
TRACKING_URL
CONTEXTUAL_KEYWORDS
ANDROID_APP_LINK
SIMILAR_PROGRAM_IDS
IOS_APP_LINK
IOS_APP_STORE_IDB�
!com.google.ads.googleads.v3.enumsBEducationPlaceholderFieldProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

