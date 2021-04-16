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
    using Google.Api.Gax;
    using Google.Protobuf.WellKnownTypes;
    using System;
    using System.Linq;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedIntentsClientSnippets
    {
        /// <summary>Snippet for ListIntents</summary>
        public void ListIntentsRequestObject()
        {
            // Snippet: ListIntents(ListIntentsRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            ListIntentsRequest request = new ListIntentsRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                LanguageCode = "",
                IntentView = IntentView.Unspecified,
            };
            // Make the request
            PagedEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntents(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Intent item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListIntentsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListIntents</summary>
        public async Task ListIntentsRequestObjectAsync()
        {
            // Snippet: ListIntentsAsync(ListIntentsRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            ListIntentsRequest request = new ListIntentsRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                LanguageCode = "",
                IntentView = IntentView.Unspecified,
            };
            // Make the request
            PagedAsyncEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntentsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Intent item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListIntentsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListIntents</summary>
        public void ListIntents()
        {
            // Snippet: ListIntents(string, string, int?, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]";
            // Make the request
            PagedEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntents(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Intent item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListIntentsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListIntents</summary>
        public async Task ListIntentsAsync()
        {
            // Snippet: ListIntentsAsync(string, string, int?, CallSettings)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]";
            // Make the request
            PagedAsyncEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntentsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Intent item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListIntentsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListIntents</summary>
        public void ListIntentsResourceNames()
        {
            // Snippet: ListIntents(AgentName, string, int?, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]");
            // Make the request
            PagedEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntents(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Intent item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListIntentsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListIntents</summary>
        public async Task ListIntentsResourceNamesAsync()
        {
            // Snippet: ListIntentsAsync(AgentName, string, int?, CallSettings)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]");
            // Make the request
            PagedAsyncEnumerable<ListIntentsResponse, Intent> response = intentsClient.ListIntentsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Intent item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListIntentsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Intent item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Intent> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Intent item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetIntent</summary>
        public void GetIntentRequestObject()
        {
            // Snippet: GetIntent(GetIntentRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            GetIntentRequest request = new GetIntentRequest
            {
                IntentName = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]"),
                LanguageCode = "",
            };
            // Make the request
            Intent response = intentsClient.GetIntent(request);
            // End snippet
        }

        /// <summary>Snippet for GetIntentAsync</summary>
        public async Task GetIntentRequestObjectAsync()
        {
            // Snippet: GetIntentAsync(GetIntentRequest, CallSettings)
            // Additional: GetIntentAsync(GetIntentRequest, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            GetIntentRequest request = new GetIntentRequest
            {
                IntentName = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]"),
                LanguageCode = "",
            };
            // Make the request
            Intent response = await intentsClient.GetIntentAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetIntent</summary>
        public void GetIntent()
        {
            // Snippet: GetIntent(string, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]/intents/[INTENT]";
            // Make the request
            Intent response = intentsClient.GetIntent(name);
            // End snippet
        }

        /// <summary>Snippet for GetIntentAsync</summary>
        public async Task GetIntentAsync()
        {
            // Snippet: GetIntentAsync(string, CallSettings)
            // Additional: GetIntentAsync(string, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]/intents/[INTENT]";
            // Make the request
            Intent response = await intentsClient.GetIntentAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetIntent</summary>
        public void GetIntentResourceNames()
        {
            // Snippet: GetIntent(IntentName, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            IntentName name = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]");
            // Make the request
            Intent response = intentsClient.GetIntent(name);
            // End snippet
        }

        /// <summary>Snippet for GetIntentAsync</summary>
        public async Task GetIntentResourceNamesAsync()
        {
            // Snippet: GetIntentAsync(IntentName, CallSettings)
            // Additional: GetIntentAsync(IntentName, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            IntentName name = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]");
            // Make the request
            Intent response = await intentsClient.GetIntentAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CreateIntent</summary>
        public void CreateIntentRequestObject()
        {
            // Snippet: CreateIntent(CreateIntentRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            CreateIntentRequest request = new CreateIntentRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                Intent = new Intent(),
                LanguageCode = "",
            };
            // Make the request
            Intent response = intentsClient.CreateIntent(request);
            // End snippet
        }

        /// <summary>Snippet for CreateIntentAsync</summary>
        public async Task CreateIntentRequestObjectAsync()
        {
            // Snippet: CreateIntentAsync(CreateIntentRequest, CallSettings)
            // Additional: CreateIntentAsync(CreateIntentRequest, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            CreateIntentRequest request = new CreateIntentRequest
            {
                ParentAsAgentName = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]"),
                Intent = new Intent(),
                LanguageCode = "",
            };
            // Make the request
            Intent response = await intentsClient.CreateIntentAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateIntent</summary>
        public void CreateIntent()
        {
            // Snippet: CreateIntent(string, Intent, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]";
            Intent intent = new Intent();
            // Make the request
            Intent response = intentsClient.CreateIntent(parent, intent);
            // End snippet
        }

        /// <summary>Snippet for CreateIntentAsync</summary>
        public async Task CreateIntentAsync()
        {
            // Snippet: CreateIntentAsync(string, Intent, CallSettings)
            // Additional: CreateIntentAsync(string, Intent, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]";
            Intent intent = new Intent();
            // Make the request
            Intent response = await intentsClient.CreateIntentAsync(parent, intent);
            // End snippet
        }

        /// <summary>Snippet for CreateIntent</summary>
        public void CreateIntentResourceNames()
        {
            // Snippet: CreateIntent(AgentName, Intent, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]");
            Intent intent = new Intent();
            // Make the request
            Intent response = intentsClient.CreateIntent(parent, intent);
            // End snippet
        }

        /// <summary>Snippet for CreateIntentAsync</summary>
        public async Task CreateIntentResourceNamesAsync()
        {
            // Snippet: CreateIntentAsync(AgentName, Intent, CallSettings)
            // Additional: CreateIntentAsync(AgentName, Intent, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProjectLocationAgent("[PROJECT]", "[LOCATION]", "[AGENT]");
            Intent intent = new Intent();
            // Make the request
            Intent response = await intentsClient.CreateIntentAsync(parent, intent);
            // End snippet
        }

        /// <summary>Snippet for UpdateIntent</summary>
        public void UpdateIntentRequestObject()
        {
            // Snippet: UpdateIntent(UpdateIntentRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            UpdateIntentRequest request = new UpdateIntentRequest
            {
                Intent = new Intent(),
                LanguageCode = "",
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Intent response = intentsClient.UpdateIntent(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateIntentAsync</summary>
        public async Task UpdateIntentRequestObjectAsync()
        {
            // Snippet: UpdateIntentAsync(UpdateIntentRequest, CallSettings)
            // Additional: UpdateIntentAsync(UpdateIntentRequest, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            UpdateIntentRequest request = new UpdateIntentRequest
            {
                Intent = new Intent(),
                LanguageCode = "",
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Intent response = await intentsClient.UpdateIntentAsync(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateIntent</summary>
        public void UpdateIntent()
        {
            // Snippet: UpdateIntent(Intent, FieldMask, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            Intent intent = new Intent();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Intent response = intentsClient.UpdateIntent(intent, updateMask);
            // End snippet
        }

        /// <summary>Snippet for UpdateIntentAsync</summary>
        public async Task UpdateIntentAsync()
        {
            // Snippet: UpdateIntentAsync(Intent, FieldMask, CallSettings)
            // Additional: UpdateIntentAsync(Intent, FieldMask, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            Intent intent = new Intent();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Intent response = await intentsClient.UpdateIntentAsync(intent, updateMask);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntent</summary>
        public void DeleteIntentRequestObject()
        {
            // Snippet: DeleteIntent(DeleteIntentRequest, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            DeleteIntentRequest request = new DeleteIntentRequest
            {
                IntentName = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]"),
            };
            // Make the request
            intentsClient.DeleteIntent(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntentAsync</summary>
        public async Task DeleteIntentRequestObjectAsync()
        {
            // Snippet: DeleteIntentAsync(DeleteIntentRequest, CallSettings)
            // Additional: DeleteIntentAsync(DeleteIntentRequest, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            DeleteIntentRequest request = new DeleteIntentRequest
            {
                IntentName = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]"),
            };
            // Make the request
            await intentsClient.DeleteIntentAsync(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntent</summary>
        public void DeleteIntent()
        {
            // Snippet: DeleteIntent(string, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]/intents/[INTENT]";
            // Make the request
            intentsClient.DeleteIntent(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntentAsync</summary>
        public async Task DeleteIntentAsync()
        {
            // Snippet: DeleteIntentAsync(string, CallSettings)
            // Additional: DeleteIntentAsync(string, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/agents/[AGENT]/intents/[INTENT]";
            // Make the request
            await intentsClient.DeleteIntentAsync(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntent</summary>
        public void DeleteIntentResourceNames()
        {
            // Snippet: DeleteIntent(IntentName, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            IntentName name = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]");
            // Make the request
            intentsClient.DeleteIntent(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteIntentAsync</summary>
        public async Task DeleteIntentResourceNamesAsync()
        {
            // Snippet: DeleteIntentAsync(IntentName, CallSettings)
            // Additional: DeleteIntentAsync(IntentName, CancellationToken)
            // Create client
            IntentsClient intentsClient = await IntentsClient.CreateAsync();
            // Initialize request argument(s)
            IntentName name = IntentName.FromProjectLocationAgentIntent("[PROJECT]", "[LOCATION]", "[AGENT]", "[INTENT]");
            // Make the request
            await intentsClient.DeleteIntentAsync(name);
            // End snippet
        }
    }
}
