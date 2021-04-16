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

namespace Google.Cloud.Aiplatform.V1Beta1.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedVizierServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for SuggestTrials</summary>
        public void SuggestTrialsRequestObject()
        {
            // Snippet: SuggestTrials(SuggestTrialsRequest, CallSettings)
            // Create client
            VizierServiceClient vizierServiceClient = VizierServiceClient.Create();
            // Initialize request argument(s)
            SuggestTrialsRequest request = new SuggestTrialsRequest
            {
                ParentAsStudyName = StudyName.FromProjectLocationStudy("[PROJECT]", "[LOCATION]", "[STUDY]"),
                SuggestionCount = 0,
                ClientId = "",
            };
            // Make the request
            Operation<SuggestTrialsResponse, SuggestTrialsMetadata> response = vizierServiceClient.SuggestTrials(request);

            // Poll until the returned long-running operation is complete
            Operation<SuggestTrialsResponse, SuggestTrialsMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            SuggestTrialsResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<SuggestTrialsResponse, SuggestTrialsMetadata> retrievedResponse = vizierServiceClient.PollOnceSuggestTrials(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                SuggestTrialsResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
