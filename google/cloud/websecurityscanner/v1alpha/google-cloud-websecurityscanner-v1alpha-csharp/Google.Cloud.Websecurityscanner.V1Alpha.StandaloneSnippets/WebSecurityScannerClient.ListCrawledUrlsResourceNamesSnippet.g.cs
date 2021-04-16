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

namespace Google.Cloud.Websecurityscanner.V1Alpha.Snippets
{
    using Google.Api.Gax;
    using System;

    public sealed partial class GeneratedWebSecurityScannerClientStandaloneSnippets
    {
        /// <summary>Snippet for ListCrawledUrls</summary>
        public void ListCrawledUrlsResourceNames()
        {
            // Snippet: ListCrawledUrls(ScanRunName, string, int?, CallSettings)
            // Create client
            WebSecurityScannerClient webSecurityScannerClient = WebSecurityScannerClient.Create();
            // Initialize request argument(s)
            ScanRunName parent = ScanRunName.FromProjectScanConfigScanRun("[PROJECT]", "[SCAN_CONFIG]", "[SCAN_RUN]");
            // Make the request
            PagedEnumerable<ListCrawledUrlsResponse, CrawledUrl> response = webSecurityScannerClient.ListCrawledUrls(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (CrawledUrl item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListCrawledUrlsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CrawledUrl item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CrawledUrl> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CrawledUrl item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }
    }
}
