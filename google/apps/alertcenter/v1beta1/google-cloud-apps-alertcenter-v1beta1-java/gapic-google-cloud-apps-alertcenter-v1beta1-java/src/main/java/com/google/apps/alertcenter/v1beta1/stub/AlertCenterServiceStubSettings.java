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

import com.google.api.core.ApiFunction;
import com.google.api.core.ApiFuture;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.GaxProperties;
import com.google.api.gax.core.GoogleCredentialsProvider;
import com.google.api.gax.core.InstantiatingExecutorProvider;
import com.google.api.gax.grpc.GaxGrpcProperties;
import com.google.api.gax.grpc.GrpcTransportChannel;
import com.google.api.gax.grpc.InstantiatingGrpcChannelProvider;
import com.google.api.gax.retrying.RetrySettings;
import com.google.api.gax.rpc.ApiCallContext;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.PageContext;
import com.google.api.gax.rpc.PagedCallSettings;
import com.google.api.gax.rpc.PagedListDescriptor;
import com.google.api.gax.rpc.PagedListResponseFactory;
import com.google.api.gax.rpc.StatusCode;
import com.google.api.gax.rpc.StubSettings;
import com.google.api.gax.rpc.TransportChannelProvider;
import com.google.api.gax.rpc.UnaryCallSettings;
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
import com.google.common.collect.ImmutableList;
import com.google.common.collect.ImmutableMap;
import com.google.common.collect.ImmutableSet;
import com.google.common.collect.Lists;
import com.google.protobuf.Empty;
import java.io.IOException;
import java.util.List;
import javax.annotation.Generated;
import org.threeten.bp.Duration;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Settings class to configure an instance of {@link AlertCenterServiceStub}.
 *
 * <p>The default instance has everything set to sensible defaults:
 *
 * <ul>
 *   <li> The default service address (alertcenter.googleapis.com) and default port (443) are used.
 *   <li> Credentials are acquired automatically through Application Default Credentials.
 *   <li> Retries are configured for idempotent methods but not for non-idempotent methods.
 * </ul>
 *
 * <p>The builder of this class is recursive, so contained classes are themselves builders. When
 * build() is called, the tree of builders is called to create the complete settings object.
 *
 * <p>For example, to set the total timeout of getAlert to 30 seconds:
 *
 * <pre>{@code
 * AlertCenterServiceStubSettings.Builder alertCenterServiceSettingsBuilder =
 *     AlertCenterServiceStubSettings.newBuilder();
 * alertCenterServiceSettingsBuilder
 *     .getAlertSettings()
 *     .setRetrySettings(
 *         alertCenterServiceSettingsBuilder
 *             .getAlertSettings()
 *             .getRetrySettings()
 *             .toBuilder()
 *             .setTotalTimeout(Duration.ofSeconds(30))
 *             .build());
 * AlertCenterServiceStubSettings alertCenterServiceSettings =
 *     alertCenterServiceSettingsBuilder.build();
 * }</pre>
 */
@BetaApi
@Generated("by gapic-generator-java")
public class AlertCenterServiceStubSettings extends StubSettings<AlertCenterServiceStubSettings> {
  /** The default scopes of the service. */
  private static final ImmutableList<String> DEFAULT_SERVICE_SCOPES =
      ImmutableList.<String>builder().add("https://www.googleapis.com/auth/apps.alerts").build();

  private final PagedCallSettings<ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
      listAlertsSettings;
  private final UnaryCallSettings<GetAlertRequest, Alert> getAlertSettings;
  private final UnaryCallSettings<DeleteAlertRequest, Empty> deleteAlertSettings;
  private final UnaryCallSettings<UndeleteAlertRequest, Alert> undeleteAlertSettings;
  private final UnaryCallSettings<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackSettings;
  private final UnaryCallSettings<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackSettings;
  private final UnaryCallSettings<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataSettings;
  private final UnaryCallSettings<GetSettingsRequest, Settings> getSettingsSettings;
  private final UnaryCallSettings<UpdateSettingsRequest, Settings> updateSettingsSettings;
  private final UnaryCallSettings<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsSettings;
  private final UnaryCallSettings<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsSettings;

