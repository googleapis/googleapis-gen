<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gmail teaser data. The teaser is a small header that acts as an invitation
 * to view the rest of the ad (the body).
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.GmailTeaser</code>
 */
class GmailTeaser extends \Google\Protobuf\Internal\Message
{
    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>string headline = 5;</code>
     */
    protected $headline = null;
    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     */
    protected $description = null;
    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>string business_name = 7;</code>
     */
    protected $business_name = null;
    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>string logo_image = 8;</code>
     */
    protected $logo_image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $headline
     *           Headline of the teaser.
     *     @type string $description
     *           Description of the teaser.
     *     @type string $business_name
     *           Business name of the advertiser.
     *     @type string $logo_image
     *           The MediaFile resource name of the logo image. Valid image types are GIF,
     *           JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     *           be 1:1 (+-1%).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>string headline = 5;</code>
     * @return string
     */
    public function getHeadline()
    {
        return isset($this->headline) ? $this->headline : '';
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
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>string headline = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
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
     * Description of the teaser.
     *
     * Generated from protobuf field <code>string description = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>string business_name = 7;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return isset($this->business_name) ? $this->business_name : '';
    }

    public function hasBusinessName()
    {
        return isset($this->business_name);
    }

    public function clearBusinessName()
    {
        unset($this->business_name);
    }

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>string business_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>string logo_image = 8;</code>
     * @return string
     */
    public function getLogoImage()
    {
        return isset($this->logo_image) ? $this->logo_image : '';
    }

    public function hasLogoImage()
    {
        return isset($this->logo_image);
    }

    public function clearLogoImage()
    {
        unset($this->logo_image);
    }

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>string logo_image = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLogoImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->logo_image = $var;

        return $this;
    }

}

