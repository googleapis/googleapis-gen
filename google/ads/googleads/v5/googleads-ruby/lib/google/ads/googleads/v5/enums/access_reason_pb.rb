# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/access_reason.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/enums/access_reason.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.enums.AccessReasonEnum" do
    end
    add_enum "google.ads.googleads.v5.enums.AccessReasonEnum.AccessReason" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :OWNED, 2
      value :SHARED, 3
      value :LICENSED, 4
      value :SUBSCRIBED, 5
      value :AFFILIATED, 6
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Enums
          AccessReasonEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.AccessReasonEnum").msgclass
          AccessReasonEnum::AccessReason = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.AccessReasonEnum.AccessReason").enummodule
        end
      end
    end
  end
end
