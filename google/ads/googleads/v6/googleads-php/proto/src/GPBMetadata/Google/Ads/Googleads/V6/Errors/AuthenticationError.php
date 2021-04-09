<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/authentication_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Errors;

class AuthenticationError
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
9google/ads/googleads/v6/errors/authentication_error.protogoogle.ads.googleads.v6.errors"�
AuthenticationErrorEnum"�
AuthenticationError
UNSPECIFIED 
UNKNOWN
AUTHENTICATION_ERROR
CLIENT_CUSTOMER_ID_INVALID
CUSTOMER_NOT_FOUND
GOOGLE_ACCOUNT_DELETED	!
GOOGLE_ACCOUNT_COOKIE_INVALID
(
$GOOGLE_ACCOUNT_AUTHENTICATION_FAILED-
)GOOGLE_ACCOUNT_USER_AND_ADS_USER_MISMATCH
LOGIN_COOKIE_REQUIRED
NOT_ADS_USER
OAUTH_TOKEN_INVALID
OAUTH_TOKEN_EXPIRED
OAUTH_TOKEN_DISABLED
OAUTH_TOKEN_REVOKED
OAUTH_TOKEN_HEADER_INVALID
LOGIN_COOKIE_INVALID
USER_ID_INVALID&
"TWO_STEP_VERIFICATION_NOT_ENROLLED$
 ADVANCED_PROTECTION_NOT_ENROLLEDB�
"com.google.ads.googleads.v6.errorsBAuthenticationErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/errors;errors�GAA�Google.Ads.GoogleAds.V6.Errors�Google\\Ads\\GoogleAds\\V6\\Errors�"Google::Ads::GoogleAds::V6::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

