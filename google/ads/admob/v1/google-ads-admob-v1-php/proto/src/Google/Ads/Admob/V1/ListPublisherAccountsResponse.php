<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/admob/v1/admob_api.proto

namespace Google\Ads\Admob\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the publisher account list request.
 *
 * Generated from protobuf message <code>google.ads.admob.v1.ListPublisherAccountsResponse</code>
 */
class ListPublisherAccountsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Publisher that the client credentials can access.
     *
     * Generated from protobuf field <code>repeated .google.ads.admob.v1.PublisherAccount account = 1;</code>
     */
    private $account;
    /**
     * If not empty, indicates that there might be more accounts for the request;
     * you must pass this value in a new `ListPublisherAccountsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\Admob\V1\PublisherAccount[]|\Google\Protobuf\Internal\RepeatedField $account
     *           Publisher that the client credentials can access.
     *     @type string $next_page_token
     *           If not empty, indicates that there might be more accounts for the request;
     *           you must pass this value in a new `ListPublisherAccountsRequest`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Admob\V1\AdmobApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Publisher that the client credentials can access.
     *
     * Generated from protobuf field <code>repeated .google.ads.admob.v1.PublisherAccount account = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Publisher that the client credentials can access.
     *
     * Generated from protobuf field <code>repeated .google.ads.admob.v1.PublisherAccount account = 1;</code>
     * @param \Google\Ads\Admob\V1\PublisherAccount[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\Admob\V1\PublisherAccount::class);
        $this->account = $arr;

        return $this;
    }

    /**
     * If not empty, indicates that there might be more accounts for the request;
     * you must pass this value in a new `ListPublisherAccountsRequest`.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * If not empty, indicates that there might be more accounts for the request;
     * you must pass this value in a new `ListPublisherAccountsRequest`.
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

}

