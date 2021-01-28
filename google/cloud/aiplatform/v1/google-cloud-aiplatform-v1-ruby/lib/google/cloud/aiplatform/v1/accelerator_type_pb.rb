# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/accelerator_type.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/aiplatform/v1/accelerator_type.proto", :syntax => :proto3) do
    add_enum "google.cloud.aiplatform.v1.AcceleratorType" do
      value :ACCELERATOR_TYPE_UNSPECIFIED, 0
      value :NVIDIA_TESLA_K80, 1
      value :NVIDIA_TESLA_P100, 2
      value :NVIDIA_TESLA_V100, 3
      value :NVIDIA_TESLA_P4, 4
      value :NVIDIA_TESLA_T4, 5
      value :TPU_V2, 6
      value :TPU_V3, 7
    end
  end
end

module Google
  module Cloud
    module Aiplatform
      module V1
        AcceleratorType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1.AcceleratorType").enummodule
      end
    end
  end
end
