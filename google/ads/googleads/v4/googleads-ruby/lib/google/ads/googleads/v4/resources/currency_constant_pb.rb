# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/currency_constant.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v4/resources/currency_constant.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v4.resources.CurrencyConstant" do
      optional :resource_name, :string, 1
      optional :code, :message, 2, "google.protobuf.StringValue"
      optional :name, :message, 3, "google.protobuf.StringValue"
      optional :symbol, :message, 4, "google.protobuf.StringValue"
      optional :billable_unit_micros, :message, 5, "google.protobuf.Int64Value"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V4
        module Resources
          CurrencyConstant = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.CurrencyConstant").msgclass
        end
      end
    end
  end
end
