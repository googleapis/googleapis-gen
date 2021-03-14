# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/domain_mapping.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/appengine/v1/domain_mapping.proto", :syntax => :proto3) do
    add_message "google.appengine.v1.DomainMapping" do
      optional :name, :string, 1
      optional :id, :string, 2
      optional :ssl_settings, :message, 3, "google.appengine.v1.SslSettings"
      repeated :resource_records, :message, 4, "google.appengine.v1.ResourceRecord"
    end
    add_message "google.appengine.v1.SslSettings" do
      optional :certificate_id, :string, 1
      optional :ssl_management_type, :enum, 3, "google.appengine.v1.SslSettings.SslManagementType"
      optional :pending_managed_certificate_id, :string, 4
    end
    add_enum "google.appengine.v1.SslSettings.SslManagementType" do
      value :SSL_MANAGEMENT_TYPE_UNSPECIFIED, 0
      value :AUTOMATIC, 1
      value :MANUAL, 2
    end
    add_message "google.appengine.v1.ResourceRecord" do
      optional :name, :string, 1
      optional :rrdata, :string, 2
      optional :type, :enum, 3, "google.appengine.v1.ResourceRecord.RecordType"
    end
    add_enum "google.appengine.v1.ResourceRecord.RecordType" do
      value :RECORD_TYPE_UNSPECIFIED, 0
      value :A, 1
      value :AAAA, 2
      value :CNAME, 3
    end
  end
end

module Google
  module Cloud
    module AppEngine
      module V1
        DomainMapping = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.appengine.v1.DomainMapping").msgclass
        SslSettings = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.appengine.v1.SslSettings").msgclass
        SslSettings::SslManagementType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.appengine.v1.SslSettings.SslManagementType").enummodule
        ResourceRecord = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.appengine.v1.ResourceRecord").msgclass
        ResourceRecord::RecordType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.appengine.v1.ResourceRecord.RecordType").enummodule
      end
    end
  end
end
