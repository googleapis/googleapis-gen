<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/model_service.proto

namespace Google\Cloud\Aiplatform\V1beta1\ExportModelOperationMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Further describes the output of the ExportModel. Supplements
 * [ExportModelRequest.OutputConfig][google.cloud.aiplatform.v1beta1.ExportModelRequest.OutputConfig].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.ExportModelOperationMetadata.OutputInfo</code>
 */
class OutputInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. If the Model artifact is being exported to Google Cloud Storage this is
     * the full path of the directory created, into which the Model files are
     * being written to.
     *
     * Generated from protobuf field <code>string artifact_output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $artifact_output_uri = '';
    /**
     * Output only. If the Model image is being exported to Google Container Registry or
     * Artifact Registry this is the full path of the image created.
     *
     * Generated from protobuf field <code>string image_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $image_output_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $artifact_output_uri
     *           Output only. If the Model artifact is being exported to Google Cloud Storage this is
     *           the full path of the directory created, into which the Model files are
     *           being written to.
     *     @type string $image_output_uri
     *           Output only. If the Model image is being exported to Google Container Registry or
     *           Artifact Registry this is the full path of the image created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\ModelService::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. If the Model artifact is being exported to Google Cloud Storage this is
     * the full path of the directory created, into which the Model files are
     * being written to.
     *
     * Generated from protobuf field <code>string artifact_output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getArtifactOutputUri()
    {
        return $this->artifact_output_uri;
    }

    /**
     * Output only. If the Model artifact is being exported to Google Cloud Storage this is
     * the full path of the directory created, into which the Model files are
     * being written to.
     *
     * Generated from protobuf field <code>string artifact_output_uri = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_output_uri = $var;

        return $this;
    }

    /**
     * Output only. If the Model image is being exported to Google Container Registry or
     * Artifact Registry this is the full path of the image created.
     *
     * Generated from protobuf field <code>string image_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getImageOutputUri()
    {
        return $this->image_output_uri;
    }

    /**
     * Output only. If the Model image is being exported to Google Container Registry or
     * Artifact Registry this is the full path of the image created.
     *
     * Generated from protobuf field <code>string image_output_uri = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setImageOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_output_uri = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OutputInfo::class, \Google\Cloud\Aiplatform\V1beta1\ExportModelOperationMetadata_OutputInfo::class);

