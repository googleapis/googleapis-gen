# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/bidding_strategy.proto

require 'google/protobuf'

require 'google/ads/googleads/v3/common/bidding_pb'
require 'google/ads/googleads/v3/enums/bidding_strategy_status_pb'
require 'google/ads/googleads/v3/enums/bidding_strategy_type_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/resources/bidding_strategy.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.resources.BiddingStrategy" do
      optional :resource_name, :string, 1
      optional :id, :message, 3, "google.protobuf.Int64Value"
      optional :name, :message, 4, "google.protobuf.StringValue"
      optional :status, :enum, 15, "google.ads.googleads.v3.enums.BiddingStrategyStatusEnum.BiddingStrategyStatus"
      optional :type, :enum, 5, "google.ads.googleads.v3.enums.BiddingStrategyTypeEnum.BiddingStrategyType"
      optional :campaign_count, :message, 13, "google.protobuf.Int64Value"
      optional :non_removed_campaign_count, :message, 14, "google.protobuf.Int64Value"
      oneof :scheme do
        optional :enhanced_cpc, :message, 7, "google.ads.googleads.v3.common.EnhancedCpc"
        optional :target_cpa, :message, 9, "google.ads.googleads.v3.common.TargetCpa"
        optional :target_impression_share, :message, 48, "google.ads.googleads.v3.common.TargetImpressionShare"
        optional :target_roas, :message, 11, "google.ads.googleads.v3.common.TargetRoas"
        optional :target_spend, :message, 12, "google.ads.googleads.v3.common.TargetSpend"
      end
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Resources
          BiddingStrategy = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.resources.BiddingStrategy").msgclass
        end
      end
    end
  end
end
