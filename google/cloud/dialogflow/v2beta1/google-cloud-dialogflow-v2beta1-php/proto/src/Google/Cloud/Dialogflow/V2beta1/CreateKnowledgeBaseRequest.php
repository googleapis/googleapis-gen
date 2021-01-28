<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/knowledge_base.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KnowledgeBases.CreateKnowledgeBase][google.cloud.dialogflow.v2beta1.KnowledgeBases.CreateKnowledgeBase].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.CreateKnowledgeBaseRequest</code>
 */
class CreateKnowledgeBaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project to create a knowledge base for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The knowledge base to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeBase knowledge_base = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $knowledge_base = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project to create a knowledge base for.
     *           Format: `projects/<Project ID>/locations/<Location ID>`.
     *     @type \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase $knowledge_base
     *           Required. The knowledge base to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\KnowledgeBase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project to create a knowledge base for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project to create a knowledge base for.
     * Format: `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The knowledge base to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeBase knowledge_base = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase
     */
    public function getKnowledgeBase()
    {
        return isset($this->knowledge_base) ? $this->knowledge_base : null;
    }

    public function hasKnowledgeBase()
    {
        return isset($this->knowledge_base);
    }

    public function clearKnowledgeBase()
    {
        unset($this->knowledge_base);
    }

    /**
     * Required. The knowledge base to create.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2beta1.KnowledgeBase knowledge_base = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase $var
     * @return $this
     */
    public function setKnowledgeBase($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\V2beta1\KnowledgeBase::class);
        $this->knowledge_base = $var;

        return $this;
    }

}

