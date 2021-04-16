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

namespace Google.Cloud.Memcache.V1Beta2.Snippets
{
    using Google.Api.Gax.ResourceNames;
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedCloudMemcacheClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateInstanceAsync</summary>
        public async Task CreateInstanceResourceNamesAsync()
        {
            // Snippet: CreateInstanceAsync(LocationName, string, Instance, CallSettings)
            // Additional: CreateInstanceAsync(LocationName, string, Instance, CancellationToken)
            // Create client
            CloudMemcacheClient cloudMemcacheClient = await CloudMemcacheClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            string instanceId = "";
            Instance resource = new Instance();
            // Make the request
            Operation<Instance, OperationMetadata> response = await cloudMemcacheClient.CreateInstanceAsync(parent, instanceId, resource);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await cloudMemcacheClient.PollOnceCreateInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
