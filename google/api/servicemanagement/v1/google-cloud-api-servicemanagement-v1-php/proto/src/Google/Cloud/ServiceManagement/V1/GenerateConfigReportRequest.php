<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for GenerateConfigReport method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.GenerateConfigReportRequest</code>
 */
class GenerateConfigReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Service configuration for which we want to generate the report.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any new_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $new_config = null;
    /**
     * Optional. Service configuration against which the comparison will be done.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any old_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $old_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Any $new_config
     *           Required. Service configuration for which we want to generate the report.
     *           For this version of API, the supported types are
     *           [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     *           [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     *           and [google.api.Service][google.api.Service]
     *     @type \Google\Protobuf\Any $old_config
     *           Optional. Service configuration against which the comparison will be done.
     *           For this version of API, the supported types are
     *           [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     *           [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     *           and [google.api.Service][google.api.Service]
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Service configuration for which we want to generate the report.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any new_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Any
     */
    public function getNewConfig()
    {
        return isset($this->new_config) ? $this->new_config : null;
    }

    public function hasNewConfig()
    {
        return isset($this->new_config);
    }

    public function clearNewConfig()
    {
        unset($this->new_config);
    }

    /**
     * Required. Service configuration for which we want to generate the report.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any new_config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setNewConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->new_config = $var;

        return $this;
    }

    /**
     * Optional. Service configuration against which the comparison will be done.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any old_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Any
     */
    public function getOldConfig()
    {
        return isset($this->old_config) ? $this->old_config : null;
    }

    public function hasOldConfig()
    {
        return isset($this->old_config);
    }

    public function clearOldConfig()
    {
        unset($this->old_config);
    }

    /**
     * Optional. Service configuration against which the comparison will be done.
     * For this version of API, the supported types are
     * [google.api.servicemanagement.v1.ConfigRef][google.api.servicemanagement.v1.ConfigRef],
     * [google.api.servicemanagement.v1.ConfigSource][google.api.servicemanagement.v1.ConfigSource],
     * and [google.api.Service][google.api.Service]
     *
     * Generated from protobuf field <code>.google.protobuf.Any old_config = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setOldConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->old_config = $var;

        return $this;
    }

}

