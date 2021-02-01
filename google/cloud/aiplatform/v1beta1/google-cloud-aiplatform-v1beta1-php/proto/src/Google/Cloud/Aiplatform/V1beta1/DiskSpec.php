<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/machine_resources.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the spec of disk options.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.DiskSpec</code>
 */
class DiskSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the boot disk (default is "pd-ssd").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive) or
     * "pd-standard" (Persistent Disk Hard Disk Drive).
     *
     * Generated from protobuf field <code>string boot_disk_type = 1;</code>
     */
    protected $boot_disk_type = '';
    /**
     * Size in GB of the boot disk (default is 100GB).
     *
     * Generated from protobuf field <code>int32 boot_disk_size_gb = 2;</code>
     */
    protected $boot_disk_size_gb = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $boot_disk_type
     *           Type of the boot disk (default is "pd-ssd").
     *           Valid values: "pd-ssd" (Persistent Disk Solid State Drive) or
     *           "pd-standard" (Persistent Disk Hard Disk Drive).
     *     @type int $boot_disk_size_gb
     *           Size in GB of the boot disk (default is 100GB).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\MachineResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the boot disk (default is "pd-ssd").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive) or
     * "pd-standard" (Persistent Disk Hard Disk Drive).
     *
     * Generated from protobuf field <code>string boot_disk_type = 1;</code>
     * @return string
     */
    public function getBootDiskType()
    {
        return $this->boot_disk_type;
    }

    /**
     * Type of the boot disk (default is "pd-ssd").
     * Valid values: "pd-ssd" (Persistent Disk Solid State Drive) or
     * "pd-standard" (Persistent Disk Hard Disk Drive).
     *
     * Generated from protobuf field <code>string boot_disk_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBootDiskType($var)
    {
        GPBUtil::checkString($var, True);
        $this->boot_disk_type = $var;

        return $this;
    }

    /**
     * Size in GB of the boot disk (default is 100GB).
     *
     * Generated from protobuf field <code>int32 boot_disk_size_gb = 2;</code>
     * @return int
     */
    public function getBootDiskSizeGb()
    {
        return $this->boot_disk_size_gb;
    }

    /**
     * Size in GB of the boot disk (default is 100GB).
     *
     * Generated from protobuf field <code>int32 boot_disk_size_gb = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setBootDiskSizeGb($var)
    {
        GPBUtil::checkInt32($var);
        $this->boot_disk_size_gb = $var;

        return $this;
    }

}

