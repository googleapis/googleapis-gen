<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/user_list_number_rule_item_operator.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Enums;

class UserListNumberRuleItemOperator
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Ggoogle/ads/googleads/v4/enums/user_list_number_rule_item_operator.protogoogle.ads.googleads.v4.enums"�
"UserListNumberRuleItemOperatorEnum"�
UserListNumberRuleItemOperator
UNSPECIFIED 
UNKNOWN
GREATER_THAN
GREATER_THAN_OR_EQUAL

EQUALS

NOT_EQUALS
	LESS_THAN
LESS_THAN_OR_EQUALB�
!com.google.ads.googleads.v4.enumsB#UserListNumberRuleItemOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

