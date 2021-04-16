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

namespace Google.Cloud.Spanner.Admin.Database.V1.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedDatabaseAdminClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateDatabase</summary>
        public void CreateDatabaseResourceNames()
        {
            // Snippet: CreateDatabase(InstanceName, string, CallSettings)
            // Create client
            DatabaseAdminClient databaseAdminClient = DatabaseAdminClient.Create();
            // Initialize request argument(s)
            InstanceName parent = InstanceName.FromProjectInstance("[PROJECT]", "[INSTANCE]");
            string createStatement = "";
            // Make the request
            Operation<Database, CreateDatabaseMetadata> response = databaseAdminClient.CreateDatabase(parent, createStatement);

            // Poll until the returned long-running operation is complete
            Operation<Database, CreateDatabaseMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Database result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Database, CreateDatabaseMetadata> retrievedResponse = databaseAdminClient.PollOnceCreateDatabase(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Database retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
