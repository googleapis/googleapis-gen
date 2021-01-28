<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1beta1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The issuing policy for a [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority].
 * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] will not be successfully issued from this
 * [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] if they violate the policy.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy</code>
 */
class CertificateAuthorityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If any [Subject][google.cloud.security.privateca.v1beta1.Subject] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed [Subject][google.cloud.security.privateca.v1beta1.Subject]. If a [Subject][google.cloud.security.privateca.v1beta1.Subject] has an empty
     * field, any value will be allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.Subject allowed_locations_and_organizations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_locations_and_organizations;
    /**
     * Optional. If any value is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed value. If no value is specified, all values
     * will be allowed for this fied. Glob patterns are also supported.
     *
     * Generated from protobuf field <code>repeated string allowed_common_names = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $allowed_common_names;
    /**
     * Optional. If a [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames]. If no value or an empty value
     * is specified, any value will be allowed for the [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames allowed_sans = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allowed_sans = null;
    /**
     * Optional. The maximum lifetime allowed by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]. Note that
     * if the any part if the issuing chain expires before a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]'s
     * requested maximum_lifetime, the effective lifetime will be explicitly
     * truncated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $maximum_lifetime = null;
    /**
     * Optional. If specified, then only methods allowed in the [IssuanceModes][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes] may be
     * used to issue [Certificates][google.cloud.security.privateca.v1beta1.Certificate].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes allowed_issuance_modes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $allowed_issuance_modes = null;
    protected $config_policy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedConfigList $allowed_config_list
     *           Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     *           must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] in the list.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper $overwrite_config_values
     *           Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     *           will use the provided configuration values, overwriting any requested
     *           configuration values.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\Subject[]|\Google\Protobuf\Internal\RepeatedField $allowed_locations_and_organizations
     *           Optional. If any [Subject][google.cloud.security.privateca.v1beta1.Subject] is specified here, then all
     *           [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     *           match at least one listed [Subject][google.cloud.security.privateca.v1beta1.Subject]. If a [Subject][google.cloud.security.privateca.v1beta1.Subject] has an empty
     *           field, any value will be allowed for that field.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_common_names
     *           Optional. If any value is specified here, then all
     *           [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     *           match at least one listed value. If no value is specified, all values
     *           will be allowed for this fied. Glob patterns are also supported.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedSubjectAltNames $allowed_sans
     *           Optional. If a [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames] is specified here, then all
     *           [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     *           match [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames]. If no value or an empty value
     *           is specified, any value will be allowed for the [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames]
     *           field.
     *     @type \Google\Protobuf\Duration $maximum_lifetime
     *           Optional. The maximum lifetime allowed by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]. Note that
     *           if the any part if the issuing chain expires before a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]'s
     *           requested maximum_lifetime, the effective lifetime will be explicitly
     *           truncated.
     *     @type \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\IssuanceModes $allowed_issuance_modes
     *           Optional. If specified, then only methods allowed in the [IssuanceModes][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes] may be
     *           used to issue [Certificates][google.cloud.security.privateca.v1beta1.Certificate].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] in the list.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedConfigList allowed_config_list = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedConfigList
     */
    public function getAllowedConfigList()
    {
        return $this->readOneof(1);
    }

    public function hasAllowedConfigList()
    {
        return $this->hasOneof(1);
    }

    /**
     * Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * must match at least one listed [ReusableConfigWrapper][google.cloud.security.privateca.v1beta1.ReusableConfigWrapper] in the list.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedConfigList allowed_config_list = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedConfigList $var
     * @return $this
     */
    public function setAllowedConfigList($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedConfigList::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * will use the provided configuration values, overwriting any requested
     * configuration values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigWrapper overwrite_config_values = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper
     */
    public function getOverwriteConfigValues()
    {
        return $this->readOneof(2);
    }

    public function hasOverwriteConfigValues()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. All [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]
     * will use the provided configuration values, overwriting any requested
     * configuration values.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.ReusableConfigWrapper overwrite_config_values = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper $var
     * @return $this
     */
    public function setOverwriteConfigValues($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\ReusableConfigWrapper::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. If any [Subject][google.cloud.security.privateca.v1beta1.Subject] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed [Subject][google.cloud.security.privateca.v1beta1.Subject]. If a [Subject][google.cloud.security.privateca.v1beta1.Subject] has an empty
     * field, any value will be allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.Subject allowed_locations_and_organizations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedLocationsAndOrganizations()
    {
        return $this->allowed_locations_and_organizations;
    }

    /**
     * Optional. If any [Subject][google.cloud.security.privateca.v1beta1.Subject] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed [Subject][google.cloud.security.privateca.v1beta1.Subject]. If a [Subject][google.cloud.security.privateca.v1beta1.Subject] has an empty
     * field, any value will be allowed for that field.
     *
     * Generated from protobuf field <code>repeated .google.cloud.security.privateca.v1beta1.Subject allowed_locations_and_organizations = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\Subject[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedLocationsAndOrganizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Security\PrivateCA\V1beta1\Subject::class);
        $this->allowed_locations_and_organizations = $arr;

        return $this;
    }

    /**
     * Optional. If any value is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed value. If no value is specified, all values
     * will be allowed for this fied. Glob patterns are also supported.
     *
     * Generated from protobuf field <code>repeated string allowed_common_names = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedCommonNames()
    {
        return $this->allowed_common_names;
    }

    /**
     * Optional. If any value is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match at least one listed value. If no value is specified, all values
     * will be allowed for this fied. Glob patterns are also supported.
     *
     * Generated from protobuf field <code>repeated string allowed_common_names = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedCommonNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_common_names = $arr;

        return $this;
    }

    /**
     * Optional. If a [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames]. If no value or an empty value
     * is specified, any value will be allowed for the [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames allowed_sans = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedSubjectAltNames
     */
    public function getAllowedSans()
    {
        return isset($this->allowed_sans) ? $this->allowed_sans : null;
    }

    public function hasAllowedSans()
    {
        return isset($this->allowed_sans);
    }

    public function clearAllowedSans()
    {
        unset($this->allowed_sans);
    }

    /**
     * Optional. If a [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames] is specified here, then all
     * [Certificates][google.cloud.security.privateca.v1beta1.Certificate] issued by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority] must
     * match [AllowedSubjectAltNames][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames]. If no value or an empty value
     * is specified, any value will be allowed for the [SubjectAltNames][google.cloud.security.privateca.v1beta1.SubjectAltNames]
     * field.
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.AllowedSubjectAltNames allowed_sans = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedSubjectAltNames $var
     * @return $this
     */
    public function setAllowedSans($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\AllowedSubjectAltNames::class);
        $this->allowed_sans = $var;

        return $this;
    }

    /**
     * Optional. The maximum lifetime allowed by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]. Note that
     * if the any part if the issuing chain expires before a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]'s
     * requested maximum_lifetime, the effective lifetime will be explicitly
     * truncated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration
     */
    public function getMaximumLifetime()
    {
        return isset($this->maximum_lifetime) ? $this->maximum_lifetime : null;
    }

    public function hasMaximumLifetime()
    {
        return isset($this->maximum_lifetime);
    }

    public function clearMaximumLifetime()
    {
        unset($this->maximum_lifetime);
    }

    /**
     * Optional. The maximum lifetime allowed by the [CertificateAuthority][google.cloud.security.privateca.v1beta1.CertificateAuthority]. Note that
     * if the any part if the issuing chain expires before a [Certificate][google.cloud.security.privateca.v1beta1.Certificate]'s
     * requested maximum_lifetime, the effective lifetime will be explicitly
     * truncated.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration maximum_lifetime = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaximumLifetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->maximum_lifetime = $var;

        return $this;
    }

    /**
     * Optional. If specified, then only methods allowed in the [IssuanceModes][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes] may be
     * used to issue [Certificates][google.cloud.security.privateca.v1beta1.Certificate].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes allowed_issuance_modes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\IssuanceModes
     */
    public function getAllowedIssuanceModes()
    {
        return isset($this->allowed_issuance_modes) ? $this->allowed_issuance_modes : null;
    }

    public function hasAllowedIssuanceModes()
    {
        return isset($this->allowed_issuance_modes);
    }

    public function clearAllowedIssuanceModes()
    {
        unset($this->allowed_issuance_modes);
    }

    /**
     * Optional. If specified, then only methods allowed in the [IssuanceModes][google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes] may be
     * used to issue [Certificates][google.cloud.security.privateca.v1beta1.Certificate].
     *
     * Generated from protobuf field <code>.google.cloud.security.privateca.v1beta1.CertificateAuthority.CertificateAuthorityPolicy.IssuanceModes allowed_issuance_modes = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\IssuanceModes $var
     * @return $this
     */
    public function setAllowedIssuanceModes($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority\CertificateAuthorityPolicy\IssuanceModes::class);
        $this->allowed_issuance_modes = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getConfigPolicy()
    {
        return $this->whichOneof("config_policy");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CertificateAuthorityPolicy::class, \Google\Cloud\Security\PrivateCA\V1beta1\CertificateAuthority_CertificateAuthorityPolicy::class);

