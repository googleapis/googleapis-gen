<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/metrics.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Common;

class Metrics
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
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v4/enums/interaction_event_type.protogoogle.ads.googleads.v4.enums"�
InteractionEventTypeEnum"i
InteractionEventType
UNSPECIFIED 
UNKNOWN	
CLICK

ENGAGEMENT

VIDEO_VIEW
NONEB�
!com.google.ads.googleads.v4.enumsBInteractionEventTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
8google/ads/googleads/v4/enums/quality_score_bucket.protogoogle.ads.googleads.v4.enums"
QualityScoreBucketEnum"e
QualityScoreBucket
UNSPECIFIED 
UNKNOWN
BELOW_AVERAGE
AVERAGE
ABOVE_AVERAGEB�
!com.google.ads.googleads.v4.enumsBQualityScoreBucketProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�=
,google/ads/googleads/v4/common/metrics.protogoogle.ads.googleads.v4.common8google/ads/googleads/v4/enums/quality_score_bucket.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�:
MetricsH
"absolute_top_impression_percentage_ (2.google.protobuf.DoubleValue5
active_view_cpm (2.google.protobuf.DoubleValue5
active_view_ctrO (2.google.protobuf.DoubleValue<
active_view_impressions (2.google.protobuf.Int64Value?
active_view_measurability` (2.google.protobuf.DoubleValueG
"active_view_measurable_cost_micros (2.google.protobuf.Int64ValueG
"active_view_measurable_impressions (2.google.protobuf.Int64Value=
active_view_viewabilitya (2.google.protobuf.DoubleValueL
&all_conversions_from_interactions_rateA (2.google.protobuf.DoubleValue;
all_conversions_valueB (2.google.protobuf.DoubleValue5
all_conversions (2.google.protobuf.DoubleValueD
all_conversions_value_per_cost> (2.google.protobuf.DoubleValueH
"all_conversions_from_click_to_callv (2.google.protobuf.DoubleValueE
all_conversions_from_directionsw (2.google.protobuf.DoubleValue]
7all_conversions_from_interactions_value_per_interactionC (2.google.protobuf.DoubleValue?
all_conversions_from_menux (2.google.protobuf.DoubleValue@
all_conversions_from_ordery (2.google.protobuf.DoubleValueK
%all_conversions_from_other_engagementz (2.google.protobuf.DoubleValueF
 all_conversions_from_store_visit{ (2.google.protobuf.DoubleValueH
"all_conversions_from_store_website| (2.google.protobuf.DoubleValue2
average_cost (2.google.protobuf.DoubleValue1
average_cpc	 (2.google.protobuf.DoubleValue1
average_cpeb (2.google.protobuf.DoubleValue1
average_cpm
 (2.google.protobuf.DoubleValue1
average_cpv (2.google.protobuf.DoubleValue8
average_page_viewsc (2.google.protobuf.DoubleValue:
average_time_on_siteT (2.google.protobuf.DoubleValue?
benchmark_average_max_cpc (2.google.protobuf.DoubleValue3
benchmark_ctrM (2.google.protobuf.DoubleValue1
bounce_rate (2.google.protobuf.DoubleValue+
clicks (2.google.protobuf.Int64Value4
combined_clickss (2.google.protobuf.Int64Value?
combined_clicks_per_queryt (2.google.protobuf.DoubleValue5
combined_queriesu (2.google.protobuf.Int64ValueJ
$content_budget_lost_impression_share (2.google.protobuf.DoubleValue>
content_impression_share (2.google.protobuf.DoubleValueP
*conversion_last_received_request_date_timeI (2.google.protobuf.StringValueE
conversion_last_conversion_dateJ (2.google.protobuf.StringValueH
"content_rank_lost_impression_share (2.google.protobuf.DoubleValueH
"conversions_from_interactions_rateE (2.google.protobuf.DoubleValue7
conversions_valueF (2.google.protobuf.DoubleValue@
conversions_value_per_costG (2.google.protobuf.DoubleValueY
3conversions_from_interactions_value_per_interactionH (2.google.protobuf.DoubleValue1
conversions (2.google.protobuf.DoubleValue0
cost_micros (2.google.protobuf.Int64Value>
cost_per_all_conversionsD (2.google.protobuf.DoubleValue9
cost_per_conversion (2.google.protobuf.DoubleValueR
,cost_per_current_model_attributed_conversionj (2.google.protobuf.DoubleValue>
cross_device_conversions (2.google.protobuf.DoubleValue)
ctr (2.google.protobuf.DoubleValueJ
$current_model_attributed_conversionse (2.google.protobuf.DoubleValuea
;current_model_attributed_conversions_from_interactions_ratef (2.google.protobuf.DoubleValuer
Lcurrent_model_attributed_conversions_from_interactions_value_per_interactiong (2.google.protobuf.DoubleValueP
*current_model_attributed_conversions_valueh (2.google.protobuf.DoubleValueY
3current_model_attributed_conversions_value_per_costi (2.google.protobuf.DoubleValue5
engagement_rate (2.google.protobuf.DoubleValue0
engagements  (2.google.protobuf.Int64ValueE
hotel_average_lead_value_microsK (2.google.protobuf.DoubleValueH
!hotel_price_difference_percentage� (2.google.protobuf.DoubleValue@
hotel_eligible_impressions� (2.google.protobuf.Int64Values
!historical_creative_quality_scoreP (2H.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucketw
%historical_landing_page_quality_scoreQ (2H.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket=
historical_quality_scoreR (2.google.protobuf.Int64Valueq
historical_search_predicted_ctrS (2H.google.ads.googleads.v4.enums.QualityScoreBucketEnum.QualityScoreBucket3
gmail_forwardsU (2.google.protobuf.Int64Value0
gmail_savesV (2.google.protobuf.Int64Value;
gmail_secondary_clicksW (2.google.protobuf.Int64ValueA
impressions_from_store_reach} (2.google.protobuf.Int64Value0
impressions% (2.google.protobuf.Int64Value6
interaction_rate& (2.google.protobuf.DoubleValue1
interactions\' (2.google.protobuf.Int64Valuem
interaction_event_typesd (2L.google.ads.googleads.v4.enums.InteractionEventTypeEnum.InteractionEventType8
invalid_click_rate( (2.google.protobuf.DoubleValue3
invalid_clicks) (2.google.protobuf.Int64Value2
message_chats~ (2.google.protobuf.Int64Value8
message_impressions (2.google.protobuf.Int64Value8
message_chat_rate� (2.google.protobuf.DoubleValueG
!mobile_friendly_clicks_percentagem (2.google.protobuf.DoubleValue3
organic_clicksn (2.google.protobuf.Int64Value>
organic_clicks_per_queryo (2.google.protobuf.DoubleValue8
organic_impressionsp (2.google.protobuf.Int64ValueC
organic_impressions_per_queryq (2.google.protobuf.DoubleValue4
organic_queriesr (2.google.protobuf.Int64Value:
percent_new_visitors* (2.google.protobuf.DoubleValue0
phone_calls+ (2.google.protobuf.Int64Value6
phone_impressions, (2.google.protobuf.Int64Value8
phone_through_rate- (2.google.protobuf.DoubleValue2
relative_ctr. (2.google.protobuf.DoubleValueJ
$search_absolute_top_impression_shareN (2.google.protobuf.DoubleValueV
0search_budget_lost_absolute_top_impression_shareX (2.google.protobuf.DoubleValueI
#search_budget_lost_impression_share/ (2.google.protobuf.DoubleValueM
\'search_budget_lost_top_impression_shareY (2.google.protobuf.DoubleValue8
search_click_share0 (2.google.protobuf.DoubleValueI
#search_exact_match_impression_share1 (2.google.protobuf.DoubleValue=
search_impression_share2 (2.google.protobuf.DoubleValueT
.search_rank_lost_absolute_top_impression_shareZ (2.google.protobuf.DoubleValueG
!search_rank_lost_impression_share3 (2.google.protobuf.DoubleValueK
%search_rank_lost_top_impression_share[ (2.google.protobuf.DoubleValueA
search_top_impression_share\\ (2.google.protobuf.DoubleValue0
speed_scorek (2.google.protobuf.Int64Value?
top_impression_percentage] (2.google.protobuf.DoubleValueV
0valid_accelerated_mobile_pages_clicks_percentagel (2.google.protobuf.DoubleValue?
value_per_all_conversions4 (2.google.protobuf.DoubleValue:
value_per_conversion5 (2.google.protobuf.DoubleValueS
-value_per_current_model_attributed_conversion^ (2.google.protobuf.DoubleValue=
video_quartile_100_rate6 (2.google.protobuf.DoubleValue<
video_quartile_25_rate7 (2.google.protobuf.DoubleValue<
video_quartile_50_rate8 (2.google.protobuf.DoubleValue<
video_quartile_75_rate9 (2.google.protobuf.DoubleValue5
video_view_rate: (2.google.protobuf.DoubleValue0
video_views; (2.google.protobuf.Int64Value=
view_through_conversions< (2.google.protobuf.Int64ValueB�
"com.google.ads.googleads.v4.commonBMetricsProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

