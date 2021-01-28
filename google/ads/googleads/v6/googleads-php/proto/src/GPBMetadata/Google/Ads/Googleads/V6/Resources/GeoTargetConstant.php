<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/geo_target_constant.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Resources;

class GeoTargetConstant
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
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v6/enums/geo_target_constant_status.protogoogle.ads.googleads.v6.enums"x
GeoTargetConstantStatusEnum"Y
GeoTargetConstantStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVAL_PLANNEDB�
!com.google.ads.googleads.v6.enumsBGeoTargetConstantStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
;google/ads/googleads/v6/resources/geo_target_constant.proto!google.ads.googleads.v6.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
GeoTargetConstantI
resource_name (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstant
id
 (B�AH �
name (	B�AH�
country_code (	B�AH�
target_type (	B�AH�g
status (2R.google.ads.googleads.v6.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatusB�A 
canonical_name (	B�AH�R
parent_geo_target	 (	B2�A�A,
*googleads.googleapis.com/GeoTargetConstantH�:R�AO
*googleads.googleapis.com/GeoTargetConstant!geoTargetConstants/{criterion_id}B
_idB
_nameB
_country_codeB
_target_typeB
_canonical_nameB
_parent_geo_targetB�
%com.google.ads.googleads.v6.resourcesBGeoTargetConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

