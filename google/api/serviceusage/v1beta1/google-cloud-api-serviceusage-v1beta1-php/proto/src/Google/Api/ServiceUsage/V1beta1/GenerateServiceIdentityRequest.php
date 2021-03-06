<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/serviceusage/v1beta1/serviceusage.proto

namespace Google\Api\ServiceUsage\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for generating service identity.
 *
 * Generated from protobuf message <code>google.api.serviceusage.v1beta1.GenerateServiceIdentityRequest</code>
 */
class GenerateServiceIdentityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the consumer and service to generate an identity for.
     * The `GenerateServiceIdentity` methods currently only support projects.
     * An example name would be:
     * `projects/123/services/example.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Name of the consumer and service to generate an identity for.
     *           The `GenerateServiceIdentity` methods currently only support projects.
     *           An example name would be:
     *           `projects/123/services/example.googleapis.com` where `123` is the
     *           project number.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Serviceusage\V1Beta1\Serviceusage::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the consumer and service to generate an identity for.
     * The `GenerateServiceIdentity` methods currently only support projects.
     * An example name would be:
     * `projects/123/services/example.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Name of the consumer and service to generate an identity for.
     * The `GenerateServiceIdentity` methods currently only support projects.
     * An example name would be:
     * `projects/123/services/example.googleapis.com` where `123` is the
     * project number.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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

