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
        module Errors
          # Container for enum describing possible errors from applying an ad group
          # keyword or a campaign keyword from a keyword plan.
          class KeywordPlanAdGroupKeywordErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible errors from applying a keyword plan ad group
            # keyword or keyword plan campaign keyword.
            module KeywordPlanAdGroupKeywordError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # A keyword or negative keyword has invalid match type.
              INVALID_KEYWORD_MATCH_TYPE = 2

              # A keyword or negative keyword with same text and match type already
              # exists.
              DUPLICATE_KEYWORD = 3

              # Keyword or negative keyword text exceeds the allowed limit.
              KEYWORD_TEXT_TOO_LONG = 4

              # Keyword or negative keyword text has invalid characters or symbols.
              KEYWORD_HAS_INVALID_CHARS = 5

              # Keyword or negative keyword text has too many words.
              KEYWORD_HAS_TOO_MANY_WORDS = 6

              # Keyword or negative keyword has invalid text.
              INVALID_KEYWORD_TEXT = 7

              # Cpc Bid set for negative keyword.
              NEGATIVE_KEYWORD_HAS_CPC_BID = 8
            end
          end
        end
      end
    end
  end
end
