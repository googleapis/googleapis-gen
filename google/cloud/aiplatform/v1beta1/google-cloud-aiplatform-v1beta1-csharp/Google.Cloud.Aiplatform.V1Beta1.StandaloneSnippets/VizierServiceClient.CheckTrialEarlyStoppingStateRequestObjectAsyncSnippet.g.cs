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
    using System.Threading.Tasks;

    public sealed partial class GeneratedVizierServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for CheckTrialEarlyStoppingStateAsync</summary>
        public async Task CheckTrialEarlyStoppingStateRequestObjectAsync()
        {
            // Snippet: CheckTrialEarlyStoppingStateAsync(CheckTrialEarlyStoppingStateRequest, CallSettings)
            // Additional: CheckTrialEarlyStoppingStateAsync(CheckTrialEarlyStoppingStateRequest, CancellationToken)
            // Create client
            VizierServiceClient vizierServiceClient = await VizierServiceClient.CreateAsync();
            // Initialize request argument(s)
            CheckTrialEarlyStoppingStateRequest request = new CheckTrialEarlyStoppingStateRequest
            {
                TrialNameAsTrialName = TrialName.FromProjectLocationStudyTrial("[PROJECT]", "[LOCATION]", "[STUDY]", "[TRIAL]"),
            };
            // Make the request
            Operation<CheckTrialEarlyStoppingStateResponse, CheckTrialEarlyStoppingStateMetatdata> response = await vizierServiceClient.CheckTrialEarlyStoppingStateAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<CheckTrialEarlyStoppingStateResponse, CheckTrialEarlyStoppingStateMetatdata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            CheckTrialEarlyStoppingStateResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<CheckTrialEarlyStoppingStateResponse, CheckTrialEarlyStoppingStateMetatdata> retrievedResponse = await vizierServiceClient.PollOnceCheckTrialEarlyStoppingStateAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                CheckTrialEarlyStoppingStateResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
