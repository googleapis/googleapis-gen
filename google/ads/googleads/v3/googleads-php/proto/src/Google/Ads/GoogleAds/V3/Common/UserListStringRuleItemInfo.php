<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/user_lists.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A rule item composed of a string operation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.UserListStringRuleItemInfo</code>
 */
class UserListStringRuleItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           String comparison operator.
     *           This field is required and must be populated when creating a new string
     *           rule item.
     *     @type \Google\Protobuf\StringValue $value
     *           The right hand side of the string rule item. For URLs or referrer URLs,
     *           the value can not contain illegal URL chars such as newlines, quotes,
     *           tabs, or parentheses. This field is required and must be populated when
     *           creating a new string rule item.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * String comparison operator.
     * This field is required and must be populated when creating a new string
     * rule item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.UserListStringRuleItemOperatorEnum.UserListStringRuleItemOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\UserListStringRuleItemOperatorEnum\UserListStringRuleItemOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getValue()
    {
        return isset($this->value) ? $this->value : null;
    }

    public function hasValue()
    {
        return isset($this->value);
    }

    public function clearValue()
    {
        unset($this->value);
    }

    /**
     * Returns the unboxed value from <code>getValue()</code>

     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @return string|null
     */
    public function getValueUnwrapped()
    {
        return $this->readWrapperValue("value");
    }

    /**
     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The right hand side of the string rule item. For URLs or referrer URLs,
     * the value can not contain illegal URL chars such as newlines, quotes,
     * tabs, or parentheses. This field is required and must be populated when
     * creating a new string rule item.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setValueUnwrapped($var)
    {
        $this->writeWrapperValue("value", $var);
        return $this;}

}

