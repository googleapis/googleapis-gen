<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/location_view.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Resources;

class LocationView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v6/resources/location_view.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
LocationViewD
resource_name (	B-�A�A\'
%googleads.googleapis.com/LocationView:n�Ak
%googleads.googleapis.com/LocationViewBcustomers/{customer_id}/locationViews/{campaign_id}~{criterion_id}B�
%com.google.ads.googleads.v6.resourcesBLocationViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

