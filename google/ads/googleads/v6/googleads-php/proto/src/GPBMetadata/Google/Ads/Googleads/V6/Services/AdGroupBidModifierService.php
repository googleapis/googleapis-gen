<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/ad_group_bid_modifier_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class AdGroupBidModifierService
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
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v6/enums/product_bidding_category_level.protogoogle.ads.googleads.v6.enums"�
ProductBiddingCategoryLevelEnum"w
ProductBiddingCategoryLevel
UNSPECIFIED 
UNKNOWN

LEVEL1

LEVEL2

LEVEL3

LEVEL4

LEVEL5B�
!com.google.ads.googleads.v6.enumsB ProductBiddingCategoryLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
2google/ads/googleads/v6/enums/age_range_type.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBAgeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
5google/ads/googleads/v6/enums/product_condition.protogoogle.ads.googleads.v6.enums"l
ProductConditionEnum"T
ProductCondition
UNSPECIFIED 
UNKNOWN
NEW
REFURBISHED
USEDB�
!com.google.ads.googleads.v6.enumsBProductConditionProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
:google/ads/googleads/v6/enums/app_payment_model_type.protogoogle.ads.googleads.v6.enums"X
AppPaymentModelTypeEnum"=
AppPaymentModelType
UNSPECIFIED 
UNKNOWN
PAIDB�
!com.google.ads.googleads.v6.enumsBAppPaymentModelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/enums/content_label_type.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBContentLabelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/day_of_week.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBDayOfWeekProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
*google/ads/googleads/v6/enums/device.protogoogle.ads.googleads.v6.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
!com.google.ads.googleads.v6.enumsBDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
/google/ads/googleads/v6/enums/gender_type.protogoogle.ads.googleads.v6.enums"d
GenderTypeEnum"R

GenderType
UNSPECIFIED 
UNKNOWN
MALE


FEMALE
UNDETERMINEDB�
!com.google.ads.googleads.v6.enumsBGenderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
=google/ads/googleads/v6/enums/hotel_date_selection_type.protogoogle.ads.googleads.v6.enums"~
HotelDateSelectionTypeEnum"`
HotelDateSelectionType
UNSPECIFIED 
UNKNOWN
DEFAULT_SELECTION2
USER_SELECTED3B�
!com.google.ads.googleads.v6.enumsBHotelDateSelectionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
5google/ads/googleads/v6/enums/income_range_type.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBIncomeRangeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
4google/ads/googleads/v6/enums/interaction_type.protogoogle.ads.googleads.v6.enums"R
InteractionTypeEnum";
InteractionType
UNSPECIFIED 
UNKNOWN

CALLS�>B�
!com.google.ads.googleads.v6.enumsBInteractionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/enums/keyword_match_type.protogoogle.ads.googleads.v6.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v6.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/enums/listing_group_type.protogoogle.ads.googleads.v6.enums"c
ListingGroupTypeEnum"K
ListingGroupType
UNSPECIFIED 
UNKNOWN
SUBDIVISION
UNITB�
!com.google.ads.googleads.v6.enumsBListingGroupTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
?google/ads/googleads/v6/enums/location_group_radius_units.protogoogle.ads.googleads.v6.enums"�
LocationGroupRadiusUnitsEnum"`
LocationGroupRadiusUnits
UNSPECIFIED 
UNKNOWN

METERS	
MILES
MILLI_MILESB�
!com.google.ads.googleads.v6.enumsBLocationGroupRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
2google/ads/googleads/v6/enums/minute_of_hour.protogoogle.ads.googleads.v6.enums"s
MinuteOfHourEnum"_
MinuteOfHour
UNSPECIFIED 
UNKNOWN
ZERO
FIFTEEN

THIRTY

