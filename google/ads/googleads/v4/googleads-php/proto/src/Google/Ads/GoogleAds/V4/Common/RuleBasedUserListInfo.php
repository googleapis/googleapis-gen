<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/user_lists.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a userlist that is generated by a rule.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.RuleBasedUserListInfo</code>
 */
class RuleBasedUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     */
    protected $prepopulation_status = 0;
    protected $rule_based_user_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $prepopulation_status
     *           The status of pre-population. The field is default to NONE if not set which
     *           means the previous users will not be considered. If set to REQUESTED, past
     *           site visitors or app users who match the list definition will be included
     *           in the list (works on the Display Network only). This will only
     *           add past users from within the last 30 days, depending on the
     *           list's membership duration and the date when the remarketing tag is added.
     *           The status will be updated to FINISHED once request is processed, or FAILED
     *           if the request fails.
     *     @type \Google\Ads\GoogleAds\V4\Common\CombinedRuleUserListInfo $combined_rule_user_list
     *           User lists defined by combining two rules.
     *           There are two operators: AND, where the left and right operands have to
     *           be true; AND_NOT where left operand is true but right operand is false.
     *     @type \Google\Ads\GoogleAds\V4\Common\DateSpecificRuleUserListInfo $date_specific_rule_user_list
     *           Visitors of a page during specific dates. The visiting periods are
     *           defined as follows:
     *           Between start_date (inclusive) and end_date (inclusive);
     *           Before end_date (exclusive) with start_date = 2000-01-01;
     *           After start_date (exclusive) with end_date = 2037-12-30.
     *     @type \Google\Ads\GoogleAds\V4\Common\ExpressionRuleUserListInfo $expression_rule_user_list
     *           Visitors of a page. The page visit is defined by one boolean rule
     *           expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     * @return int
     */
    public function getPrepopulationStatus()
    {
        return $this->prepopulation_status;
    }

    /**
     * The status of pre-population. The field is default to NONE if not set which
     * means the previous users will not be considered. If set to REQUESTED, past
     * site visitors or app users who match the list definition will be included
     * in the list (works on the Display Network only). This will only
     * add past users from within the last 30 days, depending on the
     * list's membership duration and the date when the remarketing tag is added.
     * The status will be updated to FINISHED once request is processed, or FAILED
     * if the request fails.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.UserListPrepopulationStatusEnum.UserListPrepopulationStatus prepopulation_status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPrepopulationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\UserListPrepopulationStatusEnum\UserListPrepopulationStatus::class);
        $this->prepopulation_status = $var;

        return $this;
    }

    /**
     * User lists defined by combining two rules.
     * There are two operators: AND, where the left and right operands have to
     * be true; AND_NOT where left operand is true but right operand is false.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.CombinedRuleUserListInfo combined_rule_user_list = 2;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\CombinedRuleUserListInfo
     */
    public function getCombinedRuleUserList()
    {
        return $this->readOneof(2);
    }

    public function hasCombinedRuleUserList()
    {
        return $this->hasOneof(2);
    }

    /**
     * User lists defined by combining two rules.
     * There are two operators: AND, where the left and right operands have to
     * be true; AND_NOT where left operand is true but right operand is false.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.CombinedRuleUserListInfo combined_rule_user_list = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\CombinedRuleUserListInfo $var
     * @return $this
     */
    public function setCombinedRuleUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\CombinedRuleUserListInfo::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Visitors of a page during specific dates. The visiting periods are
     * defined as follows:
     * Between start_date (inclusive) and end_date (inclusive);
     * Before end_date (exclusive) with start_date = 2000-01-01;
     * After start_date (exclusive) with end_date = 2037-12-30.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.DateSpecificRuleUserListInfo date_specific_rule_user_list = 3;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\DateSpecificRuleUserListInfo
     */
    public function getDateSpecificRuleUserList()
    {
        return $this->readOneof(3);
    }

    public function hasDateSpecificRuleUserList()
    {
        return $this->hasOneof(3);
    }

    /**
     * Visitors of a page during specific dates. The visiting periods are
     * defined as follows:
     * Between start_date (inclusive) and end_date (inclusive);
     * Before end_date (exclusive) with start_date = 2000-01-01;
     * After start_date (exclusive) with end_date = 2037-12-30.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.DateSpecificRuleUserListInfo date_specific_rule_user_list = 3;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\DateSpecificRuleUserListInfo $var
     * @return $this
     */
    public function setDateSpecificRuleUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\DateSpecificRuleUserListInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Visitors of a page. The page visit is defined by one boolean rule
     * expression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.ExpressionRuleUserListInfo expression_rule_user_list = 4;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\ExpressionRuleUserListInfo
     */
    public function getExpressionRuleUserList()
    {
        return $this->readOneof(4);
    }

    public function hasExpressionRuleUserList()
    {
        return $this->hasOneof(4);
    }

    /**
     * Visitors of a page. The page visit is defined by one boolean rule
     * expression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.ExpressionRuleUserListInfo expression_rule_user_list = 4;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\ExpressionRuleUserListInfo $var
     * @return $this
     */
    public function setExpressionRuleUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\ExpressionRuleUserListInfo::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRuleBasedUserList()
    {
        return $this->whichOneof("rule_based_user_list");
    }

}

