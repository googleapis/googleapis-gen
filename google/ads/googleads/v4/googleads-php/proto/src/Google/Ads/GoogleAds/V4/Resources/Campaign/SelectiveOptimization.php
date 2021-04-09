<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/campaign.proto

namespace Google\Ads\GoogleAds\V4\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Selective optimization setting for this campaign, which includes a set of
 * conversion actions to optimize this campaign towards.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.Campaign.SelectiveOptimization</code>
 */
class SelectiveOptimization extends \Google\Protobuf\Internal\Message
{
    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue conversion_actions = 1 [(.google.api.resource_reference) = {</code>
     */
    private $conversion_actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $conversion_actions
     *           The selected set of conversion actions for optimizing this campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue conversion_actions = 1 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversionActions()
    {
        return $this->conversion_actions;
    }

    /**
     * The selected set of conversion actions for optimizing this campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue conversion_actions = 1 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversionActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->conversion_actions = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SelectiveOptimization::class, \Google\Ads\GoogleAds\V4\Resources\Campaign_SelectiveOptimization::class);

