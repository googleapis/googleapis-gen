# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1beta1/v1beta1.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/iam/v1/policy_pb'
require 'google/longrunning/operations_pb'
require 'google/protobuf/field_mask_pb'
require 'google/protobuf/timestamp_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/datafusion/v1beta1/v1beta1.proto", :syntax => :proto3) do
    add_message "google.cloud.datafusion.v1beta1.NetworkConfig" do
      optional :network, :string, 1
      optional :ip_allocation, :string, 2
    end
    add_message "google.cloud.datafusion.v1beta1.Version" do
      optional :version_number, :string, 1
      optional :default_version, :bool, 2
      repeated :available_features, :string, 3
    end
    add_message "google.cloud.datafusion.v1beta1.Accelerator" do
      optional :accelerator_type, :enum, 1, "google.cloud.datafusion.v1beta1.Accelerator.AcceleratorType"
    end
    add_enum "google.cloud.datafusion.v1beta1.Accelerator.AcceleratorType" do
      value :ACCELERATOR_TYPE_UNSPECIFIED, 0
      value :CDC, 1
      value :HEALTHCARE, 2
    end
    add_message "google.cloud.datafusion.v1beta1.CryptoKeyConfig" do
      optional :key_reference, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.Instance" do
      optional :name, :string, 1
      optional :description, :string, 2
      optional :type, :enum, 3, "google.cloud.datafusion.v1beta1.Instance.Type"
      optional :enable_stackdriver_logging, :bool, 4
      optional :enable_stackdriver_monitoring, :bool, 5
      optional :private_instance, :bool, 6
      optional :network_config, :message, 7, "google.cloud.datafusion.v1beta1.NetworkConfig"
      map :labels, :string, :string, 8
      map :options, :string, :string, 9
      optional :create_time, :message, 10, "google.protobuf.Timestamp"
      optional :update_time, :message, 11, "google.protobuf.Timestamp"
      optional :state, :enum, 12, "google.cloud.datafusion.v1beta1.Instance.State"
      optional :state_message, :string, 13
      optional :service_endpoint, :string, 14
      optional :zone, :string, 15
      optional :version, :string, 16
      optional :service_account, :string, 17
      optional :display_name, :string, 18
      repeated :available_version, :message, 19, "google.cloud.datafusion.v1beta1.Version"
      optional :api_endpoint, :string, 20
      optional :gcs_bucket, :string, 21
      repeated :accelerators, :message, 22, "google.cloud.datafusion.v1beta1.Accelerator"
      optional :p4_service_account, :string, 23
      optional :tenant_project_id, :string, 24
      optional :dataproc_service_account, :string, 25
      optional :enable_rbac, :bool, 26
      optional :crypto_key_config, :message, 27, "google.cloud.datafusion.v1beta1.CryptoKeyConfig"
    end
    add_enum "google.cloud.datafusion.v1beta1.Instance.Type" do
      value :TYPE_UNSPECIFIED, 0
      value :BASIC, 1
      value :ENTERPRISE, 2
      value :DEVELOPER, 3
    end
    add_enum "google.cloud.datafusion.v1beta1.Instance.State" do
      value :STATE_UNSPECIFIED, 0
      value :CREATING, 1
      value :RUNNING, 2
      value :FAILED, 3
      value :DELETING, 4
      value :UPGRADING, 5
      value :RESTARTING, 6
      value :UPDATING, 7
      value :AUTO_UPDATING, 8
      value :AUTO_UPGRADING, 9
    end
    add_message "google.cloud.datafusion.v1beta1.ListInstancesRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
      optional :filter, :string, 4
      optional :order_by, :string, 5
    end
    add_message "google.cloud.datafusion.v1beta1.ListInstancesResponse" do
      repeated :instances, :message, 1, "google.cloud.datafusion.v1beta1.Instance"
      optional :next_page_token, :string, 2
      repeated :unreachable, :string, 3
    end
    add_message "google.cloud.datafusion.v1beta1.ListAvailableVersionsRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
      optional :latest_patch_only, :bool, 4
    end
    add_message "google.cloud.datafusion.v1beta1.ListAvailableVersionsResponse" do
      repeated :available_versions, :message, 1, "google.cloud.datafusion.v1beta1.Version"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.datafusion.v1beta1.GetInstanceRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.CreateInstanceRequest" do
      optional :parent, :string, 1
      optional :instance_id, :string, 2
      optional :instance, :message, 3, "google.cloud.datafusion.v1beta1.Instance"
    end
    add_message "google.cloud.datafusion.v1beta1.DeleteInstanceRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.UpdateInstanceRequest" do
      optional :instance, :message, 1, "google.cloud.datafusion.v1beta1.Instance"
      optional :update_mask, :message, 2, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.datafusion.v1beta1.RestartInstanceRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.UpgradeInstanceRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.OperationMetadata" do
      optional :create_time, :message, 1, "google.protobuf.Timestamp"
      optional :end_time, :message, 2, "google.protobuf.Timestamp"
      optional :target, :string, 3
      optional :verb, :string, 4
      optional :status_detail, :string, 5
      optional :requested_cancellation, :bool, 6
      optional :api_version, :string, 7
    end
    add_message "google.cloud.datafusion.v1beta1.RemoveIamPolicyRequest" do
      optional :resource, :string, 1
    end
    add_message "google.cloud.datafusion.v1beta1.RemoveIamPolicyResponse" do
    end
    add_message "google.cloud.datafusion.v1beta1.ListNamespacesRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
      optional :view, :enum, 4, "google.cloud.datafusion.v1beta1.NamespaceView"
    end
    add_message "google.cloud.datafusion.v1beta1.IAMPolicy" do
      optional :policy, :message, 1, "google.iam.v1.Policy"
      optional :status, :message, 2, "google.rpc.Status"
    end
    add_message "google.cloud.datafusion.v1beta1.Namespace" do
      optional :name, :string, 1
      optional :iam_policy, :message, 2, "google.cloud.datafusion.v1beta1.IAMPolicy"
    end
    add_message "google.cloud.datafusion.v1beta1.ListNamespacesResponse" do
      repeated :namespaces, :message, 1, "google.cloud.datafusion.v1beta1.Namespace"
      optional :next_page_token, :string, 2
    end
    add_message "google.cloud.datafusion.v1beta1.DnsPeering" do
      optional :zone, :string, 1
      optional :domain, :string, 2
      optional :description, :string, 3
      optional :target_project, :string, 4
      optional :target_network, :string, 5
    end
    add_message "google.cloud.datafusion.v1beta1.AddDnsPeeringRequest" do
      optional :parent, :string, 1
      optional :dns_peering, :message, 2, "google.cloud.datafusion.v1beta1.DnsPeering"
    end
    add_message "google.cloud.datafusion.v1beta1.AddDnsPeeringResponse" do
    end
    add_message "google.cloud.datafusion.v1beta1.RemoveDnsPeeringRequest" do
      optional :parent, :string, 1
      optional :zone, :string, 2
    end
    add_message "google.cloud.datafusion.v1beta1.RemoveDnsPeeringResponse" do
    end
    add_message "google.cloud.datafusion.v1beta1.ListDnsPeeringsRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
    end
    add_message "google.cloud.datafusion.v1beta1.ListDnsPeeringsResponse" do
      repeated :dns_peerings, :message, 1, "google.cloud.datafusion.v1beta1.DnsPeering"
      optional :next_page_token, :string, 2
    end
    add_enum "google.cloud.datafusion.v1beta1.NamespaceView" do
      value :NAMESPACE_VIEW_UNSPECIFIED, 0
      value :NAMESPACE_VIEW_BASIC, 1
      value :NAMESPACE_VIEW_FULL, 2
    end
  end
