<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/keyword_plan_ad_group_keyword_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class KeywordPlanAdGroupKeywordService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v5/enums/keyword_match_type.protogoogle.ads.googleads.v5.enums"j
KeywordMatchTypeEnum"R
KeywordMatchType
UNSPECIFIED 
UNKNOWN	
EXACT

PHRASE	
BROADB�
!com.google.ads.googleads.v5.enumsBKeywordMatchTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�	
Egoogle/ads/googleads/v5/resources/keyword_plan_ad_group_keyword.proto!google.ads.googleads.v5.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
KeywordPlanAdGroupKeywordQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordm
keyword_plan_ad_group (2.google.protobuf.StringValueB0�A-
+googleads.googleapis.com/KeywordPlanAdGroup,
id (2.google.protobuf.Int64ValueB�A*
text (2.google.protobuf.StringValueX

match_type (2D.google.ads.googleads.v5.enums.KeywordMatchTypeEnum.KeywordMatchType3
cpc_bid_micros (2.google.protobuf.Int64Value1
negative (2.google.protobuf.BoolValueB�A:��A�
2googleads.googleapis.com/KeywordPlanAdGroupKeywordOcustomers/{customer}/keywordPlanAdGroupKeywords/{keyword_plan_ad_group_keyword}B�
%com.google.ads.googleads.v5.resourcesBKeywordPlanAdGroupKeywordProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Lgoogle/ads/googleads/v5/services/keyword_plan_ad_group_keyword_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"x
#GetKeywordPlanAdGroupKeywordRequestQ
resource_name (	B:�A�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeyword"�
\'MutateKeywordPlanAdGroupKeywordsRequest
customer_id (	B�A]

operations (2D.google.ads.googleads.v5.services.KeywordPlanAdGroupKeywordOperationB�A
partial_failure (
validate_only ("�
"KeywordPlanAdGroupKeywordOperation/
update_mask (2.google.protobuf.FieldMaskN
create (2<.google.ads.googleads.v5.resources.KeywordPlanAdGroupKeywordH N
update (2<.google.ads.googleads.v5.resources.KeywordPlanAdGroupKeywordH I
remove (	B7�A4
2googleads.googleapis.com/KeywordPlanAdGroupKeywordH B
	operation"�
(MutateKeywordPlanAdGroupKeywordsResponse1
partial_failure_error (2.google.rpc.StatusX
results (2G.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupKeywordResult">
%MutateKeywordPlanAdGroupKeywordResult
resource_name (	2�
 KeywordPlanAdGroupKeywordService�
GetKeywordPlanAdGroupKeywordE.google.ads.googleads.v5.services.GetKeywordPlanAdGroupKeywordRequest<.google.ads.googleads.v5.resources.KeywordPlanAdGroupKeyword"T���></v5/{resource_name=customers/*/keywordPlanAdGroupKeywords/*}�Aresource_name�
 MutateKeywordPlanAdGroupKeywordsI.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupKeywordsRequestJ.google.ads.googleads.v5.services.MutateKeywordPlanAdGroupKeywordsResponse"c���D"?/v5/customers/{customer_id=*}/keywordPlanAdGroupKeywords:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesB%KeywordPlanAdGroupKeywordServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

