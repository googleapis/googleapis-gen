<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/conversion_lag_bucket.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Enums;

class ConversionLagBucket
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
9google/ads/googleads/v5/enums/conversion_lag_bucket.protogoogle.ads.googleads.v5.enums"�
ConversionLagBucketEnum"�
ConversionLagBucket
UNSPECIFIED 
UNKNOWN
LESS_THAN_ONE_DAY
ONE_TO_TWO_DAYS
TWO_TO_THREE_DAYS
THREE_TO_FOUR_DAYS
FOUR_TO_FIVE_DAYS
FIVE_TO_SIX_DAYS
SIX_TO_SEVEN_DAYS
SEVEN_TO_EIGHT_DAYS	
EIGHT_TO_NINE_DAYS

NINE_TO_TEN_DAYS
TEN_TO_ELEVEN_DAYS
ELEVEN_TO_TWELVE_DAYS
TWELVE_TO_THIRTEEN_DAYS
THIRTEEN_TO_FOURTEEN_DAYS
FOURTEEN_TO_TWENTY_ONE_DAYS
TWENTY_ONE_TO_THIRTY_DAYS
THIRTY_TO_FORTY_FIVE_DAYS
FORTY_FIVE_TO_SIXTY_DAYS
SIXTY_TO_NINETY_DAYSB�
!com.google.ads.googleads.v5.enumsBConversionLagBucketProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

