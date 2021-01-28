# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/ad_group_feed_service.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/enums/response_content_type_pb'
require 'google/ads/googleads/v6/resources/ad_group_feed_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/field_mask_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/services/ad_group_feed_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.services.GetAdGroupFeedRequest" do
      optional :resource_name, :string, 1
    end
    add_message "google.ads.googleads.v6.services.MutateAdGroupFeedsRequest" do
      optional :customer_id, :string, 1
      repeated :operations, :message, 2, "google.ads.googleads.v6.services.AdGroupFeedOperation"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
      optional :response_content_type, :enum, 5, "google.ads.googleads.v6.enums.ResponseContentTypeEnum.ResponseContentType"
    end
    add_message "google.ads.googleads.v6.services.AdGroupFeedOperation" do
      optional :update_mask, :message, 4, "google.protobuf.FieldMask"
      oneof :operation do
        optional :create, :message, 1, "google.ads.googleads.v6.resources.AdGroupFeed"
        optional :update, :message, 2, "google.ads.googleads.v6.resources.AdGroupFeed"
        optional :remove, :string, 3
      end
    end
    add_message "google.ads.googleads.v6.services.MutateAdGroupFeedsResponse" do
      optional :partial_failure_error, :message, 3, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v6.services.MutateAdGroupFeedResult"
    end
    add_message "google.ads.googleads.v6.services.MutateAdGroupFeedResult" do
      optional :resource_name, :string, 1
      optional :ad_group_feed, :message, 2, "google.ads.googleads.v6.resources.AdGroupFeed"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Services
          GetAdGroupFeedRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.GetAdGroupFeedRequest").msgclass
          MutateAdGroupFeedsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateAdGroupFeedsRequest").msgclass
          AdGroupFeedOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.AdGroupFeedOperation").msgclass
          MutateAdGroupFeedsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateAdGroupFeedsResponse").msgclass
          MutateAdGroupFeedResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.services.MutateAdGroupFeedResult").msgclass
        end
      end
    end
  end
end
