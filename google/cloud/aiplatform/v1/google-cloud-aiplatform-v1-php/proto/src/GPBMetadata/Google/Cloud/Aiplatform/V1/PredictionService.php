<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1;

class PredictionService
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
        \GPBMetadata\Google\Api\Httpbody::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
3google/cloud/aiplatform/v1/prediction_service.protogoogle.cloud.aiplatform.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/httpbody.protogoogle/api/resource.protogoogle/protobuf/struct.proto"�
PredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.Value"Y
PredictResponse+
predictions (2.google.protobuf.Value
deployed_model_id (	2�
PredictionService�
Predict*.google.cloud.aiplatform.v1.PredictRequest+.google.cloud.aiplatform.v1.PredictResponse"�����"9/v1/{endpoint=projects/*/locations/*/endpoints/*}:predict:*ZF"A/v1/{endpoint=projects/*/locations/*/endpoints/*}:predictInternal:*�Aendpoint,parameters,instancesM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
com.google.cloud.aiplatform.v1BPredictionServiceProtoPZDgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1;aiplatform�Google.Cloud.AIPlatform.V1�Google\\Cloud\\AIPlatform\\V1�Google::Cloud::AIPlatform::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

