<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/remoteworkers/v1test2/worker.proto

namespace Google\Cloud\Remoteworkers\V1test2\Worker;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A global property; see the `properties` field for more information.
 *
 * Generated from protobuf message <code>google.devtools.remoteworkers.v1test2.Worker.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * For general information on keys, see the documentation to `Worker`.
     * The current set of standard keys are:
     * * pool: different workers can be reserved for different purposes. For
     * example, an admin might want to segregate long-running integration tests
     * from short-running unit tests, so unit tests will always get some
     * throughput. To support this, the server can assign different values for
     * `pool` (such as "itest" and "utest") to different workers, and then have
     * jobs request workers from those pools.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    protected $key = '';
    /**
     * The property's value.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     */
    protected $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key
     *           For general information on keys, see the documentation to `Worker`.
     *           The current set of standard keys are:
     *           * pool: different workers can be reserved for different purposes. For
     *           example, an admin might want to segregate long-running integration tests
     *           from short-running unit tests, so unit tests will always get some
     *           throughput. To support this, the server can assign different values for
     *           `pool` (such as "itest" and "utest") to different workers, and then have
     *           jobs request workers from those pools.
     *     @type string $value
     *           The property's value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Remoteworkers\V1Test2\Worker::initOnce();
        parent::__construct($data);
    }

    /**
     * For general information on keys, see the documentation to `Worker`.
     * The current set of standard keys are:
     * * pool: different workers can be reserved for different purposes. For
     * example, an admin might want to segregate long-running integration tests
     * from short-running unit tests, so unit tests will always get some
     * throughput. To support this, the server can assign different values for
     * `pool` (such as "itest" and "utest") to different workers, and then have
     * jobs request workers from those pools.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * For general information on keys, see the documentation to `Worker`.
     * The current set of standard keys are:
     * * pool: different workers can be reserved for different purposes. For
     * example, an admin might want to segregate long-running integration tests
     * from short-running unit tests, so unit tests will always get some
     * throughput. To support this, the server can assign different values for
     * `pool` (such as "itest" and "utest") to different workers, and then have
     * jobs request workers from those pools.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * The property's value.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The property's value.
     *
     * Generated from protobuf field <code>string value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Property::class, \Google\Cloud\Remoteworkers\V1test2\Worker_Property::class);

