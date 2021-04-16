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

namespace Google.Cloud.Iam.Credentials.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedIAMCredentialsClientStandaloneSnippets
    {
        /// <summary>Snippet for GenerateIdTokenAsync</summary>
        public async Task GenerateIdTokenRequestObjectAsync()
        {
            // Snippet: GenerateIdTokenAsync(GenerateIdTokenRequest, CallSettings)
            // Additional: GenerateIdTokenAsync(GenerateIdTokenRequest, CancellationToken)
            // Create client
            IAMCredentialsClient iAMCredentialsClient = await IAMCredentialsClient.CreateAsync();
            // Initialize request argument(s)
            GenerateIdTokenRequest request = new GenerateIdTokenRequest
            {
                ServiceAccountName = ServiceAccountName.FromProjectServiceAccount("[PROJECT]", "[SERVICE_ACCOUNT]"),
                Delegates = { "", },
                Audience = "",
                IncludeEmail = false,
            };
            // Make the request
            GenerateIdTokenResponse response = await iAMCredentialsClient.GenerateIdTokenAsync(request);
            // End snippet
        }
    }
}
