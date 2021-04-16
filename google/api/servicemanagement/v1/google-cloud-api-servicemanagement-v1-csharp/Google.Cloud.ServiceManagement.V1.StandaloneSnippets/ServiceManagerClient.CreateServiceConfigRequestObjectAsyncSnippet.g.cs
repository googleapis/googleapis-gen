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
    using Google.Api;
    using System.Threading.Tasks;

    public sealed partial class GeneratedServiceManagerClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateServiceConfigAsync</summary>
        public async Task CreateServiceConfigRequestObjectAsync()
        {
            // Snippet: CreateServiceConfigAsync(CreateServiceConfigRequest, CallSettings)
            // Additional: CreateServiceConfigAsync(CreateServiceConfigRequest, CancellationToken)
            // Create client
            ServiceManagerClient serviceManagerClient = await ServiceManagerClient.CreateAsync();
            // Initialize request argument(s)
            CreateServiceConfigRequest request = new CreateServiceConfigRequest
            {
                ServiceName = "",
                ServiceConfig = new Service(),
            };
            // Make the request
            Service response = await serviceManagerClient.CreateServiceConfigAsync(request);
            // End snippet
        }
    }
}
