<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/conversion_action.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class ConversionAction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v4/enums/tracking_code_page_format.protogoogle.ads.googleads.v4.enums"g
TrackingCodePageFormatEnum"I
TrackingCodePageFormat
UNSPECIFIED 
UNKNOWN
HTML
AMPB�
!com.google.ads.googleads.v4.enumsBTrackingCodePageFormatProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
<google/ads/googleads/v4/enums/conversion_action_status.protogoogle.ads.googleads.v4.enums"z
ConversionActionStatusEnum"\\
ConversionActionStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVED

HIDDENB�
!com.google.ads.googleads.v4.enumsBConversionActionStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
>google/ads/googleads/v4/enums/conversion_action_category.protogoogle.ads.googleads.v4.enums"�
ConversionActionCategoryEnum"�
ConversionActionCategory
UNSPECIFIED 
UNKNOWN
DEFAULT
	PAGE_VIEW
PURCHASE

SIGNUP
LEAD
DOWNLOAD
ADD_TO_CART
BEGIN_CHECKOUT	
SUBSCRIBE_PAID

PHONE_CALL_LEAD
IMPORTED_LEAD
SUBMIT_LEAD_FORM
BOOK_APPOINTMENT
REQUEST_QUOTE
GET_DIRECTIONS
OUTBOUND_CLICK
CONTACT

ENGAGEMENT
STORE_VISIT

STORE_SALEB�
!com.google.ads.googleads.v4.enumsBConversionActionCategoryProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/enums/tracking_code_type.protogoogle.ads.googleads.v4.enums"�
TrackingCodeTypeEnum"w
TrackingCodeType
UNSPECIFIED 
UNKNOWN
WEBPAGE
WEBPAGE_ONCLICK
CLICK_TO_CALL
WEBSITE_CALLB�
!com.google.ads.googleads.v4.enumsBTrackingCodeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
0google/ads/googleads/v4/common/tag_snippet.protogoogle.ads.googleads.v4.common6google/ads/googleads/v4/enums/tracking_code_type.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�

