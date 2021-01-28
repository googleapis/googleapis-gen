# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/conversion_upload_service.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
require 'google/api/client_pb'
require 'google/api/field_behavior_pb'
require 'google/protobuf/wrappers_pb'
require 'google/rpc/status_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/services/conversion_upload_service.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.services.UploadClickConversionsRequest" do
      optional :customer_id, :string, 1
      repeated :conversions, :message, 2, "google.ads.googleads.v3.services.ClickConversion"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v3.services.UploadClickConversionsResponse" do
      optional :partial_failure_error, :message, 1, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v3.services.ClickConversionResult"
    end
    add_message "google.ads.googleads.v3.services.UploadCallConversionsRequest" do
      optional :customer_id, :string, 1
      repeated :conversions, :message, 2, "google.ads.googleads.v3.services.CallConversion"
      optional :partial_failure, :bool, 3
      optional :validate_only, :bool, 4
    end
    add_message "google.ads.googleads.v3.services.UploadCallConversionsResponse" do
      optional :partial_failure_error, :message, 1, "google.rpc.Status"
      repeated :results, :message, 2, "google.ads.googleads.v3.services.CallConversionResult"
    end
    add_message "google.ads.googleads.v3.services.ClickConversion" do
      optional :gclid, :message, 1, "google.protobuf.StringValue"
      optional :conversion_action, :message, 2, "google.protobuf.StringValue"
      optional :conversion_date_time, :message, 3, "google.protobuf.StringValue"
      optional :conversion_value, :message, 4, "google.protobuf.DoubleValue"
      optional :currency_code, :message, 5, "google.protobuf.StringValue"
      optional :order_id, :message, 6, "google.protobuf.StringValue"
      optional :external_attribution_data, :message, 7, "google.ads.googleads.v3.services.ExternalAttributionData"
    end
    add_message "google.ads.googleads.v3.services.CallConversion" do
      optional :caller_id, :message, 1, "google.protobuf.StringValue"
      optional :call_start_date_time, :message, 2, "google.protobuf.StringValue"
      optional :conversion_action, :message, 3, "google.protobuf.StringValue"
      optional :conversion_date_time, :message, 4, "google.protobuf.StringValue"
      optional :conversion_value, :message, 5, "google.protobuf.DoubleValue"
      optional :currency_code, :message, 6, "google.protobuf.StringValue"
    end
    add_message "google.ads.googleads.v3.services.ExternalAttributionData" do
      optional :external_attribution_credit, :message, 1, "google.protobuf.DoubleValue"
      optional :external_attribution_model, :message, 2, "google.protobuf.StringValue"
    end
    add_message "google.ads.googleads.v3.services.ClickConversionResult" do
      optional :gclid, :message, 1, "google.protobuf.StringValue"
      optional :conversion_action, :message, 2, "google.protobuf.StringValue"
      optional :conversion_date_time, :message, 3, "google.protobuf.StringValue"
    end
    add_message "google.ads.googleads.v3.services.CallConversionResult" do
      optional :caller_id, :message, 1, "google.protobuf.StringValue"
      optional :call_start_date_time, :message, 2, "google.protobuf.StringValue"
      optional :conversion_action, :message, 3, "google.protobuf.StringValue"
      optional :conversion_date_time, :message, 4, "google.protobuf.StringValue"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Services
          UploadClickConversionsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.UploadClickConversionsRequest").msgclass
          UploadClickConversionsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.UploadClickConversionsResponse").msgclass
          UploadCallConversionsRequest = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.UploadCallConversionsRequest").msgclass
          UploadCallConversionsResponse = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.UploadCallConversionsResponse").msgclass
          ClickConversion = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.ClickConversion").msgclass
          CallConversion = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.CallConversion").msgclass
          ExternalAttributionData = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.ExternalAttributionData").msgclass
          ClickConversionResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.ClickConversionResult").msgclass
          CallConversionResult = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.services.CallConversionResult").msgclass
        end
      end
    end
  end
end
