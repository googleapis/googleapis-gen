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
    using Google.Protobuf;

    public sealed partial class GeneratedSpannerClientStandaloneSnippets
    {
        /// <summary>Snippet for Read</summary>
        public void ReadRequestObject()
        {
            // Snippet: Read(ReadRequest, CallSettings)
            // Create client
            SpannerClient spannerClient = SpannerClient.Create();
            // Initialize request argument(s)
            ReadRequest request = new ReadRequest
            {
                SessionAsSessionName = SessionName.FromProjectInstanceDatabaseSession("[PROJECT]", "[INSTANCE]", "[DATABASE]", "[SESSION]"),
                Transaction = new TransactionSelector(),
                Table = "",
                Index = "",
                Columns = { "", },
                KeySet = new KeySet(),
                Limit = 0L,
                ResumeToken = ByteString.Empty,
                PartitionToken = ByteString.Empty,
                RequestOptions = new RequestOptions(),
            };
            // Make the request
            ResultSet response = spannerClient.Read(request);
            // End snippet
        }
    }
}
