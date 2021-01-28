<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Cloud\PubSub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A policy that specifies the conditions for resource expiration (i.e.,
 * automatic resource deletion).
 *
 * Generated from protobuf message <code>google.pubsub.v1.ExpirationPolicy</code>
 */
class ExpirationPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies the "time-to-live" duration for an associated resource. The
     * resource expires if it is not active for a period of `ttl`. The definition
     * of "activity" depends on the type of the associated resource. The minimum
     * and maximum allowed values for `ttl` depend on the type of the associated
     * resource, as well. If `ttl` is not set, the associated resource never
     * expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 1;</code>
     */
    protected $ttl = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $ttl
     *           Specifies the "time-to-live" duration for an associated resource. The
     *           resource expires if it is not active for a period of `ttl`. The definition
     *           of "activity" depends on the type of the associated resource. The minimum
     *           and maximum allowed values for `ttl` depend on the type of the associated
     *           resource, as well. If `ttl` is not set, the associated resource never
     *           expires.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies the "time-to-live" duration for an associated resource. The
     * resource expires if it is not active for a period of `ttl`. The definition
     * of "activity" depends on the type of the associated resource. The minimum
     * and maximum allowed values for `ttl` depend on the type of the associated
     * resource, as well. If `ttl` is not set, the associated resource never
     * expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getTtl()
    {
        return isset($this->ttl) ? $this->ttl : null;
    }

    public function hasTtl()
    {
        return isset($this->ttl);
    }

    public function clearTtl()
    {
        unset($this->ttl);
    }

    /**
     * Specifies the "time-to-live" duration for an associated resource. The
     * resource expires if it is not active for a period of `ttl`. The definition
     * of "activity" depends on the type of the associated resource. The minimum
     * and maximum allowed values for `ttl` depend on the type of the associated
     * resource, as well. If `ttl` is not set, the associated resource never
     * expires.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration ttl = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->ttl = $var;

        return $this;
    }

}

