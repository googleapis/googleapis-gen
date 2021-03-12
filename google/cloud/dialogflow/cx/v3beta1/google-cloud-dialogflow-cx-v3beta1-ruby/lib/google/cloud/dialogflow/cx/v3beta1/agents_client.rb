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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/cx/v3beta1/agent.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/dialogflow/cx/v3beta1/agent_pb"
require "google/cloud/dialogflow/cx/v3beta1/credentials"

module Google
  module Cloud
    module Dialogflow
      module Cx
        module V3beta1
          # Service for managing {Google::Cloud::Dialogflow::Cx::V3beta1::Agent Agents}.
          #
          # @!attribute [r] agents_stub
          #   @return [Google::Cloud::Dialogflow::Cx::V3beta1::Agents::Stub]
          class AgentsClient
            attr_reader :agents_stub

            # The default address of the service.
            SERVICE_ADDRESS = "dialogflow.googleapis.com".freeze

            # The default port of the service.
            DEFAULT_SERVICE_PORT = 443

            # The default set of gRPC interceptors.
            GRPC_INTERCEPTORS = []

            DEFAULT_TIMEOUT = 30

            PAGE_DESCRIPTORS = {
              "list_agents" => Google::Gax::PageDescriptor.new(
                "page_token",
                "next_page_token",
                "agents")
            }.freeze

            private_constant :PAGE_DESCRIPTORS

            # The scopes needed to make gRPC calls to all of the methods defined in
            # this service.
            ALL_SCOPES = [
              "https://www.googleapis.com/auth/cloud-platform",
              "https://www.googleapis.com/auth/dialogflow"
            ].freeze

            class OperationsClient < Google::Longrunning::OperationsClient
              self::SERVICE_ADDRESS = AgentsClient::SERVICE_ADDRESS
              self::GRPC_INTERCEPTORS = AgentsClient::GRPC_INTERCEPTORS
            end

            AGENT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
              "projects/{project}/locations/{location}/agents/{agent}"
            )

            private_constant :AGENT_PATH_TEMPLATE

            AGENT_VALIDATION_RESULT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
              "projects/{project}/locations/{location}/agents/{agent}/validationResult"
            )

            private_constant :AGENT_VALIDATION_RESULT_PATH_TEMPLATE

            FLOW_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
              "projects/{project}/locations/{location}/agents/{agent}/flows/{flow}"
            )

            private_constant :FLOW_PATH_TEMPLATE

            LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
              "projects/{project}/locations/{location}"
            )

            private_constant :LOCATION_PATH_TEMPLATE

            SECURITY_SETTINGS_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
              "projects/{project}/locations/{location}/securitySettings/{security_settings}"
            )

            private_constant :SECURITY_SETTINGS_PATH_TEMPLATE

            # Returns a fully-qualified agent resource name string.
            # @param project [String]
            # @param location [String]
            # @param agent [String]
            # @return [String]
            def self.agent_path project, location, agent
              AGENT_PATH_TEMPLATE.render(
                :"project" => project,
                :"location" => location,
                :"agent" => agent
              )
            end

            # Returns a fully-qualified agent_validation_result resource name string.
            # @param project [String]
            # @param location [String]
            # @param agent [String]
            # @return [String]
            def self.agent_validation_result_path project, location, agent
              AGENT_VALIDATION_RESULT_PATH_TEMPLATE.render(
                :"project" => project,
                :"location" => location,
                :"agent" => agent
              )
            end

            # Returns a fully-qualified flow resource name string.
            # @param project [String]
            # @param location [String]
            # @param agent [String]
            # @param flow [String]
            # @return [String]
            def self.flow_path project, location, agent, flow
              FLOW_PATH_TEMPLATE.render(
                :"project" => project,
                :"location" => location,
                :"agent" => agent,
                :"flow" => flow
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

            # Returns a fully-qualified security_settings resource name string.
            # @param project [String]
            # @param location [String]
            # @param security_settings [String]
            # @return [String]
            def self.security_settings_path project, location, security_settings
              SECURITY_SETTINGS_PATH_TEMPLATE.render(
                :"project" => project,
                :"location" => location,
                :"security_settings" => security_settings
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
              require "google/cloud/dialogflow/cx/v3beta1/agent_services_pb"

              credentials ||= Google::Cloud::Dialogflow::Cx::V3beta1::Credentials.default

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
                updater_proc = Google::Cloud::Dialogflow::Cx::V3beta1::Credentials.new(credentials).updater_proc
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

              package_version = Gem.loaded_specs['google-cloud-dialogflow-cx'].version.version

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
                "agents_client_config.json"
              )
              defaults = client_config_file.open do |f|
                Google::Gax.construct_settings(
                  "google.cloud.dialogflow.cx.v3beta1.Agents",
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
              @agents_stub = Google::Gax::Grpc.create_stub(
                service_path,
                port,
                chan_creds: chan_creds,
                channel: channel,
                updater_proc: updater_proc,
                scopes: scopes,
                interceptors: interceptors,
                &Google::Cloud::Dialogflow::Cx::V3beta1::Agents::Stub.method(:new)
              )

              @list_agents = Google::Gax.create_api_call(
                @agents_stub.method(:list_agents),
                defaults["list_agents"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'parent' => request.parent}
                end
              )
              @get_agent = Google::Gax.create_api_call(
                @agents_stub.method(:get_agent),
                defaults["get_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
              @create_agent = Google::Gax.create_api_call(
                @agents_stub.method(:create_agent),
                defaults["create_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'parent' => request.parent}
                end
              )
              @update_agent = Google::Gax.create_api_call(
                @agents_stub.method(:update_agent),
                defaults["update_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'agent.name' => request.agent.name}
                end
              )
              @delete_agent = Google::Gax.create_api_call(
                @agents_stub.method(:delete_agent),
                defaults["delete_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
              @export_agent = Google::Gax.create_api_call(
                @agents_stub.method(:export_agent),
                defaults["export_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
              @restore_agent = Google::Gax.create_api_call(
                @agents_stub.method(:restore_agent),
                defaults["restore_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
              @validate_agent = Google::Gax.create_api_call(
                @agents_stub.method(:validate_agent),
                defaults["validate_agent"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
              @get_agent_validation_result = Google::Gax.create_api_call(
                @agents_stub.method(:get_agent_validation_result),
                defaults["get_agent_validation_result"],
                exception_transformer: exception_transformer,
                params_extractor: proc do |request|
                  {'name' => request.name}
                end
              )
            end

            # Service calls

            # Returns the list of all agents in the specified location.
            #
            # @param parent [String]
            #   Required. The location to list all agents for.
            #   Format: `projects/<Project ID>/locations/<Location ID>`.
            # @param page_size [Integer]
            #   The maximum number of resources contained in the underlying API
            #   response. If page streaming is performed per-resource, this
            #   parameter does not affect the return value. If page streaming is
            #   performed per-page, this determines the maximum number of
            #   resources in a page.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::Cx::V3beta1::Agent>]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::Cx::V3beta1::Agent>]
            #   An enumerable of Google::Cloud::Dialogflow::Cx::V3beta1::Agent instances.
            #   See Google::Gax::PagedEnumerable documentation for other
            #   operations such as per-page iteration or access to the response
            #   object.
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_parent = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.location_path("[PROJECT]", "[LOCATION]")
            #
            #   # Iterate over all results.
            #   agents_client.list_agents(formatted_parent).each do |element|
            #     # Process element.
            #   end
            #
            #   # Or iterate over results one page at a time.
            #   agents_client.list_agents(formatted_parent).each_page do |page|
            #     # Process each page at a time.
            #     page.each do |element|
            #       # Process element.
            #     end
            #   end

            def list_agents \
                parent,
                page_size: nil,
                options: nil,
                &block
              req = {
                parent: parent,
                page_size: page_size
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::ListAgentsRequest)
              @list_agents.call(req, options, &block)
            end

            # Retrieves the specified agent.
            #
            # @param name [String]
            #   Required. The name of the agent.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #   response = agents_client.get_agent(formatted_name)

            def get_agent \
                name,
                options: nil,
                &block
              req = {
                name: name
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::GetAgentRequest)
              @get_agent.call(req, options, &block)
            end

            # Creates an agent in the specified location.
            #
            # @param parent [String]
            #   Required. The location to create a agent for.
            #   Format: `projects/<Project ID>/locations/<Location ID>`.
            # @param agent [Google::Cloud::Dialogflow::Cx::V3beta1::Agent | Hash]
            #   Required. The agent to create.
            #   A hash of the same form as `Google::Cloud::Dialogflow::Cx::V3beta1::Agent`
            #   can also be provided.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_parent = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.location_path("[PROJECT]", "[LOCATION]")
            #
            #   # TODO: Initialize `agent`:
            #   agent = {}
            #   response = agents_client.create_agent(formatted_parent, agent)

            def create_agent \
                parent,
                agent,
                options: nil,
                &block
              req = {
                parent: parent,
                agent: agent
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::CreateAgentRequest)
              @create_agent.call(req, options, &block)
            end

            # Updates the specified agent.
            #
            # @param agent [Google::Cloud::Dialogflow::Cx::V3beta1::Agent | Hash]
            #   Required. The agent to update.
            #   A hash of the same form as `Google::Cloud::Dialogflow::Cx::V3beta1::Agent`
            #   can also be provided.
            # @param update_mask [Google::Protobuf::FieldMask | Hash]
            #   The mask to control which fields get updated. If the mask is not present,
            #   all fields will be updated.
            #   A hash of the same form as `Google::Protobuf::FieldMask`
            #   can also be provided.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Cloud::Dialogflow::Cx::V3beta1::Agent]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #
            #   # TODO: Initialize `agent`:
            #   agent = {}
            #   response = agents_client.update_agent(agent)

            def update_agent \
                agent,
                update_mask: nil,
                options: nil,
                &block
              req = {
                agent: agent,
                update_mask: update_mask
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::UpdateAgentRequest)
              @update_agent.call(req, options, &block)
            end

            # Deletes the specified agent.
            #
            # @param name [String]
            #   Required. The name of the agent to delete.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result []
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #   agents_client.delete_agent(formatted_name)

            def delete_agent \
                name,
                options: nil,
                &block
              req = {
                name: name
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::DeleteAgentRequest)
              @delete_agent.call(req, options, &block)
              nil
            end

            # Exports the specified agent to a binary file.
            #
            # @param name [String]
            #   Required. The name of the agent to export.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
            # @param agent_uri [String]
            #   Optional. The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI to
            #   export the agent to. The format of this URI must be
            #   `gs://<bucket-name>/<object-name>`.
            #   If left unspecified, the serialized agent is returned inline.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @return [Google::Gax::Operation]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #
            #   # Register a callback during the method call.
            #   operation = agents_client.export_agent(formatted_name) do |op|
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

            def export_agent \
                name,
                agent_uri: nil,
                options: nil
              req = {
                name: name,
                agent_uri: agent_uri
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::ExportAgentRequest)
              operation = Google::Gax::Operation.new(
                @export_agent.call(req, options),
                @operations_client,
                Google::Cloud::Dialogflow::Cx::V3beta1::ExportAgentResponse,
                Google::Protobuf::Struct,
                call_options: options
              )
              operation.on_done { |operation| yield(operation) } if block_given?
              operation
            end

            # Restores the specified agent from a binary file.
            #
            # Replaces the current agent with a new one. Note that all existing resources
            # in agent (e.g. intents, entity types, flows) will be removed.
            #
            # @param name [String]
            #   Required. The name of the agent to restore into.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
            # @param agent_uri [String]
            #   The [Google Cloud Storage](https://cloud.google.com/storage/docs/) URI
            #   to restore agent from. The format of this URI must be
            #   `gs://<bucket-name>/<object-name>`.
            # @param agent_content [String]
            #   Uncompressed raw byte content for agent.
            # @param restore_option [Google::Cloud::Dialogflow::Cx::V3beta1::RestoreAgentRequest::RestoreOption]
            #   Agent restore mode. If not specified, `KEEP` is assumed.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @return [Google::Gax::Operation]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #
            #   # Register a callback during the method call.
            #   operation = agents_client.restore_agent(formatted_name) do |op|
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

            def restore_agent \
                name,
                agent_uri: nil,
                agent_content: nil,
                restore_option: nil,
                options: nil
              req = {
                name: name,
                agent_uri: agent_uri,
                agent_content: agent_content,
                restore_option: restore_option
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::RestoreAgentRequest)
              operation = Google::Gax::Operation.new(
                @restore_agent.call(req, options),
                @operations_client,
                Google::Protobuf::Empty,
                Google::Protobuf::Struct,
                call_options: options
              )
              operation.on_done { |operation| yield(operation) } if block_given?
              operation
            end

            # Validates the specified agent and creates or updates validation results.
            # The agent in draft version is validated. Please call this API after the
            # training is completed to get the complete validation results.
            #
            # @param name [String]
            #   Required. The agent to validate.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent ID>`.
            # @param language_code [String]
            #   If not specified, the agent's default language is used.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Cloud::Dialogflow::Cx::V3beta1::AgentValidationResult]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Cloud::Dialogflow::Cx::V3beta1::AgentValidationResult]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #   response = agents_client.validate_agent(formatted_name)

            def validate_agent \
                name,
                language_code: nil,
                options: nil,
                &block
              req = {
                name: name,
                language_code: language_code
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::ValidateAgentRequest)
              @validate_agent.call(req, options, &block)
            end

            # Gets the latest agent validation result. Agent validation is performed
            # when ValidateAgent is called.
            #
            # @param name [String]
            #   Required. The agent name.
            #   Format: `projects/<Project ID>/locations/<Location ID>/agents/<Agent
            #   ID>/validationResult`.
            # @param language_code [String]
            #   If not specified, the agent's default language is used.
            # @param options [Google::Gax::CallOptions]
            #   Overrides the default settings for this call, e.g, timeout,
            #   retries, etc.
            # @yield [result, operation] Access the result along with the RPC operation
            # @yieldparam result [Google::Cloud::Dialogflow::Cx::V3beta1::AgentValidationResult]
            # @yieldparam operation [GRPC::ActiveCall::Operation]
            # @return [Google::Cloud::Dialogflow::Cx::V3beta1::AgentValidationResult]
            # @raise [Google::Gax::GaxError] if the RPC is aborted.
            # @example
            #   require "google/cloud/dialogflow/cx"
            #
            #   agents_client = Google::Cloud::Dialogflow::Cx::Agents.new(version: :v3beta1)
            #   formatted_name = Google::Cloud::Dialogflow::Cx::V3beta1::AgentsClient.agent_validation_result_path("[PROJECT]", "[LOCATION]", "[AGENT]")
            #   response = agents_client.get_agent_validation_result(formatted_name)

            def get_agent_validation_result \
                name,
                language_code: nil,
                options: nil,
                &block
              req = {
                name: name,
                language_code: language_code
              }.delete_if { |_, v| v.nil? }
              req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::Cx::V3beta1::GetAgentValidationResultRequest)
              @get_agent_validation_result.call(req, options, &block)
            end
          end
        end
      end
    end
  end
end
