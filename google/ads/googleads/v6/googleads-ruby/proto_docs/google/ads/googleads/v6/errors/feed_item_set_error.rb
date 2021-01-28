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
          # Container for enum describing possible feed item set errors.
          class FeedItemSetErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible feed item set errors.
            module FeedItemSetError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # The given ID refers to a removed FeedItemSet.
              FEED_ITEM_SET_REMOVED = 2

              # The dynamic filter of a feed item set cannot be cleared on UPDATE if it
              # exists. A set is either static or dynamic once added, and that cannot
              # change.
              CANNOT_CLEAR_DYNAMIC_FILTER = 3

              # The dynamic filter of a feed item set cannot be created on UPDATE if it
              # does not exist. A set is either static or dynamic once added, and that
              # cannot change.
              CANNOT_CREATE_DYNAMIC_FILTER = 4

              # FeedItemSets can only be made for location or affiliate location feeds.
              INVALID_FEED_TYPE = 5

              # FeedItemSets duplicate name. Name should be unique within an account.
              DUPLICATE_NAME = 6

              # The feed type of the parent Feed is not compatible with the type of
              # dynamic filter being set. For example, you can only set
              # dynamic_location_set_filter for LOCATION feed item sets.
              WRONG_DYNAMIC_FILTER_FOR_FEED_TYPE = 7
            end
          end
        end
      end
    end
  end
end
