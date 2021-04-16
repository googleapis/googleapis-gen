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

namespace Google.Cloud.Dialogflow.V2.Snippets
{
    using Google.Protobuf.WellKnownTypes;
    using System.Threading.Tasks;

    public sealed partial class GeneratedAnswerRecordsClientStandaloneSnippets
    {
        /// <summary>Snippet for UpdateAnswerRecordAsync</summary>
        public async Task UpdateAnswerRecordAsync()
        {
            // Snippet: UpdateAnswerRecordAsync(AnswerRecord, FieldMask, CallSettings)
            // Additional: UpdateAnswerRecordAsync(AnswerRecord, FieldMask, CancellationToken)
            // Create client
            AnswerRecordsClient answerRecordsClient = await AnswerRecordsClient.CreateAsync();
            // Initialize request argument(s)
            AnswerRecord answerRecord = new AnswerRecord();
            FieldMask updateMask = new FieldMask();
            // Make the request
            AnswerRecord response = await answerRecordsClient.UpdateAnswerRecordAsync(answerRecord, updateMask);
            // End snippet
        }
    }
}
