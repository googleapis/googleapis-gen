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
      module V6
        module Errors
          # Container for enum describing possible campaign criterion errors.
          class CampaignCriterionErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible campaign criterion errors.
            module CampaignCriterionError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Concrete type of criterion (keyword v.s. placement) is required for
              # CREATE and UPDATE operations.
              CONCRETE_TYPE_REQUIRED = 2

              # Invalid placement URL.
              INVALID_PLACEMENT_URL = 3

              # Criteria type can not be excluded for the campaign by the customer. like
              # AOL account type cannot target site type criteria
              CANNOT_EXCLUDE_CRITERIA_TYPE = 4

              # Cannot set the campaign criterion status for this criteria type.
              CANNOT_SET_STATUS_FOR_CRITERIA_TYPE = 5

              # Cannot set the campaign criterion status for an excluded criteria.
              CANNOT_SET_STATUS_FOR_EXCLUDED_CRITERIA = 6

              # Cannot target and exclude the same criterion.
              CANNOT_TARGET_AND_EXCLUDE = 7

              # The mutate contained too many operations.
              TOO_MANY_OPERATIONS = 8

              # This operator cannot be applied to a criterion of this type.
              OPERATOR_NOT_SUPPORTED_FOR_CRITERION_TYPE = 9

              # The Shopping campaign sales country is not supported for
              # ProductSalesChannel targeting.
              SHOPPING_CAMPAIGN_SALES_COUNTRY_NOT_SUPPORTED_FOR_SALES_CHANNEL = 10

              # The existing field can't be updated with CREATE operation. It can be
              # updated with UPDATE operation only.
              CANNOT_ADD_EXISTING_FIELD = 11

              # Negative criteria are immutable, so updates are not allowed.
              CANNOT_UPDATE_NEGATIVE_CRITERION = 12
            end
          end
        end
      end
    end
  end
end
