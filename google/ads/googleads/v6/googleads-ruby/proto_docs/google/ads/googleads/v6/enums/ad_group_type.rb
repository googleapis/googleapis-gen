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
        module Enums
          # Defines types of an ad group, specific to a particular campaign channel
          # type. This type drives validations that restrict which entities can be
          # added to the ad group.
          class AdGroupTypeEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum listing the possible types of an ad group.
            module AdGroupType
              # The type has not been specified.
              UNSPECIFIED = 0

              # The received value is not known in this version.
              #
              # This is a response-only value.
              UNKNOWN = 1

              # The default ad group type for Search campaigns.
              SEARCH_STANDARD = 2

              # The default ad group type for Display campaigns.
              DISPLAY_STANDARD = 3

              # The ad group type for Shopping campaigns serving standard product ads.
              SHOPPING_PRODUCT_ADS = 4

              # The default ad group type for Hotel campaigns.
              HOTEL_ADS = 6

              # The type for ad groups in Smart Shopping campaigns.
              SHOPPING_SMART_ADS = 7

              # Short unskippable in-stream video ads.
              VIDEO_BUMPER = 8

              # TrueView (skippable) in-stream video ads.
              VIDEO_TRUE_VIEW_IN_STREAM = 9

              # TrueView in-display video ads.
              VIDEO_TRUE_VIEW_IN_DISPLAY = 10

              # Unskippable in-stream video ads.
              VIDEO_NON_SKIPPABLE_IN_STREAM = 11

              # Outstream video ads.
              VIDEO_OUTSTREAM = 12

              # Ad group type for Dynamic Search Ads ad groups.
              SEARCH_DYNAMIC_ADS = 13

              # The type for ad groups in Shopping Comparison Listing campaigns.
              SHOPPING_COMPARISON_LISTING_ADS = 14

              # The ad group type for Promoted Hotel ad groups.
              PROMOTED_HOTEL_ADS = 15

              # Video responsive ad groups.
              VIDEO_RESPONSIVE = 16
            end
          end
        end
      end
    end
  end
end
