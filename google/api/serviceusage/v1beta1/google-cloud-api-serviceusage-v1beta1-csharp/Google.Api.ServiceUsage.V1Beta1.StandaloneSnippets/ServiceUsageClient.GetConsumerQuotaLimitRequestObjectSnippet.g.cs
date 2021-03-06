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

namespace Google.Api.ServiceUsage.V1Beta1.Snippets
{
    using Google.Api.ServiceUsage.V1Beta1;

    public sealed partial class GeneratedServiceUsageClientStandaloneSnippets
    {
        /// <summary>Snippet for GetConsumerQuotaLimit</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void GetConsumerQuotaLimitRequestObject()
        {
            // Create client
            ServiceUsageClient serviceUsageClient = ServiceUsageClient.Create();
            // Initialize request argument(s)
            GetConsumerQuotaLimitRequest request = new GetConsumerQuotaLimitRequest
            {
                Name = "",
                View = QuotaView.Unspecified,
            };
            // Make the request
            ConsumerQuotaLimit response = serviceUsageClient.GetConsumerQuotaLimit(request);
        }
    }
}
