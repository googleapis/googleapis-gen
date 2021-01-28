<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/extensions.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Promotion extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.PromotionFeedItem</code>
 */
class PromotionFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * A freeform description of what the promotion is targeting.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_target = 1;</code>
     */
    protected $promotion_target = null;
    /**
     * Enum that modifies the qualification of the discount.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier discount_modifier = 2;</code>
     */
    protected $discount_modifier = 0;
    /**
     * Start date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_start_date = 7;</code>
     */
    protected $promotion_start_date = null;
    /**
     * End date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_end_date = 8;</code>
     */
    protected $promotion_end_date = null;
    /**
     * The occasion the promotion was intended for.
     * If an occasion is set, the redemption window will need to fall within
     * the date range associated with the occasion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion occasion = 9;</code>
     */
    protected $occasion = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     * This field is required.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 10;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 11;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     */
    protected $tracking_url_template = null;
    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 13;</code>
     */
    private $url_custom_parameters;
    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 14;</code>
     */
    protected $final_url_suffix = null;
    /**
     * The language of the promotion.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 15;</code>
     */
    protected $language_code = null;
    protected $discount_type;
    protected $promotion_trigger;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $promotion_target
     *           A freeform description of what the promotion is targeting.
     *           This field is required.
     *     @type int $discount_modifier
     *           Enum that modifies the qualification of the discount.
     *     @type \Google\Protobuf\StringValue $promotion_start_date
     *           Start date of when the promotion is eligible to be redeemed.
     *     @type \Google\Protobuf\StringValue $promotion_end_date
     *           End date of when the promotion is eligible to be redeemed.
     *     @type int $occasion
     *           The occasion the promotion was intended for.
     *           If an occasion is set, the redemption window will need to fall within
     *           the date range associated with the occasion.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *           This field is required.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           URL template for constructing a tracking URL.
     *     @type \Google\Ads\GoogleAds\V4\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           A list of mappings to be used for substituting URL custom parameter tags in
     *           the tracking_url_template, final_urls, and/or final_mobile_urls.
     *     @type \Google\Protobuf\StringValue $final_url_suffix
     *           URL template for appending params to landing page URLs served with parallel
     *           tracking.
     *     @type \Google\Protobuf\StringValue $language_code
     *           The language of the promotion.
     *           Represented as BCP 47 language tag.
     *     @type \Google\Protobuf\Int64Value $percent_off
     *           Percentage off discount in the promotion in micros.
     *           One million is equivalent to one percent.
     *           Either this or money_off_amount is required.
     *     @type \Google\Ads\GoogleAds\V4\Common\Money $money_amount_off
     *           Money amount off for discount in the promotion.
     *           Either this or percent_off is required.
     *     @type \Google\Protobuf\StringValue $promotion_code
     *           A code the user should use in order to be eligible for the promotion.
     *     @type \Google\Ads\GoogleAds\V4\Common\Money $orders_over_amount
     *           The amount the total order needs to be for the user to be eligible for
     *           the promotion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * A freeform description of what the promotion is targeting.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_target = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromotionTarget()
    {
        return isset($this->promotion_target) ? $this->promotion_target : null;
    }

    public function hasPromotionTarget()
    {
        return isset($this->promotion_target);
    }

    public function clearPromotionTarget()
    {
        unset($this->promotion_target);
    }

    /**
     * Returns the unboxed value from <code>getPromotionTarget()</code>

     * A freeform description of what the promotion is targeting.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_target = 1;</code>
     * @return string|null
     */
    public function getPromotionTargetUnwrapped()
    {
        return $this->readWrapperValue("promotion_target");
    }

    /**
     * A freeform description of what the promotion is targeting.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_target = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromotionTarget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->promotion_target = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A freeform description of what the promotion is targeting.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_target = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPromotionTargetUnwrapped($var)
    {
        $this->writeWrapperValue("promotion_target", $var);
        return $this;}

    /**
     * Enum that modifies the qualification of the discount.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier discount_modifier = 2;</code>
     * @return int
     */
    public function getDiscountModifier()
    {
        return $this->discount_modifier;
    }

    /**
     * Enum that modifies the qualification of the discount.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionDiscountModifierEnum.PromotionExtensionDiscountModifier discount_modifier = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDiscountModifier($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PromotionExtensionDiscountModifierEnum\PromotionExtensionDiscountModifier::class);
        $this->discount_modifier = $var;

        return $this;
    }

    /**
     * Start date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_start_date = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromotionStartDate()
    {
        return isset($this->promotion_start_date) ? $this->promotion_start_date : null;
    }

    public function hasPromotionStartDate()
    {
        return isset($this->promotion_start_date);
    }

    public function clearPromotionStartDate()
    {
        unset($this->promotion_start_date);
    }

    /**
     * Returns the unboxed value from <code>getPromotionStartDate()</code>

     * Start date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_start_date = 7;</code>
     * @return string|null
     */
    public function getPromotionStartDateUnwrapped()
    {
        return $this->readWrapperValue("promotion_start_date");
    }

    /**
     * Start date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_start_date = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromotionStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->promotion_start_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Start date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_start_date = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPromotionStartDateUnwrapped($var)
    {
        $this->writeWrapperValue("promotion_start_date", $var);
        return $this;}

    /**
     * End date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_end_date = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromotionEndDate()
    {
        return isset($this->promotion_end_date) ? $this->promotion_end_date : null;
    }

    public function hasPromotionEndDate()
    {
        return isset($this->promotion_end_date);
    }

    public function clearPromotionEndDate()
    {
        unset($this->promotion_end_date);
    }

    /**
     * Returns the unboxed value from <code>getPromotionEndDate()</code>

     * End date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_end_date = 8;</code>
     * @return string|null
     */
    public function getPromotionEndDateUnwrapped()
    {
        return $this->readWrapperValue("promotion_end_date");
    }

    /**
     * End date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_end_date = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromotionEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->promotion_end_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * End date of when the promotion is eligible to be redeemed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_end_date = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPromotionEndDateUnwrapped($var)
    {
        $this->writeWrapperValue("promotion_end_date", $var);
        return $this;}

    /**
     * The occasion the promotion was intended for.
     * If an occasion is set, the redemption window will need to fall within
     * the date range associated with the occasion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion occasion = 9;</code>
     * @return int
     */
    public function getOccasion()
    {
        return $this->occasion;
    }

    /**
     * The occasion the promotion was intended for.
     * If an occasion is set, the redemption window will need to fall within
     * the date range associated with the occasion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.PromotionExtensionOccasionEnum.PromotionExtensionOccasion occasion = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setOccasion($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\PromotionExtensionOccasionEnum\PromotionExtensionOccasion::class);
        $this->occasion = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This field is required.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This field is required.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 10;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 11;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : null;
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrlTemplate()</code>

     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @return string|null
     */
    public function getTrackingUrlTemplateUnwrapped()
    {
        return $this->readWrapperValue("tracking_url_template");
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 12;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlTemplateUnwrapped($var)
    {
        $this->writeWrapperValue("tracking_url_template", $var);
        return $this;}

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 13;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 14;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : null;
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * Returns the unboxed value from <code>getFinalUrlSuffix()</code>

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 14;</code>
     * @return string|null
     */
    public function getFinalUrlSuffixUnwrapped()
    {
        return $this->readWrapperValue("final_url_suffix");
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 14;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 14;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFinalUrlSuffixUnwrapped($var)
    {
        $this->writeWrapperValue("final_url_suffix", $var);
        return $this;}

    /**
     * The language of the promotion.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 15;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return isset($this->language_code) ? $this->language_code : null;
    }

    public function hasLanguageCode()
    {
        return isset($this->language_code);
    }

    public function clearLanguageCode()
    {
        unset($this->language_code);
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * The language of the promotion.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 15;</code>
     * @return string|null
     */
    public function getLanguageCodeUnwrapped()
    {
        return $this->readWrapperValue("language_code");
    }

    /**
     * The language of the promotion.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 15;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language of the promotion.
     * Represented as BCP 47 language tag.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 15;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeUnwrapped($var)
    {
        $this->writeWrapperValue("language_code", $var);
        return $this;}

    /**
     * Percentage off discount in the promotion in micros.
     * One million is equivalent to one percent.
     * Either this or money_off_amount is required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value percent_off = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPercentOff()
    {
        return $this->readOneof(3);
    }

    public function hasPercentOff()
    {
        return $this->hasOneof(3);
    }

    /**
     * Returns the unboxed value from <code>getPercentOff()</code>

     * Percentage off discount in the promotion in micros.
     * One million is equivalent to one percent.
     * Either this or money_off_amount is required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value percent_off = 3;</code>
     * @return int|string|null
     */
    public function getPercentOffUnwrapped()
    {
        return $this->readWrapperValue("percent_off");
    }

    /**
     * Percentage off discount in the promotion in micros.
     * One million is equivalent to one percent.
     * Either this or money_off_amount is required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value percent_off = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPercentOff($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Percentage off discount in the promotion in micros.
     * One million is equivalent to one percent.
     * Either this or money_off_amount is required.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value percent_off = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPercentOffUnwrapped($var)
    {
        $this->writeWrapperValue("percent_off", $var);
        return $this;}

    /**
     * Money amount off for discount in the promotion.
     * Either this or percent_off is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.Money money_amount_off = 4;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\Money
     */
    public function getMoneyAmountOff()
    {
        return $this->readOneof(4);
    }

    public function hasMoneyAmountOff()
    {
        return $this->hasOneof(4);
    }

    /**
     * Money amount off for discount in the promotion.
     * Either this or percent_off is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.Money money_amount_off = 4;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\Money $var
     * @return $this
     */
    public function setMoneyAmountOff($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\Money::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A code the user should use in order to be eligible for the promotion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_code = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromotionCode()
    {
        return $this->readOneof(5);
    }

    public function hasPromotionCode()
    {
        return $this->hasOneof(5);
    }

    /**
     * Returns the unboxed value from <code>getPromotionCode()</code>

     * A code the user should use in order to be eligible for the promotion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_code = 5;</code>
     * @return string|null
     */
    public function getPromotionCodeUnwrapped()
    {
        return $this->readWrapperValue("promotion_code");
    }

    /**
     * A code the user should use in order to be eligible for the promotion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_code = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromotionCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * A code the user should use in order to be eligible for the promotion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promotion_code = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPromotionCodeUnwrapped($var)
    {
        $this->writeWrapperValue("promotion_code", $var);
        return $this;}

    /**
     * The amount the total order needs to be for the user to be eligible for
     * the promotion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.Money orders_over_amount = 6;</code>
     * @return \Google\Ads\GoogleAds\V4\Common\Money
     */
    public function getOrdersOverAmount()
    {
        return $this->readOneof(6);
    }

    public function hasOrdersOverAmount()
    {
        return $this->hasOneof(6);
    }

    /**
     * The amount the total order needs to be for the user to be eligible for
     * the promotion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.Money orders_over_amount = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\Money $var
     * @return $this
     */
    public function setOrdersOverAmount($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\Money::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDiscountType()
    {
        return $this->whichOneof("discount_type");
    }

    /**
     * @return string
     */
    public function getPromotionTrigger()
    {
        return $this->whichOneof("promotion_trigger");
    }

}

