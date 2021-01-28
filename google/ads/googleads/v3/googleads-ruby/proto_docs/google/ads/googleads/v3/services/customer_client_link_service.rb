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
        module Services
          # Request message for {::Google::Ads::GoogleAds::V3::Services::CustomerClientLinkService::Client#get_customer_client_link CustomerClientLinkService.GetCustomerClientLink}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The resource name of the customer client link to fetch.
          class GetCustomerClientLinkRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V3::Services::CustomerClientLinkService::Client#mutate_customer_client_link CustomerClientLinkService.MutateCustomerClientLink}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. The ID of the customer whose customer link are being modified.
          # @!attribute [rw] operation
          #   @return [::Google::Ads::GoogleAds::V3::Services::CustomerClientLinkOperation]
          #     Required. The operation to perform on the individual CustomerClientLink.
          class MutateCustomerClientLinkRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A single operation (create, update) on a CustomerClientLink.
          # @!attribute [rw] update_mask
          #   @return [::Google::Protobuf::FieldMask]
          #     FieldMask that determines which resource fields are modified in an update.
          # @!attribute [rw] create
          #   @return [::Google::Ads::GoogleAds::V3::Resources::CustomerClientLink]
          #     Create operation: No resource name is expected for the new link.
          # @!attribute [rw] update
          #   @return [::Google::Ads::GoogleAds::V3::Resources::CustomerClientLink]
          #     Update operation: The link is expected to have a valid resource name.
          class CustomerClientLinkOperation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for a CustomerClientLink mutate.
          # @!attribute [rw] result
          #   @return [::Google::Ads::GoogleAds::V3::Services::MutateCustomerClientLinkResult]
          #     A result that identifies the resource affected by the mutate request.
          class MutateCustomerClientLinkResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result for a single customer client link mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Returned for successful operations.
          class MutateCustomerClientLinkResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
