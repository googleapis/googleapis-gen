<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/policy.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional information that explains a policy finding.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.PolicyTopicEvidence</code>
 */
class PolicyTopicEvidence extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\WebsiteList $website_list
     *           List of websites linked with this resource.
     *     @type \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\TextList $text_list
     *           List of evidence found in the text of a resource.
     *     @type string $language_code
     *           The language the resource was detected to be written in.
     *           This is an IETF language tag such as "en-US".
     *     @type \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationTextList $destination_text_list
     *           The text in the destination of the resource that is causing a policy
     *           finding.
     *     @type \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationMismatch $destination_mismatch
     *           Mismatch between the destinations of a resource's URLs.
     *     @type \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationNotWorking $destination_not_working
     *           Details when the destination is returning an HTTP error code or isn't
     *           functional in all locations for commonly used devices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * List of websites linked with this resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.WebsiteList website_list = 3;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\WebsiteList|null
     */
    public function getWebsiteList()
    {
        return $this->readOneof(3);
    }

    public function hasWebsiteList()
    {
        return $this->hasOneof(3);
    }

    /**
     * List of websites linked with this resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.WebsiteList website_list = 3;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\WebsiteList $var
     * @return $this
     */
    public function setWebsiteList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\WebsiteList::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * List of evidence found in the text of a resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.TextList text_list = 4;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\TextList|null
     */
    public function getTextList()
    {
        return $this->readOneof(4);
    }

    public function hasTextList()
    {
        return $this->hasOneof(4);
    }

    /**
     * List of evidence found in the text of a resource.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.TextList text_list = 4;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\TextList $var
     * @return $this
     */
    public function setTextList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\TextList::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The language the resource was detected to be written in.
     * This is an IETF language tag such as "en-US".
     *
     * Generated from protobuf field <code>string language_code = 9;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->readOneof(9);
    }

    public function hasLanguageCode()
    {
        return $this->hasOneof(9);
    }

    /**
     * The language the resource was detected to be written in.
     * This is an IETF language tag such as "en-US".
     *
     * Generated from protobuf field <code>string language_code = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The text in the destination of the resource that is causing a policy
     * finding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationTextList destination_text_list = 6;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationTextList|null
     */
    public function getDestinationTextList()
    {
        return $this->readOneof(6);
    }

    public function hasDestinationTextList()
    {
        return $this->hasOneof(6);
    }

    /**
     * The text in the destination of the resource that is causing a policy
     * finding.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationTextList destination_text_list = 6;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationTextList $var
     * @return $this
     */
    public function setDestinationTextList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationTextList::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Mismatch between the destinations of a resource's URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationMismatch destination_mismatch = 7;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationMismatch|null
     */
    public function getDestinationMismatch()
    {
        return $this->readOneof(7);
    }

    public function hasDestinationMismatch()
    {
        return $this->hasOneof(7);
    }

    /**
     * Mismatch between the destinations of a resource's URLs.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationMismatch destination_mismatch = 7;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationMismatch $var
     * @return $this
     */
    public function setDestinationMismatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationMismatch::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Details when the destination is returning an HTTP error code or isn't
     * functional in all locations for commonly used devices.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationNotWorking destination_not_working = 8;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationNotWorking|null
     */
    public function getDestinationNotWorking()
    {
        return $this->readOneof(8);
    }

    public function hasDestinationNotWorking()
    {
        return $this->hasOneof(8);
    }

    /**
     * Details when the destination is returning an HTTP error code or isn't
     * functional in all locations for commonly used devices.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.PolicyTopicEvidence.DestinationNotWorking destination_not_working = 8;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationNotWorking $var
     * @return $this
     */
    public function setDestinationNotWorking($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\PolicyTopicEvidence\DestinationNotWorking::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

