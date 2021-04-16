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

namespace Google.Cloud.GSuiteAddOns.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedGSuiteAddOnsClientStandaloneSnippets
    {
        /// <summary>Snippet for GetInstallStatusAsync</summary>
        public async Task GetInstallStatusAsync()
        {
            // Snippet: GetInstallStatusAsync(string, CallSettings)
            // Additional: GetInstallStatusAsync(string, CancellationToken)
            // Create client
            GSuiteAddOnsClient gSuiteAddOnsClient = await GSuiteAddOnsClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/deployments/[DEPLOYMENT]/installStatus";
            // Make the request
            InstallStatus response = await gSuiteAddOnsClient.GetInstallStatusAsync(name);
            // End snippet
        }
    }
}
