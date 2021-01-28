# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storage/v1/storage.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/iam/v1/iam_policy_pb'
require 'google/iam/v1/policy_pb'
require 'google/protobuf/empty_pb'
require 'google/protobuf/field_mask_pb'
require 'google/protobuf/wrappers_pb'
require 'google/storage/v1/storage_resources_pb'
require 'google/api/client_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/storage/v1/storage.proto", :syntax => :proto3) do
    add_message "google.storage.v1.DeleteBucketAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetBucketAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.InsertBucketAccessControlRequest" do
      optional :bucket, :string, 1
      optional :bucket_access_control, :message, 3, "google.storage.v1.BucketAccessControl"
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListBucketAccessControlsRequest" do
      optional :bucket, :string, 1
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.PatchBucketAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :bucket_access_control, :message, 4, "google.storage.v1.BucketAccessControl"
      optional :update_mask, :message, 5, "google.protobuf.FieldMask"
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.UpdateBucketAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :bucket_access_control, :message, 4, "google.storage.v1.BucketAccessControl"
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.DeleteBucketRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :message, 2, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 3, "google.protobuf.Int64Value"
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetBucketRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :message, 2, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 3, "google.protobuf.Int64Value"
      optional :projection, :enum, 4, "google.storage.v1.CommonEnums.Projection"
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.InsertBucketRequest" do
      optional :predefined_acl, :enum, 1, "google.storage.v1.CommonEnums.PredefinedBucketAcl"
      optional :predefined_default_object_acl, :enum, 2, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :project, :string, 3
      optional :projection, :enum, 4, "google.storage.v1.CommonEnums.Projection"
      optional :bucket, :message, 6, "google.storage.v1.Bucket"
      optional :common_request_params, :message, 7, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListChannelsRequest" do
      optional :bucket, :string, 1
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListBucketsRequest" do
      optional :max_results, :int32, 1
      optional :page_token, :string, 2
      optional :prefix, :string, 3
      optional :project, :string, 4
      optional :projection, :enum, 5, "google.storage.v1.CommonEnums.Projection"
      optional :common_request_params, :message, 7, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.LockRetentionPolicyRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :int64, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.PatchBucketRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :message, 2, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 3, "google.protobuf.Int64Value"
      optional :predefined_acl, :enum, 4, "google.storage.v1.CommonEnums.PredefinedBucketAcl"
      optional :predefined_default_object_acl, :enum, 5, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :projection, :enum, 6, "google.storage.v1.CommonEnums.Projection"
      optional :metadata, :message, 8, "google.storage.v1.Bucket"
      optional :update_mask, :message, 9, "google.protobuf.FieldMask"
      optional :common_request_params, :message, 10, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.UpdateBucketRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :message, 2, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 3, "google.protobuf.Int64Value"
      optional :predefined_acl, :enum, 4, "google.storage.v1.CommonEnums.PredefinedBucketAcl"
      optional :predefined_default_object_acl, :enum, 5, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :projection, :enum, 6, "google.storage.v1.CommonEnums.Projection"
      optional :metadata, :message, 8, "google.storage.v1.Bucket"
      optional :common_request_params, :message, 9, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.StopChannelRequest" do
      optional :channel, :message, 1, "google.storage.v1.Channel"
      optional :common_request_params, :message, 2, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.DeleteDefaultObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetDefaultObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.InsertDefaultObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :object_access_control, :message, 3, "google.storage.v1.ObjectAccessControl"
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListDefaultObjectAccessControlsRequest" do
      optional :bucket, :string, 1
      optional :if_metageneration_match, :message, 2, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 3, "google.protobuf.Int64Value"
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.PatchDefaultObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object_access_control, :message, 4, "google.storage.v1.ObjectAccessControl"
      optional :update_mask, :message, 5, "google.protobuf.FieldMask"
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.UpdateDefaultObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object_access_control, :message, 4, "google.storage.v1.ObjectAccessControl"
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.DeleteNotificationRequest" do
      optional :bucket, :string, 1
      optional :notification, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetNotificationRequest" do
      optional :bucket, :string, 1
      optional :notification, :string, 2
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.InsertNotificationRequest" do
      optional :bucket, :string, 1
      optional :notification, :message, 3, "google.storage.v1.Notification"
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListNotificationsRequest" do
      optional :bucket, :string, 1
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.DeleteObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object, :string, 3
      optional :generation, :int64, 4
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object, :string, 3
      optional :generation, :int64, 4
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.InsertObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :object_access_control, :message, 5, "google.storage.v1.ObjectAccessControl"
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListObjectAccessControlsRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.PatchObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object, :string, 3
      optional :generation, :int64, 4
      optional :object_access_control, :message, 5, "google.storage.v1.ObjectAccessControl"
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
      optional :update_mask, :message, 7, "google.protobuf.FieldMask"
    end
    add_message "google.storage.v1.UpdateObjectAccessControlRequest" do
      optional :bucket, :string, 1
      optional :entity, :string, 2
      optional :object, :string, 3
      optional :generation, :int64, 4
      optional :object_access_control, :message, 6, "google.storage.v1.ObjectAccessControl"
      optional :common_request_params, :message, 7, "google.storage.v1.CommonRequestParams"
      optional :update_mask, :message, 8, "google.protobuf.FieldMask"
    end
    add_message "google.storage.v1.ComposeObjectRequest" do
      optional :destination_bucket, :string, 1
      optional :destination_object, :string, 2
      optional :destination_predefined_acl, :enum, 3, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :destination, :message, 11, "google.storage.v1.Object"
      repeated :source_objects, :message, 12, "google.storage.v1.ComposeObjectRequest.SourceObjects"
      optional :if_generation_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 5, "google.protobuf.Int64Value"
      optional :kms_key_name, :string, 6
      optional :common_object_request_params, :message, 9, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 10, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ComposeObjectRequest.SourceObjects" do
      optional :name, :string, 1
      optional :generation, :int64, 2
      optional :object_preconditions, :message, 3, "google.storage.v1.ComposeObjectRequest.SourceObjects.ObjectPreconditions"
    end
    add_message "google.storage.v1.ComposeObjectRequest.SourceObjects.ObjectPreconditions" do
      optional :if_generation_match, :message, 1, "google.protobuf.Int64Value"
    end
    add_message "google.storage.v1.CopyObjectRequest" do
      optional :destination_bucket, :string, 1
      optional :destination_object, :string, 2
      optional :destination_predefined_acl, :enum, 3, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :if_generation_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 7, "google.protobuf.Int64Value"
      optional :if_source_generation_match, :message, 8, "google.protobuf.Int64Value"
      optional :if_source_generation_not_match, :message, 9, "google.protobuf.Int64Value"
      optional :if_source_metageneration_match, :message, 10, "google.protobuf.Int64Value"
      optional :if_source_metageneration_not_match, :message, 11, "google.protobuf.Int64Value"
      optional :projection, :enum, 12, "google.storage.v1.CommonEnums.Projection"
      optional :source_bucket, :string, 13
      optional :source_object, :string, 14
      optional :source_generation, :int64, 15
      optional :destination, :message, 17, "google.storage.v1.Object"
      optional :destination_kms_key_name, :string, 20
      optional :common_object_request_params, :message, 18, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 19, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.DeleteObjectRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :upload_id, :string, 3
      optional :generation, :int64, 4
      optional :if_generation_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 7, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 8, "google.protobuf.Int64Value"
      optional :common_object_request_params, :message, 10, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 11, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetObjectMediaRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :read_offset, :int64, 4
      optional :read_limit, :int64, 5
      optional :if_generation_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 7, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 8, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 9, "google.protobuf.Int64Value"
      optional :common_object_request_params, :message, 11, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 12, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetObjectRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :if_generation_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 7, "google.protobuf.Int64Value"
      optional :projection, :enum, 8, "google.storage.v1.CommonEnums.Projection"
      optional :common_object_request_params, :message, 10, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 11, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetObjectMediaResponse" do
      optional :checksummed_data, :message, 1, "google.storage.v1.ChecksummedData"
      optional :object_checksums, :message, 2, "google.storage.v1.ObjectChecksums"
      optional :content_range, :message, 3, "google.storage.v1.ContentRange"
      optional :metadata, :message, 4, "google.storage.v1.Object"
    end
    add_message "google.storage.v1.InsertObjectSpec" do
      optional :resource, :message, 1, "google.storage.v1.Object"
      optional :predefined_acl, :enum, 2, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :if_generation_match, :message, 3, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 6, "google.protobuf.Int64Value"
      optional :projection, :enum, 7, "google.storage.v1.CommonEnums.Projection"
    end
    add_message "google.storage.v1.InsertObjectRequest" do
      optional :write_offset, :int64, 3
      optional :object_checksums, :message, 6, "google.storage.v1.ObjectChecksums"
      optional :finish_write, :bool, 7
      optional :common_object_request_params, :message, 8, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 9, "google.storage.v1.CommonRequestParams"
      oneof :first_message do
        optional :upload_id, :string, 1
        optional :insert_object_spec, :message, 2, "google.storage.v1.InsertObjectSpec"
      end
      oneof :data do
        optional :checksummed_data, :message, 4, "google.storage.v1.ChecksummedData"
        optional :reference, :message, 5, "google.storage.v1.GetObjectMediaRequest"
      end
    end
    add_message "google.storage.v1.ListObjectsRequest" do
      optional :bucket, :string, 1
      optional :delimiter, :string, 2
      optional :include_trailing_delimiter, :bool, 3
      optional :max_results, :int32, 4
      optional :page_token, :string, 5
      optional :prefix, :string, 6
      optional :projection, :enum, 7, "google.storage.v1.CommonEnums.Projection"
      optional :versions, :bool, 9
      optional :common_request_params, :message, 10, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.QueryWriteStatusRequest" do
      optional :upload_id, :string, 1
      optional :common_object_request_params, :message, 2, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.QueryWriteStatusResponse" do
      optional :committed_size, :int64, 1
      optional :complete, :bool, 2
    end
    add_message "google.storage.v1.RewriteObjectRequest" do
      optional :destination_bucket, :string, 1
      optional :destination_object, :string, 2
      optional :destination_kms_key_name, :string, 3
      optional :destination_predefined_acl, :enum, 4, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :if_generation_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 7, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 8, "google.protobuf.Int64Value"
      optional :if_source_generation_match, :message, 9, "google.protobuf.Int64Value"
      optional :if_source_generation_not_match, :message, 10, "google.protobuf.Int64Value"
      optional :if_source_metageneration_match, :message, 11, "google.protobuf.Int64Value"
      optional :if_source_metageneration_not_match, :message, 12, "google.protobuf.Int64Value"
      optional :max_bytes_rewritten_per_call, :int64, 13
      optional :projection, :enum, 14, "google.storage.v1.CommonEnums.Projection"
      optional :rewrite_token, :string, 15
      optional :source_bucket, :string, 16
      optional :source_object, :string, 17
      optional :source_generation, :int64, 18
      optional :object, :message, 20, "google.storage.v1.Object"
      optional :copy_source_encryption_algorithm, :string, 21
      optional :copy_source_encryption_key, :string, 22
      optional :copy_source_encryption_key_sha256, :string, 23
      optional :common_object_request_params, :message, 24, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 25, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.RewriteResponse" do
      optional :total_bytes_rewritten, :int64, 1
      optional :object_size, :int64, 2
      optional :done, :bool, 3
      optional :rewrite_token, :string, 4
      optional :resource, :message, 5, "google.storage.v1.Object"
    end
    add_message "google.storage.v1.StartResumableWriteRequest" do
      optional :insert_object_spec, :message, 1, "google.storage.v1.InsertObjectSpec"
      optional :common_object_request_params, :message, 3, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 4, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.StartResumableWriteResponse" do
      optional :upload_id, :string, 1
    end
    add_message "google.storage.v1.PatchObjectRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :if_generation_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 7, "google.protobuf.Int64Value"
      optional :predefined_acl, :enum, 8, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :projection, :enum, 9, "google.storage.v1.CommonEnums.Projection"
      optional :metadata, :message, 11, "google.storage.v1.Object"
      optional :update_mask, :message, 12, "google.protobuf.FieldMask"
      optional :common_object_request_params, :message, 13, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 14, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.UpdateObjectRequest" do
      optional :bucket, :string, 1
      optional :object, :string, 2
      optional :generation, :int64, 3
      optional :if_generation_match, :message, 4, "google.protobuf.Int64Value"
      optional :if_generation_not_match, :message, 5, "google.protobuf.Int64Value"
      optional :if_metageneration_match, :message, 6, "google.protobuf.Int64Value"
      optional :if_metageneration_not_match, :message, 7, "google.protobuf.Int64Value"
      optional :predefined_acl, :enum, 8, "google.storage.v1.CommonEnums.PredefinedObjectAcl"
      optional :projection, :enum, 9, "google.storage.v1.CommonEnums.Projection"
      optional :metadata, :message, 11, "google.storage.v1.Object"
      optional :common_object_request_params, :message, 12, "google.storage.v1.CommonObjectRequestParams"
      optional :common_request_params, :message, 13, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.WatchAllObjectsRequest" do
      optional :bucket, :string, 1
      optional :versions, :bool, 2
      optional :delimiter, :string, 3
      optional :max_results, :int32, 4
      optional :prefix, :string, 5
      optional :include_trailing_delimiter, :bool, 6
      optional :page_token, :string, 7
      optional :projection, :enum, 8, "google.storage.v1.CommonEnums.Projection"
      optional :channel, :message, 10, "google.storage.v1.Channel"
      optional :common_request_params, :message, 11, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetProjectServiceAccountRequest" do
      optional :project_id, :string, 1
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.CreateHmacKeyRequest" do
      optional :project_id, :string, 1
      optional :service_account_email, :string, 2
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.CreateHmacKeyResponse" do
      optional :metadata, :message, 1, "google.storage.v1.HmacKeyMetadata"
      optional :secret, :string, 2
    end
    add_message "google.storage.v1.DeleteHmacKeyRequest" do
      optional :access_id, :string, 1
      optional :project_id, :string, 2
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetHmacKeyRequest" do
      optional :access_id, :string, 1
      optional :project_id, :string, 2
      optional :common_request_params, :message, 3, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListHmacKeysRequest" do
      optional :project_id, :string, 1
      optional :service_account_email, :string, 2
      optional :show_deleted_keys, :bool, 3
      optional :max_results, :int32, 4
      optional :page_token, :string, 5
      optional :common_request_params, :message, 6, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.ListHmacKeysResponse" do
      optional :next_page_token, :string, 1
      repeated :items, :message, 2, "google.storage.v1.HmacKeyMetadata"
    end
    add_message "google.storage.v1.UpdateHmacKeyRequest" do
      optional :access_id, :string, 1
      optional :project_id, :string, 2
      optional :metadata, :message, 3, "google.storage.v1.HmacKeyMetadata"
      optional :common_request_params, :message, 5, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.GetIamPolicyRequest" do
      optional :iam_request, :message, 1, "google.iam.v1.GetIamPolicyRequest"
      optional :common_request_params, :message, 2, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.SetIamPolicyRequest" do
      optional :iam_request, :message, 1, "google.iam.v1.SetIamPolicyRequest"
      optional :common_request_params, :message, 2, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.TestIamPermissionsRequest" do
      optional :iam_request, :message, 1, "google.iam.v1.TestIamPermissionsRequest"
      optional :common_request_params, :message, 2, "google.storage.v1.CommonRequestParams"
    end
    add_message "google.storage.v1.CommonObjectRequestParams" do
      optional :encryption_algorithm, :string, 1
      optional :encryption_key, :string, 2
      optional :encryption_key_sha256, :string, 3
    end
    add_message "google.storage.v1.CommonRequestParams" do
      optional :user_project, :string, 1
      optional :quota_user, :string, 2
      optional :fields, :message, 4, "google.protobuf.FieldMask"
    end
    add_message "google.storage.v1.ServiceConstants" do
    end
    add_enum "google.storage.v1.ServiceConstants.Values" do
      value :VALUES_UNSPECIFIED, 0
      value :MAX_READ_CHUNK_BYTES, 2097152
      value :MAX_WRITE_CHUNK_BYTES, 2097152
      value :MAX_OBJECT_SIZE_MB, 5242880
      value :MAX_CUSTOM_METADATA_FIELD_NAME_BYTES, 1024
      value :MAX_CUSTOM_METADATA_FIELD_VALUE_BYTES, 4096
      value :MAX_CUSTOM_METADATA_TOTAL_SIZE_BYTES, 8192
      value :MAX_BUCKET_METADATA_TOTAL_SIZE_BYTES, 20480
      value :MAX_NOTIFICATION_CONFIGS_PER_BUCKET, 100
      value :MAX_LIFECYCLE_RULES_PER_BUCKET, 100
      value :MAX_NOTIFICATION_CUSTOM_ATTRIBUTES, 5
      value :MAX_NOTIFICATION_CUSTOM_ATTRIBUTE_KEY_LENGTH, 256
      value :MAX_NOTIFICATION_CUSTOM_ATTRIBUTE_VALUE_LENGTH, 1024
      value :MAX_LABELS_ENTRIES_COUNT, 64
      value :MAX_LABELS_KEY_VALUE_LENGTH, 63
      value :MAX_LABELS_KEY_VALUE_BYTES, 128
      value :MAX_OBJECT_IDS_PER_DELETE_OBJECTS_REQUEST, 1000
      value :SPLIT_TOKEN_MAX_VALID_DAYS, 14
    end
  end
