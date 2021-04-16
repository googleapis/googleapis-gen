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

namespace Google.Cloud.Billing.Budgets.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedBudgetServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for DeleteBudgetAsync</summary>
        public async Task DeleteBudgetRequestObjectAsync()
        {
            // Snippet: DeleteBudgetAsync(DeleteBudgetRequest, CallSettings)
            // Additional: DeleteBudgetAsync(DeleteBudgetRequest, CancellationToken)
            // Create client
            BudgetServiceClient budgetServiceClient = await BudgetServiceClient.CreateAsync();
            // Initialize request argument(s)
            DeleteBudgetRequest request = new DeleteBudgetRequest
            {
                BudgetName = BudgetName.FromBillingAccountBudget("[BILLING_ACCOUNT]", "[BUDGET]"),
            };
            // Make the request
            await budgetServiceClient.DeleteBudgetAsync(request);
            // End snippet
        }
    }
}
