<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/collection_size_error.proto

namespace Google\Ads\GoogleAds\V3\Errors\CollectionSizeErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible collection size errors.
 *
 * Protobuf type <code>google.ads.googleads.v3.errors.CollectionSizeErrorEnum.CollectionSizeError</code>
 */
class CollectionSizeError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Too few.
     *
     * Generated from protobuf enum <code>TOO_FEW = 2;</code>
     */
    const TOO_FEW = 2;
    /**
     * Too many.
     *
     * Generated from protobuf enum <code>TOO_MANY = 3;</code>
     */
    const TOO_MANY = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TOO_FEW => 'TOO_FEW',
        self::TOO_MANY => 'TOO_MANY',
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
class_alias(CollectionSizeError::class, \Google\Ads\GoogleAds\V3\Errors\CollectionSizeErrorEnum_CollectionSizeError::class);

