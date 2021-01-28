# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/campaign_bid_modifier_service.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/resources/campaign_bid_modifier_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/field_mask_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/services/campaign_bid_modifier_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.services.GetCampaignBidModifierRequest" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v6.services.MutateCampaignBidModifiersRequest" do
      optional :customer_id, :string, 1
      repeated :operations, :message, 2, "google.ads.googleads.v6.services.CampaignBidModifierOperation"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v6.services.CampaignBidModifierOperation" do
      optional :update_mask, :message, 4, "google.protobuf.FieldMask"
      oneof :operation do
        optional :create, :message, 1, "google.ads.googleads.v6.resources.CampaignBidModifier"
        optional :update, :message, 2, "google.ads.googleads.v6.resources.CampaignBidModifier"
        optional :remove, :string, 3
      end
    end
    add_message "google.ads.googleads.v6.services.MutateCampaignBidModifiersResponse" do
      optional :partial_failure_error, :message, 3, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v6.services.MutateCampaignBidModifierResult"
    end
    add_message "google.ads.googleads.v6.services.MutateCampaignBidModifierResult" do
      optional :resource_name, :string, 1
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Services
          GetCampaignBidModifierRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.GetCampaignBidModifierRequest").msgclass
          MutateCampaignBidModifiersRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateCampaignBidModifiersRequest").msgclass
          CampaignBidModifierOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.CampaignBidModifierOperation").msgclass
          MutateCampaignBidModifiersResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateCampaignBidModifiersResponse").msgclass
          MutateCampaignBidModifierResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateCampaignBidModifierResult").msgclass
        end
      end
    end
  end
end
