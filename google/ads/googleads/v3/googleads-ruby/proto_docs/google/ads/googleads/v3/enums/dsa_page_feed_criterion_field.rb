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
      module V3
        module Enums
          # Values for Dynamic Search Ad Page Feed criterion fields.
          class DsaPageFeedCriterionFieldEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible values for Dynamic Search Ad Page Feed criterion fields.
            module DsaPageFeedCriterionField
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Data Type: URL or URL_LIST. URL of the web page you want to target.
              PAGE_URL = 2

              # Data Type: STRING_LIST. The labels that will help you target ads within
              # your page feed.
              LABEL = 3
            end
          end
        end
      end
    end
  end
end
