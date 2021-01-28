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
        module Errors
          # Container for enum describing possible internal errors.
          class InternalErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible internal errors.
            module InternalError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Google Ads API encountered unexpected internal error.
              INTERNAL_ERROR = 2

              # The intended error code doesn't exist in specified API version. It will
              # be released in a future API version.
              ERROR_CODE_NOT_PUBLISHED = 3

              # Google Ads API encountered an unexpected transient error. The user
              # should retry their request in these cases.
              TRANSIENT_ERROR = 4

              # The request took longer than a deadline.
              DEADLINE_EXCEEDED = 5
            end
          end
        end
      end
    end
  end
end
