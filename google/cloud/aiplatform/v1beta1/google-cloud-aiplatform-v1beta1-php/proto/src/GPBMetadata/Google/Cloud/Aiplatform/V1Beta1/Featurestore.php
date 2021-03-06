<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/featurestore.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1Beta1;

class Featurestore
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
�
2google/cloud/aiplatform/v1beta1/featurestore.protogoogle.cloud.aiplatform.v1beta1google/api/resource.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
Featurestore
name (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	B�AN
labels (29.google.cloud.aiplatform.v1beta1.Featurestore.LabelsEntryB�Ae
online_serving_config (2A.google.cloud.aiplatform.v1beta1.Featurestore.OnlineServingConfigB�AG
state (23.google.cloud.aiplatform.v1beta1.Featurestore.StateB�A4
OnlineServingConfig
fixed_node_count (B�A-
LabelsEntry
key (	
value (	:8"8
State
STATE_UNSPECIFIED 

STABLE
UPDATING:q�An
&aiplatform.googleapis.com/FeaturestoreDprojects/{project}/locations/{location}/featurestores/{featurestore}B�
#com.google.cloud.aiplatform.v1beta1BFeaturestoreProtoPZIgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1beta1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

