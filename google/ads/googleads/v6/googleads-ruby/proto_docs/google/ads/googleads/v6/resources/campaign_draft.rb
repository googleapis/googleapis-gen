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
        module Resources
          # A campaign draft.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the campaign draft.
          #     Campaign draft resource names have the form:
          #
          #     `customers/{customer_id}/campaignDrafts/{base_campaign_id}~{draft_id}`
          # @!attribute [r] draft_id
          #   @return [::Integer]
          #     Output only. The ID of the draft.
          #
          #     This field is read-only.
          # @!attribute [rw] base_campaign
          #   @return [::String]
          #     Immutable. The base campaign to which the draft belongs.
          # @!attribute [rw] name
          #   @return [::String]
          #     The name of the campaign draft.
          #
          #     This field is required and should not be empty when creating new
          #     campaign drafts.
          #
          #     It must not contain any null (code point 0x0), NL line feed
          #     (code point 0xA) or carriage return (code point 0xD) characters.
          # @!attribute [r] draft_campaign
          #   @return [::String]
          #     Output only. Resource name of the Campaign that results from overlaying the draft
          #     changes onto the base campaign.
          #
          #     This field is read-only.
          # @!attribute [r] status
          #   @return [::Google::Ads::GoogleAds::V6::Enums::CampaignDraftStatusEnum::CampaignDraftStatus]
          #     Output only. The status of the campaign draft. This field is read-only.
          #
          #     When a new campaign draft is added, the status defaults to PROPOSED.
          # @!attribute [r] has_experiment_running
          #   @return [::Boolean]
          #     Output only. Whether there is an experiment based on this draft currently serving.
          # @!attribute [r] long_running_operation
          #   @return [::String]
          #     Output only. The resource name of the long-running operation that can be used to poll
          #     for completion of draft promotion. This is only set if the draft promotion
          #     is in progress or finished.
          class CampaignDraft
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
