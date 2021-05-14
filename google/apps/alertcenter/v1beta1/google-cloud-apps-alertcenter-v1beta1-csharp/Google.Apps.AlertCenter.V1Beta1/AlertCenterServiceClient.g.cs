// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

// Generated code. DO NOT EDIT!

using gax = Google.Api.Gax;
using gaxgrpc = Google.Api.Gax.Grpc;
using gaxgrpccore = Google.Api.Gax.Grpc.GrpcCore;
using proto = Google.Protobuf;
using wkt = Google.Protobuf.WellKnownTypes;
using grpccore = Grpc.Core;
using grpcinter = Grpc.Core.Interceptors;
using sys = System;
using sc = System.Collections;
using scg = System.Collections.Generic;
using sco = System.Collections.ObjectModel;
using st = System.Threading;
using stt = System.Threading.Tasks;

namespace Google.Apps.AlertCenter.V1Beta1
{
    /// <summary>Settings for <see cref="AlertCenterServiceClient"/> instances.</summary>
    public sealed partial class AlertCenterServiceSettings : gaxgrpc::ServiceSettingsBase
    {
        /// <summary>Get a new instance of the default <see cref="AlertCenterServiceSettings"/>.</summary>
        /// <returns>A new instance of the default <see cref="AlertCenterServiceSettings"/>.</returns>
        public static AlertCenterServiceSettings GetDefault() => new AlertCenterServiceSettings();

        /// <summary>Constructs a new <see cref="AlertCenterServiceSettings"/> object with default settings.</summary>
        public AlertCenterServiceSettings()
        {
        }

        private AlertCenterServiceSettings(AlertCenterServiceSettings existing) : base(existing)
        {
            gax::GaxPreconditions.CheckNotNull(existing, nameof(existing));
            ListAlertsSettings = existing.ListAlertsSettings;
            GetAlertSettings = existing.GetAlertSettings;
            DeleteAlertSettings = existing.DeleteAlertSettings;
            UndeleteAlertSettings = existing.UndeleteAlertSettings;
            CreateAlertFeedbackSettings = existing.CreateAlertFeedbackSettings;
            ListAlertFeedbackSettings = existing.ListAlertFeedbackSettings;
            GetAlertMetadataSettings = existing.GetAlertMetadataSettings;
            GetSettingsSettings = existing.GetSettingsSettings;
            UpdateSettingsSettings = existing.UpdateSettingsSettings;
            BatchDeleteAlertsSettings = existing.BatchDeleteAlertsSettings;
            BatchUndeleteAlertsSettings = existing.BatchUndeleteAlertsSettings;
            OnCopy(existing);
        }

        partial void OnCopy(AlertCenterServiceSettings existing);

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.ListAlerts</c> and <c>AlertCenterServiceClient.ListAlertsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListAlertsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.GetAlert</c> and <c>AlertCenterServiceClient.GetAlertAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetAlertSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.DeleteAlert</c> and <c>AlertCenterServiceClient.DeleteAlertAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteAlertSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.UndeleteAlert</c> and <c>AlertCenterServiceClient.UndeleteAlertAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UndeleteAlertSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.CreateAlertFeedback</c> and <c>AlertCenterServiceClient.CreateAlertFeedbackAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateAlertFeedbackSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.ListAlertFeedback</c> and <c>AlertCenterServiceClient.ListAlertFeedbackAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListAlertFeedbackSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.GetAlertMetadata</c> and <c>AlertCenterServiceClient.GetAlertMetadataAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetAlertMetadataSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.GetSettings</c> and <c>AlertCenterServiceClient.GetSettingsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetSettingsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.UpdateSettings</c> and <c>AlertCenterServiceClient.UpdateSettingsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateSettingsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.BatchDeleteAlerts</c> and <c>AlertCenterServiceClient.BatchDeleteAlertsAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchDeleteAlertsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AlertCenterServiceClient.BatchUndeleteAlerts</c> and <c>AlertCenterServiceClient.BatchUndeleteAlertsAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchUndeleteAlertsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>Creates a deep clone of this object, with all the same property values.</summary>
        /// <returns>A deep clone of this <see cref="AlertCenterServiceSettings"/> object.</returns>
        public AlertCenterServiceSettings Clone() => new AlertCenterServiceSettings(this);
    }

