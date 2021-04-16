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

namespace Google.Cloud.Kms.V1.Snippets
{
    using Google.Api.Gax.ResourceNames;

    public sealed partial class GeneratedKeyManagementServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateKeyRing</summary>
        public void CreateKeyRingResourceNames()
        {
            // Snippet: CreateKeyRing(LocationName, string, KeyRing, CallSettings)
            // Create client
            KeyManagementServiceClient keyManagementServiceClient = KeyManagementServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            string keyRingId = "";
            KeyRing keyRing = new KeyRing();
            // Make the request
            KeyRing response = keyManagementServiceClient.CreateKeyRing(parent, keyRingId, keyRing);
            // End snippet
        }
    }
}
