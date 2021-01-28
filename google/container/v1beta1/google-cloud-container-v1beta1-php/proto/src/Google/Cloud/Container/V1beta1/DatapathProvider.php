<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1beta1/cluster_service.proto

namespace Google\Cloud\Container\V1beta1;

use UnexpectedValueException;

/**
 * The datapath provider selects the implementation of the Kubernetes networking
 * // model for service resolution and network policy enforcement.
 *
 * Protobuf type <code>google.container.v1beta1.DatapathProvider</code>
 */
class DatapathProvider
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>DATAPATH_PROVIDER_UNSPECIFIED = 0;</code>
     */
    const DATAPATH_PROVIDER_UNSPECIFIED = 0;
    /**
     * Use the IPTables implementation based on kube-proxy.
     *
     * Generated from protobuf enum <code>LEGACY_DATAPATH = 1;</code>
     */
    const LEGACY_DATAPATH = 1;
    /**
     * Use the eBPF based GKE Dataplane V2 with additional features. See the [GKE
     * Dataplane V2
     * documentation](https://cloud.google.com/kubernetes-enginw/docs/how-to/dataplane-v2)
     * for more.
     *
     * Generated from protobuf enum <code>ADVANCED_DATAPATH = 2;</code>
     */
    const ADVANCED_DATAPATH = 2;

    private static $valueToName = [
        self::DATAPATH_PROVIDER_UNSPECIFIED => 'DATAPATH_PROVIDER_UNSPECIFIED',
        self::LEGACY_DATAPATH => 'LEGACY_DATAPATH',
        self::ADVANCED_DATAPATH => 'ADVANCED_DATAPATH',
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

