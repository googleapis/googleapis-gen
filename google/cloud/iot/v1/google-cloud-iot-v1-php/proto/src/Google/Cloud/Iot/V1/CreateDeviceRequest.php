<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/device_manager.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for `CreateDevice`.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.CreateDeviceRequest</code>
 */
class CreateDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the device registry where this device should be created.
     * For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The device registration details. The field `name` must be empty. The server
     * generates `name` from the device registry `id` and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.Device device = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $device = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the device registry where this device should be created.
     *           For example,
     *           `projects/example-project/locations/us-central1/registries/my-registry`.
     *     @type \Google\Cloud\Iot\V1\Device $device
     *           Required. The device registration details. The field `name` must be empty. The server
     *           generates `name` from the device registry `id` and the
     *           `parent` field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\DeviceManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the device registry where this device should be created.
     * For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the device registry where this device should be created.
     * For example,
     * `projects/example-project/locations/us-central1/registries/my-registry`.
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
     * Required. The device registration details. The field `name` must be empty. The server
     * generates `name` from the device registry `id` and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.Device device = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iot\V1\Device
     */
    public function getDevice()
    {
        return isset($this->device) ? $this->device : null;
    }

    public function hasDevice()
    {
        return isset($this->device);
    }

    public function clearDevice()
    {
        unset($this->device);
    }

    /**
     * Required. The device registration details. The field `name` must be empty. The server
     * generates `name` from the device registry `id` and the
     * `parent` field.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.Device device = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iot\V1\Device $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iot\V1\Device::class);
        $this->device = $var;

        return $this;
    }

}

