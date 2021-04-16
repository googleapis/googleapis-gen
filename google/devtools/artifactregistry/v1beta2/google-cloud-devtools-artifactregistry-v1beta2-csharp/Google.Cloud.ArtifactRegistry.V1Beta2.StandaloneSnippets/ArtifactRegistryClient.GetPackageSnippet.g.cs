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

namespace Google.Cloud.ArtifactRegistry.V1Beta2.Snippets
{
    public sealed partial class GeneratedArtifactRegistryClientStandaloneSnippets
    {
        /// <summary>Snippet for GetPackage</summary>
        public void GetPackage()
        {
            // Snippet: GetPackage(string, CallSettings)
            // Create client
            ArtifactRegistryClient artifactRegistryClient = ArtifactRegistryClient.Create();
            // Initialize request argument(s)
            string name = "";
            // Make the request
            Package response = artifactRegistryClient.GetPackage(name);
            // End snippet
        }
    }
}
