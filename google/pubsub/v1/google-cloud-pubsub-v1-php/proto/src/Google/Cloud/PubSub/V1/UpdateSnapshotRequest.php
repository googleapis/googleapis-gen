<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the UpdateSnapshot method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.UpdateSnapshotRequest</code>
 */
class UpdateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The updated snapshot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $snapshot = null;
    /**
     * Required. Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
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
     *     @type \Google\Cloud\PubSub\V1\Snapshot $snapshot
     *           Required. The updated snapshot object.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Indicates which fields in the provided snapshot to update.
     *           Must be specified and non-empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The updated snapshot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\PubSub\V1\Snapshot
     */
    public function getSnapshot()
    {
        return isset($this->snapshot) ? $this->snapshot : null;
    }

    public function hasSnapshot()
    {
        return isset($this->snapshot);
    }

    public function clearSnapshot()
    {
        unset($this->snapshot);
    }

    /**
     * Required. The updated snapshot object.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.Snapshot snapshot = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\PubSub\V1\Snapshot $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PubSub\V1\Snapshot::class);
        $this->snapshot = $var;

        return $this;
    }

    /**
     * Required. Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
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
     * Required. Indicates which fields in the provided snapshot to update.
     * Must be specified and non-empty.
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

