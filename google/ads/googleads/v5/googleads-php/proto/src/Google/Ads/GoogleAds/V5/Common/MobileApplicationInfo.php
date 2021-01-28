<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criteria.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mobile application criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.MobileApplicationInfo</code>
 */
class MobileApplicationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is "http://itunes.apple.com/us/app/flood-it!-2/id476943146").
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     */
    protected $app_id = null;
    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *           A string that uniquely identifies a mobile application to Google Ads API.
     *           The format of this string is "{platform}-{platform_native_id}", where
     *           platform is "1" for iOS apps and "2" for Android apps, and where
     *           platform_native_id is the mobile application identifier native to the
     *           corresponding platform.
     *           For iOS, this native identifier is the 9 digit string that appears at the
     *           end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     *           Store link is "http://itunes.apple.com/us/app/flood-it!-2/id476943146").
     *           For Android, this native identifier is the application's package name
     *           (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     *           "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
     *           A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     *           and "2-com.labpixies.colordrips" for Android.
     *           This field is required and must be set in CREATE operations.
     *     @type string $name
     *           Name of this mobile application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is "http://itunes.apple.com/us/app/flood-it!-2/id476943146").
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     * @return string
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : '';
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * A string that uniquely identifies a mobile application to Google Ads API.
     * The format of this string is "{platform}-{platform_native_id}", where
     * platform is "1" for iOS apps and "2" for Android apps, and where
     * platform_native_id is the mobile application identifier native to the
     * corresponding platform.
     * For iOS, this native identifier is the 9 digit string that appears at the
     * end of an App Store URL (e.g., "476943146" for "Flood-It! 2" whose App
     * Store link is "http://itunes.apple.com/us/app/flood-it!-2/id476943146").
     * For Android, this native identifier is the application's package name
     * (e.g., "com.labpixies.colordrips" for "Color Drips" given Google Play link
     * "https://play.google.com/store/apps/details?id=com.labpixies.colordrips").
     * A well formed app id for Google Ads API would thus be "1-476943146" for iOS
     * and "2-com.labpixies.colordrips" for Android.
     * This field is required and must be set in CREATE operations.
     *
     * Generated from protobuf field <code>string app_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Name of this mobile application.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

