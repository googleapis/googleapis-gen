<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1beta1/membership.proto

namespace Google\Cloud\GkeHub\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response of exclusivity artifacts validation result status.
 *
 * Generated from protobuf message <code>google.cloud.gkehub.v1beta1.ValidateExclusivityResponse</code>
 */
class ValidateExclusivityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The validation result.
     * * `OK` means that exclusivity is validated, assuming the manifest produced
     *    by GenerateExclusivityManifest is successfully applied.
     * * `ALREADY_EXISTS` means that the Membership CRD is already owned by
     *    another Hub. See `status.message` for more information.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $status
     *           The validation result.
     *           * `OK` means that exclusivity is validated, assuming the manifest produced
     *              by GenerateExclusivityManifest is successfully applied.
     *           * `ALREADY_EXISTS` means that the Membership CRD is already owned by
     *              another Hub. See `status.message` for more information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkehub\V1Beta1\Membership::initOnce();
        parent::__construct($data);
    }

    /**
     * The validation result.
     * * `OK` means that exclusivity is validated, assuming the manifest produced
     *    by GenerateExclusivityManifest is successfully applied.
     * * `ALREADY_EXISTS` means that the Membership CRD is already owned by
     *    another Hub. See `status.message` for more information.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @return \Google\Rpc\Status
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * The validation result.
     * * `OK` means that exclusivity is validated, assuming the manifest produced
     *    by GenerateExclusivityManifest is successfully applied.
     * * `ALREADY_EXISTS` means that the Membership CRD is already owned by
     *    another Hub. See `status.message` for more information.
     *
     * Generated from protobuf field <code>.google.rpc.Status status = 1;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->status = $var;

        return $this;
    }

}

