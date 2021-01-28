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
        module Resources
          # A billing setup, which associates a payments account and an advertiser. A
          # billing setup is specific to one advertiser.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the billing setup.
          #     BillingSetup resource names have the form:
          #
          #     `customers/{customer_id}/billingSetups/{billing_setup_id}`
          # @!attribute [r] id
          #   @return [::Integer]
          #     Output only. The ID of the billing setup.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V6::Enums::BillingSetupStatusEnum::BillingSetupStatus]
          #     Output only. The status of the billing setup.
          # @!attribute [rw] payments_account
          #   @return [::String]
          #     Immutable. The resource name of the payments account associated with this billing
          #     setup. Payments resource names have the form:
          #
          #     `customers/{customer_id}/paymentsAccounts/{payments_account_id}`
          #     When setting up billing, this is used to signup with an existing payments
          #     account (and then payments_account_info should not be set).
          #     When getting a billing setup, this and payments_account_info will be
          #     populated.
          # @!attribute [rw] payments_account_info
          #   @return [::Google::Ads::GoogleAds::V6::Resources::BillingSetup::PaymentsAccountInfo]
          #     Immutable. The payments account information associated with this billing setup.
          #     When setting up billing, this is used to signup with a new payments account
          #     (and then payments_account should not be set).
          #     When getting a billing setup, this and payments_account will be
          #     populated.
          # @!attribute [rw] start_date_time
          #   @return [::String]
          #     Immutable. The start date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format. Only a
          #     future time is allowed.
          # @!attribute [rw] start_time_type
          #   @return [::Google::Ads::GoogleAds::V6::Enums::TimeTypeEnum::TimeType]
          #     Immutable. The start time as a type. Only NOW is allowed.
          # @!attribute [r] end_date_time
          #   @return [::String]
          #     Output only. The end date time in yyyy-MM-dd or yyyy-MM-dd HH:mm:ss format.
          # @!attribute [r] end_time_type
          #   @return [::Google::Ads::GoogleAds::V6::Enums::TimeTypeEnum::TimeType]
          #     Output only. The end time as a type.  The only possible value is FOREVER.
          class BillingSetup
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Container of payments account information for this billing.
            # @!attribute [r] payments_account_id
            #   @return [::String]
            #     Output only. A 16 digit id used to identify the payments account associated with the
            #     billing setup.
            #
            #     This must be passed as a string with dashes, e.g. "1234-5678-9012-3456".
            # @!attribute [rw] payments_account_name
            #   @return [::String]
            #     Immutable. The name of the payments account associated with the billing setup.
            #
            #     This enables the user to specify a meaningful name for a payments account
            #     to aid in reconciling monthly invoices.
            #
            #     This name will be printed in the monthly invoices.
            # @!attribute [rw] payments_profile_id
            #   @return [::String]
            #     Immutable. A 12 digit id used to identify the payments profile associated with the
            #     billing setup.
            #
            #     This must be passed in as a string with dashes, e.g. "1234-5678-9012".
            # @!attribute [r] payments_profile_name
            #   @return [::String]
            #     Output only. The name of the payments profile associated with the billing setup.
            # @!attribute [r] secondary_payments_profile_id
            #   @return [::String]
            #     Output only. A secondary payments profile id present in uncommon situations, e.g.
            #     when a sequential liability agreement has been arranged.
            class PaymentsAccountInfo
              include ::Google::Protobuf::MessageExts
              extend ::Google::Protobuf::MessageExts::ClassMethods
            end
          end
        end
      end
    end
  end
end
