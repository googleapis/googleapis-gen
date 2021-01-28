<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class KeywordPlanService
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
�
*google/ads/googleads/v6/common/dates.protogoogle.ads.googleads.v6.common"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_dateB�
"com.google.ads.googleads.v6.commonB
DatesProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
Bgoogle/ads/googleads/v6/enums/keyword_plan_competition_level.protogoogle.ads.googleads.v6.enums"}
KeywordPlanCompetitionLevelEnum"Z
KeywordPlanCompetitionLevel
UNSPECIFIED 
UNKNOWN
LOW

MEDIUM
HIGHB�
!com.google.ads.googleads.v6.enumsB KeywordPlanCompetitionLevelProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
1google/ads/googleads/v6/enums/month_of_year.protogoogle.ads.googleads.v6.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
!com.google.ads.googleads.v6.enumsBMonthOfYearProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
8google/ads/googleads/v6/common/keyword_plan_common.protogoogle.ads.googleads.v6.common1google/ads/googleads/v6/enums/month_of_year.protogoogle/api/annotations.proto"�
KeywordPlanHistoricalMetrics!
avg_monthly_searches (H �S
monthly_search_volumes (23.google.ads.googleads.v6.common.MonthlySearchVolumeo
competition (2Z.google.ads.googleads.v6.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel
competition_index (H�\'
low_top_of_page_bid_micros	 (H�(
high_top_of_page_bid_micros
 (H�B
_avg_monthly_searchesB
_competition_indexB
_low_top_of_page_bid_microsB
_high_top_of_page_bid_micros"�
MonthlySearchVolume
year (H �I
month (2:.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear
monthly_searches (H�B
_yearB
_monthly_searchesB�
"com.google.ads.googleads.v6.commonBKeywordPlanCommonProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v6/common;common�GAA�Google.Ads.GoogleAds.V6.Common�Google\\Ads\\GoogleAds\\V6\\Common�"Google::Ads::GoogleAds::V6::Commonbproto3
�
Bgoogle/ads/googleads/v6/enums/keyword_plan_forecast_interval.protogoogle.ads.googleads.v6.enums"�
KeywordPlanForecastIntervalEnum"l
KeywordPlanForecastInterval
UNSPECIFIED 
UNKNOWN
	NEXT_WEEK

NEXT_MONTH
NEXT_QUARTERB�
!com.google.ads.googleads.v6.enumsB KeywordPlanForecastIntervalProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
4google/ads/googleads/v6/resources/keyword_plan.proto!google.ads.googleads.v6.resourcesBgoogle/ads/googleads/v6/enums/keyword_plan_forecast_interval.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
KeywordPlanC
resource_name (	B,�A�A&
$googleads.googleapis.com/KeywordPlan
id (B�AH �
name (	H�U
forecast_period (2<.google.ads.googleads.v6.resources.KeywordPlanForecastPeriod:a�A^
$googleads.googleapis.com/KeywordPlan6customers/{customer_id}/keywordPlans/{keyword_plan_id}B
_idB
_name"�
KeywordPlanForecastPeriods
date_interval (2Z.google.ads.googleads.v6.enums.KeywordPlanForecastIntervalEnum.KeywordPlanForecastIntervalH ?

date_range (2).google.ads.googleads.v6.common.DateRangeH B

intervalB�
%com.google.ads.googleads.v6.resourcesBKeywordPlanProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�-
;google/ads/googleads/v6/services/keyword_plan_service.proto google.ads.googleads.v6.services4google/ads/googleads/v6/resources/keyword_plan.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"\\
GetKeywordPlanRequestC
resource_name (	B,�A�A&
$googleads.googleapis.com/KeywordPlan"�
MutateKeywordPlansRequest
customer_id (	B�AO

operations (26.google.ads.googleads.v6.services.KeywordPlanOperationB�A
partial_failure (
validate_only ("�
KeywordPlanOperation/
update_mask (2.google.protobuf.FieldMask@
create (2..google.ads.googleads.v6.resources.KeywordPlanH @
update (2..google.ads.googleads.v6.resources.KeywordPlanH ;
remove (	B)�A&
$googleads.googleapis.com/KeywordPlanH B
	operation"�
MutateKeywordPlansResponse1
partial_failure_error (2.google.rpc.StatusK
results (2:.google.ads.googleads.v6.services.MutateKeywordPlansResult"1
MutateKeywordPlansResult
resource_name (	"b
GenerateForecastCurveRequestB
keyword_plan (	B,�A�A&
$googleads.googleapis.com/KeywordPlan"�
GenerateForecastCurveResponsed
campaign_forecast_curves (2B.google.ads.googleads.v6.services.KeywordPlanCampaignForecastCurve"g
!GenerateForecastTimeSeriesRequestB
keyword_plan (	B,�A�A&
$googleads.googleapis.com/KeywordPlan"�
"GenerateForecastTimeSeriesResponsek
weekly_time_series_forecasts (2E.google.ads.googleads.v6.services.KeywordPlanWeeklyTimeSeriesForecast"d
GenerateForecastMetricsRequestB
keyword_plan (	B,�A�A&
$googleads.googleapis.com/KeywordPlan"�
GenerateForecastMetricsResponseY
campaign_forecasts (2=.google.ads.googleads.v6.services.KeywordPlanCampaignForecastX
ad_group_forecasts (2<.google.ads.googleads.v6.services.KeywordPlanAdGroupForecastW
keyword_forecasts (2<.google.ads.googleads.v6.services.KeywordPlanKeywordForecast"�
KeywordPlanCampaignForecast"
keyword_plan_campaign (	H �L
campaign_forecast (21.google.ads.googleads.v6.services.ForecastMetricsB
_keyword_plan_campaign"�
KeywordPlanAdGroupForecast"
keyword_plan_ad_group (	H �L
ad_group_forecast (21.google.ads.googleads.v6.services.ForecastMetricsB
_keyword_plan_ad_group"�
KeywordPlanKeywordForecast*
keyword_plan_ad_group_keyword (	H �K
keyword_forecast (21.google.ads.googleads.v6.services.ForecastMetricsB 
_keyword_plan_ad_group_keyword"�
 KeywordPlanCampaignForecastCurve"
keyword_plan_campaign (	H �g
max_cpc_bid_forecast_curve (2C.google.ads.googleads.v6.services.KeywordPlanMaxCpcBidForecastCurveB
_keyword_plan_campaign"�
!KeywordPlanMaxCpcBidForecastCurve]
max_cpc_bid_forecasts (2>.google.ads.googleads.v6.services.KeywordPlanMaxCpcBidForecast"�
KeywordPlanMaxCpcBidForecast
max_cpc_bid_micros (H �O
max_cpc_bid_forecast (21.google.ads.googleads.v6.services.ForecastMetricsB
_max_cpc_bid_micros"�
#KeywordPlanWeeklyTimeSeriesForecast"
keyword_plan_campaign (	H �U
weekly_forecasts (2;.google.ads.googleads.v6.services.KeywordPlanWeeklyForecastB
_keyword_plan_campaign"�
KeywordPlanWeeklyForecast

start_date (	H �C
forecast (21.google.ads.googleads.v6.services.ForecastMetricsB
_start_date"�
ForecastMetrics
impressions (H �
ctr (H�
average_cpc	 (H�
clicks
 (H�
cost_micros (H�B
_impressionsB
_ctrB
_average_cpcB	
_clicksB
_cost_micros"f
 GenerateHistoricalMetricsRequestB
keyword_plan (	B,�A�A&
$googleads.googleapis.com/KeywordPlan"{
!GenerateHistoricalMetricsResponseV
metrics (2E.google.ads.googleads.v6.services.KeywordPlanKeywordHistoricalMetrics"�
#KeywordPlanKeywordHistoricalMetrics
search_query (	H �
close_variants (	U
keyword_metrics (2<.google.ads.googleads.v6.common.KeywordPlanHistoricalMetricsB
_search_query2�
KeywordPlanService�
GetKeywordPlan7.google.ads.googleads.v6.services.GetKeywordPlanRequest..google.ads.googleads.v6.resources.KeywordPlan"F���0./v6/{resource_name=customers/*/keywordPlans/*}�Aresource_name�
MutateKeywordPlans;.google.ads.googleads.v6.services.MutateKeywordPlansRequest<.google.ads.googleads.v6.services.MutateKeywordPlansResponse"U���6"1/v6/customers/{customer_id=*}/keywordPlans:mutate:*�Acustomer_id,operations�
GenerateForecastCurve>.google.ads.googleads.v6.services.GenerateForecastCurveRequest?.google.ads.googleads.v6.services.GenerateForecastCurveResponse"]���H"C/v6/{keyword_plan=customers/*/keywordPlans/*}:generateForecastCurve:*�Akeyword_plan�
GenerateForecastTimeSeriesC.google.ads.googleads.v6.services.GenerateForecastTimeSeriesRequestD.google.ads.googleads.v6.services.GenerateForecastTimeSeriesResponse"b���M"H/v6/{keyword_plan=customers/*/keywordPlans/*}:generateForecastTimeSeries:*�Akeyword_plan�
GenerateForecastMetrics@.google.ads.googleads.v6.services.GenerateForecastMetricsRequestA.google.ads.googleads.v6.services.GenerateForecastMetricsResponse"_���J"E/v6/{keyword_plan=customers/*/keywordPlans/*}:generateForecastMetrics:*�Akeyword_plan�
GenerateHistoricalMetricsB.google.ads.googleads.v6.services.GenerateHistoricalMetricsRequestC.google.ads.googleads.v6.services.GenerateHistoricalMetricsResponse"a���L"G/v6/{keyword_plan=customers/*/keywordPlans/*}:generateHistoricalMetrics:*�Akeyword_planE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBKeywordPlanServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

