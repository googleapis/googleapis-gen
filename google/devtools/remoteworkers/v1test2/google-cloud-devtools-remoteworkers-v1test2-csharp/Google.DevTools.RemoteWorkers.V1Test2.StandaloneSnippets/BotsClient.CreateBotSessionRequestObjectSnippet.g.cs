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

namespace Google.DevTools.RemoteWorkers.V1Test2.Snippets
{
    using Google.DevTools.RemoteWorkers.V1Test2;

    public sealed partial class GeneratedBotsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateBotSession</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void CreateBotSessionRequestObject()
        {
            // Create client
            BotsClient botsClient = BotsClient.Create();
            // Initialize request argument(s)
            CreateBotSessionRequest request = new CreateBotSessionRequest
            {
                Parent = "",
                BotSession = new BotSession(),
            };
            // Make the request
            BotSession response = botsClient.CreateBotSession(request);
        }
    }
}
