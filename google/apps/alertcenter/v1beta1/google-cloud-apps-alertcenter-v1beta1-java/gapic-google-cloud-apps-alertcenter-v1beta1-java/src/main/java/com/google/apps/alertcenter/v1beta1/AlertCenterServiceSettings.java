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

import static com.google.apps.alertcenter.v1beta1.AlertCenterServiceClient.ListAlertsPagedResponse;

import com.google.api.core.ApiFunction;
import com.google.api.core.BetaApi;
import com.google.api.gax.core.GoogleCredentialsProvider;
import com.google.api.gax.core.InstantiatingExecutorProvider;
import com.google.api.gax.grpc.InstantiatingGrpcChannelProvider;
import com.google.api.gax.rpc.ApiClientHeaderProvider;
import com.google.api.gax.rpc.ClientContext;
import com.google.api.gax.rpc.ClientSettings;
import com.google.api.gax.rpc.PagedCallSettings;
import com.google.api.gax.rpc.StubSettings;
import com.google.api.gax.rpc.TransportChannelProvider;
import com.google.api.gax.rpc.UnaryCallSettings;
import com.google.apps.alertcenter.v1beta1.stub.AlertCenterServiceStubSettings;
import com.google.protobuf.Empty;
import java.io.IOException;
import java.util.List;
import javax.annotation.Generated;

// AUTO-GENERATED DOCUMENTATION AND CLASS.
/**
 * Settings class to configure an instance of {@link AlertCenterServiceClient}.
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
 * AlertCenterServiceSettings.Builder alertCenterServiceSettingsBuilder =
 *     AlertCenterServiceSettings.newBuilder();
 * alertCenterServiceSettingsBuilder
 *     .getAlertSettings()
 *     .setRetrySettings(
 *         alertCenterServiceSettingsBuilder
 *             .getAlertSettings()
 *             .getRetrySettings()
 *             .toBuilder()
 *             .setTotalTimeout(Duration.ofSeconds(30))
 *             .build());
 * AlertCenterServiceSettings alertCenterServiceSettings =
 *     alertCenterServiceSettingsBuilder.build();
 * }</pre>
 */
@BetaApi
@Generated("by gapic-generator-java")
public class AlertCenterServiceSettings extends ClientSettings<AlertCenterServiceSettings> {

