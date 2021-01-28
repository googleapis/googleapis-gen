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
    module Gaming
      module V1beta
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
        #     have {Operation#error} value with a {Google::Rpc::Status#code} of 1,
        #     corresponding to `Code.CANCELLED`.
        # @!attribute [rw] api_version
        #   @return [String]
        #     Output only. API version used to start the operation.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Output only. List of Locations that could not be reached.
        # @!attribute [rw] operation_status
        #   @return [Hash{String => Google::Cloud::Gaming::V1beta::OperationStatus}]
        #     Output only. Operation status for Game Services API operations. Operation status is in
        #     the form of key-value pairs where keys are resource IDs and the values show
        #     the status of the operation. In case of failures, the value includes an
        #     error code and error message.
        class OperationMetadata; end

        # @!attribute [rw] done
        #   @return [true, false]
        #     Output only. Whether the operation is done or still in progress.
        # @!attribute [rw] error_code
        #   @return [Google::Cloud::Gaming::V1beta::OperationStatus::ErrorCode]
        #     The error code in case of failures.
        # @!attribute [rw] error_message
        #   @return [String]
        #     The human-readable error message.
        class OperationStatus
          module ErrorCode
            ERROR_CODE_UNSPECIFIED = 0

            INTERNAL_ERROR = 1

            PERMISSION_DENIED = 2

            CLUSTER_CONNECTION = 3
          end
        end

        # The label selector, used to group labels on the resources.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Resource labels for this selector.
        class LabelSelector; end

        # The realm selector, used to match realm resources.
        # @!attribute [rw] realms
        #   @return [Array<String>]
        #     List of realms to match.
        class RealmSelector; end

        # The schedule of a recurring or one time event. The event's time span is
        # specified by start_time and end_time. If the scheduled event's timespan is
        # larger than the cron_spec + cron_job_duration, the event will be recurring.
        # If only cron_spec + cron_job_duration are specified, the event is effective
        # starting at the local time specified by cron_spec, and is recurring.
        #
        #   start_time|-------[cron job]-------[cron job]-------[cron job]---|end_time
        #   cron job: cron spec start time + duration
        # @!attribute [rw] start_time
        #   @return [Google::Protobuf::Timestamp]
        #     The start time of the event.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     The end time of the event.
        # @!attribute [rw] cron_job_duration
        #   @return [Google::Protobuf::Duration]
        #     The duration for the cron job event. The duration of the event is effective
        #     after the cron job's start time.
        # @!attribute [rw] cron_spec
        #   @return [String]
        #     The cron definition of the scheduled event. See
        #     https://en.wikipedia.org/wiki/Cron. Cron spec specifies the local time as
        #     defined by the realm.
        class Schedule; end

        # Encapsulates Agones fleet spec and Agones autoscaler spec sources.
        # @!attribute [rw] game_server_config_name
        #   @return [String]
        #     The game server config resource. Uses the form:
        #
        #     `projects/{project}/locations/{location}/gameServerDeployments/{deployment_id}/configs/{config_id}`.
        # @!attribute [rw] name
        #   @return [String]
        #     The name of the Agones leet config or Agones scaling config used to derive
        #     the Agones fleet or Agones autoscaler spec.
        class SpecSource; end

        # Details about the Agones resources.
        # @!attribute [rw] game_server_cluster_name
        #   @return [String]
        #     The game server cluster name. Uses the form:
        #
        #     `projects/{project}/locations/{location}/realms/{realm}/gameServerClusters/{cluster}`.
        # @!attribute [rw] game_server_deployment_name
        #   @return [String]
        #     The game server deployment name. Uses the form:
        #
        #     `projects/{project}/locations/{location}/gameServerDeployments/{deployment_id}`.
        # @!attribute [rw] fleet_details
        #   @return [Array<Google::Cloud::Gaming::V1beta::TargetDetails::TargetFleetDetails>]
        #     Agones fleet details for game server clusters and game server deployments.
        class TargetDetails
          # Details of the target Agones fleet.
          # @!attribute [rw] fleet
          #   @return [Google::Cloud::Gaming::V1beta::TargetDetails::TargetFleetDetails::TargetFleet]
          #     Reference to target Agones fleet.
          # @!attribute [rw] autoscaler
          #   @return [Google::Cloud::Gaming::V1beta::TargetDetails::TargetFleetDetails::TargetFleetAutoscaler]
          #     Reference to target Agones fleet autoscaling policy.
          class TargetFleetDetails
            # Target Agones fleet specification.
            # @!attribute [rw] name
            #   @return [String]
            #     The name of the Agones fleet.
            # @!attribute [rw] spec_source
            #   @return [Google::Cloud::Gaming::V1beta::SpecSource]
            #     Encapsulates the source of the Agones fleet spec.
            #     The Agones fleet spec source.
            class TargetFleet; end

            # Target Agones autoscaler policy reference.
            # @!attribute [rw] name
            #   @return [String]
            #     The name of the Agones autoscaler.
            # @!attribute [rw] spec_source
            #   @return [Google::Cloud::Gaming::V1beta::SpecSource]
            #     Encapsulates the source of the Agones fleet spec.
            #     Details about the Agones autoscaler spec.
            class TargetFleetAutoscaler; end
          end
        end

        # Encapsulates the Target state.
        # @!attribute [rw] details
        #   @return [Array<Google::Cloud::Gaming::V1beta::TargetDetails>]
        #     Details about Agones fleets.
        class TargetState; end

        # Details of the deployed Agones fleet.
        # @!attribute [rw] deployed_fleet
        #   @return [Google::Cloud::Gaming::V1beta::DeployedFleetDetails::DeployedFleet]
        #     Information about the Agones fleet.
        # @!attribute [rw] deployed_autoscaler
        #   @return [Google::Cloud::Gaming::V1beta::DeployedFleetDetails::DeployedFleetAutoscaler]
        #     Information about the Agones autoscaler for that fleet.
        class DeployedFleetDetails
          # Agones fleet specification and details.
          # @!attribute [rw] fleet
          #   @return [String]
          #     The name of the Agones fleet.
          # @!attribute [rw] fleet_spec
          #   @return [String]
          #     The fleet spec retrieved from the Agones fleet.
          # @!attribute [rw] spec_source
          #   @return [Google::Cloud::Gaming::V1beta::SpecSource]
          #     The source spec that is used to create the Agones fleet.
          #     The GameServerConfig resource may no longer exist in the system.
          # @!attribute [rw] status
          #   @return [Google::Cloud::Gaming::V1beta::DeployedFleetDetails::DeployedFleet::DeployedFleetStatus]
          #     The current status of the Agones fleet.
          #     Includes count of game servers in various states.
          class DeployedFleet
            # DeployedFleetStatus has details about the Agones fleets such as how many
            # are running, how many allocated, and so on.
            # @!attribute [rw] ready_replicas
            #   @return [Integer]
            #     The number of GameServer replicas in the READY state in this fleet.
            # @!attribute [rw] allocated_replicas
            #   @return [Integer]
            #     The number of GameServer replicas in the ALLOCATED state in this fleet.
            # @!attribute [rw] reserved_replicas
            #   @return [Integer]
            #     The number of GameServer replicas in the RESERVED state in this fleet.
            #     Reserved instances won't be deleted on scale down, but won't cause
            #     an autoscaler to scale up.
            # @!attribute [rw] replicas
            #   @return [Integer]
            #     The total number of current GameServer replicas in this fleet.
            class DeployedFleetStatus; end
          end

          # Details about the Agones autoscaler.
          # @!attribute [rw] autoscaler
          #   @return [String]
          #     The name of the Agones autoscaler.
          # @!attribute [rw] spec_source
          #   @return [Google::Cloud::Gaming::V1beta::SpecSource]
          #     The source spec that is used to create the autoscaler.
          #     The GameServerConfig resource may no longer exist in the system.
          # @!attribute [rw] fleet_autoscaler_spec
          #   @return [String]
          #     The autoscaler spec retrieved from Agones.
          class DeployedFleetAutoscaler; end
        end
      end
    end
  end
end