<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for `DomainMappings.UpdateDomainMapping`.
 *
 * Generated from protobuf message <code>google.appengine.v1.UpdateDomainMappingRequest</code>
 */
class UpdateDomainMappingRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource to update. Example:
     * `apps/myapp/domainMappings/example.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * A domain mapping containing the updated resource. Only fields set
     * in the field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DomainMapping domain_mapping = 2;</code>
     */
    protected $domain_mapping = null;
    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the resource to update. Example:
     *           `apps/myapp/domainMappings/example.com`.
     *     @type \Google\Cloud\AppEngine\V1\DomainMapping $domain_mapping
     *           A domain mapping containing the updated resource. Only fields set
     *           in the field mask will be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Standard field mask for the set of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the resource to update. Example:
     * `apps/myapp/domainMappings/example.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource to update. Example:
     * `apps/myapp/domainMappings/example.com`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * A domain mapping containing the updated resource. Only fields set
     * in the field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DomainMapping domain_mapping = 2;</code>
     * @return \Google\Cloud\AppEngine\V1\DomainMapping|null
     */
    public function getDomainMapping()
    {
        return isset($this->domain_mapping) ? $this->domain_mapping : null;
    }

    public function hasDomainMapping()
    {
        return isset($this->domain_mapping);
    }

    public function clearDomainMapping()
    {
        unset($this->domain_mapping);
    }

    /**
     * A domain mapping containing the updated resource. Only fields set
     * in the field mask will be updated.
     *
     * Generated from protobuf field <code>.google.appengine.v1.DomainMapping domain_mapping = 2;</code>
     * @param \Google\Cloud\AppEngine\V1\DomainMapping $var
     * @return $this
     */
    public function setDomainMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AppEngine\V1\DomainMapping::class);
        $this->domain_mapping = $var;

        return $this;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
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
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
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