    /// <summary>
    /// Builder class for <see cref="AlertCenterServiceClient"/> to provide simple configuration of credentials,
    /// endpoint etc.
    /// </summary>
    public sealed partial class AlertCenterServiceClientBuilder : gaxgrpc::ClientBuilderBase<AlertCenterServiceClient>
    {
        /// <summary>The settings to use for RPCs, or <c>null</c> for the default settings.</summary>
        public AlertCenterServiceSettings Settings { get; set; }

        partial void InterceptBuild(ref AlertCenterServiceClient client);

        partial void InterceptBuildAsync(st::CancellationToken cancellationToken, ref stt::Task<AlertCenterServiceClient> task);

        /// <summary>Builds the resulting client.</summary>
        public override AlertCenterServiceClient Build()
        {
            AlertCenterServiceClient client = null;
            InterceptBuild(ref client);
            return client ?? BuildImpl();
        }

        /// <summary>Builds the resulting client asynchronously.</summary>
        public override stt::Task<AlertCenterServiceClient> BuildAsync(st::CancellationToken cancellationToken = default)
        {
            stt::Task<AlertCenterServiceClient> task = null;
            InterceptBuildAsync(cancellationToken, ref task);
            return task ?? BuildAsyncImpl(cancellationToken);
        }

        private AlertCenterServiceClient BuildImpl()
        {
            Validate();
            grpccore::CallInvoker callInvoker = CreateCallInvoker();
            return AlertCenterServiceClient.Create(callInvoker, Settings);
        }

        private async stt::Task<AlertCenterServiceClient> BuildAsyncImpl(st::CancellationToken cancellationToken)
        {
            Validate();
            grpccore::CallInvoker callInvoker = await CreateCallInvokerAsync(cancellationToken).ConfigureAwait(false);
            return AlertCenterServiceClient.Create(callInvoker, Settings);
        }

        /// <summary>Returns the endpoint for this builder type, used if no endpoint is otherwise specified.</summary>
        protected override string GetDefaultEndpoint() => AlertCenterServiceClient.DefaultEndpoint;

        /// <summary>
        /// Returns the default scopes for this builder type, used if no scopes are otherwise specified.
        /// </summary>
        protected override scg::IReadOnlyList<string> GetDefaultScopes() => AlertCenterServiceClient.DefaultScopes;

        /// <summary>Returns the channel pool to use when no other options are specified.</summary>
        protected override gaxgrpc::ChannelPool GetChannelPool() => AlertCenterServiceClient.ChannelPool;

        /// <summary>Returns the default <see cref="gaxgrpc::GrpcAdapter"/>to use if not otherwise specified.</summary>
        protected override gaxgrpc::GrpcAdapter DefaultGrpcAdapter => gaxgrpccore::GrpcCoreAdapter.Instance;
    }

    /// <summary>AlertCenterService client wrapper, for convenient use.</summary>
    /// <remarks>
    /// Google Workspace Alert Center API (beta).
    /// </remarks>
    public abstract partial class AlertCenterServiceClient
    {
        /// <summary>
        /// The default endpoint for the AlertCenterService service, which is a host of "alertcenter.googleapis.com" and
        /// a port of 443.
        /// </summary>
        public static string DefaultEndpoint { get; } = "alertcenter.googleapis.com:443";

        /// <summary>The default AlertCenterService scopes.</summary>
        /// <remarks>
        /// The default AlertCenterService scopes are:
        /// <list type="bullet">
        /// <item><description>https://www.googleapis.com/auth/apps.alerts</description></item>
        /// </list>
        /// </remarks>
        public static scg::IReadOnlyList<string> DefaultScopes { get; } = new sco::ReadOnlyCollection<string>(new string[]
        {
            "https://www.googleapis.com/auth/apps.alerts",
        });

        internal static gaxgrpc::ChannelPool ChannelPool { get; } = new gaxgrpc::ChannelPool(DefaultScopes);

        /// <summary>
        /// Asynchronously creates a <see cref="AlertCenterServiceClient"/> using the default credentials, endpoint and
        /// settings. To specify custom credentials or other settings, use <see cref="AlertCenterServiceClientBuilder"/>
        /// .
        /// </summary>
        /// <param name="cancellationToken">
        /// The <see cref="st::CancellationToken"/> to use while creating the client.
        /// </param>
        /// <returns>The task representing the created <see cref="AlertCenterServiceClient"/>.</returns>
        public static stt::Task<AlertCenterServiceClient> CreateAsync(st::CancellationToken cancellationToken = default) =>
            new AlertCenterServiceClientBuilder().BuildAsync(cancellationToken);

