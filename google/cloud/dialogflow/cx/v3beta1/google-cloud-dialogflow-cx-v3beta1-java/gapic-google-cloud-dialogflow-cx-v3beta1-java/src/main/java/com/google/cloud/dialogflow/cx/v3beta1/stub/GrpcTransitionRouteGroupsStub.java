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

package com.google.cloud.dialogflow.cx.v3beta1.stub;

import static com.google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroupsClient.ListTransitionRouteGroupsPagedResponse;

import com.google.api.core.BetaApi;
import com.google.api.gax.core.BackgroundResource;
import com.google.api.gax.core.BackgroundResourceAggregation;
import com.google.api.gax.grpc.GrpcCallSettings;
import com.google.api.gax.grpc.GrpcStubCallableFactory;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.RequestParamsExtractor;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.cloud.dialogflow.cx.v3beta1.CreateTransitionRouteGroupRequest;
import com.google.cloud.dialogflow.cx.v3beta1.DeleteTransitionRouteGroupRequest;
import com.google.cloud.dialogflow.cx.v3beta1.GetTransitionRouteGroupRequest;
import com.google.cloud.dialogflow.cx.v3beta1.ListTransitionRouteGroupsRequest;
import com.google.cloud.dialogflow.cx.v3beta1.ListTransitionRouteGroupsResponse;
import com.google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroup;
import com.google.cloud.dialogflow.cx.v3beta1.UpdateTransitionRouteGroupRequest;
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
 * gRPC stub implementation for the TransitionRouteGroups service API.
 *
 * <p>This class is for advanced usage and reflects the underlying API directly.
 */
@BetaApi
@Generated("by gapic-generator-java")
public class GrpcTransitionRouteGroupsStub extends TransitionRouteGroupsStub {
  private static final MethodDescriptor<
          ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>
      listTransitionRouteGroupsMethodDescriptor =
          MethodDescriptor
              .<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups/ListTransitionRouteGroups")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(ListTransitionRouteGroupsRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(ListTransitionRouteGroupsResponse.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<GetTransitionRouteGroupRequest, TransitionRouteGroup>
      getTransitionRouteGroupMethodDescriptor =
          MethodDescriptor.<GetTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups/GetTransitionRouteGroup")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(GetTransitionRouteGroupRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(TransitionRouteGroup.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<CreateTransitionRouteGroupRequest, TransitionRouteGroup>
      createTransitionRouteGroupMethodDescriptor =
          MethodDescriptor.<CreateTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups/CreateTransitionRouteGroup")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(CreateTransitionRouteGroupRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(TransitionRouteGroup.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>
      updateTransitionRouteGroupMethodDescriptor =
          MethodDescriptor.<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups/UpdateTransitionRouteGroup")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(UpdateTransitionRouteGroupRequest.getDefaultInstance()))
              .setResponseMarshaller(
                  ProtoUtils.marshaller(TransitionRouteGroup.getDefaultInstance()))
              .build();

  private static final MethodDescriptor<DeleteTransitionRouteGroupRequest, Empty>
      deleteTransitionRouteGroupMethodDescriptor =
          MethodDescriptor.<DeleteTransitionRouteGroupRequest, Empty>newBuilder()
              .setType(MethodDescriptor.MethodType.UNARY)
              .setFullMethodName(
                  "google.cloud.dialogflow.cx.v3beta1.TransitionRouteGroups/DeleteTransitionRouteGroup")
              .setRequestMarshaller(
                  ProtoUtils.marshaller(DeleteTransitionRouteGroupRequest.getDefaultInstance()))
              .setResponseMarshaller(ProtoUtils.marshaller(Empty.getDefaultInstance()))
              .build();

  private final UnaryCallable<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>
      listTransitionRouteGroupsCallable;
  private final UnaryCallable<
          ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsPagedResponse>
      listTransitionRouteGroupsPagedCallable;
  private final UnaryCallable<GetTransitionRouteGroupRequest, TransitionRouteGroup>
      getTransitionRouteGroupCallable;
  private final UnaryCallable<CreateTransitionRouteGroupRequest, TransitionRouteGroup>
      createTransitionRouteGroupCallable;
  private final UnaryCallable<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>
      updateTransitionRouteGroupCallable;
  private final UnaryCallable<DeleteTransitionRouteGroupRequest, Empty>
      deleteTransitionRouteGroupCallable;

  private final BackgroundResource backgroundResources;
  private final GrpcOperationsStub operationsStub;
  private final GrpcStubCallableFactory callableFactory;

  public static final GrpcTransitionRouteGroupsStub create(
      TransitionRouteGroupsStubSettings settings) throws IOException {
    return new GrpcTransitionRouteGroupsStub(settings, ClientContext.create(settings));
  }

  public static final GrpcTransitionRouteGroupsStub create(ClientContext clientContext)
      throws IOException {
    return new GrpcTransitionRouteGroupsStub(
        TransitionRouteGroupsStubSettings.newBuilder().build(), clientContext);
  }

  public static final GrpcTransitionRouteGroupsStub create(
      ClientContext clientContext, GrpcStubCallableFactory callableFactory) throws IOException {
    return new GrpcTransitionRouteGroupsStub(
        TransitionRouteGroupsStubSettings.newBuilder().build(), clientContext, callableFactory);
  }

  /**
   * Constructs an instance of GrpcTransitionRouteGroupsStub, using the given settings. This is
   * protected so that it is easy to make a subclass, but otherwise, the static factory methods
   * should be preferred.
   */
  protected GrpcTransitionRouteGroupsStub(
      TransitionRouteGroupsStubSettings settings, ClientContext clientContext) throws IOException {
    this(settings, clientContext, new GrpcTransitionRouteGroupsCallableFactory());
  }

