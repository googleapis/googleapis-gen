<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/enterprise/sdm/v1/smart_device_management_service.proto

namespace Google\Home\Enterprise\Sdm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for SmartDeviceManagementService.GetDevice
 *
 * Generated from protobuf message <code>google.home.enterprise.sdm.v1.GetDeviceRequest</code>
 */
class GetDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the device requested. For example:
     * "enterprises/XYZ/devices/123"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the device requested. For example:
     *           "enterprises/XYZ/devices/123"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Enterprise\Sdm\V1\SmartDeviceManagementService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the device requested. For example:
     * "enterprises/XYZ/devices/123"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the device requested. For example:
     * "enterprises/XYZ/devices/123"
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

