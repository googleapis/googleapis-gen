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

namespace Google.Cloud.Dialogflow.V2beta1.Snippets
{
    using Google.Cloud.Dialogflow.V2beta1;
    using System.Threading.Tasks;

    public sealed partial class GeneratedSessionsClientStandaloneSnippets
    {
        /// <summary>Snippet for DetectIntentAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task DetectIntentAsync()
        {
            // Create client
            SessionsClient sessionsClient = await SessionsClient.CreateAsync();
            // Initialize request argument(s)
            string session = "projects/[PROJECT]/agent/sessions/[SESSION]";
            QueryInput queryInput = new QueryInput();
            // Make the request
            DetectIntentResponse response = await sessionsClient.DetectIntentAsync(session, queryInput);
        }
    }
}
