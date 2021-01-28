<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC.
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
//
namespace Google\Cloud\PhishingProtection\V1beta1;

/**
 * Service to report phishing URIs.
 */
class PhishingProtectionServiceV1Beta1GrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Reports a URI suspected of containing phishing content to be reviewed. Once
     * the report review is complete, its result can be found in the Cloud
     * Security Command Center findings dashboard for Phishing Protection. If the
     * result verifies the existence of malicious phishing content, the site will
     * be added the to [Google's Social Engineering
     * lists](https://support.google.com/webmasters/answer/6350487/) in order to
     * protect users that could get exposed to this threat in the future.
     * @param \Google\Cloud\PhishingProtection\V1beta1\ReportPhishingRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportPhishing(\Google\Cloud\PhishingProtection\V1beta1\ReportPhishingRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.phishingprotection.v1beta1.PhishingProtectionServiceV1Beta1/ReportPhishing',
        $argument,
        ['\Google\Cloud\PhishingProtection\V1beta1\ReportPhishingResponse', 'decode'],
        $metadata, $options);
    }

}
