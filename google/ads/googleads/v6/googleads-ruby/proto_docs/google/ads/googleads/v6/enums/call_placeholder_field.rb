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
          # Values for Call placeholder fields.
          class CallPlaceholderFieldEnum
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods

            # Possible values for Call placeholder fields.
            module CallPlaceholderField
              # Not specified.
              UNSPECIFIED = 0

              # Used for return value only. Represents value unknown in this version.
              UNKNOWN = 1

              # Data Type: STRING. The advertiser's phone number to append to the ad.
              PHONE_NUMBER = 2

              # Data Type: STRING. Uppercase two-letter country code of the advertiser's
              # phone number.
              COUNTRY_CODE = 3

              # Data Type: BOOLEAN. Indicates whether call tracking is enabled. Default:
              # true.
              TRACKED = 4

              # Data Type: INT64. The ID of an AdCallMetricsConversion object. This
              # object contains the phoneCallDurationfield which is the minimum duration
              # (in seconds) of a call to be considered a conversion.
              CONVERSION_TYPE_ID = 5

              # Data Type: STRING. Indicates whether this call extension uses its own
              # call conversion setting or follows the account level setting.
              # Valid values are: USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION and
              # USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTION.
              CONVERSION_REPORTING_STATE = 6
            end
          end
        end
      end
    end
  end
end
