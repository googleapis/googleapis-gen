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

namespace Google.Area120.Tables.V1Alpha1.Snippets
{
    public sealed partial class GeneratedTablesServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetRow</summary>
        public void GetRowRequestObject()
        {
            // Snippet: GetRow(GetRowRequest, CallSettings)
            // Create client
            TablesServiceClient tablesServiceClient = TablesServiceClient.Create();
            // Initialize request argument(s)
            GetRowRequest request = new GetRowRequest
            {
                RowName = RowName.FromTableRow("[TABLE]", "[ROW]"),
                View = View.Unspecified,
            };
            // Make the request
            Row response = tablesServiceClient.GetRow(request);
            // End snippet
        }
    }
}
