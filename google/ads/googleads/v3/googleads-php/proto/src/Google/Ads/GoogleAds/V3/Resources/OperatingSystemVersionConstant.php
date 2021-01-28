<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/operating_system_version_constant.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile operating system version or a range of versions, depending on
 * `operator_type`. List of available mobile platforms at
 * https://developers.google.com/adwords/api/docs/appendix/codes-formats#mobile-platforms
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.OperatingSystemVersionConstant</code>
 */
class OperatingSystemVersionConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $os_major_version = null;
    /**
     * Output only. The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $os_minor_version = null;
    /**
     * Output only. Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $operator_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the operating system version constant.
     *           Operating system version constant resource names have the form:
     *           `operatingSystemVersionConstants/{criterion_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the operating system version.
     *     @type \Google\Protobuf\StringValue $name
     *           Output only. Name of the operating system.
     *     @type \Google\Protobuf\Int32Value $os_major_version
     *           Output only. The OS Major Version number.
     *     @type \Google\Protobuf\Int32Value $os_minor_version
     *           Output only. The OS Minor Version number.
     *     @type int $operator_type
     *           Output only. Determines whether this constant represents a single version or a range of
     *           versions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\OperatingSystemVersionConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the operating system version constant.
     * Operating system version constant resource names have the form:
     * `operatingSystemVersionConstants/{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the operating system version.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Output only. Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Output only. Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Output only. Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Name of the operating system.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getOsMajorVersion()
    {
        return isset($this->os_major_version) ? $this->os_major_version : null;
    }

    public function hasOsMajorVersion()
    {
        return isset($this->os_major_version);
    }

    public function clearOsMajorVersion()
    {
        unset($this->os_major_version);
    }

    /**
     * Returns the unboxed value from <code>getOsMajorVersion()</code>

     * Output only. The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|null
     */
    public function getOsMajorVersionUnwrapped()
    {
        return $this->readWrapperValue("os_major_version");
    }

    /**
     * Output only. The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setOsMajorVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->os_major_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Output only. The OS Major Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_major_version = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|null $var
     * @return $this
     */
    public function setOsMajorVersionUnwrapped($var)
    {
        $this->writeWrapperValue("os_major_version", $var);
        return $this;}

    /**
     * Output only. The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getOsMinorVersion()
    {
        return isset($this->os_minor_version) ? $this->os_minor_version : null;
    }

    public function hasOsMinorVersion()
    {
        return isset($this->os_minor_version);
    }

    public function clearOsMinorVersion()
    {
        unset($this->os_minor_version);
    }

    /**
     * Returns the unboxed value from <code>getOsMinorVersion()</code>

     * Output only. The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|null
     */
    public function getOsMinorVersionUnwrapped()
    {
        return $this->readWrapperValue("os_minor_version");
    }

    /**
     * Output only. The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setOsMinorVersion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->os_minor_version = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Output only. The OS Minor Version number.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value os_minor_version = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|null $var
     * @return $this
     */
    public function setOsMinorVersionUnwrapped($var)
    {
        $this->writeWrapperValue("os_minor_version", $var);
        return $this;}

    /**
     * Output only. Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getOperatorType()
    {
        return $this->operator_type;
    }

    /**
     * Output only. Determines whether this constant represents a single version or a range of
     * versions.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.OperatingSystemVersionOperatorTypeEnum.OperatingSystemVersionOperatorType operator_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setOperatorType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\OperatingSystemVersionOperatorTypeEnum\OperatingSystemVersionOperatorType::class);
        $this->operator_type = $var;

        return $this;
    }

}

