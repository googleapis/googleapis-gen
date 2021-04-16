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

namespace Google.Cloud.Talent.V4Beta1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedProfileServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetProfileAsync</summary>
        public async Task GetProfileRequestObjectAsync()
        {
            // Snippet: GetProfileAsync(GetProfileRequest, CallSettings)
            // Additional: GetProfileAsync(GetProfileRequest, CancellationToken)
            // Create client
            ProfileServiceClient profileServiceClient = await ProfileServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetProfileRequest request = new GetProfileRequest
            {
                ProfileName = ProfileName.FromProjectTenantProfile("[PROJECT]", "[TENANT]", "[PROFILE]"),
            };
            // Make the request
            Profile response = await profileServiceClient.GetProfileAsync(request);
            // End snippet
        }
    }
}
