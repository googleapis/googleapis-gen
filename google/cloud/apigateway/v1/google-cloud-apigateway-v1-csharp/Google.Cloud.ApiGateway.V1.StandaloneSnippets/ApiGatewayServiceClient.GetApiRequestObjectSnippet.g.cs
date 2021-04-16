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

namespace Google.Cloud.ApiGateway.V1.Snippets
{
    public sealed partial class GeneratedApiGatewayServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetApi</summary>
        public void GetApiRequestObject()
        {
            // Snippet: GetApi(GetApiRequest, CallSettings)
            // Create client
            ApiGatewayServiceClient apiGatewayServiceClient = ApiGatewayServiceClient.Create();
            // Initialize request argument(s)
            GetApiRequest request = new GetApiRequest
            {
                ApiName = ApiName.FromProjectApi("[PROJECT]", "[API]"),
            };
            // Make the request
            Api response = apiGatewayServiceClient.GetApi(request);
            // End snippet
        }
    }
}
