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
          # Container for enum describing the possible placements of an asset.
          class AssetFieldTypeEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing the possible placements of an asset.
            module AssetFieldType
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # The asset is linked for use as a headline.
              HEADLINE = 2

              # The asset is linked for use as a description.
              DESCRIPTION = 3

              # The asset is linked for use as mandatory ad text.
              MANDATORY_AD_TEXT = 4

              # The asset is linked for use as a marketing image.
              MARKETING_IMAGE = 5

              # The asset is linked for use as a media bundle.
              MEDIA_BUNDLE = 6

              # The asset is linked for use as a YouTube video.
              YOUTUBE_VIDEO = 7

              # The asset is linked to indicate that a hotels campaign is "Book on
              # Google" enabled.
              BOOK_ON_GOOGLE = 8
            end
          end
        end
      end
    end
  end
end
