<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/assets.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of a Google Cloud resource.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The API version. Example: `v1`
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * Example:
     * `https://www.googleapis.com/discovery/v1/apis/compute/v1/rest`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     */
    protected $discovery_document_uri = '';
    /**
     * The JSON schema name listed in the discovery document. Example:
     * `Project`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     */
    protected $discovery_name = '';
    /**
     * The REST URL for accessing the resource. An HTTP `GET` request using this
     * URL returns the resource itself. Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`
     * This value is unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     */
    protected $resource_url = '';
    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For Google Cloud assets, this value is the parent resource defined in the
     * [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * Example:
     * `//cloudresourcemanager.googleapis.com/projects/my_project_123`
     * For third-party assets, this field may be set differently.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     */
    protected $parent = '';
    /**
     * The content of the resource, in which some sensitive fields are removed
     * and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     */
    protected $data = null;
    /**
     * The location of the resource in Google Cloud, such as its zone and region.
     * For more information, see https://cloud.google.com/about/locations/.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     */
    protected $location = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The API version. Example: `v1`
     *     @type string $discovery_document_uri
     *           The URL of the discovery document containing the resource's JSON schema.
     *           Example:
     *           `https://www.googleapis.com/discovery/v1/apis/compute/v1/rest`
     *           This value is unspecified for resources that do not have an API based on a
     *           discovery document, such as Cloud Bigtable.
     *     @type string $discovery_name
     *           The JSON schema name listed in the discovery document. Example:
     *           `Project`
     *           This value is unspecified for resources that do not have an API based on a
     *           discovery document, such as Cloud Bigtable.
     *     @type string $resource_url
     *           The REST URL for accessing the resource. An HTTP `GET` request using this
     *           URL returns the resource itself. Example:
     *           `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`
     *           This value is unspecified for resources without a REST API.
     *     @type string $parent
     *           The full name of the immediate parent of this resource. See
     *           [Resource
     *           Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     *           for more information.
     *           For Google Cloud assets, this value is the parent resource defined in the
     *           [Cloud IAM policy
     *           hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     *           Example:
     *           `//cloudresourcemanager.googleapis.com/projects/my_project_123`
     *           For third-party assets, this field may be set differently.
     *     @type \Google\Protobuf\Struct $data
     *           The content of the resource, in which some sensitive fields are removed
     *           and may not be present.
     *     @type string $location
     *           The location of the resource in Google Cloud, such as its zone and region.
     *           For more information, see https://cloud.google.com/about/locations/.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The API version. Example: `v1`
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The API version. Example: `v1`
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * Example:
     * `https://www.googleapis.com/discovery/v1/apis/compute/v1/rest`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     * @return string
     */
    public function getDiscoveryDocumentUri()
    {
        return $this->discovery_document_uri;
    }

    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * Example:
     * `https://www.googleapis.com/discovery/v1/apis/compute/v1/rest`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveryDocumentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovery_document_uri = $var;

        return $this;
    }

    /**
     * The JSON schema name listed in the discovery document. Example:
     * `Project`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     * @return string
     */
    public function getDiscoveryName()
    {
        return $this->discovery_name;
    }

    /**
     * The JSON schema name listed in the discovery document. Example:
     * `Project`
     * This value is unspecified for resources that do not have an API based on a
     * discovery document, such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovery_name = $var;

        return $this;
    }

    /**
     * The REST URL for accessing the resource. An HTTP `GET` request using this
     * URL returns the resource itself. Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`
     * This value is unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->resource_url;
    }

    /**
     * The REST URL for accessing the resource. An HTTP `GET` request using this
     * URL returns the resource itself. Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`
     * This value is unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_url = $var;

        return $this;
    }

    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For Google Cloud assets, this value is the parent resource defined in the
     * [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * Example:
     * `//cloudresourcemanager.googleapis.com/projects/my_project_123`
     * For third-party assets, this field may be set differently.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For Google Cloud assets, this value is the parent resource defined in the
     * [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * Example:
     * `//cloudresourcemanager.googleapis.com/projects/my_project_123`
     * For third-party assets, this field may be set differently.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
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
     * The content of the resource, in which some sensitive fields are removed
     * and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : null;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * The content of the resource, in which some sensitive fields are removed
     * and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->data = $var;

        return $this;
    }

    /**
     * The location of the resource in Google Cloud, such as its zone and region.
     * For more information, see https://cloud.google.com/about/locations/.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The location of the resource in Google Cloud, such as its zone and region.
     * For more information, see https://cloud.google.com/about/locations/.
     *
     * Generated from protobuf field <code>string location = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

}

