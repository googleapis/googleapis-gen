<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/merchant_center_link_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for Merchant Center link mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.MutateMerchantCenterLinkResponse</code>
 */
class MutateMerchantCenterLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.MutateMerchantCenterLinkResult result = 2;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V4\Services\MutateMerchantCenterLinkResult $result
     *           Result for the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\MerchantCenterLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.MutateMerchantCenterLinkResult result = 2;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\MutateMerchantCenterLinkResult
     */
    public function getResult()
    {
        return isset($this->result) ? $this->result : null;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.MutateMerchantCenterLinkResult result = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\MutateMerchantCenterLinkResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\MutateMerchantCenterLinkResult::class);
        $this->result = $var;

        return $this;
    }

}

