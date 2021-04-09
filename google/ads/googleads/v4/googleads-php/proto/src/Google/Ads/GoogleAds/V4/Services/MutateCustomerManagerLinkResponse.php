<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/customer_manager_link_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for a CustomerManagerLink mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.MutateCustomerManagerLinkResponse</code>
 */
class MutateCustomerManagerLinkResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.MutateCustomerManagerLinkResult results = 1;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V4\Services\MutateCustomerManagerLinkResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           A result that identifies the resource affected by the mutate request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\CustomerManagerLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.MutateCustomerManagerLinkResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * A result that identifies the resource affected by the mutate request.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.MutateCustomerManagerLinkResult results = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\MutateCustomerManagerLinkResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Services\MutateCustomerManagerLinkResult::class);
        $this->results = $arr;

        return $this;
    }

}

