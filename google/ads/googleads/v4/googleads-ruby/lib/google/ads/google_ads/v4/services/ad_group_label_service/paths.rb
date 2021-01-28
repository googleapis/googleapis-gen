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
          module AdGroupLabelService
            # Path helper methods for the AdGroupLabelService API.
            module Paths
              ##
              # Create a fully-qualified AdGroup resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroups/{ad_group}`
              #
              # @param customer [String]
              # @param ad_group [String]
              #
              # @return [::String]
              def ad_group_path customer:, ad_group:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroups/#{ad_group}"
              end

              ##
              # Create a fully-qualified AdGroupLabel resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroupLabels/{ad_group_label}`
              #
              # @param customer [String]
              # @param ad_group_label [String]
              #
              # @return [::String]
              def ad_group_label_path customer:, ad_group_label:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroupLabels/#{ad_group_label}"
              end

              ##
              # Create a fully-qualified Label resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/labels/{label}`
              #
              # @param customer [String]
              # @param label [String]
              #
              # @return [::String]
              def label_path customer:, label:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/labels/#{label}"
              end

              extend self
            end
          end
        end
      end
    end
  end
end
