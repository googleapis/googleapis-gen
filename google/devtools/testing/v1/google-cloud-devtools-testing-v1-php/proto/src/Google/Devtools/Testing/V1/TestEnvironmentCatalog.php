<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/testing/v1/test_environment_discovery.proto

namespace Google\Devtools\Testing\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A description of a test environment.
 *
 * Generated from protobuf message <code>google.devtools.testing.v1.TestEnvironmentCatalog</code>
 */
class TestEnvironmentCatalog extends \Google\Protobuf\Internal\Message
{
    protected $environment_catalog;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Devtools\Testing\V1\AndroidDeviceCatalog $android_device_catalog
     *           Supported Android devices.
     *     @type \Google\Devtools\Testing\V1\IosDeviceCatalog $ios_device_catalog
     *           Supported iOS devices.
     *     @type \Google\Devtools\Testing\V1\NetworkConfigurationCatalog $network_configuration_catalog
     *           Supported network configurations.
     *     @type \Google\Devtools\Testing\V1\ProvidedSoftwareCatalog $software_catalog
     *           The software test environment provided by TestExecutionService.
     *     @type \Google\Devtools\Testing\V1\DeviceIpBlockCatalog $device_ip_block_catalog
     *           The IP blocks used by devices in the test environment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Testing\V1\TestEnvironmentDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Supported Android devices.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.AndroidDeviceCatalog android_device_catalog = 1;</code>
     * @return \Google\Devtools\Testing\V1\AndroidDeviceCatalog|null
     */
    public function getAndroidDeviceCatalog()
    {
        return $this->readOneof(1);
    }

    public function hasAndroidDeviceCatalog()
    {
        return $this->hasOneof(1);
    }

    /**
     * Supported Android devices.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.AndroidDeviceCatalog android_device_catalog = 1;</code>
     * @param \Google\Devtools\Testing\V1\AndroidDeviceCatalog $var
     * @return $this
     */
    public function setAndroidDeviceCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\AndroidDeviceCatalog::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Supported iOS devices.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.IosDeviceCatalog ios_device_catalog = 3;</code>
     * @return \Google\Devtools\Testing\V1\IosDeviceCatalog|null
     */
    public function getIosDeviceCatalog()
    {
        return $this->readOneof(3);
    }

    public function hasIosDeviceCatalog()
    {
        return $this->hasOneof(3);
    }

    /**
     * Supported iOS devices.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.IosDeviceCatalog ios_device_catalog = 3;</code>
     * @param \Google\Devtools\Testing\V1\IosDeviceCatalog $var
     * @return $this
     */
    public function setIosDeviceCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\IosDeviceCatalog::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Supported network configurations.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.NetworkConfigurationCatalog network_configuration_catalog = 4;</code>
     * @return \Google\Devtools\Testing\V1\NetworkConfigurationCatalog|null
     */
    public function getNetworkConfigurationCatalog()
    {
        return $this->readOneof(4);
    }

    public function hasNetworkConfigurationCatalog()
    {
        return $this->hasOneof(4);
    }

    /**
     * Supported network configurations.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.NetworkConfigurationCatalog network_configuration_catalog = 4;</code>
     * @param \Google\Devtools\Testing\V1\NetworkConfigurationCatalog $var
     * @return $this
     */
    public function setNetworkConfigurationCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\NetworkConfigurationCatalog::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The software test environment provided by TestExecutionService.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.ProvidedSoftwareCatalog software_catalog = 5;</code>
     * @return \Google\Devtools\Testing\V1\ProvidedSoftwareCatalog|null
     */
    public function getSoftwareCatalog()
    {
        return $this->readOneof(5);
    }

    public function hasSoftwareCatalog()
    {
        return $this->hasOneof(5);
    }

    /**
     * The software test environment provided by TestExecutionService.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.ProvidedSoftwareCatalog software_catalog = 5;</code>
     * @param \Google\Devtools\Testing\V1\ProvidedSoftwareCatalog $var
     * @return $this
     */
    public function setSoftwareCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\ProvidedSoftwareCatalog::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The IP blocks used by devices in the test environment.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.DeviceIpBlockCatalog device_ip_block_catalog = 6;</code>
     * @return \Google\Devtools\Testing\V1\DeviceIpBlockCatalog|null
     */
    public function getDeviceIpBlockCatalog()
    {
        return $this->readOneof(6);
    }

    public function hasDeviceIpBlockCatalog()
    {
        return $this->hasOneof(6);
    }

    /**
     * The IP blocks used by devices in the test environment.
     *
     * Generated from protobuf field <code>.google.devtools.testing.v1.DeviceIpBlockCatalog device_ip_block_catalog = 6;</code>
     * @param \Google\Devtools\Testing\V1\DeviceIpBlockCatalog $var
     * @return $this
     */
    public function setDeviceIpBlockCatalog($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Testing\V1\DeviceIpBlockCatalog::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentCatalog()
    {
        return $this->whichOneof("environment_catalog");
    }

}

