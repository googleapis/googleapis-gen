<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1beta/guest_policies.proto

namespace Google\Cloud\Osconfig\V1beta\SoftwareRecipe\Step;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Installs a deb via dpkg.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1beta.SoftwareRecipe.Step.InstallDpkg</code>
 */
class InstallDpkg extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The id of the relevant artifact in the recipe.
     *
     * Generated from protobuf field <code>string artifact_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $artifact_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $artifact_id
     *           Required. The id of the relevant artifact in the recipe.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1Beta\GuestPolicies::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The id of the relevant artifact in the recipe.
     *
     * Generated from protobuf field <code>string artifact_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getArtifactId()
    {
        return $this->artifact_id;
    }

    /**
     * Required. The id of the relevant artifact in the recipe.
     *
     * Generated from protobuf field <code>string artifact_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactId($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(InstallDpkg::class, \Google\Cloud\Osconfig\V1beta\SoftwareRecipe_Step_InstallDpkg::class);

