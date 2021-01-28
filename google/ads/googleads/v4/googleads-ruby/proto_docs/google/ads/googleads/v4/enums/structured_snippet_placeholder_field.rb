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
          # Values for Structured Snippet placeholder fields.
          class StructuredSnippetPlaceholderFieldEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible values for Structured Snippet placeholder fields.
            module StructuredSnippetPlaceholderField
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Data Type: STRING. The category of snippet of your products/services.
              # Must match exactly one of the predefined structured snippets headers.
              # For a list, visit
              # https://developers.google.com/adwords/api/docs/appendix/structured-snippet-headers
              HEADER = 2

              # Data Type: STRING_LIST. Text values that describe your products/services.
              # All text must be family safe. Special or non-ASCII characters are not
              # permitted. A snippet can be at most 25 characters.
              SNIPPETS = 3
            end
          end
        end
      end
    end
  end
end
