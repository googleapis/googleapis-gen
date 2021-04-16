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

namespace Google.Cloud.Speech.V1P1Beta1.Snippets
{
    using Google.LongRunning;
    using System.Threading.Tasks;

    public sealed partial class GeneratedSpeechClientStandaloneSnippets
    {
        /// <summary>Snippet for LongRunningRecognizeAsync</summary>
        public async Task LongRunningRecognizeAsync()
        {
            // Snippet: LongRunningRecognizeAsync(RecognitionConfig, RecognitionAudio, CallSettings)
            // Additional: LongRunningRecognizeAsync(RecognitionConfig, RecognitionAudio, CancellationToken)
            // Create client
            SpeechClient speechClient = await SpeechClient.CreateAsync();
            // Initialize request argument(s)
            RecognitionConfig config = new RecognitionConfig();
            RecognitionAudio audio = new RecognitionAudio();
            // Make the request
            Operation<LongRunningRecognizeResponse, LongRunningRecognizeMetadata> response = await speechClient.LongRunningRecognizeAsync(config, audio);

            // Poll until the returned long-running operation is complete
            Operation<LongRunningRecognizeResponse, LongRunningRecognizeMetadata> completedResponse = await response.PollUntilCompletedAsync();
            // Retrieve the operation result
            LongRunningRecognizeResponse result = completedResponse.Result;

            // Or get the name of the operation
            string operationName = response.Name;
            // This name can be stored, then the long-running operation retrieved later by name
            Operation<LongRunningRecognizeResponse, LongRunningRecognizeMetadata> retrievedResponse = await speechClient.PollOnceLongRunningRecognizeAsync(operationName);
            // Check if the retrieved long-running operation has completed
            if (retrievedResponse.IsCompleted)
            {
                // If it has completed, then access the result
                LongRunningRecognizeResponse retrievedResult = retrievedResponse.Result;
            }
            // End snippet
        }
    }
}
