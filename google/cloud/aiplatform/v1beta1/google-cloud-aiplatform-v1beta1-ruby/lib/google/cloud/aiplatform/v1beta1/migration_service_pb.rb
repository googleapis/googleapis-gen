# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/migration_service.proto

require 'google/protobuf'

require 'google/cloud/aiplatform/v1beta1/dataset_pb'
require 'google/cloud/aiplatform/v1beta1/model_pb'
require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/cloud/aiplatform/v1beta1/migratable_resource_pb'
require 'google/cloud/aiplatform/v1beta1/operation_pb'
require 'google/longrunning/operations_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/aiplatform/v1beta1/migration_service.proto", :syntax => :proto3) do
    add_message "google.cloud.aiplatform.v1beta1.SearchMigratableResourcesRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
      optional :filter, :string, 4
    end
    add_message "google.cloud.aiplatform.v1beta1.SearchMigratableResourcesResponse" do
      repeated :migratable_resources, :message, 1, "google.cloud.aiplatform.v1beta1.MigratableResource"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.BatchMigrateResourcesRequest" do
      optional :parent, :string, 1
      repeated :migrate_resource_requests, :message, 2, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest"
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest" do
      oneof :request do
        optional :migrate_ml_engine_model_version_config, :message, 1, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateMlEngineModelVersionConfig"
        optional :migrate_automl_model_config, :message, 2, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlModelConfig"
        optional :migrate_automl_dataset_config, :message, 3, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlDatasetConfig"
        optional :migrate_data_labeling_dataset_config, :message, 4, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig"
      end
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateMlEngineModelVersionConfig" do
      optional :endpoint, :string, 1
      optional :model_version, :string, 2
      optional :model_display_name, :string, 3
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlModelConfig" do
      optional :model, :string, 1
      optional :model_display_name, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlDatasetConfig" do
      optional :dataset, :string, 1
      optional :dataset_display_name, :string, 2
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig" do
      optional :dataset, :string, 1
      optional :dataset_display_name, :string, 2
      repeated :migrate_data_labeling_annotated_dataset_configs, :message, 3, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig.MigrateDataLabelingAnnotatedDatasetConfig"
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig.MigrateDataLabelingAnnotatedDatasetConfig" do
      optional :annotated_dataset, :string, 1
    end
    add_message "google.cloud.aiplatform.v1beta1.BatchMigrateResourcesResponse" do
      repeated :migrate_resource_responses, :message, 1, "google.cloud.aiplatform.v1beta1.MigrateResourceResponse"
    end
    add_message "google.cloud.aiplatform.v1beta1.MigrateResourceResponse" do
      optional :migratable_resource, :message, 3, "google.cloud.aiplatform.v1beta1.MigratableResource"
      oneof :migrated_resource do
        optional :dataset, :string, 1
        optional :model, :string, 2
      end
    end
    add_message "google.cloud.aiplatform.v1beta1.BatchMigrateResourcesOperationMetadata" do
      optional :generic_metadata, :message, 1, "google.cloud.aiplatform.v1beta1.GenericOperationMetadata"
      repeated :partial_results, :message, 2, "google.cloud.aiplatform.v1beta1.BatchMigrateResourcesOperationMetadata.PartialResult"
    end
    add_message "google.cloud.aiplatform.v1beta1.BatchMigrateResourcesOperationMetadata.PartialResult" do
      optional :request, :message, 1, "google.cloud.aiplatform.v1beta1.MigrateResourceRequest"
      oneof :result do
        optional :error, :message, 2, "google.rpc.Status"
        optional :model, :string, 3
        optional :dataset, :string, 4
      end
    end
  end
end

module Google
  module Cloud
    module Aiplatform
      module V1beta1
        SearchMigratableResourcesRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.SearchMigratableResourcesRequest").msgclass
        SearchMigratableResourcesResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.SearchMigratableResourcesResponse").msgclass
        BatchMigrateResourcesRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.BatchMigrateResourcesRequest").msgclass
        MigrateResourceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest").msgclass
        MigrateResourceRequest::MigrateMlEngineModelVersionConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateMlEngineModelVersionConfig").msgclass
        MigrateResourceRequest::MigrateAutomlModelConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlModelConfig").msgclass
        MigrateResourceRequest::MigrateAutomlDatasetConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateAutomlDatasetConfig").msgclass
        MigrateResourceRequest::MigrateDataLabelingDatasetConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig").msgclass
        MigrateResourceRequest::MigrateDataLabelingDatasetConfig::MigrateDataLabelingAnnotatedDatasetConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig.MigrateDataLabelingAnnotatedDatasetConfig").msgclass
        BatchMigrateResourcesResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.BatchMigrateResourcesResponse").msgclass
        MigrateResourceResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.MigrateResourceResponse").msgclass
        BatchMigrateResourcesOperationMetadata = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.BatchMigrateResourcesOperationMetadata").msgclass
        BatchMigrateResourcesOperationMetadata::PartialResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.aiplatform.v1beta1.BatchMigrateResourcesOperationMetadata.PartialResult").msgclass
      end
    end
  end
end
