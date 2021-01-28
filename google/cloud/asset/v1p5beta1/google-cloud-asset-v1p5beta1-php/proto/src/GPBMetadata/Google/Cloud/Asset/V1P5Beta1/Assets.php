<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p5beta1/assets.proto

namespace GPBMetadata\Google\Cloud\Asset\V1P5Beta1;

class Assets
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Orgpolicy\V1\Orgpolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessLevel::initOnce();
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessPolicy::initOnce();
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\ServicePerimeter::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

)google/cloud/asset/v1p5beta1/assets.protogoogle.cloud.asset.v1p5beta1google/api/resource.proto)google/cloud/orgpolicy/v1/orgpolicy.protogoogle/iam/v1/policy.proto:google/identity/accesscontextmanager/v1/access_level.proto;google/identity/accesscontextmanager/v1/access_policy.proto?google/identity/accesscontextmanager/v1/service_perimeter.protogoogle/protobuf/any.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.proto"�
Asset
name (	

asset_type (	8
resource (2&.google.cloud.asset.v1p5beta1.Resource)

iam_policy (2.google.iam.v1.Policy5

org_policy (2!.google.cloud.orgpolicy.v1.PolicyN
access_policy (25.google.identity.accesscontextmanager.v1.AccessPolicyH L
access_level (24.google.identity.accesscontextmanager.v1.AccessLevelH V
service_perimeter	 (29.google.identity.accesscontextmanager.v1.ServicePerimeterH 
	ancestors
 (	:\'�A$
cloudasset.googleapis.com/Asset*B
access_context_policy"�
Resource
version (	
discovery_document_uri (	
discovery_name (	
resource_url (	
parent (	%
data (2.google.protobuf.StructB�
 com.google.cloud.asset.v1p5beta1B
AssetProtoPZAgoogle.golang.org/genproto/googleapis/cloud/asset/v1p5beta1;asset��Google.Cloud.Asset.V1p5Beta1�Google\\Cloud\\Asset\\V1p5beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