  /** Returns the object with the settings used for calls to listAlerts. */
  public PagedCallSettings<ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
      listAlertsSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).listAlertsSettings();
  }

  /** Returns the object with the settings used for calls to getAlert. */
  public UnaryCallSettings<GetAlertRequest, Alert> getAlertSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).getAlertSettings();
  }

  /** Returns the object with the settings used for calls to deleteAlert. */
  public UnaryCallSettings<DeleteAlertRequest, Empty> deleteAlertSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).deleteAlertSettings();
  }

  /** Returns the object with the settings used for calls to undeleteAlert. */
  public UnaryCallSettings<UndeleteAlertRequest, Alert> undeleteAlertSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).undeleteAlertSettings();
  }

  /** Returns the object with the settings used for calls to createAlertFeedback. */
  public UnaryCallSettings<CreateAlertFeedbackRequest, AlertFeedback>
      createAlertFeedbackSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).createAlertFeedbackSettings();
  }

  /** Returns the object with the settings used for calls to listAlertFeedback. */
  public UnaryCallSettings<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
      listAlertFeedbackSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).listAlertFeedbackSettings();
  }

  /** Returns the object with the settings used for calls to getAlertMetadata. */
  public UnaryCallSettings<GetAlertMetadataRequest, AlertMetadata> getAlertMetadataSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).getAlertMetadataSettings();
  }

  /** Returns the object with the settings used for calls to getSettings. */
  public UnaryCallSettings<GetSettingsRequest, Settings> getSettingsSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).getSettingsSettings();
  }

  /** Returns the object with the settings used for calls to updateSettings. */
  public UnaryCallSettings<UpdateSettingsRequest, Settings> updateSettingsSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).updateSettingsSettings();
  }

  /** Returns the object with the settings used for calls to batchDeleteAlerts. */
  public UnaryCallSettings<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
      batchDeleteAlertsSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).batchDeleteAlertsSettings();
  }

  /** Returns the object with the settings used for calls to batchUndeleteAlerts. */
  public UnaryCallSettings<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
      batchUndeleteAlertsSettings() {
    return ((AlertCenterServiceStubSettings) getStubSettings()).batchUndeleteAlertsSettings();
  }

  public static final AlertCenterServiceSettings create(AlertCenterServiceStubSettings stub)
      throws IOException {
    return new AlertCenterServiceSettings.Builder(stub.toBuilder()).build();
  }

  /** Returns a builder for the default ExecutorProvider for this service. */
  public static InstantiatingExecutorProvider.Builder defaultExecutorProviderBuilder() {
    return AlertCenterServiceStubSettings.defaultExecutorProviderBuilder();
  }

  /** Returns the default service endpoint. */
  public static String getDefaultEndpoint() {
    return AlertCenterServiceStubSettings.getDefaultEndpoint();
  }

  /** Returns the default service scopes. */
  public static List<String> getDefaultServiceScopes() {
    return AlertCenterServiceStubSettings.getDefaultServiceScopes();
  }

  /** Returns a builder for the default credentials for this service. */
  public static GoogleCredentialsProvider.Builder defaultCredentialsProviderBuilder() {
    return AlertCenterServiceStubSettings.defaultCredentialsProviderBuilder();
  }

  /** Returns a builder for the default ChannelProvider for this service. */
  public static InstantiatingGrpcChannelProvider.Builder defaultGrpcTransportProviderBuilder() {
    return AlertCenterServiceStubSettings.defaultGrpcTransportProviderBuilder();
  }

  public static TransportChannelProvider defaultTransportChannelProvider() {
    return AlertCenterServiceStubSettings.defaultTransportChannelProvider();
  }

  @BetaApi("The surface for customizing headers is not stable yet and may change in the future.")
  public static ApiClientHeaderProvider.Builder defaultApiClientHeaderProviderBuilder() {
    return AlertCenterServiceStubSettings.defaultApiClientHeaderProviderBuilder();
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

  protected AlertCenterServiceSettings(Builder settingsBuilder) throws IOException {
    super(settingsBuilder);
  }

  /** Builder for AlertCenterServiceSettings. */
  public static class Builder extends ClientSettings.Builder<AlertCenterServiceSettings, Builder> {

    protected Builder() throws IOException {
      this(((ClientContext) null));
    }

    protected Builder(ClientContext clientContext) {
      super(AlertCenterServiceStubSettings.newBuilder(clientContext));
    }

    protected Builder(AlertCenterServiceSettings settings) {
      super(settings.getStubSettings().toBuilder());
    }

    protected Builder(AlertCenterServiceStubSettings.Builder stubSettings) {
      super(stubSettings);
    }

    private static Builder createDefault() {
      return new Builder(AlertCenterServiceStubSettings.newBuilder());
    }

    public AlertCenterServiceStubSettings.Builder getStubSettingsBuilder() {
      return ((AlertCenterServiceStubSettings.Builder) getStubSettings());
    }

    // NEXT_MAJOR_VER: remove 'throws Exception'.
    /**
     * Applies the given settings updater function to all of the unary API methods in this service.
     *
     * <p>Note: This method does not support applying settings to streaming methods.
     */
    public Builder applyToAllUnaryMethods(
        ApiFunction<UnaryCallSettings.Builder<?, ?>, Void> settingsUpdater) throws Exception {
      super.applyToAllUnaryMethods(
          getStubSettingsBuilder().unaryMethodSettingsBuilders(), settingsUpdater);
      return this;
    }

    /** Returns the builder for the settings used for calls to listAlerts. */
    public PagedCallSettings.Builder<ListAlertsRequest, ListAlertsResponse, ListAlertsPagedResponse>
        listAlertsSettings() {
      return getStubSettingsBuilder().listAlertsSettings();
    }

    /** Returns the builder for the settings used for calls to getAlert. */
    public UnaryCallSettings.Builder<GetAlertRequest, Alert> getAlertSettings() {
      return getStubSettingsBuilder().getAlertSettings();
    }

    /** Returns the builder for the settings used for calls to deleteAlert. */
    public UnaryCallSettings.Builder<DeleteAlertRequest, Empty> deleteAlertSettings() {
      return getStubSettingsBuilder().deleteAlertSettings();
    }

    /** Returns the builder for the settings used for calls to undeleteAlert. */
    public UnaryCallSettings.Builder<UndeleteAlertRequest, Alert> undeleteAlertSettings() {
      return getStubSettingsBuilder().undeleteAlertSettings();
    }

    /** Returns the builder for the settings used for calls to createAlertFeedback. */
    public UnaryCallSettings.Builder<CreateAlertFeedbackRequest, AlertFeedback>
        createAlertFeedbackSettings() {
      return getStubSettingsBuilder().createAlertFeedbackSettings();
    }

    /** Returns the builder for the settings used for calls to listAlertFeedback. */
    public UnaryCallSettings.Builder<ListAlertFeedbackRequest, ListAlertFeedbackResponse>
        listAlertFeedbackSettings() {
      return getStubSettingsBuilder().listAlertFeedbackSettings();
    }

    /** Returns the builder for the settings used for calls to getAlertMetadata. */
    public UnaryCallSettings.Builder<GetAlertMetadataRequest, AlertMetadata>
        getAlertMetadataSettings() {
      return getStubSettingsBuilder().getAlertMetadataSettings();
    }

    /** Returns the builder for the settings used for calls to getSettings. */
    public UnaryCallSettings.Builder<GetSettingsRequest, Settings> getSettingsSettings() {
      return getStubSettingsBuilder().getSettingsSettings();
    }

    /** Returns the builder for the settings used for calls to updateSettings. */
    public UnaryCallSettings.Builder<UpdateSettingsRequest, Settings> updateSettingsSettings() {
      return getStubSettingsBuilder().updateSettingsSettings();
    }

    /** Returns the builder for the settings used for calls to batchDeleteAlerts. */
    public UnaryCallSettings.Builder<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>
        batchDeleteAlertsSettings() {
      return getStubSettingsBuilder().batchDeleteAlertsSettings();
    }

    /** Returns the builder for the settings used for calls to batchUndeleteAlerts. */
    public UnaryCallSettings.Builder<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>
        batchUndeleteAlertsSettings() {
      return getStubSettingsBuilder().batchUndeleteAlertsSettings();
    }

    @Override
    public AlertCenterServiceSettings build() throws IOException {
      return new AlertCenterServiceSettings(this);
    }
  }
}
