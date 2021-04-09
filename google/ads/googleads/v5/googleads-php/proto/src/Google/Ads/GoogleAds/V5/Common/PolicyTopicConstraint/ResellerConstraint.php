<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/policy.proto

namespace Google\Ads\GoogleAds\V5\Common\PolicyTopicConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Indicates that a policy topic was constrained due to disapproval of the
 * website for reseller purposes.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.PolicyTopicConstraint.ResellerConstraint</code>
 */
class ResellerConstraint extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Policy::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ResellerConstraint::class, \Google\Ads\GoogleAds\V5\Common\PolicyTopicConstraint_ResellerConstraint::class);

