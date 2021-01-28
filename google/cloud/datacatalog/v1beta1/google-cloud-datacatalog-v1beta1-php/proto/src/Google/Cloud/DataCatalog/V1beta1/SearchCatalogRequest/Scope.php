<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1beta1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1beta1\SearchCatalogRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The criteria that select the subspace used for query matching.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1beta1.SearchCatalogRequest.Scope</code>
 */
class Scope extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     */
    private $include_org_ids;
    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     */
    private $include_project_ids;
    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     */
    protected $include_gcp_public_datasets = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_org_ids
     *           The list of organization IDs to search within. To find your organization
     *           ID, follow instructions in
     *           https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_project_ids
     *           The list of project IDs to search within. To learn more about the
     *           distinction between project names/IDs/numbers, go to
     *           https://cloud.google.com/docs/overview/#projects.
     *     @type bool $include_gcp_public_datasets
     *           If `true`, include Google Cloud Platform (GCP) public datasets in the
     *           search results. Info on GCP public datasets is available at
     *           https://cloud.google.com/public-datasets/. By default, GCP public
     *           datasets are excluded.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1Beta1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeOrgIds()
    {
        return $this->include_org_ids;
    }

    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeOrgIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_org_ids = $arr;

        return $this;
    }

    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeProjectIds()
    {
        return $this->include_project_ids;
    }

    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeProjectIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_project_ids = $arr;

        return $this;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @return bool
     */
    public function getIncludeGcpPublicDatasets()
    {
        return $this->include_gcp_public_datasets;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeGcpPublicDatasets($var)
    {
        GPBUtil::checkBool($var);
        $this->include_gcp_public_datasets = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Scope::class, \Google\Cloud\DataCatalog\V1beta1\SearchCatalogRequest_Scope::class);

