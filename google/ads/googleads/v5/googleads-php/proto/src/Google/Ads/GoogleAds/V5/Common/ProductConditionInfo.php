<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Condition of a product offer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.ProductConditionInfo</code>
 */
class ProductConditionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Value of the condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductConditionEnum.ProductCondition condition = 1;</code>
     */
    protected $condition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $condition
     *           Value of the condition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Value of the condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductConditionEnum.ProductCondition condition = 1;</code>
     * @return int
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Value of the condition.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.ProductConditionEnum.ProductCondition condition = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\ProductConditionEnum\ProductCondition::class);
        $this->condition = $var;

        return $this;
    }

}

