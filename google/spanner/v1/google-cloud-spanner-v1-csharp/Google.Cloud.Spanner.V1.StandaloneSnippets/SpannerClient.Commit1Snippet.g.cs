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
    using Google.Protobuf;
    using System.Collections.Generic;

    public sealed partial class GeneratedSpannerClientStandaloneSnippets
    {
        /// <summary>Snippet for Commit</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void Commit1()
        {
            // Create client
            SpannerClient spannerClient = SpannerClient.Create();
            // Initialize request argument(s)
            string session = "projects/[PROJECT]/instances/[INSTANCE]/databases/[DATABASE]/sessions/[SESSION]";
            ByteString transactionId = ByteString.Empty;
            IEnumerable<Mutation> mutations = new Mutation[] { new Mutation(), };
            // Make the request
            CommitResponse response = spannerClient.Commit(session, transactionId, mutations);
        }
    }
}
