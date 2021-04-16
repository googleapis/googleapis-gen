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
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedIAMCredentialsClientStandaloneSnippets
    {
        /// <summary>Snippet for GenerateAccessToken</summary>
        public void GenerateAccessTokenRequestObject()
        {
            // Snippet: GenerateAccessToken(GenerateAccessTokenRequest, CallSettings)
            // Create client
            IAMCredentialsClient iAMCredentialsClient = IAMCredentialsClient.Create();
            // Initialize request argument(s)
            GenerateAccessTokenRequest request = new GenerateAccessTokenRequest
            {
                ServiceAccountName = ServiceAccountName.FromProjectServiceAccount("[PROJECT]", "[SERVICE_ACCOUNT]"),
                Delegates = { "", },
                Scope = { "", },
                Lifetime = new Duration(),
            };
            // Make the request
            GenerateAccessTokenResponse response = iAMCredentialsClient.GenerateAccessToken(request);
            // End snippet
        }
    }
}
