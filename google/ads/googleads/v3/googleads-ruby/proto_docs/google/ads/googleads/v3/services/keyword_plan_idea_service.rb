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
        module Services
          # Request message for {::Google::Ads::GoogleAds::V3::Services::KeywordPlanIdeaService::Client#generate_keyword_ideas KeywordPlanIdeaService.GenerateKeywordIdeas}.
          # @!attribute [rw] customer_id
          #   @return [::String]
          #     The ID of the customer with the recommendation.
          # @!attribute [rw] language
          #   @return [::Google::Protobuf::StringValue]
          #     Required. The resource name of the language to target.
          #     Required
          # @!attribute [rw] geo_target_constants
          #   @return [::Array<::Google::Protobuf::StringValue>]
          #     The resource names of the location to target.
          #     Max 10
          # @!attribute [rw] keyword_plan_network
          #   @return [::Google::Ads::GoogleAds::V3::Enums::KeywordPlanNetworkEnum::KeywordPlanNetwork]
          #     Targeting network.
          # @!attribute [rw] keyword_and_url_seed
          #   @return [::Google::Ads::GoogleAds::V3::Services::KeywordAndUrlSeed]
          #     A Keyword and a specific Url to generate ideas from
          #     e.g. cars, www.example.com/cars.
          # @!attribute [rw] keyword_seed
          #   @return [::Google::Ads::GoogleAds::V3::Services::KeywordSeed]
          #     A Keyword or phrase to generate ideas from, e.g. cars.
          # @!attribute [rw] url_seed
          #   @return [::Google::Ads::GoogleAds::V3::Services::UrlSeed]
          #     A specific url to generate ideas from, e.g. www.example.com/cars.
          class GenerateKeywordIdeasRequest
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Keyword And Url Seed
          # @!attribute [rw] url
          #   @return [::Google::Protobuf::StringValue]
          #     The URL to crawl in order to generate keyword ideas.
          # @!attribute [rw] keywords
          #   @return [::Array<::Google::Protobuf::StringValue>]
          #     Requires at least one keyword.
          class KeywordAndUrlSeed
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Keyword Seed
          # @!attribute [rw] keywords
          #   @return [::Array<::Google::Protobuf::StringValue>]
          #     Requires at least one keyword.
          class KeywordSeed
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Url Seed
          # @!attribute [rw] url
          #   @return [::Google::Protobuf::StringValue]
          #     The URL to crawl in order to generate keyword ideas.
          class UrlSeed
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # Response message for {::Google::Ads::GoogleAds::V3::Services::KeywordPlanIdeaService::Client#generate_keyword_ideas KeywordPlanIdeaService.GenerateKeywordIdeas}.
          # @!attribute [rw] results
          #   @return [::Array<::Google::Ads::GoogleAds::V3::Services::GenerateKeywordIdeaResult>]
          #     Results of generating keyword ideas.
          class GenerateKeywordIdeaResponse
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end

          # The result of generating keyword ideas.
          # @!attribute [rw] text
          #   @return [::Google::Protobuf::StringValue]
          #     Text of the keyword idea.
          #     As in Keyword Plan historical metrics, this text may not be an actual
          #     keyword, but the canonical form of multiple keywords.
          #     See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
          # @!attribute [rw] keyword_idea_metrics
          #   @return [::Google::Ads::GoogleAds::V3::Common::KeywordPlanHistoricalMetrics]
          #     The historical metrics for the keyword
          class GenerateKeywordIdeaResult
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
