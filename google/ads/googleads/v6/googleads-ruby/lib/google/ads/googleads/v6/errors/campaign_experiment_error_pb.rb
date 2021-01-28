# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/errors/campaign_experiment_error.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/errors/campaign_experiment_error.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.errors.CampaignExperimentErrorEnum" do
    end
    add_enum "google.ads.googleads.v6.errors.CampaignExperimentErrorEnum.CampaignExperimentError" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :DUPLICATE_NAME, 2
      value :INVALID_TRANSITION, 3
      value :CANNOT_CREATE_EXPERIMENT_WITH_SHARED_BUDGET, 4
      value :CANNOT_CREATE_EXPERIMENT_FOR_REMOVED_BASE_CAMPAIGN, 5
      value :CANNOT_CREATE_EXPERIMENT_FOR_NON_PROPOSED_DRAFT, 6
      value :CUSTOMER_CANNOT_CREATE_EXPERIMENT, 7
      value :CAMPAIGN_CANNOT_CREATE_EXPERIMENT, 8
      value :EXPERIMENT_DURATIONS_MUST_NOT_OVERLAP, 9
      value :EXPERIMENT_DURATION_MUST_BE_WITHIN_CAMPAIGN_DURATION, 10
      value :CANNOT_MUTATE_EXPERIMENT_DUE_TO_STATUS, 11
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Errors
          CampaignExperimentErrorEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.errors.CampaignExperimentErrorEnum").msgclass
          CampaignExperimentErrorEnum::CampaignExperimentError = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.errors.CampaignExperimentErrorEnum.CampaignExperimentError").enummodule
        end
      end
    end
  end
end
