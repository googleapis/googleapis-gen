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

namespace Google.Cloud.Security.PrivateCA.V1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedCertificateAuthorityServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for DeleteCaPoolAsync</summary>
        public async Task DeleteCaPoolAsync()
        {
            // Snippet: DeleteCaPoolAsync(string, CallSettings)
            // Additional: DeleteCaPoolAsync(string, CancellationToken)
            // Create client
            CertificateAuthorityServiceClient certificateAuthorityServiceClient = await CertificateAuthorityServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "projects/[PROJECT]/locations/[LOCATION]/caPools/[CA_POOL]";
            // Make the request
            Operation<CaPool, OperationMetadata> response = await certificateAuthorityServiceClient.DeleteCaPoolAsync(name);

            // Poll until the returned long-running operation is complete
            Operation<CaPool, OperationMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            CaPool result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<CaPool, OperationMetadata> retrievedResponse = await certificateAuthorityServiceClient.PollOnceDeleteCaPoolAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                CaPool retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
