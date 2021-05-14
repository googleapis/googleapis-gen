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
namespace Google\Maps\PlayableLocations\V3;

/**
 * The Playable Locations API for v3.
 */
class PlayableLocationsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns a set of playable locations that lie within a specified area,
     * that satisfy optional filter criteria.
     *
     * Note: Identical `SamplePlayableLocations` requests can return different
     * results as the state of the world changes over time.
     * @param \Google\Maps\PlayableLocations\V3\SamplePlayableLocationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SamplePlayableLocations(\Google\Maps\PlayableLocations\V3\SamplePlayableLocationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.maps.playablelocations.v3.PlayableLocations/SamplePlayableLocations',
        $argument,
        ['\Google\Maps\PlayableLocations\V3\SamplePlayableLocationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Logs bad playable location reports submitted by players.
     *
     * Reports are not partially saved; either all reports are saved and this
     * request succeeds, or no reports are saved, and this request fails.
     * @param \Google\Maps\PlayableLocations\V3\LogPlayerReportsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LogPlayerReports(\Google\Maps\PlayableLocations\V3\LogPlayerReportsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.maps.playablelocations.v3.PlayableLocations/LogPlayerReports',
        $argument,
        ['\Google\Maps\PlayableLocations\V3\LogPlayerReportsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Logs new events when playable locations are displayed, and when they are
     * interacted with.
     *
     * Impressions are not partially saved; either all impressions are saved and
     * this request succeeds, or no impressions are saved, and this request fails.
     * @param \Google\Maps\PlayableLocations\V3\LogImpressionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LogImpressions(\Google\Maps\PlayableLocations\V3\LogImpressionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.maps.playablelocations.v3.PlayableLocations/LogImpressions',
        $argument,
        ['\Google\Maps\PlayableLocations\V3\LogImpressionsResponse', 'decode'],
        $metadata, $options);
    }

}
