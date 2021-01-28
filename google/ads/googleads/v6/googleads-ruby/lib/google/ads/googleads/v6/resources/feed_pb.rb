# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/feed.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/enums/affiliate_location_feed_relationship_type_pb'
require 'google/ads/googleads/v6/enums/feed_attribute_type_pb'
require 'google/ads/googleads/v6/enums/feed_origin_pb'
require 'google/ads/googleads/v6/enums/feed_status_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/resources/feed.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.resources.Feed" do
      optional :resource_name, :string, 1
      proto3_optional :id, :int64, 11
      proto3_optional :name, :string, 12
      repeated :attributes, :message, 4, "google.ads.googleads.v6.resources.FeedAttribute"
      repeated :attribute_operations, :message, 9, "google.ads.googleads.v6.resources.FeedAttributeOperation"
      optional :origin, :enum, 5, "google.ads.googleads.v6.enums.FeedOriginEnum.FeedOrigin"
      optional :status, :enum, 8, "google.ads.googleads.v6.enums.FeedStatusEnum.FeedStatus"
      oneof :system_feed_generation_data do
        optional :places_location_feed_data, :message, 6, "google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData"
        optional :affiliate_location_feed_data, :message, 7, "google.ads.googleads.v6.resources.Feed.AffiliateLocationFeedData"
      end
    end
    add_message "google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData" do
      optional :oauth_info, :message, 1, "google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData.OAuthInfo"
      proto3_optional :email_address, :string, 7
      optional :business_account_id, :string, 8
      proto3_optional :business_name_filter, :string, 9
      repeated :category_filters, :string, 11
      repeated :label_filters, :string, 12
    end
    add_message "google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData.OAuthInfo" do
      proto3_optional :http_method, :string, 4
      proto3_optional :http_request_url, :string, 5
      proto3_optional :http_authorization_header, :string, 6
    end
    add_message "google.ads.googleads.v6.resources.Feed.AffiliateLocationFeedData" do
      repeated :chain_ids, :int64, 3
      optional :relationship_type, :enum, 2, "google.ads.googleads.v6.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType"
    end
    add_message "google.ads.googleads.v6.resources.FeedAttribute" do
      proto3_optional :id, :int64, 5
      proto3_optional :name, :string, 6
      optional :type, :enum, 3, "google.ads.googleads.v6.enums.FeedAttributeTypeEnum.FeedAttributeType"
      proto3_optional :is_part_of_key, :bool, 7
    end
    add_message "google.ads.googleads.v6.resources.FeedAttributeOperation" do
      optional :operator, :enum, 1, "google.ads.googleads.v6.resources.FeedAttributeOperation.Operator"
      optional :value, :message, 2, "google.ads.googleads.v6.resources.FeedAttribute"
    end
    add_enum "google.ads.googleads.v6.resources.FeedAttributeOperation.Operator" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :ADD, 2
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Resources
          Feed = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Feed").msgclass
          Feed::PlacesLocationFeedData = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData").msgclass
          Feed::PlacesLocationFeedData::OAuthInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Feed.PlacesLocationFeedData.OAuthInfo").msgclass
          Feed::AffiliateLocationFeedData = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Feed.AffiliateLocationFeedData").msgclass
          FeedAttribute = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.FeedAttribute").msgclass
          FeedAttributeOperation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.FeedAttributeOperation").msgclass
          FeedAttributeOperation::Operator = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.FeedAttributeOperation.Operator").enummodule
        end
      end
    end
  end
end
