<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A click conversion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.ClickConversion</code>
 */
class ClickConversion extends \Google\Protobuf\Internal\Message
{
    /**
     * The Google click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     */
    protected $gclid = null;
    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 2;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the conversion occurred. Must be after
     * the click time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 3;</code>
     */
    protected $conversion_date_time = null;
    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 4;</code>
     */
    protected $conversion_value = null;
    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     */
    protected $currency_code = null;
    /**
     * The order ID associated with the conversion. An order id can only be used
     * for one conversion per conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 6;</code>
     */
    protected $order_id = null;
    /**
     * Additional data about externally attributed conversions. This field
     * is required for conversions with an externally attributed conversion
     * action, but should not be set otherwise.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ExternalAttributionData external_attribution_data = 7;</code>
     */
    protected $external_attribution_data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $gclid
     *           The Google click ID (gclid) associated with this conversion.
     *     @type \Google\Protobuf\StringValue $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *           Note: Although this resource name consists of a customer id and a
     *           conversion action id, validation will ignore the customer id and use the
     *           conversion action id as the sole identifier of the conversion action.
     *     @type \Google\Protobuf\StringValue $conversion_date_time
     *           The date time at which the conversion occurred. Must be after
     *           the click time. The timezone must be specified. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *     @type \Google\Protobuf\DoubleValue $conversion_value
     *           The value of the conversion for the advertiser.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Currency associated with the conversion value. This is the ISO 4217
     *           3-character currency code. For example: USD, EUR.
     *     @type \Google\Protobuf\StringValue $order_id
     *           The order ID associated with the conversion. An order id can only be used
     *           for one conversion per conversion action.
     *     @type \Google\Ads\GoogleAds\V4\Services\ExternalAttributionData $external_attribution_data
     *           Additional data about externally attributed conversions. This field
     *           is required for conversions with an externally attributed conversion
     *           action, but should not be set otherwise.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getGclid()
    {
        return isset($this->gclid) ? $this->gclid : null;
    }

    public function hasGclid()
    {
        return isset($this->gclid);
    }

    public function clearGclid()
    {
        unset($this->gclid);
    }

    /**
     * Returns the unboxed value from <code>getGclid()</code>

     * The Google click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @return string|null
     */
    public function getGclidUnwrapped()
    {
        return $this->readWrapperValue("gclid");
    }

    /**
     * The Google click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->gclid = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Google click ID (gclid) associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setGclidUnwrapped($var)
    {
        $this->writeWrapperValue("gclid", $var);
        return $this;}

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 2;</code>
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

     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 2;</code>
     * @return string|null
     */
    public function getConversionActionUnwrapped()
    {
        return $this->readWrapperValue("conversion_action");
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 2;</code>
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

     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionActionUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_action", $var);
        return $this;}

    /**
     * The date time at which the conversion occurred. Must be after
     * the click time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 3;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getConversionDateTime()
    {
        return isset($this->conversion_date_time) ? $this->conversion_date_time : null;
    }

    public function hasConversionDateTime()
    {
        return isset($this->conversion_date_time);
    }

    public function clearConversionDateTime()
    {
        unset($this->conversion_date_time);
    }

    /**
     * Returns the unboxed value from <code>getConversionDateTime()</code>

     * The date time at which the conversion occurred. Must be after
     * the click time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 3;</code>
     * @return string|null
     */
    public function getConversionDateTimeUnwrapped()
    {
        return $this->readWrapperValue("conversion_date_time");
    }

    /**
     * The date time at which the conversion occurred. Must be after
     * the click time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the conversion occurred. Must be after
     * the click time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. “2019-01-01 12:32:45-08:00”.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_date_time", $var);
        return $this;}

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 4;</code>
     * @return \Google\Protobuf\DoubleValue|null
     */
    public function getConversionValue()
    {
        return isset($this->conversion_value) ? $this->conversion_value : null;
    }

    public function hasConversionValue()
    {
        return isset($this->conversion_value);
    }

    public function clearConversionValue()
    {
        unset($this->conversion_value);
    }

    /**
     * Returns the unboxed value from <code>getConversionValue()</code>

     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 4;</code>
     * @return float|null
     */
    public function getConversionValueUnwrapped()
    {
        return $this->readWrapperValue("conversion_value");
    }

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setConversionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->conversion_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue conversion_value = 4;</code>
     * @param float|null $var
     * @return $this
     */
    public function setConversionValueUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_value", $var);
        return $this;}

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : null;
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * Returns the unboxed value from <code>getCurrencyCode()</code>

     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

    /**
     * The order ID associated with the conversion. An order id can only be used
     * for one conversion per conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 6;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getOrderId()
    {
        return isset($this->order_id) ? $this->order_id : null;
    }

    public function hasOrderId()
    {
        return isset($this->order_id);
    }

    public function clearOrderId()
    {
        unset($this->order_id);
    }

    /**
     * Returns the unboxed value from <code>getOrderId()</code>

     * The order ID associated with the conversion. An order id can only be used
     * for one conversion per conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 6;</code>
     * @return string|null
     */
    public function getOrderIdUnwrapped()
    {
        return $this->readWrapperValue("order_id");
    }

    /**
     * The order ID associated with the conversion. An order id can only be used
     * for one conversion per conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->order_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The order ID associated with the conversion. An order id can only be used
     * for one conversion per conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOrderIdUnwrapped($var)
    {
        $this->writeWrapperValue("order_id", $var);
        return $this;}

    /**
     * Additional data about externally attributed conversions. This field
     * is required for conversions with an externally attributed conversion
     * action, but should not be set otherwise.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ExternalAttributionData external_attribution_data = 7;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ExternalAttributionData|null
     */
    public function getExternalAttributionData()
    {
        return isset($this->external_attribution_data) ? $this->external_attribution_data : null;
    }

    public function hasExternalAttributionData()
    {
        return isset($this->external_attribution_data);
    }

    public function clearExternalAttributionData()
    {
        unset($this->external_attribution_data);
    }

    /**
     * Additional data about externally attributed conversions. This field
     * is required for conversions with an externally attributed conversion
     * action, but should not be set otherwise.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ExternalAttributionData external_attribution_data = 7;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ExternalAttributionData $var
     * @return $this
     */
    public function setExternalAttributionData($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ExternalAttributionData::class);
        $this->external_attribution_data = $var;

        return $this;
    }

}

