<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataqna/v1alpha/question.proto

namespace Google\Cloud\DataQnA\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of the data query for the backend.
 * This is provided for informational purposes only. Clients should not use
 * it to send it to the backend directly, but rather use the `execute` RPC
 * to trigger the execution. Using the `execute` RPC is needed in order to
 * track the state of a question and report on it correctly to the data
 * administrators.
 *
 * Generated from protobuf message <code>google.cloud.dataqna.v1alpha.DataQuery</code>
 */
class DataQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * The generated SQL query to be sent to the backend.
     *
     * Generated from protobuf field <code>string sql = 1;</code>
     */
    protected $sql = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sql
     *           The generated SQL query to be sent to the backend.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataqna\V1Alpha\Question::initOnce();
        parent::__construct($data);
    }

    /**
     * The generated SQL query to be sent to the backend.
     *
     * Generated from protobuf field <code>string sql = 1;</code>
     * @return string
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * The generated SQL query to be sent to the backend.
     *
     * Generated from protobuf field <code>string sql = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSql($var)
    {
        GPBUtil::checkString($var, True);
        $this->sql = $var;

        return $this;
    }

}

