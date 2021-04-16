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
        /// <summary>Snippet for UpdateViewAsync</summary>
        public async Task UpdateViewRequestObjectAsync()
        {
            // Snippet: UpdateViewAsync(UpdateViewRequest, CallSettings)
            // Additional: UpdateViewAsync(UpdateViewRequest, CancellationToken)
            // Create client
            ConfigServiceV2Client configServiceV2Client = await ConfigServiceV2Client.CreateAsync();
            // Initialize request argument(s)
            UpdateViewRequest request = new UpdateViewRequest
            {
                Name = "",
                View = new LogView(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            LogView response = await configServiceV2Client.UpdateViewAsync(request);
            // End snippet
        }
    }
}
