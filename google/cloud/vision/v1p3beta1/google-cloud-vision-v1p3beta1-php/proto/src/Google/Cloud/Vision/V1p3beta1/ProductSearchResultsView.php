<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/product_search.proto

namespace Google\Cloud\Vision\V1p3beta1;

use UnexpectedValueException;

/**
 * Specifies the fields to include in product search results.
 *
 * Protobuf type <code>google.cloud.vision.v1p3beta1.ProductSearchResultsView</code>
 */
class ProductSearchResultsView
{
    /**
     * Product search results contain only `product_category` and `product_id`.
     * Default value.
     *
     * Generated from protobuf enum <code>BASIC = 0;</code>
     */
    const BASIC = 0;
    /**
     * Product search results contain `product_category`, `product_id`,
     * `image_uri`, and `score`.
     *
     * Generated from protobuf enum <code>FULL = 1;</code>
     */
    const FULL = 1;

    private static $valueToName = [
        self::BASIC => 'BASIC',
        self::FULL => 'FULL',
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

