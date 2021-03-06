<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/product_search.proto

namespace Google\Cloud\Vision\V1p3beta1;

use UnexpectedValueException;

/**
 * Supported product search categories.
 *
 * Protobuf type <code>google.cloud.vision.v1p3beta1.ProductSearchCategory</code>
 */
class ProductSearchCategory
{
    /**
     * Default value used when a category is not specified.
     *
     * Generated from protobuf enum <code>PRODUCT_SEARCH_CATEGORY_UNSPECIFIED = 0;</code>
     */
    const PRODUCT_SEARCH_CATEGORY_UNSPECIFIED = 0;
    /**
     * Shoes category.
     *
     * Generated from protobuf enum <code>SHOES = 1;</code>
     */
    const SHOES = 1;
    /**
     * Bags category.
     *
     * Generated from protobuf enum <code>BAGS = 2;</code>
     */
    const BAGS = 2;

    private static $valueToName = [
        self::PRODUCT_SEARCH_CATEGORY_UNSPECIFIED => 'PRODUCT_SEARCH_CATEGORY_UNSPECIFIED',
        self::SHOES => 'SHOES',
        self::BAGS => 'BAGS',
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

