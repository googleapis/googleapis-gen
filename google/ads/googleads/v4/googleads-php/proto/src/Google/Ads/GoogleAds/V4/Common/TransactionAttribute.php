<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attribute of the store sales transaction.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.TransactionAttribute</code>
 */
class TransactionAttribute extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp when transaction occurred. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue transaction_date_time = 1;</code>
     */
    protected $transaction_date_time = null;
    /**
     * Transaction amount in micros. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_amount_micros = 2;</code>
     */
    protected $transaction_amount_micros = null;
    /**
     * Transaction currency code. ISO 4217 three-letter code is used. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 3;</code>
     */
    protected $currency_code = null;
    /**
     * The resource name of conversion action to report conversions to.
     * Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 4;</code>
     */
    protected $conversion_action = null;
    /**
     * Transaction order id.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 5;</code>
     */
    protected $order_id = null;
    /**
     * Store attributes of the transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.StoreAttribute store_attribute = 6;</code>
     */
    protected $store_attribute = null;
    /**
     * Value of the custom variable for each transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_value = 7;</code>
     */
    protected $custom_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $transaction_date_time
     *           Timestamp when transaction occurred. Required.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\DoubleValue $transaction_amount_micros
     *           Transaction amount in micros. Required.
     *     @type \Google\Protobuf\StringValue $currency_code
     *           Transaction currency code. ISO 4217 three-letter code is used. Required.
     *     @type \Google\Protobuf\StringValue $conversion_action
     *           The resource name of conversion action to report conversions to.
     *           Required.
     *     @type \Google\Protobuf\StringValue $order_id
     *           Transaction order id.
     *           Accessible only to customers on the allow-list.
     *     @type \Google\Ads\GoogleAds\V4\Common\StoreAttribute $store_attribute
     *           Store attributes of the transaction.
     *           Accessible only to customers on the allow-list.
     *     @type \Google\Protobuf\StringValue $custom_value
     *           Value of the custom variable for each transaction.
     *           Accessible only to customers on the allow-list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Timestamp when transaction occurred. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue transaction_date_time = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getTransactionDateTime()
    {
        return isset($this->transaction_date_time) ? $this->transaction_date_time : null;
    }

    public function hasTransactionDateTime()
    {
        return isset($this->transaction_date_time);
    }

    public function clearTransactionDateTime()
    {
        unset($this->transaction_date_time);
    }

    /**
     * Returns the unboxed value from <code>getTransactionDateTime()</code>

     * Timestamp when transaction occurred. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue transaction_date_time = 1;</code>
     * @return string|null
     */
    public function getTransactionDateTimeUnwrapped()
    {
        return $this->readWrapperValue("transaction_date_time");
    }

    /**
     * Timestamp when transaction occurred. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue transaction_date_time = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTransactionDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->transaction_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Timestamp when transaction occurred. Required.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue transaction_date_time = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTransactionDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("transaction_date_time", $var);
        return $this;}

    /**
     * Transaction amount in micros. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_amount_micros = 2;</code>
     * @return \Google\Protobuf\DoubleValue|null
     */
    public function getTransactionAmountMicros()
    {
        return isset($this->transaction_amount_micros) ? $this->transaction_amount_micros : null;
    }

    public function hasTransactionAmountMicros()
    {
        return isset($this->transaction_amount_micros);
    }

    public function clearTransactionAmountMicros()
    {
        unset($this->transaction_amount_micros);
    }

    /**
     * Returns the unboxed value from <code>getTransactionAmountMicros()</code>

     * Transaction amount in micros. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_amount_micros = 2;</code>
     * @return float|null
     */
    public function getTransactionAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("transaction_amount_micros");
    }

    /**
     * Transaction amount in micros. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_amount_micros = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setTransactionAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->transaction_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Transaction amount in micros. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_amount_micros = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setTransactionAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("transaction_amount_micros", $var);
        return $this;}

    /**
     * Transaction currency code. ISO 4217 three-letter code is used. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 3;</code>
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

     * Transaction currency code. ISO 4217 three-letter code is used. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 3;</code>
     * @return string|null
     */
    public function getCurrencyCodeUnwrapped()
    {
        return $this->readWrapperValue("currency_code");
    }

    /**
     * Transaction currency code. ISO 4217 three-letter code is used. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 3;</code>
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

     * Transaction currency code. ISO 4217 three-letter code is used. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue currency_code = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCurrencyCodeUnwrapped($var)
    {
        $this->writeWrapperValue("currency_code", $var);
        return $this;}

    /**
     * The resource name of conversion action to report conversions to.
     * Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 4;</code>
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

     * The resource name of conversion action to report conversions to.
     * Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 4;</code>
     * @return string|null
     */
    public function getConversionActionUnwrapped()
    {
        return $this->readWrapperValue("conversion_action");
    }

    /**
     * The resource name of conversion action to report conversions to.
     * Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 4;</code>
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

     * The resource name of conversion action to report conversions to.
     * Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionActionUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_action", $var);
        return $this;}

    /**
     * Transaction order id.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 5;</code>
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

     * Transaction order id.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 5;</code>
     * @return string|null
     */
    public function getOrderIdUnwrapped()
    {
        return $this->readWrapperValue("order_id");
    }

    /**
     * Transaction order id.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 5;</code>
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

     * Transaction order id.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue order_id = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOrderIdUnwrapped($var)
    {
        $this->writeWrapperValue("order_id", $var);
        return $this;}

    /**
     * Store attributes of the transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.StoreAttribute store_attribute = 6;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\StoreAttribute|null
     */
    public function getStoreAttribute()
    {
        return isset($this->store_attribute) ? $this->store_attribute : null;
    }

    public function hasStoreAttribute()
    {
        return isset($this->store_attribute);
    }

    public function clearStoreAttribute()
    {
        unset($this->store_attribute);
    }

    /**
     * Store attributes of the transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.StoreAttribute store_attribute = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\StoreAttribute $var
     * @return $this
     */
    public function setStoreAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\StoreAttribute::class);
        $this->store_attribute = $var;

        return $this;
    }

    /**
     * Value of the custom variable for each transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_value = 7;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getCustomValue()
    {
        return isset($this->custom_value) ? $this->custom_value : null;
    }

    public function hasCustomValue()
    {
        return isset($this->custom_value);
    }

    public function clearCustomValue()
    {
        unset($this->custom_value);
    }

    /**
     * Returns the unboxed value from <code>getCustomValue()</code>

     * Value of the custom variable for each transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_value = 7;</code>
     * @return string|null
     */
    public function getCustomValueUnwrapped()
    {
        return $this->readWrapperValue("custom_value");
    }

    /**
     * Value of the custom variable for each transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_value = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->custom_value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Value of the custom variable for each transaction.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_value = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomValueUnwrapped($var)
    {
        $this->writeWrapperValue("custom_value", $var);
        return $this;}

}

