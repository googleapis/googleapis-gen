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
          # Container for enum describing possible account budget proposal errors.
          class AccountBudgetProposalErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible account budget proposal errors.
            module AccountBudgetProposalError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # The field mask must be empty for create/end/remove proposals.
              FIELD_MASK_NOT_ALLOWED = 2

              # The field cannot be set because of the proposal type.
              IMMUTABLE_FIELD = 3

              # The field is required because of the proposal type.
              REQUIRED_FIELD_MISSING = 4

              # Proposals that have been approved cannot be cancelled.
              CANNOT_CANCEL_APPROVED_PROPOSAL = 5

              # Budgets that haven't been approved cannot be removed.
              CANNOT_REMOVE_UNAPPROVED_BUDGET = 6

              # Budgets that are currently running cannot be removed.
              CANNOT_REMOVE_RUNNING_BUDGET = 7

              # Budgets that haven't been approved cannot be truncated.
              CANNOT_END_UNAPPROVED_BUDGET = 8

              # Only budgets that are currently running can be truncated.
              CANNOT_END_INACTIVE_BUDGET = 9

              # All budgets must have names.
              BUDGET_NAME_REQUIRED = 10

              # Expired budgets cannot be edited after a sufficient amount of time has
              # passed.
              CANNOT_UPDATE_OLD_BUDGET = 11

              # It is not permissible a propose a new budget that ends in the past.
              CANNOT_END_IN_PAST = 12

              # An expired budget cannot be extended to overlap with the running budget.
              CANNOT_EXTEND_END_TIME = 13

              # A purchase order number is required.
              PURCHASE_ORDER_NUMBER_REQUIRED = 14

              # Budgets that have a pending update cannot be updated.
              PENDING_UPDATE_PROPOSAL_EXISTS = 15

              # Cannot propose more than one budget when the corresponding billing setup
              # hasn't been approved.
              MULTIPLE_BUDGETS_NOT_ALLOWED_FOR_UNAPPROVED_BILLING_SETUP = 16

              # Cannot update the start time of a budget that has already started.
              CANNOT_UPDATE_START_TIME_FOR_STARTED_BUDGET = 17

              # Cannot update the spending limit of a budget with an amount lower than
              # what has already been spent.
              SPENDING_LIMIT_LOWER_THAN_ACCRUED_COST_NOT_ALLOWED = 18

              # Cannot propose a budget update without actually changing any fields.
              UPDATE_IS_NO_OP = 19

              # The end time must come after the start time.
              END_TIME_MUST_FOLLOW_START_TIME = 20

              # The budget's date range must fall within the date range of its billing
              # setup.
              BUDGET_DATE_RANGE_INCOMPATIBLE_WITH_BILLING_SETUP = 21

              # The user is not authorized to mutate budgets for the given billing setup.
              NOT_AUTHORIZED = 22

              # Mutates are not allowed for the given billing setup.
              INVALID_BILLING_SETUP = 23

              # Budget creation failed as it overlaps with an pending budget proposal
              # or an approved budget.
              OVERLAPS_EXISTING_BUDGET = 24

              # The control setting in user's payments profile doesn't allow budget
              # creation through API. Log in to Google Ads to create budget.
              CANNOT_CREATE_BUDGET_THROUGH_API = 25
            end
          end
        end
      end
    end
  end
end
