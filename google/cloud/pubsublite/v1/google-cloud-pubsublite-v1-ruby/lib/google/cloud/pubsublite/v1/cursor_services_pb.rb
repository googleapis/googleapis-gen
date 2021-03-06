# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/cloud/pubsublite/v1/cursor.proto for package 'Google.Cloud.PubSubLite.V1'
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
require 'google/cloud/pubsublite/v1/cursor_pb'

module Google
  module Cloud
    module PubSubLite
      module V1
        module CursorService
          # The service that a subscriber client application uses to manage committed
          # cursors while receiving messsages. A cursor represents a subscriber's
          # progress within a topic partition for a given subscription.
          class Service

            include GRPC::GenericService

            self.marshal_class_method = :encode
            self.unmarshal_class_method = :decode
            self.service_name = 'google.cloud.pubsublite.v1.CursorService'

            # Establishes a stream with the server for managing committed cursors.
            rpc :StreamingCommitCursor, stream(::Google::Cloud::PubSubLite::V1::StreamingCommitCursorRequest), stream(::Google::Cloud::PubSubLite::V1::StreamingCommitCursorResponse)
            # Updates the committed cursor.
            rpc :CommitCursor, ::Google::Cloud::PubSubLite::V1::CommitCursorRequest, ::Google::Cloud::PubSubLite::V1::CommitCursorResponse
            # Returns all committed cursor information for a subscription.
            rpc :ListPartitionCursors, ::Google::Cloud::PubSubLite::V1::ListPartitionCursorsRequest, ::Google::Cloud::PubSubLite::V1::ListPartitionCursorsResponse
          end

          Stub = Service.rpc_stub_class
        end
      end
    end
  end
end
