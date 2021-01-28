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
#
# EDITING INSTRUCTIONS
# This file was generated from the file
# https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1beta1/endpoint_service.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/aiplatform/v1beta1/endpoint_service_pb"
require "google/cloud/aiplatform/v1_beta1/credentials"

module Google
  module Cloud
    module Aiplatform
      module V1Beta1
        # @!attribute [r] endpoint_service_stub
        #   @return [Google::Cloud::Aiplatform::V1beta1::EndpointService::Stub]
        class EndpointServiceClient
          attr_reader :endpoint_service_stub

          # The default address of the service.
          SERVICE_ADDRESS = "aiplatform.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "list_endpoints" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "endpoints")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform"
          ].freeze

          class OperationsClient < Google::Longrunning::OperationsClient
            self::SERVICE_ADDRESS = EndpointServiceClient::SERVICE_ADDRESS
            self::GRPC_INTERCEPTORS = EndpointServiceClient::GRPC_INTERCEPTORS
          end

          ENDPOINT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/endpoints/{endpoint}"
          )

          private_constant :ENDPOINT_PATH_TEMPLATE

          LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}"
          )

          private_constant :LOCATION_PATH_TEMPLATE

          MODEL_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/models/{model}"
          )

          private_constant :MODEL_PATH_TEMPLATE

          # Returns a fully-qualified endpoint resource name string.
          # @param project [String]
          # @param location [String]
          # @param endpoint [String]
          # @return [String]
          def self.endpoint_path project, location, endpoint
            ENDPOINT_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"endpoint" => endpoint
            )
          end

          # Returns a fully-qualified location resource name string.
          # @param project [String]
          # @param location [String]
          # @return [String]
          def self.location_path project, location
            LOCATION_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location
            )
          end

          # Returns a fully-qualified model resource name string.
          # @param project [String]
          # @param location [String]
          # @param model [String]
          # @return [String]
          def self.model_path project, location, model
            MODEL_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"model" => model
            )
          end

          # @param credentials [Google::Auth::Credentials, String, Hash, GRPC::Core::Channel, GRPC::Core::ChannelCredentials, Proc]
          #   Provides the means for authenticating requests made by the client. This parameter can
          #   be many types.
          #   A `Google::Auth::Credentials` uses a the properties of its represented keyfile for
          #   authenticating requests made by this client.
          #   A `String` will be treated as the path to the keyfile to be used for the construction of
          #   credentials for this client.
          #   A `Hash` will be treated as the contents of a keyfile to be used for the construction of
          #   credentials for this client.
          #   A `GRPC::Core::Channel` will be used to make calls through.
          #   A `GRPC::Core::ChannelCredentials` for the setting up the RPC client. The channel credentials
          #   should already be composed with a `GRPC::Core::CallCredentials` object.
          #   A `Proc` will be used as an updater_proc for the Grpc channel. The proc transforms the
          #   metadata for requests, generally, to give OAuth credentials.
          # @param scopes [Array<String>]
          #   The OAuth scopes for this service. This parameter is ignored if
          #   an updater_proc is supplied.
          # @param client_config [Hash]
          #   A Hash for call options for each method. See
          #   Google::Gax#construct_settings for the structure of
          #   this data. Falls back to the default config if not specified
          #   or the specified config is missing data points.
          # @param timeout [Numeric]
          #   The default timeout, in seconds, for calls made through this client.
          # @param metadata [Hash]
          #   Default metadata to be sent with each request. This can be overridden on a per call basis.
          # @param exception_transformer [Proc]
          #   An optional proc that intercepts any exceptions raised during an API call to inject
          #   custom error handling.
          def initialize \
              credentials: nil,
              scopes: ALL_SCOPES,
              client_config: {},
              timeout: DEFAULT_TIMEOUT,
              metadata: nil,
              exception_transformer: nil,
              lib_name: nil,
              lib_version: ""
            # These require statements are intentionally placed here to initialize
            # the gRPC module only when it's required.
            # See https://github.com/googleapis/toolkit/issues/446
            require "google/gax/grpc"
            require "google/cloud/aiplatform/v1beta1/endpoint_service_services_pb"

            credentials ||= Google::Cloud::Aiplatform::V1Beta1::Credentials.default

            @operations_client = OperationsClient.new(
              credentials: credentials,
              scopes: scopes,
              client_config: client_config,
              timeout: timeout,
              lib_name: lib_name,
              lib_version: lib_version,
              metadata: metadata,
            )

            if credentials.is_a?(String) || credentials.is_a?(Hash)
              updater_proc = Google::Cloud::Aiplatform::V1Beta1::Credentials.new(credentials).updater_proc
            end
            if credentials.is_a?(GRPC::Core::Channel)
              channel = credentials
            end
            if credentials.is_a?(GRPC::Core::ChannelCredentials)
              chan_creds = credentials
            end
            if credentials.is_a?(Proc)
              updater_proc = credentials
            end
            if credentials.is_a?(Google::Auth::Credentials)
              updater_proc = credentials.updater_proc
            end

            package_version = Gem.loaded_specs['google-cloud-aiplatform'].version.version

            google_api_client = "gl-ruby/#{RUBY_VERSION}"
            google_api_client << " #{lib_name}/#{lib_version}" if lib_name
            google_api_client << " gapic/#{package_version} gax/#{Google::Gax::VERSION}"
            google_api_client << " grpc/#{GRPC::VERSION}"
            google_api_client.freeze

            headers = { :"x-goog-api-client" => google_api_client }
            if credentials.respond_to?(:quota_project_id) && credentials.quota_project_id
              headers[:"x-goog-user-project"] = credentials.quota_project_id
            end
            headers.merge!(metadata) unless metadata.nil?
            client_config_file = Pathname.new(__dir__).join(
              "endpoint_service_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.aiplatform.v1beta1.EndpointService",
                JSON.parse(f.read),
                client_config,
                Google::Gax::Grpc::STATUS_CODE_NAMES,
                timeout,
                page_descriptors: PAGE_DESCRIPTORS,
                errors: Google::Gax::Grpc::API_ERRORS,
                metadata: headers
              )
            end

            # Allow overriding the service path/port in subclasses.
            service_path = self.class::SERVICE_ADDRESS
            port = self.class::DEFAULT_SERVICE_PORT
            interceptors = self.class::GRPC_INTERCEPTORS
            @endpoint_service_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Aiplatform::V1beta1::EndpointService::Stub.method(:new)
            )

            @create_endpoint = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:create_endpoint),
              defaults["create_endpoint"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_endpoint = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:get_endpoint),
              defaults["get_endpoint"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @list_endpoints = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:list_endpoints),
              defaults["list_endpoints"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_endpoint = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:update_endpoint),
              defaults["update_endpoint"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'endpoint.name' => request.endpoint.name}
              end
            )
            @delete_endpoint = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:delete_endpoint),
              defaults["delete_endpoint"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @deploy_model = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:deploy_model),
              defaults["deploy_model"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'endpoint' => request.endpoint}
              end
            )
            @undeploy_model = Google::Gax.create_api_call(
              @endpoint_service_stub.method(:undeploy_model),
              defaults["undeploy_model"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'endpoint' => request.endpoint}
              end
            )
          end

          # Service calls

          # Creates an Endpoint.
          #
          # @param parent [String]
          #   Required. The resource name of the Location to create the Endpoint in.
          #   Format: `projects/{project}/locations/{location}`
          # @param endpoint [Google::Cloud::Aiplatform::V1beta1::Endpoint | Hash]
          #   Required. The Endpoint to create.
          #   A hash of the same form as `Google::Cloud::Aiplatform::V1beta1::Endpoint`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_parent = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `endpoint`:
          #   endpoint = {}
          #
          #   # Register a callback during the method call.
          #   operation = endpoint_client.create_endpoint(formatted_parent, endpoint) do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Or use the return value to register a callback.
          #   operation.on_done do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Manually reload the operation.
          #   operation.reload!
          #
          #   # Or block until the operation completes, triggering callbacks on
          #   # completion.
          #   operation.wait_until_done!

          def create_endpoint \
              parent,
              endpoint,
              options: nil
            req = {
              parent: parent,
              endpoint: endpoint
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::CreateEndpointRequest)
            operation = Google::Gax::Operation.new(
              @create_endpoint.call(req, options),
              @operations_client,
              Google::Cloud::Aiplatform::V1beta1::Endpoint,
              Google::Cloud::Aiplatform::V1beta1::CreateEndpointOperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Gets an Endpoint.
          #
          # @param name [String]
          #   Required. The name of the Endpoint resource.
          #   Format:
          #   `projects/{project}/locations/{location}/endpoints/{endpoint}`
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Aiplatform::V1beta1::Endpoint]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Aiplatform::V1beta1::Endpoint]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_name = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.endpoint_path("[PROJECT]", "[LOCATION]", "[ENDPOINT]")
          #   response = endpoint_client.get_endpoint(formatted_name)

          def get_endpoint \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::GetEndpointRequest)
            @get_endpoint.call(req, options, &block)
          end

          # Lists Endpoints in a Location.
          #
          # @param parent [String]
          #   Required. The resource name of the Location from which to list the Endpoints.
          #   Format: `projects/{project}/locations/{location}`
          # @param filter [String]
          #   Optional. An expression for filtering the results of the request. For field names
          #   both snake_case and camelCase are supported.
          #
          #   * `endpoint` supports = and !=. `endpoint` represents the Endpoint ID,
          #     ie. the last segment of the Endpoint's {Google::Cloud::Aiplatform::V1beta1::Endpoint#name resource name}.
          #     * `display_name` supports =, != and regex()
          #       (uses [re2](https://github.com/google/re2/wiki/Syntax) syntax)
          #     * `labels` supports general map functions that is:
          #       `labels.key=value` - key:value equality
          #       `labels.key:* or labels:key - key existence
          #       A key including a space must be quoted. `labels."a key"`.
          #
          #     Some examples:
          #     * `endpoint=1`
          #     * `displayName="myDisplayName"`
          #     * `regex(display_name, "^A") -> The display name starts with an A.
          #     * `labels.myKey="myValue"`
          # @param page_size [Integer]
          #   The maximum number of resources contained in the underlying API
          #   response. If page streaming is performed per-resource, this
          #   parameter does not affect the return value. If page streaming is
          #   performed per-page, this determines the maximum number of
          #   resources in a page.
          # @param read_mask [Google::Protobuf::FieldMask | Hash]
          #   Optional. Mask specifying which fields to read.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Aiplatform::V1beta1::Endpoint>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Aiplatform::V1beta1::Endpoint>]
          #   An enumerable of Google::Cloud::Aiplatform::V1beta1::Endpoint instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_parent = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # Iterate over all results.
          #   endpoint_client.list_endpoints(formatted_parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   endpoint_client.list_endpoints(formatted_parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_endpoints \
              parent,
              filter: nil,
              page_size: nil,
              read_mask: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              filter: filter,
              page_size: page_size,
              read_mask: read_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::ListEndpointsRequest)
            @list_endpoints.call(req, options, &block)
          end

          # Updates an Endpoint.
          #
          # @param endpoint [Google::Cloud::Aiplatform::V1beta1::Endpoint | Hash]
          #   Required. The Endpoint which replaces the resource on the server.
          #   A hash of the same form as `Google::Cloud::Aiplatform::V1beta1::Endpoint`
          #   can also be provided.
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Required. The update mask applies to the resource.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Aiplatform::V1beta1::Endpoint]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Aiplatform::V1beta1::Endpoint]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #
          #   # TODO: Initialize `endpoint`:
          #   endpoint = {}
          #
          #   # TODO: Initialize `update_mask`:
          #   update_mask = {}
          #   response = endpoint_client.update_endpoint(endpoint, update_mask)

          def update_endpoint \
              endpoint,
              update_mask,
              options: nil,
              &block
            req = {
              endpoint: endpoint,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::UpdateEndpointRequest)
            @update_endpoint.call(req, options, &block)
          end

          # Deletes an Endpoint.
          #
          # @param name [String]
          #   Required. The name of the Endpoint resource to be deleted.
          #   Format:
          #   `projects/{project}/locations/{location}/endpoints/{endpoint}`
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_name = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.endpoint_path("[PROJECT]", "[LOCATION]", "[ENDPOINT]")
          #
          #   # Register a callback during the method call.
          #   operation = endpoint_client.delete_endpoint(formatted_name) do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Or use the return value to register a callback.
          #   operation.on_done do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Manually reload the operation.
          #   operation.reload!
          #
          #   # Or block until the operation completes, triggering callbacks on
          #   # completion.
          #   operation.wait_until_done!

          def delete_endpoint \
              name,
              options: nil
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::DeleteEndpointRequest)
            operation = Google::Gax::Operation.new(
              @delete_endpoint.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Cloud::Aiplatform::V1beta1::DeleteOperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Deploys a Model into this Endpoint, creating a DeployedModel within it.
          #
          # @param endpoint [String]
          #   Required. The name of the Endpoint resource into which to deploy a Model.
          #   Format:
          #   `projects/{project}/locations/{location}/endpoints/{endpoint}`
          # @param deployed_model [Google::Cloud::Aiplatform::V1beta1::DeployedModel | Hash]
          #   Required. The DeployedModel to be created within the Endpoint. Note that
          #   {Google::Cloud::Aiplatform::V1beta1::Endpoint#traffic_split Endpoint#traffic_split} must be updated for the DeployedModel to start
          #   receiving traffic, either as part of this call, or via
          #   {Google::Cloud::Aiplatform::V1beta1::EndpointService::UpdateEndpoint EndpointService::UpdateEndpoint}.
          #   A hash of the same form as `Google::Cloud::Aiplatform::V1beta1::DeployedModel`
          #   can also be provided.
          # @param traffic_split [Hash{String => Integer}]
          #   A map from a DeployedModel's ID to the percentage of this Endpoint's
          #   traffic that should be forwarded to that DeployedModel.
          #
          #   If this field is non-empty, then the Endpoint's
          #   {Google::Cloud::Aiplatform::V1beta1::Endpoint#traffic_split traffic_split} will be overwritten with it.
          #   To refer to the ID of the just being deployed Model, a "0" should be used,
          #   and the actual ID of the new DeployedModel will be filled in its place by
          #   this method. The traffic percentage values must add up to 100.
          #
          #   If this field is empty, then the Endpoint's
          #   {Google::Cloud::Aiplatform::V1beta1::Endpoint#traffic_split traffic_split} is not updated.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_endpoint = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.endpoint_path("[PROJECT]", "[LOCATION]", "[ENDPOINT]")
          #
          #   # TODO: Initialize `deployed_model`:
          #   deployed_model = {}
          #
          #   # Register a callback during the method call.
          #   operation = endpoint_client.deploy_model(formatted_endpoint, deployed_model) do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Or use the return value to register a callback.
          #   operation.on_done do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Manually reload the operation.
          #   operation.reload!
          #
          #   # Or block until the operation completes, triggering callbacks on
          #   # completion.
          #   operation.wait_until_done!

          def deploy_model \
              endpoint,
              deployed_model,
              traffic_split: nil,
              options: nil
            req = {
              endpoint: endpoint,
              deployed_model: deployed_model,
              traffic_split: traffic_split
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::DeployModelRequest)
            operation = Google::Gax::Operation.new(
              @deploy_model.call(req, options),
              @operations_client,
              Google::Cloud::Aiplatform::V1beta1::DeployModelResponse,
              Google::Cloud::Aiplatform::V1beta1::DeployModelOperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Undeploys a Model from an Endpoint, removing a DeployedModel from it, and
          # freeing all resources it's using.
          #
          # @param endpoint [String]
          #   Required. The name of the Endpoint resource from which to undeploy a Model.
          #   Format:
          #   `projects/{project}/locations/{location}/endpoints/{endpoint}`
          # @param deployed_model_id [String]
          #   Required. The ID of the DeployedModel to be undeployed from the Endpoint.
          # @param traffic_split [Hash{String => Integer}]
          #   If this field is provided, then the Endpoint's
          #   {Google::Cloud::Aiplatform::V1beta1::Endpoint#traffic_split traffic_split} will be overwritten with it. If
          #   last DeployedModel is being undeployed from the Endpoint, the
          #   [Endpoint.traffic_split] will always end up empty when this call returns.
          #   A DeployedModel will be successfully undeployed only if it doesn't have
          #   any traffic assigned to it when this method executes, or if this field
          #   unassigns any traffic to it.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   endpoint_client = Google::Cloud::Aiplatform::V1Beta1::Endpoint.new(version: :v1beta1)
          #   formatted_endpoint = Google::Cloud::Aiplatform::V1Beta1::EndpointServiceClient.endpoint_path("[PROJECT]", "[LOCATION]", "[ENDPOINT]")
          #
          #   # TODO: Initialize `deployed_model_id`:
          #   deployed_model_id = ''
          #
          #   # Register a callback during the method call.
          #   operation = endpoint_client.undeploy_model(formatted_endpoint, deployed_model_id) do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Or use the return value to register a callback.
          #   operation.on_done do |op|
          #     raise op.results.message if op.error?
          #     op_results = op.results
          #     # Process the results.
          #
          #     metadata = op.metadata
          #     # Process the metadata.
          #   end
          #
          #   # Manually reload the operation.
          #   operation.reload!
          #
          #   # Or block until the operation completes, triggering callbacks on
          #   # completion.
          #   operation.wait_until_done!

          def undeploy_model \
              endpoint,
              deployed_model_id,
              traffic_split: nil,
              options: nil
            req = {
              endpoint: endpoint,
              deployed_model_id: deployed_model_id,
              traffic_split: traffic_split
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::UndeployModelRequest)
            operation = Google::Gax::Operation.new(
              @undeploy_model.call(req, options),
              @operations_client,
              Google::Cloud::Aiplatform::V1beta1::UndeployModelResponse,
              Google::Cloud::Aiplatform::V1beta1::UndeployModelOperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end
        end
      end
    end
  end
end
