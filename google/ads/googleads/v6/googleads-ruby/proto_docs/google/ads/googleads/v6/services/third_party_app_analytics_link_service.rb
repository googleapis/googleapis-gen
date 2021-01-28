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
        module Services
          # Request message for
          # {::Google::Ads::GoogleAds::V6::Services::ThirdPartyAppAnalyticsLinkService::Client#get_third_party_app_analytics_link ThirdPartyAppAnalyticsLinkService.GetThirdPartyAppAnalyticsLink}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Resource name of the third party app analytics link.
          class GetThirdPartyAppAnalyticsLinkRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for
          # {::Google::Ads::GoogleAds::V6::Services::ThirdPartyAppAnalyticsLinkService::Client#regenerate_shareable_link_id ThirdPartyAppAnalyticsLinkService.RegenerateShareableLinkId}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Resource name of the third party app analytics link.
          class RegenerateShareableLinkIdRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for
          # {::Google::Ads::GoogleAds::V6::Services::ThirdPartyAppAnalyticsLinkService::Client#regenerate_shareable_link_id ThirdPartyAppAnalyticsLinkService.RegenerateShareableLinkId}.
          class RegenerateShareableLinkIdResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
