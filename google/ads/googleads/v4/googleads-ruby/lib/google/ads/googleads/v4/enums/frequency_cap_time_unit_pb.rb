# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/frequency_cap_time_unit.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v4/enums/frequency_cap_time_unit.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v4.enums.FrequencyCapTimeUnitEnum" do
    end
    add_enum "google.ads.googleads.v4.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :DAY, 2
      value :WEEK, 3
      value :MONTH, 4
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V4
        module Enums
          FrequencyCapTimeUnitEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.enums.FrequencyCapTimeUnitEnum").msgclass
          FrequencyCapTimeUnitEnum::FrequencyCapTimeUnit = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v4.enums.FrequencyCapTimeUnitEnum.FrequencyCapTimeUnit").enummodule
        end
      end
    end
  end
end
