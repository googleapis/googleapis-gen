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

namespace Google.Cloud.DataFusion.V1Beta1.Snippets
{
    using Google.Api.Gax;
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System;
    using System.Linq;
    using System.Threading.Tasks;
    using gcdv = Google.Cloud.DataFusion.V1Beta1;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedDataFusionClientSnippets
    {
        /// <summary>Snippet for ListAvailableVersions</summary>
        public void ListAvailableVersionsRequestObject()
        {
            // Snippet: ListAvailableVersions(ListAvailableVersionsRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            ListAvailableVersionsRequest request = new ListAvailableVersionsRequest
            {
                Parent = "",
                LatestPatchOnly = false,
            };
            // Make the request
            PagedEnumerable<ListAvailableVersionsResponse, gcdv::Version> response = dataFusionClient.ListAvailableVersions(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (gcdv::Version item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListAvailableVersionsResponse page in response.AsRawResponses())
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

        /// <summary>Snippet for ListAvailableVersionsAsync</summary>
        public async Task ListAvailableVersionsRequestObjectAsync()
        {
            // Snippet: ListAvailableVersionsAsync(ListAvailableVersionsRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            ListAvailableVersionsRequest request = new ListAvailableVersionsRequest
            {
                Parent = "",
                LatestPatchOnly = false,
            };
            // Make the request
            PagedAsyncEnumerable<ListAvailableVersionsResponse, gcdv::Version> response = dataFusionClient.ListAvailableVersionsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((gcdv::Version item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListAvailableVersionsResponse page) =>
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

        /// <summary>Snippet for ListAvailableVersions</summary>
        public void ListAvailableVersions()
        {
            // Snippet: ListAvailableVersions(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            PagedEnumerable<ListAvailableVersionsResponse, gcdv::Version> response = dataFusionClient.ListAvailableVersions(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (gcdv::Version item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListAvailableVersionsResponse page in response.AsRawResponses())
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

        /// <summary>Snippet for ListAvailableVersionsAsync</summary>
        public async Task ListAvailableVersionsAsync()
        {
            // Snippet: ListAvailableVersionsAsync(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            PagedAsyncEnumerable<ListAvailableVersionsResponse, gcdv::Version> response = dataFusionClient.ListAvailableVersionsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((gcdv::Version item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListAvailableVersionsResponse page) =>
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

        /// <summary>Snippet for ListInstances</summary>
        public void ListInstancesRequestObject()
        {
            // Snippet: ListInstances(ListInstancesRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            ListInstancesRequest request = new ListInstancesRequest
            {
                Parent = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedEnumerable<ListInstancesResponse, Instance> response = dataFusionClient.ListInstances(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Instance item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListInstancesResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Instance item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Instance> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Instance item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListInstancesAsync</summary>
        public async Task ListInstancesRequestObjectAsync()
        {
            // Snippet: ListInstancesAsync(ListInstancesRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            ListInstancesRequest request = new ListInstancesRequest
            {
                Parent = "",
                Filter = "",
                OrderBy = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListInstancesResponse, Instance> response = dataFusionClient.ListInstancesAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Instance item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListInstancesResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Instance item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Instance> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Instance item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for GetInstance</summary>
        public void GetInstanceRequestObject()
        {
            // Snippet: GetInstance(GetInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            GetInstanceRequest request = new GetInstanceRequest { Name = "", };
            // Make the request
            Instance response = dataFusionClient.GetInstance(request);
            // End snippet
        }

        /// <summary>Snippet for GetInstanceAsync</summary>
        public async Task GetInstanceRequestObjectAsync()
        {
            // Snippet: GetInstanceAsync(GetInstanceRequest, CallSettings)
            // Additional: GetInstanceAsync(GetInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            GetInstanceRequest request = new GetInstanceRequest { Name = "", };
            // Make the request
            Instance response = await dataFusionClient.GetInstanceAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateInstance</summary>
        public void CreateInstanceRequestObject()
        {
            // Snippet: CreateInstance(CreateInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            CreateInstanceRequest request = new CreateInstanceRequest
            {
                Parent = "",
                InstanceId = "",
                Instance = new Instance(),
            };
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.CreateInstance(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceCreateInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CreateInstanceAsync</summary>
        public async Task CreateInstanceRequestObjectAsync()
        {
            // Snippet: CreateInstanceAsync(CreateInstanceRequest, CallSettings)
            // Additional: CreateInstanceAsync(CreateInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            CreateInstanceRequest request = new CreateInstanceRequest
            {
                Parent = "",
                InstanceId = "",
                Instance = new Instance(),
            };
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.CreateInstanceAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceCreateInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CreateInstance</summary>
        public void CreateInstance()
        {
            // Snippet: CreateInstance(string, Instance, string, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "";
            Instance instance = new Instance();
            string instanceId = "";
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.CreateInstance(parent, instance, instanceId);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceCreateInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CreateInstanceAsync</summary>
        public async Task CreateInstanceAsync()
        {
            // Snippet: CreateInstanceAsync(string, Instance, string, CallSettings)
            // Additional: CreateInstanceAsync(string, Instance, string, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "";
            Instance instance = new Instance();
            string instanceId = "";
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.CreateInstanceAsync(parent, instance, instanceId);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceCreateInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteInstance</summary>
        public void DeleteInstanceRequestObject()
        {
            // Snippet: DeleteInstance(DeleteInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            DeleteInstanceRequest request = new DeleteInstanceRequest { Name = "", };
            // Make the request
            Operation<Empty, OperationMetadata> response = dataFusionClient.DeleteInstance(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceDeleteInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteInstanceAsync</summary>
        public async Task DeleteInstanceRequestObjectAsync()
        {
            // Snippet: DeleteInstanceAsync(DeleteInstanceRequest, CallSettings)
            // Additional: DeleteInstanceAsync(DeleteInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            DeleteInstanceRequest request = new DeleteInstanceRequest { Name = "", };
            // Make the request
            Operation<Empty, OperationMetadata> response = await dataFusionClient.DeleteInstanceAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceDeleteInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteInstance</summary>
        public void DeleteInstance()
        {
            // Snippet: DeleteInstance(string, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string name = "";
            // Make the request
            Operation<Empty, OperationMetadata> response = dataFusionClient.DeleteInstance(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceDeleteInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteInstanceAsync</summary>
        public async Task DeleteInstanceAsync()
        {
            // Snippet: DeleteInstanceAsync(string, CallSettings)
            // Additional: DeleteInstanceAsync(string, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string name = "";
            // Make the request
            Operation<Empty, OperationMetadata> response = await dataFusionClient.DeleteInstanceAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceDeleteInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateInstance</summary>
        public void UpdateInstanceRequestObject()
        {
            // Snippet: UpdateInstance(UpdateInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            UpdateInstanceRequest request = new UpdateInstanceRequest
            {
                Instance = new Instance(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.UpdateInstance(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceUpdateInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateInstanceAsync</summary>
        public async Task UpdateInstanceRequestObjectAsync()
        {
            // Snippet: UpdateInstanceAsync(UpdateInstanceRequest, CallSettings)
            // Additional: UpdateInstanceAsync(UpdateInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            UpdateInstanceRequest request = new UpdateInstanceRequest
            {
                Instance = new Instance(),
                UpdateMask = new FieldMask(),
            };
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.UpdateInstanceAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceUpdateInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateInstance</summary>
        public void UpdateInstance()
        {
            // Snippet: UpdateInstance(Instance, FieldMask, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            Instance instance = new Instance();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.UpdateInstance(instance, updateMask);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceUpdateInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpdateInstanceAsync</summary>
        public async Task UpdateInstanceAsync()
        {
            // Snippet: UpdateInstanceAsync(Instance, FieldMask, CallSettings)
            // Additional: UpdateInstanceAsync(Instance, FieldMask, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            Instance instance = new Instance();
            FieldMask updateMask = new FieldMask();
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.UpdateInstanceAsync(instance, updateMask);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceUpdateInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for RestartInstance</summary>
        public void RestartInstanceRequestObject()
        {
            // Snippet: RestartInstance(RestartInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            RestartInstanceRequest request = new RestartInstanceRequest { Name = "", };
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.RestartInstance(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceRestartInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for RestartInstanceAsync</summary>
        public async Task RestartInstanceRequestObjectAsync()
        {
            // Snippet: RestartInstanceAsync(RestartInstanceRequest, CallSettings)
            // Additional: RestartInstanceAsync(RestartInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            RestartInstanceRequest request = new RestartInstanceRequest { Name = "", };
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.RestartInstanceAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceRestartInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpgradeInstance</summary>
        public void UpgradeInstanceRequestObject()
        {
            // Snippet: UpgradeInstance(UpgradeInstanceRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            UpgradeInstanceRequest request = new UpgradeInstanceRequest { Name = "", };
            // Make the request
            Operation<Instance, OperationMetadata> response = dataFusionClient.UpgradeInstance(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = dataFusionClient.PollOnceUpgradeInstance(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for UpgradeInstanceAsync</summary>
        public async Task UpgradeInstanceRequestObjectAsync()
        {
            // Snippet: UpgradeInstanceAsync(UpgradeInstanceRequest, CallSettings)
            // Additional: UpgradeInstanceAsync(UpgradeInstanceRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            UpgradeInstanceRequest request = new UpgradeInstanceRequest { Name = "", };
            // Make the request
            Operation<Instance, OperationMetadata> response = await dataFusionClient.UpgradeInstanceAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Instance, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Instance result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Instance, OperationMetadata> retrievedResponse = await dataFusionClient.PollOnceUpgradeInstanceAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Instance retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for RemoveIamPolicy</summary>
        public void RemoveIamPolicyRequestObject()
        {
            // Snippet: RemoveIamPolicy(RemoveIamPolicyRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            RemoveIamPolicyRequest request = new RemoveIamPolicyRequest { Resource = "", };
            // Make the request
            RemoveIamPolicyResponse response = dataFusionClient.RemoveIamPolicy(request);
            // End snippet
        }

        /// <summary>Snippet for RemoveIamPolicyAsync</summary>
        public async Task RemoveIamPolicyRequestObjectAsync()
        {
            // Snippet: RemoveIamPolicyAsync(RemoveIamPolicyRequest, CallSettings)
            // Additional: RemoveIamPolicyAsync(RemoveIamPolicyRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            RemoveIamPolicyRequest request = new RemoveIamPolicyRequest { Resource = "", };
            // Make the request
            RemoveIamPolicyResponse response = await dataFusionClient.RemoveIamPolicyAsync(request);
            // End snippet
        }

        /// <summary>Snippet for ListNamespaces</summary>
        public void ListNamespacesRequestObject()
        {
            // Snippet: ListNamespaces(ListNamespacesRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            ListNamespacesRequest request = new ListNamespacesRequest
            {
                ParentAsInstanceName = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]"),
                View = NamespaceView.Unspecified,
            };
            // Make the request
            PagedEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespaces(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Namespace item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListNamespacesResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListNamespacesAsync</summary>
        public async Task ListNamespacesRequestObjectAsync()
        {
            // Snippet: ListNamespacesAsync(ListNamespacesRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            ListNamespacesRequest request = new ListNamespacesRequest
            {
                ParentAsInstanceName = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]"),
                View = NamespaceView.Unspecified,
            };
            // Make the request
            PagedAsyncEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespacesAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Namespace item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListNamespacesResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListNamespaces</summary>
        public void ListNamespaces()
        {
            // Snippet: ListNamespaces(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/instances/[INSTANCE]";
            // Make the request
            PagedEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespaces(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Namespace item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListNamespacesResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListNamespacesAsync</summary>
        public async Task ListNamespacesAsync()
        {
            // Snippet: ListNamespacesAsync(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/instances/[INSTANCE]";
            // Make the request
            PagedAsyncEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespacesAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Namespace item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListNamespacesResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListNamespaces</summary>
        public void ListNamespacesResourceNames()
        {
            // Snippet: ListNamespaces(InstanceName, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            InstanceName parent = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]");
            // Make the request
            PagedEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespaces(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (Namespace item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListNamespacesResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListNamespacesAsync</summary>
        public async Task ListNamespacesResourceNamesAsync()
        {
            // Snippet: ListNamespacesAsync(InstanceName, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            InstanceName parent = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]");
            // Make the request
            PagedAsyncEnumerable<ListNamespacesResponse, Namespace> response = dataFusionClient.ListNamespacesAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((Namespace item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListNamespacesResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (Namespace item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<Namespace> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (Namespace item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for AddDnsPeering</summary>
        public void AddDnsPeeringRequestObject()
        {
            // Snippet: AddDnsPeering(AddDnsPeeringRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            AddDnsPeeringRequest request = new AddDnsPeeringRequest
            {
                Parent = "",
                DnsPeering = new DnsPeering(),
            };
            // Make the request
            AddDnsPeeringResponse response = dataFusionClient.AddDnsPeering(request);
            // End snippet
        }

        /// <summary>Snippet for AddDnsPeeringAsync</summary>
        public async Task AddDnsPeeringRequestObjectAsync()
        {
            // Snippet: AddDnsPeeringAsync(AddDnsPeeringRequest, CallSettings)
            // Additional: AddDnsPeeringAsync(AddDnsPeeringRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            AddDnsPeeringRequest request = new AddDnsPeeringRequest
            {
                Parent = "",
                DnsPeering = new DnsPeering(),
            };
            // Make the request
            AddDnsPeeringResponse response = await dataFusionClient.AddDnsPeeringAsync(request);
            // End snippet
        }

        /// <summary>Snippet for AddDnsPeering</summary>
        public void AddDnsPeering()
        {
            // Snippet: AddDnsPeering(string, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            AddDnsPeeringResponse response = dataFusionClient.AddDnsPeering(parent);
            // End snippet
        }

        /// <summary>Snippet for AddDnsPeeringAsync</summary>
        public async Task AddDnsPeeringAsync()
        {
            // Snippet: AddDnsPeeringAsync(string, CallSettings)
            // Additional: AddDnsPeeringAsync(string, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            AddDnsPeeringResponse response = await dataFusionClient.AddDnsPeeringAsync(parent);
            // End snippet
        }

        /// <summary>Snippet for RemoveDnsPeering</summary>
        public void RemoveDnsPeeringRequestObject()
        {
            // Snippet: RemoveDnsPeering(RemoveDnsPeeringRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            RemoveDnsPeeringRequest request = new RemoveDnsPeeringRequest { Parent = "", Zone = "", };
            // Make the request
            RemoveDnsPeeringResponse response = dataFusionClient.RemoveDnsPeering(request);
            // End snippet
        }

        /// <summary>Snippet for RemoveDnsPeeringAsync</summary>
        public async Task RemoveDnsPeeringRequestObjectAsync()
        {
            // Snippet: RemoveDnsPeeringAsync(RemoveDnsPeeringRequest, CallSettings)
            // Additional: RemoveDnsPeeringAsync(RemoveDnsPeeringRequest, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            RemoveDnsPeeringRequest request = new RemoveDnsPeeringRequest { Parent = "", Zone = "", };
            // Make the request
            RemoveDnsPeeringResponse response = await dataFusionClient.RemoveDnsPeeringAsync(request);
            // End snippet
        }

        /// <summary>Snippet for RemoveDnsPeering</summary>
        public void RemoveDnsPeering()
        {
            // Snippet: RemoveDnsPeering(string, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            RemoveDnsPeeringResponse response = dataFusionClient.RemoveDnsPeering(parent);
            // End snippet
        }

        /// <summary>Snippet for RemoveDnsPeeringAsync</summary>
        public async Task RemoveDnsPeeringAsync()
        {
            // Snippet: RemoveDnsPeeringAsync(string, CallSettings)
            // Additional: RemoveDnsPeeringAsync(string, CancellationToken)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "";
            // Make the request
            RemoveDnsPeeringResponse response = await dataFusionClient.RemoveDnsPeeringAsync(parent);
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeerings</summary>
        public void ListDnsPeeringsRequestObject()
        {
            // Snippet: ListDnsPeerings(ListDnsPeeringsRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            ListDnsPeeringsRequest request = new ListDnsPeeringsRequest
            {
                ParentAsInstanceName = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]"),
            };
            // Make the request
            PagedEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeerings(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DnsPeering item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDnsPeeringsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeeringsAsync</summary>
        public async Task ListDnsPeeringsRequestObjectAsync()
        {
            // Snippet: ListDnsPeeringsAsync(ListDnsPeeringsRequest, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            ListDnsPeeringsRequest request = new ListDnsPeeringsRequest
            {
                ParentAsInstanceName = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]"),
            };
            // Make the request
            PagedAsyncEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeeringsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DnsPeering item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDnsPeeringsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeerings</summary>
        public void ListDnsPeerings()
        {
            // Snippet: ListDnsPeerings(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/instances/[INSTANCE]";
            // Make the request
            PagedEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeerings(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DnsPeering item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDnsPeeringsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeeringsAsync</summary>
        public async Task ListDnsPeeringsAsync()
        {
            // Snippet: ListDnsPeeringsAsync(string, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]/instances/[INSTANCE]";
            // Make the request
            PagedAsyncEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeeringsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DnsPeering item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDnsPeeringsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeerings</summary>
        public void ListDnsPeeringsResourceNames()
        {
            // Snippet: ListDnsPeerings(InstanceName, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = DataFusionClient.Create();
            // Initialize request argument(s)
            InstanceName parent = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]");
            // Make the request
            PagedEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeerings(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DnsPeering item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDnsPeeringsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDnsPeeringsAsync</summary>
        public async Task ListDnsPeeringsResourceNamesAsync()
        {
            // Snippet: ListDnsPeeringsAsync(InstanceName, string, int?, CallSettings)
            // Create client
            DataFusionClient dataFusionClient = await DataFusionClient.CreateAsync();
            // Initialize request argument(s)
            InstanceName parent = InstanceName.FromProjectLocationInstance("[PROJECT]", "[LOCATION]", "[INSTANCE]");
            // Make the request
            PagedAsyncEnumerable<ListDnsPeeringsResponse, DnsPeering> response = dataFusionClient.ListDnsPeeringsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DnsPeering item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDnsPeeringsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DnsPeering item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DnsPeering> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DnsPeering item in singlePage)
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
