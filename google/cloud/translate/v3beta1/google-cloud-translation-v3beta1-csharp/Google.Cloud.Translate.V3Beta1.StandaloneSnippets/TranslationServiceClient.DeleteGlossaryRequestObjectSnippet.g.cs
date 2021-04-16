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

namespace Google.Cloud.Translate.V3Beta1.Snippets
{
    using Google.LongRunning;

    public sealed partial class GeneratedTranslationServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for DeleteGlossary</summary>
        public void DeleteGlossaryRequestObject()
        {
            // Snippet: DeleteGlossary(DeleteGlossaryRequest, CallSettings)
            // Create client
            TranslationServiceClient translationServiceClient = TranslationServiceClient.Create();
            // Initialize request argument(s)
            DeleteGlossaryRequest request = new DeleteGlossaryRequest
            {
                GlossaryName = GlossaryName.FromProjectLocationGlossary("[PROJECT]", "[LOCATION]", "[GLOSSARY]"),
            };
            // Make the request
            Operation<DeleteGlossaryResponse, DeleteGlossaryMetadata> response = translationServiceClient.DeleteGlossary(request);

            // Poll until the returned long-running operation is complete
            Operation<DeleteGlossaryResponse, DeleteGlossaryMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            DeleteGlossaryResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<DeleteGlossaryResponse, DeleteGlossaryMetadata> retrievedResponse = translationServiceClient.PollOnceDeleteGlossary(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                DeleteGlossaryResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
