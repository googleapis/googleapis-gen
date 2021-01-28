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
    module Workflows
      module Executions
        module V1
          # A running instance of a
          # [Workflow](https://cloud.google.com/workflows/docs/reference/rest/v1/projects.locations.workflows).
          # @!attribute [rw] name
          #   @return [String]
          #     Output only. The resource name of the execution.
          #     Format:
          #     projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
          # @!attribute [rw] start_time
          #   @return [Google::Protobuf::Timestamp]
          #     Output only. Marks the beginning of execution.
          # @!attribute [rw] end_time
          #   @return [Google::Protobuf::Timestamp]
          #     Output only. Marks the end of execution, successful or not.
          # @!attribute [rw] state
          #   @return [Google::Cloud::Workflows::Executions::V1::Execution::State]
          #     Output only. Current state of the execution.
          # @!attribute [rw] argument
          #   @return [String]
          #     Input parameters of the execution represented as a JSON string.
          #     The size limit is 32KB.
          # @!attribute [rw] result
          #   @return [String]
          #     Output only. Output of the execution represented as a JSON string. The
          #     value can only be present if the execution's state is `SUCCEEDED`.
          # @!attribute [rw] error
          #   @return [Google::Cloud::Workflows::Executions::V1::Execution::Error]
          #     Output only. The error which caused the execution to finish prematurely.
          #     The value is only present if the execution's state is `FAILED`
          #     or `CANCELLED`.
          # @!attribute [rw] workflow_revision_id
          #   @return [String]
          #     Output only. Revision of the workflow this execution is using.
          class Execution
            # Error describes why the execution was abnormally terminated.
            # @!attribute [rw] payload
            #   @return [String]
            #     Error payload returned by the execution, represented as a JSON string.
            # @!attribute [rw] context
            #   @return [String]
            #     Human readable error context, helpful for debugging purposes.
            class Error; end

            # Describes the current state of the execution. More states may be added
            # in the future.
            module State
              # Invalid state.
              STATE_UNSPECIFIED = 0

              # The execution is in progress.
              ACTIVE = 1

              # The execution finished successfully.
              SUCCEEDED = 2

              # The execution failed with an error.
              FAILED = 3

              # The execution was stopped intentionally.
              CANCELLED = 4
            end
          end

          # Request for the
          # {ListExecutions}
          # method.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. Name of the workflow for which the executions should be listed.
          #     Format: projects/{project}/locations/{location}/workflows/{workflow}
          # @!attribute [rw] page_size
          #   @return [Integer]
          #     Maximum number of executions to return per call.
          #     Max supported value depends on the selected Execution view: it's 10000 for
          #     BASIC and 100 for FULL. The default value used if the field is not
          #     specified is 100, regardless of the selected view. Values greater than
          #     the max value will be coerced down to it.
          # @!attribute [rw] page_token
          #   @return [String]
          #     A page token, received from a previous `ListExecutions` call.
          #     Provide this to retrieve the subsequent page.
          #
          #     When paginating, all other parameters provided to `ListExecutions` must
          #     match the call that provided the page token.
          # @!attribute [rw] view
          #   @return [Google::Cloud::Workflows::Executions::V1::ExecutionView]
          #     Optional. A view defining which fields should be filled in the returned executions.
          #     The API will default to the BASIC view.
          class ListExecutionsRequest; end

          # Response for the
          # {Google::Cloud::Workflows::Executions::V1::Executions::ListExecutions ListExecutions}
          # method.
          # @!attribute [rw] executions
          #   @return [Array<Google::Cloud::Workflows::Executions::V1::Execution>]
          #     The executions which match the request.
          # @!attribute [rw] next_page_token
          #   @return [String]
          #     A token, which can be sent as `page_token` to retrieve the next page.
          #     If this field is omitted, there are no subsequent pages.
          class ListExecutionsResponse; end

          # Request for the
          # {Google::Cloud::Workflows::Executions::V1::Executions::CreateExecution CreateExecution}
          # method.
          # @!attribute [rw] parent
          #   @return [String]
          #     Required. Name of the workflow for which an execution should be created.
          #     Format: projects/{project}/locations/{location}/workflows/{workflow}
          #     The latest revision of the workflow will be used.
          # @!attribute [rw] execution
          #   @return [Google::Cloud::Workflows::Executions::V1::Execution]
          #     Required. Execution to be created.
          class CreateExecutionRequest; end

          # Request for the
          # {Google::Cloud::Workflows::Executions::V1::Executions::GetExecution GetExecution}
          # method.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. Name of the execution to be retrieved.
          #     Format:
          #     projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
          # @!attribute [rw] view
          #   @return [Google::Cloud::Workflows::Executions::V1::ExecutionView]
          #     Optional. A view defining which fields should be filled in the returned execution.
          #     The API will default to the FULL view.
          class GetExecutionRequest; end

          # Request for the
          # {Google::Cloud::Workflows::Executions::V1::Executions::CancelExecution CancelExecution}
          # method.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. Name of the execution to be cancelled.
          #     Format:
          #     projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
          class CancelExecutionRequest; end

          # Defines possible views for execution resource.
          module ExecutionView
            # The default / unset value.
            EXECUTION_VIEW_UNSPECIFIED = 0

            # Includes only basic metadata about the execution.
            # Following fields are returned: name, start_time, end_time, state
            # and workflow_revision_id.
            BASIC = 1

            # Includes all data.
            FULL = 2
          end
        end
      end
    end
  end
end