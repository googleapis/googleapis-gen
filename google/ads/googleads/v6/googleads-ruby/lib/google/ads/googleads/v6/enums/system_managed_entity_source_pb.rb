# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/system_managed_entity_source.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/enums/system_managed_entity_source.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.enums.SystemManagedResourceSourceEnum" do
    end
    add_enum "google.ads.googleads.v6.enums.SystemManagedResourceSourceEnum.SystemManagedResourceSource" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :AD_VARIATIONS, 2
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Enums
          SystemManagedResourceSourceEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.SystemManagedResourceSourceEnum").msgclass
          SystemManagedResourceSourceEnum::SystemManagedResourceSource = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.SystemManagedResourceSourceEnum.SystemManagedResourceSource").enummodule
        end
      end
    end
  end
end
