<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/user_interest.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Resources;

class UserInterest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v5/enums/advertising_channel_type.protogoogle.ads.googleads.v5.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	B�
!com.google.ads.googleads.v5.enumsBAdvertisingChannelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Pgoogle/ads/googleads/v5/enums/criterion_category_channel_availability_mode.protogoogle.ads.googleads.v5.enums"�
,CriterionCategoryChannelAvailabilityModeEnum"�
(CriterionCategoryChannelAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_CHANNELS!
CHANNEL_TYPE_AND_ALL_SUBTYPES$
 CHANNEL_TYPE_AND_SUBSET_SUBTYPESB�
!com.google.ads.googleads.v5.enumsB-CriterionCategoryChannelAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Ogoogle/ads/googleads/v5/enums/criterion_category_locale_availability_mode.protogoogle.ads.googleads.v5.enums"�
+CriterionCategoryLocaleAvailabilityModeEnum"�
\'CriterionCategoryLocaleAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_LOCALES
COUNTRY_AND_ALL_LANGUAGES
LANGUAGE_AND_ALL_COUNTRIES
COUNTRY_AND_LANGUAGEB�
!com.google.ads.googleads.v5.enumsB,CriterionCategoryLocaleAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
@google/ads/googleads/v5/enums/advertising_channel_sub_type.protogoogle.ads.googleads.v5.enums"�
AdvertisingChannelSubTypeEnum"�
AdvertisingChannelSubType
UNSPECIFIED 
UNKNOWN
SEARCH_MOBILE_APP
DISPLAY_MOBILE_APP
SEARCH_EXPRESS
DISPLAY_EXPRESS
SHOPPING_SMART_ADS
DISPLAY_GMAIL_AD
DISPLAY_SMART_CAMPAIGN
VIDEO_OUTSTREAM	
VIDEO_ACTION

VIDEO_NON_SKIPPABLE
APP_CAMPAIGN
APP_CAMPAIGN_FOR_ENGAGEMENT
LOCAL_CAMPAIGN#
SHOPPING_COMPARISON_LISTING_ADS
SMART_CAMPAIGN
VIDEO_SEQUENCEB�
!com.google.ads.googleads.v5.enumsBAdvertisingChannelSubTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
Dgoogle/ads/googleads/v5/common/criterion_category_availability.protogoogle.ads.googleads.v5.common<google/ads/googleads/v5/enums/advertising_channel_type.protoPgoogle/ads/googleads/v5/enums/criterion_category_channel_availability_mode.protoOgoogle/ads/googleads/v5/enums/criterion_category_locale_availability_mode.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
CriterionCategoryAvailabilityU
channel (2D.google.ads.googleads.v5.common.CriterionCategoryChannelAvailabilityS
locale (2C.google.ads.googleads.v5.common.CriterionCategoryLocaleAvailability"�
$CriterionCategoryChannelAvailability�
availability_mode (2t.google.ads.googleads.v5.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityModer
advertising_channel_type (2P.google.ads.googleads.v5.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType|
advertising_channel_sub_type (2V.google.ads.googleads.v5.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubTypeD
 include_default_channel_sub_type (2.google.protobuf.BoolValue"�
#CriterionCategoryLocaleAvailability�
availability_mode (2r.google.ads.googleads.v5.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode2
country_code (2.google.protobuf.StringValue3
language_code (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v5.commonB"CriterionCategoryAvailabilityProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v5/common;common�GAA�Google.Ads.GoogleAds.V5.Common�Google\\Ads\\GoogleAds\\V5\\Common�"Google::Ads::GoogleAds::V5::Commonbproto3
�
?google/ads/googleads/v5/enums/user_interest_taxonomy_type.protogoogle.ads.googleads.v5.enums"�
UserInterestTaxonomyTypeEnum"�
UserInterestTaxonomyType
UNSPECIFIED 
UNKNOWN
AFFINITY
	IN_MARKET
MOBILE_APP_INSTALL_USER
VERTICAL_GEO
NEW_SMART_PHONE_USERB�
!com.google.ads.googleads.v5.enumsBUserInterestTaxonomyTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�	
5google/ads/googleads/v5/resources/user_interest.proto!google.ads.googleads.v5.resources?google/ads/googleads/v5/enums/user_interest_taxonomy_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
UserInterestD
resource_name (	B-�A�A\'
%googleads.googleapis.com/UserInterestp
taxonomy_type (2T.google.ads.googleads.v5.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyTypeB�A:
user_interest_id (2.google.protobuf.Int64ValueB�A/
name (2.google.protobuf.StringValueB�Ai
user_interest_parent (2.google.protobuf.StringValueB-�A�A\'
%googleads.googleapis.com/UserInterest8
launched_to_all (2.google.protobuf.BoolValueB�AZ
availabilities (2=.google.ads.googleads.v5.common.CriterionCategoryAvailabilityB�A:^�A[
%googleads.googleapis.com/UserInterest2customers/{customer}/userInterests/{user_interest}B�
%com.google.ads.googleads.v5.resourcesBUserInterestProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

