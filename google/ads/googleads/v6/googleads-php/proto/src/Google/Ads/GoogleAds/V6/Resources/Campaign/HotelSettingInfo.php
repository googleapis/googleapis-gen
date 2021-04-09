<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/campaign.proto

namespace Google\Ads\GoogleAds\V6\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign-level settings for hotel ads.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.Campaign.HotelSettingInfo</code>
 */
class HotelSettingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The linked Hotel Center account.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $hotel_center_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $hotel_center_id
     *           Immutable. The linked Hotel Center account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The linked Hotel Center account.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int|string
     */
    public function getHotelCenterId()
    {
        return isset($this->hotel_center_id) ? $this->hotel_center_id : 0;
    }

    public function hasHotelCenterId()
    {
        return isset($this->hotel_center_id);
    }

    public function clearHotelCenterId()
    {
        unset($this->hotel_center_id);
    }

    /**
     * Immutable. The linked Hotel Center account.
     *
     * Generated from protobuf field <code>int64 hotel_center_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int|string $var
     * @return $this
     */
    public function setHotelCenterId($var)
    {
        GPBUtil::checkInt64($var);
        $this->hotel_center_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HotelSettingInfo::class, \Google\Ads\GoogleAds\V6\Resources\Campaign_HotelSettingInfo::class);

