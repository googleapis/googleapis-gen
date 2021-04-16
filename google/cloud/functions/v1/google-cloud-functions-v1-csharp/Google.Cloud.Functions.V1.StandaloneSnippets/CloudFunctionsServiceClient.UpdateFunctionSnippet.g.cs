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

namespace Google.Cloud.Functions.V1.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedCloudFunctionsServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateFunction</summary>
        public void UpdateFunction()
        {
            // Snippet: UpdateFunction(CloudFunction, CallSettings)
            // Create client
            CloudFunctionsServiceClient cloudFunctionsServiceClient = CloudFunctionsServiceClient.Create();
            // Initialize request argument(s)
            CloudFunction function = new CloudFunction();
            // Make the request
            Operation<CloudFunction, OperationMetadataV1> response = cloudFunctionsServiceClient.UpdateFunction(function);

            // Poll until the returned long-running operation is complete
            Operation<CloudFunction, OperationMetadataV1> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            CloudFunction result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<CloudFunction, OperationMetadataV1> retrievedResponse = cloudFunctionsServiceClient.PollOnceUpdateFunction(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                CloudFunction retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
