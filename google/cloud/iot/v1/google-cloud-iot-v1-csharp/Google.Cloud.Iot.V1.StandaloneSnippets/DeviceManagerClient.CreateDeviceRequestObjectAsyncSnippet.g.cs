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

namespace Google.Cloud.Iot.V1.Snippets
{
    using System.Threading.Tasks;

    public sealed partial class GeneratedDeviceManagerClientStandaloneSnippets
    {
        /// <summary>Snippet for CreateDeviceAsync</summary>
        public async Task CreateDeviceRequestObjectAsync()
        {
            // Snippet: CreateDeviceAsync(CreateDeviceRequest, CallSettings)
            // Additional: CreateDeviceAsync(CreateDeviceRequest, CancellationToken)
            // Create client
            DeviceManagerClient deviceManagerClient = await DeviceManagerClient.CreateAsync();
            // Initialize request argument(s)
            CreateDeviceRequest request = new CreateDeviceRequest
            {
                ParentAsRegistryName = RegistryName.FromProjectLocationRegistry("[PROJECT]", "[LOCATION]", "[REGISTRY]"),
                Device = new Device(),
            };
            // Make the request
            Device response = await deviceManagerClient.CreateDeviceAsync(request);
            // End snippet
        }
    }
}
