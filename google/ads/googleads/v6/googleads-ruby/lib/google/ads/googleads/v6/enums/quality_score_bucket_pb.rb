# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/quality_score_bucket.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/enums/quality_score_bucket.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.enums.QualityScoreBucketEnum" do
    end
    add_enum "google.ads.googleads.v6.enums.QualityScoreBucketEnum.QualityScoreBucket" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :BELOW_AVERAGE, 2
      value :AVERAGE, 3
      value :ABOVE_AVERAGE, 4
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Enums
          QualityScoreBucketEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.QualityScoreBucketEnum").msgclass
          QualityScoreBucketEnum::QualityScoreBucket = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.enums.QualityScoreBucketEnum.QualityScoreBucket").enummodule
        end
      end
    end
  end
end
