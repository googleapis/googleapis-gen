<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/settings/v1beta1/component_settings.proto

namespace Google\Cloud\SecurityCenter\Settings\V1beta1;

use UnexpectedValueException;

/**
 * Valid states for a component
 *
 * Protobuf type <code>google.cloud.securitycenter.settings.v1beta1.ComponentEnablementState</code>
 */
class ComponentEnablementState
{
    /**
     * No state specified, equivalent of INHERIT
     *
     * Generated from protobuf enum <code>COMPONENT_ENABLEMENT_STATE_UNSPECIFIED = 0;</code>
     */
    const COMPONENT_ENABLEMENT_STATE_UNSPECIFIED = 0;
    /**
     * Disable the component
     *
     * Generated from protobuf enum <code>DISABLE = 1;</code>
     */
    const DISABLE = 1;
    /**
     * Enable the component
     *
     * Generated from protobuf enum <code>ENABLE = 2;</code>
     */
    const ENABLE = 2;
    /**
     * Inherit the state from resources parent folder or organization.
     *
     * Generated from protobuf enum <code>INHERIT = 3;</code>
     */
    const INHERIT = 3;

    private static $valueToName = [
        self::COMPONENT_ENABLEMENT_STATE_UNSPECIFIED => 'COMPONENT_ENABLEMENT_STATE_UNSPECIFIED',
        self::DISABLE => 'DISABLE',
        self::ENABLE => 'ENABLE',
        self::INHERIT => 'INHERIT',
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

