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

namespace Google.Cloud.Channel.V1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedCloudChannelServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for ProvisionCloudIdentityAsync</summary>
        public async Task ProvisionCloudIdentityRequestObjectAsync()
        {
            // Snippet: ProvisionCloudIdentityAsync(ProvisionCloudIdentityRequest, CallSettings)
            // Additional: ProvisionCloudIdentityAsync(ProvisionCloudIdentityRequest, CancellationToken)
            // Create client
            CloudChannelServiceClient cloudChannelServiceClient = await CloudChannelServiceClient.CreateAsync();
            // Initialize request argument(s)
            ProvisionCloudIdentityRequest request = new ProvisionCloudIdentityRequest
            {
                CustomerAsCustomerName = CustomerName.FromAccountCustomer("[ACCOUNT]", "[CUSTOMER]"),
                CloudIdentityInfo = new CloudIdentityInfo(),
                User = new AdminUser(),
                ValidateOnly = false,
            };
            // Make the request
            Operation<Customer, OperationMetadata> response = await cloudChannelServiceClient.ProvisionCloudIdentityAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Customer, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Customer result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Customer, OperationMetadata> retrievedResponse = await cloudChannelServiceClient.PollOnceProvisionCloudIdentityAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Customer retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
