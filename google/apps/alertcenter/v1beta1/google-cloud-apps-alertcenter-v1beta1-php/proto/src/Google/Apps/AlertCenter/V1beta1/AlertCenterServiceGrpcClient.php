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
namespace Google\Apps\AlertCenter\V1beta1;

/**
 * Google Workspace Alert Center API (beta).
 */
class AlertCenterServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the alerts.
     * @param \Google\Apps\AlertCenter\V1beta1\ListAlertsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAlerts(\Google\Apps\AlertCenter\V1beta1\ListAlertsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/ListAlerts',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\ListAlertsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the specified alert. Attempting to get a nonexistent alert returns
     * `NOT_FOUND` error.
     * @param \Google\Apps\AlertCenter\V1beta1\GetAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAlert(\Google\Apps\AlertCenter\V1beta1\GetAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/GetAlert',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\Alert', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks the specified alert for deletion. An alert that has been marked for
     * deletion is removed from Alert Center after 30 days.
     * Marking an alert for deletion has no effect on an alert which has
     * already been marked for deletion. Attempting to mark a nonexistent alert
     * for deletion results in a `NOT_FOUND` error.
     * @param \Google\Apps\AlertCenter\V1beta1\DeleteAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteAlert(\Google\Apps\AlertCenter\V1beta1\DeleteAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/DeleteAlert',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Restores, or "undeletes", an alert that was marked for deletion within the
     * past 30 days. Attempting to undelete an alert which was marked for deletion
     * over 30 days ago (which has been removed from the Alert Center database) or
     * a nonexistent alert returns a `NOT_FOUND` error. Attempting to
     * undelete an alert which has not been marked for deletion has no effect.
     * @param \Google\Apps\AlertCenter\V1beta1\UndeleteAlertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UndeleteAlert(\Google\Apps\AlertCenter\V1beta1\UndeleteAlertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/UndeleteAlert',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\Alert', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates new feedback for an alert. Attempting to create a feedback for
     * a non-existent alert returns `NOT_FOUND` error. Attempting to create a
     * feedback for an alert that is marked for deletion returns
     * `FAILED_PRECONDITION' error.
     * @param \Google\Apps\AlertCenter\V1beta1\CreateAlertFeedbackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAlertFeedback(\Google\Apps\AlertCenter\V1beta1\CreateAlertFeedbackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/CreateAlertFeedback',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\AlertFeedback', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all the feedback for an alert. Attempting to list feedbacks for
     * a non-existent alert returns `NOT_FOUND` error.
     * @param \Google\Apps\AlertCenter\V1beta1\ListAlertFeedbackRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAlertFeedback(\Google\Apps\AlertCenter\V1beta1\ListAlertFeedbackRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/ListAlertFeedback',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\ListAlertFeedbackResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the metadata of an alert. Attempting to get metadata for
     * a non-existent alert returns `NOT_FOUND` error.
     * @param \Google\Apps\AlertCenter\V1beta1\GetAlertMetadataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetAlertMetadata(\Google\Apps\AlertCenter\V1beta1\GetAlertMetadataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/GetAlertMetadata',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\AlertMetadata', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns customer-level settings.
     * @param \Google\Apps\AlertCenter\V1beta1\GetSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSettings(\Google\Apps\AlertCenter\V1beta1\GetSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/GetSettings',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\Settings', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the customer-level settings.
     * @param \Google\Apps\AlertCenter\V1beta1\UpdateSettingsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSettings(\Google\Apps\AlertCenter\V1beta1\UpdateSettingsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/UpdateSettings',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\Settings', 'decode'],
        $metadata, $options);
    }

    /**
     * Performs batch delete operation on alerts.
     * @param \Google\Apps\AlertCenter\V1beta1\BatchDeleteAlertsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchDeleteAlerts(\Google\Apps\AlertCenter\V1beta1\BatchDeleteAlertsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/BatchDeleteAlerts',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\BatchDeleteAlertsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Performs batch undelete operation on alerts.
     * @param \Google\Apps\AlertCenter\V1beta1\BatchUndeleteAlertsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BatchUndeleteAlerts(\Google\Apps\AlertCenter\V1beta1\BatchUndeleteAlertsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.apps.alertcenter.v1beta1.AlertCenterService/BatchUndeleteAlerts',
        $argument,
        ['\Google\Apps\AlertCenter\V1beta1\BatchUndeleteAlertsResponse', 'decode'],
        $metadata, $options);
    }

}
