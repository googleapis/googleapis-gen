<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/geo_target_constant_service.proto

namespace Google\Ads\GoogleAds\V4\Services\SuggestGeoTargetConstantsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of geo target constant resource names.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.SuggestGeoTargetConstantsRequest.GeoTargets</code>
 */
class GeoTargets extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of geo target constant resource names.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 1;</code>
     */
    private $geo_target_constants;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $geo_target_constants
     *           A list of geo target constant resource names.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\GeoTargetConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of geo target constant resource names.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstants()
    {
        return $this->geo_target_constants;
    }

    /**
     * A list of geo target constant resource names.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue geo_target_constants = 1;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->geo_target_constants = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoTargets::class, \Google\Ads\GoogleAds\V4\Services\SuggestGeoTargetConstantsRequest_GeoTargets::class);