FORTY_FIVEB�
!com.google.ads.googleads.v6.enumsBMinuteOfHourProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
8google/ads/googleads/v6/enums/parental_status_type.protogoogle.ads.googleads.v6.enums"
ParentalStatusTypeEnum"e
ParentalStatusType
UNSPECIFIED 
UNKNOWN
PARENT�
NOT_A_PARENT�
UNDETERMINED�B�
!com.google.ads.googleads.v6.enumsBParentalStatusTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
:google/ads/googleads/v6/enums/preferred_content_type.protogoogle.ads.googleads.v6.enums"j
PreferredContentTypeEnum"N
PreferredContentType
UNSPECIFIED 
UNKNOWN
YOUTUBE_TOP_CONTENT�B�
!com.google.ads.googleads.v6.enumsBPreferredContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
3google/ads/googleads/v6/enums/product_channel.protogoogle.ads.googleads.v6.enums"[
ProductChannelEnum"E
ProductChannel
UNSPECIFIED 
UNKNOWN

ONLINE	
LOCALB�
!com.google.ads.googleads.v6.enumsBProductChannelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
?google/ads/googleads/v6/enums/product_channel_exclusivity.protogoogle.ads.googleads.v6.enums"�
ProductChannelExclusivityEnum"`
ProductChannelExclusivity
UNSPECIFIED 
UNKNOWN
SINGLE_CHANNEL
MULTI_CHANNELB�
!com.google.ads.googleads.v6.enumsBProductChannelExclusivityProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Bgoogle/ads/googleads/v6/enums/product_custom_attribute_index.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsB ProductCustomAttributeIndexProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
6google/ads/googleads/v6/enums/product_type_level.protogoogle.ads.googleads.v6.enums"�
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
!com.google.ads.googleads.v6.enumsBProductTypeLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
:google/ads/googleads/v6/enums/proximity_radius_units.protogoogle.ads.googleads.v6.enums"k
ProximityRadiusUnitsEnum"O
ProximityRadiusUnits
UNSPECIFIED 
UNKNOWN	
MILES

KILOMETERSB�
!com.google.ads.googleads.v6.enumsBProximityRadiusUnitsProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
=google/ads/googleads/v6/enums/webpage_condition_operand.protogoogle.ads.googleads.v6.enums"�
WebpageConditionOperandEnum"�
WebpageConditionOperand
UNSPECIFIED 
UNKNOWN
URL
CATEGORY

PAGE_TITLE
PAGE_CONTENT
CUSTOM_LABELB�
!com.google.ads.googleads.v6.enumsBWebpageConditionOperandProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
>google/ads/googleads/v6/enums/webpage_condition_operator.protogoogle.ads.googleads.v6.enums"r
WebpageConditionOperatorEnum"R
WebpageConditionOperator
UNSPECIFIED 
UNKNOWN

