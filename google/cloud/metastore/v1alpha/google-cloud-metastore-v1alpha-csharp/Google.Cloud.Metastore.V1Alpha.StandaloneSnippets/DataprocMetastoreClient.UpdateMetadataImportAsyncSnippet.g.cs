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

namespace Google.Cloud.Metastore.V1Alpha.Snippets
{
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedDataprocMetastoreClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateMetadataImportAsync</summary>
        public async Task UpdateMetadataImportAsync()
        {
            // Snippet: UpdateMetadataImportAsync(MetadataImport, FieldMask, CallSettings)
            // Additional: UpdateMetadataImportAsync(MetadataImport, FieldMask, CancellationToken)
            // Create client
            DataprocMetastoreClient dataprocMetastoreClient = await DataprocMetastoreClient.CreateAsync();
            // Initialize request argument(s)
            MetadataImport metadataImport = new MetadataImport();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Operation<MetadataImport, OperationMetadata> response = await dataprocMetastoreClient.UpdateMetadataImportAsync(metadataImport, updateMask);

            // Poll until the returned long-running operation is complete
            Operation<MetadataImport, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            MetadataImport result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<MetadataImport, OperationMetadata> retrievedResponse = await dataprocMetastoreClient.PollOnceUpdateMetadataImportAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                MetadataImport retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
