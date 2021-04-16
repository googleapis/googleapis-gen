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
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedTagKeysClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateTagKeyAsync</summary>
        public async Task UpdateTagKeyAsync()
        {
            // Snippet: UpdateTagKeyAsync(TagKey, FieldMask, CallSettings)
            // Additional: UpdateTagKeyAsync(TagKey, FieldMask, CancellationToken)
            // Create client
            TagKeysClient tagKeysClient = await TagKeysClient.CreateAsync();
            // Initialize request argument(s)
            TagKey tagKey = new TagKey();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Operation<TagKey, UpdateTagKeyMetadata> response = await tagKeysClient.UpdateTagKeyAsync(tagKey, updateMask);

            // Poll until the returned long-running operation is complete
            Operation<TagKey, UpdateTagKeyMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            TagKey result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<TagKey, UpdateTagKeyMetadata> retrievedResponse = await tagKeysClient.PollOnceUpdateTagKeyAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                TagKey retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
