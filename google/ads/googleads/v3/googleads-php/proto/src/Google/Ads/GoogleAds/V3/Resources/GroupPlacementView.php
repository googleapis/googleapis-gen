<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/group_placement_view.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group placement view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.GroupPlacementView</code>
 */
class GroupPlacementView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placement = null;
    /**
     * Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $display_name = null;
    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $target_url = null;
    /**
     * Output only. Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PlacementTypeEnum.PlacementType placement_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $placement_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the group placement view.
     *           Group placement view resource names have the form:
     *           `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *     @type \Google\Protobuf\StringValue $placement
     *           Output only. The automatic placement string at group level, e. g. web domain, mobile
     *           app ID, or a YouTube channel ID.
     *     @type \Google\Protobuf\StringValue $display_name
     *           Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *     @type \Google\Protobuf\StringValue $target_url
     *           Output only. URL of the group placement, e.g. domain, link to the mobile application in
     *           app store, or a YouTube channel URL.
     *     @type int $placement_type
     *           Output only. Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\GroupPlacementView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
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
     * Output only. The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlacement()
    {
        return isset($this->placement) ? $this->placement : null;
    }

    public function hasPlacement()
    {
        return isset($this->placement);
    }

    public function clearPlacement()
    {
        unset($this->placement);
    }

    /**
     * Returns the unboxed value from <code>getPlacement()</code>

     * Output only. The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getPlacementUnwrapped()
    {
        return $this->readWrapperValue("placement");
    }

    /**
     * Output only. The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlacementUnwrapped($var)
    {
        $this->writeWrapperValue("placement", $var);
        return $this;}

    /**
     * Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDisplayName()
    {
        return isset($this->display_name) ? $this->display_name : null;
    }

    public function hasDisplayName()
    {
        return isset($this->display_name);
    }

    public function clearDisplayName()
    {
        unset($this->display_name);
    }

    /**
     * Returns the unboxed value from <code>getDisplayName()</code>

     * Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getDisplayNameUnwrapped()
    {
        return $this->readWrapperValue("display_name");
    }

    /**
     * Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setDisplayNameUnwrapped($var)
    {
        $this->writeWrapperValue("display_name", $var);
        return $this;}

    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetUrl()
    {
        return isset($this->target_url) ? $this->target_url : null;
    }

    public function hasTargetUrl()
    {
        return isset($this->target_url);
    }

    public function clearTargetUrl()
    {
        unset($this->target_url);
    }

    /**
     * Returns the unboxed value from <code>getTargetUrl()</code>

     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("target_url");
    }

    /**
     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->target_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("target_url", $var);
        return $this;}

    /**
     * Output only. Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PlacementTypeEnum.PlacementType placement_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPlacementType()
    {
        return $this->placement_type;
    }

    /**
     * Output only. Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.PlacementTypeEnum.PlacementType placement_type = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPlacementType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\PlacementTypeEnum\PlacementType::class);
        $this->placement_type = $var;

        return $this;
    }

}

