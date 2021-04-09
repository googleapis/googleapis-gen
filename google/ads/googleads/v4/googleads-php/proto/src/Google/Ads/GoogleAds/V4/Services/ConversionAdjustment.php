<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion adjustment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.ConversionAdjustment</code>
 */
class ConversionAdjustment extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue adjustment_date_time = 4;</code>
     */
    protected $adjustment_date_time = null;
    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     */
    protected $adjustment_type = 0;
    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.RestatementValue restatement_value = 6;</code>
     */
    protected $restatement_value = null;
    protected $conversion_identifier;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $conversion_action
     *           Resource name of the conversion action associated with this conversion
     *           adjustment. Note: Although this resource name consists of a customer id and
     *           a conversion action id, validation will ignore the customer id and use the
     *           conversion action id as the sole identifier of the conversion action.
     *     @type \Google\Protobuf\StringValue $adjustment_date_time
     *           The date time at which the adjustment occurred. Must be after the
     *           conversion_date_time. The timezone must be specified. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *     @type int $adjustment_type
     *           The adjustment type.
     *     @type \Google\Ads\GoogleAds\V4\Services\RestatementValue $restatement_value
     *           Information needed to restate the conversion's value.
     *           Required for restatements. Should not be supplied for retractions. An error
     *           will be returned if provided for a retraction.
     *           NOTE: If you want to upload a second restatement with a different adjusted
     *           value, it must have a new, more recent, adjustment occurrence time.
     *           Otherwise, it will be treated as a duplicate of the previous restatement
     *           and ignored.
     *     @type \Google\Ads\GoogleAds\V4\Services\GclidDateTimePair $gclid_date_time_pair
     *           Uniquely identifies a conversion that was reported without an order ID
     *           specified.
     *     @type \Google\Protobuf\StringValue $order_id
     *           The order ID of the conversion to be adjusted. If the conversion was
     *           reported with an order ID specified, that order ID must be used as the
     *           identifier here.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getConversionAction()
    {
        return isset($this->conversion_action) ? $this->conversion_action : null;
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Returns the unboxed value from <code>getConversionAction()</code>

     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return string|null
     */
    public function getConversionActionUnwrapped()
    {
        return $this->readWrapperValue("conversion_action");
    }

    /**
     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Resource name of the conversion action associated with this conversion
     * adjustment. Note: Although this resource name consists of a customer id and
     * a conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionActionUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_action", $var);
        return $this;}

    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue adjustment_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getAdjustmentDateTime()
    {
        return isset($this->adjustment_date_time) ? $this->adjustment_date_time : null;
    }

    public function hasAdjustmentDateTime()
    {
        return isset($this->adjustment_date_time);
    }

    public function clearAdjustmentDateTime()
    {
        unset($this->adjustment_date_time);
    }

    /**
     * Returns the unboxed value from <code>getAdjustmentDateTime()</code>

     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue adjustment_date_time = 4;</code>
     * @return string|null
     */
    public function getAdjustmentDateTimeUnwrapped()
    {
        return $this->readWrapperValue("adjustment_date_time");
    }

    /**
     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue adjustment_date_time = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdjustmentDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->adjustment_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the adjustment occurred. Must be after the
     * conversion_date_time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue adjustment_date_time = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdjustmentDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("adjustment_date_time", $var);
        return $this;}

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @return int
     */
    public function getAdjustmentType()
    {
        return $this->adjustment_type;
    }

    /**
     * The adjustment type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ConversionAdjustmentTypeEnum.ConversionAdjustmentType adjustment_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAdjustmentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\ConversionAdjustmentTypeEnum\ConversionAdjustmentType::class);
        $this->adjustment_type = $var;

        return $this;
    }

    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.RestatementValue restatement_value = 6;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\RestatementValue|null
     */
    public function getRestatementValue()
    {
        return isset($this->restatement_value) ? $this->restatement_value : null;
    }

    public function hasRestatementValue()
    {
        return isset($this->restatement_value);
    }

    public function clearRestatementValue()
    {
        unset($this->restatement_value);
    }

    /**
     * Information needed to restate the conversion's value.
     * Required for restatements. Should not be supplied for retractions. An error
     * will be returned if provided for a retraction.
     * NOTE: If you want to upload a second restatement with a different adjusted
     * value, it must have a new, more recent, adjustment occurrence time.
     * Otherwise, it will be treated as a duplicate of the previous restatement
     * and ignored.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.RestatementValue restatement_value = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\RestatementValue $var
     * @return $this
     */
    public function setRestatementValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\RestatementValue::class);
        $this->restatement_value = $var;

        return $this;
    }

    /**
     * Uniquely identifies a conversion that was reported without an order ID
     * specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.GclidDateTimePair gclid_date_time_pair = 1;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\GclidDateTimePair|null
     */
    public function getGclidDateTimePair()
    {
        return $this->readOneof(1);
    }

    public function hasGclidDateTimePair()
    {
        return $this->hasOneof(1);
    }

    /**
     * Uniquely identifies a conversion that was reported without an order ID
     * specified.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.GclidDateTimePair gclid_date_time_pair = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\GclidDateTimePair $var
     * @return $this
     */
    public function setGclidDateTimePair($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\GclidDateTimePair::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 2;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getOrderId()
    {
        return $this->readOneof(2);
    }

    public function hasOrderId()
    {
        return $this->hasOneof(2);
    }

    /**
     * Returns the unboxed value from <code>getOrderId()</code>

     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 2;</code>
     * @return string|null
     */
    public function getOrderIdUnwrapped()
    {
        return $this->readWrapperValue("order_id");
    }

    /**
     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The order ID of the conversion to be adjusted. If the conversion was
     * reported with an order ID specified, that order ID must be used as the
     * identifier here.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOrderIdUnwrapped($var)
    {
        $this->writeWrapperValue("order_id", $var);
        return $this;}

    /**
     * @return string
     */
    public function getConversionIdentifier()
    {
        return $this->whichOneof("conversion_identifier");
    }

}

