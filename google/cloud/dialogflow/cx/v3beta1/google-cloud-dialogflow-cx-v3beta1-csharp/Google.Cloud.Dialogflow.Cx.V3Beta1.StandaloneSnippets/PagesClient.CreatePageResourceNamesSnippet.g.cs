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

namespace Google.Cloud.Dialogflow.Cx.V3Beta1.Snippets
{
    public sealed partial class GeneratedPagesClientStandaloneSnippets
    {
        /// <summary>Snippet for CreatePage</summary>
        public void CreatePageResourceNames()
        {
            // Snippet: CreatePage(FlowName, Page, CallSettings)
            // Create client
            PagesClient pagesClient = PagesClient.Create();
            // Initialize request argument(s)
            FlowName parent = FlowName.FromProjectLocationAgentFlow("[PROJECT]", "[LOCATION]", "[AGENT]", "[FLOW]");
            Page page = new Page();
            // Make the request
            Page response = pagesClient.CreatePage(parent, page);
            // End snippet
        }
    }
}
