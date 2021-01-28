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
        module Resources
          # A negative criterion for exclusions at the customer level.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the customer negative criterion.
          #     Customer negative criterion resource names have the form:
          #
          #     `customers/{customer_id}/customerNegativeCriteria/{criterion_id}`
          # @!attribute [r] id
          #   @return [::Google::Protobuf::Int64Value]
          #     Output only. The ID of the criterion.
          # @!attribute [r] type
          #   @return [::Google::Ads::GoogleAds::V4::Enums::CriterionTypeEnum::CriterionType]
          #     Output only. The type of the criterion.
          # @!attribute [rw] content_label
          #   @return [::Google::Ads::GoogleAds::V4::Common::ContentLabelInfo]
          #     Immutable. ContentLabel.
          # @!attribute [rw] mobile_application
          #   @return [::Google::Ads::GoogleAds::V4::Common::MobileApplicationInfo]
          #     Immutable. MobileApplication.
          # @!attribute [rw] mobile_app_category
          #   @return [::Google::Ads::GoogleAds::V4::Common::MobileAppCategoryInfo]
          #     Immutable. MobileAppCategory.
          # @!attribute [rw] placement
          #   @return [::Google::Ads::GoogleAds::V4::Common::PlacementInfo]
          #     Immutable. Placement.
          # @!attribute [rw] youtube_video
          #   @return [::Google::Ads::GoogleAds::V4::Common::YouTubeVideoInfo]
          #     Immutable. YouTube Video.
          # @!attribute [rw] youtube_channel
          #   @return [::Google::Ads::GoogleAds::V4::Common::YouTubeChannelInfo]
          #     Immutable. YouTube Channel.
          class CustomerNegativeCriterion
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
