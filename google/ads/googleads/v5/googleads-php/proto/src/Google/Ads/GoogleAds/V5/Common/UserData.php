<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User data holding user identifiers and attributes.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.UserData</code>
 */
class UserData extends \Google\Protobuf\Internal\Message
{
    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.UserIdentifier user_identifiers = 1;</code>
     */
    private $user_identifiers;
    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.TransactionAttribute transaction_attribute = 2;</code>
     */
    protected $transaction_attribute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V5\Common\UserIdentifier[]|\Google\Protobuf\Internal\RepeatedField $user_identifiers
     *           User identification info. Required.
     *     @type \Google\Ads\GoogleAds\V5\Common\TransactionAttribute $transaction_attribute
     *           Additional transactions/attributes associated with the user.
     *           Required when updating store sales data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.UserIdentifier user_identifiers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIdentifiers()
    {
        return $this->user_identifiers;
    }

    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.common.UserIdentifier user_identifiers = 1;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\UserIdentifier[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V5\Common\UserIdentifier::class);
        $this->user_identifiers = $arr;

        return $this;
    }

    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.TransactionAttribute transaction_attribute = 2;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\TransactionAttribute
     */
    public function getTransactionAttribute()
    {
        return isset($this->transaction_attribute) ? $this->transaction_attribute : null;
    }

    public function hasTransactionAttribute()
    {
        return isset($this->transaction_attribute);
    }

    public function clearTransactionAttribute()
    {
        unset($this->transaction_attribute);
    }

    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.TransactionAttribute transaction_attribute = 2;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\TransactionAttribute $var
     * @return $this
     */
    public function setTransactionAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\TransactionAttribute::class);
        $this->transaction_attribute = $var;

        return $this;
    }

}

