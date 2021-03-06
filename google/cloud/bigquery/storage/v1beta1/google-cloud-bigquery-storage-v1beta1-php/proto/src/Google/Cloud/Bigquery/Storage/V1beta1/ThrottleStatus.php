<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information on if the current connection is being throttled.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.ThrottleStatus</code>
 */
class ThrottleStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * How much this connection is being throttled.
     * 0 is no throttling, 100 is completely throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     */
    protected $throttle_percent = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $throttle_percent
     *           How much this connection is being throttled.
     *           0 is no throttling, 100 is completely throttled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * How much this connection is being throttled.
     * 0 is no throttling, 100 is completely throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     * @return int
     */
    public function getThrottlePercent()
    {
        return $this->throttle_percent;
    }

    /**
     * How much this connection is being throttled.
     * 0 is no throttling, 100 is completely throttled.
     *
     * Generated from protobuf field <code>int32 throttle_percent = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setThrottlePercent($var)
    {
        GPBUtil::checkInt32($var);
        $this->throttle_percent = $var;

        return $this;
    }

}

