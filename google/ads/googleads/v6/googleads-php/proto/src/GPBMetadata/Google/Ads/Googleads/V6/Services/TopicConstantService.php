<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/topic_constant_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Services;

class TopicConstantService
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
6google/ads/googleads/v6/resources/topic_constant.proto!google.ads.googleads.v6.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
TopicConstantE
resource_name (	B.�A�A(
&googleads.googleapis.com/TopicConstant
id (B�AH �R
topic_constant_parent (	B.�A�A(
&googleads.googleapis.com/TopicConstantH�
path (	B�A:F�AC
&googleads.googleapis.com/TopicConstanttopicConstants/{topic_id}B
_idB
_topic_constant_parentB�
%com.google.ads.googleads.v6.resourcesBTopicConstantProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3
�
=google/ads/googleads/v6/services/topic_constant_service.proto google.ads.googleads.v6.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"`
GetTopicConstantRequestE
resource_name (	B.�A�A(
&googleads.googleapis.com/TopicConstant2�
TopicConstantService�
GetTopicConstant9.google.ads.googleads.v6.services.GetTopicConstantRequest0.google.ads.googleads.v6.resources.TopicConstant"<���&$/v6/{resource_name=topicConstants/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v6.servicesBTopicConstantServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v6/services;services�GAA� Google.Ads.GoogleAds.V6.Services� Google\\Ads\\GoogleAds\\V6\\Services�$Google::Ads::GoogleAds::V6::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

