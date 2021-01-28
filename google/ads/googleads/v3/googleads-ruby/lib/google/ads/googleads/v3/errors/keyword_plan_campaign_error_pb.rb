# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/keyword_plan_campaign_error.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/errors/keyword_plan_campaign_error.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.errors.KeywordPlanCampaignErrorEnum" do
    end
    add_enum "google.ads.googleads.v3.errors.KeywordPlanCampaignErrorEnum.KeywordPlanCampaignError" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :INVALID_NAME, 2
      value :INVALID_LANGUAGES, 3
      value :INVALID_GEOS, 4
      value :DUPLICATE_NAME, 5
      value :MAX_GEOS_EXCEEDED, 6
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Errors
          KeywordPlanCampaignErrorEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.errors.KeywordPlanCampaignErrorEnum").msgclass
          KeywordPlanCampaignErrorEnum::KeywordPlanCampaignError = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.errors.KeywordPlanCampaignErrorEnum.KeywordPlanCampaignError").enummodule
        end
      end
    end
  end
end
