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
          # Container for enum describing possible CustomerManagerLink errors.
          class CustomerManagerLinkErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible CustomerManagerLink errors.
            module CustomerManagerLinkError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # No pending invitation.
              NO_PENDING_INVITE = 2

              # Attempt to operate on the same client more than once in the same call.
              SAME_CLIENT_MORE_THAN_ONCE_PER_CALL = 3

              # Manager account has the maximum number of linked accounts.
              MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS = 4

              # If no active user on account it cannot be unlinked from its manager.
              CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER = 5

              # Account should have at least one active owner on it before being
              # unlinked.
              CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER = 6

              # Only account owners may change their permission role.
              CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER = 7

              # When a client's link to its manager is not active, the link role cannot
              # be changed.
              CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT = 8

              # Attempt to link a child to a parent that contains or will contain
              # duplicate children.
              DUPLICATE_CHILD_FOUND = 9

              # The authorized customer is a test account. It can add no more than the
              # allowed number of accounts
              TEST_ACCOUNT_LINKS_TOO_MANY_CHILD_ACCOUNTS = 10
            end
          end
        end
      end
    end
  end
end
