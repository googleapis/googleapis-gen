<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gaming/v1beta/game_server_clusters.proto

namespace Google\Cloud\Gaming\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for GameServerClustersService.ListGameServerClusters.
 *
 * Generated from protobuf message <code>google.cloud.gaming.v1beta.ListGameServerClustersResponse</code>
 */
class ListGameServerClustersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of game server clusters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.GameServerCluster game_server_clusters = 1;</code>
     */
    private $game_server_clusters;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';
    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 4;</code>
     */
    private $unreachable;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Gaming\V1beta\GameServerCluster[]|\Google\Protobuf\Internal\RepeatedField $game_server_clusters
     *           The list of game server clusters.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results in the list.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $unreachable
     *           List of locations that could not be reached.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gaming\V1Beta\GameServerClusters::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of game server clusters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.GameServerCluster game_server_clusters = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGameServerClusters()
    {
        return $this->game_server_clusters;
    }

    /**
     * The list of game server clusters.
     *
     * Generated from protobuf field <code>repeated .google.cloud.gaming.v1beta.GameServerCluster game_server_clusters = 1;</code>
     * @param \Google\Cloud\Gaming\V1beta\GameServerCluster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGameServerClusters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Gaming\V1beta\GameServerCluster::class);
        $this->game_server_clusters = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnreachable()
    {
        return $this->unreachable;
    }

    /**
     * List of locations that could not be reached.
     *
     * Generated from protobuf field <code>repeated string unreachable = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnreachable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->unreachable = $arr;

        return $this;
    }

}

