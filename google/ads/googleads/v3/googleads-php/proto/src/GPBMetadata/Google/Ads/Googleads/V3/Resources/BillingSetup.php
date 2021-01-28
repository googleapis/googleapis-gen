<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/billing_setup.proto

namespace GPBMetadata\Google\Ads\Googleads\V3\Resources;

class BillingSetup
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
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v3/enums/billing_setup_status.protogoogle.ads.googleads.v3.enums"�
BillingSetupStatusEnum"o
BillingSetupStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED_HELD
APPROVED
	CANCELLEDB�
!com.google.ads.googleads.v3.enumsBBillingSetupStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
-google/ads/googleads/v3/enums/time_type.protogoogle.ads.googleads.v3.enums"N
TimeTypeEnum">
TimeType
UNSPECIFIED 
UNKNOWN
NOW
FOREVERB�
!com.google.ads.googleads.v3.enumsBTimeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v3/enums;enums�GAA�Google.Ads.GoogleAds.V3.Enums�Google\\Ads\\GoogleAds\\V3\\Enums�!Google::Ads::GoogleAds::V3::Enumsbproto3
�
5google/ads/googleads/v3/resources/billing_setup.proto!google.ads.googleads.v3.resources-google/ads/googleads/v3/enums/time_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�	
BillingSetupD
resource_name (	B-�A�A\'
%googleads.googleapis.com/BillingSetup,
id (2.google.protobuf.Int64ValueB�A]
status (2H.google.ads.googleads.v3.enums.BillingSetupStatusEnum.BillingSetupStatusB�Ah
payments_account (2.google.protobuf.StringValueB0�A�A*
(googleads.googleapis.com/PaymentsAccountg
payments_account_info (2C.google.ads.googleads.v3.resources.BillingSetup.PaymentsAccountInfoB�A<
start_date_time	 (2.google.protobuf.StringValueB�AH T
start_time_type
 (24.google.ads.googleads.v3.enums.TimeTypeEnum.TimeTypeB�AH :
end_date_time (2.google.protobuf.StringValueB�AHR
end_time_type (24.google.ads.googleads.v3.enums.TimeTypeEnum.TimeTypeB�AH�
PaymentsAccountInfo>
payments_account_id (2.google.protobuf.StringValueB�A@
payments_account_name (2.google.protobuf.StringValueB�A>
payments_profile_id (2.google.protobuf.StringValueB�A@
payments_profile_name (2.google.protobuf.StringValueB�AH
secondary_payments_profile_id (2.google.protobuf.StringValueB�A:^�A[
%googleads.googleapis.com/BillingSetup2customers/{customer}/billingSetups/{billing_setup}B

start_timeB

end_timeB�
%com.google.ads.googleads.v3.resourcesBBillingSetupProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v3/resources;resources�GAA�!Google.Ads.GoogleAds.V3.Resources�!Google\\Ads\\GoogleAds\\V3\\Resources�%Google::Ads::GoogleAds::V3::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