  private static final PagedListDescriptor<ListAlertsRequest, ListAlertsResponse, Alert>
      LIST_ALERTS_PAGE_STR_DESC =
          new PagedListDescriptor<ListAlertsRequest, ListAlertsResponse, Alert>() {
            @Override
            public String emptyToken() {
              return "";
            }

            @Override
            public ListAlertsRequest injectToken(ListAlertsRequest payload, String token) {
              return ListAlertsRequest.newBuilder(payload).setPageToken(token).build();
            }

            @Override
            public ListAlertsRequest injectPageSize(ListAlertsRequest payload, int pageSize) {
              return ListAlertsRequest.newBuilder(payload).setPageSize(pageSize).build();
            }

            @Override
            public Integer extractPageSize(ListAlertsRequest payload) {
              return payload.getPageSize();
            }

            @Override
            public String extractNextToken(ListAlertsResponse payload) {
              return payload.getNextPageToken();
            }

            @Override
            public Iterable<Alert> extractResources(ListAlertsResponse payload) {
              return payload.getAlertsList() == null
                  ? ImmutableList.<Alert>of()
                  : payload.getAlertsList();
            }
          };

  private static final PagedListResponseFactory<
          ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
      LIST_ALERTS_PAGE_STR_FACT =
          new PagedListResponseFactory<
              ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>() {
            @Override
            public ApiFuture<ListAlertsPagedResponse> getFuturePagedResponse(
                UnaryCallable<ListAlertsRequest, ListAlertsResponse> callable,
                ListAlertsRequest request,
                ApiCallContext context,
                ApiFuture<ListAlertsResponse> futureResponse) {
              PageContext<ListAlertsRequest, ListAlertsResponse, Alert> pageContext =
                  PageContext.create(callable, LIST_ALERTS_PAGE_STR_DESC, request, context);
              return ListAlertsPagedResponse.createAsync(pageContext, futureResponse);
            }
          };

  /** Returns the object with the settings used for calls to listAlerts. */
  public PagedCallSettings<ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
      listAlertsSettings() {
    return listAlertsSettings;
  }

  /** Returns the object with the settings used for calls to getAlert. */
  public UnaryCallSettings<GetAlertRequest, Alert> getAlertSettings() {
    return getAlertSettings;
  }

  /** Returns the object with the settings used for calls to deleteAlert. */
  public UnaryCallSettings<DeleteAlertRequest, Empty> deleteAlertSettings() {
    return deleteAlertSettings;
  }

  /** Returns the object with the settings used for calls to undeleteAlert. */
  public UnaryCallSettings<UndeleteAlertRequest, Alert> undeleteAlertSettings() {
    return undeleteAlertSettings;
  }

  /** Returns the object with the settings used for calls to createAlertFeedback. */
  public UnaryCallSettings<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackSettings() {
    return createAlertFeedbackSettings;
  }

  /** Returns the object with the settings used for calls to listAlertFeedback. */
  public UnaryCallSettings<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackSettings() {
    return listAlertFeedbackSettings;
  }

  /** Returns the object with the settings used for calls to getAlertMetadata. */
  public UnaryCallSettings<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataSettings() {
    return getAlertMetadataSettings;
  }

  /** Returns the object with the settings used for calls to getSettings. */
  public UnaryCallSettings<GetSettingsRequest, Settings> getSettingsSettings() {
    return getSettingsSettings;
  }

  /** Returns the object with the settings used for calls to updateSettings. */
  public UnaryCallSettings<UpdateSettingsRequest, Settings> updateSettingsSettings() {
    return updateSettingsSettings;
  }

  /** Returns the object with the settings used for calls to batchDeleteAlerts. */
  public UnaryCallSettings<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsSettings() {
    return batchDeleteAlertsSettings;
  }

  /** Returns the object with the settings used for calls to batchUndeleteAlerts. */
  public UnaryCallSettings<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsSettings() {
    return batchUndeleteAlertsSettings;
  }

