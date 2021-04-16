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

namespace Google.Cloud.DataLabeling.V1Beta1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedDataLabelingServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for LabelImageAsync</summary>
        public async Task LabelImageResourceNamesAsync()
        {
            // Snippet: LabelImageAsync(DatasetName, HumanAnnotationConfig, LabelImageRequest.Types.Feature, CallSettings)
            // Additional: LabelImageAsync(DatasetName, HumanAnnotationConfig, LabelImageRequest.Types.Feature, CancellationToken)
            // Create client
            DataLabelingServiceClient dataLabelingServiceClient = await DataLabelingServiceClient.CreateAsync();
            // Initialize request argument(s)
            DatasetName parent = DatasetName.FromProjectDataset("[PROJECT]", "[DATASET]");
            HumanAnnotationConfig basicConfig = new HumanAnnotationConfig();
            LabelImageRequest.Types.Feature feature = LabelImageRequest.Types.Feature.Unspecified;
            // Make the request
            Operation<AnnotatedDataset, LabelOperationMetadata> response = await dataLabelingServiceClient.LabelImageAsync(parent, basicConfig, feature);

            // Poll until the returned long-running operation is complete
            Operation<AnnotatedDataset, LabelOperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            AnnotatedDataset result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<AnnotatedDataset, LabelOperationMetadata> retrievedResponse = await dataLabelingServiceClient.PollOnceLabelImageAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                AnnotatedDataset retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
