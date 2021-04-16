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

namespace Google.Cloud.Metastore.V1.Snippets
{
    public sealed partial class GeneratedDataprocMetastoreClientStandaloneSnippets
    {
        /// <summary>Snippet for GetMetadataImport</summary>
        public void GetMetadataImport()
        {
            // Snippet: GetMetadataImport(string, CallSettings)
            // Create client
            DataprocMetastoreClient dataprocMetastoreClient = DataprocMetastoreClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/services/[SERVICE]/metadataImports/[METADATA_IMPORT]";
            // Make the request
            MetadataImport response = dataprocMetastoreClient.GetMetadataImport(name);
            // End snippet
        }
    }
}
