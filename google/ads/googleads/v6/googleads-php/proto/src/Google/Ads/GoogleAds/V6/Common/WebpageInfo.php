<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/criteria.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a criterion for targeting webpages of an advertiser's website.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.WebpageInfo</code>
 */
class WebpageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the criterion that is defined by this parameter. The name value
     * will be used for identifying, sorting and filtering criteria with this type
     * of parameters.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>string criterion_name = 3;</code>
     */
    protected $criterion_name = null;
    /**
     * Conditions, or logical expressions, for webpage targeting. The list of
     * webpage targeting conditions are and-ed together when evaluated
     * for targeting.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.WebpageConditionInfo conditions = 2;</code>
     */
    private $conditions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $criterion_name
     *           The name of the criterion that is defined by this parameter. The name value
     *           will be used for identifying, sorting and filtering criteria with this type
     *           of parameters.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type \Google\Ads\GoogleAds\V6\Common\WebpageConditionInfo[]|\Google\Protobuf\Internal\RepeatedField $conditions
     *           Conditions, or logical expressions, for webpage targeting. The list of
     *           webpage targeting conditions are and-ed together when evaluated
     *           for targeting.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the criterion that is defined by this parameter. The name value
     * will be used for identifying, sorting and filtering criteria with this type
     * of parameters.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>string criterion_name = 3;</code>
     * @return string
     */
    public function getCriterionName()
    {
        return isset($this->criterion_name) ? $this->criterion_name : '';
    }

    public function hasCriterionName()
    {
        return isset($this->criterion_name);
    }

    public function clearCriterionName()
    {
        unset($this->criterion_name);
    }

    /**
     * The name of the criterion that is defined by this parameter. The name value
     * will be used for identifying, sorting and filtering criteria with this type
     * of parameters.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>string criterion_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCriterionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->criterion_name = $var;

        return $this;
    }

    /**
     * Conditions, or logical expressions, for webpage targeting. The list of
     * webpage targeting conditions are and-ed together when evaluated
     * for targeting.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.WebpageConditionInfo conditions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Conditions, or logical expressions, for webpage targeting. The list of
     * webpage targeting conditions are and-ed together when evaluated
     * for targeting.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v6.common.WebpageConditionInfo conditions = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Common\WebpageConditionInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V6\Common\WebpageConditionInfo::class);
        $this->conditions = $arr;

        return $this;
    }

}

