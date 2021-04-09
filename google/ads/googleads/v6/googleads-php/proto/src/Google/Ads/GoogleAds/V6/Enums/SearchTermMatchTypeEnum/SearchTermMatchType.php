<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/search_term_match_type.proto

namespace Google\Ads\GoogleAds\V6\Enums\SearchTermMatchTypeEnum;

use UnexpectedValueException;

/**
 * Possible match types for a keyword triggering an ad, including variants.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.SearchTermMatchTypeEnum.SearchTermMatchType</code>
 */
class SearchTermMatchType
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
     * Broad match.
     *
     * Generated from protobuf enum <code>BROAD = 2;</code>
     */
    const BROAD = 2;
    /**
     * Exact match.
     *
     * Generated from protobuf enum <code>EXACT = 3;</code>
     */
    const EXACT = 3;
    /**
     * Phrase match.
     *
     * Generated from protobuf enum <code>PHRASE = 4;</code>
     */
    const PHRASE = 4;
    /**
     * Exact match (close variant).
     *
     * Generated from protobuf enum <code>NEAR_EXACT = 5;</code>
     */
    const NEAR_EXACT = 5;
    /**
     * Phrase match (close variant).
     *
     * Generated from protobuf enum <code>NEAR_PHRASE = 6;</code>
     */
    const NEAR_PHRASE = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BROAD => 'BROAD',
        self::EXACT => 'EXACT',
        self::PHRASE => 'PHRASE',
        self::NEAR_EXACT => 'NEAR_EXACT',
        self::NEAR_PHRASE => 'NEAR_PHRASE',
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
class_alias(SearchTermMatchType::class, \Google\Ads\GoogleAds\V6\Enums\SearchTermMatchTypeEnum_SearchTermMatchType::class);

