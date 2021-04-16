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

namespace Google.Iam.Admin.V1.Snippets
{
    public sealed partial class GeneratedIAMClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateServiceAccountKey</summary>
        public void CreateServiceAccountKeyRequestObject()
        {
            // Snippet: CreateServiceAccountKey(CreateServiceAccountKeyRequest, CallSettings)
            // Create client
            IAMClient iAMClient = IAMClient.Create();
            // Initialize request argument(s)
            CreateServiceAccountKeyRequest request = new CreateServiceAccountKeyRequest
            {
                ServiceAccountName = ServiceAccountName.FromProjectServiceAccount("[PROJECT]", "[SERVICE_ACCOUNT]"),
                PrivateKeyType = ServiceAccountPrivateKeyType.TypeUnspecified,
                KeyAlgorithm = ServiceAccountKeyAlgorithm.KeyAlgUnspecified,
            };
            // Make the request
            ServiceAccountKey response = iAMClient.CreateServiceAccountKey(request);
            // End snippet
        }
    }
}
