<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetNetworkPolicyRequest enables/disables network policy for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1beta1.SetNetworkPolicyRequest</code>
 */
class SetNetworkPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $project_id = '';
    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $zone = '';
    /**
     * Required. Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $cluster_id = '';
    /**
     * Required. Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NetworkPolicy network_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $network_policy = null;
    /**
     * The name (project, location, cluster id) of the cluster to set networking
     * policy. Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. Deprecated. The Google Developers Console [project ID or project
     *           number](https://developers.google.com/console/help/new/#projectnumber).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Required. Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides. This field has been deprecated and replaced by the name
     *           field.
     *     @type string $cluster_id
     *           Required. Deprecated. The name of the cluster.
     *           This field has been deprecated and replaced by the name field.
     *     @type \Google\Cloud\Container\V1beta1\NetworkPolicy $network_policy
     *           Required. Configuration options for the NetworkPolicy feature.
     *     @type string $name
     *           The name (project, location, cluster id) of the cluster to set networking
     *           policy. Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1Beta1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://developers.google.com/console/help/new/#projectnumber).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides. This field has been deprecated and replaced by the name
     * field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Required. Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. Deprecated. The name of the cluster.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NetworkPolicy network_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Container\V1beta1\NetworkPolicy
     */
    public function getNetworkPolicy()
    {
        return isset($this->network_policy) ? $this->network_policy : null;
    }

    public function hasNetworkPolicy()
    {
        return isset($this->network_policy);
    }

    public function clearNetworkPolicy()
    {
        unset($this->network_policy);
    }

    /**
     * Required. Configuration options for the NetworkPolicy feature.
     *
     * Generated from protobuf field <code>.google.container.v1beta1.NetworkPolicy network_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Container\V1beta1\NetworkPolicy $var
     * @return $this
     */
    public function setNetworkPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1beta1\NetworkPolicy::class);
        $this->network_policy = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster id) of the cluster to set networking
     * policy. Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster id) of the cluster to set networking
     * policy. Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 6;</code>
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

