# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/geo_target_constant_suggestion_error.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/errors/geo_target_constant_suggestion_error.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.errors.GeoTargetConstantSuggestionErrorEnum" do
    end
    add_enum "google.ads.googleads.v5.errors.GeoTargetConstantSuggestionErrorEnum.GeoTargetConstantSuggestionError" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :LOCATION_NAME_SIZE_LIMIT, 2
      value :LOCATION_NAME_LIMIT, 3
      value :INVALID_COUNTRY_CODE, 4
      value :REQUEST_PARAMETERS_UNSET, 5
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Errors
          GeoTargetConstantSuggestionErrorEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.GeoTargetConstantSuggestionErrorEnum").msgclass
          GeoTargetConstantSuggestionErrorEnum::GeoTargetConstantSuggestionError = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.GeoTargetConstantSuggestionErrorEnum.GeoTargetConstantSuggestionError").enummodule
        end
      end
    end
  end
end
