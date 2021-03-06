<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/settings/v1beta1/component_settings.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1;

class ComponentSettings
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/cloud/securitycenter/settings/v1beta1/component_settings.proto,google.cloud.securitycenter.settings.v1beta1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
ComponentSettings
name (	U
state (2F.google.cloud.securitycenter.settings.v1beta1.ComponentEnablementState$
project_service_account (	B�Ap
detector_settings (2U.google.cloud.securitycenter.settings.v1beta1.ComponentSettings.DetectorSettingsEntry
etag (	B�A4
update_time (2.google.protobuf.TimestampB�A}
#container_threat_detection_settings) (2N.google.cloud.securitycenter.settings.v1beta1.ContainerThreatDetectionSettingsH u
event_threat_detection_settings* (2J.google.cloud.securitycenter.settings.v1beta1.EventThreatDetectionSettingsH {
"security_health_analytics_settings, (2M.google.cloud.securitycenter.settings.v1beta1.SecurityHealthAnalyticsSettingsH i
web_security_scanner_settings( (2@.google.cloud.securitycenter.settings.v1beta1.WebSecurityScannerH i
DetectorSettingsU
state (2F.google.cloud.securitycenter.settings.v1beta1.ComponentEnablementState�
DetectorSettingsEntry
key (	_
value (2P.google.cloud.securitycenter.settings.v1beta1.ComponentSettings.DetectorSettings:8:��A�
/securitycenter.googleapis.com/ComponentSettings<organizations/{organization}/components/{component}/settings0folders/{folder}/components/{component}/settings2projects/{project}/components/{component}/settingsZprojects/{project}/locations/{location}/clusters/{cluster}/components/{component}/settingsVprojects/{project}/regions/{region}/clusters/{cluster}/components/{component}/settingsRprojects/{project}/zones/{zone}/clusters/{cluster}/components/{component}/settingsB
specific_settings"
WebSecurityScanner""
 ContainerThreatDetectionSettings"
EventThreatDetectionSettings"�
SecurityHealthAnalyticsSettings�
non_org_iam_member_settings (2e.google.cloud.securitycenter.settings.v1beta1.SecurityHealthAnalyticsSettings.NonOrgIamMemberSettings�
admin_service_account_settings (2i.google.cloud.securitycenter.settings.v1beta1.SecurityHealthAnalyticsSettings.AdminServiceAccountSettings6
NonOrgIamMemberSettings
approved_identities (	:
AdminServiceAccountSettings
approved_identities (	*l
ComponentEnablementState*
&COMPONENT_ENABLEMENT_STATE_UNSPECIFIED 
DISABLE

ENABLE
INHERITB�
0com.google.cloud.securitycenter.settings.v1beta1BComponentSettingsProtoPZTgoogle.golang.org/genproto/googleapis/cloud/securitycenter/settings/v1beta1;settings��,Google.Cloud.SecurityCenter.Settings.V1Beta1�,Google\\Cloud\\SecurityCenter\\Settings\\V1beta1�0Google::Cloud::SecurityCenter::Settings::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

