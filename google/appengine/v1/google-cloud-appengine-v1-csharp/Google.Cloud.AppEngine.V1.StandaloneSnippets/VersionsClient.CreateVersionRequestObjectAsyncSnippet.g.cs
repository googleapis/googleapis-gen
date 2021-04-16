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

namespace Google.Cloud.AppEngine.V1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedVersionsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateVersionAsync</summary>
        public async Task CreateVersionRequestObjectAsync()
        {
            // Snippet: CreateVersionAsync(CreateVersionRequest, CallSettings)
            // Additional: CreateVersionAsync(CreateVersionRequest, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            CreateVersionRequest request = new CreateVersionRequest
            {
                Parent = "",
                Version = new Version(),
            };
            // Make the request
            Operation<Version, CreateVersionMetadataV1> response = await versionsClient.CreateVersionAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Version, CreateVersionMetadataV1> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Version result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Version, CreateVersionMetadataV1> retrievedResponse = await versionsClient.PollOnceCreateVersionAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Version retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
