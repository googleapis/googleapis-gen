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
          # A customer.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the customer.
          #     Customer resource names have the form:
          #
          #     `customers/{customer_id}`
          # @!attribute [r] id
          #   @return [::Integer]
          #     Output only. The ID of the customer.
          # @!attribute [rw] descriptive_name
          #   @return [::String]
          #     Optional, non-unique descriptive name of the customer.
          # @!attribute [rw] currency_code
          #   @return [::String]
          #     Immutable. The currency in which the account operates.
          #     A subset of the currency codes from the ISO 4217 standard is
          #     supported.
          # @!attribute [rw] time_zone
          #   @return [::String]
          #     Immutable. The local timezone ID of the customer.
          # @!attribute [rw] tracking_url_template
          #   @return [::String]
          #     The URL template for constructing a tracking URL out of parameters.
          # @!attribute [rw] final_url_suffix
          #   @return [::String]
          #     The URL template for appending params to the final URL
          # @!attribute [rw] auto_tagging_enabled
          #   @return [::Boolean]
          #     Whether auto-tagging is enabled for the customer.
          # @!attribute [r] has_partners_badge
          #   @return [::Boolean]
          #     Output only. Whether the Customer has a Partners program badge. If the Customer is not
          #     associated with the Partners program, this will be false. For more
          #     information, see https://support.google.com/partners/answer/3125774.
          # @!attribute [r] manager
          #   @return [::Boolean]
          #     Output only. Whether the customer is a manager.
          # @!attribute [r] test_account
          #   @return [::Boolean]
          #     Output only. Whether the customer is a test account.
          # @!attribute [rw] call_reporting_setting
          #   @return [::Google::Ads::GoogleAds::V5::Resources::CallReportingSetting]
          #     Call reporting setting for a customer.
          # @!attribute [r] conversion_tracking_setting
          #   @return [::Google::Ads::GoogleAds::V5::Resources::ConversionTrackingSetting]
          #     Output only. Conversion tracking setting for a customer.
          # @!attribute [r] remarketing_setting
          #   @return [::Google::Ads::GoogleAds::V5::Resources::RemarketingSetting]
          #     Output only. Remarketing setting for a customer.
          # @!attribute [r] pay_per_conversion_eligibility_failure_reasons
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Enums::CustomerPayPerConversionEligibilityFailureReasonEnum::CustomerPayPerConversionEligibilityFailureReason>]
          #     Output only. Reasons why the customer is not eligible to use PaymentMode.CONVERSIONS. If
          #     the list is empty, the customer is eligible. This field is read-only.
          # @!attribute [r] optimization_score
          #   @return [::Float]
          #     Output only. Optimization score of the customer.
          #
          #     Optimization score is an estimate of how well a customer's campaigns are
          #     set to perform. It ranges from 0% (0.0) to 100% (1.0). This field is null
          #     for all manager customers, and for unscored non-manager customers.
          #
          #     See "About optimization score" at
          #     https://support.google.com/google-ads/answer/9061546.
          #
          #     This field is read-only.
          class Customer
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Call reporting setting for a customer.
          # @!attribute [rw] call_reporting_enabled
          #   @return [::Boolean]
          #     Enable reporting of phone call events by redirecting them via Google
          #     System.
          # @!attribute [rw] call_conversion_reporting_enabled
          #   @return [::Boolean]
          #     Whether to enable call conversion reporting.
          # @!attribute [rw] call_conversion_action
          #   @return [::String]
          #     Customer-level call conversion action to attribute a call conversion to.
          #     If not set a default conversion action is used. Only in effect when
          #     call_conversion_reporting_enabled is set to true.
          class CallReportingSetting
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A collection of customer-wide settings related to Google Ads Conversion
          # Tracking.
          # @!attribute [r] conversion_tracking_id
          #   @return [::Integer]
          #     Output only. The conversion tracking id used for this account. This id is automatically
          #     assigned after any conversion tracking feature is used. If the customer
          #     doesn't use conversion tracking, this is 0. This field is read-only.
          # @!attribute [r] cross_account_conversion_tracking_id
          #   @return [::Integer]
          #     Output only. The conversion tracking id of the customer's manager. This is set when the
          #     customer is opted into cross account conversion tracking, and it overrides
          #     conversion_tracking_id. This field can only be managed through the Google
          #     Ads UI. This field is read-only.
          class ConversionTrackingSetting
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Remarketing setting for a customer.
          # @!attribute [r] google_global_site_tag
          #   @return [::String]
          #     Output only. The Google global site tag.
          class RemarketingSetting
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
