# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/ads/googleads/v4/services/ad_group_criterion_label_service.proto for package 'Google.Ads.GoogleAds.V4.Services'
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
require 'google/ads/googleads/v4/services/ad_group_criterion_label_service_pb'

module Google
  module Ads
    module GoogleAds
      module V4
        module Services
          module AdGroupCriterionLabelService
            # Proto file describing the Ad Group Criterion Label service.
            #
            # Service to manage labels on ad group criteria.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.ads.googleads.v4.services.AdGroupCriterionLabelService'

              # Returns the requested ad group criterion label in full detail.
              rpc :GetAdGroupCriterionLabel, ::Google::Ads::GoogleAds::V4::Services::GetAdGroupCriterionLabelRequest, ::Google::Ads::GoogleAds::V4::Resources::AdGroupCriterionLabel
              # Creates and removes ad group criterion labels.
              # Operation statuses are returned.
              rpc :MutateAdGroupCriterionLabels, ::Google::Ads::GoogleAds::V4::Services::MutateAdGroupCriterionLabelsRequest, ::Google::Ads::GoogleAds::V4::Services::MutateAdGroupCriterionLabelsResponse
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
