<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1alpha2/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `CreateWriteStream`.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1alpha2.CreateWriteStreamRequest</code>
 */
class CreateWriteStreamRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Reference to the table to which the stream belongs, in the format
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Stream to be created.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1alpha2.WriteStream write_stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $write_stream = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Reference to the table to which the stream belongs, in the format
     *           of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *     @type \Google\Cloud\Bigquery\Storage\V1alpha2\WriteStream $write_stream
     *           Required. Stream to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Alpha2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Reference to the table to which the stream belongs, in the format
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Reference to the table to which the stream belongs, in the format
     * of `projects/{project}/datasets/{dataset}/tables/{table}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Stream to be created.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1alpha2.WriteStream write_stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Bigquery\Storage\V1alpha2\WriteStream
     */
    public function getWriteStream()
    {
        return isset($this->write_stream) ? $this->write_stream : null;
    }

    public function hasWriteStream()
    {
        return isset($this->write_stream);
    }

    public function clearWriteStream()
    {
        unset($this->write_stream);
    }

    /**
     * Required. Stream to be created.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1alpha2.WriteStream write_stream = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Bigquery\Storage\V1alpha2\WriteStream $var
     * @return $this
     */
    public function setWriteStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Storage\V1alpha2\WriteStream::class);
        $this->write_stream = $var;

        return $this;
    }

}

