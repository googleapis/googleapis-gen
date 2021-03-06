<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p4beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p4beta1\ExportIamPolicyAnalysisRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains request options.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p4beta1.ExportIamPolicyAnalysisRequest.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If [identity_selector][] is specified, the identity in the result will
     * be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $expand_groups = false;
    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If [access_selector][] is specified, the access section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $expand_roles = false;
    /**
     * Optional. If true, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a GCP
     * folder, the results will also include resources in that folder with
     * permission P.
     * If [resource_selector][] is specified, the resource section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $expand_resources = false;
    /**
     * Optional. If true, the result will output resource edges, starting
     * from the policy attached resource, to any expanded resources.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $output_resource_edges = false;
    /**
     * Optional. If true, the result will output group identity edges, starting
     * from the binding's group members, to any expanded identities.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $output_group_edges = false;
    /**
     * Optional. If true, the response will include access analysis from identities to
     * resources via service account impersonation. This is a very expensive
     * operation, because many derived queries will be executed.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a GCP folder F, and there's an IAM policy states user A
     * has iam.serviceAccounts.actAs permission to a service account SA, and
     * there's another IAM policy states service account SA has permission P to
     * the GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $analyze_service_account_impersonation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $expand_groups
     *           Optional. If true, the identities section of the result will expand any
     *           Google groups appearing in an IAM policy binding.
     *           If [identity_selector][] is specified, the identity in the result will
     *           be determined by the selector, and this flag will have no effect.
     *           Default is false.
     *     @type bool $expand_roles
     *           Optional. If true, the access section of result will expand any roles
     *           appearing in IAM policy bindings to include their permissions.
     *           If [access_selector][] is specified, the access section of the result
     *           will be determined by the selector, and this flag will have no effect.
     *           Default is false.
     *     @type bool $expand_resources
     *           Optional. If true, the resource section of the result will expand any
     *           resource attached to an IAM policy to include resources lower in the
     *           resource hierarchy.
     *           For example, if the request analyzes for which resources user A has
     *           permission P, and the results include an IAM policy with P on a GCP
     *           folder, the results will also include resources in that folder with
     *           permission P.
     *           If [resource_selector][] is specified, the resource section of the result
     *           will be determined by the selector, and this flag will have no effect.
     *           Default is false.
     *     @type bool $output_resource_edges
     *           Optional. If true, the result will output resource edges, starting
     *           from the policy attached resource, to any expanded resources.
     *           Default is false.
     *     @type bool $output_group_edges
     *           Optional. If true, the result will output group identity edges, starting
     *           from the binding's group members, to any expanded identities.
     *           Default is false.
     *     @type bool $analyze_service_account_impersonation
     *           Optional. If true, the response will include access analysis from identities to
     *           resources via service account impersonation. This is a very expensive
     *           operation, because many derived queries will be executed.
     *           For example, if the request analyzes for which resources user A has
     *           permission P, and there's an IAM policy states user A has
     *           iam.serviceAccounts.getAccessToken permission to a service account SA,
     *           and there's another IAM policy states service account SA has permission P
     *           to a GCP folder F, then user A potentially has access to the GCP folder
     *           F. And those advanced analysis results will be included in
     *           [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     *           Another example, if the request analyzes for who has
     *           permission P to a GCP folder F, and there's an IAM policy states user A
     *           has iam.serviceAccounts.actAs permission to a service account SA, and
     *           there's another IAM policy states service account SA has permission P to
     *           the GCP folder F, then user A potentially has access to the GCP folder
     *           F. And those advanced analysis results will be included in
     *           [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P4Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If [identity_selector][] is specified, the identity in the result will
     * be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandGroups()
    {
        return $this->expand_groups;
    }

    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If [identity_selector][] is specified, the identity in the result will
     * be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandGroups($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_groups = $var;

        return $this;
    }

    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If [access_selector][] is specified, the access section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandRoles()
    {
        return $this->expand_roles;
    }

    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If [access_selector][] is specified, the access section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandRoles($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_roles = $var;

        return $this;
    }

    /**
     * Optional. If true, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a GCP
     * folder, the results will also include resources in that folder with
     * permission P.
     * If [resource_selector][] is specified, the resource section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandResources()
    {
        return $this->expand_resources;
    }

    /**
     * Optional. If true, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a GCP
     * folder, the results will also include resources in that folder with
     * permission P.
     * If [resource_selector][] is specified, the resource section of the result
     * will be determined by the selector, and this flag will have no effect.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandResources($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_resources = $var;

        return $this;
    }

    /**
     * Optional. If true, the result will output resource edges, starting
     * from the policy attached resource, to any expanded resources.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getOutputResourceEdges()
    {
        return $this->output_resource_edges;
    }

    /**
     * Optional. If true, the result will output resource edges, starting
     * from the policy attached resource, to any expanded resources.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setOutputResourceEdges($var)
    {
        GPBUtil::checkBool($var);
        $this->output_resource_edges = $var;

        return $this;
    }

    /**
     * Optional. If true, the result will output group identity edges, starting
     * from the binding's group members, to any expanded identities.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getOutputGroupEdges()
    {
        return $this->output_group_edges;
    }

    /**
     * Optional. If true, the result will output group identity edges, starting
     * from the binding's group members, to any expanded identities.
     * Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setOutputGroupEdges($var)
    {
        GPBUtil::checkBool($var);
        $this->output_group_edges = $var;

        return $this;
    }

    /**
     * Optional. If true, the response will include access analysis from identities to
     * resources via service account impersonation. This is a very expensive
     * operation, because many derived queries will be executed.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a GCP folder F, and there's an IAM policy states user A
     * has iam.serviceAccounts.actAs permission to a service account SA, and
     * there's another IAM policy states service account SA has permission P to
     * the GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAnalyzeServiceAccountImpersonation()
    {
        return $this->analyze_service_account_impersonation;
    }

    /**
     * Optional. If true, the response will include access analysis from identities to
     * resources via service account impersonation. This is a very expensive
     * operation, because many derived queries will be executed.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a GCP folder F, and there's an IAM policy states user A
     * has iam.serviceAccounts.actAs permission to a service account SA, and
     * there's another IAM policy states service account SA has permission P to
     * the GCP folder F, then user A potentially has access to the GCP folder
     * F. And those advanced analysis results will be included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAnalyzeServiceAccountImpersonation($var)
    {
        GPBUtil::checkBool($var);
        $this->analyze_service_account_impersonation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Options::class, \Google\Cloud\Asset\V1p4beta1\ExportIamPolicyAnalysisRequest_Options::class);