        /// <summary>
        /// Synchronously creates a <see cref="AlertCenterServiceClient"/> using the default credentials, endpoint and
        /// settings. To specify custom credentials or other settings, use <see cref="AlertCenterServiceClientBuilder"/>
        /// .
        /// </summary>
        /// <returns>The created <see cref="AlertCenterServiceClient"/>.</returns>
        public static AlertCenterServiceClient Create() => new AlertCenterServiceClientBuilder().Build();

        /// <summary>
        /// Creates a <see cref="AlertCenterServiceClient"/> which uses the specified call invoker for remote
        /// operations.
        /// </summary>
        /// <param name="callInvoker">
        /// The <see cref="grpccore::CallInvoker"/> for remote operations. Must not be null.
        /// </param>
        /// <param name="settings">Optional <see cref="AlertCenterServiceSettings"/>.</param>
        /// <returns>The created <see cref="AlertCenterServiceClient"/>.</returns>
        internal static AlertCenterServiceClient Create(grpccore::CallInvoker callInvoker, AlertCenterServiceSettings settings = null)
        {
            gax::GaxPreconditions.CheckNotNull(callInvoker, nameof(callInvoker));
            grpcinter::Interceptor interceptor = settings?.Interceptor;
            if (interceptor != null)
            {
                callInvoker = grpcinter::CallInvokerExtensions.Intercept(callInvoker, interceptor);
            }
            AlertCenterService.AlertCenterServiceClient grpcClient = new AlertCenterService.AlertCenterServiceClient(callInvoker);
            return new AlertCenterServiceClientImpl(grpcClient, settings);
        }

        /// <summary>
        /// Shuts down any channels automatically created by <see cref="Create()"/> and
        /// <see cref="CreateAsync(st::CancellationToken)"/>. Channels which weren't automatically created are not
        /// affected.
        /// </summary>
        /// <remarks>
        /// After calling this method, further calls to <see cref="Create()"/> and
        /// <see cref="CreateAsync(st::CancellationToken)"/> will create new channels, which could in turn be shut down
        /// by another call to this method.
        /// </remarks>
        /// <returns>A task representing the asynchronous shutdown operation.</returns>
        public static stt::Task ShutdownDefaultChannelsAsync() => ChannelPool.ShutdownChannelsAsync();

