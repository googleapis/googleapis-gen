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
        # UserEvent captures all metadata information Retail API needs to know about
        # how end users interact with customers' website.
        # @!attribute [rw] event_type
        #   @return [String]
        #     Required. User event type. Allowed values are:
        #
        #     * `add-to-cart`: Products being added to cart.
        #     * `category-page-view`: Special pages such as sale or promotion pages
        #       viewed.
        #     * `detail-page-view`: Products detail page viewed.
        #     * `home-page-view`: Homepage viewed.
        #     * `purchase-complete`: User finishing a purchase.
        #     * `search`: Product search.
        #     * `shopping-cart-page-view`: User viewing a shopping cart.
        # @!attribute [rw] visitor_id
        #   @return [String]
        #     Required. A unique identifier for tracking visitors.
        #
        #     For example, this could be implemented with an HTTP cookie, which should be
        #     able to uniquely identify a visitor on a single device. This unique
        #     identifier should not change if the visitor log in/out of the website.
        #
        #     The field must be a UTF-8 encoded string with a length limit of 128
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] event_time
        #   @return [Google::Protobuf::Timestamp]
        #     Only required for
        #     {Google::Cloud::Retail::V2alpha::UserEventService::ImportUserEvents UserEventService::ImportUserEvents}
        #     method. Timestamp of when the user event happened.
        # @!attribute [rw] experiment_ids
        #   @return [Array<String>]
        #     A list of identifiers for the independent experiment groups this user event
        #     belongs to. This is used to distinguish between user events associated with
        #     different experiment setups (e.g. using Retail API, using different
        #     recommendation models).
        # @!attribute [rw] attribution_token
        #   @return [String]
        #     Highly recommended for user events that are the result of
        #     {Google::Cloud::Retail::V2alpha::PredictionService::Predict PredictionService::Predict}.
        #     This field enables accurate attribution of recommendation model
        #     performance.
        #
        #     The value must be a valid
        #     {Google::Cloud::Retail::V2alpha::PredictResponse#attribution_token PredictResponse#attribution_token}
        #     for user events that are the result of
        #     {Google::Cloud::Retail::V2alpha::PredictionService::Predict PredictionService::Predict}.
        #
        #     This token enables us to accurately attribute page view or purchase back to
        #     the event and the particular predict response containing this
        #     clicked/purchased product. If user clicks on product K in the
        #     recommendation results, pass
        #     {Google::Cloud::Retail::V2alpha::PredictResponse#attribution_token PredictResponse#attribution_token}
        #     as a URL parameter to product K's page. When recording events on product
        #     K's page, log the
        #     {Google::Cloud::Retail::V2alpha::PredictResponse#attribution_token PredictResponse#attribution_token}
        #     to this field.
        # @!attribute [rw] product_details
        #   @return [Array<Google::Cloud::Retail::V2alpha::ProductDetail>]
        #     The main product details related to the event.
        #
        #     This field is required for the following event types:
        #
        #     * `add-to-cart`
        #     * `detail-page-view`
        #     * `purchase-complete`
        #
        #     In a `search` event, this field represents the products returned to the end
        #     user on the current page (the end user may have not finished broswing the
        #     whole page yet). When a new page is returned to the end user, after
        #     pagination/filtering/ordering even for the same query, a new `search` event
        #     with different
        #     {Google::Cloud::Retail::V2alpha::UserEvent#product_details product_details} is
        #     desired. The end user may have not finished broswing the whole page yet.
        # @!attribute [rw] attributes
        #   @return [Hash{String => Google::Cloud::Retail::V2alpha::CustomAttribute}]
        #     Extra user event features to include in the recommendation model.
        #
        #     The key must be a UTF-8 encoded string with a length limit of 5,000
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        #
        #     For product recommendation, an example of extra user information is
        #     traffic_channel, i.e. how user arrives at the site. Users can arrive
        #     at the site by coming to the site directly, or coming through Google
        #     search, and etc.
        # @!attribute [rw] cart_id
        #   @return [String]
        #     The id or name of the associated shopping cart. This id is used
        #     to associate multiple items added or present in the cart before purchase.
        #
        #     This can only be set for `add-to-cart`, `purchase-complete`, or
        #     `shopping-cart-page-view` events.
        # @!attribute [rw] purchase_transaction
        #   @return [Google::Cloud::Retail::V2alpha::PurchaseTransaction]
        #     A transaction represents the entire purchase transaction.
        #
        #     Required for `purchase-complete` events. Other event types should not set
        #     this field. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] search_query
        #   @return [String]
        #     The user's search query.
        #
        #     The value must be a UTF-8 encoded string with a length limit of 5,000
        #     characters. Otherwise, an INVALID_ARGUMENT error is returned.
        #
        #     Required for `search` events. Other event types should not set this field.
        #     Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] page_categories
        #   @return [Array<String>]
        #     The categories associated with a category page.
        #
        #     To represent full path of category, use '>' sign to separate different
        #     hierarchies. If '>' is part of the category name, please replace it with
        #     other character(s).
        #
        #     Category pages include special pages such as sales or promotions. For
        #     instance, a special sale page may have the category hierarchy:
        #     "pageCategories" : ["Sales > 2017 Black Friday Deals"].
        #
        #     Required for `category-page-view` events. Other event types should not set
        #     this field. Otherwise, an INVALID_ARGUMENT error is returned.
        # @!attribute [rw] user_info
        #   @return [Google::Cloud::Retail::V2alpha::UserInfo]
        #     User information.
        # @!attribute [rw] uri
        #   @return [String]
        #     Complete URL (window.location.href) of the user's current page.
        #
        #     When using the client side event reporting with JavaScript pixel and Google
        #     Tag Manager, this value is filled in automatically. Maximum length 5,000
        #     characters.
        # @!attribute [rw] referrer_uri
        #   @return [String]
        #     The referrer URL of the current page.
        #
        #     When using the client side event reporting with JavaScript pixel and Google
        #     Tag Manager, this value is filled in automatically.
        # @!attribute [rw] page_view_id
        #   @return [String]
        #     A unique id of a web page view.
        #
        #     This should be kept the same for all user events triggered from the same
        #     pageview. For example, an item detail page view could trigger multiple
        #     events as the user is browsing the page. The `pageViewId` property should
        #     be kept the same for all these events so that they can be grouped together
        #     properly.
        #
        #     When using the client side event reporting with JavaScript pixel and Google
        #     Tag Manager, this value is filled in automatically.
        class UserEvent; end

        # Detailed product information associated with a user event.
        # @!attribute [rw] product
        #   @return [Google::Cloud::Retail::V2alpha::Product]
        #     Required. {Google::Cloud::Retail::V2alpha::Product Product} information.
        #
        #     Only {Google::Cloud::Retail::V2alpha::Product#id Product#id} field is used
        #     when ingesting an event, all other product fields are ignored as we will
        #     look them up from the catalog.
        # @!attribute [rw] quantity
        #   @return [Google::Protobuf::Int32Value]
        #     Quantity of the product associated with the user event.
        #
        #     For example, this field will be 2 if two products are added to the shopping
        #     cart for `purchase-complete` event. Required for `add-to-cart` and
        #     `purchase-complete` event types.
        class ProductDetail; end

        # A transaction represents the entire purchase transaction.
        # @!attribute [rw] id
        #   @return [String]
        #     The transaction ID with a length limit of 128 characters.
        # @!attribute [rw] revenue
        #   @return [Float]
        #     Required. Total non-zero revenue or grand total associated with the
        #     transaction. This value include shipping, tax, or other adjustments to
        #     total revenue that you want to include as part of your revenue
        #     calculations.
        # @!attribute [rw] tax
        #   @return [Float]
        #     All the taxes associated with the transaction.
        # @!attribute [rw] cost
        #   @return [Float]
        #     All the costs associated with the products. These can be manufacturing
        #     costs, shipping expenses not borne by the end user, or any other costs,
        #     such that:
        #
        #     * Profit =
        #       {Google::Cloud::Retail::V2alpha::PurchaseTransaction#revenue revenue} -
        #       {Google::Cloud::Retail::V2alpha::PurchaseTransaction#tax tax} -
        #       {Google::Cloud::Retail::V2alpha::PurchaseTransaction#cost cost}
        # @!attribute [rw] currency_code
        #   @return [String]
        #     Required. Currency code. Use three-character ISO-4217 code.
        class PurchaseTransaction; end
      end
    end
  end
end