end

module Google
  module Storage
    module V1
      DeleteBucketAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteBucketAccessControlRequest").msgclass
      GetBucketAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetBucketAccessControlRequest").msgclass
      InsertBucketAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertBucketAccessControlRequest").msgclass
      ListBucketAccessControlsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListBucketAccessControlsRequest").msgclass
      PatchBucketAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.PatchBucketAccessControlRequest").msgclass
      UpdateBucketAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateBucketAccessControlRequest").msgclass
      DeleteBucketRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteBucketRequest").msgclass
      GetBucketRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetBucketRequest").msgclass
      InsertBucketRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertBucketRequest").msgclass
      ListChannelsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListChannelsRequest").msgclass
      ListBucketsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListBucketsRequest").msgclass
      LockRetentionPolicyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.LockRetentionPolicyRequest").msgclass
      PatchBucketRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.PatchBucketRequest").msgclass
      UpdateBucketRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateBucketRequest").msgclass
      StopChannelRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.StopChannelRequest").msgclass
      DeleteDefaultObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteDefaultObjectAccessControlRequest").msgclass
      GetDefaultObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetDefaultObjectAccessControlRequest").msgclass
      InsertDefaultObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertDefaultObjectAccessControlRequest").msgclass
      ListDefaultObjectAccessControlsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListDefaultObjectAccessControlsRequest").msgclass
      PatchDefaultObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.PatchDefaultObjectAccessControlRequest").msgclass
      UpdateDefaultObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateDefaultObjectAccessControlRequest").msgclass
      DeleteNotificationRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteNotificationRequest").msgclass
      GetNotificationRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetNotificationRequest").msgclass
      InsertNotificationRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertNotificationRequest").msgclass
      ListNotificationsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListNotificationsRequest").msgclass
      DeleteObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteObjectAccessControlRequest").msgclass
      GetObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetObjectAccessControlRequest").msgclass
      InsertObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertObjectAccessControlRequest").msgclass
      ListObjectAccessControlsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListObjectAccessControlsRequest").msgclass
      PatchObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.PatchObjectAccessControlRequest").msgclass
      UpdateObjectAccessControlRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateObjectAccessControlRequest").msgclass
      ComposeObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ComposeObjectRequest").msgclass
      ComposeObjectRequest::SourceObjects = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ComposeObjectRequest.SourceObjects").msgclass
      ComposeObjectRequest::SourceObjects::ObjectPreconditions = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ComposeObjectRequest.SourceObjects.ObjectPreconditions").msgclass
      CopyObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.CopyObjectRequest").msgclass
      DeleteObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteObjectRequest").msgclass
      GetObjectMediaRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetObjectMediaRequest").msgclass
      GetObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetObjectRequest").msgclass
      GetObjectMediaResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetObjectMediaResponse").msgclass
      InsertObjectSpec = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertObjectSpec").msgclass
      InsertObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.InsertObjectRequest").msgclass
      ListObjectsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListObjectsRequest").msgclass
      QueryWriteStatusRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.QueryWriteStatusRequest").msgclass
      QueryWriteStatusResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.QueryWriteStatusResponse").msgclass
      RewriteObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.RewriteObjectRequest").msgclass
      RewriteResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.RewriteResponse").msgclass
      StartResumableWriteRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.StartResumableWriteRequest").msgclass
      StartResumableWriteResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.StartResumableWriteResponse").msgclass
      PatchObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.PatchObjectRequest").msgclass
      UpdateObjectRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateObjectRequest").msgclass
      WatchAllObjectsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.WatchAllObjectsRequest").msgclass
      GetProjectServiceAccountRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetProjectServiceAccountRequest").msgclass
      CreateHmacKeyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.CreateHmacKeyRequest").msgclass
      CreateHmacKeyResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.CreateHmacKeyResponse").msgclass
      DeleteHmacKeyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.DeleteHmacKeyRequest").msgclass
      GetHmacKeyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetHmacKeyRequest").msgclass
      ListHmacKeysRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListHmacKeysRequest").msgclass
      ListHmacKeysResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ListHmacKeysResponse").msgclass
      UpdateHmacKeyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.UpdateHmacKeyRequest").msgclass
      GetIamPolicyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.GetIamPolicyRequest").msgclass
      SetIamPolicyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.SetIamPolicyRequest").msgclass
      TestIamPermissionsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.TestIamPermissionsRequest").msgclass
      CommonObjectRequestParams = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.CommonObjectRequestParams").msgclass
      CommonRequestParams = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.CommonRequestParams").msgclass
      ServiceConstants = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ServiceConstants").msgclass
      ServiceConstants::Values = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.storage.v1.ServiceConstants.Values").enummodule
    end
  end
end
