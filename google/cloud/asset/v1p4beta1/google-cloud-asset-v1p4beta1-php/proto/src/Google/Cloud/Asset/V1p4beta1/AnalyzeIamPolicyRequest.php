<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1p4beta1/asset_service.proto

namespace Google\Cloud\Asset\V1p4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for [AssetService.AnalyzeIamPolicy][google.cloud.asset.v1p4beta1.AssetService.AnalyzeIamPolicy].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1p4beta1.AnalyzeIamPolicyRequest</code>
 */
class AnalyzeIamPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $analysis_query = null;
    /**
     * Optional. The request options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyRequest.Options options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisQuery $analysis_query
     *           Required. The request query.
     *     @type \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyRequest\Options $options
     *           Optional. The request options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1P4Beta1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisQuery
     */
    public function getAnalysisQuery()
    {
        return isset($this->analysis_query) ? $this->analysis_query : null;
    }

    public function hasAnalysisQuery()
    {
        return isset($this->analysis_query);
    }

    public function clearAnalysisQuery()
    {
        unset($this->analysis_query);
    }

    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisQuery $var
     * @return $this
     */
    public function setAnalysisQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1p4beta1\IamPolicyAnalysisQuery::class);
        $this->analysis_query = $var;

        return $this;
    }

    /**
     * Optional. The request options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyRequest.Options options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyRequest\Options
     */
    public function getOptions()
    {
        return isset($this->options) ? $this->options : null;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * Optional. The request options.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1p4beta1.AnalyzeIamPolicyRequest.Options options = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyRequest\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1p4beta1\AnalyzeIamPolicyRequest\Options::class);
        $this->options = $var;

        return $this;
    }

}

