<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021 Google LLC
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
namespace Google\Cloud\Dialogflow\Cx\V3beta1;

/**
 * Service for managing [Pages][google.cloud.dialogflow.cx.v3beta1.Page].
 */
class PagesGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the list of all pages in the specified flow.
     * @param \Google\Cloud\Dialogflow\Cx\V3beta1\ListPagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPages(\Google\Cloud\Dialogflow\Cx\V3beta1\ListPagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.cx.v3beta1.Pages/ListPages',
        $argument,
        ['\Google\Cloud\Dialogflow\Cx\V3beta1\ListPagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Retrieves the specified page.
     * @param \Google\Cloud\Dialogflow\Cx\V3beta1\GetPageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPage(\Google\Cloud\Dialogflow\Cx\V3beta1\GetPageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.cx.v3beta1.Pages/GetPage',
        $argument,
        ['\Google\Cloud\Dialogflow\Cx\V3beta1\Page', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a page in the specified flow.
     * @param \Google\Cloud\Dialogflow\Cx\V3beta1\CreatePageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePage(\Google\Cloud\Dialogflow\Cx\V3beta1\CreatePageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.cx.v3beta1.Pages/CreatePage',
        $argument,
        ['\Google\Cloud\Dialogflow\Cx\V3beta1\Page', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the specified page.
     * @param \Google\Cloud\Dialogflow\Cx\V3beta1\UpdatePageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdatePage(\Google\Cloud\Dialogflow\Cx\V3beta1\UpdatePageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.cx.v3beta1.Pages/UpdatePage',
        $argument,
        ['\Google\Cloud\Dialogflow\Cx\V3beta1\Page', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes the specified page.
     * @param \Google\Cloud\Dialogflow\Cx\V3beta1\DeletePageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeletePage(\Google\Cloud\Dialogflow\Cx\V3beta1\DeletePageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.dialogflow.cx.v3beta1.Pages/DeletePage',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
