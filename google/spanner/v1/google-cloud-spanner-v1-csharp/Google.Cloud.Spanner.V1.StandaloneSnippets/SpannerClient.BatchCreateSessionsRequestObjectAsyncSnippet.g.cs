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
    using Google.Cloud.Spanner.V1;
    using System.Threading.Tasks;

    public sealed partial class GeneratedSpannerClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchCreateSessionsAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task BatchCreateSessionsRequestObjectAsync()
        {
            // Create client
            SpannerClient spannerClient = await SpannerClient.CreateAsync();
            // Initialize request argument(s)
            BatchCreateSessionsRequest request = new BatchCreateSessionsRequest
            {
                DatabaseAsDatabaseName = DatabaseName.FromProjectInstanceDatabase("[PROJECT]", "[INSTANCE]", "[DATABASE]"),
                SessionTemplate = new Session(),
                SessionCount = 0,
            };
            // Make the request
            BatchCreateSessionsResponse response = await spannerClient.BatchCreateSessionsAsync(request);
        }
    }
}
