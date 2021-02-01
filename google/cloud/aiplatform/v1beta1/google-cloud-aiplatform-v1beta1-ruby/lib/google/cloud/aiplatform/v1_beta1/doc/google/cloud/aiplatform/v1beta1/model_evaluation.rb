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
        # A collection of metrics calculated by comparing Model's predictions on all of
        # the test data against annotations from the test data.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. The resource name of the ModelEvaluation.
        # @!attribute [rw] metrics_schema_uri
        #   @return [String]
        #     Output only. Points to a YAML file stored on Google Cloud Storage describing the
        #     {Google::Cloud::Aiplatform::V1beta1::ModelEvaluation#metrics metrics} of this ModelEvaluation. The schema is
        #     defined as an OpenAPI 3.0.2
        #     [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
        # @!attribute [rw] metrics
        #   @return [Google::Protobuf::Value]
        #     Output only. Evaluation metrics of the Model. The schema of the metrics is stored in
        #     {Google::Cloud::Aiplatform::V1beta1::ModelEvaluation#metrics_schema_uri metrics_schema_uri}
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this ModelEvaluation was created.
        # @!attribute [rw] slice_dimensions
        #   @return [Array<String>]
        #     Output only. All possible {ModelEvaluationSlice#slice#dimension dimensions} of
        #     ModelEvaluationSlices. The dimensions can be used as the filter of the
        #     {Google::Cloud::Aiplatform::V1beta1::ModelService::ListModelEvaluationSlices ModelService::ListModelEvaluationSlices} request, in the form of
        #     `slice.dimension = <dimension>`.
        # @!attribute [rw] model_explanation
        #   @return [Google::Cloud::Aiplatform::V1beta1::ModelExplanation]
        #     Output only. Aggregated explanation metrics for the Model's prediction output over the
        #     data this ModelEvaluation uses. This field is populated only if the Model
        #     is evaluated with explanations, and only for AutoML tabular Models.
        # @!attribute [rw] explanation_specs
        #   @return [Array<Google::Cloud::Aiplatform::V1beta1::ModelEvaluation::ModelEvaluationExplanationSpec>]
        #     Output only. Describes the values of {Google::Cloud::Aiplatform::V1beta1::ExplanationSpec ExplanationSpec} that are used for explaining
        #     the predicted values on the evaluated data.
        class ModelEvaluation
          # @!attribute [rw] explanation_type
          #   @return [String]
          #     Explanation type.
          #
          #     For AutoML Image Classification models, possible values are:
          #
          #     * `image-integrated-gradients`
          #       * `image-xrai`
          # @!attribute [rw] explanation_spec
          #   @return [Google::Cloud::Aiplatform::V1beta1::ExplanationSpec]
          #     Explanation spec details.
          class ModelEvaluationExplanationSpec; end
        end
      end
    end
  end
end