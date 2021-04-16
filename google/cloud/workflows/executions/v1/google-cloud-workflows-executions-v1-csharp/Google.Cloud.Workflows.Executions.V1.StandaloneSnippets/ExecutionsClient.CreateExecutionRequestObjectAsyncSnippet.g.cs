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

namespace Google.Cloud.Workflows.Executions.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedExecutionsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateExecutionAsync</summary>
        public async Task CreateExecutionRequestObjectAsync()
        {
            // Snippet: CreateExecutionAsync(CreateExecutionRequest, CallSettings)
            // Additional: CreateExecutionAsync(CreateExecutionRequest, CancellationToken)
            // Create client
            ExecutionsClient executionsClient = await ExecutionsClient.CreateAsync();
            // Initialize request argument(s)
            CreateExecutionRequest request = new CreateExecutionRequest
            {
                ParentAsWorkflowName = WorkflowName.FromProjectLocationWorkflow("[PROJECT]", "[LOCATION]", "[WORKFLOW]"),
                Execution = new Execution(),
            };
            // Make the request
            Execution response = await executionsClient.CreateExecutionAsync(request);
            // End snippet
        }
    }
}
