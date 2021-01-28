<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/positive_geo_target_type.proto

namespace Google\Ads\GoogleAds\V4\Enums\PositiveGeoTargetTypeEnum;

use UnexpectedValueException;

/**
 * The possible positive geo target types.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.PositiveGeoTargetTypeEnum.PositiveGeoTargetType</code>
 */
class PositiveGeoTargetType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Specifies that an ad is triggered if the user is in,
     * or shows interest in, advertiser's targeted locations.
     *
     * Generated from protobuf enum <code>PRESENCE_OR_INTEREST = 5;</code>
     */
    const PRESENCE_OR_INTEREST = 5;
    /**
     * Specifies that an ad is triggered if the user
     * searches for advertiser's targeted locations.
     * This can only be used with Search and standard
     * Shopping campaigns.
     *
     * Generated from protobuf enum <code>SEARCH_INTEREST = 6;</code>
     */
    const SEARCH_INTEREST = 6;
    /**
     * Specifies that an ad is triggered if the user is in
     * or regularly in advertiser's targeted locations.
     *
     * Generated from protobuf enum <code>PRESENCE = 7;</code>
     */
    const PRESENCE = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PRESENCE_OR_INTEREST => 'PRESENCE_OR_INTEREST',
        self::SEARCH_INTEREST => 'SEARCH_INTEREST',
        self::PRESENCE => 'PRESENCE',
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
class_alias(PositiveGeoTargetType::class, \Google\Ads\GoogleAds\V4\Enums\PositiveGeoTargetTypeEnum_PositiveGeoTargetType::class);

