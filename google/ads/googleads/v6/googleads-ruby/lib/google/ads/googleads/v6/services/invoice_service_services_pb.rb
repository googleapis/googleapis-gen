# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/ads/googleads/v6/services/invoice_service.proto for package 'Google.Ads.GoogleAds.V6.Services'
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
require 'google/ads/googleads/v6/services/invoice_service_pb'

module Google
  module Ads
    module GoogleAds
      module V6
        module Services
          module InvoiceService
            # Proto file describing the Invoice service.
            #
            # A service to fetch invoices issued for a billing setup during a given month.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.ads.googleads.v6.services.InvoiceService'

              # Returns all invoices associated with a billing setup, for a given month.
              rpc :ListInvoices, ::Google::Ads::GoogleAds::V6::Services::ListInvoicesRequest, ::Google::Ads::GoogleAds::V6::Services::ListInvoicesResponse
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
