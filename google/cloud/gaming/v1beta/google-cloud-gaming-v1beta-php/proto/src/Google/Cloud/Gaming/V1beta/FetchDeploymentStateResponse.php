<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1beta/game_server_deployments.proto

namespace Google\Cloud\Gaming\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for GameServerDeploymentsService.FetchDeploymentState.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1beta.FetchDeploymentStateResponse</code>
 */
class FetchDeploymentStateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The state of the game server deployment in each game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState cluster_state = 1;</code>
     */
    private $cluster_state;
    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unavailable = 2;</code>
     */
    private $unavailable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1beta\FetchDeploymentStateResponse\DeployedClusterState[]|\Google\Protobuf\Internal\RepeatedField $cluster_state
     *           The state of the game server deployment in each game server cluster.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unavailable
     *           List of locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1Beta\GameServerDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * The state of the game server deployment in each game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState cluster_state = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getClusterState()
    {
        return $this->cluster_state;
    }

    /**
     * The state of the game server deployment in each game server cluster.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.FetchDeploymentStateResponse.DeployedClusterState cluster_state = 1;</code>
     * @param \Google\Cloud\Gaming\V1beta\FetchDeploymentStateResponse\DeployedClusterState[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setClusterState($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1beta\FetchDeploymentStateResponse\DeployedClusterState::class);
        $this->cluster_state = $arr;

        return $this;
    }

    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unavailable = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unavailable = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnavailable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unavailable = $arr;

        return $this;
    }

}

