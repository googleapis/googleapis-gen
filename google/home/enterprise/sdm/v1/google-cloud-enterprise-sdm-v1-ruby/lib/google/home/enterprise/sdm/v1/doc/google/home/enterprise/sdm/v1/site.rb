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
  module Home
    module Enterprise
      module Sdm
        module V1
          # Structure resource represents an instance of enterprise managed home or hotel
          # room.
          # @!attribute [rw] name
          #   @return [String]
          #     Output only. The resource name of the structure. For example:
          #     "enterprises/XYZ/structures/ABC".
          # @!attribute [rw] traits
          #   @return [Google::Protobuf::Struct]
          #     Structure traits.
          class Structure; end

          # Room resource represents an instance of sub-space within a structure such as
          # rooms in a hotel suite or rental apartment.
          # @!attribute [rw] name
          #   @return [String]
          #     Output only. The resource name of the room. For example:
          #     "enterprises/XYZ/structures/ABC/rooms/123".
          # @!attribute [rw] traits
          #   @return [Google::Protobuf::Struct]
          #     Room traits.
          class Room; end
        end
      end
    end
  end
end