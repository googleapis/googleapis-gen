# Generated by the protocol buffer compiler.  DO NOT EDIT!
# Source: google/home/enterprise/sdm/v1/smart_device_management_service.proto for package 'google.home.enterprise.sdm.v1'
# Original file comments:
# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

require 'grpc'
require 'google/home/enterprise/sdm/v1/smart_device_management_service_pb'

module Google
  module Home
    module Enterprise
      module Sdm
        module V1
          module SmartDeviceManagementService
            # core::0122 is getting triggered by adding fields custom_name.
            # though, 0122 has exception for such field name as display_name. Due to
            # historical reasons we use custom_name for exactly same purpose, so it is
            # covered by that exception.
            #
            # A service that allows API consumers to provision and manage Google
            # Home structures and devices for enterprise use cases.
            class Service

              include GRPC::GenericService

              self.marshal_class_method = :encode
              self.unmarshal_class_method = :decode
              self.service_name = 'google.home.enterprise.sdm.v1.SmartDeviceManagementService'

              # Gets a device managed by the enterprise.
              rpc :GetDevice, ::Google::Home::Enterprise::Sdm::V1::GetDeviceRequest, ::Google::Home::Enterprise::Sdm::V1::Device
              # Lists devices managed by the enterprise.
              rpc :ListDevices, ::Google::Home::Enterprise::Sdm::V1::ListDevicesRequest, ::Google::Home::Enterprise::Sdm::V1::ListDevicesResponse
              # Executes a command to device managed by the enterprise.
              rpc :ExecuteDeviceCommand, ::Google::Home::Enterprise::Sdm::V1::ExecuteDeviceCommandRequest, ::Google::Home::Enterprise::Sdm::V1::ExecuteDeviceCommandResponse
              # Gets a structure managed by the enterprise.
              rpc :GetStructure, ::Google::Home::Enterprise::Sdm::V1::GetStructureRequest, ::Google::Home::Enterprise::Sdm::V1::Structure
              # Lists structures managed by the enterprise.
              rpc :ListStructures, ::Google::Home::Enterprise::Sdm::V1::ListStructuresRequest, ::Google::Home::Enterprise::Sdm::V1::ListStructuresResponse
              # Gets a room managed by the enterprise.
              rpc :GetRoom, ::Google::Home::Enterprise::Sdm::V1::GetRoomRequest, ::Google::Home::Enterprise::Sdm::V1::Room
              # Lists rooms managed by the enterprise.
              rpc :ListRooms, ::Google::Home::Enterprise::Sdm::V1::ListRoomsRequest, ::Google::Home::Enterprise::Sdm::V1::ListRoomsResponse
            end

            Stub = Service.rpc_stub_class
          end
        end
      end
    end
  end
end
