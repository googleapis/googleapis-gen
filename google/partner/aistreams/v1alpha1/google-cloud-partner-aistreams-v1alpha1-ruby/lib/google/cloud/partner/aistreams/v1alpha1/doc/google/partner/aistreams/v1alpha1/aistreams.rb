# Copyright 2020 Google LLC
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

module Google
  module Partner
    module Aistreams
      module V1alpha1
        # Cluster resource.
        # @!attribute [rw] name
        #   @return [String]
        #     The name of the cluster. The format of cluster is:
        #     projects/<projectid>/locations/<locationid>/clusters/<clusterid>.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time at which this cluster was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time at which this cluster was updated.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Labels with user-defined metadata.
        # @!attribute [rw] certificate
        #   @return [String]
        #     Output only. The certificate for creating the secure connection between the
        #     client and the AI Streams data plane.
        # @!attribute [rw] service_endpoint
        #   @return [String]
        #     Output only. The endpoint of the data plane cluster.
        class Cluster; end

        # Request message for 'ListClusters'.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent that owns the collection of Clusters.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of Clusters to return.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Page token received from a previous `ListClusters` call. Provide this to
        #     retrieve the subsequent page. When paginating, all other parameters
        #     provided to `ListClusters` must match the call that provided the page
        #     token.
        # @!attribute [rw] filter
        #   @return [String]
        #     Filter request.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Order by fields for the result.
        class ListClustersRequest; end

        # Response message from 'ListClusters'.
        # @!attribute [rw] clusters
        #   @return [Array<Google::Partner::Aistreams::V1alpha1::Cluster>]
        #     List of clusters.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token, which can be sent as `page_token` to retrieve the next page.
        #     If this field is omitted, there are no subsequent pages.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Locations that could not be reached.
        class ListClustersResponse; end

        # Request message for 'GetCluster'.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the Cluster resource to get.
        class GetClusterRequest; end

        # Request message for 'CreateCluster'.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent that owns the collection of Clusters.
        # @!attribute [rw] cluster_id
        #   @return [String]
        #     Required. The cluster identifier.
        # @!attribute [rw] cluster
        #   @return [Google::Partner::Aistreams::V1alpha1::Cluster]
        #     Required. The cluster resource to create.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and the
        #     request times out. If you make the request again with the same request ID,
        #     the server can check if original operation with the same request ID was
        #     received, and if so, will ignore the second request. This prevents clients
        #     from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class CreateClusterRequest; end

        # Request message for 'UpdateCluster'.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. Field mask is used to specify the fields to be overwritten in the
        #     Cluster resource by the update.
        #     The fields specified in the update_mask are relative to the resource, not
        #     the full request. A field will be overwritten if it is in the mask. If the
        #     user does not provide a mask then all fields will be overwritten.
        # @!attribute [rw] cluster
        #   @return [Google::Partner::Aistreams::V1alpha1::Cluster]
        #     Required. The Cluster resource to update.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and the
        #     request times out. If you make the request again with the same request ID,
        #     the server can check if original operation with the same request ID was
        #     received, and if so, will ignore the second request. This prevents clients
        #     from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class UpdateClusterRequest; end

        # Request message for 'DeleteCluster'.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of cluster to delete.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes after the first request.
        #
        #     For example, consider a situation where you make an initial request and the
        #     request times out. If you make the request again with the same request ID,
        #     the server can check if original operation with the same request ID was
        #     received, and if so, will ignore the second request. This prevents clients
        #     from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class DeleteClusterRequest; end

        # Stream resource.
        # @!attribute [rw] name
        #   @return [String]
        #     The name of the stream. The format for the full name is:
        #     projects/<projectid>/location/<locationid>/clusters/<clusterid>/streams/<streamid>.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time at which this Stream was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time at which this Stream was updated.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     The labels of the stream.
        class Stream; end

        # Request message for 'ListStreams'.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent that owns the collection of the Streams.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of Streams to return.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Page token received from a previous `ListStreams` call. Provide this to
        #     retrieve the subsequent page. When paginating, all other parameters
        #     provided to `ListClusters` must match the call that provided the page
        #     token.
        # @!attribute [rw] filter
        #   @return [String]
        #     Filter request.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Order by fields for the result.
        class ListStreamsRequest; end

        # Response message from 'ListStreams'.
        # @!attribute [rw] streams
        #   @return [Array<Google::Partner::Aistreams::V1alpha1::Stream>]
        #     List of the streams.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token, which can be sent as `page_token` to retrieve the next page.
        #     If this field is omitted, there are no subsequent pages.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Locations that could not be reached.
        class ListStreamsResponse; end

        # Request message for 'GetStream'.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the stream.
        class GetStreamRequest; end

        # Request message for 'CreateStream'.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent that owns the collection of streams.
        # @!attribute [rw] stream_id
        #   @return [String]
        #     Required. The stream identifier.
        # @!attribute [rw] stream
        #   @return [Google::Partner::Aistreams::V1alpha1::Stream]
        #     Required. The stream to create.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class CreateStreamRequest; end

        # Request message for 'UpdateStream'.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. Field mask is used to specify the fields to be overwritten in the
        #     Stream resource by the update.
        #     The fields specified in the update_mask are relative to the resource, not
        #     the full request. A field will be overwritten if it is in the mask. If the
        #     user does not provide a mask then all fields will be overwritten.
        # @!attribute [rw] stream
        #   @return [Google::Partner::Aistreams::V1alpha1::Stream]
        #     Required. The stream resource to update.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class UpdateStreamRequest; end

        # Request message for 'DeleteStream'.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the stream.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique
        #     request ID so that if you must retry your request, the server will know to
        #     ignore the request if it has already been completed. The server will
        #     guarantee that for at least 60 minutes after the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class DeleteStreamRequest; end

        # Represents the metadata of the long-running operation.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the operation was created.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the operation finished running.
        # @!attribute [rw] target
        #   @return [String]
        #     Output only. Server-defined resource path for the target of the operation.
        # @!attribute [rw] verb
        #   @return [String]
        #     Output only. Name of the verb executed by the operation.
        # @!attribute [rw] status_message
        #   @return [String]
        #     Output only. Human-readable status of the operation, if any.
        # @!attribute [rw] requested_cancellation
        #   @return [true, false]
        #     Output only. Identifies whether the user has requested cancellation
        #     of the operation. Operations that have successfully been cancelled
        #     have {Operation#error} value with a
        #     {Google::Rpc::Status#code} of 1, corresponding to
        #     `Code.CANCELLED`.
        # @!attribute [rw] api_version
        #   @return [String]
        #     Output only. API version used to start the operation.
        class OperationMetadata; end
      end
    end
  end
end