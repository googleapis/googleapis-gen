# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/shared_set_error.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/errors/shared_set_error.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.errors.SharedSetErrorEnum" do
    end
    add_enum "google.ads.googleads.v5.errors.SharedSetErrorEnum.SharedSetError" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :CUSTOMER_CANNOT_CREATE_SHARED_SET_OF_THIS_TYPE, 2
      value :DUPLICATE_NAME, 3
      value :SHARED_SET_REMOVED, 4
      value :SHARED_SET_IN_USE, 5
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Errors
          SharedSetErrorEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.SharedSetErrorEnum").msgclass
          SharedSetErrorEnum::SharedSetError = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.errors.SharedSetErrorEnum.SharedSetError").enummodule
        end
      end
    end
  end
end
