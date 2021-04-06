# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1/resources.proto

require 'google/protobuf'

require 'google/api/auth_pb'
require 'google/api/documentation_pb'
require 'google/api/endpoint_pb'
require 'google/api/monitored_resource_pb'
require 'google/api/monitoring_pb'
require 'google/api/quota_pb'
require 'google/api/usage_pb'
require 'google/protobuf/api_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/api/serviceusage/v1/resources.proto", :syntax => :proto3) do
    add_message "google.api.serviceusage.v1.Service" do
      optional :name, :string, 1
      optional :parent, :string, 5
      optional :config, :message, 2, "google.api.serviceusage.v1.ServiceConfig"
      optional :state, :enum, 4, "google.api.serviceusage.v1.State"
    end
    add_message "google.api.serviceusage.v1.ServiceConfig" do
      optional :name, :string, 1
      optional :title, :string, 2
      repeated :apis, :message, 3, "google.protobuf.Api"
      optional :documentation, :message, 6, "google.api.Documentation"
      optional :quota, :message, 10, "google.api.Quota"
      optional :authentication, :message, 11, "google.api.Authentication"
      optional :usage, :message, 15, "google.api.Usage"
      repeated :endpoints, :message, 18, "google.api.Endpoint"
      repeated :monitored_resources, :message, 25, "google.api.MonitoredResourceDescriptor"
      optional :monitoring, :message, 28, "google.api.Monitoring"
    end
    add_message "google.api.serviceusage.v1.OperationMetadata" do
      repeated :resource_names, :string, 2
    end
    add_enum "google.api.serviceusage.v1.State" do
      value :STATE_UNSPECIFIED, 0
      value :DISABLED, 1
      value :ENABLED, 2
    end
  end
end

module Google
  module Api
    module Serviceusage
      module V1
        Service = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.api.serviceusage.v1.Service").msgclass
        ServiceConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.api.serviceusage.v1.ServiceConfig").msgclass
        OperationMetadata = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.api.serviceusage.v1.OperationMetadata").msgclass
        State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.api.serviceusage.v1.State").enummodule
      end
    end
  end
end
