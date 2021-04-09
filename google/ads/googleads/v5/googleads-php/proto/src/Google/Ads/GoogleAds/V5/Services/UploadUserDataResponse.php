<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/user_data_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [UserDataService.UploadUserData][google.ads.googleads.v5.services.UserDataService.UploadUserData]
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.UploadUserDataResponse</code>
 */
class UploadUserDataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue upload_date_time = 1;</code>
     */
    protected $upload_date_time = null;
    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value received_operations_count = 2;</code>
     */
    protected $received_operations_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $upload_date_time
     *           The date time at which the request was received by API, formatted as
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *     @type \Google\Protobuf\Int32Value $received_operations_count
     *           Number of upload data operations received by API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Services\UserDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue upload_date_time = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getUploadDateTime()
    {
        return isset($this->upload_date_time) ? $this->upload_date_time : null;
    }

    public function hasUploadDateTime()
    {
        return isset($this->upload_date_time);
    }

    public function clearUploadDateTime()
    {
        unset($this->upload_date_time);
    }

    /**
     * Returns the unboxed value from <code>getUploadDateTime()</code>

     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue upload_date_time = 1;</code>
     * @return string|null
     */
    public function getUploadDateTimeUnwrapped()
    {
        return $this->readWrapperValue("upload_date_time");
    }

    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue upload_date_time = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUploadDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->upload_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue upload_date_time = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUploadDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("upload_date_time", $var);
        return $this;}

    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value received_operations_count = 2;</code>
     * @return \Google\Protobuf\Int32Value|null
     */
    public function getReceivedOperationsCount()
    {
        return isset($this->received_operations_count) ? $this->received_operations_count : null;
    }

    public function hasReceivedOperationsCount()
    {
        return isset($this->received_operations_count);
    }

    public function clearReceivedOperationsCount()
    {
        unset($this->received_operations_count);
    }

    /**
     * Returns the unboxed value from <code>getReceivedOperationsCount()</code>

     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value received_operations_count = 2;</code>
     * @return int|null
     */
    public function getReceivedOperationsCountUnwrapped()
    {
        return $this->readWrapperValue("received_operations_count");
    }

    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value received_operations_count = 2;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setReceivedOperationsCount($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->received_operations_count = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value received_operations_count = 2;</code>
     * @param int|null $var
     * @return $this
     */
    public function setReceivedOperationsCountUnwrapped($var)
    {
        $this->writeWrapperValue("received_operations_count", $var);
        return $this;}

}

