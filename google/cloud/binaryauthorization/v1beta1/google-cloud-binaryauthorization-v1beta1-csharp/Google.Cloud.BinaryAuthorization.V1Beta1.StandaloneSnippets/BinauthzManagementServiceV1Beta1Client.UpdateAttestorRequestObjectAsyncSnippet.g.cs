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

namespace Google.Cloud.BinaryAuthorization.V1Beta1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedBinauthzManagementServiceV1Beta1ClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateAttestorAsync</summary>
        public async Task UpdateAttestorRequestObjectAsync()
        {
            // Snippet: UpdateAttestorAsync(UpdateAttestorRequest, CallSettings)
            // Additional: UpdateAttestorAsync(UpdateAttestorRequest, CancellationToken)
            // Create client
            BinauthzManagementServiceV1Beta1Client binauthzManagementServiceV1Beta1Client = await BinauthzManagementServiceV1Beta1Client.CreateAsync();
            // Initialize request argument(s)
            UpdateAttestorRequest request = new UpdateAttestorRequest
            {
                Attestor = new Attestor(),
            };
            // Make the request
            Attestor response = await binauthzManagementServiceV1Beta1Client.UpdateAttestorAsync(request);
            // End snippet
        }
    }
}
