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
    using System.Threading.Tasks;

    public sealed partial class GeneratedPagesClientStandaloneSnippets
    {
        /// <summary>Snippet for CreatePageAsync</summary>
        public async Task CreatePageAsync()
        {
            // Snippet: CreatePageAsync(string, Page, CallSettings)
            // Additional: CreatePageAsync(string, Page, CancellationToken)
            // Create client
            PagesClient pagesClient = await PagesClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]/flows/[FLOW]";
            Page page = new Page();
            // Make the request
            Page response = await pagesClient.CreatePageAsync(parent, page);
            // End snippet
        }
    }
}
