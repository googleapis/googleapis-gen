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

require "google/cloud/errors"
require "google/cloud/pubsublite/v1/topic_stats_pb"

module Google
  module Cloud
    module PubSubLite
      module V1
        module TopicStatsService
          ##
          # Client for the TopicStatsService service.
          #
          # This service allows users to get stats about messages in their topic.
          #
          class Client
            include Paths

            # @private
            attr_reader :topic_stats_service_stub

            ##
            # Configure the TopicStatsService Client class.
            #
            # See {::Google::Cloud::PubSubLite::V1::TopicStatsService::Client::Configuration}
            # for a description of the configuration fields.
            #
            # ## Example
            #
            # To modify the configuration for all TopicStatsService clients:
            #
            #     ::Google::Cloud::PubSubLite::V1::TopicStatsService::Client.configure do |config|
            #       config.timeout = 10.0
            #     end
            #
            # @yield [config] Configure the Client client.
            # @yieldparam config [Client::Configuration]
            #
            # @return [Client::Configuration]
            #
            def self.configure
              @configure ||= begin
                namespace = ["Google", "Cloud", "PubSubLite", "V1"]
                parent_config = while namespace.any?
                                  parent_name = namespace.join "::"
                                  parent_const = const_get parent_name
                                  break parent_const.configure if parent_const.respond_to? :configure
                                  namespace.pop
                                end
                default_config = Client::Configuration.new parent_config

                default_config.timeout = 600.0
                default_config.retry_policy = {
                  initial_delay: 0.1, max_delay: 60.0, multiplier: 1.3, retry_codes: [4, 14, 10, 13, 2]
                }

                default_config
              end
              yield @configure if block_given?
              @configure
            end

            ##
            # Configure the TopicStatsService Client instance.
            #
            # The configuration is set to the derived mode, meaning that values can be changed,
            # but structural changes (adding new fields, etc.) are not allowed. Structural changes
            # should be made on {Client.configure}.
            #
            # See {::Google::Cloud::PubSubLite::V1::TopicStatsService::Client::Configuration}
            # for a description of the configuration fields.
            #
            # @yield [config] Configure the Client client.
            # @yieldparam config [Client::Configuration]
            #
            # @return [Client::Configuration]
            #
            def configure
              yield @config if block_given?
              @config
            end

            ##
            # Create a new TopicStatsService client object.
            #
            # ## Examples
            #
            # To create a new TopicStatsService client with the default
            # configuration:
            #
            #     client = ::Google::Cloud::PubSubLite::V1::TopicStatsService::Client.new
            #
            # To create a new TopicStatsService client with a custom
            # configuration:
            #
            #     client = ::Google::Cloud::PubSubLite::V1::TopicStatsService::Client.new do |config|
            #       config.timeout = 10.0
            #     end
            #
            # @yield [config] Configure the TopicStatsService client.
            # @yieldparam config [Client::Configuration]
            #
            def initialize
              # These require statements are intentionally placed here to initialize
              # the gRPC module only when it's required.
              # See https://github.com/googleapis/toolkit/issues/446
              require "gapic/grpc"
              require "google/cloud/pubsublite/v1/topic_stats_services_pb"

              # Create the configuration object
              @config = Configuration.new Client.configure

              # Yield the configuration if needed
              yield @config if block_given?

              # Create credentials
              credentials = @config.credentials
              # Use self-signed JWT if the scope and endpoint are unchanged from default,
              # but only if the default endpoint does not have a region prefix.
              enable_self_signed_jwt = @config.scope == Client.configure.scope &&
                                       @config.endpoint == Client.configure.endpoint &&
                                       !@config.endpoint.split(".").first.include?("-")
              credentials ||= Credentials.default scope: @config.scope,
                                                  enable_self_signed_jwt: enable_self_signed_jwt
              if credentials.is_a?(::String) || credentials.is_a?(::Hash)
                credentials = Credentials.new credentials, scope: @config.scope
              end
              @quota_project_id = @config.quota_project
              @quota_project_id ||= credentials.quota_project_id if credentials.respond_to? :quota_project_id

              @topic_stats_service_stub = ::Gapic::ServiceStub.new(
                ::Google::Cloud::PubSubLite::V1::TopicStatsService::Stub,
                credentials:  credentials,
                endpoint:     @config.endpoint,
                channel_args: @config.channel_args,
                interceptors: @config.interceptors
              )
            end

            # Service calls

            ##
            # Compute statistics about a range of messages in a given topic and
            # partition.
            #
            # @overload compute_message_stats(request, options = nil)
            #   Pass arguments to `compute_message_stats` via a request object, either of type
            #   {::Google::Cloud::PubSubLite::V1::ComputeMessageStatsRequest} or an equivalent Hash.
            #
            #   @param request [::Google::Cloud::PubSubLite::V1::ComputeMessageStatsRequest, ::Hash]
            #     A request object representing the call parameters. Required. To specify no
            #     parameters, or to keep all the default parameter values, pass an empty Hash.
            #   @param options [::Gapic::CallOptions, ::Hash]
            #     Overrides the default settings for this call, e.g, timeout, retries, etc. Optional.
            #
            # @overload compute_message_stats(topic: nil, partition: nil, start_cursor: nil, end_cursor: nil)
            #   Pass arguments to `compute_message_stats` via keyword arguments. Note that at
            #   least one keyword argument is required. To specify no parameters, or to keep all
            #   the default parameter values, pass an empty Hash as a request object (see above).
            #
            #   @param topic [::String]
            #     Required. The topic for which we should compute message stats.
            #   @param partition [::Integer]
            #     Required. The partition for which we should compute message stats.
            #   @param start_cursor [::Google::Cloud::PubSubLite::V1::Cursor, ::Hash]
            #     The inclusive start of the range.
            #   @param end_cursor [::Google::Cloud::PubSubLite::V1::Cursor, ::Hash]
            #     The exclusive end of the range. The range is empty if end_cursor <=
            #     start_cursor. Specifying a start_cursor before the first message and an
            #     end_cursor after the last message will retrieve all messages.
            #
            # @yield [response, operation] Access the result along with the RPC operation
            # @yieldparam response [::Google::Cloud::PubSubLite::V1::ComputeMessageStatsResponse]
            # @yieldparam operation [::GRPC::ActiveCall::Operation]
            #
            # @return [::Google::Cloud::PubSubLite::V1::ComputeMessageStatsResponse]
            #
            # @raise [::Google::Cloud::Error] if the RPC is aborted.
            #
            def compute_message_stats request, options = nil
              raise ::ArgumentError, "request must be provided" if request.nil?

              request = ::Gapic::Protobuf.coerce request, to: ::Google::Cloud::PubSubLite::V1::ComputeMessageStatsRequest

              # Converts hash and nil to an options object
              options = ::Gapic::CallOptions.new(**options.to_h) if options.respond_to? :to_h

              # Customize the options with defaults
              metadata = @config.rpcs.compute_message_stats.metadata.to_h

              # Set x-goog-api-client and x-goog-user-project headers
              metadata[:"x-goog-api-client"] ||= ::Gapic::Headers.x_goog_api_client \
                lib_name: @config.lib_name, lib_version: @config.lib_version,
                gapic_version: ::Google::Cloud::Pubsublite::V1::VERSION
              metadata[:"x-goog-user-project"] = @quota_project_id if @quota_project_id

              header_params = {
                "topic" => request.topic
              }
              request_params_header = header_params.map { |k, v| "#{k}=#{v}" }.join("&")
              metadata[:"x-goog-request-params"] ||= request_params_header

              options.apply_defaults timeout:      @config.rpcs.compute_message_stats.timeout,
                                     metadata:     metadata,
                                     retry_policy: @config.rpcs.compute_message_stats.retry_policy
              options.apply_defaults metadata:     @config.metadata,
                                     retry_policy: @config.retry_policy

              @topic_stats_service_stub.call_rpc :compute_message_stats, request, options: options do |response, operation|
                yield response, operation if block_given?
                return response
              end
            rescue ::GRPC::BadStatus => e
              raise ::Google::Cloud::Error.from_error(e)
            end

            ##
            # Compute the head cursor for the partition.
            # The head cursor's offset is guaranteed to be less than or equal to all
            # messages which have not yet been acknowledged as published, and
            # greater than the offset of any message whose publish has already
            # been acknowledged. It is zero if there have never been messages in the
            # partition.
            #
            # @overload compute_head_cursor(request, options = nil)
            #   Pass arguments to `compute_head_cursor` via a request object, either of type
            #   {::Google::Cloud::PubSubLite::V1::ComputeHeadCursorRequest} or an equivalent Hash.
            #
            #   @param request [::Google::Cloud::PubSubLite::V1::ComputeHeadCursorRequest, ::Hash]
            #     A request object representing the call parameters. Required. To specify no
            #     parameters, or to keep all the default parameter values, pass an empty Hash.
            #   @param options [::Gapic::CallOptions, ::Hash]
            #     Overrides the default settings for this call, e.g, timeout, retries, etc. Optional.
            #
            # @overload compute_head_cursor(topic: nil, partition: nil)
            #   Pass arguments to `compute_head_cursor` via keyword arguments. Note that at
            #   least one keyword argument is required. To specify no parameters, or to keep all
            #   the default parameter values, pass an empty Hash as a request object (see above).
            #
            #   @param topic [::String]
            #     Required. The topic for which we should compute the head cursor.
            #   @param partition [::Integer]
            #     Required. The partition for which we should compute the head cursor.
            #
            # @yield [response, operation] Access the result along with the RPC operation
            # @yieldparam response [::Google::Cloud::PubSubLite::V1::ComputeHeadCursorResponse]
            # @yieldparam operation [::GRPC::ActiveCall::Operation]
            #
            # @return [::Google::Cloud::PubSubLite::V1::ComputeHeadCursorResponse]
            #
            # @raise [::Google::Cloud::Error] if the RPC is aborted.
            #
            def compute_head_cursor request, options = nil
              raise ::ArgumentError, "request must be provided" if request.nil?

              request = ::Gapic::Protobuf.coerce request, to: ::Google::Cloud::PubSubLite::V1::ComputeHeadCursorRequest

              # Converts hash and nil to an options object
              options = ::Gapic::CallOptions.new(**options.to_h) if options.respond_to? :to_h

              # Customize the options with defaults
              metadata = @config.rpcs.compute_head_cursor.metadata.to_h

              # Set x-goog-api-client and x-goog-user-project headers
              metadata[:"x-goog-api-client"] ||= ::Gapic::Headers.x_goog_api_client \
                lib_name: @config.lib_name, lib_version: @config.lib_version,
                gapic_version: ::Google::Cloud::Pubsublite::V1::VERSION
              metadata[:"x-goog-user-project"] = @quota_project_id if @quota_project_id

              header_params = {
                "topic" => request.topic
              }
              request_params_header = header_params.map { |k, v| "#{k}=#{v}" }.join("&")
              metadata[:"x-goog-request-params"] ||= request_params_header

              options.apply_defaults timeout:      @config.rpcs.compute_head_cursor.timeout,
                                     metadata:     metadata,
                                     retry_policy: @config.rpcs.compute_head_cursor.retry_policy
              options.apply_defaults metadata:     @config.metadata,
                                     retry_policy: @config.retry_policy

              @topic_stats_service_stub.call_rpc :compute_head_cursor, request, options: options do |response, operation|
                yield response, operation if block_given?
                return response
              end
            rescue ::GRPC::BadStatus => e
              raise ::Google::Cloud::Error.from_error(e)
            end

            ##
            # Compute the corresponding cursor for a publish or event time in a topic
            # partition.
            #
            # @overload compute_time_cursor(request, options = nil)
            #   Pass arguments to `compute_time_cursor` via a request object, either of type
            #   {::Google::Cloud::PubSubLite::V1::ComputeTimeCursorRequest} or an equivalent Hash.
            #
            #   @param request [::Google::Cloud::PubSubLite::V1::ComputeTimeCursorRequest, ::Hash]
            #     A request object representing the call parameters. Required. To specify no
            #     parameters, or to keep all the default parameter values, pass an empty Hash.
            #   @param options [::Gapic::CallOptions, ::Hash]
            #     Overrides the default settings for this call, e.g, timeout, retries, etc. Optional.
            #
            # @overload compute_time_cursor(topic: nil, partition: nil, target: nil)
            #   Pass arguments to `compute_time_cursor` via keyword arguments. Note that at
            #   least one keyword argument is required. To specify no parameters, or to keep all
            #   the default parameter values, pass an empty Hash as a request object (see above).
            #
            #   @param topic [::String]
            #     Required. The topic for which we should compute the cursor.
            #   @param partition [::Integer]
            #     Required. The partition for which we should compute the cursor.
            #   @param target [::Google::Cloud::PubSubLite::V1::TimeTarget, ::Hash]
            #     Required. The target publish or event time. Specifying a future time will return an
            #     unset cursor.
            #
            # @yield [response, operation] Access the result along with the RPC operation
            # @yieldparam response [::Google::Cloud::PubSubLite::V1::ComputeTimeCursorResponse]
            # @yieldparam operation [::GRPC::ActiveCall::Operation]
            #
            # @return [::Google::Cloud::PubSubLite::V1::ComputeTimeCursorResponse]
            #
            # @raise [::Google::Cloud::Error] if the RPC is aborted.
            #
            def compute_time_cursor request, options = nil
              raise ::ArgumentError, "request must be provided" if request.nil?

              request = ::Gapic::Protobuf.coerce request, to: ::Google::Cloud::PubSubLite::V1::ComputeTimeCursorRequest

              # Converts hash and nil to an options object
              options = ::Gapic::CallOptions.new(**options.to_h) if options.respond_to? :to_h

              # Customize the options with defaults
              metadata = @config.rpcs.compute_time_cursor.metadata.to_h

              # Set x-goog-api-client and x-goog-user-project headers
              metadata[:"x-goog-api-client"] ||= ::Gapic::Headers.x_goog_api_client \
                lib_name: @config.lib_name, lib_version: @config.lib_version,
                gapic_version: ::Google::Cloud::Pubsublite::V1::VERSION
              metadata[:"x-goog-user-project"] = @quota_project_id if @quota_project_id

              header_params = {
                "topic" => request.topic
              }
              request_params_header = header_params.map { |k, v| "#{k}=#{v}" }.join("&")
              metadata[:"x-goog-request-params"] ||= request_params_header

              options.apply_defaults timeout:      @config.rpcs.compute_time_cursor.timeout,
                                     metadata:     metadata,
                                     retry_policy: @config.rpcs.compute_time_cursor.retry_policy
              options.apply_defaults metadata:     @config.metadata,
                                     retry_policy: @config.retry_policy

              @topic_stats_service_stub.call_rpc :compute_time_cursor, request, options: options do |response, operation|
                yield response, operation if block_given?
                return response
              end
            rescue ::GRPC::BadStatus => e
              raise ::Google::Cloud::Error.from_error(e)
            end

            ##
            # Configuration class for the TopicStatsService API.
            #
            # This class represents the configuration for TopicStatsService,
            # providing control over timeouts, retry behavior, logging, transport
            # parameters, and other low-level controls. Certain parameters can also be
            # applied individually to specific RPCs. See
            # {::Google::Cloud::PubSubLite::V1::TopicStatsService::Client::Configuration::Rpcs}
            # for a list of RPCs that can be configured independently.
            #
            # Configuration can be applied globally to all clients, or to a single client
            # on construction.
            #
            # # Examples
            #
            # To modify the global config, setting the timeout for compute_message_stats
            # to 20 seconds, and all remaining timeouts to 10 seconds:
            #
            #     ::Google::Cloud::PubSubLite::V1::TopicStatsService::Client.configure do |config|
            #       config.timeout = 10.0
            #       config.rpcs.compute_message_stats.timeout = 20.0
            #     end
            #
            # To apply the above configuration only to a new client:
            #
            #     client = ::Google::Cloud::PubSubLite::V1::TopicStatsService::Client.new do |config|
            #       config.timeout = 10.0
            #       config.rpcs.compute_message_stats.timeout = 20.0
            #     end
            #
            # @!attribute [rw] endpoint
            #   The hostname or hostname:port of the service endpoint.
            #   Defaults to `"pubsublite.googleapis.com"`.
            #   @return [::String]
            # @!attribute [rw] credentials
            #   Credentials to send with calls. You may provide any of the following types:
            #    *  (`String`) The path to a service account key file in JSON format
            #    *  (`Hash`) A service account key as a Hash
            #    *  (`Google::Auth::Credentials`) A googleauth credentials object
            #       (see the [googleauth docs](https://googleapis.dev/ruby/googleauth/latest/index.html))
            #    *  (`Signet::OAuth2::Client`) A signet oauth2 client object
            #       (see the [signet docs](https://googleapis.dev/ruby/signet/latest/Signet/OAuth2/Client.html))
            #    *  (`GRPC::Core::Channel`) a gRPC channel with included credentials
            #    *  (`GRPC::Core::ChannelCredentials`) a gRPC credentails object
            #    *  (`nil`) indicating no credentials
            #   @return [::Object]
            # @!attribute [rw] scope
            #   The OAuth scopes
            #   @return [::Array<::String>]
            # @!attribute [rw] lib_name
            #   The library name as recorded in instrumentation and logging
            #   @return [::String]
            # @!attribute [rw] lib_version
            #   The library version as recorded in instrumentation and logging
            #   @return [::String]
            # @!attribute [rw] channel_args
            #   Extra parameters passed to the gRPC channel. Note: this is ignored if a
            #   `GRPC::Core::Channel` object is provided as the credential.
            #   @return [::Hash]
            # @!attribute [rw] interceptors
            #   An array of interceptors that are run before calls are executed.
            #   @return [::Array<::GRPC::ClientInterceptor>]
            # @!attribute [rw] timeout
            #   The call timeout in seconds.
            #   @return [::Numeric]
            # @!attribute [rw] metadata
            #   Additional gRPC headers to be sent with the call.
            #   @return [::Hash{::Symbol=>::String}]
            # @!attribute [rw] retry_policy
            #   The retry policy. The value is a hash with the following keys:
            #    *  `:initial_delay` (*type:* `Numeric`) - The initial delay in seconds.
            #    *  `:max_delay` (*type:* `Numeric`) - The max delay in seconds.
            #    *  `:multiplier` (*type:* `Numeric`) - The incremental backoff multiplier.
            #    *  `:retry_codes` (*type:* `Array<String>`) - The error codes that should
            #       trigger a retry.
            #   @return [::Hash]
            # @!attribute [rw] quota_project
            #   A separate project against which to charge quota.
            #   @return [::String]
            #
            class Configuration
              extend ::Gapic::Config

              config_attr :endpoint,      "pubsublite.googleapis.com", ::String
              config_attr :credentials,   nil do |value|
                allowed = [::String, ::Hash, ::Proc, ::Symbol, ::Google::Auth::Credentials, ::Signet::OAuth2::Client, nil]
                allowed += [::GRPC::Core::Channel, ::GRPC::Core::ChannelCredentials] if defined? ::GRPC
                allowed.any? { |klass| klass === value }
              end
              config_attr :scope,         nil, ::String, ::Array, nil
              config_attr :lib_name,      nil, ::String, nil
              config_attr :lib_version,   nil, ::String, nil
              config_attr(:channel_args,  { "grpc.service_config_disable_resolution" => 1 }, ::Hash, nil)
              config_attr :interceptors,  nil, ::Array, nil
              config_attr :timeout,       nil, ::Numeric, nil
              config_attr :metadata,      nil, ::Hash, nil
              config_attr :retry_policy,  nil, ::Hash, ::Proc, nil
              config_attr :quota_project, nil, ::String, nil

              # @private
              def initialize parent_config = nil
                @parent_config = parent_config unless parent_config.nil?

                yield self if block_given?
              end

              ##
              # Configurations for individual RPCs
              # @return [Rpcs]
              #
              def rpcs
                @rpcs ||= begin
                  parent_rpcs = nil
                  parent_rpcs = @parent_config.rpcs if defined?(@parent_config) && @parent_config.respond_to?(:rpcs)
                  Rpcs.new parent_rpcs
                end
              end

              ##
              # Configuration RPC class for the TopicStatsService API.
              #
              # Includes fields providing the configuration for each RPC in this service.
              # Each configuration object is of type `Gapic::Config::Method` and includes
              # the following configuration fields:
              #
              #  *  `timeout` (*type:* `Numeric`) - The call timeout in seconds
              #  *  `metadata` (*type:* `Hash{Symbol=>String}`) - Additional gRPC headers
              #  *  `retry_policy (*type:* `Hash`) - The retry policy. The policy fields
              #     include the following keys:
              #      *  `:initial_delay` (*type:* `Numeric`) - The initial delay in seconds.
              #      *  `:max_delay` (*type:* `Numeric`) - The max delay in seconds.
              #      *  `:multiplier` (*type:* `Numeric`) - The incremental backoff multiplier.
              #      *  `:retry_codes` (*type:* `Array<String>`) - The error codes that should
              #         trigger a retry.
              #
              class Rpcs
                ##
                # RPC-specific configuration for `compute_message_stats`
                # @return [::Gapic::Config::Method]
                #
                attr_reader :compute_message_stats
                ##
                # RPC-specific configuration for `compute_head_cursor`
                # @return [::Gapic::Config::Method]
                #
                attr_reader :compute_head_cursor
                ##
                # RPC-specific configuration for `compute_time_cursor`
                # @return [::Gapic::Config::Method]
                #
                attr_reader :compute_time_cursor

                # @private
                def initialize parent_rpcs = nil
                  compute_message_stats_config = parent_rpcs.compute_message_stats if parent_rpcs.respond_to? :compute_message_stats
                  @compute_message_stats = ::Gapic::Config::Method.new compute_message_stats_config
                  compute_head_cursor_config = parent_rpcs.compute_head_cursor if parent_rpcs.respond_to? :compute_head_cursor
                  @compute_head_cursor = ::Gapic::Config::Method.new compute_head_cursor_config
                  compute_time_cursor_config = parent_rpcs.compute_time_cursor if parent_rpcs.respond_to? :compute_time_cursor
                  @compute_time_cursor = ::Gapic::Config::Method.new compute_time_cursor_config

                  yield self if block_given?
                end
              end
            end
          end
        end
      end
    end
  end
end
