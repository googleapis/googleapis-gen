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

namespace Google.Cloud.Language.V1.Snippets
{
    public sealed partial class GeneratedLanguageServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for AnnotateText</summary>
        public void AnnotateText2()
        {
            // Snippet: AnnotateText(Document, AnnotateTextRequest.Types.Features, CallSettings)
            // Create client
            LanguageServiceClient languageServiceClient = LanguageServiceClient.Create();
            // Initialize request argument(s)
            Document document = new Document();
            AnnotateTextRequest.Types.Features features = new AnnotateTextRequest.Types.Features();
            // Make the request
            AnnotateTextResponse response = languageServiceClient.AnnotateText(document, features);
            // End snippet
        }
    }
}
