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
using wkt = Google.Protobuf.WellKnownTypes;
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
    /// <summary>Settings for <see cref="JobServiceClient"/> instances.</summary>
    public sealed partial class JobServiceSettings : gaxgrpc::ServiceSettingsBase
    {
        /// <summary>Get a new instance of the default <see cref="JobServiceSettings"/>.</summary>
        /// <returns>A new instance of the default <see cref="JobServiceSettings"/>.</returns>
        public static JobServiceSettings GetDefault() => new JobServiceSettings();

        /// <summary>Constructs a new <see cref="JobServiceSettings"/> object with default settings.</summary>
        public JobServiceSettings()
        {
        }

        private JobServiceSettings(JobServiceSettings existing) : base(existing)
        {
            gax::GaxPreconditions.CheckNotNull(existing, nameof(existing));
            CreateCustomJobSettings = existing.CreateCustomJobSettings;
            GetCustomJobSettings = existing.GetCustomJobSettings;
            ListCustomJobsSettings = existing.ListCustomJobsSettings;
            DeleteCustomJobSettings = existing.DeleteCustomJobSettings;
            DeleteCustomJobOperationsSettings = existing.DeleteCustomJobOperationsSettings.Clone();
            CancelCustomJobSettings = existing.CancelCustomJobSettings;
            CreateDataLabelingJobSettings = existing.CreateDataLabelingJobSettings;
            GetDataLabelingJobSettings = existing.GetDataLabelingJobSettings;
            ListDataLabelingJobsSettings = existing.ListDataLabelingJobsSettings;
            DeleteDataLabelingJobSettings = existing.DeleteDataLabelingJobSettings;
            DeleteDataLabelingJobOperationsSettings = existing.DeleteDataLabelingJobOperationsSettings.Clone();
            CancelDataLabelingJobSettings = existing.CancelDataLabelingJobSettings;
            CreateHyperparameterTuningJobSettings = existing.CreateHyperparameterTuningJobSettings;
            GetHyperparameterTuningJobSettings = existing.GetHyperparameterTuningJobSettings;
            ListHyperparameterTuningJobsSettings = existing.ListHyperparameterTuningJobsSettings;
            DeleteHyperparameterTuningJobSettings = existing.DeleteHyperparameterTuningJobSettings;
            DeleteHyperparameterTuningJobOperationsSettings = existing.DeleteHyperparameterTuningJobOperationsSettings.Clone();
            CancelHyperparameterTuningJobSettings = existing.CancelHyperparameterTuningJobSettings;
            CreateBatchPredictionJobSettings = existing.CreateBatchPredictionJobSettings;
            GetBatchPredictionJobSettings = existing.GetBatchPredictionJobSettings;
            ListBatchPredictionJobsSettings = existing.ListBatchPredictionJobsSettings;
            DeleteBatchPredictionJobSettings = existing.DeleteBatchPredictionJobSettings;
            DeleteBatchPredictionJobOperationsSettings = existing.DeleteBatchPredictionJobOperationsSettings.Clone();
            CancelBatchPredictionJobSettings = existing.CancelBatchPredictionJobSettings;
            OnCopy(existing);
        }

        partial void OnCopy(JobServiceSettings existing);

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CreateCustomJob</c> and <c>JobServiceClient.CreateCustomJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateCustomJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.GetCustomJob</c> and <c>JobServiceClient.GetCustomJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetCustomJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.ListCustomJobs</c> and <c>JobServiceClient.ListCustomJobsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListCustomJobsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.DeleteCustomJob</c> and <c>JobServiceClient.DeleteCustomJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteCustomJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// Long Running Operation settings for calls to <c>JobServiceClient.DeleteCustomJob</c> and
        /// <c>JobServiceClient.DeleteCustomJobAsync</c>.
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
        public lro::OperationsSettings DeleteCustomJobOperationsSettings { get; set; } = new lro::OperationsSettings
        {
            DefaultPollSettings = new gax::PollSettings(gax::Expiration.FromTimeout(sys::TimeSpan.FromHours(24)), sys::TimeSpan.FromSeconds(20), 1.5, sys::TimeSpan.FromSeconds(45)),
        };

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CancelCustomJob</c> and <c>JobServiceClient.CancelCustomJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CancelCustomJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CreateDataLabelingJob</c> and <c>JobServiceClient.CreateDataLabelingJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateDataLabelingJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.GetDataLabelingJob</c> and <c>JobServiceClient.GetDataLabelingJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetDataLabelingJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.ListDataLabelingJobs</c> and <c>JobServiceClient.ListDataLabelingJobsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListDataLabelingJobsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.DeleteDataLabelingJob</c> and <c>JobServiceClient.DeleteDataLabelingJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteDataLabelingJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// Long Running Operation settings for calls to <c>JobServiceClient.DeleteDataLabelingJob</c> and
        /// <c>JobServiceClient.DeleteDataLabelingJobAsync</c>.
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
        public lro::OperationsSettings DeleteDataLabelingJobOperationsSettings { get; set; } = new lro::OperationsSettings
        {
            DefaultPollSettings = new gax::PollSettings(gax::Expiration.FromTimeout(sys::TimeSpan.FromHours(24)), sys::TimeSpan.FromSeconds(20), 1.5, sys::TimeSpan.FromSeconds(45)),
        };

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CancelDataLabelingJob</c> and <c>JobServiceClient.CancelDataLabelingJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CancelDataLabelingJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CreateHyperparameterTuningJob</c> and
        /// <c>JobServiceClient.CreateHyperparameterTuningJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateHyperparameterTuningJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.GetHyperparameterTuningJob</c> and <c>JobServiceClient.GetHyperparameterTuningJobAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetHyperparameterTuningJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.ListHyperparameterTuningJobs</c> and
        /// <c>JobServiceClient.ListHyperparameterTuningJobsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListHyperparameterTuningJobsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.DeleteHyperparameterTuningJob</c> and
        /// <c>JobServiceClient.DeleteHyperparameterTuningJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteHyperparameterTuningJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// Long Running Operation settings for calls to <c>JobServiceClient.DeleteHyperparameterTuningJob</c> and
        /// <c>JobServiceClient.DeleteHyperparameterTuningJobAsync</c>.
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
        public lro::OperationsSettings DeleteHyperparameterTuningJobOperationsSettings { get; set; } = new lro::OperationsSettings
        {
            DefaultPollSettings = new gax::PollSettings(gax::Expiration.FromTimeout(sys::TimeSpan.FromHours(24)), sys::TimeSpan.FromSeconds(20), 1.5, sys::TimeSpan.FromSeconds(45)),
        };

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CancelHyperparameterTuningJob</c> and
        /// <c>JobServiceClient.CancelHyperparameterTuningJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CancelHyperparameterTuningJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CreateBatchPredictionJob</c> and <c>JobServiceClient.CreateBatchPredictionJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateBatchPredictionJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.GetBatchPredictionJob</c> and <c>JobServiceClient.GetBatchPredictionJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetBatchPredictionJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.ListBatchPredictionJobs</c> and <c>JobServiceClient.ListBatchPredictionJobsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListBatchPredictionJobsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.DeleteBatchPredictionJob</c> and <c>JobServiceClient.DeleteBatchPredictionJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteBatchPredictionJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>
        /// Long Running Operation settings for calls to <c>JobServiceClient.DeleteBatchPredictionJob</c> and
        /// <c>JobServiceClient.DeleteBatchPredictionJobAsync</c>.
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
        public lro::OperationsSettings DeleteBatchPredictionJobOperationsSettings { get; set; } = new lro::OperationsSettings
        {
            DefaultPollSettings = new gax::PollSettings(gax::Expiration.FromTimeout(sys::TimeSpan.FromHours(24)), sys::TimeSpan.FromSeconds(20), 1.5, sys::TimeSpan.FromSeconds(45)),
        };

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>JobServiceClient.CancelBatchPredictionJob</c> and <c>JobServiceClient.CancelBatchPredictionJobAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 5 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CancelBatchPredictionJobSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(5000)));

        /// <summary>Creates a deep clone of this object, with all the same property values.</summary>
        /// <returns>A deep clone of this <see cref="JobServiceSettings"/> object.</returns>
        public JobServiceSettings Clone() => new JobServiceSettings(this);
    }

    /// <summary>
    /// Builder class for <see cref="JobServiceClient"/> to provide simple configuration of credentials, endpoint etc.
    /// </summary>
    public sealed partial class JobServiceClientBuilder : gaxgrpc::ClientBuilderBase<JobServiceClient>
    {
        /// <summary>The settings to use for RPCs, or <c>null</c> for the default settings.</summary>
        public JobServiceSettings Settings { get; set; }

        partial void InterceptBuild(ref JobServiceClient client);

        partial void InterceptBuildAsync(st::CancellationToken cancellationToken, ref stt::Task<JobServiceClient> task);

        /// <summary>Builds the resulting client.</summary>
        public override JobServiceClient Build()
        {
            JobServiceClient client = null;
            InterceptBuild(ref client);
            return client ?? BuildImpl();
        }

        /// <summary>Builds the resulting client asynchronously.</summary>
        public override stt::Task<JobServiceClient> BuildAsync(st::CancellationToken cancellationToken = default)
        {
            stt::Task<JobServiceClient> task = null;
            InterceptBuildAsync(cancellationToken, ref task);
            return task ?? BuildAsyncImpl(cancellationToken);
        }

        private JobServiceClient BuildImpl()
        {
            Validate();
            grpccore::CallInvoker callInvoker = CreateCallInvoker();
            return JobServiceClient.Create(callInvoker, Settings);
        }

        private async stt::Task<JobServiceClient> BuildAsyncImpl(st::CancellationToken cancellationToken)
        {
            Validate();
            grpccore::CallInvoker callInvoker = await CreateCallInvokerAsync(cancellationToken).ConfigureAwait(false);
            return JobServiceClient.Create(callInvoker, Settings);
        }

        /// <summary>Returns the endpoint for this builder type, used if no endpoint is otherwise specified.</summary>
        protected override string GetDefaultEndpoint() => JobServiceClient.DefaultEndpoint;

        /// <summary>
        /// Returns the default scopes for this builder type, used if no scopes are otherwise specified.
        /// </summary>
        protected override scg::IReadOnlyList<string> GetDefaultScopes() => JobServiceClient.DefaultScopes;

        /// <summary>Returns the channel pool to use when no other options are specified.</summary>
        protected override gaxgrpc::ChannelPool GetChannelPool() => JobServiceClient.ChannelPool;

        /// <summary>Returns the default <see cref="gaxgrpc::GrpcAdapter"/>to use if not otherwise specified.</summary>
        protected override gaxgrpc::GrpcAdapter DefaultGrpcAdapter => gaxgrpccore::GrpcCoreAdapter.Instance;
    }

    /// <summary>JobService client wrapper, for convenient use.</summary>
    /// <remarks>
    /// A service for creating and managing AI Platform's jobs.
    /// </remarks>
    public abstract partial class JobServiceClient
    {
        /// <summary>
        /// The default endpoint for the JobService service, which is a host of "aiplatform.googleapis.com" and a port
        /// of 443.
        /// </summary>
        public static string DefaultEndpoint { get; } = "aiplatform.googleapis.com:443";

        /// <summary>The default JobService scopes.</summary>
        /// <remarks>
        /// The default JobService scopes are:
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
        /// Asynchronously creates a <see cref="JobServiceClient"/> using the default credentials, endpoint and
        /// settings. To specify custom credentials or other settings, use <see cref="JobServiceClientBuilder"/>.
        /// </summary>
        /// <param name="cancellationToken">
        /// The <see cref="st::CancellationToken"/> to use while creating the client.
        /// </param>
        /// <returns>The task representing the created <see cref="JobServiceClient"/>.</returns>
        public static stt::Task<JobServiceClient> CreateAsync(st::CancellationToken cancellationToken = default) =>
            new JobServiceClientBuilder().BuildAsync(cancellationToken);

        /// <summary>
        /// Synchronously creates a <see cref="JobServiceClient"/> using the default credentials, endpoint and settings.
        /// To specify custom credentials or other settings, use <see cref="JobServiceClientBuilder"/>.
        /// </summary>
        /// <returns>The created <see cref="JobServiceClient"/>.</returns>
        public static JobServiceClient Create() => new JobServiceClientBuilder().Build();

        /// <summary>
        /// Creates a <see cref="JobServiceClient"/> which uses the specified call invoker for remote operations.
        /// </summary>
        /// <param name="callInvoker">
        /// The <see cref="grpccore::CallInvoker"/> for remote operations. Must not be null.
        /// </param>
        /// <param name="settings">Optional <see cref="JobServiceSettings"/>.</param>
        /// <returns>The created <see cref="JobServiceClient"/>.</returns>
        internal static JobServiceClient Create(grpccore::CallInvoker callInvoker, JobServiceSettings settings = null)
        {
            gax::GaxPreconditions.CheckNotNull(callInvoker, nameof(callInvoker));
            grpcinter::Interceptor interceptor = settings?.Interceptor;
            if (interceptor != null)
            {
                callInvoker = grpcinter::CallInvokerExtensions.Intercept(callInvoker, interceptor);
            }
            JobService.JobServiceClient grpcClient = new JobService.JobServiceClient(callInvoker);
            return new JobServiceClientImpl(grpcClient, settings);
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

        /// <summary>The underlying gRPC JobService client</summary>
        public virtual JobService.JobServiceClient GrpcClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob CreateCustomJob(CreateCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(CreateCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(CreateCustomJobRequest request, st::CancellationToken cancellationToken) =>
            CreateCustomJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob CreateCustomJob(string parent, CustomJob customJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateCustomJob(new CreateCustomJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                CustomJob = gax::GaxPreconditions.CheckNotNull(customJob, nameof(customJob)),
            }, callSettings);

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(string parent, CustomJob customJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateCustomJobAsync(new CreateCustomJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                CustomJob = gax::GaxPreconditions.CheckNotNull(customJob, nameof(customJob)),
            }, callSettings);

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(string parent, CustomJob customJob, st::CancellationToken cancellationToken) =>
            CreateCustomJobAsync(parent, customJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob CreateCustomJob(gagr::LocationName parent, CustomJob customJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateCustomJob(new CreateCustomJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                CustomJob = gax::GaxPreconditions.CheckNotNull(customJob, nameof(customJob)),
            }, callSettings);

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(gagr::LocationName parent, CustomJob customJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateCustomJobAsync(new CreateCustomJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                CustomJob = gax::GaxPreconditions.CheckNotNull(customJob, nameof(customJob)),
            }, callSettings);

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the CustomJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="customJob">
        /// Required. The CustomJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> CreateCustomJobAsync(gagr::LocationName parent, CustomJob customJob, st::CancellationToken cancellationToken) =>
            CreateCustomJobAsync(parent, customJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob GetCustomJob(GetCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(GetCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(GetCustomJobRequest request, st::CancellationToken cancellationToken) =>
            GetCustomJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob GetCustomJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetCustomJob(new GetCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetCustomJobAsync(new GetCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(string name, st::CancellationToken cancellationToken) =>
            GetCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual CustomJob GetCustomJob(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetCustomJob(new GetCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetCustomJobAsync(new GetCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<CustomJob> GetCustomJobAsync(CustomJobName name, st::CancellationToken cancellationToken) =>
            GetCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobs(ListCustomJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobsAsync(ListCustomJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the CustomJobs from.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobs(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListCustomJobs(new ListCustomJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the CustomJobs from.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListCustomJobsAsync(new ListCustomJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the CustomJobs from.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobs(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListCustomJobs(new ListCustomJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the CustomJobs from.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="CustomJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobsAsync(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListCustomJobsAsync(new ListCustomJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteCustomJob(DeleteCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(DeleteCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(DeleteCustomJobRequest request, st::CancellationToken cancellationToken) =>
            DeleteCustomJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>The long-running operations client for <c>DeleteCustomJob</c>.</summary>
        public virtual lro::OperationsClient DeleteCustomJobOperationsClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Poll an operation once, using an <c>operationName</c> from a previous invocation of <c>DeleteCustomJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The result of polling the operation.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> PollOnceDeleteCustomJob(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromName(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteCustomJobOperationsClient, callSettings);

        /// <summary>
        /// Asynchronously poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteCustomJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A task representing the result of polling the operation.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> PollOnceDeleteCustomJobAsync(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromNameAsync(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteCustomJobOperationsClient, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteCustomJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteCustomJob(new DeleteCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteCustomJobAsync(new DeleteCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteCustomJob(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteCustomJob(new DeleteCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteCustomJobAsync(new DeleteCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob resource to be deleted.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(CustomJobName name, st::CancellationToken cancellationToken) =>
            DeleteCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelCustomJob(CancelCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(CancelCustomJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(CancelCustomJobRequest request, st::CancellationToken cancellationToken) =>
            CancelCustomJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelCustomJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelCustomJob(new CancelCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelCustomJobAsync(new CancelCustomJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(string name, st::CancellationToken cancellationToken) =>
            CancelCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelCustomJob(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelCustomJob(new CancelCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(CustomJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelCustomJobAsync(new CancelCustomJobRequest
            {
                CustomJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the CustomJob to cancel.
        /// Format:
        /// `projects/{project}/locations/{location}/customJobs/{custom_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelCustomJobAsync(CustomJobName name, st::CancellationToken cancellationToken) =>
            CancelCustomJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob CreateDataLabelingJob(CreateDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(CreateDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(CreateDataLabelingJobRequest request, st::CancellationToken cancellationToken) =>
            CreateDataLabelingJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob CreateDataLabelingJob(string parent, DataLabelingJob dataLabelingJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateDataLabelingJob(new CreateDataLabelingJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                DataLabelingJob = gax::GaxPreconditions.CheckNotNull(dataLabelingJob, nameof(dataLabelingJob)),
            }, callSettings);

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(string parent, DataLabelingJob dataLabelingJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateDataLabelingJobAsync(new CreateDataLabelingJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                DataLabelingJob = gax::GaxPreconditions.CheckNotNull(dataLabelingJob, nameof(dataLabelingJob)),
            }, callSettings);

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(string parent, DataLabelingJob dataLabelingJob, st::CancellationToken cancellationToken) =>
            CreateDataLabelingJobAsync(parent, dataLabelingJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob CreateDataLabelingJob(gagr::LocationName parent, DataLabelingJob dataLabelingJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateDataLabelingJob(new CreateDataLabelingJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                DataLabelingJob = gax::GaxPreconditions.CheckNotNull(dataLabelingJob, nameof(dataLabelingJob)),
            }, callSettings);

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(gagr::LocationName parent, DataLabelingJob dataLabelingJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateDataLabelingJobAsync(new CreateDataLabelingJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                DataLabelingJob = gax::GaxPreconditions.CheckNotNull(dataLabelingJob, nameof(dataLabelingJob)),
            }, callSettings);

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="dataLabelingJob">
        /// Required. The DataLabelingJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(gagr::LocationName parent, DataLabelingJob dataLabelingJob, st::CancellationToken cancellationToken) =>
            CreateDataLabelingJobAsync(parent, dataLabelingJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob GetDataLabelingJob(GetDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(GetDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(GetDataLabelingJobRequest request, st::CancellationToken cancellationToken) =>
            GetDataLabelingJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob GetDataLabelingJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataLabelingJob(new GetDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataLabelingJobAsync(new GetDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(string name, st::CancellationToken cancellationToken) =>
            GetDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataLabelingJob GetDataLabelingJob(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataLabelingJob(new GetDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataLabelingJobAsync(new GetDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataLabelingJob> GetDataLabelingJobAsync(DataLabelingJobName name, st::CancellationToken cancellationToken) =>
            GetDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobs(ListDataLabelingJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobsAsync(ListDataLabelingJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobs(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListDataLabelingJobs(new ListDataLabelingJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListDataLabelingJobsAsync(new ListDataLabelingJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobs(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListDataLabelingJobs(new ListDataLabelingJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent of the DataLabelingJob.
        /// Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobsAsync(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListDataLabelingJobsAsync(new ListDataLabelingJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteDataLabelingJob(DeleteDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(DeleteDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(DeleteDataLabelingJobRequest request, st::CancellationToken cancellationToken) =>
            DeleteDataLabelingJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>The long-running operations client for <c>DeleteDataLabelingJob</c>.</summary>
        public virtual lro::OperationsClient DeleteDataLabelingJobOperationsClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Poll an operation once, using an <c>operationName</c> from a previous invocation of <c>DeleteDataLabelingJob</c>
        /// .
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The result of polling the operation.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> PollOnceDeleteDataLabelingJob(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromName(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteDataLabelingJobOperationsClient, callSettings);

        /// <summary>
        /// Asynchronously poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteDataLabelingJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A task representing the result of polling the operation.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> PollOnceDeleteDataLabelingJobAsync(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromNameAsync(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteDataLabelingJobOperationsClient, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteDataLabelingJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteDataLabelingJob(new DeleteDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteDataLabelingJobAsync(new DeleteDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteDataLabelingJob(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteDataLabelingJob(new DeleteDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteDataLabelingJobAsync(new DeleteDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(DataLabelingJobName name, st::CancellationToken cancellationToken) =>
            DeleteDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelDataLabelingJob(CancelDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(CancelDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(CancelDataLabelingJobRequest request, st::CancellationToken cancellationToken) =>
            CancelDataLabelingJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelDataLabelingJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelDataLabelingJob(new CancelDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelDataLabelingJobAsync(new CancelDataLabelingJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(string name, st::CancellationToken cancellationToken) =>
            CancelDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelDataLabelingJob(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelDataLabelingJob(new CancelDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(DataLabelingJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelDataLabelingJobAsync(new CancelDataLabelingJobRequest
            {
                DataLabelingJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the DataLabelingJob.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/dataLabelingJobs/{data_labeling_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelDataLabelingJobAsync(DataLabelingJobName name, st::CancellationToken cancellationToken) =>
            CancelDataLabelingJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob CreateHyperparameterTuningJob(CreateHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(CreateHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(CreateHyperparameterTuningJobRequest request, st::CancellationToken cancellationToken) =>
            CreateHyperparameterTuningJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob CreateHyperparameterTuningJob(string parent, HyperparameterTuningJob hyperparameterTuningJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateHyperparameterTuningJob(new CreateHyperparameterTuningJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                HyperparameterTuningJob = gax::GaxPreconditions.CheckNotNull(hyperparameterTuningJob, nameof(hyperparameterTuningJob)),
            }, callSettings);

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(string parent, HyperparameterTuningJob hyperparameterTuningJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateHyperparameterTuningJobAsync(new CreateHyperparameterTuningJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                HyperparameterTuningJob = gax::GaxPreconditions.CheckNotNull(hyperparameterTuningJob, nameof(hyperparameterTuningJob)),
            }, callSettings);

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(string parent, HyperparameterTuningJob hyperparameterTuningJob, st::CancellationToken cancellationToken) =>
            CreateHyperparameterTuningJobAsync(parent, hyperparameterTuningJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob CreateHyperparameterTuningJob(gagr::LocationName parent, HyperparameterTuningJob hyperparameterTuningJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateHyperparameterTuningJob(new CreateHyperparameterTuningJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                HyperparameterTuningJob = gax::GaxPreconditions.CheckNotNull(hyperparameterTuningJob, nameof(hyperparameterTuningJob)),
            }, callSettings);

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(gagr::LocationName parent, HyperparameterTuningJob hyperparameterTuningJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateHyperparameterTuningJobAsync(new CreateHyperparameterTuningJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                HyperparameterTuningJob = gax::GaxPreconditions.CheckNotNull(hyperparameterTuningJob, nameof(hyperparameterTuningJob)),
            }, callSettings);

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the HyperparameterTuningJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="hyperparameterTuningJob">
        /// Required. The HyperparameterTuningJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(gagr::LocationName parent, HyperparameterTuningJob hyperparameterTuningJob, st::CancellationToken cancellationToken) =>
            CreateHyperparameterTuningJobAsync(parent, hyperparameterTuningJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob GetHyperparameterTuningJob(GetHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(GetHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(GetHyperparameterTuningJobRequest request, st::CancellationToken cancellationToken) =>
            GetHyperparameterTuningJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob GetHyperparameterTuningJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetHyperparameterTuningJob(new GetHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetHyperparameterTuningJobAsync(new GetHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(string name, st::CancellationToken cancellationToken) =>
            GetHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual HyperparameterTuningJob GetHyperparameterTuningJob(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetHyperparameterTuningJob(new GetHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetHyperparameterTuningJobAsync(new GetHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(HyperparameterTuningJobName name, st::CancellationToken cancellationToken) =>
            GetHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobs(ListHyperparameterTuningJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobsAsync(ListHyperparameterTuningJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the HyperparameterTuningJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobs(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListHyperparameterTuningJobs(new ListHyperparameterTuningJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the HyperparameterTuningJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListHyperparameterTuningJobsAsync(new ListHyperparameterTuningJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the HyperparameterTuningJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobs(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListHyperparameterTuningJobs(new ListHyperparameterTuningJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the HyperparameterTuningJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobsAsync(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListHyperparameterTuningJobsAsync(new ListHyperparameterTuningJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteHyperparameterTuningJob(DeleteHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(DeleteHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(DeleteHyperparameterTuningJobRequest request, st::CancellationToken cancellationToken) =>
            DeleteHyperparameterTuningJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>The long-running operations client for <c>DeleteHyperparameterTuningJob</c>.</summary>
        public virtual lro::OperationsClient DeleteHyperparameterTuningJobOperationsClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteHyperparameterTuningJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The result of polling the operation.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> PollOnceDeleteHyperparameterTuningJob(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromName(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteHyperparameterTuningJobOperationsClient, callSettings);

        /// <summary>
        /// Asynchronously poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteHyperparameterTuningJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A task representing the result of polling the operation.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> PollOnceDeleteHyperparameterTuningJobAsync(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromNameAsync(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteHyperparameterTuningJobOperationsClient, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteHyperparameterTuningJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteHyperparameterTuningJob(new DeleteHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteHyperparameterTuningJobAsync(new DeleteHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteHyperparameterTuningJob(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteHyperparameterTuningJob(new DeleteHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteHyperparameterTuningJobAsync(new DeleteHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(HyperparameterTuningJobName name, st::CancellationToken cancellationToken) =>
            DeleteHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelHyperparameterTuningJob(CancelHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(CancelHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(CancelHyperparameterTuningJobRequest request, st::CancellationToken cancellationToken) =>
            CancelHyperparameterTuningJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelHyperparameterTuningJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelHyperparameterTuningJob(new CancelHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelHyperparameterTuningJobAsync(new CancelHyperparameterTuningJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(string name, st::CancellationToken cancellationToken) =>
            CancelHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelHyperparameterTuningJob(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelHyperparameterTuningJob(new CancelHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(HyperparameterTuningJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelHyperparameterTuningJobAsync(new CancelHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the HyperparameterTuningJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelHyperparameterTuningJobAsync(HyperparameterTuningJobName name, st::CancellationToken cancellationToken) =>
            CancelHyperparameterTuningJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob CreateBatchPredictionJob(CreateBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(CreateBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(CreateBatchPredictionJobRequest request, st::CancellationToken cancellationToken) =>
            CreateBatchPredictionJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob CreateBatchPredictionJob(string parent, BatchPredictionJob batchPredictionJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateBatchPredictionJob(new CreateBatchPredictionJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                BatchPredictionJob = gax::GaxPreconditions.CheckNotNull(batchPredictionJob, nameof(batchPredictionJob)),
            }, callSettings);

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(string parent, BatchPredictionJob batchPredictionJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateBatchPredictionJobAsync(new CreateBatchPredictionJobRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                BatchPredictionJob = gax::GaxPreconditions.CheckNotNull(batchPredictionJob, nameof(batchPredictionJob)),
            }, callSettings);

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(string parent, BatchPredictionJob batchPredictionJob, st::CancellationToken cancellationToken) =>
            CreateBatchPredictionJobAsync(parent, batchPredictionJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob CreateBatchPredictionJob(gagr::LocationName parent, BatchPredictionJob batchPredictionJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateBatchPredictionJob(new CreateBatchPredictionJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                BatchPredictionJob = gax::GaxPreconditions.CheckNotNull(batchPredictionJob, nameof(batchPredictionJob)),
            }, callSettings);

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(gagr::LocationName parent, BatchPredictionJob batchPredictionJob, gaxgrpc::CallSettings callSettings = null) =>
            CreateBatchPredictionJobAsync(new CreateBatchPredictionJobRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                BatchPredictionJob = gax::GaxPreconditions.CheckNotNull(batchPredictionJob, nameof(batchPredictionJob)),
            }, callSettings);

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to create the BatchPredictionJob in.
        /// Format: `projects/{project}/locations/{location}`
        /// </param>
        /// <param name="batchPredictionJob">
        /// Required. The BatchPredictionJob to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(gagr::LocationName parent, BatchPredictionJob batchPredictionJob, st::CancellationToken cancellationToken) =>
            CreateBatchPredictionJobAsync(parent, batchPredictionJob, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob GetBatchPredictionJob(GetBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(GetBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(GetBatchPredictionJobRequest request, st::CancellationToken cancellationToken) =>
            GetBatchPredictionJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob GetBatchPredictionJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetBatchPredictionJob(new GetBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetBatchPredictionJobAsync(new GetBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(string name, st::CancellationToken cancellationToken) =>
            GetBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchPredictionJob GetBatchPredictionJob(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetBatchPredictionJob(new GetBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            GetBatchPredictionJobAsync(new GetBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(BatchPredictionJobName name, st::CancellationToken cancellationToken) =>
            GetBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobs(ListBatchPredictionJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobsAsync(ListBatchPredictionJobsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the BatchPredictionJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobs(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListBatchPredictionJobs(new ListBatchPredictionJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the BatchPredictionJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListBatchPredictionJobsAsync(new ListBatchPredictionJobsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the BatchPredictionJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobs(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListBatchPredictionJobs(new ListBatchPredictionJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="parent">
        /// Required. The resource name of the Location to list the BatchPredictionJobs
        /// from. Format: `projects/{project}/locations/{location}`
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
        /// <returns>A pageable asynchronous sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobsAsync(gagr::LocationName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListBatchPredictionJobsAsync(new ListBatchPredictionJobsRequest
            {
                ParentAsLocationName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteBatchPredictionJob(DeleteBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(DeleteBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(DeleteBatchPredictionJobRequest request, st::CancellationToken cancellationToken) =>
            DeleteBatchPredictionJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>The long-running operations client for <c>DeleteBatchPredictionJob</c>.</summary>
        public virtual lro::OperationsClient DeleteBatchPredictionJobOperationsClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteBatchPredictionJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The result of polling the operation.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> PollOnceDeleteBatchPredictionJob(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromName(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteBatchPredictionJobOperationsClient, callSettings);

        /// <summary>
        /// Asynchronously poll an operation once, using an <c>operationName</c> from a previous invocation of
        /// <c>DeleteBatchPredictionJob</c>.
        /// </summary>
        /// <param name="operationName">
        /// The name of a previously invoked operation. Must not be <c>null</c> or empty.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A task representing the result of polling the operation.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> PollOnceDeleteBatchPredictionJobAsync(string operationName, gaxgrpc::CallSettings callSettings = null) =>
            lro::Operation<wkt::Empty, DeleteOperationMetadata>.PollOnceFromNameAsync(gax::GaxPreconditions.CheckNotNullOrEmpty(operationName, nameof(operationName)), DeleteBatchPredictionJobOperationsClient, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteBatchPredictionJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteBatchPredictionJob(new DeleteBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteBatchPredictionJobAsync(new DeleteBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteBatchPredictionJob(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteBatchPredictionJob(new DeleteBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteBatchPredictionJobAsync(new DeleteBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob resource to be deleted.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(BatchPredictionJobName name, st::CancellationToken cancellationToken) =>
            DeleteBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelBatchPredictionJob(CancelBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(CancelBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(CancelBatchPredictionJobRequest request, st::CancellationToken cancellationToken) =>
            CancelBatchPredictionJobAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelBatchPredictionJob(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelBatchPredictionJob(new CancelBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            CancelBatchPredictionJobAsync(new CancelBatchPredictionJobRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(string name, st::CancellationToken cancellationToken) =>
            CancelBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void CancelBatchPredictionJob(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelBatchPredictionJob(new CancelBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(BatchPredictionJobName name, gaxgrpc::CallSettings callSettings = null) =>
            CancelBatchPredictionJobAsync(new CancelBatchPredictionJobRequest
            {
                BatchPredictionJobName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the BatchPredictionJob to cancel.
        /// Format:
        /// 
        /// `projects/{project}/locations/{location}/batchPredictionJobs/{batch_prediction_job}`
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task CancelBatchPredictionJobAsync(BatchPredictionJobName name, st::CancellationToken cancellationToken) =>
            CancelBatchPredictionJobAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));
    }

    /// <summary>JobService client wrapper implementation, for convenient use.</summary>
    /// <remarks>
    /// A service for creating and managing AI Platform's jobs.
    /// </remarks>
    public sealed partial class JobServiceClientImpl : JobServiceClient
    {
        private readonly gaxgrpc::ApiCall<CreateCustomJobRequest, CustomJob> _callCreateCustomJob;

        private readonly gaxgrpc::ApiCall<GetCustomJobRequest, CustomJob> _callGetCustomJob;

        private readonly gaxgrpc::ApiCall<ListCustomJobsRequest, ListCustomJobsResponse> _callListCustomJobs;

        private readonly gaxgrpc::ApiCall<DeleteCustomJobRequest, lro::Operation> _callDeleteCustomJob;

        private readonly gaxgrpc::ApiCall<CancelCustomJobRequest, wkt::Empty> _callCancelCustomJob;

        private readonly gaxgrpc::ApiCall<CreateDataLabelingJobRequest, DataLabelingJob> _callCreateDataLabelingJob;

        private readonly gaxgrpc::ApiCall<GetDataLabelingJobRequest, DataLabelingJob> _callGetDataLabelingJob;

        private readonly gaxgrpc::ApiCall<ListDataLabelingJobsRequest, ListDataLabelingJobsResponse> _callListDataLabelingJobs;

        private readonly gaxgrpc::ApiCall<DeleteDataLabelingJobRequest, lro::Operation> _callDeleteDataLabelingJob;

        private readonly gaxgrpc::ApiCall<CancelDataLabelingJobRequest, wkt::Empty> _callCancelDataLabelingJob;

        private readonly gaxgrpc::ApiCall<CreateHyperparameterTuningJobRequest, HyperparameterTuningJob> _callCreateHyperparameterTuningJob;

        private readonly gaxgrpc::ApiCall<GetHyperparameterTuningJobRequest, HyperparameterTuningJob> _callGetHyperparameterTuningJob;

        private readonly gaxgrpc::ApiCall<ListHyperparameterTuningJobsRequest, ListHyperparameterTuningJobsResponse> _callListHyperparameterTuningJobs;

        private readonly gaxgrpc::ApiCall<DeleteHyperparameterTuningJobRequest, lro::Operation> _callDeleteHyperparameterTuningJob;

        private readonly gaxgrpc::ApiCall<CancelHyperparameterTuningJobRequest, wkt::Empty> _callCancelHyperparameterTuningJob;

        private readonly gaxgrpc::ApiCall<CreateBatchPredictionJobRequest, BatchPredictionJob> _callCreateBatchPredictionJob;

        private readonly gaxgrpc::ApiCall<GetBatchPredictionJobRequest, BatchPredictionJob> _callGetBatchPredictionJob;

        private readonly gaxgrpc::ApiCall<ListBatchPredictionJobsRequest, ListBatchPredictionJobsResponse> _callListBatchPredictionJobs;

        private readonly gaxgrpc::ApiCall<DeleteBatchPredictionJobRequest, lro::Operation> _callDeleteBatchPredictionJob;

        private readonly gaxgrpc::ApiCall<CancelBatchPredictionJobRequest, wkt::Empty> _callCancelBatchPredictionJob;

        /// <summary>
        /// Constructs a client wrapper for the JobService service, with the specified gRPC client and settings.
        /// </summary>
        /// <param name="grpcClient">The underlying gRPC client.</param>
        /// <param name="settings">The base <see cref="JobServiceSettings"/> used within this client.</param>
        public JobServiceClientImpl(JobService.JobServiceClient grpcClient, JobServiceSettings settings)
        {
            GrpcClient = grpcClient;
            JobServiceSettings effectiveSettings = settings ?? JobServiceSettings.GetDefault();
            gaxgrpc::ClientHelper clientHelper = new gaxgrpc::ClientHelper(effectiveSettings);
            DeleteCustomJobOperationsClient = new lro::OperationsClientImpl(grpcClient.CreateOperationsClient(), effectiveSettings.DeleteCustomJobOperationsSettings);
            DeleteDataLabelingJobOperationsClient = new lro::OperationsClientImpl(grpcClient.CreateOperationsClient(), effectiveSettings.DeleteDataLabelingJobOperationsSettings);
            DeleteHyperparameterTuningJobOperationsClient = new lro::OperationsClientImpl(grpcClient.CreateOperationsClient(), effectiveSettings.DeleteHyperparameterTuningJobOperationsSettings);
            DeleteBatchPredictionJobOperationsClient = new lro::OperationsClientImpl(grpcClient.CreateOperationsClient(), effectiveSettings.DeleteBatchPredictionJobOperationsSettings);
            _callCreateCustomJob = clientHelper.BuildApiCall<CreateCustomJobRequest, CustomJob>(grpcClient.CreateCustomJobAsync, grpcClient.CreateCustomJob, effectiveSettings.CreateCustomJobSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateCustomJob);
            Modify_CreateCustomJobApiCall(ref _callCreateCustomJob);
            _callGetCustomJob = clientHelper.BuildApiCall<GetCustomJobRequest, CustomJob>(grpcClient.GetCustomJobAsync, grpcClient.GetCustomJob, effectiveSettings.GetCustomJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetCustomJob);
            Modify_GetCustomJobApiCall(ref _callGetCustomJob);
            _callListCustomJobs = clientHelper.BuildApiCall<ListCustomJobsRequest, ListCustomJobsResponse>(grpcClient.ListCustomJobsAsync, grpcClient.ListCustomJobs, effectiveSettings.ListCustomJobsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListCustomJobs);
            Modify_ListCustomJobsApiCall(ref _callListCustomJobs);
            _callDeleteCustomJob = clientHelper.BuildApiCall<DeleteCustomJobRequest, lro::Operation>(grpcClient.DeleteCustomJobAsync, grpcClient.DeleteCustomJob, effectiveSettings.DeleteCustomJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteCustomJob);
            Modify_DeleteCustomJobApiCall(ref _callDeleteCustomJob);
            _callCancelCustomJob = clientHelper.BuildApiCall<CancelCustomJobRequest, wkt::Empty>(grpcClient.CancelCustomJobAsync, grpcClient.CancelCustomJob, effectiveSettings.CancelCustomJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callCancelCustomJob);
            Modify_CancelCustomJobApiCall(ref _callCancelCustomJob);
            _callCreateDataLabelingJob = clientHelper.BuildApiCall<CreateDataLabelingJobRequest, DataLabelingJob>(grpcClient.CreateDataLabelingJobAsync, grpcClient.CreateDataLabelingJob, effectiveSettings.CreateDataLabelingJobSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateDataLabelingJob);
            Modify_CreateDataLabelingJobApiCall(ref _callCreateDataLabelingJob);
            _callGetDataLabelingJob = clientHelper.BuildApiCall<GetDataLabelingJobRequest, DataLabelingJob>(grpcClient.GetDataLabelingJobAsync, grpcClient.GetDataLabelingJob, effectiveSettings.GetDataLabelingJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetDataLabelingJob);
            Modify_GetDataLabelingJobApiCall(ref _callGetDataLabelingJob);
            _callListDataLabelingJobs = clientHelper.BuildApiCall<ListDataLabelingJobsRequest, ListDataLabelingJobsResponse>(grpcClient.ListDataLabelingJobsAsync, grpcClient.ListDataLabelingJobs, effectiveSettings.ListDataLabelingJobsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListDataLabelingJobs);
            Modify_ListDataLabelingJobsApiCall(ref _callListDataLabelingJobs);
            _callDeleteDataLabelingJob = clientHelper.BuildApiCall<DeleteDataLabelingJobRequest, lro::Operation>(grpcClient.DeleteDataLabelingJobAsync, grpcClient.DeleteDataLabelingJob, effectiveSettings.DeleteDataLabelingJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteDataLabelingJob);
            Modify_DeleteDataLabelingJobApiCall(ref _callDeleteDataLabelingJob);
            _callCancelDataLabelingJob = clientHelper.BuildApiCall<CancelDataLabelingJobRequest, wkt::Empty>(grpcClient.CancelDataLabelingJobAsync, grpcClient.CancelDataLabelingJob, effectiveSettings.CancelDataLabelingJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callCancelDataLabelingJob);
            Modify_CancelDataLabelingJobApiCall(ref _callCancelDataLabelingJob);
            _callCreateHyperparameterTuningJob = clientHelper.BuildApiCall<CreateHyperparameterTuningJobRequest, HyperparameterTuningJob>(grpcClient.CreateHyperparameterTuningJobAsync, grpcClient.CreateHyperparameterTuningJob, effectiveSettings.CreateHyperparameterTuningJobSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateHyperparameterTuningJob);
            Modify_CreateHyperparameterTuningJobApiCall(ref _callCreateHyperparameterTuningJob);
            _callGetHyperparameterTuningJob = clientHelper.BuildApiCall<GetHyperparameterTuningJobRequest, HyperparameterTuningJob>(grpcClient.GetHyperparameterTuningJobAsync, grpcClient.GetHyperparameterTuningJob, effectiveSettings.GetHyperparameterTuningJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetHyperparameterTuningJob);
            Modify_GetHyperparameterTuningJobApiCall(ref _callGetHyperparameterTuningJob);
            _callListHyperparameterTuningJobs = clientHelper.BuildApiCall<ListHyperparameterTuningJobsRequest, ListHyperparameterTuningJobsResponse>(grpcClient.ListHyperparameterTuningJobsAsync, grpcClient.ListHyperparameterTuningJobs, effectiveSettings.ListHyperparameterTuningJobsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListHyperparameterTuningJobs);
            Modify_ListHyperparameterTuningJobsApiCall(ref _callListHyperparameterTuningJobs);
            _callDeleteHyperparameterTuningJob = clientHelper.BuildApiCall<DeleteHyperparameterTuningJobRequest, lro::Operation>(grpcClient.DeleteHyperparameterTuningJobAsync, grpcClient.DeleteHyperparameterTuningJob, effectiveSettings.DeleteHyperparameterTuningJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteHyperparameterTuningJob);
            Modify_DeleteHyperparameterTuningJobApiCall(ref _callDeleteHyperparameterTuningJob);
            _callCancelHyperparameterTuningJob = clientHelper.BuildApiCall<CancelHyperparameterTuningJobRequest, wkt::Empty>(grpcClient.CancelHyperparameterTuningJobAsync, grpcClient.CancelHyperparameterTuningJob, effectiveSettings.CancelHyperparameterTuningJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callCancelHyperparameterTuningJob);
            Modify_CancelHyperparameterTuningJobApiCall(ref _callCancelHyperparameterTuningJob);
            _callCreateBatchPredictionJob = clientHelper.BuildApiCall<CreateBatchPredictionJobRequest, BatchPredictionJob>(grpcClient.CreateBatchPredictionJobAsync, grpcClient.CreateBatchPredictionJob, effectiveSettings.CreateBatchPredictionJobSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateBatchPredictionJob);
            Modify_CreateBatchPredictionJobApiCall(ref _callCreateBatchPredictionJob);
            _callGetBatchPredictionJob = clientHelper.BuildApiCall<GetBatchPredictionJobRequest, BatchPredictionJob>(grpcClient.GetBatchPredictionJobAsync, grpcClient.GetBatchPredictionJob, effectiveSettings.GetBatchPredictionJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetBatchPredictionJob);
            Modify_GetBatchPredictionJobApiCall(ref _callGetBatchPredictionJob);
            _callListBatchPredictionJobs = clientHelper.BuildApiCall<ListBatchPredictionJobsRequest, ListBatchPredictionJobsResponse>(grpcClient.ListBatchPredictionJobsAsync, grpcClient.ListBatchPredictionJobs, effectiveSettings.ListBatchPredictionJobsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListBatchPredictionJobs);
            Modify_ListBatchPredictionJobsApiCall(ref _callListBatchPredictionJobs);
            _callDeleteBatchPredictionJob = clientHelper.BuildApiCall<DeleteBatchPredictionJobRequest, lro::Operation>(grpcClient.DeleteBatchPredictionJobAsync, grpcClient.DeleteBatchPredictionJob, effectiveSettings.DeleteBatchPredictionJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteBatchPredictionJob);
            Modify_DeleteBatchPredictionJobApiCall(ref _callDeleteBatchPredictionJob);
            _callCancelBatchPredictionJob = clientHelper.BuildApiCall<CancelBatchPredictionJobRequest, wkt::Empty>(grpcClient.CancelBatchPredictionJobAsync, grpcClient.CancelBatchPredictionJob, effectiveSettings.CancelBatchPredictionJobSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callCancelBatchPredictionJob);
            Modify_CancelBatchPredictionJobApiCall(ref _callCancelBatchPredictionJob);
            OnConstruction(grpcClient, effectiveSettings, clientHelper);
        }

        partial void Modify_ApiCall<TRequest, TResponse>(ref gaxgrpc::ApiCall<TRequest, TResponse> call) where TRequest : class, proto::IMessage<TRequest> where TResponse : class, proto::IMessage<TResponse>;

        partial void Modify_CreateCustomJobApiCall(ref gaxgrpc::ApiCall<CreateCustomJobRequest, CustomJob> call);

        partial void Modify_GetCustomJobApiCall(ref gaxgrpc::ApiCall<GetCustomJobRequest, CustomJob> call);

        partial void Modify_ListCustomJobsApiCall(ref gaxgrpc::ApiCall<ListCustomJobsRequest, ListCustomJobsResponse> call);

        partial void Modify_DeleteCustomJobApiCall(ref gaxgrpc::ApiCall<DeleteCustomJobRequest, lro::Operation> call);

        partial void Modify_CancelCustomJobApiCall(ref gaxgrpc::ApiCall<CancelCustomJobRequest, wkt::Empty> call);

        partial void Modify_CreateDataLabelingJobApiCall(ref gaxgrpc::ApiCall<CreateDataLabelingJobRequest, DataLabelingJob> call);

        partial void Modify_GetDataLabelingJobApiCall(ref gaxgrpc::ApiCall<GetDataLabelingJobRequest, DataLabelingJob> call);

        partial void Modify_ListDataLabelingJobsApiCall(ref gaxgrpc::ApiCall<ListDataLabelingJobsRequest, ListDataLabelingJobsResponse> call);

        partial void Modify_DeleteDataLabelingJobApiCall(ref gaxgrpc::ApiCall<DeleteDataLabelingJobRequest, lro::Operation> call);

        partial void Modify_CancelDataLabelingJobApiCall(ref gaxgrpc::ApiCall<CancelDataLabelingJobRequest, wkt::Empty> call);

        partial void Modify_CreateHyperparameterTuningJobApiCall(ref gaxgrpc::ApiCall<CreateHyperparameterTuningJobRequest, HyperparameterTuningJob> call);

        partial void Modify_GetHyperparameterTuningJobApiCall(ref gaxgrpc::ApiCall<GetHyperparameterTuningJobRequest, HyperparameterTuningJob> call);

        partial void Modify_ListHyperparameterTuningJobsApiCall(ref gaxgrpc::ApiCall<ListHyperparameterTuningJobsRequest, ListHyperparameterTuningJobsResponse> call);

        partial void Modify_DeleteHyperparameterTuningJobApiCall(ref gaxgrpc::ApiCall<DeleteHyperparameterTuningJobRequest, lro::Operation> call);

        partial void Modify_CancelHyperparameterTuningJobApiCall(ref gaxgrpc::ApiCall<CancelHyperparameterTuningJobRequest, wkt::Empty> call);

        partial void Modify_CreateBatchPredictionJobApiCall(ref gaxgrpc::ApiCall<CreateBatchPredictionJobRequest, BatchPredictionJob> call);

        partial void Modify_GetBatchPredictionJobApiCall(ref gaxgrpc::ApiCall<GetBatchPredictionJobRequest, BatchPredictionJob> call);

        partial void Modify_ListBatchPredictionJobsApiCall(ref gaxgrpc::ApiCall<ListBatchPredictionJobsRequest, ListBatchPredictionJobsResponse> call);

        partial void Modify_DeleteBatchPredictionJobApiCall(ref gaxgrpc::ApiCall<DeleteBatchPredictionJobRequest, lro::Operation> call);

        partial void Modify_CancelBatchPredictionJobApiCall(ref gaxgrpc::ApiCall<CancelBatchPredictionJobRequest, wkt::Empty> call);

        partial void OnConstruction(JobService.JobServiceClient grpcClient, JobServiceSettings effectiveSettings, gaxgrpc::ClientHelper clientHelper);

        /// <summary>The underlying gRPC JobService client</summary>
        public override JobService.JobServiceClient GrpcClient { get; }

        partial void Modify_CreateCustomJobRequest(ref CreateCustomJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetCustomJobRequest(ref GetCustomJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListCustomJobsRequest(ref ListCustomJobsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteCustomJobRequest(ref DeleteCustomJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CancelCustomJobRequest(ref CancelCustomJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateDataLabelingJobRequest(ref CreateDataLabelingJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetDataLabelingJobRequest(ref GetDataLabelingJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListDataLabelingJobsRequest(ref ListDataLabelingJobsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteDataLabelingJobRequest(ref DeleteDataLabelingJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CancelDataLabelingJobRequest(ref CancelDataLabelingJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateHyperparameterTuningJobRequest(ref CreateHyperparameterTuningJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetHyperparameterTuningJobRequest(ref GetHyperparameterTuningJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListHyperparameterTuningJobsRequest(ref ListHyperparameterTuningJobsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteHyperparameterTuningJobRequest(ref DeleteHyperparameterTuningJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CancelHyperparameterTuningJobRequest(ref CancelHyperparameterTuningJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateBatchPredictionJobRequest(ref CreateBatchPredictionJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetBatchPredictionJobRequest(ref GetBatchPredictionJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListBatchPredictionJobsRequest(ref ListBatchPredictionJobsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteBatchPredictionJobRequest(ref DeleteBatchPredictionJobRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CancelBatchPredictionJobRequest(ref CancelBatchPredictionJobRequest request, ref gaxgrpc::CallSettings settings);

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override CustomJob CreateCustomJob(CreateCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateCustomJobRequest(ref request, ref callSettings);
            return _callCreateCustomJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a CustomJob. A created CustomJob right away
        /// will be attempted to be run.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<CustomJob> CreateCustomJobAsync(CreateCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateCustomJobRequest(ref request, ref callSettings);
            return _callCreateCustomJob.Async(request, callSettings);
        }

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override CustomJob GetCustomJob(GetCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetCustomJobRequest(ref request, ref callSettings);
            return _callGetCustomJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<CustomJob> GetCustomJobAsync(GetCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetCustomJobRequest(ref request, ref callSettings);
            return _callGetCustomJob.Async(request, callSettings);
        }

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="CustomJob"/> resources.</returns>
        public override gax::PagedEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobs(ListCustomJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListCustomJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListCustomJobsRequest, ListCustomJobsResponse, CustomJob>(_callListCustomJobs, request, callSettings);
        }

        /// <summary>
        /// Lists CustomJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="CustomJob"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> ListCustomJobsAsync(ListCustomJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListCustomJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListCustomJobsRequest, ListCustomJobsResponse, CustomJob>(_callListCustomJobs, request, callSettings);
        }

        /// <summary>The long-running operations client for <c>DeleteCustomJob</c>.</summary>
        public override lro::OperationsClient DeleteCustomJobOperationsClient { get; }

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteCustomJob(DeleteCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteCustomJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(_callDeleteCustomJob.Sync(request, callSettings), DeleteCustomJobOperationsClient);
        }

        /// <summary>
        /// Deletes a CustomJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override async stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteCustomJobAsync(DeleteCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteCustomJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(await _callDeleteCustomJob.Async(request, callSettings).ConfigureAwait(false), DeleteCustomJobOperationsClient);
        }

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void CancelCustomJob(CancelCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelCustomJobRequest(ref request, ref callSettings);
            _callCancelCustomJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Cancels a CustomJob.
        /// Starts asynchronous cancellation on the CustomJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetCustomJob][google.cloud.aiplatform.v1.JobService.GetCustomJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the CustomJob is not deleted; instead it becomes a job with
        /// a [CustomJob.error][google.cloud.aiplatform.v1.CustomJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
        /// corresponding to `Code.CANCELLED`, and [CustomJob.state][google.cloud.aiplatform.v1.CustomJob.state] is set to
        /// `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task CancelCustomJobAsync(CancelCustomJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelCustomJobRequest(ref request, ref callSettings);
            return _callCancelCustomJob.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override DataLabelingJob CreateDataLabelingJob(CreateDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateDataLabelingJobRequest(ref request, ref callSettings);
            return _callCreateDataLabelingJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<DataLabelingJob> CreateDataLabelingJobAsync(CreateDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateDataLabelingJobRequest(ref request, ref callSettings);
            return _callCreateDataLabelingJob.Async(request, callSettings);
        }

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override DataLabelingJob GetDataLabelingJob(GetDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetDataLabelingJobRequest(ref request, ref callSettings);
            return _callGetDataLabelingJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<DataLabelingJob> GetDataLabelingJobAsync(GetDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetDataLabelingJobRequest(ref request, ref callSettings);
            return _callGetDataLabelingJob.Async(request, callSettings);
        }

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public override gax::PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobs(ListDataLabelingJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListDataLabelingJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListDataLabelingJobsRequest, ListDataLabelingJobsResponse, DataLabelingJob>(_callListDataLabelingJobs, request, callSettings);
        }

        /// <summary>
        /// Lists DataLabelingJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="DataLabelingJob"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> ListDataLabelingJobsAsync(ListDataLabelingJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListDataLabelingJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListDataLabelingJobsRequest, ListDataLabelingJobsResponse, DataLabelingJob>(_callListDataLabelingJobs, request, callSettings);
        }

        /// <summary>The long-running operations client for <c>DeleteDataLabelingJob</c>.</summary>
        public override lro::OperationsClient DeleteDataLabelingJobOperationsClient { get; }

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteDataLabelingJob(DeleteDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteDataLabelingJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(_callDeleteDataLabelingJob.Sync(request, callSettings), DeleteDataLabelingJobOperationsClient);
        }

        /// <summary>
        /// Deletes a DataLabelingJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override async stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteDataLabelingJobAsync(DeleteDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteDataLabelingJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(await _callDeleteDataLabelingJob.Async(request, callSettings).ConfigureAwait(false), DeleteDataLabelingJobOperationsClient);
        }

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void CancelDataLabelingJob(CancelDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelDataLabelingJobRequest(ref request, ref callSettings);
            _callCancelDataLabelingJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Cancels a DataLabelingJob. Success of cancellation is not guaranteed.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task CancelDataLabelingJobAsync(CancelDataLabelingJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelDataLabelingJobRequest(ref request, ref callSettings);
            return _callCancelDataLabelingJob.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override HyperparameterTuningJob CreateHyperparameterTuningJob(CreateHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateHyperparameterTuningJobRequest(ref request, ref callSettings);
            return _callCreateHyperparameterTuningJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<HyperparameterTuningJob> CreateHyperparameterTuningJobAsync(CreateHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateHyperparameterTuningJobRequest(ref request, ref callSettings);
            return _callCreateHyperparameterTuningJob.Async(request, callSettings);
        }

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override HyperparameterTuningJob GetHyperparameterTuningJob(GetHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetHyperparameterTuningJobRequest(ref request, ref callSettings);
            return _callGetHyperparameterTuningJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets a HyperparameterTuningJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<HyperparameterTuningJob> GetHyperparameterTuningJobAsync(GetHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetHyperparameterTuningJobRequest(ref request, ref callSettings);
            return _callGetHyperparameterTuningJob.Async(request, callSettings);
        }

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public override gax::PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobs(ListHyperparameterTuningJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListHyperparameterTuningJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListHyperparameterTuningJobsRequest, ListHyperparameterTuningJobsResponse, HyperparameterTuningJob>(_callListHyperparameterTuningJobs, request, callSettings);
        }

        /// <summary>
        /// Lists HyperparameterTuningJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="HyperparameterTuningJob"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> ListHyperparameterTuningJobsAsync(ListHyperparameterTuningJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListHyperparameterTuningJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListHyperparameterTuningJobsRequest, ListHyperparameterTuningJobsResponse, HyperparameterTuningJob>(_callListHyperparameterTuningJobs, request, callSettings);
        }

        /// <summary>The long-running operations client for <c>DeleteHyperparameterTuningJob</c>.</summary>
        public override lro::OperationsClient DeleteHyperparameterTuningJobOperationsClient { get; }

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteHyperparameterTuningJob(DeleteHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteHyperparameterTuningJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(_callDeleteHyperparameterTuningJob.Sync(request, callSettings), DeleteHyperparameterTuningJobOperationsClient);
        }

        /// <summary>
        /// Deletes a HyperparameterTuningJob.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override async stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteHyperparameterTuningJobAsync(DeleteHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteHyperparameterTuningJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(await _callDeleteHyperparameterTuningJob.Async(request, callSettings).ConfigureAwait(false), DeleteHyperparameterTuningJobOperationsClient);
        }

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void CancelHyperparameterTuningJob(CancelHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelHyperparameterTuningJobRequest(ref request, ref callSettings);
            _callCancelHyperparameterTuningJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Cancels a HyperparameterTuningJob.
        /// Starts asynchronous cancellation on the HyperparameterTuningJob. The server
        /// makes a best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetHyperparameterTuningJob][google.cloud.aiplatform.v1.JobService.GetHyperparameterTuningJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On successful cancellation,
        /// the HyperparameterTuningJob is not deleted; instead it becomes a job with
        /// a [HyperparameterTuningJob.error][google.cloud.aiplatform.v1.HyperparameterTuningJob.error] value with a [google.rpc.Status.code][google.rpc.Status.code]
        /// of 1, corresponding to `Code.CANCELLED`, and
        /// [HyperparameterTuningJob.state][google.cloud.aiplatform.v1.HyperparameterTuningJob.state] is set to `CANCELLED`.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task CancelHyperparameterTuningJobAsync(CancelHyperparameterTuningJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelHyperparameterTuningJobRequest(ref request, ref callSettings);
            return _callCancelHyperparameterTuningJob.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchPredictionJob CreateBatchPredictionJob(CreateBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateBatchPredictionJobRequest(ref request, ref callSettings);
            return _callCreateBatchPredictionJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a BatchPredictionJob. A BatchPredictionJob once created will
        /// right away be attempted to start.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchPredictionJob> CreateBatchPredictionJobAsync(CreateBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateBatchPredictionJobRequest(ref request, ref callSettings);
            return _callCreateBatchPredictionJob.Async(request, callSettings);
        }

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchPredictionJob GetBatchPredictionJob(GetBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetBatchPredictionJobRequest(ref request, ref callSettings);
            return _callGetBatchPredictionJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets a BatchPredictionJob
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchPredictionJob> GetBatchPredictionJobAsync(GetBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetBatchPredictionJobRequest(ref request, ref callSettings);
            return _callGetBatchPredictionJob.Async(request, callSettings);
        }

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public override gax::PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobs(ListBatchPredictionJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListBatchPredictionJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListBatchPredictionJobsRequest, ListBatchPredictionJobsResponse, BatchPredictionJob>(_callListBatchPredictionJobs, request, callSettings);
        }

        /// <summary>
        /// Lists BatchPredictionJobs in a Location.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="BatchPredictionJob"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> ListBatchPredictionJobsAsync(ListBatchPredictionJobsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListBatchPredictionJobsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListBatchPredictionJobsRequest, ListBatchPredictionJobsResponse, BatchPredictionJob>(_callListBatchPredictionJobs, request, callSettings);
        }

        /// <summary>The long-running operations client for <c>DeleteBatchPredictionJob</c>.</summary>
        public override lro::OperationsClient DeleteBatchPredictionJobOperationsClient { get; }

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override lro::Operation<wkt::Empty, DeleteOperationMetadata> DeleteBatchPredictionJob(DeleteBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteBatchPredictionJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(_callDeleteBatchPredictionJob.Sync(request, callSettings), DeleteBatchPredictionJobOperationsClient);
        }

        /// <summary>
        /// Deletes a BatchPredictionJob. Can only be called on jobs that already
        /// finished.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override async stt::Task<lro::Operation<wkt::Empty, DeleteOperationMetadata>> DeleteBatchPredictionJobAsync(DeleteBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteBatchPredictionJobRequest(ref request, ref callSettings);
            return new lro::Operation<wkt::Empty, DeleteOperationMetadata>(await _callDeleteBatchPredictionJob.Async(request, callSettings).ConfigureAwait(false), DeleteBatchPredictionJobOperationsClient);
        }

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void CancelBatchPredictionJob(CancelBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelBatchPredictionJobRequest(ref request, ref callSettings);
            _callCancelBatchPredictionJob.Sync(request, callSettings);
        }

        /// <summary>
        /// Cancels a BatchPredictionJob.
        /// 
        /// Starts asynchronous cancellation on the BatchPredictionJob. The server
        /// makes the best effort to cancel the job, but success is not
        /// guaranteed. Clients can use [JobService.GetBatchPredictionJob][google.cloud.aiplatform.v1.JobService.GetBatchPredictionJob] or
        /// other methods to check whether the cancellation succeeded or whether the
        /// job completed despite cancellation. On a successful cancellation,
        /// the BatchPredictionJob is not deleted;instead its
        /// [BatchPredictionJob.state][google.cloud.aiplatform.v1.BatchPredictionJob.state] is set to `CANCELLED`. Any files already
        /// outputted by the job are not deleted.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task CancelBatchPredictionJobAsync(CancelBatchPredictionJobRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CancelBatchPredictionJobRequest(ref request, ref callSettings);
            return _callCancelBatchPredictionJob.Async(request, callSettings);
        }
    }

    public partial class ListCustomJobsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListDataLabelingJobsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListHyperparameterTuningJobsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListBatchPredictionJobsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListCustomJobsResponse : gaxgrpc::IPageResponse<CustomJob>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<CustomJob> GetEnumerator() => CustomJobs.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListDataLabelingJobsResponse : gaxgrpc::IPageResponse<DataLabelingJob>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<DataLabelingJob> GetEnumerator() => DataLabelingJobs.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListHyperparameterTuningJobsResponse : gaxgrpc::IPageResponse<HyperparameterTuningJob>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<HyperparameterTuningJob> GetEnumerator() => HyperparameterTuningJobs.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListBatchPredictionJobsResponse : gaxgrpc::IPageResponse<BatchPredictionJob>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<BatchPredictionJob> GetEnumerator() => BatchPredictionJobs.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public static partial class JobService
    {
        public partial class JobServiceClient
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
