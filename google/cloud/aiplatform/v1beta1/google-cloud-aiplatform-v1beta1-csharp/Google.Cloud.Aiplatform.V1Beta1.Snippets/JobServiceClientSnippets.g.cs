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

namespace Google.Cloud.Aiplatform.V1Beta1.Snippets
{
    using Google.Api.Gax;
    using Google.Api.Gax.ResourceNames;
    using Google.LongRunning;
    using Google.Protobuf.WellKnownTypes;
    using System;
    using System.Linq;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedJobServiceClientSnippets
    {
        /// <summary>Snippet for CreateCustomJob</summary>
        public void CreateCustomJobRequestObject()
        {
            // Snippet: CreateCustomJob(CreateCustomJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CreateCustomJobRequest request = new CreateCustomJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                CustomJob = new CustomJob(),
            };
            // Make the request
            CustomJob response = jobServiceClient.CreateCustomJob(request);
            // End snippet
        }

        /// <summary>Snippet for CreateCustomJobAsync</summary>
        public async Task CreateCustomJobRequestObjectAsync()
        {
            // Snippet: CreateCustomJobAsync(CreateCustomJobRequest, CallSettings)
            // Additional: CreateCustomJobAsync(CreateCustomJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateCustomJobRequest request = new CreateCustomJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                CustomJob = new CustomJob(),
            };
            // Make the request
            CustomJob response = await jobServiceClient.CreateCustomJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateCustomJob</summary>
        public void CreateCustomJob()
        {
            // Snippet: CreateCustomJob(string, CustomJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            CustomJob customJob = new CustomJob();
            // Make the request
            CustomJob response = jobServiceClient.CreateCustomJob(parent, customJob);
            // End snippet
        }

        /// <summary>Snippet for CreateCustomJobAsync</summary>
        public async Task CreateCustomJobAsync()
        {
            // Snippet: CreateCustomJobAsync(string, CustomJob, CallSettings)
            // Additional: CreateCustomJobAsync(string, CustomJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            CustomJob customJob = new CustomJob();
            // Make the request
            CustomJob response = await jobServiceClient.CreateCustomJobAsync(parent, customJob);
            // End snippet
        }

        /// <summary>Snippet for CreateCustomJob</summary>
        public void CreateCustomJobResourceNames()
        {
            // Snippet: CreateCustomJob(LocationName, CustomJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            CustomJob customJob = new CustomJob();
            // Make the request
            CustomJob response = jobServiceClient.CreateCustomJob(parent, customJob);
            // End snippet
        }

