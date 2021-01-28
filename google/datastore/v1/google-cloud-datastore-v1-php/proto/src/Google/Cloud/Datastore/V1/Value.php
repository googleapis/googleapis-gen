<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/entity.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A message that can hold any of the supported value types and associated
 * metadata.
 *
 * Generated from protobuf message <code>google.datastore.v1.Value</code>
 */
class Value extends \Google\Protobuf\Internal\Message
{
    /**
     * The `meaning` field should only be populated for backwards compatibility.
     *
     * Generated from protobuf field <code>int32 meaning = 14;</code>
     */
    protected $meaning = 0;
    /**
     * If the value should be excluded from all indexes including those defined
     * explicitly.
     *
     * Generated from protobuf field <code>bool exclude_from_indexes = 19;</code>
     */
    protected $exclude_from_indexes = false;
    protected $value_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $null_value
     *           A null value.
     *     @type bool $boolean_value
     *           A boolean value.
     *     @type int|string $integer_value
     *           An integer value.
     *     @type float $double_value
     *           A double value.
     *     @type \Google\Protobuf\Timestamp $timestamp_value
     *           A timestamp value.
     *           When stored in the Datastore, precise only to microseconds;
     *           any additional precision is rounded down.
     *     @type \Google\Cloud\Datastore\V1\Key $key_value
     *           A key value.
     *     @type string $string_value
     *           A UTF-8 encoded string value.
     *           When `exclude_from_indexes` is false (it is indexed), may have at most
     *           1500 bytes. Otherwise, may be set to at most 1,000,000 bytes.
     *     @type string $blob_value
     *           A blob value.
     *           May have at most 1,000,000 bytes.
     *           When `exclude_from_indexes` is false, may have at most 1500 bytes.
     *           In JSON requests, must be base64-encoded.
     *     @type \Google\Type\LatLng $geo_point_value
     *           A geo point value representing a point on the surface of Earth.
     *     @type \Google\Cloud\Datastore\V1\Entity $entity_value
     *           An entity value.
     *           - May have no key.
     *           - May have a key with an incomplete key path.
     *           - May have a reserved/read-only key.
     *     @type \Google\Cloud\Datastore\V1\ArrayValue $array_value
     *           An array value.
     *           Cannot contain another array value.
     *           A `Value` instance that sets field `array_value` must not set fields
     *           `meaning` or `exclude_from_indexes`.
     *     @type int $meaning
     *           The `meaning` field should only be populated for backwards compatibility.
     *     @type bool $exclude_from_indexes
     *           If the value should be excluded from all indexes including those defined
     *           explicitly.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Entity::initOnce();
        parent::__construct($data);
    }

    /**
     * A null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 11;</code>
     * @return int
     */
    public function getNullValue()
    {
        return $this->readOneof(11);
    }

    public function hasNullValue()
    {
        return $this->hasOneof(11);
    }

    /**
     * A null value.
     *
     * Generated from protobuf field <code>.google.protobuf.NullValue null_value = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setNullValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Protobuf\NullValue::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @return bool
     */
    public function getBooleanValue()
    {
        return $this->readOneof(1);
    }

    public function hasBooleanValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool boolean_value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * An integer value.
     *
     * Generated from protobuf field <code>int64 integer_value = 2;</code>
     * @return int|string
     */
    public function getIntegerValue()
    {
        return $this->readOneof(2);
    }

    public function hasIntegerValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * An integer value.
     *
     * Generated from protobuf field <code>int64 integer_value = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntegerValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(3);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * A double value.
     *
     * Generated from protobuf field <code>double double_value = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A timestamp value.
     * When stored in the Datastore, precise only to microseconds;
     * any additional precision is rounded down.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTimestampValue()
    {
        return $this->readOneof(10);
    }

    public function hasTimestampValue()
    {
        return $this->hasOneof(10);
    }

    /**
     * A timestamp value.
     * When stored in the Datastore, precise only to microseconds;
     * any additional precision is rounded down.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp_value = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestampValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * A key value.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key key_value = 5;</code>
     * @return \Google\Cloud\Datastore\V1\Key
     */
    public function getKeyValue()
    {
        return $this->readOneof(5);
    }

    public function hasKeyValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * A key value.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key key_value = 5;</code>
     * @param \Google\Cloud\Datastore\V1\Key $var
     * @return $this
     */
    public function setKeyValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Key::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A UTF-8 encoded string value.
     * When `exclude_from_indexes` is false (it is indexed), may have at most
     * 1500 bytes. Otherwise, may be set to at most 1,000,000 bytes.
     *
     * Generated from protobuf field <code>string string_value = 17;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(17);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(17);
    }

    /**
     * A UTF-8 encoded string value.
     * When `exclude_from_indexes` is false (it is indexed), may have at most
     * 1500 bytes. Otherwise, may be set to at most 1,000,000 bytes.
     *
     * Generated from protobuf field <code>string string_value = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * A blob value.
     * May have at most 1,000,000 bytes.
     * When `exclude_from_indexes` is false, may have at most 1500 bytes.
     * In JSON requests, must be base64-encoded.
     *
     * Generated from protobuf field <code>bytes blob_value = 18;</code>
     * @return string
     */
    public function getBlobValue()
    {
        return $this->readOneof(18);
    }

    public function hasBlobValue()
    {
        return $this->hasOneof(18);
    }

    /**
     * A blob value.
     * May have at most 1,000,000 bytes.
     * When `exclude_from_indexes` is false, may have at most 1500 bytes.
     * In JSON requests, must be base64-encoded.
     *
     * Generated from protobuf field <code>bytes blob_value = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setBlobValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * A geo point value representing a point on the surface of Earth.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_point_value = 8;</code>
     * @return \Google\Type\LatLng
     */
    public function getGeoPointValue()
    {
        return $this->readOneof(8);
    }

    public function hasGeoPointValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * A geo point value representing a point on the surface of Earth.
     *
     * Generated from protobuf field <code>.google.type.LatLng geo_point_value = 8;</code>
     * @param \Google\Type\LatLng $var
     * @return $this
     */
    public function setGeoPointValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\LatLng::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * An entity value.
     * - May have no key.
     * - May have a key with an incomplete key path.
     * - May have a reserved/read-only key.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity entity_value = 6;</code>
     * @return \Google\Cloud\Datastore\V1\Entity
     */
    public function getEntityValue()
    {
        return $this->readOneof(6);
    }

    public function hasEntityValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * An entity value.
     * - May have no key.
     * - May have a key with an incomplete key path.
     * - May have a reserved/read-only key.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity entity_value = 6;</code>
     * @param \Google\Cloud\Datastore\V1\Entity $var
     * @return $this
     */
    public function setEntityValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Entity::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * An array value.
     * Cannot contain another array value.
     * A `Value` instance that sets field `array_value` must not set fields
     * `meaning` or `exclude_from_indexes`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ArrayValue array_value = 9;</code>
     * @return \Google\Cloud\Datastore\V1\ArrayValue
     */
    public function getArrayValue()
    {
        return $this->readOneof(9);
    }

    public function hasArrayValue()
    {
        return $this->hasOneof(9);
    }

    /**
     * An array value.
     * Cannot contain another array value.
     * A `Value` instance that sets field `array_value` must not set fields
     * `meaning` or `exclude_from_indexes`.
     *
     * Generated from protobuf field <code>.google.datastore.v1.ArrayValue array_value = 9;</code>
     * @param \Google\Cloud\Datastore\V1\ArrayValue $var
     * @return $this
     */
    public function setArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\ArrayValue::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * The `meaning` field should only be populated for backwards compatibility.
     *
     * Generated from protobuf field <code>int32 meaning = 14;</code>
     * @return int
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * The `meaning` field should only be populated for backwards compatibility.
     *
     * Generated from protobuf field <code>int32 meaning = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setMeaning($var)
    {
        GPBUtil::checkInt32($var);
        $this->meaning = $var;

        return $this;
    }

    /**
     * If the value should be excluded from all indexes including those defined
     * explicitly.
     *
     * Generated from protobuf field <code>bool exclude_from_indexes = 19;</code>
     * @return bool
     */
    public function getExcludeFromIndexes()
    {
        return $this->exclude_from_indexes;
    }

    /**
     * If the value should be excluded from all indexes including those defined
     * explicitly.
     *
     * Generated from protobuf field <code>bool exclude_from_indexes = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setExcludeFromIndexes($var)
    {
        GPBUtil::checkBool($var);
        $this->exclude_from_indexes = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueType()
    {
        return $this->whichOneof("value_type");
    }

}

