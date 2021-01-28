# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_user_access.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/enums/access_role_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/resources/customer_user_access.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.resources.CustomerUserAccess" do
      optional :resource_name, :string, 1
      optional :user_id, :int64, 2
      proto3_optional :email_address, :string, 3
      optional :access_role, :enum, 4, "google.ads.googleads.v6.enums.AccessRoleEnum.AccessRole"
      proto3_optional :access_creation_date_time, :string, 6
      proto3_optional :inviter_user_email_address, :string, 7
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Resources
          CustomerUserAccess = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.CustomerUserAccess").msgclass
        end
      end
    end
  end
end
