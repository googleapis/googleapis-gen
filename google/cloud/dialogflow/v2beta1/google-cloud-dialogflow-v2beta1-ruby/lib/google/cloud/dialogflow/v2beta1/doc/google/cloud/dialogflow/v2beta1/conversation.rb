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
        # Represents a conversation.
        # A conversation is an interaction between an agent, including live agents
        # and Dialogflow agents, and a support customer. Conversations can
        # include phone calls and text-based chat sessions.
        # @!attribute [rw] name
        #   @return [String]
        #     Output only. The unique identifier of this conversation.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversations/<Conversation ID>`.
        # @!attribute [rw] lifecycle_state
        #   @return [Google::Cloud::Dialogflow::V2beta1::Conversation::LifecycleState]
        #     Output only. The current state of the Conversation.
        # @!attribute [rw] conversation_profile
        #   @return [String]
        #     Required. The Conversation Profile to be used to configure this
        #     Conversation. This field cannot be updated.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversationProfiles/<Conversation Profile ID>`.
        # @!attribute [rw] phone_number
        #   @return [Google::Cloud::Dialogflow::V2beta1::ConversationPhoneNumber]
        #     Output only. Required if the conversation is to be connected over
        #     telephony.
        # @!attribute [rw] conversation_stage
        #   @return [Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage]
        #     The stage of a conversation. It indicates whether the virtual agent or a
        #     human agent is handling the conversation.
        #
        #     If the conversation is created with the conversation profile that has
        #     Dialogflow config set, defaults to
        #     {Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage::VIRTUAL_AGENT_STAGE ConversationStage::VIRTUAL_AGENT_STAGE};
        #     Otherwise, defaults to
        #     {Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage::HUMAN_ASSIST_STAGE ConversationStage::HUMAN_ASSIST_STAGE}.
        #
        #     If the conversation is created with the conversation profile that has
        #     Dialogflow config set but explicitly sets conversation_stage to
        #     {Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage::HUMAN_ASSIST_STAGE ConversationStage::HUMAN_ASSIST_STAGE},
        #     it skips
        #     {Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage::VIRTUAL_AGENT_STAGE ConversationStage::VIRTUAL_AGENT_STAGE}
        #     stage and directly goes to
        #     {Google::Cloud::Dialogflow::V2beta1::Conversation::ConversationStage::HUMAN_ASSIST_STAGE ConversationStage::HUMAN_ASSIST_STAGE}.
        # @!attribute [rw] start_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the conversation was started.
        # @!attribute [rw] end_time
        #   @return [Google::Protobuf::Timestamp]
        #     Output only. The time the conversation was finished.
        class Conversation
          # Enumeration of the different conversation stages a conversation can be in.
          # Reference:
          # https://cloud.google.com/dialogflow/priv/docs/contact-center/basics#stages
          module ConversationStage
            # Unknown. Should never be used after a conversation is successfully
            # created.
            CONVERSATION_STAGE_UNSPECIFIED = 0

            # The conversation should return virtual agent responses into the
            # conversation.
            VIRTUAL_AGENT_STAGE = 1

            # The conversation should not provide responses, just listen and provide
            # suggestions.
            HUMAN_ASSIST_STAGE = 2
          end

          # Enumeration of the completion status of the conversation.
          module LifecycleState
            # Unknown.
            LIFECYCLE_STATE_UNSPECIFIED = 0

            # Conversation is currently open for media analysis.
            IN_PROGRESS = 1

            # Conversation has been completed.
            COMPLETED = 2
          end
        end

        # Represents a phone number for telephony integration. It allows for connecting
        # a particular conversation over telephony.
        # @!attribute [rw] phone_number
        #   @return [String]
        #     Output only. The phone number to connect to this conversation.
        class ConversationPhoneNumber; end

        # The request message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::CreateConversation Conversations::CreateConversation}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource identifier of the project creating the conversation.
        #     Format: `projects/<Project ID>/locations/<Location ID>`.
        # @!attribute [rw] conversation
        #   @return [Google::Cloud::Dialogflow::V2beta1::Conversation]
        #     Required. The conversation to create.
        # @!attribute [rw] conversation_id
        #   @return [String]
        #     Optional. Identifier of the conversation. Generally it's auto generated by
        #     Google. Only set it if you cannot wait for the response to return a
        #     auto-generated one to you.
        #
        #     The conversation ID must be compliant with the regression fomula
        #     "[a-zA-Z][a-zA-Z0-9_-]*" with the characters length in range of [3,64].
        #     If the field is provided, the caller is resposible for
        #     1. the uniqueness of the ID, otherwise the request will be rejected.
        #     2. the consistency for whether to use custom ID or not under a project to
        #     better ensure uniqueness.
        class CreateConversationRequest; end

        # The request message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::ListConversations Conversations::ListConversations}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The project from which to list all conversation.
        #     Format: `projects/<Project ID>/locations/<Location ID>`.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Optional. The maximum number of items to return in a single page. By
        #     default 100 and at most 1000.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Optional. The next_page_token value returned from a previous list request.
        # @!attribute [rw] filter
        #   @return [String]
        #     A filter expression that filters conversations listed in the response. In
        #     general, the expression must specify the field name, a comparison operator,
        #     and the value to use for filtering:
        #     <ul>
        #       <li>The value must be a string, a number, or a boolean.</li>
        #       <li>The comparison operator must be either `=`,`!=`, `>`, or `<`.</li>
        #       <li>To filter on multiple expressions, separate the
        #           expressions with `AND` or `OR` (omitting both implies `AND`).</li>
        #       <li>For clarity, expressions can be enclosed in parentheses.</li>
        #     </ul>
        #     Only `lifecycle_state` can be filtered on in this way. For example,
        #     the following expression only returns `COMPLETED` conversations:
        #
        #     `lifecycle_state = "COMPLETED"`
        #
        #     For more information about filtering, see
        #     [API Filtering](https://aip.dev/160).
        class ListConversationsRequest; end

        # The response message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::ListConversations Conversations::ListConversations}.
        # @!attribute [rw] conversations
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::Conversation>]
        #     The list of conversations. There will be a maximum number of items
        #     returned based on the page_size field in the request.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results, or empty if there are no
        #     more results in the list.
        class ListConversationsResponse; end

        # The request message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::GetConversation Conversations::GetConversation}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the conversation. Format:
        #     `projects/<Project ID>/locations/<Location ID>/conversations/<Conversation
        #     ID>`.
        class GetConversationRequest; end

        # The request message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::CompleteConversation Conversations::CompleteConversation}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Resource identifier of the conversation to close.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversations/<Conversation ID>`.
        class CompleteConversationRequest; end

        # The request message to create one Message. Currently it is only used in
        # BatchCreateMessagesRequest.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource identifier of the conversation to create message.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversations/<Conversation ID>`.
        # @!attribute [rw] message
        #   @return [Google::Cloud::Dialogflow::V2beta1::Message]
        #     Required. The message to create.
        #     {Google::Cloud::Dialogflow::V2beta1::Message#participant Message#participant}
        #     is required.
        class CreateMessageRequest; end

        # The request message for {Conversations::BatchCreateMessagesRequest}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource identifier of the conversation to create message.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversations/<Conversation ID>`.
        # @!attribute [rw] requests
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::CreateMessageRequest>]
        #     Required. A maximum of 1000 Messages can be created in a batch.
        #     {CreateMessageRequest#message#send_time} is required. All created
        #     messages will have identical
        #     {Google::Cloud::Dialogflow::V2beta1::Message#create_time Message#create_time}.
        class BatchCreateMessagesRequest; end

        # The request message for {Conversations::BatchCreateMessagesResponse}.
        # @!attribute [rw] messages
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::Message>]
        #     Messages created.
        class BatchCreateMessagesResponse; end

        # The request message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::ListMessages Conversations::ListMessages}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The name of the conversation to list messages for.
        #     Format: `projects/<Project ID>/locations/<Location
        #     ID>/conversations/<Conversation ID>`
        # @!attribute [rw] filter
        #   @return [String]
        #     Optional. Filter on message fields. Currently predicates on `create_time`
        #     and `create_time_epoch_microseconds` are supported. `create_time` only
        #     support milliseconds accuracy. E.g.,
        #     `create_time_epoch_microseconds > 1551790877964485` or
        #     `create_time > 2017-01-15T01:30:15.01Z`.
        #
        #     For more information about filtering, see
        #     [API Filtering](https://aip.dev/160).
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Optional. The maximum number of items to return in a single page. By
        #     default 100 and at most 1000.
        # @!attribute [rw] page_token
        #   @return [String]
        #     Optional. The next_page_token value returned from a previous list request.
        class ListMessagesRequest; end

        # The response message for
        # {Google::Cloud::Dialogflow::V2beta1::Conversations::ListMessages Conversations::ListMessages}.
        # @!attribute [rw] messages
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::Message>]
        #     Required. The list of messages. There will be a maximum number of items
        #     returned based on the page_size field in the request.
        #     `messages` is sorted by `create_time` in descending order.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Optional. Token to retrieve the next page of results, or empty if there are
        #     no more results in the list.
        class ListMessagesResponse; end
      end
    end
  end
end