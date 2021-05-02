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

namespace Google.Cloud.Logging.V2.Snippets
{
    using Google.Api;
    using Google.Cloud.Logging.V2;
    using System.Collections.Generic;
    using System.Threading.Tasks;

    public sealed partial class GeneratedLoggingServiceV2ClientStandaloneSnippets
    {
        /// <summary>Snippet for WriteLogEntriesAsync</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public async Task WriteLogEntriesResourceNamesAsync()
        {
            // Create client
            LoggingServiceV2Client loggingServiceV2Client = await LoggingServiceV2Client.CreateAsync();
            // Initialize request argument(s)
            LogName logName = LogName.FromProjectLog("[PROJECT]", "[LOG]");
            MonitoredResource resource = new MonitoredResource();
            IDictionary<string, string> labels = new Dictionary<string, string> { { "", "" }, };
            IEnumerable<LogEntry> entries = new LogEntry[] { new LogEntry(), };
            // Make the request
            WriteLogEntriesResponse response = await loggingServiceV2Client.WriteLogEntriesAsync(logName, resource, labels, entries);
        }
    }
}
