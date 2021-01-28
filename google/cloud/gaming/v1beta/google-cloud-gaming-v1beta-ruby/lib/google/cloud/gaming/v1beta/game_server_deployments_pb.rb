# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1beta/game_server_deployments.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/cloud/gaming/v1beta/common_pb'
require 'google/protobuf/field_mask_pb'
require 'google/protobuf/timestamp_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/gaming/v1beta/game_server_deployments.proto", :syntax => :proto3) do
    add_message "google.cloud.gaming.v1beta.ListGameServerDeploymentsRequest" do
      optional :parent, :string, 1
      optional :page_size, :int32, 2
      optional :page_token, :string, 3
      optional :filter, :string, 4
      optional :order_by, :string, 5
    end
    add_message "google.cloud.gaming.v1beta.ListGameServerDeploymentsResponse" do
      repeated :game_server_deployments, :message, 1, "google.cloud.gaming.v1beta.GameServerDeployment"
      optional :next_page_token, :string, 2
      repeated :unreachable, :string, 4
    end
    add_message "google.cloud.gaming.v1beta.GetGameServerDeploymentRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.gaming.v1beta.GetGameServerDeploymentRolloutRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.gaming.v1beta.CreateGameServerDeploymentRequest" do
      optional :parent, :string, 1
      optional :deployment_id, :string, 2
      optional :game_server_deployment, :message, 3, "google.cloud.gaming.v1beta.GameServerDeployment"
    end
    add_message "google.cloud.gaming.v1beta.DeleteGameServerDeploymentRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.gaming.v1beta.UpdateGameServerDeploymentRequest" do
      optional :game_server_deployment, :message, 1, "google.cloud.gaming.v1beta.GameServerDeployment"
      optional :update_mask, :message, 2, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.gaming.v1beta.UpdateGameServerDeploymentRolloutRequest" do
      optional :rollout, :message, 1, "google.cloud.gaming.v1beta.GameServerDeploymentRollout"
      optional :update_mask, :message, 2, "google.protobuf.FieldMask"
    end
    add_message "google.cloud.gaming.v1beta.FetchDeploymentStateRequest" do
      optional :name, :string, 1
    end
    add_message "google.cloud.gaming.v1beta.FetchDeploymentStateResponse" do
      repeated :cluster_state, :message, 1, "google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState"
      repeated :unavailable, :string, 2
    end
    add_message "google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState" do
      optional :cluster, :string, 1
      repeated :fleet_details, :message, 2, "google.cloud.gaming.v1beta.DeployedFleetDetails"
    end
    add_message "google.cloud.gaming.v1beta.GameServerDeployment" do
      optional :name, :string, 1
      optional :create_time, :message, 2, "google.protobuf.Timestamp"
      optional :update_time, :message, 3, "google.protobuf.Timestamp"
      map :labels, :string, :string, 4
      optional :etag, :string, 7
      optional :description, :string, 8
    end
    add_message "google.cloud.gaming.v1beta.GameServerConfigOverride" do
      oneof :selector do
        optional :realms_selector, :message, 1, "google.cloud.gaming.v1beta.RealmSelector"
      end
      oneof :change do
        optional :config_version, :string, 100
      end
    end
    add_message "google.cloud.gaming.v1beta.GameServerDeploymentRollout" do
      optional :name, :string, 1
      optional :create_time, :message, 2, "google.protobuf.Timestamp"
      optional :update_time, :message, 3, "google.protobuf.Timestamp"
      optional :default_game_server_config, :string, 4
      repeated :game_server_config_overrides, :message, 5, "google.cloud.gaming.v1beta.GameServerConfigOverride"
      optional :etag, :string, 6
    end
    add_message "google.cloud.gaming.v1beta.PreviewGameServerDeploymentRolloutRequest" do
      optional :rollout, :message, 1, "google.cloud.gaming.v1beta.GameServerDeploymentRollout"
      optional :update_mask, :message, 2, "google.protobuf.FieldMask"
      optional :preview_time, :message, 3, "google.protobuf.Timestamp"
    end
    add_message "google.cloud.gaming.v1beta.PreviewGameServerDeploymentRolloutResponse" do
      repeated :unavailable, :string, 2
      optional :etag, :string, 3
      optional :target_state, :message, 4, "google.cloud.gaming.v1beta.TargetState"
    end
  end
end

module Google
  module Cloud
    module Gaming
      module V1beta
        ListGameServerDeploymentsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.ListGameServerDeploymentsRequest").msgclass
        ListGameServerDeploymentsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.ListGameServerDeploymentsResponse").msgclass
        GetGameServerDeploymentRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.GetGameServerDeploymentRequest").msgclass
        GetGameServerDeploymentRolloutRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.GetGameServerDeploymentRolloutRequest").msgclass
        CreateGameServerDeploymentRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.CreateGameServerDeploymentRequest").msgclass
        DeleteGameServerDeploymentRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.DeleteGameServerDeploymentRequest").msgclass
        UpdateGameServerDeploymentRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.UpdateGameServerDeploymentRequest").msgclass
        UpdateGameServerDeploymentRolloutRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.UpdateGameServerDeploymentRolloutRequest").msgclass
        FetchDeploymentStateRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.FetchDeploymentStateRequest").msgclass
        FetchDeploymentStateResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.FetchDeploymentStateResponse").msgclass
        FetchDeploymentStateResponse::DeployedClusterState = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState").msgclass
        GameServerDeployment = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.GameServerDeployment").msgclass
        GameServerConfigOverride = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.GameServerConfigOverride").msgclass
        GameServerDeploymentRollout = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.GameServerDeploymentRollout").msgclass
        PreviewGameServerDeploymentRolloutRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.PreviewGameServerDeploymentRolloutRequest").msgclass
        PreviewGameServerDeploymentRolloutResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.gaming.v1beta.PreviewGameServerDeploymentRolloutResponse").msgclass
      end
    end
  end
end
