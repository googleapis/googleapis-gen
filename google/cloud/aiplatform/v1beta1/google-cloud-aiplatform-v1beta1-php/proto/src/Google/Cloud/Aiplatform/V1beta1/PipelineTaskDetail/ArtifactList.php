<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/pipeline_job.proto

namespace Google\Cloud\Aiplatform\V1beta1\PipelineTaskDetail;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of artifact metadata.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.PipelineTaskDetail.ArtifactList</code>
 */
class ArtifactList extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A list of artifact metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.Artifact artifacts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $artifacts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Aiplatform\V1beta1\Artifact[]|\Google\Protobuf\Internal\RepeatedField $artifacts
     *           Output only. A list of artifact metadata.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\PipelineJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A list of artifact metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.Artifact artifacts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }

    /**
     * Output only. A list of artifact metadata.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.Artifact artifacts = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\Artifact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArtifacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Aiplatform\V1beta1\Artifact::class);
        $this->artifacts = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ArtifactList::class, \Google\Cloud\Aiplatform\V1beta1\PipelineTaskDetail_ArtifactList::class);

