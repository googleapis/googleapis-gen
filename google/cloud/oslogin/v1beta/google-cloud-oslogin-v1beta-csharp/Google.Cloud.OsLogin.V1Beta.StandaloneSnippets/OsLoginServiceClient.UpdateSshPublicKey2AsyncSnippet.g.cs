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

namespace Google.Cloud.OsLogin.V1Beta.Snippets
{
    using Google.Cloud.OsLogin.Common;
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedOsLoginServiceClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateSshPublicKeyAsync</summary>
        public async Task UpdateSshPublicKey2Async()
        {
            // Snippet: UpdateSshPublicKeyAsync(string, SshPublicKey, FieldMask, CallSettings)
            // Additional: UpdateSshPublicKeyAsync(string, SshPublicKey, FieldMask, CancellationToken)
            // Create client
            OsLoginServiceClient osLoginServiceClient = await OsLoginServiceClient.CreateAsync();
            // Initialize request argument(s)
            string name = "users/[USER]/sshPublicKeys/[FINGERPRINT]";
            SshPublicKey sshPublicKey = new SshPublicKey();
            FieldMask updateMask = new FieldMask();
            // Make the request
            SshPublicKey response = await osLoginServiceClient.UpdateSshPublicKeyAsync(name, sshPublicKey, updateMask);
            // End snippet
        }
    }
}
