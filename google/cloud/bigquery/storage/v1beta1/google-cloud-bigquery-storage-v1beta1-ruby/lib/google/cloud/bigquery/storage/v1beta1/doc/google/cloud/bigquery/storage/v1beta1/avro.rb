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
          # Avro schema.
          # @!attribute [rw] schema
          #   @return [String]
          #     Json serialized schema, as described at
          #     https://avro.apache.org/docs/1.8.1/spec.html
          class AvroSchema; end

          # Avro rows.
          # @!attribute [rw] serialized_binary_rows
          #   @return [String]
          #     Binary serialized rows in a block.
          # @!attribute [rw] row_count
          #   @return [Integer]
          #     The count of rows in the returning block.
          class AvroRows; end
        end
      end
    end
  end
end