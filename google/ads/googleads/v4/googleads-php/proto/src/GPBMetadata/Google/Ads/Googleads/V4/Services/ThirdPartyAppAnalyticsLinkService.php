<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/third_party_app_analytics_link_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Services;

class ThirdPartyAppAnalyticsLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Fgoogle/ads/googleads/v4/resources/third_party_app_analytics_link.proto!google.ads.googleads.v4.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
ThirdPartyAppAnalyticsLinkR
resource_name (	B;�A�A5
3googleads.googleapis.com/ThirdPartyAppAnalyticsLink<
shareable_link_id (2.google.protobuf.StringValueB�A:��A�
3googleads.googleapis.com/ThirdPartyAppAnalyticsLinkQcustomers/{customer}/thirdPartyAppAnalyticsLinks/{third_party_app_analytics_link}B�
%com.google.ads.googleads.v4.resourcesBThirdPartyAppAnalyticsLinkProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3
�
Mgoogle/ads/googleads/v4/services/third_party_app_analytics_link_service.proto google.ads.googleads.v4.servicesgoogle/api/annotations.protogoogle/api/resource.protogoogle/api/client.proto"w
$GetThirdPartyAppAnalyticsLinkRequestO
resource_name (	B8�A5
3googleads.googleapis.com/ThirdPartyAppAnalyticsLink2�
!ThirdPartyAppAnalyticsLinkService�
GetThirdPartyAppAnalyticsLinkF.google.ads.googleads.v4.services.GetThirdPartyAppAnalyticsLinkRequest=.google.ads.googleads.v4.resources.ThirdPartyAppAnalyticsLink"E���?=/v4/{resource_name=customers/*/thirdPartyAppAnalyticsLinks/*}E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v4.servicesB&ThirdPartyAppAnalyticsLinkServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v4/services;services�GAA� Google.Ads.GoogleAds.V4.Services� Google\\Ads\\GoogleAds\\V4\\Services�$Google::Ads::GoogleAds::V4::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

