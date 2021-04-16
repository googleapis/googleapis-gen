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
    public sealed partial class GeneratedBudgetServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateBudget</summary>
        public void CreateBudget()
        {
            // Snippet: CreateBudget(string, Budget, CallSettings)
            // Create client
            BudgetServiceClient budgetServiceClient = BudgetServiceClient.Create();
            // Initialize request argument(s)
            string parent = "billingAccounts/[BILLING_ACCOUNT]";
            Budget budget = new Budget();
            // Make the request
            Budget response = budgetServiceClient.CreateBudget(parent, budget);
            // End snippet
        }
    }
}
