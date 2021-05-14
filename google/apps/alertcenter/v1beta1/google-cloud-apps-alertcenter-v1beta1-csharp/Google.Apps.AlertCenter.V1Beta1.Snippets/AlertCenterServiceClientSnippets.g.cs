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

namespace Google.Apps.AlertCenter.V1Beta1.Snippets
{
    using Google.Api.Gax;
    using System;
    using System.Linq;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedAlertCenterServiceClientSnippets
    {
        /// <summary>Snippet for ListAlerts</summary>
        public void ListAlertsRequestObject()
        {
            // Snippet: ListAlerts(ListAlertsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            ListAlertsRequest request = new ListAlertsRequest
            {
                CustomerId = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedEnumerable<ListAlertsResponse, Alert> response = alertCenterServiceClient.ListAlerts(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Alert item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListAlertsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Alert item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Alert> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Alert item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListAlertsAsync</summary>
        public async Task ListAlertsRequestObjectAsync()
        {
            // Snippet: ListAlertsAsync(ListAlertsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListAlertsRequest request = new ListAlertsRequest
            {
                CustomerId = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListAlertsResponse, Alert> response = alertCenterServiceClient.ListAlertsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Alert item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListAlertsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Alert item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Alert> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Alert item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetAlert</summary>
        public void GetAlertRequestObject()
        {
            // Snippet: GetAlert(GetAlertRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            GetAlertRequest request = new GetAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            Alert response = alertCenterServiceClient.GetAlert(request);
            // End snippet
        }

        /// <summary>Snippet for GetAlertAsync</summary>
        public async Task GetAlertRequestObjectAsync()
        {
            // Snippet: GetAlertAsync(GetAlertRequest, CallSettings)
            // Additional: GetAlertAsync(GetAlertRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetAlertRequest request = new GetAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            Alert response = await alertCenterServiceClient.GetAlertAsync(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteAlert</summary>
        public void DeleteAlertRequestObject()
        {
            // Snippet: DeleteAlert(DeleteAlertRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            DeleteAlertRequest request = new DeleteAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            alertCenterServiceClient.DeleteAlert(request);
            // End snippet
        }

        /// <summary>Snippet for DeleteAlertAsync</summary>
        public async Task DeleteAlertRequestObjectAsync()
        {
            // Snippet: DeleteAlertAsync(DeleteAlertRequest, CallSettings)
            // Additional: DeleteAlertAsync(DeleteAlertRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteAlertRequest request = new DeleteAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            await alertCenterServiceClient.DeleteAlertAsync(request);
            // End snippet
        }

        /// <summary>Snippet for UndeleteAlert</summary>
        public void UndeleteAlertRequestObject()
        {
            // Snippet: UndeleteAlert(UndeleteAlertRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            UndeleteAlertRequest request = new UndeleteAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            Alert response = alertCenterServiceClient.UndeleteAlert(request);
            // End snippet
        }

        /// <summary>Snippet for UndeleteAlertAsync</summary>
        public async Task UndeleteAlertRequestObjectAsync()
        {
            // Snippet: UndeleteAlertAsync(UndeleteAlertRequest, CallSettings)
            // Additional: UndeleteAlertAsync(UndeleteAlertRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            UndeleteAlertRequest request = new UndeleteAlertRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            Alert response = await alertCenterServiceClient.UndeleteAlertAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateAlertFeedback</summary>
        public void CreateAlertFeedbackRequestObject()
        {
            // Snippet: CreateAlertFeedback(CreateAlertFeedbackRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            CreateAlertFeedbackRequest request = new CreateAlertFeedbackRequest
            {
                CustomerId = "",
                AlertId = "",
                Feedback = new AlertFeedback(),
            };
            // Make the request
            AlertFeedback response = alertCenterServiceClient.CreateAlertFeedback(request);
            // End snippet
        }

        /// <summary>Snippet for CreateAlertFeedbackAsync</summary>
        public async Task CreateAlertFeedbackRequestObjectAsync()
        {
            // Snippet: CreateAlertFeedbackAsync(CreateAlertFeedbackRequest, CallSettings)
            // Additional: CreateAlertFeedbackAsync(CreateAlertFeedbackRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateAlertFeedbackRequest request = new CreateAlertFeedbackRequest
            {
                CustomerId = "",
                AlertId = "",
                Feedback = new AlertFeedback(),
            };
            // Make the request
            AlertFeedback response = await alertCenterServiceClient.CreateAlertFeedbackAsync(request);
            // End snippet
        }

        /// <summary>Snippet for ListAlertFeedback</summary>
        public void ListAlertFeedbackRequestObject()
        {
            // Snippet: ListAlertFeedback(ListAlertFeedbackRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            ListAlertFeedbackRequest request = new ListAlertFeedbackRequest
            {
                CustomerId = "",
                AlertId = "",
                Filter = "",
            };
            // Make the request
            ListAlertFeedbackResponse response = alertCenterServiceClient.ListAlertFeedback(request);
            // End snippet
        }

        /// <summary>Snippet for ListAlertFeedbackAsync</summary>
        public async Task ListAlertFeedbackRequestObjectAsync()
        {
            // Snippet: ListAlertFeedbackAsync(ListAlertFeedbackRequest, CallSettings)
            // Additional: ListAlertFeedbackAsync(ListAlertFeedbackRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListAlertFeedbackRequest request = new ListAlertFeedbackRequest
            {
                CustomerId = "",
                AlertId = "",
                Filter = "",
            };
            // Make the request
            ListAlertFeedbackResponse response = await alertCenterServiceClient.ListAlertFeedbackAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetAlertMetadata</summary>
        public void GetAlertMetadataRequestObject()
        {
            // Snippet: GetAlertMetadata(GetAlertMetadataRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            GetAlertMetadataRequest request = new GetAlertMetadataRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            AlertMetadata response = alertCenterServiceClient.GetAlertMetadata(request);
            // End snippet
        }

        /// <summary>Snippet for GetAlertMetadataAsync</summary>
        public async Task GetAlertMetadataRequestObjectAsync()
        {
            // Snippet: GetAlertMetadataAsync(GetAlertMetadataRequest, CallSettings)
            // Additional: GetAlertMetadataAsync(GetAlertMetadataRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetAlertMetadataRequest request = new GetAlertMetadataRequest
            {
                CustomerId = "",
                AlertId = "",
            };
            // Make the request
            AlertMetadata response = await alertCenterServiceClient.GetAlertMetadataAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetSettings</summary>
        public void GetSettingsRequestObject()
        {
            // Snippet: GetSettings(GetSettingsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            GetSettingsRequest request = new GetSettingsRequest { CustomerId = "", };
            // Make the request
            Settings response = alertCenterServiceClient.GetSettings(request);
            // End snippet
        }

        /// <summary>Snippet for GetSettingsAsync</summary>
        public async Task GetSettingsRequestObjectAsync()
        {
            // Snippet: GetSettingsAsync(GetSettingsRequest, CallSettings)
            // Additional: GetSettingsAsync(GetSettingsRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetSettingsRequest request = new GetSettingsRequest { CustomerId = "", };
            // Make the request
            Settings response = await alertCenterServiceClient.GetSettingsAsync(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateSettings</summary>
        public void UpdateSettingsRequestObject()
        {
            // Snippet: UpdateSettings(UpdateSettingsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            UpdateSettingsRequest request = new UpdateSettingsRequest
            {
                CustomerId = "",
                Settings = new Settings(),
            };
            // Make the request
            Settings response = alertCenterServiceClient.UpdateSettings(request);
            // End snippet
        }

        /// <summary>Snippet for UpdateSettingsAsync</summary>
        public async Task UpdateSettingsRequestObjectAsync()
        {
            // Snippet: UpdateSettingsAsync(UpdateSettingsRequest, CallSettings)
            // Additional: UpdateSettingsAsync(UpdateSettingsRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            UpdateSettingsRequest request = new UpdateSettingsRequest
            {
                CustomerId = "",
                Settings = new Settings(),
            };
            // Make the request
            Settings response = await alertCenterServiceClient.UpdateSettingsAsync(request);
            // End snippet
        }

        /// <summary>Snippet for BatchDeleteAlerts</summary>
        public void BatchDeleteAlertsRequestObject()
        {
            // Snippet: BatchDeleteAlerts(BatchDeleteAlertsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            BatchDeleteAlertsRequest request = new BatchDeleteAlertsRequest
            {
                CustomerId = "",
                AlertId = { "", },
            };
            // Make the request
            BatchDeleteAlertsResponse response = alertCenterServiceClient.BatchDeleteAlerts(request);
            // End snippet
        }

        /// <summary>Snippet for BatchDeleteAlertsAsync</summary>
        public async Task BatchDeleteAlertsRequestObjectAsync()
        {
            // Snippet: BatchDeleteAlertsAsync(BatchDeleteAlertsRequest, CallSettings)
            // Additional: BatchDeleteAlertsAsync(BatchDeleteAlertsRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchDeleteAlertsRequest request = new BatchDeleteAlertsRequest
            {
                CustomerId = "",
                AlertId = { "", },
            };
            // Make the request
            BatchDeleteAlertsResponse response = await alertCenterServiceClient.BatchDeleteAlertsAsync(request);
            // End snippet
        }

        /// <summary>Snippet for BatchUndeleteAlerts</summary>
        public void BatchUndeleteAlertsRequestObject()
        {
            // Snippet: BatchUndeleteAlerts(BatchUndeleteAlertsRequest, CallSettings)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = AlertCenterServiceClient.Create();
            // Initialize request argument(s)
            BatchUndeleteAlertsRequest request = new BatchUndeleteAlertsRequest
            {
                CustomerId = "",
                AlertId = { "", },
            };
            // Make the request
            BatchUndeleteAlertsResponse response = alertCenterServiceClient.BatchUndeleteAlerts(request);
            // End snippet
        }

        /// <summary>Snippet for BatchUndeleteAlertsAsync</summary>
        public async Task BatchUndeleteAlertsRequestObjectAsync()
        {
            // Snippet: BatchUndeleteAlertsAsync(BatchUndeleteAlertsRequest, CallSettings)
            // Additional: BatchUndeleteAlertsAsync(BatchUndeleteAlertsRequest, CancellationToken)
            // Create client
            AlertCenterServiceClient alertCenterServiceClient = await AlertCenterServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchUndeleteAlertsRequest request = new BatchUndeleteAlertsRequest
            {
                CustomerId = "",
                AlertId = { "", },
            };
            // Make the request
            BatchUndeleteAlertsResponse response = await alertCenterServiceClient.BatchUndeleteAlertsAsync(request);
            // End snippet
        }
    }
}
