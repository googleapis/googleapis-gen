<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/campaign_experiment.proto

namespace GPBMetadata\Google\Ads\Googleads\V6\Resources;

class CampaignExperiment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v6/enums/campaign_experiment_status.protogoogle.ads.googleads.v6.enums"�
CampaignExperimentStatusEnum"�
CampaignExperimentStatus
UNSPECIFIED 
UNKNOWN
INITIALIZING
INITIALIZATION_FAILED
ENABLED
	GRADUATED
REMOVED
	PROMOTING
PROMOTION_FAILED	
PROMOTED
ENDED_MANUALLY
B�
!com.google.ads.googleads.v6.enumsBCampaignExperimentStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
Jgoogle/ads/googleads/v6/enums/campaign_experiment_traffic_split_type.protogoogle.ads.googleads.v6.enums"�
&CampaignExperimentTrafficSplitTypeEnum"`
"CampaignExperimentTrafficSplitType
UNSPECIFIED 
UNKNOWN
RANDOM_QUERY

COOKIEB�
!com.google.ads.googleads.v6.enumsB\'CampaignExperimentTrafficSplitTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v6/enums;enums�GAA�Google.Ads.GoogleAds.V6.Enums�Google\\Ads\\GoogleAds\\V6\\Enums�!Google::Ads::GoogleAds::V6::Enumsbproto3
�
;google/ads/googleads/v6/resources/campaign_experiment.proto!google.ads.googleads.v6.resourcesJgoogle/ads/googleads/v6/enums/campaign_experiment_traffic_split_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CampaignExperimentJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CampaignExperiment
id (B�AH �K
campaign_draft (	B.�A�A(
&googleads.googleapis.com/CampaignDraftH�
name (	H�
description (	H�\'
traffic_split_percent (B�AH��
traffic_split_type (2h.google.ads.googleads.v6.enums.CampaignExperimentTrafficSplitTypeEnum.CampaignExperimentTrafficSplitTypeB�AK
experiment_campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�i
status	 (2T.google.ads.googleads.v6.enums.CampaignExperimentStatusEnum.CampaignExperimentStatusB�A(
long_running_operation (	B�AH�

start_date (	H�
end_date (	H�:v�As
+googleads.googleapis.com/CampaignExperimentDcustomers/{customer_id}/campaignExperiments/{campaign_experiment_id}B
_idB
_campaign_draftB
_nameB
_descriptionB
_traffic_split_percentB
_experiment_campaignB
_long_running_operationB
_start_dateB
	_end_dateB�
%com.google.ads.googleads.v6.resourcesBCampaignExperimentProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v6/resources;resources�GAA�!Google.Ads.GoogleAds.V6.Resources�!Google\\Ads\\GoogleAds\\V6\\Resources�%Google::Ads::GoogleAds::V6::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

