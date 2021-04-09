<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/criterion_category_availability.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information of advertising channel type and subtypes a category is available
 * in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.CriterionCategoryChannelAvailability</code>
 */
class CriterionCategoryChannelAvailability extends \Google\Protobuf\Internal\Message
{
    /**
     * Format of the channel availability. Can be ALL_CHANNELS (the rest of the
     * fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
     * will be set, the category is available to all sub types under it) or
     * CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
     * advertising_channel_sub_type, and include_default_channel_sub_type will all
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityMode availability_mode = 1;</code>
     */
    protected $availability_mode = 0;
    /**
     * Channel type the category is available to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 2;</code>
     */
    protected $advertising_channel_type = 0;
    /**
     * Channel subtypes under the channel type the category is available to.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 3;</code>
     */
    private $advertising_channel_sub_type;
    /**
     * Whether default channel sub type is included. For example,
     * advertising_channel_type being DISPLAY and include_default_channel_sub_type
     * being false means that the default display campaign where channel sub type
     * is not set is not included in this availability configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_default_channel_sub_type = 4;</code>
     */
    protected $include_default_channel_sub_type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $availability_mode
     *           Format of the channel availability. Can be ALL_CHANNELS (the rest of the
     *           fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
     *           will be set, the category is available to all sub types under it) or
     *           CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
     *           advertising_channel_sub_type, and include_default_channel_sub_type will all
     *           be set).
     *     @type int $advertising_channel_type
     *           Channel type the category is available to.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $advertising_channel_sub_type
     *           Channel subtypes under the channel type the category is available to.
     *     @type \Google\Protobuf\BoolValue $include_default_channel_sub_type
     *           Whether default channel sub type is included. For example,
     *           advertising_channel_type being DISPLAY and include_default_channel_sub_type
     *           being false means that the default display campaign where channel sub type
     *           is not set is not included in this availability configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\CriterionCategoryAvailability::initOnce();
        parent::__construct($data);
    }

    /**
     * Format of the channel availability. Can be ALL_CHANNELS (the rest of the
     * fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
     * will be set, the category is available to all sub types under it) or
     * CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
     * advertising_channel_sub_type, and include_default_channel_sub_type will all
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityMode availability_mode = 1;</code>
     * @return int
     */
    public function getAvailabilityMode()
    {
        return $this->availability_mode;
    }

    /**
     * Format of the channel availability. Can be ALL_CHANNELS (the rest of the
     * fields will not be set), CHANNEL_TYPE (only advertising_channel_type type
     * will be set, the category is available to all sub types under it) or
     * CHANNEL_TYPE_AND_SUBTYPES (advertising_channel_type,
     * advertising_channel_sub_type, and include_default_channel_sub_type will all
     * be set).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityMode availability_mode = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAvailabilityMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\CriterionCategoryChannelAvailabilityModeEnum\CriterionCategoryChannelAvailabilityMode::class);
        $this->availability_mode = $var;

        return $this;
    }

    /**
     * Channel type the category is available to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 2;</code>
     * @return int
     */
    public function getAdvertisingChannelType()
    {
        return $this->advertising_channel_type;
    }

    /**
     * Channel type the category is available to.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType advertising_channel_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAdvertisingChannelType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V5\Enums\AdvertisingChannelTypeEnum\AdvertisingChannelType::class);
        $this->advertising_channel_type = $var;

        return $this;
    }

    /**
     * Channel subtypes under the channel type the category is available to.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvertisingChannelSubType()
    {
        return $this->advertising_channel_sub_type;
    }

    /**
     * Channel subtypes under the channel type the category is available to.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v5.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType advertising_channel_sub_type = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvertisingChannelSubType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V5\Enums\AdvertisingChannelSubTypeEnum\AdvertisingChannelSubType::class);
        $this->advertising_channel_sub_type = $arr;

        return $this;
    }

    /**
     * Whether default channel sub type is included. For example,
     * advertising_channel_type being DISPLAY and include_default_channel_sub_type
     * being false means that the default display campaign where channel sub type
     * is not set is not included in this availability configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_default_channel_sub_type = 4;</code>
     * @return \Google\Protobuf\BoolValue|null
     */
    public function getIncludeDefaultChannelSubType()
    {
        return isset($this->include_default_channel_sub_type) ? $this->include_default_channel_sub_type : null;
    }

    public function hasIncludeDefaultChannelSubType()
    {
        return isset($this->include_default_channel_sub_type);
    }

    public function clearIncludeDefaultChannelSubType()
    {
        unset($this->include_default_channel_sub_type);
    }

    /**
     * Returns the unboxed value from <code>getIncludeDefaultChannelSubType()</code>

     * Whether default channel sub type is included. For example,
     * advertising_channel_type being DISPLAY and include_default_channel_sub_type
     * being false means that the default display campaign where channel sub type
     * is not set is not included in this availability configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_default_channel_sub_type = 4;</code>
     * @return bool|null
     */
    public function getIncludeDefaultChannelSubTypeUnwrapped()
    {
        return $this->readWrapperValue("include_default_channel_sub_type");
    }

    /**
     * Whether default channel sub type is included. For example,
     * advertising_channel_type being DISPLAY and include_default_channel_sub_type
     * being false means that the default display campaign where channel sub type
     * is not set is not included in this availability configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_default_channel_sub_type = 4;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIncludeDefaultChannelSubType($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->include_default_channel_sub_type = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether default channel sub type is included. For example,
     * advertising_channel_type being DISPLAY and include_default_channel_sub_type
     * being false means that the default display campaign where channel sub type
     * is not set is not included in this availability configuration.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_default_channel_sub_type = 4;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIncludeDefaultChannelSubTypeUnwrapped($var)
    {
        $this->writeWrapperValue("include_default_channel_sub_type", $var);
        return $this;}

}

