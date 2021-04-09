<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/url_field_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Errors;

class UrlFieldError
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
�
4google/ads/googleads/v4/errors/url_field_error.protogoogle.ads.googleads.v4.errors"�
UrlFieldErrorEnum"�
UrlFieldError
UNSPECIFIED 
UNKNOWN!
INVALID_TRACKING_URL_TEMPLATE(
$INVALID_TAG_IN_TRACKING_URL_TEMPLATE%
!MISSING_TRACKING_URL_TEMPLATE_TAG-
)MISSING_PROTOCOL_IN_TRACKING_URL_TEMPLATE-
)INVALID_PROTOCOL_IN_TRACKING_URL_TEMPLATE#
MALFORMED_TRACKING_URL_TEMPLATE)
%MISSING_HOST_IN_TRACKING_URL_TEMPLATE(
$INVALID_TLD_IN_TRACKING_URL_TEMPLATE	.
*REDUNDANT_NESTED_TRACKING_URL_TEMPLATE_TAG

INVALID_FINAL_URL
INVALID_TAG_IN_FINAL_URL"
REDUNDANT_NESTED_FINAL_URL_TAG!
MISSING_PROTOCOL_IN_FINAL_URL!
INVALID_PROTOCOL_IN_FINAL_URL
MALFORMED_FINAL_URL
MISSING_HOST_IN_FINAL_URL
INVALID_TLD_IN_FINAL_URL
INVALID_FINAL_MOBILE_URL#
INVALID_TAG_IN_FINAL_MOBILE_URL)
%REDUNDANT_NESTED_FINAL_MOBILE_URL_TAG(
$MISSING_PROTOCOL_IN_FINAL_MOBILE_URL(
$INVALID_PROTOCOL_IN_FINAL_MOBILE_URL
MALFORMED_FINAL_MOBILE_URL$
 MISSING_HOST_IN_FINAL_MOBILE_URL#
INVALID_TLD_IN_FINAL_MOBILE_URL
INVALID_FINAL_APP_URL 
INVALID_TAG_IN_FINAL_APP_URL&
"REDUNDANT_NESTED_FINAL_APP_URL_TAG 
MULTIPLE_APP_URLS_FOR_OSTYPE
INVALID_OSTYPE 
INVALID_PROTOCOL_FOR_APP_URL "
INVALID_PACKAGE_ID_FOR_APP_URL!-
)URL_CUSTOM_PARAMETERS_COUNT_EXCEEDS_LIMIT"2
.INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_KEY\'4
0INVALID_CHARACTERS_IN_URL_CUSTOM_PARAMETER_VALUE(-
)INVALID_TAG_IN_URL_CUSTOM_PARAMETER_VALUE)-
)REDUNDANT_NESTED_URL_CUSTOM_PARAMETER_TAG*
MISSING_PROTOCOL+
INVALID_PROTOCOL4
INVALID_URL,
DESTINATION_URL_DEPRECATED-
INVALID_TAG_IN_URL.
MISSING_URL_TAG/
DUPLICATE_URL_ID0
INVALID_URL_ID1
FINAL_URL_SUFFIX_MALFORMED2#
INVALID_TAG_IN_FINAL_URL_SUFFIX3
INVALID_TOP_LEVEL_DOMAIN5
MALFORMED_TOP_LEVEL_DOMAIN6
MALFORMED_URL7
MISSING_HOST8
NULL_CUSTOM_PARAMETER_VALUE9B�
"com.google.ads.googleads.v4.errorsBUrlFieldErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/errors;errors�GAA�Google.Ads.GoogleAds.V4.Errors�Google\\Ads\\GoogleAds\\V4\\Errors�"Google::Ads::GoogleAds::V4::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

