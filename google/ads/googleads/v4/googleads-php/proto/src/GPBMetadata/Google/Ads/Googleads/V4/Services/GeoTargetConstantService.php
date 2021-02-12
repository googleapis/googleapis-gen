<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/geo_target_constant_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Services;

class GeoTargetConstantService
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
�
>google/ads/googleads/v4/enums/geo_target_constant_status.protogoogle.ads.googleads.v4.enums"x
GeoTargetConstantStatusEnum"Y
GeoTargetConstantStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVAL_PLANNEDB�
!com.google.ads.googleads.v4.enumsBGeoTargetConstantStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
;google/ads/googleads/v4/resources/geo_target_constant.proto!google.ads.googleads.v4.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
GeoTargetConstantI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant,
id (2.google.protobuf.Int64ValueB�A/
name (2.google.protobuf.StringValueB�A7
country_code (2.google.protobuf.StringValueB�A6
target_type (2.google.protobuf.StringValueB�Ag
status (2R.google.ads.googleads.v4.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatusB�A9
canonical_name (2.google.protobuf.StringValueB�A:Y�AV
*googleads.googleapis.com/GeoTargetConstant(geoTargetConstants/{geo_target_constant}B�
%com.google.ads.googleads.v4.resourcesBGeoTargetConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3
�
Bgoogle/ads/googleads/v4/services/geo_target_constant_service.proto google.ads.googleads.v4.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.proto"h
GetGeoTargetConstantRequestI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant"�
 SuggestGeoTargetConstantsRequest,
locale (2.google.protobuf.StringValue2
country_code (2.google.protobuf.StringValuej
location_names (2P.google.ads.googleads.v4.services.SuggestGeoTargetConstantsRequest.LocationNamesH d
geo_targets (2M.google.ads.googleads.v4.services.SuggestGeoTargetConstantsRequest.GeoTargetsH <
LocationNames+
names (2.google.protobuf.StringValueH

GeoTargets:
geo_target_constants (2.google.protobuf.StringValueB
query"�
!SuggestGeoTargetConstantsResponsef
geo_target_constant_suggestions (2=.google.ads.googleads.v4.services.GeoTargetConstantSuggestion"�
GeoTargetConstantSuggestion,
locale (2.google.protobuf.StringValue*
reach (2.google.protobuf.Int64Value1
search_term (2.google.protobuf.StringValueQ
geo_target_constant (24.google.ads.googleads.v4.resources.GeoTargetConstantY
geo_target_constant_parents (24.google.ads.googleads.v4.resources.GeoTargetConstant2�
GeoTargetConstantService�
GetGeoTargetConstant=.google.ads.googleads.v4.services.GetGeoTargetConstantRequest4.google.ads.googleads.v4.resources.GeoTargetConstant"@���*(/v4/{resource_name=geoTargetConstants/*}�Aresource_name�
SuggestGeoTargetConstantsB.google.ads.googleads.v4.services.SuggestGeoTargetConstantsRequestC.google.ads.googleads.v4.services.SuggestGeoTargetConstantsResponse")���#"/v4/geoTargetConstants:suggest:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v4.servicesBGeoTargetConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v4/services;services�GAA� Google.Ads.GoogleAds.V4.Services� Google\\Ads\\GoogleAds\\V4\\Services�$Google::Ads::GoogleAds::V4::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

