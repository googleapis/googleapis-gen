# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/enums/budget_status.proto

require 'google/protobuf'

require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v5/enums/budget_status.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v5.enums.BudgetStatusEnum" do
    end
    add_enum "google.ads.googleads.v5.enums.BudgetStatusEnum.BudgetStatus" do
      value :UNSPECIFIED, 0
      value :UNKNOWN, 1
      value :ENABLED, 2
      value :REMOVED, 3
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V5
        module Enums
          BudgetStatusEnum = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.BudgetStatusEnum").msgclass
          BudgetStatusEnum::BudgetStatus = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v5.enums.BudgetStatusEnum.BudgetStatus").enummodule
        end
      end
    end
  end
end
