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

namespace Google.Cloud.Debugger.V2.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedController2ClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateActiveBreakpointAsync</summary>
        public async Task UpdateActiveBreakpointRequestObjectAsync()
        {
            // Snippet: UpdateActiveBreakpointAsync(UpdateActiveBreakpointRequest, CallSettings)
            // Additional: UpdateActiveBreakpointAsync(UpdateActiveBreakpointRequest, CancellationToken)
            // Create client
            Controller2Client controller2Client = await Controller2Client.CreateAsync();
            // Initialize request argument(s)
            UpdateActiveBreakpointRequest request = new UpdateActiveBreakpointRequest
            {
                DebuggeeId = "",
                Breakpoint = new Breakpoint(),
            };
            // Make the request
            UpdateActiveBreakpointResponse response = await controller2Client.UpdateActiveBreakpointAsync(request);
            // End snippet
        }
    }
}
