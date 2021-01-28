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
        module Errors
          # Container for enum describing possible campaign draft errors.
          class CampaignDraftErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible campaign draft errors.
            module CampaignDraftError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # A draft with this name already exists for this campaign.
              DUPLICATE_DRAFT_NAME = 2

              # The draft is removed and cannot be transitioned to another status.
              INVALID_STATUS_TRANSITION_FROM_REMOVED = 3

              # The draft has been promoted and cannot be transitioned to the specified
              # status.
              INVALID_STATUS_TRANSITION_FROM_PROMOTED = 4

              # The draft has failed to be promoted and cannot be transitioned to the
              # specified status.
              INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED = 5

              # This customer is not allowed to create drafts.
              CUSTOMER_CANNOT_CREATE_DRAFT = 6

              # This campaign is not allowed to create drafts.
              CAMPAIGN_CANNOT_CREATE_DRAFT = 7

              # This modification cannot be made on a draft.
              INVALID_DRAFT_CHANGE = 8

              # The draft cannot be transitioned to the specified status from its
              # current status.
              INVALID_STATUS_TRANSITION = 9

              # The campaign has reached the maximum number of drafts that can be created
              # for a campaign throughout its lifetime. No additional drafts can be
              # created for this campaign. Removed drafts also count towards this limit.
              MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED = 10

              # ListAsyncErrors was called without first promoting the draft.
              LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLY = 11
            end
          end
        end
      end
    end
  end
end
