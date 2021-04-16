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

namespace Google.Cloud.PubSub.V1.Snippets
{
    using System.Collections.Generic;
    using System.Threading.Tasks;

    public sealed partial class GeneratedPublisherClientStandaloneSnippets
    {
        /// <summary>Snippet for PublishAsync</summary>
        public async Task PublishAsync()
        {
            // Snippet: PublishAsync(string, IEnumerable<PubsubMessage>, CallSettings)
            // Additional: PublishAsync(string, IEnumerable<PubsubMessage>, CancellationToken)
            // Create client
            PublisherClient publisherClient = await PublisherClient.CreateAsync();
            // Initialize request argument(s)
            string topic = "projects/[PROJECT]/topics/[TOPIC]";
            IEnumerable<PubsubMessage> messages = new PubsubMessage[]
            {
                new PubsubMessage(),
            };
            // Make the request
            PublishResponse response = await publisherClient.PublishAsync(topic, messages);
            // End snippet
        }
    }
}
