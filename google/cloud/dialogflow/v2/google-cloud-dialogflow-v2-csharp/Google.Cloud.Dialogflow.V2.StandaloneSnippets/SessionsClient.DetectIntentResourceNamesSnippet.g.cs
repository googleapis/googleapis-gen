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
    public sealed partial class GeneratedSessionsClientStandaloneSnippets
    {
        /// <summary>Snippet for DetectIntent</summary>
        public void DetectIntentResourceNames()
        {
            // Snippet: DetectIntent(SessionName, QueryInput, CallSettings)
            // Create client
            SessionsClient sessionsClient = SessionsClient.Create();
            // Initialize request argument(s)
            SessionName session = SessionName.FromProjectSession("[PROJECT]", "[SESSION]");
            QueryInput queryInput = new QueryInput();
            // Make the request
            DetectIntentResponse response = sessionsClient.DetectIntent(session, queryInput);
            // End snippet
        }
    }
}
