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

require "gapic/common"
require "gapic/config"
require "gapic/config/method"

require "google/cloud/api/serviceusage/v1/version"

require "google/api/serviceusage/v1/service_usage/credentials"
require "google/api/serviceusage/v1/service_usage/operations"
require "google/api/serviceusage/v1/service_usage/client"

module Google
  module Api
    module Serviceusage
      module V1
        ##
        # [Service Usage API](/service-usage/docs/overview)
        #
        # To load this service and instantiate a client:
        #
        #     require "google/api/serviceusage/v1/service_usage"
        #     client = ::Google::Api::Serviceusage::V1::ServiceUsage::Client.new
        #
        module ServiceUsage
        end
      end
    end
  end
end

helper_path = ::File.join __dir__, "service_usage", "helpers.rb"
require "google/api/serviceusage/v1/service_usage/helpers" if ::File.file? helper_path