  @BetaApi("A restructuring of stub classes is planned, so this may break in the future")
  public AlertCenterServiceStub createStub() throws IOException {
    if (getTransportChannelProvider()
        .getTransportName()
        .equals(GrpcTransportChannel.getGrpcTransportName())) {
      return GrpcAlertCenterServiceStub.create(this);
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
    return "alertcenter.googleapis.com:443";
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
            "gapic", GaxProperties.getLibraryVersion(AlertCenterServiceStubSettings.class))
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

  protected AlertCenterServiceStubSettings(Builder settingsBuilder) throws IOException {
    super(settingsBuilder);

    listAlertsSettings = settingsBuilder.listAlertsSettings().build();
    getAlertSettings = settingsBuilder.getAlertSettings().build();
    deleteAlertSettings = settingsBuilder.deleteAlertSettings().build();
    undeleteAlertSettings = settingsBuilder.undeleteAlertSettings().build();
    createAlertFeedbackSettings = settingsBuilder.createAlertFeedbackSettings().build();
    listAlertFeedbackSettings = settingsBuilder.listAlertFeedbackSettings().build();
    getAlertMetadataSettings = settingsBuilder.getAlertMetadataSettings().build();
    getSettingsSettings = settingsBuilder.getSettingsSettings().build();
    updateSettingsSettings = settingsBuilder.updateSettingsSettings().build();
    batchDeleteAlertsSettings = settingsBuilder.batchDeleteAlertsSettings().build();
    batchUndeleteAlertsSettings = settingsBuilder.batchUndeleteAlertsSettings().build();
  }

  /** Builder for AlertCenterServiceStubSettings. */
  public static class Builder
      extends StubSettings.Builder<AlertCenterServiceStubSettings, Builder> {
    private final ImmutableList<UnaryCallSettings.Builder<?, ?>> unaryMethodSettingsBuilders;
    private final PagedCallSettings.Builder<
            ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
        listAlertsSettings;
    private final UnaryCallSettings.Builder<GetAlertRequest, Alert> getAlertSettings;
    private final UnaryCallSettings.Builder<DeleteAlertRequest, Empty> deleteAlertSettings;
    private final UnaryCallSettings.Builder<UndeleteAlertRequest, Alert> undeleteAlertSettings;
    private final UnaryCallSettings.Builder<CreateAlertFeedbackRequest, AlertFeedback>
        createAlertFeedbackSettings;
    private final UnaryCallSettings.Builder<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
        listAlertFeedbackSettings;
    private final UnaryCallSettings.Builder<GetAlertMetadataRequest, AlertMetadata>
        getAlertMetadataSettings;
    private final UnaryCallSettings.Builder<GetSettingsRequest, Settings> getSettingsSettings;
    private final UnaryCallSettings.Builder<UpdateSettingsRequest, Settings> updateSettingsSettings;
    private final UnaryCallSettings.Builder<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
        batchDeleteAlertsSettings;
    private final UnaryCallSettings.Builder<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
        batchUndeleteAlertsSettings;
    private static final ImmutableMap<String, ImmutableSet<StatusCode.Code>>
        RETRYABLE_CODE_DEFINITIONS;

    static {
      ImmutableMap.Builder<String, ImmutableSet<StatusCode.Code>> definitions =
          ImmutableMap.builder();
      definitions.put(
          "no_retry_0_codes", ImmutableSet.copyOf(Lists.<StatusCode.Code>newArrayList()));
      RETRYABLE_CODE_DEFINITIONS = definitions.build();
    }

    private static final ImmutableMap<String, RetrySettings> RETRY_PARAM_DEFINITIONS;

    static {
      ImmutableMap.Builder<String, RetrySettings> definitions = ImmutableMap.builder();
      RetrySettings settings = null;
      settings =
          RetrySettings.newBuilder()
              .setInitialRpcTimeout(Duration.ofMillis(60000L))
              .setRpcTimeoutMultiplier(1.0)
              .setMaxRpcTimeout(Duration.ofMillis(60000L))
              .setTotalTimeout(Duration.ofMillis(60000L))
              .build();
      definitions.put("no_retry_0_params", settings);
      RETRY_PARAM_DEFINITIONS = definitions.build();
    }

    protected Builder() {
      this(((ClientContext) null));
    }

    protected Builder(ClientContext clientContext) {
      super(clientContext);

      listAlertsSettings = PagedCallSettings.newBuilder(LIST_ALERTS_PAGE_STR_FACT);
      getAlertSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      deleteAlertSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      undeleteAlertSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      createAlertFeedbackSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      listAlertFeedbackSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      getAlertMetadataSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      getSettingsSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      updateSettingsSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      batchDeleteAlertsSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();
      batchUndeleteAlertsSettings = UnaryCallSettings.newUnaryCallSettingsBuilder();

      unaryMethodSettingsBuilders =
          ImmutableList.<UnaryCallSettings.Builder<?, ?>>of(
              listAlertsSettings,
              getAlertSettings,
              deleteAlertSettings,
              undeleteAlertSettings,
              createAlertFeedbackSettings,
              listAlertFeedbackSettings,
              getAlertMetadataSettings,
              getSettingsSettings,
              updateSettingsSettings,
              batchDeleteAlertsSettings,
              batchUndeleteAlertsSettings);
      initDefaults(this);
    }

    protected Builder(AlertCenterServiceStubSettings settings) {
      super(settings);

      listAlertsSettings = settings.listAlertsSettings.toBuilder();
      getAlertSettings = settings.getAlertSettings.toBuilder();
      deleteAlertSettings = settings.deleteAlertSettings.toBuilder();
      undeleteAlertSettings = settings.undeleteAlertSettings.toBuilder();
      createAlertFeedbackSettings = settings.createAlertFeedbackSettings.toBuilder();
      listAlertFeedbackSettings = settings.listAlertFeedbackSettings.toBuilder();
      getAlertMetadataSettings = settings.getAlertMetadataSettings.toBuilder();
      getSettingsSettings = settings.getSettingsSettings.toBuilder();
      updateSettingsSettings = settings.updateSettingsSettings.toBuilder();
      batchDeleteAlertsSettings = settings.batchDeleteAlertsSettings.toBuilder();
      batchUndeleteAlertsSettings = settings.batchUndeleteAlertsSettings.toBuilder();

      unaryMethodSettingsBuilders =
          ImmutableList.<UnaryCallSettings.Builder<?, ?>>of(
              listAlertsSettings,
              getAlertSettings,
              deleteAlertSettings,
              undeleteAlertSettings,
              createAlertFeedbackSettings,
              listAlertFeedbackSettings,
              getAlertMetadataSettings,
              getSettingsSettings,
              updateSettingsSettings,
              batchDeleteAlertsSettings,
              batchUndeleteAlertsSettings);
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
          .listAlertsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .getAlertSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .deleteAlertSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .undeleteAlertSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .createAlertFeedbackSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .listAlertFeedbackSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .getAlertMetadataSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .getSettingsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .updateSettingsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .batchDeleteAlertsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

      builder
          .batchUndeleteAlertsSettings()
          .setRetryableCodes(RETRYABLE_CODE_DEFINITIONS.get("no_retry_0_codes"))
          .setRetrySettings(RETRY_PARAM_DEFINITIONS.get("no_retry_0_params"));

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

    /** Returns the builder for the settings used for calls to listAlerts. */
    public PagedCallSettings.Builder<ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
        listAlertsSettings() {
      return listAlertsSettings;
    }

    /** Returns the builder for the settings used for calls to getAlert. */
    public UnaryCallSettings.Builder<GetAlertRequest, Alert> getAlertSettings() {
      return getAlertSettings;
    }

    /** Returns the builder for the settings used for calls to deleteAlert. */
    public UnaryCallSettings.Builder<DeleteAlertRequest, Empty> deleteAlertSettings() {
      return deleteAlertSettings;
    }

    /** Returns the builder for the settings used for calls to undeleteAlert. */
    public UnaryCallSettings.Builder<UndeleteAlertRequest, Alert> undeleteAlertSettings() {
      return undeleteAlertSettings;
    }

    /** Returns the builder for the settings used for calls to createAlertFeedback. */
    public UnaryCallSettings.Builder<CreateAlertFeedbackRequest, AlertFeedback>
        createAlertFeedbackSettings() {
      return createAlertFeedbackSettings;
    }

    /** Returns the builder for the settings used for calls to listAlertFeedback. */
    public UnaryCallSettings.Builder<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
        listAlertFeedbackSettings() {
      return listAlertFeedbackSettings;
    }

    /** Returns the builder for the settings used for calls to getAlertMetadata. */
    public UnaryCallSettings.Builder<GetAlertMetadataRequest, AlertMetadata>
        getAlertMetadataSettings() {
      return getAlertMetadataSettings;
    }

    /** Returns the builder for the settings used for calls to getSettings. */
    public UnaryCallSettings.Builder<GetSettingsRequest, Settings> getSettingsSettings() {
      return getSettingsSettings;
    }

    /** Returns the builder for the settings used for calls to updateSettings. */
    public UnaryCallSettings.Builder<UpdateSettingsRequest, Settings> updateSettingsSettings() {
      return updateSettingsSettings;
    }

    /** Returns the builder for the settings used for calls to batchDeleteAlerts. */
    public UnaryCallSettings.Builder<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
        batchDeleteAlertsSettings() {
      return batchDeleteAlertsSettings;
    }

    /** Returns the builder for the settings used for calls to batchUndeleteAlerts. */
    public UnaryCallSettings.Builder<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
        batchUndeleteAlertsSettings() {
      return batchUndeleteAlertsSettings;
    }

    @Override
    public AlertCenterServiceStubSettings build() throws IOException {
      return new AlertCenterServiceStubSettings(this);
    }
  }
}
