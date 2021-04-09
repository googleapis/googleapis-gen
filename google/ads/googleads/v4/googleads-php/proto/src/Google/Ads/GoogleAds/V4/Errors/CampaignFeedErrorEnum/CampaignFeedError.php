<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/campaign_feed_error.proto

namespace Google\Ads\GoogleAds\V4\Errors\CampaignFeedErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible campaign feed errors.
 *
 * Protobuf type <code>google.ads.googleads.v4.errors.CampaignFeedErrorEnum.CampaignFeedError</code>
 */
class CampaignFeedError
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
     * An active feed already exists for this campaign and placeholder type.
     *
     * Generated from protobuf enum <code>FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;</code>
     */
    const FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 2;
    /**
     * The specified feed is removed.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_FOR_REMOVED_FEED = 4;</code>
     */
    const CANNOT_CREATE_FOR_REMOVED_FEED = 4;
    /**
     * The CampaignFeed already exists. UPDATE should be used to modify the
     * existing CampaignFeed.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED = 5;</code>
     */
    const CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED = 5;
    /**
     * Cannot update removed campaign feed.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED = 6;</code>
     */
    const CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED = 6;
    /**
     * Invalid placeholder type.
     *
     * Generated from protobuf enum <code>INVALID_PLACEHOLDER_TYPE = 7;</code>
     */
    const INVALID_PLACEHOLDER_TYPE = 7;
    /**
     * Feed mapping for this placeholder type does not exist.
     *
     * Generated from protobuf enum <code>MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 8;</code>
     */
    const MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE = 8;
    /**
     * Location CampaignFeeds cannot be created unless there is a location
     * CustomerFeed for the specified feed.
     *
     * Generated from protobuf enum <code>NO_EXISTING_LOCATION_CUSTOMER_FEED = 9;</code>
     */
    const NO_EXISTING_LOCATION_CUSTOMER_FEED = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE => 'FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE',
        self::CANNOT_CREATE_FOR_REMOVED_FEED => 'CANNOT_CREATE_FOR_REMOVED_FEED',
        self::CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED => 'CANNOT_CREATE_ALREADY_EXISTING_CAMPAIGN_FEED',
        self::CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED => 'CANNOT_MODIFY_REMOVED_CAMPAIGN_FEED',
        self::INVALID_PLACEHOLDER_TYPE => 'INVALID_PLACEHOLDER_TYPE',
        self::MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE => 'MISSING_FEEDMAPPING_FOR_PLACEHOLDER_TYPE',
        self::NO_EXISTING_LOCATION_CUSTOMER_FEED => 'NO_EXISTING_LOCATION_CUSTOMER_FEED',
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
class_alias(CampaignFeedError::class, \Google\Ads\GoogleAds\V4\Errors\CampaignFeedErrorEnum_CampaignFeedError::class);

