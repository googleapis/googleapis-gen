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
          # A click view with metrics aggregated at each click level, including both
          # valid and invalid clicks. For non-Search campaigns, metrics.clicks
          # represents the number of valid and invalid interactions.
          # Queries including ClickView must have a filter limiting the results to one
          # day and can be requested for dates back to 90 days before the time of the
          # request.
          # @!attribute [r] resource_name
          #   @return [::String]
          #     Output only. The resource name of the click view.
          #     Click view resource names have the form:
          #
          #     `customers/{customer_id}/clickViews/{date (yyyy-MM-dd)}~{gclid}`
          # @!attribute [r] gclid
          #   @return [::String]
          #     Output only. The Google Click ID.
          # @!attribute [r] area_of_interest
          #   @return [::Google::Ads::GoogleAds::V6::Common::ClickLocation]
          #     Output only. The location criteria matching the area of interest associated with the
          #     impression.
          # @!attribute [r] location_of_presence
          #   @return [::Google::Ads::GoogleAds::V6::Common::ClickLocation]
          #     Output only. The location criteria matching the location of presence associated with the
          #     impression.
          # @!attribute [r] page_number
          #   @return [::Integer]
          #     Output only. Page number in search results where the ad was shown.
          # @!attribute [r] ad_group_ad
          #   @return [::String]
          #     Output only. The associated ad.
          # @!attribute [r] campaign_location_target
          #   @return [::String]
          #     Output only. The associated campaign location target, if one exists.
          # @!attribute [r] user_list
          #   @return [::String]
          #     Output only. The associated user list, if one exists.
          class ClickView
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
