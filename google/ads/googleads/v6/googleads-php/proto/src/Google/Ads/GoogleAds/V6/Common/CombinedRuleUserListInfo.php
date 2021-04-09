<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/user_lists.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User lists defined by combining two rules, left operand and right operand.
 * There are two operators: AND where left operand and right operand have to be
 * true; AND_NOT where left operand is true but right operand is false.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.CombinedRuleUserListInfo</code>
 */
class CombinedRuleUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Left operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo left_operand = 1;</code>
     */
    protected $left_operand = null;
    /**
     * Right operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo right_operand = 2;</code>
     */
    protected $right_operand = null;
    /**
     * Operator to connect the two operands.
     * Required for creating a combined rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.UserListCombinedRuleOperatorEnum.UserListCombinedRuleOperator rule_operator = 3;</code>
     */
    protected $rule_operator = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo $left_operand
     *           Left operand of the combined rule.
     *           This field is required and must be populated when creating new combined
     *           rule based user list.
     *     @type \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo $right_operand
     *           Right operand of the combined rule.
     *           This field is required and must be populated when creating new combined
     *           rule based user list.
     *     @type int $rule_operator
     *           Operator to connect the two operands.
     *           Required for creating a combined rule user list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Left operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo left_operand = 1;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo|null
     */
    public function getLeftOperand()
    {
        return isset($this->left_operand) ? $this->left_operand : null;
    }

    public function hasLeftOperand()
    {
        return isset($this->left_operand);
    }

    public function clearLeftOperand()
    {
        unset($this->left_operand);
    }

    /**
     * Left operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo left_operand = 1;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo $var
     * @return $this
     */
    public function setLeftOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo::class);
        $this->left_operand = $var;

        return $this;
    }

    /**
     * Right operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo right_operand = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo|null
     */
    public function getRightOperand()
    {
        return isset($this->right_operand) ? $this->right_operand : null;
    }

    public function hasRightOperand()
    {
        return isset($this->right_operand);
    }

    public function clearRightOperand()
    {
        unset($this->right_operand);
    }

    /**
     * Right operand of the combined rule.
     * This field is required and must be populated when creating new combined
     * rule based user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.common.UserListRuleInfo right_operand = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo $var
     * @return $this
     */
    public function setRightOperand($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Common\UserListRuleInfo::class);
        $this->right_operand = $var;

        return $this;
    }

    /**
     * Operator to connect the two operands.
     * Required for creating a combined rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.UserListCombinedRuleOperatorEnum.UserListCombinedRuleOperator rule_operator = 3;</code>
     * @return int
     */
    public function getRuleOperator()
    {
        return $this->rule_operator;
    }

    /**
     * Operator to connect the two operands.
     * Required for creating a combined rule user list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.UserListCombinedRuleOperatorEnum.UserListCombinedRuleOperator rule_operator = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\UserListCombinedRuleOperatorEnum\UserListCombinedRuleOperator::class);
        $this->rule_operator = $var;

        return $this;
    }

}

