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
      module V3
        module Enums
          # Indicates the way the resource such as user list is related to a user.
          class AccessReasonEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible access reasons.
            module AccessReason
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # The resource is owned by the user.
              OWNED = 2

              # The resource is shared to the user.
              SHARED = 3

              # The resource is licensed to the user.
              LICENSED = 4

              # The user subscribed to the resource.
              SUBSCRIBED = 5

              # The resource is accessible to the user.
              AFFILIATED = 6
            end
          end
        end
      end
    end
  end
end
