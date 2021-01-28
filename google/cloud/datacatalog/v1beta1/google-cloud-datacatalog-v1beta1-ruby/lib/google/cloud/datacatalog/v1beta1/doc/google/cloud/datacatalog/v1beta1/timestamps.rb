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
    module Datacatalog
      module V1beta1
        # Timestamps about this resource according to a particular system.
        # @!attribute [rw] create_time
        #   @return [Google::Protobuf::Timestamp]
        #     The creation time of the resource within the given system.
        # @!attribute [rw] update_time
        #   @return [Google::Protobuf::Timestamp]
        #     The last-modified time of the resource within the given system.
        # @!attribute [rw] expire_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The expiration time of the resource within the given system.
        #     Currently only apllicable to BigQuery resources.
        class SystemTimestamps; end
      end
    end
  end
end