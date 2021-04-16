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

namespace Google.Ads.GoogleAds.V4.Services.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedAdGroupFeedServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for MutateAdGroupFeedsAsync</summary>
        public async Task MutateAdGroupFeedsRequestObjectAsync()
        {
            // Snippet: MutateAdGroupFeedsAsync(MutateAdGroupFeedsRequest, CallSettings)
            // Additional: MutateAdGroupFeedsAsync(MutateAdGroupFeedsRequest, CancellationToken)
            // Create client
            AdGroupFeedServiceClient adGroupFeedServiceClient = await AdGroupFeedServiceClient.CreateAsync();
            // Initialize request argument(s)
            MutateAdGroupFeedsRequest request = new MutateAdGroupFeedsRequest
            {
                CustomerId = "",
                Operations =
                {
                    new AdGroupFeedOperation(),
                },
                PartialFailure = false,
                ValidateOnly = false,
            };
            // Make the request
            MutateAdGroupFeedsResponse response = await adGroupFeedServiceClient.MutateAdGroupFeedsAsync(request);
            // End snippet
        }
    }
}
