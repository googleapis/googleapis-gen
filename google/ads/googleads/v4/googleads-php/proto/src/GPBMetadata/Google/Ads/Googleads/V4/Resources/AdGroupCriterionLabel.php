<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/ad_group_criterion_label.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Resources;

class AdGroupCriterionLabel
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
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v4/resources/ad_group_criterion_label.proto!google.ads.googleads.v4.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
AdGroupCriterionLabelM
resource_name (	B6�A�A0
.googleads.googleapis.com/AdGroupCriterionLabelk
ad_group_criterion (2.google.protobuf.StringValueB1�A�A+
)googleads.googleapis.com/AdGroupCriterionS
label (2.google.protobuf.StringValueB&�A�A 
googleads.googleapis.com/Label:{�Ax
.googleads.googleapis.com/AdGroupCriterionLabelFcustomers/{customer}/adGroupCriterionLabels/{ad_group_criterion_label}B�
%com.google.ads.googleads.v4.resourcesBAdGroupCriterionLabelProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v4/resources;resources�GAA�!Google.Ads.GoogleAds.V4.Resources�!Google\\Ads\\GoogleAds\\V4\\Resources�%Google::Ads::GoogleAds::V4::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

