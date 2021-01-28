<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2beta/product.proto

namespace GPBMetadata\Google\Cloud\Retail\V2Beta;

class Product
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2Beta\Common::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/retail/v2beta/product.protogoogle.cloud.retail.v2betagoogle/api/field_behavior.protogoogle/api/resource.proto\'google/cloud/retail/v2beta/common.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
Product
name (	B�A
id (	B�A;
type (2(.google.cloud.retail.v2beta.Product.TypeB�A
primary_product_id (	

categories (	
title (	B�A
description
 (	G

attributes (23.google.cloud.retail.v2beta.Product.AttributesEntry
tags (	9

price_info (2%.google.cloud.retail.v2beta.PriceInfo2
available_time (2.google.protobuf.TimestampF
availability (20.google.cloud.retail.v2beta.Product.Availability7
available_quantity (2.google.protobuf.Int32Value
uri (	1
images (2!.google.cloud.retail.v2beta.Image^
AttributesEntry
key (	:
value (2+.google.cloud.retail.v2beta.CustomAttribute:8"F
Type
TYPE_UNSPECIFIED 
PRIMARY
VARIANT

COLLECTION"i
Availability
AVAILABILITY_UNSPECIFIED 
IN_STOCK
OUT_OF_STOCK
PREORDER
	BACKORDER:��A�
retail.googleapis.com/Product_projects/{project}/locations/{location}/catalogs/{catalog}/branches/{branch}/products/{product}B�
com.google.cloud.retail.v2betaBProductProtoPZ@google.golang.org/genproto/googleapis/cloud/retail/v2beta;retail�RETAIL�Google.Cloud.Retail.V2Beta�Google\\Cloud\\Retail\\V2beta�Google::Cloud::Retail::V2beta�Al
retail.googleapis.com/BranchLprojects/{project}/locations/{location}/catalogs/{catalog}/branches/{branch}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

