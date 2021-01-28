<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/specialist_pool_service.proto

namespace Google\Cloud\Aiplatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SpecialistPoolService.UpdateSpecialistPool][google.cloud.aiplatform.v1.SpecialistPoolService.UpdateSpecialistPool].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.UpdateSpecialistPoolRequest</code>
 */
class UpdateSpecialistPoolRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The SpecialistPool which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SpecialistPool specialist_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $specialist_pool = null;
    /**
     * Required. The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Aiplatform\V1\SpecialistPool $specialist_pool
     *           Required. The SpecialistPool which replaces the resource on the server.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\SpecialistPoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The SpecialistPool which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SpecialistPool specialist_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Aiplatform\V1\SpecialistPool
     */
    public function getSpecialistPool()
    {
        return isset($this->specialist_pool) ? $this->specialist_pool : null;
    }

    public function hasSpecialistPool()
    {
        return isset($this->specialist_pool);
    }

    public function clearSpecialistPool()
    {
        unset($this->specialist_pool);
    }

    /**
     * Required. The SpecialistPool which replaces the resource on the server.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.SpecialistPool specialist_pool = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Aiplatform\V1\SpecialistPool $var
     * @return $this
     */
    public function setSpecialistPool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1\SpecialistPool::class);
        $this->specialist_pool = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask applies to the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

