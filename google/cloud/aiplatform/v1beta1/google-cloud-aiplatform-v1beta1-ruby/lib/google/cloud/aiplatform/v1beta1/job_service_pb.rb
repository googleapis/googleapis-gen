# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/job_service.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/cloud/aiplatform/v1beta1/batch_prediction_job_pb'
require 'google/cloud/aiplatform/v1beta1/custom_job_pb'
require 'google/cloud/aiplatform/v1beta1/data_labeling_job_pb'
require 'google/cloud/aiplatform/v1beta1/hyperparameter_tuning_job_pb'
require 'google/longrunning/operations_pb'
require 'google/protobuf/empty_pb'
require 'google/protobuf/field_mask_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/aiplatform/v1beta1/job_service.proto", :syntax => :proto3) do
    add_message "google.cloud.aiplatform.v1beta1.CreateCustomJobRequest" do
      optional :parent, :string, 1
      optional :custom_job, :message, 2, "google.cloud.aiplatform.v1beta1.CustomJob"
    end
    add_message "google.cloud.aiplatform.v1beta1.GetCustomJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.ListCustomJobsRequest" do
      optional :parent, :string, 1
      optional :filter, :string, 2
      optional :page_size, :int32, 3
      optional :page_token, :string, 4
      optional :read_mask, :message, 5, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.aiplatform.v1beta1.ListCustomJobsResponse" do
      repeated :custom_jobs, :message, 1, "google.cloud.aiplatform.v1beta1.CustomJob"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.DeleteCustomJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CancelCustomJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CreateDataLabelingJobRequest" do
      optional :parent, :string, 1
      optional :data_labeling_job, :message, 2, "google.cloud.aiplatform.v1beta1.DataLabelingJob"
    end
    add_message "google.cloud.aiplatform.v1beta1.GetDataLabelingJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.ListDataLabelingJobsRequest" do
      optional :parent, :string, 1
      optional :filter, :string, 2
      optional :page_size, :int32, 3
      optional :page_token, :string, 4
      optional :read_mask, :message, 5, "google.protobuf.FieldMask"
      optional :order_by, :string, 6
    end
    add_message "google.cloud.aiplatform.v1beta1.ListDataLabelingJobsResponse" do
      repeated :data_labeling_jobs, :message, 1, "google.cloud.aiplatform.v1beta1.DataLabelingJob"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.DeleteDataLabelingJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CancelDataLabelingJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CreateHyperparameterTuningJobRequest" do
      optional :parent, :string, 1
      optional :hyperparameter_tuning_job, :message, 2, "google.cloud.aiplatform.v1beta1.HyperparameterTuningJob"
    end
    add_message "google.cloud.aiplatform.v1beta1.GetHyperparameterTuningJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.ListHyperparameterTuningJobsRequest" do
      optional :parent, :string, 1
      optional :filter, :string, 2
      optional :page_size, :int32, 3
      optional :page_token, :string, 4
      optional :read_mask, :message, 5, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.aiplatform.v1beta1.ListHyperparameterTuningJobsResponse" do
      repeated :hyperparameter_tuning_jobs, :message, 1, "google.cloud.aiplatform.v1beta1.HyperparameterTuningJob"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.DeleteHyperparameterTuningJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CancelHyperparameterTuningJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CreateBatchPredictionJobRequest" do
      optional :parent, :string, 1
      optional :batch_prediction_job, :message, 2, "google.cloud.aiplatform.v1beta1.BatchPredictionJob"
    end
    add_message "google.cloud.aiplatform.v1beta1.GetBatchPredictionJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.ListBatchPredictionJobsRequest" do
      optional :parent, :string, 1
      optional :filter, :string, 2
      optional :page_size, :int32, 3
      optional :page_token, :string, 4
      optional :read_mask, :message, 5, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.aiplatform.v1beta1.ListBatchPredictionJobsResponse" do
      repeated :batch_prediction_jobs, :message, 1, "google.cloud.aiplatform.v1beta1.BatchPredictionJob"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.DeleteBatchPredictionJobRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.CancelBatchPredictionJobRequest" do
      optional :name, :string, 1
    end
  end
end

module Google
  module Cloud
    module Aiplatform
      module V1beta1
        CreateCustomJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CreateCustomJobRequest").msgclass
        GetCustomJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.GetCustomJobRequest").msgclass
        ListCustomJobsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListCustomJobsRequest").msgclass
        ListCustomJobsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListCustomJobsResponse").msgclass
        DeleteCustomJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.DeleteCustomJobRequest").msgclass
        CancelCustomJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CancelCustomJobRequest").msgclass
        CreateDataLabelingJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CreateDataLabelingJobRequest").msgclass
        GetDataLabelingJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.GetDataLabelingJobRequest").msgclass
        ListDataLabelingJobsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListDataLabelingJobsRequest").msgclass
        ListDataLabelingJobsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListDataLabelingJobsResponse").msgclass
        DeleteDataLabelingJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.DeleteDataLabelingJobRequest").msgclass
        CancelDataLabelingJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CancelDataLabelingJobRequest").msgclass
        CreateHyperparameterTuningJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CreateHyperparameterTuningJobRequest").msgclass
        GetHyperparameterTuningJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.GetHyperparameterTuningJobRequest").msgclass
        ListHyperparameterTuningJobsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListHyperparameterTuningJobsRequest").msgclass
        ListHyperparameterTuningJobsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListHyperparameterTuningJobsResponse").msgclass
        DeleteHyperparameterTuningJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.DeleteHyperparameterTuningJobRequest").msgclass
        CancelHyperparameterTuningJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CancelHyperparameterTuningJobRequest").msgclass
        CreateBatchPredictionJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CreateBatchPredictionJobRequest").msgclass
        GetBatchPredictionJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.GetBatchPredictionJobRequest").msgclass
        ListBatchPredictionJobsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListBatchPredictionJobsRequest").msgclass
        ListBatchPredictionJobsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.ListBatchPredictionJobsResponse").msgclass
        DeleteBatchPredictionJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.DeleteBatchPredictionJobRequest").msgclass
        CancelBatchPredictionJobRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.CancelBatchPredictionJobRequest").msgclass
      end
    end
  end
end
