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
        module Resources
          # A feed placeholder view.
          # @!attribute [r] resource_name
          #   @return [::String]
          #     Output only. The resource name of the feed placeholder view.
          #     Feed placeholder view resource names have the form:
          #
          #     `customers/{customer_id}/feedPlaceholderViews/{placeholder_type}`
          # @!attribute [r] placeholder_type
          #   @return [::Google::Ads::GoogleAds::V6::Enums::PlaceholderTypeEnum::PlaceholderType]
          #     Output only. The placeholder type of the feed placeholder view.
          class FeedPlaceholderView
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
