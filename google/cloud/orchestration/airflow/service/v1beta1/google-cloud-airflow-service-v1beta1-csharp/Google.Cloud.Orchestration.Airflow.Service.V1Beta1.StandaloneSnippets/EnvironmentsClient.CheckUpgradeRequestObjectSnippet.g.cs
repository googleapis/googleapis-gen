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

namespace Google.Cloud.Orchestration.Airflow.Service.V1Beta1.Snippets
{
    using Google.Cloud.Orchestration.Airflow.Service.V1Beta1;
    using Google.LongRunning;

    public sealed partial class GeneratedEnvironmentsClientStandaloneSnippets
    {
        /// <summary>Snippet for CheckUpgrade</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void CheckUpgradeRequestObject()
        {
            // Create client
            EnvironmentsClient environmentsClient = EnvironmentsClient.Create();
            // Initialize request argument(s)
            CheckUpgradeRequest request = new CheckUpgradeRequest
            {
                Environment = "",
                ImageVersion = "",
            };
            // Make the request
            Operation<CheckUpgradeResponse, OperationMetadata> response = environmentsClient.CheckUpgrade(request);

            // Poll until the returned long-running operation is complete
            Operation<CheckUpgradeResponse, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            CheckUpgradeResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<CheckUpgradeResponse, OperationMetadata> retrievedResponse = environmentsClient.PollOnceCheckUpgrade(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                CheckUpgradeResponse retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
