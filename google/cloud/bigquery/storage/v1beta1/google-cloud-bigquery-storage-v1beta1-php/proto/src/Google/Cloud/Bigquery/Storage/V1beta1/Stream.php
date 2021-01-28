<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a single data stream within a read session.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.Stream</code>
 */
class Stream extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/streams/{stream_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the stream, in the form
     *           `projects/{project_id}/locations/{location}/streams/{stream_id}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/streams/{stream_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the stream, in the form
     * `projects/{project_id}/locations/{location}/streams/{stream_id}`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

