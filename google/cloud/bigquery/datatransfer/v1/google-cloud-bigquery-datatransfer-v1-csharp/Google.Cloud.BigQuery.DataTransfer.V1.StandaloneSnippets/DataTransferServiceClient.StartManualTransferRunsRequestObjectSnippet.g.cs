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

namespace Google.Cloud.BigQuery.DataTransfer.V1.Snippets
{
    using Google.Cloud.BigQuery.DataTransfer.V1;

    public sealed partial class GeneratedDataTransferServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for StartManualTransferRuns</summary>
        /// <remarks>
        /// This snippet has been automatically generated for illustrative purposes only.
        /// It may require modifications to work in your environment.
        /// </remarks>
        public void StartManualTransferRunsRequestObject()
        {
            // Create client
            DataTransferServiceClient dataTransferServiceClient = DataTransferServiceClient.Create();
            // Initialize request argument(s)
            StartManualTransferRunsRequest request = new StartManualTransferRunsRequest
            {
                ParentAsTransferConfigName = TransferConfigName.FromProjectTransferConfig("[PROJECT]", "[TRANSFER_CONFIG]"),
                RequestedTimeRange = new StartManualTransferRunsRequest.Types.TimeRange(),
            };
            // Make the request
            StartManualTransferRunsResponse response = dataTransferServiceClient.StartManualTransferRuns(request);
        }
    }
}
