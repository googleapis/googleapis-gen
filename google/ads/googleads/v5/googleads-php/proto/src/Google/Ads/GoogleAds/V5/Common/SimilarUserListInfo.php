<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/user_lists.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SimilarUserList is a list of users which are similar to users from another
 * UserList. These lists are read-only and automatically created by Google.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.SimilarUserListInfo</code>
 */
class SimilarUserListInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue seed_user_list = 1;</code>
     */
    protected $seed_user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $seed_user_list
     *           Seed UserList from which this list is derived.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue seed_user_list = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getSeedUserList()
    {
        return isset($this->seed_user_list) ? $this->seed_user_list : null;
    }

    public function hasSeedUserList()
    {
        return isset($this->seed_user_list);
    }

    public function clearSeedUserList()
    {
        unset($this->seed_user_list);
    }

    /**
     * Returns the unboxed value from <code>getSeedUserList()</code>

     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue seed_user_list = 1;</code>
     * @return string|null
     */
    public function getSeedUserListUnwrapped()
    {
        return $this->readWrapperValue("seed_user_list");
    }

    /**
     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue seed_user_list = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSeedUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->seed_user_list = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Seed UserList from which this list is derived.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue seed_user_list = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSeedUserListUnwrapped($var)
    {
        $this->writeWrapperValue("seed_user_list", $var);
        return $this;}

}

