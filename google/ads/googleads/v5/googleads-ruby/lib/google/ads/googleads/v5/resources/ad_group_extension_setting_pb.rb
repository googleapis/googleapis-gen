# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/ad_group_extension_setting.proto

require 'google/protobuf'

require 'google/ads/googleads/v5/enums/extension_setting_device_pb'
require 'google/ads/googleads/v5/enums/extension_type_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/resources/ad_group_extension_setting.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.resources.AdGroupExtensionSetting" do
      optional :resource_name, :string, 1
      optional :extension_type, :enum, 2, "google.ads.googleads.v5.enums.ExtensionTypeEnum.ExtensionType"
      optional :ad_group, :message, 3, "google.protobuf.StringValue"
      repeated :extension_feed_items, :message, 4, "google.protobuf.StringValue"
      optional :device, :enum, 5, "google.ads.googleads.v5.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Resources
          AdGroupExtensionSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.resources.AdGroupExtensionSetting").msgclass
        end
      end
    end
  end
end
