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
      module V6
        module Services
          # Request message for {::Google::Ads::GoogleAds::V6::Services::AdGroupCriterionService::Client#get_ad_group_criterion AdGroupCriterionService.GetAdGroupCriterion}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The resource name of the criterion to fetch.
          class GetAdGroupCriterionRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V6::Services::AdGroupCriterionService::Client#mutate_ad_group_criteria AdGroupCriterionService.MutateAdGroupCriteria}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. ID of the customer whose criteria are being modified.
          # @!attribute [rw] operations
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::AdGroupCriterionOperation>]
          #     Required. The list of operations to perform on individual criteria.
          # @!attribute [rw] partial_failure
          #   @return [::Boolean]
          #     If true, successful operations will be carried out and invalid
          #     operations will return errors. If false, all operations will be carried
          #     out in one transaction if and only if they are all valid.
          #     Default is false.
          # @!attribute [rw] validate_only
          #   @return [::Boolean]
          #     If true, the request is validated but not executed. Only errors are
          #     returned, not results.
          # @!attribute [rw] response_content_type
          #   @return [::Google::Ads::GoogleAds::V6::Enums::ResponseContentTypeEnum::ResponseContentType]
          #     The response content type setting. Determines whether the mutable resource
          #     or just the resource name should be returned post mutation.
          class MutateAdGroupCriteriaRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A single operation (create, remove, update) on an ad group criterion.
          # @!attribute [rw] update_mask
          #   @return [::Google::Protobuf::FieldMask]
          #     FieldMask that determines which resource fields are modified in an update.
          # @!attribute [rw] exempt_policy_violation_keys
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Common::PolicyViolationKey>]
          #     The list of policy violation keys that should not cause a
          #     PolicyViolationError to be reported. Not all policy violations are
          #     exemptable, please refer to the is_exemptible field in the returned
          #     PolicyViolationError.
          #
          #     Resources violating these polices will be saved, but will not be eligible
          #     to serve. They may begin serving at a later time due to a change in
          #     policies, re-review of the resource, or a change in advertiser
          #     certificates.
          # @!attribute [rw] create
          #   @return [::Google::Ads::GoogleAds::V6::Resources::AdGroupCriterion]
          #     Create operation: No resource name is expected for the new criterion.
          # @!attribute [rw] update
          #   @return [::Google::Ads::GoogleAds::V6::Resources::AdGroupCriterion]
          #     Update operation: The criterion is expected to have a valid resource
          #     name.
          # @!attribute [rw] remove
          #   @return [::String]
          #     Remove operation: A resource name for the removed criterion is expected,
          #     in this format:
          #
          #     `customers/{customer_id}/adGroupCriteria/{ad_group_id}~{criterion_id}`
          class AdGroupCriterionOperation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for an ad group criterion mutate.
          # @!attribute [rw] partial_failure_error
          #   @return [::Google::Rpc::Status]
          #     Errors that pertain to operation failures in the partial failure mode.
          #     Returned only when partial_failure = true and all errors occur inside the
          #     operations. If any errors occur outside the operations (e.g. auth errors),
          #     we return an RPC level error.
          # @!attribute [rw] results
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::MutateAdGroupCriterionResult>]
          #     All results for the mutate.
          class MutateAdGroupCriteriaResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result for the criterion mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Returned for successful operations.
          # @!attribute [rw] ad_group_criterion
          #   @return [::Google::Ads::GoogleAds::V6::Resources::AdGroupCriterion]
          #     The mutated ad group criterion with only mutable fields after mutate. The
          #     field will only be returned when response_content_type is set to
          #     "MUTABLE_RESOURCE".
          class MutateAdGroupCriterionResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
