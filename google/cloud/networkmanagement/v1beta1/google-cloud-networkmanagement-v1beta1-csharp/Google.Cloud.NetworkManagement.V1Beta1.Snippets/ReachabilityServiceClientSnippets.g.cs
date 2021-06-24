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

namespace Google.Cloud.NetworkManagement.V1Beta1.Snippets
{
    using Google.Api.Gax;
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System;
    using System.Linq;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedReachabilityServiceClientSnippets
    {
        /// <summary>Snippet for ListConnectivityTests</summary>
        public void ListConnectivityTestsRequestObject()
        {
            // Snippet: ListConnectivityTests(ListConnectivityTestsRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            ListConnectivityTestsRequest request = new ListConnectivityTestsRequest
            {
                Parent = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedEnumerable<ListConnectivityTestsResponse, ConnectivityTest> response = reachabilityServiceClient.ListConnectivityTests(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (ConnectivityTest item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListConnectivityTestsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (ConnectivityTest item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<ConnectivityTest> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (ConnectivityTest item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListConnectivityTestsAsync</summary>
        public async Task ListConnectivityTestsRequestObjectAsync()
        {
            // Snippet: ListConnectivityTestsAsync(ListConnectivityTestsRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListConnectivityTestsRequest request = new ListConnectivityTestsRequest
            {
                Parent = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListConnectivityTestsResponse, ConnectivityTest> response = reachabilityServiceClient.ListConnectivityTestsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((ConnectivityTest item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListConnectivityTestsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (ConnectivityTest item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<ConnectivityTest> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (ConnectivityTest item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetConnectivityTest</summary>
        public void GetConnectivityTestRequestObject()
        {
            // Snippet: GetConnectivityTest(GetConnectivityTestRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            GetConnectivityTestRequest request = new GetConnectivityTestRequest { Name = "", };
            // Make the request
            ConnectivityTest response = reachabilityServiceClient.GetConnectivityTest(request);
            // End snippet
        }

        /// <summary>Snippet for GetConnectivityTestAsync</summary>
        public async Task GetConnectivityTestRequestObjectAsync()
        {
            // Snippet: GetConnectivityTestAsync(GetConnectivityTestRequest, CallSettings)
            // Additional: GetConnectivityTestAsync(GetConnectivityTestRequest, CancellationToken)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetConnectivityTestRequest request = new GetConnectivityTestRequest { Name = "", };
            // Make the request
            ConnectivityTest response = await reachabilityServiceClient.GetConnectivityTestAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateConnectivityTest</summary>
        public void CreateConnectivityTestRequestObject()
        {
            // Snippet: CreateConnectivityTest(CreateConnectivityTestRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            CreateConnectivityTestRequest request = new CreateConnectivityTestRequest
            {
                Parent = "",
                TestId = "",
                Resource = new ConnectivityTest(),
            };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = reachabilityServiceClient.CreateConnectivityTest(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = reachabilityServiceClient.PollOnceCreateConnectivityTest(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CreateConnectivityTestAsync</summary>
        public async Task CreateConnectivityTestRequestObjectAsync()
        {
            // Snippet: CreateConnectivityTestAsync(CreateConnectivityTestRequest, CallSettings)
            // Additional: CreateConnectivityTestAsync(CreateConnectivityTestRequest, CancellationToken)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateConnectivityTestRequest request = new CreateConnectivityTestRequest
            {
                Parent = "",
                TestId = "",
                Resource = new ConnectivityTest(),
            };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = await reachabilityServiceClient.CreateConnectivityTestAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = await reachabilityServiceClient.PollOnceCreateConnectivityTestAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateConnectivityTest</summary>
        public void UpdateConnectivityTestRequestObject()
        {
            // Snippet: UpdateConnectivityTest(UpdateConnectivityTestRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            UpdateConnectivityTestRequest request = new UpdateConnectivityTestRequest
            {
                UpdateMask = new FieldMask(),
                Resource = new ConnectivityTest(),
            };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = reachabilityServiceClient.UpdateConnectivityTest(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = reachabilityServiceClient.PollOnceUpdateConnectivityTest(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateConnectivityTestAsync</summary>
        public async Task UpdateConnectivityTestRequestObjectAsync()
        {
            // Snippet: UpdateConnectivityTestAsync(UpdateConnectivityTestRequest, CallSettings)
            // Additional: UpdateConnectivityTestAsync(UpdateConnectivityTestRequest, CancellationToken)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            UpdateConnectivityTestRequest request = new UpdateConnectivityTestRequest
            {
                UpdateMask = new FieldMask(),
                Resource = new ConnectivityTest(),
            };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = await reachabilityServiceClient.UpdateConnectivityTestAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = await reachabilityServiceClient.PollOnceUpdateConnectivityTestAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for RerunConnectivityTest</summary>
        public void RerunConnectivityTestRequestObject()
        {
            // Snippet: RerunConnectivityTest(RerunConnectivityTestRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            RerunConnectivityTestRequest request = new RerunConnectivityTestRequest { Name = "", };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = reachabilityServiceClient.RerunConnectivityTest(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = reachabilityServiceClient.PollOnceRerunConnectivityTest(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for RerunConnectivityTestAsync</summary>
        public async Task RerunConnectivityTestRequestObjectAsync()
        {
            // Snippet: RerunConnectivityTestAsync(RerunConnectivityTestRequest, CallSettings)
            // Additional: RerunConnectivityTestAsync(RerunConnectivityTestRequest, CancellationToken)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            RerunConnectivityTestRequest request = new RerunConnectivityTestRequest { Name = "", };
            // Make the request
            Operation<ConnectivityTest, OperationMetadata> response = await reachabilityServiceClient.RerunConnectivityTestAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<ConnectivityTest, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            ConnectivityTest result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ConnectivityTest, OperationMetadata> retrievedResponse = await reachabilityServiceClient.PollOnceRerunConnectivityTestAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ConnectivityTest retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteConnectivityTest</summary>
        public void DeleteConnectivityTestRequestObject()
        {
            // Snippet: DeleteConnectivityTest(DeleteConnectivityTestRequest, CallSettings)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = ReachabilityServiceClient.Create();
            // Initialize request argument(s)
            DeleteConnectivityTestRequest request = new DeleteConnectivityTestRequest { Name = "", };
            // Make the request
            Operation<Empty, OperationMetadata> response = reachabilityServiceClient.DeleteConnectivityTest(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = reachabilityServiceClient.PollOnceDeleteConnectivityTest(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteConnectivityTestAsync</summary>
        public async Task DeleteConnectivityTestRequestObjectAsync()
        {
            // Snippet: DeleteConnectivityTestAsync(DeleteConnectivityTestRequest, CallSettings)
            // Additional: DeleteConnectivityTestAsync(DeleteConnectivityTestRequest, CancellationToken)
            // Create client
            ReachabilityServiceClient reachabilityServiceClient = await ReachabilityServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteConnectivityTestRequest request = new DeleteConnectivityTestRequest { Name = "", };
            // Make the request
            Operation<Empty, OperationMetadata> response = await reachabilityServiceClient.DeleteConnectivityTestAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = await reachabilityServiceClient.PollOnceDeleteConnectivityTestAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
