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
# https://github.com/googleapis/googleapis/blob/master/google/cloud/dataqna/v1alpha/question_service.proto,
# and updates to that file get reflected here through a refresh process.
# For the short term, the refresh process will only be runnable by Google
# engineers.

require "json"
require "pathname"

require "google/gax"

require "google/cloud/dataqna/v1alpha/question_service_pb"
require "google/cloud/data_qn_a/v1alpha/credentials"

module Google
  module Cloud
    module DataQnA
      module V1alpha
        # Service to interpret natural language queries.
        # The service allows to create `Question` resources that are interpreted and
        # are filled with one or more interpretations if the question could be
        # interpreted. Once a `Question` resource is created and has at least one
        # interpretation, an interpretation can be chosen for execution, which
        # triggers a query to the backend (for BigQuery, it will create a job).
        # Upon successful execution of that interpretation, backend specific
        # information will be returned so that the client can retrieve the results
        # from the backend.
        #
        # The `Question` resources are named `projects/*/locations/*/questions/*`.
        #
        # The `Question` resource has a singletion sub-resource `UserFeedback` named
        # `projects/*/locations/*/questions/*/userFeedback`, which allows access to
        # user feedback.
        #
        # @!attribute [r] question_service_stub
        #   @return [Google::Cloud::Dataqna::V1alpha::QuestionService::Stub]
        class QuestionServiceClient
          attr_reader :question_service_stub

          # The default address of the service.
          SERVICE_ADDRESS = "dataqna.googleapis.com".freeze

          # The default port of the service.
          DEFAULT_SERVICE_PORT = 443

          # The default set of gRPC interceptors.
          GRPC_INTERCEPTORS = []

          DEFAULT_TIMEOUT = 30

          # The scopes needed to make gRPC calls to all of the methods defined in
          # this service.
          ALL_SCOPES = [
            "https://www.googleapis.com/auth/cloud-platform"
          ].freeze


          LOCATION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}"
          )

          private_constant :LOCATION_PATH_TEMPLATE

          QUESTION_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/questions/{question}"
          )

          private_constant :QUESTION_PATH_TEMPLATE

          USER_FEEDBACK_PATH_TEMPLATE = Google::Gax::PathTemplate.new(
            "projects/{project}/locations/{location}/questions/{question}/userFeedback"
          )

          private_constant :USER_FEEDBACK_PATH_TEMPLATE

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

          # Returns a fully-qualified question resource name string.
          # @param project [String]
          # @param location [String]
          # @param question [String]
          # @return [String]
          def self.question_path project, location, question
            QUESTION_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"question" => question
            )
          end

          # Returns a fully-qualified user_feedback resource name string.
          # @param project [String]
          # @param location [String]
          # @param question [String]
          # @return [String]
          def self.user_feedback_path project, location, question
            USER_FEEDBACK_PATH_TEMPLATE.render(
              :"project" => project,
              :"location" => location,
              :"question" => question
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
            require "google/cloud/dataqna/v1alpha/question_service_services_pb"

            credentials ||= Google::Cloud::DataQnA::V1alpha::Credentials.default

            if credentials.is_a?(String) || credentials.is_a?(Hash)
              updater_proc = Google::Cloud::DataQnA::V1alpha::Credentials.new(credentials).updater_proc
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

            package_version = Gem.loaded_specs['google-cloud-data_qn_a'].version.version

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
              "question_service_client_config.json"
            )
            defaults = client_config_file.open do |f|
              Google::Gax.construct_settings(
                "google.cloud.dataqna.v1alpha.QuestionService",
                JSON.parse(f.read),
                client_config,
                Google::Gax::Grpc::STATUS_CODE_NAMES,
                timeout,
                errors: Google::Gax::Grpc::API_ERRORS,
                metadata: headers
              )
            end

            # Allow overriding the service path/port in subclasses.
            service_path = self.class::SERVICE_ADDRESS
            port = self.class::DEFAULT_SERVICE_PORT
            interceptors = self.class::GRPC_INTERCEPTORS
            @question_service_stub = Google::Gax::Grpc.create_stub(
              service_path,
              port,
              chan_creds: chan_creds,
              channel: channel,
              updater_proc: updater_proc,
              scopes: scopes,
              interceptors: interceptors,
              &Google::Cloud::Dataqna::V1alpha::QuestionService::Stub.method(:new)
            )

            @get_question = Google::Gax.create_api_call(
              @question_service_stub.method(:get_question),
              defaults["get_question"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @create_question = Google::Gax.create_api_call(
              @question_service_stub.method(:create_question),
              defaults["create_question"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'parent' => request.parent}
              end
            )
            @execute_question = Google::Gax.create_api_call(
              @question_service_stub.method(:execute_question),
              defaults["execute_question"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @get_user_feedback = Google::Gax.create_api_call(
              @question_service_stub.method(:get_user_feedback),
              defaults["get_user_feedback"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'name' => request.name}
              end
            )
            @update_user_feedback = Google::Gax.create_api_call(
              @question_service_stub.method(:update_user_feedback),
              defaults["update_user_feedback"],
              exception_transformer: exception_transformer,
              params_extractor: proc do |request|
                {'user_feedback.name' => request.user_feedback.name}
              end
            )
          end

          # Service calls

          # Gets a previously created question.
          #
          # @param name [String]
          #   Required. The unique identifier for the question.
          #   Example: `projects/foo/locations/bar/questions/1234`
          # @param read_mask [Google::Protobuf::FieldMask | Hash]
          #   The list of fields to be retrieved.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dataqna::V1alpha::Question]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dataqna::V1alpha::Question]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/data_qn_a"
          #
          #   question_client = Google::Cloud::DataQnA::V1alpha::Question.new(version: :v1alpha)
          #   formatted_name = Google::Cloud::DataQnA::V1alpha::QuestionServiceClient.question_path("[PROJECT]", "[LOCATION]", "[QUESTION]")
          #   response = question_client.get_question(formatted_name)

          def get_question \
              name,
              read_mask: nil,
              options: nil,
              &block
            req = {
              name: name,
              read_mask: read_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dataqna::V1alpha::GetQuestionRequest)
            @get_question.call(req, options, &block)
          end

          # Creates a question.
          #
          # @param parent [String]
          #   Required. The name of the project this data source reference belongs to.
          #   Example: `projects/foo/locations/bar`
          # @param question [Google::Cloud::Dataqna::V1alpha::Question | Hash]
          #   Required. The question to create.
          #   A hash of the same form as `Google::Cloud::Dataqna::V1alpha::Question`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dataqna::V1alpha::Question]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dataqna::V1alpha::Question]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/data_qn_a"
          #
          #   question_client = Google::Cloud::DataQnA::V1alpha::Question.new(version: :v1alpha)
          #   formatted_parent = Google::Cloud::DataQnA::V1alpha::QuestionServiceClient.location_path("[PROJECT]", "[LOCATION]")
          #
          #   # TODO: Initialize `question`:
          #   question = {}
          #   response = question_client.create_question(formatted_parent, question)

          def create_question \
              parent,
              question,
              options: nil,
              &block
            req = {
              parent: parent,
              question: question
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dataqna::V1alpha::CreateQuestionRequest)
            @create_question.call(req, options, &block)
          end

          # Executes an interpretation.
          #
          # @param name [String]
          #   Required. The unique identifier for the question.
          #   Example: `projects/foo/locations/bar/questions/1234`
          # @param interpretation_index [Integer]
          #   Required. Index of the interpretation to execute.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dataqna::V1alpha::Question]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dataqna::V1alpha::Question]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/data_qn_a"
          #
          #   question_client = Google::Cloud::DataQnA::V1alpha::Question.new(version: :v1alpha)
          #
          #   # TODO: Initialize `name`:
          #   name = ''
          #
          #   # TODO: Initialize `interpretation_index`:
          #   interpretation_index = 0
          #   response = question_client.execute_question(name, interpretation_index)

          def execute_question \
              name,
              interpretation_index,
              options: nil,
              &block
            req = {
              name: name,
              interpretation_index: interpretation_index
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dataqna::V1alpha::ExecuteQuestionRequest)
            @execute_question.call(req, options, &block)
          end

          # Gets previously created user feedback.
          #
          # @param name [String]
          #   Required. The unique identifier for the user feedback.
          #   User feedback is a singleton resource on a Question.
          #   Example: `projects/foo/locations/bar/questions/1234/userFeedback`
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dataqna::V1alpha::UserFeedback]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dataqna::V1alpha::UserFeedback]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/data_qn_a"
          #
          #   question_client = Google::Cloud::DataQnA::V1alpha::Question.new(version: :v1alpha)
          #   formatted_name = Google::Cloud::DataQnA::V1alpha::QuestionServiceClient.user_feedback_path("[PROJECT]", "[LOCATION]", "[QUESTION]")
          #   response = question_client.get_user_feedback(formatted_name)

          def get_user_feedback \
              name,
              options: nil,
              &block
            req = {
              name: name
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dataqna::V1alpha::GetUserFeedbackRequest)
            @get_user_feedback.call(req, options, &block)
          end

          # Updates user feedback. This creates user feedback if there was none before
          # (upsert).
          #
          # @param user_feedback [Google::Cloud::Dataqna::V1alpha::UserFeedback | Hash]
          #   Required. The user feedback to update. This can be called even if there is no
          #   user feedback so far.
          #   The feedback's name field is used to identify the user feedback (and the
          #   corresponding question) to update.
          #   A hash of the same form as `Google::Cloud::Dataqna::V1alpha::UserFeedback`
          #   can also be provided.
          # @param update_mask [Google::Protobuf::FieldMask | Hash]
          #   The list of fields to be updated.
          #   A hash of the same form as `Google::Protobuf::FieldMask`
          #   can also be provided.
          # @param options [Google::Gax::CallOptions]
          #   Overrides the default settings for this call, e.g, timeout,
          #   retries, etc.
          # @yield [result, operation] Access the result along with the RPC operation
          # @yieldparam result [Google::Cloud::Dataqna::V1alpha::UserFeedback]
          # @yieldparam operation [GRPC::ActiveCall::Operation]
          # @return [Google::Cloud::Dataqna::V1alpha::UserFeedback]
          # @raise [Google::Gax::GaxError] if the RPC is aborted.
          # @example
          #   require "google/cloud/data_qn_a"
          #
          #   question_client = Google::Cloud::DataQnA::V1alpha::Question.new(version: :v1alpha)
          #
          #   # TODO: Initialize `user_feedback`:
          #   user_feedback = {}
          #   response = question_client.update_user_feedback(user_feedback)

          def update_user_feedback \
              user_feedback,
              update_mask: nil,
              options: nil,
              &block
            req = {
              user_feedback: user_feedback,
              update_mask: update_mask
            }.delete_if { |_, v| v.nil? }
            req = Google::Gax::to_proto(req, Google::Cloud::Dataqna::V1alpha::UpdateUserFeedbackRequest)
            @update_user_feedback.call(req, options, &block)
          end
        end
      end
    end
  end
end
