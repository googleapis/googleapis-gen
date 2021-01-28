<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/geographic_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class GeographicViewService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v6/enums/geo_targeting_type.protogoogle.ads.googleads.v6.enums"x
GeoTargetingTypeEnum"`
GeoTargetingType
UNSPECIFIED 
UNKNOWN
AREA_OF_INTEREST
LOCATION_OF_PRESENCEB�
!com.google.ads.googleads.v6.enumsBGeoTargetingTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
7google/ads/googleads/v6/resources/geographic_view.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
GeographicViewF
resource_name (	B/�A�A)
\'googleads.googleapis.com/GeographicView`
location_type (2D.google.ads.googleads.v6.enums.GeoTargetingTypeEnum.GeoTargetingTypeB�A&
country_criterion_id (B�AH �:|�Ay
\'googleads.googleapis.com/GeographicViewNcustomers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}B
_country_criterion_idB�
%com.google.ads.googleads.v6.resourcesBGeographicViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
>google/ads/googleads/v6/services/geographic_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"b
GetGeographicViewRequestF
resource_name (	B/�A�A)
\'googleads.googleapis.com/GeographicView2�
GeographicViewService�
GetGeographicView:.google.ads.googleads.v6.services.GetGeographicViewRequest1.google.ads.googleads.v6.resources.GeographicView"I���31/v6/{resource_name=customers/*/geographicViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBGeographicViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

