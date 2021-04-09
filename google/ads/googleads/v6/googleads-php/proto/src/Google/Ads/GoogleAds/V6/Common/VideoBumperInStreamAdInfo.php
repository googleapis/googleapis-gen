<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video bumper in-stream ad format (very short in-stream
 * non-skippable video ad).
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.VideoBumperInStreamAdInfo</code>
 */
class VideoBumperInStreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 2;</code>
     */
    protected $companion_banner = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $companion_banner
     *           The MediaFile resource name of the companion banner used with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 2;</code>
     * @return string
     */
    public function getCompanionBanner()
    {
        return isset($this->companion_banner) ? $this->companion_banner : '';
    }

    public function hasCompanionBanner()
    {
        return isset($this->companion_banner);
    }

    public function clearCompanionBanner()
    {
        unset($this->companion_banner);
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>string companion_banner = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanionBanner($var)
    {
        GPBUtil::checkString($var, True);
        $this->companion_banner = $var;

        return $this;
    }

}

