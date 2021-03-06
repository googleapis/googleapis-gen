<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1alpha/feature.proto

namespace Google\Cloud\GkeHub\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MembershipFeatureSpec contains configuration information for a single
 * Membership.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1alpha.MembershipFeatureSpec</code>
 */
class MembershipFeatureSpec extends \Google\Protobuf\Internal\Message
{
    protected $feature_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeHub\ConfigManagement\V1alpha\MembershipSpec $configmanagement
     *           Config Management-specific spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Feature::initOnce();
        parent::__construct($data);
    }

    /**
     * Config Management-specific spec.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1alpha.MembershipSpec configmanagement = 106;</code>
     * @return \Google\Cloud\GkeHub\ConfigManagement\V1alpha\MembershipSpec|null
     */
    public function getConfigmanagement()
    {
        return $this->readOneof(106);
    }

    public function hasConfigmanagement()
    {
        return $this->hasOneof(106);
    }

    /**
     * Config Management-specific spec.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.configmanagement.v1alpha.MembershipSpec configmanagement = 106;</code>
     * @param \Google\Cloud\GkeHub\ConfigManagement\V1alpha\MembershipSpec $var
     * @return $this
     */
    public function setConfigmanagement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\ConfigManagement\V1alpha\MembershipSpec::class);
        $this->writeOneof(106, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFeatureSpec()
    {
        return $this->whichOneof("feature_spec");
    }

}

