# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/asset_link_status.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/enums/asset_link_status.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.enums.AssetLinkStatusEnum" do
    end
    add_enum "google.ads.googleads.v5.enums.AssetLinkStatusEnum.AssetLinkStatus" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :ENABLED, 2
      value :REMOVED, 3
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Enums
          AssetLinkStatusEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.AssetLinkStatusEnum").msgclass
          AssetLinkStatusEnum::AssetLinkStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.AssetLinkStatusEnum.AssetLinkStatus").enummodule
        end
      end
    end
  end
end
