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
        module Enums
          # Container for enum describing possible data types for an extension in an
          # extension setting.
          class ExtensionTypeEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible data types for an extension in an extension setting.
            module ExtensionType
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # None.
              NONE = 2

              # App.
              APP = 3

              # Call.
              CALL = 4

              # Callout.
              CALLOUT = 5

              # Message.
              MESSAGE = 6

              # Price.
              PRICE = 7

              # Promotion.
              PROMOTION = 8

              # Sitelink.
              SITELINK = 10

              # Structured snippet.
              STRUCTURED_SNIPPET = 11

              # Location.
              LOCATION = 12

              # Affiliate location.
              AFFILIATE_LOCATION = 13

              # Hotel callout
              HOTEL_CALLOUT = 15
            end
          end
        end
      end
    end
  end
end
