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
    public sealed partial class GeneratedConversationProfilesClientStandaloneSnippets
    {
        /// <summary>Snippet for DeleteConversationProfile</summary>
        public void DeleteConversationProfileResourceNames()
        {
            // Snippet: DeleteConversationProfile(ConversationProfileName, CallSettings)
            // Create client
            ConversationProfilesClient conversationProfilesClient = ConversationProfilesClient.Create();
            // Initialize request argument(s)
            ConversationProfileName name = ConversationProfileName.FromProjectConversationProfile("[PROJECT]", "[CONVERSATION_PROFILE]");
            // Make the request
            conversationProfilesClient.DeleteConversationProfile(name);
            // End snippet
        }
    }
}
