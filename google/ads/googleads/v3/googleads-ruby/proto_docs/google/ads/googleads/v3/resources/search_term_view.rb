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
        module Resources
          # A search term view with metrics aggregated by search term at the ad group
          # level.
          # @!attribute [r] resource_name
          #   @return [::String]
          #     Output only. The resource name of the search term view.
          #     Search term view resource names have the form:
          #
          #     `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-base64_search_term}`
          # @!attribute [r] search_term
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The search term.
          # @!attribute [r] ad_group
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The ad group the search term served in.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V3::Enums::SearchTermTargetingStatusEnum::SearchTermTargetingStatus]
          #     Output only. Indicates whether the search term is currently one of your
          #     targeted or excluded keywords.
          class SearchTermView
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
