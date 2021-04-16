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
    using Google.Protobuf;

    public sealed partial class GeneratedSchemaServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for ValidateMessage</summary>
        public void ValidateMessageRequestObject()
        {
            // Snippet: ValidateMessage(ValidateMessageRequest, CallSettings)
            // Create client
            SchemaServiceClient schemaServiceClient = SchemaServiceClient.Create();
            // Initialize request argument(s)
            ValidateMessageRequest request = new ValidateMessageRequest
            {
                ParentAsProjectName = ProjectName.FromProject("[PROJECT]"),
                SchemaName = SchemaName.FromProjectSchema("[PROJECT]", "[SCHEMA]"),
                Schema = new Schema(),
                Message = ByteString.Empty,
                Encoding = Encoding.Unspecified,
            };
            // Make the request
            ValidateMessageResponse response = schemaServiceClient.ValidateMessage(request);
            // End snippet
        }
    }
}
