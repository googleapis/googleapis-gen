<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/common.proto

namespace GPBMetadata\Google\Firestore\V1Beta1;

class Common
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
�
%google/firestore/v1beta1/common.protogoogle.firestore.v1beta1google/api/annotations.proto"#
DocumentMask
field_paths (	"e
Precondition
exists (H 1
update_time (2.google.protobuf.TimestampH B
condition_type"�
TransactionOptionsJ
	read_only (25.google.firestore.v1beta1.TransactionOptions.ReadOnlyH L

read_write (26.google.firestore.v1beta1.TransactionOptions.ReadWriteH &
	ReadWrite
retry_transaction (S
ReadOnly/
	read_time (2.google.protobuf.TimestampH B
consistency_selectorB
modeB�
com.google.firestore.v1beta1BCommonProtoPZAgoogle.golang.org/genproto/googleapis/firestore/v1beta1;firestore�GCFS�Google.Cloud.Firestore.V1Beta1�Google\\Cloud\\Firestore\\V1beta1�!Google::Cloud::Firestore::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

