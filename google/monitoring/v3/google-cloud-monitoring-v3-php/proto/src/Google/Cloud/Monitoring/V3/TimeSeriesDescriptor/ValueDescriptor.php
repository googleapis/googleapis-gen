<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/metric.proto

namespace Google\Cloud\Monitoring\V3\TimeSeriesDescriptor;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A descriptor for the value columns in a data point.
 *
 * Generated from protobuf message <code>google.monitoring.v3.TimeSeriesDescriptor.ValueDescriptor</code>
 */
class ValueDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * The value key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The value type.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 2;</code>
     */
    protected $value_type = 0;
    /**
     * The value stream kind.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     */
    protected $metric_kind = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           The value key.
     *     @type int $value_type
     *           The value type.
     *     @type int $metric_kind
     *           The value stream kind.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Metric::initOnce();
        parent::__construct($data);
    }

    /**
     * The value key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * The value key.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The value type.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 2;</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * The value type.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.ValueType value_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\MetricDescriptor\ValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * The value stream kind.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     * @return int
     */
    public function getMetricKind()
    {
        return $this->metric_kind;
    }

    /**
     * The value stream kind.
     *
     * Generated from protobuf field <code>.google.api.MetricDescriptor.MetricKind metric_kind = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMetricKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\MetricDescriptor\MetricKind::class);
        $this->metric_kind = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ValueDescriptor::class, \Google\Cloud\Monitoring\V3\TimeSeriesDescriptor_ValueDescriptor::class);

