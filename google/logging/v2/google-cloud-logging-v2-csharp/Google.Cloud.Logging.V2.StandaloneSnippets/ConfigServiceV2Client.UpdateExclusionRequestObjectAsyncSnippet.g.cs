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
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedConfigServiceV2ClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateExclusionAsync</summary>
        public async Task UpdateExclusionRequestObjectAsync()
        {
            // Snippet: UpdateExclusionAsync(UpdateExclusionRequest, CallSettings)
            // Additional: UpdateExclusionAsync(UpdateExclusionRequest, CancellationToken)
            // Create client
            ConfigServiceV2Client configServiceV2Client = await ConfigServiceV2Client.CreateAsync();
            // Initialize request argument(s)
            UpdateExclusionRequest request = new UpdateExclusionRequest
            {
                LogExclusionName = LogExclusionName.FromProjectExclusion("[PROJECT]", "[EXCLUSION]"),
                Exclusion = new LogExclusion(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            LogExclusion response = await configServiceV2Client.UpdateExclusionAsync(request);
            // End snippet
        }
    }
}
