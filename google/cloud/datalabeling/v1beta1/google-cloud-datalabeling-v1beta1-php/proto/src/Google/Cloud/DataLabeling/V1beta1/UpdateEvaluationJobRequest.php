<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/data_labeling_service.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateEvaluationJob.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.UpdateEvaluationJobRequest</code>
 */
class UpdateEvaluationJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Evaluation job that is going to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob evaluation_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $evaluation_job = null;
    /**
     * Optional. Mask for which fields to update. You can only provide the
     * following fields:
     * * `evaluationJobConfig.humanAnnotationConfig.instruction`
     * * `evaluationJobConfig.exampleCount`
     * * `evaluationJobConfig.exampleSamplePercentage`
     * You can provide more than one of these fields by separating them with
     * commas.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\EvaluationJob $evaluation_job
     *           Required. Evaluation job that is going to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. Mask for which fields to update. You can only provide the
     *           following fields:
     *           * `evaluationJobConfig.humanAnnotationConfig.instruction`
     *           * `evaluationJobConfig.exampleCount`
     *           * `evaluationJobConfig.exampleSamplePercentage`
     *           You can provide more than one of these fields by separating them with
     *           commas.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\DataLabelingService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Evaluation job that is going to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob evaluation_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\EvaluationJob
     */
    public function getEvaluationJob()
    {
        return isset($this->evaluation_job) ? $this->evaluation_job : null;
    }

    public function hasEvaluationJob()
    {
        return isset($this->evaluation_job);
    }

    public function clearEvaluationJob()
    {
        unset($this->evaluation_job);
    }

    /**
     * Required. Evaluation job that is going to be updated.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.EvaluationJob evaluation_job = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\EvaluationJob $var
     * @return $this
     */
    public function setEvaluationJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\EvaluationJob::class);
        $this->evaluation_job = $var;

        return $this;
    }

    /**
     * Optional. Mask for which fields to update. You can only provide the
     * following fields:
     * * `evaluationJobConfig.humanAnnotationConfig.instruction`
     * * `evaluationJobConfig.exampleCount`
     * * `evaluationJobConfig.exampleSamplePercentage`
     * You can provide more than one of these fields by separating them with
     * commas.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. Mask for which fields to update. You can only provide the
     * following fields:
     * * `evaluationJobConfig.humanAnnotationConfig.instruction`
     * * `evaluationJobConfig.exampleCount`
     * * `evaluationJobConfig.exampleSamplePercentage`
     * You can provide more than one of these fields by separating them with
     * commas.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

