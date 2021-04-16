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

namespace Google.Cloud.PubSub.V1.Snippets
{
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedSubscriberClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateSubscriptionAsync</summary>
        public async Task UpdateSubscriptionRequestObjectAsync()
        {
            // Snippet: UpdateSubscriptionAsync(UpdateSubscriptionRequest, CallSettings)
            // Additional: UpdateSubscriptionAsync(UpdateSubscriptionRequest, CancellationToken)
            // Create client
            SubscriberClient subscriberClient = await SubscriberClient.CreateAsync();
            // Initialize request argument(s)
            UpdateSubscriptionRequest request = new UpdateSubscriptionRequest
            {
                Subscription = new Subscription(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Subscription response = await subscriberClient.UpdateSubscriptionAsync(request);
            // End snippet
        }
    }
}
