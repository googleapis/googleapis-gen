<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/timestamps.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Timestamps about this resource according to a particular system.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SystemTimestamps</code>
 */
class SystemTimestamps extends \Google\Protobuf\Internal\Message
{
    /**
     * The creation time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     */
    protected $create_time = null;
    /**
     * The last-modified time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     */
    protected $update_time = null;
    /**
     * Output only. The expiration time of the resource within the given system.
     * Currently only apllicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $create_time
     *           The creation time of the resource within the given system.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last-modified time of the resource within the given system.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. The expiration time of the resource within the given system.
     *           Currently only apllicable to BigQuery resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Timestamps::initOnce();
        parent::__construct($data);
    }

    /**
     * The creation time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * The creation time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The last-modified time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The last-modified time of the resource within the given system.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The expiration time of the resource within the given system.
     * Currently only apllicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpireTime()
    {
        return isset($this->expire_time) ? $this->expire_time : null;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. The expiration time of the resource within the given system.
     * Currently only apllicable to BigQuery resources.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

}

