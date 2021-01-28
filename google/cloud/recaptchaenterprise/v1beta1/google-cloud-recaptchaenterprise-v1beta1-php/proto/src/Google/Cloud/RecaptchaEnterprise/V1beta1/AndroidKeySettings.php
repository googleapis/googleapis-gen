<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1beta1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings specific to keys that can be used by Android apps.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1beta1.AndroidKeySettings</code>
 */
class AndroidKeySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     *
     * Generated from protobuf field <code>repeated string allowed_package_names = 1;</code>
     */
    private $allowed_package_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_package_names
     *           Android package names of apps allowed to use the key.
     *           Example: 'com.companyname.appname'
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1Beta1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     *
     * Generated from protobuf field <code>repeated string allowed_package_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedPackageNames()
    {
        return $this->allowed_package_names;
    }

    /**
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     *
     * Generated from protobuf field <code>repeated string allowed_package_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedPackageNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_package_names = $arr;

        return $this;
    }

}

