<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1beta/workload_identity_pool.proto

namespace Google\Iam\V1beta\WorkloadIdentityPoolProvider;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an OpenId Connect 1.0 identity provider.
 *
 * Generated from protobuf message <code>google.iam.v1beta.WorkloadIdentityPoolProvider.Oidc</code>
 */
class Oidc extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The OIDC issuer URL.
     *
     * Generated from protobuf field <code>string issuer_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $issuer_uri = '';
    /**
     * Acceptable values for the `aud` field (audience) in the OIDC token. Token
     * exchange requests are rejected if the token audience does not match one
     * of the configured values. Each audience may be at most 256 characters. A
     * maximum of 10 audiences may be configured.
     * If this list is empty, the OIDC token audience must be equal to
     * the full canonical resource name of the WorkloadIdentityPoolProvider,
     * with or without the HTTPS prefix. For example:
     * ```
     * //iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * https://iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * ```
     *
     * Generated from protobuf field <code>repeated string allowed_audiences = 2;</code>
     */
    private $allowed_audiences;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $issuer_uri
     *           Required. The OIDC issuer URL.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $allowed_audiences
     *           Acceptable values for the `aud` field (audience) in the OIDC token. Token
     *           exchange requests are rejected if the token audience does not match one
     *           of the configured values. Each audience may be at most 256 characters. A
     *           maximum of 10 audiences may be configured.
     *           If this list is empty, the OIDC token audience must be equal to
     *           the full canonical resource name of the WorkloadIdentityPoolProvider,
     *           with or without the HTTPS prefix. For example:
     *           ```
     *           //iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     *           https://iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     *           ```
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\V1Beta\WorkloadIdentityPool::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The OIDC issuer URL.
     *
     * Generated from protobuf field <code>string issuer_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getIssuerUri()
    {
        return $this->issuer_uri;
    }

    /**
     * Required. The OIDC issuer URL.
     *
     * Generated from protobuf field <code>string issuer_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setIssuerUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer_uri = $var;

        return $this;
    }

    /**
     * Acceptable values for the `aud` field (audience) in the OIDC token. Token
     * exchange requests are rejected if the token audience does not match one
     * of the configured values. Each audience may be at most 256 characters. A
     * maximum of 10 audiences may be configured.
     * If this list is empty, the OIDC token audience must be equal to
     * the full canonical resource name of the WorkloadIdentityPoolProvider,
     * with or without the HTTPS prefix. For example:
     * ```
     * //iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * https://iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * ```
     *
     * Generated from protobuf field <code>repeated string allowed_audiences = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedAudiences()
    {
        return $this->allowed_audiences;
    }

    /**
     * Acceptable values for the `aud` field (audience) in the OIDC token. Token
     * exchange requests are rejected if the token audience does not match one
     * of the configured values. Each audience may be at most 256 characters. A
     * maximum of 10 audiences may be configured.
     * If this list is empty, the OIDC token audience must be equal to
     * the full canonical resource name of the WorkloadIdentityPoolProvider,
     * with or without the HTTPS prefix. For example:
     * ```
     * //iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * https://iam.googleapis.com/projects/<project-number>/locations/<location>/workloadIdentityPools/<pool-id>/providers/<provider-id>
     * ```
     *
     * Generated from protobuf field <code>repeated string allowed_audiences = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedAudiences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_audiences = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Oidc::class, \Google\Iam\V1beta\WorkloadIdentityPoolProvider_Oidc::class);

