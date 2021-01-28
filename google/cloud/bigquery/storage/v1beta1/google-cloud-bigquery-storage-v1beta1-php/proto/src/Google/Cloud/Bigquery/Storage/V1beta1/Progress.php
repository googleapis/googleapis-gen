<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta1/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta1.Progress</code>
 */
class Progress extends \Google\Protobuf\Internal\Message
{
    /**
     * The fraction of rows assigned to the stream that have been processed by the
     * server so far, not including the rows in the current response message.
     * This value, along with `at_response_end`, can be used to interpolate the
     * progress made as the rows in the message are being processed using the
     * following formula: `at_response_start + (at_response_end -
     * at_response_start) * rows_processed_from_response / rows_in_response`.
     * Note that if a filter is provided, the `at_response_end` value of the
     * previous response may not necessarily be equal to the `at_response_start`
     * value of the current response.
     *
     * Generated from protobuf field <code>float at_response_start = 1;</code>
     */
    protected $at_response_start = 0.0;
    /**
     * Similar to `at_response_start`, except that this value includes the rows in
     * the current response.
     *
     * Generated from protobuf field <code>float at_response_end = 2;</code>
     */
    protected $at_response_end = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $at_response_start
     *           The fraction of rows assigned to the stream that have been processed by the
     *           server so far, not including the rows in the current response message.
     *           This value, along with `at_response_end`, can be used to interpolate the
     *           progress made as the rows in the message are being processed using the
     *           following formula: `at_response_start + (at_response_end -
     *           at_response_start) * rows_processed_from_response / rows_in_response`.
     *           Note that if a filter is provided, the `at_response_end` value of the
     *           previous response may not necessarily be equal to the `at_response_start`
     *           value of the current response.
     *     @type float $at_response_end
     *           Similar to `at_response_start`, except that this value includes the rows in
     *           the current response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta1\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * The fraction of rows assigned to the stream that have been processed by the
     * server so far, not including the rows in the current response message.
     * This value, along with `at_response_end`, can be used to interpolate the
     * progress made as the rows in the message are being processed using the
     * following formula: `at_response_start + (at_response_end -
     * at_response_start) * rows_processed_from_response / rows_in_response`.
     * Note that if a filter is provided, the `at_response_end` value of the
     * previous response may not necessarily be equal to the `at_response_start`
     * value of the current response.
     *
     * Generated from protobuf field <code>float at_response_start = 1;</code>
     * @return float
     */
    public function getAtResponseStart()
    {
        return $this->at_response_start;
    }

    /**
     * The fraction of rows assigned to the stream that have been processed by the
     * server so far, not including the rows in the current response message.
     * This value, along with `at_response_end`, can be used to interpolate the
     * progress made as the rows in the message are being processed using the
     * following formula: `at_response_start + (at_response_end -
     * at_response_start) * rows_processed_from_response / rows_in_response`.
     * Note that if a filter is provided, the `at_response_end` value of the
     * previous response may not necessarily be equal to the `at_response_start`
     * value of the current response.
     *
     * Generated from protobuf field <code>float at_response_start = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setAtResponseStart($var)
    {
        GPBUtil::checkFloat($var);
        $this->at_response_start = $var;

        return $this;
    }

    /**
     * Similar to `at_response_start`, except that this value includes the rows in
     * the current response.
     *
     * Generated from protobuf field <code>float at_response_end = 2;</code>
     * @return float
     */
    public function getAtResponseEnd()
    {
        return $this->at_response_end;
    }

    /**
     * Similar to `at_response_start`, except that this value includes the rows in
     * the current response.
     *
     * Generated from protobuf field <code>float at_response_end = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setAtResponseEnd($var)
    {
        GPBUtil::checkFloat($var);
        $this->at_response_end = $var;

        return $this;
    }

}

