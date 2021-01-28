<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/criteria.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Advertiser-specific hotel ID.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.HotelIdInfo</code>
 */
class HotelIdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $value
     *           String value of the hotel ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
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

     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @return string|null
     */
    public function getValueUnwrapped()
    {
        return $this->readWrapperValue("value");
    }

    /**
     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
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

     * String value of the hotel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue value = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setValueUnwrapped($var)
    {
        $this->writeWrapperValue("value", $var);
        return $this;}

}

