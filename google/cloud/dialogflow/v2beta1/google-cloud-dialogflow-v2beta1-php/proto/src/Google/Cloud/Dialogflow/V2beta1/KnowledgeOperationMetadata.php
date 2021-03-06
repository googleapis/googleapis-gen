<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/document.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata in google::longrunning::Operation for Knowledge operations.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata</code>
 */
class KnowledgeOperationMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $state
     *           Required. Output only. The current state of this operation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Document::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Required. Output only. The current state of this operation.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeOperationMetadata.State state = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2beta1\KnowledgeOperationMetadata\State::class);
        $this->state = $var;

        return $this;
    }

}

