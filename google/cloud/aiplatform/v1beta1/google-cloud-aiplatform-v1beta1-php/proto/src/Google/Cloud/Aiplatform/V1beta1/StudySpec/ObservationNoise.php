<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/study.proto

namespace Google\Cloud\Aiplatform\V1beta1\StudySpec;

use UnexpectedValueException;

/**
 * Describes the noise level of the repeated observations.
 * "Noisy" means that the repeated observations with the same Trial parameters
 * may lead to different metric evaluations.
 *
 * Protobuf type <code>google.cloud.aiplatform.v1beta1.StudySpec.ObservationNoise</code>
 */
class ObservationNoise
{
    /**
     * The default noise level chosen by the AI Platform service.
     *
     * Generated from protobuf enum <code>OBSERVATION_NOISE_UNSPECIFIED = 0;</code>
     */
    const OBSERVATION_NOISE_UNSPECIFIED = 0;
    /**
     * AI Platform Vizier assumes that the objective function is (nearly)
     * perfectly reproducible, and will never repeat the same Trial
     * parameters.
     *
     * Generated from protobuf enum <code>LOW = 1;</code>
     */
    const LOW = 1;
    /**
     * AI Platform Vizier will estimate the amount of noise in metric
     * evaluations, it may repeat the same Trial parameters more than once.
     *
     * Generated from protobuf enum <code>HIGH = 2;</code>
     */
    const HIGH = 2;

    private static $valueToName = [
        self::OBSERVATION_NOISE_UNSPECIFIED => 'OBSERVATION_NOISE_UNSPECIFIED',
        self::LOW => 'LOW',
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
class_alias(ObservationNoise::class, \Google\Cloud\Aiplatform\V1beta1\StudySpec_ObservationNoise::class);

