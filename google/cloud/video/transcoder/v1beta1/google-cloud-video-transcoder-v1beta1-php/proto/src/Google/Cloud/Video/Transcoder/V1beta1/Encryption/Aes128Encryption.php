<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1\Encryption;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration for AES-128 encryption.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Encryption.Aes128Encryption</code>
 */
class Aes128Encryption extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. URI of the key delivery service. This URI is inserted into the M3U8
     * header.
     *
     * Generated from protobuf field <code>string key_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $key_uri
     *           Required. URI of the key delivery service. This URI is inserted into the M3U8
     *           header.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. URI of the key delivery service. This URI is inserted into the M3U8
     * header.
     *
     * Generated from protobuf field <code>string key_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getKeyUri()
    {
        return $this->key_uri;
    }

    /**
     * Required. URI of the key delivery service. This URI is inserted into the M3U8
     * header.
     *
     * Generated from protobuf field <code>string key_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setKeyUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_uri = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Aes128Encryption::class, \Google\Cloud\Video\Transcoder\V1beta1\Encryption_Aes128Encryption::class);

