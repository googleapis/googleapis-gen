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

namespace Google.Cloud.Dialogflow.V2beta1.Snippets
{
    public sealed partial class GeneratedIntentsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateIntent</summary>
        public void CreateIntent1()
        {
            // Snippet: CreateIntent(string, Intent, CallSettings)
            // Create client
            IntentsClient intentsClient = IntentsClient.Create();
            // Initialize request argument(s)
            string parent = "projects/[PROJECT]/agent";
            Intent intent = new Intent();
            // Make the request
            Intent response = intentsClient.CreateIntent(parent, intent);
            // End snippet
        }
    }
}
