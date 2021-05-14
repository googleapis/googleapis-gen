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

package com.google.apps.alertcenter.v1beta1;

import com.google.api.core.BetaApi;
import com.google.apps.alertcenter.v1beta1.AlertCenterServiceGrpc.AlertCenterServiceImplBase;
import com.google.protobuf.AbstractMessage;
import com.google.protobuf.Empty;
import io.grpc.stub.StreamObserver;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import java.util.Queue;
import javax.annotation.Generated;

@BetaApi
@Generated("by gapic-generator-java")
public class MockAlertCenterServiceImpl extends AlertCenterServiceImplBase {
  private List<AbstractMessage> requests;
  private Queue<Object> responses;

  public MockAlertCenterServiceImpl() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  public List<AbstractMessage> getRequests() {
    return requests;
  }

  public void addResponse(AbstractMessage response) {
    responses.add(response);
  }

  public void setResponses(List<AbstractMessage> responses) {
    this.responses = new LinkedList<Object>(responses);
  }

  public void addException(Exception exception) {
    responses.add(exception);
  }

  public void reset() {
    requests = new ArrayList<>();
    responses = new LinkedList<>();
  }

  @Override
  public void listAlerts(
      ListAlertsRequest request, StreamObserver<ListAlertsResponse> responseObserver) {
    Object response = responses.poll();
    if (response instanceof ListAlertsResponse) {
      requests.add(request);
      responseObserver.onNext(((ListAlertsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method ListAlerts, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  ListAlertsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getAlert(GetAlertRequest request, StreamObserver<Alert> responseObserver) {
    Object response = responses.poll();
    if (response instanceof Alert) {
      requests.add(request);
      responseObserver.onNext(((Alert) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetAlert, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  Alert.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void deleteAlert(DeleteAlertRequest request, StreamObserver<Empty> responseObserver) {
    Object response = responses.poll();
    if (response instanceof Empty) {
      requests.add(request);
      responseObserver.onNext(((Empty) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method DeleteAlert, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  Empty.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void undeleteAlert(UndeleteAlertRequest request, StreamObserver<Alert> responseObserver) {
    Object response = responses.poll();
    if (response instanceof Alert) {
      requests.add(request);
      responseObserver.onNext(((Alert) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method UndeleteAlert, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  Alert.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void createAlertFeedback(
      CreateAlertFeedbackRequest request, StreamObserver<AlertFeedback> responseObserver) {
    Object response = responses.poll();
    if (response instanceof AlertFeedback) {
      requests.add(request);
      responseObserver.onNext(((AlertFeedback) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method CreateAlertFeedback, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  AlertFeedback.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void listAlertFeedback(
      ListAlertFeedbackRequest request,
      StreamObserver<ListAlertFeedbackResponse> responseObserver) {
    Object response = responses.poll();
    if (response instanceof ListAlertFeedbackResponse) {
      requests.add(request);
      responseObserver.onNext(((ListAlertFeedbackResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method ListAlertFeedback, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  ListAlertFeedbackResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getAlertMetadata(
      GetAlertMetadataRequest request, StreamObserver<AlertMetadata> responseObserver) {
    Object response = responses.poll();
    if (response instanceof AlertMetadata) {
      requests.add(request);
      responseObserver.onNext(((AlertMetadata) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetAlertMetadata, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  AlertMetadata.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void getSettings(GetSettingsRequest request, StreamObserver<Settings> responseObserver) {
    Object response = responses.poll();
    if (response instanceof Settings) {
      requests.add(request);
      responseObserver.onNext(((Settings) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method GetSettings, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  Settings.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void updateSettings(
      UpdateSettingsRequest request, StreamObserver<Settings> responseObserver) {
    Object response = responses.poll();
    if (response instanceof Settings) {
      requests.add(request);
      responseObserver.onNext(((Settings) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method UpdateSettings, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  Settings.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void batchDeleteAlerts(
      BatchDeleteAlertsRequest request,
      StreamObserver<BatchDeleteAlertsResponse> responseObserver) {
    Object response = responses.poll();
    if (response instanceof BatchDeleteAlertsResponse) {
      requests.add(request);
      responseObserver.onNext(((BatchDeleteAlertsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method BatchDeleteAlerts, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  BatchDeleteAlertsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }

  @Override
  public void batchUndeleteAlerts(
      BatchUndeleteAlertsRequest request,
      StreamObserver<BatchUndeleteAlertsResponse> responseObserver) {
    Object response = responses.poll();
    if (response instanceof BatchUndeleteAlertsResponse) {
      requests.add(request);
      responseObserver.onNext(((BatchUndeleteAlertsResponse) response));
      responseObserver.onCompleted();
    } else if (response instanceof Exception) {
      responseObserver.onError(((Exception) response));
    } else {
      responseObserver.onError(
          new IllegalArgumentException(
              String.format(
                  "Unrecognized response type %s for method BatchUndeleteAlerts, expected %s or %s",
                  response == null ? "null" : response.getClass().getName(),
                  BatchUndeleteAlertsResponse.class.getName(),
                  Exception.class.getName())));
    }
  }
}
