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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/pubsublite/v1/admin.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"

require "google/cloud/pubsublite/v1/admin_pb"
require "google/cloud/pubsublite/v1/credentials"

module Google
  module Cloud
    module Pubsublite
      module V1
        # The service that a client application uses to manage topics and
        # subscriptions, such creating, listing, and deleting topics and subscriptions.
        #
        # @!attribute [r] admin_service_stub
        #   @return [Google::Cloud::Pubsublite::V1::AdminService::Stub]
        class AdminServiceClient
          attr_reader :admin_service_stub

          # The default address of the service.
          SERVICE_ADDRESS = "pubsublite.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          PAGE_DESCRIPTORS = {
            "list_topics" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "topics"),
            "list_topic_subscriptions" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "subscriptions"),
            "list_subscriptions" => Google::Gax::PageDescriptor.new(
              "page_token",
              "next_page_token",
              "subscriptions")
          }.freeze

          private_constant :PAGE_DESCRIPTORS

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform"
          ].freeze


          LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}"
          )

          private_constant :LOCATION_PATH_TEMPLATE

          SUBSCRIPTION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/subscriptions/{subscription}"
          )

          private_constant :SUBSCRIPTION_PATH_TEMPLATE

          TOPIC_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/topics/{topic}"
          )

          private_constant :TOPIC_PATH_TEMPLATE

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

          # Returns a fully-qualified subscription resource name string.
          # @param project [String]
          # @param location [String]
          # @param subscription [String]
          # @return [String]
          def self.subscription_path project, location, subscription
            SUBSCRIPTION_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"subscription" => subscription
            )
          end

          # Returns a fully-qualified topic resource name string.
          # @param project [String]
          # @param location [String]
          # @param topic [String]
          # @return [String]
          def self.topic_path project, location, topic
            TOPIC_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"topic" => topic
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
            require "google/cloud/pubsublite/v1/admin_services_pb"

            credentials ||= Google::Cloud::Pubsublite::V1::Credentials.default

            if credentials.is_a?(String) || credentials.is_a?(Hash)
              updater_proc = Google::Cloud::Pubsublite::V1::Credentials.new(credentials).updater_proc
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

            package_version = Gem.loaded_specs['google-cloud-pubsublite'].version.version

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
              "admin_service_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.pubsublite.v1.AdminService",
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
            @admin_service_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Pubsublite::V1::AdminService::Stub.method(:new)
            )

            @create_topic = Google::Gax.create_api_call(
              @admin_service_stub.method(:create_topic),
              defaults["create_topic"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_topic = Google::Gax.create_api_call(
              @admin_service_stub.method(:get_topic),
              defaults["get_topic"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @get_topic_partitions = Google::Gax.create_api_call(
              @admin_service_stub.method(:get_topic_partitions),
              defaults["get_topic_partitions"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @list_topics = Google::Gax.create_api_call(
              @admin_service_stub.method(:list_topics),
              defaults["list_topics"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_topic = Google::Gax.create_api_call(
              @admin_service_stub.method(:update_topic),
              defaults["update_topic"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'topic.name' => request.topic.name}
              end
            )
            @delete_topic = Google::Gax.create_api_call(
              @admin_service_stub.method(:delete_topic),
              defaults["delete_topic"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @list_topic_subscriptions = Google::Gax.create_api_call(
              @admin_service_stub.method(:list_topic_subscriptions),
              defaults["list_topic_subscriptions"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @create_subscription = Google::Gax.create_api_call(
              @admin_service_stub.method(:create_subscription),
              defaults["create_subscription"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @get_subscription = Google::Gax.create_api_call(
              @admin_service_stub.method(:get_subscription),
              defaults["get_subscription"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @list_subscriptions = Google::Gax.create_api_call(
              @admin_service_stub.method(:list_subscriptions),
              defaults["list_subscriptions"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @update_subscription = Google::Gax.create_api_call(
              @admin_service_stub.method(:update_subscription),
              defaults["update_subscription"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'subscription.name' => request.subscription.name}
              end
            )
            @delete_subscription = Google::Gax.create_api_call(
              @admin_service_stub.method(:delete_subscription),
              defaults["delete_subscription"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
          end

          # Service calls

          # Creates a new topic.
          #
          # @param parent [String]
          #   Required. The parent location in which to create the topic.
          #   Structured like `projects/{project_number}/locations/{location}`.
          # @param topic [Google::Cloud::Pubsublite::V1::Topic | Hash]
          #   Required. Configuration of the topic to create. Its `name` field is ignored.
          #   A hash of the same form as `Google::Cloud::Pubsublite::V1::Topic`
          #   can also be provided.
          # @param topic_id [String]
          #   Required. The ID to use for the topic, which will become the final component of
          #   the topic's name.
          #
          #   This value is structured like: `my-topic-name`.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Topic]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Topic]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_parent = Google::Cloud::Pubsublite::V1::AdminServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `topic`:
          #   topic = {}
          #
          #   # TODO: Initialize `topic_id`:
          #   topic_id = ''
          #   response = admin_client.create_topic(formatted_parent, topic, topic_id)

          def create_topic \
              parent,
              topic,
              topic_id,
              options: nil,
              &block
            req = {
              parent: parent,
              topic: topic,
              topic_id: topic_id
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::CreateTopicRequest)
            @create_topic.call(req, options, &block)
          end

          # Returns the topic configuration.
          #
          # @param name [String]
          #   Required. The name of the topic whose configuration to return.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Topic]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Topic]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.topic_path("[PROJECT]", "[LOCATION]", "[TOPIC]")
          #   response = admin_client.get_topic(formatted_name)

          def get_topic \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::GetTopicRequest)
            @get_topic.call(req, options, &block)
          end

          # Returns the partition information for the requested topic.
          #
          # @param name [String]
          #   Required. The topic whose partition information to return.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::TopicPartitions]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::TopicPartitions]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.topic_path("[PROJECT]", "[LOCATION]", "[TOPIC]")
          #   response = admin_client.get_topic_partitions(formatted_name)

          def get_topic_partitions \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::GetTopicPartitionsRequest)
            @get_topic_partitions.call(req, options, &block)
          end

          # Returns the list of topics for the given project.
          #
          # @param parent [String]
          #   Required. The parent whose topics are to be listed.
          #   Structured like `projects/{project_number}/locations/{location}`.
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
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Pubsublite::V1::Topic>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Pubsublite::V1::Topic>]
          #   An enumerable of Google::Cloud::Pubsublite::V1::Topic instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_parent = Google::Cloud::Pubsublite::V1::AdminServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # Iterate over all results.
          #   admin_client.list_topics(formatted_parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   admin_client.list_topics(formatted_parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_topics \
              parent,
              page_size: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::ListTopicsRequest)
            @list_topics.call(req, options, &block)
          end

          # Updates properties of the specified topic.
          #
          # @param topic [Google::Cloud::Pubsublite::V1::Topic | Hash]
          #   Required. The topic to update. Its `name` field must be populated.
          #   A hash of the same form as `Google::Cloud::Pubsublite::V1::Topic`
          #   can also be provided.
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Required. A mask specifying the topic fields to change.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Topic]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Topic]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #
          #   # TODO: Initialize `topic`:
          #   topic = {}
          #
          #   # TODO: Initialize `update_mask`:
          #   update_mask = {}
          #   response = admin_client.update_topic(topic, update_mask)

          def update_topic \
              topic,
              update_mask,
              options: nil,
              &block
            req = {
              topic: topic,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::UpdateTopicRequest)
            @update_topic.call(req, options, &block)
          end

          # Deletes the specified topic.
          #
          # @param name [String]
          #   Required. The name of the topic to delete.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result []
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.topic_path("[PROJECT]", "[LOCATION]", "[TOPIC]")
          #   admin_client.delete_topic(formatted_name)

          def delete_topic \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::DeleteTopicRequest)
            @delete_topic.call(req, options, &block)
            nil
          end

          # Lists the subscriptions attached to the specified topic.
          #
          # @param name [String]
          #   Required. The name of the topic whose subscriptions to list.
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
          # @yieldparam result [Google::Gax::PagedEnumerable<String>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<String>]
          #   An enumerable of String instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.topic_path("[PROJECT]", "[LOCATION]", "[TOPIC]")
          #
          #   # Iterate over all results.
          #   admin_client.list_topic_subscriptions(formatted_name).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   admin_client.list_topic_subscriptions(formatted_name).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_topic_subscriptions \
              name,
              page_size: nil,
              options: nil,
              &block
            req = {
              name: name,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::ListTopicSubscriptionsRequest)
            @list_topic_subscriptions.call(req, options, &block)
          end

          # Creates a new subscription.
          #
          # @param parent [String]
          #   Required. The parent location in which to create the subscription.
          #   Structured like `projects/{project_number}/locations/{location}`.
          # @param subscription [Google::Cloud::Pubsublite::V1::Subscription | Hash]
          #   Required. Configuration of the subscription to create. Its `name` field is ignored.
          #   A hash of the same form as `Google::Cloud::Pubsublite::V1::Subscription`
          #   can also be provided.
          # @param subscription_id [String]
          #   Required. The ID to use for the subscription, which will become the final component
          #   of the subscription's name.
          #
          #   This value is structured like: `my-sub-name`.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Subscription]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Subscription]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_parent = Google::Cloud::Pubsublite::V1::AdminServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `subscription`:
          #   subscription = {}
          #
          #   # TODO: Initialize `subscription_id`:
          #   subscription_id = ''
          #   response = admin_client.create_subscription(formatted_parent, subscription, subscription_id)

          def create_subscription \
              parent,
              subscription,
              subscription_id,
              options: nil,
              &block
            req = {
              parent: parent,
              subscription: subscription,
              subscription_id: subscription_id
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::CreateSubscriptionRequest)
            @create_subscription.call(req, options, &block)
          end

          # Returns the subscription configuration.
          #
          # @param name [String]
          #   Required. The name of the subscription whose configuration to return.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Subscription]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Subscription]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.subscription_path("[PROJECT]", "[LOCATION]", "[SUBSCRIPTION]")
          #   response = admin_client.get_subscription(formatted_name)

          def get_subscription \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::GetSubscriptionRequest)
            @get_subscription.call(req, options, &block)
          end

          # Returns the list of subscriptions for the given project.
          #
          # @param parent [String]
          #   Required. The parent whose subscriptions are to be listed.
          #   Structured like `projects/{project_number}/locations/{location}`.
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
          # @yieldparam result [Google::Gax::PagedEnumerable<Google::Cloud::Pubsublite::V1::Subscription>]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Gax::PagedEnumerable<Google::Cloud::Pubsublite::V1::Subscription>]
          #   An enumerable of Google::Cloud::Pubsublite::V1::Subscription instances.
          #   See Google::Gax::PagedEnumerable documentation for other
          #   operations such as per-page iteration or access to the response
          #   object.
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_parent = Google::Cloud::Pubsublite::V1::AdminServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # Iterate over all results.
          #   admin_client.list_subscriptions(formatted_parent).each do |element|
          #     # Process element.
          #   end
          #
          #   # Or iterate over results one page at a time.
          #   admin_client.list_subscriptions(formatted_parent).each_page do |page|
          #     # Process each page at a time.
          #     page.each do |element|
          #       # Process element.
          #     end
          #   end

          def list_subscriptions \
              parent,
              page_size: nil,
              options: nil,
              &block
            req = {
              parent: parent,
              page_size: page_size
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::ListSubscriptionsRequest)
            @list_subscriptions.call(req, options, &block)
          end

          # Updates properties of the specified subscription.
          #
          # @param subscription [Google::Cloud::Pubsublite::V1::Subscription | Hash]
          #   Required. The subscription to update. Its `name` field must be populated.
          #   Topic field must not be populated.
          #   A hash of the same form as `Google::Cloud::Pubsublite::V1::Subscription`
          #   can also be provided.
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   Required. A mask specifying the subscription fields to change.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Pubsublite::V1::Subscription]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Pubsublite::V1::Subscription]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #
          #   # TODO: Initialize `subscription`:
          #   subscription = {}
          #
          #   # TODO: Initialize `update_mask`:
          #   update_mask = {}
          #   response = admin_client.update_subscription(subscription, update_mask)

          def update_subscription \
              subscription,
              update_mask,
              options: nil,
              &block
            req = {
              subscription: subscription,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::UpdateSubscriptionRequest)
            @update_subscription.call(req, options, &block)
          end

          # Deletes the specified subscription.
          #
          # @param name [String]
          #   Required. The name of the subscription to delete.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result []
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/pubsublite"
          #
          #   admin_client = Google::Cloud::Pubsublite::Admin.new(version: :v1)
          #   formatted_name = Google::Cloud::Pubsublite::V1::AdminServiceClient.subscription_path("[PROJECT]", "[LOCATION]", "[SUBSCRIPTION]")
          #   admin_client.delete_subscription(formatted_name)

          def delete_subscription \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Pubsublite::V1::DeleteSubscriptionRequest)
            @delete_subscription.call(req, options, &block)
            nil
          end
        end
      end
    end
  end
end
