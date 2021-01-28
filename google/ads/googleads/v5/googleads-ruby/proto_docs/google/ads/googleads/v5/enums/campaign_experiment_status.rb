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
        module Enums
          # Container for enum describing possible statuses of a campaign experiment.
          class CampaignExperimentStatusEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible statuses of a campaign experiment.
            module CampaignExperimentStatus
              # The status has not been specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # The experiment campaign is being initialized.
              INITIALIZING = 2

              # Initialization of the experiment campaign failed.
              INITIALIZATION_FAILED = 8

              # The experiment campaign is fully initialized. The experiment is currently
              # running, scheduled to run in the future or has ended based on its
              # end date. An experiment with the status INITIALIZING will be updated to
              # ENABLED when it is fully created.
              ENABLED = 3

              # The experiment campaign was graduated to a stand-alone
              # campaign, existing independently of the experiment.
              GRADUATED = 4

              # The experiment is removed.
              REMOVED = 5

              # The experiment's changes are being applied to the original campaign.
              # The long running operation returned by the promote method can be polled
              # to see the status of the promotion.
              PROMOTING = 6

              # Promote of the experiment campaign failed.
              PROMOTION_FAILED = 9

              # The changes of the experiment are promoted to their original campaign.
              PROMOTED = 7

              # The experiment was ended manually. It did not end based on its end date.
              ENDED_MANUALLY = 10
            end
          end
        end
      end
    end
  end
end
