# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/testing/v1/test_environment_discovery.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/devtools/testing/v1/test_execution_pb'
require 'google/protobuf/duration_pb'
require 'google/protobuf/timestamp_pb'
require 'google/type/date_pb'
require 'google/api/client_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/devtools/testing/v1/test_environment_discovery.proto", :syntax => :proto3) do
    add_message "google.devtools.testing.v1.DeviceIpBlock" do
      optional :block, :string, 1
      optional :form, :enum, 2, "google.devtools.testing.v1.DeviceForm"
      optional :added_date, :message, 3, "google.type.Date"
    end
    add_message "google.devtools.testing.v1.GetTestEnvironmentCatalogRequest" do
      optional :environment_type, :enum, 1, "google.devtools.testing.v1.GetTestEnvironmentCatalogRequest.EnvironmentType"
      optional :project_id, :string, 2
    end
    add_enum "google.devtools.testing.v1.GetTestEnvironmentCatalogRequest.EnvironmentType" do
      value :ENVIRONMENT_TYPE_UNSPECIFIED, 0
      value :ANDROID, 1
      value :IOS, 3
      value :NETWORK_CONFIGURATION, 4
      value :PROVIDED_SOFTWARE, 5
      value :DEVICE_IP_BLOCKS, 6
    end
    add_message "google.devtools.testing.v1.TestEnvironmentCatalog" do
      oneof :environment_catalog do
        optional :android_device_catalog, :message, 1, "google.devtools.testing.v1.AndroidDeviceCatalog"
        optional :ios_device_catalog, :message, 3, "google.devtools.testing.v1.IosDeviceCatalog"
        optional :network_configuration_catalog, :message, 4, "google.devtools.testing.v1.NetworkConfigurationCatalog"
        optional :software_catalog, :message, 5, "google.devtools.testing.v1.ProvidedSoftwareCatalog"
        optional :device_ip_block_catalog, :message, 6, "google.devtools.testing.v1.DeviceIpBlockCatalog"
      end
    end
    add_message "google.devtools.testing.v1.DeviceIpBlockCatalog" do
      repeated :ip_blocks, :message, 1, "google.devtools.testing.v1.DeviceIpBlock"
    end
    add_message "google.devtools.testing.v1.AndroidDeviceCatalog" do
      repeated :models, :message, 1, "google.devtools.testing.v1.AndroidModel"
      repeated :versions, :message, 2, "google.devtools.testing.v1.AndroidVersion"
      optional :runtime_configuration, :message, 3, "google.devtools.testing.v1.AndroidRuntimeConfiguration"
    end
    add_message "google.devtools.testing.v1.AndroidRuntimeConfiguration" do
      repeated :locales, :message, 1, "google.devtools.testing.v1.Locale"
      repeated :orientations, :message, 2, "google.devtools.testing.v1.Orientation"
    end
    add_message "google.devtools.testing.v1.AndroidModel" do
      optional :id, :string, 1
      optional :name, :string, 2
      optional :manufacturer, :string, 3
      optional :brand, :string, 9
      optional :codename, :string, 10
      optional :form, :enum, 4, "google.devtools.testing.v1.DeviceForm"
      optional :form_factor, :enum, 16, "google.devtools.testing.v1.DeviceFormFactor"
      optional :screen_x, :int32, 5
      optional :screen_y, :int32, 6
      optional :screen_density, :int32, 12
      optional :low_fps_video_recording, :bool, 17
      repeated :supported_version_ids, :string, 7
      repeated :supported_abis, :string, 11
      repeated :tags, :string, 8
      optional :thumbnail_url, :string, 19
    end
    add_message "google.devtools.testing.v1.AndroidVersion" do
      optional :id, :string, 1
      optional :version_string, :string, 2
      optional :api_level, :int32, 3
      optional :code_name, :string, 4
      optional :release_date, :message, 5, "google.type.Date"
      optional :distribution, :message, 6, "google.devtools.testing.v1.Distribution"
      repeated :tags, :string, 7
    end
    add_message "google.devtools.testing.v1.Distribution" do
      optional :measurement_time, :message, 1, "google.protobuf.Timestamp"
      optional :market_share, :double, 2
    end
    add_message "google.devtools.testing.v1.IosDeviceCatalog" do
      repeated :models, :message, 1, "google.devtools.testing.v1.IosModel"
      repeated :versions, :message, 2, "google.devtools.testing.v1.IosVersion"
      repeated :xcode_versions, :message, 4, "google.devtools.testing.v1.XcodeVersion"
      optional :runtime_configuration, :message, 3, "google.devtools.testing.v1.IosRuntimeConfiguration"
    end
    add_message "google.devtools.testing.v1.IosRuntimeConfiguration" do
      repeated :locales, :message, 1, "google.devtools.testing.v1.Locale"
      repeated :orientations, :message, 2, "google.devtools.testing.v1.Orientation"
    end
    add_message "google.devtools.testing.v1.IosModel" do
      optional :id, :string, 1
      optional :name, :string, 2
      repeated :supported_version_ids, :string, 3
      repeated :tags, :string, 4
      repeated :device_capabilities, :string, 5
      optional :screen_x, :int32, 7
      optional :screen_y, :int32, 8
      optional :screen_density, :int32, 9
      optional :form_factor, :enum, 6, "google.devtools.testing.v1.DeviceFormFactor"
    end
    add_message "google.devtools.testing.v1.IosVersion" do
      optional :id, :string, 1
      optional :major_version, :int32, 2
      optional :minor_version, :int32, 4
      repeated :tags, :string, 3
      repeated :supported_xcode_version_ids, :string, 5
    end
    add_message "google.devtools.testing.v1.Locale" do
      optional :id, :string, 1
      optional :name, :string, 2
      optional :region, :string, 3
      repeated :tags, :string, 4
    end
    add_message "google.devtools.testing.v1.Orientation" do
      optional :id, :string, 1
      optional :name, :string, 2
      repeated :tags, :string, 3
    end
    add_message "google.devtools.testing.v1.XcodeVersion" do
      optional :version, :string, 1
      repeated :tags, :string, 2
    end
    add_message "google.devtools.testing.v1.NetworkConfigurationCatalog" do
      repeated :configurations, :message, 1, "google.devtools.testing.v1.NetworkConfiguration"
    end
    add_message "google.devtools.testing.v1.NetworkConfiguration" do
      optional :id, :string, 1
      optional :up_rule, :message, 2, "google.devtools.testing.v1.TrafficRule"
      optional :down_rule, :message, 3, "google.devtools.testing.v1.TrafficRule"
    end
    add_message "google.devtools.testing.v1.TrafficRule" do
      optional :delay, :message, 1, "google.protobuf.Duration"
      optional :packet_loss_ratio, :float, 2
      optional :packet_duplication_ratio, :float, 3
      optional :bandwidth, :float, 4
      optional :burst, :float, 5
    end
    add_message "google.devtools.testing.v1.ProvidedSoftwareCatalog" do
      optional :orchestrator_version, :string, 1
      optional :androidx_orchestrator_version, :string, 2
    end
    add_enum "google.devtools.testing.v1.DeviceForm" do
      value :DEVICE_FORM_UNSPECIFIED, 0
      value :VIRTUAL, 1
      value :PHYSICAL, 2
      value :EMULATOR, 3
    end
    add_enum "google.devtools.testing.v1.DeviceFormFactor" do
      value :DEVICE_FORM_FACTOR_UNSPECIFIED, 0
      value :PHONE, 1
      value :TABLET, 2
      value :WEARABLE, 3
    end
  end
