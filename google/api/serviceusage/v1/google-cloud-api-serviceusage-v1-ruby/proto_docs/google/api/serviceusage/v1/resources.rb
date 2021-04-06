# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Api
    module Serviceusage
      module V1
        # A service that is available for use by the consumer.
        # @!attribute [rw] name
        #   @return [::String]
        #     The resource name of the consumer and service.
        #
        #     A valid name would be:
        #     - projects/123/services/serviceusage.googleapis.com
        # @!attribute [rw] parent
        #   @return [::String]
        #     The resource name of the consumer.
        #
        #     A valid name would be:
        #     - projects/123
        # @!attribute [rw] config
        #   @return [::Google::Api::Serviceusage::V1::ServiceConfig]
        #     The service configuration of the available service.
        #     Some fields may be filtered out of the configuration in responses to
        #     the `ListServices` method. These fields are present only in responses to
        #     the `GetService` method.
        # @!attribute [rw] state
        #   @return [::Google::Api::Serviceusage::V1::State]
        #     Whether or not the service has been enabled for use by the consumer.
        class Service
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # The configuration of the service.
        # @!attribute [rw] name
        #   @return [::String]
        #     The DNS address at which this service is available.
        #
        #     An example DNS address would be:
        #     `calendar.googleapis.com`.
        # @!attribute [rw] title
        #   @return [::String]
        #     The product title for this service.
        # @!attribute [rw] apis
        #   @return [::Array<::Google::Protobuf::Api>]
        #     A list of API interfaces exported by this service. Contains only the names,
        #     versions, and method names of the interfaces.
        # @!attribute [rw] documentation
        #   @return [::Google::Api::Documentation]
        #     Additional API documentation. Contains only the summary and the
        #     documentation URL.
        # @!attribute [rw] quota
        #   @return [::Google::Api::Quota]
        #     Quota configuration.
        # @!attribute [rw] authentication
        #   @return [::Google::Api::Authentication]
        #     Auth configuration. Contains only the OAuth rules.
        # @!attribute [rw] usage
        #   @return [::Google::Api::Usage]
        #     Configuration controlling usage of this service.
        # @!attribute [rw] endpoints
        #   @return [::Array<::Google::Api::Endpoint>]
        #     Configuration for network endpoints. Contains only the names and aliases
        #     of the endpoints.
        # @!attribute [rw] monitored_resources
        #   @return [::Array<::Google::Api::MonitoredResourceDescriptor>]
        #     Defines the monitored resources used by this service. This is required
        #     by the [Service.monitoring][google.api.Service.monitoring] and [Service.logging][google.api.Service.logging] configurations.
        # @!attribute [rw] monitoring
        #   @return [::Google::Api::Monitoring]
        #     Monitoring configuration.
        #     This should not include the 'producer_destinations' field.
        class ServiceConfig
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # The operation metadata returned for the batchend services operation.
        # @!attribute [rw] resource_names
        #   @return [::Array<::String>]
        #     The full name of the resources that this operation is directly
        #     associated with.
        class OperationMetadata
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # Whether or not a service has been enabled for use by a consumer.
        module State
          # The default value, which indicates that the enabled state of the service
          # is unspecified or not meaningful. Currently, all consumers other than
          # projects (such as folders and organizations) are always in this state.
          STATE_UNSPECIFIED = 0

          # The service cannot be used by this consumer. It has either been explicitly
          # disabled, or has never been enabled.
          DISABLED = 1

          # The service has been explicitly enabled for use by this consumer.
          ENABLED = 2
        end
      end
    end
  end
end
