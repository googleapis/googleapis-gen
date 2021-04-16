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

namespace Google.Cloud.Tasks.V2Beta3.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedCloudTasksClientStandaloneSnippets
    {
        /// <summary>Snippet for GetQueueAsync</summary>
        public async Task GetQueueAsync()
        {
            // Snippet: GetQueueAsync(string, CallSettings)
            // Additional: GetQueueAsync(string, CancellationToken)
            // Create client
            CloudTasksClient cloudTasksClient = await CloudTasksClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/queues/[QUEUE]";
            // Make the request
            Queue response = await cloudTasksClient.GetQueueAsync(name);
            // End snippet
        }
    }
}
