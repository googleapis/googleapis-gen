# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/cloud/asset/v1p1beta1/asset_service.proto for package 'google.cloud.asset.v1p1beta1'
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
require 'google/cloud/asset/v1p1beta1/asset_service_pb'

module Google
  module Cloud
    module Asset
      module V1p1beta1
        module AssetService
          # Asset service definition.
          class Service

            include GRPC::GenericService

            self.marshal_class_method = :encode
            self.unmarshal_class_method = :decode
            self.service_name = 'google.cloud.asset.v1p1beta1.AssetService'

            # Searches all the resources under a given accessible CRM scope
            # (project/folder/organization). This RPC gives callers
            # especially admins the ability to search all the resources under a scope,
            # even if they don't have .get permission of all the resources. Callers
            # should have cloud.assets.SearchAllResources permission on the requested
            # scope, otherwise it will be rejected.
            rpc :SearchAllResources, ::Google::Cloud::Asset::V1p1beta1::SearchAllResourcesRequest, ::Google::Cloud::Asset::V1p1beta1::SearchAllResourcesResponse
            # Searches all the IAM policies under a given accessible CRM scope
            # (project/folder/organization). This RPC gives callers
            # especially admins the ability to search all the IAM policies under a scope,
            # even if they don't have .getIamPolicy permission of all the IAM policies.
            # Callers should have cloud.assets.SearchAllIamPolicies permission on the
            # requested scope, otherwise it will be rejected.
            rpc :SearchAllIamPolicies, ::Google::Cloud::Asset::V1p1beta1::SearchAllIamPoliciesRequest, ::Google::Cloud::Asset::V1p1beta1::SearchAllIamPoliciesResponse
          end

          Stub = Service.rpc_stub_class
        end
      end
    end
  end
end
