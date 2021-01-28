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
          # Device resource represents an instance of enterprise managed device in the
          # property.
          # @!attribute [rw] name
          #   @return [String]
          #     Required. The resource name of the device. For example:
          #     "enterprises/XYZ/devices/123".
          # @!attribute [rw] type
          #   @return [String]
          #     Output only. Type of the device for general display purposes.
          #     For example: "THERMOSTAT". The device type should not be used to deduce or
          #     infer functionality of the actual device it is assigned to. Instead, use
          #     the returned traits for the device.
          # @!attribute [rw] traits
          #   @return [Google::Protobuf::Struct]
          #     Output only. Device traits.
          # @!attribute [rw] parent_relations
          #   @return [Array<Google::Home::Enterprise::Sdm::V1::ParentRelation>]
          #     Assignee details of the device.
          class Device; end

          # Represents device relationships, for instance, structure/room to which the
          # device is assigned to. For now this is only filled in the enterprise flow.
          # @!attribute [rw] parent
          #   @return [String]
          #     Output only. The name of the relation -- e.g., structure/room where the
          #     device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
          #     "enterprises/XYZ/structures/ABC/rooms/123"
          # @!attribute [rw] display_name
          #   @return [String]
          #     Output only. The custom name of the relation -- e.g., structure/room where
          #     the device is assigned to.
          class ParentRelation; end
        end
      end
    end
  end
end