# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/build/v1/build_status.proto

require 'google/protobuf'

require 'google/protobuf/wrappers_pb'
require 'google/protobuf/any_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/devtools/build/v1/build_status.proto", :syntax => :proto3) do
    add_message "google.devtools.build.v1.BuildStatus" do
      optional :result, :enum, 1, "google.devtools.build.v1.BuildStatus.Result"
      optional :final_invocation_id, :string, 3
      optional :build_tool_exit_code, :message, 4, "google.protobuf.Int32Value"
      optional :details, :message, 2, "google.protobuf.Any"
    end
    add_enum "google.devtools.build.v1.BuildStatus.Result" do
      value :UNKNOWN_STATUS, 0
      value :COMMAND_SUCCEEDED, 1
      value :COMMAND_FAILED, 2
      value :USER_ERROR, 3
      value :SYSTEM_ERROR, 4
      value :RESOURCE_EXHAUSTED, 5
      value :INVOCATION_DEADLINE_EXCEEDED, 6
      value :REQUEST_DEADLINE_EXCEEDED, 8
      value :CANCELLED, 7
    end
  end
end

module Google
  module Devtools
    module Build
      module V1
        BuildStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.build.v1.BuildStatus").msgclass
        BuildStatus::Result = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.build.v1.BuildStatus.Result").enummodule
      end
    end
  end
end
