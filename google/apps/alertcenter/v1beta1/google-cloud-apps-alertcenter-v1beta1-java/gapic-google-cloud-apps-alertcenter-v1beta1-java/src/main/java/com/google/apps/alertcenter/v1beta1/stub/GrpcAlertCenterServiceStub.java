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
import com.google.api.gax.core.BackgroundResourceAggregation;
import com.google.api.gax.grpc.GrpcCallSettings;
import com.google.api.gax.grpc.GrpcStubCallableFactory;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.RequestParamsExtractor;
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
import com.google.common.collect.ImmutableMap;
import com.google.longrunning.stub.GrpcOperationsStub;
import com.google.protobuf.Empty;
import io.grpc.MethodDescriptor;
import io.grpc.protobuf.ProtoUtils;
import java.io.IOException;
import java.util.Map;
import java.util.concurrent.TimeUnit;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * gRPC stub implementation for the AlertCenterService service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@BetaApi
@Generated("by gapic-generator-java")
public class GrpcAlertCenterServiceStub extends AlertCenterServiceStub {
  private static final MethodDescriptor<ListAlertsRequest, ListAlertsResponse>
      listAlertsMethodDescriptor =
          MethodDescriptor.<ListAlertsRequest, ListAlertsResponse>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.apps.alertcenter.v1beta1.AlertCenterService/ListAlerts")
              .setRequestMarshaller(ProtoUtils.marshaller(ListAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(ListAlertsResponse.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<GetAlertRequest, Alert> getAlertMethodDescriptor =
      MethodDescriptor.<GetAlertRequest, Alert>newBuilder()
          .setType(MethodDescriptor.MethodType.UNARY)
          .setFullMethodName("google.apps.alertcenter.v1beta1.AlertCenterService/GetAlert")
          .setRequestMarshaller(ProtoUtils.marshaller(GetAlertRequest.getDefaultInstance()))
          .setResponseMarshaller(ProtoUtils.marshaller(Alert.getDefaultInstance()))
          .build();

  private static final MethodDescriptor<DeleteAlertRequest, Empty> deleteAlertMethodDescriptor =
      MethodDescriptor.<DeleteAlertRequest, Empty>newBuilder()
          .setType(MethodDescriptor.MethodType.UNARY)
          .setFullMethodName("google.apps.alertcenter.v1beta1.AlertCenterService/DeleteAlert")
          .setRequestMarshaller(ProtoUtils.marshaller(DeleteAlertRequest.getDefaultInstance()))
          .setResponseMarshaller(ProtoUtils.marshaller(Empty.getDefaultInstance()))
          .build();

  private static final MethodDescriptor<UndeleteAlertRequest, Alert> undeleteAlertMethodDescriptor =
      MethodDescriptor.<UndeleteAlertRequest, Alert>newBuilder()
          .setType(MethodDescriptor.MethodType.UNARY)
          .setFullMethodName("google.apps.alertcenter.v1beta1.AlertCenterService/UndeleteAlert")
          .setRequestMarshaller(ProtoUtils.marshaller(UndeleteAlertRequest.getDefaultInstance()))
          .setResponseMarshaller(ProtoUtils.marshaller(Alert.getDefaultInstance()))
          .build();

  private static final MethodDescriptor<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackMethodDescriptor =
          MethodDescriptor.<CreateAlertFeedbackRequest, AlertFeedback>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/CreateAlertFeedback")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(CreateAlertFeedbackRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(AlertFeedback.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackMethodDescriptor =
          MethodDescriptor.<ListAlertFeedbackRequest, ListAlertFeedbackResponse>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/ListAlertFeedback")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(ListAlertFeedbackRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(ListAlertFeedbackResponse.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<GetAlertMetadataRequest, AlertMetadata>
      getAlertMetadataMethodDescriptor =
          MethodDescriptor.<GetAlertMetadataRequest, AlertMetadata>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/GetAlertMetadata")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(GetAlertMetadataRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(AlertMetadata.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<GetSettingsRequest, Settings> getSettingsMethodDescriptor =
      MethodDescriptor.<GetSettingsRequest, Settings>newBuilder()
          .setType(MethodDescriptor.MethodType.UNARY)
          .setFullMethodName("google.apps.alertcenter.v1beta1.AlertCenterService/GetSettings")
          .setRequestMarshaller(ProtoUtils.marshaller(GetSettingsRequest.getDefaultInstance()))
          .setResponseMarshaller(ProtoUtils.marshaller(Settings.getDefaultInstance()))
          .build();

  private static final MethodDescriptor<UpdateSettingsRequest, Settings>
      updateSettingsMethodDescriptor =
          MethodDescriptor.<UpdateSettingsRequest, Settings>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/UpdateSettings")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(UpdateSettingsRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(Settings.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsMethodDescriptor =
          MethodDescriptor.<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/BatchDeleteAlerts")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(BatchDeleteAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(BatchDeleteAlertsResponse.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsMethodDescriptor =
          MethodDescriptor.<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.apps.alertcenter.v1beta1.AlertCenterService/BatchUndeleteAlerts")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(BatchUndeleteAlertsRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(BatchUndeleteAlertsResponse.getDefaultInstance()))
              .build();

  private final UnaryCallable<ListAlertsRequest, ListAlertsResponse> listAlertsCallable;
  private final UnaryCallable<ListAlertsRequest, ListAlertsPagedResponse> listAlertsPagedCallable;
  private final UnaryCallable<GetAlertRequest, Alert> getAlertCallable;
  private final UnaryCallable<DeleteAlertRequest, Empty> deleteAlertCallable;
  private final UnaryCallable<UndeleteAlertRequest, Alert> undeleteAlertCallable;
  private final UnaryCallable<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackCallable;
  private final UnaryCallable<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackCallable;
  private final UnaryCallable<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataCallable;
  private final UnaryCallable<GetSettingsRequest, Settings> getSettingsCallable;
  private final UnaryCallable<UpdateSettingsRequest, Settings> updateSettingsCallable;
  private final UnaryCallable<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsCallable;
  private final UnaryCallable<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsCallable;

  private final BackgroundResource backgroundResources;
  private final GrpcOperationsStub operationsStub;
  private final GrpcStubCallableFactory callableFactory;

  public static final GrpcAlertCenterServiceStub create(AlertCenterServiceStubSettings settings)
      throws IOException {
    return new GrpcAlertCenterServiceStub(settings, ClientContext.create(settings));
  }

  public static final GrpcAlertCenterServiceStub create(ClientContext clientContext)
      throws IOException {
    return new GrpcAlertCenterServiceStub(
        AlertCenterServiceStubSettings.newBuilder().build(), clientContext);
  }

  public static final GrpcAlertCenterServiceStub create(
      ClientContext clientContext, GrpcStubCallableFactory callableFactory) throws IOException {
    return new GrpcAlertCenterServiceStub(
        AlertCenterServiceStubSettings.newBuilder().build(), clientContext, callableFactory);
  }

  /**
   * Constructs an instance of GrpcAlertCenterServiceStub, using the given settings. This is
   * protected so that it is easy to make a subclass, but otherwise, the static factory methods
   * should be preferred.
   */
  protected GrpcAlertCenterServiceStub(
      AlertCenterServiceStubSettings settings, ClientContext clientContext) throws IOException {
    this(settings, clientContext, new GrpcAlertCenterServiceCallableFactory());
  }

  /**
   * Constructs an instance of GrpcAlertCenterServiceStub, using the given settings. This is
   * protected so that it is easy to make a subclass, but otherwise, the static factory methods
   * should be preferred.
   */
  protected GrpcAlertCenterServiceStub(
      AlertCenterServiceStubSettings settings,
      ClientContext clientContext,
      GrpcStubCallableFactory callableFactory)
      throws IOException {
    this.callableFactory = callableFactory;
    this.operationsStub = GrpcOperationsStub.create(clientContext, callableFactory);

    GrpcCallSettings<ListAlertsRequest, ListAlertsResponse> listAlertsTransportSettings =
        GrpcCallSettings.<ListAlertsRequest, ListAlertsResponse>newBuilder()
            .setMethodDescriptor(listAlertsMethodDescriptor)
            .build();
    GrpcCallSettings<GetAlertRequest, Alert> getAlertTransportSettings =
        GrpcCallSettings.<GetAlertRequest, Alert>newBuilder()
            .setMethodDescriptor(getAlertMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<GetAlertRequest>() {
                  @Override
                  public Map<String, String> extract(GetAlertRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("alert_id", String.valueOf(request.getAlertId()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<DeleteAlertRequest, Empty> deleteAlertTransportSettings =
        GrpcCallSettings.<DeleteAlertRequest, Empty>newBuilder()
            .setMethodDescriptor(deleteAlertMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<DeleteAlertRequest>() {
                  @Override
                  public Map<String, String> extract(DeleteAlertRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("alert_id", String.valueOf(request.getAlertId()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<UndeleteAlertRequest, Alert> undeleteAlertTransportSettings =
        GrpcCallSettings.<UndeleteAlertRequest, Alert>newBuilder()
            .setMethodDescriptor(undeleteAlertMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<UndeleteAlertRequest>() {
                  @Override
                  public Map<String, String> extract(UndeleteAlertRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("alert_id", String.valueOf(request.getAlertId()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<CreateAlertFeedbackRequest, AlertFeedback>
        createAlertFeedbackTransportSettings =
            GrpcCallSettings.<CreateAlertFeedbackRequest, AlertFeedback>newBuilder()
                .setMethodDescriptor(createAlertFeedbackMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<CreateAlertFeedbackRequest>() {
                      @Override
                      public Map<String, String> extract(CreateAlertFeedbackRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("alert_id", String.valueOf(request.getAlertId()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
        listAlertFeedbackTransportSettings =
            GrpcCallSettings.<ListAlertFeedbackRequest, ListAlertFeedbackResponse>newBuilder()
                .setMethodDescriptor(listAlertFeedbackMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<ListAlertFeedbackRequest>() {
                      @Override
                      public Map<String, String> extract(ListAlertFeedbackRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("alert_id", String.valueOf(request.getAlertId()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataTransportSettings =
        GrpcCallSettings.<GetAlertMetadataRequest, AlertMetadata>newBuilder()
            .setMethodDescriptor(getAlertMetadataMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<GetAlertMetadataRequest>() {
                  @Override
                  public Map<String, String> extract(GetAlertMetadataRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("alert_id", String.valueOf(request.getAlertId()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<GetSettingsRequest, Settings> getSettingsTransportSettings =
        GrpcCallSettings.<GetSettingsRequest, Settings>newBuilder()
            .setMethodDescriptor(getSettingsMethodDescriptor)
            .build();
    GrpcCallSettings<UpdateSettingsRequest, Settings> updateSettingsTransportSettings =
        GrpcCallSettings.<UpdateSettingsRequest, Settings>newBuilder()
            .setMethodDescriptor(updateSettingsMethodDescriptor)
            .build();
    GrpcCallSettings<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
        batchDeleteAlertsTransportSettings =
            GrpcCallSettings.<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>newBuilder()
                .setMethodDescriptor(batchDeleteAlertsMethodDescriptor)
                .build();
    GrpcCallSettings<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
        batchUndeleteAlertsTransportSettings =
            GrpcCallSettings.<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>newBuilder()
                .setMethodDescriptor(batchUndeleteAlertsMethodDescriptor)
                .build();

    this.listAlertsCallable =
        callableFactory.createUnaryCallable(
            listAlertsTransportSettings, settings.listAlertsSettings(), clientContext);
    this.listAlertsPagedCallable =
        callableFactory.createPagedCallable(
            listAlertsTransportSettings, settings.listAlertsSettings(), clientContext);
    this.getAlertCallable =
        callableFactory.createUnaryCallable(
            getAlertTransportSettings, settings.getAlertSettings(), clientContext);
    this.deleteAlertCallable =
        callableFactory.createUnaryCallable(
            deleteAlertTransportSettings, settings.deleteAlertSettings(), clientContext);
    this.undeleteAlertCallable =
        callableFactory.createUnaryCallable(
            undeleteAlertTransportSettings, settings.undeleteAlertSettings(), clientContext);
    this.createAlertFeedbackCallable =
        callableFactory.createUnaryCallable(
            createAlertFeedbackTransportSettings,
            settings.createAlertFeedbackSettings(),
            clientContext);
    this.listAlertFeedbackCallable =
        callableFactory.createUnaryCallable(
            listAlertFeedbackTransportSettings,
            settings.listAlertFeedbackSettings(),
            clientContext);
    this.getAlertMetadataCallable =
        callableFactory.createUnaryCallable(
            getAlertMetadataTransportSettings, settings.getAlertMetadataSettings(), clientContext);
    this.getSettingsCallable =
        callableFactory.createUnaryCallable(
            getSettingsTransportSettings, settings.getSettingsSettings(), clientContext);
    this.updateSettingsCallable =
        callableFactory.createUnaryCallable(
            updateSettingsTransportSettings, settings.updateSettingsSettings(), clientContext);
    this.batchDeleteAlertsCallable =
        callableFactory.createUnaryCallable(
            batchDeleteAlertsTransportSettings,
            settings.batchDeleteAlertsSettings(),
            clientContext);
    this.batchUndeleteAlertsCallable =
        callableFactory.createUnaryCallable(
            batchUndeleteAlertsTransportSettings,
            settings.batchUndeleteAlertsSettings(),
            clientContext);

    this.backgroundResources =
        new BackgroundResourceAggregation(clientContext.getBackgroundResources());
  }

  public GrpcOperationsStub getOperationsStub() {
    return operationsStub;
  }

  @Override
  public UnaryCallable<ListAlertsRequest, ListAlertsResponse> listAlertsCallable() {
    return listAlertsCallable;
  }

  @Override
  public UnaryCallable<ListAlertsRequest, ListAlertsPagedResponse> listAlertsPagedCallable() {
    return listAlertsPagedCallable;
  }

  @Override
  public UnaryCallable<GetAlertRequest, Alert> getAlertCallable() {
    return getAlertCallable;
  }

  @Override
  public UnaryCallable<DeleteAlertRequest, Empty> deleteAlertCallable() {
    return deleteAlertCallable;
  }

  @Override
  public UnaryCallable<UndeleteAlertRequest, Alert> undeleteAlertCallable() {
    return undeleteAlertCallable;
  }

  @Override
  public UnaryCallable<CreateAlertFeedbackRequest, AlertFeedback> createAlertFeedbackCallable() {
    return createAlertFeedbackCallable;
  }

  @Override
  public UnaryCallable<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackCallable() {
    return listAlertFeedbackCallable;
  }

  @Override
  public UnaryCallable<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataCallable() {
    return getAlertMetadataCallable;
  }

  @Override
  public UnaryCallable<GetSettingsRequest, Settings> getSettingsCallable() {
    return getSettingsCallable;
  }

  @Override
  public UnaryCallable<UpdateSettingsRequest, Settings> updateSettingsCallable() {
    return updateSettingsCallable;
  }

  @Override
  public UnaryCallable<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsCallable() {
    return batchDeleteAlertsCallable;
  }

  @Override
  public UnaryCallable<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsCallable() {
    return batchUndeleteAlertsCallable;
  }

  @Override
  public final void close() {
    shutdown();
  }

  @Override
  public void shutdown() {
    backgroundResources.shutdown();
  }

  @Override
  public boolean isShutdown() {
    return backgroundResources.isShutdown();
  }

  @Override
  public boolean isTerminated() {
    return backgroundResources.isTerminated();
  }

  @Override
  public void shutdownNow() {
    backgroundResources.shutdownNow();
  }

  @Override
  public boolean awaitTermination(long duration, TimeUnit unit) throws InterruptedException {
    return backgroundResources.awaitTermination(duration, unit);
  }
}
