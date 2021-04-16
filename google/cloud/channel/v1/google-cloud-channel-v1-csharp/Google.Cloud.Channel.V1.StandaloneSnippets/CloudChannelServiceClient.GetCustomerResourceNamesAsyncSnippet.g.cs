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
    using System.Threading.Tasks;

    public sealed partial class GeneratedCloudChannelServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetCustomerAsync</summary>
        public async Task GetCustomerResourceNamesAsync()
        {
            // Snippet: GetCustomerAsync(CustomerName, CallSettings)
            // Additional: GetCustomerAsync(CustomerName, CancellationToken)
            // Create client
            CloudChannelServiceClient cloudChannelServiceClient = await CloudChannelServiceClient.CreateAsync();
            // Initialize request argument(s)
            CustomerName name = CustomerName.FromAccountCustomer("[ACCOUNT]", "[CUSTOMER]");
            // Make the request
            Customer response = await cloudChannelServiceClient.GetCustomerAsync(name);
            // End snippet
        }
    }
}
