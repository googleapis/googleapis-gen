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

namespace Google.Cloud.Talent.V4.Snippets
{
    using Google.Cloud.Talent.V4;
    using Google.LongRunning;
    using System.Collections.Generic;

    public sealed partial class GeneratedJobServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for BatchUpdateJobs</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void BatchUpdateJobsResourceNames()
        {
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            TenantName parent = TenantName.FromProjectTenant("[PROJECT]", "[TENANT]");
            IEnumerable<Job> jobs = new Job[] { new Job(), };
            // Make the request
            Operation<BatchUpdateJobsResponse, BatchOperationMetadata> response = jobServiceClient.BatchUpdateJobs(parent, jobs);

            // Poll until the returned long-running operation is complete
            Operation<BatchUpdateJobsResponse, BatchOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            BatchUpdateJobsResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<BatchUpdateJobsResponse, BatchOperationMetadata> retrievedResponse = jobServiceClient.PollOnceBatchUpdateJobs(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                BatchUpdateJobsResponse retrievedResult = retrievedResponse.Result;
            }
        }
    }
}
