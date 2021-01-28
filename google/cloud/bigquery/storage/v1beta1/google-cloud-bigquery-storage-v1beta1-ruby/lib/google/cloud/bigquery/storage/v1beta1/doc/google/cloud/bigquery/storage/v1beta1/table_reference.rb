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
      module Storage
        module V1beta1
          # Table reference that includes just the 3 strings needed to identify a table.
          # @!attribute [rw] project_id
          #   @return [String]
          #     The assigned project ID of the project.
          # @!attribute [rw] dataset_id
          #   @return [String]
          #     The ID of the dataset in the above project.
          # @!attribute [rw] table_id
          #   @return [String]
          #     The ID of the table in the above dataset.
          class TableReference; end

          # All fields in this message optional.
          # @!attribute [rw] snapshot_time
          #   @return [Google::Protobuf::Timestamp]
          #     The snapshot time of the table. If not set, interpreted as now.
          class TableModifiers; end
        end
      end
    end
  end
end