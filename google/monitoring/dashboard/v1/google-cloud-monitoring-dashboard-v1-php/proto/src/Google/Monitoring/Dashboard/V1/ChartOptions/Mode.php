<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/dashboard/v1/xychart.proto

namespace Google\Monitoring\Dashboard\V1\ChartOptions;

use UnexpectedValueException;

/**
 * Chart mode options.
 *
 * Protobuf type <code>google.monitoring.dashboard.v1.ChartOptions.Mode</code>
 */
class Mode
{
    /**
     * Mode is unspecified. The view will default to `COLOR`.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * The chart distinguishes data series using different color. Line
     * colors may get reused when there are many lines in the chart.
     *
     * Generated from protobuf enum <code>COLOR = 1;</code>
     */
    const COLOR = 1;
    /**
     * The chart uses the Stackdriver x-ray mode, in which each
     * data set is plotted using the same semi-transparent color.
     *
     * Generated from protobuf enum <code>X_RAY = 2;</code>
     */
    const X_RAY = 2;
    /**
     * The chart displays statistics such as average, median, 95th percentile,
     * and more.
     *
     * Generated from protobuf enum <code>STATS = 3;</code>
     */
    const STATS = 3;

    private static $valueToName = [
        self::MODE_UNSPECIFIED => 'MODE_UNSPECIFIED',
        self::COLOR => 'COLOR',
        self::X_RAY => 'X_RAY',
        self::STATS => 'STATS',
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
class_alias(Mode::class, \Google\Monitoring\Dashboard\V1\ChartOptions_Mode::class);

