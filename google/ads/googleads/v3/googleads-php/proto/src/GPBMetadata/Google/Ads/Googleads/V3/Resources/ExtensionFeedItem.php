<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/extension_feed_item.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Resources;

class ExtensionFeedItem
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
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v3/common/custom_parameter.protogoogle.ads.googleads.v3.commongoogle/api/annotations.proto"i
CustomParameter)
key (2.google.protobuf.StringValue+
value (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v3.commonBCustomParameterProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v3/common;common�GAA�Google.Ads.GoogleAds.V3.Common�Google\\Ads\\GoogleAds\\V3\\Common�"Google::Ads::GoogleAds::V3::Commonbproto3
�
Cgoogle/ads/googleads/v3/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v3.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
!com.google.ads.googleads.v3.enumsB!CallConversionReportingStateProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
:google/ads/googleads/v3/enums/proximity_radius_units.protogoogle.ads.googleads.v3.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
!com.google.ads.googleads.v3.enumsBProximityRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
2google/ads/googleads/v3/enums/age_range_type.protogoogle.ads.googleads.v3.enums"�
AgeRangeTypeEnum"�
AgeRangeType
UNSPECIFIED 
UNKNOWN
AGE_RANGE_18_24��
AGE_RANGE_25_34��
AGE_RANGE_35_44��
AGE_RANGE_45_54��
AGE_RANGE_55_64��
AGE_RANGE_65_UP��
AGE_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v3.enumsBAgeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
:google/ads/googleads/v3/enums/app_payment_model_type.protogoogle.ads.googleads.v3.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
!com.google.ads.googleads.v3.enumsBAppPaymentModelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
6google/ads/googleads/v3/enums/content_label_type.protogoogle.ads.googleads.v3.enums"�
ContentLabelTypeEnum"�
ContentLabelType
UNSPECIFIED 
UNKNOWN
SEXUALLY_SUGGESTIVE
BELOW_THE_FOLD
PARKED_DOMAIN
JUVENILE
	PROFANITY
TRAGEDY	
VIDEO	
VIDEO_RATING_DV_G

VIDEO_RATING_DV_PG
VIDEO_RATING_DV_T
VIDEO_RATING_DV_MA
VIDEO_NOT_YET_RATED
EMBEDDED_VIDEO
LIVE_STREAMING_VIDEO
SOCIAL_ISSUESB�
!com.google.ads.googleads.v3.enumsBContentLabelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
/google/ads/googleads/v3/enums/day_of_week.protogoogle.ads.googleads.v3.enums"�
DayOfWeekEnum"�
	DayOfWeek
UNSPECIFIED 
UNKNOWN

MONDAY
TUESDAY
	WEDNESDAY
THURSDAY

FRIDAY
SATURDAY

SUNDAYB�
!com.google.ads.googleads.v3.enumsBDayOfWeekProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
*google/ads/googleads/v3/enums/device.protogoogle.ads.googleads.v3.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v3.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
/google/ads/googleads/v3/enums/gender_type.protogoogle.ads.googleads.v3.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
!com.google.ads.googleads.v3.enumsBGenderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
=google/ads/googleads/v3/enums/hotel_date_selection_type.protogoogle.ads.googleads.v3.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
!com.google.ads.googleads.v3.enumsBHotelDateSelectionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
5google/ads/googleads/v3/enums/income_range_type.protogoogle.ads.googleads.v3.enums"�
IncomeRangeTypeEnum"�
IncomeRangeType
UNSPECIFIED 
UNKNOWN
INCOME_RANGE_0_50��
INCOME_RANGE_50_60��
INCOME_RANGE_60_70��
INCOME_RANGE_70_80��
INCOME_RANGE_80_90��
INCOME_RANGE_90_UP��
INCOME_RANGE_UNDETERMINED��B�
!com.google.ads.googleads.v3.enumsBIncomeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
4google/ads/googleads/v3/enums/interaction_type.protogoogle.ads.googleads.v3.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
!com.google.ads.googleads.v3.enumsBInteractionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
6google/ads/googleads/v3/enums/keyword_match_type.protogoogle.ads.googleads.v3.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v3.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
6google/ads/googleads/v3/enums/listing_group_type.protogoogle.ads.googleads.v3.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
!com.google.ads.googleads.v3.enumsBListingGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
?google/ads/googleads/v3/enums/location_group_radius_units.protogoogle.ads.googleads.v3.enums"o
LocationGroupRadiusUnitsEnum"O
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILESB�
!com.google.ads.googleads.v3.enumsBLocationGroupRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
2google/ads/googleads/v3/enums/minute_of_hour.protogoogle.ads.googleads.v3.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
!com.google.ads.googleads.v3.enumsBMinuteOfHourProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
8google/ads/googleads/v3/enums/parental_status_type.protogoogle.ads.googleads.v3.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
!com.google.ads.googleads.v3.enumsBParentalStatusTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
:google/ads/googleads/v3/enums/preferred_content_type.protogoogle.ads.googleads.v3.enums"j
PreferredContentTypeEnum"N
PreferredContentType
UNSPECIFIED 
UNKNOWN
YOUTUBE_TOP_CONTENT�B�
!com.google.ads.googleads.v3.enumsBPreferredContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
Bgoogle/ads/googleads/v3/enums/product_bidding_category_level.protogoogle.ads.googleads.v3.enums"�
ProductBiddingCategoryLevelEnum"w
ProductBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
!com.google.ads.googleads.v3.enumsB ProductBiddingCategoryLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
3google/ads/googleads/v3/enums/product_channel.protogoogle.ads.googleads.v3.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
!com.google.ads.googleads.v3.enumsBProductChannelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
?google/ads/googleads/v3/enums/product_channel_exclusivity.protogoogle.ads.googleads.v3.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
!com.google.ads.googleads.v3.enumsBProductChannelExclusivityProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
5google/ads/googleads/v3/enums/product_condition.protogoogle.ads.googleads.v3.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
!com.google.ads.googleads.v3.enumsBProductConditionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
Bgoogle/ads/googleads/v3/enums/product_custom_attribute_index.protogoogle.ads.googleads.v3.enums"�
ProductCustomAttributeIndexEnum"w
ProductCustomAttributeIndex
UNSPECIFIED 
UNKNOWN

INDEX0

INDEX1

INDEX2	

INDEX3


INDEX4B�
!com.google.ads.googleads.v3.enumsB ProductCustomAttributeIndexProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
6google/ads/googleads/v3/enums/product_type_level.protogoogle.ads.googleads.v3.enums"�
ProductTypeLevelEnum"l
ProductTypeLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3	

LEVEL4


LEVEL5B�
!com.google.ads.googleads.v3.enumsBProductTypeLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
=google/ads/googleads/v3/enums/webpage_condition_operand.protogoogle.ads.googleads.v3.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
!com.google.ads.googleads.v3.enumsBWebpageConditionOperandProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
>google/ads/googleads/v3/enums/webpage_condition_operator.protogoogle.ads.googleads.v3.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
!com.google.ads.googleads.v3.enumsBWebpageConditionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�I
-google/ads/googleads/v3/common/criteria.protogoogle.ads.googleads.v3.common:google/ads/googleads/v3/enums/app_payment_model_type.proto6google/ads/googleads/v3/enums/content_label_type.proto/google/ads/googleads/v3/enums/day_of_week.proto*google/ads/googleads/v3/enums/device.proto/google/ads/googleads/v3/enums/gender_type.proto=google/ads/googleads/v3/enums/hotel_date_selection_type.proto5google/ads/googleads/v3/enums/income_range_type.proto4google/ads/googleads/v3/enums/interaction_type.proto6google/ads/googleads/v3/enums/keyword_match_type.proto6google/ads/googleads/v3/enums/listing_group_type.proto?google/ads/googleads/v3/enums/location_group_radius_units.proto2google/ads/googleads/v3/enums/minute_of_hour.proto8google/ads/googleads/v3/enums/parental_status_type.proto:google/ads/googleads/v3/enums/preferred_content_type.protoBgoogle/ads/googleads/v3/enums/product_bidding_category_level.proto3google/ads/googleads/v3/enums/product_channel.proto?google/ads/googleads/v3/enums/product_channel_exclusivity.proto5google/ads/googleads/v3/enums/product_condition.protoBgoogle/ads/googleads/v3/enums/product_custom_attribute_index.proto6google/ads/googleads/v3/enums/product_type_level.proto:google/ads/googleads/v3/enums/proximity_radius_units.proto=google/ads/googleads/v3/enums/webpage_condition_operand.proto>google/ads/googleads/v3/enums/webpage_condition_operator.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
KeywordInfo*
text (2.google.protobuf.StringValueX

match_type (2D.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType":
PlacementInfo)
url (2.google.protobuf.StringValue"[
MobileAppCategoryInfoB
mobile_app_category_constant (2.google.protobuf.StringValue"q
MobileApplicationInfo,
app_id (2.google.protobuf.StringValue*
name (2.google.protobuf.StringValue"I
LocationInfo9
geo_target_constant (2.google.protobuf.StringValue"L

DeviceInfo>
type (20.google.ads.googleads.v3.enums.DeviceEnum.Device"r
PreferredContentInfoZ
type (2L.google.ads.googleads.v3.enums.PreferredContentTypeEnum.PreferredContentType"�
ListingGroupInfoR
type (2D.google.ads.googleads.v3.enums.ListingGroupTypeEnum.ListingGroupTypeH

case_value (24.google.ads.googleads.v3.common.ListingDimensionInfo?
parent_ad_group_criterion (2.google.protobuf.StringValue"\\
ListingScopeInfoH

dimensions (24.google.ads.googleads.v3.common.ListingDimensionInfo"�	
ListingDimensionInfo?
hotel_id (2+.google.ads.googleads.v3.common.HotelIdInfoH E
hotel_class (2..google.ads.googleads.v3.common.HotelClassInfoH V
hotel_country_region (26.google.ads.googleads.v3.common.HotelCountryRegionInfoH E
hotel_state (2..google.ads.googleads.v3.common.HotelStateInfoH C

hotel_city (2-.google.ads.googleads.v3.common.HotelCityInfoH ^
product_bidding_category (2:.google.ads.googleads.v3.common.ProductBiddingCategoryInfoH I
product_brand (20.google.ads.googleads.v3.common.ProductBrandInfoH M
product_channel (22.google.ads.googleads.v3.common.ProductChannelInfoH d
product_channel_exclusivity	 (2=.google.ads.googleads.v3.common.ProductChannelExclusivityInfoH Q
product_condition
 (24.google.ads.googleads.v3.common.ProductConditionInfoH ^
product_custom_attribute (2:.google.ads.googleads.v3.common.ProductCustomAttributeInfoH L
product_item_id (21.google.ads.googleads.v3.common.ProductItemIdInfoH G
product_type (2/.google.ads.googleads.v3.common.ProductTypeInfoH `
unknown_listing_dimension (2;.google.ads.googleads.v3.common.UnknownListingDimensionInfoH B
	dimension":
HotelIdInfo+
value (2.google.protobuf.StringValue"<
HotelClassInfo*
value (2.google.protobuf.Int64Value"X
HotelCountryRegionInfo>
country_region_criterion (2.google.protobuf.StringValue"G
HotelStateInfo5
state_criterion (2.google.protobuf.StringValue"E
HotelCityInfo4
city_criterion (2.google.protobuf.StringValue"�
ProductBiddingCategoryInfo\'
id (2.google.protobuf.Int64Value2
country_code (2.google.protobuf.StringValuei
level (2Z.google.ads.googleads.v3.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel"?
ProductBrandInfo+
value (2.google.protobuf.StringValue"g
ProductChannelInfoQ
channel (2@.google.ads.googleads.v3.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfos
channel_exclusivity (2V.google.ads.googleads.v3.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"o
ProductConditionInfoW
	condition (2D.google.ads.googleads.v3.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo+
value (2.google.protobuf.StringValuei
index (2Z.google.ads.googleads.v3.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndex"@
ProductItemIdInfo+
value (2.google.protobuf.StringValue"�
ProductTypeInfo+
value (2.google.protobuf.StringValueS
level (2D.google.ads.googleads.v3.enums.ProductTypeLevelEnum.ProductTypeLevel"
UnknownListingDimensionInfo"|
HotelDateSelectionTypeInfo^
type (2P.google.ads.googleads.v3.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"}
HotelAdvanceBookingWindowInfo-
min_days (2.google.protobuf.Int64Value-
max_days (2.google.protobuf.Int64Value"y
HotelLengthOfStayInfo/

min_nights (2.google.protobuf.Int64Value/

max_nights (2.google.protobuf.Int64Value"b
HotelCheckInDayInfoK
day_of_week (26.google.ads.googleads.v3.enums.DayOfWeekEnum.DayOfWeek"g
InteractionTypeInfoP
type (2B.google.ads.googleads.v3.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoR
start_minute (2<.google.ads.googleads.v3.enums.MinuteOfHourEnum.MinuteOfHourP

end_minute (2<.google.ads.googleads.v3.enums.MinuteOfHourEnum.MinuteOfHour/

start_hour (2.google.protobuf.Int32Value-
end_hour (2.google.protobuf.Int32ValueK
day_of_week (26.google.ads.googleads.v3.enums.DayOfWeekEnum.DayOfWeek"Z
AgeRangeInfoJ
type (2<.google.ads.googleads.v3.enums.AgeRangeTypeEnum.AgeRangeType"T

GenderInfoF
type (28.google.ads.googleads.v3.enums.GenderTypeEnum.GenderType"c
IncomeRangeInfoP
type (2B.google.ads.googleads.v3.enums.IncomeRangeTypeEnum.IncomeRangeType"l
ParentalStatusInfoV
type (2H.google.ads.googleads.v3.enums.ParentalStatusTypeEnum.ParentalStatusType"B
YouTubeVideoInfo.
video_id (2.google.protobuf.StringValue"F
YouTubeChannelInfo0

channel_id (2.google.protobuf.StringValue"?
UserListInfo/
	user_list (2.google.protobuf.StringValue"�
ProximityInfo?
	geo_point (2,.google.ads.googleads.v3.common.GeoPointInfo,
radius (2.google.protobuf.DoubleValueb
radius_units (2L.google.ads.googleads.v3.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits<
address (2+.google.ads.googleads.v3.common.AddressInfo"�
GeoPointInfo?
longitude_in_micro_degrees (2.google.protobuf.Int32Value>
latitude_in_micro_degrees (2.google.protobuf.Int32Value"�
AddressInfo1
postal_code (2.google.protobuf.StringValue3
province_code (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValue3
province_name (2.google.protobuf.StringValue4
street_address (2.google.protobuf.StringValue5
street_address2 (2.google.protobuf.StringValue/
	city_name (2.google.protobuf.StringValue"m
	TopicInfo4
topic_constant (2.google.protobuf.StringValue*
path (2.google.protobuf.StringValue"G
LanguageInfo7
language_constant (2.google.protobuf.StringValue"?
IpBlockInfo0

ip_address (2.google.protobuf.StringValue"f
ContentLabelInfoR
type (2D.google.ads.googleads.v3.enums.ContentLabelTypeEnum.ContentLabelType"E
CarrierInfo6
carrier_constant (2.google.protobuf.StringValue"P
UserInterestInfo<
user_interest_category (2.google.protobuf.StringValue"�
WebpageInfo4
criterion_name (2.google.protobuf.StringValueH

conditions (24.google.ads.googleads.v3.common.WebpageConditionInfo"�
WebpageConditionInfoc
operand (2R.google.ads.googleads.v3.enums.WebpageConditionOperandEnum.WebpageConditionOperandf
operator (2T.google.ads.googleads.v3.enums.WebpageConditionOperatorEnum.WebpageConditionOperator.
argument (2.google.protobuf.StringValue"e
OperatingSystemVersionInfoG
!operating_system_version_constant (2.google.protobuf.StringValue"o
AppPaymentModelInfoX
type (2J.google.ads.googleads.v3.enums.AppPaymentModelTypeEnum.AppPaymentModelType"P
MobileDeviceInfo<
mobile_device_constant (2.google.protobuf.StringValue"K
CustomAffinityInfo5
custom_affinity (2.google.protobuf.StringValue"G
CustomIntentInfo3
custom_intent (2.google.protobuf.StringValue"�
LocationGroupInfo*
feed (2.google.protobuf.StringValue:
geo_target_constants (2.google.protobuf.StringValue+
radius (2.google.protobuf.Int64Valuej
radius_units (2T.google.ads.googleads.v3.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnitsB�
"com.google.ads.googleads.v3.commonBCriteriaProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v3/common;common�GAA�Google.Ads.GoogleAds.V3.Common�Google\\Ads\\GoogleAds\\V3\\Common�"Google::Ads::GoogleAds::V3::Commonbproto3
�
0google/ads/googleads/v3/common/feed_common.protogoogle.ads.googleads.v3.commongoogle/api/annotations.proto"p
Money3
currency_code (2.google.protobuf.StringValue2
amount_micros (2.google.protobuf.Int64ValueB�
"com.google.ads.googleads.v3.commonBFeedCommonProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v3/common;common�GAA�Google.Ads.GoogleAds.V3.Common�Google\\Ads\\GoogleAds\\V3\\Common�"Google::Ads::GoogleAds::V3::Commonbproto3
�
-google/ads/googleads/v3/enums/app_store.protogoogle.ads.googleads.v3.enums"[
AppStoreEnum"K
AppStore
UNSPECIFIED 
UNKNOWN
APPLE_ITUNES
GOOGLE_PLAYB�
!com.google.ads.googleads.v3.enumsBAppStoreProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
Cgoogle/ads/googleads/v3/enums/price_extension_price_qualifier.protogoogle.ads.googleads.v3.enums"�
 PriceExtensionPriceQualifierEnum"^
PriceExtensionPriceQualifier
UNSPECIFIED 
UNKNOWN
FROM	
UP_TO
AVERAGEB�
!com.google.ads.googleads.v3.enumsB!PriceExtensionPriceQualifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
>google/ads/googleads/v3/enums/price_extension_price_unit.protogoogle.ads.googleads.v3.enums"�
PriceExtensionPriceUnitEnum"�
PriceExtensionPriceUnit
UNSPECIFIED 
UNKNOWN
PER_HOUR
PER_DAY
PER_WEEK
	PER_MONTH
PER_YEAR
	PER_NIGHTB�
!com.google.ads.googleads.v3.enumsBPriceExtensionPriceUnitProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
8google/ads/googleads/v3/enums/price_extension_type.protogoogle.ads.googleads.v3.enums"�
PriceExtensionTypeEnum"�
PriceExtensionType
UNSPECIFIED 
UNKNOWN

BRANDS

EVENTS
	LOCATIONS
NEIGHBORHOODS
PRODUCT_CATEGORIES
PRODUCT_TIERS
SERVICES
SERVICE_CATEGORIES	
SERVICE_TIERS
B�
!com.google.ads.googleads.v3.enumsBPriceExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
Igoogle/ads/googleads/v3/enums/promotion_extension_discount_modifier.protogoogle.ads.googleads.v3.enums"w
&PromotionExtensionDiscountModifierEnum"M
"PromotionExtensionDiscountModifier
UNSPECIFIED 
UNKNOWN	
UP_TOB�
!com.google.ads.googleads.v3.enumsB\'PromotionExtensionDiscountModifierProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
@google/ads/googleads/v3/enums/promotion_extension_occasion.protogoogle.ads.googleads.v3.enums"�
PromotionExtensionOccasionEnum"�
PromotionExtensionOccasion
UNSPECIFIED 
UNKNOWN
	NEW_YEARS
CHINESE_NEW_YEAR
VALENTINES_DAY

EASTER
MOTHERS_DAY
FATHERS_DAY
	LABOR_DAY
BACK_TO_SCHOOL	
	HALLOWEEN

BLACK_FRIDAY
CYBER_MONDAY
	CHRISTMAS

BOXING_DAY
INDEPENDENCE_DAY
NATIONAL_DAY
END_OF_SEASON
WINTER_SALE
SUMMER_SALE
	FALL_SALE
SPRING_SALE
RAMADAN
EID_AL_FITR
EID_AL_ADHA
SINGLES_DAY

WOMENS_DAY
HOLI
PARENTS_DAY
ST_NICHOLAS_DAY
CARNIVAL
EPIPHANY
ROSH_HASHANAH 
PASSOVER!
HANUKKAH"

DIWALI#
NAVRATRI$
SONGKRAN%
YEAR_END_GIFT&B�
!com.google.ads.googleads.v3.enumsBPromotionExtensionOccasionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�,
/google/ads/googleads/v3/common/extensions.protogoogle.ads.googleads.v3.common0google/ads/googleads/v3/common/feed_common.proto-google/ads/googleads/v3/enums/app_store.protoCgoogle/ads/googleads/v3/enums/call_conversion_reporting_state.protoCgoogle/ads/googleads/v3/enums/price_extension_price_qualifier.proto>google/ads/googleads/v3/enums/price_extension_price_unit.proto8google/ads/googleads/v3/enums/price_extension_type.protoIgoogle/ads/googleads/v3/enums/promotion_extension_discount_modifier.proto@google/ads/googleads/v3/enums/promotion_extension_occasion.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
AppFeedItem/
	link_text (2.google.protobuf.StringValue,
app_id (2.google.protobuf.StringValueG
	app_store (24.google.ads.googleads.v3.enums.AppStoreEnum.AppStore0

final_urls (2.google.protobuf.StringValue7
final_mobile_urls (2.google.protobuf.StringValue;
tracking_url_template (2.google.protobuf.StringValueN
url_custom_parameters (2/.google.ads.googleads.v3.common.CustomParameter6
final_url_suffix (2.google.protobuf.StringValue"�
CallFeedItem2
phone_number (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValue9
call_tracking_enabled (2.google.protobuf.BoolValue<
call_conversion_action (2.google.protobuf.StringValueE
!call_conversion_tracking_disabled (2.google.protobuf.BoolValue�
call_conversion_reporting_state (2\\.google.ads.googleads.v3.enums.CallConversionReportingStateEnum.CallConversionReportingState"E
CalloutFeedItem2
callout_text (2.google.protobuf.StringValue"�
LocationFeedItem3
business_name (2.google.protobuf.StringValue4
address_line_1 (2.google.protobuf.StringValue4
address_line_2 (2.google.protobuf.StringValue*
city (2.google.protobuf.StringValue.
province (2.google.protobuf.StringValue1
postal_code (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValue2
phone_number (2.google.protobuf.StringValue"�
AffiliateLocationFeedItem3
business_name (2.google.protobuf.StringValue4
address_line_1 (2.google.protobuf.StringValue4
address_line_2 (2.google.protobuf.StringValue*
city (2.google.protobuf.StringValue.
province (2.google.protobuf.StringValue1
postal_code (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValue2
phone_number (2.google.protobuf.StringValue-
chain_id	 (2.google.protobuf.Int64Value0

chain_name
 (2.google.protobuf.StringValue"�
TextMessageFeedItem3
business_name (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValue2
phone_number (2.google.protobuf.StringValue*
text (2.google.protobuf.StringValue4
extension_text (2.google.protobuf.StringValue"�
PriceFeedItemV
type (2H.google.ads.googleads.v3.enums.PriceExtensionTypeEnum.PriceExtensionTypeu
price_qualifier (2\\.google.ads.googleads.v3.enums.PriceExtensionPriceQualifierEnum.PriceExtensionPriceQualifier;
tracking_url_template (2.google.protobuf.StringValue3
language_code (2.google.protobuf.StringValueC
price_offerings (2*.google.ads.googleads.v3.common.PriceOffer6
final_url_suffix (2.google.protobuf.StringValue"�

PriceOffer,
header (2.google.protobuf.StringValue1
description (2.google.protobuf.StringValue4
price (2%.google.ads.googleads.v3.common.Money`
unit (2R.google.ads.googleads.v3.enums.PriceExtensionPriceUnitEnum.PriceExtensionPriceUnit0

final_urls (2.google.protobuf.StringValue7
final_mobile_urls (2.google.protobuf.StringValue"�
PromotionFeedItem6
promotion_target (2.google.protobuf.StringValue�
discount_modifier (2h.google.ads.googleads.v3.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier:
promotion_start_date (2.google.protobuf.StringValue8
promotion_end_date (2.google.protobuf.StringValuej
occasion	 (2X.google.ads.googleads.v3.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion0

final_urls
 (2.google.protobuf.StringValue7
final_mobile_urls (2.google.protobuf.StringValue;
tracking_url_template (2.google.protobuf.StringValueN
url_custom_parameters (2/.google.ads.googleads.v3.common.CustomParameter6
final_url_suffix (2.google.protobuf.StringValue3
language_code (2.google.protobuf.StringValue2
percent_off (2.google.protobuf.Int64ValueH A
money_amount_off (2%.google.ads.googleads.v3.common.MoneyH 6
promotion_code (2.google.protobuf.StringValueHC
orders_over_amount (2%.google.ads.googleads.v3.common.MoneyHB
discount_typeB
promotion_trigger"w
StructuredSnippetFeedItem,
header (2.google.protobuf.StringValue,
values (2.google.protobuf.StringValue"�
SitelinkFeedItem/
	link_text (2.google.protobuf.StringValue+
line1 (2.google.protobuf.StringValue+
line2 (2.google.protobuf.StringValue0

final_urls (2.google.protobuf.StringValue7
final_mobile_urls (2.google.protobuf.StringValue;
tracking_url_template (2.google.protobuf.StringValueN
url_custom_parameters (2/.google.ads.googleads.v3.common.CustomParameter6
final_url_suffix (2.google.protobuf.StringValue"w
HotelCalloutFeedItem*
text (2.google.protobuf.StringValue3
language_code (2.google.protobuf.StringValueB�
"com.google.ads.googleads.v3.commonBExtensionsProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v3/common;common�GAA�Google.Ads.GoogleAds.V3.Common�Google\\Ads\\GoogleAds\\V3\\Common�"Google::Ads::GoogleAds::V3::Commonbproto3
�
2google/ads/googleads/v3/enums/extension_type.protogoogle.ads.googleads.v3.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUTB�
!com.google.ads.googleads.v3.enumsBExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
;google/ads/googleads/v3/enums/feed_item_target_device.protogoogle.ads.googleads.v3.enums"\\
FeedItemTargetDeviceEnum"@
FeedItemTargetDevice
UNSPECIFIED 
UNKNOWN

MOBILEB�
!com.google.ads.googleads.v3.enumsBFeedItemTargetDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
4google/ads/googleads/v3/enums/feed_item_status.protogoogle.ads.googleads.v3.enums"^
FeedItemStatusEnum"H
FeedItemStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v3.enumsBFeedItemStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
;google/ads/googleads/v3/resources/extension_feed_item.proto!google.ads.googleads.v3.resources/google/ads/googleads/v3/common/extensions.proto2google/ads/googleads/v3/enums/extension_type.proto4google/ads/googleads/v3/enums/feed_item_status.proto;google/ads/googleads/v3/enums/feed_item_target_device.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
ExtensionFeedItemI
resource_name (	B2�A�A,
*googleads.googleapis.com/ExtensionFeedItem,
id (2.google.protobuf.Int64ValueB�A[
extension_type (2>.google.ads.googleads.v3.enums.ExtensionTypeEnum.ExtensionTypeB�A5
start_date_time (2.google.protobuf.StringValue3
end_date_time (2.google.protobuf.StringValueD
ad_schedules (2..google.ads.googleads.v3.common.AdScheduleInfo\\
device (2L.google.ads.googleads.v3.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevices
targeted_geo_target_constant (2.google.protobuf.StringValueB/�A,
*googleads.googleapis.com/GeoTargetConstantE
targeted_keyword (2+.google.ads.googleads.v3.common.KeywordInfoU
status (2@.google.ads.googleads.v3.enums.FeedItemStatusEnum.FeedItemStatusB�AN
sitelink_feed_item (20.google.ads.googleads.v3.common.SitelinkFeedItemH a
structured_snippet_feed_item (29.google.ads.googleads.v3.common.StructuredSnippetFeedItemH D
app_feed_item (2+.google.ads.googleads.v3.common.AppFeedItemH F
call_feed_item (2,.google.ads.googleads.v3.common.CallFeedItemH L
callout_feed_item	 (2/.google.ads.googleads.v3.common.CalloutFeedItemH U
text_message_feed_item
 (23.google.ads.googleads.v3.common.TextMessageFeedItemH H
price_feed_item (2-.google.ads.googleads.v3.common.PriceFeedItemH P
promotion_feed_item (21.google.ads.googleads.v3.common.PromotionFeedItemH S
location_feed_item (20.google.ads.googleads.v3.common.LocationFeedItemB�AH f
affiliate_location_feed_item (29.google.ads.googleads.v3.common.AffiliateLocationFeedItemB�AH W
hotel_callout_feed_item (24.google.ads.googleads.v3.common.HotelCalloutFeedItemH a
targeted_campaign (2.google.protobuf.StringValueB&�A#
!googleads.googleapis.com/CampaignH`
targeted_ad_group (2.google.protobuf.StringValueB%�A"
 googleads.googleapis.com/AdGroupH:n�Ak
*googleads.googleapis.com/ExtensionFeedItem=customers/{customer}/extensionFeedItems/{extension_feed_item}B
	extensionB
serving_resource_targetingB�
%com.google.ads.googleads.v3.resourcesBExtensionFeedItemProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v3/resources;resources�GAA�!Google.Ads.GoogleAds.V3.Resources�!Google\\Ads\\GoogleAds\\V3\\Resources�%Google::Ads::GoogleAds::V3::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

