# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/essentialcontacts/v1/enums.proto

require 'google/protobuf'

Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/essentialcontacts/v1/enums.proto", :syntax => :proto3) do
    add_enum "google.cloud.essentialcontacts.v1.NotificationCategory" do
      value :NOTIFICATION_CATEGORY_UNSPECIFIED, 0
      value :ALL, 2
      value :SUSPENSION, 3
      value :SECURITY, 5
      value :TECHNICAL, 6
      value :BILLING, 7
      value :LEGAL, 8
      value :PRODUCT_UPDATES, 9
      value :TECHNICAL_INCIDENTS, 10
    end
    add_enum "google.cloud.essentialcontacts.v1.ValidationState" do
      value :VALIDATION_STATE_UNSPECIFIED, 0
      value :VALID, 1
      value :INVALID, 2
    end
  end
end

module Google
  module Cloud
    module EssentialContacts
      module V1
        NotificationCategory = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.essentialcontacts.v1.NotificationCategory").enummodule
        ValidationState = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.essentialcontacts.v1.ValidationState").enummodule
      end
    end
  end
end
