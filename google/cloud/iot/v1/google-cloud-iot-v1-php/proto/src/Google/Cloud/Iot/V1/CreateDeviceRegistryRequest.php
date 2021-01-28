<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `CreateDeviceRegistry`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.CreateDeviceRegistryRequest</code>
 */
class CreateDeviceRegistryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and cloud region where this device registry must be created.
     * For example, `projects/example-project/locations/us-central1`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The device registry. The field `name` must be empty. The server will
     * generate that field from the device registry `id` provided and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.DeviceRegistry device_registry = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $device_registry = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project and cloud region where this device registry must be created.
     *           For example, `projects/example-project/locations/us-central1`.
     *     @type \Google\Cloud\Iot\V1\DeviceRegistry $device_registry
     *           Required. The device registry. The field `name` must be empty. The server will
     *           generate that field from the device registry `id` provided and the
     *           `parent` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project and cloud region where this device registry must be created.
     * For example, `projects/example-project/locations/us-central1`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and cloud region where this device registry must be created.
     * For example, `projects/example-project/locations/us-central1`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The device registry. The field `name` must be empty. The server will
     * generate that field from the device registry `id` provided and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.DeviceRegistry device_registry = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iot\V1\DeviceRegistry
     */
    public function getDeviceRegistry()
    {
        return isset($this->device_registry) ? $this->device_registry : null;
    }

    public function hasDeviceRegistry()
    {
        return isset($this->device_registry);
    }

    public function clearDeviceRegistry()
    {
        unset($this->device_registry);
    }

    /**
     * Required. The device registry. The field `name` must be empty. The server will
     * generate that field from the device registry `id` provided and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.DeviceRegistry device_registry = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iot\V1\DeviceRegistry $var
     * @return $this
     */
    public function setDeviceRegistry($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iot\V1\DeviceRegistry::class);
        $this->device_registry = $var;

        return $this;
    }

}

