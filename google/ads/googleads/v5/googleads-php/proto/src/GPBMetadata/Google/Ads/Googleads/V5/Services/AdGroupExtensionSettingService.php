<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/ad_group_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V5\Services;

class AdGroupExtensionSettingService
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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v5/enums/extension_setting_device.protogoogle.ads.googleads.v5.enums"m
ExtensionSettingDeviceEnum"O
ExtensionSettingDevice
UNSPECIFIED 
UNKNOWN

MOBILE
DESKTOPB�
!com.google.ads.googleads.v5.enumsBExtensionSettingDeviceProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�
2google/ads/googleads/v5/enums/extension_type.protogoogle.ads.googleads.v5.enums"�
ExtensionTypeEnum"�
ExtensionType
UNSPECIFIED 
UNKNOWN
NONE
APP
CALL
CALLOUT
MESSAGE	
PRICE
	PROMOTION
SITELINK

STRUCTURED_SNIPPET
LOCATION
AFFILIATE_LOCATION
HOTEL_CALLOUTB�
!com.google.ads.googleads.v5.enumsBExtensionTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v5/enums;enums�GAA�Google.Ads.GoogleAds.V5.Enums�Google\\Ads\\GoogleAds\\V5\\Enums�!Google::Ads::GoogleAds::V5::Enumsbproto3
�	
Bgoogle/ads/googleads/v5/resources/ad_group_extension_setting.proto!google.ads.googleads.v5.resources2google/ads/googleads/v5/enums/extension_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
AdGroupExtensionSettingO
resource_name (	B8�A�A2
0googleads.googleapis.com/AdGroupExtensionSetting[
extension_type (2>.google.ads.googleads.v5.enums.ExtensionTypeEnum.ExtensionTypeB�AX
ad_group (2.google.protobuf.StringValueB(�A�A"
 googleads.googleapis.com/AdGroupk
extension_feed_items (2.google.protobuf.StringValueB/�A,
*googleads.googleapis.com/ExtensionFeedItem`
device (2P.google.ads.googleads.v5.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice:��A~
0googleads.googleapis.com/AdGroupExtensionSettingJcustomers/{customer}/adGroupExtensionSettings/{ad_group_extension_setting}B�
%com.google.ads.googleads.v5.resourcesBAdGroupExtensionSettingProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v5/resources;resources�GAA�!Google.Ads.GoogleAds.V5.Resources�!Google\\Ads\\GoogleAds\\V5\\Resources�%Google::Ads::GoogleAds::V5::Resourcesbproto3
�
Igoogle/ads/googleads/v5/services/ad_group_extension_setting_service.proto google.ads.googleads.v5.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"t
!GetAdGroupExtensionSettingRequestO
resource_name (	B8�A�A2
0googleads.googleapis.com/AdGroupExtensionSetting"�
%MutateAdGroupExtensionSettingsRequest
customer_id (	B�A[

operations (2B.google.ads.googleads.v5.services.AdGroupExtensionSettingOperationB�A
partial_failure (
validate_only ("�
 AdGroupExtensionSettingOperation/
update_mask (2.google.protobuf.FieldMaskL
create (2:.google.ads.googleads.v5.resources.AdGroupExtensionSettingH L
update (2:.google.ads.googleads.v5.resources.AdGroupExtensionSettingH 
remove (	H B
	operation"�
&MutateAdGroupExtensionSettingsResponse1
partial_failure_error (2.google.rpc.StatusV
results (2E.google.ads.googleads.v5.services.MutateAdGroupExtensionSettingResult"<
#MutateAdGroupExtensionSettingResult
resource_name (	2�
AdGroupExtensionSettingService�
GetAdGroupExtensionSettingC.google.ads.googleads.v5.services.GetAdGroupExtensionSettingRequest:.google.ads.googleads.v5.resources.AdGroupExtensionSetting"R���<:/v5/{resource_name=customers/*/adGroupExtensionSettings/*}�Aresource_name�
MutateAdGroupExtensionSettingsG.google.ads.googleads.v5.services.MutateAdGroupExtensionSettingsRequestH.google.ads.googleads.v5.services.MutateAdGroupExtensionSettingsResponse"a���B"=/v5/customers/{customer_id=*}/adGroupExtensionSettings:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v5.servicesB#AdGroupExtensionSettingServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v5/services;services�GAA� Google.Ads.GoogleAds.V5.Services� Google\\Ads\\GoogleAds\\V5\\Services�$Google::Ads::GoogleAds::V5::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

