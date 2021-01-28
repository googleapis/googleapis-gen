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
        # Success and error statistics of processing multiple entities
        # (for example, DataItems or structured data rows) in batch.
        # @!attribute [rw] successful_count
        #   @return [Integer]
        #     Output only. The number of entities that had been processed successfully.
        # @!attribute [rw] failed_count
        #   @return [Integer]
        #     Output only. The number of entities for which any error was encountered.
        # @!attribute [rw] incomplete_count
        #   @return [Integer]
        #     Output only. In cases when enough errors are encountered a job, pipeline, or operation
        #     may be failed as a whole. Below is the number of entities for which the
        #     processing had not been finished (either in successful or failed state).
        #     Set to -1 if the number is unknown (for example, the operation failed
        #     before the total entity number could be collected).
        class CompletionStats; end
      end
    end
  end
end