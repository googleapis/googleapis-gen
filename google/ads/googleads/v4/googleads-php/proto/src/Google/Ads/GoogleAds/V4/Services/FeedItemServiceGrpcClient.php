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
namespace Google\Ads\GoogleAds\V4\Services;

/**
 * Proto file describing the FeedItem service.
 *
 * Service to manage feed items.
 */
class FeedItemServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested feed item in full detail.
     * @param \Google\Ads\GoogleAds\V4\Services\GetFeedItemRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFeedItem(\Google\Ads\GoogleAds\V4\Services\GetFeedItemRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v4.services.FeedItemService/GetFeedItem',
        $argument,
        ['\Google\Ads\GoogleAds\V4\Resources\FeedItem', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates, updates, or removes feed items. Operation statuses are
     * returned.
     * @param \Google\Ads\GoogleAds\V4\Services\MutateFeedItemsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MutateFeedItems(\Google\Ads\GoogleAds\V4\Services\MutateFeedItemsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v4.services.FeedItemService/MutateFeedItems',
        $argument,
        ['\Google\Ads\GoogleAds\V4\Services\MutateFeedItemsResponse', 'decode'],
        $metadata, $options);
    }

}
