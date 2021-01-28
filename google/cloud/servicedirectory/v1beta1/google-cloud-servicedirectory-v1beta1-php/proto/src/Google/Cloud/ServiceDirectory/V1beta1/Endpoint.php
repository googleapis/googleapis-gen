<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/endpoint.proto

namespace Google\Cloud\ServiceDirectory\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual endpoint that provides a
 * [service][google.cloud.servicedirectory.v1beta1.Service]. The service must
 * already exist to create an endpoint.
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1beta1.Endpoint</code>
 */
class Endpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name for the endpoint in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $address = '';
    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $port = 0;
    /**
     * Optional. Metadata for the endpoint. This data can be consumed by service
     * clients.  The entire metadata dictionary may contain up to 512 characters,
     * spread accoss all key-value pairs. Metadata that goes beyond any these
     * limits will be rejected.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name for the endpoint in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;'.
     *     @type string $address
     *           Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     *           addresses like:
     *             "8.8.8"
     *             "8.8.8.8:53"
     *             "test:bad:address"
     *             "[::1]"
     *             "[::1]:8080"
     *           Limited to 45 characters.
     *     @type int $port
     *           Optional. Service Directory will reject values outside of [0, 65535].
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Optional. Metadata for the endpoint. This data can be consumed by service
     *           clients.  The entire metadata dictionary may contain up to 512 characters,
     *           spread accoss all key-value pairs. Metadata that goes beyond any these
     *           limits will be rejected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\Endpoint::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name for the endpoint in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name for the endpoint in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;&#47;endpoints/&#42;'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Optional. An IPv4 or IPv6 address. Service Directory will reject bad
     * addresses like:
     *   "8.8.8"
     *   "8.8.8.8:53"
     *   "test:bad:address"
     *   "[::1]"
     *   "[::1]:8080"
     * Limited to 45 characters.
     *
     * Generated from protobuf field <code>string address = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Optional. Service Directory will reject values outside of [0, 65535].
     *
     * Generated from protobuf field <code>int32 port = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Optional. Metadata for the endpoint. This data can be consumed by service
     * clients.  The entire metadata dictionary may contain up to 512 characters,
     * spread accoss all key-value pairs. Metadata that goes beyond any these
     * limits will be rejected.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Optional. Metadata for the endpoint. This data can be consumed by service
     * clients.  The entire metadata dictionary may contain up to 512 characters,
     * spread accoss all key-value pairs. Metadata that goes beyond any these
     * limits will be rejected.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

}

