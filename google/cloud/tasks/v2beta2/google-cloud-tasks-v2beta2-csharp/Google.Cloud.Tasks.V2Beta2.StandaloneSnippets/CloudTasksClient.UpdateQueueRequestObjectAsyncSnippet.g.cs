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

namespace Google.Cloud.Tasks.V2Beta2.Snippets
{
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedCloudTasksClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateQueueAsync</summary>
        public async Task UpdateQueueRequestObjectAsync()
        {
            // Snippet: UpdateQueueAsync(UpdateQueueRequest, CallSettings)
            // Additional: UpdateQueueAsync(UpdateQueueRequest, CancellationToken)
            // Create client
            CloudTasksClient cloudTasksClient = await CloudTasksClient.CreateAsync();
            // Initialize request argument(s)
            UpdateQueueRequest request = new UpdateQueueRequest
            {
                Queue = new Queue(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Queue response = await cloudTasksClient.UpdateQueueAsync(request);
            // End snippet
        }
    }
}
