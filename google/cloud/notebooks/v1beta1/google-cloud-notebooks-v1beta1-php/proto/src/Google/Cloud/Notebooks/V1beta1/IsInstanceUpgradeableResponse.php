<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/notebooks/v1beta1/service.proto

namespace Google\Cloud\Notebooks\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for checking if a notebook instance is upgradeable.
 *
 * Generated from protobuf message <code>google.cloud.notebooks.v1beta1.IsInstanceUpgradeableResponse</code>
 */
class IsInstanceUpgradeableResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * If an instance is upgradeable.
     *
     * Generated from protobuf field <code>bool upgradeable = 1;</code>
     */
    protected $upgradeable = false;
    /**
     * The version this instance will be upgraded to if calling the upgrade
     * endpoint. This field will only be populated if field upgradeable is true.
     *
     * Generated from protobuf field <code>string upgrade_version = 2;</code>
     */
    protected $upgrade_version = '';
    /**
     * Additional information about upgrade.
     *
     * Generated from protobuf field <code>string upgrade_info = 3;</code>
     */
    protected $upgrade_info = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $upgradeable
     *           If an instance is upgradeable.
     *     @type string $upgrade_version
     *           The version this instance will be upgraded to if calling the upgrade
     *           endpoint. This field will only be populated if field upgradeable is true.
     *     @type string $upgrade_info
     *           Additional information about upgrade.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Notebooks\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * If an instance is upgradeable.
     *
     * Generated from protobuf field <code>bool upgradeable = 1;</code>
     * @return bool
     */
    public function getUpgradeable()
    {
        return $this->upgradeable;
    }

    /**
     * If an instance is upgradeable.
     *
     * Generated from protobuf field <code>bool upgradeable = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpgradeable($var)
    {
        GPBUtil::checkBool($var);
        $this->upgradeable = $var;

        return $this;
    }

    /**
     * The version this instance will be upgraded to if calling the upgrade
     * endpoint. This field will only be populated if field upgradeable is true.
     *
     * Generated from protobuf field <code>string upgrade_version = 2;</code>
     * @return string
     */
    public function getUpgradeVersion()
    {
        return $this->upgrade_version;
    }

    /**
     * The version this instance will be upgraded to if calling the upgrade
     * endpoint. This field will only be populated if field upgradeable is true.
     *
     * Generated from protobuf field <code>string upgrade_version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUpgradeVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->upgrade_version = $var;

        return $this;
    }

    /**
     * Additional information about upgrade.
     *
     * Generated from protobuf field <code>string upgrade_info = 3;</code>
     * @return string
     */
    public function getUpgradeInfo()
    {
        return $this->upgrade_info;
    }

    /**
     * Additional information about upgrade.
     *
     * Generated from protobuf field <code>string upgrade_info = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUpgradeInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->upgrade_info = $var;

        return $this;
    }

}

