# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/customer_user_access_invitation.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/enums/access_invitation_status_pb'
require 'google/ads/googleads/v6/enums/access_role_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/resources/customer_user_access_invitation.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.resources.CustomerUserAccessInvitation" do
      optional :resource_name, :string, 1
      optional :invitation_id, :int64, 2
      optional :access_role, :enum, 3, "google.ads.googleads.v6.enums.AccessRoleEnum.AccessRole"
      optional :email_address, :string, 4
      optional :creation_date_time, :string, 5
      optional :invitation_status, :enum, 6, "google.ads.googleads.v6.enums.AccessInvitationStatusEnum.AccessInvitationStatus"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Resources
          CustomerUserAccessInvitation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.CustomerUserAccessInvitation").msgclass
        end
      end
    end
  end
end
