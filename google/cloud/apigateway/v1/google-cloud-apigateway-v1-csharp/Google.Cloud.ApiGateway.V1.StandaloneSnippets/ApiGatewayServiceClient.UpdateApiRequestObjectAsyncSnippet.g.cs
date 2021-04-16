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

namespace Google.Cloud.ApiGateway.V1.Snippets
{
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;
    using gcav = Google.Cloud.ApiGateway.V1;

    public sealed partial class GeneratedApiGatewayServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateApiAsync</summary>
        public async Task UpdateApiRequestObjectAsync()
        {
            // Snippet: UpdateApiAsync(UpdateApiRequest, CallSettings)
            // Additional: UpdateApiAsync(UpdateApiRequest, CancellationToken)
            // Create client
            ApiGatewayServiceClient apiGatewayServiceClient = await ApiGatewayServiceClient.CreateAsync();
            // Initialize request argument(s)
            UpdateApiRequest request = new UpdateApiRequest
            {
                UpdateMask = new FieldMask(),
                Api = new gcav::Api(),
            };
            // Make the request
            Operation<gcav::Api, OperationMetadata> response = await apiGatewayServiceClient.UpdateApiAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<gcav::Api, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            gcav::Api result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<gcav::Api, OperationMetadata> retrievedResponse = await apiGatewayServiceClient.PollOnceUpdateApiAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                gcav::Api retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
