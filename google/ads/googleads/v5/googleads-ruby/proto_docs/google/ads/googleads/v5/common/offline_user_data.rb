# frozen_string_literal: true

# Copyright 2021 Google LLC
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

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Ads
    module GoogleAds
      module V5
        module Common
          # Address identifier of offline data.
          # @!attribute [rw] hashed_first_name
          #   @return [::Google::Protobuf::StringValue]
          #     First name of the user, which is hashed as SHA-256 after normalized
          #     (Lowercase all characters; Remove any extra spaces before, after, and in
          #     between).
          # @!attribute [rw] hashed_last_name
          #   @return [::Google::Protobuf::StringValue]
          #     Last name of the user, which is hashed as SHA-256 after normalized (lower
          #     case only and no punctuation).
          # @!attribute [rw] city
          #   @return [::Google::Protobuf::StringValue]
          #     City of the address. Only accepted for Store Sales Direct data.
          # @!attribute [rw] state
          #   @return [::Google::Protobuf::StringValue]
          #     State code of the address. Only accepted for Store Sales Direct data.
          # @!attribute [rw] country_code
          #   @return [::Google::Protobuf::StringValue]
          #     2-letter country code in ISO-3166-1 alpha-2 of the user's address.
          # @!attribute [rw] postal_code
          #   @return [::Google::Protobuf::StringValue]
          #     Postal code of the user's address.
          class OfflineUserAddressInfo
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Hashed user identifying information.
          # @!attribute [rw] hashed_email
          #   @return [::Google::Protobuf::StringValue]
          #     Hashed email address using SHA-256 hash function after normalization.
          # @!attribute [rw] hashed_phone_number
          #   @return [::Google::Protobuf::StringValue]
          #     Hashed phone number using SHA-256 hash function after normalization
          #     (E164 standard).
          # @!attribute [rw] mobile_id
          #   @return [::Google::Protobuf::StringValue]
          #     Mobile device ID (advertising ID/IDFA).
          # @!attribute [rw] third_party_user_id
          #   @return [::Google::Protobuf::StringValue]
          #     Advertiser-assigned user ID for Customer Match upload, or
          #     third-party-assigned user ID for SSD.
          # @!attribute [rw] address_info
          #   @return [::Google::Ads::GoogleAds::V5::Common::OfflineUserAddressInfo]
          #     Address information.
          class UserIdentifier
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Attribute of the store sales transaction.
          # @!attribute [rw] transaction_date_time
          #   @return [::Google::Protobuf::StringValue]
          #     Timestamp when transaction occurred. Required.
          #     The format is "YYYY-MM-DD HH:MM:SS".
          #     Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
          # @!attribute [rw] transaction_amount_micros
          #   @return [::Google::Protobuf::DoubleValue]
          #     Transaction amount in micros. Required.
          # @!attribute [rw] currency_code
          #   @return [::Google::Protobuf::StringValue]
          #     Transaction currency code. ISO 4217 three-letter code is used. Required.
          # @!attribute [rw] conversion_action
          #   @return [::Google::Protobuf::StringValue]
          #     The resource name of conversion action to report conversions to.
          #     Required.
          # @!attribute [rw] order_id
          #   @return [::Google::Protobuf::StringValue]
          #     Transaction order id.
          #     Accessible only to customers on the allow-list.
          # @!attribute [rw] store_attribute
          #   @return [::Google::Ads::GoogleAds::V5::Common::StoreAttribute]
          #     Store attributes of the transaction.
          #     Accessible only to customers on the allow-list.
          # @!attribute [rw] custom_value
          #   @return [::Google::Protobuf::StringValue]
          #     Value of the custom variable for each transaction.
          #     Accessible only to customers on the allow-list.
          class TransactionAttribute
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Store attributes of the transaction.
          # @!attribute [rw] store_code
          #   @return [::Google::Protobuf::StringValue]
          #     Store code from
          #     https://support.google.com/business/answer/3370250#storecode
          class StoreAttribute
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # User data holding user identifiers and attributes.
          # @!attribute [rw] user_identifiers
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Common::UserIdentifier>]
          #     User identification info. Required.
          # @!attribute [rw] transaction_attribute
          #   @return [::Google::Ads::GoogleAds::V5::Common::TransactionAttribute]
          #     Additional transactions/attributes associated with the user.
          #     Required when updating store sales data.
          class UserData
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Metadata for customer match user list.
          # @!attribute [rw] user_list
          #   @return [::Google::Protobuf::StringValue]
          #     The resource name of remarketing list to update data.
          #     Required for job of CUSTOMER_MATCH_USER_LIST type.
          class CustomerMatchUserListMetadata
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Metadata for Store Sales Direct.
          # @!attribute [rw] loyalty_fraction
          #   @return [::Google::Protobuf::DoubleValue]
          #     This is the fraction of all transactions that are identifiable (i.e.,
          #     associated with any form of customer information).
          #     Required.
          #     The fraction needs to be between 0 and 1 (excluding 0).
          # @!attribute [rw] transaction_upload_fraction
          #   @return [::Google::Protobuf::DoubleValue]
          #     This is the ratio of sales being uploaded compared to the overall sales
          #     that can be associated with a customer. Required.
          #     The fraction needs to be between 0 and 1 (excluding 0). For example, if you
          #     upload half the sales that you are able to associate with a customer, this
          #     would be 0.5.
          # @!attribute [rw] custom_key
          #   @return [::Google::Protobuf::StringValue]
          #     Name of the store sales custom variable key. A predefined key that
          #     can be applied to the transaction and then later used for custom
          #     segmentation in reporting.
          #     Accessible only to customers on the allow-list.
          # @!attribute [rw] third_party_metadata
          #   @return [::Google::Ads::GoogleAds::V5::Common::StoreSalesThirdPartyMetadata]
          #     Metadata for a third party Store Sales upload.
          class StoreSalesMetadata
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Metadata for a third party Store Sales.
          # This product is only for customers on the allow-list. Please contact your
          # Google business development representative for details on the upload
          # configuration.
          # @!attribute [rw] advertiser_upload_date_time
          #   @return [::Google::Protobuf::StringValue]
          #     Time the advertiser uploaded the data to the partner. Required.
          #     The format is "YYYY-MM-DD HH:MM:SS".
          #     Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
          # @!attribute [rw] valid_transaction_fraction
          #   @return [::Google::Protobuf::DoubleValue]
          #     The fraction of transactions that are valid. Invalid transactions may
          #     include invalid formats or values.
          #     Required.
          #     The fraction needs to be between 0 and 1 (excluding 0).
          # @!attribute [rw] partner_match_fraction
          #   @return [::Google::Protobuf::DoubleValue]
          #     The fraction of valid transactions that are matched to a third party
          #     assigned user ID on the partner side.
          #     Required.
          #     The fraction needs to be between 0 and 1 (excluding 0).
          # @!attribute [rw] partner_upload_fraction
          #   @return [::Google::Protobuf::DoubleValue]
          #     The fraction of valid transactions that are uploaded by the partner to
          #     Google.
          #     Required.
          #     The fraction needs to be between 0 and 1 (excluding 0).
          # @!attribute [rw] bridge_map_version_id
          #   @return [::Google::Protobuf::StringValue]
          #     Version of partner IDs to be used for uploads. Required.
          # @!attribute [rw] partner_id
          #   @return [::Google::Protobuf::Int64Value]
          #     ID of the third party partner updating the transaction feed.
          class StoreSalesThirdPartyMetadata
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
