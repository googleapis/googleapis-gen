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

namespace Google.Cloud.Bigtable.V2.Snippets
{
    using Google.Protobuf;
    using System.Threading.Tasks;

    public sealed partial class GeneratedBigtableClientStandaloneSnippets
    {
        /// <summary>Snippet for ReadModifyWriteRowAsync</summary>
        public async Task ReadModifyWriteRowRequestObjectAsync()
        {
            // Snippet: ReadModifyWriteRowAsync(ReadModifyWriteRowRequest, CallSettings)
            // Additional: ReadModifyWriteRowAsync(ReadModifyWriteRowRequest, CancellationToken)
            // Create client
            BigtableClient bigtableClient = await BigtableClient.CreateAsync();
            // Initialize request argument(s)
            ReadModifyWriteRowRequest request = new ReadModifyWriteRowRequest
            {
                TableNameAsTableName = TableName.FromProjectInstanceTable("[PROJECT]", "[INSTANCE]", "[TABLE]"),
                RowKey = ByteString.Empty,
                Rules =
                {
                    new ReadModifyWriteRule(),
                },
                AppProfileId = "",
            };
            // Make the request
            ReadModifyWriteRowResponse response = await bigtableClient.ReadModifyWriteRowAsync(request);
            // End snippet
        }
    }
}
