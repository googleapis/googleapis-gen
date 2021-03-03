# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/pubsub/v1/schema.proto for package 'Google.Cloud.PubSub.V1'
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
require 'google/pubsub/v1/schema_pb'

module Google
  module Cloud
    module PubSub
      module V1
        module SchemaService
          # Service for doing schema-related operations.
          class Service

            include GRPC::GenericService

            self.marshal_class_method = :encode
            self.unmarshal_class_method = :decode
            self.service_name = 'google.pubsub.v1.SchemaService'

            # Creates a schema.
            rpc :CreateSchema, ::Google::Cloud::PubSub::V1::CreateSchemaRequest, ::Google::Cloud::PubSub::V1::Schema
            # Gets a schema.
            rpc :GetSchema, ::Google::Cloud::PubSub::V1::GetSchemaRequest, ::Google::Cloud::PubSub::V1::Schema
            # Lists schemas in a project.
            rpc :ListSchemas, ::Google::Cloud::PubSub::V1::ListSchemasRequest, ::Google::Cloud::PubSub::V1::ListSchemasResponse
            # Deletes a schema.
            rpc :DeleteSchema, ::Google::Cloud::PubSub::V1::DeleteSchemaRequest, ::Google::Protobuf::Empty
            # Validates a schema.
            rpc :ValidateSchema, ::Google::Cloud::PubSub::V1::ValidateSchemaRequest, ::Google::Cloud::PubSub::V1::ValidateSchemaResponse
            # Validates a message against a schema.
            rpc :ValidateMessage, ::Google::Cloud::PubSub::V1::ValidateMessageRequest, ::Google::Cloud::PubSub::V1::ValidateMessageResponse
          end

          Stub = Service.rpc_stub_class
        end
      end
    end
  end
end
