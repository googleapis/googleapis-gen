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
        module Enums
          # Describes the type of post-submit call-to-action phrases for a lead form.
          class LeadFormPostSubmitCallToActionTypeEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Enum describing the type of post-submit call-to-action phrases for a lead
            # form.
            module LeadFormPostSubmitCallToActionType
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Visit site.
              VISIT_SITE = 2

              # Download.
              DOWNLOAD = 3

              # Learn more.
              LEARN_MORE = 4

              # Shop now.
              SHOP_NOW = 5
            end
          end
        end
      end
    end
  end
end
