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
    module Memcache
      module V1
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Unique name of the resource in this scope including project and
        #     location using the form:
        #         `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
        #
        #     Note: Memcached instances are managed and addressed at regional level so
        #     location_id here refers to a GCP region; however, users may choose which
        #     zones Memcached nodes within an instances should be provisioned in.
        #     Refer to [zones] field for more details.
        # @!attribute [rw] display_name
        #   @return [String]
        #     User provided name for the instance only used for display
        #     purposes. Cannot be more than 80 characters.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Resource labels to represent user-provided metadata.
        #     Refer to cloud documentation on labels for more details.
        #     https://cloud.google.com/compute/docs/labeling-resources
        # @!attribute [rw] authorized_network
        #   @return [String]
        #     The full name of the Google Compute Engine
        #     [network](https://cloud.google.com/compute/docs/networks-and-firewalls#networks) to which the
        #     instance is connected. If left unspecified, the `default` network
        #     will be used.
        # @!attribute [rw] zones
        #   @return [Array<String>]
        #     Zones where Memcached nodes should be provisioned in.
        #     Memcached nodes will be equally distributed across these zones. If not
        #     provided, the service will by default create nodes in all zones in the
        #     region for the instance.
        # @!attribute [rw] node_count
        #   @return [Integer]
        #     Required. Number of nodes in the Memcached instance.
        # @!attribute [rw] node_config
        #   @return [Google::Cloud::Memcache::V1::Instance::NodeConfig]
        #     Required. Configuration for Memcached nodes.
        # @!attribute [rw] memcache_version
        #   @return [Google::Cloud::Memcache::V1::MemcacheVersion]
        #     The major version of Memcached software.
        #     If not provided, latest supported version will be used. Currently the
        #     latest supported major version is MEMCACHE_1_5.
        #     The minor version will be automatically determined by our system based on
        #     the latest supported minor version.
        # @!attribute [rw] parameters
        #   @return [Google::Cloud::Memcache::V1::MemcacheParameters]
        #     Optional: User defined parameters to apply to the memcached process
        #     on each node.
        # @!attribute [rw] memcache_nodes
        #   @return [Array<Google::Cloud::Memcache::V1::Instance::Node>]
        #     Output only. List of Memcached nodes.
        #     Refer to [Node] message for more details.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the instance was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the instance was updated.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Memcache::V1::Instance::State]
        #     Output only. The state of this Memcached instance.
        # @!attribute [rw] memcache_full_version
        #   @return [String]
        #     Output only. The full version of memcached server running on this instance.
        #     System automatically determines the full memcached version for an instance
        #     based on the input MemcacheVersion.
        #     The full version format will be "memcached-1.5.16".
        # @!attribute [rw] instance_messages
        #   @return [Array<Google::Cloud::Memcache::V1::Instance::InstanceMessage>]
        #     List of messages that describe current statuses of memcached instance.
        # @!attribute [rw] discovery_endpoint
        #   @return [String]
        #     Output only. Endpoint for Discovery API
        class Instance
          # Configuration for a Memcached Node.
          # @!attribute [rw] cpu_count
          #   @return [Integer]
          #     Required. Number of cpus per Memcached node.
          # @!attribute [rw] memory_size_mb
          #   @return [Integer]
          #     Required. Memory size in MiB for each Memcached node.
          class NodeConfig; end

          # @!attribute [rw] node_id
          #   @return [String]
          #     Output only. Identifier of the Memcached node. The node id does not
          #     include project or location like the Memcached instance name.
          # @!attribute [rw] zone
          #   @return [String]
          #     Output only. Location (GCP Zone) for the Memcached node.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Memcache::V1::Instance::Node::State]
          #     Output only. Current state of the Memcached node.
          # @!attribute [rw] host
          #   @return [String]
          #     Output only. Hostname or IP address of the Memcached node used by the
          #     clients to connect to the Memcached server on this node.
          # @!attribute [rw] port
          #   @return [Integer]
          #     Output only. The port number of the Memcached server on this node.
          # @!attribute [rw] parameters
          #   @return [Google::Cloud::Memcache::V1::MemcacheParameters]
          #     User defined parameters currently applied to the node.
          class Node
            # Different states of a Memcached node.
            module State
              # Node state is not set.
              STATE_UNSPECIFIED = 0

              # Node is being created.
              CREATING = 1

              # Node has been created and ready to be used.
              READY = 2

              # Node is being deleted.
              DELETING = 3

              # Node is being updated.
              UPDATING = 4
            end
          end

          # @!attribute [rw] code
          #   @return [Google::Cloud::Memcache::V1::Instance::InstanceMessage::Code]
          #     A code that correspond to one type of user-facing message.
          # @!attribute [rw] message
          #   @return [String]
          #     Message on memcached instance which will be exposed to users.
          class InstanceMessage
            module Code
              # Message Code not set.
              CODE_UNSPECIFIED = 0

              # Memcached nodes are distributed unevenly.
              ZONE_DISTRIBUTION_UNBALANCED = 1
            end
          end

          # Different states of a Memcached instance.
          module State
            # State not set.
            STATE_UNSPECIFIED = 0

            # Memcached instance is being created.
            CREATING = 1

            # Memcached instance has been created and ready to be used.
            READY = 2

            # Memcached instance is being deleted.
            DELETING = 4

            # Memcached instance is going through maintenance, e.g. data plane rollout.
            PERFORMING_MAINTENANCE = 5
          end
        end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::ListInstances ListInstances}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The resource name of the instance location using the form:
        #         `projects/{project_id}/locations/{location_id}`
        #     where `location_id` refers to a GCP region
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The maximum number of items to return.
        #
        #     If not specified, a default value of 1000 will be used by the service.
        #     Regardless of the page_size value, the response may include a partial list
        #     and a caller should only rely on response's
        #     {CloudMemcache::ListInstancesResponse#next_page_token next_page_token}
        #     to determine if there are more instances left to be queried.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The next_page_token value returned from a previous List request,
        #     if any.
        # @!attribute [rw] filter
        #   @return [String]
        #     List filter. For example, exclude all Memcached instances with name as
        #     my-instance by specifying "name != my-instance".
        # @!attribute [rw] order_by
        #   @return [String]
        #     Sort results. Supported values are "name", "name desc" or "" (unsorted).
        class ListInstancesRequest; end

        # Response for {Google::Cloud::Memcache::V1::CloudMemcache::ListInstances ListInstances}.
        # @!attribute [rw] instances
        #   @return [Array<Google::Cloud::Memcache::V1::Instance>]
        #     A list of Memcached instances in the project in the specified location,
        #     or across all locations.
        #
        #     If the `location_id` in the parent field of the request is "-", all regions
        #     available to the project are queried, and the results aggregated.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results, or empty if there are no more
        #     results in the list.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Locations that could not be reached.
        class ListInstancesResponse; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::GetInstance GetInstance}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Memcached instance resource name in the format:
        #         `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
        #     where `location_id` refers to a GCP region
        class GetInstanceRequest; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::CreateInstance CreateInstance}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The resource name of the instance location using the form:
        #         `projects/{project_id}/locations/{location_id}`
        #     where `location_id` refers to a GCP region
        # @!attribute [rw] instance_id
        #   @return [String]
        #     Required. The logical name of the Memcached instance in the user
        #     project with the following restrictions:
        #
        #     * Must contain only lowercase letters, numbers, and hyphens.
        #     * Must start with a letter.
        #     * Must be between 1-40 characters.
        #     * Must end with a number or a letter.
        #     * Must be unique within the user project / location
        #
        #     If any of the above are not met, will raise an invalid argument error.
        # @!attribute [rw] instance
        #   @return [Google::Cloud::Memcache::V1::Instance]
        #     Required. A Memcached Instance
        class CreateInstanceRequest; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::UpdateInstance UpdateInstance}.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. Mask of fields to update.
        #     * `displayName`
        # @!attribute [rw] instance
        #   @return [Google::Cloud::Memcache::V1::Instance]
        #     Required. A Memcached Instance.
        #     Only fields specified in update_mask are updated.
        class UpdateInstanceRequest; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::DeleteInstance DeleteInstance}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Memcached instance resource name in the format:
        #         `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
        #     where `location_id` refers to a GCP region
        class DeleteInstanceRequest; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::ApplyParameters ApplyParameters}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the Memcached instance for which parameter group updates
        #     should be applied.
        # @!attribute [rw] node_ids
        #   @return [Array<String>]
        #     Nodes to which we should apply the instance-level parameter group.
        # @!attribute [rw] apply_all
        #   @return [true, false]
        #     Whether to apply instance-level parameter group to all nodes. If set to
        #     true, will explicitly restrict users from specifying any nodes, and apply
        #     parameter group updates to all nodes within the instance.
        class ApplyParametersRequest; end

        # Request for {Google::Cloud::Memcache::V1::CloudMemcache::UpdateParameters UpdateParameters}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource name of the Memcached instance for which the parameters should be
        #     updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Required. Mask of fields to update.
        # @!attribute [rw] parameters
        #   @return [Google::Cloud::Memcache::V1::MemcacheParameters]
        #     The parameters to apply to the instance.
        class UpdateParametersRequest; end

        # @!attribute [rw] id
        #   @return [String]
        #     Output only. The unique ID associated with this set of parameters. Users
        #     can use this id to determine if the parameters associated with the instance
        #     differ from the parameters associated with the nodes and any action needs
        #     to be taken to apply parameters on nodes.
        # @!attribute [rw] params
        #   @return [Hash{String => String}]
        #     User defined set of parameters to use in the memcached process.
        class MemcacheParameters; end

        # Represents the metadata of a long-running operation.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the operation was created.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Time when the operation finished running.
        # @!attribute [rw] target
        #   @return [String]
        #     Output only. Server-defined resource path for the target of the operation.
        # @!attribute [rw] verb
        #   @return [String]
        #     Output only. Name of the verb executed by the operation.
        # @!attribute [rw] status_detail
        #   @return [String]
        #     Output only. Human-readable status of the operation, if any.
        # @!attribute [rw] cancel_requested
        #   @return [true, false]
        #     Output only. Identifies whether the user has requested cancellation
        #     of the operation. Operations that have successfully been cancelled
        #     have {Operation#error} value with a {Google::Rpc::Status#code} of 1,
        #     corresponding to `Code.CANCELLED`.
        # @!attribute [rw] api_version
        #   @return [String]
        #     Output only. API version used to start the operation.
        class OperationMetadata; end

        # Memcached versions supported by our service.
        module MemcacheVersion
          MEMCACHE_VERSION_UNSPECIFIED = 0

          # Memcached 1.5 version.
          MEMCACHE_1_5 = 1
        end
      end
    end
  end
end