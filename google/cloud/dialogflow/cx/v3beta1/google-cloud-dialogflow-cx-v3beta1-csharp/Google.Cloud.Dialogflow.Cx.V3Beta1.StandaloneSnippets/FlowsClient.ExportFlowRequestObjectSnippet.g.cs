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

namespace Google.Cloud.Dialogflow.Cx.V3Beta1.Snippets
{
    using Google.Cloud.Dialogflow.Cx.V3Beta1;
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedFlowsClientStandaloneSnippets
    {
        /// <summary>Snippet for ExportFlow</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void ExportFlowRequestObject()
        {
            // Create client
            FlowsClient flowsClient = FlowsClient.Create();
            // Initialize request argument(s)
            ExportFlowRequest request = new ExportFlowRequest
            {
                FlowName = FlowName.FromProjectLocationAgentFlow("[PROJECT]", "[LOCATION]", "[AGENT]", "[FLOW]"),
                FlowUri = "",
                IncludeReferencedFlows = false,
            };
            // Make the request
            Operation<ExportFlowResponse, Struct> response = flowsClient.ExportFlow(request);

            // Poll until the returned long-running operation is complete
            Operation<ExportFlowResponse, Struct> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ExportFlowResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ExportFlowResponse, Struct> retrievedResponse = flowsClient.PollOnceExportFlow(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ExportFlowResponse retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
