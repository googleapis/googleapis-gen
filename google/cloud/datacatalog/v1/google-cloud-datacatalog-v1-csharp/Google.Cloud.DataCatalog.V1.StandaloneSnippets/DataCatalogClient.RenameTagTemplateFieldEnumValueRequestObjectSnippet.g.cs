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

namespace Google.Cloud.DataCatalog.V1.Snippets
{
    public sealed partial class GeneratedDataCatalogClientStandaloneSnippets
    {
        /// <summary>Snippet for RenameTagTemplateFieldEnumValue</summary>
        public void RenameTagTemplateFieldEnumValueRequestObject()
        {
            // Snippet: RenameTagTemplateFieldEnumValue(RenameTagTemplateFieldEnumValueRequest, CallSettings)
            // Create client
            DataCatalogClient dataCatalogClient = DataCatalogClient.Create();
            // Initialize request argument(s)
            RenameTagTemplateFieldEnumValueRequest request = new RenameTagTemplateFieldEnumValueRequest
            {
                TagTemplateFieldEnumValueName = TagTemplateFieldEnumValueName.FromProjectLocationTagTemplateTagTemplateFieldEnumValueDisplayName("[PROJECT]", "[LOCATION]", "[TAG_TEMPLATE]", "[TAG_TEMPLATE_FIELD_ID]", "[ENUM_VALUE_DISPLAY_NAME]"),
                NewEnumValueDisplayName = "",
            };
            // Make the request
            TagTemplateField response = dataCatalogClient.RenameTagTemplateFieldEnumValue(request);
            // End snippet
        }
    }
}
