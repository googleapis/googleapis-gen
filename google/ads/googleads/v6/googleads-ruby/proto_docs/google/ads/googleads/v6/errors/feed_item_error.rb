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
          # Container for enum describing possible feed item errors.
          class FeedItemErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible feed item errors.
            module FeedItemError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Cannot convert the feed attribute value from string to its real type.
              CANNOT_CONVERT_ATTRIBUTE_VALUE_FROM_STRING = 2

              # Cannot operate on removed feed item.
              CANNOT_OPERATE_ON_REMOVED_FEED_ITEM = 3

              # Date time zone does not match the account's time zone.
              DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 4

              # Feed item with the key attributes could not be found.
              KEY_ATTRIBUTES_NOT_FOUND = 5

              # Url feed attribute value is not valid.
              INVALID_URL = 6

              # Some key attributes are missing.
              MISSING_KEY_ATTRIBUTES = 7

              # Feed item has same key attributes as another feed item.
              KEY_ATTRIBUTES_NOT_UNIQUE = 8

              # Cannot modify key attributes on an existing feed item.
              CANNOT_MODIFY_KEY_ATTRIBUTE_VALUE = 9

              # The feed attribute value is too large.
              SIZE_TOO_LARGE_FOR_MULTI_VALUE_ATTRIBUTE = 10
            end
          end
        end
      end
    end
  end
end
