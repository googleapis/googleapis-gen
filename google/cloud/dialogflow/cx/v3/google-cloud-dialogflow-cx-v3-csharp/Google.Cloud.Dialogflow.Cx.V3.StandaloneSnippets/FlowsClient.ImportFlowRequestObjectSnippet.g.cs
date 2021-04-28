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
    using Google.Protobuf;
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedFlowsClientStandaloneSnippets
    {
        /// <summary>Snippet for ImportFlow</summary>
        public void ImportFlowRequestObject()
        {
            // Snippet: ImportFlow(ImportFlowRequest, CallSettings)
            // Create client
            FlowsClient flowsClient = FlowsClient.Create();
            // Initialize request argument(s)
            ImportFlowRequest request = new ImportFlowRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                FlowUri = "",
                FlowContent = ByteString.Empty,
                ImportOption = ImportFlowRequest.Types.ImportOption.Unspecified,
            };
            // Make the request
            Operation<ImportFlowResponse, Struct> response = flowsClient.ImportFlow(request);

            // Poll until the returned long-running operation is complete
            Operation<ImportFlowResponse, Struct> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ImportFlowResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ImportFlowResponse, Struct> retrievedResponse = flowsClient.PollOnceImportFlow(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ImportFlowResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
