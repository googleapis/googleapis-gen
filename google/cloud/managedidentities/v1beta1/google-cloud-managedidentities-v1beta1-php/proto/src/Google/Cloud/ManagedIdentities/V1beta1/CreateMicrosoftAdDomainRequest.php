<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/managedidentities/v1beta1/managed_identities_service.proto

namespace Google\Cloud\ManagedIdentities\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CreateMicrosoftAdDomain][google.cloud.managedidentities.v1beta1.CreateMicrosoftAdDomain]
 *
 * Generated from protobuf message <code>google.cloud.managedidentities.v1beta1.CreateMicrosoftAdDomainRequest</code>
 */
class CreateMicrosoftAdDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * A domain name, e.g. mydomain.myorg.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2;</code>
     */
    protected $domain_name = '';
    /**
     * A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Domain domain = 3;</code>
     */
    protected $domain = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The resource project name and location using the form:
     *           `projects/{project_id}/locations/global`
     *     @type string $domain_name
     *           A domain name, e.g. mydomain.myorg.com, with the following restrictions:
     *            * Must contain only lowercase letters, numbers, periods and hyphens.
     *            * Must start with a letter.
     *            * Must contain between 2-64 characters.
     *            * Must end with a number or a letter.
     *            * Must not start with period.
     *            * First segement length (mydomain form example above) shouldn't exceed
     *              15 chars.
     *            * The last segment cannot be fully numeric.
     *            * Must be unique within the customer project.
     *     @type \Google\Cloud\ManagedIdentities\V1beta1\Domain $domain
     *           A Managed Identity domain resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Managedidentities\V1Beta1\ManagedIdentitiesService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The resource project name and location using the form:
     * `projects/{project_id}/locations/global`
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

    /**
     * A domain name, e.g. mydomain.myorg.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * A domain name, e.g. mydomain.myorg.com, with the following restrictions:
     *  * Must contain only lowercase letters, numbers, periods and hyphens.
     *  * Must start with a letter.
     *  * Must contain between 2-64 characters.
     *  * Must end with a number or a letter.
     *  * Must not start with period.
     *  * First segement length (mydomain form example above) shouldn't exceed
     *    15 chars.
     *  * The last segment cannot be fully numeric.
     *  * Must be unique within the customer project.
     *
     * Generated from protobuf field <code>string domain_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Domain domain = 3;</code>
     * @return \Google\Cloud\ManagedIdentities\V1beta1\Domain
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : null;
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * A Managed Identity domain resource.
     *
     * Generated from protobuf field <code>.google.cloud.managedidentities.v1beta1.Domain domain = 3;</code>
     * @param \Google\Cloud\ManagedIdentities\V1beta1\Domain $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ManagedIdentities\V1beta1\Domain::class);
        $this->domain = $var;

        return $this;
    }

}

