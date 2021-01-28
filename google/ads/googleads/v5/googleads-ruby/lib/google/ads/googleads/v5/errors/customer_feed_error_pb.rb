# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/customer_feed_error.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/errors/customer_feed_error.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.errors.CustomerFeedErrorEnum" do
    end
    add_enum "google.ads.googleads.v5.errors.CustomerFeedErrorEnum.CustomerFeedError" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE, 2
      value :CANNOT_CREATE_FOR_REMOVED_FEED, 3
      value :CANNOT_CREATE_ALREADY_EXISTING_CUSTOMER_FEED, 4
      value :CANNOT_MODIFY_REMOVED_CUSTOMER_FEED, 5
      value :INVALID_PLACEHOLDER_TYPE, 6
      value :MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE, 7
      value :PLACEHOLDER_TYPE_NOT_ALLOWED_ON_CUSTOMER_FEED, 8
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Errors
          CustomerFeedErrorEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.CustomerFeedErrorEnum").msgclass
          CustomerFeedErrorEnum::CustomerFeedError = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.CustomerFeedErrorEnum.CustomerFeedError").enummodule
        end
      end
    end
  end
end
