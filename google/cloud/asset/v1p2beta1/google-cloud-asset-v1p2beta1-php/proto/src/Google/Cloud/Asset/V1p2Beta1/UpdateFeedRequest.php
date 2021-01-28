<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p2beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p2Beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Update asset feed request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p2beta1.UpdateFeedRequest</code>
 */
class UpdateFeedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new values of feed details. It must match an existing feed and the
     * field `name` must be in the format of:
     * projects/project_number/feeds/feed_id or
     * folders/folder_number/feeds/feed_id or
     * organizations/organization_number/feeds/feed_id.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p2beta1.Feed feed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $feed = null;
    /**
     * Required. Only updates the `feed` fields indicated by this mask.
     * The field mask must not be empty, and it must not contain fields that
     * are immutable or only set by the server.
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
     *     @type \Google\Cloud\Asset\V1p2Beta1\Feed $feed
     *           Required. The new values of feed details. It must match an existing feed and the
     *           field `name` must be in the format of:
     *           projects/project_number/feeds/feed_id or
     *           folders/folder_number/feeds/feed_id or
     *           organizations/organization_number/feeds/feed_id.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Only updates the `feed` fields indicated by this mask.
     *           The field mask must not be empty, and it must not contain fields that
     *           are immutable or only set by the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P2Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new values of feed details. It must match an existing feed and the
     * field `name` must be in the format of:
     * projects/project_number/feeds/feed_id or
     * folders/folder_number/feeds/feed_id or
     * organizations/organization_number/feeds/feed_id.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p2beta1.Feed feed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1p2Beta1\Feed
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : null;
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Required. The new values of feed details. It must match an existing feed and the
     * field `name` must be in the format of:
     * projects/project_number/feeds/feed_id or
     * folders/folder_number/feeds/feed_id or
     * organizations/organization_number/feeds/feed_id.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p2beta1.Feed feed = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1p2Beta1\Feed $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1p2Beta1\Feed::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Required. Only updates the `feed` fields indicated by this mask.
     * The field mask must not be empty, and it must not contain fields that
     * are immutable or only set by the server.
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
     * Required. Only updates the `feed` fields indicated by this mask.
     * The field mask must not be empty, and it must not contain fields that
     * are immutable or only set by the server.
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

