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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/aiplatform/v1beta1/migration_service.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/aiplatform/v1beta1/migration_service_pb"
require "google/cloud/aiplatform/v1_beta1/credentials"

module Google
  module Cloud
    module Aiplatform
      module V1Beta1
        # A service that migrates resources from automl.googleapis.com,
        # datalabeling.googleapis.com and ml.googleapis.com to AI Platform.
        #
        # @!attribute [r] migration_service_stub
        #   @return [Google::Cloud::Aiplatform::V1beta1::MigrationService::Stub]
        class MigrationServiceClient
          attr_reader :migration_service_stub

          # The default address of the service.
          SERVICE_ADDRESS = "aiplatform.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "search_migratable_resources" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "migratable_resources")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform"
          ].freeze

          class OperationsClient < Google::Longrunning::OperationsClient
            self::SERVICE_ADDRESS = MigrationServiceClient::SERVICE_ADDRESS
            self::GRPC_INTERCEPTORS = MigrationServiceClient::GRPC_INTERCEPTORS
          end

          LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}"
          )

          private_constant :LOCATION_PATH_TEMPLATE

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
            require "google/cloud/aiplatform/v1beta1/migration_service_services_pb"

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
              "migration_service_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.aiplatform.v1beta1.MigrationService",
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
            @migration_service_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Aiplatform::V1beta1::MigrationService::Stub.method(:new)
            )

            @search_migratable_resources = Google::Gax.create_api_call(
              @migration_service_stub.method(:search_migratable_resources),
              defaults["search_migratable_resources"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @batch_migrate_resources = Google::Gax.create_api_call(
              @migration_service_stub.method(:batch_migrate_resources),
              defaults["batch_migrate_resources"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
          end

          # Service calls

          # Searches all of the resources in automl.googleapis.com,
          # datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
          # AI Platform's given location.
          #
          # @param parent [String]
          #   Required. The location that the migratable resources should be searched from.
          #   It's the AI Platform location that the resources can be migrated to, not
          #   the resources' original location.
          #   Format:
          #   `projects/{project}/locations/{location}`
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
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Aiplatform::V1beta1::MigratableResource>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Aiplatform::V1beta1::MigratableResource>]
          #   An enumerable of Google::Cloud::Aiplatform::V1beta1::MigratableResource instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   migration_client = Google::Cloud::Aiplatform::V1Beta1::Migration.new(version: :v1beta1)
          #   formatted_parent = Google::Cloud::Aiplatform::V1Beta1::MigrationServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # Iterate over all results.
          #   migration_client.search_migratable_resources(formatted_parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   migration_client.search_migratable_resources(formatted_parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def search_migratable_resources \
              parent,
              page_size: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::SearchMigratableResourcesRequest)
            @search_migratable_resources.call(req, options, &block)
          end

          # Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
          # and datalabeling.googleapis.com to AI Platform (Unified).
          #
          # @param parent [String]
          #   Required. The location of the migrated resource will live in.
          #   Format: `projects/{project}/locations/{location}`
          # @param migrate_resource_requests [Array<Google::Cloud::Aiplatform::V1beta1::MigrateResourceRequest | Hash>]
          #   Required. The request messages specifying the resources to migrate.
          #   They must be in the same location as the destination.
          #   Up to 50 resources can be migrated in one batch.
          #   A hash of the same form as `Google::Cloud::Aiplatform::V1beta1::MigrateResourceRequest`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/aiplatform/v1_beta1"
          #
          #   migration_client = Google::Cloud::Aiplatform::V1Beta1::Migration.new(version: :v1beta1)
          #   formatted_parent = Google::Cloud::Aiplatform::V1Beta1::MigrationServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `migrate_resource_requests`:
          #   migrate_resource_requests = []
          #
          #   # Register a callback during the method call.
          #   operation = migration_client.batch_migrate_resources(formatted_parent, migrate_resource_requests) do |op|
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

          def batch_migrate_resources \
              parent,
              migrate_resource_requests,
              options: nil
            req = {
              parent: parent,
              migrate_resource_requests: migrate_resource_requests
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Aiplatform::V1beta1::BatchMigrateResourcesRequest)
            operation = Google::Gax::Operation.new(
              @batch_migrate_resources.call(req, options),
              @operations_client,
              Google::Cloud::Aiplatform::V1beta1::BatchMigrateResourcesResponse,
              Google::Cloud::Aiplatform::V1beta1::BatchMigrateResourcesOperationMetadata,
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
