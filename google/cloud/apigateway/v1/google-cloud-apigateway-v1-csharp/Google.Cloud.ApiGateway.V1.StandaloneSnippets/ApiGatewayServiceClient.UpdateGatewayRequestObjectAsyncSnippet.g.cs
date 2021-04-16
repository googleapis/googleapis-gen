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

    public sealed partial class GeneratedApiGatewayServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateGatewayAsync</summary>
        public async Task UpdateGatewayRequestObjectAsync()
        {
            // Snippet: UpdateGatewayAsync(UpdateGatewayRequest, CallSettings)
            // Additional: UpdateGatewayAsync(UpdateGatewayRequest, CancellationToken)
            // Create client
            ApiGatewayServiceClient apiGatewayServiceClient = await ApiGatewayServiceClient.CreateAsync();
            // Initialize request argument(s)
            UpdateGatewayRequest request = new UpdateGatewayRequest
            {
                UpdateMask = new FieldMask(),
                Gateway = new Gateway(),
            };
            // Make the request
            Operation<Gateway, OperationMetadata> response = await apiGatewayServiceClient.UpdateGatewayAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Gateway, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Gateway result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Gateway, OperationMetadata> retrievedResponse = await apiGatewayServiceClient.PollOnceUpdateGatewayAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Gateway retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
