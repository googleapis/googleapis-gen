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
using gagr = Google.Api.Gax.ResourceNames;
using lro = Google.LongRunning;
using proto = Google.Protobuf;
using grpccore = Grpc.Core;
using grpcinter = Grpc.Core.Interceptors;
using sys = System;
using sc = System.Collections;
using scg = System.Collections.Generic;
using sco = System.Collections.ObjectModel;
using st = System.Threading;
using stt = System.Threading.Tasks;

namespace Google.Cloud.Aiplatform.V1
{
    /// <summary>Settings for <see cref="MigrationServiceClient"/> instances.</summary>
    public sealed partial class MigrationServiceSettings : gaxgrpc::ServiceSettingsBase
    {
        /// <summary>Get a new instance of the default <see cref="MigrationServiceSettings"/>.</summary>
        /// <returns>A new instance of the default <see cref="MigrationServiceSettings"/>.</returns>
        public static MigrationServiceSettings GetDefault() => new MigrationServiceSettings();

        /// <summary>Constructs a new <see cref="MigrationServiceSettings"/> object with default settings.</summary>
        public MigrationServiceSettings()
        {
        }

        private MigrationServiceSettings(MigrationServiceSettings existing) : base(existing)
        {
            gax::GaxPreconditions.CheckNotNull(existing, nameof(existing));
            SearchMigratableResourcesSettings = existing.SearchMigratableResourcesSettings;
            BatchMigrateResourcesSettings = existing.BatchMigrateResourcesSettings;
            BatchMigrateResourcesOperationsSettings = existing.BatchMigrateResourcesOperationsSettings.Clone();
            OnCopy(existing);
        }

        partial void OnCopy(MigrationServiceSettings existing);

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>MigrationServiceClient.SearchMigratableResources</c> and
        /// <c>MigrationServiceClient.SearchMigratableResourcesAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>No timeout is applied.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings SearchMigratableResourcesSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.None);

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>MigrationServiceClient.BatchMigrateResources</c> and <c>MigrationServiceClient.BatchMigrateResourcesAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>No timeout is applied.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchMigrateResourcesSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.None);

        /// <summary>
        /// Long Running Operation settings for calls to <c>MigrationServiceClient.BatchMigrateResources</c> and
        /// <c>MigrationServiceClient.BatchMigrateResourcesAsync</c>.
        /// </summary>
        /// <remarks>
        /// Uses default <see cref="gax::PollSettings"/> of:
        /// <list type="bullet">
        /// <item><description>Initial delay: 20 seconds.</description></item>
        /// <item><description>Delay multiplier: 1.5</description></item>
        /// <item><description>Maximum delay: 45 seconds.</description></item>
        /// <item><description>Total timeout: 24 hours.</description></item>
        /// </list>
        /// </remarks>
        public lro::OperationsSettings BatchMigrateResourcesOperationsSettings { get; set; } = new lro::OperationsSettings
        {
            DefaultPollSettings = new gax::PollSettings(gax::Expiration.FromTimeout(sys::TimeSpan.FromHours(24)), sys::TimeSpan.FromSeconds(20), 1.5, sys::TimeSpan.FromSeconds(45)),
        };

