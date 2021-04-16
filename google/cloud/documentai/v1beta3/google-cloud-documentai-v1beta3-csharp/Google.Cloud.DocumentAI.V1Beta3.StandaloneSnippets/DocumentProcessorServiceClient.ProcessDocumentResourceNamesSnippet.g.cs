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

namespace Google.Cloud.DocumentAI.V1Beta3.Snippets
{
    public sealed partial class GeneratedDocumentProcessorServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for ProcessDocument</summary>
        public void ProcessDocumentResourceNames()
        {
            // Snippet: ProcessDocument(ProcessorName, CallSettings)
            // Create client
            DocumentProcessorServiceClient documentProcessorServiceClient = DocumentProcessorServiceClient.Create();
            // Initialize request argument(s)
            ProcessorName name = ProcessorName.FromProjectLocationProcessor("[PROJECT]", "[LOCATION]", "[PROCESSOR]");
            // Make the request
            ProcessResponse response = documentProcessorServiceClient.ProcessDocument(name);
            // End snippet
        }
    }
}
