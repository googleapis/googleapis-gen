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
        module Services
          module ConversionActionService
            # Path helper methods for the ConversionActionService API.
            module Paths
              ##
              # Create a fully-qualified ConversionAction resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/conversionActions/{conversion_action}`
              #
              # @param customer [String]
              # @param conversion_action [String]
              #
              # @return [::String]
              def conversion_action_path customer:, conversion_action:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/conversionActions/#{conversion_action}"
              end

              ##
              # Create a fully-qualified Customer resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}`
              #
              # @param customer [String]
              #
              # @return [::String]
              def customer_path customer:
                "customers/#{customer}"
              end

              extend self
            end
          end
        end
      end
    end
  end
end
