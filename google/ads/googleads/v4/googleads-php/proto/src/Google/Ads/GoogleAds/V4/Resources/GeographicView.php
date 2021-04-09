<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/geographic_view.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geographic view.
 * Geographic View includes all metrics aggregated at the country level,
 * one row per country. It reports metrics at either actual physical location of
 * the user or an area of interest. If other segment fields are used, you may
 * get more than one row per country.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.GeographicView</code>
 */
class GeographicView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $location_type = 0;
    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $country_criterion_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the geographic view.
     *           Geographic view resource names have the form:
     *           `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *     @type int $location_type
     *           Output only. Type of the geo targeting of the campaign.
     *     @type \Google\Protobuf\Int64Value $country_criterion_id
     *           Output only. Criterion Id for the country.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\GeographicView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the geographic view.
     * Geographic view resource names have the form:
     * `customers/{customer_id}/geographicViews/{country_criterion_id}~{location_type}`
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
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Output only. Type of the geo targeting of the campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingTypeEnum.GeoTargetingType location_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\GeoTargetingTypeEnum\GeoTargetingType::class);
        $this->location_type = $var;

        return $this;
    }

    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getCountryCriterionId()
    {
        return isset($this->country_criterion_id) ? $this->country_criterion_id : null;
    }

    public function hasCountryCriterionId()
    {
        return isset($this->country_criterion_id);
    }

    public function clearCountryCriterionId()
    {
        unset($this->country_criterion_id);
    }

    /**
     * Returns the unboxed value from <code>getCountryCriterionId()</code>

     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getCountryCriterionIdUnwrapped()
    {
        return $this->readWrapperValue("country_criterion_id");
    }

    /**
     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCountryCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->country_criterion_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. Criterion Id for the country.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value country_criterion_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCountryCriterionIdUnwrapped($var)
    {
        $this->writeWrapperValue("country_criterion_id", $var);
        return $this;}

}

