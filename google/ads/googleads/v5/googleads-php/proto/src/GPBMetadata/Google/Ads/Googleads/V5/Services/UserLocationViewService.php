<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/user_location_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class UserLocationViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v5/resources/user_location_view.proto!google.ads.googleads.v5.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
UserLocationViewH
resource_name (	B1�A�A+
)googleads.googleapis.com/UserLocationView>
country_criterion_id (2.google.protobuf.Int64ValueB�A;
targeting_location (2.google.protobuf.BoolValueB�A:k�Ah
)googleads.googleapis.com/UserLocationView;customers/{customer}/userLocationViews/{user_location_view}B�
%com.google.ads.googleads.v5.resourcesBUserLocationViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Agoogle/ads/googleads/v5/services/user_location_view_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"f
GetUserLocationViewRequestH
resource_name (	B1�A�A+
)googleads.googleapis.com/UserLocationView2�
UserLocationViewService�
GetUserLocationView<.google.ads.googleads.v5.services.GetUserLocationViewRequest3.google.ads.googleads.v5.resources.UserLocationView"K���53/v5/{resource_name=customers/*/userLocationViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesBUserLocationViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

