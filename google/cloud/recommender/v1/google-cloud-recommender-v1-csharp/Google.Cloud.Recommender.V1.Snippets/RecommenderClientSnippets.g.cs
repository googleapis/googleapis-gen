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

namespace Google.Cloud.Recommender.V1.Snippets
{
    using Google.Api.Gax;
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedRecommenderClientSnippets
    {
        /// <summary>Snippet for ListInsights</summary>
        public void ListInsightsRequestObject()
        {
            // Snippet: ListInsights(ListInsightsRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            ListInsightsRequest request = new ListInsightsRequest
            {
                ParentAsInsightTypeName = InsightTypeName.FromProjectLocationInsightType("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]"),
                Filter = "",
            };
            // Make the request
            PagedEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsights(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Insight item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListInsightsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInsightsAsync</summary>
        public async Task ListInsightsRequestObjectAsync()
        {
            // Snippet: ListInsightsAsync(ListInsightsRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            ListInsightsRequest request = new ListInsightsRequest
            {
                ParentAsInsightTypeName = InsightTypeName.FromProjectLocationInsightType("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]"),
                Filter = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsightsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Insight item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListInsightsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInsights</summary>
        public void ListInsights()
        {
            // Snippet: ListInsights(string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]";
            // Make the request
            PagedEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsights(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Insight item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListInsightsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInsightsAsync</summary>
        public async Task ListInsightsAsync()
        {
            // Snippet: ListInsightsAsync(string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]";
            // Make the request
            PagedAsyncEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsightsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Insight item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListInsightsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInsights</summary>
        public void ListInsightsResourceNames()
        {
            // Snippet: ListInsights(InsightTypeName, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            InsightTypeName parent = InsightTypeName.FromProjectLocationInsightType("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]");
            // Make the request
            PagedEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsights(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Insight item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListInsightsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInsightsAsync</summary>
        public async Task ListInsightsResourceNamesAsync()
        {
            // Snippet: ListInsightsAsync(InsightTypeName, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            InsightTypeName parent = InsightTypeName.FromProjectLocationInsightType("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]");
            // Make the request
            PagedAsyncEnumerable<ListInsightsResponse, Insight> response = recommenderClient.ListInsightsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Insight item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListInsightsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Insight item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Insight> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Insight item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetInsight</summary>
        public void GetInsightRequestObject()
        {
            // Snippet: GetInsight(GetInsightRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            GetInsightRequest request = new GetInsightRequest
            {
                InsightName = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]"),
            };
            // Make the request
            Insight response = recommenderClient.GetInsight(request);
            // End snippet
        }

        /// <summary>Snippet for GetInsightAsync</summary>
        public async Task GetInsightRequestObjectAsync()
        {
            // Snippet: GetInsightAsync(GetInsightRequest, CallSettings)
            // Additional: GetInsightAsync(GetInsightRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            GetInsightRequest request = new GetInsightRequest
            {
                InsightName = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]"),
            };
            // Make the request
            Insight response = await recommenderClient.GetInsightAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetInsight</summary>
        public void GetInsight()
        {
            // Snippet: GetInsight(string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]/insights/[INSIGHT]";
            // Make the request
            Insight response = recommenderClient.GetInsight(name);
            // End snippet
        }

        /// <summary>Snippet for GetInsightAsync</summary>
        public async Task GetInsightAsync()
        {
            // Snippet: GetInsightAsync(string, CallSettings)
            // Additional: GetInsightAsync(string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]/insights/[INSIGHT]";
            // Make the request
            Insight response = await recommenderClient.GetInsightAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetInsight</summary>
        public void GetInsightResourceNames()
        {
            // Snippet: GetInsight(InsightName, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            InsightName name = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]");
            // Make the request
            Insight response = recommenderClient.GetInsight(name);
            // End snippet
        }

        /// <summary>Snippet for GetInsightAsync</summary>
        public async Task GetInsightResourceNamesAsync()
        {
            // Snippet: GetInsightAsync(InsightName, CallSettings)
            // Additional: GetInsightAsync(InsightName, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            InsightName name = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]");
            // Make the request
            Insight response = await recommenderClient.GetInsightAsync(name);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAccepted</summary>
        public void MarkInsightAcceptedRequestObject()
        {
            // Snippet: MarkInsightAccepted(MarkInsightAcceptedRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            MarkInsightAcceptedRequest request = new MarkInsightAcceptedRequest
            {
                InsightName = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Insight response = recommenderClient.MarkInsightAccepted(request);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAcceptedAsync</summary>
        public async Task MarkInsightAcceptedRequestObjectAsync()
        {
            // Snippet: MarkInsightAcceptedAsync(MarkInsightAcceptedRequest, CallSettings)
            // Additional: MarkInsightAcceptedAsync(MarkInsightAcceptedRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            MarkInsightAcceptedRequest request = new MarkInsightAcceptedRequest
            {
                InsightName = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Insight response = await recommenderClient.MarkInsightAcceptedAsync(request);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAccepted</summary>
        public void MarkInsightAccepted()
        {
            // Snippet: MarkInsightAccepted(string, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]/insights/[INSIGHT]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Insight response = recommenderClient.MarkInsightAccepted(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAcceptedAsync</summary>
        public async Task MarkInsightAcceptedAsync()
        {
            // Snippet: MarkInsightAcceptedAsync(string, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkInsightAcceptedAsync(string, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/insightTypes/[INSIGHT_TYPE]/insights/[INSIGHT]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Insight response = await recommenderClient.MarkInsightAcceptedAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAccepted</summary>
        public void MarkInsightAcceptedResourceNames()
        {
            // Snippet: MarkInsightAccepted(InsightName, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            InsightName name = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Insight response = recommenderClient.MarkInsightAccepted(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkInsightAcceptedAsync</summary>
        public async Task MarkInsightAcceptedResourceNamesAsync()
        {
            // Snippet: MarkInsightAcceptedAsync(InsightName, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkInsightAcceptedAsync(InsightName, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            InsightName name = InsightName.FromProjectLocationInsightTypeInsight("[PROJECT]", "[LOCATION]", "[INSIGHT_TYPE]", "[INSIGHT]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Insight response = await recommenderClient.MarkInsightAcceptedAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for ListRecommendations</summary>
        public void ListRecommendationsRequestObject()
        {
            // Snippet: ListRecommendations(ListRecommendationsRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            ListRecommendationsRequest request = new ListRecommendationsRequest
            {
                ParentAsRecommenderName = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]"),
                Filter = "",
            };
            // Make the request
            PagedEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendations(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Recommendation item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListRecommendationsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendationsAsync</summary>
        public async Task ListRecommendationsRequestObjectAsync()
        {
            // Snippet: ListRecommendationsAsync(ListRecommendationsRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            ListRecommendationsRequest request = new ListRecommendationsRequest
            {
                ParentAsRecommenderName = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]"),
                Filter = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendationsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Recommendation item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListRecommendationsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendations</summary>
        public void ListRecommendations1()
        {
            // Snippet: ListRecommendations(string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]";
            // Make the request
            PagedEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendations(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Recommendation item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListRecommendationsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendationsAsync</summary>
        public async Task ListRecommendations1Async()
        {
            // Snippet: ListRecommendationsAsync(string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]";
            // Make the request
            PagedAsyncEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendationsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Recommendation item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListRecommendationsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendations</summary>
        public void ListRecommendations1ResourceNames()
        {
            // Snippet: ListRecommendations(RecommenderName, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommenderName parent = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]");
            // Make the request
            PagedEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendations(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Recommendation item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListRecommendationsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendationsAsync</summary>
        public async Task ListRecommendations1ResourceNamesAsync()
        {
            // Snippet: ListRecommendationsAsync(RecommenderName, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommenderName parent = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]");
            // Make the request
            PagedAsyncEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendationsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Recommendation item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListRecommendationsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendations</summary>
        public void ListRecommendations2()
        {
            // Snippet: ListRecommendations(string, string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]";
            string filter = "";
            // Make the request
            PagedEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendations(parent, filter: filter);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Recommendation item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListRecommendationsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendationsAsync</summary>
        public async Task ListRecommendations2Async()
        {
            // Snippet: ListRecommendationsAsync(string, string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]";
            string filter = "";
            // Make the request
            PagedAsyncEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendationsAsync(parent, filter: filter);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Recommendation item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListRecommendationsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendations</summary>
        public void ListRecommendations2ResourceNames()
        {
            // Snippet: ListRecommendations(RecommenderName, string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommenderName parent = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]");
            string filter = "";
            // Make the request
            PagedEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendations(parent, filter: filter);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Recommendation item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListRecommendationsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListRecommendationsAsync</summary>
        public async Task ListRecommendations2ResourceNamesAsync()
        {
            // Snippet: ListRecommendationsAsync(RecommenderName, string, string, int?, CallSettings)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommenderName parent = RecommenderName.FromProjectLocationRecommender("[PROJECT]", "[LOCATION]", "[RECOMMENDER]");
            string filter = "";
            // Make the request
            PagedAsyncEnumerable<ListRecommendationsResponse, Recommendation> response = recommenderClient.ListRecommendationsAsync(parent, filter: filter);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Recommendation item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListRecommendationsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Recommendation item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Recommendation> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Recommendation item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetRecommendation</summary>
        public void GetRecommendationRequestObject()
        {
            // Snippet: GetRecommendation(GetRecommendationRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            GetRecommendationRequest request = new GetRecommendationRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
            };
            // Make the request
            Recommendation response = recommenderClient.GetRecommendation(request);
            // End snippet
        }

        /// <summary>Snippet for GetRecommendationAsync</summary>
        public async Task GetRecommendationRequestObjectAsync()
        {
            // Snippet: GetRecommendationAsync(GetRecommendationRequest, CallSettings)
            // Additional: GetRecommendationAsync(GetRecommendationRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            GetRecommendationRequest request = new GetRecommendationRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
            };
            // Make the request
            Recommendation response = await recommenderClient.GetRecommendationAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetRecommendation</summary>
        public void GetRecommendation()
        {
            // Snippet: GetRecommendation(string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            // Make the request
            Recommendation response = recommenderClient.GetRecommendation(name);
            // End snippet
        }

        /// <summary>Snippet for GetRecommendationAsync</summary>
        public async Task GetRecommendationAsync()
        {
            // Snippet: GetRecommendationAsync(string, CallSettings)
            // Additional: GetRecommendationAsync(string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            // Make the request
            Recommendation response = await recommenderClient.GetRecommendationAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetRecommendation</summary>
        public void GetRecommendationResourceNames()
        {
            // Snippet: GetRecommendation(RecommendationName, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            // Make the request
            Recommendation response = recommenderClient.GetRecommendation(name);
            // End snippet
        }

        /// <summary>Snippet for GetRecommendationAsync</summary>
        public async Task GetRecommendationResourceNamesAsync()
        {
            // Snippet: GetRecommendationAsync(RecommendationName, CallSettings)
            // Additional: GetRecommendationAsync(RecommendationName, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            // Make the request
            Recommendation response = await recommenderClient.GetRecommendationAsync(name);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimed</summary>
        public void MarkRecommendationClaimedRequestObject()
        {
            // Snippet: MarkRecommendationClaimed(MarkRecommendationClaimedRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            MarkRecommendationClaimedRequest request = new MarkRecommendationClaimedRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationClaimed(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimedAsync</summary>
        public async Task MarkRecommendationClaimedRequestObjectAsync()
        {
            // Snippet: MarkRecommendationClaimedAsync(MarkRecommendationClaimedRequest, CallSettings)
            // Additional: MarkRecommendationClaimedAsync(MarkRecommendationClaimedRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            MarkRecommendationClaimedRequest request = new MarkRecommendationClaimedRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationClaimedAsync(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimed</summary>
        public void MarkRecommendationClaimed()
        {
            // Snippet: MarkRecommendationClaimed(string, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationClaimed(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimedAsync</summary>
        public async Task MarkRecommendationClaimedAsync()
        {
            // Snippet: MarkRecommendationClaimedAsync(string, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationClaimedAsync(string, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationClaimedAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimed</summary>
        public void MarkRecommendationClaimedResourceNames()
        {
            // Snippet: MarkRecommendationClaimed(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationClaimed(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationClaimedAsync</summary>
        public async Task MarkRecommendationClaimedResourceNamesAsync()
        {
            // Snippet: MarkRecommendationClaimedAsync(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationClaimedAsync(RecommendationName, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationClaimedAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceeded</summary>
        public void MarkRecommendationSucceededRequestObject()
        {
            // Snippet: MarkRecommendationSucceeded(MarkRecommendationSucceededRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            MarkRecommendationSucceededRequest request = new MarkRecommendationSucceededRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationSucceeded(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceededAsync</summary>
        public async Task MarkRecommendationSucceededRequestObjectAsync()
        {
            // Snippet: MarkRecommendationSucceededAsync(MarkRecommendationSucceededRequest, CallSettings)
            // Additional: MarkRecommendationSucceededAsync(MarkRecommendationSucceededRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            MarkRecommendationSucceededRequest request = new MarkRecommendationSucceededRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationSucceededAsync(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceeded</summary>
        public void MarkRecommendationSucceeded()
        {
            // Snippet: MarkRecommendationSucceeded(string, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationSucceeded(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceededAsync</summary>
        public async Task MarkRecommendationSucceededAsync()
        {
            // Snippet: MarkRecommendationSucceededAsync(string, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationSucceededAsync(string, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationSucceededAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceeded</summary>
        public void MarkRecommendationSucceededResourceNames()
        {
            // Snippet: MarkRecommendationSucceeded(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationSucceeded(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationSucceededAsync</summary>
        public async Task MarkRecommendationSucceededResourceNamesAsync()
        {
            // Snippet: MarkRecommendationSucceededAsync(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationSucceededAsync(RecommendationName, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationSucceededAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailed</summary>
        public void MarkRecommendationFailedRequestObject()
        {
            // Snippet: MarkRecommendationFailed(MarkRecommendationFailedRequest, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            MarkRecommendationFailedRequest request = new MarkRecommendationFailedRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationFailed(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailedAsync</summary>
        public async Task MarkRecommendationFailedRequestObjectAsync()
        {
            // Snippet: MarkRecommendationFailedAsync(MarkRecommendationFailedRequest, CallSettings)
            // Additional: MarkRecommendationFailedAsync(MarkRecommendationFailedRequest, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            MarkRecommendationFailedRequest request = new MarkRecommendationFailedRequest
            {
                RecommendationName = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]"),
                StateMetadata = { { "", "" }, },
                Etag = "",
            };
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationFailedAsync(request);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailed</summary>
        public void MarkRecommendationFailed()
        {
            // Snippet: MarkRecommendationFailed(string, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationFailed(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailedAsync</summary>
        public async Task MarkRecommendationFailedAsync()
        {
            // Snippet: MarkRecommendationFailedAsync(string, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationFailedAsync(string, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/recommenders/[RECOMMENDER]/recommendations/[RECOMMENDATION]";
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationFailedAsync(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailed</summary>
        public void MarkRecommendationFailedResourceNames()
        {
            // Snippet: MarkRecommendationFailed(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Create client
            RecommenderClient recommenderClient = RecommenderClient.Create();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = recommenderClient.MarkRecommendationFailed(name, stateMetadata, etag);
            // End snippet
        }

        /// <summary>Snippet for MarkRecommendationFailedAsync</summary>
        public async Task MarkRecommendationFailedResourceNamesAsync()
        {
            // Snippet: MarkRecommendationFailedAsync(RecommendationName, IDictionary<string,string>, string, CallSettings)
            // Additional: MarkRecommendationFailedAsync(RecommendationName, IDictionary<string,string>, string, CancellationToken)
            // Create client
            RecommenderClient recommenderClient = await RecommenderClient.CreateAsync();
            // Initialize request argument(s)
            RecommendationName name = RecommendationName.FromProjectLocationRecommenderRecommendation("[PROJECT]", "[LOCATION]", "[RECOMMENDER]", "[RECOMMENDATION]");
            IDictionary<string, string> stateMetadata = new Dictionary<string, string> { { "", "" }, };
            string etag = "";
            // Make the request
            Recommendation response = await recommenderClient.MarkRecommendationFailedAsync(name, stateMetadata, etag);
            // End snippet
        }
    }
}
