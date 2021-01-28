# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1beta1/search.proto

require 'google/protobuf'

require 'google/api/field_behavior_pb'
require 'google/cloud/datacatalog/v1beta1/common_pb'
require 'google/protobuf/timestamp_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/cloud/datacatalog/v1beta1/search.proto", :syntax => :proto3) do
    add_message "google.cloud.datacatalog.v1beta1.SearchCatalogResult" do
      optional :search_result_type, :enum, 1, "google.cloud.datacatalog.v1beta1.SearchResultType"
      optional :search_result_subtype, :string, 2
      optional :relative_resource_name, :string, 3
      optional :linked_resource, :string, 4
    end
    add_enum "google.cloud.datacatalog.v1beta1.SearchResultType" do
      value :SEARCH_RESULT_TYPE_UNSPECIFIED, 0
      value :ENTRY, 1
      value :TAG_TEMPLATE, 2
      value :ENTRY_GROUP, 3
    end
  end
end

module Google
  module Cloud
    module DataCatalog
      module V1beta1
        SearchCatalogResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datacatalog.v1beta1.SearchCatalogResult").msgclass
        SearchResultType = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.cloud.datacatalog.v1beta1.SearchResultType").enummodule
      end
    end
  end
end
