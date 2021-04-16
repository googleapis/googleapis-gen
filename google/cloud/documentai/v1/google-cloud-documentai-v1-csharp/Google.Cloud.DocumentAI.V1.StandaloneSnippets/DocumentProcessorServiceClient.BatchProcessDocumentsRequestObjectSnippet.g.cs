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

namespace Google.Cloud.DocumentAI.V1.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedDocumentProcessorServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchProcessDocuments</summary>
        public void BatchProcessDocumentsRequestObject()
        {
            // Snippet: BatchProcessDocuments(BatchProcessRequest, CallSettings)
            // Create client
            DocumentProcessorServiceClient documentProcessorServiceClient = DocumentProcessorServiceClient.Create();
            // Initialize request argument(s)
            BatchProcessRequest request = new BatchProcessRequest
            {
                ProcessorName = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]"),
                SkipHumanReview = false,
                InputDocuments = new BatchDocumentsInputConfig(),
                DocumentOutputConfig = new DocumentOutputConfig(),
            };
            // Make the request
            Operation<BatchProcessResponse, BatchProcessMetadata> response = documentProcessorServiceClient.BatchProcessDocuments(request);

            // Poll until the returned long-running operation is complete
            Operation<BatchProcessResponse, BatchProcessMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            BatchProcessResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<BatchProcessResponse, BatchProcessMetadata> retrievedResponse = documentProcessorServiceClient.PollOnceBatchProcessDocuments(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                BatchProcessResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
