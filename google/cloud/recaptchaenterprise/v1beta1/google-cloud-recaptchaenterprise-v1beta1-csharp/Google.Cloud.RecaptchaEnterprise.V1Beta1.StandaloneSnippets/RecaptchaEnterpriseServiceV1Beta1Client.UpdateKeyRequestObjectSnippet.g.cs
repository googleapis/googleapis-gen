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

namespace Google.Cloud.RecaptchaEnterprise.V1Beta1.Snippets
{
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedRecaptchaEnterpriseServiceV1Beta1ClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateKey</summary>
        public void UpdateKeyRequestObject()
        {
            // Snippet: UpdateKey(UpdateKeyRequest, CallSettings)
            // Create client
            RecaptchaEnterpriseServiceV1Beta1Client recaptchaEnterpriseServiceV1Beta1Client = RecaptchaEnterpriseServiceV1Beta1Client.Create();
            // Initialize request argument(s)
            UpdateKeyRequest request = new UpdateKeyRequest
            {
                Key = new Key(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Key response = recaptchaEnterpriseServiceV1Beta1Client.UpdateKey(request);
            // End snippet
        }
    }
}
