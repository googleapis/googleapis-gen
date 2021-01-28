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
      module V2alpha
        # A custom attribute that is not explicitly modeled in
        # {Google::Cloud::Retail::V2alpha::Product Product}].
        # @!attribute [rw] text
        #   @return [Array<String>]
        #     The textual values of this custom attribute. For example, `["yellow",
        #     "green"]` when the key is "color".
        #
        #     At most 400 values are allowed. Empty values are not allowed. Each value
        #     must be a UTF-8 encoded string with a length limit of 256 characters.
        #     Otherwise, an INVALID_ARGUMENT error is returned.
        #
        #     Exactly one of {Google::Cloud::Retail::V2alpha::CustomAttribute#text text} or
        #     {Google::Cloud::Retail::V2alpha::CustomAttribute#numbers numbers} should be
        #     set. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] numbers
        #   @return [Array<Float>]
        #     The numerical values of this custom attribute. For example, `[2.3, 15.4]`
        #     when the key is "lengths_cm".
        #
        #     At most 400 values are allowed.Otherwise, an INVALID_ARGUMENT error is
        #     returned.
        #
        #     Exactly one of {Google::Cloud::Retail::V2alpha::CustomAttribute#text text} or
        #     {Google::Cloud::Retail::V2alpha::CustomAttribute#numbers numbers} should be
        #     set. Otherwise, an INVALID_ARGUMENT error is returned.
        class CustomAttribute; end

        # {Google::Cloud::Retail::V2alpha::Product Product} thumbnail/detail image.
        # @!attribute [rw] uri
        #   @return [String]
        #     Required. URI of the image.
        #
        #     This field must be a valid UTF-8 encoded URI with a length limit of 5,000
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        #
        #     Google Merchant Center property
        #     [image_link](https://support.google.com/merchants/answer/6324350).
        #     Schema.org property [Product.image](https://schema.org/image).
        # @!attribute [rw] height
        #   @return [Integer]
        #     Height of the image in number of pixels.
        #
        #     This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
        #     returned.
        # @!attribute [rw] width
        #   @return [Integer]
        #     Width of the image in number of pixels.
        #
        #     This field must be nonnegative. Otherwise, an INVALID_ARGUMENT error is
        #     returned.
        class Image; end

        # The price information of a {Google::Cloud::Retail::V2alpha::Product Product}.
        # @!attribute [rw] currency_code
        #   @return [String]
        #     The 3-letter currency code defined in [ISO
        #     4217](https://www.iso.org/iso-4217-currency-codes.html).
        #
        #     If this field is an unrecognizable currency code, an INVALID_ARGUMENT
        #     error is returned.
        # @!attribute [rw] price
        #   @return [Float]
        #     Price of the product.
        #
        #     Google Merchant Center property
        #     [price](https://support.google.com/merchants/answer/6324371). Schema.org
        #     property [Offer.priceSpecification](https://schema.org/priceSpecification).
        # @!attribute [rw] original_price
        #   @return [Float]
        #     Price of the product without any discount. If zero, by default set to be
        #     the {Google::Cloud::Retail::V2alpha::PriceInfo#price price}.
        # @!attribute [rw] cost
        #   @return [Float]
        #     The costs associated with the sale of a particular product. Used for gross
        #     profit reporting.
        #
        #     * Profit = {Google::Cloud::Retail::V2alpha::PriceInfo#price price} -
        #       {Google::Cloud::Retail::V2alpha::PriceInfo#cost cost}
        #
        #     Google Merchant Center property
        #     [cost_of_goods_sold](https://support.google.com/merchants/answer/9017895).
        class PriceInfo; end

        # Information of an end user.
        # @!attribute [rw] user_id
        #   @return [String]
        #     Highly recommended for logged-in users. Unique identifier for logged-in
        #     user, such as a user name.
        #
        #     The field must be a UTF-8 encoded string with a length limit of 128
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] ip_address
        #   @return [String]
        #     The end user's IP address. This field is used to extract location
        #     information for personalization.
        #
        #     This field must be either an IPv4 address (e.g. "104.133.9.80") or an IPv6
        #     address (e.g. "2001:0db8:85a3:0000:0000:8a2e:0370:7334"). Otherwise, an
        #     INVALID_ARGUMENT error is returned.
        #
        #     This should not be set when using the JavaScript tag in
        #     {Google::Cloud::Retail::V2alpha::UserEventService::CollectUserEvent UserEventService::CollectUserEvent}
        #     or if
        #     {Google::Cloud::Retail::V2alpha::UserInfo#direct_user_request direct_user_request}
        #     is set.
        # @!attribute [rw] user_agent
        #   @return [String]
        #     User agent as included in the HTTP header.
        #
        #     The field must be a UTF-8 encoded string with a length limit of 1,000
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        #
        #     This should not be set when using the client side event reporting with
        #     GTM or JavaScript tag in
        #     {Google::Cloud::Retail::V2alpha::UserEventService::CollectUserEvent UserEventService::CollectUserEvent}
        #     or if
        #     {Google::Cloud::Retail::V2alpha::UserInfo#direct_user_request direct_user_request}
        #     is set.
        # @!attribute [rw] direct_user_request
        #   @return [true, false]
        #     True if the request is made directly from the end user, in which case the
        #     {Google::Cloud::Retail::V2alpha::UserInfo#ip_address ip_address} and
        #     {Google::Cloud::Retail::V2alpha::UserInfo#user_agent user_agent} can be
        #     populated from the HTTP request. This flag should be set only if the API
        #     request is made directly from the end user such as a mobile app (and not if
        #     a gateway or a server is processing and pushing the user events).
        #
        #     This should not be set when using the JavaScript tag in
        #     {Google::Cloud::Retail::V2alpha::UserEventService::CollectUserEvent UserEventService::CollectUserEvent}.
        class UserInfo; end
      end
    end
  end
end