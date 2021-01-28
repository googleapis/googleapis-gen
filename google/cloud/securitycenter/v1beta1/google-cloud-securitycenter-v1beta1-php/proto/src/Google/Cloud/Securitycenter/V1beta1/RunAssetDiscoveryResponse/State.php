<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1beta1/run_asset_discovery_response.proto

namespace Google\Cloud\Securitycenter\V1beta1\RunAssetDiscoveryResponse;

use UnexpectedValueException;

/**
 * The state of an asset discovery run.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1beta1.RunAssetDiscoveryResponse.State</code>
 */
class State
{
    /**
     * Asset discovery run state was unspecified.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Asset discovery run completed successfully.
     *
     * Generated from protobuf enum <code>COMPLETED = 1;</code>
     */
    const COMPLETED = 1;
    /**
     * Asset discovery run was cancelled with tasks still pending, as another
     * run for the same organization was started with a higher priority.
     *
     * Generated from protobuf enum <code>SUPERSEDED = 2;</code>
     */
    const SUPERSEDED = 2;
    /**
     * Asset discovery run was killed and terminated.
     *
     * Generated from protobuf enum <code>TERMINATED = 3;</code>
     */
    const TERMINATED = 3;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::COMPLETED => 'COMPLETED',
        self::SUPERSEDED => 'SUPERSEDED',
        self::TERMINATED => 'TERMINATED',
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
class_alias(State::class, \Google\Cloud\Securitycenter\V1beta1\RunAssetDiscoveryResponse_State::class);

