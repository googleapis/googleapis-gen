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

namespace Google.Cloud.Dialogflow.V2.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedSessionEntityTypesClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateSessionEntityTypeAsync</summary>
        public async Task CreateSessionEntityTypeAsync()
        {
            // Snippet: CreateSessionEntityTypeAsync(string, SessionEntityType, CallSettings)
            // Additional: CreateSessionEntityTypeAsync(string, SessionEntityType, CancellationToken)
            // Create client
            SessionEntityTypesClient sessionEntityTypesClient = await SessionEntityTypesClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent/sessions/[SESSION]";
            SessionEntityType sessionEntityType = new SessionEntityType();
            // Make the request
            SessionEntityType response = await sessionEntityTypesClient.CreateSessionEntityTypeAsync(parent, sessionEntityType);
            // End snippet
        }
    }
}
