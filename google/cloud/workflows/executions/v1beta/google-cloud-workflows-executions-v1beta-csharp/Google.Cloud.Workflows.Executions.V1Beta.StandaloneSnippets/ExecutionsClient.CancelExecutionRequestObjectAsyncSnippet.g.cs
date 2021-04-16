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

namespace Google.Cloud.Workflows.Executions.V1Beta.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedExecutionsClientStandaloneSnippets
    {
        /// <summary>Snippet for CancelExecutionAsync</summary>
        public async Task CancelExecutionRequestObjectAsync()
        {
            // Snippet: CancelExecutionAsync(CancelExecutionRequest, CallSettings)
            // Additional: CancelExecutionAsync(CancelExecutionRequest, CancellationToken)
            // Create client
            ExecutionsClient executionsClient = await ExecutionsClient.CreateAsync();
            // Initialize request argument(s)
            CancelExecutionRequest request = new CancelExecutionRequest
            {
                ExecutionName = ExecutionName.FromProjectLocationWorkflowExecution("[PROJECT]", "[LOCATION]", "[WORKFLOW]", "[EXECUTION]"),
            };
            // Make the request
            Execution response = await executionsClient.CancelExecutionAsync(request);
            // End snippet
        }
    }
}
