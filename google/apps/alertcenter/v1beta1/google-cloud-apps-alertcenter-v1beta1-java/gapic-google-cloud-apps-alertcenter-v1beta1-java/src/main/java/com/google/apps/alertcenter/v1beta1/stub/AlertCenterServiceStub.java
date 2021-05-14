/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package com.google.apps.alertcenter.v1beta1.stub;

import static com.google.apps.alertcenter.v1beta1.AlertCenterServiceClient.ListAlertsPagedResponse;

import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.apps.alertcenter.v1beta1.Alert;
import com.google.apps.alertcenter.v1beta1.AlertFeedback;
import com.google.apps.alertcenter.v1beta1.AlertMetadata;
import com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsRequest;
import com.google.apps.alertcenter.v1beta1.BatchDeleteAlertsResponse;
import com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsRequest;
import com.google.apps.alertcenter.v1beta1.BatchUndeleteAlertsResponse;
import com.google.apps.alertcenter.v1beta1.CreateAlertFeedbackRequest;
import com.google.apps.alertcenter.v1beta1.DeleteAlertRequest;
import com.google.apps.alertcenter.v1beta1.GetAlertMetadataRequest;
import com.google.apps.alertcenter.v1beta1.GetAlertRequest;
import com.google.apps.alertcenter.v1beta1.GetSettingsRequest;
import com.google.apps.alertcenter.v1beta1.ListAlertFeedbackRequest;
import com.google.apps.alertcenter.v1beta1.ListAlertFeedbackResponse;
import com.google.apps.alertcenter.v1beta1.ListAlertsRequest;
import com.google.apps.alertcenter.v1beta1.ListAlertsResponse;
import com.google.apps.alertcenter.v1beta1.Settings;
import com.google.apps.alertcenter.v1beta1.UndeleteAlertRequest;
import com.google.apps.alertcenter.v1beta1.UpdateSettingsRequest;
import com.google.protobuf.Empty;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Base stub class for the AlertCenterService service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@BetaApi
@Generated("by gapic-generator-java")
public abstract class AlertCenterServiceStub implements BackgroundResource {

  public UnaryCallable<ListAlertsRequest, ListAlertsPagedResponse> listAlertsPagedCallable() {
    throw new UnsupportedOperationException("Not implemented: listAlertsPagedCallable()");
  }

  public UnaryCallable<ListAlertsRequest, ListAlertsResponse> listAlertsCallable() {
    throw new UnsupportedOperationException("Not implemented: listAlertsCallable()");
  }

  public UnaryCallable<GetAlertRequest, Alert> getAlertCallable() {
    throw new UnsupportedOperationException("Not implemented: getAlertCallable()");
  }

  public UnaryCallable<DeleteAlertRequest, Empty> deleteAlertCallable() {
    throw new UnsupportedOperationException("Not implemented: deleteAlertCallable()");
  }

  public UnaryCallable<UndeleteAlertRequest, Alert> undeleteAlertCallable() {
    throw new UnsupportedOperationException("Not implemented: undeleteAlertCallable()");
  }

  public UnaryCallable<CreateAlertFeedbackRequest, AlertFeedback> createAlertFeedbackCallable() {
    throw new UnsupportedOperationException("Not implemented: createAlertFeedbackCallable()");
  }

  public UnaryCallable<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackCallable() {
    throw new UnsupportedOperationException("Not implemented: listAlertFeedbackCallable()");
  }

  public UnaryCallable<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataCallable() {
    throw new UnsupportedOperationException("Not implemented: getAlertMetadataCallable()");
  }

  public UnaryCallable<GetSettingsRequest, Settings> getSettingsCallable() {
    throw new UnsupportedOperationException("Not implemented: getSettingsCallable()");
  }

  public UnaryCallable<UpdateSettingsRequest, Settings> updateSettingsCallable() {
    throw new UnsupportedOperationException("Not implemented: updateSettingsCallable()");
  }

  public UnaryCallable<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsCallable() {
    throw new UnsupportedOperationException("Not implemented: batchDeleteAlertsCallable()");
  }

  public UnaryCallable<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsCallable() {
    throw new UnsupportedOperationException("Not implemented: batchUndeleteAlertsCallable()");
  }

  @Override
  public abstract void close();
}
