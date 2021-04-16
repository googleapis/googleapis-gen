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

namespace Google.Cloud.Vision.V1P3Beta1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedProductSearchClientStandaloneSnippets
    {
        /// <summary>Snippet for AddProductToProductSetAsync</summary>
        public async Task AddProductToProductSetRequestObjectAsync()
        {
            // Snippet: AddProductToProductSetAsync(AddProductToProductSetRequest, CallSettings)
            // Additional: AddProductToProductSetAsync(AddProductToProductSetRequest, CancellationToken)
            // Create client
            ProductSearchClient productSearchClient = await ProductSearchClient.CreateAsync();
            // Initialize request argument(s)
            AddProductToProductSetRequest request = new AddProductToProductSetRequest
            {
                ProductSetName = ProductSetName.FromProjectLocationProductSet("[PROJECT]", "[LOCATION]", "[PRODUCT_SET]"),
                ProductAsProductName = ProductName.FromProjectLocationProduct("[PROJECT]", "[LOCATION]", "[PRODUCT]"),
            };
            // Make the request
            await productSearchClient.AddProductToProductSetAsync(request);
            // End snippet
        }
    }
}
