<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/settings/v1beta1/securitycenter_settings_service.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1;

class SecuritycenterSettingsService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1\ComponentSettings::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1\Detector::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1\Settings::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�J
Rgoogle/cloud/securitycenter/settings/v1beta1/securitycenter_settings_service.proto,google.cloud.securitycenter.settings.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protoEgoogle/cloud/securitycenter/settings/v1beta1/component_settings.proto;google/cloud/securitycenter/settings/v1beta1/detector.proto;google/cloud/securitycenter/settings/v1beta1/settings.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"^
GetServiceAccountRequestB
name (	B4�A�A.
,securitycenter.googleapis.com/ServiceAccount"�
ServiceAccount
name (	
service_account (	:^�A[
,securitycenter.googleapis.com/ServiceAccount+organizations/{organization}/serviceAccount"R
GetSettingsRequest<
name (	B.�A�A(
&securitycenter.googleapis.com/Settings"�
UpdateSettingsRequestM
settings (26.google.cloud.securitycenter.settings.v1beta1.SettingsB�A/
update_mask (2.google.protobuf.FieldMask"b
ResetSettingsRequest<
name (	B.�A�A(
&securitycenter.googleapis.com/Settings
etag (	"r
BatchGetSettingsRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization
names (	"d
BatchGetSettingsResponseH
settings (26.google.cloud.securitycenter.settings.v1beta1.Settings"a
!CalculateEffectiveSettingsRequest<
name (	B.�A�A(
&securitycenter.googleapis.com/Settings"�
&BatchCalculateEffectiveSettingsRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organizationa
requests (2O.google.cloud.securitycenter.settings.v1beta1.CalculateEffectiveSettingsRequest"s
\'BatchCalculateEffectiveSettingsResponseH
settings (26.google.cloud.securitycenter.settings.v1beta1.Settings"d
GetComponentSettingsRequestE
name (	B7�A�A1
/securitycenter.googleapis.com/ComponentSettings"�
UpdateComponentSettingsRequest`
component_settings (2?.google.cloud.securitycenter.settings.v1beta1.ComponentSettingsB�A/
update_mask (2.google.protobuf.FieldMask"t
ResetComponentSettingsRequestE
name (	B7�A�A1
/securitycenter.googleapis.com/ComponentSettings
etag (	"s
*CalculateEffectiveComponentSettingsRequestE
name (	B7�A�A1
/securitycenter.googleapis.com/ComponentSettings"�
ListDetectorsRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization
filter (	
	page_size (

page_token (	"{
ListDetectorsResponseI
	detectors (26.google.cloud.securitycenter.settings.v1beta1.Detector
next_page_token (	"�
ListComponentsRequestH
parent (	B8�A�A2
0cloudresourcemanager.googleapis.com/Organization
	page_size (

page_token (	"E
ListComponentsResponse

components (	
next_page_token (	2�3
SecurityCenterSettingsService�
GetServiceAccountF.google.cloud.securitycenter.settings.v1beta1.GetServiceAccountRequest<.google.cloud.securitycenter.settings.v1beta1.ServiceAccount"F���97/settings/v1beta1/{name=organizations/*/serviceAccount}�Aname�
GetSettings@.google.cloud.securitycenter.settings.v1beta1.GetSettingsRequest6.google.cloud.securitycenter.settings.v1beta1.Settings"�����1/settings/v1beta1/{name=organizations/*/settings}Z-+/settings/v1beta1/{name=folders/*/settings}Z.,/settings/v1beta1/{name=projects/*/settings}ZEC/settings/v1beta1/{name=projects/*/locations/*/clusters/*/settings}ZCA/settings/v1beta1/{name=projects/*/regions/*/clusters/*/settings}ZA?/settings/v1beta1/{name=projects/*/zones/*/clusters/*/settings}�Aname�
UpdateSettingsC.google.cloud.securitycenter.settings.v1beta1.UpdateSettingsRequest6.google.cloud.securitycenter.settings.v1beta1.Settings"�����2:/settings/v1beta1/{settings.name=organizations/*/settings}:settingsZ@24/settings/v1beta1/{settings.name=folders/*/settings}:settingsZA25/settings/v1beta1/{settings.name=projects/*/settings}:settingsZX2L/settings/v1beta1/{settings.name=projects/*/locations/*/clusters/*/settings}:settingsZV2J/settings/v1beta1/{settings.name=projects/*/regions/*/clusters/*/settings}:settingsZT2H/settings/v1beta1/{settings.name=projects/*/zones/*/clusters/*/settings}:settings�Asettings,update_mask�
ResetSettingsB.google.cloud.securitycenter.settings.v1beta1.ResetSettingsRequest.google.protobuf.Empty"�����"7/settings/v1beta1/{name=organizations/*/settings}:reset:*Z6"1/settings/v1beta1/{name=folders/*/settings}:reset:*Z7"2/settings/v1beta1/{name=projects/*/settings}:reset:*ZN"I/settings/v1beta1/{name=projects/*/locations/*/clusters/*/settings}:reset:*ZL"G/settings/v1beta1/{name=projects/*/regions/*/clusters/*/settings}:reset:*ZJ"E/settings/v1beta1/{name=projects/*/zones/*/clusters/*/settings}:reset:*�
BatchGetSettingsE.google.cloud.securitycenter.settings.v1beta1.BatchGetSettingsRequestF.google.cloud.securitycenter.settings.v1beta1.BatchGetSettingsResponse"D���></settings/v1beta1/{parent=organizations/*}/settings:batchGet�
CalculateEffectiveSettingsO.google.cloud.securitycenter.settings.v1beta1.CalculateEffectiveSettingsRequest6.google.cloud.securitycenter.settings.v1beta1.Settings"�����D/settings/v1beta1/{name=organizations/*/effectiveSettings}:calculateZ@>/settings/v1beta1/{name=folders/*/effectiveSettings}:calculateZA?/settings/v1beta1/{name=projects/*/effectiveSettings}:calculateZXV/settings/v1beta1/{name=projects/*/locations/*/clusters/*/effectiveSettings}:calculateZVT/settings/v1beta1/{name=projects/*/regions/*/clusters/*/effectiveSettings}:calculateZTR/settings/v1beta1/{name=projects/*/zones/*/clusters/*/effectiveSettings}:calculate�Aname�
BatchCalculateEffectiveSettingsT.google.cloud.securitycenter.settings.v1beta1.BatchCalculateEffectiveSettingsRequestU.google.cloud.securitycenter.settings.v1beta1.BatchCalculateEffectiveSettingsResponse"V���P"K/settings/v1beta1/{parent=organizations/*}/effectiveSettings:batchCalculate:*�
GetComponentSettingsI.google.cloud.securitycenter.settings.v1beta1.GetComponentSettingsRequest?.google.cloud.securitycenter.settings.v1beta1.ComponentSettings"�����>/settings/v1beta1/{name=organizations/*/components/*/settings}Z:8/settings/v1beta1/{name=folders/*/components/*/settings}Z;9/settings/v1beta1/{name=projects/*/components/*/settings}ZRP/settings/v1beta1/{name=projects/*/locations/*/clusters/*/components/*/settings}ZPN/settings/v1beta1/{name=projects/*/regions/*/clusters/*/components/*/settings}ZNL/settings/v1beta1/{name=projects/*/zones/*/clusters/*/components/*/settings}�Aname�
UpdateComponentSettingsL.google.cloud.securitycenter.settings.v1beta1.UpdateComponentSettingsRequest?.google.cloud.securitycenter.settings.v1beta1.ComponentSettings"�����2Q/settings/v1beta1/{component_settings.name=organizations/*/components/*/settings}:component_settingsZa2K/settings/v1beta1/{component_settings.name=folders/*/components/*/settings}:component_settingsZb2L/settings/v1beta1/{component_settings.name=projects/*/components/*/settings}:component_settingsZy2c/settings/v1beta1/{component_settings.name=projects/*/locations/*/clusters/*/components/*/settings}:component_settingsZw2a/settings/v1beta1/{component_settings.name=projects/*/regions/*/clusters/*/components/*/settings}:component_settingsZu2_/settings/v1beta1/{component_settings.name=projects/*/zones/*/clusters/*/components/*/settings}:component_settings�Acomponent_settings,update_mask�
ResetComponentSettingsK.google.cloud.securitycenter.settings.v1beta1.ResetComponentSettingsRequest.google.protobuf.Empty"�����"D/settings/v1beta1/{name=organizations/*/components/*/settings}:reset:*ZC">/settings/v1beta1/{name=folders/*/components/*/settings}:reset:*ZD"?/settings/v1beta1/{name=projects/*/components/*/settings}:reset:*Z["V/settings/v1beta1/{name=projects/*/locations/*/clusters/*/components/*/settings}:reset:*ZY"T/settings/v1beta1/{name=projects/*/regions/*/clusters/*/components/*/settings}:reset:*ZW"R/settings/v1beta1/{name=projects/*/zones/*/clusters/*/components/*/settings}:reset:*�
#CalculateEffectiveComponentSettingsX.google.cloud.securitycenter.settings.v1beta1.CalculateEffectiveComponentSettingsRequest?.google.cloud.securitycenter.settings.v1beta1.ComponentSettings"�����Q/settings/v1beta1/{name=organizations/*/components/*/effectiveSettings}:calculateZMK/settings/v1beta1/{name=folders/*/components/*/effectiveSettings}:calculateZNL/settings/v1beta1/{name=projects/*/components/*/effectiveSettings}:calculateZec/settings/v1beta1/{name=projects/*/locations/*/clusters/*/components/*/effectiveSettings}:calculateZca/settings/v1beta1/{name=projects/*/regions/*/clusters/*/components/*/effectiveSettings}:calculateZa_/settings/v1beta1/{name=projects/*/zones/*/clusters/*/components/*/effectiveSettings}:calculate�Aname�
ListDetectorsB.google.cloud.securitycenter.settings.v1beta1.ListDetectorsRequestC.google.cloud.securitycenter.settings.v1beta1.ListDetectorsResponse"E���64/settings/v1beta1/{parent=organizations/*}/detectors�Aparent�
ListComponentsC.google.cloud.securitycenter.settings.v1beta1.ListComponentsRequestD.google.cloud.securitycenter.settings.v1beta1.ListComponentsResponse"F���75/settings/v1beta1/{parent=organizations/*}/components�AparentQ�Asecuritycenter.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
0com.google.cloud.securitycenter.settings.v1beta1BSettingsServiceProtoPZTgoogle.golang.org/genproto/googleapis/cloud/securitycenter/settings/v1beta1;settings��,Google.Cloud.SecurityCenter.Settings.V1Beta1�,Google\\Cloud\\SecurityCenter\\Settings\\V1beta1�0Google::Cloud::SecurityCenter::Settings::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

