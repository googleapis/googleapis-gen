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

module Google
  module Cloud
    module Dialogflow
      module V2beta1
        # Dialogflow contexts are similar to natural language context. If a person says
        # to you "they are orange", you need context in order to understand what "they"
        # is referring to. Similarly, for Dialogflow to handle an end-user expression
        # like that, it needs to be provided with context in order to correctly match
        # an intent.
        #
        # Using contexts, you can control the flow of a conversation. You can configure
        # contexts for an intent by setting input and output contexts, which are
        # identified by string names. When an intent is matched, any configured output
        # contexts for that intent become active. While any contexts are active,
        # Dialogflow is more likely to match intents that are configured with input
        # contexts that correspond to the currently active contexts.
        #
        # For more information about context, see the
        # [Contexts guide](https://cloud.google.com/dialogflow/docs/contexts-overview).
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The unique identifier of the context. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context
        #       ID>`,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #
        #     The `Context ID` is always converted to lowercase, may only contain
        #     characters in a-zA-Z0-9_-% and may be at most 250 bytes long.
        #
        #     If `Environment ID` is not specified, we assume default 'draft'
        #     environment. If `User ID` is not specified, we assume default '-' user.
        #
        #     The following context names are reserved for internal use by Dialogflow.
        #     You should not use these contexts or create contexts with these names:
        #
        #     * `__system_counters__`
        #     * `*_id_dialog_context`
        #     * `*_dialog_params_size`
        # @!attribute [rw] lifespan_count
        #   @return [Integer]
        #     Optional. The number of conversational query requests after which the
        #     context expires. The default is `0`. If set to `0`, the context expires
        #     immediately. Contexts expire automatically after 20 minutes if there
        #     are no matching queries.
        # @!attribute [rw] parameters
        #   @return [Google::Protobuf::Struct]
        #     Optional. The collection of parameters associated with this context.
        #
        #     Depending on your protocol or client library language, this is a
        #     map, associative array, symbol table, dictionary, or JSON object
        #     composed of a collection of (MapKey, MapValue) pairs:
        #
        #     * MapKey type: string
        #     * MapKey value: parameter name
        #     * MapValue type:
        #       * If parameter's entity type is a composite entity: map
        #         * Else: depending on parameter value type, could be one of string,
        #           number, boolean, null, list or map
        #         * MapValue value:
        #         * If parameter's entity type is a composite entity:
        #           map from composite entity property names to property values
        #         * Else: parameter value
        class Context; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::ListContexts Contexts::ListContexts}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The session to list all contexts from. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>`,
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Optional. The maximum number of items to return in a single page. By
        #     default 100 and at most 1000.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Optional. The next_page_token value returned from a previous list request.
        class ListContextsRequest; end

        # The response message for {Google::Cloud::Dialogflow::V2beta1::Contexts::ListContexts Contexts::ListContexts}.
        # @!attribute [rw] contexts
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::Context>]
        #     The list of contexts. There will be a maximum number of items
        #     returned based on the page_size field in the request.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results, or empty if there are no
        #     more results in the list.
        class ListContextsResponse; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::GetContext Contexts::GetContext}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the context. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context
        #       ID>`,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        class GetContextRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::CreateContext Contexts::CreateContext}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The session to create a context for. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>`,
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        # @!attribute [rw] context
        #   @return [Google::Cloud::Dialogflow::V2beta1::Context]
        #     Required. The context to create.
        class CreateContextRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::UpdateContext Contexts::UpdateContext}.
        # @!attribute [rw] context
        #   @return [Google::Cloud::Dialogflow::V2beta1::Context]
        #     Required. The context to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Optional. The mask to control which fields get updated.
        class UpdateContextRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::DeleteContext Contexts::DeleteContext}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the context to delete. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context
        #       ID>`,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/contexts/<Context ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/contexts/<Context ID>`,
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        class DeleteContextRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::Contexts::DeleteAllContexts Contexts::DeleteAllContexts}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The name of the session to delete all contexts from. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>,
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>`,
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>`,
        #     * `projects/<Project ID>/locations/<Location
        #       ID>/agent/environments/<Environment ID>/users/<User ID>/sessions/<Session
        #       ID>`,
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified we assume default 'draft' environment. If
        #     `User ID` is not specified, we assume default '-' user.
        class DeleteAllContextsRequest; end
      end
    end
  end
end