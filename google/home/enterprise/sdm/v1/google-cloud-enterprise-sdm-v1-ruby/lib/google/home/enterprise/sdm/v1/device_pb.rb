# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/enterprise/sdm/v1/device.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/struct_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/home/enterprise/sdm/v1/device.proto", :syntax => :proto3) do
    add_message "google.home.enterprise.sdm.v1.Device" do
      optional :name, :string, 1
      optional :type, :string, 2
      optional :traits, :message, 4, "google.protobuf.Struct"
      repeated :parent_relations, :message, 5, "google.home.enterprise.sdm.v1.ParentRelation"
    end
    add_message "google.home.enterprise.sdm.v1.ParentRelation" do
      optional :parent, :string, 1
      optional :display_name, :string, 2
    end
  end
end

module Google
  module Home
    module Enterprise
      module Sdm
        module V1
          Device = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.home.enterprise.sdm.v1.Device").msgclass
          ParentRelation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.home.enterprise.sdm.v1.ParentRelation").msgclass
        end
      end
    end
  end
end
