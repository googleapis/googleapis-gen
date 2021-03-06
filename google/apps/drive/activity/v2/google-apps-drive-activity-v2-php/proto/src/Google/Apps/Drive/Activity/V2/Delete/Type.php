<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/apps/drive/activity/v2/action.proto

namespace Google\Apps\Drive\Activity\V2\Delete;

use UnexpectedValueException;

/**
 * The type of deletion.
 *
 * Protobuf type <code>google.apps.drive.activity.v2.Delete.Type</code>
 */
class Type
{
    /**
     * Deletion type is not available.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * An object was put into the trash.
     *
     * Generated from protobuf enum <code>TRASH = 1;</code>
     */
    const TRASH = 1;
    /**
     * An object was deleted permanently.
     *
     * Generated from protobuf enum <code>PERMANENT_DELETE = 2;</code>
     */
    const PERMANENT_DELETE = 2;

    private static $valueToName = [
        self::TYPE_UNSPECIFIED => 'TYPE_UNSPECIFIED',
        self::TRASH => 'TRASH',
        self::PERMANENT_DELETE => 'PERMANENT_DELETE',
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
class_alias(Type::class, \Google\Apps\Drive\Activity\V2\Delete_Type::class);

