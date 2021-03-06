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

namespace Google.Cloud.Asset.V1P4Beta1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedAssetServiceClientSnippets
    {
        /// <summary>Snippet for AnalyzeIamPolicy</summary>
        public void AnalyzeIamPolicyRequestObject()
        {
            // Snippet: AnalyzeIamPolicy(AnalyzeIamPolicyRequest, CallSettings)
            // Create client
            AssetServiceClient assetServiceClient = AssetServiceClient.Create();
            // Initialize request argument(s)
            AnalyzeIamPolicyRequest request = new AnalyzeIamPolicyRequest
            {
                AnalysisQuery = new IamPolicyAnalysisQuery(),
                Options = new AnalyzeIamPolicyRequest.Types.Options(),
            };
            // Make the request
            AnalyzeIamPolicyResponse response = assetServiceClient.AnalyzeIamPolicy(request);
            // End snippet
        }

        /// <summary>Snippet for AnalyzeIamPolicyAsync</summary>
        public async Task AnalyzeIamPolicyRequestObjectAsync()
        {
            // Snippet: AnalyzeIamPolicyAsync(AnalyzeIamPolicyRequest, CallSettings)
            // Additional: AnalyzeIamPolicyAsync(AnalyzeIamPolicyRequest, CancellationToken)
            // Create client
            AssetServiceClient assetServiceClient = await AssetServiceClient.CreateAsync();
            // Initialize request argument(s)
            AnalyzeIamPolicyRequest request = new AnalyzeIamPolicyRequest
            {
                AnalysisQuery = new IamPolicyAnalysisQuery(),
                Options = new AnalyzeIamPolicyRequest.Types.Options(),
            };
            // Make the request
            AnalyzeIamPolicyResponse response = await assetServiceClient.AnalyzeIamPolicyAsync(request);
            // End snippet
        }

        /// <summary>Snippet for ExportIamPolicyAnalysis</summary>
        public void ExportIamPolicyAnalysisRequestObject()
        {
            // Snippet: ExportIamPolicyAnalysis(ExportIamPolicyAnalysisRequest, CallSettings)
            // Create client
            AssetServiceClient assetServiceClient = AssetServiceClient.Create();
            // Initialize request argument(s)
            ExportIamPolicyAnalysisRequest request = new ExportIamPolicyAnalysisRequest
            {
                AnalysisQuery = new IamPolicyAnalysisQuery(),
                Options = new ExportIamPolicyAnalysisRequest.Types.Options(),
                OutputConfig = new IamPolicyAnalysisOutputConfig(),
            };
            // Make the request
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> response = assetServiceClient.ExportIamPolicyAnalysis(request);

            // Poll until the returned long-running operation is complete
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> completedResponse = response.PollUntilCompleted();
            // Retrieve the operation result
            ExportIamPolicyAnalysisResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> retrievedResponse = assetServiceClient.PollOnceExportIamPolicyAnalysis(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ExportIamPolicyAnalysisResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }

        /// <summary>Snippet for ExportIamPolicyAnalysisAsync</summary>
        public async Task ExportIamPolicyAnalysisRequestObjectAsync()
        {
            // Snippet: ExportIamPolicyAnalysisAsync(ExportIamPolicyAnalysisRequest, CallSettings)
            // Additional: ExportIamPolicyAnalysisAsync(ExportIamPolicyAnalysisRequest, CancellationToken)
            // Create client
            AssetServiceClient assetServiceClient = await AssetServiceClient.CreateAsync();
            // Initialize request argument(s)
            ExportIamPolicyAnalysisRequest request = new ExportIamPolicyAnalysisRequest
            {
                AnalysisQuery = new IamPolicyAnalysisQuery(),
                Options = new ExportIamPolicyAnalysisRequest.Types.Options(),
                OutputConfig = new IamPolicyAnalysisOutputConfig(),
            };
            // Make the request
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> response = await assetServiceClient.ExportIamPolicyAnalysisAsync(request);

            // Poll until the returned long-running operation is complete
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            ExportIamPolicyAnalysisResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<ExportIamPolicyAnalysisResponse, ExportIamPolicyAnalysisRequest> retrievedResponse = await assetServiceClient.PollOnceExportIamPolicyAnalysisAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                ExportIamPolicyAnalysisResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
