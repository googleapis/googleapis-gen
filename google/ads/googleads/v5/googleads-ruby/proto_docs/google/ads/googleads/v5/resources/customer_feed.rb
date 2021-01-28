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
          # A customer feed.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the customer feed.
          #     Customer feed resource names have the form:
          #
          #     `customers/{customer_id}/customerFeeds/{feed_id}`
          # @!attribute [rw] feed
          #   @return [::Google::Protobuf::StringValue]
          #     Immutable. The feed being linked to the customer.
          # @!attribute [rw] placeholder_types
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Enums::PlaceholderTypeEnum::PlaceholderType>]
          #     Indicates which placeholder types the feed may populate under the connected
          #     customer. Required.
          # @!attribute [rw] matching_function
          #   @return [::Google::Ads::GoogleAds::V5::Common::MatchingFunction]
          #     Matching function associated with the CustomerFeed.
          #     The matching function is used to filter the set of feed items selected.
          #     Required.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V5::Enums::FeedLinkStatusEnum::FeedLinkStatus]
          #     Output only. Status of the customer feed.
          #     This field is read-only.
          class CustomerFeed
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
