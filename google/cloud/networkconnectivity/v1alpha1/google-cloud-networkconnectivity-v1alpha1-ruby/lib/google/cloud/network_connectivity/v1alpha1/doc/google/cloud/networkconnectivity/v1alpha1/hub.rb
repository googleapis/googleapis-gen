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
  module Cloud
    module Networkconnectivity
      module V1alpha1
        # The Connectivity Hub is a hub-and-spoke abstraction for network connectivity
        # management in Google Cloud. It aims to reduce operational complexity
        # through a simple, centralized connectivity management model. Here is the
        # resource message of a Hub.
        # @!attribute [rw] name
        #   @return [String]
        #     Immutable. The name of a Hub resource.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Time when the Hub was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Time when the Hub was updated.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     User-defined labels.
        # @!attribute [rw] description
        #   @return [String]
        #     Short description of the hub resource.
        # @!attribute [rw] spokes
        #   @return [Array<String>]
        #     Output only. A list of the URIs of all attached spokes
        # @!attribute [rw] unique_id
        #   @return [String]
        #     Output only. Google-generated UUID for this resource. This is unique across all Hub
        #     resources. If a Hub resource is deleted and another with the same name is
        #     created, it gets a different unique_id.
        class Hub; end

        # A Spoke is an  abstraction of a network attachment being attached
        # to a Hub. A Spoke can be underlying a VPN tunnel, a
        # VLAN (interconnect) attachment, a Router appliance, etc.
        # @!attribute [rw] name
        #   @return [String]
        #     Immutable. The name of a Spoke resource.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time when the Spoke was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time when the Spoke was updated.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     User-defined labels.
        # @!attribute [rw] description
        #   @return [String]
        #     Short description of the spoke resource
        # @!attribute [rw] hub
        #   @return [String]
        #     The resource URL of the hub resource that the spoke is attached to
        # @!attribute [rw] linked_vpn_tunnels
        #   @return [Array<String>]
        #     The URIs of linked VPN tunnel resources
        # @!attribute [rw] linked_interconnect_attachments
        #   @return [Array<String>]
        #     The URIs of linked interconnect attachment resources
        # @!attribute [rw] linked_router_appliance_instances
        #   @return [Array<Google::Cloud::Networkconnectivity::V1alpha1::RouterApplianceInstance>]
        #     The URIs of linked Router appliance resources
        # @!attribute [rw] unique_id
        #   @return [String]
        #     Output only. Google-generated UUID for this resource. This is unique across all Spoke
        #     resources. If a Spoke resource is deleted and another with the same name is
        #     created, it gets a different unique_id.
        class Spoke; end

        # Request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::ListHubs HubService::ListHubs} method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent resource's name.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of results per page that should be returned.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The page token.
        # @!attribute [rw] filter
        #   @return [String]
        #     A filter expression that filters the results listed in the response.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Sort the results by a certain order.
        class ListHubsRequest; end

        # Response for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::ListHubs HubService::ListHubs} method.
        # @!attribute [rw] hubs
        #   @return [Array<Google::Cloud::Networkconnectivity::V1alpha1::Hub>]
        #     Hubs to be returned.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     The next pagination token in the List response. It should be used as
        #     page_token for the following request. An empty value means no more result.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Locations that could not be reached.
        class ListHubsResponse; end

        # Request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::GetHub HubService::GetHub} method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Name of the Hub resource to get.
        class GetHubRequest; end

        # Request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::CreateHub HubService::CreateHub} method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent resource's name of the Hub.
        # @!attribute [rw] hub_id
        #   @return [String]
        #     Optional. Unique id for the Hub to create.
        # @!attribute [rw] hub
        #   @return [Google::Cloud::Networkconnectivity::V1alpha1::Hub]
        #     Required. Initial values for a new Hub.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class CreateHubRequest; end

        # Request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::UpdateHub HubService::UpdateHub} method.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Optional. Field mask is used to specify the fields to be overwritten in the
        #     Hub resource by the update.
        #     The fields specified in the update_mask are relative to the resource, not
        #     the full request. A field will be overwritten if it is in the mask. If the
        #     user does not provide a mask then all fields will be overwritten.
        # @!attribute [rw] hub
        #   @return [Google::Cloud::Networkconnectivity::V1alpha1::Hub]
        #     Required. The state that the Hub should be in after the update.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class UpdateHubRequest; end

        # The request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::DeleteHub HubService::DeleteHub}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the Hub to delete.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes after the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class DeleteHubRequest; end

        # The request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::ListSpokes HubService::ListSpokes}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent's resource name.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of results per page that should be returned.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The page token.
        # @!attribute [rw] filter
        #   @return [String]
        #     A filter expression that filters the results listed in the response.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Sort the results by a certain order.
        class ListSpokesRequest; end

        # The response for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::ListSpokes HubService::ListSpokes}.
        # @!attribute [rw] spokes
        #   @return [Array<Google::Cloud::Networkconnectivity::V1alpha1::Spoke>]
        #     Spokes to be returned.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     The next pagination token in the List response. It should be used as
        #     page_token for the following request. An empty value means no more result.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Locations that could not be reached.
        class ListSpokesResponse; end

        # The request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::GetSpoke HubService::GetSpoke}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of Spoke resource.
        class GetSpokeRequest; end

        # The request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::CreateSpoke HubService::CreateSpoke}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent's resource name of the Spoke.
        # @!attribute [rw] spoke_id
        #   @return [String]
        #     Optional. Unique id for the Spoke to create.
        # @!attribute [rw] spoke
        #   @return [Google::Cloud::Networkconnectivity::V1alpha1::Spoke]
        #     Required. Initial values for a new Hub.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class CreateSpokeRequest; end

        # Request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::UpdateSpoke HubService::UpdateSpoke} method.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Optional. Field mask is used to specify the fields to be overwritten in the
        #     Spoke resource by the update.
        #     The fields specified in the update_mask are relative to the resource, not
        #     the full request. A field will be overwritten if it is in the mask. If the
        #     user does not provide a mask then all fields will be overwritten.
        # @!attribute [rw] spoke
        #   @return [Google::Cloud::Networkconnectivity::V1alpha1::Spoke]
        #     Required. The state that the Spoke should be in after the update.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes since the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class UpdateSpokeRequest; end

        # The request for {Google::Cloud::Networkconnectivity::V1alpha1::HubService::DeleteSpoke HubService::DeleteSpoke}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the Spoke to delete.
        # @!attribute [rw] request_id
        #   @return [String]
        #     Optional. An optional request ID to identify requests. Specify a unique request ID
        #     so that if you must retry your request, the server will know to ignore
        #     the request if it has already been completed. The server will guarantee
        #     that for at least 60 minutes after the first request.
        #
        #     For example, consider a situation where you make an initial request and t
        #     he request times out. If you make the request again with the same request
        #     ID, the server can check if original operation with the same request ID
        #     was received, and if so, will ignore the second request. This prevents
        #     clients from accidentally creating duplicate commitments.
        #
        #     The request ID must be a valid UUID with the exception that zero UUID is
        #     not supported (00000000-0000-0000-0000-000000000000).
        class DeleteSpokeRequest; end

        # RouterAppliance represents a Router appliance which is specified by a VM URI
        # and a NIC address.
        # @!attribute [rw] virtual_machine
        #   @return [String]
        #     The URI of the virtual machine resource
        # @!attribute [rw] ip_address
        #   @return [String]
        #     The IP address of the network interface to use for peering.
        # @!attribute [rw] network_interface
        #   @return [String]
        class RouterApplianceInstance; end
      end
    end
  end
end