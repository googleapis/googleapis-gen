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

namespace Google.Analytics.Admin.V1Alpha
{
    /// <summary>Settings for <see cref="AnalyticsAdminServiceClient"/> instances.</summary>
    public sealed partial class AnalyticsAdminServiceSettings : gaxgrpc::ServiceSettingsBase
    {
        /// <summary>Get a new instance of the default <see cref="AnalyticsAdminServiceSettings"/>.</summary>
        /// <returns>A new instance of the default <see cref="AnalyticsAdminServiceSettings"/>.</returns>
        public static AnalyticsAdminServiceSettings GetDefault() => new AnalyticsAdminServiceSettings();

        /// <summary>
        /// Constructs a new <see cref="AnalyticsAdminServiceSettings"/> object with default settings.
        /// </summary>
        public AnalyticsAdminServiceSettings()
        {
        }

        private AnalyticsAdminServiceSettings(AnalyticsAdminServiceSettings existing) : base(existing)
        {
            gax::GaxPreconditions.CheckNotNull(existing, nameof(existing));
            GetAccountSettings = existing.GetAccountSettings;
            ListAccountsSettings = existing.ListAccountsSettings;
            DeleteAccountSettings = existing.DeleteAccountSettings;
            UpdateAccountSettings = existing.UpdateAccountSettings;
            ProvisionAccountTicketSettings = existing.ProvisionAccountTicketSettings;
            ListAccountSummariesSettings = existing.ListAccountSummariesSettings;
            GetPropertySettings = existing.GetPropertySettings;
            ListPropertiesSettings = existing.ListPropertiesSettings;
            CreatePropertySettings = existing.CreatePropertySettings;
            DeletePropertySettings = existing.DeletePropertySettings;
            UpdatePropertySettings = existing.UpdatePropertySettings;
            GetUserLinkSettings = existing.GetUserLinkSettings;
            BatchGetUserLinksSettings = existing.BatchGetUserLinksSettings;
            ListUserLinksSettings = existing.ListUserLinksSettings;
            AuditUserLinksSettings = existing.AuditUserLinksSettings;
            CreateUserLinkSettings = existing.CreateUserLinkSettings;
            BatchCreateUserLinksSettings = existing.BatchCreateUserLinksSettings;
            UpdateUserLinkSettings = existing.UpdateUserLinkSettings;
            BatchUpdateUserLinksSettings = existing.BatchUpdateUserLinksSettings;
            DeleteUserLinkSettings = existing.DeleteUserLinkSettings;
            BatchDeleteUserLinksSettings = existing.BatchDeleteUserLinksSettings;
            GetWebDataStreamSettings = existing.GetWebDataStreamSettings;
            DeleteWebDataStreamSettings = existing.DeleteWebDataStreamSettings;
            UpdateWebDataStreamSettings = existing.UpdateWebDataStreamSettings;
            CreateWebDataStreamSettings = existing.CreateWebDataStreamSettings;
            ListWebDataStreamsSettings = existing.ListWebDataStreamsSettings;
            GetIosAppDataStreamSettings = existing.GetIosAppDataStreamSettings;
            DeleteIosAppDataStreamSettings = existing.DeleteIosAppDataStreamSettings;
            UpdateIosAppDataStreamSettings = existing.UpdateIosAppDataStreamSettings;
            CreateIosAppDataStreamSettings = existing.CreateIosAppDataStreamSettings;
            ListIosAppDataStreamsSettings = existing.ListIosAppDataStreamsSettings;
            GetAndroidAppDataStreamSettings = existing.GetAndroidAppDataStreamSettings;
            DeleteAndroidAppDataStreamSettings = existing.DeleteAndroidAppDataStreamSettings;
            UpdateAndroidAppDataStreamSettings = existing.UpdateAndroidAppDataStreamSettings;
            CreateAndroidAppDataStreamSettings = existing.CreateAndroidAppDataStreamSettings;
            ListAndroidAppDataStreamsSettings = existing.ListAndroidAppDataStreamsSettings;
            GetEnhancedMeasurementSettingsSettings = existing.GetEnhancedMeasurementSettingsSettings;
            UpdateEnhancedMeasurementSettingsSettings = existing.UpdateEnhancedMeasurementSettingsSettings;
            CreateFirebaseLinkSettings = existing.CreateFirebaseLinkSettings;
            UpdateFirebaseLinkSettings = existing.UpdateFirebaseLinkSettings;
            DeleteFirebaseLinkSettings = existing.DeleteFirebaseLinkSettings;
            ListFirebaseLinksSettings = existing.ListFirebaseLinksSettings;
            GetGlobalSiteTagSettings = existing.GetGlobalSiteTagSettings;
            CreateGoogleAdsLinkSettings = existing.CreateGoogleAdsLinkSettings;
            UpdateGoogleAdsLinkSettings = existing.UpdateGoogleAdsLinkSettings;
            DeleteGoogleAdsLinkSettings = existing.DeleteGoogleAdsLinkSettings;
            ListGoogleAdsLinksSettings = existing.ListGoogleAdsLinksSettings;
            GetDataSharingSettingsSettings = existing.GetDataSharingSettingsSettings;
            OnCopy(existing);
        }

        partial void OnCopy(AnalyticsAdminServiceSettings existing);

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetAccount</c> and <c>AnalyticsAdminServiceClient.GetAccountAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetAccountSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListAccounts</c> and <c>AnalyticsAdminServiceClient.ListAccountsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListAccountsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteAccount</c> and <c>AnalyticsAdminServiceClient.DeleteAccountAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteAccountSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateAccount</c> and <c>AnalyticsAdminServiceClient.UpdateAccountAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateAccountSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ProvisionAccountTicket</c> and
        /// <c>AnalyticsAdminServiceClient.ProvisionAccountTicketAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ProvisionAccountTicketSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListAccountSummaries</c> and
        /// <c>AnalyticsAdminServiceClient.ListAccountSummariesAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>Initial retry delay: 1000 milliseconds.</description></item>
        /// <item><description>Retry delay multiplier: 1.3</description></item>
        /// <item><description>Retry maximum delay: 60000 milliseconds.</description></item>
        /// <item><description>Maximum attempts: 5</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListAccountSummariesSettings { get; set; } = gaxgrpc::CallSettingsExtensions.WithRetry(gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000))), gaxgrpc::RetrySettings.FromExponentialBackoff(maxAttempts: 5, initialBackoff: sys::TimeSpan.FromMilliseconds(1000), maxBackoff: sys::TimeSpan.FromMilliseconds(60000), backoffMultiplier: 1.3, retryFilter: gaxgrpc::RetrySettings.FilterForStatusCodes(grpccore::StatusCode.Unavailable, grpccore::StatusCode.Unknown)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetProperty</c> and <c>AnalyticsAdminServiceClient.GetPropertyAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetPropertySettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListProperties</c> and <c>AnalyticsAdminServiceClient.ListPropertiesAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListPropertiesSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateProperty</c> and <c>AnalyticsAdminServiceClient.CreatePropertyAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreatePropertySettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteProperty</c> and <c>AnalyticsAdminServiceClient.DeletePropertyAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeletePropertySettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateProperty</c> and <c>AnalyticsAdminServiceClient.UpdatePropertyAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdatePropertySettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetUserLink</c> and <c>AnalyticsAdminServiceClient.GetUserLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetUserLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.BatchGetUserLinks</c> and
        /// <c>AnalyticsAdminServiceClient.BatchGetUserLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchGetUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListUserLinks</c> and <c>AnalyticsAdminServiceClient.ListUserLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.AuditUserLinks</c> and <c>AnalyticsAdminServiceClient.AuditUserLinksAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings AuditUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateUserLink</c> and <c>AnalyticsAdminServiceClient.CreateUserLinkAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateUserLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.BatchCreateUserLinks</c> and
        /// <c>AnalyticsAdminServiceClient.BatchCreateUserLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchCreateUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateUserLink</c> and <c>AnalyticsAdminServiceClient.UpdateUserLinkAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateUserLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.BatchUpdateUserLinks</c> and
        /// <c>AnalyticsAdminServiceClient.BatchUpdateUserLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchUpdateUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteUserLink</c> and <c>AnalyticsAdminServiceClient.DeleteUserLinkAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteUserLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.BatchDeleteUserLinks</c> and
        /// <c>AnalyticsAdminServiceClient.BatchDeleteUserLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings BatchDeleteUserLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetWebDataStream</c> and <c>AnalyticsAdminServiceClient.GetWebDataStreamAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetWebDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteWebDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.DeleteWebDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>Initial retry delay: 1000 milliseconds.</description></item>
        /// <item><description>Retry delay multiplier: 1.3</description></item>
        /// <item><description>Retry maximum delay: 60000 milliseconds.</description></item>
        /// <item><description>Maximum attempts: 5</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteWebDataStreamSettings { get; set; } = gaxgrpc::CallSettingsExtensions.WithRetry(gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000))), gaxgrpc::RetrySettings.FromExponentialBackoff(maxAttempts: 5, initialBackoff: sys::TimeSpan.FromMilliseconds(1000), maxBackoff: sys::TimeSpan.FromMilliseconds(60000), backoffMultiplier: 1.3, retryFilter: gaxgrpc::RetrySettings.FilterForStatusCodes(grpccore::StatusCode.Unavailable, grpccore::StatusCode.Unknown)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateWebDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateWebDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateWebDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateWebDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.CreateWebDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateWebDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListWebDataStreams</c> and
        /// <c>AnalyticsAdminServiceClient.ListWebDataStreamsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListWebDataStreamsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetIosAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.GetIosAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetIosAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteIosAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.DeleteIosAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteIosAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateIosAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateIosAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateIosAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateIosAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.CreateIosAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateIosAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListIosAppDataStreams</c> and
        /// <c>AnalyticsAdminServiceClient.ListIosAppDataStreamsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListIosAppDataStreamsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetAndroidAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.GetAndroidAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetAndroidAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteAndroidAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.DeleteAndroidAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteAndroidAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateAndroidAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateAndroidAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateAndroidAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateAndroidAppDataStream</c> and
        /// <c>AnalyticsAdminServiceClient.CreateAndroidAppDataStreamAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateAndroidAppDataStreamSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListAndroidAppDataStreams</c> and
        /// <c>AnalyticsAdminServiceClient.ListAndroidAppDataStreamsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListAndroidAppDataStreamsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetEnhancedMeasurementSettings</c> and
        /// <c>AnalyticsAdminServiceClient.GetEnhancedMeasurementSettingsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetEnhancedMeasurementSettingsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateEnhancedMeasurementSettings</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateEnhancedMeasurementSettingsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateEnhancedMeasurementSettingsSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateFirebaseLink</c> and
        /// <c>AnalyticsAdminServiceClient.CreateFirebaseLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateFirebaseLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateFirebaseLink</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateFirebaseLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateFirebaseLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteFirebaseLink</c> and
        /// <c>AnalyticsAdminServiceClient.DeleteFirebaseLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteFirebaseLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListFirebaseLinks</c> and
        /// <c>AnalyticsAdminServiceClient.ListFirebaseLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListFirebaseLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetGlobalSiteTag</c> and <c>AnalyticsAdminServiceClient.GetGlobalSiteTagAsync</c>
        /// .
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetGlobalSiteTagSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.CreateGoogleAdsLink</c> and
        /// <c>AnalyticsAdminServiceClient.CreateGoogleAdsLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings CreateGoogleAdsLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.UpdateGoogleAdsLink</c> and
        /// <c>AnalyticsAdminServiceClient.UpdateGoogleAdsLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings UpdateGoogleAdsLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.DeleteGoogleAdsLink</c> and
        /// <c>AnalyticsAdminServiceClient.DeleteGoogleAdsLinkAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings DeleteGoogleAdsLinkSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.ListGoogleAdsLinks</c> and
        /// <c>AnalyticsAdminServiceClient.ListGoogleAdsLinksAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>This call will not be retried.</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings ListGoogleAdsLinksSettings { get; set; } = gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000)));

        /// <summary>
        /// <see cref="gaxgrpc::CallSettings"/> for synchronous and asynchronous calls to
        /// <c>AnalyticsAdminServiceClient.GetDataSharingSettings</c> and
        /// <c>AnalyticsAdminServiceClient.GetDataSharingSettingsAsync</c>.
        /// </summary>
        /// <remarks>
        /// <list type="bullet">
        /// <item><description>Initial retry delay: 1000 milliseconds.</description></item>
        /// <item><description>Retry delay multiplier: 1.3</description></item>
        /// <item><description>Retry maximum delay: 60000 milliseconds.</description></item>
        /// <item><description>Maximum attempts: 5</description></item>
        /// <item><description>Timeout: 60 seconds.</description></item>
        /// </list>
        /// </remarks>
        public gaxgrpc::CallSettings GetDataSharingSettingsSettings { get; set; } = gaxgrpc::CallSettingsExtensions.WithRetry(gaxgrpc::CallSettings.FromExpiration(gax::Expiration.FromTimeout(sys::TimeSpan.FromMilliseconds(60000))), gaxgrpc::RetrySettings.FromExponentialBackoff(maxAttempts: 5, initialBackoff: sys::TimeSpan.FromMilliseconds(1000), maxBackoff: sys::TimeSpan.FromMilliseconds(60000), backoffMultiplier: 1.3, retryFilter: gaxgrpc::RetrySettings.FilterForStatusCodes(grpccore::StatusCode.Unavailable, grpccore::StatusCode.Unknown)));

        /// <summary>Creates a deep clone of this object, with all the same property values.</summary>
        /// <returns>A deep clone of this <see cref="AnalyticsAdminServiceSettings"/> object.</returns>
        public AnalyticsAdminServiceSettings Clone() => new AnalyticsAdminServiceSettings(this);
    }

    /// <summary>
    /// Builder class for <see cref="AnalyticsAdminServiceClient"/> to provide simple configuration of credentials,
    /// endpoint etc.
    /// </summary>
    public sealed partial class AnalyticsAdminServiceClientBuilder : gaxgrpc::ClientBuilderBase<AnalyticsAdminServiceClient>
    {
        /// <summary>The settings to use for RPCs, or <c>null</c> for the default settings.</summary>
        public AnalyticsAdminServiceSettings Settings { get; set; }

        partial void InterceptBuild(ref AnalyticsAdminServiceClient client);

        partial void InterceptBuildAsync(st::CancellationToken cancellationToken, ref stt::Task<AnalyticsAdminServiceClient> task);

        /// <summary>Builds the resulting client.</summary>
        public override AnalyticsAdminServiceClient Build()
        {
            AnalyticsAdminServiceClient client = null;
            InterceptBuild(ref client);
            return client ?? BuildImpl();
        }

        /// <summary>Builds the resulting client asynchronously.</summary>
        public override stt::Task<AnalyticsAdminServiceClient> BuildAsync(st::CancellationToken cancellationToken = default)
        {
            stt::Task<AnalyticsAdminServiceClient> task = null;
            InterceptBuildAsync(cancellationToken, ref task);
            return task ?? BuildAsyncImpl(cancellationToken);
        }

        private AnalyticsAdminServiceClient BuildImpl()
        {
            Validate();
            grpccore::CallInvoker callInvoker = CreateCallInvoker();
            return AnalyticsAdminServiceClient.Create(callInvoker, Settings);
        }

        private async stt::Task<AnalyticsAdminServiceClient> BuildAsyncImpl(st::CancellationToken cancellationToken)
        {
            Validate();
            grpccore::CallInvoker callInvoker = await CreateCallInvokerAsync(cancellationToken).ConfigureAwait(false);
            return AnalyticsAdminServiceClient.Create(callInvoker, Settings);
        }

        /// <summary>Returns the endpoint for this builder type, used if no endpoint is otherwise specified.</summary>
        protected override string GetDefaultEndpoint() => AnalyticsAdminServiceClient.DefaultEndpoint;

        /// <summary>
        /// Returns the default scopes for this builder type, used if no scopes are otherwise specified.
        /// </summary>
        protected override scg::IReadOnlyList<string> GetDefaultScopes() => AnalyticsAdminServiceClient.DefaultScopes;

