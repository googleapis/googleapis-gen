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
        module Enums
          # Message describing BiddingStrategy statuses.
          class BiddingStrategyStatusEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # The possible statuses of a BiddingStrategy.
            module BiddingStrategyStatus
              # No value has been specified.
              UNSPECIFIED = 0

              # The received value is not known in this version.
              #
              # This is a response-only value.
              UNKNOWN = 1

              # The bidding strategy is enabled.
              ENABLED = 2

              # The bidding strategy is removed.
              REMOVED = 4
            end
          end
        end
      end
    end
  end
end
