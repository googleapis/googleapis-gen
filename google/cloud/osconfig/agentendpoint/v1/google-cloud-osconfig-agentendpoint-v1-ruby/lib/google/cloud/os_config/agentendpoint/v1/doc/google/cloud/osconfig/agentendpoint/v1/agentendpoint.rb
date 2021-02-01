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
    module Osconfig
      module Agentendpoint
        module V1
          # A request message to receive task notifications.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          # @!attribute [rw] agent_version
          #   @return [String]
          #     Required. The version of the agent making the request.
          class ReceiveTaskNotificationRequest; end

          # The streaming rpc message that will notify the agent when it has a task
          # it needs to perform on the instance.
          class ReceiveTaskNotificationResponse; end

          # A request message for signaling the start of a task execution.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          class StartNextTaskRequest; end

          # A response message that contains the details of the task to work on.
          # @!attribute [rw] task
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::Task]
          #     The details of the task that should be worked on.  Can be empty if there
          #     is no new task to work on.
          class StartNextTaskResponse; end

          # A request message for reporting the progress of current task.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          # @!attribute [rw] task_id
          #   @return [String]
          #     Required. Unique identifier of the task this applies to.
          # @!attribute [rw] task_type
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::TaskType]
          #     Required. The type of task to report progress on.
          #
          #     Progress must include the appropriate message based on this enum as
          #     specified below:
          #     APPLY_PATCHES = ApplyPatchesTaskProgress
          #     EXEC_STEP = Progress not supported for this type.
          # @!attribute [rw] apply_patches_task_progress
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyPatchesTaskProgress]
          #     Details about the progress of the apply patches task.
          # @!attribute [rw] exec_step_task_progress
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStepTaskProgress]
          #     Details about the progress of the exec step task.
          # @!attribute [rw] apply_config_task_progress
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyConfigTaskProgress]
          #     Details about the progress of the apply config task.
          class ReportTaskProgressRequest; end

          # The response message after the agent reported the current task progress.
          # @!attribute [rw] task_directive
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::TaskDirective]
          #     Instructs agent to continue or not.
          class ReportTaskProgressResponse; end

          # A request message for signaling the completion of a task execution.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          # @!attribute [rw] task_id
          #   @return [String]
          #     Required. Unique identifier of the task this applies to.
          # @!attribute [rw] task_type
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::TaskType]
          #     Required. The type of task to report completed.
          #
          #     Output must include the appropriate message based on this enum as
          #     specified below:
          #     APPLY_PATCHES = ApplyPatchesTaskOutput
          #     EXEC_STEP = ExecStepTaskOutput
          # @!attribute [rw] error_message
          #   @return [String]
          #     Descriptive error message if the task execution ended in error.
          # @!attribute [rw] apply_patches_task_output
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyPatchesTaskOutput]
          #     Final output details of the apply patches task;
          # @!attribute [rw] exec_step_task_output
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStepTaskOutput]
          #     Final output details of the exec step task;
          # @!attribute [rw] apply_config_task_output
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyConfigTaskOutput]
          #     Final output details of the apply config task;
          class ReportTaskCompleteRequest; end

          # The response message after the agent signaled the current task complete.
          class ReportTaskCompleteResponse; end

          # The request message for registering the agent.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          # @!attribute [rw] agent_version
          #   @return [String]
          #     Required. The version of the agent.
          # @!attribute [rw] supported_capabilities
          #   @return [Array<String>]
          #     Required. The capabilities supported by the agent. Supported values are:
          #     PATCH_GA
          #     GUEST_POLICY_BETA
          class RegisterAgentRequest; end

          # The response message after the agent registered.
          class RegisterAgentResponse; end

          # The request message for having the agent report inventory.
          # @!attribute [rw] instance_id_token
          #   @return [String]
          #     Required. This is the Compute Engine instance identity token described in
          #     https://cloud.google.com/compute/docs/instances/verifying-instance-identity
          #     where the audience is 'osconfig.googleapis.com' and the format is 'full'.
          # @!attribute [rw] inventory_checksum
          #   @return [String]
          #     Required. This is a client created checksum that should be generated based on the
          #     contents of the reported inventory.  This will be used by the service to
          #     determine if it has the latest version of inventory.
          # @!attribute [rw] inventory
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::Inventory]
          #     Optional. This is the details of the inventory.  Should only be provided if the
          #     inventory has changed since the last report, or if instructed by the
          #     service to provide full inventory.
          class ReportInventoryRequest; end

          # The response message after the agent has reported inventory.
          # @!attribute [rw] report_full_inventory
          #   @return [true, false]
          #     If true, the full inventory should be reported back to the server.
          class ReportInventoryResponse; end
        end
      end
    end
  end
end