<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1\Intent;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single followup intent in the chain.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.FollowupIntentInfo</code>
 */
class FollowupIntentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier of the followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string followup_intent_name = 1;</code>
     */
    protected $followup_intent_name = '';
    /**
     * The unique identifier of the followup intent's parent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 2;</code>
     */
    protected $parent_followup_intent_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $followup_intent_name
     *           The unique identifier of the followup intent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *     @type string $parent_followup_intent_name
     *           The unique identifier of the followup intent's parent.
     *           Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier of the followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string followup_intent_name = 1;</code>
     * @return string
     */
    public function getFollowupIntentName()
    {
        return $this->followup_intent_name;
    }

    /**
     * The unique identifier of the followup intent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string followup_intent_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->followup_intent_name = $var;

        return $this;
    }

    /**
     * The unique identifier of the followup intent's parent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 2;</code>
     * @return string
     */
    public function getParentFollowupIntentName()
    {
        return $this->parent_followup_intent_name;
    }

    /**
     * The unique identifier of the followup intent's parent.
     * Format: `projects/<Project ID>/agent/intents/<Intent ID>`.
     *
     * Generated from protobuf field <code>string parent_followup_intent_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentFollowupIntentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_followup_intent_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FollowupIntentInfo::class, \Google\Cloud\Dialogflow\V2beta1\Intent_FollowupIntentInfo::class);

