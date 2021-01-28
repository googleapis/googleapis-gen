# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/ad_group_criterion_label_service.proto

require 'google/protobuf'

require 'google/ads/googleads/v3/resources/ad_group_criterion_label_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/services/ad_group_criterion_label_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.services.GetAdGroupCriterionLabelRequest" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v3.services.MutateAdGroupCriterionLabelsRequest" do
      optional :customer_id, :string, 1
      repeated :operations, :message, 2, "google.ads.googleads.v3.services.AdGroupCriterionLabelOperation"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v3.services.AdGroupCriterionLabelOperation" do
      oneof :operation do
        optional :create, :message, 1, "google.ads.googleads.v3.resources.AdGroupCriterionLabel"
        optional :remove, :string, 2
      end
    end
    add_message "google.ads.googleads.v3.services.MutateAdGroupCriterionLabelsResponse" do
      optional :partial_failure_error, :message, 3, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v3.services.MutateAdGroupCriterionLabelResult"
    end
    add_message "google.ads.googleads.v3.services.MutateAdGroupCriterionLabelResult" do
      optional :resource_name, :string, 1
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Services
          GetAdGroupCriterionLabelRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.GetAdGroupCriterionLabelRequest").msgclass
          MutateAdGroupCriterionLabelsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdGroupCriterionLabelsRequest").msgclass
          AdGroupCriterionLabelOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.AdGroupCriterionLabelOperation").msgclass
          MutateAdGroupCriterionLabelsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdGroupCriterionLabelsResponse").msgclass
          MutateAdGroupCriterionLabelResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.MutateAdGroupCriterionLabelResult").msgclass
        end
      end
    end
  end
end
