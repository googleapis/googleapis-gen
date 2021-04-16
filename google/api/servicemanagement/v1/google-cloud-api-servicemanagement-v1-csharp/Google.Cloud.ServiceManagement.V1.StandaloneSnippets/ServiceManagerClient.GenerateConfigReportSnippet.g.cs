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

namespace Google.Cloud.ServiceManagement.V1.Snippets
{
    using Google.Protobuf.WellKnownTypes;

    public sealed partial class GeneratedServiceManagerClientStandaloneSnippets
    {
        /// <summary>Snippet for GenerateConfigReport</summary>
        public void GenerateConfigReport()
        {
            // Snippet: GenerateConfigReport(Any, Any, CallSettings)
            // Create client
            ServiceManagerClient serviceManagerClient = ServiceManagerClient.Create();
            // Initialize request argument(s)
            Any newConfig = new Any();
            Any oldConfig = new Any();
            // Make the request
            GenerateConfigReportResponse response = serviceManagerClient.GenerateConfigReport(newConfig, oldConfig);
            // End snippet
        }
    }
}
