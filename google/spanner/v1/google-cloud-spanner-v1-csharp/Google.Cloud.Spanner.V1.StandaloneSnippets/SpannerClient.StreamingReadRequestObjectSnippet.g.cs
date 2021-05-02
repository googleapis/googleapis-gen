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
    using Google.Api.Gax.Grpc;
    using Google.Cloud.Spanner.V1;
    using Google.Protobuf;
    using System.Threading.Tasks;

    public sealed partial class GeneratedSpannerClientStandaloneSnippets
    {
        /// <summary>Snippet for StreamingRead</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task StreamingReadRequestObject()
        {
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
            // Make the request, returning a streaming response
            SpannerClient.StreamingReadStream response = spannerClient.StreamingRead(request);

            // Read streaming responses from server until complete
            // Note that C# 8 code can use await foreach
            AsyncResponseStream<PartialResultSet> responseStream = response.GetResponseStream();
            while (await responseStream.MoveNextAsync())
            {
                PartialResultSet responseItem = responseStream.Current;
                // Do something with streamed response
            }
            // The response stream has completed
        }
    }
}
