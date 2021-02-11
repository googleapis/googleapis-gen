# frozen_string_literal: true

# Copyright 2021 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Ads
    module GoogleAds
      module V4
        module Resources
          # A recommendation.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the recommendation.
          #
          #     `customers/{customer_id}/recommendations/{recommendation_id}`
          # @!attribute [r] type
          #   @return [::Google::Ads::GoogleAds::V4::Enums::RecommendationTypeEnum::RecommendationType]
          #     Output only. The type of recommendation.
          # @!attribute [r] impact
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::RecommendationImpact]
          #     Output only. The impact on account performance as a result of applying the
          #     recommendation.
          # @!attribute [r] campaign_budget
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The budget targeted by this recommendation. This will be set only when
          #     the recommendation affects a single campaign budget.
          #
          #     This field will be set for the following recommendation types:
          #     CAMPAIGN_BUDGET, FORECASTING_CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
          # @!attribute [r] campaign
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The campaign targeted by this recommendation. This will be set only when
          #     the recommendation affects a single campaign.
          #
          #     This field will be set for the following recommendation types:
          #     CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
          #     KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
          #     OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
          #     TARGET_CPA_OPT_IN, TARGET_ROAS_OPT_IN, TEXT_AD
          # @!attribute [r] ad_group
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The ad group targeted by this recommendation. This will be set only when
          #     the recommendation affects a single ad group.
          #
          #     This field will be set for the following recommendation types:
          #     KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
          # @!attribute [r] dismissed
          #   @return [::Google::Protobuf::BoolValue]
          #     Output only. Whether the recommendation is dismissed or not.
          # @!attribute [r] campaign_budget_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::CampaignBudgetRecommendation]
          #     Output only. The campaign budget recommendation.
          # @!attribute [r] keyword_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::KeywordRecommendation]
          #     Output only. The keyword recommendation.
          # @!attribute [r] text_ad_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::TextAdRecommendation]
          #     Output only. Add expanded text ad recommendation.
          # @!attribute [r] target_cpa_opt_in_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::TargetCpaOptInRecommendation]
          #     Output only. The TargetCPA opt-in recommendation.
          # @!attribute [r] maximize_conversions_opt_in_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::MaximizeConversionsOptInRecommendation]
          #     Output only. The MaximizeConversions Opt-In recommendation.
          # @!attribute [r] enhanced_cpc_opt_in_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::EnhancedCpcOptInRecommendation]
          #     Output only. The Enhanced Cost-Per-Click Opt-In recommendation.
          # @!attribute [r] search_partners_opt_in_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::SearchPartnersOptInRecommendation]
          #     Output only. The Search Partners Opt-In recommendation.
          # @!attribute [r] maximize_clicks_opt_in_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::MaximizeClicksOptInRecommendation]
          #     Output only. The MaximizeClicks Opt-In recommendation.
          # @!attribute [r] optimize_ad_rotation_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::OptimizeAdRotationRecommendation]
          #     Output only. The Optimize Ad Rotation recommendation.
          # @!attribute [r] callout_extension_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::CalloutExtensionRecommendation]
          #     Output only. The Callout extension recommendation.
          # @!attribute [r] sitelink_extension_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::SitelinkExtensionRecommendation]
          #     Output only. The Sitelink extension recommendation.
          # @!attribute [r] call_extension_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::CallExtensionRecommendation]
          #     Output only. The Call extension recommendation.
          # @!attribute [r] keyword_match_type_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::KeywordMatchTypeRecommendation]
          #     Output only. The keyword match type recommendation.
          # @!attribute [r] move_unused_budget_recommendation
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::MoveUnusedBudgetRecommendation]
          #     Output only. The move unused budget recommendation.
          class Recommendation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # The impact of making the change as described in the recommendation.
            # Some types of recommendations may not have impact information.
            # @!attribute [r] base_metrics
            #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::RecommendationMetrics]
            #     Output only. Base metrics at the time the recommendation was generated.
            # @!attribute [r] potential_metrics
            #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::RecommendationMetrics]
            #     Output only. Estimated metrics if the recommendation is applied.
            class RecommendationImpact
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # Weekly account performance metrics. For some recommendation types, these
            # are averaged over the past 90-day period and hence can be fractional.
            # @!attribute [r] impressions
            #   @return [::Google::Protobuf::DoubleValue]
            #     Output only. Number of ad impressions.
            # @!attribute [r] clicks
            #   @return [::Google::Protobuf::DoubleValue]
            #     Output only. Number of ad clicks.
            # @!attribute [r] cost_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. Cost (in micros) for advertising, in the local currency for the account.
            # @!attribute [r] conversions
            #   @return [::Google::Protobuf::DoubleValue]
            #     Output only. Number of conversions.
            # @!attribute [r] video_views
            #   @return [::Google::Protobuf::DoubleValue]
            #     Output only. Number of video views for a video ad campaign.
            class RecommendationMetrics
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The budget recommendation for budget constrained campaigns.
            # @!attribute [r] current_budget_amount_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The current budget amount in micros.
            # @!attribute [r] recommended_budget_amount_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The recommended budget amount in micros.
            # @!attribute [r] budget_options
            #   @return [::Array<::Google::Ads::GoogleAds::V4::Resources::Recommendation::CampaignBudgetRecommendation::CampaignBudgetRecommendationOption>]
            #     Output only. The budget amounts and associated impact estimates for some values of
            #     possible budget amounts.
            class CampaignBudgetRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods

              # The impact estimates for a given budget amount.
              # @!attribute [r] budget_amount_micros
              #   @return [::Google::Protobuf::Int64Value]
              #     Output only. The budget amount for this option.
              # @!attribute [r] impact
              #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::RecommendationImpact]
              #     Output only. The impact estimate if budget is changed to amount specified in this
              #     option.
              class CampaignBudgetRecommendationOption
                include ::Google::Protobuf::MessageExts
                extend ::Google::Protobuf::MessageExts::ClassMethods
              end
            end

            # The keyword recommendation.
            # @!attribute [r] keyword
            #   @return [::Google::Ads::GoogleAds::V4::Common::KeywordInfo]
            #     Output only. The recommended keyword.
            # @!attribute [r] recommended_cpc_bid_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The recommended CPC (cost-per-click) bid.
            class KeywordRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The keyword match type recommendation.
            # @!attribute [r] keyword
            #   @return [::Google::Ads::GoogleAds::V4::Common::KeywordInfo]
            #     Output only. The existing keyword where the match type should be more broad.
            # @!attribute [r] recommended_match_type
            #   @return [::Google::Ads::GoogleAds::V4::Enums::KeywordMatchTypeEnum::KeywordMatchType]
            #     Output only. The recommended new match type.
            class KeywordMatchTypeRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The text ad recommendation.
            # @!attribute [r] ad
            #   @return [::Google::Ads::GoogleAds::V4::Resources::Ad]
            #     Output only. Recommended ad.
            # @!attribute [r] creation_date
            #   @return [::Google::Protobuf::StringValue]
            #     Output only. Creation date of the recommended ad.
            #     YYYY-MM-DD format, e.g., 2018-04-17.
            # @!attribute [r] auto_apply_date
            #   @return [::Google::Protobuf::StringValue]
            #     Output only. Date, if present, is the earliest when the recommendation will be auto
            #     applied.
            #     YYYY-MM-DD format, e.g., 2018-04-17.
            class TextAdRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Maximize Conversions Opt-In recommendation.
            # @!attribute [r] recommended_budget_amount_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The recommended new budget amount.
            class MaximizeConversionsOptInRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Maximize Clicks opt-in recommendation.
            # @!attribute [r] recommended_budget_amount_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The recommended new budget amount.
            #     Only set if the current budget is too high.
            class MaximizeClicksOptInRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Callout extension recommendation.
            # @!attribute [r] recommended_extensions
            #   @return [::Array<::Google::Ads::GoogleAds::V4::Common::CalloutFeedItem>]
            #     Output only. Callout extensions recommended to be added.
            class CalloutExtensionRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Target CPA opt-in recommendation.
            # @!attribute [r] options
            #   @return [::Array<::Google::Ads::GoogleAds::V4::Resources::Recommendation::TargetCpaOptInRecommendation::TargetCpaOptInRecommendationOption>]
            #     Output only. The available goals and corresponding options for Target CPA strategy.
            # @!attribute [r] recommended_target_cpa_micros
            #   @return [::Google::Protobuf::Int64Value]
            #     Output only. The recommended average CPA target. See required budget amount and impact
            #     of using this recommendation in options list.
            class TargetCpaOptInRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods

              # The Target CPA opt-in option with impact estimate.
              # @!attribute [r] goal
              #   @return [::Google::Ads::GoogleAds::V4::Enums::TargetCpaOptInRecommendationGoalEnum::TargetCpaOptInRecommendationGoal]
              #     Output only. The goal achieved by this option.
              # @!attribute [r] target_cpa_micros
              #   @return [::Google::Protobuf::Int64Value]
              #     Output only. Average CPA target.
              # @!attribute [r] required_campaign_budget_amount_micros
              #   @return [::Google::Protobuf::Int64Value]
              #     Output only. The minimum campaign budget, in local currency for the account,
              #     required to achieve the target CPA.
              #     Amount is specified in micros, where one million is equivalent to one
              #     currency unit.
              # @!attribute [r] impact
              #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::RecommendationImpact]
              #     Output only. The impact estimate if this option is selected.
              class TargetCpaOptInRecommendationOption
                include ::Google::Protobuf::MessageExts
                extend ::Google::Protobuf::MessageExts::ClassMethods
              end
            end

            # The Enhanced Cost-Per-Click Opt-In recommendation.
            class EnhancedCpcOptInRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Search Partners Opt-In recommendation.
            class SearchPartnersOptInRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Sitelink extension recommendation.
            # @!attribute [r] recommended_extensions
            #   @return [::Array<::Google::Ads::GoogleAds::V4::Common::SitelinkFeedItem>]
            #     Output only. Sitelink extensions recommended to be added.
            class SitelinkExtensionRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Optimize Ad Rotation recommendation.
            class OptimizeAdRotationRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The Call extension recommendation.
            # @!attribute [r] recommended_extensions
            #   @return [::Array<::Google::Ads::GoogleAds::V4::Common::CallFeedItem>]
            #     Output only. Call extensions recommended to be added.
            class CallExtensionRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end

            # The move unused budget recommendation.
            # @!attribute [r] excess_campaign_budget
            #   @return [::Google::Protobuf::StringValue]
            #     Output only. The excess budget's resource_name.
            # @!attribute [r] budget_recommendation
            #   @return [::Google::Ads::GoogleAds::V4::Resources::Recommendation::CampaignBudgetRecommendation]
            #     Output only. The recommendation for the constrained budget to increase.
            class MoveUnusedBudgetRecommendation
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end
          end
        end
      end
    end
  end
end