        /// <summary>Returns the channel pool to use when no other options are specified.</summary>
        protected override gaxgrpc::ChannelPool GetChannelPool() => AnalyticsAdminServiceClient.ChannelPool;

        /// <summary>Returns the default <see cref="gaxgrpc::GrpcAdapter"/>to use if not otherwise specified.</summary>
        protected override gaxgrpc::GrpcAdapter DefaultGrpcAdapter => gaxgrpccore::GrpcCoreAdapter.Instance;
    }

    /// <summary>AnalyticsAdminService client wrapper, for convenient use.</summary>
    /// <remarks>
    /// Service Interface for the Analytics Admin API (GA4).
    /// </remarks>
    public abstract partial class AnalyticsAdminServiceClient
    {
        /// <summary>
        /// The default endpoint for the AnalyticsAdminService service, which is a host of
        /// "analyticsadmin.googleapis.com" and a port of 443.
        /// </summary>
        public static string DefaultEndpoint { get; } = "analyticsadmin.googleapis.com:443";

        /// <summary>The default AnalyticsAdminService scopes.</summary>
        /// <remarks>
        /// The default AnalyticsAdminService scopes are:
        /// <list type="bullet">
        /// <item><description>https://www.googleapis.com/auth/analytics.edit</description></item>
        /// <item><description>https://www.googleapis.com/auth/analytics.manage.users</description></item>
        /// <item><description>https://www.googleapis.com/auth/analytics.manage.users.readonly</description></item>
        /// <item><description>https://www.googleapis.com/auth/analytics.readonly</description></item>
        /// </list>
        /// </remarks>
        public static scg::IReadOnlyList<string> DefaultScopes { get; } = new sco::ReadOnlyCollection<string>(new string[]
        {
            "https://www.googleapis.com/auth/analytics.edit",
            "https://www.googleapis.com/auth/analytics.manage.users",
            "https://www.googleapis.com/auth/analytics.manage.users.readonly",
            "https://www.googleapis.com/auth/analytics.readonly",
        });

        internal static gaxgrpc::ChannelPool ChannelPool { get; } = new gaxgrpc::ChannelPool(DefaultScopes);

        /// <summary>
        /// Asynchronously creates a <see cref="AnalyticsAdminServiceClient"/> using the default credentials, endpoint
        /// and settings. To specify custom credentials or other settings, use
        /// <see cref="AnalyticsAdminServiceClientBuilder"/>.
        /// </summary>
        /// <param name="cancellationToken">
        /// The <see cref="st::CancellationToken"/> to use while creating the client.
        /// </param>
        /// <returns>The task representing the created <see cref="AnalyticsAdminServiceClient"/>.</returns>
        public static stt::Task<AnalyticsAdminServiceClient> CreateAsync(st::CancellationToken cancellationToken = default) =>
            new AnalyticsAdminServiceClientBuilder().BuildAsync(cancellationToken);

        /// <summary>
        /// Synchronously creates a <see cref="AnalyticsAdminServiceClient"/> using the default credentials, endpoint
        /// and settings. To specify custom credentials or other settings, use
        /// <see cref="AnalyticsAdminServiceClientBuilder"/>.
        /// </summary>
        /// <returns>The created <see cref="AnalyticsAdminServiceClient"/>.</returns>
        public static AnalyticsAdminServiceClient Create() => new AnalyticsAdminServiceClientBuilder().Build();

