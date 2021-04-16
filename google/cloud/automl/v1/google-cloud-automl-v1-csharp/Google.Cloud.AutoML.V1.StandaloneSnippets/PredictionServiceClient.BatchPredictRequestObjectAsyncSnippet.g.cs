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

namespace Google.Cloud.AutoML.V1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedPredictionServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchPredictAsync</summary>
        public async Task BatchPredictRequestObjectAsync()
        {
            // Snippet: BatchPredictAsync(BatchPredictRequest, CallSettings)
            // Additional: BatchPredictAsync(BatchPredictRequest, CancellationToken)
            // Create client
            PredictionServiceClient predictionServiceClient = await PredictionServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchPredictRequest request = new BatchPredictRequest
            {
                ModelName = ModelName.FromProjectLocationModel("[PROJECT]", "[LOCATION]", "[MODEL]"),
                InputConfig = new BatchPredictInputConfig(),
                OutputConfig = new BatchPredictOutputConfig(),
                Params = { { "", "" }, },
            };
            // Make the request
            Operation<BatchPredictResult, OperationMetadata> response = await predictionServiceClient.BatchPredictAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<BatchPredictResult, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            BatchPredictResult result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<BatchPredictResult, OperationMetadata> retrievedResponse = await predictionServiceClient.PollOnceBatchPredictAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                BatchPredictResult retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
