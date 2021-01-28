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
    module Bigquery
      module V2
        # Id path of a model.
        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. The ID of the project containing this model.
        # @!attribute [rw] dataset_id
        #   @return [String]
        #     Required. The ID of the dataset containing this model.
        # @!attribute [rw] model_id
        #   @return [String]
        #     Required. The ID of the model. The ID must contain only
        #     letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
        #     length is 1,024 characters.
        class ModelReference; end
      end
    end
  end
end