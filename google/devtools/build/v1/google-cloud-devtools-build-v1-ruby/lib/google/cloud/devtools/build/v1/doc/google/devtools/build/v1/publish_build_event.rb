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
  module Devtools
    module Build
      module V1
        # Publishes 'lifecycle events' that update the high-level state of a build:
        # * BuildEnqueued: When a build is scheduled.
        # * InvocationAttemptStarted: When work for a build starts; there can be
        #   multiple invocations for a build (e.g. retries).
        # * InvocationAttemptCompleted: When work for a build finishes.
        # * BuildFinished: When a build is finished.
        # @!attribute [rw] service_level
        #   @return [Google::Devtools::Build::V1::PublishLifecycleEventRequest::ServiceLevel]
        #     The interactivity of this build.
        # @!attribute [rw] build_event
        #   @return [Google::Devtools::Build::V1::OrderedBuildEvent]
        #     Required. The lifecycle build event. If this is a build tool event, the RPC will fail
        #     with INVALID_REQUEST.
        # @!attribute [rw] stream_timeout
        #   @return [Google::Protobuf::Duration]
        #     If the next event for this build or invocation (depending on the event
        #     type) hasn't been published after this duration from when {build_event}
        #     is written to BES, consider this stream expired. If this field is not set,
        #     BES backend will use its own default value.
        # @!attribute [rw] notification_keywords
        #   @return [Array<String>]
        #     Additional information about a build request. These are define by the event
        #     publishers, and the Build Event Service does not validate or interpret
        #     them. They are used while notifying internal systems of new builds and
        #     invocations if the OrderedBuildEvent.event type is
        #     BuildEnqueued/InvocationAttemptStarted.
        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. The project this build is associated with.
        #     This should match the project used for the initial call to
        #     PublishLifecycleEvent (containing a BuildEnqueued message).
        class PublishLifecycleEventRequest
          # The service level of the build request. Backends only uses this value when
          # the BuildEnqueued event is published to determine what level of service
          # this build should receive.
          module ServiceLevel
            # Non-interactive builds can tolerate longer event latencies. This is the
            # default ServiceLevel if callers do not specify one.
            NONINTERACTIVE = 0

            # The events of an interactive build should be delivered with low latency.
            INTERACTIVE = 1
          end
        end

        # States which event has been committed. Any failure to commit will cause
        # RPC errors, hence not recorded by this proto.
        # @!attribute [rw] stream_id
        #   @return [Google::Devtools::Build::V1::StreamId]
        #     The stream that contains this event.
        # @!attribute [rw] sequence_number
        #   @return [Integer]
        #     The sequence number of this event that has been committed.
        class PublishBuildToolEventStreamResponse; end

        # Build event with contextual information about the stream it belongs to and
        # its position in that stream.
        # @!attribute [rw] stream_id
        #   @return [Google::Devtools::Build::V1::StreamId]
        #     Which build event stream this event belongs to.
        # @!attribute [rw] sequence_number
        #   @return [Integer]
        #     The position of this event in the stream. The sequence numbers for a build
        #     event stream should be a sequence of consecutive natural numbers starting
        #     from one. (1, 2, 3, ...)
        # @!attribute [rw] event
        #   @return [Google::Devtools::Build::V1::BuildEvent]
        #     The actual event.
        class OrderedBuildEvent; end

        # Streaming request message for PublishBuildToolEventStream.
        # @!attribute [rw] ordered_build_event
        #   @return [Google::Devtools::Build::V1::OrderedBuildEvent]
        #     Required. The build event with position info.
        #     New publishing clients should use this field rather than the 3 above.
        # @!attribute [rw] notification_keywords
        #   @return [Array<String>]
        #     The keywords to be attached to the notification which notifies the start
        #     of a new build event stream. BES only reads this field when sequence_number
        #     or ordered_build_event.sequence_number is 1 in this message. If this field
        #     is empty, BES will not publish notification messages for this stream.
        # @!attribute [rw] project_id
        #   @return [String]
        #     Required. The project this build is associated with.
        #     This should match the project used for the initial call to
        #     PublishLifecycleEvent (containing a BuildEnqueued message).
        class PublishBuildToolEventStreamRequest; end
      end
    end
  end
end