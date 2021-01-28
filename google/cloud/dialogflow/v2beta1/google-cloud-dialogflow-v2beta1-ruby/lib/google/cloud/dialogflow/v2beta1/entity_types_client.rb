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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2beta1/entity_type.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/dialogflow/v2beta1/entity_type_pb"
require "google/cloud/dialogflow/v2beta1/credentials"

module Google
  module Cloud
    module Dialogflow
      module V2beta1
        # Service for managing {Google::Cloud::Dialogflow::V2beta1::EntityType EntityTypes}.
        #
        # @!attribute [r] entity_types_stub
        #   @return [Google::Cloud::Dialogflow::V2beta1::EntityTypes::Stub]
        class EntityTypesClient
          attr_reader :entity_types_stub

          # The default address of the service.
          SERVICE_ADDRESS = "dialogflow.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "list_entity_types" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "entity_types")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform",
            "https://www.googleapis.com/auth/dialogflow"
          ].freeze

          class OperationsClient < Google::Longrunning::OperationsClient
            self::SERVICE_ADDRESS = EntityTypesClient::SERVICE_ADDRESS
            self::GRPC_INTERCEPTORS = EntityTypesClient::GRPC_INTERCEPTORS
          end

          AGENT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/agent"
          )

          private_constant :AGENT_PATH_TEMPLATE

          ENTITY_TYPE_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/agent/entityTypes/{entity_type}"
          )

          private_constant :ENTITY_TYPE_PATH_TEMPLATE

          # Returns a fully-qualified agent resource name string.
          # @param project [String]
          # @return [String]
          def self.agent_path project
            AGENT_PATH_TEMPLATE.render(
              :"project" => project
            )
          end

          # Returns a fully-qualified entity_type resource name string.
          # @param project [String]
          # @param entity_type [String]
          # @return [String]
          def self.entity_type_path project, entity_type
            ENTITY_TYPE_PATH_TEMPLATE.render(
              :"project" => project,
              :"entity_type" => entity_type
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
            require "google/cloud/dialogflow/v2beta1/entity_type_services_pb"

            credentials ||= Google::Cloud::Dialogflow::V2beta1::Credentials.default

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
              updater_proc = Google::Cloud::Dialogflow::V2beta1::Credentials.new(credentials).updater_proc
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

            package_version = Gem.loaded_specs['google-cloud-dialogflow'].version.version

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
              "entity_types_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.dialogflow.v2beta1.EntityTypes",
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
            @entity_types_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Dialogflow::V2beta1::EntityTypes::Stub.method(:new)
            )

            @list_entity_types = Google::Gax.create_api_call(
              @entity_types_stub.method(:list_entity_types),
              defaults["list_entity_types"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_entity_type = Google::Gax.create_api_call(
              @entity_types_stub.method(:get_entity_type),
              defaults["get_entity_type"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @create_entity_type = Google::Gax.create_api_call(
              @entity_types_stub.method(:create_entity_type),
              defaults["create_entity_type"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_entity_type = Google::Gax.create_api_call(
              @entity_types_stub.method(:update_entity_type),
              defaults["update_entity_type"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'entity_type.name' => request.entity_type.name}
              end
            )
            @delete_entity_type = Google::Gax.create_api_call(
              @entity_types_stub.method(:delete_entity_type),
              defaults["delete_entity_type"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @batch_update_entity_types = Google::Gax.create_api_call(
              @entity_types_stub.method(:batch_update_entity_types),
              defaults["batch_update_entity_types"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_delete_entity_types = Google::Gax.create_api_call(
              @entity_types_stub.method(:batch_delete_entity_types),
              defaults["batch_delete_entity_types"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_create_entities = Google::Gax.create_api_call(
              @entity_types_stub.method(:batch_create_entities),
              defaults["batch_create_entities"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_update_entities = Google::Gax.create_api_call(
              @entity_types_stub.method(:batch_update_entities),
              defaults["batch_update_entities"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_delete_entities = Google::Gax.create_api_call(
              @entity_types_stub.method(:batch_delete_entities),
              defaults["batch_delete_entities"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
          end

          # Service calls

          # Returns the list of all entity types in the specified agent.
          #
          # @param parent [String]
          #   Required. The agent to list all entity types from.
          #   Supported formats:
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
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
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::V2beta1::EntityType>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::V2beta1::EntityType>]
          #   An enumerable of Google::Cloud::Dialogflow::V2beta1::EntityType instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # Iterate over all results.
          #   entity_types_client.list_entity_types(parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   entity_types_client.list_entity_types(parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_entity_types \
              parent,
              language_code: nil,
              page_size: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              language_code: language_code,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::ListEntityTypesRequest)
            @list_entity_types.call(req, options, &block)
          end

          # Retrieves the specified entity type.
          #
          # @param name [String]
          #   Required. The name of the entity type.
          #   Supported formats:
          #   * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/entityTypes/<Entity
          #     Type ID>`
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `name`:
          #   name = ''
          #   response = entity_types_client.get_entity_type(name)

          def get_entity_type \
              name,
              language_code: nil,
              options: nil,
              &block
            req = {
              name: name,
              language_code: language_code
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::GetEntityTypeRequest)
            @get_entity_type.call(req, options, &block)
          end

          # Creates an entity type in the specified agent.
          #
          # @param parent [String]
          #   Required. The agent to create a entity type for.
          #   Supported formats:
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param entity_type [Google::Cloud::Dialogflow::V2beta1::EntityType | Hash]
          #   Required. The entity type to create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::EntityType`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `entity_type`:
          #   entity_type = {}
          #   response = entity_types_client.create_entity_type(parent, entity_type)

          def create_entity_type \
              parent,
              entity_type,
              language_code: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              entity_type: entity_type,
              language_code: language_code
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::CreateEntityTypeRequest)
            @create_entity_type.call(req, options, &block)
          end

          # Updates the specified entity type.
          #
          # @param entity_type [Google::Cloud::Dialogflow::V2beta1::EntityType | Hash]
          #   Required. The entity type to update.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::EntityType`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Optional. The mask to control which fields get updated.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::EntityType]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `entity_type`:
          #   entity_type = {}
          #   response = entity_types_client.update_entity_type(entity_type)

          def update_entity_type \
              entity_type,
              language_code: nil,
              update_mask: nil,
              options: nil,
              &block
            req = {
              entity_type: entity_type,
              language_code: language_code,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::UpdateEntityTypeRequest)
            @update_entity_type.call(req, options, &block)
          end

          # Deletes the specified entity type.
          #
          # @param name [String]
          #   Required. The name of the entity type to delete.
          #   Supported formats:
          #   * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/entityTypes/<Entity
          #     Type ID>`
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result []
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `name`:
          #   name = ''
          #   entity_types_client.delete_entity_type(name)

          def delete_entity_type \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::DeleteEntityTypeRequest)
            @delete_entity_type.call(req, options, &block)
            nil
          end

          # Updates/Creates multiple entity types in the specified agent.
          # Operation <response: {Google::Cloud::Dialogflow::V2beta1::BatchUpdateEntityTypesResponse BatchUpdateEntityTypesResponse}>
          #
          # @param parent [String]
          #   Required. The name of the agent to update or create entity types in.
          #   Supported formats:
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param entity_type_batch_uri [String]
          #   The URI to a Google Cloud Storage file containing entity types to update
          #   or create. The file format can either be a serialized proto (of
          #   EntityBatch type) or a JSON object. Note: The URI must start with
          #   "gs://".
          # @param entity_type_batch_inline [Google::Cloud::Dialogflow::V2beta1::EntityTypeBatch | Hash]
          #   The collection of entity types to update or create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::EntityTypeBatch`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Optional. The mask to control which fields get updated.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # Register a callback during the method call.
          #   operation = entity_types_client.batch_update_entity_types(parent) do |op|
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

          def batch_update_entity_types \
              parent,
              entity_type_batch_uri: nil,
              entity_type_batch_inline: nil,
              language_code: nil,
              update_mask: nil,
              options: nil
            req = {
              parent: parent,
              entity_type_batch_uri: entity_type_batch_uri,
              entity_type_batch_inline: entity_type_batch_inline,
              language_code: language_code,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchUpdateEntityTypesRequest)
            operation = Google::Gax::Operation.new(
              @batch_update_entity_types.call(req, options),
              @operations_client,
              Google::Cloud::Dialogflow::V2beta1::BatchUpdateEntityTypesResponse,
              Google::Protobuf::Struct,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Deletes entity types in the specified agent.
          # Operation <response: {Google::Protobuf::Empty}>
          #
          # @param parent [String]
          #   Required. The name of the agent to delete all entities types for.
          #   Supported formats:
          #   * `projects/<Project ID>/agent`,
          #   * `projects/<Project ID>/locations/<Location ID>/agent`.
          # @param entity_type_names [Array<String>]
          #   Required. The names entity types to delete. All names must point to the
          #   same agent as `parent`.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `entity_type_names`:
          #   entity_type_names = []
          #
          #   # Register a callback during the method call.
          #   operation = entity_types_client.batch_delete_entity_types(parent, entity_type_names) do |op|
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

          def batch_delete_entity_types \
              parent,
              entity_type_names,
              options: nil
            req = {
              parent: parent,
              entity_type_names: entity_type_names
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchDeleteEntityTypesRequest)
            operation = Google::Gax::Operation.new(
              @batch_delete_entity_types.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Protobuf::Struct,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Creates multiple new entities in the specified entity type.
          #
          # Operation <response: {Google::Protobuf::Empty}>
          #
          # @param parent [String]
          #   Required. The name of the entity type to create entities in.
          #   Supported formats:
          #   * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/entityTypes/<Entity
          #     Type ID>`
          # @param entities [Array<Google::Cloud::Dialogflow::V2beta1::EntityType::Entity | Hash>]
          #   Required. The entities to create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::EntityType::Entity`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `entities`:
          #   entities = []
          #
          #   # Register a callback during the method call.
          #   operation = entity_types_client.batch_create_entities(parent, entities) do |op|
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

          def batch_create_entities \
              parent,
              entities,
              language_code: nil,
              options: nil
            req = {
              parent: parent,
              entities: entities,
              language_code: language_code
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchCreateEntitiesRequest)
            operation = Google::Gax::Operation.new(
              @batch_create_entities.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Protobuf::Struct,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Updates or creates multiple entities in the specified entity type. This
          # method does not affect entities in the entity type that aren't explicitly
          # specified in the request.
          #
          # Operation <response: {Google::Protobuf::Empty}>
          #
          # @param parent [String]
          #   Required. The name of the entity type to update or create entities in.
          #   Supported formats:
          #   * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/entityTypes/<Entity
          #     Type ID>`
          # @param entities [Array<Google::Cloud::Dialogflow::V2beta1::EntityType::Entity | Hash>]
          #   Required. The entities to update or create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::EntityType::Entity`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Optional. The mask to control which fields get updated.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `entities`:
          #   entities = []
          #
          #   # Register a callback during the method call.
          #   operation = entity_types_client.batch_update_entities(parent, entities) do |op|
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

          def batch_update_entities \
              parent,
              entities,
              language_code: nil,
              update_mask: nil,
              options: nil
            req = {
              parent: parent,
              entities: entities,
              language_code: language_code,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchUpdateEntitiesRequest)
            operation = Google::Gax::Operation.new(
              @batch_update_entities.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Protobuf::Struct,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Deletes entities in the specified entity type.
          #
          # Operation <response: {Google::Protobuf::Empty}>
          #
          # @param parent [String]
          #   Required. The name of the entity type to delete entries for.
          #   Supported formats:
          #   * `projects/<Project ID>/agent/entityTypes/<Entity Type ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/entityTypes/<Entity
          #     Type ID>`
          # @param entity_values [Array<String>]
          #   Required. The reference `values` of the entities to delete. Note that
          #   these are not fully-qualified names, i.e. they don't start with
          #   `projects/<Project ID>`.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   entity_types_client = Google::Cloud::Dialogflow::EntityTypes.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `entity_values`:
          #   entity_values = []
          #
          #   # Register a callback during the method call.
          #   operation = entity_types_client.batch_delete_entities(parent, entity_values) do |op|
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

          def batch_delete_entities \
              parent,
              entity_values,
              language_code: nil,
              options: nil
            req = {
              parent: parent,
              entity_values: entity_values,
              language_code: language_code
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchDeleteEntitiesRequest)
            operation = Google::Gax::Operation.new(
              @batch_delete_entities.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Protobuf::Struct,
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
