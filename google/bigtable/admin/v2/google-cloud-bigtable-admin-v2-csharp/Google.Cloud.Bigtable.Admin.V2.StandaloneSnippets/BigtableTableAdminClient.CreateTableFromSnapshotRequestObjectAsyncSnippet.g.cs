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

namespace Google.Cloud.Bigtable.Admin.V2.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedBigtableTableAdminClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateTableFromSnapshotAsync</summary>
        public async Task CreateTableFromSnapshotRequestObjectAsync()
        {
            // Snippet: CreateTableFromSnapshotAsync(CreateTableFromSnapshotRequest, CallSettings)
            // Additional: CreateTableFromSnapshotAsync(CreateTableFromSnapshotRequest, CancellationToken)
            // Create client
            BigtableTableAdminClient bigtableTableAdminClient = await BigtableTableAdminClient.CreateAsync();
            // Initialize request argument(s)
            CreateTableFromSnapshotRequest request = new CreateTableFromSnapshotRequest
            {
                ParentAsInstanceName = InstanceName.FromProjectInstance("[PROJECT]", "[INSTANCE]"),
                TableId = "",
                SourceSnapshotAsSnapshotName = SnapshotName.FromProjectInstanceClusterSnapshot("[PROJECT]", "[INSTANCE]", "[CLUSTER]", "[SNAPSHOT]"),
            };
            // Make the request
            Operation<Table, CreateTableFromSnapshotMetadata> response = await bigtableTableAdminClient.CreateTableFromSnapshotAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Table, CreateTableFromSnapshotMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Table result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Table, CreateTableFromSnapshotMetadata> retrievedResponse = await bigtableTableAdminClient.PollOnceCreateTableFromSnapshotAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Table retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
