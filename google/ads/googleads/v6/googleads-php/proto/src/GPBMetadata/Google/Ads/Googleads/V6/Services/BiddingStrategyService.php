<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/bidding_strategy_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class BiddingStrategyService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v6/enums/target_impression_share_location.protogoogle.ads.googleads.v6.enums"�
!TargetImpressionShareLocationEnum"~
TargetImpressionShareLocation
UNSPECIFIED 
UNKNOWN
ANYWHERE_ON_PAGE
TOP_OF_PAGE
ABSOLUTE_TOP_OF_PAGEB�
!com.google.ads.googleads.v6.enumsB"TargetImpressionShareLocationProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
,google/ads/googleads/v6/common/bidding.protogoogle.ads.googleads.v6.commongoogle/api/annotations.proto"L

Commission#
commission_rate_micros (H �B
_commission_rate_micros"
EnhancedCpc"G
	ManualCpc!
enhanced_cpc_enabled (H �B
_enhanced_cpc_enabled"
	ManualCpm"
	ManualCpv")
MaximizeConversions

target_cpa ("C
MaximizeConversionValue
target_roas (H �B
_target_roas"�
	TargetCpa
target_cpa_micros (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_cpa_microsB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"
	TargetCpm"�
TargetImpressionSharep
location (2^.google.ads.googleads.v6.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation%
location_fraction_micros (H �#
cpc_bid_ceiling_micros (H�B
_location_fraction_microsB
_cpc_bid_ceiling_micros"�

TargetRoas
target_roas (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_roasB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"�
TargetSpend$
target_spend_micros (BH �#
cpc_bid_ceiling_micros (H�B
_target_spend_microsB
_cpc_bid_ceiling_micros"�

PercentCpc#
cpc_bid_ceiling_micros (H �!
enhanced_cpc_enabled (H�B
_cpc_bid_ceiling_microsB
_enhanced_cpc_enabledB�
"com.google.ads.googleads.v6.commonBBiddingProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
;google/ads/googleads/v6/enums/bidding_strategy_status.protogoogle.ads.googleads.v6.enums"l
BiddingStrategyStatusEnum"O
BiddingStrategyStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v6.enumsBBiddingStrategyStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
9google/ads/googleads/v6/enums/bidding_strategy_type.protogoogle.ads.googleads.v6.enums"�
BiddingStrategyTypeEnum"�
BiddingStrategyType
UNSPECIFIED 
UNKNOWN

COMMISSION
ENHANCED_CPC

MANUAL_CPC

MANUAL_CPM

MANUAL_CPV
MAXIMIZE_CONVERSIONS

MAXIMIZE_CONVERSION_VALUE
PAGE_ONE_PROMOTED
PERCENT_CPC

TARGET_CPA

TARGET_CPM
TARGET_IMPRESSION_SHARE
TARGET_OUTRANK_SHARE
TARGET_ROAS
TARGET_SPEND	B�
!com.google.ads.googleads.v6.enumsBBiddingStrategyTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
8google/ads/googleads/v6/resources/bidding_strategy.proto!google.ads.googleads.v6.resources;google/ads/googleads/v6/enums/bidding_strategy_status.proto9google/ads/googleads/v6/enums/bidding_strategy_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�	
BiddingStrategyG
resource_name (	B0�A�A*
(googleads.googleapis.com/BiddingStrategy
id (B�AH�
name (	H�c
status (2N.google.ads.googleads.v6.enums.BiddingStrategyStatusEnum.BiddingStrategyStatusB�A]
type (2J.google.ads.googleads.v6.enums.BiddingStrategyTypeEnum.BiddingStrategyTypeB�A)
effective_currency_code (	B�AH� 
campaign_count (B�AH�,
non_removed_campaign_count (B�AH�C
enhanced_cpc (2+.google.ads.googleads.v6.common.EnhancedCpcH \\
maximize_conversion_value (27.google.ads.googleads.v6.common.MaximizeConversionValueH S
maximize_conversions (23.google.ads.googleads.v6.common.MaximizeConversionsH ?

target_cpa	 (2).google.ads.googleads.v6.common.TargetCpaH X
target_impression_share0 (25.google.ads.googleads.v6.common.TargetImpressionShareH A
target_roas (2*.google.ads.googleads.v6.common.TargetRoasH C
target_spend (2+.google.ads.googleads.v6.common.TargetSpendH :n�Ak
(googleads.googleapis.com/BiddingStrategy?customers/{customer_id}/biddingStrategies/{bidding_strategy_id}B
schemeB
_idB
_nameB
_effective_currency_codeB
_campaign_countB
_non_removed_campaign_countB�
%com.google.ads.googleads.v6.resourcesBBiddingStrategyProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
?google/ads/googleads/v6/services/bidding_strategy_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"d
GetBiddingStrategyRequestG
resource_name (	B0�A�A*
(googleads.googleapis.com/BiddingStrategy"�
MutateBiddingStrategiesRequest
customer_id (	B�AS

operations (2:.google.ads.googleads.v6.services.BiddingStrategyOperationB�A
partial_failure (
validate_only ("�
BiddingStrategyOperation/
update_mask (2.google.protobuf.FieldMaskD
create (22.google.ads.googleads.v6.resources.BiddingStrategyH D
update (22.google.ads.googleads.v6.resources.BiddingStrategyH 
remove (	H B
	operation"�
MutateBiddingStrategiesResponse1
partial_failure_error (2.google.rpc.StatusN
results (2=.google.ads.googleads.v6.services.MutateBiddingStrategyResult"4
MutateBiddingStrategyResult
resource_name (	2�
BiddingStrategyService�
GetBiddingStrategy;.google.ads.googleads.v6.services.GetBiddingStrategyRequest2.google.ads.googleads.v6.resources.BiddingStrategy"K���53/v6/{resource_name=customers/*/biddingStrategies/*}�Aresource_name�
MutateBiddingStrategies@.google.ads.googleads.v6.services.MutateBiddingStrategiesRequestA.google.ads.googleads.v6.services.MutateBiddingStrategiesResponse"Z���;"6/v6/customers/{customer_id=*}/biddingStrategies:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBBiddingStrategyServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

