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

package com.google.chromeos.moblab.v1beta1.stub;

import static com.google.chromeos.moblab.v1beta1.BuildServiceClient.ListBuildsPagedResponse;

import com.google.api.core.ApiFunction;
import com.google.api.core.ApiFuture;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.GaxProperties;
import com.google.api.gax.core.GoogleCredentialsProvider;
import com.google.api.gax.core.InstantiatingExecutorProvider;
import com.google.api.gax.grpc.GaxGrpcProperties;
import com.google.api.gax.grpc.GrpcTransportChannel;
import com.google.api.gax.grpc.InstantiatingGrpcChannelProvider;
import com.google.api.gax.grpc.ProtoOperationTransformers;
import com.google.api.gax.longrunning.OperationSnapshot;
import com.google.api.gax.longrunning.OperationTimedPollAlgorithm;
import com.google.api.gax.retrying.RetrySettings;
import com.google.api.gax.rpc.ApiCallContext;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.OperationCallSettings;
import com.google.api.gax.rpc.PageContext;
import com.google.api.gax.rpc.PagedCallSettings;
import com.google.api.gax.rpc.PagedListDescriptor;
import com.google.api.gax.rpc.PagedListResponseFactory;
import com.google.api.gax.rpc.StatusCode;
import com.google.api.gax.rpc.StubSettings;
import com.google.api.gax.rpc.TransportChannelProvider;
import com.google.api.gax.rpc.UnaryCallSettings;
import com.google.api.gax.rpc.UnaryCallable;
import com.google.chromeos.moblab.v1beta1.Build;
import com.google.chromeos.moblab.v1beta1.CheckBuildStageStatusRequest;
import com.google.chromeos.moblab.v1beta1.CheckBuildStageStatusResponse;
import com.google.chromeos.moblab.v1beta1.ListBuildsRequest;
import com.google.chromeos.moblab.v1beta1.ListBuildsResponse;
import com.google.chromeos.moblab.v1beta1.StageBuildMetadata;
import com.google.chromeos.moblab.v1beta1.StageBuildRequest;
import com.google.chromeos.moblab.v1beta1.StageBuildResponse;
import com.google.common.collect.ImmutableList;
import com.google.common.collect.ImmutableMap;
import com.google.common.collect.ImmutableSet;
import com.google.common.collect.Lists;
import com.google.longrunning.Operation;
import java.io.IOException;
import java.util.List;
import javax.annotation.Generated;
import org.threeten.bp.Duration;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Settings class to configure an instance of {@link BuildServiceStub}.
 *
 * <p>The default instance has everything set to sensible defaults:
 *
 * <ul>
 *   <li>The default service address (chromeosmoblab.googleapis.com) and default port (443) are
 *       used.
 *   <li>Credentials are acquired automatically through Application Default Credentials.
 *   <li>Retries are configured for idempotent methods but not for non-idempotent methods.
 * </ul>
 *
 * <p>The builder of this class is recursive, so contained classes are themselves builders. When
 * build() is called, the tree of builders is called to create the complete settings object.
 *
 * <p>For example, to set the total timeout of checkBuildStageStatus to 30 seconds:
 *
 * <pre>{@code
 * BuildServiceStubSettings.Builder buildServiceSettingsBuilder =
 *     BuildServiceStubSettings.newBuilder();
 * buildServiceSettingsBuilder
 *     .checkBuildStageStatusSettings()
 *     .setRetrySettings(
 *         buildServiceSettingsBuilder
 *             .checkBuildStageStatusSettings()
 *             .getRetrySettings()
 *             .toBuilder()
 *             .setTotalTimeout(Duration.ofSeconds(30))
 *             .build());
 * BuildServiceStubSettings buildServiceSettings = buildServiceSettingsBuilder.build();
 * }</pre>
 */
@BetaApi
@Generated("by gapic-generator-java")
public class BuildServiceStubSettings extends StubSettings<BuildServiceStubSettings> {
  /** The default scopes of the service. */
  private static final ImmutableList<String> DEFAULT_SERVICE_SCOPES =
      ImmutableList.<String>builder().add("https://www.googleapis.com/auth/moblabapi").build();

  private final PagedCallSettings<ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>
      listBuildsSettings;
  private final UnaryCallSettings<CheckBuildStageStatusRequest, CheckBuildStageStatusResponse>
      checkBuildStageStatusSettings;
  private final UnaryCallSettings<StageBuildRequest, Operation> stageBuildSettings;
  private final OperationCallSettings<StageBuildRequest, StageBuildResponse, StageBuildMetadata>
      stageBuildOperationSettings;