end

module Google
  module Devtools
    module Testing
      module V1
        DeviceIpBlock = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.DeviceIpBlock").msgclass
        GetTestEnvironmentCatalogRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.GetTestEnvironmentCatalogRequest").msgclass
        GetTestEnvironmentCatalogRequest::EnvironmentType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.GetTestEnvironmentCatalogRequest.EnvironmentType").enummodule
        TestEnvironmentCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.TestEnvironmentCatalog").msgclass
        DeviceIpBlockCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.DeviceIpBlockCatalog").msgclass
        AndroidDeviceCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.AndroidDeviceCatalog").msgclass
        AndroidRuntimeConfiguration = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.AndroidRuntimeConfiguration").msgclass
        AndroidModel = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.AndroidModel").msgclass
        AndroidVersion = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.AndroidVersion").msgclass
        Distribution = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.Distribution").msgclass
        IosDeviceCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.IosDeviceCatalog").msgclass
        IosRuntimeConfiguration = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.IosRuntimeConfiguration").msgclass
        IosModel = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.IosModel").msgclass
        IosVersion = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.IosVersion").msgclass
        Locale = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.Locale").msgclass
        Orientation = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.Orientation").msgclass
        XcodeVersion = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.XcodeVersion").msgclass
        NetworkConfigurationCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.NetworkConfigurationCatalog").msgclass
        NetworkConfiguration = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.NetworkConfiguration").msgclass
        TrafficRule = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.TrafficRule").msgclass
        ProvidedSoftwareCatalog = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.ProvidedSoftwareCatalog").msgclass
        DeviceForm = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.DeviceForm").enummodule
        DeviceFormFactor = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.devtools.testing.v1.DeviceFormFactor").enummodule
      end
    end
  end
end
