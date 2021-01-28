<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/streetview/publish/v1/rpcmessages.proto

namespace Google\Streetview\Publish\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update the metadata of photos.
 * Updating the pixels of photos is not supported.
 *
 * Generated from protobuf message <code>google.streetview.publish.v1.BatchUpdatePhotosRequest</code>
 */
class BatchUpdatePhotosRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. List of
     * [UpdatePhotoRequests][google.streetview.publish.v1.UpdatePhotoRequest].
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.UpdatePhotoRequest update_photo_requests = 1;</code>
     */
    private $update_photo_requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Streetview\Publish\V1\UpdatePhotoRequest[]|\Google\Protobuf\Internal\RepeatedField $update_photo_requests
     *           Required. List of
     *           [UpdatePhotoRequests][google.streetview.publish.v1.UpdatePhotoRequest].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Streetview\Publish\V1\Rpcmessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. List of
     * [UpdatePhotoRequests][google.streetview.publish.v1.UpdatePhotoRequest].
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.UpdatePhotoRequest update_photo_requests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUpdatePhotoRequests()
    {
        return $this->update_photo_requests;
    }

    /**
     * Required. List of
     * [UpdatePhotoRequests][google.streetview.publish.v1.UpdatePhotoRequest].
     *
     * Generated from protobuf field <code>repeated .google.streetview.publish.v1.UpdatePhotoRequest update_photo_requests = 1;</code>
     * @param \Google\Streetview\Publish\V1\UpdatePhotoRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUpdatePhotoRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Streetview\Publish\V1\UpdatePhotoRequest::class);
        $this->update_photo_requests = $arr;

        return $this;
    }

}

