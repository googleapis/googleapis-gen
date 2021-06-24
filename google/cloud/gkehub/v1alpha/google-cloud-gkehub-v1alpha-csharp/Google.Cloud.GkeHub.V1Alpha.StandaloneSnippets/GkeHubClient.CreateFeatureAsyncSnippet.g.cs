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

namespace Google.Cloud.GkeHub.V1Alpha.Snippets
{
    using Google.Cloud.GkeHub.V1Alpha;
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedGkeHubClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateFeatureAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task CreateFeatureAsync()
        {
            // Create client
            GkeHubClient gkeHubClient = await GkeHubClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "";
            Feature resource = new Feature();
            string featureId = "";
            // Make the request
            Operation<Feature, OperationMetadata> response = await gkeHubClient.CreateFeatureAsync(parent, resource, featureId);

            // Poll until the returned long-running operation is complete
            Operation<Feature, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Feature result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Feature, OperationMetadata> retrievedResponse = await gkeHubClient.PollOnceCreateFeatureAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Feature retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
