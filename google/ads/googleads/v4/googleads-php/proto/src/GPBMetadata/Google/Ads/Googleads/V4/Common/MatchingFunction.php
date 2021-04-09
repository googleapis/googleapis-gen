<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/matching_function.proto

namespace GPBMetadata\Google\Ads\Googleads\V4\Common;

class MatchingFunction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v4/enums/matching_function_context_type.protogoogle.ads.googleads.v4.enums"�
MatchingFunctionContextTypeEnum"^
MatchingFunctionContextType
UNSPECIFIED 
UNKNOWN
FEED_ITEM_ID
DEVICE_NAMEB�
!com.google.ads.googleads.v4.enumsB MatchingFunctionContextTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
>google/ads/googleads/v4/enums/matching_function_operator.protogoogle.ads.googleads.v4.enums"�
MatchingFunctionOperatorEnum"u
MatchingFunctionOperator
UNSPECIFIED 
UNKNOWN
IN
IDENTITY

EQUALS
AND
CONTAINS_ANYB�
!com.google.ads.googleads.v4.enumsBMatchingFunctionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v4/enums;enums�GAA�Google.Ads.GoogleAds.V4.Enums�Google\\Ads\\GoogleAds\\V4\\Enums�!Google::Ads::GoogleAds::V4::Enumsbproto3
�
6google/ads/googleads/v4/common/matching_function.protogoogle.ads.googleads.v4.common>google/ads/googleads/v4/enums/matching_function_operator.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
MatchingFunction5
function_string (2.google.protobuf.StringValuef
operator (2T.google.ads.googleads.v4.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator>
left_operands (2\'.google.ads.googleads.v4.common.Operand?
right_operands (2\'.google.ads.googleads.v4.common.Operand"�
OperandS
constant_operand (27.google.ads.googleads.v4.common.Operand.ConstantOperandH ^
feed_attribute_operand (2<.google.ads.googleads.v4.common.Operand.FeedAttributeOperandH S
function_operand (27.google.ads.googleads.v4.common.Operand.FunctionOperandH `
request_context_operand (2=.google.ads.googleads.v4.common.Operand.RequestContextOperandH �
ConstantOperand4
string_value (2.google.protobuf.StringValueH 1

long_value (2.google.protobuf.Int64ValueH 3
boolean_value (2.google.protobuf.BoolValueH 4
double_value (2.google.protobuf.DoubleValueH B
constant_operand_value|
FeedAttributeOperand,
feed_id (2.google.protobuf.Int64Value6
feed_attribute_id (2.google.protobuf.Int64Value^
FunctionOperandK
matching_function (20.google.ads.googleads.v4.common.MatchingFunction�
RequestContextOperandp
context_type (2Z.google.ads.googleads.v4.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextTypeB
function_argument_operandB�
"com.google.ads.googleads.v4.commonBMatchingFunctionProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v4/common;common�GAA�Google.Ads.GoogleAds.V4.Common�Google\\Ads\\GoogleAds\\V4\\Common�"Google::Ads::GoogleAds::V4::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

