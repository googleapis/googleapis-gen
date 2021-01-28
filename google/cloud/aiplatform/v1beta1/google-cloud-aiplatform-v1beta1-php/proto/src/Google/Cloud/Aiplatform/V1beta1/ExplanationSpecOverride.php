<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/explanation.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The [ExplanationSpec][google.cloud.aiplatform.v1beta1.ExplanationSpec] entries that can be overridden at [online
 * explanation][PredictionService.Explain][google.cloud.aiplatform.v1beta1.PredictionService.Explain] time.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.ExplanationSpecOverride</code>
 */
class ExplanationSpecOverride extends \Google\Protobuf\Internal\Message
{
    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1beta1.ExplanationParameters.method] cannot be changed. If not specified,
     * no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationParameters parameters = 1;</code>
     */
    protected $parameters = null;
    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationMetadataOverride metadata = 2;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Aiplatform\V1beta1\ExplanationParameters $parameters
     *           The parameters to be overridden. Note that the
     *           [method][google.cloud.aiplatform.v1beta1.ExplanationParameters.method] cannot be changed. If not specified,
     *           no parameter is overridden.
     *     @type \Google\Cloud\Aiplatform\V1beta1\ExplanationMetadataOverride $metadata
     *           The metadata to be overridden. If not specified, no metadata is overridden.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\Explanation::initOnce();
        parent::__construct($data);
    }

    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1beta1.ExplanationParameters.method] cannot be changed. If not specified,
     * no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationParameters parameters = 1;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\ExplanationParameters
     */
    public function getParameters()
    {
        return isset($this->parameters) ? $this->parameters : null;
    }

    public function hasParameters()
    {
        return isset($this->parameters);
    }

    public function clearParameters()
    {
        unset($this->parameters);
    }

    /**
     * The parameters to be overridden. Note that the
     * [method][google.cloud.aiplatform.v1beta1.ExplanationParameters.method] cannot be changed. If not specified,
     * no parameter is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationParameters parameters = 1;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\ExplanationParameters $var
     * @return $this
     */
    public function setParameters($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\ExplanationParameters::class);
        $this->parameters = $var;

        return $this;
    }

    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationMetadataOverride metadata = 2;</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\ExplanationMetadataOverride
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * The metadata to be overridden. If not specified, no metadata is overridden.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExplanationMetadataOverride metadata = 2;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\ExplanationMetadataOverride $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\ExplanationMetadataOverride::class);
        $this->metadata = $var;

        return $this;
    }

}

