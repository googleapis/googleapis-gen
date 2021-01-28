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
        # A collection of metrics calculated by comparing Model's predictions on a
        # slice of the test data against ground truth annotations.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. The resource name of the ModelEvaluationSlice.
        # @!attribute [rw] slice
        #   @return [Google::Cloud::Aiplatform::V1beta1::ModelEvaluationSlice::Slice]
        #     Output only. The slice of the test data that is used to evaluate the Model.
        # @!attribute [rw] metrics_schema_uri
        #   @return [String]
        #     Output only. Points to a YAML file stored on Google Cloud Storage describing the
        #     {Google::Cloud::Aiplatform::V1beta1::ModelEvaluationSlice#metrics metrics} of this ModelEvaluationSlice. The
        #     schema is defined as an OpenAPI 3.0.2
        #     [Schema Object](https://tinyurl.com/y538mdwt#schema-object).
        # @!attribute [rw] metrics
        #   @return [Google::Protobuf::Value]
        #     Output only. Sliced evaluation metrics of the Model. The schema of the metrics is stored
        #     in {Google::Cloud::Aiplatform::V1beta1::ModelEvaluationSlice#metrics_schema_uri metrics_schema_uri}
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. Timestamp when this ModelEvaluationSlice was created.
        class ModelEvaluationSlice
          # Definition of a slice.
          # @!attribute [rw] dimension
          #   @return [String]
          #     Output only. The dimension of the slice.
          #     Well-known dimensions are:
          #     * `annotationSpec`: This slice is on the test data that has either
          #       ground truth or prediction with {Google::Cloud::Aiplatform::V1beta1::AnnotationSpec#display_name AnnotationSpec#display_name}
          #       equals to {Google::Cloud::Aiplatform::V1beta1::ModelEvaluationSlice::Slice#value value}.
          # @!attribute [rw] value
          #   @return [String]
          #     Output only. The value of the dimension in this slice.
          class Slice; end
        end
      end
    end
  end
end