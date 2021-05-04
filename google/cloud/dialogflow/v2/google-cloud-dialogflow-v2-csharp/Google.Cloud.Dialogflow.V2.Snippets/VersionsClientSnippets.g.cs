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

namespace Google.Cloud.Dialogflow.V2.Snippets
{
    using Google.Api.Gax;
    using Google.Protobuf.WellKnownTypes;
    using System;
    using System.Linq;
    using System.Threading.Tasks;
    using gcdv = Google.Cloud.Dialogflow.V2;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedVersionsClientSnippets
    {
        /// <summary>Snippet for ListVersions</summary>
        public void ListVersionsRequestObject()
        {
            // Snippet: ListVersions(ListVersionsRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            ListVersionsRequest request = new ListVersionsRequest
            {
                ParentAsAgentName = AgentName.FromProject("[PROJECT]"),
            };
            // Make the request
            PagedEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersions(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (gcdv::Version item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListVersionsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListVersionsAsync</summary>
        public async Task ListVersionsRequestObjectAsync()
        {
            // Snippet: ListVersionsAsync(ListVersionsRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            ListVersionsRequest request = new ListVersionsRequest
            {
                ParentAsAgentName = AgentName.FromProject("[PROJECT]"),
            };
            // Make the request
            PagedAsyncEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersionsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((gcdv::Version item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListVersionsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListVersions</summary>
        public void ListVersions()
        {
            // Snippet: ListVersions(string, string, int?, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent";
            // Make the request
            PagedEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersions(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (gcdv::Version item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListVersionsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListVersionsAsync</summary>
        public async Task ListVersionsAsync()
        {
            // Snippet: ListVersionsAsync(string, string, int?, CallSettings)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent";
            // Make the request
            PagedAsyncEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersionsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((gcdv::Version item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListVersionsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListVersions</summary>
        public void ListVersionsResourceNames()
        {
            // Snippet: ListVersions(AgentName, string, int?, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProject("[PROJECT]");
            // Make the request
            PagedEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersions(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (gcdv::Version item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListVersionsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListVersionsAsync</summary>
        public async Task ListVersionsResourceNamesAsync()
        {
            // Snippet: ListVersionsAsync(AgentName, string, int?, CallSettings)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProject("[PROJECT]");
            // Make the request
            PagedAsyncEnumerable<ListVersionsResponse, gcdv::Version> response = versionsClient.ListVersionsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((gcdv::Version item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListVersionsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (gcdv::Version item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<gcdv::Version> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (gcdv::Version item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetVersion</summary>
        public void GetVersionRequestObject()
        {
            // Snippet: GetVersion(GetVersionRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            GetVersionRequest request = new GetVersionRequest
            {
                VersionName = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]"),
            };
            // Make the request
            gcdv::Version response = versionsClient.GetVersion(request);
            // End snippet
        }

        /// <summary>Snippet for GetVersionAsync</summary>
        public async Task GetVersionRequestObjectAsync()
        {
            // Snippet: GetVersionAsync(GetVersionRequest, CallSettings)
            // Additional: GetVersionAsync(GetVersionRequest, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            GetVersionRequest request = new GetVersionRequest
            {
                VersionName = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]"),
            };
            // Make the request
            gcdv::Version response = await versionsClient.GetVersionAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetVersion</summary>
        public void GetVersion()
        {
            // Snippet: GetVersion(string, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/agent/versions/[VERSION]";
            // Make the request
            gcdv::Version response = versionsClient.GetVersion(name);
            // End snippet
        }

        /// <summary>Snippet for GetVersionAsync</summary>
        public async Task GetVersionAsync()
        {
            // Snippet: GetVersionAsync(string, CallSettings)
            // Additional: GetVersionAsync(string, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/agent/versions/[VERSION]";
            // Make the request
            gcdv::Version response = await versionsClient.GetVersionAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetVersion</summary>
        public void GetVersionResourceNames()
        {
            // Snippet: GetVersion(VersionName, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            VersionName name = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]");
            // Make the request
            gcdv::Version response = versionsClient.GetVersion(name);
            // End snippet
        }

        /// <summary>Snippet for GetVersionAsync</summary>
        public async Task GetVersionResourceNamesAsync()
        {
            // Snippet: GetVersionAsync(VersionName, CallSettings)
            // Additional: GetVersionAsync(VersionName, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            VersionName name = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]");
            // Make the request
            gcdv::Version response = await versionsClient.GetVersionAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CreateVersion</summary>
        public void CreateVersionRequestObject()
        {
            // Snippet: CreateVersion(CreateVersionRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            CreateVersionRequest request = new CreateVersionRequest
            {
                ParentAsAgentName = AgentName.FromProject("[PROJECT]"),
                Version = new gcdv::Version(),
            };
            // Make the request
            gcdv::Version response = versionsClient.CreateVersion(request);
            // End snippet
        }

        /// <summary>Snippet for CreateVersionAsync</summary>
        public async Task CreateVersionRequestObjectAsync()
        {
            // Snippet: CreateVersionAsync(CreateVersionRequest, CallSettings)
            // Additional: CreateVersionAsync(CreateVersionRequest, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            CreateVersionRequest request = new CreateVersionRequest
            {
                ParentAsAgentName = AgentName.FromProject("[PROJECT]"),
                Version = new gcdv::Version(),
            };
            // Make the request
            gcdv::Version response = await versionsClient.CreateVersionAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateVersion</summary>
        public void CreateVersion()
        {
            // Snippet: CreateVersion(string, Version, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent";
            gcdv::Version version = new gcdv::Version();
            // Make the request
            gcdv::Version response = versionsClient.CreateVersion(parent, version);
            // End snippet
        }

        /// <summary>Snippet for CreateVersionAsync</summary>
        public async Task CreateVersionAsync()
        {
            // Snippet: CreateVersionAsync(string, Version, CallSettings)
            // Additional: CreateVersionAsync(string, Version, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent";
            gcdv::Version version = new gcdv::Version();
            // Make the request
            gcdv::Version response = await versionsClient.CreateVersionAsync(parent, version);
            // End snippet
        }

        /// <summary>Snippet for CreateVersion</summary>
        public void CreateVersionResourceNames()
        {
            // Snippet: CreateVersion(AgentName, Version, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProject("[PROJECT]");
            gcdv::Version version = new gcdv::Version();
            // Make the request
            gcdv::Version response = versionsClient.CreateVersion(parent, version);
            // End snippet
        }

        /// <summary>Snippet for CreateVersionAsync</summary>
        public async Task CreateVersionResourceNamesAsync()
        {
            // Snippet: CreateVersionAsync(AgentName, Version, CallSettings)
            // Additional: CreateVersionAsync(AgentName, Version, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            AgentName parent = AgentName.FromProject("[PROJECT]");
            gcdv::Version version = new gcdv::Version();
            // Make the request
            gcdv::Version response = await versionsClient.CreateVersionAsync(parent, version);
            // End snippet
        }

        /// <summary>Snippet for UpdateVersion</summary>
        public void UpdateVersionRequestObject()
        {
            // Snippet: UpdateVersion(UpdateVersionRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            UpdateVersionRequest request = new UpdateVersionRequest
            {
                Version = new gcdv::Version(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            gcdv::Version response = versionsClient.UpdateVersion(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateVersionAsync</summary>
        public async Task UpdateVersionRequestObjectAsync()
        {
            // Snippet: UpdateVersionAsync(UpdateVersionRequest, CallSettings)
            // Additional: UpdateVersionAsync(UpdateVersionRequest, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            UpdateVersionRequest request = new UpdateVersionRequest
            {
                Version = new gcdv::Version(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            gcdv::Version response = await versionsClient.UpdateVersionAsync(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateVersion</summary>
        public void UpdateVersion()
        {
            // Snippet: UpdateVersion(Version, FieldMask, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            gcdv::Version version = new gcdv::Version();
            FieldMask updateMask = new FieldMask();
            // Make the request
            gcdv::Version response = versionsClient.UpdateVersion(version, updateMask);
            // End snippet
        }

        /// <summary>Snippet for UpdateVersionAsync</summary>
        public async Task UpdateVersionAsync()
        {
            // Snippet: UpdateVersionAsync(Version, FieldMask, CallSettings)
            // Additional: UpdateVersionAsync(Version, FieldMask, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            gcdv::Version version = new gcdv::Version();
            FieldMask updateMask = new FieldMask();
            // Make the request
            gcdv::Version response = await versionsClient.UpdateVersionAsync(version, updateMask);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersion</summary>
        public void DeleteVersionRequestObject()
        {
            // Snippet: DeleteVersion(DeleteVersionRequest, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            DeleteVersionRequest request = new DeleteVersionRequest
            {
                VersionName = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]"),
            };
            // Make the request
            versionsClient.DeleteVersion(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersionAsync</summary>
        public async Task DeleteVersionRequestObjectAsync()
        {
            // Snippet: DeleteVersionAsync(DeleteVersionRequest, CallSettings)
            // Additional: DeleteVersionAsync(DeleteVersionRequest, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            DeleteVersionRequest request = new DeleteVersionRequest
            {
                VersionName = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]"),
            };
            // Make the request
            await versionsClient.DeleteVersionAsync(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersion</summary>
        public void DeleteVersion()
        {
            // Snippet: DeleteVersion(string, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/agent/versions/[VERSION]";
            // Make the request
            versionsClient.DeleteVersion(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersionAsync</summary>
        public async Task DeleteVersionAsync()
        {
            // Snippet: DeleteVersionAsync(string, CallSettings)
            // Additional: DeleteVersionAsync(string, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/agent/versions/[VERSION]";
            // Make the request
            await versionsClient.DeleteVersionAsync(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersion</summary>
        public void DeleteVersionResourceNames()
        {
            // Snippet: DeleteVersion(VersionName, CallSettings)
            // Create client
            VersionsClient versionsClient = VersionsClient.Create();
            // Initialize request argument(s)
            VersionName name = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]");
            // Make the request
            versionsClient.DeleteVersion(name);
            // End snippet
        }

        /// <summary>Snippet for DeleteVersionAsync</summary>
        public async Task DeleteVersionResourceNamesAsync()
        {
            // Snippet: DeleteVersionAsync(VersionName, CallSettings)
            // Additional: DeleteVersionAsync(VersionName, CancellationToken)
            // Create client
            VersionsClient versionsClient = await VersionsClient.CreateAsync();
            // Initialize request argument(s)
            VersionName name = VersionName.FromProjectVersion("[PROJECT]", "[VERSION]");
            // Make the request
            await versionsClient.DeleteVersionAsync(name);
            // End snippet
        }
    }
}
