<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/account_link_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [AccountLinkService.CreateAccountLink][google.ads.googleads.v5.services.AccountLinkService.CreateAccountLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.CreateAccountLinkRequest</code>
 */
class CreateAccountLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer for which the account link is created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The account link to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer for which the account link is created.
     *     @type \Google\Ads\GoogleAds\V5\Resources\AccountLink $account_link
     *           Required. The account link to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Services\AccountLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer for which the account link is created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer for which the account link is created.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The account link to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V5\Resources\AccountLink|null
     */
    public function getAccountLink()
    {
        return isset($this->account_link) ? $this->account_link : null;
    }

    public function hasAccountLink()
    {
        return isset($this->account_link);
    }

    public function clearAccountLink()
    {
        unset($this->account_link);
    }

    /**
     * Required. The account link to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.resources.AccountLink account_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V5\Resources\AccountLink $var
     * @return $this
     */
    public function setAccountLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Resources\AccountLink::class);
        $this->account_link = $var;

        return $this;
    }

}