        /// <summary>Snippet for CreateCustomJobAsync</summary>
        public async Task CreateCustomJobResourceNamesAsync()
        {
            // Snippet: CreateCustomJobAsync(LocationName, CustomJob, CallSettings)
            // Additional: CreateCustomJobAsync(LocationName, CustomJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            CustomJob customJob = new CustomJob();
            // Make the request
            CustomJob response = await jobServiceClient.CreateCustomJobAsync(parent, customJob);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJob</summary>
        public void GetCustomJobRequestObject()
        {
            // Snippet: GetCustomJob(GetCustomJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            GetCustomJobRequest request = new GetCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            CustomJob response = jobServiceClient.GetCustomJob(request);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJobAsync</summary>
        public async Task GetCustomJobRequestObjectAsync()
        {
            // Snippet: GetCustomJobAsync(GetCustomJobRequest, CallSettings)
            // Additional: GetCustomJobAsync(GetCustomJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetCustomJobRequest request = new GetCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            CustomJob response = await jobServiceClient.GetCustomJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJob</summary>
        public void GetCustomJob()
        {
            // Snippet: GetCustomJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            CustomJob response = jobServiceClient.GetCustomJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJobAsync</summary>
        public async Task GetCustomJobAsync()
        {
            // Snippet: GetCustomJobAsync(string, CallSettings)
            // Additional: GetCustomJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            CustomJob response = await jobServiceClient.GetCustomJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJob</summary>
        public void GetCustomJobResourceNames()
        {
            // Snippet: GetCustomJob(CustomJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            CustomJob response = jobServiceClient.GetCustomJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetCustomJobAsync</summary>
        public async Task GetCustomJobResourceNamesAsync()
        {
            // Snippet: GetCustomJobAsync(CustomJobName, CallSettings)
            // Additional: GetCustomJobAsync(CustomJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            CustomJob response = await jobServiceClient.GetCustomJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public void ListCustomJobsRequestObject()
        {
            // Snippet: ListCustomJobs(ListCustomJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            ListCustomJobsRequest request = new ListCustomJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobs(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (CustomJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListCustomJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public async Task ListCustomJobsRequestObjectAsync()
        {
            // Snippet: ListCustomJobsAsync(ListCustomJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListCustomJobsRequest request = new ListCustomJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((CustomJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListCustomJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public void ListCustomJobs()
        {
            // Snippet: ListCustomJobs(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (CustomJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListCustomJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public async Task ListCustomJobsAsync()
        {
            // Snippet: ListCustomJobsAsync(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((CustomJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListCustomJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public void ListCustomJobsResourceNames()
        {
            // Snippet: ListCustomJobs(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (CustomJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListCustomJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListCustomJobs</summary>
        public async Task ListCustomJobsResourceNamesAsync()
        {
            // Snippet: ListCustomJobsAsync(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedAsyncEnumerable<ListCustomJobsResponse, CustomJob> response = jobServiceClient.ListCustomJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((CustomJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListCustomJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (CustomJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<CustomJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (CustomJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJob</summary>
        public void DeleteCustomJobRequestObject()
        {
            // Snippet: DeleteCustomJob(DeleteCustomJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DeleteCustomJobRequest request = new DeleteCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteCustomJob(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteCustomJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJobAsync</summary>
        public async Task DeleteCustomJobRequestObjectAsync()
        {
            // Snippet: DeleteCustomJobAsync(DeleteCustomJobRequest, CallSettings)
            // Additional: DeleteCustomJobAsync(DeleteCustomJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteCustomJobRequest request = new DeleteCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteCustomJobAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteCustomJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJob</summary>
        public void DeleteCustomJob()
        {
            // Snippet: DeleteCustomJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteCustomJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteCustomJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJobAsync</summary>
        public async Task DeleteCustomJobAsync()
        {
            // Snippet: DeleteCustomJobAsync(string, CallSettings)
            // Additional: DeleteCustomJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteCustomJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteCustomJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJob</summary>
        public void DeleteCustomJobResourceNames()
        {
            // Snippet: DeleteCustomJob(CustomJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteCustomJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteCustomJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteCustomJobAsync</summary>
        public async Task DeleteCustomJobResourceNamesAsync()
        {
            // Snippet: DeleteCustomJobAsync(CustomJobName, CallSettings)
            // Additional: DeleteCustomJobAsync(CustomJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteCustomJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteCustomJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJob</summary>
        public void CancelCustomJobRequestObject()
        {
            // Snippet: CancelCustomJob(CancelCustomJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CancelCustomJobRequest request = new CancelCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            jobServiceClient.CancelCustomJob(request);
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJobAsync</summary>
        public async Task CancelCustomJobRequestObjectAsync()
        {
            // Snippet: CancelCustomJobAsync(CancelCustomJobRequest, CallSettings)
            // Additional: CancelCustomJobAsync(CancelCustomJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CancelCustomJobRequest request = new CancelCustomJobRequest
            {
                CustomJobName = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]"),
            };
            // Make the request
            await jobServiceClient.CancelCustomJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJob</summary>
        public void CancelCustomJob()
        {
            // Snippet: CancelCustomJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            jobServiceClient.CancelCustomJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJobAsync</summary>
        public async Task CancelCustomJobAsync()
        {
            // Snippet: CancelCustomJobAsync(string, CallSettings)
            // Additional: CancelCustomJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/customJobs/[CUSTOM_JOB]";
            // Make the request
            await jobServiceClient.CancelCustomJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJob</summary>
        public void CancelCustomJobResourceNames()
        {
            // Snippet: CancelCustomJob(CustomJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            jobServiceClient.CancelCustomJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelCustomJobAsync</summary>
        public async Task CancelCustomJobResourceNamesAsync()
        {
            // Snippet: CancelCustomJobAsync(CustomJobName, CallSettings)
            // Additional: CancelCustomJobAsync(CustomJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CustomJobName name = CustomJobName.FromProjectLocationCustomJob("[PROJECT]", "[LOCATION]", "[CUSTOM_JOB]");
            // Make the request
            await jobServiceClient.CancelCustomJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJob</summary>
        public void CreateDataLabelingJobRequestObject()
        {
            // Snippet: CreateDataLabelingJob(CreateDataLabelingJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CreateDataLabelingJobRequest request = new CreateDataLabelingJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                DataLabelingJob = new DataLabelingJob(),
            };
            // Make the request
            DataLabelingJob response = jobServiceClient.CreateDataLabelingJob(request);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJobAsync</summary>
        public async Task CreateDataLabelingJobRequestObjectAsync()
        {
            // Snippet: CreateDataLabelingJobAsync(CreateDataLabelingJobRequest, CallSettings)
            // Additional: CreateDataLabelingJobAsync(CreateDataLabelingJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateDataLabelingJobRequest request = new CreateDataLabelingJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                DataLabelingJob = new DataLabelingJob(),
            };
            // Make the request
            DataLabelingJob response = await jobServiceClient.CreateDataLabelingJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJob</summary>
        public void CreateDataLabelingJob()
        {
            // Snippet: CreateDataLabelingJob(string, DataLabelingJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            DataLabelingJob dataLabelingJob = new DataLabelingJob();
            // Make the request
            DataLabelingJob response = jobServiceClient.CreateDataLabelingJob(parent, dataLabelingJob);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJobAsync</summary>
        public async Task CreateDataLabelingJobAsync()
        {
            // Snippet: CreateDataLabelingJobAsync(string, DataLabelingJob, CallSettings)
            // Additional: CreateDataLabelingJobAsync(string, DataLabelingJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            DataLabelingJob dataLabelingJob = new DataLabelingJob();
            // Make the request
            DataLabelingJob response = await jobServiceClient.CreateDataLabelingJobAsync(parent, dataLabelingJob);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJob</summary>
        public void CreateDataLabelingJobResourceNames()
        {
            // Snippet: CreateDataLabelingJob(LocationName, DataLabelingJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            DataLabelingJob dataLabelingJob = new DataLabelingJob();
            // Make the request
            DataLabelingJob response = jobServiceClient.CreateDataLabelingJob(parent, dataLabelingJob);
            // End snippet
        }

        /// <summary>Snippet for CreateDataLabelingJobAsync</summary>
        public async Task CreateDataLabelingJobResourceNamesAsync()
        {
            // Snippet: CreateDataLabelingJobAsync(LocationName, DataLabelingJob, CallSettings)
            // Additional: CreateDataLabelingJobAsync(LocationName, DataLabelingJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            DataLabelingJob dataLabelingJob = new DataLabelingJob();
            // Make the request
            DataLabelingJob response = await jobServiceClient.CreateDataLabelingJobAsync(parent, dataLabelingJob);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJob</summary>
        public void GetDataLabelingJobRequestObject()
        {
            // Snippet: GetDataLabelingJob(GetDataLabelingJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            GetDataLabelingJobRequest request = new GetDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            DataLabelingJob response = jobServiceClient.GetDataLabelingJob(request);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJobAsync</summary>
        public async Task GetDataLabelingJobRequestObjectAsync()
        {
            // Snippet: GetDataLabelingJobAsync(GetDataLabelingJobRequest, CallSettings)
            // Additional: GetDataLabelingJobAsync(GetDataLabelingJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetDataLabelingJobRequest request = new GetDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            DataLabelingJob response = await jobServiceClient.GetDataLabelingJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJob</summary>
        public void GetDataLabelingJob()
        {
            // Snippet: GetDataLabelingJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            DataLabelingJob response = jobServiceClient.GetDataLabelingJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJobAsync</summary>
        public async Task GetDataLabelingJobAsync()
        {
            // Snippet: GetDataLabelingJobAsync(string, CallSettings)
            // Additional: GetDataLabelingJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            DataLabelingJob response = await jobServiceClient.GetDataLabelingJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJob</summary>
        public void GetDataLabelingJobResourceNames()
        {
            // Snippet: GetDataLabelingJob(DataLabelingJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            DataLabelingJob response = jobServiceClient.GetDataLabelingJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetDataLabelingJobAsync</summary>
        public async Task GetDataLabelingJobResourceNamesAsync()
        {
            // Snippet: GetDataLabelingJobAsync(DataLabelingJobName, CallSettings)
            // Additional: GetDataLabelingJobAsync(DataLabelingJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            DataLabelingJob response = await jobServiceClient.GetDataLabelingJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public void ListDataLabelingJobsRequestObject()
        {
            // Snippet: ListDataLabelingJobs(ListDataLabelingJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            ListDataLabelingJobsRequest request = new ListDataLabelingJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
                OrderBy = "",
            };
            // Make the request
            PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobs(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DataLabelingJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDataLabelingJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public async Task ListDataLabelingJobsRequestObjectAsync()
        {
            // Snippet: ListDataLabelingJobsAsync(ListDataLabelingJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListDataLabelingJobsRequest request = new ListDataLabelingJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
                OrderBy = "",
            };
            // Make the request
            PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DataLabelingJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDataLabelingJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public void ListDataLabelingJobs()
        {
            // Snippet: ListDataLabelingJobs(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DataLabelingJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDataLabelingJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public async Task ListDataLabelingJobsAsync()
        {
            // Snippet: ListDataLabelingJobsAsync(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DataLabelingJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDataLabelingJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public void ListDataLabelingJobsResourceNames()
        {
            // Snippet: ListDataLabelingJobs(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (DataLabelingJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListDataLabelingJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListDataLabelingJobs</summary>
        public async Task ListDataLabelingJobsResourceNamesAsync()
        {
            // Snippet: ListDataLabelingJobsAsync(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedAsyncEnumerable<ListDataLabelingJobsResponse, DataLabelingJob> response = jobServiceClient.ListDataLabelingJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((DataLabelingJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListDataLabelingJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (DataLabelingJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<DataLabelingJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (DataLabelingJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJob</summary>
        public void DeleteDataLabelingJobRequestObject()
        {
            // Snippet: DeleteDataLabelingJob(DeleteDataLabelingJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DeleteDataLabelingJobRequest request = new DeleteDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteDataLabelingJob(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteDataLabelingJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJobAsync</summary>
        public async Task DeleteDataLabelingJobRequestObjectAsync()
        {
            // Snippet: DeleteDataLabelingJobAsync(DeleteDataLabelingJobRequest, CallSettings)
            // Additional: DeleteDataLabelingJobAsync(DeleteDataLabelingJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteDataLabelingJobRequest request = new DeleteDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteDataLabelingJobAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteDataLabelingJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJob</summary>
        public void DeleteDataLabelingJob()
        {
            // Snippet: DeleteDataLabelingJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteDataLabelingJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteDataLabelingJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJobAsync</summary>
        public async Task DeleteDataLabelingJobAsync()
        {
            // Snippet: DeleteDataLabelingJobAsync(string, CallSettings)
            // Additional: DeleteDataLabelingJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteDataLabelingJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteDataLabelingJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJob</summary>
        public void DeleteDataLabelingJobResourceNames()
        {
            // Snippet: DeleteDataLabelingJob(DataLabelingJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteDataLabelingJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteDataLabelingJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteDataLabelingJobAsync</summary>
        public async Task DeleteDataLabelingJobResourceNamesAsync()
        {
            // Snippet: DeleteDataLabelingJobAsync(DataLabelingJobName, CallSettings)
            // Additional: DeleteDataLabelingJobAsync(DataLabelingJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteDataLabelingJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteDataLabelingJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJob</summary>
        public void CancelDataLabelingJobRequestObject()
        {
            // Snippet: CancelDataLabelingJob(CancelDataLabelingJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CancelDataLabelingJobRequest request = new CancelDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            jobServiceClient.CancelDataLabelingJob(request);
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJobAsync</summary>
        public async Task CancelDataLabelingJobRequestObjectAsync()
        {
            // Snippet: CancelDataLabelingJobAsync(CancelDataLabelingJobRequest, CallSettings)
            // Additional: CancelDataLabelingJobAsync(CancelDataLabelingJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CancelDataLabelingJobRequest request = new CancelDataLabelingJobRequest
            {
                DataLabelingJobName = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]"),
            };
            // Make the request
            await jobServiceClient.CancelDataLabelingJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJob</summary>
        public void CancelDataLabelingJob()
        {
            // Snippet: CancelDataLabelingJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            jobServiceClient.CancelDataLabelingJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJobAsync</summary>
        public async Task CancelDataLabelingJobAsync()
        {
            // Snippet: CancelDataLabelingJobAsync(string, CallSettings)
            // Additional: CancelDataLabelingJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/dataLabelingJobs/[DATA_LABELING_JOB]";
            // Make the request
            await jobServiceClient.CancelDataLabelingJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJob</summary>
        public void CancelDataLabelingJobResourceNames()
        {
            // Snippet: CancelDataLabelingJob(DataLabelingJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            jobServiceClient.CancelDataLabelingJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelDataLabelingJobAsync</summary>
        public async Task CancelDataLabelingJobResourceNamesAsync()
        {
            // Snippet: CancelDataLabelingJobAsync(DataLabelingJobName, CallSettings)
            // Additional: CancelDataLabelingJobAsync(DataLabelingJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DataLabelingJobName name = DataLabelingJobName.FromProjectLocationDataLabelingJob("[PROJECT]", "[LOCATION]", "[DATA_LABELING_JOB]");
            // Make the request
            await jobServiceClient.CancelDataLabelingJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJob</summary>
        public void CreateHyperparameterTuningJobRequestObject()
        {
            // Snippet: CreateHyperparameterTuningJob(CreateHyperparameterTuningJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CreateHyperparameterTuningJobRequest request = new CreateHyperparameterTuningJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                HyperparameterTuningJob = new HyperparameterTuningJob(),
            };
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.CreateHyperparameterTuningJob(request);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJobAsync</summary>
        public async Task CreateHyperparameterTuningJobRequestObjectAsync()
        {
            // Snippet: CreateHyperparameterTuningJobAsync(CreateHyperparameterTuningJobRequest, CallSettings)
            // Additional: CreateHyperparameterTuningJobAsync(CreateHyperparameterTuningJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateHyperparameterTuningJobRequest request = new CreateHyperparameterTuningJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                HyperparameterTuningJob = new HyperparameterTuningJob(),
            };
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.CreateHyperparameterTuningJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJob</summary>
        public void CreateHyperparameterTuningJob()
        {
            // Snippet: CreateHyperparameterTuningJob(string, HyperparameterTuningJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            HyperparameterTuningJob hyperparameterTuningJob = new HyperparameterTuningJob();
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.CreateHyperparameterTuningJob(parent, hyperparameterTuningJob);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJobAsync</summary>
        public async Task CreateHyperparameterTuningJobAsync()
        {
            // Snippet: CreateHyperparameterTuningJobAsync(string, HyperparameterTuningJob, CallSettings)
            // Additional: CreateHyperparameterTuningJobAsync(string, HyperparameterTuningJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            HyperparameterTuningJob hyperparameterTuningJob = new HyperparameterTuningJob();
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.CreateHyperparameterTuningJobAsync(parent, hyperparameterTuningJob);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJob</summary>
        public void CreateHyperparameterTuningJobResourceNames()
        {
            // Snippet: CreateHyperparameterTuningJob(LocationName, HyperparameterTuningJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            HyperparameterTuningJob hyperparameterTuningJob = new HyperparameterTuningJob();
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.CreateHyperparameterTuningJob(parent, hyperparameterTuningJob);
            // End snippet
        }

        /// <summary>Snippet for CreateHyperparameterTuningJobAsync</summary>
        public async Task CreateHyperparameterTuningJobResourceNamesAsync()
        {
            // Snippet: CreateHyperparameterTuningJobAsync(LocationName, HyperparameterTuningJob, CallSettings)
            // Additional: CreateHyperparameterTuningJobAsync(LocationName, HyperparameterTuningJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            HyperparameterTuningJob hyperparameterTuningJob = new HyperparameterTuningJob();
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.CreateHyperparameterTuningJobAsync(parent, hyperparameterTuningJob);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJob</summary>
        public void GetHyperparameterTuningJobRequestObject()
        {
            // Snippet: GetHyperparameterTuningJob(GetHyperparameterTuningJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            GetHyperparameterTuningJobRequest request = new GetHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.GetHyperparameterTuningJob(request);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJobAsync</summary>
        public async Task GetHyperparameterTuningJobRequestObjectAsync()
        {
            // Snippet: GetHyperparameterTuningJobAsync(GetHyperparameterTuningJobRequest, CallSettings)
            // Additional: GetHyperparameterTuningJobAsync(GetHyperparameterTuningJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetHyperparameterTuningJobRequest request = new GetHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.GetHyperparameterTuningJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJob</summary>
        public void GetHyperparameterTuningJob()
        {
            // Snippet: GetHyperparameterTuningJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.GetHyperparameterTuningJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJobAsync</summary>
        public async Task GetHyperparameterTuningJobAsync()
        {
            // Snippet: GetHyperparameterTuningJobAsync(string, CallSettings)
            // Additional: GetHyperparameterTuningJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.GetHyperparameterTuningJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJob</summary>
        public void GetHyperparameterTuningJobResourceNames()
        {
            // Snippet: GetHyperparameterTuningJob(HyperparameterTuningJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            HyperparameterTuningJob response = jobServiceClient.GetHyperparameterTuningJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetHyperparameterTuningJobAsync</summary>
        public async Task GetHyperparameterTuningJobResourceNamesAsync()
        {
            // Snippet: GetHyperparameterTuningJobAsync(HyperparameterTuningJobName, CallSettings)
            // Additional: GetHyperparameterTuningJobAsync(HyperparameterTuningJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            HyperparameterTuningJob response = await jobServiceClient.GetHyperparameterTuningJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public void ListHyperparameterTuningJobsRequestObject()
        {
            // Snippet: ListHyperparameterTuningJobs(ListHyperparameterTuningJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            ListHyperparameterTuningJobsRequest request = new ListHyperparameterTuningJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobs(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (HyperparameterTuningJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListHyperparameterTuningJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public async Task ListHyperparameterTuningJobsRequestObjectAsync()
        {
            // Snippet: ListHyperparameterTuningJobsAsync(ListHyperparameterTuningJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListHyperparameterTuningJobsRequest request = new ListHyperparameterTuningJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((HyperparameterTuningJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListHyperparameterTuningJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public void ListHyperparameterTuningJobs()
        {
            // Snippet: ListHyperparameterTuningJobs(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (HyperparameterTuningJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListHyperparameterTuningJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public async Task ListHyperparameterTuningJobsAsync()
        {
            // Snippet: ListHyperparameterTuningJobsAsync(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((HyperparameterTuningJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListHyperparameterTuningJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public void ListHyperparameterTuningJobsResourceNames()
        {
            // Snippet: ListHyperparameterTuningJobs(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (HyperparameterTuningJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListHyperparameterTuningJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListHyperparameterTuningJobs</summary>
        public async Task ListHyperparameterTuningJobsResourceNamesAsync()
        {
            // Snippet: ListHyperparameterTuningJobsAsync(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedAsyncEnumerable<ListHyperparameterTuningJobsResponse, HyperparameterTuningJob> response = jobServiceClient.ListHyperparameterTuningJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((HyperparameterTuningJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListHyperparameterTuningJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (HyperparameterTuningJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<HyperparameterTuningJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (HyperparameterTuningJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJob</summary>
        public void DeleteHyperparameterTuningJobRequestObject()
        {
            // Snippet: DeleteHyperparameterTuningJob(DeleteHyperparameterTuningJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DeleteHyperparameterTuningJobRequest request = new DeleteHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteHyperparameterTuningJob(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteHyperparameterTuningJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJobAsync</summary>
        public async Task DeleteHyperparameterTuningJobRequestObjectAsync()
        {
            // Snippet: DeleteHyperparameterTuningJobAsync(DeleteHyperparameterTuningJobRequest, CallSettings)
            // Additional: DeleteHyperparameterTuningJobAsync(DeleteHyperparameterTuningJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteHyperparameterTuningJobRequest request = new DeleteHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteHyperparameterTuningJobAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteHyperparameterTuningJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJob</summary>
        public void DeleteHyperparameterTuningJob()
        {
            // Snippet: DeleteHyperparameterTuningJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteHyperparameterTuningJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteHyperparameterTuningJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJobAsync</summary>
        public async Task DeleteHyperparameterTuningJobAsync()
        {
            // Snippet: DeleteHyperparameterTuningJobAsync(string, CallSettings)
            // Additional: DeleteHyperparameterTuningJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteHyperparameterTuningJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteHyperparameterTuningJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJob</summary>
        public void DeleteHyperparameterTuningJobResourceNames()
        {
            // Snippet: DeleteHyperparameterTuningJob(HyperparameterTuningJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteHyperparameterTuningJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteHyperparameterTuningJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteHyperparameterTuningJobAsync</summary>
        public async Task DeleteHyperparameterTuningJobResourceNamesAsync()
        {
            // Snippet: DeleteHyperparameterTuningJobAsync(HyperparameterTuningJobName, CallSettings)
            // Additional: DeleteHyperparameterTuningJobAsync(HyperparameterTuningJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteHyperparameterTuningJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteHyperparameterTuningJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJob</summary>
        public void CancelHyperparameterTuningJobRequestObject()
        {
            // Snippet: CancelHyperparameterTuningJob(CancelHyperparameterTuningJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CancelHyperparameterTuningJobRequest request = new CancelHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            jobServiceClient.CancelHyperparameterTuningJob(request);
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJobAsync</summary>
        public async Task CancelHyperparameterTuningJobRequestObjectAsync()
        {
            // Snippet: CancelHyperparameterTuningJobAsync(CancelHyperparameterTuningJobRequest, CallSettings)
            // Additional: CancelHyperparameterTuningJobAsync(CancelHyperparameterTuningJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CancelHyperparameterTuningJobRequest request = new CancelHyperparameterTuningJobRequest
            {
                HyperparameterTuningJobName = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]"),
            };
            // Make the request
            await jobServiceClient.CancelHyperparameterTuningJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJob</summary>
        public void CancelHyperparameterTuningJob()
        {
            // Snippet: CancelHyperparameterTuningJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            jobServiceClient.CancelHyperparameterTuningJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJobAsync</summary>
        public async Task CancelHyperparameterTuningJobAsync()
        {
            // Snippet: CancelHyperparameterTuningJobAsync(string, CallSettings)
            // Additional: CancelHyperparameterTuningJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/hyperparameterTuningJobs/[HYPERPARAMETER_TUNING_JOB]";
            // Make the request
            await jobServiceClient.CancelHyperparameterTuningJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJob</summary>
        public void CancelHyperparameterTuningJobResourceNames()
        {
            // Snippet: CancelHyperparameterTuningJob(HyperparameterTuningJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            jobServiceClient.CancelHyperparameterTuningJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelHyperparameterTuningJobAsync</summary>
        public async Task CancelHyperparameterTuningJobResourceNamesAsync()
        {
            // Snippet: CancelHyperparameterTuningJobAsync(HyperparameterTuningJobName, CallSettings)
            // Additional: CancelHyperparameterTuningJobAsync(HyperparameterTuningJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            HyperparameterTuningJobName name = HyperparameterTuningJobName.FromProjectLocationHyperparameterTuningJob("[PROJECT]", "[LOCATION]", "[HYPERPARAMETER_TUNING_JOB]");
            // Make the request
            await jobServiceClient.CancelHyperparameterTuningJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJob</summary>
        public void CreateBatchPredictionJobRequestObject()
        {
            // Snippet: CreateBatchPredictionJob(CreateBatchPredictionJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CreateBatchPredictionJobRequest request = new CreateBatchPredictionJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                BatchPredictionJob = new BatchPredictionJob(),
            };
            // Make the request
            BatchPredictionJob response = jobServiceClient.CreateBatchPredictionJob(request);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJobAsync</summary>
        public async Task CreateBatchPredictionJobRequestObjectAsync()
        {
            // Snippet: CreateBatchPredictionJobAsync(CreateBatchPredictionJobRequest, CallSettings)
            // Additional: CreateBatchPredictionJobAsync(CreateBatchPredictionJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CreateBatchPredictionJobRequest request = new CreateBatchPredictionJobRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                BatchPredictionJob = new BatchPredictionJob(),
            };
            // Make the request
            BatchPredictionJob response = await jobServiceClient.CreateBatchPredictionJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJob</summary>
        public void CreateBatchPredictionJob()
        {
            // Snippet: CreateBatchPredictionJob(string, BatchPredictionJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            BatchPredictionJob batchPredictionJob = new BatchPredictionJob();
            // Make the request
            BatchPredictionJob response = jobServiceClient.CreateBatchPredictionJob(parent, batchPredictionJob);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJobAsync</summary>
        public async Task CreateBatchPredictionJobAsync()
        {
            // Snippet: CreateBatchPredictionJobAsync(string, BatchPredictionJob, CallSettings)
            // Additional: CreateBatchPredictionJobAsync(string, BatchPredictionJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            BatchPredictionJob batchPredictionJob = new BatchPredictionJob();
            // Make the request
            BatchPredictionJob response = await jobServiceClient.CreateBatchPredictionJobAsync(parent, batchPredictionJob);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJob</summary>
        public void CreateBatchPredictionJobResourceNames()
        {
            // Snippet: CreateBatchPredictionJob(LocationName, BatchPredictionJob, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            BatchPredictionJob batchPredictionJob = new BatchPredictionJob();
            // Make the request
            BatchPredictionJob response = jobServiceClient.CreateBatchPredictionJob(parent, batchPredictionJob);
            // End snippet
        }

        /// <summary>Snippet for CreateBatchPredictionJobAsync</summary>
        public async Task CreateBatchPredictionJobResourceNamesAsync()
        {
            // Snippet: CreateBatchPredictionJobAsync(LocationName, BatchPredictionJob, CallSettings)
            // Additional: CreateBatchPredictionJobAsync(LocationName, BatchPredictionJob, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            BatchPredictionJob batchPredictionJob = new BatchPredictionJob();
            // Make the request
            BatchPredictionJob response = await jobServiceClient.CreateBatchPredictionJobAsync(parent, batchPredictionJob);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJob</summary>
        public void GetBatchPredictionJobRequestObject()
        {
            // Snippet: GetBatchPredictionJob(GetBatchPredictionJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            GetBatchPredictionJobRequest request = new GetBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            BatchPredictionJob response = jobServiceClient.GetBatchPredictionJob(request);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJobAsync</summary>
        public async Task GetBatchPredictionJobRequestObjectAsync()
        {
            // Snippet: GetBatchPredictionJobAsync(GetBatchPredictionJobRequest, CallSettings)
            // Additional: GetBatchPredictionJobAsync(GetBatchPredictionJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            GetBatchPredictionJobRequest request = new GetBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            BatchPredictionJob response = await jobServiceClient.GetBatchPredictionJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJob</summary>
        public void GetBatchPredictionJob()
        {
            // Snippet: GetBatchPredictionJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            BatchPredictionJob response = jobServiceClient.GetBatchPredictionJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJobAsync</summary>
        public async Task GetBatchPredictionJobAsync()
        {
            // Snippet: GetBatchPredictionJobAsync(string, CallSettings)
            // Additional: GetBatchPredictionJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            BatchPredictionJob response = await jobServiceClient.GetBatchPredictionJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJob</summary>
        public void GetBatchPredictionJobResourceNames()
        {
            // Snippet: GetBatchPredictionJob(BatchPredictionJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            BatchPredictionJob response = jobServiceClient.GetBatchPredictionJob(name);
            // End snippet
        }

        /// <summary>Snippet for GetBatchPredictionJobAsync</summary>
        public async Task GetBatchPredictionJobResourceNamesAsync()
        {
            // Snippet: GetBatchPredictionJobAsync(BatchPredictionJobName, CallSettings)
            // Additional: GetBatchPredictionJobAsync(BatchPredictionJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            BatchPredictionJob response = await jobServiceClient.GetBatchPredictionJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public void ListBatchPredictionJobsRequestObject()
        {
            // Snippet: ListBatchPredictionJobs(ListBatchPredictionJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            ListBatchPredictionJobsRequest request = new ListBatchPredictionJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobs(request);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (BatchPredictionJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListBatchPredictionJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public async Task ListBatchPredictionJobsRequestObjectAsync()
        {
            // Snippet: ListBatchPredictionJobsAsync(ListBatchPredictionJobsRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            ListBatchPredictionJobsRequest request = new ListBatchPredictionJobsRequest
            {
                ParentAsLocationName = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]"),
                Filter = "",
                ReadMask = new FieldMask(),
            };
            // Make the request
            PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobsAsync(request);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((BatchPredictionJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListBatchPredictionJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public void ListBatchPredictionJobs()
        {
            // Snippet: ListBatchPredictionJobs(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (BatchPredictionJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListBatchPredictionJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public async Task ListBatchPredictionJobsAsync()
        {
            // Snippet: ListBatchPredictionJobsAsync(string, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/locations/[LOCATION]";
            // Make the request
            PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((BatchPredictionJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListBatchPredictionJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public void ListBatchPredictionJobsResourceNames()
        {
            // Snippet: ListBatchPredictionJobs(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobs(parent);

            // Iterate over all response items, lazily performing RPCs as required
            foreach (BatchPredictionJob item in response)
            {
                // Do something with each item
                Console.WriteLine(item);
            }

            // Or iterate over pages (of server-defined size), performing one RPC per page
            foreach (ListBatchPredictionJobsResponse page in response.AsRawResponses())
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            }

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = response.ReadPage(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for ListBatchPredictionJobs</summary>
        public async Task ListBatchPredictionJobsResourceNamesAsync()
        {
            // Snippet: ListBatchPredictionJobsAsync(LocationName, string, int?, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            LocationName parent = LocationName.FromProjectLocation("[PROJECT]", "[LOCATION]");
            // Make the request
            PagedAsyncEnumerable<ListBatchPredictionJobsResponse, BatchPredictionJob> response = jobServiceClient.ListBatchPredictionJobsAsync(parent);

            // Iterate over all response items, lazily performing RPCs as required
            await response.ForEachAsync((BatchPredictionJob item) =>
            {
                // Do something with each item
                Console.WriteLine(item);
            });

            // Or iterate over pages (of server-defined size), performing one RPC per page
            await response.AsRawResponses().ForEachAsync((ListBatchPredictionJobsResponse page) =>
            {
                // Do something with each page of items
                Console.WriteLine("A page of results:");
                foreach (BatchPredictionJob item in page)
                {
                    // Do something with each item
                    Console.WriteLine(item);
                }
            });

            // Or retrieve a single page of known size (unless it's the final page), performing as many RPCs as required
            int pageSize = 10;
            Page<BatchPredictionJob> singlePage = await response.ReadPageAsync(pageSize);
            // Do something with the page of items
            Console.WriteLine($"A page of {pageSize} results (unless it's the final page):");
            foreach (BatchPredictionJob item in singlePage)
            {
                // Do something with each item
                Console.WriteLine(item);
            }
            // Store the pageToken, for when the next page is required.
            string nextPageToken = singlePage.NextPageToken;
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJob</summary>
        public void DeleteBatchPredictionJobRequestObject()
        {
            // Snippet: DeleteBatchPredictionJob(DeleteBatchPredictionJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            DeleteBatchPredictionJobRequest request = new DeleteBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteBatchPredictionJob(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteBatchPredictionJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJobAsync</summary>
        public async Task DeleteBatchPredictionJobRequestObjectAsync()
        {
            // Snippet: DeleteBatchPredictionJobAsync(DeleteBatchPredictionJobRequest, CallSettings)
            // Additional: DeleteBatchPredictionJobAsync(DeleteBatchPredictionJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteBatchPredictionJobRequest request = new DeleteBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteBatchPredictionJobAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteBatchPredictionJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJob</summary>
        public void DeleteBatchPredictionJob()
        {
            // Snippet: DeleteBatchPredictionJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteBatchPredictionJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteBatchPredictionJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJobAsync</summary>
        public async Task DeleteBatchPredictionJobAsync()
        {
            // Snippet: DeleteBatchPredictionJobAsync(string, CallSettings)
            // Additional: DeleteBatchPredictionJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteBatchPredictionJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteBatchPredictionJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJob</summary>
        public void DeleteBatchPredictionJobResourceNames()
        {
            // Snippet: DeleteBatchPredictionJob(BatchPredictionJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = jobServiceClient.DeleteBatchPredictionJob(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = jobServiceClient.PollOnceDeleteBatchPredictionJob(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for DeleteBatchPredictionJobAsync</summary>
        public async Task DeleteBatchPredictionJobResourceNamesAsync()
        {
            // Snippet: DeleteBatchPredictionJobAsync(BatchPredictionJobName, CallSettings)
            // Additional: DeleteBatchPredictionJobAsync(BatchPredictionJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            Operation<Empty, DeleteOperationMetadata> response = await jobServiceClient.DeleteBatchPredictionJobAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<Empty, DeleteOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            Empty result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<Empty, DeleteOperationMetadata> retrievedResponse = await jobServiceClient.PollOnceDeleteBatchPredictionJobAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                Empty retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJob</summary>
        public void CancelBatchPredictionJobRequestObject()
        {
            // Snippet: CancelBatchPredictionJob(CancelBatchPredictionJobRequest, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            CancelBatchPredictionJobRequest request = new CancelBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            jobServiceClient.CancelBatchPredictionJob(request);
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJobAsync</summary>
        public async Task CancelBatchPredictionJobRequestObjectAsync()
        {
            // Snippet: CancelBatchPredictionJobAsync(CancelBatchPredictionJobRequest, CallSettings)
            // Additional: CancelBatchPredictionJobAsync(CancelBatchPredictionJobRequest, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            CancelBatchPredictionJobRequest request = new CancelBatchPredictionJobRequest
            {
                BatchPredictionJobName = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]"),
            };
            // Make the request
            await jobServiceClient.CancelBatchPredictionJobAsync(request);
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJob</summary>
        public void CancelBatchPredictionJob()
        {
            // Snippet: CancelBatchPredictionJob(string, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            jobServiceClient.CancelBatchPredictionJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJobAsync</summary>
        public async Task CancelBatchPredictionJobAsync()
        {
            // Snippet: CancelBatchPredictionJobAsync(string, CallSettings)
            // Additional: CancelBatchPredictionJobAsync(string, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/batchPredictionJobs/[BATCH_PREDICTION_JOB]";
            // Make the request
            await jobServiceClient.CancelBatchPredictionJobAsync(name);
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJob</summary>
        public void CancelBatchPredictionJobResourceNames()
        {
            // Snippet: CancelBatchPredictionJob(BatchPredictionJobName, CallSettings)
            // Create client
            JobServiceClient jobServiceClient = JobServiceClient.Create();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            jobServiceClient.CancelBatchPredictionJob(name);
            // End snippet
        }

        /// <summary>Snippet for CancelBatchPredictionJobAsync</summary>
        public async Task CancelBatchPredictionJobResourceNamesAsync()
        {
            // Snippet: CancelBatchPredictionJobAsync(BatchPredictionJobName, CallSettings)
            // Additional: CancelBatchPredictionJobAsync(BatchPredictionJobName, CancellationToken)
            // Create client
            JobServiceClient jobServiceClient = await JobServiceClient.CreateAsync();
            // Initialize request argument(s)
            BatchPredictionJobName name = BatchPredictionJobName.FromProjectLocationBatchPredictionJob("[PROJECT]", "[LOCATION]", "[BATCH_PREDICTION_JOB]");
            // Make the request
            await jobServiceClient.CancelBatchPredictionJobAsync(name);
            // End snippet
        }
    }
}
