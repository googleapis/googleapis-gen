<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/ad_parameter_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class AdParameterService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v5/resources/ad_parameter.proto!google.ads.googleads.v5.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
AdParameterC
resource_name (	B,�A�A&
$googleads.googleapis.com/AdParameterR
ad_group_criterion (	B1�A�A+
)googleads.googleapis.com/AdGroupCriterionH �!
parameter_index (B�AH�
insertion_text (	H�:[�AX
$googleads.googleapis.com/AdParameter0customers/{customer}/adParameters/{ad_parameter}B
_ad_group_criterionB
_parameter_indexB
_insertion_textB�
%com.google.ads.googleads.v5.resourcesBAdParameterProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
;google/ads/googleads/v5/services/ad_parameter_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"\\
GetAdParameterRequestC
resource_name (	B,�A�A&
$googleads.googleapis.com/AdParameter"�
MutateAdParametersRequest
customer_id (	B�AO

operations (26.google.ads.googleads.v5.services.AdParameterOperationB�A
partial_failure (
validate_only ("�
AdParameterOperation/
update_mask (2.google.protobuf.FieldMask@
create (2..google.ads.googleads.v5.resources.AdParameterH @
update (2..google.ads.googleads.v5.resources.AdParameterH 
remove (	H B
	operation"�
MutateAdParametersResponse1
partial_failure_error (2.google.rpc.StatusJ
results (29.google.ads.googleads.v5.services.MutateAdParameterResult"0
MutateAdParameterResult
resource_name (	2�
AdParameterService�
GetAdParameter7.google.ads.googleads.v5.services.GetAdParameterRequest..google.ads.googleads.v5.resources.AdParameter"F���0./v5/{resource_name=customers/*/adParameters/*}�Aresource_name�
MutateAdParameters;.google.ads.googleads.v5.services.MutateAdParametersRequest<.google.ads.googleads.v5.services.MutateAdParametersResponse"U���6"1/v5/customers/{customer_id=*}/adParameters:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesBAdParameterServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

