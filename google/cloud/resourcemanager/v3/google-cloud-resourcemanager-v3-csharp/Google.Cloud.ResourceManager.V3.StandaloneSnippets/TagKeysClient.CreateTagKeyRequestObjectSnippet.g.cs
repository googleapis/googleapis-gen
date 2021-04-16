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

    public sealed partial class GeneratedTagKeysClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateTagKey</summary>
        public void CreateTagKeyRequestObject()
        {
            // Snippet: CreateTagKey(CreateTagKeyRequest, CallSettings)
            // Create client
            TagKeysClient tagKeysClient = TagKeysClient.Create();
            // Initialize request argument(s)
            CreateTagKeyRequest request = new CreateTagKeyRequest
            {
                TagKey = new TagKey(),
                ValidateOnly = false,
            };
            // Make the request
            Operation<TagKey, CreateTagKeyMetadata> response = tagKeysClient.CreateTagKey(request);

            // Poll until the returned long-running operation is complete
            Operation<TagKey, CreateTagKeyMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            TagKey result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<TagKey, CreateTagKeyMetadata> retrievedResponse = tagKeysClient.PollOnceCreateTagKey(operationName);
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
