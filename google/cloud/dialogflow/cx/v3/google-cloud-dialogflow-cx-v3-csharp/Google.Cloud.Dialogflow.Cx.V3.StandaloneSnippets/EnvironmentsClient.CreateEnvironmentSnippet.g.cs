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
    using Google.Cloud.Dialogflow.Cx.V3;
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedEnvironmentsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateEnvironment</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void CreateEnvironment()
        {
            // Create client
            EnvironmentsClient environmentsClient = EnvironmentsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]";
            Environment environment = new Environment();
            // Make the request
            Operation<Environment, Struct> response = environmentsClient.CreateEnvironment(parent, environment);

            // Poll until the returned long-running operation is complete
            Operation<Environment, Struct> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Environment result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Environment, Struct> retrievedResponse = environmentsClient.PollOnceCreateEnvironment(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Environment retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
