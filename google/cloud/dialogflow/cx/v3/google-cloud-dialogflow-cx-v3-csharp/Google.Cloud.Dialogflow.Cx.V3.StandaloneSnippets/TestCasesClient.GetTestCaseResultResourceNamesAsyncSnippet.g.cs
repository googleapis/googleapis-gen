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

namespace Google.Cloud.Dialogflow.Cx.V3.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedTestCasesClientStandaloneSnippets
    {
        /// <summary>Snippet for GetTestCaseResultAsync</summary>
        public async Task GetTestCaseResultResourceNamesAsync()
        {
            // Snippet: GetTestCaseResultAsync(TestCaseResultName, CallSettings)
            // Additional: GetTestCaseResultAsync(TestCaseResultName, CancellationToken)
            // Create client
            TestCasesClient testCasesClient = await TestCasesClient.CreateAsync();
            // Initialize request argument(s)
            TestCaseResultName name = TestCaseResultName.FromProjectLocationAgentTestCaseResult("[PROJECT]", "[LOCATION]", "[AGENT]", "[TEST_CASE]", "[RESULT]");
            // Make the request
            TestCaseResult response = await testCasesClient.GetTestCaseResultAsync(name);
            // End snippet
        }
    }
}
