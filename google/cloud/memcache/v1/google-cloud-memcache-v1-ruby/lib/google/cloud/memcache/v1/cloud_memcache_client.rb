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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/memcache/v1/cloud_memcache.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"
require "google/gax/operation"
require "google/longrunning/operations_client"

require "google/cloud/memcache/v1/cloud_memcache_pb"
require "google/cloud/memcache/v1/credentials"

module Google
  module Cloud
    module Memcache
      module V1
        # Configures and manages Cloud Memorystore for Memcached instances.
        #
        #
        # The `memcache.googleapis.com` service implements the Google Cloud Memorystore
        # for Memcached API and defines the following resource model for managing
        # Memorystore Memcached (also called Memcached below) instances:
        # * The service works with a collection of cloud projects, named: `/projects/*`
        # * Each project has a collection of available locations, named: `/locations/*`
        # * Each location has a collection of Memcached instances, named:
        #   `/instances/*`
        # * As such, Memcached instances are resources of the form:
        #   `/projects/{project_id}/locations/{location_id}/instances/{instance_id}`
        #
        # Note that location_id must be a GCP `region`; for example:
        # * `projects/my-memcached-project/locations/us-central1/instances/my-memcached`
        #
        # @!attribute [r] cloud_memcache_stub
        #   @return [Google::Cloud::Memcache::V1::CloudMemcache::Stub]
        class CloudMemcacheClient
          attr_reader :cloud_memcache_stub

          # The default address of the service.
          SERVICE_ADDRESS = "memcache.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "list_instances" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "instances")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform"
          ].freeze

          class OperationsClient < Google::Longrunning::OperationsClient
            self::SERVICE_ADDRESS = CloudMemcacheClient::SERVICE_ADDRESS
            self::GRPC_INTERCEPTORS = CloudMemcacheClient::GRPC_INTERCEPTORS
          end

          INSTANCE_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/instances/{instance}"
          )

          private_constant :INSTANCE_PATH_TEMPLATE

          LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}"
          )

          private_constant :LOCATION_PATH_TEMPLATE

          # Returns a fully-qualified instance resource name string.
          # @param project [String]
          # @param location [String]
          # @param instance [String]
          # @return [String]
          def self.instance_path project, location, instance
            INSTANCE_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"instance" => instance
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
            require "google/cloud/memcache/v1/cloud_memcache_services_pb"

            credentials ||= Google::Cloud::Memcache::V1::Credentials.default

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
              updater_proc = Google::Cloud::Memcache::V1::Credentials.new(credentials).updater_proc
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

            package_version = Gem.loaded_specs['google-cloud-memcache'].version.version

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
              "cloud_memcache_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.memcache.v1.CloudMemcache",
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
            @cloud_memcache_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Memcache::V1::CloudMemcache::Stub.method(:new)
            )

            @list_instances = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:list_instances),
              defaults["list_instances"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_instance = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:get_instance),
              defaults["get_instance"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @create_instance = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:create_instance),
              defaults["create_instance"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_instance = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:update_instance),
              defaults["update_instance"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'instance.name' => request.instance.name}
              end
            )
            @update_parameters = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:update_parameters),
              defaults["update_parameters"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @delete_instance = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:delete_instance),
              defaults["delete_instance"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @apply_parameters = Google::Gax.create_api_call(
              @cloud_memcache_stub.method(:apply_parameters),
              defaults["apply_parameters"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
          end

          # Service calls

          # Lists Instances in a given location.
          #
          # @param parent [String]
          #   Required. The resource name of the instance location using the form:
          #       `projects/{project_id}/locations/{location_id}`
          #   where `location_id` refers to a GCP region
          # @param page_size [Integer]
          #   The maximum number of resources contained in the underlying API
          #   response. If page streaming is performed per-resource, this
          #   parameter does not affect the return value. If page streaming is
          #   performed per-page, this determines the maximum number of
          #   resources in a page.
          # @param filter [String]
          #   List filter. For example, exclude all Memcached instances with name as
          #   my-instance by specifying "name != my-instance".
          # @param order_by [String]
          #   Sort results. Supported values are "name", "name desc" or "" (unsorted).
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Memcache::V1::Instance>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Memcache::V1::Instance>]
          #   An enumerable of Google::Cloud::Memcache::V1::Instance instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_parent = Google::Cloud::Memcache::V1::CloudMemcacheClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # Iterate over all results.
          #   cloud_memcache_client.list_instances(formatted_parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   cloud_memcache_client.list_instances(formatted_parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_instances \
              parent,
              page_size: nil,
              filter: nil,
              order_by: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              page_size: page_size,
              filter: filter,
              order_by: order_by
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::ListInstancesRequest)
            @list_instances.call(req, options, &block)
          end

          # Gets details of a single Instance.
          #
          # @param name [String]
          #   Required. Memcached instance resource name in the format:
          #       `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
          #   where `location_id` refers to a GCP region
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Memcache::V1::Instance]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Memcache::V1::Instance]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_name = Google::Cloud::Memcache::V1::CloudMemcacheClient.instance_path("[PROJECT]", "[LOCATION]", "[INSTANCE]")
          #   response = cloud_memcache_client.get_instance(formatted_name)

          def get_instance \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::GetInstanceRequest)
            @get_instance.call(req, options, &block)
          end

          # Creates a new Instance in a given location.
          #
          # @param parent [String]
          #   Required. The resource name of the instance location using the form:
          #       `projects/{project_id}/locations/{location_id}`
          #   where `location_id` refers to a GCP region
          # @param instance_id [String]
          #   Required. The logical name of the Memcached instance in the user
          #   project with the following restrictions:
          #
          #   * Must contain only lowercase letters, numbers, and hyphens.
          #   * Must start with a letter.
          #   * Must be between 1-40 characters.
          #   * Must end with a number or a letter.
          #   * Must be unique within the user project / location
          #
          #   If any of the above are not met, will raise an invalid argument error.
          # @param instance [Google::Cloud::Memcache::V1::Instance | Hash]
          #   Required. A Memcached Instance
          #   A hash of the same form as `Google::Cloud::Memcache::V1::Instance`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_parent = Google::Cloud::Memcache::V1::CloudMemcacheClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `instance_id`:
          #   instance_id = ''
          #
          #   # TODO: Initialize `instance`:
          #   instance = {}
          #
          #   # Register a callback during the method call.
          #   operation = cloud_memcache_client.create_instance(formatted_parent, instance_id, instance) do |op|
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

          def create_instance \
              parent,
              instance_id,
              instance,
              options: nil
            req = {
              parent: parent,
              instance_id: instance_id,
              instance: instance
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::CreateInstanceRequest)
            operation = Google::Gax::Operation.new(
              @create_instance.call(req, options),
              @operations_client,
              Google::Cloud::Memcache::V1::Instance,
              Google::Cloud::Memcache::V1::OperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Updates an existing Instance in a given project and location.
          #
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Required. Mask of fields to update.
          #   * `displayName`
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param instance [Google::Cloud::Memcache::V1::Instance | Hash]
          #   Required. A Memcached Instance.
          #   Only fields specified in update_mask are updated.
          #   A hash of the same form as `Google::Cloud::Memcache::V1::Instance`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #
          #   # TODO: Initialize `update_mask`:
          #   update_mask = {}
          #
          #   # TODO: Initialize `instance`:
          #   instance = {}
          #
          #   # Register a callback during the method call.
          #   operation = cloud_memcache_client.update_instance(update_mask, instance) do |op|
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

          def update_instance \
              update_mask,
              instance,
              options: nil
            req = {
              update_mask: update_mask,
              instance: instance
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::UpdateInstanceRequest)
            operation = Google::Gax::Operation.new(
              @update_instance.call(req, options),
              @operations_client,
              Google::Cloud::Memcache::V1::Instance,
              Google::Cloud::Memcache::V1::OperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Updates the defined Memcached Parameters for an existing Instance.
          # This method only stages the parameters, it must be followed by
          # ApplyParameters to apply the parameters to nodes of the Memcached Instance.
          #
          # @param name [String]
          #   Required. Resource name of the Memcached instance for which the parameters should be
          #   updated.
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Required. Mask of fields to update.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param parameters [Google::Cloud::Memcache::V1::MemcacheParameters | Hash]
          #   The parameters to apply to the instance.
          #   A hash of the same form as `Google::Cloud::Memcache::V1::MemcacheParameters`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_name = Google::Cloud::Memcache::V1::CloudMemcacheClient.instance_path("[PROJECT]", "[LOCATION]", "[INSTANCE]")
          #
          #   # TODO: Initialize `update_mask`:
          #   update_mask = {}
          #
          #   # Register a callback during the method call.
          #   operation = cloud_memcache_client.update_parameters(formatted_name, update_mask) do |op|
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

          def update_parameters \
              name,
              update_mask,
              parameters: nil,
              options: nil
            req = {
              name: name,
              update_mask: update_mask,
              parameters: parameters
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::UpdateParametersRequest)
            operation = Google::Gax::Operation.new(
              @update_parameters.call(req, options),
              @operations_client,
              Google::Cloud::Memcache::V1::Instance,
              Google::Cloud::Memcache::V1::OperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # Deletes a single Instance.
          #
          # @param name [String]
          #   Required. Memcached instance resource name in the format:
          #       `projects/{project_id}/locations/{location_id}/instances/{instance_id}`
          #   where `location_id` refers to a GCP region
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_name = Google::Cloud::Memcache::V1::CloudMemcacheClient.instance_path("[PROJECT]", "[LOCATION]", "[INSTANCE]")
          #
          #   # Register a callback during the method call.
          #   operation = cloud_memcache_client.delete_instance(formatted_name) do |op|
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

          def delete_instance \
              name,
              options: nil
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::DeleteInstanceRequest)
            operation = Google::Gax::Operation.new(
              @delete_instance.call(req, options),
              @operations_client,
              Google::Protobuf::Empty,
              Google::Cloud::Memcache::V1::OperationMetadata,
              call_options: options
            )
            operation.on_done { |operation| yield(operation) } if block_given?
            operation
          end

          # ApplyParameters will restart the set of specified nodes in order to update
          # them to the current set of parameters for the Memcached Instance.
          #
          # @param name [String]
          #   Required. Resource name of the Memcached instance for which parameter group updates
          #   should be applied.
          # @param node_ids [Array<String>]
          #   Nodes to which we should apply the instance-level parameter group.
          # @param apply_all [true, false]
          #   Whether to apply instance-level parameter group to all nodes. If set to
          #   true, will explicitly restrict users from specifying any nodes, and apply
          #   parameter group updates to all nodes within the instance.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @return [Google::Gax::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/memcache"
          #
          #   cloud_memcache_client = Google::Cloud::Memcache.new(version: :v1)
          #   formatted_name = Google::Cloud::Memcache::V1::CloudMemcacheClient.instance_path("[PROJECT]", "[LOCATION]", "[INSTANCE]")
          #
          #   # Register a callback during the method call.
          #   operation = cloud_memcache_client.apply_parameters(formatted_name) do |op|
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

          def apply_parameters \
              name,
              node_ids: nil,
              apply_all: nil,
              options: nil
            req = {
              name: name,
              node_ids: node_ids,
              apply_all: apply_all
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Memcache::V1::ApplyParametersRequest)
            operation = Google::Gax::Operation.new(
              @apply_parameters.call(req, options),
              @operations_client,
              Google::Cloud::Memcache::V1::Instance,
              Google::Cloud::Memcache::V1::OperationMetadata,
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
