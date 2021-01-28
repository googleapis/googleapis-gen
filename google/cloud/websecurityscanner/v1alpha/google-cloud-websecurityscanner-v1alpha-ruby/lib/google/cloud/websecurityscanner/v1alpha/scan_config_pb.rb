# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1alpha/scan_config.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/cloud/websecurityscanner/v1alpha/scan_run_pb'
require 'google/protobuf/timestamp_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/websecurityscanner/v1alpha/scan_config.proto", :syntax => :proto3) do
    add_message "google.cloud.websecurityscanner.v1alpha.ScanConfig" do
      optional :name, :string, 1
      optional :display_name, :string, 2
      optional :max_qps, :int32, 3
      repeated :starting_urls, :string, 4
      optional :authentication, :message, 5, "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication"
      optional :user_agent, :enum, 6, "google.cloud.websecurityscanner.v1alpha.ScanConfig.UserAgent"
      repeated :blacklist_patterns, :string, 7
      optional :schedule, :message, 8, "google.cloud.websecurityscanner.v1alpha.ScanConfig.Schedule"
      repeated :target_platforms, :enum, 9, "google.cloud.websecurityscanner.v1alpha.ScanConfig.TargetPlatform"
      optional :latest_run, :message, 11, "google.cloud.websecurityscanner.v1alpha.ScanRun"
    end
    add_message "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication" do
      oneof :authentication do
        optional :google_account, :message, 1, "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.GoogleAccount"
        optional :custom_account, :message, 2, "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.CustomAccount"
      end
    end
    add_message "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.GoogleAccount" do
      optional :username, :string, 1
      optional :password, :string, 2
    end
    add_message "google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.CustomAccount" do
      optional :username, :string, 1
      optional :password, :string, 2
      optional :login_url, :string, 3
    end
    add_message "google.cloud.websecurityscanner.v1alpha.ScanConfig.Schedule" do
      optional :schedule_time, :message, 1, "google.protobuf.Timestamp"
      optional :interval_duration_days, :int32, 2
    end
    add_enum "google.cloud.websecurityscanner.v1alpha.ScanConfig.UserAgent" do
      value :USER_AGENT_UNSPECIFIED, 0
      value :CHROME_LINUX, 1
      value :CHROME_ANDROID, 2
      value :SAFARI_IPHONE, 3
    end
    add_enum "google.cloud.websecurityscanner.v1alpha.ScanConfig.TargetPlatform" do
      value :TARGET_PLATFORM_UNSPECIFIED, 0
      value :APP_ENGINE, 1
      value :COMPUTE, 2
    end
  end
end

module Google
  module Cloud
    module Websecurityscanner
      module V1alpha
        ScanConfig = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig").msgclass
        ScanConfig::Authentication = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication").msgclass
        ScanConfig::Authentication::GoogleAccount = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.GoogleAccount").msgclass
        ScanConfig::Authentication::CustomAccount = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.Authentication.CustomAccount").msgclass
        ScanConfig::Schedule = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.Schedule").msgclass
        ScanConfig::UserAgent = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.UserAgent").enummodule
        ScanConfig::TargetPlatform = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.websecurityscanner.v1alpha.ScanConfig.TargetPlatform").enummodule
      end
    end
  end
end
