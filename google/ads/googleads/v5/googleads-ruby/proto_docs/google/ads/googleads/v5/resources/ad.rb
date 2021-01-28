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
      module V5
        module Resources
          # An ad.
          # @!attribute [rw] resource_name
          #   @return [::String]
          #     Immutable. The resource name of the ad.
          #     Ad resource names have the form:
          #
          #     `customers/{customer_id}/ads/{ad_id}`
          # @!attribute [r] id
          #   @return [::Integer]
          #     Output only. The ID of the ad.
          # @!attribute [rw] final_urls
          #   @return [::Array<::String>]
          #     The list of possible final URLs after all cross-domain redirects for the
          #     ad.
          # @!attribute [rw] final_app_urls
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Common::FinalAppUrl>]
          #     A list of final app URLs that will be used on mobile if the user has the
          #     specific app installed.
          # @!attribute [rw] final_mobile_urls
          #   @return [::Array<::String>]
          #     The list of possible final mobile URLs after all cross-domain redirects
          #     for the ad.
          # @!attribute [rw] tracking_url_template
          #   @return [::String]
          #     The URL template for constructing a tracking URL.
          # @!attribute [rw] final_url_suffix
          #   @return [::String]
          #     The suffix to use when constructing a final URL.
          # @!attribute [rw] url_custom_parameters
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Common::CustomParameter>]
          #     The list of mappings that can be used to substitute custom parameter tags
          #     in a `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
          #     For mutates, please use url custom parameter operations.
          # @!attribute [rw] display_url
          #   @return [::String]
          #     The URL that appears in the ad description for some ad formats.
          # @!attribute [r] type
          #   @return [::Google::Ads::GoogleAds::V5::Enums::AdTypeEnum::AdType]
          #     Output only. The type of ad.
          # @!attribute [r] added_by_google_ads
          #   @return [::Boolean]
          #     Output only. Indicates if this ad was automatically added by Google Ads and not by a
          #     user. For example, this could happen when ads are automatically created as
          #     suggestions for new ads based on knowledge of how existing ads are
          #     performing.
          # @!attribute [rw] device_preference
          #   @return [::Google::Ads::GoogleAds::V5::Enums::DeviceEnum::Device]
          #     The device preference for the ad. You can only specify a preference for
          #     mobile devices. When this preference is set the ad will be preferred over
          #     other ads when being displayed on a mobile device. The ad can still be
          #     displayed on other device types, e.g. if no other ads are available.
          #     If unspecified (no device preference), all devices are targeted.
          #     This is only supported by some ad types.
          # @!attribute [rw] url_collections
          #   @return [::Array<::Google::Ads::GoogleAds::V5::Common::UrlCollection>]
          #     Additional URLs for the ad that are tagged with a unique identifier that
          #     can be referenced from other fields in the ad.
          # @!attribute [rw] name
          #   @return [::String]
          #     Immutable. The name of the ad. This is only used to be able to identify the ad. It
          #     does not need to be unique and does not affect the served ad. The name
          #     field is currently only supported for DisplayUploadAd, ImageAd,
          #     ShoppingComparisonListingAd and VideoAd.
          # @!attribute [r] system_managed_resource_source
          #   @return [::Google::Ads::GoogleAds::V5::Enums::SystemManagedResourceSourceEnum::SystemManagedResourceSource]
          #     Output only. If this ad is system managed, then this field will indicate the source.
          #     This field is read-only.
          # @!attribute [rw] text_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::TextAdInfo]
          #     Immutable. Details pertaining to a text ad.
          # @!attribute [rw] expanded_text_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ExpandedTextAdInfo]
          #     Details pertaining to an expanded text ad.
          # @!attribute [rw] call_only_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::CallOnlyAdInfo]
          #     Details pertaining to a call-only ad.
          # @!attribute [rw] expanded_dynamic_search_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ExpandedDynamicSearchAdInfo]
          #     Immutable. Details pertaining to an Expanded Dynamic Search Ad.
          #     This type of ad has its headline, final URLs, and display URL
          #     auto-generated at serving time according to domain name specific
          #     information provided by `dynamic_search_ads_setting` linked at the
          #     campaign level.
          # @!attribute [rw] hotel_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::HotelAdInfo]
          #     Details pertaining to a hotel ad.
          # @!attribute [rw] shopping_smart_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ShoppingSmartAdInfo]
          #     Details pertaining to a Smart Shopping ad.
          # @!attribute [rw] shopping_product_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ShoppingProductAdInfo]
          #     Details pertaining to a Shopping product ad.
          # @!attribute [rw] gmail_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::GmailAdInfo]
          #     Immutable. Details pertaining to a Gmail ad.
          # @!attribute [rw] image_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ImageAdInfo]
          #     Immutable. Details pertaining to an Image ad.
          # @!attribute [rw] video_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::VideoAdInfo]
          #     Details pertaining to a Video ad.
          # @!attribute [rw] video_responsive_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::VideoResponsiveAdInfo]
          #     Details pertaining to a Video responsive ad.
          # @!attribute [rw] responsive_search_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ResponsiveSearchAdInfo]
          #     Details pertaining to a responsive search ad.
          # @!attribute [rw] legacy_responsive_display_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::LegacyResponsiveDisplayAdInfo]
          #     Details pertaining to a legacy responsive display ad.
          # @!attribute [rw] app_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::AppAdInfo]
          #     Details pertaining to an app ad.
          # @!attribute [rw] legacy_app_install_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::LegacyAppInstallAdInfo]
          #     Immutable. Details pertaining to a legacy app install ad.
          # @!attribute [rw] responsive_display_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ResponsiveDisplayAdInfo]
          #     Details pertaining to a responsive display ad.
          # @!attribute [rw] local_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::LocalAdInfo]
          #     Details pertaining to a local ad.
          # @!attribute [rw] display_upload_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::DisplayUploadAdInfo]
          #     Details pertaining to a display upload ad.
          # @!attribute [rw] app_engagement_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::AppEngagementAdInfo]
          #     Details pertaining to an app engagement ad.
          # @!attribute [rw] shopping_comparison_listing_ad
          #   @return [::Google::Ads::GoogleAds::V5::Common::ShoppingComparisonListingAdInfo]
          #     Details pertaining to a Shopping Comparison Listing ad.
          class Ad
            include ::Google::Protobuf::MessageExts
            extend ::Google::Protobuf::MessageExts::ClassMethods
          end
        end
      end
    end
  end
end
