<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/language_constant.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Resources;

class LanguageConstant
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
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v3/resources/language_constant.proto!google.ads.googleads.v3.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
LanguageConstantH
resource_name (	B1�A�A+
)googleads.googleapis.com/LanguageConstant,
id (2.google.protobuf.Int64ValueB�A/
code (2.google.protobuf.StringValueB�A/
name (2.google.protobuf.StringValueB�A3

targetable (2.google.protobuf.BoolValueB�A:U�AR
)googleads.googleapis.com/LanguageConstant%languageConstants/{language_constant}B�
%com.google.ads.googleads.v3.resourcesBLanguageConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v3/resources;resources�GAA�!Google.Ads.GoogleAds.V3.Resources�!Google\\Ads\\GoogleAds\\V3\\Resources�%Google::Ads::GoogleAds::V3::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