  private static final PagedListDescriptor<ListBuildsRequest, ListBuildsResponse, Build>
      LIST_BUILDS_PAGE_STR_DESC =
          new PagedListDescriptor<ListBuildsRequest, ListBuildsResponse, Build>() {
            @Override
            public String emptyToken() {
              return "";
            }

            @Override
            public ListBuildsRequest injectToken(ListBuildsRequest payload, String token) {
              return ListBuildsRequest.newBuilder(payload).setPageToken(token).build();
            }

            @Override
            public ListBuildsRequest injectPageSize(ListBuildsRequest payload, int pageSize) {
              return ListBuildsRequest.newBuilder(payload).setPageSize(pageSize).build();
            }

            @Override
            public Integer extractPageSize(ListBuildsRequest payload) {
              return payload.getPageSize();
            }

            @Override
            public String extractNextToken(ListBuildsResponse payload) {
              return payload.getNextPageToken();
            }

            @Override
            public Iterable<Build> extractResources(ListBuildsResponse payload) {
              return payload.getBuildsList() == null
                  ? ImmutableList.<Build>of()
                  : payload.getBuildsList();
            }
          };

  private static final PagedListResponseFactory<
          ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>
      LIST_BUILDS_PAGE_STR_FACT =
          new PagedListResponseFactory<
              ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>() {
            @Override
            public ApiFuture<ListBuildsPagedResponse> getFuturePagedResponse(
                UnaryCallable<ListBuildsRequest, ListBuildsResponse> callable,
                ListBuildsRequest request,
                ApiCallContext context,
                ApiFuture<ListBuildsResponse> futureResponse) {
              PageContext<ListBuildsRequest, ListBuildsResponse, Build> pageContext =
                  PageContext.create(callable, LIST_BUILDS_PAGE_STR_DESC, request, context);
              return ListBuildsPagedResponse.createAsync(pageContext, futureResponse);
            }
          };

  /** Returns the object with the settings used for calls to listBuilds. */
  public PagedCallSettings<ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>
      listBuildsSettings() {
    return listBuildsSettings;
  }

  /** Returns the object with the settings used for calls to checkBuildStageStatus. */
  public UnaryCallSettings<CheckBuildStageStatusRequest, CheckBuildStageStatusResponse>
      checkBuildStageStatusSettings() {
    return checkBuildStageStatusSettings;
  }

  /** Returns the object with the settings used for calls to stageBuild. */
  public UnaryCallSettings<StageBuildRequest, Operation> stageBuildSettings() {
    return stageBuildSettings;
  }

