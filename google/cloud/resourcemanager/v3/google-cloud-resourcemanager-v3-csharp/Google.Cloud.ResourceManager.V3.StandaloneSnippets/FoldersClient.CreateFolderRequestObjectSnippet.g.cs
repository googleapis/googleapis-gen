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

    public sealed partial class GeneratedFoldersClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateFolder</summary>
        public void CreateFolderRequestObject()
        {
            // Snippet: CreateFolder(CreateFolderRequest, CallSettings)
            // Create client
            FoldersClient foldersClient = FoldersClient.Create();
            // Initialize request argument(s)
            CreateFolderRequest request = new CreateFolderRequest
            {
                Folder = new Folder(),
            };
            // Make the request
            Operation<Folder, CreateFolderMetadata> response = foldersClient.CreateFolder(request);

            // Poll until the returned long-running operation is complete
            Operation<Folder, CreateFolderMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Folder result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Folder, CreateFolderMetadata> retrievedResponse = foldersClient.PollOnceCreateFolder(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Folder retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
