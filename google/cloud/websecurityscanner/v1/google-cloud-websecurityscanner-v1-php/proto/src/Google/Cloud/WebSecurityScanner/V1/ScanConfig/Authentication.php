<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1/scan_config.proto

namespace Google\Cloud\WebSecurityScanner\V1\ScanConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Scan authentication configuration.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1.ScanConfig.Authentication</code>
 */
class Authentication extends \Google\Protobuf\Internal\Message
{
    protected $authentication;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\GoogleAccount $google_account
     *           Authentication using a Google account.
     *     @type \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\CustomAccount $custom_account
     *           Authentication using a custom account.
     *     @type \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential $iap_credential
     *           Authentication using Identity-Aware-Proxy (IAP).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1\ScanConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Authentication using a Google account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.GoogleAccount google_account = 1;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\GoogleAccount|null
     */
    public function getGoogleAccount()
    {
        return $this->readOneof(1);
    }

    public function hasGoogleAccount()
    {
        return $this->hasOneof(1);
    }

    /**
     * Authentication using a Google account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.GoogleAccount google_account = 1;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\GoogleAccount $var
     * @return $this
     */
    public function setGoogleAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\GoogleAccount::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Authentication using a custom account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.CustomAccount custom_account = 2;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\CustomAccount|null
     */
    public function getCustomAccount()
    {
        return $this->readOneof(2);
    }

    public function hasCustomAccount()
    {
        return $this->hasOneof(2);
    }

    /**
     * Authentication using a custom account.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.CustomAccount custom_account = 2;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\CustomAccount $var
     * @return $this
     */
    public function setCustomAccount($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\CustomAccount::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Authentication using Identity-Aware-Proxy (IAP).
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.IapCredential iap_credential = 4;</code>
     * @return \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential|null
     */
    public function getIapCredential()
    {
        return $this->readOneof(4);
    }

    public function hasIapCredential()
    {
        return $this->hasOneof(4);
    }

    /**
     * Authentication using Identity-Aware-Proxy (IAP).
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1.ScanConfig.Authentication.IapCredential iap_credential = 4;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential $var
     * @return $this
     */
    public function setIapCredential($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\WebSecurityScanner\V1\ScanConfig\Authentication\IapCredential::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthentication()
    {
        return $this->whichOneof("authentication");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Authentication::class, \Google\Cloud\WebSecurityScanner\V1\ScanConfig_Authentication::class);