  /** Returns the object with the settings used for calls to stageBuild. */
  public OperationCallSettings<StageBuildRequest, StageBuildResponse, StageBuildMetadata>
      stageBuildOperationSettings() {
    return stageBuildOperationSettings;
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public BuildServiceStub createStub() throws IOException {
    if (getTransportChannelProvider()
        .getTransportName()
        .equals(GrpcTransportChannel.getGrpcTransportName())) {
      return GrpcBuildServiceStub.create(this);
    }
    throw new UnsupportedOperationException(
        String.format(
            "Transport not supported: %s", getTransportChannelProvider().getTransportName()));
  }

  /** Returns a builder for the default ExecutorProvider for this service. */
  public static InstantiatingExecutorProvider.Builder defaultExecutorProviderBuilder() {
    return InstantiatingExecutorProvider.newBuilder();
  }

  /** Returns the default service endpoint. */
  public static String getDefaultEndpoint() {
    return "chromeosmoblab.googleapis.com:443";
  }

  /** Returns the default service scopes. */
  public static List<String> getDefaultServiceScopes() {
    return DEFAULT_SERVICE_SCOPES;
  }

  /** Returns a builder for the default credentials for this service. */
  public static GoogleCredentialsProvider.Builder defaultCredentialsProviderBuilder() {
    return GoogleCredentialsProvider.newBuilder().setScopesToApply(DEFAULT_SERVICE_SCOPES);
  }

  /** Returns a builder for the default ChannelProvider for this service. */
  public static InstantiatingGrpcChannelProvider.Builder defaultGrpcTransportProviderBuilder() {
    return InstantiatingGrpcChannelProvider.newBuilder()
        .setMaxInboundMessageSize(Integer.MAX_VALUE);
  }

  public static TransportChannelProvider defaultTransportChannelProvider() {
    return defaultGrpcTransportProviderBuilder().build();
  }

  @BetaApi("The surface for customizing headers is not stable yet and may change in the future.")
  public static ApiClientHeaderProvider.Builder defaultApiClientHeaderProviderBuilder() {
    return ApiClientHeaderProvider.newBuilder()
        .setGeneratedLibToken(
            "gapic", GaxProperties.getLibraryVersion(BuildServiceStubSettings.class))
        .setTransportToken(
            GaxGrpcProperties.getGrpcTokenName(), GaxGrpcProperties.getGrpcVersion());
  }

  /** Returns a new builder for this class. */
  public static Builder newBuilder() {
    return Builder.createDefault();
  }

  /** Returns a new builder for this class. */
  public static Builder newBuilder(ClientContext clientContext) {
    return new Builder(clientContext);
  }

  /** Returns a builder containing all the values of this settings class. */
  public Builder toBuilder() {
    return new Builder(this);
  }

  protected BuildServiceStubSettings(Builder settingsBuilder) throws IOException {
    super(settingsBuilder);

    listBuildsSettings = settingsBuilder.listBuildsSettings().build();
    checkBuildStageStatusSettings = settingsBuilder.checkBuildStageStatusSettings().build();
    stageBuildSettings = settingsBuilder.stageBuildSettings().build();
    stageBuildOperationSettings = settingsBuilder.stageBuildOperationSettings().build();
  }

  /** Builder for BuildServiceStubSettings. */
  public static class Builder extends StubSettings.Builder<BuildServiceStubSettings, Builder> {
    private final ImmutableList<UnaryCallSettings.Builder<?, ?>> unaryMethodSettingsBuilders;
    private final PagedCallSettings.Builder<
            ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>
        listBuildsSettings;
    private final UnaryCallSettings.Builder<
            CheckBuildStageStatusRequest, CheckBuildStageStatusResponse>
        checkBuildStageStatusSettings;
    private final UnaryCallSettings.Builder<StageBuildRequest, Operation> stageBuildSettings;
    private final OperationCallSettings.Builder<
            StageBuildRequest, StageBuildResponse, StageBuildMetadata>
        stageBuildOperationSettings;
    private static final ImmutableMap<String, ImmutableSet<StatusCode.Code>>
        RETRYABLE_CODE_DEFINITIONS;

    static {
      ImmutableMap.Builder<String, ImmutableSet<StatusCode.Code>> definitions =
          ImmutableMap.builder();
      definitions.put(
          "retry_policy_0_codes",
          ImmutableSet.copyOf(Lists.<StatusCode.Code>newArrayList(StatusCode.Code.UNAVAILABLE)));
      definitions.put(
          "no_retry_1_codes", ImmutableSet.copyOf(Lists.<StatusCode.Code>newArrayList()));
      RETRYABLE_CODE_DEFINITIONS = definitions.build();
    }

    private static final ImmutableMap<String, RetrySettings> RETRY_PARAM_DEFINITIONS;

    static {
      ImmutableMap.Builder<String, RetrySettings> definitions = ImmutableMap.builder();
      RetrySettings settings = null;
      settings =
          RetrySettings.newBuilder()
              .setInitialRetryDelay(Duration.ofMillis(1000L))
              .setRetryDelayMultiplier(1.3)
              .setMaxRetryDelay(Duration.ofMillis(10000L))
              .setInitialRpcTimeout(Duration.ofMillis(60000L))
              .setRpcTimeoutMultiplier(1.0)
              .setMaxRpcTimeout(Duration.ofMillis(60000L))
              .setTotalTimeout(Duration.ofMillis(60000L))
              .build();
      definitions.put("retry_policy_0_params", settings);
      settings =
          RetrySettings.newBuilder()
              .setInitialRpcTimeout(Duration.ofMillis(60000L))
              .setRpcTimeoutMultiplier(1.0)
              .setMaxRpcTimeout(Duration.ofMillis(60000L))
              .setTotalTimeout(Duration.ofMillis(60000L))
              .build();
      definitions.put("no_retry_1_params", settings);
      RETRY_PARAM_DEFINITIONS = definitions.build();
    }

    protected Builder() {
      this(((ClientContext) null));
    }

    protected Builder(ClientContext clientContext) {
      super(clientContext);

      listBuildsSettings = PagedCallSettings.newBuilder(LIST_BUILDS_PAGE_STR_FACT);
      checkBuildStageStatusSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      stageBuildSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      stageBuildOperationSettings = OperationCallSettings.newBuilder();

      unaryMethodSettingsBuilders =
          ImmutableList.<UnaryCallSettings.Builder<?, ?>>of(
              listBuildsSettings, checkBuildStageStatusSettings, stageBuildSettings);
      initDefaults(this);
    }

    protected Builder(BuildServiceStubSettings settings) {
      super(settings);

      listBuildsSettings = settings.listBuildsSettings.toBuilder();
      checkBuildStageStatusSettings = settings.checkBuildStageStatusSettings.toBuilder();
      stageBuildSettings = settings.stageBuildSettings.toBuilder();
      stageBuildOperationSettings = settings.stageBuildOperationSettings.toBuilder();

      unaryMethodSettingsBuilders =
          ImmutableList.<UnaryCallSettings.Builder<?, ?>>of(
              listBuildsSettings, checkBuildStageStatusSettings, stageBuildSettings);
    }

    private static Builder createDefault() {
      Builder builder = new Builder(((ClientContext) null));

      builder.setTransportChannelProvider(defaultTransportChannelProvider());
      builder.setCredentialsProvider(defaultCredentialsProviderBuilder().build());
      builder.setInternalHeaderProvider(defaultApiClientHeaderProviderBuilder().build());
      builder.setEndpoint(getDefaultEndpoint());

      return initDefaults(builder);
    }

    private static Builder initDefaults(Builder builder) {
      builder
          .listBuildsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("retry_policy_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("retry_policy_0_params"));

      builder
          .checkBuildStageStatusSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("retry_policy_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("retry_policy_0_params"));

      builder
          .stageBuildSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_1_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_1_params"));

      builder
          .stageBuildOperationSettings()
          .setInitialCallSettings(
              UnaryCallSettings.<StageBuildRequest, OperationSnapshot>newUnaryCallSettingsBuilder()
                  .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_1_codes"))
                  .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_1_params"))
                  .build())
          .setResponseTransformer(
              ProtoOperationTransformers.ResponseTransformer.create(StageBuildResponse.class))
          .setMetadataTransformer(
              ProtoOperationTransformers.MetadataTransformer.create(StageBuildMetadata.class))
          .setPollingAlgorithm(
              OperationTimedPollAlgorithm.create(
                  RetrySettings.newBuilder()
                      .setInitialRetryDelay(Duration.ofMillis(5000L))
                      .setRetryDelayMultiplier(1.5)
                      .setMaxRetryDelay(Duration.ofMillis(45000L))
                      .setInitialRpcTimeout(Duration.ZERO)
                      .setRpcTimeoutMultiplier(1.0)
                      .setMaxRpcTimeout(Duration.ZERO)
                      .setTotalTimeout(Duration.ofMillis(300000L))
                      .build()));

      return builder;
    }

    // NEXT_MAJOR_VER: remove 'throws Exception'.
    /**
     * Applies the given settings updater function to all of the unary API methods in this service.
     *
     * <p>Note: This method does not support applying settings to streaming methods.
     */
    public Builder applyToAllUnaryMethods(
        ApiFunction<UnaryCallSettings.Builder<?, ?>, Void> settingsUpdater) throws Exception {
      super.applyToAllUnaryMethods(unaryMethodSettingsBuilders, settingsUpdater);
      return this;
    }

    public ImmutableList<UnaryCallSettings.Builder<?, ?>> unaryMethodSettingsBuilders() {
      return unaryMethodSettingsBuilders;
    }

    /** Returns the builder for the settings used for calls to listBuilds. */
    public PagedCallSettings.Builder<ListBuildsRequest, ListBuildsResponse, ListBuildsPagedResponse>
        listBuildsSettings() {
      return listBuildsSettings;
    }

    /** Returns the builder for the settings used for calls to checkBuildStageStatus. */
    public UnaryCallSettings.Builder<CheckBuildStageStatusRequest, CheckBuildStageStatusResponse>
        checkBuildStageStatusSettings() {
      return checkBuildStageStatusSettings;
    }

    /** Returns the builder for the settings used for calls to stageBuild. */
    public UnaryCallSettings.Builder<StageBuildRequest, Operation> stageBuildSettings() {
      return stageBuildSettings;
    }

    /** Returns the builder for the settings used for calls to stageBuild. */
    @BetaApi(
        "The surface for use by generated code is not stable yet and may change in the future.")
    public OperationCallSettings.Builder<StageBuildRequest, StageBuildResponse, StageBuildMetadata>
        stageBuildOperationSettings() {
      return stageBuildOperationSettings;
    }

    @Override
    public BuildServiceStubSettings build() throws IOException {
      return new BuildServiceStubSettings(this);
    }
  }
}
