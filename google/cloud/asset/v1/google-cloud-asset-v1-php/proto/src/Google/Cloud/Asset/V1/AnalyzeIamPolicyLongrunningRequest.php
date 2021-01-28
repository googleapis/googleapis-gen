<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning].
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.AnalyzeIamPolicyLongrunningRequest</code>
 */
class AnalyzeIamPolicyLongrunningRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $analysis_query = null;
    /**
     * Required. Output configuration indicating where the results will be output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $analysis_query
     *           Required. The request query.
     *     @type \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig $output_config
     *           Required. Output configuration indicating where the results will be output to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The request query.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery
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
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisQuery analysis_query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery $var
     * @return $this
     */
    public function setAnalysisQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery::class);
        $this->analysis_query = $var;

        return $this;
    }

    /**
     * Required. Output configuration indicating where the results will be output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig
     */
    public function getOutputConfig()
    {
        return isset($this->output_config) ? $this->output_config : null;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. Output configuration indicating where the results will be output to.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.IamPolicyAnalysisOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\IamPolicyAnalysisOutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

