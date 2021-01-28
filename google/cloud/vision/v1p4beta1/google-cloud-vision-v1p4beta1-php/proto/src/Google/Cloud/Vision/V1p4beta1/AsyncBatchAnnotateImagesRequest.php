<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p4beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for async image annotation for a list of images.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p4beta1.AsyncBatchAnnotateImagesRequest</code>
 */
class AsyncBatchAnnotateImagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p4beta1.AnnotateImageRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $requests;
    /**
     * Required. The desired output location and metadata (e.g. format).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p4beta1.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1p4beta1\AnnotateImageRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     *           Required. Individual image annotation requests for this batch.
     *     @type \Google\Cloud\Vision\V1p4beta1\OutputConfig $output_config
     *           Required. The desired output location and metadata (e.g. format).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P4Beta1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p4beta1.AnnotateImageRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Required. Individual image annotation requests for this batch.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p4beta1.AnnotateImageRequest requests = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Vision\V1p4beta1\AnnotateImageRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p4beta1\AnnotateImageRequest::class);
        $this->requests = $arr;

        return $this;
    }

    /**
     * Required. The desired output location and metadata (e.g. format).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p4beta1.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Vision\V1p4beta1\OutputConfig
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
     * Required. The desired output location and metadata (e.g. format).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p4beta1.OutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Vision\V1p4beta1\OutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p4beta1\OutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

