<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2beta/user_event.proto

namespace GPBMetadata\Google\Cloud\Retail\V2Beta;

class UserEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2Beta\Common::initOnce();
        \GPBMetadata\Google\Cloud\Retail\V2Beta\Product::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�

+google/cloud/retail/v2beta/user_event.protogoogle.cloud.retail.v2betagoogle/api/field_behavior.proto\'google/cloud/retail/v2beta/common.proto(google/cloud/retail/v2beta/product.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.proto"�
	UserEvent

event_type (	B�A

visitor_id (	B�A.

event_time (2.google.protobuf.Timestamp
experiment_ids (	
attribution_token (	B
product_details (2).google.cloud.retail.v2beta.ProductDetailI

attributes (25.google.cloud.retail.v2beta.UserEvent.AttributesEntry
cart_id (	M
purchase_transaction	 (2/.google.cloud.retail.v2beta.PurchaseTransaction
search_query
 (	
page_categories (	7
	user_info (2$.google.cloud.retail.v2beta.UserInfo
uri (	
referrer_uri (	
page_view_id (	^
AttributesEntry
key (	:
value (2+.google.cloud.retail.v2beta.CustomAttribute:8"y
ProductDetail9
product (2#.google.cloud.retail.v2beta.ProductB�A-
quantity (2.google.protobuf.Int32Value"n
PurchaseTransaction

id (	
revenue (B�A
tax (
cost (
currency_code (	B�AB�
com.google.cloud.retail.v2betaBUserEventProtoPZ@google.golang.org/genproto/googleapis/cloud/retail/v2beta;retail�RETAIL�Google.Cloud.Retail.V2Beta�Google\\Cloud\\Retail\\V2beta�Google::Cloud::Retail::V2betabproto3'
        , true);

        static::$is_initialized = true;
    }
}

