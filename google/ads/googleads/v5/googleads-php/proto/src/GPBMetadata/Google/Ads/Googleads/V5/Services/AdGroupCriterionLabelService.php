<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/ad_group_criterion_label_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class AdGroupCriterionLabelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v5/resources/ad_group_criterion_label.proto!google.ads.googleads.v5.resourcesgoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
AdGroupCriterionLabelM
resource_name (	B6�A�A0
.googleads.googleapis.com/AdGroupCriterionLabelk
ad_group_criterion (2.google.protobuf.StringValueB1�A�A+
)googleads.googleapis.com/AdGroupCriterionS
label (2.google.protobuf.StringValueB&�A�A 
googleads.googleapis.com/Label:{�Ax
.googleads.googleapis.com/AdGroupCriterionLabelFcustomers/{customer}/adGroupCriterionLabels/{ad_group_criterion_label}B�
%com.google.ads.googleads.v5.resourcesBAdGroupCriterionLabelProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Ggoogle/ads/googleads/v5/services/ad_group_criterion_label_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"p
GetAdGroupCriterionLabelRequestM
resource_name (	B6�A�A0
.googleads.googleapis.com/AdGroupCriterionLabel"�
#MutateAdGroupCriterionLabelsRequest
customer_id (	B�AY

operations (2@.google.ads.googleads.v5.services.AdGroupCriterionLabelOperationB�A
partial_failure (
validate_only ("�
AdGroupCriterionLabelOperationJ
create (28.google.ads.googleads.v5.resources.AdGroupCriterionLabelH 
remove (	H B
	operation"�
$MutateAdGroupCriterionLabelsResponse1
partial_failure_error (2.google.rpc.StatusT
results (2C.google.ads.googleads.v5.services.MutateAdGroupCriterionLabelResult":
!MutateAdGroupCriterionLabelResult
resource_name (	2�
AdGroupCriterionLabelService�
GetAdGroupCriterionLabelA.google.ads.googleads.v5.services.GetAdGroupCriterionLabelRequest8.google.ads.googleads.v5.resources.AdGroupCriterionLabel"P���:8/v5/{resource_name=customers/*/adGroupCriterionLabels/*}�Aresource_name�
MutateAdGroupCriterionLabelsE.google.ads.googleads.v5.services.MutateAdGroupCriterionLabelsRequestF.google.ads.googleads.v5.services.MutateAdGroupCriterionLabelsResponse"_���@";/v5/customers/{customer_id=*}/adGroupCriterionLabels:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesB!AdGroupCriterionLabelServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

