<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/ad_group_bid_modifier.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class AdGroupBidModifier
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
�
2google/ads/googleads/v4/enums/age_range_type.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsBAgeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
Bgoogle/ads/googleads/v4/enums/product_custom_attribute_index.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsB ProductCustomAttributeIndexProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
:google/ads/googleads/v4/enums/app_payment_model_type.protogoogle.ads.googleads.v4.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
!com.google.ads.googleads.v4.enumsBAppPaymentModelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/enums/content_label_type.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsBContentLabelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
/google/ads/googleads/v4/enums/day_of_week.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsBDayOfWeekProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
*google/ads/googleads/v4/enums/device.protogoogle.ads.googleads.v4.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v4.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
/google/ads/googleads/v4/enums/gender_type.protogoogle.ads.googleads.v4.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
!com.google.ads.googleads.v4.enumsBGenderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
=google/ads/googleads/v4/enums/hotel_date_selection_type.protogoogle.ads.googleads.v4.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
!com.google.ads.googleads.v4.enumsBHotelDateSelectionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
5google/ads/googleads/v4/enums/income_range_type.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsBIncomeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
4google/ads/googleads/v4/enums/interaction_type.protogoogle.ads.googleads.v4.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
!com.google.ads.googleads.v4.enumsBInteractionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/enums/keyword_match_type.protogoogle.ads.googleads.v4.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v4.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/enums/listing_group_type.protogoogle.ads.googleads.v4.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
!com.google.ads.googleads.v4.enumsBListingGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
?google/ads/googleads/v4/enums/location_group_radius_units.protogoogle.ads.googleads.v4.enums"o
LocationGroupRadiusUnitsEnum"O
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILESB�
!com.google.ads.googleads.v4.enumsBLocationGroupRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
2google/ads/googleads/v4/enums/minute_of_hour.protogoogle.ads.googleads.v4.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
!com.google.ads.googleads.v4.enumsBMinuteOfHourProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
8google/ads/googleads/v4/enums/parental_status_type.protogoogle.ads.googleads.v4.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
!com.google.ads.googleads.v4.enumsBParentalStatusTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
:google/ads/googleads/v4/enums/preferred_content_type.protogoogle.ads.googleads.v4.enums"j
PreferredContentTypeEnum"N
PreferredContentType
UNSPECIFIED 
UNKNOWN
YOUTUBE_TOP_CONTENT�B�
!com.google.ads.googleads.v4.enumsBPreferredContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
Bgoogle/ads/googleads/v4/enums/product_bidding_category_level.protogoogle.ads.googleads.v4.enums"�
ProductBiddingCategoryLevelEnum"w
ProductBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
!com.google.ads.googleads.v4.enumsB ProductBiddingCategoryLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
3google/ads/googleads/v4/enums/product_channel.protogoogle.ads.googleads.v4.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
!com.google.ads.googleads.v4.enumsBProductChannelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
?google/ads/googleads/v4/enums/product_channel_exclusivity.protogoogle.ads.googleads.v4.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
!com.google.ads.googleads.v4.enumsBProductChannelExclusivityProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
5google/ads/googleads/v4/enums/product_condition.protogoogle.ads.googleads.v4.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
!com.google.ads.googleads.v4.enumsBProductConditionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/enums/product_type_level.protogoogle.ads.googleads.v4.enums"�
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
!com.google.ads.googleads.v4.enumsBProductTypeLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
:google/ads/googleads/v4/enums/proximity_radius_units.protogoogle.ads.googleads.v4.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
!com.google.ads.googleads.v4.enumsBProximityRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
=google/ads/googleads/v4/enums/webpage_condition_operand.protogoogle.ads.googleads.v4.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
!com.google.ads.googleads.v4.enumsBWebpageConditionOperandProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
>google/ads/googleads/v4/enums/webpage_condition_operator.protogoogle.ads.googleads.v4.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
!com.google.ads.googleads.v4.enumsBWebpageConditionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�I
-google/ads/googleads/v4/common/criteria.protogoogle.ads.googleads.v4.common:google/ads/googleads/v4/enums/app_payment_model_type.proto6google/ads/googleads/v4/enums/content_label_type.proto/google/ads/googleads/v4/enums/day_of_week.proto*google/ads/googleads/v4/enums/device.proto/google/ads/googleads/v4/enums/gender_type.proto=google/ads/googleads/v4/enums/hotel_date_selection_type.proto5google/ads/googleads/v4/enums/income_range_type.proto4google/ads/googleads/v4/enums/interaction_type.proto6google/ads/googleads/v4/enums/keyword_match_type.proto6google/ads/googleads/v4/enums/listing_group_type.proto?google/ads/googleads/v4/enums/location_group_radius_units.proto2google/ads/googleads/v4/enums/minute_of_hour.proto8google/ads/googleads/v4/enums/parental_status_type.proto:google/ads/googleads/v4/enums/preferred_content_type.protoBgoogle/ads/googleads/v4/enums/product_bidding_category_level.proto3google/ads/googleads/v4/enums/product_channel.proto?google/ads/googleads/v4/enums/product_channel_exclusivity.proto5google/ads/googleads/v4/enums/product_condition.protoBgoogle/ads/googleads/v4/enums/product_custom_attribute_index.proto6google/ads/googleads/v4/enums/product_type_level.proto:google/ads/googleads/v4/enums/proximity_radius_units.proto=google/ads/googleads/v4/enums/webpage_condition_operand.proto>google/ads/googleads/v4/enums/webpage_condition_operator.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
KeywordInfo*
text (2.google.protobuf.StringValueX

match_type (2D.google.ads.googleads.v4.enums.KeywordMatchTypeEnum.KeywordMatchType":
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
type (20.google.ads.googleads.v4.enums.DeviceEnum.Device"r
PreferredContentInfoZ
type (2L.google.ads.googleads.v4.enums.PreferredContentTypeEnum.PreferredContentType"�
ListingGroupInfoR
type (2D.google.ads.googleads.v4.enums.ListingGroupTypeEnum.ListingGroupTypeH

case_value (24.google.ads.googleads.v4.common.ListingDimensionInfo?
parent_ad_group_criterion (2.google.protobuf.StringValue"\\
ListingScopeInfoH

dimensions (24.google.ads.googleads.v4.common.ListingDimensionInfo"�	
ListingDimensionInfo?
hotel_id (2+.google.ads.googleads.v4.common.HotelIdInfoH E
hotel_class (2..google.ads.googleads.v4.common.HotelClassInfoH V
hotel_country_region (26.google.ads.googleads.v4.common.HotelCountryRegionInfoH E
hotel_state (2..google.ads.googleads.v4.common.HotelStateInfoH C

hotel_city (2-.google.ads.googleads.v4.common.HotelCityInfoH ^
product_bidding_category (2:.google.ads.googleads.v4.common.ProductBiddingCategoryInfoH I
product_brand (20.google.ads.googleads.v4.common.ProductBrandInfoH M
product_channel (22.google.ads.googleads.v4.common.ProductChannelInfoH d
product_channel_exclusivity	 (2=.google.ads.googleads.v4.common.ProductChannelExclusivityInfoH Q
product_condition
 (24.google.ads.googleads.v4.common.ProductConditionInfoH ^
product_custom_attribute (2:.google.ads.googleads.v4.common.ProductCustomAttributeInfoH L
product_item_id (21.google.ads.googleads.v4.common.ProductItemIdInfoH G
product_type (2/.google.ads.googleads.v4.common.ProductTypeInfoH `
unknown_listing_dimension (2;.google.ads.googleads.v4.common.UnknownListingDimensionInfoH B
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
level (2Z.google.ads.googleads.v4.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevel"?
ProductBrandInfo+
value (2.google.protobuf.StringValue"g
ProductChannelInfoQ
channel (2@.google.ads.googleads.v4.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfos
channel_exclusivity (2V.google.ads.googleads.v4.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"o
ProductConditionInfoW
	condition (2D.google.ads.googleads.v4.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo+
value (2.google.protobuf.StringValuei
index (2Z.google.ads.googleads.v4.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndex"@
ProductItemIdInfo+
value (2.google.protobuf.StringValue"�
ProductTypeInfo+
value (2.google.protobuf.StringValueS
level (2D.google.ads.googleads.v4.enums.ProductTypeLevelEnum.ProductTypeLevel"
UnknownListingDimensionInfo"|
HotelDateSelectionTypeInfo^
type (2P.google.ads.googleads.v4.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"}
HotelAdvanceBookingWindowInfo-
min_days (2.google.protobuf.Int64Value-
max_days (2.google.protobuf.Int64Value"y
HotelLengthOfStayInfo/

min_nights (2.google.protobuf.Int64Value/

max_nights (2.google.protobuf.Int64Value"b
HotelCheckInDayInfoK
day_of_week (26.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek"g
InteractionTypeInfoP
type (2B.google.ads.googleads.v4.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoR
start_minute (2<.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHourP

end_minute (2<.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour/

start_hour (2.google.protobuf.Int32Value-
end_hour (2.google.protobuf.Int32ValueK
day_of_week (26.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek"Z
AgeRangeInfoJ
type (2<.google.ads.googleads.v4.enums.AgeRangeTypeEnum.AgeRangeType"T

GenderInfoF
type (28.google.ads.googleads.v4.enums.GenderTypeEnum.GenderType"c
IncomeRangeInfoP
type (2B.google.ads.googleads.v4.enums.IncomeRangeTypeEnum.IncomeRangeType"l
ParentalStatusInfoV
type (2H.google.ads.googleads.v4.enums.ParentalStatusTypeEnum.ParentalStatusType"B
YouTubeVideoInfo.
video_id (2.google.protobuf.StringValue"F
YouTubeChannelInfo0

channel_id (2.google.protobuf.StringValue"?
UserListInfo/
	user_list (2.google.protobuf.StringValue"�
ProximityInfo?
	geo_point (2,.google.ads.googleads.v4.common.GeoPointInfo,
radius (2.google.protobuf.DoubleValueb
radius_units (2L.google.ads.googleads.v4.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits<
address (2+.google.ads.googleads.v4.common.AddressInfo"�
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
type (2D.google.ads.googleads.v4.enums.ContentLabelTypeEnum.ContentLabelType"E
CarrierInfo6
carrier_constant (2.google.protobuf.StringValue"P
UserInterestInfo<
user_interest_category (2.google.protobuf.StringValue"�
WebpageInfo4
criterion_name (2.google.protobuf.StringValueH

conditions (24.google.ads.googleads.v4.common.WebpageConditionInfo"�
WebpageConditionInfoc
operand (2R.google.ads.googleads.v4.enums.WebpageConditionOperandEnum.WebpageConditionOperandf
operator (2T.google.ads.googleads.v4.enums.WebpageConditionOperatorEnum.WebpageConditionOperator.
argument (2.google.protobuf.StringValue"e
OperatingSystemVersionInfoG
!operating_system_version_constant (2.google.protobuf.StringValue"o
AppPaymentModelInfoX
type (2J.google.ads.googleads.v4.enums.AppPaymentModelTypeEnum.AppPaymentModelType"P
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
radius_units (2T.google.ads.googleads.v4.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnitsB�
"com.google.ads.googleads.v4.commonBCriteriaProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3
�
7google/ads/googleads/v4/enums/bid_modifier_source.protogoogle.ads.googleads.v4.enums"f
BidModifierSourceEnum"M
BidModifierSource
UNSPECIFIED 
UNKNOWN
CAMPAIGN
AD_GROUPB�
!com.google.ads.googleads.v4.enumsBBidModifierSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
=google/ads/googleads/v4/resources/ad_group_bid_modifier.proto!google.ads.googleads.v4.resources7google/ads/googleads/v4/enums/bid_modifier_source.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�	
AdGroupBidModifierJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AdGroupBidModifierX
ad_group (2.google.protobuf.StringValueB(�A�A"
 googleads.googleapis.com/AdGroup6
criterion_id (2.google.protobuf.Int64ValueB�A2
bid_modifier (2.google.protobuf.DoubleValue]
base_ad_group	 (2.google.protobuf.StringValueB(�A�A"
 googleads.googleapis.com/AdGrouph
bid_modifier_source
 (2F.google.ads.googleads.v4.enums.BidModifierSourceEnum.BidModifierSourceB�Ad
hotel_date_selection_type (2:.google.ads.googleads.v4.common.HotelDateSelectionTypeInfoB�AH j
hotel_advance_booking_window (2=.google.ads.googleads.v4.common.HotelAdvanceBookingWindowInfoB�AH Z
hotel_length_of_stay (25.google.ads.googleads.v4.common.HotelLengthOfStayInfoB�AH V
hotel_check_in_day (23.google.ads.googleads.v4.common.HotelCheckInDayInfoB�AH A
device (2*.google.ads.googleads.v4.common.DeviceInfoB�AH V
preferred_content (24.google.ads.googleads.v4.common.PreferredContentInfoB�AH :r�Ao
+googleads.googleapis.com/AdGroupBidModifier@customers/{customer}/adGroupBidModifiers/{ad_group_bid_modifier}B
	criterionB�
%com.google.ads.googleads.v4.resourcesBAdGroupBidModifierProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

