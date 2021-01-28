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
          # Container for enum that determines if the described artifact is a resource
          # or a field, and if it is a field, when it segments search queries.
          class GoogleAdsFieldCategoryEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # The category of the artifact.
            module GoogleAdsFieldCategory
              # Unspecified
              UNSPECIFIED = 0

              # Unknown
              UNKNOWN = 1

              # The described artifact is a resource.
              RESOURCE = 2

              # The described artifact is a field and is an attribute of a resource.
              # Including a resource attribute field in a query may segment the query if
              # the resource to which it is attributed segments the resource found in
              # the FROM clause.
              ATTRIBUTE = 3

              # The described artifact is a field and always segments search queries.
              SEGMENT = 5

              # The described artifact is a field and is a metric. It never segments
              # search queries.
              METRIC = 6
            end
          end
        end
      end
    end
  end
end
