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
      module V4
        module Services
          # Request message for {::Google::Ads::GoogleAds::V4::Services::CustomerService::Client#get_customer CustomerService.GetCustomer}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The resource name of the customer to fetch.
          class GetCustomerRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V4::Services::CustomerService::Client#mutate_customer CustomerService.MutateCustomer}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. The ID of the customer being modified.
          # @!attribute [rw] operation
          #   @return [::Google::Ads::GoogleAds::V4::Services::CustomerOperation]
          #     Required. The operation to perform on the customer
          # @!attribute [rw] validate_only
          #   @return [::Boolean]
          #     If true, the request is validated but not executed. Only errors are
          #     returned, not results.
          class MutateCustomerRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V4::Services::CustomerService::Client#create_customer_client CustomerService.CreateCustomerClient}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. The ID of the Manager under whom client customer is being created.
          # @!attribute [rw] customer_client
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Customer]
          #     Required. The new client customer to create. The resource name on this customer
          #     will be ignored.
          # @!attribute [rw] email_address
          #   @return [::Google::Protobuf::StringValue]
          #     Email address of the user who should be invited on the created client
          #     customer. Accessible only to customers on the allow-list.
          # @!attribute [rw] access_role
          #   @return [::Google::Ads::GoogleAds::V4::Enums::AccessRoleEnum::AccessRole]
          #     The proposed role of user on the created client customer.
          #     Accessible only to customers on the allow-list.
          class CreateCustomerClientRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A single update on a customer.
          # @!attribute [rw] update
          #   @return [::Google::Ads::GoogleAds::V4::Resources::Customer]
          #     Mutate operation. Only updates are supported for customer.
          # @!attribute [rw] update_mask
          #   @return [::Google::Protobuf::FieldMask]
          #     FieldMask that determines which resource fields are modified in an update.
          class CustomerOperation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for CreateCustomerClient mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     The resource name of the newly created customer client.
          # @!attribute [rw] invitation_link
          #   @return [::String]
          #     Link for inviting user to access the created customer. Accessible to
          #     allowlisted customers only.
          class CreateCustomerClientResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for customer mutate.
          # @!attribute [rw] result
          #   @return [::Google::Ads::GoogleAds::V4::Services::MutateCustomerResult]
          #     Result for the mutate.
          class MutateCustomerResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result for the customer mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Returned for successful operations.
          class MutateCustomerResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V4::Services::CustomerService::Client#list_accessible_customers CustomerService.ListAccessibleCustomers}.
          class ListAccessibleCustomersRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for {::Google::Ads::GoogleAds::V4::Services::CustomerService::Client#list_accessible_customers CustomerService.ListAccessibleCustomers}.
          # @!attribute [rw] resource_names
          #   @return [::Array<::String>]
          #     Resource name of customers directly accessible by the
          #     user authenticating the call.
          class ListAccessibleCustomersResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
