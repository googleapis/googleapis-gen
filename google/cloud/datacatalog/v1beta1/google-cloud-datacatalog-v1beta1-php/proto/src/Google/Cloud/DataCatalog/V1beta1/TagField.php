<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1beta1/tags.proto

namespace Google\Cloud\DataCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains the value and supporting information for a field within
 * a [Tag][google.cloud.datacatalog.v1beta1.Tag].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1beta1.TagField</code>
 */
class TagField extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';
    /**
     * Output only. The order of this field with respect to other fields in this tag. It can be
     * set in [Tag][google.cloud.datacatalog.v1beta1.TagTemplateField.order]. For
     * example, a higher value can indicate a more important field. The value can
     * be negative. Multiple fields can have the same order, and field orders
     * within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $order = 0;
    protected $kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $display_name
     *           Output only. The display name of this field.
     *     @type float $double_value
     *           Holds the value for a tag field with double type.
     *     @type string $string_value
     *           Holds the value for a tag field with string type.
     *     @type bool $bool_value
     *           Holds the value for a tag field with boolean type.
     *     @type \Google\Protobuf\Timestamp $timestamp_value
     *           Holds the value for a tag field with timestamp type.
     *     @type \Google\Cloud\DataCatalog\V1beta1\TagField\EnumValue $enum_value
     *           Holds the value for a tag field with enum type. This value must be
     *           one of the allowed values in the definition of this enum.
     *     @type int $order
     *           Output only. The order of this field with respect to other fields in this tag. It can be
     *           set in [Tag][google.cloud.datacatalog.v1beta1.TagTemplateField.order]. For
     *           example, a higher value can indicate a more important field. The value can
     *           be negative. Multiple fields can have the same order, and field orders
     *           within a tag do not have to be sequential.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1Beta1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name of this field.
     *
     * Generated from protobuf field <code>string display_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Holds the value for a tag field with double type.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(2);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Holds the value for a tag field with double type.
     *
     * Generated from protobuf field <code>double double_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Holds the value for a tag field with string type.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(3);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Holds the value for a tag field with string type.
     *
     * Generated from protobuf field <code>string string_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Holds the value for a tag field with boolean type.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(4);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Holds the value for a tag field with boolean type.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Holds the value for a tag field with timestamp type.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimestampValue()
    {
        return $this->readOneof(5);
    }

    public function hasTimestampValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * Holds the value for a tag field with timestamp type.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Holds the value for a tag field with enum type. This value must be
     * one of the allowed values in the definition of this enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1beta1.TagField.EnumValue enum_value = 6;</code>
     * @return \Google\Cloud\DataCatalog\V1beta1\TagField\EnumValue
     */
    public function getEnumValue()
    {
        return $this->readOneof(6);
    }

    public function hasEnumValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * Holds the value for a tag field with enum type. This value must be
     * one of the allowed values in the definition of this enum.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1beta1.TagField.EnumValue enum_value = 6;</code>
     * @param \Google\Cloud\DataCatalog\V1beta1\TagField\EnumValue $var
     * @return $this
     */
    public function setEnumValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1beta1\TagField\EnumValue::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. The order of this field with respect to other fields in this tag. It can be
     * set in [Tag][google.cloud.datacatalog.v1beta1.TagTemplateField.order]. For
     * example, a higher value can indicate a more important field. The value can
     * be negative. Multiple fields can have the same order, and field orders
     * within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Output only. The order of this field with respect to other fields in this tag. It can be
     * set in [Tag][google.cloud.datacatalog.v1beta1.TagTemplateField.order]. For
     * example, a higher value can indicate a more important field. The value can
     * be negative. Multiple fields can have the same order, and field orders
     * within a tag do not have to be sequential.
     *
     * Generated from protobuf field <code>int32 order = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkInt32($var);
        $this->order = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getKind()
    {
        return $this->whichOneof("kind");
    }

}

