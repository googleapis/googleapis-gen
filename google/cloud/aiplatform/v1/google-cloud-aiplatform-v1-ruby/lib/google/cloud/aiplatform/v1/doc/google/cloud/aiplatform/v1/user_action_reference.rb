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
      module V1
        # References an API call. It contains more information about long running
        # operation and Jobs that are triggered by the API call.
        # @!attribute [rw] operation
        #   @return [String]
        #     For API calls that return a long running operation.
        #     Resource name of the long running operation.
        #     Format:
        #     'projects/{project}/locations/{location}/operations/{operation}'
        # @!attribute [rw] data_labeling_job
        #   @return [String]
        #     For API calls that start a LabelingJob.
        #     Resource name of the LabelingJob.
        #     Format:
        #
        #     'projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}'
        # @!attribute [rw] method
        #   @return [String]
        #     The method name of the API call. For example,
        #     "/google.cloud.aiplatform.v1alpha1.DatasetService.CreateDataset"
        class UserActionReference; end
      end
    end
  end
end