<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1beta3/operation_metadata.proto

namespace GPBMetadata\Google\Cloud\Documentai\V1Beta3;

class OperationMetadata
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/documentai/v1beta3/operation_metadata.protogoogle.cloud.documentai.v1beta3google/api/annotations.proto"�
CommonOperationMetadataM
state (2>.google.cloud.documentai.v1beta3.CommonOperationMetadata.State
state_message (	/
create_time (2.google.protobuf.Timestamp/
update_time (2.google.protobuf.Timestamp"e
State
STATE_UNSPECIFIED 
RUNNING

CANCELLING
	SUCCEEDED

FAILED
	CANCELLEDB�
#com.google.cloud.documentai.v1beta3BOperationMetadataProtoPZIgoogle.golang.org/genproto/googleapis/cloud/documentai/v1beta3;documentai�Google.Cloud.DocumentAI.V1Beta3�Google\\Cloud\\DocumentAI\\V1beta3�"Google::Cloud::DocumentAI::V1beta3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

