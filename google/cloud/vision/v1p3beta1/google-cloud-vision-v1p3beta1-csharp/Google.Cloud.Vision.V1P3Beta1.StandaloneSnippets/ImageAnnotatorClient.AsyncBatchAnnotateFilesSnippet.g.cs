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

namespace Google.Cloud.Vision.V1P3Beta1.Snippets
{
    using Google.LongRunning;
    using System.Collections.Generic;

    public sealed partial class GeneratedImageAnnotatorClientStandaloneSnippets
    {
        /// <summary>Snippet for AsyncBatchAnnotateFiles</summary>
        public void AsyncBatchAnnotateFiles()
        {
            // Snippet: AsyncBatchAnnotateFiles(IEnumerable<AsyncAnnotateFileRequest>, CallSettings)
            // Create client
            ImageAnnotatorClient imageAnnotatorClient = ImageAnnotatorClient.Create();
            // Initialize request argument(s)
            IEnumerable<AsyncAnnotateFileRequest> requests = new AsyncAnnotateFileRequest[]
            {
                new AsyncAnnotateFileRequest(),
            };
            // Make the request
            Operation<AsyncBatchAnnotateFilesResponse, OperationMetadata> response = imageAnnotatorClient.AsyncBatchAnnotateFiles(requests);

            // Poll until the returned long-running operation is complete
            Operation<AsyncBatchAnnotateFilesResponse, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            AsyncBatchAnnotateFilesResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<AsyncBatchAnnotateFilesResponse, OperationMetadata> retrievedResponse = imageAnnotatorClient.PollOnceAsyncBatchAnnotateFiles(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                AsyncBatchAnnotateFilesResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
