<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/video_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class VideoService
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
-google/ads/googleads/v6/resources/video.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
Video=
resource_name (	B&�A�A 
googleads.googleapis.com/Video
id (	B�AH �

channel_id (	B�AH�!
duration_millis (B�AH�
title	 (	B�AH�:N�AK
googleads.googleapis.com/Video)customers/{customer_id}/videos/{video_id}B
_idB
_channel_idB
_duration_millisB
_titleB�
%com.google.ads.googleads.v6.resourcesB
VideoProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
4google/ads/googleads/v6/services/video_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"P
GetVideoRequest=
resource_name (	B&�A�A 
googleads.googleapis.com/Video2�
VideoService�
GetVideo1.google.ads.googleads.v6.services.GetVideoRequest(.google.ads.googleads.v6.resources.Video"@���*(/v6/{resource_name=customers/*/videos/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBVideoServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

