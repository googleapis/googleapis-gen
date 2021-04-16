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

namespace Google.Cloud.PubSubLite.V1.Snippets
{
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedAdminServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateSubscription</summary>
        public void UpdateSubscription()
        {
            // Snippet: UpdateSubscription(Subscription, FieldMask, CallSettings)
            // Create client
            AdminServiceClient adminServiceClient = AdminServiceClient.Create();
            // Initialize request argument(s)
            Subscription subscription = new Subscription();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Subscription response = adminServiceClient.UpdateSubscription(subscription, updateMask);
            // End snippet
        }
    }
}
