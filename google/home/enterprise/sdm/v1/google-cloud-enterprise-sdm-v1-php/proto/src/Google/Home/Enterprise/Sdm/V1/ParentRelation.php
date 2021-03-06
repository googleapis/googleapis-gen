<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/home/enterprise/sdm/v1/device.proto

namespace Google\Home\Enterprise\Sdm\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents device relationships, for instance, structure/room to which the
 * device is assigned to. For now this is only filled in the enterprise flow.
 *
 * Generated from protobuf message <code>google.home.enterprise.sdm.v1.ParentRelation</code>
 */
class ParentRelation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the relation -- e.g., structure/room where the
     * device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
     * "enterprises/XYZ/structures/ABC/rooms/123"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $parent = '';
    /**
     * Output only. The custom name of the relation -- e.g., structure/room where
     * the device is assigned to.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Output only. The name of the relation -- e.g., structure/room where the
     *           device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
     *           "enterprises/XYZ/structures/ABC/rooms/123"
     *     @type string $display_name
     *           Output only. The custom name of the relation -- e.g., structure/room where
     *           the device is assigned to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Home\Enterprise\Sdm\V1\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the relation -- e.g., structure/room where the
     * device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
     * "enterprises/XYZ/structures/ABC/rooms/123"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Output only. The name of the relation -- e.g., structure/room where the
     * device is assigned to. For example: "enterprises/XYZ/structures/ABC" or
     * "enterprises/XYZ/structures/ABC/rooms/123"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The custom name of the relation -- e.g., structure/room where
     * the device is assigned to.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The custom name of the relation -- e.g., structure/room where
     * the device is assigned to.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

