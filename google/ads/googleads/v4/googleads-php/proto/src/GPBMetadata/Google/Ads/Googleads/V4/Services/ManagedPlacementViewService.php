<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/managed_placement_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Services;

class ManagedPlacementViewService
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
�
>google/ads/googleads/v4/resources/managed_placement_view.proto!google.ads.googleads.v4.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
ManagedPlacementViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/ManagedPlacementView:w�At
-googleads.googleapis.com/ManagedPlacementViewCcustomers/{customer}/managedPlacementViews/{managed_placement_view}B�
%com.google.ads.googleads.v4.resourcesBManagedPlacementViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3
�
Egoogle/ads/googleads/v4/services/managed_placement_view_service.proto google.ads.googleads.v4.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"n
GetManagedPlacementViewRequestL
resource_name (	B5�A�A/
-googleads.googleapis.com/ManagedPlacementView2�
ManagedPlacementViewService�
GetManagedPlacementView@.google.ads.googleads.v4.services.GetManagedPlacementViewRequest7.google.ads.googleads.v4.resources.ManagedPlacementView"O���97/v4/{resource_name=customers/*/managedPlacementViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v4.servicesB ManagedPlacementViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v4/services;services�GAA� Google.Ads.GoogleAds.V4.Services� Google\\Ads\\GoogleAds\\V4\\Services�$Google::Ads::GoogleAds::V4::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

