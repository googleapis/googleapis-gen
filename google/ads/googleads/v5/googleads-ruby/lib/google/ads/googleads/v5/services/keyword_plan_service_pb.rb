# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/keyword_plan_service.proto

require 'google/protobuf'

require 'google/ads/googleads/v5/common/keyword_plan_common_pb'
require 'google/ads/googleads/v5/resources/keyword_plan_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/field_mask_pb'
require 'google/protobuf/wrappers_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/services/keyword_plan_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.services.GetKeywordPlanRequest" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v5.services.MutateKeywordPlansRequest" do
      optional :customer_id, :string, 1
      repeated :operations, :message, 2, "google.ads.googleads.v5.services.KeywordPlanOperation"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanOperation" do
      optional :update_mask, :message, 4, "google.protobuf.FieldMask"
      oneof :operation do
        optional :create, :message, 1, "google.ads.googleads.v5.resources.KeywordPlan"
        optional :update, :message, 2, "google.ads.googleads.v5.resources.KeywordPlan"
        optional :remove, :string, 3
      end
    end
    add_message "google.ads.googleads.v5.services.MutateKeywordPlansResponse" do
      optional :partial_failure_error, :message, 3, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v5.services.MutateKeywordPlansResult"
    end
    add_message "google.ads.googleads.v5.services.MutateKeywordPlansResult" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastCurveRequest" do
      optional :keyword_plan, :string, 1
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastCurveResponse" do
      repeated :campaign_forecast_curves, :message, 1, "google.ads.googleads.v5.services.KeywordPlanCampaignForecastCurve"
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastTimeSeriesRequest" do
      optional :keyword_plan, :string, 1
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastTimeSeriesResponse" do
      repeated :weekly_time_series_forecasts, :message, 1, "google.ads.googleads.v5.services.KeywordPlanWeeklyTimeSeriesForecast"
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastMetricsRequest" do
      optional :keyword_plan, :string, 1
    end
    add_message "google.ads.googleads.v5.services.GenerateForecastMetricsResponse" do
      repeated :campaign_forecasts, :message, 1, "google.ads.googleads.v5.services.KeywordPlanCampaignForecast"
      repeated :ad_group_forecasts, :message, 2, "google.ads.googleads.v5.services.KeywordPlanAdGroupForecast"
      repeated :keyword_forecasts, :message, 3, "google.ads.googleads.v5.services.KeywordPlanKeywordForecast"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanCampaignForecast" do
      optional :keyword_plan_campaign, :message, 1, "google.protobuf.StringValue"
      optional :campaign_forecast, :message, 2, "google.ads.googleads.v5.services.ForecastMetrics"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanAdGroupForecast" do
      optional :keyword_plan_ad_group, :message, 1, "google.protobuf.StringValue"
      optional :ad_group_forecast, :message, 2, "google.ads.googleads.v5.services.ForecastMetrics"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanKeywordForecast" do
      optional :keyword_plan_ad_group_keyword, :message, 1, "google.protobuf.StringValue"
      optional :keyword_forecast, :message, 2, "google.ads.googleads.v5.services.ForecastMetrics"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanCampaignForecastCurve" do
      optional :keyword_plan_campaign, :message, 1, "google.protobuf.StringValue"
      optional :max_cpc_bid_forecast_curve, :message, 2, "google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecastCurve"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecastCurve" do
      repeated :max_cpc_bid_forecasts, :message, 1, "google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecast"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecast" do
      optional :max_cpc_bid_micros, :message, 1, "google.protobuf.Int64Value"
      optional :max_cpc_bid_forecast, :message, 2, "google.ads.googleads.v5.services.ForecastMetrics"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanWeeklyTimeSeriesForecast" do
      proto3_optional :keyword_plan_campaign, :string, 1
      repeated :weekly_forecasts, :message, 2, "google.ads.googleads.v5.services.KeywordPlanWeeklyForecast"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanWeeklyForecast" do
      proto3_optional :start_date, :string, 1
      optional :forecast, :message, 2, "google.ads.googleads.v5.services.ForecastMetrics"
    end
    add_message "google.ads.googleads.v5.services.ForecastMetrics" do
      optional :impressions, :message, 1, "google.protobuf.DoubleValue"
      optional :ctr, :message, 2, "google.protobuf.DoubleValue"
      optional :average_cpc, :message, 3, "google.protobuf.Int64Value"
      optional :clicks, :message, 5, "google.protobuf.DoubleValue"
      optional :cost_micros, :message, 6, "google.protobuf.Int64Value"
    end
    add_message "google.ads.googleads.v5.services.GenerateHistoricalMetricsRequest" do
      optional :keyword_plan, :string, 1
    end
    add_message "google.ads.googleads.v5.services.GenerateHistoricalMetricsResponse" do
      repeated :metrics, :message, 1, "google.ads.googleads.v5.services.KeywordPlanKeywordHistoricalMetrics"
    end
    add_message "google.ads.googleads.v5.services.KeywordPlanKeywordHistoricalMetrics" do
      optional :search_query, :message, 1, "google.protobuf.StringValue"
      repeated :close_variants, :string, 3
      optional :keyword_metrics, :message, 2, "google.ads.googleads.v5.common.KeywordPlanHistoricalMetrics"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Services
          GetKeywordPlanRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GetKeywordPlanRequest").msgclass
          MutateKeywordPlansRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.MutateKeywordPlansRequest").msgclass
          KeywordPlanOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanOperation").msgclass
          MutateKeywordPlansResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.MutateKeywordPlansResponse").msgclass
          MutateKeywordPlansResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.MutateKeywordPlansResult").msgclass
          GenerateForecastCurveRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastCurveRequest").msgclass
          GenerateForecastCurveResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastCurveResponse").msgclass
          GenerateForecastTimeSeriesRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastTimeSeriesRequest").msgclass
          GenerateForecastTimeSeriesResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastTimeSeriesResponse").msgclass
          GenerateForecastMetricsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastMetricsRequest").msgclass
          GenerateForecastMetricsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateForecastMetricsResponse").msgclass
          KeywordPlanCampaignForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanCampaignForecast").msgclass
          KeywordPlanAdGroupForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanAdGroupForecast").msgclass
          KeywordPlanKeywordForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanKeywordForecast").msgclass
          KeywordPlanCampaignForecastCurve = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanCampaignForecastCurve").msgclass
          KeywordPlanMaxCpcBidForecastCurve = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecastCurve").msgclass
          KeywordPlanMaxCpcBidForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanMaxCpcBidForecast").msgclass
          KeywordPlanWeeklyTimeSeriesForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanWeeklyTimeSeriesForecast").msgclass
          KeywordPlanWeeklyForecast = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanWeeklyForecast").msgclass
          ForecastMetrics = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.ForecastMetrics").msgclass
          GenerateHistoricalMetricsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateHistoricalMetricsRequest").msgclass
          GenerateHistoricalMetricsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.GenerateHistoricalMetricsResponse").msgclass
          KeywordPlanKeywordHistoricalMetrics = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.services.KeywordPlanKeywordHistoricalMetrics").msgclass
        end
      end
    end
  end
end
