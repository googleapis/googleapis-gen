<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/training_pipeline.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Assigns input data to training, validation, and test sets based on a
 * provided timestamps. The youngest data pieces are assigned to training set,
 * next to validation set, and the oldest to the test set.
 * Supported only for tabular Datasets.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.TimestampSplit</code>
 */
class TimestampSplit extends \Google\Protobuf\Internal\Message
{
    /**
     * The fraction of the input data that is to be used to train the Model.
     *
     * Generated from protobuf field <code>double training_fraction = 1;</code>
     */
    protected $training_fraction = 0.0;
    /**
     * The fraction of the input data that is to be used to validate the Model.
     *
     * Generated from protobuf field <code>double validation_fraction = 2;</code>
     */
    protected $validation_fraction = 0.0;
    /**
     * The fraction of the input data that is to be used to evaluate the Model.
     *
     * Generated from protobuf field <code>double test_fraction = 3;</code>
     */
    protected $test_fraction = 0.0;
    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The values of the key (the values in the column) must be in RFC 3339
     * `date-time` format, where `time-offset` = `"Z"`
     * (e.g. 1985-04-12T23:20:50.52Z). If for a piece of data the key is not
     * present or has an invalid value, that piece is ignored by the pipeline.
     *
     * Generated from protobuf field <code>string key = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $training_fraction
     *           The fraction of the input data that is to be used to train the Model.
     *     @type float $validation_fraction
     *           The fraction of the input data that is to be used to validate the Model.
     *     @type float $test_fraction
     *           The fraction of the input data that is to be used to evaluate the Model.
     *     @type string $key
     *           Required. The key is a name of one of the Dataset's data columns.
     *           The values of the key (the values in the column) must be in RFC 3339
     *           `date-time` format, where `time-offset` = `"Z"`
     *           (e.g. 1985-04-12T23:20:50.52Z). If for a piece of data the key is not
     *           present or has an invalid value, that piece is ignored by the pipeline.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\TrainingPipeline::initOnce();
        parent::__construct($data);
    }

    /**
     * The fraction of the input data that is to be used to train the Model.
     *
     * Generated from protobuf field <code>double training_fraction = 1;</code>
     * @return float
     */
    public function getTrainingFraction()
    {
        return $this->training_fraction;
    }

    /**
     * The fraction of the input data that is to be used to train the Model.
     *
     * Generated from protobuf field <code>double training_fraction = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setTrainingFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->training_fraction = $var;

        return $this;
    }

    /**
     * The fraction of the input data that is to be used to validate the Model.
     *
     * Generated from protobuf field <code>double validation_fraction = 2;</code>
     * @return float
     */
    public function getValidationFraction()
    {
        return $this->validation_fraction;
    }

    /**
     * The fraction of the input data that is to be used to validate the Model.
     *
     * Generated from protobuf field <code>double validation_fraction = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setValidationFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->validation_fraction = $var;

        return $this;
    }

    /**
     * The fraction of the input data that is to be used to evaluate the Model.
     *
     * Generated from protobuf field <code>double test_fraction = 3;</code>
     * @return float
     */
    public function getTestFraction()
    {
        return $this->test_fraction;
    }

    /**
     * The fraction of the input data that is to be used to evaluate the Model.
     *
     * Generated from protobuf field <code>double test_fraction = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTestFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->test_fraction = $var;

        return $this;
    }

    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The values of the key (the values in the column) must be in RFC 3339
     * `date-time` format, where `time-offset` = `"Z"`
     * (e.g. 1985-04-12T23:20:50.52Z). If for a piece of data the key is not
     * present or has an invalid value, that piece is ignored by the pipeline.
     *
     * Generated from protobuf field <code>string key = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. The key is a name of one of the Dataset's data columns.
     * The values of the key (the values in the column) must be in RFC 3339
     * `date-time` format, where `time-offset` = `"Z"`
     * (e.g. 1985-04-12T23:20:50.52Z). If for a piece of data the key is not
     * present or has an invalid value, that piece is ignored by the pipeline.
     *
     * Generated from protobuf field <code>string key = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

}

