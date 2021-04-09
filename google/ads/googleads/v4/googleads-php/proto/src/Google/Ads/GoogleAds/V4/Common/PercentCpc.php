<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/bidding.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A bidding strategy where bids are a fraction of the advertised price for
 * some good or service.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.PercentCpc</code>
 */
class PercentCpc extends \Google\Protobuf\Internal\Message
{
    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     */
    protected $cpc_bid_ceiling_micros = null;
    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     */
    protected $enhanced_cpc_enabled = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $cpc_bid_ceiling_micros
     *           Maximum bid limit that can be set by the bid strategy. This is
     *           an optional field entered by the advertiser and specified in local micros.
     *           Note: A zero value is interpreted in the same way as having bid_ceiling
     *           undefined.
     *     @type \Google\Protobuf\BoolValue $enhanced_cpc_enabled
     *           Adjusts the bid for each auction upward or downward, depending on the
     *           likelihood of a conversion. Individual bids may exceed
     *           cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     *           not.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros) ? $this->cpc_bid_ceiling_micros : null;
    }

    public function hasCpcBidCeilingMicros()
    {
        return isset($this->cpc_bid_ceiling_micros);
    }

    public function clearCpcBidCeilingMicros()
    {
        unset($this->cpc_bid_ceiling_micros);
    }

    /**
     * Returns the unboxed value from <code>getCpcBidCeilingMicros()</code>

     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @return int|string|null
     */
    public function getCpcBidCeilingMicrosUnwrapped()
    {
        return $this->readWrapperValue("cpc_bid_ceiling_micros");
    }

    /**
     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidCeilingMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_ceiling_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Maximum bid limit that can be set by the bid strategy. This is
     * an optional field entered by the advertiser and specified in local micros.
     * Note: A zero value is interpreted in the same way as having bid_ceiling
     * undefined.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_ceiling_micros = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCpcBidCeilingMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("cpc_bid_ceiling_micros", $var);
        return $this;}

    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getEnhancedCpcEnabled()
    {
        return isset($this->enhanced_cpc_enabled) ? $this->enhanced_cpc_enabled : null;
    }

    public function hasEnhancedCpcEnabled()
    {
        return isset($this->enhanced_cpc_enabled);
    }

    public function clearEnhancedCpcEnabled()
    {
        unset($this->enhanced_cpc_enabled);
    }

    /**
     * Returns the unboxed value from <code>getEnhancedCpcEnabled()</code>

     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @return bool|null
     */
    public function getEnhancedCpcEnabledUnwrapped()
    {
        return $this->readWrapperValue("enhanced_cpc_enabled");
    }

    /**
     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setEnhancedCpcEnabled($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->enhanced_cpc_enabled = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Adjusts the bid for each auction upward or downward, depending on the
     * likelihood of a conversion. Individual bids may exceed
     * cpc_bid_ceiling_micros, but the average bid amount for a campaign should
     * not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue enhanced_cpc_enabled = 2;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setEnhancedCpcEnabledUnwrapped($var)
    {
        $this->writeWrapperValue("enhanced_cpc_enabled", $var);
        return $this;}

}