        /// <summary>The underlying gRPC AlertCenterService client</summary>
        public virtual AlertCenterService.AlertCenterServiceClient GrpcClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Lists the alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Alert"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAlertsResponse, Alert> ListAlerts(ListAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists the alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Alert"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAlertsResponse, Alert> ListAlertsAsync(ListAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets the specified alert. Attempting to get a nonexistent alert returns
        /// `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Alert GetAlert(GetAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets the specified alert. Attempting to get a nonexistent alert returns
        /// `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Alert> GetAlertAsync(GetAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets the specified alert. Attempting to get a nonexistent alert returns
        /// `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Alert> GetAlertAsync(GetAlertRequest request, st::CancellationToken cancellationToken) =>
            GetAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks the specified alert for deletion. An alert that has been marked for
        /// deletion is removed from Alert Center after 30 days.
        /// Marking an alert for deletion has no effect on an alert which has
        /// already been marked for deletion. Attempting to mark a nonexistent alert
        /// for deletion results in a `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAlert(DeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks the specified alert for deletion. An alert that has been marked for
        /// deletion is removed from Alert Center after 30 days.
        /// Marking an alert for deletion has no effect on an alert which has
        /// already been marked for deletion. Attempting to mark a nonexistent alert
        /// for deletion results in a `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAlertAsync(DeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks the specified alert for deletion. An alert that has been marked for
        /// deletion is removed from Alert Center after 30 days.
        /// Marking an alert for deletion has no effect on an alert which has
        /// already been marked for deletion. Attempting to mark a nonexistent alert
        /// for deletion results in a `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAlertAsync(DeleteAlertRequest request, st::CancellationToken cancellationToken) =>
            DeleteAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Restores, or "undeletes", an alert that was marked for deletion within the
        /// past 30 days. Attempting to undelete an alert which was marked for deletion
        /// over 30 days ago (which has been removed from the Alert Center database) or
        /// a nonexistent alert returns a `NOT_FOUND` error. Attempting to
        /// undelete an alert which has not been marked for deletion has no effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Alert UndeleteAlert(UndeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Restores, or "undeletes", an alert that was marked for deletion within the
        /// past 30 days. Attempting to undelete an alert which was marked for deletion
        /// over 30 days ago (which has been removed from the Alert Center database) or
        /// a nonexistent alert returns a `NOT_FOUND` error. Attempting to
        /// undelete an alert which has not been marked for deletion has no effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Alert> UndeleteAlertAsync(UndeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Restores, or "undeletes", an alert that was marked for deletion within the
        /// past 30 days. Attempting to undelete an alert which was marked for deletion
        /// over 30 days ago (which has been removed from the Alert Center database) or
        /// a nonexistent alert returns a `NOT_FOUND` error. Attempting to
        /// undelete an alert which has not been marked for deletion has no effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Alert> UndeleteAlertAsync(UndeleteAlertRequest request, st::CancellationToken cancellationToken) =>
            UndeleteAlertAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates new feedback for an alert. Attempting to create a feedback for
        /// a non-existent alert returns `NOT_FOUND` error. Attempting to create a
        /// feedback for an alert that is marked for deletion returns
        /// `FAILED_PRECONDITION' error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AlertFeedback CreateAlertFeedback(CreateAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates new feedback for an alert. Attempting to create a feedback for
        /// a non-existent alert returns `NOT_FOUND` error. Attempting to create a
        /// feedback for an alert that is marked for deletion returns
        /// `FAILED_PRECONDITION' error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AlertFeedback> CreateAlertFeedbackAsync(CreateAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates new feedback for an alert. Attempting to create a feedback for
        /// a non-existent alert returns `NOT_FOUND` error. Attempting to create a
        /// feedback for an alert that is marked for deletion returns
        /// `FAILED_PRECONDITION' error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AlertFeedback> CreateAlertFeedbackAsync(CreateAlertFeedbackRequest request, st::CancellationToken cancellationToken) =>
            CreateAlertFeedbackAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists all the feedback for an alert. Attempting to list feedbacks for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual ListAlertFeedbackResponse ListAlertFeedback(ListAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists all the feedback for an alert. Attempting to list feedbacks for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<ListAlertFeedbackResponse> ListAlertFeedbackAsync(ListAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists all the feedback for an alert. Attempting to list feedbacks for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<ListAlertFeedbackResponse> ListAlertFeedbackAsync(ListAlertFeedbackRequest request, st::CancellationToken cancellationToken) =>
            ListAlertFeedbackAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns the metadata of an alert. Attempting to get metadata for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AlertMetadata GetAlertMetadata(GetAlertMetadataRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the metadata of an alert. Attempting to get metadata for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AlertMetadata> GetAlertMetadataAsync(GetAlertMetadataRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the metadata of an alert. Attempting to get metadata for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AlertMetadata> GetAlertMetadataAsync(GetAlertMetadataRequest request, st::CancellationToken cancellationToken) =>
            GetAlertMetadataAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Settings GetSettings(GetSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Settings> GetSettingsAsync(GetSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Settings> GetSettingsAsync(GetSettingsRequest request, st::CancellationToken cancellationToken) =>
            GetSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates the customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Settings UpdateSettings(UpdateSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates the customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Settings> UpdateSettingsAsync(UpdateSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates the customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Settings> UpdateSettingsAsync(UpdateSettingsRequest request, st::CancellationToken cancellationToken) =>
            UpdateSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Performs batch delete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchDeleteAlertsResponse BatchDeleteAlerts(BatchDeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Performs batch delete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchDeleteAlertsResponse> BatchDeleteAlertsAsync(BatchDeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Performs batch delete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchDeleteAlertsResponse> BatchDeleteAlertsAsync(BatchDeleteAlertsRequest request, st::CancellationToken cancellationToken) =>
            BatchDeleteAlertsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Performs batch undelete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchUndeleteAlertsResponse BatchUndeleteAlerts(BatchUndeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Performs batch undelete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchUndeleteAlertsResponse> BatchUndeleteAlertsAsync(BatchUndeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Performs batch undelete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchUndeleteAlertsResponse> BatchUndeleteAlertsAsync(BatchUndeleteAlertsRequest request, st::CancellationToken cancellationToken) =>
            BatchUndeleteAlertsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));
    }

    /// <summary>AlertCenterService client wrapper implementation, for convenient use.</summary>
    /// <remarks>
    /// Google Workspace Alert Center API (beta).
    /// </remarks>
    public sealed partial class AlertCenterServiceClientImpl : AlertCenterServiceClient
    {
        private readonly gaxgrpc::ApiCall<ListAlertsRequest, ListAlertsResponse> _callListAlerts;

        private readonly gaxgrpc::ApiCall<GetAlertRequest, Alert> _callGetAlert;

        private readonly gaxgrpc::ApiCall<DeleteAlertRequest, wkt::Empty> _callDeleteAlert;

        private readonly gaxgrpc::ApiCall<UndeleteAlertRequest, Alert> _callUndeleteAlert;

        private readonly gaxgrpc::ApiCall<CreateAlertFeedbackRequest, AlertFeedback> _callCreateAlertFeedback;

        private readonly gaxgrpc::ApiCall<ListAlertFeedbackRequest, ListAlertFeedbackResponse> _callListAlertFeedback;

        private readonly gaxgrpc::ApiCall<GetAlertMetadataRequest, AlertMetadata> _callGetAlertMetadata;

        private readonly gaxgrpc::ApiCall<GetSettingsRequest, Settings> _callGetSettings;

        private readonly gaxgrpc::ApiCall<UpdateSettingsRequest, Settings> _callUpdateSettings;

        private readonly gaxgrpc::ApiCall<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse> _callBatchDeleteAlerts;

        private readonly gaxgrpc::ApiCall<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse> _callBatchUndeleteAlerts;

        /// <summary>
        /// Constructs a client wrapper for the AlertCenterService service, with the specified gRPC client and settings.
        /// </summary>
        /// <param name="grpcClient">The underlying gRPC client.</param>
        /// <param name="settings">The base <see cref="AlertCenterServiceSettings"/> used within this client.</param>
        public AlertCenterServiceClientImpl(AlertCenterService.AlertCenterServiceClient grpcClient, AlertCenterServiceSettings settings)
        {
            GrpcClient = grpcClient;
            AlertCenterServiceSettings effectiveSettings = settings ?? AlertCenterServiceSettings.GetDefault();
            gaxgrpc::ClientHelper clientHelper = new gaxgrpc::ClientHelper(effectiveSettings);
            _callListAlerts = clientHelper.BuildApiCall<ListAlertsRequest, ListAlertsResponse>(grpcClient.ListAlertsAsync, grpcClient.ListAlerts, effectiveSettings.ListAlertsSettings);
            Modify_ApiCall(ref _callListAlerts);
            Modify_ListAlertsApiCall(ref _callListAlerts);
            _callGetAlert = clientHelper.BuildApiCall<GetAlertRequest, Alert>(grpcClient.GetAlertAsync, grpcClient.GetAlert, effectiveSettings.GetAlertSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callGetAlert);
            Modify_GetAlertApiCall(ref _callGetAlert);
            _callDeleteAlert = clientHelper.BuildApiCall<DeleteAlertRequest, wkt::Empty>(grpcClient.DeleteAlertAsync, grpcClient.DeleteAlert, effectiveSettings.DeleteAlertSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callDeleteAlert);
            Modify_DeleteAlertApiCall(ref _callDeleteAlert);
            _callUndeleteAlert = clientHelper.BuildApiCall<UndeleteAlertRequest, Alert>(grpcClient.UndeleteAlertAsync, grpcClient.UndeleteAlert, effectiveSettings.UndeleteAlertSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callUndeleteAlert);
            Modify_UndeleteAlertApiCall(ref _callUndeleteAlert);
            _callCreateAlertFeedback = clientHelper.BuildApiCall<CreateAlertFeedbackRequest, AlertFeedback>(grpcClient.CreateAlertFeedbackAsync, grpcClient.CreateAlertFeedback, effectiveSettings.CreateAlertFeedbackSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callCreateAlertFeedback);
            Modify_CreateAlertFeedbackApiCall(ref _callCreateAlertFeedback);
            _callListAlertFeedback = clientHelper.BuildApiCall<ListAlertFeedbackRequest, ListAlertFeedbackResponse>(grpcClient.ListAlertFeedbackAsync, grpcClient.ListAlertFeedback, effectiveSettings.ListAlertFeedbackSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callListAlertFeedback);
            Modify_ListAlertFeedbackApiCall(ref _callListAlertFeedback);
            _callGetAlertMetadata = clientHelper.BuildApiCall<GetAlertMetadataRequest, AlertMetadata>(grpcClient.GetAlertMetadataAsync, grpcClient.GetAlertMetadata, effectiveSettings.GetAlertMetadataSettings).WithGoogleRequestParam("alert_id", request => request.AlertId);
            Modify_ApiCall(ref _callGetAlertMetadata);
            Modify_GetAlertMetadataApiCall(ref _callGetAlertMetadata);
            _callGetSettings = clientHelper.BuildApiCall<GetSettingsRequest, Settings>(grpcClient.GetSettingsAsync, grpcClient.GetSettings, effectiveSettings.GetSettingsSettings);
            Modify_ApiCall(ref _callGetSettings);
            Modify_GetSettingsApiCall(ref _callGetSettings);
            _callUpdateSettings = clientHelper.BuildApiCall<UpdateSettingsRequest, Settings>(grpcClient.UpdateSettingsAsync, grpcClient.UpdateSettings, effectiveSettings.UpdateSettingsSettings);
            Modify_ApiCall(ref _callUpdateSettings);
            Modify_UpdateSettingsApiCall(ref _callUpdateSettings);
            _callBatchDeleteAlerts = clientHelper.BuildApiCall<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse>(grpcClient.BatchDeleteAlertsAsync, grpcClient.BatchDeleteAlerts, effectiveSettings.BatchDeleteAlertsSettings);
            Modify_ApiCall(ref _callBatchDeleteAlerts);
            Modify_BatchDeleteAlertsApiCall(ref _callBatchDeleteAlerts);
            _callBatchUndeleteAlerts = clientHelper.BuildApiCall<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse>(grpcClient.BatchUndeleteAlertsAsync, grpcClient.BatchUndeleteAlerts, effectiveSettings.BatchUndeleteAlertsSettings);
            Modify_ApiCall(ref _callBatchUndeleteAlerts);
            Modify_BatchUndeleteAlertsApiCall(ref _callBatchUndeleteAlerts);
            OnConstruction(grpcClient, effectiveSettings, clientHelper);
        }

        partial void Modify_ApiCall<TRequest, TResponse>(ref gaxgrpc::ApiCall<TRequest, TResponse> call) where TRequest : class, proto::IMessage<TRequest> where TResponse : class, proto::IMessage<TResponse>;

        partial void Modify_ListAlertsApiCall(ref gaxgrpc::ApiCall<ListAlertsRequest, ListAlertsResponse> call);

        partial void Modify_GetAlertApiCall(ref gaxgrpc::ApiCall<GetAlertRequest, Alert> call);

        partial void Modify_DeleteAlertApiCall(ref gaxgrpc::ApiCall<DeleteAlertRequest, wkt::Empty> call);

        partial void Modify_UndeleteAlertApiCall(ref gaxgrpc::ApiCall<UndeleteAlertRequest, Alert> call);

        partial void Modify_CreateAlertFeedbackApiCall(ref gaxgrpc::ApiCall<CreateAlertFeedbackRequest, AlertFeedback> call);

        partial void Modify_ListAlertFeedbackApiCall(ref gaxgrpc::ApiCall<ListAlertFeedbackRequest, ListAlertFeedbackResponse> call);

        partial void Modify_GetAlertMetadataApiCall(ref gaxgrpc::ApiCall<GetAlertMetadataRequest, AlertMetadata> call);

        partial void Modify_GetSettingsApiCall(ref gaxgrpc::ApiCall<GetSettingsRequest, Settings> call);

        partial void Modify_UpdateSettingsApiCall(ref gaxgrpc::ApiCall<UpdateSettingsRequest, Settings> call);

        partial void Modify_BatchDeleteAlertsApiCall(ref gaxgrpc::ApiCall<BatchDeleteAlertsRequest, BatchDeleteAlertsResponse> call);

        partial void Modify_BatchUndeleteAlertsApiCall(ref gaxgrpc::ApiCall<BatchUndeleteAlertsRequest, BatchUndeleteAlertsResponse> call);

        partial void OnConstruction(AlertCenterService.AlertCenterServiceClient grpcClient, AlertCenterServiceSettings effectiveSettings, gaxgrpc::ClientHelper clientHelper);

        /// <summary>The underlying gRPC AlertCenterService client</summary>
        public override AlertCenterService.AlertCenterServiceClient GrpcClient { get; }

        partial void Modify_ListAlertsRequest(ref ListAlertsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetAlertRequest(ref GetAlertRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteAlertRequest(ref DeleteAlertRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UndeleteAlertRequest(ref UndeleteAlertRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateAlertFeedbackRequest(ref CreateAlertFeedbackRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListAlertFeedbackRequest(ref ListAlertFeedbackRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetAlertMetadataRequest(ref GetAlertMetadataRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetSettingsRequest(ref GetSettingsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateSettingsRequest(ref UpdateSettingsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchDeleteAlertsRequest(ref BatchDeleteAlertsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchUndeleteAlertsRequest(ref BatchUndeleteAlertsRequest request, ref gaxgrpc::CallSettings settings);

        /// <summary>
        /// Lists the alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Alert"/> resources.</returns>
        public override gax::PagedEnumerable<ListAlertsResponse, Alert> ListAlerts(ListAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAlertsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListAlertsRequest, ListAlertsResponse, Alert>(_callListAlerts, request, callSettings);
        }

        /// <summary>
        /// Lists the alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Alert"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListAlertsResponse, Alert> ListAlertsAsync(ListAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAlertsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListAlertsRequest, ListAlertsResponse, Alert>(_callListAlerts, request, callSettings);
        }

        /// <summary>
        /// Gets the specified alert. Attempting to get a nonexistent alert returns
        /// `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Alert GetAlert(GetAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAlertRequest(ref request, ref callSettings);
            return _callGetAlert.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets the specified alert. Attempting to get a nonexistent alert returns
        /// `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Alert> GetAlertAsync(GetAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAlertRequest(ref request, ref callSettings);
            return _callGetAlert.Async(request, callSettings);
        }

        /// <summary>
        /// Marks the specified alert for deletion. An alert that has been marked for
        /// deletion is removed from Alert Center after 30 days.
        /// Marking an alert for deletion has no effect on an alert which has
        /// already been marked for deletion. Attempting to mark a nonexistent alert
        /// for deletion results in a `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteAlert(DeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAlertRequest(ref request, ref callSettings);
            _callDeleteAlert.Sync(request, callSettings);
        }

        /// <summary>
        /// Marks the specified alert for deletion. An alert that has been marked for
        /// deletion is removed from Alert Center after 30 days.
        /// Marking an alert for deletion has no effect on an alert which has
        /// already been marked for deletion. Attempting to mark a nonexistent alert
        /// for deletion results in a `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteAlertAsync(DeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAlertRequest(ref request, ref callSettings);
            return _callDeleteAlert.Async(request, callSettings);
        }

        /// <summary>
        /// Restores, or "undeletes", an alert that was marked for deletion within the
        /// past 30 days. Attempting to undelete an alert which was marked for deletion
        /// over 30 days ago (which has been removed from the Alert Center database) or
        /// a nonexistent alert returns a `NOT_FOUND` error. Attempting to
        /// undelete an alert which has not been marked for deletion has no effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Alert UndeleteAlert(UndeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UndeleteAlertRequest(ref request, ref callSettings);
            return _callUndeleteAlert.Sync(request, callSettings);
        }

        /// <summary>
        /// Restores, or "undeletes", an alert that was marked for deletion within the
        /// past 30 days. Attempting to undelete an alert which was marked for deletion
        /// over 30 days ago (which has been removed from the Alert Center database) or
        /// a nonexistent alert returns a `NOT_FOUND` error. Attempting to
        /// undelete an alert which has not been marked for deletion has no effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Alert> UndeleteAlertAsync(UndeleteAlertRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UndeleteAlertRequest(ref request, ref callSettings);
            return _callUndeleteAlert.Async(request, callSettings);
        }

        /// <summary>
        /// Creates new feedback for an alert. Attempting to create a feedback for
        /// a non-existent alert returns `NOT_FOUND` error. Attempting to create a
        /// feedback for an alert that is marked for deletion returns
        /// `FAILED_PRECONDITION' error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override AlertFeedback CreateAlertFeedback(CreateAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateAlertFeedbackRequest(ref request, ref callSettings);
            return _callCreateAlertFeedback.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates new feedback for an alert. Attempting to create a feedback for
        /// a non-existent alert returns `NOT_FOUND` error. Attempting to create a
        /// feedback for an alert that is marked for deletion returns
        /// `FAILED_PRECONDITION' error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<AlertFeedback> CreateAlertFeedbackAsync(CreateAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateAlertFeedbackRequest(ref request, ref callSettings);
            return _callCreateAlertFeedback.Async(request, callSettings);
        }

        /// <summary>
        /// Lists all the feedback for an alert. Attempting to list feedbacks for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override ListAlertFeedbackResponse ListAlertFeedback(ListAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAlertFeedbackRequest(ref request, ref callSettings);
            return _callListAlertFeedback.Sync(request, callSettings);
        }

        /// <summary>
        /// Lists all the feedback for an alert. Attempting to list feedbacks for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<ListAlertFeedbackResponse> ListAlertFeedbackAsync(ListAlertFeedbackRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAlertFeedbackRequest(ref request, ref callSettings);
            return _callListAlertFeedback.Async(request, callSettings);
        }

        /// <summary>
        /// Returns the metadata of an alert. Attempting to get metadata for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override AlertMetadata GetAlertMetadata(GetAlertMetadataRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAlertMetadataRequest(ref request, ref callSettings);
            return _callGetAlertMetadata.Sync(request, callSettings);
        }

        /// <summary>
        /// Returns the metadata of an alert. Attempting to get metadata for
        /// a non-existent alert returns `NOT_FOUND` error.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<AlertMetadata> GetAlertMetadataAsync(GetAlertMetadataRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAlertMetadataRequest(ref request, ref callSettings);
            return _callGetAlertMetadata.Async(request, callSettings);
        }

        /// <summary>
        /// Returns customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Settings GetSettings(GetSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetSettingsRequest(ref request, ref callSettings);
            return _callGetSettings.Sync(request, callSettings);
        }

        /// <summary>
        /// Returns customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Settings> GetSettingsAsync(GetSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetSettingsRequest(ref request, ref callSettings);
            return _callGetSettings.Async(request, callSettings);
        }

        /// <summary>
        /// Updates the customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Settings UpdateSettings(UpdateSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateSettingsRequest(ref request, ref callSettings);
            return _callUpdateSettings.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates the customer-level settings.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Settings> UpdateSettingsAsync(UpdateSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateSettingsRequest(ref request, ref callSettings);
            return _callUpdateSettings.Async(request, callSettings);
        }

        /// <summary>
        /// Performs batch delete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchDeleteAlertsResponse BatchDeleteAlerts(BatchDeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchDeleteAlertsRequest(ref request, ref callSettings);
            return _callBatchDeleteAlerts.Sync(request, callSettings);
        }

        /// <summary>
        /// Performs batch delete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchDeleteAlertsResponse> BatchDeleteAlertsAsync(BatchDeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchDeleteAlertsRequest(ref request, ref callSettings);
            return _callBatchDeleteAlerts.Async(request, callSettings);
        }

        /// <summary>
        /// Performs batch undelete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchUndeleteAlertsResponse BatchUndeleteAlerts(BatchUndeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchUndeleteAlertsRequest(ref request, ref callSettings);
            return _callBatchUndeleteAlerts.Sync(request, callSettings);
        }

        /// <summary>
        /// Performs batch undelete operation on alerts.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchUndeleteAlertsResponse> BatchUndeleteAlertsAsync(BatchUndeleteAlertsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchUndeleteAlertsRequest(ref request, ref callSettings);
            return _callBatchUndeleteAlerts.Async(request, callSettings);
        }
    }

    public partial class ListAlertsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListAlertsResponse : gaxgrpc::IPageResponse<Alert>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<Alert> GetEnumerator() => Alerts.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }
}
