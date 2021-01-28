# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/external_conversion_source.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v3/enums/external_conversion_source.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v3.enums.ExternalConversionSourceEnum" do
    end
    add_enum "google.ads.googleads.v3.enums.ExternalConversionSourceEnum.ExternalConversionSource" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :WEBPAGE, 2
      value :ANALYTICS, 3
      value :UPLOAD, 4
      value :AD_CALL_METRICS, 5
      value :WEBSITE_CALL_METRICS, 6
      value :STORE_VISITS, 7
      value :ANDROID_IN_APP, 8
      value :IOS_IN_APP, 9
      value :IOS_FIRST_OPEN, 10
      value :APP_UNSPECIFIED, 11
      value :ANDROID_FIRST_OPEN, 12
      value :UPLOAD_CALLS, 13
      value :FIREBASE, 14
      value :CLICK_TO_CALL, 15
      value :SALESFORCE, 16
      value :STORE_SALES_CRM, 17
      value :STORE_SALES_PAYMENT_NETWORK, 18
      value :GOOGLE_PLAY, 19
      value :THIRD_PARTY_APP_ANALYTICS, 20
      value :GOOGLE_ATTRIBUTION, 21
      value :STORE_SALES_DIRECT, 22
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V3
        module Enums
          ExternalConversionSourceEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.enums.ExternalConversionSourceEnum").msgclass
          ExternalConversionSourceEnum::ExternalConversionSource = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v3.enums.ExternalConversionSourceEnum.ExternalConversionSource").enummodule
        end
      end
    end
  end
end
