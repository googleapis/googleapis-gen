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

namespace Google.Cloud.WebRisk.V1Beta1.Snippets
{
    using Google.Protobuf;

    public sealed partial class GeneratedWebRiskServiceV1Beta1ClientStandaloneSnippets
    {
        /// <summary>Snippet for ComputeThreatListDiff</summary>
        public void ComputeThreatListDiff()
        {
            // Snippet: ComputeThreatListDiff(ThreatType, ByteString, ComputeThreatListDiffRequest.Types.Constraints, CallSettings)
            // Create client
            WebRiskServiceV1Beta1Client webRiskServiceV1Beta1Client = WebRiskServiceV1Beta1Client.Create();
            // Initialize request argument(s)
            ThreatType threatType = ThreatType.Unspecified;
            ByteString versionToken = ByteString.Empty;
            ComputeThreatListDiffRequest.Types.Constraints constraints = new ComputeThreatListDiffRequest.Types.Constraints();
            // Make the request
            ComputeThreatListDiffResponse response = webRiskServiceV1Beta1Client.ComputeThreatListDiff(threatType, versionToken, constraints);
            // End snippet
        }
    }
}
