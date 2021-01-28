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
        module Services
          module SharedCriterionService
            # Path helper methods for the SharedCriterionService API.
            module Paths
              ##
              # Create a fully-qualified SharedCriterion resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/sharedCriteria/{shared_criterion}`
              #
              # @param customer [String]
              # @param shared_criterion [String]
              #
              # @return [::String]
              def shared_criterion_path customer:, shared_criterion:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/sharedCriteria/#{shared_criterion}"
              end

              ##
              # Create a fully-qualified SharedSet resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/sharedSets/{shared_set}`
              #
              # @param customer [String]
              # @param shared_set [String]
              #
              # @return [::String]
              def shared_set_path customer:, shared_set:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/sharedSets/#{shared_set}"
              end

              extend self
            end
          end
        end
      end
    end
  end
end
