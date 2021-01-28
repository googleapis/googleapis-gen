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
      module V5
        module Resources
          # A campaign budget.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the campaign budget.
          #     Campaign budget resource names have the form:
          #
          #     `customers/{customer_id}/campaignBudgets/{campaign_budget_id}`
          # @!attribute [r] id
          #   @return [::Integer]
          #     Output only. The ID of the campaign budget.
          #
          #     A campaign budget is created using the CampaignBudgetService create
          #     operation and is assigned a budget ID. A budget ID can be shared across
          #     different campaigns; the system will then allocate the campaign budget
          #     among different campaigns to get optimum results.
          # @!attribute [rw] name
          #   @return [::String]
          #     The name of the campaign budget.
          #
          #     When creating a campaign budget through CampaignBudgetService, every
          #     explicitly shared campaign budget must have a non-null, non-empty name.
          #     Campaign budgets that are not explicitly shared derive their name from the
          #     attached campaign's name.
          #
          #     The length of this string must be between 1 and 255, inclusive,
          #     in UTF-8 bytes, (trimmed).
          # @!attribute [rw] amount_micros
          #   @return [::Integer]
          #     The amount of the budget, in the local currency for the account.
          #     Amount is specified in micros, where one million is equivalent to one
          #     currency unit. Monthly spend is capped at 30.4 times this amount.
          # @!attribute [rw] total_amount_micros
          #   @return [::Integer]
          #     The lifetime amount of the budget, in the local currency for the account.
          #     Amount is specified in micros, where one million is equivalent to one
          #     currency unit.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V5::Enums::BudgetStatusEnum::BudgetStatus]
          #     Output only. The status of this campaign budget. This field is read-only.
          # @!attribute [rw] delivery_method
          #   @return [::Google::Ads::GoogleAds::V5::Enums::BudgetDeliveryMethodEnum::BudgetDeliveryMethod]
          #     The delivery method that determines the rate at which the campaign budget
          #     is spent.
          #
          #     Defaults to STANDARD if unspecified in a create operation.
          # @!attribute [rw] explicitly_shared
          #   @return [::Boolean]
          #     Specifies whether the budget is explicitly shared. Defaults to true if
          #     unspecified in a create operation.
          #
          #     If true, the budget was created with the purpose of sharing
          #     across one or more campaigns.
          #
          #     If false, the budget was created with the intention of only being used
          #     with a single campaign. The budget's name and status will stay in sync
          #     with the campaign's name and status. Attempting to share the budget with a
          #     second campaign will result in an error.
          #
          #     A non-shared budget can become an explicitly shared. The same operation
          #     must also assign the budget a name.
          #
          #     A shared campaign budget can never become non-shared.
          # @!attribute [r] reference_count
          #   @return [::Integer]
          #     Output only. The number of campaigns actively using the budget.
          #
          #     This field is read-only.
          # @!attribute [r] has_recommended_budget
          #   @return [::Boolean]
          #     Output only. Indicates whether there is a recommended budget for this campaign budget.
          #
          #     This field is read-only.
          # @!attribute [r] recommended_budget_amount_micros
          #   @return [::Integer]
          #     Output only. The recommended budget amount. If no recommendation is available, this will
          #     be set to the budget amount.
          #     Amount is specified in micros, where one million is equivalent to one
          #     currency unit.
          #
          #     This field is read-only.
          # @!attribute [rw] period
          #   @return [::Google::Ads::GoogleAds::V5::Enums::BudgetPeriodEnum::BudgetPeriod]
          #     Immutable. Period over which to spend the budget. Defaults to DAILY if not specified.
          # @!attribute [r] recommended_budget_estimated_change_weekly_clicks
          #   @return [::Integer]
          #     Output only. The estimated change in weekly clicks if the recommended budget is applied.
          #
          #     This field is read-only.
          # @!attribute [r] recommended_budget_estimated_change_weekly_cost_micros
          #   @return [::Integer]
          #     Output only. The estimated change in weekly cost in micros if the recommended budget is
          #     applied. One million is equivalent to one currency unit.
          #
          #     This field is read-only.
          # @!attribute [r] recommended_budget_estimated_change_weekly_interactions
          #   @return [::Integer]
          #     Output only. The estimated change in weekly interactions if the recommended budget is
          #     applied.
          #
          #     This field is read-only.
          # @!attribute [r] recommended_budget_estimated_change_weekly_views
          #   @return [::Integer]
          #     Output only. The estimated change in weekly views if the recommended budget is applied.
          #
          #     This field is read-only.
          # @!attribute [rw] type
          #   @return [::Google::Ads::GoogleAds::V5::Enums::BudgetTypeEnum::BudgetType]
          #     Immutable. The type of the campaign budget.
          class CampaignBudget
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
