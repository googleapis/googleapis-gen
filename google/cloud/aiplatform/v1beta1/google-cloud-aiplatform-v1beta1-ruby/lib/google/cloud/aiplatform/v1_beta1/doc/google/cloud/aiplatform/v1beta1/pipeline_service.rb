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
    module Aiplatform
      module V1beta1
        # Request message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::CreateTrainingPipeline PipelineService::CreateTrainingPipeline}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The resource name of the Location to create the TrainingPipeline in.
        #     Format: `projects/{project}/locations/{location}`
        # @!attribute [rw] training_pipeline
        #   @return [Google::Cloud::Aiplatform::V1beta1::TrainingPipeline]
        #     Required. The TrainingPipeline to create.
        class CreateTrainingPipelineRequest; end

        # Request message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::GetTrainingPipeline PipelineService::GetTrainingPipeline}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the TrainingPipeline resource.
        #     Format:
        #
        #     `projects/{project}/locations/{location}/trainingPipelines/{training_pipeline}`
        class GetTrainingPipelineRequest; end

        # Request message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::ListTrainingPipelines PipelineService::ListTrainingPipelines}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The resource name of the Location to list the TrainingPipelines from.
        #     Format: `projects/{project}/locations/{location}`
        # @!attribute [rw] filter
        #   @return [String]
        #     The standard list filter.
        #     Supported fields:
        #
        #     * `display_name` supports = and !=.
        #
        #       * `state` supports = and !=.
        #
        #       Some examples of using the filter are:
        #
        #     * `state="PIPELINE_STATE_SUCCEEDED" AND display_name="my_pipeline"`
        #
        #     * `state="PIPELINE_STATE_RUNNING" OR display_name="my_pipeline"`
        #
        #     * `NOT display_name="my_pipeline"`
        #
        #     * `state="PIPELINE_STATE_FAILED"`
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     The standard list page size.
        # @!attribute [rw] page_token
        #   @return [String]
        #     The standard list page token.
        #     Typically obtained via
        #     {Google::Cloud::Aiplatform::V1beta1::ListTrainingPipelinesResponse#next_page_token ListTrainingPipelinesResponse#next_page_token} of the previous
        #     {Google::Cloud::Aiplatform::V1beta1::PipelineService::ListTrainingPipelines PipelineService::ListTrainingPipelines} call.
        # @!attribute [rw] read_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Mask specifying which fields to read.
        class ListTrainingPipelinesRequest; end

        # Response message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::ListTrainingPipelines PipelineService::ListTrainingPipelines}
        # @!attribute [rw] training_pipelines
        #   @return [Array<Google::Cloud::Aiplatform::V1beta1::TrainingPipeline>]
        #     List of TrainingPipelines in the requested page.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token to retrieve next page of results.
        #     Pass to {Google::Cloud::Aiplatform::V1beta1::ListTrainingPipelinesRequest#page_token ListTrainingPipelinesRequest#page_token} to obtain that page.
        class ListTrainingPipelinesResponse; end

        # Request message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::DeleteTrainingPipeline PipelineService::DeleteTrainingPipeline}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the TrainingPipeline resource to be deleted.
        #     Format:
        #
        #     `projects/{project}/locations/{location}/trainingPipelines/{training_pipeline}`
        class DeleteTrainingPipelineRequest; end

        # Request message for {Google::Cloud::Aiplatform::V1beta1::PipelineService::CancelTrainingPipeline PipelineService::CancelTrainingPipeline}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the TrainingPipeline to cancel.
        #     Format:
        #
        #     `projects/{project}/locations/{location}/trainingPipelines/{training_pipeline}`
        class CancelTrainingPipelineRequest; end
      end
    end
  end
end