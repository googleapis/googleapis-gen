<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta2/avro.proto

namespace Google\Cloud\Bigquery\Storage\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Avro rows.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta2.AvroRows</code>
 */
class AvroRows extends \Google\Protobuf\Internal\Message
{
    /**
     * Binary serialized rows in a block.
     *
     * Generated from protobuf field <code>bytes serialized_binary_rows = 1;</code>
     */
    protected $serialized_binary_rows = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $serialized_binary_rows
     *           Binary serialized rows in a block.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta2\Avro::initOnce();
        parent::__construct($data);
    }

    /**
     * Binary serialized rows in a block.
     *
     * Generated from protobuf field <code>bytes serialized_binary_rows = 1;</code>
     * @return string
     */
    public function getSerializedBinaryRows()
    {
        return $this->serialized_binary_rows;
    }

    /**
     * Binary serialized rows in a block.
     *
     * Generated from protobuf field <code>bytes serialized_binary_rows = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSerializedBinaryRows($var)
    {
        GPBUtil::checkString($var, False);
        $this->serialized_binary_rows = $var;

        return $this;
    }

}

