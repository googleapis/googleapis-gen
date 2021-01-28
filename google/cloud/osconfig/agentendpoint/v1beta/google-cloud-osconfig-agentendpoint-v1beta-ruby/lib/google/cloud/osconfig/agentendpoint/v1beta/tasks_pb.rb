# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/agentendpoint/v1beta/tasks.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/cloud/osconfig/agentendpoint/v1beta/patch_jobs_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/osconfig/agentendpoint/v1beta/tasks.proto", :syntax => :proto3) do
    add_message "google.cloud.osconfig.agentendpoint.v1beta.Task" do
      optional :task_id, :string, 1
      optional :task_type, :enum, 2, "google.cloud.osconfig.agentendpoint.v1beta.TaskType"
      optional :task_directive, :enum, 3, "google.cloud.osconfig.agentendpoint.v1beta.TaskDirective"
      map :service_labels, :string, :string, 6
      oneof :task_details do
        optional :apply_patches_task, :message, 4, "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask"
        optional :exec_step_task, :message, 5, "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask"
      end
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask" do
      optional :patch_config, :message, 1, "google.cloud.osconfig.agentendpoint.v1beta.PatchConfig"
      optional :dry_run, :bool, 3
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskProgress" do
      optional :state, :enum, 1, "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskProgress.State"
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskProgress.State" do
      value :STATE_UNSPECIFIED, 0
      value :STARTED, 4
      value :DOWNLOADING_PATCHES, 1
      value :APPLYING_PATCHES, 2
      value :REBOOTING, 3
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOutput" do
      optional :state, :enum, 1, "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOutput.State"
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOutput.State" do
      value :STATE_UNSPECIFIED, 0
      value :SUCCEEDED, 1
      value :SUCCEEDED_REBOOT_REQUIRED, 2
      value :FAILED, 3
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask" do
      optional :exec_step, :message, 1, "google.cloud.osconfig.agentendpoint.v1beta.ExecStep"
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskProgress" do
      optional :state, :enum, 1, "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskProgress.State"
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskProgress.State" do
      value :STATE_UNSPECIFIED, 0
      value :STARTED, 1
    end
    add_message "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOutput" do
      optional :state, :enum, 1, "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOutput.State"
      optional :exit_code, :int32, 2
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOutput.State" do
      value :STATE_UNSPECIFIED, 0
      value :COMPLETED, 1
      value :TIMED_OUT, 2
      value :CANCELLED, 3
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.TaskDirective" do
      value :TASK_DIRECTIVE_UNSPECIFIED, 0
      value :CONTINUE, 1
      value :STOP, 2
    end
    add_enum "google.cloud.osconfig.agentendpoint.v1beta.TaskType" do
      value :TASK_TYPE_UNSPECIFIED, 0
      value :APPLY_PATCHES, 1
      value :EXEC_STEP_TASK, 2
    end
  end
end

module Google
  module Cloud
    module Osconfig
      module Agentendpoint
        module V1beta
          Task = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.Task").msgclass
          ApplyPatchesTask = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask").msgclass
          ApplyPatchesTaskProgress = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskProgress").msgclass
          ApplyPatchesTaskProgress::State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskProgress.State").enummodule
          ApplyPatchesTaskOutput = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOutput").msgclass
          ApplyPatchesTaskOutput::State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOutput.State").enummodule
          ExecStepTask = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ExecStepTask").msgclass
          ExecStepTaskProgress = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskProgress").msgclass
          ExecStepTaskProgress::State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskProgress.State").enummodule
          ExecStepTaskOutput = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOutput").msgclass
          ExecStepTaskOutput::State = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.ExecStepTaskOutput.State").enummodule
          TaskDirective = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.TaskDirective").enummodule
          TaskType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.osconfig.agentendpoint.v1beta.TaskType").enummodule
        end
      end
    end
  end
end
