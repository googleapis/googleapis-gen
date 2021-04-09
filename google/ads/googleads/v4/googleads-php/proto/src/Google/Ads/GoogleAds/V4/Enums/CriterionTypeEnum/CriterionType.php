<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/criterion_type.proto

namespace Google\Ads\GoogleAds\V4\Enums\CriterionTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible criterion types.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.CriterionTypeEnum.CriterionType</code>
 */
class CriterionType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Keyword. e.g. 'mars cruise'.
     *
     * Generated from protobuf enum <code>KEYWORD = 2;</code>
     */
    const KEYWORD = 2;
    /**
     * Placement, aka Website. e.g. 'www.flowers4sale.com'
     *
     * Generated from protobuf enum <code>PLACEMENT = 3;</code>
     */
    const PLACEMENT = 3;
    /**
     * Mobile application categories to target.
     *
     * Generated from protobuf enum <code>MOBILE_APP_CATEGORY = 4;</code>
     */
    const MOBILE_APP_CATEGORY = 4;
    /**
     * Mobile applications to target.
     *
     * Generated from protobuf enum <code>MOBILE_APPLICATION = 5;</code>
     */
    const MOBILE_APPLICATION = 5;
    /**
     * Devices to target.
     *
     * Generated from protobuf enum <code>DEVICE = 6;</code>
     */
    const DEVICE = 6;
    /**
     * Locations to target.
     *
     * Generated from protobuf enum <code>LOCATION = 7;</code>
     */
    const LOCATION = 7;
    /**
     * Listing groups to target.
     *
     * Generated from protobuf enum <code>LISTING_GROUP = 8;</code>
     */
    const LISTING_GROUP = 8;
    /**
     * Ad Schedule.
     *
     * Generated from protobuf enum <code>AD_SCHEDULE = 9;</code>
     */
    const AD_SCHEDULE = 9;
    /**
     * Age range.
     *
     * Generated from protobuf enum <code>AGE_RANGE = 10;</code>
     */
    const AGE_RANGE = 10;
    /**
     * Gender.
     *
     * Generated from protobuf enum <code>GENDER = 11;</code>
     */
    const GENDER = 11;
    /**
     * Income Range.
     *
     * Generated from protobuf enum <code>INCOME_RANGE = 12;</code>
     */
    const INCOME_RANGE = 12;
    /**
     * Parental status.
     *
     * Generated from protobuf enum <code>PARENTAL_STATUS = 13;</code>
     */
    const PARENTAL_STATUS = 13;
    /**
     * YouTube Video.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO = 14;</code>
     */
    const YOUTUBE_VIDEO = 14;
    /**
     * YouTube Channel.
     *
     * Generated from protobuf enum <code>YOUTUBE_CHANNEL = 15;</code>
     */
    const YOUTUBE_CHANNEL = 15;
    /**
     * User list.
     *
     * Generated from protobuf enum <code>USER_LIST = 16;</code>
     */
    const USER_LIST = 16;
    /**
     * Proximity.
     *
     * Generated from protobuf enum <code>PROXIMITY = 17;</code>
     */
    const PROXIMITY = 17;
    /**
     * A topic target on the display network (e.g. "Pets & Animals").
     *
     * Generated from protobuf enum <code>TOPIC = 18;</code>
     */
    const TOPIC = 18;
    /**
     * Listing scope to target.
     *
     * Generated from protobuf enum <code>LISTING_SCOPE = 19;</code>
     */
    const LISTING_SCOPE = 19;
    /**
     * Language.
     *
     * Generated from protobuf enum <code>LANGUAGE = 20;</code>
     */
    const LANGUAGE = 20;
    /**
     * IpBlock.
     *
     * Generated from protobuf enum <code>IP_BLOCK = 21;</code>
     */
    const IP_BLOCK = 21;
    /**
     * Content Label for category exclusion.
     *
     * Generated from protobuf enum <code>CONTENT_LABEL = 22;</code>
     */
    const CONTENT_LABEL = 22;
    /**
     * Carrier.
     *
     * Generated from protobuf enum <code>CARRIER = 23;</code>
     */
    const CARRIER = 23;
    /**
     * A category the user is interested in.
     *
     * Generated from protobuf enum <code>USER_INTEREST = 24;</code>
     */
    const USER_INTEREST = 24;
    /**
     * Webpage criterion for dynamic search ads.
     *
     * Generated from protobuf enum <code>WEBPAGE = 25;</code>
     */
    const WEBPAGE = 25;
    /**
     * Operating system version.
     *
     * Generated from protobuf enum <code>OPERATING_SYSTEM_VERSION = 26;</code>
     */
    const OPERATING_SYSTEM_VERSION = 26;
    /**
     * App payment model.
     *
     * Generated from protobuf enum <code>APP_PAYMENT_MODEL = 27;</code>
     */
    const APP_PAYMENT_MODEL = 27;
    /**
     * Mobile device.
     *
     * Generated from protobuf enum <code>MOBILE_DEVICE = 28;</code>
     */
    const MOBILE_DEVICE = 28;
    /**
     * Custom affinity.
     *
     * Generated from protobuf enum <code>CUSTOM_AFFINITY = 29;</code>
     */
    const CUSTOM_AFFINITY = 29;
    /**
     * Custom intent.
     *
     * Generated from protobuf enum <code>CUSTOM_INTENT = 30;</code>
     */
    const CUSTOM_INTENT = 30;
    /**
     * Location group.
     *
     * Generated from protobuf enum <code>LOCATION_GROUP = 31;</code>
     */
    const LOCATION_GROUP = 31;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::KEYWORD => 'KEYWORD',
        self::PLACEMENT => 'PLACEMENT',
        self::MOBILE_APP_CATEGORY => 'MOBILE_APP_CATEGORY',
        self::MOBILE_APPLICATION => 'MOBILE_APPLICATION',
        self::DEVICE => 'DEVICE',
        self::LOCATION => 'LOCATION',
        self::LISTING_GROUP => 'LISTING_GROUP',
        self::AD_SCHEDULE => 'AD_SCHEDULE',
        self::AGE_RANGE => 'AGE_RANGE',
        self::GENDER => 'GENDER',
        self::INCOME_RANGE => 'INCOME_RANGE',
        self::PARENTAL_STATUS => 'PARENTAL_STATUS',
        self::YOUTUBE_VIDEO => 'YOUTUBE_VIDEO',
        self::YOUTUBE_CHANNEL => 'YOUTUBE_CHANNEL',
        self::USER_LIST => 'USER_LIST',
        self::PROXIMITY => 'PROXIMITY',
        self::TOPIC => 'TOPIC',
        self::LISTING_SCOPE => 'LISTING_SCOPE',
        self::LANGUAGE => 'LANGUAGE',
        self::IP_BLOCK => 'IP_BLOCK',
        self::CONTENT_LABEL => 'CONTENT_LABEL',
        self::CARRIER => 'CARRIER',
        self::USER_INTEREST => 'USER_INTEREST',
        self::WEBPAGE => 'WEBPAGE',
        self::OPERATING_SYSTEM_VERSION => 'OPERATING_SYSTEM_VERSION',
        self::APP_PAYMENT_MODEL => 'APP_PAYMENT_MODEL',
        self::MOBILE_DEVICE => 'MOBILE_DEVICE',
        self::CUSTOM_AFFINITY => 'CUSTOM_AFFINITY',
        self::CUSTOM_INTENT => 'CUSTOM_INTENT',
        self::LOCATION_GROUP => 'LOCATION_GROUP',
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
class_alias(CriterionType::class, \Google\Ads\GoogleAds\V4\Enums\CriterionTypeEnum_CriterionType::class);

