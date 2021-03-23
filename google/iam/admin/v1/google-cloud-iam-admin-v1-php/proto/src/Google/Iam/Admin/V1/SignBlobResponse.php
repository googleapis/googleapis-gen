<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/admin/v1/iam.proto

namespace Google\Iam\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Deprecated. [Migrate to Service Account Credentials
 * API](https://cloud.google.com/iam/help/credentials/migrate-api).
 * The service account sign blob response.
 *
 * Generated from protobuf message <code>google.iam.admin.v1.SignBlobResponse</code>
 */
class SignBlobResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The id of the key used to sign the blob.
     *
     * Generated from protobuf field <code>string key_id = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $key_id = '';
    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The signed blob.
     *
     * Generated from protobuf field <code>bytes signature = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $signature = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_id
     *           Deprecated. [Migrate to Service Account Credentials
     *           API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *           The id of the key used to sign the blob.
     *     @type string $signature
     *           Deprecated. [Migrate to Service Account Credentials
     *           API](https://cloud.google.com/iam/help/credentials/migrate-api).
     *           The signed blob.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Admin\V1\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The id of the key used to sign the blob.
     *
     * Generated from protobuf field <code>string key_id = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getKeyId()
    {
        @trigger_error('key_id is deprecated.', E_USER_DEPRECATED);
        return $this->key_id;
    }

    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The id of the key used to sign the blob.
     *
     * Generated from protobuf field <code>string key_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setKeyId($var)
    {
        @trigger_error('key_id is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->key_id = $var;

        return $this;
    }

    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The signed blob.
     *
     * Generated from protobuf field <code>bytes signature = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getSignature()
    {
        @trigger_error('signature is deprecated.', E_USER_DEPRECATED);
        return $this->signature;
    }

    /**
     * Deprecated. [Migrate to Service Account Credentials
     * API](https://cloud.google.com/iam/help/credentials/migrate-api).
     * The signed blob.
     *
     * Generated from protobuf field <code>bytes signature = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setSignature($var)
    {
        @trigger_error('signature is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, False);
        $this->signature = $var;

        return $this;
    }

}

