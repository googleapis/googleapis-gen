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
      module V4
        module Services
          module ChangeStatusService
            # Path helper methods for the ChangeStatusService API.
            module Paths
              ##
              # Create a fully-qualified AdGroup resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroups/{ad_group}`
              #
              # @param customer [String]
              # @param ad_group [String]
              #
              # @return [::String]
              def ad_group_path customer:, ad_group:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroups/#{ad_group}"
              end

              ##
              # Create a fully-qualified AdGroupAd resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroupAds/{ad_group_ad}`
              #
              # @param customer [String]
              # @param ad_group_ad [String]
              #
              # @return [::String]
              def ad_group_ad_path customer:, ad_group_ad:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroupAds/#{ad_group_ad}"
              end

              ##
              # Create a fully-qualified AdGroupBidModifier resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroupBidModifiers/{ad_group_bid_modifier}`
              #
              # @param customer [String]
              # @param ad_group_bid_modifier [String]
              #
              # @return [::String]
              def ad_group_bid_modifier_path customer:, ad_group_bid_modifier:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroupBidModifiers/#{ad_group_bid_modifier}"
              end

              ##
              # Create a fully-qualified AdGroupCriterion resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroupCriteria/{ad_group_criterion}`
              #
              # @param customer [String]
              # @param ad_group_criterion [String]
              #
              # @return [::String]
              def ad_group_criterion_path customer:, ad_group_criterion:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroupCriteria/#{ad_group_criterion}"
              end

              ##
              # Create a fully-qualified AdGroupFeed resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/adGroupFeeds/{ad_group_feed}`
              #
              # @param customer [String]
              # @param ad_group_feed [String]
              #
              # @return [::String]
              def ad_group_feed_path customer:, ad_group_feed:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/adGroupFeeds/#{ad_group_feed}"
              end

              ##
              # Create a fully-qualified Campaign resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/campaigns/{campaign}`
              #
              # @param customer [String]
              # @param campaign [String]
              #
              # @return [::String]
              def campaign_path customer:, campaign:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/campaigns/#{campaign}"
              end

              ##
              # Create a fully-qualified CampaignCriterion resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/campaignCriteria/{campaign_criterion}`
              #
              # @param customer [String]
              # @param campaign_criterion [String]
              #
              # @return [::String]
              def campaign_criterion_path customer:, campaign_criterion:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/campaignCriteria/#{campaign_criterion}"
              end

              ##
              # Create a fully-qualified CampaignFeed resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/campaignFeeds/{campaign_feed}`
              #
              # @param customer [String]
              # @param campaign_feed [String]
              #
              # @return [::String]
              def campaign_feed_path customer:, campaign_feed:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/campaignFeeds/#{campaign_feed}"
              end

              ##
              # Create a fully-qualified ChangeStatus resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/changeStatus/{change_status}`
              #
              # @param customer [String]
              # @param change_status [String]
              #
              # @return [::String]
              def change_status_path customer:, change_status:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/changeStatus/#{change_status}"
              end

              ##
              # Create a fully-qualified Feed resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/feeds/{feed}`
              #
              # @param customer [String]
              # @param feed [String]
              #
              # @return [::String]
              def feed_path customer:, feed:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/feeds/#{feed}"
              end

              ##
              # Create a fully-qualified FeedItem resource string.
              #
              # The resource will be in the following format:
              #
              # `customers/{customer}/feedItems/{feed_item}`
              #
              # @param customer [String]
              # @param feed_item [String]
              #
              # @return [::String]
              def feed_item_path customer:, feed_item:
                raise ::ArgumentError, "customer cannot contain /" if customer.to_s.include? "/"

                "customers/#{customer}/feedItems/#{feed_item}"
              end

              extend self
            end
          end
        end
      end
    end
  end
end
