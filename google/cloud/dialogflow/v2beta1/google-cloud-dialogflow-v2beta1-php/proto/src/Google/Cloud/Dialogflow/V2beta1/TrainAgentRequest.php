<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/agent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Agents.TrainAgent][google.cloud.dialogflow.v2beta1.Agents.TrainAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.TrainAgentRequest</code>
 */
class TrainAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to train is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project that the agent to train is associated with.
     *           Format: `projects/<Project ID>` or
     *                   `projects/<Project ID>/locations/<Location ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project that the agent to train is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to train is associated with.
     * Format: `projects/<Project ID>` or
     *         `projects/<Project ID>/locations/<Location ID>`.
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

}

