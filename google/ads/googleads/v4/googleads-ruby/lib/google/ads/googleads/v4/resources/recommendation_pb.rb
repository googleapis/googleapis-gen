# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/recommendation.proto

require 'google/protobuf'

require 'google/ads/googleads/v4/common/criteria_pb'
require 'google/ads/googleads/v4/common/extensions_pb'
require 'google/ads/googleads/v4/enums/keyword_match_type_pb'
require 'google/ads/googleads/v4/enums/recommendation_type_pb'
require 'google/ads/googleads/v4/enums/target_cpa_opt_in_recommendation_goal_pb'
require 'google/ads/googleads/v4/resources/ad_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v4/resources/recommendation.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v4.resources.Recommendation" do
      optional :resource_name, :string, 1
      optional :type, :enum, 2, "google.ads.googleads.v4.enums.RecommendationTypeEnum.RecommendationType"
      optional :impact, :message, 3, "google.ads.googleads.v4.resources.Recommendation.RecommendationImpact"
      optional :campaign_budget, :message, 5, "google.protobuf.StringValue"
      optional :campaign, :message, 6, "google.protobuf.StringValue"
      optional :ad_group, :message, 7, "google.protobuf.StringValue"
      optional :dismissed, :message, 13, "google.protobuf.BoolValue"
      oneof :recommendation do
        optional :campaign_budget_recommendation, :message, 4, "google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation"
        optional :keyword_recommendation, :message, 8, "google.ads.googleads.v4.resources.Recommendation.KeywordRecommendation"
        optional :text_ad_recommendation, :message, 9, "google.ads.googleads.v4.resources.Recommendation.TextAdRecommendation"
        optional :target_cpa_opt_in_recommendation, :message, 10, "google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation"
        optional :maximize_conversions_opt_in_recommendation, :message, 11, "google.ads.googleads.v4.resources.Recommendation.MaximizeConversionsOptInRecommendation"
        optional :enhanced_cpc_opt_in_recommendation, :message, 12, "google.ads.googleads.v4.resources.Recommendation.EnhancedCpcOptInRecommendation"
        optional :search_partners_opt_in_recommendation, :message, 14, "google.ads.googleads.v4.resources.Recommendation.SearchPartnersOptInRecommendation"
        optional :maximize_clicks_opt_in_recommendation, :message, 15, "google.ads.googleads.v4.resources.Recommendation.MaximizeClicksOptInRecommendation"
        optional :optimize_ad_rotation_recommendation, :message, 16, "google.ads.googleads.v4.resources.Recommendation.OptimizeAdRotationRecommendation"
        optional :callout_extension_recommendation, :message, 17, "google.ads.googleads.v4.resources.Recommendation.CalloutExtensionRecommendation"
        optional :sitelink_extension_recommendation, :message, 18, "google.ads.googleads.v4.resources.Recommendation.SitelinkExtensionRecommendation"
        optional :call_extension_recommendation, :message, 19, "google.ads.googleads.v4.resources.Recommendation.CallExtensionRecommendation"
        optional :keyword_match_type_recommendation, :message, 20, "google.ads.googleads.v4.resources.Recommendation.KeywordMatchTypeRecommendation"
        optional :move_unused_budget_recommendation, :message, 21, "google.ads.googleads.v4.resources.Recommendation.MoveUnusedBudgetRecommendation"
      end
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.RecommendationImpact" do
      optional :base_metrics, :message, 1, "google.ads.googleads.v4.resources.Recommendation.RecommendationMetrics"
      optional :potential_metrics, :message, 2, "google.ads.googleads.v4.resources.Recommendation.RecommendationMetrics"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.RecommendationMetrics" do
      optional :impressions, :message, 1, "google.protobuf.DoubleValue"
      optional :clicks, :message, 2, "google.protobuf.DoubleValue"
      optional :cost_micros, :message, 3, "google.protobuf.Int64Value"
      optional :conversions, :message, 4, "google.protobuf.DoubleValue"
      optional :video_views, :message, 5, "google.protobuf.DoubleValue"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation" do
      optional :current_budget_amount_micros, :message, 1, "google.protobuf.Int64Value"
      optional :recommended_budget_amount_micros, :message, 2, "google.protobuf.Int64Value"
      repeated :budget_options, :message, 3, "google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption" do
      optional :budget_amount_micros, :message, 1, "google.protobuf.Int64Value"
      optional :impact, :message, 2, "google.ads.googleads.v4.resources.Recommendation.RecommendationImpact"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.KeywordRecommendation" do
      optional :keyword, :message, 1, "google.ads.googleads.v4.common.KeywordInfo"
      optional :recommended_cpc_bid_micros, :message, 2, "google.protobuf.Int64Value"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.KeywordMatchTypeRecommendation" do
      optional :keyword, :message, 1, "google.ads.googleads.v4.common.KeywordInfo"
      optional :recommended_match_type, :enum, 2, "google.ads.googleads.v4.enums.KeywordMatchTypeEnum.KeywordMatchType"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.TextAdRecommendation" do
      optional :ad, :message, 1, "google.ads.googleads.v4.resources.Ad"
      optional :creation_date, :message, 2, "google.protobuf.StringValue"
      optional :auto_apply_date, :message, 3, "google.protobuf.StringValue"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.MaximizeConversionsOptInRecommendation" do
      optional :recommended_budget_amount_micros, :message, 1, "google.protobuf.Int64Value"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.MaximizeClicksOptInRecommendation" do
      optional :recommended_budget_amount_micros, :message, 1, "google.protobuf.Int64Value"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.CalloutExtensionRecommendation" do
      repeated :recommended_extensions, :message, 1, "google.ads.googleads.v4.common.CalloutFeedItem"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation" do
      repeated :options, :message, 1, "google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption"
      optional :recommended_target_cpa_micros, :message, 2, "google.protobuf.Int64Value"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption" do
      optional :goal, :enum, 1, "google.ads.googleads.v4.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal"
      optional :target_cpa_micros, :message, 2, "google.protobuf.Int64Value"
      optional :required_campaign_budget_amount_micros, :message, 3, "google.protobuf.Int64Value"
      optional :impact, :message, 4, "google.ads.googleads.v4.resources.Recommendation.RecommendationImpact"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.EnhancedCpcOptInRecommendation" do
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.SearchPartnersOptInRecommendation" do
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.SitelinkExtensionRecommendation" do
      repeated :recommended_extensions, :message, 1, "google.ads.googleads.v4.common.SitelinkFeedItem"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.OptimizeAdRotationRecommendation" do
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.CallExtensionRecommendation" do
      repeated :recommended_extensions, :message, 1, "google.ads.googleads.v4.common.CallFeedItem"
    end
    add_message "google.ads.googleads.v4.resources.Recommendation.MoveUnusedBudgetRecommendation" do
      optional :excess_campaign_budget, :message, 1, "google.protobuf.StringValue"
      optional :budget_recommendation, :message, 2, "google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V4
        module Resources
          Recommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation").msgclass
          Recommendation::RecommendationImpact = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.RecommendationImpact").msgclass
          Recommendation::RecommendationMetrics = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.RecommendationMetrics").msgclass
          Recommendation::CampaignBudgetRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation").msgclass
          Recommendation::CampaignBudgetRecommendation::CampaignBudgetRecommendationOption = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.CampaignBudgetRecommendation.CampaignBudgetRecommendationOption").msgclass
          Recommendation::KeywordRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.KeywordRecommendation").msgclass
          Recommendation::KeywordMatchTypeRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.KeywordMatchTypeRecommendation").msgclass
          Recommendation::TextAdRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.TextAdRecommendation").msgclass
          Recommendation::MaximizeConversionsOptInRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.MaximizeConversionsOptInRecommendation").msgclass
          Recommendation::MaximizeClicksOptInRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.MaximizeClicksOptInRecommendation").msgclass
          Recommendation::CalloutExtensionRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.CalloutExtensionRecommendation").msgclass
          Recommendation::TargetCpaOptInRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation").msgclass
          Recommendation::TargetCpaOptInRecommendation::TargetCpaOptInRecommendationOption = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.TargetCpaOptInRecommendation.TargetCpaOptInRecommendationOption").msgclass
          Recommendation::EnhancedCpcOptInRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.EnhancedCpcOptInRecommendation").msgclass
          Recommendation::SearchPartnersOptInRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.SearchPartnersOptInRecommendation").msgclass
          Recommendation::SitelinkExtensionRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.SitelinkExtensionRecommendation").msgclass
          Recommendation::OptimizeAdRotationRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.OptimizeAdRotationRecommendation").msgclass
          Recommendation::CallExtensionRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.CallExtensionRecommendation").msgclass
          Recommendation::MoveUnusedBudgetRecommendation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.Recommendation.MoveUnusedBudgetRecommendation").msgclass
        end
      end
    end
  end
end
