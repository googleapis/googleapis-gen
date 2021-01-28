<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/notification_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `ListNotificationChannels` response.
 *
 * Generated from protobuf message <code>google.monitoring.v3.ListNotificationChannelsResponse</code>
 */
class ListNotificationChannelsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The notification channels defined for the specified project.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
     */
    private $notification_channels;
    /**
     * If not empty, indicates that there may be more results that match
     * the request. Use the value in the `page_token` field in a
     * subsequent request to fetch the next set of results. If empty,
     * all results have been returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Monitoring\V3\NotificationChannel[]|\Google\Protobuf\Internal\RepeatedField $notification_channels
     *           The notification channels defined for the specified project.
     *     @type string $next_page_token
     *           If not empty, indicates that there may be more results that match
     *           the request. Use the value in the `page_token` field in a
     *           subsequent request to fetch the next set of results. If empty,
     *           all results have been returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\NotificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The notification channels defined for the specified project.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNotificationChannels()
    {
        return $this->notification_channels;
    }

    /**
     * The notification channels defined for the specified project.
     *
     * Generated from protobuf field <code>repeated .google.monitoring.v3.NotificationChannel notification_channels = 3;</code>
     * @param \Google\Cloud\Monitoring\V3\NotificationChannel[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNotificationChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Monitoring\V3\NotificationChannel::class);
        $this->notification_channels = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there may be more results that match
     * the request. Use the value in the `page_token` field in a
     * subsequent request to fetch the next set of results. If empty,
     * all results have been returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there may be more results that match
     * the request. Use the value in the `page_token` field in a
     * subsequent request to fetch the next set of results. If empty,
     * all results have been returned.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

