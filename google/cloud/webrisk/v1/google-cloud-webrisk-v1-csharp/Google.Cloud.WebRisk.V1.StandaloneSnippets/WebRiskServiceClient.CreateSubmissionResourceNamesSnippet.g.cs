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

namespace Google.Cloud.WebRisk.V1.Snippets
{
    using Google.Api.Gax.ResourceNames;

    public sealed partial class GeneratedWebRiskServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateSubmission</summary>
        public void CreateSubmissionResourceNames()
        {
            // Snippet: CreateSubmission(ProjectName, Submission, CallSettings)
            // Create client
            WebRiskServiceClient webRiskServiceClient = WebRiskServiceClient.Create();
            // Initialize request argument(s)
            ProjectName parent = ProjectName.FromProject("[PROJECT]");
            Submission submission = new Submission();
            // Make the request
            Submission response = webRiskServiceClient.CreateSubmission(parent, submission);
            // End snippet
        }
    }
}
