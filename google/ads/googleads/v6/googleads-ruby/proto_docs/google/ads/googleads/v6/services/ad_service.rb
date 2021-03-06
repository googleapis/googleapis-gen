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
          # Request message for {::Google::Ads::GoogleAds::V6::Services::AdService::Client#get_ad AdService.GetAd}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The resource name of the ad to fetch.
          class GetAdRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V6::Services::AdService::Client#mutate_ads AdService.MutateAds}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. The ID of the customer whose ads are being modified.
          # @!attribute [rw] operations
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::AdOperation>]
          #     Required. The list of operations to perform on individual ads.
          # @!attribute [rw] response_content_type
          #   @return [::Google::Ads::GoogleAds::V6::Enums::ResponseContentTypeEnum::ResponseContentType]
          #     The response content type setting. Determines whether the mutable resource
          #     or just the resource name should be returned post mutation.
          class MutateAdsRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A single update operation on an ad.
          # @!attribute [rw] update_mask
          #   @return [::Google::Protobuf::FieldMask]
          #     FieldMask that determines which resource fields are modified in an update.
          # @!attribute [rw] policy_validation_parameter
          #   @return [::Google::Ads::GoogleAds::V6::Common::PolicyValidationParameter]
          #     Configuration for how policies are validated.
          # @!attribute [rw] update
          #   @return [::Google::Ads::GoogleAds::V6::Resources::Ad]
          #     Update operation: The ad is expected to have a valid resource name
          #     in this format:
          #
          #     `customers/{customer_id}/ads/{ad_id}`
          class AdOperation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for an ad mutate.
          # @!attribute [rw] results
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::MutateAdResult>]
          #     All results for the mutate.
          class MutateAdsResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result for the ad mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     The resource name returned for successful operations.
          # @!attribute [rw] ad
          #   @return [::Google::Ads::GoogleAds::V6::Resources::Ad]
          #     The mutated ad with only mutable fields after mutate. The field will only
          #     be returned when response_content_type is set to "MUTABLE_RESOURCE".
          class MutateAdResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
