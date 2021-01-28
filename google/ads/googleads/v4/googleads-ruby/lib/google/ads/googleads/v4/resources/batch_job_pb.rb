# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/batch_job.proto

require 'google/protobuf'

require 'google/ads/googleads/v4/enums/batch_job_status_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/protobuf/wrappers_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v4/resources/batch_job.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v4.resources.BatchJob" do
      optional :resource_name, :string, 1
      optional :id, :message, 2, "google.protobuf.Int64Value"
      optional :next_add_sequence_token, :message, 3, "google.protobuf.StringValue"
      optional :metadata, :message, 4, "google.ads.googleads.v4.resources.BatchJob.BatchJobMetadata"
      optional :status, :enum, 5, "google.ads.googleads.v4.enums.BatchJobStatusEnum.BatchJobStatus"
      optional :long_running_operation, :message, 6, "google.protobuf.StringValue"
    end
    add_message "google.ads.googleads.v4.resources.BatchJob.BatchJobMetadata" do
      optional :creation_date_time, :message, 1, "google.protobuf.StringValue"
      optional :completion_date_time, :message, 2, "google.protobuf.StringValue"
      optional :estimated_completion_ratio, :message, 3, "google.protobuf.DoubleValue"
      optional :operation_count, :message, 4, "google.protobuf.Int64Value"
      optional :executed_operation_count, :message, 5, "google.protobuf.Int64Value"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V4
        module Resources
          BatchJob = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.BatchJob").msgclass
          BatchJob::BatchJobMetadata = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.resources.BatchJob.BatchJobMetadata").msgclass
        end
      end
    end
  end
end