EQUALS
CONTAINSB�
!com.google.ads.googleads.v6.enumsBWebpageConditionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�F
-google/ads/googleads/v6/common/criteria.protogoogle.ads.googleads.v6.common:google/ads/googleads/v6/enums/app_payment_model_type.proto6google/ads/googleads/v6/enums/content_label_type.proto/google/ads/googleads/v6/enums/day_of_week.proto*google/ads/googleads/v6/enums/device.proto/google/ads/googleads/v6/enums/gender_type.proto=google/ads/googleads/v6/enums/hotel_date_selection_type.proto5google/ads/googleads/v6/enums/income_range_type.proto4google/ads/googleads/v6/enums/interaction_type.proto6google/ads/googleads/v6/enums/keyword_match_type.proto6google/ads/googleads/v6/enums/listing_group_type.proto?google/ads/googleads/v6/enums/location_group_radius_units.proto2google/ads/googleads/v6/enums/minute_of_hour.proto8google/ads/googleads/v6/enums/parental_status_type.proto:google/ads/googleads/v6/enums/preferred_content_type.protoBgoogle/ads/googleads/v6/enums/product_bidding_category_level.proto3google/ads/googleads/v6/enums/product_channel.proto?google/ads/googleads/v6/enums/product_channel_exclusivity.proto5google/ads/googleads/v6/enums/product_condition.protoBgoogle/ads/googleads/v6/enums/product_custom_attribute_index.proto6google/ads/googleads/v6/enums/product_type_level.proto:google/ads/googleads/v6/enums/proximity_radius_units.proto=google/ads/googleads/v6/enums/webpage_condition_operand.proto>google/ads/googleads/v6/enums/webpage_condition_operator.protogoogle/api/annotations.proto"�
KeywordInfo
text (	H �X

match_type (2D.google.ads.googleads.v6.enums.KeywordMatchTypeEnum.KeywordMatchTypeB
_text")
PlacementInfo
url (	H �B
_url"c
MobileAppCategoryInfo)
mobile_app_category_constant (	H �B
_mobile_app_category_constant"S
MobileApplicationInfo
app_id (	H �
name (	H�B	
_app_idB
_name"H
LocationInfo 
geo_target_constant (	H �B
_geo_target_constant"L

DeviceInfo>
type (20.google.ads.googleads.v6.enums.DeviceEnum.Device"r
PreferredContentInfoZ
type (2L.google.ads.googleads.v6.enums.PreferredContentTypeEnum.PreferredContentType"�
ListingGroupInfoR
type (2D.google.ads.googleads.v6.enums.ListingGroupTypeEnum.ListingGroupTypeH

case_value (24.google.ads.googleads.v6.common.ListingDimensionInfo&
parent_ad_group_criterion (	H �B
_parent_ad_group_criterion"\\
ListingScopeInfoH

dimensions (24.google.ads.googleads.v6.common.ListingDimensionInfo"�	
ListingDimensionInfo?
hotel_id (2+.google.ads.googleads.v6.common.HotelIdInfoH E
hotel_class (2..google.ads.googleads.v6.common.HotelClassInfoH V
hotel_country_region (26.google.ads.googleads.v6.common.HotelCountryRegionInfoH E
hotel_state (2..google.ads.googleads.v6.common.HotelStateInfoH C

hotel_city (2-.google.ads.googleads.v6.common.HotelCityInfoH ^
product_bidding_category (2:.google.ads.googleads.v6.common.ProductBiddingCategoryInfoH I
product_brand (20.google.ads.googleads.v6.common.ProductBrandInfoH M
product_channel (22.google.ads.googleads.v6.common.ProductChannelInfoH d
product_channel_exclusivity	 (2=.google.ads.googleads.v6.common.ProductChannelExclusivityInfoH Q
product_condition
 (24.google.ads.googleads.v6.common.ProductConditionInfoH ^
product_custom_attribute (2:.google.ads.googleads.v6.common.ProductCustomAttributeInfoH L
product_item_id (21.google.ads.googleads.v6.common.ProductItemIdInfoH G
product_type (2/.google.ads.googleads.v6.common.ProductTypeInfoH `
unknown_listing_dimension (2;.google.ads.googleads.v6.common.UnknownListingDimensionInfoH B
	dimension"+
HotelIdInfo
value (	H �B
_value".
HotelClassInfo
value (H �B
_value"\\
HotelCountryRegionInfo%
country_region_criterion (	H �B
_country_region_criterion"B
HotelStateInfo
state_criterion (	H �B
_state_criterion"?
HotelCityInfo
city_criterion (	H �B
_city_criterion"�
ProductBiddingCategoryInfo
id (H �
country_code (	H�i
level (2Z.google.ads.googleads.v6.enums.ProductBiddingCategoryLevelEnum.ProductBiddingCategoryLevelB
_idB
_country_code"0
ProductBrandInfo
value (	H �B
_value"g
ProductChannelInfoQ
channel (2@.google.ads.googleads.v6.enums.ProductChannelEnum.ProductChannel"�
ProductChannelExclusivityInfos
channel_exclusivity (2V.google.ads.googleads.v6.enums.ProductChannelExclusivityEnum.ProductChannelExclusivity"o
ProductConditionInfoW
	condition (2D.google.ads.googleads.v6.enums.ProductConditionEnum.ProductCondition"�
ProductCustomAttributeInfo
value (	H �i
index (2Z.google.ads.googleads.v6.enums.ProductCustomAttributeIndexEnum.ProductCustomAttributeIndexB
_value"1
ProductItemIdInfo
value (	H �B
_value"�
ProductTypeInfo
value (	H �S
level (2D.google.ads.googleads.v6.enums.ProductTypeLevelEnum.ProductTypeLevelB
_value"
UnknownListingDimensionInfo"|
HotelDateSelectionTypeInfo^
type (2P.google.ads.googleads.v6.enums.HotelDateSelectionTypeEnum.HotelDateSelectionType"g
HotelAdvanceBookingWindowInfo
min_days (H �
max_days (H�B
	_min_daysB
	_max_days"g
HotelLengthOfStayInfo

min_nights (H �

max_nights (H�B
_min_nightsB
_max_nights"b
HotelCheckInDayInfoK
day_of_week (26.google.ads.googleads.v6.enums.DayOfWeekEnum.DayOfWeek"g
InteractionTypeInfoP
type (2B.google.ads.googleads.v6.enums.InteractionTypeEnum.InteractionType"�
AdScheduleInfoR
start_minute (2<.google.ads.googleads.v6.enums.MinuteOfHourEnum.MinuteOfHourP

end_minute (2<.google.ads.googleads.v6.enums.MinuteOfHourEnum.MinuteOfHour

start_hour (H �
end_hour (H�K
day_of_week (26.google.ads.googleads.v6.enums.DayOfWeekEnum.DayOfWeekB
_start_hourB
	_end_hour"Z
AgeRangeInfoJ
type (2<.google.ads.googleads.v6.enums.AgeRangeTypeEnum.AgeRangeType"T

GenderInfoF
type (28.google.ads.googleads.v6.enums.GenderTypeEnum.GenderType"c
IncomeRangeInfoP
type (2B.google.ads.googleads.v6.enums.IncomeRangeTypeEnum.IncomeRangeType"l
ParentalStatusInfoV
type (2H.google.ads.googleads.v6.enums.ParentalStatusTypeEnum.ParentalStatusType"6
YouTubeVideoInfo
video_id (	H �B
	_video_id"<
YouTubeChannelInfo

channel_id (	H �B
_channel_id"4
UserListInfo
	user_list (	H �B

_user_list"�
ProximityInfo?
	geo_point (2,.google.ads.googleads.v6.common.GeoPointInfo
radius (H �b
radius_units (2L.google.ads.googleads.v6.enums.ProximityRadiusUnitsEnum.ProximityRadiusUnits<
address (2+.google.ads.googleads.v6.common.AddressInfoB	
_radius"�
GeoPointInfo\'
longitude_in_micro_degrees (H �&
latitude_in_micro_degrees (H�B
_longitude_in_micro_degreesB
_latitude_in_micro_degrees"�
AddressInfo
postal_code (	H �
province_code	 (	H�
country_code
 (	H�
province_name (	H�
street_address (	H�
street_address2 (	H�
	city_name (	H�B
_postal_codeB
_province_codeB
_country_codeB
_province_nameB
_street_addressB
_street_address2B

_city_name"I
	TopicInfo
topic_constant (	H �
path (	B
_topic_constant"D
LanguageInfo
language_constant (	H �B
_language_constant"5
IpBlockInfo

ip_address (	H �B
_ip_address"f
ContentLabelInfoR
type (2D.google.ads.googleads.v6.enums.ContentLabelTypeEnum.ContentLabelType"A
CarrierInfo
carrier_constant (	H �B
_carrier_constant"R
UserInterestInfo#
user_interest_category (	H �B
_user_interest_category"�
WebpageInfo
criterion_name (	H �H

conditions (24.google.ads.googleads.v6.common.WebpageConditionInfoB
_criterion_name"�
WebpageConditionInfoc
operand (2R.google.ads.googleads.v6.enums.WebpageConditionOperandEnum.WebpageConditionOperandf
operator (2T.google.ads.googleads.v6.enums.WebpageConditionOperatorEnum.WebpageConditionOperator
argument (	H �B
	_argument"r
OperatingSystemVersionInfo.
!operating_system_version_constant (	H �B$
"_operating_system_version_constant"o
AppPaymentModelInfoX
type (2J.google.ads.googleads.v6.enums.AppPaymentModelTypeEnum.AppPaymentModelType"R
MobileDeviceInfo#
mobile_device_constant (	H �B
_mobile_device_constant"F
CustomAffinityInfo
custom_affinity (	H �B
_custom_affinity"@
CustomIntentInfo
custom_intent (	H �B
_custom_intent"�
LocationGroupInfo
feed (	H �
geo_target_constants (	
radius (H�j
radius_units (2T.google.ads.googleads.v6.enums.LocationGroupRadiusUnitsEnum.LocationGroupRadiusUnits
feed_item_sets (	B
_feedB	
_radius"-
CustomAudienceInfo
custom_audience (	"1
CombinedAudienceInfo
combined_audience (	B�
"com.google.ads.googleads.v6.commonBCriteriaProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
7google/ads/googleads/v6/enums/bid_modifier_source.protogoogle.ads.googleads.v6.enums"f
BidModifierSourceEnum"M
BidModifierSource
UNSPECIFIED 
UNKNOWN
CAMPAIGN
AD_GROUPB�
!com.google.ads.googleads.v6.enumsBBidModifierSourceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
9google/ads/googleads/v6/enums/response_content_type.protogoogle.ads.googleads.v6.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v6.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
=google/ads/googleads/v6/resources/ad_group_bid_modifier.proto!google.ads.googleads.v6.resources7google/ads/googleads/v6/enums/bid_modifier_source.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
AdGroupBidModifierJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AdGroupBidModifier?
ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH�
criterion_id (B�AH�
bid_modifier (H�D
base_ad_group (	B(�A�A"
 googleads.googleapis.com/AdGroupH�h
bid_modifier_source
 (2F.google.ads.googleads.v6.enums.BidModifierSourceEnum.BidModifierSourceB�Ad
hotel_date_selection_type (2:.google.ads.googleads.v6.common.HotelDateSelectionTypeInfoB�AH j
hotel_advance_booking_window (2=.google.ads.googleads.v6.common.HotelAdvanceBookingWindowInfoB�AH Z
hotel_length_of_stay (25.google.ads.googleads.v6.common.HotelLengthOfStayInfoB�AH V
hotel_check_in_day (23.google.ads.googleads.v6.common.HotelCheckInDayInfoB�AH A
device (2*.google.ads.googleads.v6.common.DeviceInfoB�AH V
preferred_content (24.google.ads.googleads.v6.common.PreferredContentInfoB�AH :z�Aw
+googleads.googleapis.com/AdGroupBidModifierHcustomers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}B
	criterionB
	_ad_groupB
_criterion_idB
_bid_modifierB
_base_ad_groupB�
%com.google.ads.googleads.v6.resourcesBAdGroupBidModifierProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
Dgoogle/ads/googleads/v6/services/ad_group_bid_modifier_service.proto google.ads.googleads.v6.services=google/ads/googleads/v6/resources/ad_group_bid_modifier.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"j
GetAdGroupBidModifierRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/AdGroupBidModifier"�
 MutateAdGroupBidModifiersRequest
customer_id (	B�AV

operations (2=.google.ads.googleads.v6.services.AdGroupBidModifierOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v6.enums.ResponseContentTypeEnum.ResponseContentType"�
AdGroupBidModifierOperation/
update_mask (2.google.protobuf.FieldMaskG
create (25.google.ads.googleads.v6.resources.AdGroupBidModifierH G
update (25.google.ads.googleads.v6.resources.AdGroupBidModifierH 
remove (	H B
	operation"�
!MutateAdGroupBidModifiersResponse1
partial_failure_error (2.google.rpc.StatusQ
results (2@.google.ads.googleads.v6.services.MutateAdGroupBidModifierResult"�
MutateAdGroupBidModifierResult
resource_name (	T
ad_group_bid_modifier (25.google.ads.googleads.v6.resources.AdGroupBidModifier2�
AdGroupBidModifierService�
GetAdGroupBidModifier>.google.ads.googleads.v6.services.GetAdGroupBidModifierRequest5.google.ads.googleads.v6.resources.AdGroupBidModifier"M���75/v6/{resource_name=customers/*/adGroupBidModifiers/*}�Aresource_name�
MutateAdGroupBidModifiersB.google.ads.googleads.v6.services.MutateAdGroupBidModifiersRequestC.google.ads.googleads.v6.services.MutateAdGroupBidModifiersResponse"\\���="8/v6/customers/{customer_id=*}/adGroupBidModifiers:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBAdGroupBidModifierServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

