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
          # A unit of work to be performed by the agent.
          # @!attribute [rw] task_id
          #   @return [String]
          #     Unique task id.
          # @!attribute [rw] task_type
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::TaskType]
          #     The type of task to perform.
          #
          #     Task details must include the appropriate message based on this enum as
          #     specified below:
          #     APPLY_PATCHES = ApplyPatchesTask
          #     EXEC_STEP = ExecStepTask;
          # @!attribute [rw] task_directive
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::TaskDirective]
          #     Current directive to the agent.
          # @!attribute [rw] apply_patches_task
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyPatchesTask]
          #     Details about the apply patches task to perform.
          # @!attribute [rw] exec_step_task
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStepTask]
          #     Details about the exec step task to perform.
          # @!attribute [rw] service_labels
          #   @return [Hash{String => String}]
          #     Labels describing the task.  Used for logging by the agent.
          class Task; end

          # Message which instructs agent to apply patches.
          # @!attribute [rw] patch_config
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::PatchConfig]
          #     Specific information about how patches should be applied.
          # @!attribute [rw] dry_run
          #   @return [true, false]
          #     If true, the agent will report its status as it goes through the motions
          #     but won't actually run any updates or perform any reboots.
          class ApplyPatchesTask; end

          # Information reported from the agent about applying patches execution.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyPatchesTaskProgress::State]
          #     Required. The current state of this patch execution.
          class ApplyPatchesTaskProgress
            # The intermediate states of applying patches.
            module State
              # Unspecified is invalid.
              STATE_UNSPECIFIED = 0

              # The agent has started the patch task.
              STARTED = 4

              # The agent is currently downloading patches.
              DOWNLOADING_PATCHES = 1

              # The agent is currently applying patches.
              APPLYING_PATCHES = 2

              # The agent is currently rebooting the VM instance.
              REBOOTING = 3
            end
          end

          # Information reported from the agent about applying patches execution.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ApplyPatchesTaskOutput::State]
          #     Required. The final state of this task.
          class ApplyPatchesTaskOutput
            # The final states of applying patches.
            module State
              # Unspecified is invalid.
              STATE_UNSPECIFIED = 0

              # Applying patches completed successfully.
              SUCCEEDED = 1

              # Applying patches completed successfully, but a reboot is required.
              SUCCEEDED_REBOOT_REQUIRED = 2

              # Applying patches failed.
              FAILED = 3
            end
          end

          # Message which instructs agent to execute the following command.
          # @!attribute [rw] exec_step
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStep]
          #     Details of the exec step to run.
          class ExecStepTask; end

          # Information reported from the agent about the exec step execution.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStepTaskProgress::State]
          #     Required. The current state of this exec step.
          class ExecStepTaskProgress
            # The intermediate states of exec steps.
            module State
              # Unspecified is invalid.
              STATE_UNSPECIFIED = 0

              # The agent has started the exec step task.
              STARTED = 1
            end
          end

          # Information reported from the agent about the exec step execution.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Osconfig::Agentendpoint::V1::ExecStepTaskOutput::State]
          #     Required. The final state of the exec step.
          # @!attribute [rw] exit_code
          #   @return [Integer]
          #     Required. The exit code received from the script which ran as part of the
          #     exec step.
          class ExecStepTaskOutput
            # The final states of exec steps.
            module State
              # Unspecified is invalid.
              STATE_UNSPECIFIED = 0

              # The exec step completed normally.
              COMPLETED = 1

              # The exec step was terminated because it took too long.
              TIMED_OUT = 2

              # The exec step task was cancelled before it started.
              CANCELLED = 3
            end
          end

          # Specifies the current agent behavior.
          module TaskDirective
            # Unspecified is invalid.
            TASK_DIRECTIVE_UNSPECIFIED = 0

            # The task should continue to progress.
            CONTINUE = 1

            # Task should not be started, or if already in progress, should stop
            # at first safe stopping point.  Task should be considered done and will
            # never repeat.
            STOP = 2
          end

          # Specifies the type of task to perform.
          module TaskType
            # Unspecified is invalid.
            TASK_TYPE_UNSPECIFIED = 0

            # The apply patches task.
            APPLY_PATCHES = 1

            # The exec step task.
            EXEC_STEP_TASK = 2
          end
        end
      end
    end
  end
end