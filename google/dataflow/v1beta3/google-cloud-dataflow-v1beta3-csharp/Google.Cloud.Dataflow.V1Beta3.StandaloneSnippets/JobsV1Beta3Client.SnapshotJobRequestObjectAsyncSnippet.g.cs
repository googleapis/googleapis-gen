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

namespace Google.Cloud.Dataflow.V1Beta3.Snippets
{
    using Google.Cloud.Dataflow.V1Beta3;
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedJobsV1Beta3ClientStandaloneSnippets
    {
        /// <summary>Snippet for SnapshotJobAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task SnapshotJobRequestObjectAsync()
        {
            // Create client
            JobsV1Beta3Client jobsV1Beta3Client = await JobsV1Beta3Client.CreateAsync();
            // Initialize request argument(s)
            SnapshotJobRequest request = new SnapshotJobRequest
            {
                ProjectId = "",
                JobId = "",
                Ttl = new Duration(),
                Location = "",
                SnapshotSources = false,
                Description = "",
            };
            // Make the request
            Snapshot response = await jobsV1Beta3Client.SnapshotJobAsync(request);
        }
    }
}
