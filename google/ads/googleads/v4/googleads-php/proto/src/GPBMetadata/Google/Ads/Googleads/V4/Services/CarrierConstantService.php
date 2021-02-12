<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/carrier_constant_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Services;

class CarrierConstantService
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
8google/ads/googleads/v4/resources/carrier_constant.proto!google.ads.googleads.v4.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
CarrierConstantG
resource_name (	B0�A�A*
(googleads.googleapis.com/CarrierConstant,
id (2.google.protobuf.Int64ValueB�A/
name (2.google.protobuf.StringValueB�A7
country_code (2.google.protobuf.StringValueB�A:R�AO
(googleads.googleapis.com/CarrierConstant#carrierConstants/{carrier_constant}B�
%com.google.ads.googleads.v4.resourcesBCarrierConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3
�
?google/ads/googleads/v4/services/carrier_constant_service.proto google.ads.googleads.v4.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"d
GetCarrierConstantRequestG
resource_name (	B0�A�A*
(googleads.googleapis.com/CarrierConstant2�
CarrierConstantService�
GetCarrierConstant;.google.ads.googleads.v4.services.GetCarrierConstantRequest2.google.ads.googleads.v4.resources.CarrierConstant">���(&/v4/{resource_name=carrierConstants/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v4.servicesBCarrierConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v4/services;services�GAA� Google.Ads.GoogleAds.V4.Services� Google\\Ads\\GoogleAds\\V4\\Services�$Google::Ads::GoogleAds::V4::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

