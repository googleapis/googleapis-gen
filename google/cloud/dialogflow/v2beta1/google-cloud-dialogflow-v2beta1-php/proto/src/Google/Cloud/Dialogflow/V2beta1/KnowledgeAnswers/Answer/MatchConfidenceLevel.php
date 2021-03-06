<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/session.proto

namespace Google\Cloud\Dialogflow\V2beta1\KnowledgeAnswers\Answer;

use UnexpectedValueException;

/**
 * Represents the system's confidence that this knowledge answer is a good
 * match for this conversational query.
 *
 * Protobuf type <code>google.cloud.dialogflow.v2beta1.KnowledgeAnswers.Answer.MatchConfidenceLevel</code>
 */
class MatchConfidenceLevel
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>MATCH_CONFIDENCE_LEVEL_UNSPECIFIED = 0;</code>
     */
    const MATCH_CONFIDENCE_LEVEL_UNSPECIFIED = 0;
    /**
     * Indicates that the confidence is low.
     *
     * Generated from protobuf enum <code>LOW = 1;</code>
     */
    const LOW = 1;
    /**
     * Indicates our confidence is medium.
     *
     * Generated from protobuf enum <code>MEDIUM = 2;</code>
     */
    const MEDIUM = 2;
    /**
     * Indicates our confidence is high.
     *
     * Generated from protobuf enum <code>HIGH = 3;</code>
     */
    const HIGH = 3;

    private static $valueToName = [
        self::MATCH_CONFIDENCE_LEVEL_UNSPECIFIED => 'MATCH_CONFIDENCE_LEVEL_UNSPECIFIED',
        self::LOW => 'LOW',
        self::MEDIUM => 'MEDIUM',
        self::HIGH => 'HIGH',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MatchConfidenceLevel::class, \Google\Cloud\Dialogflow\V2beta1\KnowledgeAnswers_Answer_MatchConfidenceLevel::class);

