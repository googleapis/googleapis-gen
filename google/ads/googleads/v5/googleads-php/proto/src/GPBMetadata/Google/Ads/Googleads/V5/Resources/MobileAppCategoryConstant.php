<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/mobile_app_category_constant.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Resources;

class MobileAppCategoryConstant
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
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v5/resources/mobile_app_category_constant.proto!google.ads.googleads.v5.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
MobileAppCategoryConstantQ
resource_name (	B:�A�A4
2googleads.googleapis.com/MobileAppCategoryConstant
id (B�AH �
name (	B�AH�:r�Ao
2googleads.googleapis.com/MobileAppCategoryConstant9mobileAppCategoryConstants/{mobile_app_category_constant}B
_idB
_nameB�
%com.google.ads.googleads.v5.resourcesBMobileAppCategoryConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

