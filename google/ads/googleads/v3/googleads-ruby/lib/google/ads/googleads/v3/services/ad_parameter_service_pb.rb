# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/ad_parameter_service.proto

require 'google/protobuf'

require 'google/ads/googleads/v3/resources/ad_parameter_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/field_mask_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/services/ad_parameter_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.services.GetAdParameterRequest" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v3.services.MutateAdParametersRequest" do
      optional :customer_id, :string, 1
      repeated :operations, :message, 2, "google.ads.googleads.v3.services.AdParameterOperation"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v3.services.AdParameterOperation" do
      optional :update_mask, :message, 4, "google.protobuf.FieldMask"
      oneof :operation do
        optional :create, :message, 1, "google.ads.googleads.v3.resources.AdParameter"
        optional :update, :message, 2, "google.ads.googleads.v3.resources.AdParameter"
        optional :remove, :string, 3
      end
    end
    add_message "google.ads.googleads.v3.services.MutateAdParametersResponse" do
      optional :partial_failure_error, :message, 3, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v3.services.MutateAdParameterResult"
    end
    add_message "google.ads.googleads.v3.services.MutateAdParameterResult" do
      optional :resource_name, :string, 1
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Services
          GetAdParameterRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.GetAdParameterRequest").msgclass
          MutateAdParametersRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdParametersRequest").msgclass
          AdParameterOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.AdParameterOperation").msgclass
          MutateAdParametersResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdParametersResponse").msgclass
          MutateAdParameterResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdParameterResult").msgclass
        end
      end
    end
  end
end
