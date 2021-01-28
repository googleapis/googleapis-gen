<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/hotel_group_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class HotelGroupViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v5/resources/hotel_group_view.proto!google.ads.googleads.v5.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
HotelGroupViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/HotelGroupView:e�Ab
\'googleads.googleapis.com/HotelGroupView7customers/{customer}/hotelGroupViews/{hotel_group_view}B�
%com.google.ads.googleads.v5.resourcesBHotelGroupViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
?google/ads/googleads/v5/services/hotel_group_view_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"b
GetHotelGroupViewRequestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/HotelGroupView2�
HotelGroupViewService�
GetHotelGroupView:.google.ads.googleads.v5.services.GetHotelGroupViewRequest1.google.ads.googleads.v5.resources.HotelGroupView"I���31/v5/{resource_name=customers/*/hotelGroupViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesBHotelGroupViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

