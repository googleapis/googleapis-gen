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

namespace Google.Cloud.ResourceManager.V3.Snippets
{
    using Google.Api.Gax.ResourceNames;
    using System.Threading.Tasks;

    public sealed partial class GeneratedOrganizationsClientStandaloneSnippets
    {
        /// <summary>Snippet for GetOrganizationAsync</summary>
        public async Task GetOrganizationResourceNamesAsync()
        {
            // Snippet: GetOrganizationAsync(OrganizationName, CallSettings)
            // Additional: GetOrganizationAsync(OrganizationName, CancellationToken)
            // Create client
            OrganizationsClient organizationsClient = await OrganizationsClient.CreateAsync();
            // Initialize request argument(s)
            OrganizationName name = OrganizationName.FromOrganization("[ORGANIZATION]");
            // Make the request
            Organization response = await organizationsClient.GetOrganizationAsync(name);
            // End snippet
        }
    }
}
