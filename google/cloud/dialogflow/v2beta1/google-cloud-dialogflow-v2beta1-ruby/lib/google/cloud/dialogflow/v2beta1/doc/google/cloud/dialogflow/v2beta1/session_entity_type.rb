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
        # A session represents a conversation between a Dialogflow agent and an
        # end-user. You can create special entities, called session entities, during a
        # session. Session entities can extend or replace custom entity types and only
        # exist during the session that they were created for. All session data,
        # including session entities, is stored by Dialogflow for 20 minutes.
        #
        # For more information, see the [session entity
        # guide](https://cloud.google.com/dialogflow/docs/entities-session).
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The unique identifier of this session entity type. Supported
        #     formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity
        #       Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/environments/
        #       <Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        #     `<Entity Type Display Name>` must be the display name of an existing entity
        #     type in the same agent that will be overridden or supplemented.
        # @!attribute [rw] entity_override_mode
        #   @return [Google::Cloud::Dialogflow::V2beta1::SessionEntityType::EntityOverrideMode]
        #     Required. Indicates whether the additional data should override or
        #     supplement the custom entity type definition.
        # @!attribute [rw] entities
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::EntityType::Entity>]
        #     Required. The collection of entities associated with this session entity
        #     type.
        class SessionEntityType
          # The types of modifications for a session entity type.
          module EntityOverrideMode
            # Not specified. This value should be never used.
            ENTITY_OVERRIDE_MODE_UNSPECIFIED = 0

            # The collection of session entities overrides the collection of entities
            # in the corresponding custom entity type.
            ENTITY_OVERRIDE_MODE_OVERRIDE = 1

            # The collection of session entities extends the collection of entities in
            # the corresponding custom entity type.
            #
            # Note: Even in this override mode calls to `ListSessionEntityTypes`,
            # `GetSessionEntityType`, `CreateSessionEntityType` and
            # `UpdateSessionEntityType` only return the additional entities added in
            # this session entity type. If you want to get the supplemented list,
            # please call {Google::Cloud::Dialogflow::V2beta1::EntityTypes::GetEntityType EntityTypes::GetEntityType} on the custom entity type
            # and merge.
            ENTITY_OVERRIDE_MODE_SUPPLEMENT = 2
          end
        end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::ListSessionEntityTypes SessionEntityTypes::ListSessionEntityTypes}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The session to list all session entity types from.
        #     Supported formats:
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
        class ListSessionEntityTypesRequest; end

        # The response message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::ListSessionEntityTypes SessionEntityTypes::ListSessionEntityTypes}.
        # @!attribute [rw] session_entity_types
        #   @return [Array<Google::Cloud::Dialogflow::V2beta1::SessionEntityType>]
        #     The list of session entity types. There will be a maximum number of items
        #     returned based on the page_size field in the request.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     Token to retrieve the next page of results, or empty if there are no
        #     more results in the list.
        class ListSessionEntityTypesResponse; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::GetSessionEntityType SessionEntityTypes::GetSessionEntityType}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the session entity type. Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity
        #       Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/environments/
        #       <Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        class GetSessionEntityTypeRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::CreateSessionEntityType SessionEntityTypes::CreateSessionEntityType}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The session to create a session entity type for.
        #     Supported formats:
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
        # @!attribute [rw] session_entity_type
        #   @return [Google::Cloud::Dialogflow::V2beta1::SessionEntityType]
        #     Required. The session entity type to create.
        class CreateSessionEntityTypeRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::UpdateSessionEntityType SessionEntityTypes::UpdateSessionEntityType}.
        # @!attribute [rw] session_entity_type
        #   @return [Google::Cloud::Dialogflow::V2beta1::SessionEntityType]
        #     Required. The session entity type to update.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Optional. The mask to control which fields get updated.
        class UpdateSessionEntityTypeRequest; end

        # The request message for {Google::Cloud::Dialogflow::V2beta1::SessionEntityTypes::DeleteSessionEntityType SessionEntityTypes::DeleteSessionEntityType}.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. The name of the entity type to delete.
        #     Supported formats:
        #     * `projects/<Project ID>/agent/sessions/<Session ID>/entityTypes/<Entity
        #       Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
        #       ID>/sessions/<Session ID>/entityTypes/<Entity Type Display Name>`
        #     * `projects/<Project ID>/locations/<Location ID>/agent/environments/
        #       <Environment ID>/users/<User ID>/sessions/<Session
        #       ID>/entityTypes/<Entity Type Display Name>`
        #
        #     If `Location ID` is not specified we assume default 'us' location. If
        #     `Environment ID` is not specified, we assume default 'draft' environment.
        #     If `User ID` is not specified, we assume default '-' user.
        class DeleteSessionEntityTypeRequest; end
      end
    end
  end
end