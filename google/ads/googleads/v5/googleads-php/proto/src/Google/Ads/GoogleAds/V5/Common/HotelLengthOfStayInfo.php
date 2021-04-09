<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criterion for length of hotel stay in nights.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.HotelLengthOfStayInfo</code>
 */
class HotelLengthOfStayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 min_nights = 3;</code>
     */
    protected $min_nights = null;
    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 max_nights = 4;</code>
     */
    protected $max_nights = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $min_nights
     *           Low end of the number of nights in the stay.
     *     @type int|string $max_nights
     *           High end of the number of nights in the stay.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 min_nights = 3;</code>
     * @return int|string
     */
    public function getMinNights()
    {
        return isset($this->min_nights) ? $this->min_nights : 0;
    }

    public function hasMinNights()
    {
        return isset($this->min_nights);
    }

    public function clearMinNights()
    {
        unset($this->min_nights);
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 min_nights = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMinNights($var)
    {
        GPBUtil::checkInt64($var);
        $this->min_nights = $var;

        return $this;
    }

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 max_nights = 4;</code>
     * @return int|string
     */
    public function getMaxNights()
    {
        return isset($this->max_nights) ? $this->max_nights : 0;
    }

    public function hasMaxNights()
    {
        return isset($this->max_nights);
    }

    public function clearMaxNights()
    {
        unset($this->max_nights);
    }

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>int64 max_nights = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMaxNights($var)
    {
        GPBUtil::checkInt64($var);
        $this->max_nights = $var;

        return $this;
    }

}

