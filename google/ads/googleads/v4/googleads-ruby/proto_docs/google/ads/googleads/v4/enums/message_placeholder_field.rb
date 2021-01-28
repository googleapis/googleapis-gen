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
          # Values for Message placeholder fields.
          class MessagePlaceholderFieldEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible values for Message placeholder fields.
            module MessagePlaceholderField
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Data Type: STRING. The name of your business.
              BUSINESS_NAME = 2

              # Data Type: STRING. Country code of phone number.
              COUNTRY_CODE = 3

              # Data Type: STRING. A phone number that's capable of sending and receiving
              # text messages.
              PHONE_NUMBER = 4

              # Data Type: STRING. The text that will go in your click-to-message ad.
              MESSAGE_EXTENSION_TEXT = 5

              # Data Type: STRING. The message text automatically shows in people's
              # messaging apps when they tap to send you a message.
              MESSAGE_TEXT = 6
            end
          end
        end
      end
    end
  end
end
