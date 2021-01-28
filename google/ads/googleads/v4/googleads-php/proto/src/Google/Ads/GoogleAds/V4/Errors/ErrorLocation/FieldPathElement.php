<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/errors.proto

namespace Google\Ads\GoogleAds\V4\Errors\ErrorLocation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A part of a field path.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.errors.ErrorLocation.FieldPathElement</code>
 */
class FieldPathElement extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     */
    protected $field_name = '';
    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value index = 2;</code>
     */
    protected $index = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $field_name
     *           The name of a field or a oneof
     *     @type \Google\Protobuf\Int64Value $index
     *           If field_name is a repeated field, this is the element that failed
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * The name of a field or a oneof
     *
     * Generated from protobuf field <code>string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value index = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getIndex()
    {
        return isset($this->index) ? $this->index : null;
    }

    public function hasIndex()
    {
        return isset($this->index);
    }

    public function clearIndex()
    {
        unset($this->index);
    }

    /**
     * Returns the unboxed value from <code>getIndex()</code>

     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value index = 2;</code>
     * @return int|string|null
     */
    public function getIndexUnwrapped()
    {
        return $this->readWrapperValue("index");
    }

    /**
     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value index = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->index = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * If field_name is a repeated field, this is the element that failed
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value index = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIndexUnwrapped($var)
    {
        $this->writeWrapperValue("index", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FieldPathElement::class, \Google\Ads\GoogleAds\V4\Errors\ErrorLocation_FieldPathElement::class);

