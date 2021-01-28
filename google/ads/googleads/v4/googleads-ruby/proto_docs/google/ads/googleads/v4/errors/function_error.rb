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
          # Container for enum describing possible function errors.
          class FunctionErrorEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing possible function errors.
            module FunctionError
              # Enum unspecified.
              UNSPECIFIED = 0

              # The received error code is not known in this version.
              UNKNOWN = 1

              # The format of the function is not recognized as a supported function
              # format.
              INVALID_FUNCTION_FORMAT = 2

              # Operand data types do not match.
              DATA_TYPE_MISMATCH = 3

              # The operands cannot be used together in a conjunction.
              INVALID_CONJUNCTION_OPERANDS = 4

              # Invalid numer of Operands.
              INVALID_NUMBER_OF_OPERANDS = 5

              # Operand Type not supported.
              INVALID_OPERAND_TYPE = 6

              # Operator not supported.
              INVALID_OPERATOR = 7

              # Request context type not supported.
              INVALID_REQUEST_CONTEXT_TYPE = 8

              # The matching function is not allowed for call placeholders
              INVALID_FUNCTION_FOR_CALL_PLACEHOLDER = 9

              # The matching function is not allowed for the specified placeholder
              INVALID_FUNCTION_FOR_PLACEHOLDER = 10

              # Invalid operand.
              INVALID_OPERAND = 11

              # Missing value for the constant operand.
              MISSING_CONSTANT_OPERAND_VALUE = 12

              # The value of the constant operand is invalid.
              INVALID_CONSTANT_OPERAND_VALUE = 13

              # Invalid function nesting.
              INVALID_NESTING = 14

              # The Feed ID was different from another Feed ID in the same function.
              MULTIPLE_FEED_IDS_NOT_SUPPORTED = 15

              # The matching function is invalid for use with a feed with a fixed schema.
              INVALID_FUNCTION_FOR_FEED_WITH_FIXED_SCHEMA = 16

              # Invalid attribute name.
              INVALID_ATTRIBUTE_NAME = 17
            end
          end
        end
      end
    end
  end
end
