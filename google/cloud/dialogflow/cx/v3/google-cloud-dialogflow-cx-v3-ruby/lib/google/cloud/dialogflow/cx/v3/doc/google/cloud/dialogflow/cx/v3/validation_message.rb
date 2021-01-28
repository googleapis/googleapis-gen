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
      module Cx
        module V3
          # Agent/flow validation message.
          # @!attribute [rw] resource_type
          #   @return [Google::Cloud::Dialogflow::Cx::V3::ValidationMessage::ResourceType]
          #     The type of the resources where the message is found.
          # @!attribute [rw] resources
          #   @return [Array<String>]
          #     The names of the resources where the message is found.
          # @!attribute [rw] resource_names
          #   @return [Array<Google::Cloud::Dialogflow::Cx::V3::ResourceName>]
          #     The resource names of the resources where the message is found.
          # @!attribute [rw] severity
          #   @return [Google::Cloud::Dialogflow::Cx::V3::ValidationMessage::Severity]
          #     Indicates the severity of the message.
          # @!attribute [rw] detail
          #   @return [String]
          #     The message detail.
          class ValidationMessage
            # Resource types.
            module ResourceType
              # Unspecified.
              RESOURCE_TYPE_UNSPECIFIED = 0

              # Agent.
              AGENT = 1

              # Intent.
              INTENT = 2

              # Intent training phrase.
              INTENT_TRAINING_PHRASE = 8

              # Intent parameter.
              INTENT_PARAMETER = 9

              # Multiple intents.
              INTENTS = 10

              # Multiple training phrases.
              INTENT_TRAINING_PHRASES = 11

              # Entity type.
              ENTITY_TYPE = 3

              # Multiple entity types.
              ENTITY_TYPES = 12

              # Webhook.
              WEBHOOK = 4

              # Flow.
              FLOW = 5

              # Page.
              PAGE = 6

              # Multiple pages.
              PAGES = 13

              # Transition route group.
              TRANSITION_ROUTE_GROUP = 7
            end

            # Severity level.
            module Severity
              # Unspecified.
              SEVERITY_UNSPECIFIED = 0

              # The agent doesn't follow Dialogflow best practices.
              INFO = 1

              # The agent may not behave as expected.
              WARNING = 2

              # The agent may experience failures.
              ERROR = 3
            end
          end

          # Resource name and display name.
          # @!attribute [rw] name
          #   @return [String]
          #     Name.
          # @!attribute [rw] display_name
          #   @return [String]
          #     Display name.
          class ResourceName; end
        end
      end
    end
  end
end