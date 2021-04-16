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

namespace Google.Cloud.BigQuery.Storage.V1.Snippets
{
    using Google.Api.Gax.Grpc;
    using System.Threading.Tasks;

    public sealed partial class GeneratedBigQueryReadClientStandaloneSnippets
    {
        /// <summary>Snippet for ReadRows</summary>
        public async Task ReadRowsResourceNames()
        {
            // Snippet: ReadRows(ReadStreamName, long, CallSettings)
            // Create client
            BigQueryReadClient bigQueryReadClient = BigQueryReadClient.Create();
            // Initialize request argument(s)
            ReadStreamName readStream = ReadStreamName.FromProjectLocationSessionStream("[PROJECT]", "[LOCATION]", "[SESSION]", "[STREAM]");
            long offset = 0L;
            // Make the request, returning a streaming response
            BigQueryReadClient.ReadRowsStream response = bigQueryReadClient.ReadRows(readStream, offset);

            // Read streaming responses from server until complete
            // Note that C# 8 code can use await foreach
            AsyncResponseStream<ReadRowsResponse> responseStream = response.GetResponseStream();
            while (await responseStream.MoveNextAsync())
            {
                ReadRowsResponse responseItem = responseStream.Current;
                // Do something with streamed response
            }
            // The response stream has completed
            // End snippet
        }
    }
}
