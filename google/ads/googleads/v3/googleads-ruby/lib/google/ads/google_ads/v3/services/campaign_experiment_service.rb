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

require "google/ads/google_ads/version"

require "google/ads/google_ads/v3/services/campaign_experiment_service/credentials"
require "google/ads/google_ads/v3/services/campaign_experiment_service/paths"
require "google/ads/google_ads/v3/services/campaign_experiment_service/operations"
require "google/ads/google_ads/v3/services/campaign_experiment_service/client"

module Google
  module Ads
    module GoogleAds
      module V3
        module Services
          ##
          # CampaignExperimentService manages the life cycle of campaign experiments.
          # It is used to create new experiments from drafts, modify experiment
          # properties, promote changes in an experiment back to its base campaign,
          # graduate experiments into new stand-alone campaigns, and to remove an
          # experiment.
          #
          # An experiment consists of two variants or arms - the base campaign and the
          # experiment campaign, directing a fixed share of traffic to each arm.
          # A campaign experiment is created from a draft of changes to the base campaign
          # and will be a snapshot of changes in the draft at the time of creation.
          #
          # To load this service and instantiate a client:
          #
          #     require "google/ads/google_ads/v3/services/campaign_experiment_service"
          #     client = ::Google::Ads::GoogleAds::V3::Services::CampaignExperimentService::Client.new
          #
          module CampaignExperimentService
          end
        end
      end
    end
  end
end

helper_path = ::File.join __dir__, "campaign_experiment_service", "helpers.rb"
require "google/ads/google_ads/v3/services/campaign_experiment_service/helpers" if ::File.file? helper_path
