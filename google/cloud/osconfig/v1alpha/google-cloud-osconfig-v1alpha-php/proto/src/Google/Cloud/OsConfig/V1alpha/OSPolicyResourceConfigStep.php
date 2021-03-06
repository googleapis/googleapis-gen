<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1alpha/config_common.proto

namespace Google\Cloud\OsConfig\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Step performed by the OS Config agent for configuring an `OSPolicyResource`
 * to its desired state.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep</code>
 */
class OSPolicyResourceConfigStep extends \Google\Protobuf\Internal\Message
{
    /**
     * Configuration step type.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * Outcome of the configuration step.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Outcome outcome = 2;</code>
     */
    protected $outcome = 0;
    /**
     * An error message recorded during the execution of this step.
     * Only populated when outcome is FAILED.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     */
    protected $error_message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Configuration step type.
     *     @type int $outcome
     *           Outcome of the configuration step.
     *     @type string $error_message
     *           An error message recorded during the execution of this step.
     *           Only populated when outcome is FAILED.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1Alpha\ConfigCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Configuration step type.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Configuration step type.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1alpha\OSPolicyResourceConfigStep\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Outcome of the configuration step.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Outcome outcome = 2;</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Outcome of the configuration step.
     *
     * Generated from protobuf field <code>.google.cloud.osconfig.v1alpha.OSPolicyResourceConfigStep.Outcome outcome = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\OsConfig\V1alpha\OSPolicyResourceConfigStep\Outcome::class);
        $this->outcome = $var;

        return $this;
    }

    /**
     * An error message recorded during the execution of this step.
     * Only populated when outcome is FAILED.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * An error message recorded during the execution of this step.
     * Only populated when outcome is FAILED.
     *
     * Generated from protobuf field <code>string error_message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_message = $var;

        return $this;
    }

}

