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

namespace Google.Cloud.Dialogflow.Cx.V3.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedExperimentsClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateExperimentAsync</summary>
        public async Task CreateExperimentResourceNamesAsync()
        {
            // Snippet: CreateExperimentAsync(EnvironmentName, Experiment, CallSettings)
            // Additional: CreateExperimentAsync(EnvironmentName, Experiment, CancellationToken)
            // Create client
            ExperimentsClient experimentsClient = await ExperimentsClient.CreateAsync();
            // Initialize request argument(s)
            EnvironmentName parent = EnvironmentName.FromProjectLocationAgentEnvironment("[PROJECT]", "[LOCATION]", "[AGENT]", "[ENVIRONMENT]");
            Experiment experiment = new Experiment();
            // Make the request
            Experiment response = await experimentsClient.CreateExperimentAsync(parent, experiment);
            // End snippet
        }
    }
}
