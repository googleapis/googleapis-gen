<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1beta2/storage.proto

namespace Google\Cloud\Bigquery\Storage\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structured custom BigQuery Storage error message. The error can be attached
 * as error details in the returned rpc Status. In particular, the use of error
 * codes allows more structured error handling, and reduces the need to evaluate
 * unstructured error text strings.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.storage.v1beta2.StorageError</code>
 */
class StorageError extends \Google\Protobuf\Internal\Message
{
    /**
     * BigQuery Storage specific error code.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     */
    protected $code = 0;
    /**
     * Name of the failed entity.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     */
    protected $entity = '';
    /**
     * Message that describes the error.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           BigQuery Storage specific error code.
     *     @type string $entity
     *           Name of the failed entity.
     *     @type string $error_message
     *           Message that describes the error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1Beta2\Storage::initOnce();
        parent::__construct($data);
    }

    /**
     * BigQuery Storage specific error code.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * BigQuery Storage specific error code.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigquery\Storage\V1beta2\StorageError\StorageErrorCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Name of the failed entity.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Name of the failed entity.
     *
     * Generated from protobuf field <code>string entity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity = $var;

        return $this;
    }

    /**
     * Message that describes the error.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * Message that describes the error.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

