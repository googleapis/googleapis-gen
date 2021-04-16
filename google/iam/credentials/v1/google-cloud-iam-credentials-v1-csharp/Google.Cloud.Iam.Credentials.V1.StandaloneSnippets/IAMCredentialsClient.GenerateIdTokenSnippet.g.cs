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
    using System.Collections.Generic;

    public sealed partial class GeneratedIAMCredentialsClientStandaloneSnippets
    {
        /// <summary>Snippet for GenerateIdToken</summary>
        public void GenerateIdToken()
        {
            // Snippet: GenerateIdToken(string, IEnumerable<string>, string, bool, CallSettings)
            // Create client
            IAMCredentialsClient iAMCredentialsClient = IAMCredentialsClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/serviceAccounts/[SERVICE_ACCOUNT]";
            IEnumerable<string> delegates = new string[] { "", };
            string audience = "";
            bool includeEmail = false;
            // Make the request
            GenerateIdTokenResponse response = iAMCredentialsClient.GenerateIdToken(name, delegates, audience, includeEmail);
            // End snippet
        }
    }
}
