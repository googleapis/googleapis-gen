<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1beta1/run_asset_discovery_response.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1Beta1;

class RunAssetDiscoveryResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Fgoogle/cloud/securitycenter/v1beta1/run_asset_discovery_response.proto#google.cloud.securitycenter.v1beta1google/api/annotations.proto"�
RunAssetDiscoveryResponseS
state (2D.google.cloud.securitycenter.v1beta1.RunAssetDiscoveryResponse.State+
duration (2.google.protobuf.Duration"M
State
STATE_UNSPECIFIED 
	COMPLETED

SUPERSEDED

TERMINATEDB~
\'com.google.cloud.securitycenter.v1beta1PZQgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1beta1;securitycenterbproto3'
        , true);

        static::$is_initialized = true;
    }
}