end

module Google
  module Cloud
    module DataFusion
      module V1beta1
        NetworkConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.NetworkConfig").msgclass
        Version = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Version").msgclass
        Accelerator = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Accelerator").msgclass
        Accelerator::AcceleratorType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Accelerator.AcceleratorType").enummodule
        CryptoKeyConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.CryptoKeyConfig").msgclass
        Instance = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Instance").msgclass
        Instance::Type = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Instance.Type").enummodule
        Instance::State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Instance.State").enummodule
        ListInstancesRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListInstancesRequest").msgclass
        ListInstancesResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListInstancesResponse").msgclass
        ListAvailableVersionsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListAvailableVersionsRequest").msgclass
        ListAvailableVersionsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListAvailableVersionsResponse").msgclass
        GetInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.GetInstanceRequest").msgclass
        CreateInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.CreateInstanceRequest").msgclass
        DeleteInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.DeleteInstanceRequest").msgclass
        UpdateInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.UpdateInstanceRequest").msgclass
        RestartInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.RestartInstanceRequest").msgclass
        UpgradeInstanceRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.UpgradeInstanceRequest").msgclass
        OperationMetadata = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.OperationMetadata").msgclass
        RemoveIamPolicyRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.RemoveIamPolicyRequest").msgclass
        RemoveIamPolicyResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.RemoveIamPolicyResponse").msgclass
        ListNamespacesRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListNamespacesRequest").msgclass
        IAMPolicy = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.IAMPolicy").msgclass
        Namespace = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.Namespace").msgclass
        ListNamespacesResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListNamespacesResponse").msgclass
        DnsPeering = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.DnsPeering").msgclass
        AddDnsPeeringRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.AddDnsPeeringRequest").msgclass
        AddDnsPeeringResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.AddDnsPeeringResponse").msgclass
        RemoveDnsPeeringRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.RemoveDnsPeeringRequest").msgclass
        RemoveDnsPeeringResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.RemoveDnsPeeringResponse").msgclass
        ListDnsPeeringsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListDnsPeeringsRequest").msgclass
        ListDnsPeeringsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.ListDnsPeeringsResponse").msgclass
        NamespaceView = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datafusion.v1beta1.NamespaceView").enummodule
      end
    end
  end
end
