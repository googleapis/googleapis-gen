<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/campaign_draft_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Errors;

class CampaignDraftError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v4/errors/campaign_draft_error.protogoogle.ads.googleads.v4.errors"�
CampaignDraftErrorEnum"�
CampaignDraftError
UNSPECIFIED 
UNKNOWN
DUPLICATE_DRAFT_NAME*
&INVALID_STATUS_TRANSITION_FROM_REMOVED+
\'INVALID_STATUS_TRANSITION_FROM_PROMOTED1
-INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED 
CUSTOMER_CANNOT_CREATE_DRAFT 
CAMPAIGN_CANNOT_CREATE_DRAFT
INVALID_DRAFT_CHANGE
INVALID_STATUS_TRANSITION	-
)MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED
\'
#LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLYB�
"com.google.ads.googleads.v4.errorsBCampaignDraftErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/errors;errors�GAA�Google.Ads.GoogleAds.V4.Errors�Google\\Ads\\GoogleAds\\V4\\Errors�"Google::Ads::GoogleAds::V4::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

