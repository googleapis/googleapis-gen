# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/google_ads_field.proto

require 'google/protobuf'

require 'google/ads/googleads/v4/enums/google_ads_field_category_pb'
require 'google/ads/googleads/v4/enums/google_ads_field_data_type_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v4/resources/google_ads_field.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v4.resources.GoogleAdsField" do
      optional :resource_name, :string, 1
      optional :name, :message, 2, "google.protobuf.StringValue"
      optional :category, :enum, 3, "google.ads.googleads.v4.enums.GoogleAdsFieldCategoryEnum.GoogleAdsFieldCategory"
      optional :selectable, :message, 4, "google.protobuf.BoolValue"
      optional :filterable, :message, 5, "google.protobuf.BoolValue"
      optional :sortable, :message, 6, "google.protobuf.BoolValue"
      repeated :selectable_with, :message, 7, "google.protobuf.StringValue"
      repeated :attribute_resources, :message, 8, "google.protobuf.StringValue"
      repeated :metrics, :message, 9, "google.protobuf.StringValue"
      repeated :segments, :message, 10, "google.protobuf.StringValue"
      repeated :enum_values, :message, 11, "google.protobuf.StringValue"
      optional :data_type, :enum, 12, "google.ads.googleads.v4.enums.GoogleAdsFieldDataTypeEnum.GoogleAdsFieldDataType"
      optional :type_url, :message, 13, "google.protobuf.StringValue"
      optional :is_repeated, :message, 14, "google.protobuf.BoolValue"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V4
        module Resources
          GoogleAdsField = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.GoogleAdsField").msgclass
        end
      end
    end
  end
end
