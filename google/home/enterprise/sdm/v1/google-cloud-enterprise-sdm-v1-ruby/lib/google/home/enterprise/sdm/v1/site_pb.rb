# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/enterprise/sdm/v1/site.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/struct_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/home/enterprise/sdm/v1/site.proto", :syntax => :proto3) do
    add_message "google.home.enterprise.sdm.v1.Structure" do
      optional :name, :string, 1
      optional :traits, :message, 2, "google.protobuf.Struct"
    end
    add_message "google.home.enterprise.sdm.v1.Room" do
      optional :name, :string, 1
      optional :traits, :message, 2, "google.protobuf.Struct"
    end
  end
end

module Google
  module Home
    module Enterprise
      module Sdm
        module V1
          Structure = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.home.enterprise.sdm.v1.Structure").msgclass
          Room = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.home.enterprise.sdm.v1.Room").msgclass
        end
      end
    end
  end
end
