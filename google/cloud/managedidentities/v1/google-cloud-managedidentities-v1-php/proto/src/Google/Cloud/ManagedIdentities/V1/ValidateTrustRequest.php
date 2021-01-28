<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ValidateTrust][google.cloud.managedidentities.v1.ValidateTrust]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1.ValidateTrustRequest</code>
 */
class ValidateTrustRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The domain trust to validate trust state for.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $trust = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource domain name, project name, and location using the form:
     *           `projects/{project_id}/locations/global/domains/{domain_name}`
     *     @type \Google\Cloud\ManagedIdentities\V1\Trust $trust
     *           Required. The domain trust to validate trust state for.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource domain name, project name, and location using the form:
     * `projects/{project_id}/locations/global/domains/{domain_name}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The domain trust to validate trust state for.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ManagedIdentities\V1\Trust
     */
    public function getTrust()
    {
        return isset($this->trust) ? $this->trust : null;
    }

    public function hasTrust()
    {
        return isset($this->trust);
    }

    public function clearTrust()
    {
        unset($this->trust);
    }

    /**
     * Required. The domain trust to validate trust state for.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1.Trust trust = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ManagedIdentities\V1\Trust $var
     * @return $this
     */
    public function setTrust($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1\Trust::class);
        $this->trust = $var;

        return $this;
    }

}

