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
          # Container for enum representing the attribution model that describes how to
          # distribute credit for a particular conversion across potentially many prior
          # interactions.
          class AttributionModelEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # The attribution model that describes how to distribute credit for a
            # particular conversion across potentially many prior interactions.
            module AttributionModel
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Uses external attribution.
              EXTERNAL = 100

              # Attributes all credit for a conversion to its last click.
              GOOGLE_ADS_LAST_CLICK = 101

              # Attributes all credit for a conversion to its first click using Google
              # Search attribution.
              GOOGLE_SEARCH_ATTRIBUTION_FIRST_CLICK = 102

              # Attributes credit for a conversion equally across all of its clicks using
              # Google Search attribution.
              GOOGLE_SEARCH_ATTRIBUTION_LINEAR = 103

              # Attributes exponentially more credit for a conversion to its more recent
              # clicks using Google Search attribution (half-life is 1 week).
              GOOGLE_SEARCH_ATTRIBUTION_TIME_DECAY = 104

              # Attributes 40% of the credit for a conversion to its first and last
              # clicks. Remaining 20% is evenly distributed across all other clicks. This
              # uses Google Search attribution.
              GOOGLE_SEARCH_ATTRIBUTION_POSITION_BASED = 105

              # Flexible model that uses machine learning to determine the appropriate
              # distribution of credit among clicks using Google Search attribution.
              GOOGLE_SEARCH_ATTRIBUTION_DATA_DRIVEN = 106
            end
          end
        end
      end
    end
  end
end
