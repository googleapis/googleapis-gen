<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/settings/v1beta1/component_settings.proto

namespace Google\Cloud\SecurityCenter\Settings\V1beta1\SecurityHealthAnalyticsSettings;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings for "ADMIN_SERVICE_ACCOUNT" scanner.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.settings.v1beta1.SecurityHealthAnalyticsSettings.AdminServiceAccountSettings</code>
 */
class AdminServiceAccountSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * User-created service accounts ending in the provided identities are
     * allowed to have Admin, Owner or Editor roles granted to them. Otherwise
     * a finding will be created.
     * A valid identity can be:
     *   *  a partilly specified service account that starts with "&#64;", e.g.
     *   "&#64;myproject.iam.gserviceaccount.com". This approves all the service
     *   accounts suffixed with the specified identity.
     *   *  a fully specified service account that does not start with "&#64;", e.g.
     *   "myadmin&#64;myproject.iam.gserviceaccount.com".
     * Google-created service accounts are all approved.
     *
     * Generated from protobuf field <code>repeated string approved_identities = 1;</code>
     */
    private $approved_identities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $approved_identities
     *           User-created service accounts ending in the provided identities are
     *           allowed to have Admin, Owner or Editor roles granted to them. Otherwise
     *           a finding will be created.
     *           A valid identity can be:
     *             *  a partilly specified service account that starts with "&#64;", e.g.
     *             "&#64;myproject.iam.gserviceaccount.com". This approves all the service
     *             accounts suffixed with the specified identity.
     *             *  a fully specified service account that does not start with "&#64;", e.g.
     *             "myadmin&#64;myproject.iam.gserviceaccount.com".
     *           Google-created service accounts are all approved.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\Settings\V1Beta1\ComponentSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * User-created service accounts ending in the provided identities are
     * allowed to have Admin, Owner or Editor roles granted to them. Otherwise
     * a finding will be created.
     * A valid identity can be:
     *   *  a partilly specified service account that starts with "&#64;", e.g.
     *   "&#64;myproject.iam.gserviceaccount.com". This approves all the service
     *   accounts suffixed with the specified identity.
     *   *  a fully specified service account that does not start with "&#64;", e.g.
     *   "myadmin&#64;myproject.iam.gserviceaccount.com".
     * Google-created service accounts are all approved.
     *
     * Generated from protobuf field <code>repeated string approved_identities = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getApprovedIdentities()
    {
        return $this->approved_identities;
    }

    /**
     * User-created service accounts ending in the provided identities are
     * allowed to have Admin, Owner or Editor roles granted to them. Otherwise
     * a finding will be created.
     * A valid identity can be:
     *   *  a partilly specified service account that starts with "&#64;", e.g.
     *   "&#64;myproject.iam.gserviceaccount.com". This approves all the service
     *   accounts suffixed with the specified identity.
     *   *  a fully specified service account that does not start with "&#64;", e.g.
     *   "myadmin&#64;myproject.iam.gserviceaccount.com".
     * Google-created service accounts are all approved.
     *
     * Generated from protobuf field <code>repeated string approved_identities = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setApprovedIdentities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->approved_identities = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdminServiceAccountSettings::class, \Google\Cloud\SecurityCenter\Settings\V1beta1\SecurityHealthAnalyticsSettings_AdminServiceAccountSettings::class);

