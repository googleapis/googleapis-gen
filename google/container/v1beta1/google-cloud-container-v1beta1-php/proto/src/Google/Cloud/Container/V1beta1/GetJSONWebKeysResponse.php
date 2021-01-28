<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * GetJSONWebKeysResponse is a valid JSON Web Key Set as specififed in rfc 7517
 *
 * Generated from protobuf message <code>google.container.v1beta1.GetJSONWebKeysResponse</code>
 */
class GetJSONWebKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The public component of the keys used by the cluster to sign token
     * requests.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.Jwk keys = 1;</code>
     */
    private $keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Container\V1beta1\Jwk[]|\Google\Protobuf\Internal\RepeatedField $keys
     *           The public component of the keys used by the cluster to sign token
     *           requests.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The public component of the keys used by the cluster to sign token
     * requests.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.Jwk keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * The public component of the keys used by the cluster to sign token
     * requests.
     *
     * Generated from protobuf field <code>repeated .google.container.v1beta1.Jwk keys = 1;</code>
     * @param \Google\Cloud\Container\V1beta1\Jwk[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Container\V1beta1\Jwk::class);
        $this->keys = $arr;

        return $this;
    }

}

