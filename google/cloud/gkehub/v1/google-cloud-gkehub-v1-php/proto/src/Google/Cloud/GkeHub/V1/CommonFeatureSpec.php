<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1/feature.proto

namespace Google\Cloud\GkeHub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CommonFeatureSpec contains Hub-wide configuration information
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1.CommonFeatureSpec</code>
 */
class CommonFeatureSpec extends \Google\Protobuf\Internal\Message
{
    protected $feature_spec;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\GkeHub\MultiClusterIngress\V1\FeatureSpec $multiclusteringress
     *           Multicluster Ingress-specific spec.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1\Feature::initOnce();
        parent::__construct($data);
    }

    /**
     * Multicluster Ingress-specific spec.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.multiclusteringress.v1.FeatureSpec multiclusteringress = 102;</code>
     * @return \Google\Cloud\GkeHub\MultiClusterIngress\V1\FeatureSpec|null
     */
    public function getMulticlusteringress()
    {
        return $this->readOneof(102);
    }

    public function hasMulticlusteringress()
    {
        return $this->hasOneof(102);
    }

    /**
     * Multicluster Ingress-specific spec.
     *
     * Generated from protobuf field <code>.google.cloud.gkehub.multiclusteringress.v1.FeatureSpec multiclusteringress = 102;</code>
     * @param \Google\Cloud\GkeHub\MultiClusterIngress\V1\FeatureSpec $var
     * @return $this
     */
    public function setMulticlusteringress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeHub\MultiClusterIngress\V1\FeatureSpec::class);
        $this->writeOneof(102, $var);

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

