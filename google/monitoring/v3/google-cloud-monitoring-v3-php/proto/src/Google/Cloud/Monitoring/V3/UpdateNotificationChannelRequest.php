<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `UpdateNotificationChannel` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UpdateNotificationChannelRequest</code>
 */
class UpdateNotificationChannelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;
    /**
     * Required. A description of the changes to be applied to the specified
     * notification channel. The description must provide a definition for
     * fields to be updated; the names of these fields should also be
     * included in the `update_mask`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.NotificationChannel notification_channel = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $notification_channel = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The fields to update.
     *     @type \Google\Cloud\Monitoring\V3\NotificationChannel $notification_channel
     *           Required. A description of the changes to be applied to the specified
     *           notification channel. The description must provide a definition for
     *           fields to be updated; the names of these fields should also be
     *           included in the `update_mask`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
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
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. A description of the changes to be applied to the specified
     * notification channel. The description must provide a definition for
     * fields to be updated; the names of these fields should also be
     * included in the `update_mask`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.NotificationChannel notification_channel = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Monitoring\V3\NotificationChannel
     */
    public function getNotificationChannel()
    {
        return isset($this->notification_channel) ? $this->notification_channel : null;
    }

    public function hasNotificationChannel()
    {
        return isset($this->notification_channel);
    }

    public function clearNotificationChannel()
    {
        unset($this->notification_channel);
    }

    /**
     * Required. A description of the changes to be applied to the specified
     * notification channel. The description must provide a definition for
     * fields to be updated; the names of these fields should also be
     * included in the `update_mask`.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.NotificationChannel notification_channel = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Monitoring\V3\NotificationChannel $var
     * @return $this
     */
    public function setNotificationChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\NotificationChannel::class);
        $this->notification_channel = $var;

        return $this;
    }

}

