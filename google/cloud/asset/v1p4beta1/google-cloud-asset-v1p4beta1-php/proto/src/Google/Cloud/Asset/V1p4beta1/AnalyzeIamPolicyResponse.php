<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p4beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1p4beta1.AssetService.AnalyzeIamPolicy].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse</code>
 */
class AnalyzeIamPolicyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     */
    protected $main_analysis = null;
    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     */
    private $service_account_impersonation_analysis;
    /**
     * Represents whether all entries in the [main_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.main_analysis] and
     * [service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis] have been fully explored to
     * answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     */
    protected $fully_explored = false;
    /**
     * A list of non-critical errors happened during the request handling to
     * explain why `fully_explored` is false, or empty if no error happened.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AnalysisState non_critical_errors = 4;</code>
     */
    private $non_critical_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis $main_analysis
     *           The main analysis that matches the original request.
     *     @type \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis[]|\Google\Protobuf\Internal\RepeatedField $service_account_impersonation_analysis
     *           The service account impersonation analysis if
     *           [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     *           enabled.
     *     @type bool $fully_explored
     *           Represents whether all entries in the [main_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.main_analysis] and
     *           [service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis] have been fully explored to
     *           answer the query in the request.
     *     @type \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisResult\AnalysisState[]|\Google\Protobuf\Internal\RepeatedField $non_critical_errors
     *           A list of non-critical errors happened during the request handling to
     *           explain why `fully_explored` is false, or empty if no error happened.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P4Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     * @return \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis
     */
    public function getMainAnalysis()
    {
        return isset($this->main_analysis) ? $this->main_analysis : null;
    }

    public function hasMainAnalysis()
    {
        return isset($this->main_analysis);
    }

    public function clearMainAnalysis()
    {
        unset($this->main_analysis);
    }

    /**
     * The main analysis that matches the original request.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis main_analysis = 1;</code>
     * @param \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis $var
     * @return $this
     */
    public function setMainAnalysis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis::class);
        $this->main_analysis = $var;

        return $this;
    }

    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getServiceAccountImpersonationAnalysis()
    {
        return $this->service_account_impersonation_analysis;
    }

    /**
     * The service account impersonation analysis if
     * [AnalyzeIamPolicyRequest.analyze_service_account_impersonation][] is
     * enabled.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.IamPolicyAnalysis service_account_impersonation_analysis = 2;</code>
     * @param \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setServiceAccountImpersonationAnalysis($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyResponse\IamPolicyAnalysis::class);
        $this->service_account_impersonation_analysis = $arr;

        return $this;
    }

    /**
     * Represents whether all entries in the [main_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.main_analysis] and
     * [service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis] have been fully explored to
     * answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     * @return bool
     */
    public function getFullyExplored()
    {
        return $this->fully_explored;
    }

    /**
     * Represents whether all entries in the [main_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.main_analysis] and
     * [service_account_impersonation_analysis][google.cloud.asset.v1p4beta1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis] have been fully explored to
     * answer the query in the request.
     *
     * Generated from protobuf field <code>bool fully_explored = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setFullyExplored($var)
    {
        GPBUtil::checkBool($var);
        $this->fully_explored = $var;

        return $this;
    }

    /**
     * A list of non-critical errors happened during the request handling to
     * explain why `fully_explored` is false, or empty if no error happened.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AnalysisState non_critical_errors = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNonCriticalErrors()
    {
        return $this->non_critical_errors;
    }

    /**
     * A list of non-critical errors happened during the request handling to
     * explain why `fully_explored` is false, or empty if no error happened.
     *
     * Generated from protobuf field <code>repeated .google.cloud.asset.v1p4beta1.IamPolicyAnalysisResult.AnalysisState non_critical_errors = 4;</code>
     * @param \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisResult\AnalysisState[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNonCriticalErrors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisResult\AnalysisState::class);
        $this->non_critical_errors = $arr;

        return $this;
    }

}

