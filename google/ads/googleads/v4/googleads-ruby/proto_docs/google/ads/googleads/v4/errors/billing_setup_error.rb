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
        module Errors
          # Container for enum describing possible billing setup errors.
          class BillingSetupErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible billing setup errors.
            module BillingSetupError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Cannot specify both an existing payments account and a new payments
              # account when setting up billing.
              CANNOT_USE_EXISTING_AND_NEW_ACCOUNT = 2

              # Cannot cancel an approved billing setup whose start time has passed.
              CANNOT_REMOVE_STARTED_BILLING_SETUP = 3

              # Cannot perform a Change of Bill-To (CBT) to the same payments account.
              CANNOT_CHANGE_BILLING_TO_SAME_PAYMENTS_ACCOUNT = 4

              # Billing setups can only be used by customers with ENABLED or DRAFT
              # status.
              BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_STATUS = 5

              # Billing setups must either include a correctly formatted existing
              # payments account id, or a non-empty new payments account name.
              INVALID_PAYMENTS_ACCOUNT = 6

              # Only billable and third-party customers can create billing setups.
              BILLING_SETUP_NOT_PERMITTED_FOR_CUSTOMER_CATEGORY = 7

              # Billing setup creations can only use NOW for start time type.
              INVALID_START_TIME_TYPE = 8

              # Billing setups can only be created for a third-party customer if they do
              # not already have a setup.
              THIRD_PARTY_ALREADY_HAS_BILLING = 9

              # Billing setups cannot be created if there is already a pending billing in
              # progress.
              BILLING_SETUP_IN_PROGRESS = 10

              # Billing setups can only be created by customers who have permission to
              # setup billings. Users can contact a representative for help setting up
              # permissions.
              NO_SIGNUP_PERMISSION = 11

              # Billing setups cannot be created if there is already a future-approved
              # billing.
              CHANGE_OF_BILL_TO_IN_PROGRESS = 12

              # Requested payments profile not found.
              PAYMENTS_PROFILE_NOT_FOUND = 13

              # Requested payments account not found.
              PAYMENTS_ACCOUNT_NOT_FOUND = 14

              # Billing setup creation failed because the payments profile is ineligible.
              PAYMENTS_PROFILE_INELIGIBLE = 15

              # Billing setup creation failed because the payments account is ineligible.
              PAYMENTS_ACCOUNT_INELIGIBLE = 16

              # Billing setup creation failed because the payments profile needs internal
              # approval.
              CUSTOMER_NEEDS_INTERNAL_APPROVAL = 17

              # Payments account has different currency code than the current customer
              # and hence cannot be used to setup billing.
              PAYMENTS_ACCOUNT_INELIGIBLE_CURRENCY_CODE_MISMATCH = 19
            end
          end
        end
      end
    end
  end
end
