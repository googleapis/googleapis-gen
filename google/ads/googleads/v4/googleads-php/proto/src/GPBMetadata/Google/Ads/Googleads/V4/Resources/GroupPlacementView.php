<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/group_placement_view.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class GroupPlacementView
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
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v4/enums/placement_type.protogoogle.ads.googleads.v4.enums"�
PlacementTypeEnum"�
PlacementType
UNSPECIFIED 
UNKNOWN
WEBSITE
MOBILE_APP_CATEGORY
MOBILE_APPLICATION
YOUTUBE_VIDEO
YOUTUBE_CHANNELB�
!com.google.ads.googleads.v4.enumsBPlacementTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
<google/ads/googleads/v4/resources/group_placement_view.proto!google.ads.googleads.v4.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
GroupPlacementViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/GroupPlacementView4
	placement (2.google.protobuf.StringValueB�A7
display_name (2.google.protobuf.StringValueB�A5

target_url (2.google.protobuf.StringValueB�A[
placement_type (2>.google.ads.googleads.v4.enums.PlacementTypeEnum.PlacementTypeB�A:q�An
+googleads.googleapis.com/GroupPlacementView?customers/{customer}/groupPlacementViews/{group_placement_view}B�
%com.google.ads.googleads.v4.resourcesBGroupPlacementViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

