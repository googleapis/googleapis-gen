# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/access_invitation_status.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/enums/access_invitation_status.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.enums.AccessInvitationStatusEnum" do
    end
    add_enum "google.ads.googleads.v6.enums.AccessInvitationStatusEnum.AccessInvitationStatus" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :PENDING, 2
      value :DECLINED, 3
      value :EXPIRED, 4
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Enums
          AccessInvitationStatusEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.AccessInvitationStatusEnum").msgclass
          AccessInvitationStatusEnum::AccessInvitationStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.AccessInvitationStatusEnum.AccessInvitationStatus").enummodule
        end
      end
    end
  end
end
