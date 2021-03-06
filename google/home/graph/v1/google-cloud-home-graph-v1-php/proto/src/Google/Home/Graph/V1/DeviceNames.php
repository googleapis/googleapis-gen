<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/graph/v1/device.proto

namespace Google\Home\Graph\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifiers used to describe the device.
 *
 * Generated from protobuf message <code>google.home.graph.v1.DeviceNames</code>
 */
class DeviceNames extends \Google\Protobuf\Internal\Message
{
    /**
     * Primary name of the device, generally provided by the user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Additional names provided by the user for the device.
     *
     * Generated from protobuf field <code>repeated string nicknames = 2;</code>
     */
    private $nicknames;
    /**
     * List of names provided by the manufacturer rather than the user, such as
     * serial numbers, SKUs, etc.
     *
     * Generated from protobuf field <code>repeated string default_names = 3;</code>
     */
    private $default_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Primary name of the device, generally provided by the user.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $nicknames
     *           Additional names provided by the user for the device.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $default_names
     *           List of names provided by the manufacturer rather than the user, such as
     *           serial numbers, SKUs, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Graph\V1\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Primary name of the device, generally provided by the user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Primary name of the device, generally provided by the user.
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

    /**
     * Additional names provided by the user for the device.
     *
     * Generated from protobuf field <code>repeated string nicknames = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNicknames()
    {
        return $this->nicknames;
    }

    /**
     * Additional names provided by the user for the device.
     *
     * Generated from protobuf field <code>repeated string nicknames = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNicknames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->nicknames = $arr;

        return $this;
    }

    /**
     * List of names provided by the manufacturer rather than the user, such as
     * serial numbers, SKUs, etc.
     *
     * Generated from protobuf field <code>repeated string default_names = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDefaultNames()
    {
        return $this->default_names;
    }

    /**
     * List of names provided by the manufacturer rather than the user, such as
     * serial numbers, SKUs, etc.
     *
     * Generated from protobuf field <code>repeated string default_names = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDefaultNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->default_names = $arr;

        return $this;
    }

}

