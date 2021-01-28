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
        # Configures what level the product should be uploaded with regards to
        # how users will be send events and how predictions will be made.
        # @!attribute [rw] ingestion_product_type
        #   @return [String]
        #     The type of {Google::Cloud::Retail::V2beta::Product Product}s allowed to be
        #     ingested into the catalog. Acceptable values are:
        #
        #     * `primary` (default): You can only ingest
        #       {Google::Cloud::Retail::V2beta::Product::Type::PRIMARY Product::Type::PRIMARY}
        #       {Google::Cloud::Retail::V2beta::Product Product}s. This means
        #       {Google::Cloud::Retail::V2beta::Product#primary_product_id Product#primary_product_id}
        #       can only be empty or set to the same value as
        #       {Google::Cloud::Retail::V2beta::Product#id Product#id}.
        #     * `variant`: You can only ingest
        #       {Google::Cloud::Retail::V2beta::Product::Type::VARIANT Product::Type::VARIANT}
        #       {Google::Cloud::Retail::V2beta::Product Product}s.
        #       This means
        #       {Google::Cloud::Retail::V2beta::Product#primary_product_id Product#primary_product_id}
        #       cannot be empty.
        #
        #     If this field is set to an invalid value other than these, an
        #     INVALID_ARGUMENT error is returned.
        #
        #     If this field is `variant` and
        #     {Google::Cloud::Retail::V2beta::ProductLevelConfig#merchant_center_product_id_field merchant_center_product_id_field}
        #     is `itemGroupId`, an INVALID_ARGUMENT error is returned.
        #
        #     See [Using catalog
        #     levels](/retail/recommendations-ai/docs/catalog#catalog-levels) for more
        #     details.
        # @!attribute [rw] merchant_center_product_id_field
        #   @return [String]
        #     Which field of [Merchant Center
        #     Product](/bigquery-transfer/docs/merchant-center-products-schema) should be
        #     imported as {Google::Cloud::Retail::V2beta::Product#id Product#id}. Acceptable
        #     values are:
        #
        #     * `offerId` (default): Import `offerId` as the product ID.
        #     * `itemGroupId`: Import `itemGroupId` as the product ID. Notice that Retail
        #       API will choose one item from the ones with the same `itemGroupId`, and
        #       use it to represent the item group.
        #
        #     If this field is set to an invalid value other than these, an
        #     INVALID_ARGUMENT error is returned.
        #
        #     If this field is `itemGroupId` and
        #     {Google::Cloud::Retail::V2beta::ProductLevelConfig#ingestion_product_type ingestion_product_type}
        #     is `variant`, an INVALID_ARGUMENT error is returned.
        #
        #     See [Using catalog
        #     levels](/retail/recommendations-ai/docs/catalog#catalog-levels) for more
        #     details.
        class ProductLevelConfig; end

        # The catalog configuration.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Immutable. The fully qualified resource name of the catalog.
        # @!attribute [rw] display_name
        #   @return [String]
        #     Required. Immutable. The catalog display name.
        #
        #     This field must be a UTF-8 encoded string with a length limit of 128
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] product_level_config
        #   @return [Google::Cloud::Retail::V2beta::ProductLevelConfig]
        #     Required. The product level configuration.
        class Catalog; end
      end
    end
  end
end