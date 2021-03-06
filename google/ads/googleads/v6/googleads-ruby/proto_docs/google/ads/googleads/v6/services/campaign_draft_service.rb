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
          # Request message for {::Google::Ads::GoogleAds::V6::Services::CampaignDraftService::Client#get_campaign_draft CampaignDraftService.GetCampaignDraft}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The resource name of the campaign draft to fetch.
          class GetCampaignDraftRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V6::Services::CampaignDraftService::Client#mutate_campaign_drafts CampaignDraftService.MutateCampaignDrafts}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     Required. The ID of the customer whose campaign drafts are being modified.
          # @!attribute [rw] operations
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::CampaignDraftOperation>]
          #     Required. The list of operations to perform on individual campaign drafts.
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
          class MutateCampaignDraftsRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V6::Services::CampaignDraftService::Client#promote_campaign_draft CampaignDraftService.PromoteCampaignDraft}.
          # @!attribute [rw] campaign_draft
          #   @return [::String]
          #     Required. The resource name of the campaign draft to promote.
          class PromoteCampaignDraftRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A single operation (create, update, remove) on a campaign draft.
          # @!attribute [rw] update_mask
          #   @return [::Google::Protobuf::FieldMask]
          #     FieldMask that determines which resource fields are modified in an update.
          # @!attribute [rw] create
          #   @return [::Google::Ads::GoogleAds::V6::Resources::CampaignDraft]
          #     Create operation: No resource name is expected for the new campaign
          #     draft.
          # @!attribute [rw] update
          #   @return [::Google::Ads::GoogleAds::V6::Resources::CampaignDraft]
          #     Update operation: The campaign draft is expected to have a valid
          #     resource name.
          # @!attribute [rw] remove
          #   @return [::String]
          #     Remove operation: The campaign draft is expected to have a valid
          #     resource name, in this format:
          #
          #     `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
          class CampaignDraftOperation
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for campaign draft mutate.
          # @!attribute [rw] partial_failure_error
          #   @return [::Google::Rpc::Status]
          #     Errors that pertain to operation failures in the partial failure mode.
          #     Returned only when partial_failure = true and all errors occur inside the
          #     operations. If any errors occur outside the operations (e.g. auth errors),
          #     we return an RPC level error.
          # @!attribute [rw] results
          #   @return [::Array<::Google::Ads::GoogleAds::V6::Services::MutateCampaignDraftResult>]
          #     All results for the mutate.
          class MutateCampaignDraftsResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result for the campaign draft mutate.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Returned for successful operations.
          # @!attribute [rw] campaign_draft
          #   @return [::Google::Ads::GoogleAds::V6::Resources::CampaignDraft]
          #     The mutated campaign draft with only mutable fields after mutate. The field
          #     will only be returned when response_content_type is set to
          #     "MUTABLE_RESOURCE".
          class MutateCampaignDraftResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Request message for {::Google::Ads::GoogleAds::V6::Services::CampaignDraftService::Client#list_campaign_draft_async_errors CampaignDraftService.ListCampaignDraftAsyncErrors}.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Required. The name of the campaign draft from which to retrieve the async errors.
          # @!attribute [rw] page_token
          #   @return [::String]
          #     Token of the page to retrieve. If not specified, the first
          #     page of results will be returned. Use the value obtained from
          #     `next_page_token` in the previous response in order to request
          #     the next page of results.
          # @!attribute [rw] page_size
          #   @return [::Integer]
          #     Number of elements to retrieve in a single page.
          #     When a page request is too large, the server may decide to
          #     further limit the number of returned resources.
          class ListCampaignDraftAsyncErrorsRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for {::Google::Ads::GoogleAds::V6::Services::CampaignDraftService::Client#list_campaign_draft_async_errors CampaignDraftService.ListCampaignDraftAsyncErrors}.
          # @!attribute [rw] errors
          #   @return [::Array<::Google::Rpc::Status>]
          #     Details of the errors when performing the asynchronous operation.
          # @!attribute [rw] next_page_token
          #   @return [::String]
          #     Pagination token used to retrieve the next page of results.
          #     Pass the content of this string as the `page_token` attribute of
          #     the next request. `next_page_token` is not returned for the last
          #     page.
          class ListCampaignDraftAsyncErrorsResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
