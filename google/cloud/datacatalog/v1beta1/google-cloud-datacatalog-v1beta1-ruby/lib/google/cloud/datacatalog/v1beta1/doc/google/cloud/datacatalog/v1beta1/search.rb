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
        # A result that appears in the response of a search request. Each result
        # captures details of one entry that matches the search.
        # @!attribute [rw] search_result_type
        #   @return [Google::Cloud::Datacatalog::V1beta1::SearchResultType]
        #     Type of the search result. This field can be used to determine which Get
        #     method to call to fetch the full resource.
        # @!attribute [rw] search_result_subtype
        #   @return [String]
        #     Sub-type of the search result. This is a dot-delimited description of the
        #     resource's full type, and is the same as the value callers would provide in
        #     the "type" search facet.  Examples: `entry.table`, `entry.dataStream`,
        #     `tagTemplate`.
        # @!attribute [rw] relative_resource_name
        #   @return [String]
        #     The relative resource name of the resource in URL format.
        #     Examples:
        #
        #     * `projects/{project_id}/locations/{location_id}/entryGroups/{entry_group_id}/entries/{entry_id}`
        #       * `projects/{project_id}/tagTemplates/{tag_template_id}`
        # @!attribute [rw] linked_resource
        #   @return [String]
        #     The full name of the cloud resource the entry belongs to. See:
        #     https://cloud.google.com/apis/design/resource_names#full_resource_name.
        #     Example:
        #
        #     * `//bigquery.googleapis.com/projects/projectId/datasets/datasetId/tables/tableId`
        class SearchCatalogResult; end

        # The different types of resources that can be returned in search.
        module SearchResultType
          # Default unknown type.
          SEARCH_RESULT_TYPE_UNSPECIFIED = 0

          # An {Google::Cloud::Datacatalog::V1beta1::Entry Entry}.
          ENTRY = 1

          # A {Google::Cloud::Datacatalog::V1beta1::TagTemplate TagTemplate}.
          TAG_TEMPLATE = 2

          # An {Google::Cloud::Datacatalog::V1beta1::EntryGroup EntryGroup}.
          ENTRY_GROUP = 3
        end
      end
    end
  end
end