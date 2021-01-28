<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Country or Region the hotel is located in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.HotelCountryRegionInfo</code>
 */
class HotelCountryRegionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>string country_region_criterion = 2;</code>
     */
    protected $country_region_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country_region_criterion
     *           The Geo Target Constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>string country_region_criterion = 2;</code>
     * @return string
     */
    public function getCountryRegionCriterion()
    {
        return isset($this->country_region_criterion) ? $this->country_region_criterion : '';
    }

    public function hasCountryRegionCriterion()
    {
        return isset($this->country_region_criterion);
    }

    public function clearCountryRegionCriterion()
    {
        unset($this->country_region_criterion);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>string country_region_criterion = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryRegionCriterion($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_region_criterion = $var;

        return $this;
    }

}

