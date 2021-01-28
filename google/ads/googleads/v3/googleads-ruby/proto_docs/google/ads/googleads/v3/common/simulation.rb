# frozen_string_literal: true

# Copyright 2021 Google LLC
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     https://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# Auto-generated by gapic-generator-ruby. DO NOT EDIT!


module Google
  module Ads
    module GoogleAds
      module V3
        module Common
          # A container for simulation points for simulations of type BID_MODIFIER.
          # @!attribute [rw] points
          #   @return [::Array<::Google::Ads::GoogleAds::V3::Common::BidModifierSimulationPoint>]
          #     Projected metrics for a series of bid modifier amounts.
          class BidModifierSimulationPointList
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A container for simulation points for simulations of type CPC_BID.
          # @!attribute [rw] points
          #   @return [::Array<::Google::Ads::GoogleAds::V3::Common::CpcBidSimulationPoint>]
          #     Projected metrics for a series of CPC bid amounts.
          class CpcBidSimulationPointList
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A container for simulation points for simulations of type CPV_BID.
          # @!attribute [rw] points
          #   @return [::Array<::Google::Ads::GoogleAds::V3::Common::CpvBidSimulationPoint>]
          #     Projected metrics for a series of CPV bid amounts.
          class CpvBidSimulationPointList
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # A container for simulation points for simulations of type TARGET_CPA.
          # @!attribute [rw] points
          #   @return [::Array<::Google::Ads::GoogleAds::V3::Common::TargetCpaSimulationPoint>]
          #     Projected metrics for a series of target CPA amounts.
          class TargetCpaSimulationPointList
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Projected metrics for a specific bid modifier amount.
          # @!attribute [rw] bid_modifier
          #   @return [::Google::Protobuf::DoubleValue]
          #     The simulated bid modifier upon which projected metrics are based.
          # @!attribute [rw] biddable_conversions
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected number of biddable conversions.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] biddable_conversions_value
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected total value of biddable conversions.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] clicks
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of clicks.
          # @!attribute [rw] cost_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected cost in micros.
          # @!attribute [rw] impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of impressions.
          # @!attribute [rw] top_slot_impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of top slot impressions.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] parent_biddable_conversions
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected number of biddable conversions for the parent resource.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] parent_biddable_conversions_value
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected total value of biddable conversions for the parent resource.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] parent_clicks
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of clicks for the parent resource.
          # @!attribute [rw] parent_cost_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected cost in micros for the parent resource.
          # @!attribute [rw] parent_impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of impressions for the parent resource.
          # @!attribute [rw] parent_top_slot_impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of top slot impressions for the parent resource.
          #     Only search advertising channel type supports this field.
          # @!attribute [rw] parent_required_budget_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected minimum daily budget that must be available to the parent
          #     resource to realize this simulation.
          class BidModifierSimulationPoint
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Projected metrics for a specific CPC bid amount.
          # @!attribute [rw] cpc_bid_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     The simulated CPC bid upon which projected metrics are based.
          # @!attribute [rw] biddable_conversions
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected number of biddable conversions.
          # @!attribute [rw] biddable_conversions_value
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected total value of biddable conversions.
          # @!attribute [rw] clicks
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of clicks.
          # @!attribute [rw] cost_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected cost in micros.
          # @!attribute [rw] impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of impressions.
          # @!attribute [rw] top_slot_impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of top slot impressions.
          #     Only search advertising channel type supports this field.
          class CpcBidSimulationPoint
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Projected metrics for a specific CPV bid amount.
          # @!attribute [rw] cpv_bid_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     The simulated CPV bid upon which projected metrics are based.
          # @!attribute [rw] cost_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected cost in micros.
          # @!attribute [rw] impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of impressions.
          # @!attribute [rw] views
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of views.
          class CpvBidSimulationPoint
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Projected metrics for a specific target CPA amount.
          # @!attribute [rw] target_cpa_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     The simulated target CPA upon which projected metrics are based.
          # @!attribute [rw] biddable_conversions
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected number of biddable conversions.
          # @!attribute [rw] biddable_conversions_value
          #   @return [::Google::Protobuf::DoubleValue]
          #     Projected total value of biddable conversions.
          # @!attribute [rw] clicks
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of clicks.
          # @!attribute [rw] cost_micros
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected cost in micros.
          # @!attribute [rw] impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of impressions.
          # @!attribute [rw] top_slot_impressions
          #   @return [::Google::Protobuf::Int64Value]
          #     Projected number of top slot impressions.
          #     Only search advertising channel type supports this field.
          class TargetCpaSimulationPoint
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
