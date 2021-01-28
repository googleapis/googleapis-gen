<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/chromeos/moblab/v1beta1/resources.proto

namespace Google\Chromeos\Moblab\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a build for the given build target, model, milestone
 * and build version.
 * NEXT_TAG: 4
 *
 * Generated from protobuf message <code>google.chromeos.moblab.v1beta1.Build</code>
 */
class Build extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the build.
     * Format: buildTargets/{build_target}/models/{model}/builds/{build}
     * Example: buildTargets/octopus/models/bobba/builds/1234.0.0
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The milestone that owns the build.
     * Format: milestones/{milestone}
     *
     * Generated from protobuf field <code>string milestone = 2 [(.google.api.resource_reference) = {</code>
     */
    protected $milestone = '';
    /**
     * The build version of the build, e.g. 1234.0.0.
     *
     * Generated from protobuf field <code>string build_version = 3;</code>
     */
    protected $build_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the build.
     *           Format: buildTargets/{build_target}/models/{model}/builds/{build}
     *           Example: buildTargets/octopus/models/bobba/builds/1234.0.0
     *     @type string $milestone
     *           The milestone that owns the build.
     *           Format: milestones/{milestone}
     *     @type string $build_version
     *           The build version of the build, e.g. 1234.0.0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Chromeos\Moblab\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the build.
     * Format: buildTargets/{build_target}/models/{model}/builds/{build}
     * Example: buildTargets/octopus/models/bobba/builds/1234.0.0
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the build.
     * Format: buildTargets/{build_target}/models/{model}/builds/{build}
     * Example: buildTargets/octopus/models/bobba/builds/1234.0.0
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
     * The milestone that owns the build.
     * Format: milestones/{milestone}
     *
     * Generated from protobuf field <code>string milestone = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * The milestone that owns the build.
     * Format: milestones/{milestone}
     *
     * Generated from protobuf field <code>string milestone = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMilestone($var)
    {
        GPBUtil::checkString($var, True);
        $this->milestone = $var;

        return $this;
    }

    /**
     * The build version of the build, e.g. 1234.0.0.
     *
     * Generated from protobuf field <code>string build_version = 3;</code>
     * @return string
     */
    public function getBuildVersion()
    {
        return $this->build_version;
    }

    /**
     * The build version of the build, e.g. 1234.0.0.
     *
     * Generated from protobuf field <code>string build_version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setBuildVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->build_version = $var;

        return $this;
    }

}

