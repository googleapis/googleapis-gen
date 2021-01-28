<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/currency_constant.proto

namespace Google\Ads\GoogleAds\V5\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A currency constant.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.CurrencyConstant</code>
 */
class CurrencyConstant extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>string code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $code = null;
    /**
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>string symbol = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $symbol = null;
    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>int64 billable_unit_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $billable_unit_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the currency constant.
     *           Currency constant resource names have the form:
     *           `currencyConstants/{code}`
     *     @type string $code
     *           Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *     @type string $name
     *           Output only. Full English name of the currency.
     *     @type string $symbol
     *           Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *     @type int|string $billable_unit_micros
     *           Output only. The billable unit for this currency. Billed amounts should be multiples of
     *           this value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Resources\CurrencyConstant::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the currency constant.
     * Currency constant resource names have the form:
     * `currencyConstants/{code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>string code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCode()
    {
        return isset($this->code) ? $this->code : '';
    }

    public function hasCode()
    {
        return isset($this->code);
    }

    public function clearCode()
    {
        unset($this->code);
    }

    /**
     * Output only. ISO 4217 three-letter currency code, e.g. "USD"
     *
     * Generated from protobuf field <code>string code = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Full English name of the currency.
     *
     * Generated from protobuf field <code>string name = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>string symbol = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSymbol()
    {
        return isset($this->symbol) ? $this->symbol : '';
    }

    public function hasSymbol()
    {
        return isset($this->symbol);
    }

    public function clearSymbol()
    {
        unset($this->symbol);
    }

    /**
     * Output only. Standard symbol for describing this currency, e.g. '$' for US Dollars.
     *
     * Generated from protobuf field <code>string symbol = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSymbol($var)
    {
        GPBUtil::checkString($var, True);
        $this->symbol = $var;

        return $this;
    }

    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>int64 billable_unit_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getBillableUnitMicros()
    {
        return isset($this->billable_unit_micros) ? $this->billable_unit_micros : 0;
    }

    public function hasBillableUnitMicros()
    {
        return isset($this->billable_unit_micros);
    }

    public function clearBillableUnitMicros()
    {
        unset($this->billable_unit_micros);
    }

    /**
     * Output only. The billable unit for this currency. Billed amounts should be multiples of
     * this value.
     *
     * Generated from protobuf field <code>int64 billable_unit_micros = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setBillableUnitMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->billable_unit_micros = $var;

        return $this;
    }

}

