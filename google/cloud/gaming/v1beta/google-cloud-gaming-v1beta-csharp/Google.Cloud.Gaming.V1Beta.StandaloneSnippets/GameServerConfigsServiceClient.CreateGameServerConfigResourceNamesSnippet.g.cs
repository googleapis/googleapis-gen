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

namespace Google.Cloud.Gaming.V1Beta.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedGameServerConfigsServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateGameServerConfig</summary>
        public void CreateGameServerConfigResourceNames()
        {
            // Snippet: CreateGameServerConfig(GameServerDeploymentName, GameServerConfig, CallSettings)
            // Create client
            GameServerConfigsServiceClient gameServerConfigsServiceClient = GameServerConfigsServiceClient.Create();
            // Initialize request argument(s)
            GameServerDeploymentName parent = GameServerDeploymentName.FromProjectLocationDeployment("[PROJECT]", "[LOCATION]", "[DEPLOYMENT]");
            GameServerConfig gameServerConfig = new GameServerConfig();
            // Make the request
            Operation<GameServerConfig, OperationMetadata> response = gameServerConfigsServiceClient.CreateGameServerConfig(parent, gameServerConfig);

            // Poll until the returned long-running operation is complete
            Operation<GameServerConfig, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            GameServerConfig result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<GameServerConfig, OperationMetadata> retrievedResponse = gameServerConfigsServiceClient.PollOnceCreateGameServerConfig(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                GameServerConfig retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
