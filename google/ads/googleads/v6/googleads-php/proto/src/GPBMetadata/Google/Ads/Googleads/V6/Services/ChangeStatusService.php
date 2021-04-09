<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/change_status_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class ChangeStatusService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
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
�
+google/ads/googleads/v6/enums/ad_type.protogoogle.ads.googleads.v6.enums"�

AdTypeEnum"�
AdType
UNSPECIFIED 
UNKNOWN
TEXT_AD
EXPANDED_TEXT_AD
CALL_ONLY_AD
EXPANDED_DYNAMIC_SEARCH_AD
HOTEL_AD
SHOPPING_SMART_AD	
SHOPPING_PRODUCT_AD

VIDEO_AD
GMAIL_AD
IMAGE_AD
RESPONSIVE_SEARCH_AD 
LEGACY_RESPONSIVE_DISPLAY_AD

APP_AD
LEGACY_APP_INSTALL_AD
RESPONSIVE_DISPLAY_AD
LOCAL_AD
HTML5_UPLOAD_AD
DYNAMIC_HTML5_AD
APP_ENGAGEMENT_AD"
SHOPPING_COMPARISON_LISTING_AD
VIDEO_BUMPER_AD$
 VIDEO_NON_SKIPPABLE_IN_STREAM_AD
VIDEO_OUTSTREAM_AD
VIDEO_TRUEVIEW_DISCOVERY_AD
VIDEO_TRUEVIEW_IN_STREAM_AD
VIDEO_RESPONSIVE_ADB�
!com.google.ads.googleads.v6.enumsBAdTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
;google/ads/googleads/v6/enums/change_status_operation.protogoogle.ads.googleads.v6.enums"w
ChangeStatusOperationEnum"Z
ChangeStatusOperation
UNSPECIFIED 
UNKNOWN	
ADDED
CHANGED
REMOVEDB�
!com.google.ads.googleads.v6.enumsBChangeStatusOperationProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
?google/ads/googleads/v6/enums/change_status_resource_type.protogoogle.ads.googleads.v6.enums"�
ChangeStatusResourceTypeEnum"�
ChangeStatusResourceType
UNSPECIFIED 
UNKNOWN
AD_GROUP
AD_GROUP_AD
AD_GROUP_CRITERION
CAMPAIGN
CAMPAIGN_CRITERION
FEED	
	FEED_ITEM

AD_GROUP_FEED
CAMPAIGN_FEED
AD_GROUP_BID_MODIFIERB�
!com.google.ads.googleads.v6.enumsBChangeStatusResourceTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
2google/ads/googleads/v6/enums/criterion_type.protogoogle.ads.googleads.v6.enums"�
CriterionTypeEnum"�
CriterionType
UNSPECIFIED 
UNKNOWN
KEYWORD
	PLACEMENT
MOBILE_APP_CATEGORY
MOBILE_APPLICATION

DEVICE
LOCATION
LISTING_GROUP
AD_SCHEDULE	
	AGE_RANGE


GENDER
INCOME_RANGE
PARENTAL_STATUS
YOUTUBE_VIDEO
YOUTUBE_CHANNEL
	USER_LIST
	PROXIMITY	
TOPIC
LISTING_SCOPE
LANGUAGE
IP_BLOCK
CONTENT_LABEL
CARRIER
USER_INTEREST
WEBPAGE
OPERATING_SYSTEM_VERSION
APP_PAYMENT_MODEL
MOBILE_DEVICE
CUSTOM_AFFINITY
CUSTOM_INTENT
LOCATION_GROUP
CUSTOM_AUDIENCE 
COMBINED_AUDIENCE!B�
!com.google.ads.googleads.v6.enumsBCriterionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/feed_origin.protogoogle.ads.googleads.v6.enums"R
FeedOriginEnum"@

FeedOrigin
UNSPECIFIED 
UNKNOWN
USER

GOOGLEB�
!com.google.ads.googleads.v6.enumsBFeedOriginProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
5google/ads/googleads/v6/resources/change_status.proto!google.ads.googleads.v6.resources@google/ads/googleads/v6/enums/advertising_channel_sub_type.proto<google/ads/googleads/v6/enums/advertising_channel_type.proto;google/ads/googleads/v6/enums/change_status_operation.proto?google/ads/googleads/v6/enums/change_status_resource_type.proto2google/ads/googleads/v6/enums/criterion_type.proto/google/ads/googleads/v6/enums/feed_origin.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�

ChangeStatusD
resource_name (	B-�A�A\'
%googleads.googleapis.com/ChangeStatus\'
last_change_date_time (	B�AH �p
resource_type (2T.google.ads.googleads.v6.enums.ChangeStatusResourceTypeEnum.ChangeStatusResourceTypeB�A@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�?
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH�l
resource_status (2N.google.ads.googleads.v6.enums.ChangeStatusOperationEnum.ChangeStatusOperationB�AD
ad_group_ad (	B*�A�A$
"googleads.googleapis.com/AdGroupAdH�R
ad_group_criterion (	B1�A�A+
)googleads.googleapis.com/AdGroupCriterionH�S
campaign_criterion (	B2�A�A,
*googleads.googleapis.com/CampaignCriterionH�8
feed (	B%�A�A
googleads.googleapis.com/FeedH�A
	feed_item (	B)�A�A#
!googleads.googleapis.com/FeedItemH�H
ad_group_feed (	B,�A�A&
$googleads.googleapis.com/AdGroupFeedH�I
campaign_feed (	B-�A�A\'
%googleads.googleapis.com/CampaignFeedH	�W
ad_group_bid_modifier  (	B3�A�A-
+googleads.googleapis.com/AdGroupBidModifierH
�:c�A`
%googleads.googleapis.com/ChangeStatus7customers/{customer_id}/changeStatus/{change_status_id}B
_last_change_date_timeB
	_campaignB
	_ad_groupB
_ad_group_adB
_ad_group_criterionB
_campaign_criterionB
_feedB

_feed_itemB
_ad_group_feedB
_campaign_feedB
_ad_group_bid_modifierB�
%com.google.ads.googleads.v6.resourcesBChangeStatusProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
<google/ads/googleads/v6/services/change_status_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"^
GetChangeStatusRequestD
resource_name (	B-�A�A\'
%googleads.googleapis.com/ChangeStatus2�
ChangeStatusService�
GetChangeStatus8.google.ads.googleads.v6.services.GetChangeStatusRequest/.google.ads.googleads.v6.resources.ChangeStatus"F���0./v6/{resource_name=customers/*/changeStatus/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBChangeStatusServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

