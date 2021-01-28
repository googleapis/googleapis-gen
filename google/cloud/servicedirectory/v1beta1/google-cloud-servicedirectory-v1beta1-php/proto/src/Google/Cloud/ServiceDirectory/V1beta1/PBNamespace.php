<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1beta1/namespace.proto

namespace Google\Cloud\ServiceDirectory\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A container for [services][google.cloud.servicedirectory.v1beta1.Service].
 * Namespaces allow administrators to group services together and define
 * permissions for a collection of services.
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1beta1.Namespace</code>
 */
class PBNamespace extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name for the namespace in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = '';
    /**
     * Optional. Resource labels associated with this Namespace.
     * No more than 64 user labels can be associated with a given resource.  Label
     * keys and values can be no longer than 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name for the namespace in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;'.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. Resource labels associated with this Namespace.
     *           No more than 64 user labels can be associated with a given resource.  Label
     *           keys and values can be no longer than 63 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1Beta1\PBNamespace::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name for the namespace in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;'.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name for the namespace in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;'.
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
     * Optional. Resource labels associated with this Namespace.
     * No more than 64 user labels can be associated with a given resource.  Label
     * keys and values can be no longer than 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. Resource labels associated with this Namespace.
     * No more than 64 user labels can be associated with a given resource.  Label
     * keys and values can be no longer than 63 characters.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

