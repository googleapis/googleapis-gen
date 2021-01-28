# Copyright 2020 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

module Google
  module Cloud
    module Datacatalog
      module V1beta1
        # Message capturing a taxonomy and its policy tag hierarchy as a nested proto.
        # Used for taxonomy import/export and mutation.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Display name of the taxonomy. Max 200 bytes when encoded in UTF-8.
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the serialized taxonomy. The length of the
        #     description is limited to 2000 bytes when encoded in UTF-8. If not set,
        #     defaults to an empty description.
        # @!attribute [rw] policy_tags
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::SerializedPolicyTag>]
        #     Top level policy tags associated with the taxonomy if any.
        class SerializedTaxonomy; end

        # Message representing one policy tag when exported as a nested proto.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Display name of the policy tag. Max 200 bytes when encoded in UTF-8.
        # @!attribute [rw] description
        #   @return [String]
        #     Description of the serialized policy tag. The length of the
        #     description is limited to 2000 bytes when encoded in UTF-8. If not set,
        #     defaults to an empty description.
        # @!attribute [rw] child_policy_tags
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::SerializedPolicyTag>]
        #     Children of the policy tag if any.
        class SerializedPolicyTag; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManagerSerialization::ImportTaxonomies ImportTaxonomies}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of project that the newly created taxonomies will
        #     belong to.
        # @!attribute [rw] inline_source
        #   @return [Google::Cloud::Datacatalog::V1beta1::InlineSource]
        #     Inline source used for taxonomies import
        class ImportTaxonomiesRequest; end

        # Inline source used for taxonomies import.
        # @!attribute [rw] taxonomies
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::SerializedTaxonomy>]
        #     Required. Taxonomies to be imported.
        class InlineSource; end

        # Response message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManagerSerialization::ImportTaxonomies ImportTaxonomies}.
        # @!attribute [rw] taxonomies
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::Taxonomy>]
        #     Taxonomies that were imported.
        class ImportTaxonomiesResponse; end

        # Request message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManagerSerialization::ExportTaxonomies ExportTaxonomies}.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. Resource name of the project that taxonomies to be exported
        #     will share.
        # @!attribute [rw] taxonomies
        #   @return [Array<String>]
        #     Required. Resource names of the taxonomies to be exported.
        # @!attribute [rw] serialized_taxonomies
        #   @return [true, false]
        #     Export taxonomies as serialized taxonomies.
        class ExportTaxonomiesRequest; end

        # Response message for
        # {Google::Cloud::Datacatalog::V1beta1::PolicyTagManagerSerialization::ExportTaxonomies ExportTaxonomies}.
        # @!attribute [rw] taxonomies
        #   @return [Array<Google::Cloud::Datacatalog::V1beta1::SerializedTaxonomy>]
        #     List of taxonomies and policy tags in a tree structure.
        class ExportTaxonomiesResponse; end
      end
    end
  end
end