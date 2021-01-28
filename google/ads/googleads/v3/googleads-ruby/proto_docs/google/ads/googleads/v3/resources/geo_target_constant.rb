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
          # A geo target constant.
          # @!attribute [r] resource_name
          #   @return [::String]
          #     Output only. The resource name of the geo target constant.
          #     Geo target constant resource names have the form:
          #
          #     `geoTargetConstants/{geo_target_constant_id}`
          # @!attribute [r] id
          #   @return [::Google::Protobuf::Int64Value]
          #     Output only. The ID of the geo target constant.
          # @!attribute [r] name
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. Geo target constant English name.
          # @!attribute [r] country_code
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The ISO-3166-1 alpha-2 country code that is associated with the target.
          # @!attribute [r] target_type
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. Geo target constant target type.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V3::Enums::GeoTargetConstantStatusEnum::GeoTargetConstantStatus]
          #     Output only. Geo target constant status.
          # @!attribute [r] canonical_name
          #   @return [::Google::Protobuf::StringValue]
          #     Output only. The fully qualified English name, consisting of the target's name and that
          #     of its parent and country.
          class GeoTargetConstant
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
