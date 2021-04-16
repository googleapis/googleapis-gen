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

namespace Google.Cloud.Spanner.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedSpannerClientStandaloneSnippets
    {
        /// <summary>Snippet for PartitionReadAsync</summary>
        public async Task PartitionReadRequestObjectAsync()
        {
            // Snippet: PartitionReadAsync(PartitionReadRequest, CallSettings)
            // Additional: PartitionReadAsync(PartitionReadRequest, CancellationToken)
            // Create client
            SpannerClient spannerClient = await SpannerClient.CreateAsync();
            // Initialize request argument(s)
            PartitionReadRequest request = new PartitionReadRequest
            {
                SessionAsSessionName = SessionName.FromProjectInstanceDatabaseSession("[PROJECT]", "[INSTANCE]", "[DATABASE]", "[SESSION]"),
                Transaction = new TransactionSelector(),
                Table = "",
                Index = "",
                Columns = { "", },
                KeySet = new KeySet(),
                PartitionOptions = new PartitionOptions(),
            };
            // Make the request
            PartitionResponse response = await spannerClient.PartitionReadAsync(request);
            // End snippet
        }
    }
}
