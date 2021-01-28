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
      module V1
        # Workflow program to be executed by Workflows.
        # @!attribute [rw] name
        #   @return [String]
        #     The resource name of the workflow.
        #     Format: projects/{project}/locations/{location}/workflows/{workflow}
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the workflow provided by the user.
        #     Must be at most 1000 unicode characters long.
        # @!attribute [rw] state
        #   @return [Google::Cloud::Workflows::V1::Workflow::State]
        #     Output only. State of the workflow deployment.
        # @!attribute [rw] revision_id
        #   @return [String]
        #     Output only. The revision of the workflow.
        #     A new revision of a workflow is created as a result of updating the
        #     following fields of a workflow:
        #     * `source_code`
        #     * `service_account`
        #       The format is "000001-a4d", where the first 6 characters define
        #       the zero-padded revision ordinal number. They are followed by a hyphen and
        #       3 hexadecimal random characters.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The timestamp of when the workflow was created.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The last update timestamp of the workflow.
        # @!attribute [rw] revision_create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The timestamp that the latest revision of the workflow
        #     was created.
        # @!attribute [rw] labels
        #   @return [Hash{String => String}]
        #     Labels associated with this workflow.
        #     Labels can contain at most 64 entries. Keys and values can be no longer
        #     than 63 characters and can only contain lowercase letters, numeric
        #     characters, underscores and dashes. Label keys must start with a letter.
        #     International characters are allowed.
        # @!attribute [rw] service_account
        #   @return [String]
        #     Name of the service account associated with the latest workflow version.
        #     This service account represents the identity of the workflow and determines
        #     what permissions the workflow has.
        #     Format: projects/{project}/serviceAccounts/{account}
        #
        #     Using `-` as a wildcard for the `{project}` will infer the project from
        #     the account. The `{account}` value can be the `email` address or the
        #     `unique_id` of the service account.
        #
        #     If not provided, workflow will use the project's default service account.
        #     Modifying this field for an existing workflow results in a new workflow
        #     revision.
        # @!attribute [rw] source_contents
        #   @return [String]
        #     Workflow code to be executed. The size limit is 32KB.
        class Workflow
          # Describes the current state of workflow deployment. More states may be
          # added in the future.
          module State
            # Invalid state.
            STATE_UNSPECIFIED = 0

            # The workflow has been deployed successfully and is serving.
            ACTIVE = 1
          end
        end

        # Request for the
        # {Google::Cloud::Workflows::V1::Workflows::ListWorkflows ListWorkflows}
        # method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Project and location from which the workflows should be listed.
        #     Format: projects/{project}/locations/{location}
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of workflows to return per call. The service may return
        #     fewer than this value. If the value is not specified, a default value of
        #     500 will be used. The maximum permitted value is 1000 and values greater
        #     than 1000 will be coerced down to 1000.
        # @!attribute [rw] page_token
        #   @return [String]
        #     A page token, received from a previous `ListWorkflows` call.
        #     Provide this to retrieve the subsequent page.
        #
        #     When paginating, all other parameters provided to `ListWorkflows` must
        #     match the call that provided the page token.
        # @!attribute [rw] filter
        #   @return [String]
        #     Filter to restrict results to specific workflows.
        # @!attribute [rw] order_by
        #   @return [String]
        #     Comma-separated list of fields that that specify the order of the results.
        #     Default sorting order for a field is ascending. To specify descending order
        #     for a field, append a " desc" suffix.
        #     If not specified, the results will be returned in an unspecified order.
        class ListWorkflowsRequest; end

        # Response for the
        # {Google::Cloud::Workflows::V1::Workflows::ListWorkflows ListWorkflows}
        # method.
        # @!attribute [rw] workflows
        #   @return [Array<Google::Cloud::Workflows::V1::Workflow>]
        #     The workflows which match the request.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token, which can be sent as `page_token` to retrieve the next page.
        #     If this field is omitted, there are no subsequent pages.
        # @!attribute [rw] unreachable
        #   @return [Array<String>]
        #     Unreachable resources.
        class ListWorkflowsResponse; end

        # Request for the
        # {Google::Cloud::Workflows::V1::Workflows::GetWorkflow GetWorkflow} method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Name of the workflow which information should be retrieved.
        #     Format: projects/{project}/locations/{location}/workflows/{workflow}
        class GetWorkflowRequest; end

        # Request for the
        # {Google::Cloud::Workflows::V1::Workflows::CreateWorkflow CreateWorkflow}
        # method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Project and location in which the workflow should be created.
        #     Format:  projects/{project}/locations/{location}
        # @!attribute [rw] workflow
        #   @return [Google::Cloud::Workflows::V1::Workflow]
        #     Required. Workflow to be created.
        # @!attribute [rw] workflow_id
        #   @return [String]
        #     Required. The ID of the workflow to be created. It has to fulfill the
        #     following requirements:
        #
        #     * Must contain only letters, numbers, underscores and hyphens.
        #     * Must start with a letter.
        #     * Must be between 1-64 characters.
        #     * Must end with a number or a letter.
        #     * Must be unique within the customer project and location.
        class CreateWorkflowRequest; end

        # Request for the
        # {Google::Cloud::Workflows::V1::Workflows::DeleteWorkflow DeleteWorkflow}
        # method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Name of the workflow to be deleted.
        #     Format: projects/{project}/locations/{location}/workflows/{workflow}
        class DeleteWorkflowRequest; end

        # Request for the
        # {Google::Cloud::Workflows::V1::Workflows::UpdateWorkflow UpdateWorkflow}
        # method.
        # @!attribute [rw] workflow
        #   @return [Google::Cloud::Workflows::V1::Workflow]
        #     Required. Workflow to be updated.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     List of fields to be updated. If not present, the entire workflow
        #     will be updated.
        class UpdateWorkflowRequest; end

        # Represents the metadata of the long-running operation.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time the operation was created.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     The time the operation finished running.
        # @!attribute [rw] target
        #   @return [String]
        #     Server-defined resource path for the target of the operation.
        # @!attribute [rw] verb
        #   @return [String]
        #     Name of the verb executed by the operation.
        # @!attribute [rw] api_version
        #   @return [String]
        #     API version used to start the operation.
        class OperationMetadata; end
      end
    end
  end
end