<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to delete a company.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.DeleteCompanyRequest</code>
 */
class DeleteCompanyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the company to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo/companies/bar".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the company to be deleted.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     *           example, "projects/foo/tenants/bar/companies/baz".
     *           If tenant id is unspecified, the default tenant is used, for
     *           example, "projects/foo/companies/bar".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\CompanyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the company to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo/companies/bar".
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the company to be deleted.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}", for
     * example, "projects/foo/tenants/bar/companies/baz".
     * If tenant id is unspecified, the default tenant is used, for
     * example, "projects/foo/companies/bar".
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

}

