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
        module Resources
          # A data sharing connection, allowing the import of third party app analytics
          # into a Google Ads Customer.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the third party app analytics link.
          #     Third party app analytics link resource names have the form:
          #
          #     `customers/{customer_id}/thirdPartyAppAnalyticsLinks/{account_link_id}`
          # @!attribute [r] shareable_link_id
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The shareable link ID that should be provided to the third party when
          #     setting up app analytics. This is able to be regenerated using regenerate
          #     method in the ThirdPartyAppAnalyticsLinkService.
          class ThirdPartyAppAnalyticsLink
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
