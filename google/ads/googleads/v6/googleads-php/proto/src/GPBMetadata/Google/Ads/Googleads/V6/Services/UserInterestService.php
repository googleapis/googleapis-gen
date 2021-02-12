<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/user_interest_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class UserInterestService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v6/enums/advertising_channel_type.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBAdvertisingChannelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Pgoogle/ads/googleads/v6/enums/criterion_category_channel_availability_mode.protogoogle.ads.googleads.v6.enums"�
,CriterionCategoryChannelAvailabilityModeEnum"�
(CriterionCategoryChannelAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_CHANNELS!
CHANNEL_TYPE_AND_ALL_SUBTYPES$
 CHANNEL_TYPE_AND_SUBSET_SUBTYPESB�
!com.google.ads.googleads.v6.enumsB-CriterionCategoryChannelAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
@google/ads/googleads/v6/enums/advertising_channel_sub_type.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBAdvertisingChannelSubTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Ogoogle/ads/googleads/v6/enums/criterion_category_locale_availability_mode.protogoogle.ads.googleads.v6.enums"�
+CriterionCategoryLocaleAvailabilityModeEnum"�
\'CriterionCategoryLocaleAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_LOCALES
COUNTRY_AND_ALL_LANGUAGES
LANGUAGE_AND_ALL_COUNTRIES
COUNTRY_AND_LANGUAGEB�
!com.google.ads.googleads.v6.enumsB,CriterionCategoryLocaleAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Dgoogle/ads/googleads/v6/common/criterion_category_availability.protogoogle.ads.googleads.v6.common<google/ads/googleads/v6/enums/advertising_channel_type.protoPgoogle/ads/googleads/v6/enums/criterion_category_channel_availability_mode.protoOgoogle/ads/googleads/v6/enums/criterion_category_locale_availability_mode.protogoogle/api/annotations.proto"�
CriterionCategoryAvailabilityU
channel (2D.google.ads.googleads.v6.common.CriterionCategoryChannelAvailabilityS
locale (2C.google.ads.googleads.v6.common.CriterionCategoryLocaleAvailability"�
$CriterionCategoryChannelAvailability�
availability_mode (2t.google.ads.googleads.v6.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityModer
advertising_channel_type (2P.google.ads.googleads.v6.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType|
advertising_channel_sub_type (2V.google.ads.googleads.v6.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType-
 include_default_channel_sub_type (H �B#
!_include_default_channel_sub_type"�
#CriterionCategoryLocaleAvailability�
availability_mode (2r.google.ads.googleads.v6.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode
country_code (	H �
language_code (	H�B
_country_codeB
_language_codeB�
"com.google.ads.googleads.v6.commonB"CriterionCategoryAvailabilityProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
?google/ads/googleads/v6/enums/user_interest_taxonomy_type.protogoogle.ads.googleads.v6.enums"�
UserInterestTaxonomyTypeEnum"�
UserInterestTaxonomyType
UNSPECIFIED 
UNKNOWN
AFFINITY
	IN_MARKET
MOBILE_APP_INSTALL_USER
VERTICAL_GEO
NEW_SMART_PHONE_USERB�
!com.google.ads.googleads.v6.enumsBUserInterestTaxonomyTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�	
5google/ads/googleads/v6/resources/user_interest.proto!google.ads.googleads.v6.resources?google/ads/googleads/v6/enums/user_interest_taxonomy_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
UserInterestD
resource_name (	B-�A�A\'
%googleads.googleapis.com/UserInterestp
taxonomy_type (2T.google.ads.googleads.v6.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyTypeB�A"
user_interest_id (B�AH �
name	 (	B�AH�P
user_interest_parent
 (	B-�A�A\'
%googleads.googleapis.com/UserInterestH�!
launched_to_all (B�AH�Z
availabilities (2=.google.ads.googleads.v6.common.CriterionCategoryAvailabilityB�A:d�Aa
%googleads.googleapis.com/UserInterest8customers/{customer_id}/userInterests/{user_interest_id}B
_user_interest_idB
_nameB
_user_interest_parentB
_launched_to_allB�
%com.google.ads.googleads.v6.resourcesBUserInterestProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
<google/ads/googleads/v6/services/user_interest_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"^
GetUserInterestRequestD
resource_name (	B-�A�A\'
%googleads.googleapis.com/UserInterest2�
UserInterestService�
GetUserInterest8.google.ads.googleads.v6.services.GetUserInterestRequest/.google.ads.googleads.v6.resources.UserInterest"G���1//v6/{resource_name=customers/*/userInterests/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBUserInterestServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

