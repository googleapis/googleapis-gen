<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/maps/fleetengine/v1/vehicle_api.proto

namespace Maps\Fleetengine\V1\SearchVehiclesRequest;

use UnexpectedValueException;

/**
 * Specifies the sort order of the vehicle matches in the response.
 *
 * Protobuf type <code>maps.fleetengine.v1.SearchVehiclesRequest.VehicleMatchOrder</code>
 */
class VehicleMatchOrder
{
    /**
     * Default, used for unspecified or unrecognized vehicle matches order.
     *
     * Generated from protobuf enum <code>UNKNOWN_VEHICLE_MATCH_ORDER = 0;</code>
     */
    const UNKNOWN_VEHICLE_MATCH_ORDER = 0;
    /**
     * Ascending order by vehicle driving time to the pickup point.
     *
     * Generated from protobuf enum <code>PICKUP_POINT_ETA = 1;</code>
     */
    const PICKUP_POINT_ETA = 1;
    /**
     * Ascending order by the vehicle driving distance to the pickup point.
     *
     * Generated from protobuf enum <code>PICKUP_POINT_DISTANCE = 2;</code>
     */
    const PICKUP_POINT_DISTANCE = 2;
    /**
     * Ascending order by vehicle driving time to the dropoff point. This order
     * can only be used if the dropoff_point is specified in the request.
     *
     * Generated from protobuf enum <code>DROPOFF_POINT_ETA = 3;</code>
     */
    const DROPOFF_POINT_ETA = 3;
    /**
     * Ascending order by straightline distance from vehicle location to pickup
     * location. This is used primarily as a backup if the maps backend is not
     * reachable.
     *
     * Generated from protobuf enum <code>PICKUP_POINT_STRAIGHT_DISTANCE = 4;</code>
     */
    const PICKUP_POINT_STRAIGHT_DISTANCE = 4;
    /**
     * Ascending order by the match cost.
     *
     * Generated from protobuf enum <code>COST = 5;</code>
     */
    const COST = 5;

    private static $valueToName = [
        self::UNKNOWN_VEHICLE_MATCH_ORDER => 'UNKNOWN_VEHICLE_MATCH_ORDER',
        self::PICKUP_POINT_ETA => 'PICKUP_POINT_ETA',
        self::PICKUP_POINT_DISTANCE => 'PICKUP_POINT_DISTANCE',
        self::DROPOFF_POINT_ETA => 'DROPOFF_POINT_ETA',
        self::PICKUP_POINT_STRAIGHT_DISTANCE => 'PICKUP_POINT_STRAIGHT_DISTANCE',
        self::COST => 'COST',
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
class_alias(VehicleMatchOrder::class, \Maps\Fleetengine\V1\SearchVehiclesRequest_VehicleMatchOrder::class);

