# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/user_list_closing_reason.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/enums/user_list_closing_reason.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.enums.UserListClosingReasonEnum" do
    end
    add_enum "google.ads.googleads.v6.enums.UserListClosingReasonEnum.UserListClosingReason" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :UNUSED, 2
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Enums
          UserListClosingReasonEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.UserListClosingReasonEnum").msgclass
          UserListClosingReasonEnum::UserListClosingReason = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.UserListClosingReasonEnum.UserListClosingReason").enummodule
        end
      end
    end
  end
end