        /// <summary>
        /// Creates a <see cref="AnalyticsAdminServiceClient"/> which uses the specified call invoker for remote
        /// operations.
        /// </summary>
        /// <param name="callInvoker">
        /// The <see cref="grpccore::CallInvoker"/> for remote operations. Must not be null.
        /// </param>
        /// <param name="settings">Optional <see cref="AnalyticsAdminServiceSettings"/>.</param>
        /// <returns>The created <see cref="AnalyticsAdminServiceClient"/>.</returns>
        internal static AnalyticsAdminServiceClient Create(grpccore::CallInvoker callInvoker, AnalyticsAdminServiceSettings settings = null)
        {
            gax::GaxPreconditions.CheckNotNull(callInvoker, nameof(callInvoker));
            grpcinter::Interceptor interceptor = settings?.Interceptor;
            if (interceptor != null)
            {
                callInvoker = grpcinter::CallInvokerExtensions.Intercept(callInvoker, interceptor);
            }
            AnalyticsAdminService.AnalyticsAdminServiceClient grpcClient = new AnalyticsAdminService.AnalyticsAdminServiceClient(callInvoker);
            return new AnalyticsAdminServiceClientImpl(grpcClient, settings);
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

        /// <summary>The underlying gRPC AnalyticsAdminService client</summary>
        public virtual AnalyticsAdminService.AnalyticsAdminServiceClient GrpcClient => throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Account GetAccount(GetAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(GetAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(GetAccountRequest request, st::CancellationToken cancellationToken) =>
            GetAccountAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Account GetAccount(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetAccount(new GetAccountRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetAccountAsync(new GetAccountRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(string name, st::CancellationToken cancellationToken) =>
            GetAccountAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Account GetAccount(AccountName name, gaxgrpc::CallSettings callSettings = null) =>
            GetAccount(new GetAccountRequest
            {
                AccountName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(AccountName name, gaxgrpc::CallSettings callSettings = null) =>
            GetAccountAsync(new GetAccountRequest
            {
                AccountName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the account to lookup.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> GetAccountAsync(AccountName name, st::CancellationToken cancellationToken) =>
            GetAccountAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns all accounts accessible by the caller.
        /// 
        /// Note that these accounts might not currently have GA4 properties.
        /// Soft-deleted (ie: "trashed") accounts are excluded by default.
        /// Returns an empty list if no relevant accounts are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Account"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAccountsResponse, Account> ListAccounts(ListAccountsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns all accounts accessible by the caller.
        /// 
        /// Note that these accounts might not currently have GA4 properties.
        /// Soft-deleted (ie: "trashed") accounts are excluded by default.
        /// Returns an empty list if no relevant accounts are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Account"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAccountsResponse, Account> ListAccountsAsync(ListAccountsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAccount(DeleteAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(DeleteAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(DeleteAccountRequest request, st::CancellationToken cancellationToken) =>
            DeleteAccountAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAccount(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAccount(new DeleteAccountRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAccountAsync(new DeleteAccountRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteAccountAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAccount(AccountName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAccount(new DeleteAccountRequest
            {
                AccountName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(AccountName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAccountAsync(new DeleteAccountRequest
            {
                AccountName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Account to soft-delete.
        /// Format: accounts/{account}
        /// Example: "accounts/100"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAccountAsync(AccountName name, st::CancellationToken cancellationToken) =>
            DeleteAccountAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Account UpdateAccount(UpdateAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> UpdateAccountAsync(UpdateAccountRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> UpdateAccountAsync(UpdateAccountRequest request, st::CancellationToken cancellationToken) =>
            UpdateAccountAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="account">
        /// Required. The account to update.
        /// The account's `name` field is used to identify the account.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Account UpdateAccount(Account account, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateAccount(new UpdateAccountRequest
            {
                Account = gax::GaxPreconditions.CheckNotNull(account, nameof(account)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="account">
        /// Required. The account to update.
        /// The account's `name` field is used to identify the account.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> UpdateAccountAsync(Account account, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateAccountAsync(new UpdateAccountRequest
            {
                Account = gax::GaxPreconditions.CheckNotNull(account, nameof(account)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="account">
        /// Required. The account to update.
        /// The account's `name` field is used to identify the account.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Account> UpdateAccountAsync(Account account, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateAccountAsync(account, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Requests a ticket for creating an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual ProvisionAccountTicketResponse ProvisionAccountTicket(ProvisionAccountTicketRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Requests a ticket for creating an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<ProvisionAccountTicketResponse> ProvisionAccountTicketAsync(ProvisionAccountTicketRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Requests a ticket for creating an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<ProvisionAccountTicketResponse> ProvisionAccountTicketAsync(ProvisionAccountTicketRequest request, st::CancellationToken cancellationToken) =>
            ProvisionAccountTicketAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns summaries of all accounts accessible by the caller.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AccountSummary"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAccountSummariesResponse, AccountSummary> ListAccountSummaries(ListAccountSummariesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns summaries of all accounts accessible by the caller.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AccountSummary"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAccountSummariesResponse, AccountSummary> ListAccountSummariesAsync(ListAccountSummariesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property GetProperty(GetPropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(GetPropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(GetPropertyRequest request, st::CancellationToken cancellationToken) =>
            GetPropertyAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property GetProperty(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetProperty(new GetPropertyRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetPropertyAsync(new GetPropertyRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(string name, st::CancellationToken cancellationToken) =>
            GetPropertyAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property GetProperty(PropertyName name, gaxgrpc::CallSettings callSettings = null) =>
            GetProperty(new GetPropertyRequest
            {
                PropertyName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(PropertyName name, gaxgrpc::CallSettings callSettings = null) =>
            GetPropertyAsync(new GetPropertyRequest
            {
                PropertyName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the property to lookup.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> GetPropertyAsync(PropertyName name, st::CancellationToken cancellationToken) =>
            GetPropertyAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns child Properties under the specified parent Account.
        /// 
        /// Only "GA4" properties will be returned.
        /// Properties will be excluded if the caller does not have access.
        /// Soft-deleted (ie: "trashed") properties are excluded by default.
        /// Returns an empty list if no relevant properties are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Property"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListPropertiesResponse, Property> ListProperties(ListPropertiesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child Properties under the specified parent Account.
        /// 
        /// Only "GA4" properties will be returned.
        /// Properties will be excluded if the caller does not have access.
        /// Soft-deleted (ie: "trashed") properties are excluded by default.
        /// Returns an empty list if no relevant properties are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Property"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListPropertiesResponse, Property> ListPropertiesAsync(ListPropertiesRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property CreateProperty(CreatePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> CreatePropertyAsync(CreatePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> CreatePropertyAsync(CreatePropertyRequest request, st::CancellationToken cancellationToken) =>
            CreatePropertyAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="property">
        /// Required. The property to create.
        /// Note: the supplied property must specify its parent.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property CreateProperty(Property property, gaxgrpc::CallSettings callSettings = null) =>
            CreateProperty(new CreatePropertyRequest
            {
                Property = gax::GaxPreconditions.CheckNotNull(property, nameof(property)),
            }, callSettings);

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="property">
        /// Required. The property to create.
        /// Note: the supplied property must specify its parent.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> CreatePropertyAsync(Property property, gaxgrpc::CallSettings callSettings = null) =>
            CreatePropertyAsync(new CreatePropertyRequest
            {
                Property = gax::GaxPreconditions.CheckNotNull(property, nameof(property)),
            }, callSettings);

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="property">
        /// Required. The property to create.
        /// Note: the supplied property must specify its parent.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> CreatePropertyAsync(Property property, st::CancellationToken cancellationToken) =>
            CreatePropertyAsync(property, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteProperty(DeletePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(DeletePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(DeletePropertyRequest request, st::CancellationToken cancellationToken) =>
            DeletePropertyAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteProperty(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteProperty(new DeletePropertyRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeletePropertyAsync(new DeletePropertyRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(string name, st::CancellationToken cancellationToken) =>
            DeletePropertyAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteProperty(PropertyName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteProperty(new DeletePropertyRequest
            {
                PropertyName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(PropertyName name, gaxgrpc::CallSettings callSettings = null) =>
            DeletePropertyAsync(new DeletePropertyRequest
            {
                PropertyName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the Property to soft-delete.
        /// Format: properties/{property_id}
        /// Example: "properties/1000"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeletePropertyAsync(PropertyName name, st::CancellationToken cancellationToken) =>
            DeletePropertyAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property UpdateProperty(UpdatePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> UpdatePropertyAsync(UpdatePropertyRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> UpdatePropertyAsync(UpdatePropertyRequest request, st::CancellationToken cancellationToken) =>
            UpdatePropertyAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="property">
        /// Required. The property to update.
        /// The property's `name` field is used to identify the property to be
        /// updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual Property UpdateProperty(Property property, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateProperty(new UpdatePropertyRequest
            {
                Property = gax::GaxPreconditions.CheckNotNull(property, nameof(property)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="property">
        /// Required. The property to update.
        /// The property's `name` field is used to identify the property to be
        /// updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> UpdatePropertyAsync(Property property, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdatePropertyAsync(new UpdatePropertyRequest
            {
                Property = gax::GaxPreconditions.CheckNotNull(property, nameof(property)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="property">
        /// Required. The property to update.
        /// The property's `name` field is used to identify the property to be
        /// updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<Property> UpdatePropertyAsync(Property property, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdatePropertyAsync(property, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink GetUserLink(GetUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(GetUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(GetUserLinkRequest request, st::CancellationToken cancellationToken) =>
            GetUserLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink GetUserLink(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetUserLink(new GetUserLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetUserLinkAsync(new GetUserLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(string name, st::CancellationToken cancellationToken) =>
            GetUserLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink GetUserLink(UserLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            GetUserLink(new GetUserLinkRequest
            {
                UserLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(UserLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            GetUserLinkAsync(new GetUserLinkRequest
            {
                UserLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> GetUserLinkAsync(UserLinkName name, st::CancellationToken cancellationToken) =>
            GetUserLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Gets information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchGetUserLinksResponse BatchGetUserLinks(BatchGetUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchGetUserLinksResponse> BatchGetUserLinksAsync(BatchGetUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Gets information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchGetUserLinksResponse> BatchGetUserLinksAsync(BatchGetUserLinksRequest request, st::CancellationToken cancellationToken) =>
            BatchGetUserLinksAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListUserLinksResponse, UserLink> ListUserLinks(ListUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListUserLinksResponse, UserLink> ListUserLinksAsync(ListUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListUserLinksResponse, UserLink> ListUserLinks(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinks(new ListUserLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListUserLinksResponse, UserLink> ListUserLinksAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinksAsync(new ListUserLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListUserLinksResponse, UserLink> ListUserLinks(AccountName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinks(new ListUserLinksRequest
            {
                ParentAsAccountName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListUserLinksResponse, UserLink> ListUserLinksAsync(AccountName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinksAsync(new ListUserLinksRequest
            {
                ParentAsAccountName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListUserLinksResponse, UserLink> ListUserLinks(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinks(new ListUserLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="UserLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListUserLinksResponse, UserLink> ListUserLinksAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListUserLinksAsync(new ListUserLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists all user links on an account or property, including implicit ones
        /// that come from effective permissions granted by groups or organization
        /// admin roles.
        /// 
        /// If a returned user link does not have direct permissions, they cannot
        /// be removed from the account or property directly with the DeleteUserLink
        /// command. They have to be removed from the group/etc that gives them
        /// permissions, which is currently only usable/discoverable in the GA or GMP
        /// UIs.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AuditUserLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<AuditUserLinksResponse, AuditUserLink> AuditUserLinks(AuditUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists all user links on an account or property, including implicit ones
        /// that come from effective permissions granted by groups or organization
        /// admin roles.
        /// 
        /// If a returned user link does not have direct permissions, they cannot
        /// be removed from the account or property directly with the DeleteUserLink
        /// command. They have to be removed from the group/etc that gives them
        /// permissions, which is currently only usable/discoverable in the GA or GMP
        /// UIs.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AuditUserLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<AuditUserLinksResponse, AuditUserLink> AuditUserLinksAsync(AuditUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink CreateUserLink(CreateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(CreateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(CreateUserLinkRequest request, st::CancellationToken cancellationToken) =>
            CreateUserLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink CreateUserLink(string parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLink(new CreateUserLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(string parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLinkAsync(new CreateUserLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(string parent, UserLink userLink, st::CancellationToken cancellationToken) =>
            CreateUserLinkAsync(parent, userLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink CreateUserLink(AccountName parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLink(new CreateUserLinkRequest
            {
                ParentAsAccountName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(AccountName parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLinkAsync(new CreateUserLinkRequest
            {
                ParentAsAccountName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(AccountName parent, UserLink userLink, st::CancellationToken cancellationToken) =>
            CreateUserLinkAsync(parent, userLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink CreateUserLink(PropertyName parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLink(new CreateUserLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(PropertyName parent, UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateUserLinkAsync(new CreateUserLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: accounts/1234
        /// </param>
        /// <param name="userLink">
        /// Required. The user link to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> CreateUserLinkAsync(PropertyName parent, UserLink userLink, st::CancellationToken cancellationToken) =>
            CreateUserLinkAsync(parent, userLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates information about multiple users' links to an account or property.
        /// 
        /// This method is transactional. If any UserLink cannot be created, none of
        /// the UserLinks will be created.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchCreateUserLinksResponse BatchCreateUserLinks(BatchCreateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates information about multiple users' links to an account or property.
        /// 
        /// This method is transactional. If any UserLink cannot be created, none of
        /// the UserLinks will be created.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchCreateUserLinksResponse> BatchCreateUserLinksAsync(BatchCreateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates information about multiple users' links to an account or property.
        /// 
        /// This method is transactional. If any UserLink cannot be created, none of
        /// the UserLinks will be created.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchCreateUserLinksResponse> BatchCreateUserLinksAsync(BatchCreateUserLinksRequest request, st::CancellationToken cancellationToken) =>
            BatchCreateUserLinksAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink UpdateUserLink(UpdateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> UpdateUserLinkAsync(UpdateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> UpdateUserLinkAsync(UpdateUserLinkRequest request, st::CancellationToken cancellationToken) =>
            UpdateUserLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="userLink">
        /// Required. The user link to update.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual UserLink UpdateUserLink(UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            UpdateUserLink(new UpdateUserLinkRequest
            {
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="userLink">
        /// Required. The user link to update.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> UpdateUserLinkAsync(UserLink userLink, gaxgrpc::CallSettings callSettings = null) =>
            UpdateUserLinkAsync(new UpdateUserLinkRequest
            {
                UserLink = gax::GaxPreconditions.CheckNotNull(userLink, nameof(userLink)),
            }, callSettings);

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="userLink">
        /// Required. The user link to update.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<UserLink> UpdateUserLinkAsync(UserLink userLink, st::CancellationToken cancellationToken) =>
            UpdateUserLinkAsync(userLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual BatchUpdateUserLinksResponse BatchUpdateUserLinks(BatchUpdateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchUpdateUserLinksResponse> BatchUpdateUserLinksAsync(BatchUpdateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<BatchUpdateUserLinksResponse> BatchUpdateUserLinksAsync(BatchUpdateUserLinksRequest request, st::CancellationToken cancellationToken) =>
            BatchUpdateUserLinksAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteUserLink(DeleteUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(DeleteUserLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(DeleteUserLinkRequest request, st::CancellationToken cancellationToken) =>
            DeleteUserLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteUserLink(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteUserLink(new DeleteUserLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteUserLinkAsync(new DeleteUserLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteUserLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteUserLink(UserLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteUserLink(new DeleteUserLinkRequest
            {
                UserLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(UserLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteUserLinkAsync(new DeleteUserLinkRequest
            {
                UserLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="name">
        /// Required. Example format: accounts/1234/userLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteUserLinkAsync(UserLinkName name, st::CancellationToken cancellationToken) =>
            DeleteUserLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void BatchDeleteUserLinks(BatchDeleteUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task BatchDeleteUserLinksAsync(BatchDeleteUserLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task BatchDeleteUserLinksAsync(BatchDeleteUserLinksRequest request, st::CancellationToken cancellationToken) =>
            BatchDeleteUserLinksAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream GetWebDataStream(GetWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(GetWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(GetWebDataStreamRequest request, st::CancellationToken cancellationToken) =>
            GetWebDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream GetWebDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetWebDataStream(new GetWebDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetWebDataStreamAsync(new GetWebDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            GetWebDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream GetWebDataStream(WebDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetWebDataStream(new GetWebDataStreamRequest
            {
                WebDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(WebDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetWebDataStreamAsync(new GetWebDataStreamRequest
            {
                WebDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to lookup.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> GetWebDataStreamAsync(WebDataStreamName name, st::CancellationToken cancellationToken) =>
            GetWebDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteWebDataStream(DeleteWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(DeleteWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(DeleteWebDataStreamRequest request, st::CancellationToken cancellationToken) =>
            DeleteWebDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteWebDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteWebDataStream(new DeleteWebDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteWebDataStreamAsync(new DeleteWebDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteWebDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteWebDataStream(WebDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteWebDataStream(new DeleteWebDataStreamRequest
            {
                WebDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(WebDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteWebDataStreamAsync(new DeleteWebDataStreamRequest
            {
                WebDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the web data stream to delete.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}
        /// Example: "properties/123/webDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteWebDataStreamAsync(WebDataStreamName name, st::CancellationToken cancellationToken) =>
            DeleteWebDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream UpdateWebDataStream(UpdateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> UpdateWebDataStreamAsync(UpdateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> UpdateWebDataStreamAsync(UpdateWebDataStreamRequest request, st::CancellationToken cancellationToken) =>
            UpdateWebDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="webDataStream">
        /// Required. The web stream to update.
        /// The `name` field is used to identify the web stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream UpdateWebDataStream(WebDataStream webDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateWebDataStream(new UpdateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="webDataStream">
        /// Required. The web stream to update.
        /// The `name` field is used to identify the web stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> UpdateWebDataStreamAsync(WebDataStream webDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateWebDataStreamAsync(new UpdateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="webDataStream">
        /// Required. The web stream to update.
        /// The `name` field is used to identify the web stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> UpdateWebDataStreamAsync(WebDataStream webDataStream, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateWebDataStreamAsync(webDataStream, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream CreateWebDataStream(CreateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(CreateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(CreateWebDataStreamRequest request, st::CancellationToken cancellationToken) =>
            CreateWebDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream CreateWebDataStream(string parent, WebDataStream webDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateWebDataStream(new CreateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(string parent, WebDataStream webDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateWebDataStreamAsync(new CreateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(string parent, WebDataStream webDataStream, st::CancellationToken cancellationToken) =>
            CreateWebDataStreamAsync(parent, webDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual WebDataStream CreateWebDataStream(PropertyName parent, WebDataStream webDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateWebDataStream(new CreateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(PropertyName parent, WebDataStream webDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateWebDataStreamAsync(new CreateWebDataStreamRequest
            {
                WebDataStream = gax::GaxPreconditions.CheckNotNull(webDataStream, nameof(webDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this web data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="webDataStream">
        /// Required. The web stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<WebDataStream> CreateWebDataStreamAsync(PropertyName parent, WebDataStream webDataStream, st::CancellationToken cancellationToken) =>
            CreateWebDataStreamAsync(parent, webDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreams(ListWebDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreamsAsync(ListWebDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of web streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreams(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListWebDataStreams(new ListWebDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of web streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreamsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListWebDataStreamsAsync(new ListWebDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of web streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreams(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListWebDataStreams(new ListWebDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of web streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="WebDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreamsAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListWebDataStreamsAsync(new ListWebDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream GetIosAppDataStream(GetIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(GetIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(GetIosAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            GetIosAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream GetIosAppDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetIosAppDataStream(new GetIosAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetIosAppDataStreamAsync(new GetIosAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            GetIosAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream GetIosAppDataStream(IosAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetIosAppDataStream(new GetIosAppDataStreamRequest
            {
                IosAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(IosAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetIosAppDataStreamAsync(new GetIosAppDataStreamRequest
            {
                IosAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to lookup.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(IosAppDataStreamName name, st::CancellationToken cancellationToken) =>
            GetIosAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteIosAppDataStream(DeleteIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(DeleteIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(DeleteIosAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            DeleteIosAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteIosAppDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteIosAppDataStream(new DeleteIosAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteIosAppDataStreamAsync(new DeleteIosAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteIosAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteIosAppDataStream(IosAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteIosAppDataStream(new DeleteIosAppDataStreamRequest
            {
                IosAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(IosAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteIosAppDataStreamAsync(new DeleteIosAppDataStreamRequest
            {
                IosAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the iOS app data stream to delete.
        /// Format: properties/{property_id}/iosAppDataStreams/{stream_id}
        /// Example: "properties/123/iosAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteIosAppDataStreamAsync(IosAppDataStreamName name, st::CancellationToken cancellationToken) =>
            DeleteIosAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream UpdateIosAppDataStream(UpdateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> UpdateIosAppDataStreamAsync(UpdateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> UpdateIosAppDataStreamAsync(UpdateIosAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            UpdateIosAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app stream to update.
        /// The `name` field is used to identify the iOS app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream UpdateIosAppDataStream(IosAppDataStream iosAppDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateIosAppDataStream(new UpdateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app stream to update.
        /// The `name` field is used to identify the iOS app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> UpdateIosAppDataStreamAsync(IosAppDataStream iosAppDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateIosAppDataStreamAsync(new UpdateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app stream to update.
        /// The `name` field is used to identify the iOS app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> UpdateIosAppDataStreamAsync(IosAppDataStream iosAppDataStream, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateIosAppDataStreamAsync(iosAppDataStream, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream CreateIosAppDataStream(CreateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(CreateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(CreateIosAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            CreateIosAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream CreateIosAppDataStream(string parent, IosAppDataStream iosAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateIosAppDataStream(new CreateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(string parent, IosAppDataStream iosAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateIosAppDataStreamAsync(new CreateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(string parent, IosAppDataStream iosAppDataStream, st::CancellationToken cancellationToken) =>
            CreateIosAppDataStreamAsync(parent, iosAppDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual IosAppDataStream CreateIosAppDataStream(PropertyName parent, IosAppDataStream iosAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateIosAppDataStream(new CreateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(PropertyName parent, IosAppDataStream iosAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateIosAppDataStreamAsync(new CreateIosAppDataStreamRequest
            {
                IosAppDataStream = gax::GaxPreconditions.CheckNotNull(iosAppDataStream, nameof(iosAppDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this ios app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="iosAppDataStream">
        /// Required. The iOS app data stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(PropertyName parent, IosAppDataStream iosAppDataStream, st::CancellationToken cancellationToken) =>
            CreateIosAppDataStreamAsync(parent, iosAppDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreams(ListIosAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreamsAsync(ListIosAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreams(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListIosAppDataStreams(new ListIosAppDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreamsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListIosAppDataStreamsAsync(new ListIosAppDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreams(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListIosAppDataStreams(new ListIosAppDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to list results of app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreamsAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListIosAppDataStreamsAsync(new ListIosAppDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream GetAndroidAppDataStream(GetAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(GetAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(GetAndroidAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            GetAndroidAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream GetAndroidAppDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetAndroidAppDataStream(new GetAndroidAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetAndroidAppDataStreamAsync(new GetAndroidAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            GetAndroidAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream GetAndroidAppDataStream(AndroidAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetAndroidAppDataStream(new GetAndroidAppDataStreamRequest
            {
                AndroidAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(AndroidAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            GetAndroidAppDataStreamAsync(new GetAndroidAppDataStreamRequest
            {
                AndroidAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to lookup.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(AndroidAppDataStreamName name, st::CancellationToken cancellationToken) =>
            GetAndroidAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAndroidAppDataStream(DeleteAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(DeleteAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(DeleteAndroidAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            DeleteAndroidAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAndroidAppDataStream(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAndroidAppDataStream(new DeleteAndroidAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAndroidAppDataStreamAsync(new DeleteAndroidAppDataStreamRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteAndroidAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteAndroidAppDataStream(AndroidAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAndroidAppDataStream(new DeleteAndroidAppDataStreamRequest
            {
                AndroidAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(AndroidAppDataStreamName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteAndroidAppDataStreamAsync(new DeleteAndroidAppDataStreamRequest
            {
                AndroidAppDataStreamName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the android app data stream to delete.
        /// Format: properties/{property_id}/androidAppDataStreams/{stream_id}
        /// Example: "properties/123/androidAppDataStreams/456"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteAndroidAppDataStreamAsync(AndroidAppDataStreamName name, st::CancellationToken cancellationToken) =>
            DeleteAndroidAppDataStreamAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream UpdateAndroidAppDataStream(UpdateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> UpdateAndroidAppDataStreamAsync(UpdateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> UpdateAndroidAppDataStreamAsync(UpdateAndroidAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            UpdateAndroidAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to update.
        /// The `name` field is used to identify the android app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream UpdateAndroidAppDataStream(AndroidAppDataStream androidAppDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateAndroidAppDataStream(new UpdateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to update.
        /// The `name` field is used to identify the android app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> UpdateAndroidAppDataStreamAsync(AndroidAppDataStream androidAppDataStream, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateAndroidAppDataStreamAsync(new UpdateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to update.
        /// The `name` field is used to identify the android app stream to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> UpdateAndroidAppDataStreamAsync(AndroidAppDataStream androidAppDataStream, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateAndroidAppDataStreamAsync(androidAppDataStream, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream CreateAndroidAppDataStream(CreateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(CreateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(CreateAndroidAppDataStreamRequest request, st::CancellationToken cancellationToken) =>
            CreateAndroidAppDataStreamAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream CreateAndroidAppDataStream(string parent, AndroidAppDataStream androidAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateAndroidAppDataStream(new CreateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(string parent, AndroidAppDataStream androidAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateAndroidAppDataStreamAsync(new CreateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(string parent, AndroidAppDataStream androidAppDataStream, st::CancellationToken cancellationToken) =>
            CreateAndroidAppDataStreamAsync(parent, androidAppDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual AndroidAppDataStream CreateAndroidAppDataStream(PropertyName parent, AndroidAppDataStream androidAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateAndroidAppDataStream(new CreateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(PropertyName parent, AndroidAppDataStream androidAppDataStream, gaxgrpc::CallSettings callSettings = null) =>
            CreateAndroidAppDataStreamAsync(new CreateAndroidAppDataStreamRequest
            {
                AndroidAppDataStream = gax::GaxPreconditions.CheckNotNull(androidAppDataStream, nameof(androidAppDataStream)),
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
            }, callSettings);

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="parent">
        /// Required. The parent resource where this android app data stream will be created.
        /// Format: properties/123
        /// </param>
        /// <param name="androidAppDataStream">
        /// Required. The android app stream to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(PropertyName parent, AndroidAppDataStream androidAppDataStream, st::CancellationToken cancellationToken) =>
            CreateAndroidAppDataStreamAsync(parent, androidAppDataStream, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreams(ListAndroidAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreamsAsync(ListAndroidAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to limit results to app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreams(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListAndroidAppDataStreams(new ListAndroidAppDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to limit results to app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreamsAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListAndroidAppDataStreamsAsync(new ListAndroidAppDataStreamsRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to limit results to app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreams(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListAndroidAppDataStreams(new ListAndroidAppDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="parent">
        /// Required. The name of the parent property.
        /// For example, to limit results to app streams under the property with Id
        /// 123: "properties/123"
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
        /// <returns>A pageable asynchronous sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreamsAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListAndroidAppDataStreamsAsync(new ListAndroidAppDataStreamsRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual EnhancedMeasurementSettings GetEnhancedMeasurementSettings(GetEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(GetEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(GetEnhancedMeasurementSettingsRequest request, st::CancellationToken cancellationToken) =>
            GetEnhancedMeasurementSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual EnhancedMeasurementSettings GetEnhancedMeasurementSettings(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetEnhancedMeasurementSettings(new GetEnhancedMeasurementSettingsRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetEnhancedMeasurementSettingsAsync(new GetEnhancedMeasurementSettingsRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(string name, st::CancellationToken cancellationToken) =>
            GetEnhancedMeasurementSettingsAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual EnhancedMeasurementSettings GetEnhancedMeasurementSettings(EnhancedMeasurementSettingsName name, gaxgrpc::CallSettings callSettings = null) =>
            GetEnhancedMeasurementSettings(new GetEnhancedMeasurementSettingsRequest
            {
                EnhancedMeasurementSettingsName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(EnhancedMeasurementSettingsName name, gaxgrpc::CallSettings callSettings = null) =>
            GetEnhancedMeasurementSettingsAsync(new GetEnhancedMeasurementSettingsRequest
            {
                EnhancedMeasurementSettingsName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format:
        /// properties/{property_id}/webDataStreams/{stream_id}/enhancedMeasurementSettings
        /// Example: "properties/1000/webDataStreams/2000/enhancedMeasurementSettings"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(EnhancedMeasurementSettingsName name, st::CancellationToken cancellationToken) =>
            GetEnhancedMeasurementSettingsAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual EnhancedMeasurementSettings UpdateEnhancedMeasurementSettings(UpdateEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> UpdateEnhancedMeasurementSettingsAsync(UpdateEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> UpdateEnhancedMeasurementSettingsAsync(UpdateEnhancedMeasurementSettingsRequest request, st::CancellationToken cancellationToken) =>
            UpdateEnhancedMeasurementSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="enhancedMeasurementSettings">
        /// Required. The settings to update.
        /// The `name` field is used to identify the settings to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual EnhancedMeasurementSettings UpdateEnhancedMeasurementSettings(EnhancedMeasurementSettings enhancedMeasurementSettings, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateEnhancedMeasurementSettings(new UpdateEnhancedMeasurementSettingsRequest
            {
                EnhancedMeasurementSettings = gax::GaxPreconditions.CheckNotNull(enhancedMeasurementSettings, nameof(enhancedMeasurementSettings)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="enhancedMeasurementSettings">
        /// Required. The settings to update.
        /// The `name` field is used to identify the settings to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> UpdateEnhancedMeasurementSettingsAsync(EnhancedMeasurementSettings enhancedMeasurementSettings, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateEnhancedMeasurementSettingsAsync(new UpdateEnhancedMeasurementSettingsRequest
            {
                EnhancedMeasurementSettings = gax::GaxPreconditions.CheckNotNull(enhancedMeasurementSettings, nameof(enhancedMeasurementSettings)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="enhancedMeasurementSettings">
        /// Required. The settings to update.
        /// The `name` field is used to identify the settings to be updated.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<EnhancedMeasurementSettings> UpdateEnhancedMeasurementSettingsAsync(EnhancedMeasurementSettings enhancedMeasurementSettings, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateEnhancedMeasurementSettingsAsync(enhancedMeasurementSettings, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual FirebaseLink CreateFirebaseLink(CreateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(CreateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(CreateFirebaseLinkRequest request, st::CancellationToken cancellationToken) =>
            CreateFirebaseLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual FirebaseLink CreateFirebaseLink(string parent, FirebaseLink firebaseLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateFirebaseLink(new CreateFirebaseLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
            }, callSettings);

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(string parent, FirebaseLink firebaseLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateFirebaseLinkAsync(new CreateFirebaseLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
            }, callSettings);

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(string parent, FirebaseLink firebaseLink, st::CancellationToken cancellationToken) =>
            CreateFirebaseLinkAsync(parent, firebaseLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual FirebaseLink CreateFirebaseLink(PropertyName parent, FirebaseLink firebaseLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateFirebaseLink(new CreateFirebaseLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
            }, callSettings);

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(PropertyName parent, FirebaseLink firebaseLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateFirebaseLinkAsync(new CreateFirebaseLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
            }, callSettings);

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
        /// </param>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> CreateFirebaseLinkAsync(PropertyName parent, FirebaseLink firebaseLink, st::CancellationToken cancellationToken) =>
            CreateFirebaseLinkAsync(parent, firebaseLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual FirebaseLink UpdateFirebaseLink(UpdateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> UpdateFirebaseLinkAsync(UpdateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> UpdateFirebaseLinkAsync(UpdateFirebaseLinkRequest request, st::CancellationToken cancellationToken) =>
            UpdateFirebaseLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to update.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual FirebaseLink UpdateFirebaseLink(FirebaseLink firebaseLink, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateFirebaseLink(new UpdateFirebaseLinkRequest
            {
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to update.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> UpdateFirebaseLinkAsync(FirebaseLink firebaseLink, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateFirebaseLinkAsync(new UpdateFirebaseLinkRequest
            {
                FirebaseLink = gax::GaxPreconditions.CheckNotNull(firebaseLink, nameof(firebaseLink)),
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="firebaseLink">
        /// Required. The Firebase link to update.
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<FirebaseLink> UpdateFirebaseLinkAsync(FirebaseLink firebaseLink, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateFirebaseLinkAsync(firebaseLink, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteFirebaseLink(DeleteFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(DeleteFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(DeleteFirebaseLinkRequest request, st::CancellationToken cancellationToken) =>
            DeleteFirebaseLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteFirebaseLink(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteFirebaseLink(new DeleteFirebaseLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteFirebaseLinkAsync(new DeleteFirebaseLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteFirebaseLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteFirebaseLink(FirebaseLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteFirebaseLink(new DeleteFirebaseLinkRequest
            {
                FirebaseLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(FirebaseLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteFirebaseLinkAsync(new DeleteFirebaseLinkRequest
            {
                FirebaseLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
        /// Example: properties/1234/firebaseLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteFirebaseLinkAsync(FirebaseLinkName name, st::CancellationToken cancellationToken) =>
            DeleteFirebaseLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinks(ListFirebaseLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinksAsync(ListFirebaseLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
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
        /// <returns>A pageable sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinks(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListFirebaseLinks(new ListFirebaseLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinksAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListFirebaseLinksAsync(new ListFirebaseLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
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
        /// <returns>A pageable sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinks(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListFirebaseLinks(new ListFirebaseLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Format: properties/{property_id}
        /// Example: properties/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="FirebaseLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinksAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListFirebaseLinksAsync(new ListFirebaseLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GlobalSiteTag GetGlobalSiteTag(GetGlobalSiteTagRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(GetGlobalSiteTagRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(GetGlobalSiteTagRequest request, st::CancellationToken cancellationToken) =>
            GetGlobalSiteTagAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GlobalSiteTag GetGlobalSiteTag(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetGlobalSiteTag(new GetGlobalSiteTagRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetGlobalSiteTagAsync(new GetGlobalSiteTagRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(string name, st::CancellationToken cancellationToken) =>
            GetGlobalSiteTagAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GlobalSiteTag GetGlobalSiteTag(GlobalSiteTagName name, gaxgrpc::CallSettings callSettings = null) =>
            GetGlobalSiteTag(new GetGlobalSiteTagRequest
            {
                GlobalSiteTagName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(GlobalSiteTagName name, gaxgrpc::CallSettings callSettings = null) =>
            GetGlobalSiteTagAsync(new GetGlobalSiteTagRequest
            {
                GlobalSiteTagName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the site tag to lookup.
        /// Note that site tags are singletons and do not have unique IDs.
        /// Format: properties/{property_id}/webDataStreams/{stream_id}/globalSiteTag
        /// Example: "properties/123/webDataStreams/456/globalSiteTag"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(GlobalSiteTagName name, st::CancellationToken cancellationToken) =>
            GetGlobalSiteTagAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GoogleAdsLink CreateGoogleAdsLink(CreateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(CreateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(CreateGoogleAdsLinkRequest request, st::CancellationToken cancellationToken) =>
            CreateGoogleAdsLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GoogleAdsLink CreateGoogleAdsLink(string parent, GoogleAdsLink googleAdsLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateGoogleAdsLink(new CreateGoogleAdsLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                GoogleAdsLink = gax::GaxPreconditions.CheckNotNull(googleAdsLink, nameof(googleAdsLink)),
            }, callSettings);

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(string parent, GoogleAdsLink googleAdsLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateGoogleAdsLinkAsync(new CreateGoogleAdsLinkRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                GoogleAdsLink = gax::GaxPreconditions.CheckNotNull(googleAdsLink, nameof(googleAdsLink)),
            }, callSettings);

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(string parent, GoogleAdsLink googleAdsLink, st::CancellationToken cancellationToken) =>
            CreateGoogleAdsLinkAsync(parent, googleAdsLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GoogleAdsLink CreateGoogleAdsLink(PropertyName parent, GoogleAdsLink googleAdsLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateGoogleAdsLink(new CreateGoogleAdsLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                GoogleAdsLink = gax::GaxPreconditions.CheckNotNull(googleAdsLink, nameof(googleAdsLink)),
            }, callSettings);

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(PropertyName parent, GoogleAdsLink googleAdsLink, gaxgrpc::CallSettings callSettings = null) =>
            CreateGoogleAdsLinkAsync(new CreateGoogleAdsLinkRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                GoogleAdsLink = gax::GaxPreconditions.CheckNotNull(googleAdsLink, nameof(googleAdsLink)),
            }, callSettings);

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
        /// </param>
        /// <param name="googleAdsLink">
        /// Required. The GoogleAdsLink to create.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(PropertyName parent, GoogleAdsLink googleAdsLink, st::CancellationToken cancellationToken) =>
            CreateGoogleAdsLinkAsync(parent, googleAdsLink, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GoogleAdsLink UpdateGoogleAdsLink(UpdateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> UpdateGoogleAdsLinkAsync(UpdateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> UpdateGoogleAdsLinkAsync(UpdateGoogleAdsLinkRequest request, st::CancellationToken cancellationToken) =>
            UpdateGoogleAdsLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="googleAdsLink">
        /// The GoogleAdsLink to update
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual GoogleAdsLink UpdateGoogleAdsLink(GoogleAdsLink googleAdsLink, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateGoogleAdsLink(new UpdateGoogleAdsLinkRequest
            {
                GoogleAdsLink = googleAdsLink,
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="googleAdsLink">
        /// The GoogleAdsLink to update
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> UpdateGoogleAdsLinkAsync(GoogleAdsLink googleAdsLink, wkt::FieldMask updateMask, gaxgrpc::CallSettings callSettings = null) =>
            UpdateGoogleAdsLinkAsync(new UpdateGoogleAdsLinkRequest
            {
                GoogleAdsLink = googleAdsLink,
                UpdateMask = gax::GaxPreconditions.CheckNotNull(updateMask, nameof(updateMask)),
            }, callSettings);

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="googleAdsLink">
        /// The GoogleAdsLink to update
        /// </param>
        /// <param name="updateMask">
        /// Required. The list of fields to be updated. Field names must be in snake case
        /// (e.g., "field_to_update"). Omitted fields will not be updated. To replace
        /// the entire entity, use one path with the string "*" to match all fields.
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<GoogleAdsLink> UpdateGoogleAdsLinkAsync(GoogleAdsLink googleAdsLink, wkt::FieldMask updateMask, st::CancellationToken cancellationToken) =>
            UpdateGoogleAdsLinkAsync(googleAdsLink, updateMask, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteGoogleAdsLink(DeleteGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(DeleteGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(DeleteGoogleAdsLinkRequest request, st::CancellationToken cancellationToken) =>
            DeleteGoogleAdsLinkAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteGoogleAdsLink(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteGoogleAdsLink(new DeleteGoogleAdsLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteGoogleAdsLinkAsync(new DeleteGoogleAdsLinkRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(string name, st::CancellationToken cancellationToken) =>
            DeleteGoogleAdsLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual void DeleteGoogleAdsLink(GoogleAdsLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteGoogleAdsLink(new DeleteGoogleAdsLinkRequest
            {
                GoogleAdsLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(GoogleAdsLinkName name, gaxgrpc::CallSettings callSettings = null) =>
            DeleteGoogleAdsLinkAsync(new DeleteGoogleAdsLinkRequest
            {
                GoogleAdsLinkName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="name">
        /// Required. Example format: properties/1234/googleAdsLinks/5678
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task DeleteGoogleAdsLinkAsync(GoogleAdsLinkName name, st::CancellationToken cancellationToken) =>
            DeleteGoogleAdsLinkAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinks(ListGoogleAdsLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinksAsync(ListGoogleAdsLinksRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
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
        /// <returns>A pageable sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinks(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListGoogleAdsLinks(new ListGoogleAdsLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinksAsync(string parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListGoogleAdsLinksAsync(new ListGoogleAdsLinksRequest
            {
                Parent = gax::GaxPreconditions.CheckNotNullOrEmpty(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
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
        /// <returns>A pageable sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinks(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListGoogleAdsLinks(new ListGoogleAdsLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="parent">
        /// Required. Example format: properties/1234
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
        /// <returns>A pageable asynchronous sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public virtual gax::PagedAsyncEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinksAsync(PropertyName parent, string pageToken = null, int? pageSize = null, gaxgrpc::CallSettings callSettings = null) =>
            ListGoogleAdsLinksAsync(new ListGoogleAdsLinksRequest
            {
                ParentAsPropertyName = gax::GaxPreconditions.CheckNotNull(parent, nameof(parent)),
                PageToken = pageToken ?? "",
                PageSize = pageSize ?? 0,
            }, callSettings);

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataSharingSettings GetDataSharingSettings(GetDataSharingSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(GetDataSharingSettingsRequest request, gaxgrpc::CallSettings callSettings = null) =>
            throw new sys::NotImplementedException();

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(GetDataSharingSettingsRequest request, st::CancellationToken cancellationToken) =>
            GetDataSharingSettingsAsync(request, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataSharingSettings GetDataSharingSettings(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataSharingSettings(new GetDataSharingSettingsRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(string name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataSharingSettingsAsync(new GetDataSharingSettingsRequest
            {
                Name = gax::GaxPreconditions.CheckNotNullOrEmpty(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(string name, st::CancellationToken cancellationToken) =>
            GetDataSharingSettingsAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public virtual DataSharingSettings GetDataSharingSettings(DataSharingSettingsName name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataSharingSettings(new GetDataSharingSettingsRequest
            {
                DataSharingSettingsName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(DataSharingSettingsName name, gaxgrpc::CallSettings callSettings = null) =>
            GetDataSharingSettingsAsync(new GetDataSharingSettingsRequest
            {
                DataSharingSettingsName = gax::GaxPreconditions.CheckNotNull(name, nameof(name)),
            }, callSettings);

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="name">
        /// Required. The name of the settings to lookup.
        /// Format: accounts/{account}/dataSharingSettings
        /// Example: "accounts/1000/dataSharingSettings"
        /// </param>
        /// <param name="cancellationToken">A <see cref="st::CancellationToken"/> to use for this RPC.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public virtual stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(DataSharingSettingsName name, st::CancellationToken cancellationToken) =>
            GetDataSharingSettingsAsync(name, gaxgrpc::CallSettings.FromCancellationToken(cancellationToken));
    }

    /// <summary>AnalyticsAdminService client wrapper implementation, for convenient use.</summary>
    /// <remarks>
    /// Service Interface for the Analytics Admin API (GA4).
    /// </remarks>
    public sealed partial class AnalyticsAdminServiceClientImpl : AnalyticsAdminServiceClient
    {
        private readonly gaxgrpc::ApiCall<GetAccountRequest, Account> _callGetAccount;

        private readonly gaxgrpc::ApiCall<ListAccountsRequest, ListAccountsResponse> _callListAccounts;

        private readonly gaxgrpc::ApiCall<DeleteAccountRequest, wkt::Empty> _callDeleteAccount;

        private readonly gaxgrpc::ApiCall<UpdateAccountRequest, Account> _callUpdateAccount;

        private readonly gaxgrpc::ApiCall<ProvisionAccountTicketRequest, ProvisionAccountTicketResponse> _callProvisionAccountTicket;

        private readonly gaxgrpc::ApiCall<ListAccountSummariesRequest, ListAccountSummariesResponse> _callListAccountSummaries;

        private readonly gaxgrpc::ApiCall<GetPropertyRequest, Property> _callGetProperty;

        private readonly gaxgrpc::ApiCall<ListPropertiesRequest, ListPropertiesResponse> _callListProperties;

        private readonly gaxgrpc::ApiCall<CreatePropertyRequest, Property> _callCreateProperty;

        private readonly gaxgrpc::ApiCall<DeletePropertyRequest, wkt::Empty> _callDeleteProperty;

        private readonly gaxgrpc::ApiCall<UpdatePropertyRequest, Property> _callUpdateProperty;

        private readonly gaxgrpc::ApiCall<GetUserLinkRequest, UserLink> _callGetUserLink;

        private readonly gaxgrpc::ApiCall<BatchGetUserLinksRequest, BatchGetUserLinksResponse> _callBatchGetUserLinks;

        private readonly gaxgrpc::ApiCall<ListUserLinksRequest, ListUserLinksResponse> _callListUserLinks;

        private readonly gaxgrpc::ApiCall<AuditUserLinksRequest, AuditUserLinksResponse> _callAuditUserLinks;

        private readonly gaxgrpc::ApiCall<CreateUserLinkRequest, UserLink> _callCreateUserLink;

        private readonly gaxgrpc::ApiCall<BatchCreateUserLinksRequest, BatchCreateUserLinksResponse> _callBatchCreateUserLinks;

        private readonly gaxgrpc::ApiCall<UpdateUserLinkRequest, UserLink> _callUpdateUserLink;

        private readonly gaxgrpc::ApiCall<BatchUpdateUserLinksRequest, BatchUpdateUserLinksResponse> _callBatchUpdateUserLinks;

        private readonly gaxgrpc::ApiCall<DeleteUserLinkRequest, wkt::Empty> _callDeleteUserLink;

        private readonly gaxgrpc::ApiCall<BatchDeleteUserLinksRequest, wkt::Empty> _callBatchDeleteUserLinks;

        private readonly gaxgrpc::ApiCall<GetWebDataStreamRequest, WebDataStream> _callGetWebDataStream;

        private readonly gaxgrpc::ApiCall<DeleteWebDataStreamRequest, wkt::Empty> _callDeleteWebDataStream;

        private readonly gaxgrpc::ApiCall<UpdateWebDataStreamRequest, WebDataStream> _callUpdateWebDataStream;

        private readonly gaxgrpc::ApiCall<CreateWebDataStreamRequest, WebDataStream> _callCreateWebDataStream;

        private readonly gaxgrpc::ApiCall<ListWebDataStreamsRequest, ListWebDataStreamsResponse> _callListWebDataStreams;

        private readonly gaxgrpc::ApiCall<GetIosAppDataStreamRequest, IosAppDataStream> _callGetIosAppDataStream;

        private readonly gaxgrpc::ApiCall<DeleteIosAppDataStreamRequest, wkt::Empty> _callDeleteIosAppDataStream;

        private readonly gaxgrpc::ApiCall<UpdateIosAppDataStreamRequest, IosAppDataStream> _callUpdateIosAppDataStream;

        private readonly gaxgrpc::ApiCall<CreateIosAppDataStreamRequest, IosAppDataStream> _callCreateIosAppDataStream;

        private readonly gaxgrpc::ApiCall<ListIosAppDataStreamsRequest, ListIosAppDataStreamsResponse> _callListIosAppDataStreams;

        private readonly gaxgrpc::ApiCall<GetAndroidAppDataStreamRequest, AndroidAppDataStream> _callGetAndroidAppDataStream;

        private readonly gaxgrpc::ApiCall<DeleteAndroidAppDataStreamRequest, wkt::Empty> _callDeleteAndroidAppDataStream;

        private readonly gaxgrpc::ApiCall<UpdateAndroidAppDataStreamRequest, AndroidAppDataStream> _callUpdateAndroidAppDataStream;

        private readonly gaxgrpc::ApiCall<CreateAndroidAppDataStreamRequest, AndroidAppDataStream> _callCreateAndroidAppDataStream;

        private readonly gaxgrpc::ApiCall<ListAndroidAppDataStreamsRequest, ListAndroidAppDataStreamsResponse> _callListAndroidAppDataStreams;

        private readonly gaxgrpc::ApiCall<GetEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings> _callGetEnhancedMeasurementSettings;

        private readonly gaxgrpc::ApiCall<UpdateEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings> _callUpdateEnhancedMeasurementSettings;

        private readonly gaxgrpc::ApiCall<CreateFirebaseLinkRequest, FirebaseLink> _callCreateFirebaseLink;

        private readonly gaxgrpc::ApiCall<UpdateFirebaseLinkRequest, FirebaseLink> _callUpdateFirebaseLink;

        private readonly gaxgrpc::ApiCall<DeleteFirebaseLinkRequest, wkt::Empty> _callDeleteFirebaseLink;

        private readonly gaxgrpc::ApiCall<ListFirebaseLinksRequest, ListFirebaseLinksResponse> _callListFirebaseLinks;

        private readonly gaxgrpc::ApiCall<GetGlobalSiteTagRequest, GlobalSiteTag> _callGetGlobalSiteTag;

        private readonly gaxgrpc::ApiCall<CreateGoogleAdsLinkRequest, GoogleAdsLink> _callCreateGoogleAdsLink;

        private readonly gaxgrpc::ApiCall<UpdateGoogleAdsLinkRequest, GoogleAdsLink> _callUpdateGoogleAdsLink;

        private readonly gaxgrpc::ApiCall<DeleteGoogleAdsLinkRequest, wkt::Empty> _callDeleteGoogleAdsLink;

        private readonly gaxgrpc::ApiCall<ListGoogleAdsLinksRequest, ListGoogleAdsLinksResponse> _callListGoogleAdsLinks;

        private readonly gaxgrpc::ApiCall<GetDataSharingSettingsRequest, DataSharingSettings> _callGetDataSharingSettings;

        /// <summary>
        /// Constructs a client wrapper for the AnalyticsAdminService service, with the specified gRPC client and
        /// settings.
        /// </summary>
        /// <param name="grpcClient">The underlying gRPC client.</param>
        /// <param name="settings">The base <see cref="AnalyticsAdminServiceSettings"/> used within this client.</param>
        public AnalyticsAdminServiceClientImpl(AnalyticsAdminService.AnalyticsAdminServiceClient grpcClient, AnalyticsAdminServiceSettings settings)
        {
            GrpcClient = grpcClient;
            AnalyticsAdminServiceSettings effectiveSettings = settings ?? AnalyticsAdminServiceSettings.GetDefault();
            gaxgrpc::ClientHelper clientHelper = new gaxgrpc::ClientHelper(effectiveSettings);
            _callGetAccount = clientHelper.BuildApiCall<GetAccountRequest, Account>(grpcClient.GetAccountAsync, grpcClient.GetAccount, effectiveSettings.GetAccountSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetAccount);
            Modify_GetAccountApiCall(ref _callGetAccount);
            _callListAccounts = clientHelper.BuildApiCall<ListAccountsRequest, ListAccountsResponse>(grpcClient.ListAccountsAsync, grpcClient.ListAccounts, effectiveSettings.ListAccountsSettings);
            Modify_ApiCall(ref _callListAccounts);
            Modify_ListAccountsApiCall(ref _callListAccounts);
            _callDeleteAccount = clientHelper.BuildApiCall<DeleteAccountRequest, wkt::Empty>(grpcClient.DeleteAccountAsync, grpcClient.DeleteAccount, effectiveSettings.DeleteAccountSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteAccount);
            Modify_DeleteAccountApiCall(ref _callDeleteAccount);
            _callUpdateAccount = clientHelper.BuildApiCall<UpdateAccountRequest, Account>(grpcClient.UpdateAccountAsync, grpcClient.UpdateAccount, effectiveSettings.UpdateAccountSettings).WithGoogleRequestParam("account.name", request => request.Account?.Name);
            Modify_ApiCall(ref _callUpdateAccount);
            Modify_UpdateAccountApiCall(ref _callUpdateAccount);
            _callProvisionAccountTicket = clientHelper.BuildApiCall<ProvisionAccountTicketRequest, ProvisionAccountTicketResponse>(grpcClient.ProvisionAccountTicketAsync, grpcClient.ProvisionAccountTicket, effectiveSettings.ProvisionAccountTicketSettings);
            Modify_ApiCall(ref _callProvisionAccountTicket);
            Modify_ProvisionAccountTicketApiCall(ref _callProvisionAccountTicket);
            _callListAccountSummaries = clientHelper.BuildApiCall<ListAccountSummariesRequest, ListAccountSummariesResponse>(grpcClient.ListAccountSummariesAsync, grpcClient.ListAccountSummaries, effectiveSettings.ListAccountSummariesSettings);
            Modify_ApiCall(ref _callListAccountSummaries);
            Modify_ListAccountSummariesApiCall(ref _callListAccountSummaries);
            _callGetProperty = clientHelper.BuildApiCall<GetPropertyRequest, Property>(grpcClient.GetPropertyAsync, grpcClient.GetProperty, effectiveSettings.GetPropertySettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetProperty);
            Modify_GetPropertyApiCall(ref _callGetProperty);
            _callListProperties = clientHelper.BuildApiCall<ListPropertiesRequest, ListPropertiesResponse>(grpcClient.ListPropertiesAsync, grpcClient.ListProperties, effectiveSettings.ListPropertiesSettings);
            Modify_ApiCall(ref _callListProperties);
            Modify_ListPropertiesApiCall(ref _callListProperties);
            _callCreateProperty = clientHelper.BuildApiCall<CreatePropertyRequest, Property>(grpcClient.CreatePropertyAsync, grpcClient.CreateProperty, effectiveSettings.CreatePropertySettings);
            Modify_ApiCall(ref _callCreateProperty);
            Modify_CreatePropertyApiCall(ref _callCreateProperty);
            _callDeleteProperty = clientHelper.BuildApiCall<DeletePropertyRequest, wkt::Empty>(grpcClient.DeletePropertyAsync, grpcClient.DeleteProperty, effectiveSettings.DeletePropertySettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteProperty);
            Modify_DeletePropertyApiCall(ref _callDeleteProperty);
            _callUpdateProperty = clientHelper.BuildApiCall<UpdatePropertyRequest, Property>(grpcClient.UpdatePropertyAsync, grpcClient.UpdateProperty, effectiveSettings.UpdatePropertySettings).WithGoogleRequestParam("property.name", request => request.Property?.Name);
            Modify_ApiCall(ref _callUpdateProperty);
            Modify_UpdatePropertyApiCall(ref _callUpdateProperty);
            _callGetUserLink = clientHelper.BuildApiCall<GetUserLinkRequest, UserLink>(grpcClient.GetUserLinkAsync, grpcClient.GetUserLink, effectiveSettings.GetUserLinkSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetUserLink);
            Modify_GetUserLinkApiCall(ref _callGetUserLink);
            _callBatchGetUserLinks = clientHelper.BuildApiCall<BatchGetUserLinksRequest, BatchGetUserLinksResponse>(grpcClient.BatchGetUserLinksAsync, grpcClient.BatchGetUserLinks, effectiveSettings.BatchGetUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callBatchGetUserLinks);
            Modify_BatchGetUserLinksApiCall(ref _callBatchGetUserLinks);
            _callListUserLinks = clientHelper.BuildApiCall<ListUserLinksRequest, ListUserLinksResponse>(grpcClient.ListUserLinksAsync, grpcClient.ListUserLinks, effectiveSettings.ListUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListUserLinks);
            Modify_ListUserLinksApiCall(ref _callListUserLinks);
            _callAuditUserLinks = clientHelper.BuildApiCall<AuditUserLinksRequest, AuditUserLinksResponse>(grpcClient.AuditUserLinksAsync, grpcClient.AuditUserLinks, effectiveSettings.AuditUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callAuditUserLinks);
            Modify_AuditUserLinksApiCall(ref _callAuditUserLinks);
            _callCreateUserLink = clientHelper.BuildApiCall<CreateUserLinkRequest, UserLink>(grpcClient.CreateUserLinkAsync, grpcClient.CreateUserLink, effectiveSettings.CreateUserLinkSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateUserLink);
            Modify_CreateUserLinkApiCall(ref _callCreateUserLink);
            _callBatchCreateUserLinks = clientHelper.BuildApiCall<BatchCreateUserLinksRequest, BatchCreateUserLinksResponse>(grpcClient.BatchCreateUserLinksAsync, grpcClient.BatchCreateUserLinks, effectiveSettings.BatchCreateUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callBatchCreateUserLinks);
            Modify_BatchCreateUserLinksApiCall(ref _callBatchCreateUserLinks);
            _callUpdateUserLink = clientHelper.BuildApiCall<UpdateUserLinkRequest, UserLink>(grpcClient.UpdateUserLinkAsync, grpcClient.UpdateUserLink, effectiveSettings.UpdateUserLinkSettings).WithGoogleRequestParam("user_link.name", request => request.UserLink?.Name);
            Modify_ApiCall(ref _callUpdateUserLink);
            Modify_UpdateUserLinkApiCall(ref _callUpdateUserLink);
            _callBatchUpdateUserLinks = clientHelper.BuildApiCall<BatchUpdateUserLinksRequest, BatchUpdateUserLinksResponse>(grpcClient.BatchUpdateUserLinksAsync, grpcClient.BatchUpdateUserLinks, effectiveSettings.BatchUpdateUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callBatchUpdateUserLinks);
            Modify_BatchUpdateUserLinksApiCall(ref _callBatchUpdateUserLinks);
            _callDeleteUserLink = clientHelper.BuildApiCall<DeleteUserLinkRequest, wkt::Empty>(grpcClient.DeleteUserLinkAsync, grpcClient.DeleteUserLink, effectiveSettings.DeleteUserLinkSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteUserLink);
            Modify_DeleteUserLinkApiCall(ref _callDeleteUserLink);
            _callBatchDeleteUserLinks = clientHelper.BuildApiCall<BatchDeleteUserLinksRequest, wkt::Empty>(grpcClient.BatchDeleteUserLinksAsync, grpcClient.BatchDeleteUserLinks, effectiveSettings.BatchDeleteUserLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callBatchDeleteUserLinks);
            Modify_BatchDeleteUserLinksApiCall(ref _callBatchDeleteUserLinks);
            _callGetWebDataStream = clientHelper.BuildApiCall<GetWebDataStreamRequest, WebDataStream>(grpcClient.GetWebDataStreamAsync, grpcClient.GetWebDataStream, effectiveSettings.GetWebDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetWebDataStream);
            Modify_GetWebDataStreamApiCall(ref _callGetWebDataStream);
            _callDeleteWebDataStream = clientHelper.BuildApiCall<DeleteWebDataStreamRequest, wkt::Empty>(grpcClient.DeleteWebDataStreamAsync, grpcClient.DeleteWebDataStream, effectiveSettings.DeleteWebDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteWebDataStream);
            Modify_DeleteWebDataStreamApiCall(ref _callDeleteWebDataStream);
            _callUpdateWebDataStream = clientHelper.BuildApiCall<UpdateWebDataStreamRequest, WebDataStream>(grpcClient.UpdateWebDataStreamAsync, grpcClient.UpdateWebDataStream, effectiveSettings.UpdateWebDataStreamSettings).WithGoogleRequestParam("web_data_stream.name", request => request.WebDataStream?.Name);
            Modify_ApiCall(ref _callUpdateWebDataStream);
            Modify_UpdateWebDataStreamApiCall(ref _callUpdateWebDataStream);
            _callCreateWebDataStream = clientHelper.BuildApiCall<CreateWebDataStreamRequest, WebDataStream>(grpcClient.CreateWebDataStreamAsync, grpcClient.CreateWebDataStream, effectiveSettings.CreateWebDataStreamSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateWebDataStream);
            Modify_CreateWebDataStreamApiCall(ref _callCreateWebDataStream);
            _callListWebDataStreams = clientHelper.BuildApiCall<ListWebDataStreamsRequest, ListWebDataStreamsResponse>(grpcClient.ListWebDataStreamsAsync, grpcClient.ListWebDataStreams, effectiveSettings.ListWebDataStreamsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListWebDataStreams);
            Modify_ListWebDataStreamsApiCall(ref _callListWebDataStreams);
            _callGetIosAppDataStream = clientHelper.BuildApiCall<GetIosAppDataStreamRequest, IosAppDataStream>(grpcClient.GetIosAppDataStreamAsync, grpcClient.GetIosAppDataStream, effectiveSettings.GetIosAppDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetIosAppDataStream);
            Modify_GetIosAppDataStreamApiCall(ref _callGetIosAppDataStream);
            _callDeleteIosAppDataStream = clientHelper.BuildApiCall<DeleteIosAppDataStreamRequest, wkt::Empty>(grpcClient.DeleteIosAppDataStreamAsync, grpcClient.DeleteIosAppDataStream, effectiveSettings.DeleteIosAppDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteIosAppDataStream);
            Modify_DeleteIosAppDataStreamApiCall(ref _callDeleteIosAppDataStream);
            _callUpdateIosAppDataStream = clientHelper.BuildApiCall<UpdateIosAppDataStreamRequest, IosAppDataStream>(grpcClient.UpdateIosAppDataStreamAsync, grpcClient.UpdateIosAppDataStream, effectiveSettings.UpdateIosAppDataStreamSettings).WithGoogleRequestParam("ios_app_data_stream.name", request => request.IosAppDataStream?.Name);
            Modify_ApiCall(ref _callUpdateIosAppDataStream);
            Modify_UpdateIosAppDataStreamApiCall(ref _callUpdateIosAppDataStream);
            _callCreateIosAppDataStream = clientHelper.BuildApiCall<CreateIosAppDataStreamRequest, IosAppDataStream>(grpcClient.CreateIosAppDataStreamAsync, grpcClient.CreateIosAppDataStream, effectiveSettings.CreateIosAppDataStreamSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateIosAppDataStream);
            Modify_CreateIosAppDataStreamApiCall(ref _callCreateIosAppDataStream);
            _callListIosAppDataStreams = clientHelper.BuildApiCall<ListIosAppDataStreamsRequest, ListIosAppDataStreamsResponse>(grpcClient.ListIosAppDataStreamsAsync, grpcClient.ListIosAppDataStreams, effectiveSettings.ListIosAppDataStreamsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListIosAppDataStreams);
            Modify_ListIosAppDataStreamsApiCall(ref _callListIosAppDataStreams);
            _callGetAndroidAppDataStream = clientHelper.BuildApiCall<GetAndroidAppDataStreamRequest, AndroidAppDataStream>(grpcClient.GetAndroidAppDataStreamAsync, grpcClient.GetAndroidAppDataStream, effectiveSettings.GetAndroidAppDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetAndroidAppDataStream);
            Modify_GetAndroidAppDataStreamApiCall(ref _callGetAndroidAppDataStream);
            _callDeleteAndroidAppDataStream = clientHelper.BuildApiCall<DeleteAndroidAppDataStreamRequest, wkt::Empty>(grpcClient.DeleteAndroidAppDataStreamAsync, grpcClient.DeleteAndroidAppDataStream, effectiveSettings.DeleteAndroidAppDataStreamSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteAndroidAppDataStream);
            Modify_DeleteAndroidAppDataStreamApiCall(ref _callDeleteAndroidAppDataStream);
            _callUpdateAndroidAppDataStream = clientHelper.BuildApiCall<UpdateAndroidAppDataStreamRequest, AndroidAppDataStream>(grpcClient.UpdateAndroidAppDataStreamAsync, grpcClient.UpdateAndroidAppDataStream, effectiveSettings.UpdateAndroidAppDataStreamSettings).WithGoogleRequestParam("android_app_data_stream.name", request => request.AndroidAppDataStream?.Name);
            Modify_ApiCall(ref _callUpdateAndroidAppDataStream);
            Modify_UpdateAndroidAppDataStreamApiCall(ref _callUpdateAndroidAppDataStream);
            _callCreateAndroidAppDataStream = clientHelper.BuildApiCall<CreateAndroidAppDataStreamRequest, AndroidAppDataStream>(grpcClient.CreateAndroidAppDataStreamAsync, grpcClient.CreateAndroidAppDataStream, effectiveSettings.CreateAndroidAppDataStreamSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateAndroidAppDataStream);
            Modify_CreateAndroidAppDataStreamApiCall(ref _callCreateAndroidAppDataStream);
            _callListAndroidAppDataStreams = clientHelper.BuildApiCall<ListAndroidAppDataStreamsRequest, ListAndroidAppDataStreamsResponse>(grpcClient.ListAndroidAppDataStreamsAsync, grpcClient.ListAndroidAppDataStreams, effectiveSettings.ListAndroidAppDataStreamsSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListAndroidAppDataStreams);
            Modify_ListAndroidAppDataStreamsApiCall(ref _callListAndroidAppDataStreams);
            _callGetEnhancedMeasurementSettings = clientHelper.BuildApiCall<GetEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings>(grpcClient.GetEnhancedMeasurementSettingsAsync, grpcClient.GetEnhancedMeasurementSettings, effectiveSettings.GetEnhancedMeasurementSettingsSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetEnhancedMeasurementSettings);
            Modify_GetEnhancedMeasurementSettingsApiCall(ref _callGetEnhancedMeasurementSettings);
            _callUpdateEnhancedMeasurementSettings = clientHelper.BuildApiCall<UpdateEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings>(grpcClient.UpdateEnhancedMeasurementSettingsAsync, grpcClient.UpdateEnhancedMeasurementSettings, effectiveSettings.UpdateEnhancedMeasurementSettingsSettings).WithGoogleRequestParam("enhanced_measurement_settings.name", request => request.EnhancedMeasurementSettings?.Name);
            Modify_ApiCall(ref _callUpdateEnhancedMeasurementSettings);
            Modify_UpdateEnhancedMeasurementSettingsApiCall(ref _callUpdateEnhancedMeasurementSettings);
            _callCreateFirebaseLink = clientHelper.BuildApiCall<CreateFirebaseLinkRequest, FirebaseLink>(grpcClient.CreateFirebaseLinkAsync, grpcClient.CreateFirebaseLink, effectiveSettings.CreateFirebaseLinkSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateFirebaseLink);
            Modify_CreateFirebaseLinkApiCall(ref _callCreateFirebaseLink);
            _callUpdateFirebaseLink = clientHelper.BuildApiCall<UpdateFirebaseLinkRequest, FirebaseLink>(grpcClient.UpdateFirebaseLinkAsync, grpcClient.UpdateFirebaseLink, effectiveSettings.UpdateFirebaseLinkSettings).WithGoogleRequestParam("firebase_link.name", request => request.FirebaseLink?.Name);
            Modify_ApiCall(ref _callUpdateFirebaseLink);
            Modify_UpdateFirebaseLinkApiCall(ref _callUpdateFirebaseLink);
            _callDeleteFirebaseLink = clientHelper.BuildApiCall<DeleteFirebaseLinkRequest, wkt::Empty>(grpcClient.DeleteFirebaseLinkAsync, grpcClient.DeleteFirebaseLink, effectiveSettings.DeleteFirebaseLinkSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteFirebaseLink);
            Modify_DeleteFirebaseLinkApiCall(ref _callDeleteFirebaseLink);
            _callListFirebaseLinks = clientHelper.BuildApiCall<ListFirebaseLinksRequest, ListFirebaseLinksResponse>(grpcClient.ListFirebaseLinksAsync, grpcClient.ListFirebaseLinks, effectiveSettings.ListFirebaseLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListFirebaseLinks);
            Modify_ListFirebaseLinksApiCall(ref _callListFirebaseLinks);
            _callGetGlobalSiteTag = clientHelper.BuildApiCall<GetGlobalSiteTagRequest, GlobalSiteTag>(grpcClient.GetGlobalSiteTagAsync, grpcClient.GetGlobalSiteTag, effectiveSettings.GetGlobalSiteTagSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetGlobalSiteTag);
            Modify_GetGlobalSiteTagApiCall(ref _callGetGlobalSiteTag);
            _callCreateGoogleAdsLink = clientHelper.BuildApiCall<CreateGoogleAdsLinkRequest, GoogleAdsLink>(grpcClient.CreateGoogleAdsLinkAsync, grpcClient.CreateGoogleAdsLink, effectiveSettings.CreateGoogleAdsLinkSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callCreateGoogleAdsLink);
            Modify_CreateGoogleAdsLinkApiCall(ref _callCreateGoogleAdsLink);
            _callUpdateGoogleAdsLink = clientHelper.BuildApiCall<UpdateGoogleAdsLinkRequest, GoogleAdsLink>(grpcClient.UpdateGoogleAdsLinkAsync, grpcClient.UpdateGoogleAdsLink, effectiveSettings.UpdateGoogleAdsLinkSettings).WithGoogleRequestParam("google_ads_link.name", request => request.GoogleAdsLink?.Name);
            Modify_ApiCall(ref _callUpdateGoogleAdsLink);
            Modify_UpdateGoogleAdsLinkApiCall(ref _callUpdateGoogleAdsLink);
            _callDeleteGoogleAdsLink = clientHelper.BuildApiCall<DeleteGoogleAdsLinkRequest, wkt::Empty>(grpcClient.DeleteGoogleAdsLinkAsync, grpcClient.DeleteGoogleAdsLink, effectiveSettings.DeleteGoogleAdsLinkSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callDeleteGoogleAdsLink);
            Modify_DeleteGoogleAdsLinkApiCall(ref _callDeleteGoogleAdsLink);
            _callListGoogleAdsLinks = clientHelper.BuildApiCall<ListGoogleAdsLinksRequest, ListGoogleAdsLinksResponse>(grpcClient.ListGoogleAdsLinksAsync, grpcClient.ListGoogleAdsLinks, effectiveSettings.ListGoogleAdsLinksSettings).WithGoogleRequestParam("parent", request => request.Parent);
            Modify_ApiCall(ref _callListGoogleAdsLinks);
            Modify_ListGoogleAdsLinksApiCall(ref _callListGoogleAdsLinks);
            _callGetDataSharingSettings = clientHelper.BuildApiCall<GetDataSharingSettingsRequest, DataSharingSettings>(grpcClient.GetDataSharingSettingsAsync, grpcClient.GetDataSharingSettings, effectiveSettings.GetDataSharingSettingsSettings).WithGoogleRequestParam("name", request => request.Name);
            Modify_ApiCall(ref _callGetDataSharingSettings);
            Modify_GetDataSharingSettingsApiCall(ref _callGetDataSharingSettings);
            OnConstruction(grpcClient, effectiveSettings, clientHelper);
        }

        partial void Modify_ApiCall<TRequest, TResponse>(ref gaxgrpc::ApiCall<TRequest, TResponse> call) where TRequest : class, proto::IMessage<TRequest> where TResponse : class, proto::IMessage<TResponse>;

        partial void Modify_GetAccountApiCall(ref gaxgrpc::ApiCall<GetAccountRequest, Account> call);

        partial void Modify_ListAccountsApiCall(ref gaxgrpc::ApiCall<ListAccountsRequest, ListAccountsResponse> call);

        partial void Modify_DeleteAccountApiCall(ref gaxgrpc::ApiCall<DeleteAccountRequest, wkt::Empty> call);

        partial void Modify_UpdateAccountApiCall(ref gaxgrpc::ApiCall<UpdateAccountRequest, Account> call);

        partial void Modify_ProvisionAccountTicketApiCall(ref gaxgrpc::ApiCall<ProvisionAccountTicketRequest, ProvisionAccountTicketResponse> call);

        partial void Modify_ListAccountSummariesApiCall(ref gaxgrpc::ApiCall<ListAccountSummariesRequest, ListAccountSummariesResponse> call);

        partial void Modify_GetPropertyApiCall(ref gaxgrpc::ApiCall<GetPropertyRequest, Property> call);

        partial void Modify_ListPropertiesApiCall(ref gaxgrpc::ApiCall<ListPropertiesRequest, ListPropertiesResponse> call);

        partial void Modify_CreatePropertyApiCall(ref gaxgrpc::ApiCall<CreatePropertyRequest, Property> call);

        partial void Modify_DeletePropertyApiCall(ref gaxgrpc::ApiCall<DeletePropertyRequest, wkt::Empty> call);

        partial void Modify_UpdatePropertyApiCall(ref gaxgrpc::ApiCall<UpdatePropertyRequest, Property> call);

        partial void Modify_GetUserLinkApiCall(ref gaxgrpc::ApiCall<GetUserLinkRequest, UserLink> call);

        partial void Modify_BatchGetUserLinksApiCall(ref gaxgrpc::ApiCall<BatchGetUserLinksRequest, BatchGetUserLinksResponse> call);

        partial void Modify_ListUserLinksApiCall(ref gaxgrpc::ApiCall<ListUserLinksRequest, ListUserLinksResponse> call);

        partial void Modify_AuditUserLinksApiCall(ref gaxgrpc::ApiCall<AuditUserLinksRequest, AuditUserLinksResponse> call);

        partial void Modify_CreateUserLinkApiCall(ref gaxgrpc::ApiCall<CreateUserLinkRequest, UserLink> call);

        partial void Modify_BatchCreateUserLinksApiCall(ref gaxgrpc::ApiCall<BatchCreateUserLinksRequest, BatchCreateUserLinksResponse> call);

        partial void Modify_UpdateUserLinkApiCall(ref gaxgrpc::ApiCall<UpdateUserLinkRequest, UserLink> call);

        partial void Modify_BatchUpdateUserLinksApiCall(ref gaxgrpc::ApiCall<BatchUpdateUserLinksRequest, BatchUpdateUserLinksResponse> call);

        partial void Modify_DeleteUserLinkApiCall(ref gaxgrpc::ApiCall<DeleteUserLinkRequest, wkt::Empty> call);

        partial void Modify_BatchDeleteUserLinksApiCall(ref gaxgrpc::ApiCall<BatchDeleteUserLinksRequest, wkt::Empty> call);

        partial void Modify_GetWebDataStreamApiCall(ref gaxgrpc::ApiCall<GetWebDataStreamRequest, WebDataStream> call);

        partial void Modify_DeleteWebDataStreamApiCall(ref gaxgrpc::ApiCall<DeleteWebDataStreamRequest, wkt::Empty> call);

        partial void Modify_UpdateWebDataStreamApiCall(ref gaxgrpc::ApiCall<UpdateWebDataStreamRequest, WebDataStream> call);

        partial void Modify_CreateWebDataStreamApiCall(ref gaxgrpc::ApiCall<CreateWebDataStreamRequest, WebDataStream> call);

        partial void Modify_ListWebDataStreamsApiCall(ref gaxgrpc::ApiCall<ListWebDataStreamsRequest, ListWebDataStreamsResponse> call);

        partial void Modify_GetIosAppDataStreamApiCall(ref gaxgrpc::ApiCall<GetIosAppDataStreamRequest, IosAppDataStream> call);

        partial void Modify_DeleteIosAppDataStreamApiCall(ref gaxgrpc::ApiCall<DeleteIosAppDataStreamRequest, wkt::Empty> call);

        partial void Modify_UpdateIosAppDataStreamApiCall(ref gaxgrpc::ApiCall<UpdateIosAppDataStreamRequest, IosAppDataStream> call);

        partial void Modify_CreateIosAppDataStreamApiCall(ref gaxgrpc::ApiCall<CreateIosAppDataStreamRequest, IosAppDataStream> call);

        partial void Modify_ListIosAppDataStreamsApiCall(ref gaxgrpc::ApiCall<ListIosAppDataStreamsRequest, ListIosAppDataStreamsResponse> call);

        partial void Modify_GetAndroidAppDataStreamApiCall(ref gaxgrpc::ApiCall<GetAndroidAppDataStreamRequest, AndroidAppDataStream> call);

        partial void Modify_DeleteAndroidAppDataStreamApiCall(ref gaxgrpc::ApiCall<DeleteAndroidAppDataStreamRequest, wkt::Empty> call);

        partial void Modify_UpdateAndroidAppDataStreamApiCall(ref gaxgrpc::ApiCall<UpdateAndroidAppDataStreamRequest, AndroidAppDataStream> call);

        partial void Modify_CreateAndroidAppDataStreamApiCall(ref gaxgrpc::ApiCall<CreateAndroidAppDataStreamRequest, AndroidAppDataStream> call);

        partial void Modify_ListAndroidAppDataStreamsApiCall(ref gaxgrpc::ApiCall<ListAndroidAppDataStreamsRequest, ListAndroidAppDataStreamsResponse> call);

        partial void Modify_GetEnhancedMeasurementSettingsApiCall(ref gaxgrpc::ApiCall<GetEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings> call);

        partial void Modify_UpdateEnhancedMeasurementSettingsApiCall(ref gaxgrpc::ApiCall<UpdateEnhancedMeasurementSettingsRequest, EnhancedMeasurementSettings> call);

        partial void Modify_CreateFirebaseLinkApiCall(ref gaxgrpc::ApiCall<CreateFirebaseLinkRequest, FirebaseLink> call);

        partial void Modify_UpdateFirebaseLinkApiCall(ref gaxgrpc::ApiCall<UpdateFirebaseLinkRequest, FirebaseLink> call);

        partial void Modify_DeleteFirebaseLinkApiCall(ref gaxgrpc::ApiCall<DeleteFirebaseLinkRequest, wkt::Empty> call);

        partial void Modify_ListFirebaseLinksApiCall(ref gaxgrpc::ApiCall<ListFirebaseLinksRequest, ListFirebaseLinksResponse> call);

        partial void Modify_GetGlobalSiteTagApiCall(ref gaxgrpc::ApiCall<GetGlobalSiteTagRequest, GlobalSiteTag> call);

        partial void Modify_CreateGoogleAdsLinkApiCall(ref gaxgrpc::ApiCall<CreateGoogleAdsLinkRequest, GoogleAdsLink> call);

        partial void Modify_UpdateGoogleAdsLinkApiCall(ref gaxgrpc::ApiCall<UpdateGoogleAdsLinkRequest, GoogleAdsLink> call);

        partial void Modify_DeleteGoogleAdsLinkApiCall(ref gaxgrpc::ApiCall<DeleteGoogleAdsLinkRequest, wkt::Empty> call);

        partial void Modify_ListGoogleAdsLinksApiCall(ref gaxgrpc::ApiCall<ListGoogleAdsLinksRequest, ListGoogleAdsLinksResponse> call);

        partial void Modify_GetDataSharingSettingsApiCall(ref gaxgrpc::ApiCall<GetDataSharingSettingsRequest, DataSharingSettings> call);

        partial void OnConstruction(AnalyticsAdminService.AnalyticsAdminServiceClient grpcClient, AnalyticsAdminServiceSettings effectiveSettings, gaxgrpc::ClientHelper clientHelper);

        /// <summary>The underlying gRPC AnalyticsAdminService client</summary>
        public override AnalyticsAdminService.AnalyticsAdminServiceClient GrpcClient { get; }

        partial void Modify_GetAccountRequest(ref GetAccountRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListAccountsRequest(ref ListAccountsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteAccountRequest(ref DeleteAccountRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateAccountRequest(ref UpdateAccountRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ProvisionAccountTicketRequest(ref ProvisionAccountTicketRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListAccountSummariesRequest(ref ListAccountSummariesRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetPropertyRequest(ref GetPropertyRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListPropertiesRequest(ref ListPropertiesRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreatePropertyRequest(ref CreatePropertyRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeletePropertyRequest(ref DeletePropertyRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdatePropertyRequest(ref UpdatePropertyRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetUserLinkRequest(ref GetUserLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchGetUserLinksRequest(ref BatchGetUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListUserLinksRequest(ref ListUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_AuditUserLinksRequest(ref AuditUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateUserLinkRequest(ref CreateUserLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchCreateUserLinksRequest(ref BatchCreateUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateUserLinkRequest(ref UpdateUserLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchUpdateUserLinksRequest(ref BatchUpdateUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteUserLinkRequest(ref DeleteUserLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_BatchDeleteUserLinksRequest(ref BatchDeleteUserLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetWebDataStreamRequest(ref GetWebDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteWebDataStreamRequest(ref DeleteWebDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateWebDataStreamRequest(ref UpdateWebDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateWebDataStreamRequest(ref CreateWebDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListWebDataStreamsRequest(ref ListWebDataStreamsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetIosAppDataStreamRequest(ref GetIosAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteIosAppDataStreamRequest(ref DeleteIosAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateIosAppDataStreamRequest(ref UpdateIosAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateIosAppDataStreamRequest(ref CreateIosAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListIosAppDataStreamsRequest(ref ListIosAppDataStreamsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetAndroidAppDataStreamRequest(ref GetAndroidAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteAndroidAppDataStreamRequest(ref DeleteAndroidAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateAndroidAppDataStreamRequest(ref UpdateAndroidAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateAndroidAppDataStreamRequest(ref CreateAndroidAppDataStreamRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListAndroidAppDataStreamsRequest(ref ListAndroidAppDataStreamsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetEnhancedMeasurementSettingsRequest(ref GetEnhancedMeasurementSettingsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateEnhancedMeasurementSettingsRequest(ref UpdateEnhancedMeasurementSettingsRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateFirebaseLinkRequest(ref CreateFirebaseLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateFirebaseLinkRequest(ref UpdateFirebaseLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteFirebaseLinkRequest(ref DeleteFirebaseLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListFirebaseLinksRequest(ref ListFirebaseLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetGlobalSiteTagRequest(ref GetGlobalSiteTagRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_CreateGoogleAdsLinkRequest(ref CreateGoogleAdsLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_UpdateGoogleAdsLinkRequest(ref UpdateGoogleAdsLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_DeleteGoogleAdsLinkRequest(ref DeleteGoogleAdsLinkRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_ListGoogleAdsLinksRequest(ref ListGoogleAdsLinksRequest request, ref gaxgrpc::CallSettings settings);

        partial void Modify_GetDataSharingSettingsRequest(ref GetDataSharingSettingsRequest request, ref gaxgrpc::CallSettings settings);

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Account GetAccount(GetAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAccountRequest(ref request, ref callSettings);
            return _callGetAccount.Sync(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single Account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Account> GetAccountAsync(GetAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAccountRequest(ref request, ref callSettings);
            return _callGetAccount.Async(request, callSettings);
        }

        /// <summary>
        /// Returns all accounts accessible by the caller.
        /// 
        /// Note that these accounts might not currently have GA4 properties.
        /// Soft-deleted (ie: "trashed") accounts are excluded by default.
        /// Returns an empty list if no relevant accounts are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Account"/> resources.</returns>
        public override gax::PagedEnumerable<ListAccountsResponse, Account> ListAccounts(ListAccountsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAccountsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListAccountsRequest, ListAccountsResponse, Account>(_callListAccounts, request, callSettings);
        }

        /// <summary>
        /// Returns all accounts accessible by the caller.
        /// 
        /// Note that these accounts might not currently have GA4 properties.
        /// Soft-deleted (ie: "trashed") accounts are excluded by default.
        /// Returns an empty list if no relevant accounts are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Account"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListAccountsResponse, Account> ListAccountsAsync(ListAccountsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAccountsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListAccountsRequest, ListAccountsResponse, Account>(_callListAccounts, request, callSettings);
        }

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteAccount(DeleteAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAccountRequest(ref request, ref callSettings);
            _callDeleteAccount.Sync(request, callSettings);
        }

        /// <summary>
        /// Marks target Account as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted accounts.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the accounts are not restored before the expiration time, the account
        /// and all child resources (eg: Properties, GoogleAdsLinks, Streams,
        /// UserLinks) will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteAccountAsync(DeleteAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAccountRequest(ref request, ref callSettings);
            return _callDeleteAccount.Async(request, callSettings);
        }

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Account UpdateAccount(UpdateAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateAccountRequest(ref request, ref callSettings);
            return _callUpdateAccount.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Account> UpdateAccountAsync(UpdateAccountRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateAccountRequest(ref request, ref callSettings);
            return _callUpdateAccount.Async(request, callSettings);
        }

        /// <summary>
        /// Requests a ticket for creating an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override ProvisionAccountTicketResponse ProvisionAccountTicket(ProvisionAccountTicketRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ProvisionAccountTicketRequest(ref request, ref callSettings);
            return _callProvisionAccountTicket.Sync(request, callSettings);
        }

        /// <summary>
        /// Requests a ticket for creating an account.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<ProvisionAccountTicketResponse> ProvisionAccountTicketAsync(ProvisionAccountTicketRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ProvisionAccountTicketRequest(ref request, ref callSettings);
            return _callProvisionAccountTicket.Async(request, callSettings);
        }

        /// <summary>
        /// Returns summaries of all accounts accessible by the caller.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AccountSummary"/> resources.</returns>
        public override gax::PagedEnumerable<ListAccountSummariesResponse, AccountSummary> ListAccountSummaries(ListAccountSummariesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAccountSummariesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListAccountSummariesRequest, ListAccountSummariesResponse, AccountSummary>(_callListAccountSummaries, request, callSettings);
        }

        /// <summary>
        /// Returns summaries of all accounts accessible by the caller.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AccountSummary"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListAccountSummariesResponse, AccountSummary> ListAccountSummariesAsync(ListAccountSummariesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAccountSummariesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListAccountSummariesRequest, ListAccountSummariesResponse, AccountSummary>(_callListAccountSummaries, request, callSettings);
        }

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Property GetProperty(GetPropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetPropertyRequest(ref request, ref callSettings);
            return _callGetProperty.Sync(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single "GA4" Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Property> GetPropertyAsync(GetPropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetPropertyRequest(ref request, ref callSettings);
            return _callGetProperty.Async(request, callSettings);
        }

        /// <summary>
        /// Returns child Properties under the specified parent Account.
        /// 
        /// Only "GA4" properties will be returned.
        /// Properties will be excluded if the caller does not have access.
        /// Soft-deleted (ie: "trashed") properties are excluded by default.
        /// Returns an empty list if no relevant properties are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="Property"/> resources.</returns>
        public override gax::PagedEnumerable<ListPropertiesResponse, Property> ListProperties(ListPropertiesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListPropertiesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListPropertiesRequest, ListPropertiesResponse, Property>(_callListProperties, request, callSettings);
        }

        /// <summary>
        /// Returns child Properties under the specified parent Account.
        /// 
        /// Only "GA4" properties will be returned.
        /// Properties will be excluded if the caller does not have access.
        /// Soft-deleted (ie: "trashed") properties are excluded by default.
        /// Returns an empty list if no relevant properties are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="Property"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListPropertiesResponse, Property> ListPropertiesAsync(ListPropertiesRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListPropertiesRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListPropertiesRequest, ListPropertiesResponse, Property>(_callListProperties, request, callSettings);
        }

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Property CreateProperty(CreatePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreatePropertyRequest(ref request, ref callSettings);
            return _callCreateProperty.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates an "GA4" property with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Property> CreatePropertyAsync(CreatePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreatePropertyRequest(ref request, ref callSettings);
            return _callCreateProperty.Async(request, callSettings);
        }

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteProperty(DeletePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeletePropertyRequest(ref request, ref callSettings);
            _callDeleteProperty.Sync(request, callSettings);
        }

        /// <summary>
        /// Marks target Property as soft-deleted (ie: "trashed") and returns it.
        /// 
        /// This API does not have a method to restore soft-deleted properties.
        /// However, they can be restored using the Trash Can UI.
        /// 
        /// If the properties are not restored before the expiration time, the Property
        /// and all child resources (eg: GoogleAdsLinks, Streams, UserLinks)
        /// will be permanently purged.
        /// https://support.google.com/analytics/answer/6154772
        /// 
        /// Returns an error if the target is not found, or is not an GA4 Property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeletePropertyAsync(DeletePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeletePropertyRequest(ref request, ref callSettings);
            return _callDeleteProperty.Async(request, callSettings);
        }

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override Property UpdateProperty(UpdatePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdatePropertyRequest(ref request, ref callSettings);
            return _callUpdateProperty.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<Property> UpdatePropertyAsync(UpdatePropertyRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdatePropertyRequest(ref request, ref callSettings);
            return _callUpdateProperty.Async(request, callSettings);
        }

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override UserLink GetUserLink(GetUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetUserLinkRequest(ref request, ref callSettings);
            return _callGetUserLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets information about a user's link to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<UserLink> GetUserLinkAsync(GetUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetUserLinkRequest(ref request, ref callSettings);
            return _callGetUserLink.Async(request, callSettings);
        }

        /// <summary>
        /// Gets information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchGetUserLinksResponse BatchGetUserLinks(BatchGetUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchGetUserLinksRequest(ref request, ref callSettings);
            return _callBatchGetUserLinks.Sync(request, callSettings);
        }

        /// <summary>
        /// Gets information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchGetUserLinksResponse> BatchGetUserLinksAsync(BatchGetUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchGetUserLinksRequest(ref request, ref callSettings);
            return _callBatchGetUserLinks.Async(request, callSettings);
        }

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="UserLink"/> resources.</returns>
        public override gax::PagedEnumerable<ListUserLinksResponse, UserLink> ListUserLinks(ListUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListUserLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListUserLinksRequest, ListUserLinksResponse, UserLink>(_callListUserLinks, request, callSettings);
        }

        /// <summary>
        /// Lists all user links on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="UserLink"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListUserLinksResponse, UserLink> ListUserLinksAsync(ListUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListUserLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListUserLinksRequest, ListUserLinksResponse, UserLink>(_callListUserLinks, request, callSettings);
        }

        /// <summary>
        /// Lists all user links on an account or property, including implicit ones
        /// that come from effective permissions granted by groups or organization
        /// admin roles.
        /// 
        /// If a returned user link does not have direct permissions, they cannot
        /// be removed from the account or property directly with the DeleteUserLink
        /// command. They have to be removed from the group/etc that gives them
        /// permissions, which is currently only usable/discoverable in the GA or GMP
        /// UIs.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AuditUserLink"/> resources.</returns>
        public override gax::PagedEnumerable<AuditUserLinksResponse, AuditUserLink> AuditUserLinks(AuditUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_AuditUserLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<AuditUserLinksRequest, AuditUserLinksResponse, AuditUserLink>(_callAuditUserLinks, request, callSettings);
        }

        /// <summary>
        /// Lists all user links on an account or property, including implicit ones
        /// that come from effective permissions granted by groups or organization
        /// admin roles.
        /// 
        /// If a returned user link does not have direct permissions, they cannot
        /// be removed from the account or property directly with the DeleteUserLink
        /// command. They have to be removed from the group/etc that gives them
        /// permissions, which is currently only usable/discoverable in the GA or GMP
        /// UIs.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AuditUserLink"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<AuditUserLinksResponse, AuditUserLink> AuditUserLinksAsync(AuditUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_AuditUserLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<AuditUserLinksRequest, AuditUserLinksResponse, AuditUserLink>(_callAuditUserLinks, request, callSettings);
        }

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override UserLink CreateUserLink(CreateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateUserLinkRequest(ref request, ref callSettings);
            return _callCreateUserLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a user link on an account or property.
        /// 
        /// If the user with the specified email already has permissions on the
        /// account or property, then the user's existing permissions will be unioned
        /// with the permissions specified in the new UserLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<UserLink> CreateUserLinkAsync(CreateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateUserLinkRequest(ref request, ref callSettings);
            return _callCreateUserLink.Async(request, callSettings);
        }

        /// <summary>
        /// Creates information about multiple users' links to an account or property.
        /// 
        /// This method is transactional. If any UserLink cannot be created, none of
        /// the UserLinks will be created.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchCreateUserLinksResponse BatchCreateUserLinks(BatchCreateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchCreateUserLinksRequest(ref request, ref callSettings);
            return _callBatchCreateUserLinks.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates information about multiple users' links to an account or property.
        /// 
        /// This method is transactional. If any UserLink cannot be created, none of
        /// the UserLinks will be created.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchCreateUserLinksResponse> BatchCreateUserLinksAsync(BatchCreateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchCreateUserLinksRequest(ref request, ref callSettings);
            return _callBatchCreateUserLinks.Async(request, callSettings);
        }

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override UserLink UpdateUserLink(UpdateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateUserLinkRequest(ref request, ref callSettings);
            return _callUpdateUserLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<UserLink> UpdateUserLinkAsync(UpdateUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateUserLinkRequest(ref request, ref callSettings);
            return _callUpdateUserLink.Async(request, callSettings);
        }

        /// <summary>
        /// Updates information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override BatchUpdateUserLinksResponse BatchUpdateUserLinks(BatchUpdateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchUpdateUserLinksRequest(ref request, ref callSettings);
            return _callBatchUpdateUserLinks.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<BatchUpdateUserLinksResponse> BatchUpdateUserLinksAsync(BatchUpdateUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchUpdateUserLinksRequest(ref request, ref callSettings);
            return _callBatchUpdateUserLinks.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteUserLink(DeleteUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteUserLinkRequest(ref request, ref callSettings);
            _callDeleteUserLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes a user link on an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteUserLinkAsync(DeleteUserLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteUserLinkRequest(ref request, ref callSettings);
            return _callDeleteUserLink.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void BatchDeleteUserLinks(BatchDeleteUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchDeleteUserLinksRequest(ref request, ref callSettings);
            _callBatchDeleteUserLinks.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes information about multiple users' links to an account or property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task BatchDeleteUserLinksAsync(BatchDeleteUserLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_BatchDeleteUserLinksRequest(ref request, ref callSettings);
            return _callBatchDeleteUserLinks.Async(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override WebDataStream GetWebDataStream(GetWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetWebDataStreamRequest(ref request, ref callSettings);
            return _callGetWebDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single WebDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<WebDataStream> GetWebDataStreamAsync(GetWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetWebDataStreamRequest(ref request, ref callSettings);
            return _callGetWebDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteWebDataStream(DeleteWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteWebDataStreamRequest(ref request, ref callSettings);
            _callDeleteWebDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteWebDataStreamAsync(DeleteWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteWebDataStreamRequest(ref request, ref callSettings);
            return _callDeleteWebDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override WebDataStream UpdateWebDataStream(UpdateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateWebDataStreamRequest(ref request, ref callSettings);
            return _callUpdateWebDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates a web stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<WebDataStream> UpdateWebDataStreamAsync(UpdateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateWebDataStreamRequest(ref request, ref callSettings);
            return _callUpdateWebDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override WebDataStream CreateWebDataStream(CreateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateWebDataStreamRequest(ref request, ref callSettings);
            return _callCreateWebDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a web stream with the specified location and attributes.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<WebDataStream> CreateWebDataStreamAsync(CreateWebDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateWebDataStreamRequest(ref request, ref callSettings);
            return _callCreateWebDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="WebDataStream"/> resources.</returns>
        public override gax::PagedEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreams(ListWebDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListWebDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListWebDataStreamsRequest, ListWebDataStreamsResponse, WebDataStream>(_callListWebDataStreams, request, callSettings);
        }

        /// <summary>
        /// Returns child web data streams under the specified parent property.
        /// 
        /// Web data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant web data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="WebDataStream"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListWebDataStreamsResponse, WebDataStream> ListWebDataStreamsAsync(ListWebDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListWebDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListWebDataStreamsRequest, ListWebDataStreamsResponse, WebDataStream>(_callListWebDataStreams, request, callSettings);
        }

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override IosAppDataStream GetIosAppDataStream(GetIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetIosAppDataStreamRequest(ref request, ref callSettings);
            return _callGetIosAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single IosAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<IosAppDataStream> GetIosAppDataStreamAsync(GetIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetIosAppDataStreamRequest(ref request, ref callSettings);
            return _callGetIosAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteIosAppDataStream(DeleteIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteIosAppDataStreamRequest(ref request, ref callSettings);
            _callDeleteIosAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteIosAppDataStreamAsync(DeleteIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteIosAppDataStreamRequest(ref request, ref callSettings);
            return _callDeleteIosAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override IosAppDataStream UpdateIosAppDataStream(UpdateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateIosAppDataStreamRequest(ref request, ref callSettings);
            return _callUpdateIosAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates an iOS app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<IosAppDataStream> UpdateIosAppDataStreamAsync(UpdateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateIosAppDataStreamRequest(ref request, ref callSettings);
            return _callUpdateIosAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override IosAppDataStream CreateIosAppDataStream(CreateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateIosAppDataStreamRequest(ref request, ref callSettings);
            return _callCreateIosAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates an iOS app stream with the specified location and attributes.
        /// 
        /// Note that an iOS app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<IosAppDataStream> CreateIosAppDataStreamAsync(CreateIosAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateIosAppDataStreamRequest(ref request, ref callSettings);
            return _callCreateIosAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public override gax::PagedEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreams(ListIosAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListIosAppDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListIosAppDataStreamsRequest, ListIosAppDataStreamsResponse, IosAppDataStream>(_callListIosAppDataStreams, request, callSettings);
        }

        /// <summary>
        /// Returns child iOS app data streams under the specified parent property.
        /// 
        /// iOS app data streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant iOS app data streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="IosAppDataStream"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListIosAppDataStreamsResponse, IosAppDataStream> ListIosAppDataStreamsAsync(ListIosAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListIosAppDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListIosAppDataStreamsRequest, ListIosAppDataStreamsResponse, IosAppDataStream>(_callListIosAppDataStreams, request, callSettings);
        }

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override AndroidAppDataStream GetAndroidAppDataStream(GetAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callGetAndroidAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Lookup for a single AndroidAppDataStream
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<AndroidAppDataStream> GetAndroidAppDataStreamAsync(GetAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callGetAndroidAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteAndroidAppDataStream(DeleteAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAndroidAppDataStreamRequest(ref request, ref callSettings);
            _callDeleteAndroidAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteAndroidAppDataStreamAsync(DeleteAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callDeleteAndroidAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override AndroidAppDataStream UpdateAndroidAppDataStream(UpdateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callUpdateAndroidAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates an android app stream on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<AndroidAppDataStream> UpdateAndroidAppDataStreamAsync(UpdateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callUpdateAndroidAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override AndroidAppDataStream CreateAndroidAppDataStream(CreateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callCreateAndroidAppDataStream.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates an Android app stream with the specified location and attributes.
        /// 
        /// Note that an Android app stream must be linked to a Firebase app to receive
        /// traffic.
        /// 
        /// To create a working app stream, make sure your property is linked to a
        /// Firebase project. Then, use the Firebase API to create a Firebase app,
        /// which will also create an appropriate data stream in Analytics (may take up
        /// to 24 hours).
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<AndroidAppDataStream> CreateAndroidAppDataStreamAsync(CreateAndroidAppDataStreamRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateAndroidAppDataStreamRequest(ref request, ref callSettings);
            return _callCreateAndroidAppDataStream.Async(request, callSettings);
        }

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public override gax::PagedEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreams(ListAndroidAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAndroidAppDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListAndroidAppDataStreamsRequest, ListAndroidAppDataStreamsResponse, AndroidAppDataStream>(_callListAndroidAppDataStreams, request, callSettings);
        }

        /// <summary>
        /// Returns child android app streams under the specified parent property.
        /// 
        /// Android app streams will be excluded if the caller does not have access.
        /// Returns an empty list if no relevant android app streams are found.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="AndroidAppDataStream"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListAndroidAppDataStreamsResponse, AndroidAppDataStream> ListAndroidAppDataStreamsAsync(ListAndroidAppDataStreamsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListAndroidAppDataStreamsRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListAndroidAppDataStreamsRequest, ListAndroidAppDataStreamsResponse, AndroidAppDataStream>(_callListAndroidAppDataStreams, request, callSettings);
        }

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override EnhancedMeasurementSettings GetEnhancedMeasurementSettings(GetEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetEnhancedMeasurementSettingsRequest(ref request, ref callSettings);
            return _callGetEnhancedMeasurementSettings.Sync(request, callSettings);
        }

        /// <summary>
        /// Returns the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<EnhancedMeasurementSettings> GetEnhancedMeasurementSettingsAsync(GetEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetEnhancedMeasurementSettingsRequest(ref request, ref callSettings);
            return _callGetEnhancedMeasurementSettings.Async(request, callSettings);
        }

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override EnhancedMeasurementSettings UpdateEnhancedMeasurementSettings(UpdateEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateEnhancedMeasurementSettingsRequest(ref request, ref callSettings);
            return _callUpdateEnhancedMeasurementSettings.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates the singleton enhanced measurement settings for this web stream.
        /// Note that the stream must enable enhanced measurement for these settings to
        /// take effect.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<EnhancedMeasurementSettings> UpdateEnhancedMeasurementSettingsAsync(UpdateEnhancedMeasurementSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateEnhancedMeasurementSettingsRequest(ref request, ref callSettings);
            return _callUpdateEnhancedMeasurementSettings.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override FirebaseLink CreateFirebaseLink(CreateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateFirebaseLinkRequest(ref request, ref callSettings);
            return _callCreateFirebaseLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a FirebaseLink.
        /// 
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<FirebaseLink> CreateFirebaseLinkAsync(CreateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateFirebaseLinkRequest(ref request, ref callSettings);
            return _callCreateFirebaseLink.Async(request, callSettings);
        }

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override FirebaseLink UpdateFirebaseLink(UpdateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateFirebaseLinkRequest(ref request, ref callSettings);
            return _callUpdateFirebaseLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<FirebaseLink> UpdateFirebaseLinkAsync(UpdateFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateFirebaseLinkRequest(ref request, ref callSettings);
            return _callUpdateFirebaseLink.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteFirebaseLink(DeleteFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteFirebaseLinkRequest(ref request, ref callSettings);
            _callDeleteFirebaseLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes a FirebaseLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteFirebaseLinkAsync(DeleteFirebaseLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteFirebaseLinkRequest(ref request, ref callSettings);
            return _callDeleteFirebaseLink.Async(request, callSettings);
        }

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="FirebaseLink"/> resources.</returns>
        public override gax::PagedEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinks(ListFirebaseLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListFirebaseLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListFirebaseLinksRequest, ListFirebaseLinksResponse, FirebaseLink>(_callListFirebaseLinks, request, callSettings);
        }

        /// <summary>
        /// Lists FirebaseLinks on a property.
        /// Properties can have at most one FirebaseLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="FirebaseLink"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListFirebaseLinksResponse, FirebaseLink> ListFirebaseLinksAsync(ListFirebaseLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListFirebaseLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListFirebaseLinksRequest, ListFirebaseLinksResponse, FirebaseLink>(_callListFirebaseLinks, request, callSettings);
        }

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override GlobalSiteTag GetGlobalSiteTag(GetGlobalSiteTagRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetGlobalSiteTagRequest(ref request, ref callSettings);
            return _callGetGlobalSiteTag.Sync(request, callSettings);
        }

        /// <summary>
        /// Returns the Site Tag for the specified web stream.
        /// Site Tags are immutable singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<GlobalSiteTag> GetGlobalSiteTagAsync(GetGlobalSiteTagRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetGlobalSiteTagRequest(ref request, ref callSettings);
            return _callGetGlobalSiteTag.Async(request, callSettings);
        }

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override GoogleAdsLink CreateGoogleAdsLink(CreateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateGoogleAdsLinkRequest(ref request, ref callSettings);
            return _callCreateGoogleAdsLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Creates a GoogleAdsLink.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<GoogleAdsLink> CreateGoogleAdsLinkAsync(CreateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_CreateGoogleAdsLinkRequest(ref request, ref callSettings);
            return _callCreateGoogleAdsLink.Async(request, callSettings);
        }

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override GoogleAdsLink UpdateGoogleAdsLink(UpdateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateGoogleAdsLinkRequest(ref request, ref callSettings);
            return _callUpdateGoogleAdsLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Updates a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<GoogleAdsLink> UpdateGoogleAdsLinkAsync(UpdateGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_UpdateGoogleAdsLinkRequest(ref request, ref callSettings);
            return _callUpdateGoogleAdsLink.Async(request, callSettings);
        }

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override void DeleteGoogleAdsLink(DeleteGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteGoogleAdsLinkRequest(ref request, ref callSettings);
            _callDeleteGoogleAdsLink.Sync(request, callSettings);
        }

        /// <summary>
        /// Deletes a GoogleAdsLink on a property
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task DeleteGoogleAdsLinkAsync(DeleteGoogleAdsLinkRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_DeleteGoogleAdsLinkRequest(ref request, ref callSettings);
            return _callDeleteGoogleAdsLink.Async(request, callSettings);
        }

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public override gax::PagedEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinks(ListGoogleAdsLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListGoogleAdsLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedEnumerable<ListGoogleAdsLinksRequest, ListGoogleAdsLinksResponse, GoogleAdsLink>(_callListGoogleAdsLinks, request, callSettings);
        }

        /// <summary>
        /// Lists GoogleAdsLinks on a property.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A pageable asynchronous sequence of <see cref="GoogleAdsLink"/> resources.</returns>
        public override gax::PagedAsyncEnumerable<ListGoogleAdsLinksResponse, GoogleAdsLink> ListGoogleAdsLinksAsync(ListGoogleAdsLinksRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_ListGoogleAdsLinksRequest(ref request, ref callSettings);
            return new gaxgrpc::GrpcPagedAsyncEnumerable<ListGoogleAdsLinksRequest, ListGoogleAdsLinksResponse, GoogleAdsLink>(_callListGoogleAdsLinks, request, callSettings);
        }

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>The RPC response.</returns>
        public override DataSharingSettings GetDataSharingSettings(GetDataSharingSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetDataSharingSettingsRequest(ref request, ref callSettings);
            return _callGetDataSharingSettings.Sync(request, callSettings);
        }

        /// <summary>
        /// Get data sharing settings on an account.
        /// Data sharing settings are singletons.
        /// </summary>
        /// <param name="request">The request object containing all of the parameters for the API call.</param>
        /// <param name="callSettings">If not null, applies overrides to this RPC call.</param>
        /// <returns>A Task containing the RPC response.</returns>
        public override stt::Task<DataSharingSettings> GetDataSharingSettingsAsync(GetDataSharingSettingsRequest request, gaxgrpc::CallSettings callSettings = null)
        {
            Modify_GetDataSharingSettingsRequest(ref request, ref callSettings);
            return _callGetDataSharingSettings.Async(request, callSettings);
        }
    }

    public partial class ListAccountsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListAccountSummariesRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListPropertiesRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListUserLinksRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class AuditUserLinksRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListWebDataStreamsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListIosAppDataStreamsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListAndroidAppDataStreamsRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListFirebaseLinksRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListGoogleAdsLinksRequest : gaxgrpc::IPageRequest
    {
    }

    public partial class ListAccountsResponse : gaxgrpc::IPageResponse<Account>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<Account> GetEnumerator() => Accounts.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListAccountSummariesResponse : gaxgrpc::IPageResponse<AccountSummary>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<AccountSummary> GetEnumerator() => AccountSummaries.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListPropertiesResponse : gaxgrpc::IPageResponse<Property>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<Property> GetEnumerator() => Properties.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListUserLinksResponse : gaxgrpc::IPageResponse<UserLink>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<UserLink> GetEnumerator() => UserLinks.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class AuditUserLinksResponse : gaxgrpc::IPageResponse<AuditUserLink>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<AuditUserLink> GetEnumerator() => UserLinks.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListWebDataStreamsResponse : gaxgrpc::IPageResponse<WebDataStream>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<WebDataStream> GetEnumerator() => WebDataStreams.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListIosAppDataStreamsResponse : gaxgrpc::IPageResponse<IosAppDataStream>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<IosAppDataStream> GetEnumerator() => IosAppDataStreams.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListAndroidAppDataStreamsResponse : gaxgrpc::IPageResponse<AndroidAppDataStream>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<AndroidAppDataStream> GetEnumerator() => AndroidAppDataStreams.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListFirebaseLinksResponse : gaxgrpc::IPageResponse<FirebaseLink>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<FirebaseLink> GetEnumerator() => FirebaseLinks.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }

    public partial class ListGoogleAdsLinksResponse : gaxgrpc::IPageResponse<GoogleAdsLink>
    {
        /// <summary>Returns an enumerator that iterates through the resources in this response.</summary>
        public scg::IEnumerator<GoogleAdsLink> GetEnumerator() => GoogleAdsLinks.GetEnumerator();

        sc::IEnumerator sc::IEnumerable.GetEnumerator() => GetEnumerator();
    }
}
