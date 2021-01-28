<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for SubmitConfigSource method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.SubmitConfigSourceResponse</code>
 */
class SubmitConfigSourceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The generated service configuration.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 1;</code>
     */
    protected $service_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Service $service_config
     *           The generated service configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct($data);
    }

    /**
     * The generated service configuration.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 1;</code>
     * @return \Google\Api\Service
     */
    public function getServiceConfig()
    {
        return isset($this->service_config) ? $this->service_config : null;
    }

    public function hasServiceConfig()
    {
        return isset($this->service_config);
    }

    public function clearServiceConfig()
    {
        unset($this->service_config);
    }

    /**
     * The generated service configuration.
     *
     * Generated from protobuf field <code>.google.api.Service service_config = 1;</code>
     * @param \Google\Api\Service $var
     * @return $this
     */
    public function setServiceConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Service::class);
        $this->service_config = $var;

        return $this;
    }

}