  /**
   * Constructs an instance of GrpcTransitionRouteGroupsStub, using the given settings. This is
   * protected so that it is easy to make a subclass, but otherwise, the static factory methods
   * should be preferred.
   */
  protected GrpcTransitionRouteGroupsStub(
      TransitionRouteGroupsStubSettings settings,
      ClientContext clientContext,
      GrpcStubCallableFactory callableFactory)
      throws IOException {
    this.callableFactory = callableFactory;
    this.operationsStub = GrpcOperationsStub.create(clientContext, callableFactory);

    GrpcCallSettings<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>
        listTransitionRouteGroupsTransportSettings =
            GrpcCallSettings
                .<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>newBuilder()
                .setMethodDescriptor(listTransitionRouteGroupsMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<ListTransitionRouteGroupsRequest>() {
                      @Override
                      public Map<String, String> extract(ListTransitionRouteGroupsRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("parent", String.valueOf(request.getParent()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<GetTransitionRouteGroupRequest, TransitionRouteGroup>
        getTransitionRouteGroupTransportSettings =
            GrpcCallSettings.<GetTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
                .setMethodDescriptor(getTransitionRouteGroupMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<GetTransitionRouteGroupRequest>() {
                      @Override
                      public Map<String, String> extract(GetTransitionRouteGroupRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("name", String.valueOf(request.getName()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<CreateTransitionRouteGroupRequest, TransitionRouteGroup>
        createTransitionRouteGroupTransportSettings =
            GrpcCallSettings.<CreateTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
                .setMethodDescriptor(createTransitionRouteGroupMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<CreateTransitionRouteGroupRequest>() {
                      @Override
                      public Map<String, String> extract(
                          CreateTransitionRouteGroupRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("parent", String.valueOf(request.getParent()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>
        updateTransitionRouteGroupTransportSettings =
            GrpcCallSettings.<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>newBuilder()
                .setMethodDescriptor(updateTransitionRouteGroupMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<UpdateTransitionRouteGroupRequest>() {
                      @Override
                      public Map<String, String> extract(
                          UpdateTransitionRouteGroupRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put(
                            "transition_route_group.name",
                            String.valueOf(request.getTransitionRouteGroup().getName()));
                        return params.build();
                      }
                    })
                .build();
    GrpcCallSettings<DeleteTransitionRouteGroupRequest, Empty>
        deleteTransitionRouteGroupTransportSettings =
            GrpcCallSettings.<DeleteTransitionRouteGroupRequest, Empty>newBuilder()
                .setMethodDescriptor(deleteTransitionRouteGroupMethodDescriptor)
                .setParamsExtractor(
                    new RequestParamsExtractor<DeleteTransitionRouteGroupRequest>() {
                      @Override
                      public Map<String, String> extract(
                          DeleteTransitionRouteGroupRequest request) {
                        ImmutableMap.Builder<String, String> params = ImmutableMap.builder();
                        params.put("name", String.valueOf(request.getName()));
                        return params.build();
                      }
                    })
                .build();

    this.listTransitionRouteGroupsCallable =
        callableFactory.createUnaryCallable(
            listTransitionRouteGroupsTransportSettings,
            settings.listTransitionRouteGroupsSettings(),
            clientContext);
    this.listTransitionRouteGroupsPagedCallable =
        callableFactory.createPagedCallable(
            listTransitionRouteGroupsTransportSettings,
            settings.listTransitionRouteGroupsSettings(),
            clientContext);
    this.getTransitionRouteGroupCallable =
        callableFactory.createUnaryCallable(
            getTransitionRouteGroupTransportSettings,
            settings.getTransitionRouteGroupSettings(),
            clientContext);
    this.createTransitionRouteGroupCallable =
        callableFactory.createUnaryCallable(
            createTransitionRouteGroupTransportSettings,
            settings.createTransitionRouteGroupSettings(),
            clientContext);
    this.updateTransitionRouteGroupCallable =
        callableFactory.createUnaryCallable(
            updateTransitionRouteGroupTransportSettings,
            settings.updateTransitionRouteGroupSettings(),
            clientContext);
    this.deleteTransitionRouteGroupCallable =
        callableFactory.createUnaryCallable(
            deleteTransitionRouteGroupTransportSettings,
            settings.deleteTransitionRouteGroupSettings(),
            clientContext);

    this.backgroundResources =
        new BackgroundResourceAggregation(clientContext.getBackgroundResources());
  }

  public GrpcOperationsStub getOperationsStub() {
    return operationsStub;
  }

  @Override
  public UnaryCallable<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsResponse>
      listTransitionRouteGroupsCallable() {
    return listTransitionRouteGroupsCallable;
  }

  @Override
  public UnaryCallable<ListTransitionRouteGroupsRequest, ListTransitionRouteGroupsPagedResponse>
      listTransitionRouteGroupsPagedCallable() {
    return listTransitionRouteGroupsPagedCallable;
  }

  @Override
  public UnaryCallable<GetTransitionRouteGroupRequest, TransitionRouteGroup>
      getTransitionRouteGroupCallable() {
    return getTransitionRouteGroupCallable;
  }

  @Override
  public UnaryCallable<CreateTransitionRouteGroupRequest, TransitionRouteGroup>
      createTransitionRouteGroupCallable() {
    return createTransitionRouteGroupCallable;
  }

  @Override
  public UnaryCallable<UpdateTransitionRouteGroupRequest, TransitionRouteGroup>
      updateTransitionRouteGroupCallable() {
    return updateTransitionRouteGroupCallable;
  }

  @Override
  public UnaryCallable<DeleteTransitionRouteGroupRequest, Empty>
      deleteTransitionRouteGroupCallable() {
    return deleteTransitionRouteGroupCallable;
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
