<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/customer_user_access_invitation_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for access invitation mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.MutateCustomerUserAccessInvitationResponse</code>
 */
class MutateCustomerUserAccessInvitationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.MutateCustomerUserAccessInvitationResult result = 1;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V6\Services\MutateCustomerUserAccessInvitationResult $result
     *           Result for the mutate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Services\CustomerUserAccessInvitationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Result for the mutate.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.MutateCustomerUserAccessInvitationResult result = 1;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\MutateCustomerUserAccessInvitationResult
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
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.MutateCustomerUserAccessInvitationResult result = 1;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\MutateCustomerUserAccessInvitationResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\MutateCustomerUserAccessInvitationResult::class);
        $this->result = $var;

        return $this;
    }

}

