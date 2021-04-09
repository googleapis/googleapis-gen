<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video out-stream ad format (ad shown alongside a feed
 * with automatic playback, without sound).
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.VideoOutstreamAdInfo</code>
 */
class VideoOutstreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     */
    protected $headline = null;
    /**
     * The description line.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline
     *           The headline of the ad.
     *     @type \Google\Protobuf\StringValue $description
     *           The description line.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getHeadline()
    {
        return isset($this->headline) ? $this->headline : null;
    }

    public function hasHeadline()
    {
        return isset($this->headline);
    }

    public function clearHeadline()
    {
        unset($this->headline);
    }

    /**
     * Returns the unboxed value from <code>getHeadline()</code>

     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return string|null
     */
    public function getHeadlineUnwrapped()
    {
        return $this->readWrapperValue("headline");
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlineUnwrapped($var)
    {
        $this->writeWrapperValue("headline", $var);
        return $this;}

    /**
     * The description line.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * The description line.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * The description line.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The description line.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

}

