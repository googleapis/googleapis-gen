<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stores a validation error and the set of offending feed attributes which
 * together are responsible for causing a feed item validation error.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.FeedItemValidationError</code>
 */
class FeedItemValidationError extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $validation_error = 0;
    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $description = null;
    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_attribute_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $feed_attribute_ids;
    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extra_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $extra_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $validation_error
     *           Output only. Error code indicating what validation error was triggered. The description
     *           of the error can be found in the 'description' field.
     *     @type \Google\Protobuf\StringValue $description
     *           Output only. The description of the validation error.
     *     @type \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $feed_attribute_ids
     *           Output only. Set of feed attributes in the feed item flagged during validation. If
     *           empty, no specific feed attributes can be associated with the error
     *           (e.g. error across the entire feed item).
     *     @type \Google\Protobuf\StringValue $extra_info
     *           Output only. Any extra information related to this error which is not captured by
     *           validation_error and feed_attribute_id (e.g. placeholder field IDs when
     *           feed_attribute_id is not mapped). Note that extra_info is not localized.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getValidationError()
    {
        return $this->validation_error;
    }

    /**
     * Output only. Error code indicating what validation error was triggered. The description
     * of the error can be found in the 'description' field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.FeedItemValidationErrorEnum.FeedItemValidationError validation_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setValidationError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Errors\FeedItemValidationErrorEnum\FeedItemValidationError::class);
        $this->validation_error = $var;

        return $this;
    }

    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : null;
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The description of the validation error.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_attribute_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeedAttributeIds()
    {
        return $this->feed_attribute_ids;
    }

    /**
     * Output only. Set of feed attributes in the feed item flagged during validation. If
     * empty, no specific feed attributes can be associated with the error
     * (e.g. error across the entire feed item).
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Int64Value feed_attribute_ids = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeedAttributeIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Int64Value::class);
        $this->feed_attribute_ids = $arr;

        return $this;
    }

    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extra_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExtraInfo()
    {
        return isset($this->extra_info) ? $this->extra_info : null;
    }

    public function hasExtraInfo()
    {
        return isset($this->extra_info);
    }

    public function clearExtraInfo()
    {
        unset($this->extra_info);
    }

    /**
     * Returns the unboxed value from <code>getExtraInfo()</code>

     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extra_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getExtraInfoUnwrapped()
    {
        return $this->readWrapperValue("extra_info");
    }

    /**
     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extra_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExtraInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->extra_info = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Any extra information related to this error which is not captured by
     * validation_error and feed_attribute_id (e.g. placeholder field IDs when
     * feed_attribute_id is not mapped). Note that extra_info is not localized.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extra_info = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setExtraInfoUnwrapped($var)
    {
        $this->writeWrapperValue("extra_info", $var);
        return $this;}

}

