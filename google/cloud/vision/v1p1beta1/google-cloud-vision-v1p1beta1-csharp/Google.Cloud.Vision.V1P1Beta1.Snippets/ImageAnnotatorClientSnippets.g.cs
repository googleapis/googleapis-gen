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

namespace Google.Cloud.Vision.V1P1Beta1.Snippets
{
    using System.Collections.Generic;
    using System.Threading.Tasks;

    /// <summary>Generated snippets.</summary>
    public sealed class GeneratedImageAnnotatorClientSnippets
    {
        /// <summary>Snippet for BatchAnnotateImages</summary>
        public void BatchAnnotateImagesRequestObject()
        {
            // Snippet: BatchAnnotateImages(BatchAnnotateImagesRequest, CallSettings)
            // Create client
            ImageAnnotatorClient imageAnnotatorClient = ImageAnnotatorClient.Create();
            // Initialize request argument(s)
            BatchAnnotateImagesRequest request = new BatchAnnotateImagesRequest
            {
                Requests =
                {
                    new AnnotateImageRequest(),
                },
            };
            // Make the request
            BatchAnnotateImagesResponse response = imageAnnotatorClient.BatchAnnotateImages(request);
            // End snippet
        }

        /// <summary>Snippet for BatchAnnotateImagesAsync</summary>
        public async Task BatchAnnotateImagesRequestObjectAsync()
        {
            // Snippet: BatchAnnotateImagesAsync(BatchAnnotateImagesRequest, CallSettings)
            // Additional: BatchAnnotateImagesAsync(BatchAnnotateImagesRequest, CancellationToken)
            // Create client
            ImageAnnotatorClient imageAnnotatorClient = await ImageAnnotatorClient.CreateAsync();
            // Initialize request argument(s)
            BatchAnnotateImagesRequest request = new BatchAnnotateImagesRequest
            {
                Requests =
                {
                    new AnnotateImageRequest(),
                },
            };
            // Make the request
            BatchAnnotateImagesResponse response = await imageAnnotatorClient.BatchAnnotateImagesAsync(request);
            // End snippet
        }

        /// <summary>Snippet for BatchAnnotateImages</summary>
        public void BatchAnnotateImages()
        {
            // Snippet: BatchAnnotateImages(IEnumerable<AnnotateImageRequest>, CallSettings)
            // Create client
            ImageAnnotatorClient imageAnnotatorClient = ImageAnnotatorClient.Create();
            // Initialize request argument(s)
            IEnumerable<AnnotateImageRequest> requests = new AnnotateImageRequest[]
            {
                new AnnotateImageRequest(),
            };
            // Make the request
            BatchAnnotateImagesResponse response = imageAnnotatorClient.BatchAnnotateImages(requests);
            // End snippet
        }

        /// <summary>Snippet for BatchAnnotateImagesAsync</summary>
        public async Task BatchAnnotateImagesAsync()
        {
            // Snippet: BatchAnnotateImagesAsync(IEnumerable<AnnotateImageRequest>, CallSettings)
            // Additional: BatchAnnotateImagesAsync(IEnumerable<AnnotateImageRequest>, CancellationToken)
            // Create client
            ImageAnnotatorClient imageAnnotatorClient = await ImageAnnotatorClient.CreateAsync();
            // Initialize request argument(s)
            IEnumerable<AnnotateImageRequest> requests = new AnnotateImageRequest[]
            {
                new AnnotateImageRequest(),
            };
            // Make the request
            BatchAnnotateImagesResponse response = await imageAnnotatorClient.BatchAnnotateImagesAsync(requests);
            // End snippet
        }
    }
}
