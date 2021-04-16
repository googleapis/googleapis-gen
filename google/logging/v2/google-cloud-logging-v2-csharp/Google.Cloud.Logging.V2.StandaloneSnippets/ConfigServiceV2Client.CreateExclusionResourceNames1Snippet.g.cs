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

namespace Google.Cloud.Logging.V2.Snippets
{
    using Google.Api.Gax.ResourceNames;

    public sealed partial class GeneratedConfigServiceV2ClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateExclusion</summary>
        public void CreateExclusionResourceNames1()
        {
            // Snippet: CreateExclusion(ProjectName, LogExclusion, CallSettings)
            // Create client
            ConfigServiceV2Client configServiceV2Client = ConfigServiceV2Client.Create();
            // Initialize request argument(s)
            ProjectName parent = ProjectName.FromProject("[PROJECT]");
            LogExclusion exclusion = new LogExclusion();
            // Make the request
            LogExclusion response = configServiceV2Client.CreateExclusion(parent, exclusion);
            // End snippet
        }
    }
}
