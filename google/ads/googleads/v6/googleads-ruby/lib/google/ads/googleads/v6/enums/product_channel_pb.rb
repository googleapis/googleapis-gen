# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/product_channel.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/enums/product_channel.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.enums.ProductChannelEnum" do
    end
    add_enum "google.ads.googleads.v6.enums.ProductChannelEnum.ProductChannel" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :ONLINE, 2
      value :LOCAL, 3
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Enums
          ProductChannelEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.ProductChannelEnum").msgclass
          ProductChannelEnum::ProductChannel = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.ProductChannelEnum.ProductChannel").enummodule
        end
      end
    end
  end
end
