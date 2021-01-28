<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Devtools\Cloudprofiler\V2;

use UnexpectedValueException;

/**
 * ProfileType is type of profiling data.
 * NOTE: the enumeration member names are used (in lowercase) as unique string
 * identifiers of profile types, so they must not be renamed.
 *
 * Protobuf type <code>google.devtools.cloudprofiler.v2.ProfileType</code>
 */
class ProfileType
{
    /**
     * Unspecified profile type.
     *
     * Generated from protobuf enum <code>PROFILE_TYPE_UNSPECIFIED = 0;</code>
     */
    const PROFILE_TYPE_UNSPECIFIED = 0;
    /**
     * Thread CPU time sampling.
     *
     * Generated from protobuf enum <code>CPU = 1;</code>
     */
    const CPU = 1;
    /**
     * Wallclock time sampling. More expensive as stops all threads.
     *
     * Generated from protobuf enum <code>WALL = 2;</code>
     */
    const WALL = 2;
    /**
     * In-use heap profile. Represents a snapshot of the allocations that are
     * live at the time of the profiling.
     *
     * Generated from protobuf enum <code>HEAP = 3;</code>
     */
    const HEAP = 3;
    /**
     * Single-shot collection of all thread stacks.
     *
     * Generated from protobuf enum <code>THREADS = 4;</code>
     */
    const THREADS = 4;
    /**
     * Synchronization contention profile.
     *
     * Generated from protobuf enum <code>CONTENTION = 5;</code>
     */
    const CONTENTION = 5;
    /**
     * Peak heap profile.
     *
     * Generated from protobuf enum <code>PEAK_HEAP = 6;</code>
     */
    const PEAK_HEAP = 6;
    /**
     * Heap allocation profile. It represents the aggregation of all allocations
     * made over the duration of the profile. All allocations are included,
     * including those that might have been freed by the end of the profiling
     * interval. The profile is in particular useful for garbage collecting
     * languages to understand which parts of the code create most of the garbage
     * collection pressure to see if those can be optimized.
     *
     * Generated from protobuf enum <code>HEAP_ALLOC = 7;</code>
     */
    const HEAP_ALLOC = 7;

    private static $valueToName = [
        self::PROFILE_TYPE_UNSPECIFIED => 'PROFILE_TYPE_UNSPECIFIED',
        self::CPU => 'CPU',
        self::WALL => 'WALL',
        self::HEAP => 'HEAP',
        self::THREADS => 'THREADS',
        self::CONTENTION => 'CONTENTION',
        self::PEAK_HEAP => 'PEAK_HEAP',
        self::HEAP_ALLOC => 'HEAP_ALLOC',
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

