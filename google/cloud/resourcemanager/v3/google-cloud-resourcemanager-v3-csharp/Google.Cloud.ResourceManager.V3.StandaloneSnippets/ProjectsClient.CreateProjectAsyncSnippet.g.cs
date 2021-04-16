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

namespace Google.Cloud.ResourceManager.V3.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedProjectsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateProjectAsync</summary>
        public async Task CreateProjectAsync()
        {
            // Snippet: CreateProjectAsync(Project, CallSettings)
            // Additional: CreateProjectAsync(Project, CancellationToken)
            // Create client
            ProjectsClient projectsClient = await ProjectsClient.CreateAsync();
            // Initialize request argument(s)
            Project project = new Project();
            // Make the request
            Operation<Project, CreateProjectMetadata> response = await projectsClient.CreateProjectAsync(project);

            // Poll until the returned long-running operation is complete
            Operation<Project, CreateProjectMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Project result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Project, CreateProjectMetadata> retrievedResponse = await projectsClient.PollOnceCreateProjectAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Project retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
