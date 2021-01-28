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
        module Enums
          # An immutable specialization of an Advertising Channel.
          class AdvertisingChannelSubTypeEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing the different channel subtypes.
            module AdvertisingChannelSubType
              # Not specified.
              UNSPECIFIED = 0

              # Used as a return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Mobile app campaigns for Search.
              SEARCH_MOBILE_APP = 2

              # Mobile app campaigns for Display.
              DISPLAY_MOBILE_APP = 3

              # AdWords express campaigns for search.
              SEARCH_EXPRESS = 4

              # AdWords Express campaigns for display.
              DISPLAY_EXPRESS = 5

              # Smart Shopping campaigns.
              SHOPPING_SMART_ADS = 6

              # Gmail Ad campaigns.
              DISPLAY_GMAIL_AD = 7

              # Smart display campaigns.
              DISPLAY_SMART_CAMPAIGN = 8

              # Video Outstream campaigns.
              VIDEO_OUTSTREAM = 9

              # Video TrueView for Action campaigns.
              VIDEO_ACTION = 10

              # Video campaigns with non-skippable video ads.
              VIDEO_NON_SKIPPABLE = 11

              # App Campaign that allows you to easily promote your Android or iOS app
              # across Google's top properties including Search, Play, YouTube, and the
              # Google Display Network.
              APP_CAMPAIGN = 12

              # App Campaign for engagement, focused on driving re-engagement with the
              # app across several of Googles top properties including Search, YouTube,
              # and the Google Display Network.
              APP_CAMPAIGN_FOR_ENGAGEMENT = 13

              # Campaigns specialized for local advertising.
              LOCAL_CAMPAIGN = 14

              # Shopping Comparison Listing campaigns.
              SHOPPING_COMPARISON_LISTING_ADS = 15

              # Standard Smart campaigns.
              SMART_CAMPAIGN = 16

              # Video campaigns with sequence video ads.
              VIDEO_SEQUENCE = 17
            end
          end
        end
      end
    end
  end
end
