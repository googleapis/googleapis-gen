<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/security_marks.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1;

class SecurityMarks
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/cloud/securitycenter/v1p1beta1/security_marks.proto%google.cloud.securitycenter.v1p1beta1google/api/resource.proto"�
SecurityMarks
name (	N
marks (2?.google.cloud.securitycenter.v1p1beta1.SecurityMarks.MarksEntry,

MarksEntry
key (	
value (	:8:��A�
+securitycenter.googleapis.com/SecurityMarks9organizations/{organization}/assets/{asset}/securityMarksNorganizations/{organization}/sources/{source}/findings/{finding}/securityMarksB�
)com.google.cloud.securitycenter.v1p1beta1PZSgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1p1beta1;securitycenter�%Google.Cloud.SecurityCenter.V1P1Beta1�%Google\\Cloud\\SecurityCenter\\V1p1beta1�(Google::Cloud::SecurityCenter::V1p1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

