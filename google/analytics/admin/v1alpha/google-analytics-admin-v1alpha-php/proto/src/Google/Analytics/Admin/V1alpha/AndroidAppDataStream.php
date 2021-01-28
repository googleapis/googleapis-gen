<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Google Analytics Android app stream.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AndroidAppDataStream</code>
 */
class AndroidAppDataStream extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/androidAppDataStreams/{stream_id}
     * Example: "properties/1000/androidAppDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. ID of the corresponding Android app in Firebase, if any.
     * This ID can change if the Android app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $firebase_app_id = '';
    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Immutable. The package name for the app being measured.
     * Example: "com.example.myandroidapp"
     *
     * Generated from protobuf field <code>string package_name = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $package_name = '';
    /**
     * Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    protected $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this Data Stream.
     *           Format: properties/{property_id}/androidAppDataStreams/{stream_id}
     *           Example: "properties/1000/androidAppDataStreams/2000"
     *     @type string $firebase_app_id
     *           Output only. ID of the corresponding Android app in Firebase, if any.
     *           This ID can change if the Android app is deleted and recreated.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this stream was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when stream payload fields were last updated.
     *     @type string $package_name
     *           Immutable. The package name for the app being measured.
     *           Example: "com.example.myandroidapp"
     *     @type string $display_name
     *           Human-readable display name for the Data Stream.
     *           The max allowed display name length is 255 UTF-16 code units.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/androidAppDataStreams/{stream_id}
     * Example: "properties/1000/androidAppDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this Data Stream.
     * Format: properties/{property_id}/androidAppDataStreams/{stream_id}
     * Example: "properties/1000/androidAppDataStreams/2000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. ID of the corresponding Android app in Firebase, if any.
     * This ID can change if the Android app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFirebaseAppId()
    {
        return $this->firebase_app_id;
    }

    /**
     * Output only. ID of the corresponding Android app in Firebase, if any.
     * This ID can change if the Android app is deleted and recreated.
     *
     * Generated from protobuf field <code>string firebase_app_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFirebaseAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->firebase_app_id = $var;

        return $this;
    }

    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when this stream was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when stream payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Immutable. The package name for the app being measured.
     * Example: "com.example.myandroidapp"
     *
     * Generated from protobuf field <code>string package_name = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getPackageName()
    {
        return $this->package_name;
    }

    /**
     * Immutable. The package name for the app being measured.
     * Example: "com.example.myandroidapp"
     *
     * Generated from protobuf field <code>string package_name = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setPackageName($var)
    {
        GPBUtil::checkString($var, True);
        $this->package_name = $var;

        return $this;
    }

    /**
     * Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human-readable display name for the Data Stream.
     * The max allowed display name length is 255 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