        /// <summary>Creates a deep clone of this object, with all the same property values.</summary>
        /// <returns>A deep clone of this <see cref="MigrationServiceSettings"/> object.</returns>
        public MigrationServiceSettings Clone() => new MigrationServiceSettings(this);
    }

    /// <summary>
    /// Builder class for <see cref="MigrationServiceClient"/> to provide simple configuration of credentials, endpoint
    /// etc.
    /// </summary>
    public sealed partial class MigrationServiceClientBuilder : gaxgrpc::ClientBuilderBase<MigrationServiceClient>
    {
        /// <summary>The settings to use for RPCs, or <c>null</c> for the default settings.</summary>
        public MigrationServiceSettings Settings { get; set; }

        partial void InterceptBuild(ref MigrationServiceClient client);

        partial void InterceptBuildAsync(st::CancellationToken cancellationToken, ref stt::Task<MigrationServiceClient> task);

        /// <summary>Builds the resulting client.</summary>
        public override MigrationServiceClient Build()
        {
            MigrationServiceClient client = null;
            InterceptBuild(ref client);
            return client ?? BuildImpl();
        }

        /// <summary>Builds the resulting client asynchronously.</summary>
        public override stt::Task<MigrationServiceClient> BuildAsync(st::CancellationToken cancellationToken = default)
        {
            stt::Task<MigrationServiceClient> task = null;
            InterceptBuildAsync(cancellationToken, ref task);
            return task ?? BuildAsyncImpl(cancellationToken);
        }

        private MigrationServiceClient BuildImpl()
        {
            Validate();
            grpccore::CallInvoker callInvoker = CreateCallInvoker();
            return MigrationServiceClient.Create(callInvoker, Settings);
        }

        private async stt::Task<MigrationServiceClient> BuildAsyncImpl(st::CancellationToken cancellationToken)
        {
            Validate();
            grpccore::CallInvoker callInvoker = await CreateCallInvokerAsync(cancellationToken).ConfigureAwait(false);
            return MigrationServiceClient.Create(callInvoker, Settings);
        }

        /// <summary>Returns the endpoint for this builder type, used if no endpoint is otherwise specified.</summary>
        protected override string GetDefaultEndpoint() => MigrationServiceClient.DefaultEndpoint;

        /// <summary>
        /// Returns the default scopes for this builder type, used if no scopes are otherwise specified.
        /// </summary>
        protected override scg::IReadOnlyList<string> GetDefaultScopes() => MigrationServiceClient.DefaultScopes;

        /// <summary>Returns the channel pool to use when no other options are specified.</summary>
        protected override gaxgrpc::ChannelPool GetChannelPool() => MigrationServiceClient.ChannelPool;

        /// <summary>Returns the default <see cref="gaxgrpc::GrpcAdapter"/>to use if not otherwise specified.</summary>
        protected override gaxgrpc::GrpcAdapter DefaultGrpcAdapter => gaxgrpccore::GrpcCoreAdapter.Instance;
    }

    /// <summary>MigrationService client wrapper, for convenient use.</summary>
    /// <remarks>
    /// A service that migrates resources from automl.googleapis.com,
    /// datalabeling.googleapis.com and ml.googleapis.com to AI Platform.
    /// </remarks>
    public abstract partial class MigrationServiceClient
    {
        /// <summary>
        /// The default endpoint for the MigrationService service, which is a host of "aiplatform.googleapis.com" and a
        /// port of 443.
        /// </summary>
        public static string DefaultEndpoint { get; } = "aiplatform.googleapis.com:443";

        /// <summary>The default MigrationService scopes.</summary>
        /// <remarks>
        /// The default MigrationService scopes are:
        /// <list type="bullet">
        /// <item><description>https://www.googleapis.com/auth/cloud-platform</description></item>
        /// </list>
        /// </remarks>
        public static scg::IReadOnlyList<string> DefaultScopes { get; } = new sco::ReadOnlyCollection<string>(new string[]
        {
            "https://www.googleapis.com/auth/cloud-platform",
        });

        internal static gaxgrpc::ChannelPool ChannelPool { get; } = new gaxgrpc::ChannelPool(DefaultScopes);

        /// <summary>
        /// Asynchronously creates a <see cref="MigrationServiceClient"/> using the default credentials, endpoint and
        /// settings. To specify custom credentials or other settings, use <see cref="MigrationServiceClientBuilder"/>.
        /// </summary>
        /// <param name="cancellationToken">
        /// The <see cref="st::CancellationToken"/> to use while creating the client.
        /// </param>
        /// <returns>The task representing the created <see cref="MigrationServiceClient"/>.</returns>
        public static stt::Task<MigrationServiceClient> CreateAsync(st::CancellationToken cancellationToken = default) =>
            new MigrationServiceClientBuilder().BuildAsync(cancellationToken);

        /// <summary>
        /// Synchronously creates a <see cref="MigrationServiceClient"/> using the default credentials, endpoint and
        /// settings. To specify custom credentials or other settings, use <see cref="MigrationServiceClientBuilder"/>.
        /// </summary>
        /// <returns>The created <see cref="MigrationServiceClient"/>.</returns>
        public static MigrationServiceClient Create() => new MigrationServiceClientBuilder().Build();

        /// <summary>
        /// Creates a <see cref="MigrationServiceClient"/> which uses the specified call invoker for remote operations.
        /// </summary>
        /// <param name="callInvoker">
        /// The <see cref="grpccore::CallInvoker"/> for remote operations. Must not be null.
        /// </param>
        /// <param name="settings">Optional <see cref="MigrationServiceSettings"/>.</param>
        /// <returns>The created <see cref="MigrationServiceClient"/>.</returns>
        internal static MigrationServiceClient Create(grpccore::CallInvoker callInvoker, MigrationServiceSettings settings = null)
        {
            gax::GaxPreconditions.CheckNotNull(callInvoker, nameof(callInvoker));
            grpcinter::Interceptor interceptor = settings?.Interceptor;
            if (interceptor != null)
            {
                callInvoker = grpcinter::CallInvokerExtensions.Intercept(callInvoker, interceptor);
            }
            MigrationService.MigrationServiceClient grpcClient = new MigrationService.MigrationServiceClient(callInvoker);
            return new MigrationServiceClientImpl(grpcClient, settings);
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

        /// <summary>The underlying gRPC MigrationService client</summary>
        public virtual MigrationService.MigrationServiceClient GrpcClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResources(SearchMigratableResourcesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResourcesAsync(SearchMigratableResourcesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="parent">
        /// Required. The location that the migratable resources should be searched from.
        /// It's the AI Platform location that the resources can be migrated to, not
        /// the resources' original location.
        /// Format:
        /// `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="pageToken">
        /// The token returned from the previous request. A value of <c>null</c> or an empty string retrieves the first
        /// page.
        /// </param>
        /// <param name="pageSize">
        /// The size of page to request. The response will not be larger than this, but may be smaller. A value of
        /// <c>null</c> or <c>0</c> uses a server-defined page size.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResources(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            SearchMigratableResources(new SearchMigratableResourcesRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="parent">
        /// Required. The location that the migratable resources should be searched from.
        /// It's the AI Platform location that the resources can be migrated to, not
        /// the resources' original location.
        /// Format:
        /// `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="pageToken">
        /// The token returned from the previous request. A value of <c>null</c> or an empty string retrieves the first
        /// page.
        /// </param>
        /// <param name="pageSize">
        /// The size of page to request. The response will not be larger than this, but may be smaller. A value of
        /// <c>null</c> or <c>0</c> uses a server-defined page size.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResourcesAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            SearchMigratableResourcesAsync(new SearchMigratableResourcesRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="parent">
        /// Required. The location that the migratable resources should be searched from.
        /// It's the AI Platform location that the resources can be migrated to, not
        /// the resources' original location.
        /// Format:
        /// `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="pageToken">
        /// The token returned from the previous request. A value of <c>null</c> or an empty string retrieves the first
        /// page.
        /// </param>
        /// <param name="pageSize">
        /// The size of page to request. The response will not be larger than this, but may be smaller. A value of
        /// <c>null</c> or <c>0</c> uses a server-defined page size.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResources(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            SearchMigratableResources(new SearchMigratableResourcesRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="parent">
        /// Required. The location that the migratable resources should be searched from.
        /// It's the AI Platform location that the resources can be migrated to, not
        /// the resources' original location.
        /// Format:
        /// `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="pageToken">
        /// The token returned from the previous request. A value of <c>null</c> or an empty string retrieves the first
        /// page.
        /// </param>
        /// <param name="pageSize">
        /// The size of page to request. The response will not be larger than this, but may be smaller. A value of
        /// <c>null</c> or <c>0</c> uses a server-defined page size.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="MigratableResource"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResourcesAsync(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            SearchMigratableResourcesAsync(new SearchMigratableResourcesRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata> BatchMigrateResources(BatchMigrateResourcesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(BatchMigrateResourcesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(BatchMigrateResourcesRequest request, st::CancellationToken cancellationToken) =>
            BatchMigrateResourcesAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>The long-running operations client for <c>BatchMigrateResources</c>.</summary>
        public virtual lro::OperationsClient BatchMigrateResourcesOperationsClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Poll an operation once, using an <c>operationName</c> from a previous invocation of <c>BatchMigrateResources</c>
        /// .
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The result of polling the operation.</returns>
        public virtual lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata> PollOnceBatchMigrateResources(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>.PollOnceFromName(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), BatchMigrateResourcesOperationsClient, callSettings);

        /// <summary>
        /// Asynchronously poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>BatchMigrateResources</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A task representing the result of polling the operation.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> PollOnceBatchMigrateResourcesAsync(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>.PollOnceFromNameAsync(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), BatchMigrateResourcesOperationsClient, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata> BatchMigrateResources(string parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, gaxgrpc::CallSettings callSettings = null) =>
            BatchMigrateResources(new BatchMigrateResourcesRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                MigrateResourceRequests =
                {
                    gax::GaxPreconditions.CheckNotNull(migrateResourceRequests, nameof(migrateResourceRequests)),
                },
            }, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(string parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, gaxgrpc::CallSettings callSettings = null) =>
            BatchMigrateResourcesAsync(new BatchMigrateResourcesRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                MigrateResourceRequests =
                {
                    gax::GaxPreconditions.CheckNotNull(migrateResourceRequests, nameof(migrateResourceRequests)),
                },
            }, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(string parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, st::CancellationToken cancellationToken) =>
            BatchMigrateResourcesAsync(parent, migrateResourceRequests, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata> BatchMigrateResources(gagr::LocationName parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, gaxgrpc::CallSettings callSettings = null) =>
            BatchMigrateResources(new BatchMigrateResourcesRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                MigrateResourceRequests =
                {
                    gax::GaxPreconditions.CheckNotNull(migrateResourceRequests, nameof(migrateResourceRequests)),
                },
            }, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(gagr::LocationName parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, gaxgrpc::CallSettings callSettings = null) =>
            BatchMigrateResourcesAsync(new BatchMigrateResourcesRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                MigrateResourceRequests =
                {
                    gax::GaxPreconditions.CheckNotNull(migrateResourceRequests, nameof(migrateResourceRequests)),
                },
            }, callSettings);

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="parent">
        /// Required. The location of the migrated resource will live in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="migrateResourceRequests">
        /// Required. The request messages specifying the resources to migrate.
        /// They must be in the same location as the destination.
        /// Up to 50 resources can be migrated in one batch.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(gagr::LocationName parent, scg::IEnumerable<MigrateResourceRequest> migrateResourceRequests, st::CancellationToken cancellationToken) =>
            BatchMigrateResourcesAsync(parent, migrateResourceRequests, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));
    }

    /// <summary>MigrationService client wrapper implementation, for convenient use.</summary>
    /// <remarks>
    /// A service that migrates resources from automl.googleapis.com,
    /// datalabeling.googleapis.com and ml.googleapis.com to AI Platform.
    /// </remarks>
    public sealed partial class MigrationServiceClientImpl : MigrationServiceClient
    {
        private readonly gaxgrpc::ApiCall<SearchMigratableResourcesRequest, SearchMigratableResourcesResponse> _callSearchMigratableResources;

        private readonly gaxgrpc::ApiCall<BatchMigrateResourcesRequest, lro::Operation> _callBatchMigrateResources;

        /// <summary>
        /// Constructs a client wrapper for the MigrationService service, with the specified gRPC client and settings.
        /// </summary>
        /// <param name="grpcClient">The underlying gRPC client.</param>
        /// <param name="settings">The base <see cref="MigrationServiceSettings"/> used within this client.</param>
        public MigrationServiceClientImpl(MigrationService.MigrationServiceClient grpcClient, MigrationServiceSettings settings)
        {
            GrpcClient = grpcClient;
            MigrationServiceSettings effectiveSettings = settings ?? MigrationServiceSettings.GetDefault();
            gaxgrpc::ClientHelper clientHelper = new gaxgrpc::ClientHelper(effectiveSettings);
            BatchMigrateResourcesOperationsClient = new lro::OperationsClientImpl(grpcClient.CreateOperationsClient(), effectiveSettings.BatchMigrateResourcesOperationsSettings);
            _callSearchMigratableResources = clientHelper.BuildApiCall<SearchMigratableResourcesRequest, SearchMigratableResourcesResponse>(grpcClient.SearchMigratableResourcesAsync, grpcClient.SearchMigratableResources, effectiveSettings.SearchMigratableResourcesSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callSearchMigratableResources);
            Modify_SearchMigratableResourcesApiCall(ref _callSearchMigratableResources);
            _callBatchMigrateResources = clientHelper.BuildApiCall<BatchMigrateResourcesRequest, lro::Operation>(grpcClient.BatchMigrateResourcesAsync, grpcClient.BatchMigrateResources, effectiveSettings.BatchMigrateResourcesSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callBatchMigrateResources);
            Modify_BatchMigrateResourcesApiCall(ref _callBatchMigrateResources);
            OnConstruction(grpcClient, effectiveSettings, clientHelper);
        }

        partial void Modify_ApiCall<TRequest, TResponse>(ref gaxgrpc::ApiCall<TRequest, TResponse> call) where TRequest : class, proto::IMessage<TRequest> where TResponse : class, proto::IMessage<TResponse>;

        partial void Modify_SearchMigratableResourcesApiCall(ref gaxgrpc::ApiCall<SearchMigratableResourcesRequest, SearchMigratableResourcesResponse> call);

        partial void Modify_BatchMigrateResourcesApiCall(ref gaxgrpc::ApiCall<BatchMigrateResourcesRequest, lro::Operation> call);

        partial void OnConstruction(MigrationService.MigrationServiceClient grpcClient, MigrationServiceSettings effectiveSettings, gaxgrpc::ClientHelper clientHelper);

        /// <summary>The underlying gRPC MigrationService client</summary>
        public override MigrationService.MigrationServiceClient GrpcClient { get; }

        partial void Modify_SearchMigratableResourcesRequest(ref SearchMigratableResourcesRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchMigrateResourcesRequest(ref BatchMigrateResourcesRequest request, ref gaxgrpc::CallSettings settings);

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="MigratableResource"/> resources.</returns>
        public override gax::PagedEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResources(SearchMigratableResourcesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_SearchMigratableResourcesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<SearchMigratableResourcesRequest, SearchMigratableResourcesResponse, MigratableResource>(_callSearchMigratableResources, request, callSettings);
        }

        /// <summary>
        /// Searches all of the resources in automl.googleapis.com,
        /// datalabeling.googleapis.com and ml.googleapis.com that can be migrated to
        /// AI Platform's given location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="MigratableResource"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<SearchMigratableResourcesResponse, MigratableResource> SearchMigratableResourcesAsync(SearchMigratableResourcesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_SearchMigratableResourcesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<SearchMigratableResourcesRequest, SearchMigratableResourcesResponse, MigratableResource>(_callSearchMigratableResources, request, callSettings);
        }

        /// <summary>The long-running operations client for <c>BatchMigrateResources</c>.</summary>
        public override lro::OperationsClient BatchMigrateResourcesOperationsClient { get; }

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata> BatchMigrateResources(BatchMigrateResourcesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchMigrateResourcesRequest(ref request, ref callSettings);
            return new lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>(_callBatchMigrateResources.Sync(request, callSettings), BatchMigrateResourcesOperationsClient);
        }

        /// <summary>
        /// Batch migrates resources from ml.googleapis.com, automl.googleapis.com,
        /// and datalabeling.googleapis.com to AI Platform (Unified).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override async stt::Task<lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>> BatchMigrateResourcesAsync(BatchMigrateResourcesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchMigrateResourcesRequest(ref request, ref callSettings);
            return new lro::Operation<BatchMigrateResourcesResponse, BatchMigrateResourcesOperationMetadata>(await _callBatchMigrateResources.Async(request, callSettings).ConfigureAwait(false), BatchMigrateResourcesOperationsClient);
        }
    }

    public partial class SearchMigratableResourcesRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class SearchMigratableResourcesResponse : gaxgrpc::IPageResponse<MigratableResource>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<MigratableResource> GetEnumerator() => MigratableResources.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public static partial class MigrationService
    {
        public partial class MigrationServiceClient
        {
            /// <summary>
            /// Creates a new instance of <see cref="lro::Operations.OperationsClient"/> using the same call invoker as
            /// this client.
            /// </summary>
            /// <returns>A new Operations client for the same target as this client.</returns>
            public virtual lro::Operations.OperationsClient CreateOperationsClient() =>
                new lro::Operations.OperationsClient(CallInvoker);
        }
    }
}
