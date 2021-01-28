<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.ConversionAction</code>
 */
class ConversionAction extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     */
    protected $name = null;
    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     */
    protected $status = 0;
    /**
     * Immutable. The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionTypeEnum.ConversionActionType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     */
    protected $category = 0;
    /**
     * Output only. The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $owner_customer = null;
    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     */
    protected $include_in_conversions_metric = null;
    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     */
    protected $click_through_lookback_window_days = null;
    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     */
    protected $view_through_lookback_window_days = null;
    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     */
    protected $value_settings = null;
    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     */
    protected $counting_type = 0;
    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     */
    protected $attribution_model_settings = null;
    /**
     * Output only. The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.TagSnippet tag_snippets = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $tag_snippets;
    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     */
    protected $phone_call_duration_seconds = null;
    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     */
    protected $app_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the conversion action.
     *           Conversion action resource names have the form:
     *           `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the conversion action.
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the conversion action.
     *           This field is required and should not be empty when creating new
     *           conversion actions.
     *     @type int $status
     *           The status of this conversion action for conversion event accrual.
     *     @type int $type
     *           Immutable. The type of this conversion action.
     *     @type int $category
     *           The category of conversions reported for this conversion action.
     *     @type \Google\Protobuf\StringValue $owner_customer
     *           Output only. The resource name of the conversion action owner customer, or null if this
     *           is a system-defined conversion action.
     *     @type \Google\Protobuf\BoolValue $include_in_conversions_metric
     *           Whether this conversion action should be included in the "conversions"
     *           metric.
     *     @type \Google\Protobuf\Int64Value $click_through_lookback_window_days
     *           The maximum number of days that may elapse between an interaction
     *           (e.g., a click) and a conversion event.
     *     @type \Google\Protobuf\Int64Value $view_through_lookback_window_days
     *           The maximum number of days which may elapse between an impression and a
     *           conversion without an interaction.
     *     @type \Google\Ads\GoogleAds\V3\Resources\ConversionAction\ValueSettings $value_settings
     *           Settings related to the value for conversion events associated with this
     *           conversion action.
     *     @type int $counting_type
     *           How to count conversion events for the conversion action.
     *     @type \Google\Ads\GoogleAds\V3\Resources\ConversionAction\AttributionModelSettings $attribution_model_settings
     *           Settings related to this conversion action's attribution model.
     *     @type \Google\Ads\GoogleAds\V3\Common\TagSnippet[]|\Google\Protobuf\Internal\RepeatedField $tag_snippets
     *           Output only. The snippets used for tracking conversions.
     *     @type \Google\Protobuf\Int64Value $phone_call_duration_seconds
     *           The phone call duration in seconds after which a conversion should be
     *           reported for this conversion action.
     *           The value must be between 0 and 10000, inclusive.
     *     @type \Google\Protobuf\StringValue $app_id
     *           App ID for an app conversion action.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the conversion action.
     * Conversion action resource names have the form:
     * `customers/{customer_id}/conversionActions/{conversion_action_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
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
     * Returns the unboxed value from <code>getName()</code>

     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the conversion action.
     * This field is required and should not be empty when creating new
     * conversion actions.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of this conversion action for conversion event accrual.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionStatusEnum.ConversionActionStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\ConversionActionStatusEnum\ConversionActionStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionTypeEnum.ConversionActionType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Immutable. The type of this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionTypeEnum.ConversionActionType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\ConversionActionTypeEnum\ConversionActionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * The category of conversions reported for this conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCategoryEnum.ConversionActionCategory category = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\ConversionActionCategoryEnum\ConversionActionCategory::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getOwnerCustomer()
    {
        return isset($this->owner_customer) ? $this->owner_customer : null;
    }

    public function hasOwnerCustomer()
    {
        return isset($this->owner_customer);
    }

    public function clearOwnerCustomer()
    {
        unset($this->owner_customer);
    }

    /**
     * Returns the unboxed value from <code>getOwnerCustomer()</code>

     * Output only. The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getOwnerCustomerUnwrapped()
    {
        return $this->readWrapperValue("owner_customer");
    }

    /**
     * Output only. The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOwnerCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->owner_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the conversion action owner customer, or null if this
     * is a system-defined conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue owner_customer = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setOwnerCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("owner_customer", $var);
        return $this;}

    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIncludeInConversionsMetric()
    {
        return isset($this->include_in_conversions_metric) ? $this->include_in_conversions_metric : null;
    }

    public function hasIncludeInConversionsMetric()
    {
        return isset($this->include_in_conversions_metric);
    }

    public function clearIncludeInConversionsMetric()
    {
        unset($this->include_in_conversions_metric);
    }

    /**
     * Returns the unboxed value from <code>getIncludeInConversionsMetric()</code>

     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @return bool|null
     */
    public function getIncludeInConversionsMetricUnwrapped()
    {
        return $this->readWrapperValue("include_in_conversions_metric");
    }

    /**
     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIncludeInConversionsMetric($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->include_in_conversions_metric = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether this conversion action should be included in the "conversions"
     * metric.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue include_in_conversions_metric = 8;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIncludeInConversionsMetricUnwrapped($var)
    {
        $this->writeWrapperValue("include_in_conversions_metric", $var);
        return $this;}

    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getClickThroughLookbackWindowDays()
    {
        return isset($this->click_through_lookback_window_days) ? $this->click_through_lookback_window_days : null;
    }

    public function hasClickThroughLookbackWindowDays()
    {
        return isset($this->click_through_lookback_window_days);
    }

    public function clearClickThroughLookbackWindowDays()
    {
        unset($this->click_through_lookback_window_days);
    }

    /**
     * Returns the unboxed value from <code>getClickThroughLookbackWindowDays()</code>

     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @return int|string|null
     */
    public function getClickThroughLookbackWindowDaysUnwrapped()
    {
        return $this->readWrapperValue("click_through_lookback_window_days");
    }

    /**
     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setClickThroughLookbackWindowDays($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->click_through_lookback_window_days = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum number of days that may elapse between an interaction
     * (e.g., a click) and a conversion event.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value click_through_lookback_window_days = 9;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setClickThroughLookbackWindowDaysUnwrapped($var)
    {
        $this->writeWrapperValue("click_through_lookback_window_days", $var);
        return $this;}

    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getViewThroughLookbackWindowDays()
    {
        return isset($this->view_through_lookback_window_days) ? $this->view_through_lookback_window_days : null;
    }

    public function hasViewThroughLookbackWindowDays()
    {
        return isset($this->view_through_lookback_window_days);
    }

    public function clearViewThroughLookbackWindowDays()
    {
        unset($this->view_through_lookback_window_days);
    }

    /**
     * Returns the unboxed value from <code>getViewThroughLookbackWindowDays()</code>

     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @return int|string|null
     */
    public function getViewThroughLookbackWindowDaysUnwrapped()
    {
        return $this->readWrapperValue("view_through_lookback_window_days");
    }

    /**
     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setViewThroughLookbackWindowDays($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->view_through_lookback_window_days = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The maximum number of days which may elapse between an impression and a
     * conversion without an interaction.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value view_through_lookback_window_days = 10;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setViewThroughLookbackWindowDaysUnwrapped($var)
    {
        $this->writeWrapperValue("view_through_lookback_window_days", $var);
        return $this;}

    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\ConversionAction\ValueSettings
     */
    public function getValueSettings()
    {
        return isset($this->value_settings) ? $this->value_settings : null;
    }

    public function hasValueSettings()
    {
        return isset($this->value_settings);
    }

    public function clearValueSettings()
    {
        unset($this->value_settings);
    }

    /**
     * Settings related to the value for conversion events associated with this
     * conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.ValueSettings value_settings = 11;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\ConversionAction\ValueSettings $var
     * @return $this
     */
    public function setValueSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\ConversionAction\ValueSettings::class);
        $this->value_settings = $var;

        return $this;
    }

    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     * @return int
     */
    public function getCountingType()
    {
        return $this->counting_type;
    }

    /**
     * How to count conversion events for the conversion action.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType counting_type = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCountingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\ConversionActionCountingTypeEnum\ConversionActionCountingType::class);
        $this->counting_type = $var;

        return $this;
    }

    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\ConversionAction\AttributionModelSettings
     */
    public function getAttributionModelSettings()
    {
        return isset($this->attribution_model_settings) ? $this->attribution_model_settings : null;
    }

    public function hasAttributionModelSettings()
    {
        return isset($this->attribution_model_settings);
    }

    public function clearAttributionModelSettings()
    {
        unset($this->attribution_model_settings);
    }

    /**
     * Settings related to this conversion action's attribution model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.ConversionAction.AttributionModelSettings attribution_model_settings = 13;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\ConversionAction\AttributionModelSettings $var
     * @return $this
     */
    public function setAttributionModelSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\ConversionAction\AttributionModelSettings::class);
        $this->attribution_model_settings = $var;

        return $this;
    }

    /**
     * Output only. The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.TagSnippet tag_snippets = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTagSnippets()
    {
        return $this->tag_snippets;
    }

    /**
     * Output only. The snippets used for tracking conversions.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.TagSnippet tag_snippets = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Common\TagSnippet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTagSnippets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\TagSnippet::class);
        $this->tag_snippets = $arr;

        return $this;
    }

    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPhoneCallDurationSeconds()
    {
        return isset($this->phone_call_duration_seconds) ? $this->phone_call_duration_seconds : null;
    }

    public function hasPhoneCallDurationSeconds()
    {
        return isset($this->phone_call_duration_seconds);
    }

    public function clearPhoneCallDurationSeconds()
    {
        unset($this->phone_call_duration_seconds);
    }

    /**
     * Returns the unboxed value from <code>getPhoneCallDurationSeconds()</code>

     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @return int|string|null
     */
    public function getPhoneCallDurationSecondsUnwrapped()
    {
        return $this->readWrapperValue("phone_call_duration_seconds");
    }

    /**
     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPhoneCallDurationSeconds($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->phone_call_duration_seconds = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The phone call duration in seconds after which a conversion should be
     * reported for this conversion action.
     * The value must be between 0 and 10000, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value phone_call_duration_seconds = 15;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPhoneCallDurationSecondsUnwrapped($var)
    {
        $this->writeWrapperValue("phone_call_duration_seconds", $var);
        return $this;}

    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : null;
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
     * Returns the unboxed value from <code>getAppId()</code>

     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        return $this->readWrapperValue("app_id");
    }

    /**
     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * App ID for an app conversion action.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 16;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $this->writeWrapperValue("app_id", $var);
        return $this;}

}

