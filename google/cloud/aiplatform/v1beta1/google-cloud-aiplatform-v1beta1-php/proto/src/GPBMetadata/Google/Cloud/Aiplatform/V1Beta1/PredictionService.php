<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1Beta1;

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
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\Explanation::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/cloud/aiplatform/v1beta1/prediction_service.protogoogle.cloud.aiplatform.v1beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/aiplatform/v1beta1/explanation.protogoogle/protobuf/struct.proto"�
PredictRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.Value"Y
PredictResponse+
predictions (2.google.protobuf.Value
deployed_model_id (	"�
ExplainRequest<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint.
	instances (2.google.protobuf.ValueB�A*

parameters (2.google.protobuf.Value[
explanation_spec_override (28.google.cloud.aiplatform.v1beta1.ExplanationSpecOverride
deployed_model_id (	"�
ExplainResponseB
explanations (2,.google.cloud.aiplatform.v1beta1.Explanation
deployed_model_id (	+
predictions (2.google.protobuf.Value2�
PredictionService�
Predict/.google.cloud.aiplatform.v1beta1.PredictRequest0.google.cloud.aiplatform.v1beta1.PredictResponse"i���C">/v1beta1/{endpoint=projects/*/locations/*/endpoints/*}:predict:*�Aendpoint,instances,parameters�
Explain/.google.cloud.aiplatform.v1beta1.ExplainRequest0.google.cloud.aiplatform.v1beta1.ExplainResponse"{���C">/v1beta1/{endpoint=projects/*/locations/*/endpoints/*}:explain:*�A/endpoint,instances,parameters,deployed_model_idM�Aaiplatform.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
#com.google.cloud.aiplatform.v1beta1BPredictionServiceProtoPZIgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1beta1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

