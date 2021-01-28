<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p5beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p5beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListAssets response.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p5beta1.ListAssetsResponse</code>
 */
class ListAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     */
    protected $read_time = null;
    /**
     * Assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p5beta1.Asset assets = 2;</code>
     */
    private $assets;
    /**
     * Token to retrieve the next page of results. Set to empty if there are no
     * remaining results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time the snapshot was taken.
     *     @type \Google\Cloud\Asset\V1p5beta1\Asset[]|\Google\Protobuf\Internal\RepeatedField $assets
     *           Assets.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results. Set to empty if there are no
     *           remaining results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P5Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return isset($this->read_time) ? $this->read_time : null;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Time the snapshot was taken.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * Assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p5beta1.Asset assets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Assets.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p5beta1.Asset assets = 2;</code>
     * @param \Google\Cloud\Asset\V1p5beta1\Asset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1p5beta1\Asset::class);
        $this->assets = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results. Set to empty if there are no
     * remaining results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results. Set to empty if there are no
     * remaining results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

