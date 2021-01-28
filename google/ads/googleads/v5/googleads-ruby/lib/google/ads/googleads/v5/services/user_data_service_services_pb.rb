# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/ads/googleads/v5/services/user_data_service.proto for package 'Google.Ads.GoogleAds.V5.Services'
# Original file comments:
# Copyright 2020 Google LLC
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
require 'google/ads/googleads/v5/services/user_data_service_pb'

module Google
  module Ads
    module GoogleAds
      module V5
        module Services
          module UserDataService
            # Proto file describing the UserDataService.
            #
            # Service to manage user data uploads.
            # Accessible only to customers on the allow-list.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.ads.googleads.v5.services.UserDataService'

              # Uploads the given user data.
              rpc :UploadUserData, ::Google::Ads::GoogleAds::V5::Services::UploadUserDataRequest, ::Google::Ads::GoogleAds::V5::Services::UploadUserDataResponse
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
