/*
 * Copyright 2020 Google LLC
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

package com.google.cloud.retail.v2beta.stub;

import com.google.api.HttpBody;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.core.BackgroundResourceAggregation;
import com.google.api.gax.grpc.GrpcCallSettings;
import com.google.api.gax.grpc.GrpcStubCallableFactory;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.OperationCallable;
import com.google.api.gax.rpc.RequestParamsExtractor;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.cloud.retail.v2beta.CollectUserEventRequest;
import com.google.cloud.retail.v2beta.ImportMetadata;
import com.google.cloud.retail.v2beta.ImportUserEventsRequest;
import com.google.cloud.retail.v2beta.ImportUserEventsResponse;
import com.google.cloud.retail.v2beta.PurgeMetadata;
import com.google.cloud.retail.v2beta.PurgeUserEventsRequest;
import com.google.cloud.retail.v2beta.PurgeUserEventsResponse;
import com.google.cloud.retail.v2beta.RejoinUserEventsMetadata;
import com.google.cloud.retail.v2beta.RejoinUserEventsRequest;
import com.google.cloud.retail.v2beta.RejoinUserEventsResponse;
import com.google.cloud.retail.v2beta.UserEvent;
import com.google.cloud.retail.v2beta.WriteUserEventRequest;
import com.google.common.collect.ImmutableMap;
import com.google.longrunning.Operation;
import com.google.longrunning.stub.GrpcOperationsStub;
import io.grpc.MethodDescriptor;
import io.grpc.protobuf.ProtoUtils;
import java.io.IOException;
import java.util.Map;
import java.util.concurrent.TimeUnit;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * gRPC stub implementation for the UserEventService service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@BetaApi
@Generated("by gapic-generator-java")
public class GrpcUserEventServiceStub extends UserEventServiceStub {
  private static final MethodDescriptor<WriteUserEventRequest, UserEvent>
      writeUserEventMethodDescriptor =
          MethodDescriptor.<WriteUserEventRequest, UserEvent>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.cloud.retail.v2beta.UserEventService/WriteUserEvent")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(WriteUserEventRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(UserEvent.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<CollectUserEventRequest, HttpBody>
      collectUserEventMethodDescriptor =
          MethodDescriptor.<CollectUserEventRequest, HttpBody>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.cloud.retail.v2beta.UserEventService/CollectUserEvent")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(CollectUserEventRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(HttpBody.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<PurgeUserEventsRequest, Operation>
      purgeUserEventsMethodDescriptor =
          MethodDescriptor.<PurgeUserEventsRequest, Operation>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.cloud.retail.v2beta.UserEventService/PurgeUserEvents")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(PurgeUserEventsRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(Operation.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<ImportUserEventsRequest, Operation>
      importUserEventsMethodDescriptor =
          MethodDescriptor.<ImportUserEventsRequest, Operation>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.cloud.retail.v2beta.UserEventService/ImportUserEvents")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(ImportUserEventsRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(Operation.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<RejoinUserEventsRequest, Operation>
      rejoinUserEventsMethodDescriptor =
          MethodDescriptor.<RejoinUserEventsRequest, Operation>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName("google.cloud.retail.v2beta.UserEventService/RejoinUserEvents")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(RejoinUserEventsRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(Operation.getDefaultInstance()))
              .build();

  private final UnaryCallable<WriteUserEventRequest, UserEvent> writeUserEventCallable;
  private final UnaryCallable<CollectUserEventRequest, HttpBody> collectUserEventCallable;
  private final UnaryCallable<PurgeUserEventsRequest, Operation> purgeUserEventsCallable;
  private final OperationCallable<PurgeUserEventsRequest, PurgeUserEventsResponse, PurgeMetadata>
      purgeUserEventsOperationCallable;
  private final UnaryCallable<ImportUserEventsRequest, Operation> importUserEventsCallable;
  private final OperationCallable<ImportUserEventsRequest, ImportUserEventsResponse, ImportMetadata>
      importUserEventsOperationCallable;
  private final UnaryCallable<RejoinUserEventsRequest, Operation> rejoinUserEventsCallable;
  private final OperationCallable<
          RejoinUserEventsRequest, RejoinUserEventsResponse, RejoinUserEventsMetadata>
      rejoinUserEventsOperationCallable;

  private final BackgroundResource backgroundResources;
  private final GrpcOperationsStub operationsStub;
  private final GrpcStubCallableFactory callableFactory;

  public static final GrpcUserEventServiceStub create(UserEventServiceStubSettings settings)
      throws IOException {
    return new GrpcUserEventServiceStub(settings, ClientContext.create(settings));
  }

  public static final GrpcUserEventServiceStub create(ClientContext clientContext)
      throws IOException {
    return new GrpcUserEventServiceStub(
        UserEventServiceStubSettings.newBuilder().build(), clientContext);
  }

  public static final GrpcUserEventServiceStub create(
      ClientContext clientContext, GrpcStubCallableFactory callableFactory) throws IOException {
    return new GrpcUserEventServiceStub(
        UserEventServiceStubSettings.newBuilder().build(), clientContext, callableFactory);
  }

  /**
   * Constructs an instance of GrpcUserEventServiceStub, using the given settings. This is protected
   * so that it is easy to make a subclass, but otherwise, the static factory methods should be
   * preferred.
   */
  protected GrpcUserEventServiceStub(
      UserEventServiceStubSettings settings, ClientContext clientContext) throws IOException {
    this(settings, clientContext, new GrpcUserEventServiceCallableFactory());
  }

  /**
   * Constructs an instance of GrpcUserEventServiceStub, using the given settings. This is protected
   * so that it is easy to make a subclass, but otherwise, the static factory methods should be
   * preferred.
   */
  protected GrpcUserEventServiceStub(
      UserEventServiceStubSettings settings,
      ClientContext clientContext,
      GrpcStubCallableFactory callableFactory)
      throws IOException {
    this.callableFactory = callableFactory;
    this.operationsStub = GrpcOperationsStub.create(clientContext, callableFactory);

    GrpcCallSettings<WriteUserEventRequest, UserEvent> writeUserEventTransportSettings =
        GrpcCallSettings.<WriteUserEventRequest, UserEvent>newBuilder()
            .setMethodDescriptor(writeUserEventMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<WriteUserEventRequest>() {
                  @Override
                  public Map<String, String> extract(WriteUserEventRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("parent", String.valueOf(request.getParent()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<CollectUserEventRequest, HttpBody> collectUserEventTransportSettings =
        GrpcCallSettings.<CollectUserEventRequest, HttpBody>newBuilder()
            .setMethodDescriptor(collectUserEventMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<CollectUserEventRequest>() {
                  @Override
                  public Map<String, String> extract(CollectUserEventRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("parent", String.valueOf(request.getParent()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<PurgeUserEventsRequest, Operation> purgeUserEventsTransportSettings =
        GrpcCallSettings.<PurgeUserEventsRequest, Operation>newBuilder()
            .setMethodDescriptor(purgeUserEventsMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<PurgeUserEventsRequest>() {
                  @Override
                  public Map<String, String> extract(PurgeUserEventsRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("parent", String.valueOf(request.getParent()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<ImportUserEventsRequest, Operation> importUserEventsTransportSettings =
        GrpcCallSettings.<ImportUserEventsRequest, Operation>newBuilder()
            .setMethodDescriptor(importUserEventsMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<ImportUserEventsRequest>() {
                  @Override
                  public Map<String, String> extract(ImportUserEventsRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("parent", String.valueOf(request.getParent()));
                    return params.build();
                  }
                })
            .build();
    GrpcCallSettings<RejoinUserEventsRequest, Operation> rejoinUserEventsTransportSettings =
        GrpcCallSettings.<RejoinUserEventsRequest, Operation>newBuilder()
            .setMethodDescriptor(rejoinUserEventsMethodDescriptor)
            .setParamsExtractor(
                new RequestParamsExtractor<RejoinUserEventsRequest>() {
                  @Override
                  public Map<String, String> extract(RejoinUserEventsRequest request) {
                    ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                    params.put("parent", String.valueOf(request.getParent()));
                    return params.build();
                  }
                })
            .build();

    this.writeUserEventCallable =
        callableFactory.createUnaryCallable(
            writeUserEventTransportSettings, settings.writeUserEventSettings(), clientContext);
    this.collectUserEventCallable =
        callableFactory.createUnaryCallable(
            collectUserEventTransportSettings, settings.collectUserEventSettings(), clientContext);
    this.purgeUserEventsCallable =
        callableFactory.createUnaryCallable(
            purgeUserEventsTransportSettings, settings.purgeUserEventsSettings(), clientContext);
    this.purgeUserEventsOperationCallable =
        callableFactory.createOperationCallable(
            purgeUserEventsTransportSettings,
            settings.purgeUserEventsOperationSettings(),
            clientContext,
            operationsStub);
    this.importUserEventsCallable =
        callableFactory.createUnaryCallable(
            importUserEventsTransportSettings, settings.importUserEventsSettings(), clientContext);
    this.importUserEventsOperationCallable =
        callableFactory.createOperationCallable(
            importUserEventsTransportSettings,
            settings.importUserEventsOperationSettings(),
            clientContext,
            operationsStub);
    this.rejoinUserEventsCallable =
        callableFactory.createUnaryCallable(
            rejoinUserEventsTransportSettings, settings.rejoinUserEventsSettings(), clientContext);
    this.rejoinUserEventsOperationCallable =
        callableFactory.createOperationCallable(
            rejoinUserEventsTransportSettings,
            settings.rejoinUserEventsOperationSettings(),
            clientContext,
            operationsStub);

    this.backgroundResources =
        new BackgroundResourceAggregation(clientContext.getBackgroundResources());
  }

  public GrpcOperationsStub getOperationsStub() {
    return operationsStub;
  }

  public UnaryCallable<WriteUserEventRequest, UserEvent> writeUserEventCallable() {
    return writeUserEventCallable;
  }

  public UnaryCallable<CollectUserEventRequest, HttpBody> collectUserEventCallable() {
    return collectUserEventCallable;
  }

  public UnaryCallable<PurgeUserEventsRequest, Operation> purgeUserEventsCallable() {
    return purgeUserEventsCallable;
  }

  public OperationCallable<PurgeUserEventsRequest, PurgeUserEventsResponse, PurgeMetadata>
      purgeUserEventsOperationCallable() {
    return purgeUserEventsOperationCallable;
  }

  public UnaryCallable<ImportUserEventsRequest, Operation> importUserEventsCallable() {
    return importUserEventsCallable;
  }

  public OperationCallable<ImportUserEventsRequest, ImportUserEventsResponse, ImportMetadata>
      importUserEventsOperationCallable() {
    return importUserEventsOperationCallable;
  }

  public UnaryCallable<RejoinUserEventsRequest, Operation> rejoinUserEventsCallable() {
    return rejoinUserEventsCallable;
  }

  public OperationCallable<
          RejoinUserEventsRequest, RejoinUserEventsResponse, RejoinUserEventsMetadata>
      rejoinUserEventsOperationCallable() {
    return rejoinUserEventsOperationCallable;
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
