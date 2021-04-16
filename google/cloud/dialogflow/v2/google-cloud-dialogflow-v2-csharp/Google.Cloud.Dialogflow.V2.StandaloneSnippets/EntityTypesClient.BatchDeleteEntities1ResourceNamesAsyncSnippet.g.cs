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

namespace Google.Cloud.Dialogflow.V2.Snippets
{
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System.Collections.Generic;
    using System.Threading.Tasks;

    public sealed partial class GeneratedEntityTypesClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchDeleteEntitiesAsync</summary>
        public async Task BatchDeleteEntities1ResourceNamesAsync()
        {
            // Snippet: BatchDeleteEntitiesAsync(EntityTypeName, IEnumerable<string>, CallSettings)
            // Additional: BatchDeleteEntitiesAsync(EntityTypeName, IEnumerable<string>, CancellationToken)
            // Create client
            EntityTypesClient entityTypesClient = await EntityTypesClient.CreateAsync();
            // Initialize request argument(s)
            EntityTypeName parent = EntityTypeName.FromProjectEntityType("[PROJECT]", "[ENTITY_TYPE]");
            IEnumerable<string> entityValues = new string[] { "", };
            // Make the request
            Operation<Empty, Struct> response = await entityTypesClient.BatchDeleteEntitiesAsync(parent, entityValues);

            // Poll until the returned long-running operation is complete
            Operation<Empty, Struct> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, Struct> retrievedResponse = await entityTypesClient.PollOnceBatchDeleteEntitiesAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
