# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/campaign.proto

require 'google/protobuf'

require 'google/ads/googleads/v6/common/bidding_pb'
require 'google/ads/googleads/v6/common/custom_parameter_pb'
require 'google/ads/googleads/v6/common/frequency_cap_pb'
require 'google/ads/googleads/v6/common/real_time_bidding_setting_pb'
require 'google/ads/googleads/v6/common/targeting_setting_pb'
require 'google/ads/googleads/v6/enums/ad_serving_optimization_status_pb'
require 'google/ads/googleads/v6/enums/advertising_channel_sub_type_pb'
require 'google/ads/googleads/v6/enums/advertising_channel_type_pb'
require 'google/ads/googleads/v6/enums/app_campaign_app_store_pb'
require 'google/ads/googleads/v6/enums/app_campaign_bidding_strategy_goal_type_pb'
require 'google/ads/googleads/v6/enums/bidding_strategy_type_pb'
require 'google/ads/googleads/v6/enums/brand_safety_suitability_pb'
require 'google/ads/googleads/v6/enums/campaign_experiment_type_pb'
require 'google/ads/googleads/v6/enums/campaign_serving_status_pb'
require 'google/ads/googleads/v6/enums/campaign_status_pb'
require 'google/ads/googleads/v6/enums/location_source_type_pb'
require 'google/ads/googleads/v6/enums/negative_geo_target_type_pb'
require 'google/ads/googleads/v6/enums/optimization_goal_type_pb'
require 'google/ads/googleads/v6/enums/payment_mode_pb'
require 'google/ads/googleads/v6/enums/positive_geo_target_type_pb'
require 'google/ads/googleads/v6/enums/vanity_pharma_display_url_mode_pb'
require 'google/ads/googleads/v6/enums/vanity_pharma_text_pb'
require 'google/api/field_behavior_pb'
require 'google/api/resource_pb'
require 'google/api/annotations_pb'
Google::Protobuf::DescriptorPool.generated_pool.build do
  add_file("google/ads/googleads/v6/resources/campaign.proto", :syntax => :proto3) do
    add_message "google.ads.googleads.v6.resources.Campaign" do
      optional :resource_name, :string, 1
      proto3_optional :id, :int64, 59
      proto3_optional :name, :string, 58
      optional :status, :enum, 5, "google.ads.googleads.v6.enums.CampaignStatusEnum.CampaignStatus"
      optional :serving_status, :enum, 21, "google.ads.googleads.v6.enums.CampaignServingStatusEnum.CampaignServingStatus"
      optional :ad_serving_optimization_status, :enum, 8, "google.ads.googleads.v6.enums.AdServingOptimizationStatusEnum.AdServingOptimizationStatus"
      optional :advertising_channel_type, :enum, 9, "google.ads.googleads.v6.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType"
      optional :advertising_channel_sub_type, :enum, 10, "google.ads.googleads.v6.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType"
      proto3_optional :tracking_url_template, :string, 60
      repeated :url_custom_parameters, :message, 12, "google.ads.googleads.v6.common.CustomParameter"
      optional :real_time_bidding_setting, :message, 39, "google.ads.googleads.v6.common.RealTimeBiddingSetting"
      optional :network_settings, :message, 14, "google.ads.googleads.v6.resources.Campaign.NetworkSettings"
      optional :hotel_setting, :message, 32, "google.ads.googleads.v6.resources.Campaign.HotelSettingInfo"
      optional :dynamic_search_ads_setting, :message, 33, "google.ads.googleads.v6.resources.Campaign.DynamicSearchAdsSetting"
      optional :shopping_setting, :message, 36, "google.ads.googleads.v6.resources.Campaign.ShoppingSetting"
      optional :targeting_setting, :message, 43, "google.ads.googleads.v6.common.TargetingSetting"
      optional :geo_target_type_setting, :message, 47, "google.ads.googleads.v6.resources.Campaign.GeoTargetTypeSetting"
      optional :local_campaign_setting, :message, 50, "google.ads.googleads.v6.resources.Campaign.LocalCampaignSetting"
      optional :app_campaign_setting, :message, 51, "google.ads.googleads.v6.resources.Campaign.AppCampaignSetting"
      repeated :labels, :string, 61
      optional :experiment_type, :enum, 17, "google.ads.googleads.v6.enums.CampaignExperimentTypeEnum.CampaignExperimentType"
      proto3_optional :base_campaign, :string, 56
      proto3_optional :campaign_budget, :string, 62
      optional :bidding_strategy_type, :enum, 22, "google.ads.googleads.v6.enums.BiddingStrategyTypeEnum.BiddingStrategyType"
      proto3_optional :start_date, :string, 63
      proto3_optional :end_date, :string, 64
      proto3_optional :final_url_suffix, :string, 65
      repeated :frequency_caps, :message, 40, "google.ads.googleads.v6.common.FrequencyCapEntry"
      optional :video_brand_safety_suitability, :enum, 42, "google.ads.googleads.v6.enums.BrandSafetySuitabilityEnum.BrandSafetySuitability"
      optional :vanity_pharma, :message, 44, "google.ads.googleads.v6.resources.Campaign.VanityPharma"
      optional :selective_optimization, :message, 45, "google.ads.googleads.v6.resources.Campaign.SelectiveOptimization"
      optional :optimization_goal_setting, :message, 54, "google.ads.googleads.v6.resources.Campaign.OptimizationGoalSetting"
      optional :tracking_setting, :message, 46, "google.ads.googleads.v6.resources.Campaign.TrackingSetting"
      optional :payment_mode, :enum, 52, "google.ads.googleads.v6.enums.PaymentModeEnum.PaymentMode"
      proto3_optional :optimization_score, :double, 66
      oneof :campaign_bidding_strategy do
        optional :bidding_strategy, :string, 67
        optional :commission, :message, 49, "google.ads.googleads.v6.common.Commission"
        optional :manual_cpc, :message, 24, "google.ads.googleads.v6.common.ManualCpc"
        optional :manual_cpm, :message, 25, "google.ads.googleads.v6.common.ManualCpm"
        optional :manual_cpv, :message, 37, "google.ads.googleads.v6.common.ManualCpv"
        optional :maximize_conversions, :message, 30, "google.ads.googleads.v6.common.MaximizeConversions"
        optional :maximize_conversion_value, :message, 31, "google.ads.googleads.v6.common.MaximizeConversionValue"
        optional :target_cpa, :message, 26, "google.ads.googleads.v6.common.TargetCpa"
        optional :target_impression_share, :message, 48, "google.ads.googleads.v6.common.TargetImpressionShare"
        optional :target_roas, :message, 29, "google.ads.googleads.v6.common.TargetRoas"
        optional :target_spend, :message, 27, "google.ads.googleads.v6.common.TargetSpend"
        optional :percent_cpc, :message, 34, "google.ads.googleads.v6.common.PercentCpc"
        optional :target_cpm, :message, 41, "google.ads.googleads.v6.common.TargetCpm"
      end
    end
    add_message "google.ads.googleads.v6.resources.Campaign.NetworkSettings" do
      proto3_optional :target_google_search, :bool, 5
      proto3_optional :target_search_network, :bool, 6
      proto3_optional :target_content_network, :bool, 7
      proto3_optional :target_partner_search_network, :bool, 8
    end
    add_message "google.ads.googleads.v6.resources.Campaign.HotelSettingInfo" do
      proto3_optional :hotel_center_id, :int64, 2
    end
    add_message "google.ads.googleads.v6.resources.Campaign.DynamicSearchAdsSetting" do
      optional :domain_name, :string, 6
      optional :language_code, :string, 7
      proto3_optional :use_supplied_urls_only, :bool, 8
      repeated :feeds, :string, 9
    end
    add_message "google.ads.googleads.v6.resources.Campaign.LocalCampaignSetting" do
      optional :location_source_type, :enum, 1, "google.ads.googleads.v6.enums.LocationSourceTypeEnum.LocationSourceType"
    end
    add_message "google.ads.googleads.v6.resources.Campaign.SelectiveOptimization" do
      repeated :conversion_actions, :string, 2
    end
    add_message "google.ads.googleads.v6.resources.Campaign.ShoppingSetting" do
      proto3_optional :merchant_id, :int64, 5
      proto3_optional :sales_country, :string, 6
      proto3_optional :campaign_priority, :int32, 7
      proto3_optional :enable_local, :bool, 8
    end
    add_message "google.ads.googleads.v6.resources.Campaign.AppCampaignSetting" do
      optional :bidding_strategy_goal_type, :enum, 1, "google.ads.googleads.v6.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType"
      proto3_optional :app_id, :string, 4
      optional :app_store, :enum, 3, "google.ads.googleads.v6.enums.AppCampaignAppStoreEnum.AppCampaignAppStore"
    end
    add_message "google.ads.googleads.v6.resources.Campaign.TrackingSetting" do
      proto3_optional :tracking_url, :string, 2
    end
    add_message "google.ads.googleads.v6.resources.Campaign.OptimizationGoalSetting" do
      repeated :optimization_goal_types, :enum, 1, "google.ads.googleads.v6.enums.OptimizationGoalTypeEnum.OptimizationGoalType"
    end
    add_message "google.ads.googleads.v6.resources.Campaign.GeoTargetTypeSetting" do
      optional :positive_geo_target_type, :enum, 1, "google.ads.googleads.v6.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType"
      optional :negative_geo_target_type, :enum, 2, "google.ads.googleads.v6.enums.NegativeGeoTargetTypeEnum.NegativeGeoTargetType"
    end
    add_message "google.ads.googleads.v6.resources.Campaign.VanityPharma" do
      optional :vanity_pharma_display_url_mode, :enum, 1, "google.ads.googleads.v6.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode"
      optional :vanity_pharma_text, :enum, 2, "google.ads.googleads.v6.enums.VanityPharmaTextEnum.VanityPharmaText"
    end
  end
end

module Google
  module Ads
    module GoogleAds
      module V6
        module Resources
          Campaign = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign").msgclass
          Campaign::NetworkSettings = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.NetworkSettings").msgclass
          Campaign::HotelSettingInfo = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.HotelSettingInfo").msgclass
          Campaign::DynamicSearchAdsSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.DynamicSearchAdsSetting").msgclass
          Campaign::LocalCampaignSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.LocalCampaignSetting").msgclass
          Campaign::SelectiveOptimization = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.SelectiveOptimization").msgclass
          Campaign::ShoppingSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.ShoppingSetting").msgclass
          Campaign::AppCampaignSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.AppCampaignSetting").msgclass
          Campaign::TrackingSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.TrackingSetting").msgclass
          Campaign::OptimizationGoalSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.OptimizationGoalSetting").msgclass
          Campaign::GeoTargetTypeSetting = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.GeoTargetTypeSetting").msgclass
          Campaign::VanityPharma = ::Google::Protobuf::DescriptorPool.generated_pool.lookup("google.ads.googleads.v6.resources.Campaign.VanityPharma").msgclass
        end
      end
    end
  end
end
