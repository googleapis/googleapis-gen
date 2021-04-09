<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/target_cpa_opt_in_recommendation_goal.proto

namespace Google\Ads\GoogleAds\V4\Enums\TargetCpaOptInRecommendationGoalEnum;

use UnexpectedValueException;

/**
 * Goal of TargetCpaOptIn recommendation.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal</code>
 */
class TargetCpaOptInRecommendationGoal
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Recommendation to set Target CPA to maintain the same cost.
     *
     * Generated from protobuf enum <code>SAME_COST = 2;</code>
     */
    const SAME_COST = 2;
    /**
     * Recommendation to set Target CPA to maintain the same conversions.
     *
     * Generated from protobuf enum <code>SAME_CONVERSIONS = 3;</code>
     */
    const SAME_CONVERSIONS = 3;
    /**
     * Recommendation to set Target CPA to maintain the same CPA.
     *
     * Generated from protobuf enum <code>SAME_CPA = 4;</code>
     */
    const SAME_CPA = 4;
    /**
     * Recommendation to set Target CPA to a value that is as close as possible
     * to, yet lower than, the actual CPA (computed for past 28 days).
     *
     * Generated from protobuf enum <code>CLOSEST_CPA = 5;</code>
     */
    const CLOSEST_CPA = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SAME_COST => 'SAME_COST',
        self::SAME_CONVERSIONS => 'SAME_CONVERSIONS',
        self::SAME_CPA => 'SAME_CPA',
        self::CLOSEST_CPA => 'CLOSEST_CPA',
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
class_alias(TargetCpaOptInRecommendationGoal::class, \Google\Ads\GoogleAds\V4\Enums\TargetCpaOptInRecommendationGoalEnum_TargetCpaOptInRecommendationGoal::class);

