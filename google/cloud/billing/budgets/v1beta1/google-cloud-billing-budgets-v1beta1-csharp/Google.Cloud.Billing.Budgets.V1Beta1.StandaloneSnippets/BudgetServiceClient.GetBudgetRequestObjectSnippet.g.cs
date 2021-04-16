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

namespace Google.Cloud.Billing.Budgets.V1Beta1.Snippets
{
    public sealed partial class GeneratedBudgetServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for GetBudget</summary>
        public void GetBudgetRequestObject()
        {
            // Snippet: GetBudget(GetBudgetRequest, CallSettings)
            // Create client
            BudgetServiceClient budgetServiceClient = BudgetServiceClient.Create();
            // Initialize request argument(s)
            GetBudgetRequest request = new GetBudgetRequest
            {
                BudgetName = BudgetName.FromBillingAccountBudget("[BILLING_ACCOUNT]", "[BUDGET]"),
            };
            // Make the request
            Budget response = budgetServiceClient.GetBudget(request);
            // End snippet
        }
    }
}
