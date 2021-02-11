# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/ads/googleads/v4/services/geo_target_constant_service.proto for package 'Google.Ads.GoogleAds.V4.Services'
# Original file comments:
# Copyright 2021 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

require 'grpc'
require 'google/ads/googleads/v4/services/geo_target_constant_service_pb'

module Google
  module Ads
    module GoogleAds
      module V4
        module Services
          module GeoTargetConstantService
            # Proto file describing the Geo target constant service.
            #
            # Service to fetch geo target constants.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.ads.googleads.v4.services.GeoTargetConstantService'

              # Returns the requested geo target constant in full detail.
              rpc :GetGeoTargetConstant, ::Google::Ads::GoogleAds::V4::Services::GetGeoTargetConstantRequest, ::Google::Ads::GoogleAds::V4::Resources::GeoTargetConstant
              # Returns GeoTargetConstant suggestions by location name or by resource name.
              rpc :SuggestGeoTargetConstants, ::Google::Ads::GoogleAds::V4::Services::SuggestGeoTargetConstantsRequest, ::Google::Ads::GoogleAds::V4::Services::SuggestGeoTargetConstantsResponse
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
