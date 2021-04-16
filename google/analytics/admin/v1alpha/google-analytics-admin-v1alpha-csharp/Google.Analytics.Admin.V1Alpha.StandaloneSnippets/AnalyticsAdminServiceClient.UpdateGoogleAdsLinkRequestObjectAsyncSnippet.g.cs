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

namespace Google.Analytics.Admin.V1Alpha.Snippets
{
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedAnalyticsAdminServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateGoogleAdsLinkAsync</summary>
        public async Task UpdateGoogleAdsLinkRequestObjectAsync()
        {
            // Snippet: UpdateGoogleAdsLinkAsync(UpdateGoogleAdsLinkRequest, CallSettings)
            // Additional: UpdateGoogleAdsLinkAsync(UpdateGoogleAdsLinkRequest, CancellationToken)
            // Create client
            AnalyticsAdminServiceClient analyticsAdminServiceClient = await AnalyticsAdminServiceClient.CreateAsync();
            // Initialize request argument(s)
            UpdateGoogleAdsLinkRequest request = new UpdateGoogleAdsLinkRequest
            {
                GoogleAdsLink = new GoogleAdsLink(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            GoogleAdsLink response = await analyticsAdminServiceClient.UpdateGoogleAdsLinkAsync(request);
            // End snippet
        }
    }
}
