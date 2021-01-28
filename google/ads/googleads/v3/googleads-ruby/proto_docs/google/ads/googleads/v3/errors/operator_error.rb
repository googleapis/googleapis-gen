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
        module Errors
          # Container for enum describing possible operator errors.
          class OperatorErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible operator errors.
            module OperatorError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # Operator not supported.
              OPERATOR_NOT_SUPPORTED = 2
            end
          end
        end
      end
    end
  end
end
