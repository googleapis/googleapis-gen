<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/optimization_goal_type.proto

namespace Google\Ads\GoogleAds\V4\Enums\OptimizationGoalTypeEnum;

use UnexpectedValueException;

/**
 * The type of optimization goal
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.OptimizationGoalTypeEnum.OptimizationGoalType</code>
 */
class OptimizationGoalType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used as a return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Optimize for call clicks. Call click conversions are times people
     * selected 'Call' to contact a store after viewing an ad.
     *
     * Generated from protobuf enum <code>CALL_CLICKS = 2;</code>
     */
    const CALL_CLICKS = 2;
    /**
     * Optimize for driving directions. Driving directions conversions are
     * times people selected 'Get directions' to navigate to a store after
     * viewing an ad.
     *
     * Generated from protobuf enum <code>DRIVING_DIRECTIONS = 3;</code>
     */
    const DRIVING_DIRECTIONS = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CALL_CLICKS => 'CALL_CLICKS',
        self::DRIVING_DIRECTIONS => 'DRIVING_DIRECTIONS',
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
class_alias(OptimizationGoalType::class, \Google\Ads\GoogleAds\V4\Enums\OptimizationGoalTypeEnum_OptimizationGoalType::class);

