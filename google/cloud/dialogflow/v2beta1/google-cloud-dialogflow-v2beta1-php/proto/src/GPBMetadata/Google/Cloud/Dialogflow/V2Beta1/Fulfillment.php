<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/fulfillment.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

class Fulfillment
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/cloud/dialogflow/v2beta1/fulfillment.protogoogle.cloud.dialogflow.v2beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto"�
Fulfillment
name (	B�A
display_name (	]
generic_web_service (2>.google.cloud.dialogflow.v2beta1.Fulfillment.GenericWebServiceH 
enabled (F
features (24.google.cloud.dialogflow.v2beta1.Fulfillment.Feature�
GenericWebService
uri (	B�A
username (	
password (	k
request_headers (2R.google.cloud.dialogflow.v2beta1.Fulfillment.GenericWebService.RequestHeadersEntry 
is_cloud_function (B�A5
RequestHeadersEntry
key (	
value (	:8
FeatureG
type (29.google.cloud.dialogflow.v2beta1.Fulfillment.Feature.Type"+
Type
TYPE_UNSPECIFIED 
	SMALLTALK:��A�
%dialogflow.googleapis.com/Fulfillment$projects/{project}/agent/fulfillment9projects/{project}/locations/{location}/agent/fulfillmentB
fulfillment"T
GetFulfillmentRequest;
name (	B-�A�A\'
%dialogflow.googleapis.com/Fulfillment"�
UpdateFulfillmentRequestF
fulfillment (2,.google.cloud.dialogflow.v2beta1.FulfillmentB�A4
update_mask (2.google.protobuf.FieldMaskB�A2�
Fulfillments�
GetFulfillment6.google.cloud.dialogflow.v2beta1.GetFulfillmentRequest,.google.cloud.dialogflow.v2beta1.Fulfillment"w���j,/v2beta1/{name=projects/*/agent/fulfillment}Z:8/v2beta1/{name=projects/*/locations/*/agent/fulfillment}�Aname�
UpdateFulfillment9.google.cloud.dialogflow.v2beta1.UpdateFulfillmentRequest,.google.cloud.dialogflow.v2beta1.Fulfillment"�����28/v2beta1/{fulfillment.name=projects/*/agent/fulfillment}:fulfillmentZS2D/v2beta1/{fulfillment.name=projects/*/locations/*/agent/fulfillment}:fulfillment�Afulfillment,update_maskx�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
#com.google.cloud.dialogflow.v2beta1BFulfillmentProtoPZIgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2beta1;dialogflow��DF�Google.Cloud.Dialogflow.V2beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

