# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/ads/googleads/v6/services/campaign_audience_view_service.proto for package 'Google.Ads.GoogleAds.V6.Services'
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
require 'google/ads/googleads/v6/services/campaign_audience_view_service_pb'

module Google
  module Ads
    module GoogleAds
      module V6
        module Services
          module CampaignAudienceViewService
            # Proto file describing the Campaign Audience View service.
            #
            # Service to manage campaign audience views.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.ads.googleads.v6.services.CampaignAudienceViewService'

              # Returns the requested campaign audience view in full detail.
              rpc :GetCampaignAudienceView, ::Google::Ads::GoogleAds::V6::Services::GetCampaignAudienceViewRequest, ::Google::Ads::GoogleAds::V6::Resources::CampaignAudienceView
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
