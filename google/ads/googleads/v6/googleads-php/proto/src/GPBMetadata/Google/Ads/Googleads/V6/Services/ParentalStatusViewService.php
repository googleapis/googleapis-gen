<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/parental_status_view_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class ParentalStatusViewService
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
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v6/resources/parental_status_view.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
ParentalStatusViewJ
resource_name (	B3�A�A-
+googleads.googleapis.com/ParentalStatusView:z�Aw
+googleads.googleapis.com/ParentalStatusViewHcustomers/{customer_id}/parentalStatusViews/{ad_group_id}~{criterion_id}B�
%com.google.ads.googleads.v6.resourcesBParentalStatusViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
Cgoogle/ads/googleads/v6/services/parental_status_view_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"j
GetParentalStatusViewRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/ParentalStatusView2�
ParentalStatusViewService�
GetParentalStatusView>.google.ads.googleads.v6.services.GetParentalStatusViewRequest5.google.ads.googleads.v6.resources.ParentalStatusView"M���75/v6/{resource_name=customers/*/parentalStatusViews/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBParentalStatusViewServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

