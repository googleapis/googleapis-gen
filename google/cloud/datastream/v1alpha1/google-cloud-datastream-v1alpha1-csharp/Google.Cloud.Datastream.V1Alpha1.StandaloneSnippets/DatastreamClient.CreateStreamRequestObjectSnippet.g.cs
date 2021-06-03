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

namespace Google.Cloud.Datastream.V1Alpha1.Snippets
{
    using Google.Cloud.Datastream.V1Alpha1;
    using Google.LongRunning;

    public sealed partial class GeneratedDatastreamClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateStream</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void CreateStreamRequestObject()
        {
            // Create client
            DatastreamClient datastreamClient = DatastreamClient.Create();
            // Initialize request argument(s)
            CreateStreamRequest request = new CreateStreamRequest
            {
                ParentAsStreamName = StreamName.FromProjectLocationStream("[PROJECT]", "[LOCATION]", "[STREAM]"),
                StreamId = "",
                Stream = new Stream(),
                RequestId = "",
                ValidateOnly = false,
                Force = false,
            };
            // Make the request
            Operation<Stream, OperationMetadata> response = datastreamClient.CreateStream(request);

            // Poll until the returned long-running operation is complete
            Operation<Stream, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Stream result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Stream, OperationMetadata> retrievedResponse = datastreamClient.PollOnceCreateStream(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Stream retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
