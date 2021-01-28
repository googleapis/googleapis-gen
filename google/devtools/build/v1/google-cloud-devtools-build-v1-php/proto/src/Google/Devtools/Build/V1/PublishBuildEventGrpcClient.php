<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2020 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Devtools\Build\V1;

/**
 * A service for publishing BuildEvents. BuildEvents are generated by Build
 * Systems to record actions taken during a Build. Events occur in streams,
 * are identified by a StreamId, and ordered by sequence number in a stream.
 *
 * A Build may contain several streams of BuildEvents, depending on the systems
 * that are involved in the Build. Some BuildEvents are used to declare the
 * beginning and end of major portions of a Build; these are called
 * LifecycleEvents, and are used (for example) to indicate the beginning or end
 * of a Build, and the beginning or end of an Invocation attempt (there can be
 * more than 1 Invocation in a Build if, for example, a failure occurs somewhere
 * and it needs to be retried).
 *
 * Other, build-tool events represent actions taken by the Build tool, such as
 * target objects produced via compilation, tests run, et cetera. There could be
 * more than one build tool stream for an invocation attempt of a build.
 */
class PublishBuildEventGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Publish a build event stating the new state of a build (typically from the
     * build queue). The BuildEnqueued event must be publishd before all other
     * events for the same build ID.
     *
     * The backend will persist the event and deliver it to registered frontend
     * jobs immediately without batching.
     *
     * The commit status of the request is reported by the RPC's util_status()
     * function. The error code is the canoncial error code defined in
     * //util/task/codes.proto.
     * @param \Google\Devtools\Build\V1\PublishLifecycleEventRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function PublishLifecycleEvent(\Google\Devtools\Build\V1\PublishLifecycleEventRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.build.v1.PublishBuildEvent/PublishLifecycleEvent',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Publish build tool events belonging to the same stream to a backend job
     * using bidirectional streaming.
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function PublishBuildToolEventStream($metadata = [], $options = []) {
        return $this->_bidiRequest('/google.devtools.build.v1.PublishBuildEvent/PublishBuildToolEventStream',
        ['\Google\Devtools\Build\V1\PublishBuildToolEventStreamResponse','decode'],
        $metadata, $options);
    }

}
