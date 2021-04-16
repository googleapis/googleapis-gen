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

namespace Google.Cloud.Gaming.V1.Snippets
{
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedGameServerDeploymentsServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for PreviewGameServerDeploymentRolloutAsync</summary>
        public async Task PreviewGameServerDeploymentRolloutRequestObjectAsync()
        {
            // Snippet: PreviewGameServerDeploymentRolloutAsync(PreviewGameServerDeploymentRolloutRequest, CallSettings)
            // Additional: PreviewGameServerDeploymentRolloutAsync(PreviewGameServerDeploymentRolloutRequest, CancellationToken)
            // Create client
            GameServerDeploymentsServiceClient gameServerDeploymentsServiceClient = await GameServerDeploymentsServiceClient.CreateAsync();
            // Initialize request argument(s)
            PreviewGameServerDeploymentRolloutRequest request = new PreviewGameServerDeploymentRolloutRequest
            {
                Rollout = new GameServerDeploymentRollout(),
                UpdateMask = new FieldMask(),
                PreviewTime = new Timestamp(),
            };
            // Make the request
            PreviewGameServerDeploymentRolloutResponse response = await gameServerDeploymentsServiceClient.PreviewGameServerDeploymentRolloutAsync(request);
            // End snippet
        }
    }
}
