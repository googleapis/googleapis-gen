<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/geo_target_constant_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class GeoTargetConstantService
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
�
>google/ads/googleads/v5/enums/geo_target_constant_status.protogoogle.ads.googleads.v5.enums"x
GeoTargetConstantStatusEnum"Y
GeoTargetConstantStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVAL_PLANNEDB�
!com.google.ads.googleads.v5.enumsBGeoTargetConstantStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
;google/ads/googleads/v5/resources/geo_target_constant.proto!google.ads.googleads.v5.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
GeoTargetConstantI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant
id
 (B�AH �
name (	B�AH�
country_code (	B�AH�
target_type (	B�AH�g
status (2R.google.ads.googleads.v5.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatusB�A 
canonical_name (	B�AH�R
parent_geo_target	 (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstantH�:Y�AV
*googleads.googleapis.com/GeoTargetConstant(geoTargetConstants/{geo_target_constant}B
_idB
_nameB
_country_codeB
_target_typeB
_canonical_nameB
_parent_geo_targetB�
%com.google.ads.googleads.v5.resourcesBGeoTargetConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Bgoogle/ads/googleads/v5/services/geo_target_constant_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"h
GetGeoTargetConstantRequestI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant"�
 SuggestGeoTargetConstantsRequest
locale (	H�
country_code (	H�j
location_names (2P.google.ads.googleads.v5.services.SuggestGeoTargetConstantsRequest.LocationNamesH d
geo_targets (2M.google.ads.googleads.v5.services.SuggestGeoTargetConstantsRequest.GeoTargetsH 
LocationNames
names (	*

GeoTargets
geo_target_constants (	B
queryB	
_localeB
_country_code"�
!SuggestGeoTargetConstantsResponsef
geo_target_constant_suggestions (2=.google.ads.googleads.v5.services.GeoTargetConstantSuggestion"�
GeoTargetConstantSuggestion
locale (	H �
reach (H�
search_term (	H�Q
geo_target_constant (24.google.ads.googleads.v5.resources.GeoTargetConstantY
geo_target_constant_parents (24.google.ads.googleads.v5.resources.GeoTargetConstantB	
_localeB
_reachB
_search_term2�
GeoTargetConstantService�
GetGeoTargetConstant=.google.ads.googleads.v5.services.GetGeoTargetConstantRequest4.google.ads.googleads.v5.resources.GeoTargetConstant"@���*(/v5/{resource_name=geoTargetConstants/*}�Aresource_name�
SuggestGeoTargetConstantsB.google.ads.googleads.v5.services.SuggestGeoTargetConstantsRequestC.google.ads.googleads.v5.services.SuggestGeoTargetConstantsResponse")���#"/v5/geoTargetConstants:suggest:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesBGeoTargetConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

