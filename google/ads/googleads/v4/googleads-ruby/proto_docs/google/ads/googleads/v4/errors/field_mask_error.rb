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
        module Errors
          # Container for enum describing possible field mask errors.
          class FieldMaskErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible field mask errors.
            module FieldMaskError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # The field mask must be provided for update operations.
              FIELD_MASK_MISSING = 5

              # The field mask must be empty for create and remove operations.
              FIELD_MASK_NOT_ALLOWED = 4

              # The field mask contained an invalid field.
              FIELD_NOT_FOUND = 2

              # The field mask updated a field with subfields. Fields with subfields may
              # be cleared, but not updated. To fix this, the field mask should select
              # all the subfields of the invalid field.
              FIELD_HAS_SUBFIELDS = 3
            end
          end
        end
      end
    end
  end
end
