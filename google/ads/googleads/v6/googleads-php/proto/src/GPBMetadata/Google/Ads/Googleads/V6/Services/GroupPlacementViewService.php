<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/group_placement_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class GroupPlacementViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v6/enums/placement_type.protogoogle.ads.googleads.v6.enums"�
PlacementTypeEnum"�
PlacementType
UNSPECIFIED 
UNKNOWN
WEBSITE
MOBILE_APP_CATEGORY
MOBILE_APPLICATION
YOUTUBE_VIDEO
YOUTUBE_CHANNELB�
!com.google.ads.googleads.v6.enumsBPlacementTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
<google/ads/googleads/v6/resources/group_placement_view.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
GroupPlacementViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/GroupPlacementView
	placement (	B�AH �
display_name (	B�AH�

target_url (	B�AH�[
placement_type (2>.google.ads.googleads.v6.enums.PlacementTypeEnum.PlacementTypeB�A:~�A{
+googleads.googleapis.com/GroupPlacementViewLcustomers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}B

_placementB
_display_nameB
_target_urlB�
%com.google.ads.googleads.v6.resourcesBGroupPlacementViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
Cgoogle/ads/googleads/v6/services/group_placement_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"j
GetGroupPlacementViewRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/GroupPlacementView2�
GroupPlacementViewService�
GetGroupPlacementView>.google.ads.googleads.v6.services.GetGroupPlacementViewRequest5.google.ads.googleads.v6.resources.GroupPlacementView"M���75/v6/{resource_name=customers/*/groupPlacementViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBGroupPlacementViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

