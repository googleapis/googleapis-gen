<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/keyword_plan_campaign.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.KeywordPlanGeoTarget</code>
 */
class KeywordPlanGeoTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $geo_target_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $geo_target_constant
     *           Required. The resource name of the geo target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\KeywordPlanCampaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGeoTargetConstant()
    {
        return isset($this->geo_target_constant) ? $this->geo_target_constant : null;
    }

    public function hasGeoTargetConstant()
    {
        return isset($this->geo_target_constant);
    }

    public function clearGeoTargetConstant()
    {
        unset($this->geo_target_constant);
    }

    /**
     * Returns the unboxed value from <code>getGeoTargetConstant()</code>

     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1 [(.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getGeoTargetConstantUnwrapped()
    {
        return $this->readWrapperValue("geo_target_constant");
    }

    /**
     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->geo_target_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Required. The resource name of the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 1 [(.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setGeoTargetConstantUnwrapped($var)
    {
        $this->writeWrapperValue("geo_target_constant", $var);
        return $this;}

}

