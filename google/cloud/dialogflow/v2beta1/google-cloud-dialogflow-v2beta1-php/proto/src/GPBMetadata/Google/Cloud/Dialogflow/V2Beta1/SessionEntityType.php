<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session_entity_type.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

class SessionEntityType
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
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\EntityType::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�&
9google/cloud/dialogflow/v2beta1/session_entity_type.protogoogle.cloud.dialogflow.v2beta1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto1google/cloud/dialogflow/v2beta1/entity_type.protogoogle/protobuf/empty.proto google/protobuf/field_mask.proto"�
SessionEntityType
name (	c
entity_override_mode (2E.google.cloud.dialogflow.v2beta1.SessionEntityType.EntityOverrideModeD
entities (22.google.cloud.dialogflow.v2beta1.EntityType.Entity"�
EntityOverrideMode$
 ENTITY_OVERRIDE_MODE_UNSPECIFIED !
ENTITY_OVERRIDE_MODE_OVERRIDE#
ENTITY_OVERRIDE_MODE_SUPPLEMENT:��A�
+dialogflow.googleapis.com/SessionEntityTypeEprojects/{project}/agent/sessions/{session}/entityTypes/{entity_type}Zprojects/{project}/locations/{location}/agent/sessions/{session}/entityTypes/{entity_type}mprojects/{project}/agent/environments/{environment}/users/{user}/sessions/{session}/entityTypes/{entity_type}�projects/{project}/locations/{location}/agent/environments/{environment}/users/{user}/sessions/{session}/entityTypes/{entity_type}"�
ListSessionEntityTypesRequestC
parent (	B3�A�A-+dialogflow.googleapis.com/SessionEntityType
	page_size (

page_token (	"�
ListSessionEntityTypesResponseP
session_entity_types (22.google.cloud.dialogflow.v2beta1.SessionEntityType
next_page_token (	"`
GetSessionEntityTypeRequestA
name (	B3�A�A-
+dialogflow.googleapis.com/SessionEntityType"�
CreateSessionEntityTypeRequestC
parent (	B3�A�A-+dialogflow.googleapis.com/SessionEntityTypeT
session_entity_type (22.google.cloud.dialogflow.v2beta1.SessionEntityTypeB�A"�
UpdateSessionEntityTypeRequestT
session_entity_type (22.google.cloud.dialogflow.v2beta1.SessionEntityTypeB�A/
update_mask (2.google.protobuf.FieldMask"c
DeleteSessionEntityTypeRequestA
name (	B3�A�A-
+dialogflow.googleapis.com/SessionEntityType2�
SessionEntityTypes�
ListSessionEntityTypes>.google.cloud.dialogflow.v2beta1.ListSessionEntityTypesRequest?.google.cloud.dialogflow.v2beta1.ListSessionEntityTypesResponse"�����9/v2beta1/{parent=projects/*/agent/sessions/*}/entityTypesZRP/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypesZGE/v2beta1/{parent=projects/*/locations/*/agent/sessions/*}/entityTypesZ^\\/v2beta1/{parent=projects/*/locations/*/agent/environments/*/users/*/sessions/*}/entityTypes�Aparent�
GetSessionEntityType<.google.cloud.dialogflow.v2beta1.GetSessionEntityTypeRequest2.google.cloud.dialogflow.v2beta1.SessionEntityType"�����9/v2beta1/{name=projects/*/agent/sessions/*/entityTypes/*}ZRP/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}ZGE/v2beta1/{name=projects/*/locations/*/agent/sessions/*/entityTypes/*}Z^\\/v2beta1/{name=projects/*/locations/*/agent/environments/*/users/*/sessions/*/entityTypes/*}�Aname�
CreateSessionEntityType?.google.cloud.dialogflow.v2beta1.CreateSessionEntityTypeRequest2.google.cloud.dialogflow.v2beta1.SessionEntityType"�����"9/v2beta1/{parent=projects/*/agent/sessions/*}/entityTypes:session_entity_typeZg"P/v2beta1/{parent=projects/*/agent/environments/*/users/*/sessions/*}/entityTypes:session_entity_typeZ\\"E/v2beta1/{parent=projects/*/locations/*/agent/sessions/*}/entityTypes:session_entity_typeZs"\\/v2beta1/{parent=projects/*/locations/*/agent/environments/*/users/*/sessions/*}/entityTypes:session_entity_type�Aparent,session_entity_type�
UpdateSessionEntityType?.google.cloud.dialogflow.v2beta1.UpdateSessionEntityTypeRequest2.google.cloud.dialogflow.v2beta1.SessionEntityType"�����2M/v2beta1/{session_entity_type.name=projects/*/agent/sessions/*/entityTypes/*}:session_entity_typeZ{2d/v2beta1/{session_entity_type.name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}:session_entity_typeZp2Y/v2beta1/{session_entity_type.name=projects/*/locations/*/agent/sessions/*/entityTypes/*}:session_entity_typeZ�2p/v2beta1/{session_entity_type.name=projects/*/locations/*/agent/environments/*/users/*/sessions/*/entityTypes/*}:session_entity_type�Asession_entity_type�Asession_entity_type,update_mask�
DeleteSessionEntityType?.google.cloud.dialogflow.v2beta1.DeleteSessionEntityTypeRequest.google.protobuf.Empty"�����*9/v2beta1/{name=projects/*/agent/sessions/*/entityTypes/*}ZR*P/v2beta1/{name=projects/*/agent/environments/*/users/*/sessions/*/entityTypes/*}ZG*E/v2beta1/{name=projects/*/locations/*/agent/sessions/*/entityTypes/*}Z^*\\/v2beta1/{name=projects/*/locations/*/agent/environments/*/users/*/sessions/*/entityTypes/*}�Anamex�Adialogflow.googleapis.com�AYhttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/dialogflowB�
#com.google.cloud.dialogflow.v2beta1BSessionEntityTypeProtoPZIgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2beta1;dialogflow��DF�Google.Cloud.Dialogflow.V2beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

