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

namespace Google.Cloud.Dialogflow.Cx.V3.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedTestCasesClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchRunTestCases</summary>
        public void BatchRunTestCasesRequestObject()
        {
            // Snippet: BatchRunTestCases(BatchRunTestCasesRequest, CallSettings)
            // Create client
            TestCasesClient testCasesClient = TestCasesClient.Create();
            // Initialize request argument(s)
            BatchRunTestCasesRequest request = new BatchRunTestCasesRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                EnvironmentAsEnvironmentName = EnvironmentName.FromProjectLocationAgentEnvironment("[PROJECT]", "[LOCATION]", "[AGENT]", "[ENVIRONMENT]"),
                TestCasesAsTestCaseNames =
                {
                    TestCaseName.FromProjectLocationAgentTestCase("[PROJECT]", "[LOCATION]", "[AGENT]", "[TEST_CASE]"),
                },
            };
            // Make the request
            Operation<BatchRunTestCasesResponse, BatchRunTestCasesMetadata> response = testCasesClient.BatchRunTestCases(request);

            // Poll until the returned long-running operation is complete
            Operation<BatchRunTestCasesResponse, BatchRunTestCasesMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            BatchRunTestCasesResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<BatchRunTestCasesResponse, BatchRunTestCasesMetadata> retrievedResponse = testCasesClient.PollOnceBatchRunTestCases(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                BatchRunTestCasesResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
