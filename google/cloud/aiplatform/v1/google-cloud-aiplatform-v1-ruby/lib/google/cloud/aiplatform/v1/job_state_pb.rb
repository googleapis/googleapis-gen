# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/job_state.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/aiplatform/v1/job_state.proto", :syntax => :proto3) do
    add_enum "google.cloud.aiplatform.v1.JobState" do
      value :JOB_STATE_UNSPECIFIED, 0
      value :JOB_STATE_QUEUED, 1
      value :JOB_STATE_PENDING, 2
      value :JOB_STATE_RUNNING, 3
      value :JOB_STATE_SUCCEEDED, 4
      value :JOB_STATE_FAILED, 5
      value :JOB_STATE_CANCELLING, 6
      value :JOB_STATE_CANCELLED, 7
      value :JOB_STATE_PAUSED, 8
    end
  end
end

module Google
  module Cloud
    module Aiplatform
      module V1
        JobState = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1.JobState").enummodule
      end
    end
  end
end
