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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2beta1/intent.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/dialogflow/v2beta1/intent_pb"
require "google/cloud/dialogflow/v2beta1/credentials"

module Google
  module Cloud
    module Dialogflow
      module V2beta1
        # Service for managing {Google::Cloud::Dialogflow::V2beta1::Intent Intents}.
        #
        # @!attribute [r] intents_stub
        #   @return [Google::Cloud::Dialogflow::V2beta1::Intents::Stub]
        class IntentsClient
          attr_reader :intents_stub

          # The default address of the service.
          SERVICE_ADDRESS = "dialogflow.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "list_intents" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "intents")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform",
            "https://www.googleapis.com/auth/dialogflow"
          ].freeze

          class OperationsClient < Google::Longrunning::OperationsClient
            self::SERVICE_ADDRESS = IntentsClient::SERVICE_ADDRESS
            self::GRPC_INTERCEPTORS = IntentsClient::GRPC_INTERCEPTORS
          end

          AGENT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/agent"
          )

          private_constant :AGENT_PATH_TEMPLATE

          INTENT_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/agent/intents/{intent}"
          )

          private_constant :INTENT_PATH_TEMPLATE

          # Returns a fully-qualified agent resource name string.
          # @param project [String]
          # @return [String]
          def self.agent_path project
            AGENT_PATH_TEMPLATE.render(
              :"project" => project
            )
          end

          # Returns a fully-qualified intent resource name string.
          # @param project [String]
          # @param intent [String]
          # @return [String]
          def self.intent_path project, intent
            INTENT_PATH_TEMPLATE.render(
              :"project" => project,
              :"intent" => intent
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
            require "google/cloud/dialogflow/v2beta1/intent_services_pb"

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
              "intents_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.dialogflow.v2beta1.Intents",
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
            @intents_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Dialogflow::V2beta1::Intents::Stub.method(:new)
            )

            @list_intents = Google::Gax.create_api_call(
              @intents_stub.method(:list_intents),
              defaults["list_intents"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_intent = Google::Gax.create_api_call(
              @intents_stub.method(:get_intent),
              defaults["get_intent"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @create_intent = Google::Gax.create_api_call(
              @intents_stub.method(:create_intent),
              defaults["create_intent"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_intent = Google::Gax.create_api_call(
              @intents_stub.method(:update_intent),
              defaults["update_intent"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'intent.name' => request.intent.name}
              end
            )
            @delete_intent = Google::Gax.create_api_call(
              @intents_stub.method(:delete_intent),
              defaults["delete_intent"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @batch_update_intents = Google::Gax.create_api_call(
              @intents_stub.method(:batch_update_intents),
              defaults["batch_update_intents"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_delete_intents = Google::Gax.create_api_call(
              @intents_stub.method(:batch_delete_intents),
              defaults["batch_delete_intents"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
          end

          # Service calls

          # Returns the list of all intents in the specified agent.
          #
          # @param parent [String]
          #   Required. The agent to list all intents from.
          #   Format: `projects/<Project ID>/agent`.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param intent_view [Google::Cloud::Dialogflow::V2beta1::IntentView]
          #   Optional. The resource view to apply to the returned intent.
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
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::V2beta1::Intent>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Dialogflow::V2beta1::Intent>]
          #   An enumerable of Google::Cloud::Dialogflow::V2beta1::Intent instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # Iterate over all results.
          #   intents_client.list_intents(parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   intents_client.list_intents(parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_intents \
              parent,
              language_code: nil,
              intent_view: nil,
              page_size: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              language_code: language_code,
              intent_view: intent_view,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::ListIntentsRequest)
            @list_intents.call(req, options, &block)
          end

          # Retrieves the specified intent.
          #
          # @param name [String]
          #   Required. The name of the intent.
          #   Supported formats:
          #
          #   * `projects/<Project ID>/agent/intents/<Intent ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/intents/<Intent ID>`
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param intent_view [Google::Cloud::Dialogflow::V2beta1::IntentView]
          #   Optional. The resource view to apply to the returned intent.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `name`:
          #   name = ''
          #   response = intents_client.get_intent(name)

          def get_intent \
              name,
              language_code: nil,
              intent_view: nil,
              options: nil,
              &block
            req = {
              name: name,
              language_code: language_code,
              intent_view: intent_view
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::GetIntentRequest)
            @get_intent.call(req, options, &block)
          end

          # Creates an intent in the specified agent.
          #
          # @param parent [String]
          #   Required. The agent to create a intent for.
          #   Supported formats:
          #
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param intent [Google::Cloud::Dialogflow::V2beta1::Intent | Hash]
          #   Required. The intent to create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::Intent`
          #   can also be provided.
          # @param language_code [String]
          #   Optional. The language used to access language-specific data.
          #   If not specified, the agent's default language is used.
          #   For more information, see
          #   [Multilingual intent and entity
          #   data](https://cloud.google.com/dialogflow/docs/agents-multilingual#intent-entity).
          # @param intent_view [Google::Cloud::Dialogflow::V2beta1::IntentView]
          #   Optional. The resource view to apply to the returned intent.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `intent`:
          #   intent = {}
          #   response = intents_client.create_intent(parent, intent)

          def create_intent \
              parent,
              intent,
              language_code: nil,
              intent_view: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              intent: intent,
              language_code: language_code,
              intent_view: intent_view
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::CreateIntentRequest)
            @create_intent.call(req, options, &block)
          end

          # Updates the specified intent.
          #
          # @param intent [Google::Cloud::Dialogflow::V2beta1::Intent | Hash]
          #   Required. The intent to update.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::Intent`
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
          # @param intent_view [Google::Cloud::Dialogflow::V2beta1::IntentView]
          #   Optional. The resource view to apply to the returned intent.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dialogflow::V2beta1::Intent]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `intent`:
          #   intent = {}
          #   response = intents_client.update_intent(intent)

          def update_intent \
              intent,
              language_code: nil,
              update_mask: nil,
              intent_view: nil,
              options: nil,
              &block
            req = {
              intent: intent,
              language_code: language_code,
              update_mask: update_mask,
              intent_view: intent_view
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::UpdateIntentRequest)
            @update_intent.call(req, options, &block)
          end

          # Deletes the specified intent and its direct or indirect followup intents.
          #
          # @param name [String]
          #   Required. The name of the intent to delete. If this intent has direct or
          #   indirect followup intents, we also delete them.
          #
          #   Supported formats:
          #
          #   * `projects/<Project ID>/agent/intents/<Intent ID>`
          #   * `projects/<Project ID>/locations/<Location ID>/agent/intents/<Intent ID>`
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
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `name`:
          #   name = ''
          #   intents_client.delete_intent(name)

          def delete_intent \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::DeleteIntentRequest)
            @delete_intent.call(req, options, &block)
            nil
          end

          # Updates/Creates multiple intents in the specified agent.
          #
          # Operation <response: {Google::Cloud::Dialogflow::V2beta1::BatchUpdateIntentsResponse BatchUpdateIntentsResponse}>
          #
          # @param parent [String]
          #   Required. The name of the agent to update or create intents in.
          #   Supported formats:
          #
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param intent_batch_uri [String]
          #   The URI to a Google Cloud Storage file containing intents to update or
          #   create. The file format can either be a serialized proto (of IntentBatch
          #   type) or JSON object. Note: The URI must start with "gs://".
          # @param intent_batch_inline [Google::Cloud::Dialogflow::V2beta1::IntentBatch | Hash]
          #   The collection of intents to update or create.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::IntentBatch`
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
          # @param intent_view [Google::Cloud::Dialogflow::V2beta1::IntentView]
          #   Optional. The resource view to apply to the returned intent.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # Register a callback during the method call.
          #   operation = intents_client.batch_update_intents(parent) do |op|
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

          def batch_update_intents \
              parent,
              intent_batch_uri: nil,
              intent_batch_inline: nil,
              language_code: nil,
              update_mask: nil,
              intent_view: nil,
              options: nil
            req = {
              parent: parent,
              intent_batch_uri: intent_batch_uri,
              intent_batch_inline: intent_batch_inline,
              language_code: language_code,
              update_mask: update_mask,
              intent_view: intent_view
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchUpdateIntentsRequest)
            operation = Google::Gax::Operation.new(
              @batch_update_intents.call(req, options),
              @operations_client,
              Google::Cloud::Dialogflow::V2beta1::BatchUpdateIntentsResponse,
              Google::Protobuf::Struct,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Deletes intents in the specified agent.
          #
          # Operation <response: {Google::Protobuf::Empty}>
          #
          # @param parent [String]
          #   Required. The name of the agent to delete all entities types for.
          #   Supported formats:
          #
          #   * `projects/<Project ID>/agent`
          #   * `projects/<Project ID>/locations/<Location ID>/agent`
          # @param intents [Array<Google::Cloud::Dialogflow::V2beta1::Intent | Hash>]
          #   Required. The collection of intents to delete. Only intent `name` must be
          #   filled in.
          #   A hash of the same form as `Google::Cloud::Dialogflow::V2beta1::Intent`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/dialogflow"
          #
          #   intents_client = Google::Cloud::Dialogflow::Intents.new(version: :v2beta1)
          #
          #   # TODO: Initialize `parent`:
          #   parent = ''
          #
          #   # TODO: Initialize `intents`:
          #   intents = []
          #
          #   # Register a callback during the method call.
          #   operation = intents_client.batch_delete_intents(parent, intents) do |op|
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

          def batch_delete_intents \
              parent,
              intents,
              options: nil
            req = {
              parent: parent,
              intents: intents
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dialogflow::V2beta1::BatchDeleteIntentsRequest)
            operation = Google::Gax::Operation.new(
              @batch_delete_intents.call(req, options),
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
