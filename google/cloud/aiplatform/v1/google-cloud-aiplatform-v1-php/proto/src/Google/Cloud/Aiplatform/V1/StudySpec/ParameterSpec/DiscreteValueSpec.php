<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/study.proto

namespace Google\Cloud\Aiplatform\V1\StudySpec\ParameterSpec;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Value specification for a parameter in `DISCRETE` type.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.StudySpec.ParameterSpec.DiscreteValueSpec</code>
 */
class DiscreteValueSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $values
     *           Required. A list of possible values.
     *           The list should be in increasing order and at least 1e-10 apart.
     *           For instance, this parameter might have possible settings of 1.5, 2.5,
     *           and 4.0. This list should not contain more than 1,000 values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Study::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Required. A list of possible values.
     * The list should be in increasing order and at least 1e-10 apart.
     * For instance, this parameter might have possible settings of 1.5, 2.5,
     * and 4.0. This list should not contain more than 1,000 values.
     *
     * Generated from protobuf field <code>repeated double values = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiscreteValueSpec::class, \Google\Cloud\Aiplatform\V1\StudySpec_ParameterSpec_DiscreteValueSpec::class);

