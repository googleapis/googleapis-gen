<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/settings/v1beta1/detector.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1;

class Detector
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1\BillingSettings::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
;google/cloud/securitycenter/settings/v1beta1/detector.proto,google.cloud.securitycenter.settings.v1beta1Cgoogle/cloud/securitycenter/settings/v1beta1/billing_settings.protogoogle/api/annotations.proto"�
Detector
detector (	B�A
	component (	B�AT
billing_tier (29.google.cloud.securitycenter.settings.v1beta1.BillingTierB�A
detector_labels (	B�AB�
0com.google.cloud.securitycenter.settings.v1beta1BDetectorsProtoPZTgoogle.golang.org/genproto/googleapis/cloud/securitycenter/settings/v1beta1;settings��,Google.Cloud.SecurityCenter.Settings.V1Beta1�,Google\\Cloud\\SecurityCenter\\Settings\\V1beta1�0Google::Cloud::SecurityCenter::Settings::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

