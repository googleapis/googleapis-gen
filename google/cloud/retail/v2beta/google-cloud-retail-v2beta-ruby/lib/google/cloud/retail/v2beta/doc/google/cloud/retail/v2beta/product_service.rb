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
        # Request message for {CreateProduct} method.
        # @!attribute [rw] parent
        #   @return [String]
        #     Required. The parent catalog resource name, such as
        #     "projects/*/locations/global/catalogs/default_catalog/branches/default_branch".
        # @!attribute [rw] product
        #   @return [Google::Cloud::Retail::V2beta::Product]
        #     Required. The {Google::Cloud::Retail::V2beta::Product Product} to create.
        # @!attribute [rw] product_id
        #   @return [String]
        #     Required. The ID to use for the
        #     {Google::Cloud::Retail::V2beta::Product Product}, which will become the final
        #     component of the {Google::Cloud::Retail::V2beta::Product#name Product#name}.
        #
        #     If the caller does not have permission to create the
        #     {Google::Cloud::Retail::V2beta::Product Product}, regardless of whether or not
        #     it exists, a PERMISSION_DENIED error is returned.
        #
        #     This field must be unique among all
        #     {Google::Cloud::Retail::V2beta::Product Product}s with the same
        #     {Google::Cloud::Retail::V2beta::CreateProductRequest#parent parent}.
        #     Otherwise, an ALREADY_EXISTS error is returned.
        #
        #     This field must be a UTF-8 encoded string with a length limit of 128
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        class CreateProductRequest; end

        # Request message for {GetProduct} method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Full resource name of
        #     {Google::Cloud::Retail::V2beta::Product Product}, such as
        #     "projects/*/locations/global/catalogs/default_catalog/branches/default_branch/products/some_product_id".
        #
        #     If the caller does not have permission to access the
        #     {Google::Cloud::Retail::V2beta::Product Product}, regardless of whether or not
        #     it exists, a PERMISSION_DENIED error is returned.
        #
        #     If the requested {Google::Cloud::Retail::V2beta::Product Product} does not
        #     exist, a NOT_FOUND error is returned.
        class GetProductRequest; end

        # Request message for {UpdateProduct} method.
        # @!attribute [rw] product
        #   @return [Google::Cloud::Retail::V2beta::Product]
        #     Required. The product to update/create.
        #
        #     If the caller does not have permission to update the
        #     {Google::Cloud::Retail::V2beta::Product Product}, regardless of whether or not
        #     it exists, a PERMISSION_DENIED error is returned.
        #
        #     If the {Google::Cloud::Retail::V2beta::Product Product} to update does not
        #     exist, a NOT_FOUND error is returned.
        # @!attribute [rw] update_mask
        #   @return [Google::Protobuf::FieldMask]
        #     Indicates which fields in the provided
        #     {Google::Cloud::Retail::V2beta::Product Product} to update. The immutable and
        #     output only fields are NOT supported. If not set, all supported fields (the
        #     fields that are neither immutable nor output only) are updated.
        #
        #     If an unsupported or unknown field is provided, an INVALID_ARGUMENT error
        #     is returned.
        class UpdateProductRequest; end

        # Request message for {DeleteProduct} method.
        # @!attribute [rw] name
        #   @return [String]
        #     Required. Full resource name of
        #     {Google::Cloud::Retail::V2beta::Product Product}, such as
        #     "projects/*/locations/global/catalogs/default_catalog/branches/default_branch/products/some_product_id".
        #
        #     If the caller does not have permission to delete the
        #     {Google::Cloud::Retail::V2beta::Product Product}, regardless of whether or not
        #     it exists, a PERMISSION_DENIED error is returned.
        #
        #     If the {Google::Cloud::Retail::V2beta::Product Product} to delete does not
        #     exist, a NOT_FOUND error is returned.
        class DeleteProductRequest; end
      end
    end
  end
end