TagSnippetR
type (2D.google.ads.googleads.v4.enums.TrackingCodeTypeEnum.TrackingCodeTypee
page_format (2P.google.ads.googleads.v4.enums.TrackingCodePageFormatEnum.TrackingCodePageFormat5
global_site_tag (2.google.protobuf.StringValue3
event_snippet (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v4.commonBTagSnippetProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3
�
Cgoogle/ads/googleads/v4/enums/conversion_action_counting_type.protogoogle.ads.googleads.v4.enums"�
 ConversionActionCountingTypeEnum"c
ConversionActionCountingType
UNSPECIFIED 
UNKNOWN
ONE_PER_CLICK
MANY_PER_CLICKB�
!com.google.ads.googleads.v4.enumsB!ConversionActionCountingTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
5google/ads/googleads/v4/enums/attribution_model.protogoogle.ads.googleads.v4.enums"�
AttributionModelEnum"�
AttributionModel
UNSPECIFIED 
UNKNOWN
EXTERNALd
GOOGLE_ADS_LAST_CLICKe)
%GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICKf$
 GOOGLE_SEARCH_ATTRIBUTION_LINEARg(
$GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAYh,
(GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASEDi)
%GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVENjB�
!com.google.ads.googleads.v4.enumsBAttributionModelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
:google/ads/googleads/v4/enums/conversion_action_type.protogoogle.ads.googleads.v4.enums"�
ConversionActionTypeEnum"�
ConversionActionType
UNSPECIFIED 
UNKNOWN
AD_CALL
CLICK_TO_CALL
GOOGLE_PLAY_DOWNLOAD
GOOGLE_PLAY_IN_APP_PURCHASE
UPLOAD_CALLS
UPLOAD_CLICKS
WEBPAGE
WEBSITE_CALL	
STORE_SALES_DIRECT_UPLOAD

STORE_SALES
FIREBASE_ANDROID_FIRST_OPEN$
 FIREBASE_ANDROID_IN_APP_PURCHASE
FIREBASE_ANDROID_CUSTOM
FIREBASE_IOS_FIRST_OPEN 
FIREBASE_IOS_IN_APP_PURCHASE
FIREBASE_IOS_CUSTOM0
,THIRD_PARTY_APP_ANALYTICS_ANDROID_FIRST_OPEN5
1THIRD_PARTY_APP_ANALYTICS_ANDROID_IN_APP_PURCHASE,
(THIRD_PARTY_APP_ANALYTICS_ANDROID_CUSTOM,
(THIRD_PARTY_APP_ANALYTICS_IOS_FIRST_OPEN1
-THIRD_PARTY_APP_ANALYTICS_IOS_IN_APP_PURCHASE(
$THIRD_PARTY_APP_ANALYTICS_IOS_CUSTOMB�
!com.google.ads.googleads.v4.enumsBConversionActionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
<google/ads/googleads/v4/enums/data_driven_model_status.protogoogle.ads.googleads.v4.enums"�
DataDrivenModelStatusEnum"q
DataDrivenModelStatus
UNSPECIFIED 
UNKNOWN
	AVAILABLE	
STALE
EXPIRED
NEVER_GENERATEDB�
!com.google.ads.googleads.v4.enumsBDataDrivenModelStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
5google/ads/googleads/v4/enums/mobile_app_vendor.protogoogle.ads.googleads.v4.enums"q
MobileAppVendorEnum"Z
MobileAppVendor
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_APP_STOREB�
!com.google.ads.googleads.v4.enumsBMobileAppVendorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
9google/ads/googleads/v4/resources/conversion_action.proto!google.ads.googleads.v4.resources5google/ads/googleads/v4/enums/attribution_model.proto>google/ads/googleads/v4/enums/conversion_action_category.protoCgoogle/ads/googleads/v4/enums/conversion_action_counting_type.proto<google/ads/googleads/v4/enums/conversion_action_status.proto:google/ads/googleads/v4/enums/conversion_action_type.proto<google/ads/googleads/v4/enums/data_driven_model_status.proto5google/ads/googleads/v4/enums/mobile_app_vendor.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
ConversionActionH
resource_name (	B1�A�A+
)googleads.googleapis.com/ConversionAction,
id (2.google.protobuf.Int64ValueB�A*
name (2.google.protobuf.StringValue`
status (2P.google.ads.googleads.v4.enums.ConversionActionStatusEnum.ConversionActionStatus_
type (2L.google.ads.googleads.v4.enums.ConversionActionTypeEnum.ConversionActionTypeB�Af
category (2T.google.ads.googleads.v4.enums.ConversionActionCategoryEnum.ConversionActionCategory_
owner_customer (2.google.protobuf.StringValueB)�A�A#
!googleads.googleapis.com/CustomerA
include_in_conversions_metric (2.google.protobuf.BoolValueG
"click_through_lookback_window_days	 (2.google.protobuf.Int64ValueF
!view_through_lookback_window_days
 (2.google.protobuf.Int64ValueY
value_settings (2A.google.ads.googleads.v4.resources.ConversionAction.ValueSettingss
counting_type (2\\.google.ads.googleads.v4.enums.ConversionActionCountingTypeEnum.ConversionActionCountingTypep
attribution_model_settings (2L.google.ads.googleads.v4.resources.ConversionAction.AttributionModelSettingsE
tag_snippets (2*.google.ads.googleads.v4.common.TagSnippetB�A@
phone_call_duration_seconds (2.google.protobuf.Int64Value,
app_id (2.google.protobuf.StringValueb
mobile_app_vendor (2B.google.ads.googleads.v4.enums.MobileAppVendorEnum.MobileAppVendorB�Ad
firebase_settings (2D.google.ads.googleads.v4.resources.ConversionAction.FirebaseSettingsB�A�
"third_party_app_analytics_settings (2R.google.ads.googleads.v4.resources.ConversionAction.ThirdPartyAppAnalyticsSettingsB�A�
AttributionModelSettings_
attribution_model (2D.google.ads.googleads.v4.enums.AttributionModelEnum.AttributionModelu
data_driven_model_status (2N.google.ads.googleads.v4.enums.DataDrivenModelStatusEnum.DataDrivenModelStatusB�A�
ValueSettings3
default_value (2.google.protobuf.DoubleValue;
default_currency_code (2.google.protobuf.StringValue<
always_use_default_value (2.google.protobuf.BoolValueW
ThirdPartyAppAnalyticsSettings5

event_name (2.google.protobuf.StringValueB�A�
FirebaseSettings5

event_name (2.google.protobuf.StringValueB�A5

project_id (2.google.protobuf.StringValueB�A:j�Ag
)googleads.googleapis.com/ConversionAction:customers/{customer}/conversionActions/{conversion_action}B�
%com.google.ads.googleads.v4.resourcesBConversionActionProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

