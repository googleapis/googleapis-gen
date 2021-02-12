<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/campaign_criterion_simulation.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class CampaignCriterionSimulation
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
�
/google/ads/googleads/v4/common/simulation.protogoogle.ads.googleads.v4.commongoogle/api/annotations.proto"l
BidModifierSimulationPointListJ
points (2:.google.ads.googleads.v4.common.BidModifierSimulationPoint"b
CpcBidSimulationPointListE
points (25.google.ads.googleads.v4.common.CpcBidSimulationPoint"b
CpvBidSimulationPointListE
points (25.google.ads.googleads.v4.common.CpvBidSimulationPoint"h
TargetCpaSimulationPointListH
points (28.google.ads.googleads.v4.common.TargetCpaSimulationPoint"j
TargetRoasSimulationPointListI
points (29.google.ads.googleads.v4.common.TargetRoasSimulationPoint"�
BidModifierSimulationPoint2
bid_modifier (2.google.protobuf.DoubleValue:
biddable_conversions (2.google.protobuf.DoubleValue@
biddable_conversions_value (2.google.protobuf.DoubleValue+
clicks (2.google.protobuf.Int64Value0
cost_micros (2.google.protobuf.Int64Value0
impressions (2.google.protobuf.Int64Value9
top_slot_impressions (2.google.protobuf.Int64ValueA
parent_biddable_conversions (2.google.protobuf.DoubleValueG
!parent_biddable_conversions_value	 (2.google.protobuf.DoubleValue2
parent_clicks
 (2.google.protobuf.Int64Value7
parent_cost_micros (2.google.protobuf.Int64Value7
parent_impressions (2.google.protobuf.Int64Value@
parent_top_slot_impressions (2.google.protobuf.Int64ValueB
parent_required_budget_micros (2.google.protobuf.Int64Value"�
CpcBidSimulationPoint3
cpc_bid_micros (2.google.protobuf.Int64Value:
biddable_conversions (2.google.protobuf.DoubleValue@
biddable_conversions_value (2.google.protobuf.DoubleValue+
clicks (2.google.protobuf.Int64Value0
cost_micros (2.google.protobuf.Int64Value0
impressions (2.google.protobuf.Int64Value9
top_slot_impressions (2.google.protobuf.Int64Value"�
CpvBidSimulationPoint3
cpv_bid_micros (2.google.protobuf.Int64Value0
cost_micros (2.google.protobuf.Int64Value0
impressions (2.google.protobuf.Int64Value*
views (2.google.protobuf.Int64Value"�
TargetCpaSimulationPoint6
target_cpa_micros (2.google.protobuf.Int64Value:
biddable_conversions (2.google.protobuf.DoubleValue@
biddable_conversions_value (2.google.protobuf.DoubleValue+
clicks (2.google.protobuf.Int64Value0
cost_micros (2.google.protobuf.Int64Value0
impressions (2.google.protobuf.Int64Value9
top_slot_impressions (2.google.protobuf.Int64Value"�
TargetRoasSimulationPoint1
target_roas (2.google.protobuf.DoubleValue:
biddable_conversions (2.google.protobuf.DoubleValue@
biddable_conversions_value (2.google.protobuf.DoubleValue+
clicks (2.google.protobuf.Int64Value0
cost_micros (2.google.protobuf.Int64Value0
impressions (2.google.protobuf.Int64Value9
top_slot_impressions (2.google.protobuf.Int64ValueB�
"com.google.ads.googleads.v4.commonBSimulationProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3
�
Bgoogle/ads/googleads/v4/enums/simulation_modification_method.protogoogle.ads.googleads.v4.enums"z
 SimulationModificationMethodEnum"V
SimulationModificationMethod
UNSPECIFIED 
UNKNOWN
UNIFORM
DEFAULTB�
!com.google.ads.googleads.v4.enumsB!SimulationModificationMethodProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
3google/ads/googleads/v4/enums/simulation_type.protogoogle.ads.googleads.v4.enums"�
SimulationTypeEnum"{
SimulationType
UNSPECIFIED 
UNKNOWN
CPC_BID
CPV_BID

TARGET_CPA
BID_MODIFIER
TARGET_ROASB�
!com.google.ads.googleads.v4.enumsBSimulationTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
Egoogle/ads/googleads/v4/resources/campaign_criterion_simulation.proto!google.ads.googleads.v4.resourcesBgoogle/ads/googleads/v4/enums/simulation_modification_method.proto3google/ads/googleads/v4/enums/simulation_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
CampaignCriterionSimulationS
resource_name (	B<�A�A6
4googleads.googleapis.com/CampaignCriterionSimulation5
campaign_id (2.google.protobuf.Int64ValueB�A6
criterion_id (2.google.protobuf.Int64ValueB�AS
type (2@.google.ads.googleads.v4.enums.SimulationTypeEnum.SimulationTypeB�A~
modification_method (2\\.google.ads.googleads.v4.enums.SimulationModificationMethodEnum.SimulationModificationMethodB�A5

start_date (2.google.protobuf.StringValueB�A3
end_date (2.google.protobuf.StringValueB�Af
bid_modifier_point_list (2>.google.ads.googleads.v4.common.BidModifierSimulationPointListB�AH :��A�
4googleads.googleapis.com/CampaignCriterionSimulationQcustomers/{customer}/campaignCriterionSimulations/{campaign_criterion_simulation}B

point_listB�
%com.google.ads.googleads.v4.resourcesB CampaignCriterionSimulationProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

