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


module Google
  module Cloud
    module Eventarc
      module V1
        # A representation of the trigger resource.
        # @!attribute [rw] name
        #   @return [::String]
        #     Required. The resource name of the trigger. Must be unique within the
        #     location on the project and must be in
        #     `projects/{project}/locations/{location}/triggers/{trigger}` format.
        # @!attribute [r] uid
        #   @return [::String]
        #     Output only. Server assigned unique identifier for the trigger. The value
        #     is a UUID4 string and guaranteed to remain unchanged until the resource is
        #     deleted.
        # @!attribute [r] create_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Output only. The creation time.
        # @!attribute [r] update_time
        #   @return [::Google::Protobuf::Timestamp]
        #     Output only. The last-modified time.
        # @!attribute [rw] event_filters
        #   @return [::Array<::Google::Cloud::Eventarc::V1::EventFilter>]
        #     Required. null The list of filters that applies to event attributes. Only
        #     events that match all the provided filters will be sent to the destination.
        # @!attribute [rw] service_account
        #   @return [::String]
        #     Optional. The IAM service account email associated with the trigger. The
        #     service account represents the identity of the trigger.
        #
        #     The principal who calls this API must have `iam.serviceAccounts.actAs`
        #     permission in the service account. See
        #     https://cloud.google.com/iam/docs/understanding-service-accounts?hl=en#sa_common
        #     for more information.
        #
        #     For Cloud Run destinations, this service account is used to generate
        #     identity tokens when invoking the service. See
        #     https://cloud.google.com/run/docs/triggering/pubsub-push#create-service-account
        #     for information on how to invoke authenticated Cloud Run services.
        #     In order to create Audit Log triggers, the service account should also
        #     have `roles/eventarc.eventReceiver` IAM role.
        # @!attribute [rw] destination
        #   @return [::Google::Cloud::Eventarc::V1::Destination]
        #     Required. Destination specifies where the events should be sent to.
        # @!attribute [rw] transport
        #   @return [::Google::Cloud::Eventarc::V1::Transport]
        #     Optional. In order to deliver messages, Eventarc may use other GCP
        #     products as transport intermediary. This field contains a reference to that
        #     transport intermediary. This information can be used for debugging
        #     purposes.
        # @!attribute [rw] labels
        #   @return [::Google::Protobuf::Map{::String => ::String}]
        #     Optional. User labels attached to the triggers that can be used to group
        #     resources.
        # @!attribute [r] etag
        #   @return [::String]
        #     Output only. This checksum is computed by the server based on the value of
        #     other fields, and may be sent only on create requests to ensure the client
        #     has an up-to-date value before proceeding.
        class Trigger
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods

          # @!attribute [rw] key
          #   @return [::String]
          # @!attribute [rw] value
          #   @return [::String]
          class LabelsEntry
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end

        # Filters events based on exact matches on the CloudEvents attributes.
        # @!attribute [rw] attribute
        #   @return [::String]
        #     Required. The name of a CloudEvents attribute. Currently, only a subset of
        #     attributes are supported for filtering.
        #
        #     All triggers MUST provide a filter for the 'type' attribute.
        # @!attribute [rw] value
        #   @return [::String]
        #     Required. The value for the attribute.
        class EventFilter
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # Represents a target of an invocation over HTTP.
        # @!attribute [rw] cloud_run
        #   @return [::Google::Cloud::Eventarc::V1::CloudRun]
        #     Cloud Run fully-managed service that receives the events. The service
        #     should be running in the same project of the trigger.
        class Destination
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # Represents the transport intermediaries created for the trigger in order to
        # deliver events.
        # @!attribute [rw] pubsub
        #   @return [::Google::Cloud::Eventarc::V1::Pubsub]
        #     The Pub/Sub topic and subscription used by Eventarc as delivery
        #     intermediary.
        class Transport
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # Represents a Cloud Run destination.
        # @!attribute [rw] service
        #   @return [::String]
        #     Required. The name of the Cloud Run service being addressed. See
        #     https://cloud.google.com/run/docs/reference/rest/v1/namespaces.services.
        #
        #     Only services located in the same project of the trigger object
        #     can be addressed.
        # @!attribute [rw] path
        #   @return [::String]
        #     Optional. The relative path on the Cloud Run service the events should be
        #     sent to.
        #
        #     The value must conform to the definition of URI path segment (section 3.3
        #     of RFC2396). Examples: "/route", "route", "route/subroute".
        # @!attribute [rw] region
        #   @return [::String]
        #     Required. The region the Cloud Run service is deployed in.
        class CloudRun
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end

        # Represents a Pub/Sub transport.
        # @!attribute [rw] topic
        #   @return [::String]
        #     Optional. The name of the Pub/Sub topic created and managed by Eventarc
        #     system as a transport for the event delivery. Format:
        #     `projects/{PROJECT_ID}/topics/{TOPIC_NAME}`.
        #
        #     You may set an existing topic for triggers of the type
        #     `google.cloud.pubsub.topic.v1.messagePublished` only. The topic you provide
        #     here will not be deleted by Eventarc at trigger deletion.
        # @!attribute [r] subscription
        #   @return [::String]
        #     Output only. The name of the Pub/Sub subscription created and managed by
        #     Eventarc system as a transport for the event delivery. Format:
        #     `projects/{PROJECT_ID}/subscriptions/{SUBSCRIPTION_NAME}`.
        class Pubsub
          include ::Google::Protobuf::MessageExts
          extend ::Google::Protobuf::MessageExts::ClassMethods
        end
      end
    end
  end
end
