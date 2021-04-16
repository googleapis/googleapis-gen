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

namespace Google.Cloud.Talent.V4.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedTenantServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetTenantAsync</summary>
        public async Task GetTenantRequestObjectAsync()
        {
            // Snippet: GetTenantAsync(GetTenantRequest, CallSettings)
            // Additional: GetTenantAsync(GetTenantRequest, CancellationToken)
            // Create client
            TenantServiceClient tenantServiceClient = await TenantServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetTenantRequest request = new GetTenantRequest
            {
                TenantName = TenantName.FromProjectTenant("[PROJECT]", "[TENANT]"),
            };
            // Make the request
            Tenant response = await tenantServiceClient.GetTenantAsync(request);
            // End snippet
        }
    }
}
