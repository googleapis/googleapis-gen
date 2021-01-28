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
    module Retail
      module V2beta
        # Request for
        # {Google::Cloud::Retail::V2beta::CatalogService::ListCatalogs CatalogService::ListCatalogs}
        # method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The account resource name with an associated location.
        #
        #     If the caller does not have permission to list
        #     {Google::Cloud::Retail::V2beta::Catalog Catalog}s under this location,
        #     regardless of whether or not this location exists, a PERMISSION_DENIED
        #     error is returned.
        # @!attribute [rw] page_size
        #   @return [Integer]
        #     Maximum number of {Google::Cloud::Retail::V2beta::Catalog Catalog}s to return.
        #     If unspecified, defaults to 50. The maximum allowed value is 1000. Values
        #     above 1000 will be coerced to 1000.
        #
        #     If this field is negative, an INVALID_ARGUMENT is returned.
        # @!attribute [rw] page_token
        #   @return [String]
        #     A page token
        #     {Google::Cloud::Retail::V2beta::ListCatalogsResponse#next_page_token ListCatalogsResponse#next_page_token},
        #     received from a previous
        #     {Google::Cloud::Retail::V2beta::CatalogService::ListCatalogs CatalogService::ListCatalogs}
        #     call. Provide this to retrieve the subsequent page.
        #
        #     When paginating, all other parameters provided to
        #     {Google::Cloud::Retail::V2beta::CatalogService::ListCatalogs CatalogService::ListCatalogs}
        #     must match the call that provided the page token. Otherwise, an
        #     INVALID_ARGUMENT error is returned.
        class ListCatalogsRequest; end

        # Response for
        # {Google::Cloud::Retail::V2beta::CatalogService::ListCatalogs CatalogService::ListCatalogs}
        # method.
        # @!attribute [rw] catalogs
        #   @return [Array<Google::Cloud::Retail::V2beta::Catalog>]
        #     All the customer's {Google::Cloud::Retail::V2beta::Catalog Catalog}s.
        # @!attribute [rw] next_page_token
        #   @return [String]
        #     A token that can be sent as
        #     {Google::Cloud::Retail::V2beta::ListCatalogsRequest#page_token ListCatalogsRequest#page_token}
        #     to retrieve the next page. If this field is omitted, there are no
        #     subsequent pages.
        class ListCatalogsResponse; end

        # Request for
        # {Google::Cloud::Retail::V2beta::CatalogService::UpdateCatalog CatalogService::UpdateCatalog}
        # method.
        # @!attribute [rw] catalog
        #   @return [Google::Cloud::Retail::V2beta::Catalog]
        #     Required. The {Google::Cloud::Retail::V2beta::Catalog Catalog} to update.
        #
        #     If the caller does not have permission to update the
        #     {Google::Cloud::Retail::V2beta::Catalog Catalog}, regardless of whether or not
        #     it exists, a PERMISSION_DENIED error is returned.
        #
        #     If the {Google::Cloud::Retail::V2beta::Catalog Catalog} to update does not
        #     exist, a NOT_FOUND error is returned.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Indicates which fields in the provided
        #     {Google::Cloud::Retail::V2beta::Catalog Catalog} to update. If not set, will
        #     only update the
        #     {Google::Cloud::Retail::V2beta::Catalog#product_level_config Catalog#product_level_config}
        #     field, which is also the only currently supported field to update.
        #
        #     If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
        #     is returned.
        class UpdateCatalogRequest; end
      end
    end
  end
end