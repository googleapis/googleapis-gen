<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p2beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p2Beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * List asset feeds request.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p2beta1.ListFeedsRequest</code>
 */
class ListFeedsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent project/folder/organization whose feeds are to be
     * listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent project/folder/organization whose feeds are to be
     *           listed. It can only be using project/folder/organization number (such as
     *           "folders/12345")", or a project ID (such as "projects/my-project-id").
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P2Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent project/folder/organization whose feeds are to be
     * listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent project/folder/organization whose feeds are to be
     * listed. It can only be using project/folder/organization number (such as
     * "folders/12345")", or a project ID (such as "projects/my-project-id").
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

}

