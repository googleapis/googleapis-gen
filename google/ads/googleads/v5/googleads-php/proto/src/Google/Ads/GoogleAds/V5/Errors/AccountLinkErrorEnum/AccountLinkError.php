<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/account_link_error.proto

namespace Google\Ads\GoogleAds\V5\Errors\AccountLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible account link errors.
 *
 * Protobuf type <code>google.ads.googleads.v5.errors.AccountLinkErrorEnum.AccountLinkError</code>
 */
class AccountLinkError
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
     * The new link status is invalid.
     *
     * Generated from protobuf enum <code>INVALID_STATUS = 2;</code>
     */
    const INVALID_STATUS = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_STATUS => 'INVALID_STATUS',
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
class_alias(AccountLinkError::class, \Google\Ads\GoogleAds\V5\Errors\AccountLinkErrorEnum_AccountLinkError::class);

