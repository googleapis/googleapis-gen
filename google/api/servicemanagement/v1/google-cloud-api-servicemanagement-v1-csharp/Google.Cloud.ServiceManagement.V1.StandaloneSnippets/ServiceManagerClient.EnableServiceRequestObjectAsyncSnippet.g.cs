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

namespace Google.Cloud.ServiceManagement.V1.Snippets
{
    using Google.Cloud.ServiceManagement.V1;
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedServiceManagerClientStandaloneSnippets
    {
        /// <summary>Snippet for EnableServiceAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task EnableServiceRequestObjectAsync()
        {
            // Create client
            ServiceManagerClient serviceManagerClient = await ServiceManagerClient.CreateAsync();
            // Initialize request argument(s)
            EnableServiceRequest request = new EnableServiceRequest
            {
                ServiceName = "",
                ConsumerId = "",
            };
            // Make the request
#pragma warning disable CS0612
            Operation<EnableServiceResponse, OperationMetadata> response = await serviceManagerClient.EnableServiceAsync(request);
#pragma warning restore CS0612

            // Poll until the returned long-running operation is complete
            Operation<EnableServiceResponse, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            EnableServiceResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
#pragma warning disable CS0612
            Operation<EnableServiceResponse, OperationMetadata> retrievedResponse = await serviceManagerClient.PollOnceEnableServiceAsync(operationName);
#pragma warning restore CS0612
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                EnableServiceResponse retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
